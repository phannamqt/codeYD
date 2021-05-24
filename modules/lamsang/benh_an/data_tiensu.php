<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array( $_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call spTienSuBenh_SelectAllByID_BenhNhan(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if(count($tam)>0){
echo $tam[0]['TienSu'].';'. $tam[0]['TienSuNguoiThan'].';'. $tam[0]['DiUng'].';'. $tam[0]['ID_TienSuBenh'];
}
?>
