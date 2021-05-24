<?php
switch ($_GET["ac"]) {
	case "bhcc":
		add_loaithe();
		break;
	case "aploaikham":
		aploaikham();
		break;
	case "apnhomloaikham":
		apnhomloaikham();
		break;
	case "apnhomtheothe":
		apnhomtheothe();
		break;
	case "saochep_nhom":
		saochep_nhom();
		break;
}

function saochep_nhom(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Map_THEBHCC_PhanTramLoaiKhamCopyNhomThe (?,?,?,?)}";
	$params = array(
				$_POST["tunhom"],//@ID_LoaiTheFrom INT,
				$_POST["dennhom"],//@ID_LoaiTheTo INT,
				$_SESSION["user"]["id_user"],//@IdUser_login INT,
				$_SERVER['REMOTE_ADDR'],//@IP NVARCHAR(30)
			   );
	$get=$data->query( $store_name, $params);//Goi store
	echo $get;
	//print_r($params);
}

function apnhomtheothe(){
	$data= new SQLServer;//tao lop ket noi SQL
	//print_r($_POST);

	$params_ds = array(
				$_POST['ID_LoaiThe'],
				$_POST['HeSo'],
				$_SESSION["user"]["id_user"],
				$_SERVER['REMOTE_ADDR']
			);
	$get_ds=$data->query( '{call GD2_DanhSachNhomHangMucBHCC(?,?,?,?)}', $params_ds);
	$excute_ds= new SQLServerResult($get_ds);
	$tam= $excute_ds->get_as_array();
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		$check1="";
		$store_name="{call GD2_Map_THEBHCC_PhanTramLoaiKhamInsertByNhom (?,?,?,?,?)}";//tao bien khai bao store
		$params = array(
					$row["ID_LoaiTheBHCC"],
					$row["ID_NhomCLS"],
					$row["HeSoThe"],
					$_SESSION["user"]["id_user"],
					array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
		//print_r($params);
		$data->query( $store_name, $params);//Goi store
	}
}


function apnhomloaikham(){
	$data= new SQLServer;//tao lop ket noi SQL
	$check1="";
	$store_name="{call GD2_Map_THEBHCC_PhanTramLoaiKhamInsertByNhom (?,?,?,?,?)}";//tao bien khai bao store
	$params = array(
				$_POST["idloaithe"],// dối số truyền chưa đúng
				$_POST["id_nhom"],
				$_POST["heso"],
				$_SESSION["user"]["id_user"],
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			   );
	$get=$data->query( $store_name, $params);//Goi store
	echo $get;
}

function aploaikham(){
	$data= new SQLServer;//tao lop ket noi SQL
	if($_GET['oper']=='add'){
		$check1="";
		if($_POST["id_nhom"]==-3){
			$isgiuong=1;
		}elseif($_POST["id_nhom"]==-2){
			$isgiuong=3;
		}elseif($_POST["id_nhom"]==-1){
			$isgiuong=2;
		}else{
			$isgiuong=0;
		}
		$store_name="{call GD2_Map_THEBHCC_PhanTramLoaiKham_Insert (?,?,?,?,? ,?,?,?,?,? ,?)}";//tao bien khai bao store
		$params = array(
					$_POST["idloaithe"],
					$_POST["id_dichvu"],
					$_POST["heso"],
					$_POST["giasaunhanheso"],
					$isgiuong,
					$_POST["giabloggiuong"],
					$_POST["giabn"],// giATHOIDIEMKHILUU
					$_POST["giagoc"],
					$_SESSION["user"]["id_user"],
					$_SERVER['REMOTE_ADDR'],
					array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				   );
		$get=$data->query( $store_name, $params);//Goi store
		echo $get;

	}else{
		$store_name="{call GD2_Map_THEBHCC_PhanTramLoaiKham_Update (?,?,?,?,? ,?,?,?)}";//tao bien khai bao store
		$params = array(
					$_POST["id"],
					$_POST["heso"],
					$_POST["giasaunhanheso"],
					$_POST["giabloggiuong"],
					$_POST["giabn"],
					$_POST["giagoc"],
					$_SESSION["user"]["id_user"],
					$_SERVER['REMOTE_ADDR']
				   );
		$get=$data->query( $store_name, $params);//Goi store
		echo $get;
	}
}
function add_loaithe(){
	$data= new SQLServer;//tao lop ket noi SQL
	if($_GET['oper']=='add'){
		$check1="";
		$store_name="{call GD2_DM_LoaiTheBHCC_Insert (?,?,?,?,? ,?,?,?)}";//tao bien khai bao store
		$params = array(
					$_POST["tenloaithe"],
					$_POST["tencongty"],
					$_POST["manhom"],
					$_POST["ghichu"],
					$_POST["duocbhthanhtoan"],
					$_POST["sudung"],
					$_SESSION["user"]["id_user"],
					array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				   );
		$get=$data->query( $store_name, $params);//Goi store
		echo $get;
	}else{
		$store_name="{call GD2_DM_LoaiTheBHCC_Update (?,?,?,?,? ,?,?,?)}";//tao bien khai bao store
		$params = array(
					$_POST["idloaithe"],
					$_POST["tenloaithe"],
					$_POST["tencongty"],
					$_POST["manhom"],
					$_POST["ghichu"],
					$_POST["duocbhthanhtoan"],
					$_POST["sudung"],
					$_SESSION["user"]["id_user"]
				   );
		$get=$data->query( $store_name, $params);//Goi store
		echo $get;
	}
}
?>

