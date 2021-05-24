<?php
 $_POST["songayluukq"]=1;
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_DienTamDo_Kham_UpdateDaThucHien");
        break;
    case "luuthuchien":
        luuthuchien("GD2_DienTamDo_Kham_Update");
        break;
    case "hoantat":
        hoantat("GD2_DienTamDo_Kham_UpdateXong");
        break;
     case "luuhoantat":
        luuhoantat("GD2_DienTamDo_Kham_Update");
        break;  
	  case "luudangkham":
        luudangkham("GD2_DienTamDo_Kham_Update");
        break;     
}	 		 
function luudangkham($store_name){
	$chuoi2='(?,?,?,?,?,?,? )';			 
	$bien2= array(
		$_POST["id_kham"],
		$_POST["nguoithuchien"],
		$_POST["chuandoan1"],
		$_POST["ketluan"],
		$_SESSION["user"]["id_user"],
		$_POST["songayluukq"],
		
		$_SERVER['REMOTE_ADDR'] 
	);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}

function dathuchien($store_name){	

	$chuoi2='(?,?,?,?,?,?,? )';			 
	$bien2= array(
		$_POST["id_kham"],
		$_POST["nguoithuchien"],
		$_POST["chuandoan1"],
		$_POST["ketluan"],
		$_SESSION["user"]["id_user"],
		$_POST["songayluukq"],
		
		$_SERVER['REMOTE_ADDR'] 
	);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
}
function luuthuchien($store_name){
	$chuoi2='(?,?,?,?,?,?,? )';			 
	$bien2= array(
	$_POST["id_kham"],
	$_POST["nguoithuchien"],
	$_POST["chuandoan1"],
	$_POST["ketluan"],
	$_SESSION["user"]["id_user"],
	$_POST["songayluukq"],

	$_SERVER['REMOTE_ADDR'] 
	);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
 
}

function hoantat($store_name){
	$chuoi2='(?,?,?,?,?,?,? )';			 
	$bien2= array(
		$_POST["id_kham"],
		$_POST["nguoithuchien"],
		$_POST["chuandoan1"],
		$_POST["ketluan"],
		$_SESSION["user"]["id_user"],
		$_POST["songayluukq"],
		
		$_SERVER['REMOTE_ADDR'] 
	);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}

function luuhoantat($store_name){
	$chuoi2='(?,?,?,?,?,?,? )';			 
	$bien2= array(
		$_POST["id_kham"],
		$_POST["nguoithuchien"],
		$_POST["chuandoan1"],
		$_POST["ketluan"],
		$_SESSION["user"]["id_user"],
		$_POST["songayluukq"],
		
		$_SERVER['REMOTE_ADDR'] 
	);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
?>