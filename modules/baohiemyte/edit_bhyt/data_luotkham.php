<?php
if($_GET['mabenhnhan']!=''){
$data= new SQLServer;
$store_name="{call GD2_BHYT_Chuathanhtoan(?)}";
$params = array($_GET['mabenhnhan']);
$get_danh_muc_phong_ban=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array(	
		$row["LoaiDoiTuongKham"]
		,$row["HoTenBenhNhan"]
		,$row["TenPhanLoaiKham"]
		,$row["SoThe"]
		,$row["Ma_KCB_BanDau"]
		,$row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"])
		,$row["DaThanhToanBill"]
		,$row["NgayBaoHiem"]
		,$row["ID_LuotKham"]
		,$row["ID_ThuTraNo"]
	);		
    $i++; 
}   
echo json_encode($responce);
}
?>