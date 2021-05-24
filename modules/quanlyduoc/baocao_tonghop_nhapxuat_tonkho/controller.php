<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DM_Giaban_Insert");
        break;
    case "edit":
        edit("GD2_spDM_XaPhuong_Update");
        break;
    case "del":
        del("GD2_spDM_XaPhuong_Delete");
        break;
}	 		 

function add($store_name){	
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DM_Giaban_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array( 
                 $_POST["ID_Thuoc"], $_POST["Giaban"], convert_date($_POST["Ngayapdung"]), $_POST["Active"],
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
function edit($store_name){
	
	
			 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DM_Giaban_Update (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 $_GET["tt"],$_GET["id"],
				$_SESSION["user"]["id_user"]
               );	
	print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
function del($store_name){
	//print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1;
}
?>

