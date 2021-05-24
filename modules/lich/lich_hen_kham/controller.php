<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_LichHenKham_Insert");
        break;
    case "edit":
        edit("GD2_LichHenKham_Update");
        break;
    case "cancel":
        cancel("GD2_LichHenKham_Update_HuyHen");
        break;
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	$id_return="";
	$_POST["GioHenKham"]=convert_date($_POST["GioHenKham"]);
	$_POST["NgayHenKham"]=convert_date($_POST["NgayHenKham"]);	
	
	foreach($_POST as $key => $value) {	
		  $bien[]=rawurldecode($value);			
		  $i++;			  
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
			$bien[]=array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";		
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		 				
	}	
	$chuoi.=",?,?)";
	//print_r($_POST); 
	//print_r($bien); 
	//print_r($chuoi); 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo "$id_return;$check1";
	/*if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}*/
}
function edit($store_name){
//	print_r($_POST);
	$chuoi="(";
	$i=0;
	$check1="";
	$_POST["GioHenKham"]=convert_date($_POST["GioHenKham"]);
	$_POST["NgayHenKham"]=convert_date($_POST["NgayHenKham"]);		
	//echo $_POST["GhiChu"];
	//$_POST["GhiChu"]="a\"c";	 
	foreach($_POST as $key => $value) { 	
	      // echo $key.";";
		if($key!="oper"){
		  $bien[]= rawurldecode($value);				  
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
	//print_r($bien);
	//print_r($chuoi);
	
			 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1;
}
function cancel($store_name){
	//$check1="";
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["ID_HenKham"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array(date("Y-m-d H:i"),SQLSRV_PARAM_IN),
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
 
}
function hexToString($hexString) {
    return pack("H*" , str_replace('%', '', $hexString));
}

?>

