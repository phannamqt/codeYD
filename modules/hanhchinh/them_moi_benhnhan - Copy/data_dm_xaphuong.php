<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_xaphuong_autocomplex()}";//tao bien khai bao store
$params = array();
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
	$responce->rows[$i]['id']=0;
    $responce->rows[$i]['cell']=array('','','',0,0);
$i=1;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row['id'];
    $responce->rows[$i]['cell']=array($row['label'],$row['TenQuanHuyen'],$row['TenTinhThanhPho'],$row['ID_QuanHuyen'],$row['ID_ThanhPho']);
    $i++; 
}   
echo json_encode($responce);
?>