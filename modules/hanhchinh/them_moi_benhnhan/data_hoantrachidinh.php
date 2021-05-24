<?php
$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]);//echo $tu_ngay;
 }
 else
 {
  $tu_ngay=date("Y-m-d").' 0:00:00';
   // echo $tu_ngay;
}
if(isset($_GET["den_ngay"]))
{
  $den_ngay=$_GET["den_ngay"];
$den_ngay= convert_date($den_ngay).' 23:59:59';//echo $den_ngay;
}
else
{
 $den_ngay=date("Y-m-d").' 23:59:59';
}

//null,43283,null,'2014-7-17','2014-9-24' ,'PHYSIO','DieuTriPhoiHop',0

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Kham_SelectChiDinhDaLapBill_ByThoiGianLuotKham(?,?,?,?,?,?)}";//tao bien khai bao store
$params = array($_GET['ID_BenhNhan'],$tu_ngay,$den_ngay,'PHYSIO','DieuTriPhoiHop',$_GET['LoaiChiDinh']);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;
$k=0;
//ID_Kham	ID_LuotKham	ID_LoaiKham	NgayGioTao	ID_PhongChuyenMon	BSChiDinh	BSChanDoan	NgayGioChanDoan	NguoiGioiThieu	NgayGioGioiThieu	NguoiDoc	NgayGioDoc	NguoiThucHien	NgayGioThucHien	TroLy	ChanDoan	MoTa	KetLuan	Hinh	ID_TrangThai	NguoiHuyBo	NgayGioHuyBo	LyDoHuyBo	NgayGioKetThuc	PhiThucHien	PhiDuKien	GiamGia	NguoiGiam	LyDoGiam	STT	ThanhToan	KhongThucHien	GhiChu	SoNgayLuuHinhKQ	GiaThueNgoaiThucHien	ID_Template	MaBenhNhan	ThongSoKyThuat	NguoiThucHien2	NgayGioHenTraKQ	IsDieuTriTaiNha	ExtField1	NgayGioTraKQ	ID_NguoiTraKQ	IsBacSyChinh	PhuongThucThucHien	TongPhuThu	DaThanhToan	BSDuocChiDinhThucHien	IsPrinted	GhiChuNhanVien	ID_NguoiSua	NgayGioSua	GiaBaoHiem	PhanTramCungChiTra	ThanhTienCungChiTra	GiaPhuTHuBenhVien	ThanhTienPhuThuBenhVien	ThanhTienBaoHiem	Id_LanChiDinh	MaICD10	IsNoiTru	Id_PhongBanChiDinh	TenLoaiKham	TenBSChiDinh	TenTrangThaiCLSCuaBenhNhan	ThoiGianVaoKham	TenPhanLoaiKham	NickName	ID_BenhNhan	ID_PHYSIOTHERAPY	ID_DieuTriPhoiHop	SONGAYTHUCHIEN	SoLanThucHienTrongNgay	DonGia
//1313333	324878	3923	2014-08-26 07:55:45.030	0	32	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	DangCho	NULL	NULL	NULL	NULL	110000	110000	0	NULL	NULL	2	NULL	0	NULL	NULL	0	NULL	89045	NULL	NULL	2014-08-27 03:55:45.030	0		NULL	NULL	0	0	0	1	NULL	0	NULL	NULL	NULL	0	NULL	NULL	0	0	0	1	NULL	0	NULL	Đo tim thai và cơn go tử cung	Đoàn Thị Ngọc Thúy	Đang chờ	2014-08-26 07:55:19.883	Khám LS 0 phí	Thúy A	43283	0	0	1	1	110000
foreach ($tam as $row) {//duyet toan bo mang tra ve SONGAYTHUCHIEN
    $responce->rows[$i]['id']=$k;
    $responce->rows[$i]['cell']=array(
			$row['ID_LuotKham'],
			$row['ID_Kham'],
			$row['TenLoaiKham'],
			$row['NgayGioTao']->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
			$row['TenBSChiDinh'],
			$row['SoNgayThucHien'],
			$row['SoLanThucHienTrongNgay'],
			$row['DonGia'],
			$row['PhiThucHien'],
			$row['ThanhTienBaoHiem'],
			$row['HoTroTuBenhVien'],
			$row['GiamGia'],
			$row['BHCCTra'],
			
			$row['KhauHaoDichVu'],
			$row['KhauHaoThuocVTYT'],
			
			$row['PhiThucHien']-$row['ThanhTienBaoHiem']-$row['HoTroTuBenhVien']-$row['BHCCTra']-$row['KhauHaoDichVu']-$row['KhauHaoThuocVTYT']-$row['GiamGia'],
			$row['TenTrangThaiCLSCuaBenhNhan'],
			$row['isDalap'],
			$row['ID_LoaiKham'],
			$row['ID_DieuTriPhoiHop'],
			$row['ID_Physiotherapy']
    	);
    $i++;
    $k++;
}
echo json_encode($responce);
?>