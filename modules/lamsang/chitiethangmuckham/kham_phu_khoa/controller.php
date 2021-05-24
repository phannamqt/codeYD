<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_khampkhoa");
        break;
    case "luuthuchien":
        luuthuchien("");
        break;
    case "hoantat":
        hoantat("");
        break;
     case "luuhoantat":
        luuhoantat("");
        break; 
     case "luudangkham":
        luudangkham("");
        break;     
}	 		 

function dathuchien($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	//update kham
	$chuoi='(?,?,?)';
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$data->query( $store_name, $params);

	//=====================
	if($_POST["idkhampkhoa"]==0 && $_POST["idkhampkhoa"]!=""){
	$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            

	$store_name="{call GD2_Khampkhoa_Insert_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhampkhoa"];
	//print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	      

	$store_name1="{call GD2_Khampkhoa_Insert_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	} else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}
	//=====================
	}else if($_POST["idkhampkhoa"]!=""){

		$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"]);
			
			

	$store_name="{call GD2_Khampkhoa_Update_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo $_POST["idkhampkhoa"];
	print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_Khampkhoa_Update_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	} else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}
	

	//=====================
	//print_r($params);
		//=====================
	}//and else

}

function luudangkham(){
//print_r($_POST);
		$data= new SQLServer;
	//=====================
	if($_POST["idkhampkhoa"]==0 && $_POST["idkhampkhoa"]!=""){
	$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            

	$store_name="{call GD2_Khampkhoa_Insert_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhampkhoa"];
	//print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	      

	$store_name1="{call GD2_Khampkhoa_Insert_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	} else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}
	//=====================
	}else if($_POST["idkhampkhoa"]!=""){

		$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"]);
			
			

	$store_name="{call GD2_Khampkhoa_Update_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo $_POST["idkhampkhoa"];
	print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_Khampkhoa_Update_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	}else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}

	//=====================
	//print_r($params);
		//=====================
	}//and else
}

function luuthuchien($store_name){
	//print_r($_POST);
		$data= new SQLServer;
	//=====================
	if($_POST["idkhampkhoa"]==0 && $_POST["idkhampkhoa"]!=""){
	$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            

	$store_name="{call GD2_Khampkhoa_Insert_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhampkhoa"];
	//print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	      

	$store_name1="{call GD2_Khampkhoa_Insert_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	}else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}
	//=====================
	}else if($_POST["idkhampkhoa"]!=""){

		$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"]);
			
			

	$store_name="{call GD2_Khampkhoa_Update_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo $_POST["idkhampkhoa"];
	print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_Khampkhoa_Update_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	}else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}

	//=====================
	//print_r($params);
		//=====================
	}//and else
}
function hoantat($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	
	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KPK_HoanTat_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

		//=====================
	if($_POST["idkhampkhoa"]==0 && $_POST["idkhampkhoa"]!=""){
	$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            

	$store_name="{call GD2_Khampkhoa_Insert_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhampkhoa"];
	//print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	      

	$store_name1="{call GD2_Khampkhoa_Insert_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	} else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}

	//=====================
	}else if($_POST["idkhampkhoa"]!=""){

		$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"]);
			
			

	$store_name="{call GD2_Khampkhoa_Update_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo $_POST["idkhampkhoa"];
	print_r($params);

	$check1='';
	$chuoi1='(?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_Khampkhoa_Update_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	}else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}
	

	//=====================
	//print_r($params);
		//=====================
	}//and else

}
function luuhoantat($store_name){

	$data= new SQLServer;//tao lop ket noi SQL

	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KPK_HoanTat_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	print_r($_POST);
		//=====================
	 if($_POST["idkhampkhoa"]==0 && $_POST["idkhampkhoa"]!=""){
	$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            

	$store_name="{call GD2_Khampkhoa_Insert_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhampkhoa"];
	print_r($_POST);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	      

	$store_name1="{call GD2_Khampkhoa_Insert_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	} else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}

	//=====================
	}else if($_POST["idkhampkhoa"]!=""){

		$check='';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$params=  array(($_POST["id_kham"]),($_POST["lydokham"]),($_POST["tiensugd"]),($_POST["combo_kinhnguyet"]),($_POST["sanphukhoa"]),($_POST["combo_pptranhthai1"]),($_POST['thuocdangdung']),($_POST['tsdiungthuoc']),($_POST['trieuchungcn']),($_POST['khamtt']),($_POST['stuoi']),($_POST['nhuomsoi']),($_POST['papsmear']),($_POST['nsctc']),($_POST['sieuam']),($_POST['khac']),$_SESSION["user"]["id_user"]);
			
			

	$store_name="{call GD2_Khampkhoa_Update_GY $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo $_POST["idkhampkhoa"];
	print_r($_POST);

	$check1='';
	$chuoi1='(?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["are_chuandoan"]),($_POST["denghi"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_Khampkhoa_Update_K $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

	$check2='';
	$chuoi2='(?,?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	if(($_POST['_idpara'])==0){   
	
	$store_name1="{call GD2_Khampkhoa_Insert_TSKT $chuoi2}";//tao bien khai bao store
	$get=$data->query( $store_name2, $params2);
	} else{
	$chuoi2='(?,?,?)';
	$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_Khampkhoa_Update_TSKT $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	}
	

	//=====================
	//print_r($params);
		//=====================
	}//and else 


	
}
?>

