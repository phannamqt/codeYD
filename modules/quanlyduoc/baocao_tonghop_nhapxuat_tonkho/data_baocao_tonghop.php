<?php
$data= new SQLServer;//tao lop ket noi SQL

$ngaybd=$_GET["from_day"];
$ngaykt=$_GET["to_day"]; //04/30/2014  //1/4/14
$ngaybatdau= convert_date($ngaybd);
$ngayketthuc= convert_date($ngaykt);
if($_GET["tenkho"]==0){
	$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON_test(?,?,?,?,?)}";//tao bien khai bao store
}else{
	$store_name="{call GD2_RPT_TONGHOP_XUATNHAP_TON(?,?,?,?,?)}";//tao bien khai bao store
}

$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],'',$_GET["n_order"]);

//print_r($params);
//$params = array($ngaybatdau,$ngayketthuc,$_GET["tenkho"],'',$_GET["n_order"]);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

global $responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["NgayHetHan"]!=''){
	$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
}
   $responce[] = array(
	'id'         => $i,   
	'id_thuoc'         => $row["ID_Thuoc"],
	'MaThuoc'    =>$row["MaThuoc"],	
	'TenThuoc'    =>$row["TenBietDuoc"],

	'TenDonViTinh'    =>$row["TenDonViTinh"],
	'SoLoHeThong'    =>$row["SoLo"],
	'SoLoNSX'    =>$row["SoLoNhaSanXuat"],
	'GiaVon'    =>$row["DonGia"],
	'GiaBan'    =>$row["GiaBan"],
	'SoLuongTonDau'    =>$row["SL_TD"],
	'ThanhTienTonDau'    =>$row["TT_TD"],
	'SoLuongNhapTrongKy'    =>$row["SL_N"],
	'ThanhTienNhapTrongKy'    =>$row["TT_N"],
	'SoLuongXuatTrongKy'    =>$row["SL_X"],
	'ThanhTienXuatTrongKy'    =>$row["TT_X"],
	'SoLuongTon'    =>$row["SL_TON"],
	'ThanhTienTon'    =>$row["TT_TON"],
	'HanSuDung'    =>$row["NgayHetHan"],
	'UuTienXuat'    =>$row["STT_UUTIEN"],
	'ID_NhaCungCap'    =>$row["ID_NCC"],
	'TenNhaCungCap'    =>$row["TenNCC"],
	'ID_Kho'    =>$row["ID_Kho"],
	'ID_Nhom'    =>$row["ID_Nhom"],
	);
    $i++; 
}   
if($responce==null){
	echo '{}';
}else{
echo json_encode($responce);
}
?>