<?php
$data= new SQLServer;
$store_name="{call GD2_CLS_SelectDM_Control()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 

$i=0;


 foreach ($tam as $row) {
	$PageOpen= explode(":",$row["PageOpen"]);
 $responce[$i] = array('id' => $row["ID_Control"], 'ID_Control' => $row["ID_Control"], 'PageOpen' => $PageOpen[0]);  
  $i++; 
 }   
 echo json_encode($responce);

?>