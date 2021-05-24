<?php

//print_r($_GET);
	$data= new SQLServer;//tao lop ket noi SQL -------"Y-m-d H:i"
	$param1= $_GET["ID_LuotKham"];
	if($_GET["date_NgayGioHenTraKQ"]!=""){
		$param2=convert_date($_GET["date_NgayGioHenTraKQ"]." ".$_GET["time_NgayGioHenTraKQ"]);
	}
	else $param2=NULL;
	$param3= $_SESSION["user"]["id_user"];
	$params = array($param1,$param2,$param3);//tao param cho store 
	$store_name="{call GD2ThongTinLuotKham_UpdateGioHenTraKQ(?,?,?)}";//tao bien khai bao store
	$data->query( $store_name,$params);//Goi store
?>