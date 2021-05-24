<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien();
        break;
    case "luuthuchien":
        luuthuchien();
        break;
    case "hoantat":
        hoantat();
        break;
     case "luuhoantat":
        luuhoantat();
        break;
     case "luudangkham":
        luudangkham();
        break;    
}	 		 

function dathuchien(){	
//echo $_POST["idkhamsk"];
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"], 
 					$_POST["nhanvien_hidden"],
					$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Kham_dathuchien_khamthai (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
		$check='';
		$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?)';
		
		$params=  array(
						$_POST["id_kham"],
						$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"],
						$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"],
						$_POST["ck_matphai"],
						$_POST["ck_mattrai"],
						$_POST["kk_matphai"],
						$_POST["kk_mattrai"],
						$_POST["m_benhvemat"],
						$_POST["m_bacsy_hidden"],
						$_POST["m_phanloai_hidden"],
						$_POST["taiphai_noithuong"],
						$_POST["taiphai_noitham"], 
						$_POST["taitrai_noithuong"], 
						$_POST["taitrai_noitham"],
						$_POST["taimuihong_ghichu"], 
						$_POST["tmh_bacsy_hidden"], 
						$_POST["tmh_phanloai_hidden"],
						$_POST["ranghammat_ghichu"], 
						$_POST["rhm_bacsy_hidden"], 
						$_POST["rhm_phanloai_hidden"],
						$_POST["dalieu_ghichu"], 
						$_POST["dalieu_bacsy_hidden"], 
						$_POST["dalieu_phanloai_hidden"],
						$_POST["noikhoa_ghichu"], 
						$_POST["noikhoa_bacsy_hidden"], 
						$_POST["noikhoa_phanloai_hidden"],
						$_POST["ngoaikhoa_ghichu"], 
						$_POST["ngoaikhoa_bacsy_hidden"], 
						$_POST["ngoaikhoa_phanloai_hidden"],
						$_POST["sanphukhoa_ghichu"], 
						$_POST["sanphukhoa_bacsy_hidden"], 
						$_POST["sanphukhoa_phanloai_hidden"],
						$_POST["tuanhoan_ghichu"], 
						$_POST["tuanhoan_bacsy_hidden"], 
						$_POST["tuanhoan_phanloai_hidden"],
						$_POST["hohap_ghichu"], 
						$_POST["hohap_bacsy_hidden"], 
						$_POST["hohap_phanloai_hidden"],
						$_POST["tieuhoa_ghichu"], 
						$_POST["tieuhoa_bacsy_hidden"], 
						$_POST["tieuhoa_phanloai_hidden"],
						$_POST["thantietnieusinhduc_ghichu"], 
						$_POST["thantietnieusinhduc_bacsy_hidden"], 
						$_POST["thantietnieusinhduc_phanloai_hidden"],
						$_POST["thankinh_ghichu"], 
						$_POST["thankinh_bacsy_hidden"], 
						$_POST["thankinh_phanloai_hidden"],
						$_POST["tamthan_ghichu"], 
						$_POST["tamthan_bacsy_hidden"], 
						$_POST["tamthan_phanloai_hidden"],
						$_POST["hevandong_ghichu"], 
						$_POST["hevandong_bacsy_hidden"], 
						$_POST["hevandong_phanloai_hidden"],
						$_POST["noitiet_ghichu"], 
						$_POST["noitiet_bacsy_hidden"], 
						$_POST["noitiet_phanloai_hidden"], 
						$_POST["benhtathientai"], 
						$_POST["hamtren"], 
						$_POST["hamduoi"],
						$_POST["ketquaxetnghiem_bacsy_hidden"],
						$_POST["ketquasieuam_bacsy_hidden"],
						$_POST["ketquaxquang_bacsy_hidden"],
						$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
						$_SESSION["user"]["id_user"],
						array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
					);
		$store_name="{call GD2_KhamSucKhoeCongTy_Insert_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);
		//echo "insert";
		//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================
		$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?,? ,?,?,?,?)';
	
		$params=  array($_POST["idkhamsk"], 
						$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
						$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
						$_POST["ck_matphai"], 
						$_POST["ck_mattrai"], 
						$_POST["kk_matphai"], 
						$_POST["kk_mattrai"], 
						$_POST["m_benhvemat"], 
						$_POST["m_bacsy_hidden"], 
						$_POST["m_phanloai_hidden"], 
						$_POST["taiphai_noithuong"], 
						$_POST["taiphai_noitham"], 
						$_POST["taitrai_noithuong"], 
						$_POST["taitrai_noitham"],
						$_POST["taimuihong_ghichu"], 
						$_POST["tmh_bacsy_hidden"], 
						$_POST["tmh_phanloai_hidden"],
						$_POST["ranghammat_ghichu"], 
						$_POST["rhm_bacsy_hidden"], 
						$_POST["rhm_phanloai_hidden"],
						$_POST["dalieu_ghichu"], 
						$_POST["dalieu_bacsy_hidden"], 
						$_POST["dalieu_phanloai_hidden"],
						$_POST["noikhoa_ghichu"], 
						$_POST["noikhoa_bacsy_hidden"], 
						$_POST["noikhoa_phanloai_hidden"],
						$_POST["ngoaikhoa_ghichu"], 
						$_POST["ngoaikhoa_bacsy_hidden"], 
						$_POST["ngoaikhoa_phanloai_hidden"],
						$_POST["sanphukhoa_ghichu"], 
						$_POST["sanphukhoa_bacsy_hidden"], 
						$_POST["sanphukhoa_phanloai_hidden"],
						$_POST["tuanhoan_ghichu"], 
						$_POST["tuanhoan_bacsy_hidden"], 
						$_POST["tuanhoan_phanloai_hidden"],
						$_POST["hohap_ghichu"], 
						$_POST["hohap_bacsy_hidden"], 
						$_POST["hohap_phanloai_hidden"],
						$_POST["tieuhoa_ghichu"], 
						$_POST["tieuhoa_bacsy_hidden"], 
						$_POST["tieuhoa_phanloai_hidden"],
						$_POST["thantietnieusinhduc_ghichu"], 
						$_POST["thantietnieusinhduc_bacsy_hidden"], 
						$_POST["thantietnieusinhduc_phanloai_hidden"],
						$_POST["thankinh_ghichu"], 
						$_POST["thankinh_bacsy_hidden"], 
						$_POST["thankinh_phanloai_hidden"],
						$_POST["tamthan_ghichu"], 
						$_POST["tamthan_bacsy_hidden"], 
						$_POST["tamthan_phanloai_hidden"],
						$_POST["hevandong_ghichu"], 
						$_POST["hevandong_bacsy_hidden"], 
						$_POST["hevandong_phanloai_hidden"],
						$_POST["noitiet_ghichu"], 
						$_POST["noitiet_bacsy_hidden"], 
						$_POST["noitiet_phanloai_hidden"], 
						$_POST["benhtathientai"], 
						$_POST["hamtren"], 
						$_POST["hamduoi"],
						$_POST["ketquaxetnghiem_bacsy_hidden"],
						$_POST["ketquasieuam_bacsy_hidden"],
						$_POST["ketquaxquang_bacsy_hidden"],
						$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
						$_SESSION["user"]["id_user"]
					);
	
			$store_name="{call GD2_KhamSucKhoeCongTy_Update_New $chuoi}";//tao bien khai bao store
			$get=$data->query( $store_name, $params);//Goi store	
		//echo "update";	
		//=====================
	}//and else
	
	
}
function luudangkham(){
	$data= new SQLServer;//tao lop ket noi SQL
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
		$check='';
		$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?)';
		
		$params=  array($_POST["id_kham"], 
						$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
						$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
						$_POST["ck_matphai"], 
						$_POST["ck_mattrai"], 
						$_POST["kk_matphai"], 
						$_POST["kk_mattrai"], 
						$_POST["m_benhvemat"], 
						$_POST["m_bacsy_hidden"], 
						$_POST["m_phanloai_hidden"], 
						$_POST["taiphai_noithuong"], 
						$_POST["taiphai_noitham"], 
						$_POST["taitrai_noithuong"], 
						$_POST["taitrai_noitham"],
						$_POST["taimuihong_ghichu"], 
						$_POST["tmh_bacsy_hidden"], 
						$_POST["tmh_phanloai_hidden"],
						$_POST["ranghammat_ghichu"], 
						$_POST["rhm_bacsy_hidden"], 
						$_POST["rhm_phanloai_hidden"],
						$_POST["dalieu_ghichu"], 
						$_POST["dalieu_bacsy_hidden"], 
						$_POST["dalieu_phanloai_hidden"],
						$_POST["noikhoa_ghichu"], 
						$_POST["noikhoa_bacsy_hidden"], 
						$_POST["noikhoa_phanloai_hidden"],
						$_POST["ngoaikhoa_ghichu"], 
						$_POST["ngoaikhoa_bacsy_hidden"], 
						$_POST["ngoaikhoa_phanloai_hidden"],
						$_POST["sanphukhoa_ghichu"], 
						$_POST["sanphukhoa_bacsy_hidden"], 
						$_POST["sanphukhoa_phanloai_hidden"],
						$_POST["tuanhoan_ghichu"], 
						$_POST["tuanhoan_bacsy_hidden"], 
						$_POST["tuanhoan_phanloai_hidden"],
						$_POST["hohap_ghichu"], 
						$_POST["hohap_bacsy_hidden"], 
						$_POST["hohap_phanloai_hidden"],
						$_POST["tieuhoa_ghichu"], 
						$_POST["tieuhoa_bacsy_hidden"], 
						$_POST["tieuhoa_phanloai_hidden"],
						$_POST["thantietnieusinhduc_ghichu"], 
						$_POST["thantietnieusinhduc_bacsy_hidden"], 
						$_POST["thantietnieusinhduc_phanloai_hidden"],
						$_POST["thankinh_ghichu"], 
						$_POST["thankinh_bacsy_hidden"], 
						$_POST["thankinh_phanloai_hidden"],
						$_POST["tamthan_ghichu"], 
						$_POST["tamthan_bacsy_hidden"], 
						$_POST["tamthan_phanloai_hidden"],
						$_POST["hevandong_ghichu"], 
						$_POST["hevandong_bacsy_hidden"], 
						$_POST["hevandong_phanloai_hidden"],
						$_POST["noitiet_ghichu"], 
						$_POST["noitiet_bacsy_hidden"], 
						$_POST["noitiet_phanloai_hidden"], 
						$_POST["benhtathientai"], 
						$_POST["hamtren"], 
						$_POST["hamduoi"],
						$_POST["ketquaxetnghiem_bacsy_hidden"],
						$_POST["ketquasieuam_bacsy_hidden"],
						$_POST["ketquaxquang_bacsy_hidden"],
						$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
						$_SESSION["user"]["id_user"],
						array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		
		$store_name="{call GD2_KhamSucKhoeCongTy_Insert_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);
		//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================
		$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?,? ,?,?,?,?)';
	
		$params=  array($_POST["idkhamsk"], 
						$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
						$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
						$_POST["ck_matphai"], 
						$_POST["ck_mattrai"], 
						$_POST["kk_matphai"], 
						$_POST["kk_mattrai"], 
						$_POST["m_benhvemat"], 
						$_POST["m_bacsy_hidden"], 
						$_POST["m_phanloai_hidden"], 
						$_POST["taiphai_noithuong"], 
						$_POST["taiphai_noitham"], 
						$_POST["taitrai_noithuong"], 
						$_POST["taitrai_noitham"],
						$_POST["taimuihong_ghichu"], 
						$_POST["tmh_bacsy_hidden"], 
						$_POST["tmh_phanloai_hidden"],
						$_POST["ranghammat_ghichu"], 
						$_POST["rhm_bacsy_hidden"], 
						$_POST["rhm_phanloai_hidden"],
						$_POST["dalieu_ghichu"], 
						$_POST["dalieu_bacsy_hidden"], 
						$_POST["dalieu_phanloai_hidden"],
						$_POST["noikhoa_ghichu"], 
						$_POST["noikhoa_bacsy_hidden"], 
						$_POST["noikhoa_phanloai_hidden"],
						$_POST["ngoaikhoa_ghichu"], 
						$_POST["ngoaikhoa_bacsy_hidden"], 
						$_POST["ngoaikhoa_phanloai_hidden"],
						$_POST["sanphukhoa_ghichu"], 
						$_POST["sanphukhoa_bacsy_hidden"], 
						$_POST["sanphukhoa_phanloai_hidden"],
						$_POST["tuanhoan_ghichu"], 
						$_POST["tuanhoan_bacsy_hidden"], 
						$_POST["tuanhoan_phanloai_hidden"],
						$_POST["hohap_ghichu"], 
						$_POST["hohap_bacsy_hidden"], 
						$_POST["hohap_phanloai_hidden"],
						$_POST["tieuhoa_ghichu"], 
						$_POST["tieuhoa_bacsy_hidden"], 
						$_POST["tieuhoa_phanloai_hidden"],
						$_POST["thantietnieusinhduc_ghichu"], 
						$_POST["thantietnieusinhduc_bacsy_hidden"], 
						$_POST["thantietnieusinhduc_phanloai_hidden"],
						$_POST["thankinh_ghichu"], 
						$_POST["thankinh_bacsy_hidden"], 
						$_POST["thankinh_phanloai_hidden"],
						$_POST["tamthan_ghichu"], 
						$_POST["tamthan_bacsy_hidden"], 
						$_POST["tamthan_phanloai_hidden"],
						$_POST["hevandong_ghichu"], 
						$_POST["hevandong_bacsy_hidden"], 
						$_POST["hevandong_phanloai_hidden"],
						$_POST["noitiet_ghichu"], 
						$_POST["noitiet_bacsy_hidden"], 
						$_POST["noitiet_phanloai_hidden"], 
						$_POST["benhtathientai"], 
						$_POST["hamtren"], 
						$_POST["hamduoi"],
						$_POST["ketquaxetnghiem_bacsy_hidden"],
						$_POST["ketquasieuam_bacsy_hidden"],
						$_POST["ketquaxquang_bacsy_hidden"],
						$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
						$_SESSION["user"]["id_user"]
		);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
	//print_r($params);
		//=====================
	}//and else
	
}
function luuthuchien(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"], 
 					$_POST["nhanvien_hidden"],
					$_SESSION["user"]["id_user"]);
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_KT_Luu_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?)';
	
    $params=  array($_POST["id_kham"], 
					$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
					$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
					$_POST["ck_matphai"],
					$_POST["ck_mattrai"], 
					$_POST["kk_matphai"], 
					$_POST["kk_mattrai"], 
					$_POST["m_benhvemat"], 
					$_POST["m_bacsy_hidden"], 
					$_POST["m_phanloai_hidden"], 
					$_POST["taiphai_noithuong"], 
					$_POST["taiphai_noitham"], 
					$_POST["taitrai_noithuong"], 
					$_POST["taitrai_noitham"],
					$_POST["taimuihong_ghichu"], 
					$_POST["tmh_bacsy_hidden"], 
					$_POST["tmh_phanloai_hidden"],
					$_POST["ranghammat_ghichu"], 
					$_POST["rhm_bacsy_hidden"], 
					$_POST["rhm_phanloai_hidden"],
					$_POST["dalieu_ghichu"], 
					$_POST["dalieu_bacsy_hidden"], 
					$_POST["dalieu_phanloai_hidden"],
					$_POST["noikhoa_ghichu"], 
					$_POST["noikhoa_bacsy_hidden"], 
					$_POST["noikhoa_phanloai_hidden"],
					$_POST["ngoaikhoa_ghichu"], 
					$_POST["ngoaikhoa_bacsy_hidden"], 
					$_POST["ngoaikhoa_phanloai_hidden"],
					$_POST["sanphukhoa_ghichu"], 
					$_POST["sanphukhoa_bacsy_hidden"], 
					$_POST["sanphukhoa_phanloai_hidden"],
					$_POST["tuanhoan_ghichu"], 
					$_POST["tuanhoan_bacsy_hidden"], 
					$_POST["tuanhoan_phanloai_hidden"],
					$_POST["hohap_ghichu"], 
					$_POST["hohap_bacsy_hidden"], 
					$_POST["hohap_phanloai_hidden"],
					$_POST["tieuhoa_ghichu"], 
					$_POST["tieuhoa_bacsy_hidden"], 
					$_POST["tieuhoa_phanloai_hidden"],
					$_POST["thantietnieusinhduc_ghichu"], 
					$_POST["thantietnieusinhduc_bacsy_hidden"], 
					$_POST["thantietnieusinhduc_phanloai_hidden"],
					$_POST["thankinh_ghichu"], 
					$_POST["thankinh_bacsy_hidden"], 
					$_POST["thankinh_phanloai_hidden"],
					$_POST["tamthan_ghichu"], 
					$_POST["tamthan_bacsy_hidden"], 
					$_POST["tamthan_phanloai_hidden"],
					$_POST["hevandong_ghichu"], 
					$_POST["hevandong_bacsy_hidden"], 
					$_POST["hevandong_phanloai_hidden"],
					$_POST["noitiet_ghichu"], 
					$_POST["noitiet_bacsy_hidden"], 
					$_POST["noitiet_phanloai_hidden"], 
					$_POST["benhtathientai"], 
					$_POST["hamtren"], 
					$_POST["hamduoi"],
					$_POST["ketquaxetnghiem_bacsy_hidden"],
					$_POST["ketquasieuam_bacsy_hidden"],
					$_POST["ketquaxquang_bacsy_hidden"],
					$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
					$_SESSION["user"]["id_user"],
					array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert_New $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?,? ,?,?,?,?)';

	$params=  array($_POST["idkhamsk"], 
					$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
					$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
					$_POST["ck_matphai"], 
					$_POST["ck_mattrai"], 
					$_POST["kk_matphai"], 
					$_POST["kk_mattrai"], 
					$_POST["m_benhvemat"], 
					$_POST["m_bacsy_hidden"], 
					$_POST["m_phanloai_hidden"], 
					$_POST["taiphai_noithuong"], 
					$_POST["taiphai_noitham"], 
					$_POST["taitrai_noithuong"], 
					$_POST["taitrai_noitham"],
					$_POST["taimuihong_ghichu"], 
					$_POST["tmh_bacsy_hidden"], 
					$_POST["tmh_phanloai_hidden"],
					$_POST["ranghammat_ghichu"], 
					$_POST["rhm_bacsy_hidden"], 
					$_POST["rhm_phanloai_hidden"],
					$_POST["dalieu_ghichu"], 
					$_POST["dalieu_bacsy_hidden"], 
					$_POST["dalieu_phanloai_hidden"],
					$_POST["noikhoa_ghichu"], 
					$_POST["noikhoa_bacsy_hidden"], 
					$_POST["noikhoa_phanloai_hidden"],
					$_POST["ngoaikhoa_ghichu"], 
					$_POST["ngoaikhoa_bacsy_hidden"], 
					$_POST["ngoaikhoa_phanloai_hidden"],
					$_POST["sanphukhoa_ghichu"], 
					$_POST["sanphukhoa_bacsy_hidden"], 
					$_POST["sanphukhoa_phanloai_hidden"],
					$_POST["tuanhoan_ghichu"], 
					$_POST["tuanhoan_bacsy_hidden"], 
					$_POST["tuanhoan_phanloai_hidden"],
					$_POST["hohap_ghichu"], 
					$_POST["hohap_bacsy_hidden"], 
					$_POST["hohap_phanloai_hidden"],
					$_POST["tieuhoa_ghichu"], 
					$_POST["tieuhoa_bacsy_hidden"], 
					$_POST["tieuhoa_phanloai_hidden"],
					$_POST["thantietnieusinhduc_ghichu"], 
					$_POST["thantietnieusinhduc_bacsy_hidden"], 
					$_POST["thantietnieusinhduc_phanloai_hidden"],
					$_POST["thankinh_ghichu"], 
					$_POST["thankinh_bacsy_hidden"], 
					$_POST["thankinh_phanloai_hidden"],
					$_POST["tamthan_ghichu"], 
					$_POST["tamthan_bacsy_hidden"], 
					$_POST["tamthan_phanloai_hidden"],
					$_POST["hevandong_ghichu"], 
					$_POST["hevandong_bacsy_hidden"], 
					$_POST["hevandong_phanloai_hidden"],
					$_POST["noitiet_ghichu"], 
					$_POST["noitiet_bacsy_hidden"], 
					$_POST["noitiet_phanloai_hidden"],
					$_POST["benhtathientai"], 
					$_POST["hamtren"], 
					$_POST["hamduoi"],
					$_POST["ketquaxetnghiem_bacsy_hidden"],
					$_POST["ketquasieuam_bacsy_hidden"],
					$_POST["ketquaxquang_bacsy_hidden"],
					$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
					$_SESSION["user"]["id_user"]
 );

		$store_name="{call GD2_KhamSucKhoeCongTy_Update_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
	//print_r($params);
		//=====================
	}//and else
}
function hoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"], 
					$_POST["chuandoan_hidden"],
					$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KSK_HoanTat_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
	$check='';
	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?)';
	
    $params=  array($_POST["id_kham"], 
					$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
					$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
					$_POST["ck_matphai"], 
					$_POST["ck_mattrai"], 
					$_POST["kk_matphai"], 
					$_POST["kk_mattrai"], 
					$_POST["m_benhvemat"], 
					$_POST["m_bacsy_hidden"], 
					$_POST["m_phanloai_hidden"], 
					$_POST["taiphai_noithuong"], 
					$_POST["taiphai_noitham"], 
					$_POST["taitrai_noithuong"], 
					$_POST["taitrai_noitham"],
					$_POST["taimuihong_ghichu"], 
					$_POST["tmh_bacsy_hidden"], 
					$_POST["tmh_phanloai_hidden"],
					$_POST["ranghammat_ghichu"], 
					$_POST["rhm_bacsy_hidden"], 
					$_POST["rhm_phanloai_hidden"],
					$_POST["dalieu_ghichu"], 
					$_POST["dalieu_bacsy_hidden"], 
					$_POST["dalieu_phanloai_hidden"],
					$_POST["noikhoa_ghichu"], 
					$_POST["noikhoa_bacsy_hidden"], 
					$_POST["noikhoa_phanloai_hidden"],
					$_POST["ngoaikhoa_ghichu"], 
					$_POST["ngoaikhoa_bacsy_hidden"], 
					$_POST["ngoaikhoa_phanloai_hidden"],
					$_POST["sanphukhoa_ghichu"], 
					$_POST["sanphukhoa_bacsy_hidden"], 
					$_POST["sanphukhoa_phanloai_hidden"],
					$_POST["tuanhoan_ghichu"], 
					$_POST["tuanhoan_bacsy_hidden"], 
					$_POST["tuanhoan_phanloai_hidden"],
					$_POST["hohap_ghichu"], 
					$_POST["hohap_bacsy_hidden"], 
					$_POST["hohap_phanloai_hidden"],
					$_POST["tieuhoa_ghichu"], 
					$_POST["tieuhoa_bacsy_hidden"], 
					$_POST["tieuhoa_phanloai_hidden"],
					$_POST["thantietnieusinhduc_ghichu"], 
					$_POST["thantietnieusinhduc_bacsy_hidden"], 
					$_POST["thantietnieusinhduc_phanloai_hidden"],
					$_POST["thankinh_ghichu"], 
					$_POST["thankinh_bacsy_hidden"], 
					$_POST["thankinh_phanloai_hidden"],
					$_POST["tamthan_ghichu"], 
					$_POST["tamthan_bacsy_hidden"], 
					$_POST["tamthan_phanloai_hidden"],
					$_POST["hevandong_ghichu"], 
					$_POST["hevandong_bacsy_hidden"], 
					$_POST["hevandong_phanloai_hidden"],
					$_POST["noitiet_ghichu"], 
					$_POST["noitiet_bacsy_hidden"], 
					$_POST["noitiet_phanloai_hidden"], 
					$_POST["benhtathientai"], 
					$_POST["hamtren"], 
					$_POST["hamduoi"],
					$_POST["ketquaxetnghiem_bacsy_hidden"],
					$_POST["ketquasieuam_bacsy_hidden"],
					$_POST["ketquaxquang_bacsy_hidden"],
					$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
					$_SESSION["user"]["id_user"],
					array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
	$store_name="{call GD2_KhamSucKhoeCongTy_Insert_New $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================

	$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?,? ,?,?,?,?)';

	$params=  array($_POST["idkhamsk"], 
					$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
					$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
					$_POST["ck_matphai"], 
					$_POST["ck_mattrai"], 
					$_POST["kk_matphai"], 
					$_POST["kk_mattrai"], 
					$_POST["m_benhvemat"], 
					$_POST["m_bacsy_hidden"], 
					$_POST["m_phanloai_hidden"], 
					$_POST["taiphai_noithuong"], 
					$_POST["taiphai_noitham"], 
					$_POST["taitrai_noithuong"], 
					$_POST["taitrai_noitham"],
					$_POST["taimuihong_ghichu"], 
					$_POST["tmh_bacsy_hidden"], 
					$_POST["tmh_phanloai_hidden"],
					$_POST["ranghammat_ghichu"], 
					$_POST["rhm_bacsy_hidden"], 
					$_POST["rhm_phanloai_hidden"],
					$_POST["dalieu_ghichu"], 
					$_POST["dalieu_bacsy_hidden"], 
					$_POST["dalieu_phanloai_hidden"],
					$_POST["noikhoa_ghichu"], 
					$_POST["noikhoa_bacsy_hidden"], 
					$_POST["noikhoa_phanloai_hidden"],
					$_POST["ngoaikhoa_ghichu"], 
					$_POST["ngoaikhoa_bacsy_hidden"], 
					$_POST["ngoaikhoa_phanloai_hidden"],
					$_POST["sanphukhoa_ghichu"], 
					$_POST["sanphukhoa_bacsy_hidden"], 
					$_POST["sanphukhoa_phanloai_hidden"],
					$_POST["tuanhoan_ghichu"], 
					$_POST["tuanhoan_bacsy_hidden"], 
					$_POST["tuanhoan_phanloai_hidden"],
					$_POST["hohap_ghichu"], 
					$_POST["hohap_bacsy_hidden"], 
					$_POST["hohap_phanloai_hidden"],
					$_POST["tieuhoa_ghichu"], 
					$_POST["tieuhoa_bacsy_hidden"], 
					$_POST["tieuhoa_phanloai_hidden"],
					$_POST["thantietnieusinhduc_ghichu"], 
					$_POST["thantietnieusinhduc_bacsy_hidden"], 
					$_POST["thantietnieusinhduc_phanloai_hidden"],
					$_POST["thankinh_ghichu"], 
					$_POST["thankinh_bacsy_hidden"], 
					$_POST["thankinh_phanloai_hidden"],
					$_POST["tamthan_ghichu"], 
					$_POST["tamthan_bacsy_hidden"], 
					$_POST["tamthan_phanloai_hidden"],
					$_POST["hevandong_ghichu"], 
					$_POST["hevandong_bacsy_hidden"], 
					$_POST["hevandong_phanloai_hidden"],
					$_POST["noitiet_ghichu"], 
					$_POST["noitiet_bacsy_hidden"], 
					$_POST["noitiet_phanloai_hidden"], 
					$_POST["benhtathientai"], 
					$_POST["hamtren"], 
					$_POST["hamduoi"],
					$_POST["ketquaxetnghiem_bacsy_hidden"],
					$_POST["ketquasieuam_bacsy_hidden"],
					$_POST["ketquaxquang_bacsy_hidden"],
					$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
					$_SESSION["user"]["id_user"]
				);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
	//echo "update";
		//=====================
	}//and else
}
function luuhoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"], 
					$_POST["nhanvien_hidden"], 
 					$_POST["chuandoan_hidden"],
					$_SESSION["user"]["id_user"]
					);
	$store_name="{call GD2_KSKCTY_HoanTat_Update (?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	if($_POST["idkhamsk"]==0 && $_POST["idkhamsk"]!=""){
		$check='';
		$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?)';
		
		$params=  array($_POST["id_kham"], 
						$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
						$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
						$_POST["ck_matphai"], 
						$_POST["ck_mattrai"], 
						$_POST["kk_matphai"], 
						$_POST["kk_mattrai"], 
						$_POST["m_benhvemat"], 
						$_POST["m_bacsy_hidden"], 
						$_POST["m_phanloai_hidden"], 
						$_POST["taiphai_noithuong"], 
						$_POST["taiphai_noitham"], 
						$_POST["taitrai_noithuong"], 
						$_POST["taitrai_noitham"],
						$_POST["taimuihong_ghichu"], 
						$_POST["tmh_bacsy_hidden"], 
						$_POST["tmh_phanloai_hidden"],
						$_POST["ranghammat_ghichu"], 
						$_POST["rhm_bacsy_hidden"], 
						$_POST["rhm_phanloai_hidden"],
						$_POST["dalieu_ghichu"], 
						$_POST["dalieu_bacsy_hidden"], 
						$_POST["dalieu_phanloai_hidden"],
						$_POST["noikhoa_ghichu"], 
						$_POST["noikhoa_bacsy_hidden"], 
						$_POST["noikhoa_phanloai_hidden"],
						$_POST["ngoaikhoa_ghichu"], 
						$_POST["ngoaikhoa_bacsy_hidden"], 
						$_POST["ngoaikhoa_phanloai_hidden"],
						$_POST["sanphukhoa_ghichu"], 
						$_POST["sanphukhoa_bacsy_hidden"], 
						$_POST["sanphukhoa_phanloai_hidden"],
						$_POST["tuanhoan_ghichu"], 
						$_POST["tuanhoan_bacsy_hidden"], 
						$_POST["tuanhoan_phanloai_hidden"],
						$_POST["hohap_ghichu"], 
						$_POST["hohap_bacsy_hidden"], 
						$_POST["hohap_phanloai_hidden"],
						$_POST["tieuhoa_ghichu"], 
						$_POST["tieuhoa_bacsy_hidden"], 
						$_POST["tieuhoa_phanloai_hidden"],
						$_POST["thantietnieusinhduc_ghichu"], 
						$_POST["thantietnieusinhduc_bacsy_hidden"], 
						$_POST["thantietnieusinhduc_phanloai_hidden"],
						$_POST["thankinh_ghichu"], 
						$_POST["thankinh_bacsy_hidden"], 
						$_POST["thankinh_phanloai_hidden"],
						$_POST["tamthan_ghichu"], 
						$_POST["tamthan_bacsy_hidden"], 
						$_POST["tamthan_phanloai_hidden"],
						$_POST["hevandong_ghichu"], 
						$_POST["hevandong_bacsy_hidden"], 
						$_POST["hevandong_phanloai_hidden"],
						$_POST["noitiet_ghichu"], 
						$_POST["noitiet_bacsy_hidden"], 
						$_POST["noitiet_phanloai_hidden"], 
						$_POST["benhtathientai"], 
						$_POST["hamtren"], 
						$_POST["hamduoi"],
						$_POST["ketquaxetnghiem_bacsy_hidden"],
						$_POST["ketquasieuam_bacsy_hidden"],
						$_POST["ketquaxquang_bacsy_hidden"],
						$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
						$_SESSION["user"]["id_user"],
						array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
					);
		$store_name="{call GD2_KhamSucKhoeCongTy_Insert_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);
		//echo "insert";
	//=====================
	}else if($_POST["idkhamsk"]!=""){
		//=====================
		$chuoi='(?,?,? ,?,?,?,?,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,? ,?,?,?,?,? ,?,?,?,?)';
		$params=  array($_POST["idkhamsk"], 
					$_POST["klc_ketluan"].'|||'.$_POST["klc_ketquacls"], 
					$_POST["phanloaitl_hidden"].";".$_POST["phanloaisk_hidden"], 
					$_POST["ck_matphai"], 
					$_POST["ck_mattrai"], 
					$_POST["kk_matphai"], 
					$_POST["kk_mattrai"], 
					$_POST["m_benhvemat"], 
					$_POST["m_bacsy_hidden"], 
					$_POST["m_phanloai_hidden"], 
					$_POST["taiphai_noithuong"], 
					$_POST["taiphai_noitham"], 
					$_POST["taitrai_noithuong"], 
					$_POST["taitrai_noitham"],
					$_POST["taimuihong_ghichu"], 
					$_POST["tmh_bacsy_hidden"], 
					$_POST["tmh_phanloai_hidden"],
					$_POST["ranghammat_ghichu"], 
					$_POST["rhm_bacsy_hidden"], 
					$_POST["rhm_phanloai_hidden"],
					$_POST["dalieu_ghichu"], 
					$_POST["dalieu_bacsy_hidden"], 
					$_POST["dalieu_phanloai_hidden"],
					$_POST["noikhoa_ghichu"], 
					$_POST["noikhoa_bacsy_hidden"], 
					$_POST["noikhoa_phanloai_hidden"],
					$_POST["ngoaikhoa_ghichu"], 
					$_POST["ngoaikhoa_bacsy_hidden"], 
					$_POST["ngoaikhoa_phanloai_hidden"],
					$_POST["sanphukhoa_ghichu"], 
					$_POST["sanphukhoa_bacsy_hidden"], 
					$_POST["sanphukhoa_phanloai_hidden"],
					$_POST["tuanhoan_ghichu"], 
					$_POST["tuanhoan_bacsy_hidden"], 
					$_POST["tuanhoan_phanloai_hidden"],
					$_POST["hohap_ghichu"], 
					$_POST["hohap_bacsy_hidden"], 
					$_POST["hohap_phanloai_hidden"],
					$_POST["tieuhoa_ghichu"], 
					$_POST["tieuhoa_bacsy_hidden"], 
					$_POST["tieuhoa_phanloai_hidden"],
					$_POST["thantietnieusinhduc_ghichu"], 
					$_POST["thantietnieusinhduc_bacsy_hidden"], 
					$_POST["thantietnieusinhduc_phanloai_hidden"],
					$_POST["thankinh_ghichu"], 
					$_POST["thankinh_bacsy_hidden"], 
					$_POST["thankinh_phanloai_hidden"],
					$_POST["tamthan_ghichu"], 
					$_POST["tamthan_bacsy_hidden"], 
					$_POST["tamthan_phanloai_hidden"],
					$_POST["hevandong_ghichu"], 
					$_POST["hevandong_bacsy_hidden"], 
					$_POST["hevandong_phanloai_hidden"],
					$_POST["noitiet_ghichu"], 
					$_POST["noitiet_bacsy_hidden"], 
					$_POST["noitiet_phanloai_hidden"], 
					$_POST["benhtathientai"], 
					$_POST["hamtren"], 
					$_POST["hamduoi"],
					$_POST["ketquaxetnghiem_bacsy_hidden"],
					$_POST["ketquasieuam_bacsy_hidden"],
					$_POST["ketquaxquang_bacsy_hidden"],
					$_POST["ketquaxetnghiem_ghichu"].'|||'.$_POST["ketquasieuam_ghichu"].'|||'.$_POST["ketquaxquang_ghichu"],
					$_SESSION["user"]["id_user"]
				);

		$store_name="{call GD2_KhamSucKhoeCongTy_Update_New $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		//echo "update";
		//=====================
	}//and else
}
?>