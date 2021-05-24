<?php
		
		 if($_POST["congty1"]==''){
			  $_POST["congty1"]=0;
		 }
		  if($_POST["quoctich1"]==''){
			  $_POST["quoctich1"]=0;
		 }
		  if($_POST["nghenghiep1"]==''){
			  $_POST["nghenghiep1"]=0;
		 }
		  if($_POST["xaphuong1"]==''){
			  $_POST["xaphuong1"]=0;
		 }
		 $mabenhnhan="";
		 $idbenhnhan="";
		 if($_POST["ngaysinh"]==""||$_POST["ngaysinh"]==0||$_POST["thangsinh"]==""||$_POST["thangsinh"]==0){
			 $ngaysinh="";
		 }else{
			$ngaysinh=	 $_POST["namsinh"]."-".$_POST["thangsinh"]."-".$_POST["ngaysinh"];
		 }
		 $_POST["holot"] = trim($_POST["holot"], " ");
		
		 $_POST["holot"] = ucwords(strtolower(mb_convert_case($_POST["holot"], MB_CASE_TITLE, "UTF-8")));
		 $_POST["tenbn"] = trim($_POST["tenbn"], " ");
		 $_POST["tenbn"] = ucwords(strtolower(mb_convert_case($_POST["tenbn"], MB_CASE_TITLE, "UTF-8")));
		 $_POST["dienthoai1"] = trim($_POST["dienthoai1"], " ");
		 $_POST["dienthoai2"] = trim($_POST["dienthoai2"], " ");
		 $_POST["sonha"] = trim($_POST["sonha"], " ");
		 $_POST["sonha"] = ucwords(strtolower(mb_convert_case($_POST["sonha"], MB_CASE_TITLE, "UTF-8")));
		 $_POST["nlh"] = trim($_POST["nlh"], " ");
		 $_POST["nlh"] = ucwords(strtolower(mb_convert_case($_POST["nlh"], MB_CASE_TITLE, "UTF-8")));
		 $_POST["quanhebn"] = trim($_POST["quanhebn"], " ");
		 $_POST["dt_nguoilh"] = trim($_POST["dt_nguoilh"], " ");
		 $_POST["dc_nguoilh"] = trim($_POST["dc_nguoilh"], " ");
		 $_POST["quanhe"] = trim($_POST["quanhe"], " ");
		 if(trim($_POST["thangtuoi"], " ")==''){
			$_POST["thangtuoi"]=null; 
		 }
		if(trim($_POST["congty1"], " ")==''){
			$_POST["congty1"]=null; 
		 }
		 if(trim($_POST["quoctich"], " ")==''){
			$_POST["quoctich"]=null; 
		 }
		 if(trim($_POST["nghenghiep"], " ")==''){
			$_POST["nghenghiep"]=null; 
		 }
		

		
		
		
		// print_r($_POST);
	$data= new SQLServer;
	if($_GET['oper']=='add'){
		$store_name="{call GD2_DM_benhnhan_add (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params = array(
		//$_POST["hinhbenhnhan"],
		$_POST["holot"],
		$_POST["tenbn"],
		$ngaysinh,
		$_POST["thangtuoi"],
		$_POST["namsinh"],
		$_POST["sex"],
		$_POST["dienthoai1"],
		$_POST["dienthoai2"],
		$_POST["sonha"],
		$_POST["congty1"],	
		$_POST["quoctich"],
		$_POST["nghenghiep"],
		$_POST["nlh"],
		$_POST["quanhebn"],
		$_POST["dt_nguoilh"],
		$_POST["dc_nguoilh"],
		$_SESSION["user"]["id_user"],
		$_POST["xaphuong1"],
		$_POST["quanhe"],$_POST["email"],
		array(&$mabenhnhan,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),
		array(&$idbenhnhan,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		);
		$tam=$data->query( $store_name, $params);//Goi store	 	
		echo ";".$mabenhnhan.";".$idbenhnhan;
		$store_name2="{call GD2_demsophieu_update (?,?,?)}";
		$params2 = array(
		'FormatMaBenhNhan',
		$mabenhnhan,
		$mabenhnhan
		);
		$get_danh_muc_phong_ban=$data->query( $store_name2, $params2);
	}else{
		$store_name="{call GD2_DM_benhnhan_edit (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?)}";
		$params = array(
		//$_POST["hinhbenhnhan"],
		$_GET["idbenhnhan"],
		$_POST["holot"],
		$_POST["tenbn"],
		$ngaysinh,
		$_POST["thangtuoi"],
		$_POST["namsinh"],
		$_POST["sex"],
		$_POST["dienthoai1"],
		$_POST["dienthoai2"],
		$_POST["sonha"],
		$_POST["congty1"],	
		$_POST["quoctich"],
		$_POST["nghenghiep"],
		$_POST["nlh"],
		$_POST["quanhebn"],
		$_POST["dt_nguoilh"],
		$_POST["dc_nguoilh"],
		$_SESSION["user"]["id_user"],
		$_POST["xaphuong1"],
		$_POST["quanhe"],
		$_POST["email"]
		);
		//print_r($params);
		$tam=$data->query( $store_name, $params);//Goi store	
		//print_r($tam);
			//echo 1;
	}
?>