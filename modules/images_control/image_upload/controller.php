<?php

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Update_filedoc(?,?)}";//tao bien khai bao store
    $params = array($_POST['id_kham'],$_POST['search_string']);
      // print_r($_POST) ;
	$data->query( $store_name, $params);//Goi store	


?>

