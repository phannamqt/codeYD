<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DM_nhacungcap_Add");
        break;
    case "edit":
        edit("GD2_DM_nhacungcap_Upd");
        break;
    case "del":
        del("GD2_DM_nhacungcap_Del");
        break;
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	print_r($_POST);
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
			echo ($check1);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}
	$chuoi.=",?,?)";	
 	//print_r($chuoi);
	//print_r($bien);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}
}
function edit($store_name){
	//print_r($_POST);
	if($_POST['ID_NhomNCC']==''){
		$_POST['ID_NhomNCC']=null;
	}
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	        
		if($key!="oper"){
		  $bien[]= $value;			
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array($_SESSION["user"]["id_user"]);
		  }elseif(count($_POST)-1>$i){
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
}
function del($store_name){
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"], SQLSRV_PARAM_IN)       
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	

}
?>

