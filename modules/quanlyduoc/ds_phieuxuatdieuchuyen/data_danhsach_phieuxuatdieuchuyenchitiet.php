<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetAllThuocByIDNhapKho(?)}";//tao bien khai bao store
$params = array($_GET['id_nhapkho']);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayHetHan"]!='')
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayHetHan"]='';
	
    $responce->rows[$i]['id']=$row['ID_NhapKhoChiTiet'];
    $responce->rows[$i]['cell']=array($row["TenGoc"],
	$row["TenDonViTinh"],
	$row["SoLuong"],
	$row["DonGia"],
	$row["ThanhTien"],
	$row["SoLoHeThong"],
	$row["SoLoNhaSanXuat"],
	$row["NgayHetHan"]
	);
    $i++; 
}   
echo json_encode($responce);
?>