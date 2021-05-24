<?php
		
	if( $_POST['NgayBatDau']==''){
			$_POST['NgayBatDau']=null;
		}else{
			$_POST['NgayBatDau']=implode("/",array_reverse(explode("/", $_POST['NgayBatDau'])));
		}
	
	if( $_POST['NgayKetThuc']==''){
			$_POST['NgayKetThuc']=null;
		}else{
			$_POST['NgayKetThuc']=implode("/",array_reverse(explode("/", $_POST['NgayKetThuc'])));
		}
if($_POST['oper']=='add'){
	
        $data= new SQLServer;
        $store_name="{call GD2_NhanVien_hd_insert(?,?,?,?,?,?,?)}";
        $params = array(	
				$_POST['ID_LoaiHopDong'],
				$_POST['id_nhanvien'],
				$_POST['NgayBatDau'],
				$_POST['NgayKetThuc'],	
				$_POST['Active'],			
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']		 	
        );
		
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
	
}else if($_POST['oper']=='edit'){
	 $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_hd_update(?,?,?,?,?,?,?)}";
        $params = array(	
				$_POST['id'],
				$_POST['ID_LoaiHopDong'],
				$_POST['NgayBatDau'],
				$_POST['NgayKetThuc'],	
				$_POST['Active'],			
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']		 	
        );
	
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
}else if($_POST['oper']=='del'){
	 $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_NhanVien_hd_del(?,?,?)}";
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

