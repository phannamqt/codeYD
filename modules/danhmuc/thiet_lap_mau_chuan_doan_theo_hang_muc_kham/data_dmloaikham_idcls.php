<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name1="{call GD2_DM_LoaiKham_SelectAll_ID_NhomCLS_NhomChanDoan_New (?,?)}";
	$params = array($_GET["id_nhomcls"],$_GET["id_nhomxephang_parent"]); 
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
			'ID_NhomCLS'				=> $row["ID_NhomCLS"],
	    );
	    $i++; 
	}
	if (isset($responce)) {
		echo json_encode($responce);
	}else{}
	
?>