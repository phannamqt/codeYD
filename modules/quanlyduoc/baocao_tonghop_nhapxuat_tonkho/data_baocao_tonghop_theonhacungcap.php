<?php

$data= new SQLServer;//tao lop ket noi SQL

$ngaybd=$_GET["from_day"];
$ngaykt=$_GET["to_day"]; //04/30/2014  //1/4/14
$ngaybatdau= convert_date($ngaybd);
$ngayketthuc= convert_date($ngaykt);
$id_ncc="And ID_NCC=".$_GET["idncc"];
//'04/01/2014','04/30/2014'
//'04/01/2014' [1] => '04/30/2014' 
$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],$id_ncc,$_GET["n_order"]);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;
 
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["NgayHetHan"]!=''){
	$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
}
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["ID_Thuoc"],
	$row["MaThuoc"],
	$row["TenBietDuoc"],
	$row["TenBietDuoc"],
	$row["TenDonViTinh"],
	$row["SoLo"],
	$row["SoLoNhaSanXuat"],
	$row["DonGia"],
	$row["GiaBan"],
	$row["SL_TD"],
	$row["TT_TD"],
	$row["SL_N"],
	$row["TT_N"],
	$row["SL_X"],
	$row["TT_X"],
	$row["SL_TON"],
	$row["TT_TON"],
	$row["NgayHetHan"],
	$row["STT_UUTIEN"],
	$row["ID_NCC"],
	$row["TenNCC"],
	'');
    $i++; 
}   
echo json_encode($responce);
?>