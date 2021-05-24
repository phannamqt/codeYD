<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Get_ICD10New()}";//tao bien khai bao store
$params = array();
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$chuoi='';
for($i=0;$i<count($tam);$i++){
	if($i==0){
		$cach='';
	}else{
		$cach=';';
	}
    $chuoi=$chuoi.$cach.$tam[$i]["CICD10"].':'.$tam[$i]["CICD10"];
}   
echo $chuoi;
?>