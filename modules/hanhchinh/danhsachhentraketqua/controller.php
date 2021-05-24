<?php
switch ($_GET["oper"]) {
    case "edit":
		edit();
		break;
}
function edit(){	
	$data= new SQLServer;
	
	if(!isset($_POST['DaTraKQ']) || $_POST['DaTraKQ']==''){
		$_POST['DaTraKQ']=0;	
	}else{
		$_POST['DaTraKQ']=$_POST['DaTraKQ'];	
	}
	$store_name="{call GD2_ThongTinLuotKhamUpdateDaTraKQ (?,?,?,?)}";
	$params = array(
					$_POST['ID_LuotKham'],//@AutoId int,
					$_POST['DaTraKQ'],//@CoBHXH bit,
					$_SESSION["user"]["id_user"],//@IdUser_login int,
					$_SERVER['REMOTE_ADDR'],//@IP nvarchar(30)
					);
	$data->query( $store_name, $params);
}
?>