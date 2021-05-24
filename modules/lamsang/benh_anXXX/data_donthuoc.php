<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array( $_GET["iddonthuoc"]);//tao param cho store 
$store_name="{call GD2_DonThuocChiTiet_byID_DonThuoc (?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(
	
	$row["trangthaidonthuoc"],
	$row["ID_DonThuocCT"],
	$row["ID_DuongDungThuoc"],
	$row["LaVatTuTieuHao"],
	$row["IsBhyt"],
	'',
	$row["ID_Thuoc"],
	$row["Gia"],
	$row["ID_DuongDungThuoc"],
	$row["LuongThuocDungTrong1Ngay"],
	$row["SoThuocDeNghiTheoDon"],	
	$row["SoThuocThucXuat"],	 
	$row["CachDung"],
	$row["PhuongThucThucHien"],
	
	
	);	 
    $i++; 
}
echo json_encode($responce);
?>
