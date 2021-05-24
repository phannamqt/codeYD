<?php
		
if($_POST['oper']=='add'){
        $data= new SQLServer;
        $store_name="{call GD2_NhanVien_bc_insert(?,?,?,?,?)}";
        $params = array(	
				$_POST['ID_LoaiBangCap'],
				$_POST['id_nhanvien'],
				$_POST['GhiChu'],					
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']		 	
        );		
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
}else if($_POST['oper']=='edit'){
	 $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_bc_update(?,?,?,?,?)}";
        $params = array(	
				$_POST['id'],
				$_POST['ID_LoaiBangCap'],				
				$_POST['GhiChu'],						
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']		 	
        );
		print_r($params);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
}
else if($_POST['oper']=='del'){
	 $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_bc_del(?,?,?)}";
        $params = array(	
				$_POST['id'],
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']				 	
        );	
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
}

?>

