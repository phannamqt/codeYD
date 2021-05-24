<?php

$data= new SQLServer;

$param1=$_GET["tengoikham"];
$param2=$_GET["mota"];
$param3=$_GET["sotiendk"];
$param4=$_GET["ghichu"];
$param5=$_GET["id"];
$param6=$_SESSION["id_user"];
$store_name="{call GD2_DMGoiKham_Update(?,?,?,?,?,?)}";
$params = array($param1,$param2,$param3,$param4,$param5,$param6);

$get_lich=$data->query( $store_name, $params);

?>
