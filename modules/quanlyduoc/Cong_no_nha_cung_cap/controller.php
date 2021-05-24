<?php
switch ($_GET["oper"]) {
    case "update":
        update();
        break;
	case "insert":
        insert();
        break;
	case "daduyet":
       daduyet();
        break;
	case "insertcpn":
       insertcpn();
        break;
}	 		 

function update(){	
	$_POST["ngaylap"]=convert_date($_POST["ngaylap"]);
	$_POST["sotien"]=  join("",explode( '.', $_POST["sotien"] ));
	$data= new SQLServer;
	$store_name="{call [GD2_PhieuChiDuoc_Update] (?,?,?,?,?,?,?,?,?,?)}";
        $bien=  array(($_POST["nhacc1"]),($_POST["sotien"]),($_POST["nguoichi1"]),($_POST["ngaylap"]),($_POST["nguoint"]),($_POST["diachi"]),($_POST["dando"]),'PhieuChiDuoc',($_POST["id_thutrano"]),$_SESSION["user"]["id_user"]);
	
		//print_r($bien);
		$params = $bien;
		//print_r ($bien);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	
	//$params = $bien;
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	//print_r($_POST)	 ;
}
function insertcpn(){	
	$_POST["ngaylapd2"]=convert_date($_POST["ngaylapd2"]);
	$_POST["tiend2"]=  join("",explode( '.', $_POST["tiend2"] ));
		$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_PhieuChiDuoc_Insert] (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array( 
                 ($_POST["nhaccd21"]),($_POST["tiend2"]),($_POST["nguoichid21"]),($_POST["ngaylapd2"]),($_POST["nguointd2"]),($_POST["diachid2"]),($_POST["dandod2"]),'PhieuChiDuoc',($_GET["maphieunhapkho"]),'0','0','0',
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );
	//print_r($_POST);
	//print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	$store_name1="{call [GD2_demsophieu_upd] (?)}";//tao bien khai bao store
	$params1 = array('FormatSoPhieuChiDuoc');
	//print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);//Goi store	
}
function insert(){	
	$_POST["ngaylap"]=convert_date($_POST["ngaylap"]);
	$_POST["sotien"]=  join("",explode( '.', $_POST["sotien"] ));
	
		$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_PhieuChiDuoc_Insert] (?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array( 
                 ($_POST["nhacc1"]),($_POST["sotien"]),($_POST["nguoichi1"]),($_POST["ngaylap"]),($_POST["nguoint"]),($_POST["diachi"]),($_POST["dando"]),'PhieuChiDuoc',($_GET["maphieunhapkho"]),'0','0','0',
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );
	print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	$store_name1="{call [GD2_demsophieu_upd] (?)}";//tao bien khai bao store
	$params1 = array('FormatSoPhieuChiDuoc');
	//print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name1, $params1);//Goi store	
}
function daduyet(){	
	//echo('aaa');
	$data= new SQLServer;
	$store_name="{call [GD2_DM_ThuTraNo_Update_DaDuyet](?,?,?,?)}";
	if($_GET["ktduyet"]==1){
        $bien=  array(($_GET["ktduyet"]),$_SESSION["user"]["id_user"],($_GET["id"]),$_SESSION["user"]["id_user"]);
	}else{
		$bien=  array(($_GET["ktduyet"]),null,($_GET["id"]),$_SESSION["user"]["id_user"]);
	}
		//print_r($params);
		$params = $bien;
		//print_r ($bien);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	
	//$params = $bien;
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	print_r($bien)	 ;
}
?>

