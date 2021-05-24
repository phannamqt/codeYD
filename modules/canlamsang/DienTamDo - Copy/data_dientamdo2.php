<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array('DienTamDo',$_GET["idbenhnhan"],$_GET["idkham"]);//tao param cho store 
$store_name="{call GD2_ECG_Select_ByIdBenhNhan_and_ID_Kham(?,?,?)}";//tao bien khai bao store
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
	if($row["ChiSo15"]==NULL) $row["ChiSo15"]='';
	if($row["ChiSo16"]==NULL) $row["ChiSo16"]='';
	if($row["ChiSo17"]==NULL) $row["ChiSo17"]='';
	if($row["ChiSo18"]==NULL) $row["ChiSo18"]='';
	if($row["ChiSo19"]==NULL) $row["ChiSo19"]='';
	if($row["ChiSo20"]==NULL) $row["ChiSo20"]='';
	 if($row["ID_KQCLS_15"]==NULL) $row["ID_KQCLS_15"]=''  ;  
	  if($row["ID_KQCLS_16"]==NULL) $row["ID_KQCLS_16"]=''  ;  
	   if($row["ID_KQCLS_17"]==NULL) $row["ID_KQCLS_17"]=''  ;  
	    if($row["ID_KQCLS_18"]==NULL) $row["ID_KQCLS_18"]=''  ;  
		 if($row["ID_KQCLS_19"]==NULL) $row["ID_KQCLS_19"]=''  ;  
		  if($row["ID_KQCLS_20"]==NULL) $row["ID_KQCLS_20"]=''  ;    
          
   
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],
	$row["TenLoaiKham"],
	$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
	$row["ID_LoaiKham"],
	$row["NguoiChiDinh"],
	$row["ID_LuotKham"],
	$row["ChiSo15"],
	$row["ChiSo16"],
    $row["ChiSo17"],
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["BsChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
	$row["ChiSo18"],
	$row["ChiSo19"],
	$row["ChiSo20"],
	$row["KetLuan"],
	$row["ExtField1"],
	$row["ID_KQCLS_15"],
	$row["ID_KQCLS_16"],
	$row["ID_KQCLS_17"],
	$row["ID_KQCLS_18"],
	$row["ID_KQCLS_19"],
	$row["ID_KQCLS_20"],
	$row["SoNgayLuuHinhKQ"]
	);
    $i++; 
}
echo json_encode($responce);
?>