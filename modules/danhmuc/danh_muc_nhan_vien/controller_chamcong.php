<?php		

if($_POST['oper']=='add'){
        $data= new SQLServer;
        $store_name="{call Gd2_ChamCong_Add (?,?,?,?,?)}";
        $params = array(	
				$_POST['manv'],
				$_POST['MaCc'],
				$_POST['TenNgon'],
				$_POST['id_nhanvien'],
				$_SESSION['user']['id_user'] 	
        );		
		$get=$data->query( $store_name, $params);
	
}else if($_POST['oper']=='edit'){
	 	$data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call Gd2_ChamCong_update(?,?,?,?)}";
        $params = array(	
				$_POST['MaCc'],
				$_POST['TenNgon'],			
				$_SESSION['user']['id_user'],
				$_POST['id'],
        );
	
		$get=$data->query( $store_name, $params);
}else if($_POST['oper']=='del'){
	 $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call GD2_MaCCDetails_Del(?,?,?)}";
        $params = array(	
				$_POST['id'],
				$_SESSION['user']['id_user'],
				$_SERVER['REMOTE_ADDR']
        );	
	
		$get=$data->query( $store_name, $params);
}


?>

