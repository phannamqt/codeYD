<?php
//print_r($_POST['pass']);
//$bien=md5($_SESSION["user"]["id_user"].''.$_POST['pass'].''.'123@qwe');
$bien=$_POST['pass'];
$data= new SQLServer;
$param1=$_SESSION["user"]["id_user"];
$store_name="{call Med_GetPassword(?)}";
$params = array($param1);
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$count=  count($tam);
//print_r($bien);
//print_r(md5(123));
    if($bien==$tam[0]["web_password"]){
		echo 1;
	
    }else{
		echo 0;
	}
  
?>