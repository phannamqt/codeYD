<?php
$data= new SQLServer;
$store_name="{call GD2_Map_TheBHYT_ThePhu_SelectIDLuotKham (?)}";
$params = array($_GET['id_luotkham']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce ='';
$i=0;

foreach ($tam as $row) {
	$responce[]=
	array(
		'ID_TheBHYT_Map' => $row["ID_TheBHYT_Map"],
		'ID_LuotKham' => $row["ID_LuotKham"],
		'ID_The' => $row["ID_The_2"],
		
		);
	$i++; 
}  
echo json_encode($responce);
?>