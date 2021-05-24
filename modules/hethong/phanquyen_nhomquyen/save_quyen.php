<?php
//print_r($_POST);
$data= new SQLServer;
$params=array($_GET['id_nhomquyen']);
$get=$data->query( "{call GD2_grouppermission_Del(?)}", $params);


$pieces = explode(",", $_GET['id_control']);


for ($i=0;$i<=count($pieces)-1;$i++) { 	
print_r($_GET);

			unset ($params1) ;
			$store_name1="{call GD2_Add_yes_grouppermission (?,?)}";
			$params1 = array($_GET['id_nhomquyen'],$pieces[$i]);
			$get1=$data->query( $store_name1, $params1);
}
?>