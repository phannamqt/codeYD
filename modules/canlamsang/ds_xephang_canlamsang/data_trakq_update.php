<?php

//print_r($_GET);
//print_r(count($_GET));
	$data= new SQLServer;//tao lop ket noi SQL -------"Y-m-d H:i"
	$param1= $_GET["ID_LuotKham"];
	if($_GET["date_NgayGioTraKQ"]!=""){
		$param2=convert_date($_GET["date_NgayGioTraKQ"]." ".$_GET["time_NgayGioTraKQ"]);
	}
	else $param2=NULL;
	
	if(count($_GET)==7&&$_GET["xoaID"]==1)
		$param3=NULL;
	else
	    $param3= $_SESSION["user"]["id_user"];
	//$param5= $_SESSION["user"]["id_user"];
	$params = array($param1,$param2,$param3);//tao param cho store 
	//print_r($params);
	$store_name="{call GD2ThongTinLuotKham_UpdateGioTraKQ(?,?,?)}";//tao bien khai bao store
	$data->query( $store_name,$params);//Goi store
?>