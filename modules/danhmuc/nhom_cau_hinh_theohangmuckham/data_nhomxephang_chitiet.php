<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name1="{call GD2_NhomXepHangChiTiet_SelectAll_ByID_Parent (?)}";
	$params = array($_GET["id_nhomxephang"]); 
	$get=$data->query( $store_name1, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		$responce[] = array(
	    	'id'						=> $row["ID_LoaiKham"],
	    	'STT'						=> $i+1,
	    	'TenLoaiKham'				=> $row["TenLoaiKham"],
			'MaVietTat'					=> $row["MaVietTat"],
			'TenNhom'					=> $row["TenNhom"],
			'ID_NhomXepHangChiTiet'		=> $row["ID_NhomXepHangChiTiet"],
	    );
	    $i++; 
	}
	echo json_encode($responce);
?>