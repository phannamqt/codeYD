<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_kiemtra_thanhtoan_benhan(?,?)}";//tao bien khai bao store
$params = array($_GET['id_kham'],$_GET['id_donthuoc']);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 


echo $tam[0][0].'||'.$tam[0][1];
?>