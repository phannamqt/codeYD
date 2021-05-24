<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call  GD2_Kham_SelectDieuTriByID_LuotKham(?,?)}";//tao bien khai bao store
$params = array($_GET["ID_LuotKham"],'HuyBo');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['cell']=array($row["ID_Kham"],$row["MaVietTat"]);
    $i++; 
}   
echo json_encode($responce);
?>