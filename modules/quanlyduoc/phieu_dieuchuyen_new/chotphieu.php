<?php
$data= new SQLServer;//tao lop ket noi SQL
$params_del = array ($_SESSION["user"]["id_user"],$_GET['id_phieuxuatnoibo']);
$store_name_del="{call GD2_ChotPhieuXuatNoiBo(?,?)}";
$del=$data->query( $store_name_del, $params_del);

?>