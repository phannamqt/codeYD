<?php

$data= new SQLServer;
$store_name="{call [GD2_DM_MaKBC_SelectAll] ()}";
$params = array();
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {

   $responce->rows[$i]['id']=$row["Ma_KCB_BanDau"];
    $responce->rows[$i]['cell']=array(
	
		$row["Ma_KCB_BanDau"],
		$row["Ten_KCB_BanDau"],
        $row["MaTinh"]
            );
     
    $i++; 
}  
echo json_encode($responce);
?>