<?php
switch ($_GET["oper"]) {
    case "add":
        add("Gd2_lichLamViec_Check_Add");
        break;
    case "edit":
        edit("GD2_LichLamViec_Check_UPD");
        break; 
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
		
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	$chuoi.=",?)";		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//print_r($bien);
		echo $check1;
	
}
function edit($store_name){
	
	$check1="";
	$chuoi="(";
	$i=0;
	$ngay = explode('-',  $_POST["ngay"]);
	$_POST["ngay"] = $ngay[2].'-'.$ngay[1].'-'.$ngay[0];
	//print_r($_POST);
	foreach($_POST as $key => $value) { 	
	       //echo $key.";";
		if($key!="oper"){
		  $bien[]= $value;				  
		  $i++;			
		  if(count($_POST)==$i){
		  	$chuoi.="?";			
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
	
			//print_r($bien); 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1;
}
?>

