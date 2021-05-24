<?php

$data= new SQLServer;
$store_name="{call GD2_donthuocmauchitiet(?)}";
$params = array($_GET['id_donthuoc']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(	
	$row["ID_Thuoc"],
	$row["LieuDungHangNgay"],
	$row["CachDung"]	,
	2,
	$row["ID_DuongDungThuoc"],
	$row["LieuDungHangNgay"]*$_GET['ngaythuoc'],
	$row["TenGoc"]
	);
    $i++; 
}   
echo json_encode($responce);
?>