<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_GET['idnhapkho'],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_XuatDieuChuyen_PhieuNhap_Duyet(?,?)}";//tao bien khai bao store
	$check=$data->query( $store_name, $params);
	echo $check;
?>