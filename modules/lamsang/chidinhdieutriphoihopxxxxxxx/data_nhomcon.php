<?php
$data= new SQLServer;

if(isset($_GET["ac"]) && $_GET["ac"]=="phy"){
$store_name="{call GD2_LoaiKham_theonhom_PHYSIOTHERAPY_get()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 

$i=0;

 foreach ($tam as $row) {
 $responce[$i] = array('id' => $row["ID_LoaiKham"], 'ID_Physiotherapy' => $row["ID_Physiotherapy"]);  
  $i++; 
 }   
 echo json_encode($responce);
}

elseif(isset($_GET["ac"]) && $_GET["ac"]=="dtph"){
$store_name="{call GD2_LoaiKham_theonhom_DieuTriPhoiHop_get()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 

$i=0;

 foreach ($tam as $row) {
 $responce[$i] = array('id' => $row["ID_LoaiKham"], 'ID_DieuTriPhoiHop' => $row["ID_DieuTriPhoiHop"]);  
  $i++; 
 }   
 echo json_encode($responce);
}
?>