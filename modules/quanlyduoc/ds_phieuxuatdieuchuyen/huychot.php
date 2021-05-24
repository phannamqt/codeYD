<?php
$data= new SQLServer;//tao lop ket noi SQL
$params_del = array ($_GET['id_phieu']);
$store_name_del="{call GD2_HuyChotPhieuXuatNoiBo(?)}";
$del=$data->query( $store_name_del, $params_del);

?>