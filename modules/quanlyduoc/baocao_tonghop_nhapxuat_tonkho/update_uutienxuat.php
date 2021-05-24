<?php
$data= new SQLServer;
$store_name="{call GD2_In_Up_DMLoThuoc_UuTienXuat(?,?,?)}";
$params = array($_GET['idthuoc'],$_GET['solohethong'],$_SESSION["user"]["id_user"]);
$rs=$data->query( $store_name, $params);
echo $rs;
?>