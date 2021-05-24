<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array('do_loang_xuong_bmd',$_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_BMD_Select_ByIdBenhNhan(?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
     if($row["NgayGioSua"]!='')
			$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioSua"]='';
    if($row["NgayGioHenTraKQ"]!='')
            $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHenTraKQ"]='';
     if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
    if($row["NgayGioChanDoan"]!='')
            $row["NgayGioChanDoan"]=$row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioChanDoan"]='';
	if($row["ChiSo11"]==NULL) $row["ChiSo11"]='';
	if($row["ChiSo12"]==NULL) $row["ChiSo12"]='';
	if($row["ChiSo13"]==NULL) $row["ChiSo13"]='';
	if($row["ChiSo14"]==NULL) $row["ChiSo14"]='';
    if($row["ID_KQCLS_11"]==NULL) $row["ID_KQCLS_11"]=''  ;  
	if($row["ID_KQCLS_12"]==NULL) $row["ID_KQCLS_12"]=''  ; 
	if($row["ID_KQCLS_13"]==NULL) $row["ID_KQCLS_13"]=''  ; 
	if($row["ID_KQCLS_14"]==NULL) $row["ID_KQCLS_14"]=''  ;   
   
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],
	$row["TenLoaiKham"],
	$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
	$row["ID_LoaiKham"],
	$row["NguoiChiDinh"],
	$row["ID_LuotKham"],
	$row["ChiSo11"],
	$row["ChiSo12"],
    $row["ChiSo13"],
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["BsChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
	$row["ChiSo14"],
	$row["ID_KQCLS_11"],
	$row["ID_KQCLS_12"],
	$row["ID_KQCLS_13"],
	$row["ID_KQCLS_14"]
	);
    $i++; 
}
echo json_encode($responce);
?>
