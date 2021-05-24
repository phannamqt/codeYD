<?php
switch ($_GET["oper"]) {
  case "edit":
        edit();
        break;
}	 
function edit(){
       $check1="";
	  // $bien=md5($_SESSION["user"]["id_user"].''.$_POST['mkmoi'].''.'123@qwe');
	   $bien=$_POST['mkmoi'];
	  $data= new SQLServer;
        $store_name="{call GD2_HT_DoiMatKhau_Update (?,?)}";
        $params = array($bien,$_SESSION["user"]["id_user"]);
		$get=$data->query( $store_name, $params);
}
?>

