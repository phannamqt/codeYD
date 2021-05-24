<?php
$data= new SQLServer;//tao lop ket noi SQL

$ngaybatdau=convert_date($_GET["from_day"]).' 0:00:00';
$ngayketthuc=convert_date($_GET["from_day"]).' 23:59:59';
$store_name="{call GD2_ThongTinLuotKham_SelectLichHenTaiKham(?,?,?)}";//tao bien khai bao store
$params = array($ngaybatdau,$ngayketthuc,$_GET["theo"]);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["NgayHenTaiKham"]!=''){
	$row["NgayHenTaiKham"]=$row["NgayHenTaiKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}
if($row["NgayHetThuoc"]!=''){
	$row["NgayHetThuoc"]=$row["NgayHetThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
}
if($row["NgayGioGoi"]!=''){
	$row["NgayGioGoi"]=$row["NgayGioGoi"]->format($_SESSION["config_system"]["ngaythang"]);
}
if($row["NgayHenTaiKham"]!=''){
	$hentk="Có";
}else{
	$hentk="Không";
	}
if($row["NgayGioGoi"]!=''){
	$row["KetQuaCuocGoi"]=$row["KetQuaCuocGoi"];
}else{
	$row["KetQuaCuocGoi"]="Chưa gọi lần nào";
	}
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["MaBenhNhan"],
	$row["HoLotBenhNhan"],
	$row["TenBenhNhan"],
	$row["Tuoi"],
	$row["GioiTinh"],
	$row["DienThoai1"],
	$row["DiaChi"],
	$row["NickName"],
	$hentk,
	$row["NgayHenTaiKham"],
	$row["NgayHetThuoc"],
	$row["NgayGioGoi"],
	$row["KetQuaCuocGoi"],
	$row["NickNameNguoiGoi"]
	);
    $i++; 
}   
echo json_encode($responce);
?>