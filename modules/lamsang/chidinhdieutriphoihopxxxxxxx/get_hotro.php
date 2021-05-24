<?php
$data= new SQLServer; 

$store_name_x="{call GD2_GetHoTroBHYTByLuotKham(?)}";
$params_x = array($_GET['idluotkham']);
$get_x=$data->query( $store_name_x, $params_x);
$excute_x= new SQLServerResult($get_x);
$tam_x= $excute_x->get_as_array();
echo $tam_x[0]['HoTro'];

?>