<?php
switch ($_GET["oper"]) {
	case "edit":
		edit();
	break;
}	 
function edit(){
	$check1=""; 
	$bien=$_POST['mkmoi'];
	$data= new SQLServer;
	$store_name="{call MED_DoiMatKhau_Update (?,?)}";
	$params = array($bien,$_SESSION["user"]["id_user"]);
	$get=$data->query( $store_name, $params);
}
?>

