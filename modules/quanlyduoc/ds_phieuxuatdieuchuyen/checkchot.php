<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_PhieuXuatNoiBo_CheckChot(?)}";//tao bien khai bao store
$params = array($_GET['id_phieuxuatnoibo']);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if($tam[0]['ChotPhieu']==1){
		echo 'true';
}else{
		echo 'false';
	}
?>