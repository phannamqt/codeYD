<?php
$data= new SQLServer;
$tungay=convert_date($_GET["tungay"]).' 0:00:00';
$denngay=convert_date($_GET["denngay"]).' 23:59:59';
$store_name="{call GD2_ThongTinLuotKham_SelectLichHenTraKetQua(?,?)}";
$params = array($tungay,$denngay);

$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$responce='';
$i=0;
$x=1000;
foreach ($tam as $row) {
	
	if($row["ThoiGianVaoKham"]!=''){
		$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	}else{
		 $row["ThoiGianVaoKham"]='';
	}
	if($row["NgayGioHenTraKQ"]!=''){
		$row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	}else{
		 $row["NgayGioHenTraKQ"]='';
	}
	
  $responce[] = array(
		'id'					=> $i+1,
		'STT'					=> $i+1,
		'MaBN'					=> $row["MaBenhNhan"],
		'HoTenBN'				=> $row["HoLotBenhNhan"].' '.$row["TenBenhNhan"],
		'DienThoai'				=> $row["DienThoai1"],
		'DiaChi'				=> $row["DiaChi"],
		'NgayVaoKham'			=> $row["ThoiGianVaoKham"],
		'NgayHenTraKQ'			=> $row["NgayGioHenTraKQ"],
		'NguoiHenTraKQ'			=> $row["HoTenNguoiTraKQ"],
		'TrangThai'				=> $row["TrangThai"],
		'ID_LuotKham'			=> $row["ID_LuotKham"],
		'DaTraKQ'				=> $row["DaTraKQ"],
		'HoTenBS'				=> $row["HoTenBS"],
		'BHCC'					=> $row["BHCC"],
	);
    $i++; 
}
echo json_encode($responce);
?>