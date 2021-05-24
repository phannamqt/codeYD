<?php
$data= new SQLServer;
$params = array($_GET['mabenhnhan'],convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
//print_r($params);
$store_name="{call GD2_GetAllTienGioiThieuChiTiet(?,?,?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
	if($row["ThoiGianVaoKham"]!='')
		$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    $responce->rows[$i]['id']=$row["ID_ThanhToan"];
    $responce->rows[$i]['cell']=array($row["MaNguoiGT"],$row["HoLotNguoiGT"].' '.$row["TenNguoiGT"],$row["MaBenhNhan"],$row["HoLotBenhNhan"].' '.$row["TenBenhNhan"],
	$row["TongTienPhaiTra"],$row["SoTienThanhToan"],$row["ThoiGianVaoKham"],
	);
    $i++; 
}
echo json_encode($responce);
?>