<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_Add_DM_PhongBan");
        break;
    case "edit":
        edit("GD2_UPD_DM_PhongBan");
        break;
    case "del":
        del("GD2_Del_DM_PhongBan");
        break;
}	 		 

function add($store_name){	
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}
	$chuoi.=")";		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	 
}
function edit($store_name){
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	        
		if($key!="oper"){
		  $bien[]= $value;			
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}
	$chuoi.=")";
	//print_r($bien);			 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store		
}
function del($store_name){
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
                 array(&$check1,  SQLSRV_PARAM_OUT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store		
}
?>

