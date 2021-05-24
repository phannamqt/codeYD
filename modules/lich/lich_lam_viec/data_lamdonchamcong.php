<?php 
$id_nhanvien=$_GET['ID_NhanVien'];
$iddonsuco=$_GET['ID_don'];
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_lichsucoxem_byid (?,?)}";//tao bien khai bao store
$params = array($id_nhanvien,$iddonsuco);
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

print_r($tam);


?>