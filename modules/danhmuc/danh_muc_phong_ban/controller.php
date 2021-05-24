<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DMPhongBan_Insert");
        break;
    case "edit":
        edit("GD2_DMPhongBan_Update");
        break;
    case "del":
        del("GD2_Del_DM_PhongBan");
        break;
}	 		 

function add($store_name){	
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_DMPhongBan_Insert_New] (?,?,?,?,?, ?,?)}";//tao bien khai bao store
	$params = array( 
                 ($_POST["TenPhongBan"]),($_POST["DienThoai"]),($_POST["MoTa"]),($_POST["IsPhongChuyenMon"]),($_POST["Active"]),
				 $_SESSION["user"]["id_user"],
                 array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
function edit($store_name){
	$data= new SQLServer;
	$store_name="{call [GD2_DMPhongBan_Update_New] (?,?,?,?,? ,?,?)}";
        $bien=  array(($_POST["TenPhongBan"]),($_POST["DienThoai"]),($_POST["MoTa"]),($_POST["IsPhongChuyenMon"]),
		($_POST["Active"]),($_POST["id"]),$_SESSION["user"]["id_user"]);
	
		//print_r($params);
		$params = $bien;
		//print_r ($bien);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
}
function del($store_name){
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["id_user"],SQLSRV_PARAM_IN),
                 array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1;
}
?>

