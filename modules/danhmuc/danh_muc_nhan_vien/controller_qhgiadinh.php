<?php
		


if($_POST['oper']=='add'){
        $data= new SQLServer;
        $store_name="{call GD2_NhanVien_qhgd_insert(?,?,?,?,?,?)}";
        $params = array(	
				$_POST['MaBenhNhan'],
				$_POST['id_nhanvien'],
				$_POST['ID_LoaiQuanHe'],
				$_POST['Active'],				
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']		 	
        );
		
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
}else if($_POST['oper']=='edit'){
	 $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_qhgd_update(?,?,?,?,?,?)}";
        $params = array(	
				$_POST['id'],
				$_POST['MaBenhNhan'],				
				$_POST['ID_LoaiQuanHe'],
				$_POST['Active'],				
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']		 	
        );
		//print_r($params);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
}


?>

