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
	if($_POST["id_luotkham"]==0 || $_POST["id_luotkham"]==""){
	
	
	//============begin para====
	
		$chuoi2='(?,?,?)';
		$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_para_upd_idluotkham $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	
	//==========end===========
	}

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["ttrinh"]),($_POST["are_chuandoan"]),($_POST["loikhuyen"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_KHHGD_Update_Kham $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);

}

function luudangkham(){
	$data= new SQLServer;//tao lop ket noi SQL
	
	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["ttrinh"]),($_POST["are_chuandoan"]),($_POST["loikhuyen"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_KHHGD_Update_Kham $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);
	//============begin para====
	
		$chuoi2='(?,?,?)';
		$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_para_upd_idluotkham $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	
	//==========end===========
}

function luuthuchien($store_name){
	print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	
	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["ttrinh"]),($_POST["are_chuandoan"]),($_POST["loikhuyen"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_KHHGD_Update_Kham $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);
	//============begin para====
	
		$chuoi2='(?,?,?)';
		$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_para_upd_idluotkham $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	
	//==========end===========
}
function hoantat($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	print_r($_POST);
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KPK_HoanTat_Update (?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["ttrinh"]),($_POST["are_chuandoan"]),($_POST["loikhuyen"]),$_SESSION["user"]["id_user"]);
	$store_name1="{call GD2_KHHGD_Update_Kham $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);
	//============begin para====
	
		$chuoi2='(?,?,?)';
		$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_para_upd_idluotkham $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	
	//==========end===========
}
function luuhoantat($store_name){
	print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL

	$params=  array($_POST["id_kham"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KPK_HoanTat_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	$check1='';
	$chuoi1='(?,?,?,?,?)';
	$params1=  array(($_POST["id_kham"]),($_POST["ttrinh"]),($_POST["are_chuandoan"]),($_POST["loikhuyen"]),$_SESSION["user"]["id_user"]);
	      

	$store_name1="{call GD2_KHHGD_Update_Kham $chuoi1}";//tao bien khai bao store
	$get=$data->query( $store_name1, $params1);
	
	//============begin para====
	
		$chuoi2='(?,?,?)';
		$params2=  array(($_POST["id_luotkham"]),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),$_SESSION["user"]["id_user"]);
		$store_name2="{call GD2_para_upd_idluotkham $chuoi2}";//tao bien khai bao store
		$get=$data->query( $store_name2, $params2);
	
	//==========end===========
}
?>

