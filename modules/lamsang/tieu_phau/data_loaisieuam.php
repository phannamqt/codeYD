<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array('tieu_phau',$_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_PhieuPTTT_KhamGetDataByTenFormAndIDBenhNhan(?,?)}";//tao bien khai bao store
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
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],
	$row["TenLoaiKham"],
	$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
	$row["ID_LoaiKham"],
	$row["BSChiDinh"],//4
	$row["ID_LuotKham"],
	$row["MoTa"],
	$row["KetLuan"],
    $row["ChanDoan"],//chan doan
    $row["ID_TrangThai"],//9
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["BSChiDinh"],//14
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
    $row["MaBenhNhan"],
	$row["ptvphu1"],//19
	$row["bsgmhs1"],
	$row["bsgmhs2"],
	$row["ktvgmhs1"],
	$row["ptvphu2"],//23
	$row["ID_NguoiTraKQ"],

	);
    $i++; 
}
echo json_encode($responce);
?>