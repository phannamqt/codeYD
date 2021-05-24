<?php

$data= new SQLServer;
$store_name="{call GD2_DmBenhnhan_vantay(?)}";
$params = array($_GET['id_auto']);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	
$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$responce->records = 1;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 		if($row["NgayThangNamSinh"]==""){
			$row["NgayThangNamSinh"]=$row["NgayThangNamSinh"]; 
		 }else{
			$row["NgayThangNamSinh"]=$row["NgayThangNamSinh"]->format('d-m-Y');
		 }	
		 
		 if(!isset($row["ID_The"])){		
		 	$row["ID_The"]='';
		 }
		 if(!isset($row["SoThe"])){		
		 	$row["SoThe"]='';
		 }
    $responce->rows[$i]['id']=$row['ID_BenhNhan'];
    $responce->rows[$i]['cell']=array(	
	
		$row['ID_BenhNhan'],
			$row['MaBenhNhan'],
			$row['HoLotBenhNhan'],
			$row['TenBenhNhan'],
			$row['NgayThangNamSinh'],
			$row['NamSinh'],
			$row['GioiTinh'],
			$row['DienThoai1'],
			$row['DienThoai2'],
			$row['DiaChi'],
			$row['ID_NgheNghiep'],
			$row['TenNguoiLienHe'],
			$row['QuanHeVoiBN'],
			$row['DienThoaiNguoiLienHe'],
			$row['GhiChu'],
			$row['QuanHeVoiBenhVien'],
			$row["ID_The"],
			$row["SoThe"]
				);
    $i++; 
}   
echo json_encode($responce);
?>