<?php
if($_POST['oper']=='add'){
        $data= new SQLServer;
       $store_name="{call  GD2_Xetnghiem_insert_newcmc(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?)}";
        $params = array(	
		 $_POST['id_lk'],
				$_POST['TenXetNghiem'],
				$_POST['MoTa'],
				$_POST['DonGia'],
				$_POST['GhiChu'],
				
				$_POST['CanNam1'],
				$_POST['CanNam2'],
				$_POST['CanNam3'],
				$_POST['CanNam4'],
				$_POST['CanNu1'],
				
				$_POST['CanNu2'],
				$_POST['CanNu3'],
				$_POST['CanNu4'],
				$_POST['Red'],
				$_POST['Blue'],
				
				$_POST['Yellow'],
				$_POST['HeSoChuyenDoi'],
				$_POST['GiaTriBinhThuong1'],
				$_POST['GiaTriBinhThuong2'],
				$_POST['CoKQInRieng'],
				
				$_POST['CoTemplate'],
				$_POST['STT'],
				$_POST['ID_DonViTinh'],
				$_POST['Active'],
				$_SESSION['user']['id_user']	,
				$_SERVER['REMOTE_ADDR']
        );		
	//	print_r($params);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
	
}else if($_POST['oper']=='edit'){
	 	$data= new SQLServer;//tao lop ket noi SQL
        
		
		$params4=array($_POST['id'],
				//$_POST['id'],
				$_POST['TenXetNghiem'],
				$_POST['MoTa'],
				$_POST['DonGia'],
				$_POST['GhiChu'],
				
				$_POST['CanNam1'],
				$_POST['CanNam2'],
				$_POST['CanNam3'],
				$_POST['CanNam4'],
				$_POST['CanNu1'],
				
				$_POST['CanNu2'],
				$_POST['CanNu3'],
				$_POST['CanNu4'],
				$_POST['Red'],
				$_POST['Blue'],
				
				$_POST['Yellow'],
				$_POST['HeSoChuyenDoi'],
				$_POST['GiaTriBinhThuong1'],
				$_POST['GiaTriBinhThuong2'],
				$_POST['CoKQInRieng'],
				
				$_POST['CoTemplate'],
				$_POST['STT'],
				$_POST['ID_DonViTinh'],
				$_POST['Active'],
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']
				);
				$store_name2="{call GD2_Xetnghiem_Update_thaonew(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?)}";
			    print_r($_POST);
			   $get4=$data->query( $store_name2, $params4);
}
else if($_GET['oper']=='delxn'){
	$check1='';
	 
		
		$data= new SQLServer;//tao lop ket noi SQL
        
 		$params4=array(
		 $_GET['ID_XetNghiem'],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],
		array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)	
		);
	   // print_r($params1);
		$store_name2="{call GD2_Xetnghiem_del(?,?,?,?)}";
	   // print_r($params4);
	   $get4=$data->query( $store_name2, $params4);
	   echo $check1;
}


?>