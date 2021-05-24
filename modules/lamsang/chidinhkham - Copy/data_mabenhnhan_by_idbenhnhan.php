<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];

$store_name="{call GD2_SelectAllHenTraByID_BenhNhan(?)}";//tao bien khai bao store
//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
$params = array($param1);//tao param cho store 
//print_r($params) ;
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);

$responce='';
$kiemtra=true;


$i=0;
if($_GET["ac"]=="cokq"){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		if($row["NgayGioDuKienTraKQ"]=="")
			$responce="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		else
	   		$responce=$row["NgayGioDuKienTraKQ"]->format('H:i d-m-Y');
		 
		$i++; 
	} 
	echo $responce;
}
if($_GET["ac"]=="henkq"){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		if($row["NgayGioHenTraKQ"]=="")
			$responce="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		else
	  		$responce=$row["NgayGioHenTraKQ"]->format('H:i d-m-Y');
		 
		$i++; 
	} 
	echo $responce;
}
if($_GET["ac"]=="idluotkham"){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		
	   $responce=$row["ID_LuotKham"];
		 
		$i++; 
	} 
	echo $responce;
}

?>