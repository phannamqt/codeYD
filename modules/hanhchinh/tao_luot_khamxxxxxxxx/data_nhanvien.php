<?php

$data= new SQLServer;

 
$store_name="{call GD2_DM_nhanvien_get_hotenphongban ()}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

 	$responce->rows[$i]['id']=$row["id"];
    $responce->rows[$i]['cell']=array($row["label"],$row["hoten"]);        
    $i++; 
}  
echo json_encode($responce);
?>