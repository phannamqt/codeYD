<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_spDM_Template_Insert");
        break;
    case "edit":
        edit("GD2_spDM_Template_Update");
        break;
    case "del":
        del("GD2_spDM_Template_Delete");
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
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	$chuoi.=",?,?)";		 
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

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?)}";//tao bien khai bao store
	$params = array(
		$_POST['TenTemplate'],//@TenTemplate nvarchar(200),
		$_POST['ID_NhomTemplate'],//@ID_NhomTemplate int,
		$_POST['NoiDung'],//@NoiDung nvarchar(Max),
		$_POST['KetLuan'],//@KetLuan nvarchar(Max),
		$_POST['LoiKhuyen'],//@LoiKhuyen ntext,
		
		$_POST['ExtField2'],//@ExtField2 nvarchar(Max),
		$_POST['Active'],//@Active bit,
		$_POST['GiaTien'],//@GiaTien DECIMAL(18,0),
		$_POST['ID_NhanVien'],//@ID_NhanVien int,
		1,//@STT int,
		
		$_POST['ID_ParentTemplate'],//@ID_ParentTemplate int,
		$_POST['IsGroup'],//@IsGroup bit,
		$_POST['id'],	//@ID_Template int,
		$_SESSION["user"]["id_user"]//@IdUser_login int
	);//tao param cho store 
	
	

	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//print_r($params);
}
function del($store_name){
	//print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
?>

