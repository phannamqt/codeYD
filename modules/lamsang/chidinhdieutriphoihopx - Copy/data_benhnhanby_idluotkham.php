<?php
$data= new SQLServer;//tao lop ket noi SQL 
$param1=$_GET["id"];
$store_name="{call GD2_SelectBenhNhanByID_LuotKham(?)}";//tao bien khai bao store
$params = array($param1);//tao param cho store 
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce=';;'.$tam[0]["ID_BenhNhan"].';;'.$tam[0]["MaBenhNhan"].';;'.$tam[0]["HoLotBenhNhan"]." ".$tam[0]["TenBenhNhan"];
echo $responce;
?>