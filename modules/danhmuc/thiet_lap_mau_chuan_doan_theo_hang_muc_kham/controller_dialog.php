<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DM_Template_Insert_New");
        break;
    case "edit":
        edit("GD2_DM_Template_Update_New");
        break;
    case "del":
        del("GD2_DM_Template_Delete_New");
        break;
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	if($_POST['GiaTien']==''){
		$_POST['GiaTien']=0;	
	}
	if($_POST['ID_NhomTemplate']==''){
		$_POST['ID_NhomTemplate']=NULL;	
	}
	if($_POST['ID_ParentTemplate']==''){
		$_POST['ID_ParentTemplate']=NULL;	
	}
	print_r($_POST);
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($_SERVER['REMOTE_ADDR']);
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	$chuoi.=",?,?,?)";		 
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
	$chuoi="(";
	$i=0;
	if($_POST['ID_NhomTemplate']==''){
		$_POST['GiaTien']=0;	
	}
	if($_POST['ID_NhomTemplate']==''){
		$_POST['ID_NhomTemplate']=NULL;	
	}
	if($_POST['ID_ParentTemplate']==''){
		$_POST['ID_ParentTemplate']=NULL;	
	}
	foreach($_POST as $key => $value) { 	
	      
		if($key!="oper"){
		  $bien[]= $value;				  
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array($_SERVER['REMOTE_ADDR']);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?,?)";
	
			 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	print_r($params);
}
// function del($store_name){
// 	//print_r($_POST);
// 	$check1="";
// 	$data= new SQLServer;//tao lop ket noi SQL
// 	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
// 	$params = array( 
//                  array($_POST["id"], SQLSRV_PARAM_IN),
// 				 array($_SESSION["user"]["id_user"]),
//                  array($_SERVER['REMOTE_ADDR'])
//                );	
// 	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
// }
function del(){	
	$data= new SQLServer;
	$store_name="{call GD2_DM_Template_Delete_New (?,?,?)}";
	$check1='';
	$now=new DateTime(); 
	$params = array(
		$_POST['id'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);
	$data->query( $store_name, $params);
	// print_r($params);
	echo json_encode(array('status' => 'success'));
}
?>

