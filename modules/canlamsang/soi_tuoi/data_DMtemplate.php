<?php

/* $page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction */

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call spDM_Template_SelectAllByID_LoaiKhamFromGroup(?,?)}";//tao bien khai bao store
$params = array($_GET['loaikham'],'');
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Template"];
	//$lines = substr($row["NoiDung"], 0, ( strpos($row["NoiDung"], PHP_EOL, 0) ) - 0);;
    $responce->rows[$i]['cell']=array($row["TenTemplate"],$row["NoiDung"],$row["LoiKhuyen"]);
    $i++; 
}   
echo json_encode($responce);
?>