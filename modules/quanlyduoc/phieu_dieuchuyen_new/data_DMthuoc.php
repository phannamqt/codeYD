<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call MED_DSThuocTheoKho(?)}";//tao bien khai bao store
$params = array($_GET["id_kho"]);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;

foreach ($tam as $row) {
	if($row["NgayHetHan"]==""){
		$row["NgayHetHan"]=$row["NgayHetHan"]; 
	 }else{
		$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
	 }	
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(
    	$row["TenGoc"],
    	$row["TenNhomThuoc"],
    	$row["MaThuoc"],
    	$row["TenDayDu"],
    	$row["TenNhaSanXuat"],
    	$row["HoatChatChinh"],
    	$row["SignNumber"],
    	$row["TenDonViTinh"],
    	$row["QuyCach"],
    	$row["SoLoNhaSanXuat"],
    	$row["NgayHetHan"]
    );
    $i++; 
}   
echo json_encode($responce);

?>