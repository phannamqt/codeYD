<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name1="{call GD2_DM_NhomTemplate_Select_ByID_NhomTemplate (?)}";
	$params = array($_GET["id_nhomtemplate"]); 
	$get=$data->query( $store_name1, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		$responce[] = array(
	    	'id'						=> $row["ID_LoaiKham_NhomTemplate"],
	    	'STT'						=> $i+1,
	    	'TenLoaiKham'				=> $row["TenLoaiKham"],
			'MaVietTat'					=> $row["MaVietTat"],
			'TenNhom'					=> $row["TenNhom"],
			'TenNhomCLS'				=> $row["TenNhomCLS"],

			'ID_LoaiKham'				=> $row["ID_LoaiKham"],
			'ID_NhomTemplate'			=> $row["ID_NhomTemplate"],
			'ID_NhomCLS'				=> $row["ID_NhomCLS"],
			'ID_LoaiKham_NhomTemplate'	=> $row["ID_LoaiKham_NhomTemplate"],
	    );
	    $i++; 
	}
	echo json_encode($responce);
?>