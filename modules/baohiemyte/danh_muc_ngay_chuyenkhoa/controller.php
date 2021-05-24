<?php
switch ($_GET["oper"]) {
    case "add":
        add("MED_Ngay_ChuyenKhoa_NhanVien_Insert");
        break;
    case "edit":
        edit("MED_Ngay_ChuyenKhoa_NhanVien_Update");
        break; 
}	 		 

function add($store_name){	
	$check1=""; 
	$chuoi="(?,?,?,?,? ,?,?)";  
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = array(
		$_POST["Thu"],
		$_POST["ChuyenKhoa"],
		$_POST["NhanVien"],
		$_POST["Active"],
		$_SESSION["user"]["id_user"],
		
		$_SERVER['REMOTE_ADDR'],
		array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),
	);//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}
}
function edit($store_name){
	$chuoi="(?,?,?,?,? ,?,?)";  
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = array(
		$_POST["id"],
		$_POST["Thu"],
		$_POST["ChuyenKhoa"],
		$_POST["NhanVien"],
		$_POST["Active"],
		$_SESSION["user"]["id_user"],
		
		$_SERVER['REMOTE_ADDR'], 
	);//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
} 
?>

