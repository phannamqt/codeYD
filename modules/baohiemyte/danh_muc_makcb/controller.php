<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_MaKCB_Update");
        break;
    case "edit":
        edit("GD2_MaKCB_Update");
        break;
    case "del":
        del("GD2_Del_DM_MaKCB");
        break;
}	 		 

function add($store_name){	
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_MaKCB_Update] (?,?,?,?)}";//tao bien khai bao store
	$params = array(($_POST["Ten_kcb"]),($_POST["MaTinh"]),($_POST["Ma_KCB"]),$_SESSION["user"]["id_user"]);
			   //print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
function edit($store_name){
	$data= new SQLServer;
	$store_name="{call [GD2_MaKCB_Update] (?,?,?,?)}";
        $bien=  array(($_POST["Ten_kcb"]),($_POST["MaTinh"]),($_POST["Ma_KCB"]),$_SESSION["user"]["id_user"]);
	
		//print_r($params);
		$params = $bien;
		//print_r ($params);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
}
function del($store_name){
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                ($_POST["Ma_KCB"]),
				 array($_SESSION["id_user"],SQLSRV_PARAM_IN),
                 array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	print_r($params);
	echo $check1;
}
?>

