<?php
$khoa=Check_update_cls($_POST["id_kham"],0,0,$_SESSION["user"]["id_user"]);
if($khoa['Isupdate']==0){
	echo $khoa['Chuoi'];
}else{
	switch ($_GET["oper"]) {
		case "dathuchien":
		dathuchien("GD2_Kham_dathuchien_sieuam");
		break;
		case "luuthuchien":
		luuthuchien("GD2_Kham_Update_sieuam");
		break;
		case "hoantat":
		hoantat("GD2_Kham_hoantat_sieuam");
		break;
		case "luuhoantat":
		luuhoantat("GD2_Kham_Update_sieuam");
		break;
		case "luudangkham":
		luudangkham("GD2_Kham_Update_sieuam");
		break;    
	}	 	
}	


function dathuchien($store_name){	
	$chuoi="(";
	$i=0;
	$check1="";


	foreach($_POST as $key => $value) { 	

		if($key!="oper"){
			$bien[]=urldecode($value) ;				  
			$i++;			
			if(count($_POST)==$i){
				$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
				$chuoi.="?";			
			}elseif(count($_POST)>$i){
				$chuoi.="?,";  
			}		
		}		
	}

	$chuoi.=",?)";
	$chuoi2='(?,?,?,?,?,?,?)';
	$bien2=  array(($_POST["nguoithuchien"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giothuchien"]));
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	

	
}
function luudangkham($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
	foreach($_POST as $key => $value) { 	
		if($key!="oper"){
			$bien[]=urldecode($value) ;				  
			$i++;			
			if(count($_POST)==$i){
				$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
				$chuoi.="?";			
			}elseif(count($_POST)>$i){
				$chuoi.="?,";  
			}		
		}		
	}

	$chuoi.=",?)";
	$chuoi2='(?,?,?,?,?,?,?,?,?)';
	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0);

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
function luuthuchien($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
	foreach($_POST as $key => $value) { 	
		if($key!="oper"){
			$bien[]=urldecode($value) ;				  
			$i++;			
			if(count($_POST)==$i){
				$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
				$chuoi.="?";			
			}elseif(count($_POST)>$i){
				$chuoi.="?,";  
			}		
		}		
	}

	$chuoi.=",?)";


	$chuoi2='(?,?,?,?,?,?,?,?,?)';

	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
function hoantat($store_name){
	$chuoi="(";
	$i=0;
	$check1="";
	foreach($_POST as $key => $value) { 	
		if($key!="oper"){
			$bien[]=urldecode($value) ;				  
			$i++;			
			if(count($_POST)==$i){
				$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
				$chuoi.="?";			
			}elseif(count($_POST)>$i){
				$chuoi.="?,";  
			}		
		}		
	}

	$chuoi.=",?)";

	//print_r($_POST); Ai print ra Nam an ngay 18/4/17 
	$chuoi2='(?,?,?,?,?,?,?,?)';

	$bien2=  array($_POST['nguoithuchien'],($_POST["chuandoan1"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giohoantat"]));
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	

}
function luuhoantat($store_name){
	$chuoi="(";
	$i=0;
	$check1="";
	foreach($_POST as $key => $value) { 	
		if($key!="oper"){
			$bien[]=urldecode($value) ;				  
			$i++;			
			if(count($_POST)==$i){
				$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
				$chuoi.="?";			
			}elseif(count($_POST)>$i){
				$chuoi.="?,";  
			}		
		}		
	}

	$chuoi.=",?)";
	$chuoi2='(?,?,?,?,?,?,?,?,?)';
	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
?>

