<?php
$data= new SQLServer;
$params = array($_GET['id']);
$store_name="{call GD2_DM_LoaiKham_SelectByID_LoaiKham(?)}";
$get=$data->query( $store_name,$params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$responce;
if($tam[0]["TenBHYT"]==NULL)
	$tam[0]["TenBHYT"]='';

if($tam[0]["IsHoTro"]==NULL)
	$tam[0]["IsHoTro"]=0;

	
  $responce = array(
		'id'				=> $tam[0]["ID_LoaiKham"],
		'ID_LoaiKham'		=> $tam[0]["ID_LoaiKham"],
		'TenLoaiKham' 		=> $tam[0]["TenLoaiKham"],
		'MaVietTat' 		=> $tam[0]["MaVietTat"],
		'MaVietTat_BN' 		=> $tam[0]["MaVietTat_BN"],
		'ID_NhomCLS' 		=> $tam[0]["ID_NhomCLS"],
		'MoTa'				=> $tam[0]["MoTa"],
		'GiaBaoChoBN'		=> $tam[0]["GiaBaoChoBN"],
		'GiaThueNgoaiThucHien'		=> $tam[0]["GiaThueNgoaiThucHien"],
		'ThoiGianTrungBinhThucHien'	=> $tam[0]["ThoiGianTrungBinhThucHien"],
		'ThoiGianCoKetQua'	=> $tam[0]["ThoiGianCoKetQua"],
		'GhiChu'			=> $tam[0]["GhiChu"],
		'LoiKhuyen'			=> $tam[0]["LoiKhuyen"],
		'Active'			=> $tam[0]["Active"],
		'STT'				=> $tam[0]["STT"],
		'CLS'				=> $tam[0]["CLS"],
		'XetNghiem'			=> $tam[0]["XetNghiem"],
		'CoLuuKQInRieng'	=> $tam[0]["CoLuuKQInRieng"],
		'DieuTriTaiNha'		=> $tam[0]["DieuTriTaiNha"],
		'CoMauNhapKQ'		=> $tam[0]["CoMauNhapKQ"],
		'PathToTemplateFile'=> $tam[0]["PathToTemplateFile"],
		'TenLoaiKham_EN'	=> $tam[0]["TenLoaiKham_EN"],
		'ReportName'		=> $tam[0]["ReportName"],
		'CoTheKeToa'		=> $tam[0]["CoTheKeToa"],
		'ThuocNhomXepHangCLS'		=> $tam[0]["ThuocNhomXepHangCLS"],
		'PhanTramDieuChinhGiaTaiNha'=> $tam[0]["PhanTramDieuChinhGiaTaiNha"],
		'PhuThuThucHienTaiNha'		=> $tam[0]["PhuThuThucHienTaiNha"],
		'GiaTaiNhaDieuChinhTheoNhom'=> $tam[0]["GiaTaiNhaDieuChinhTheoNhom"],
		'CoFormChucNangRieng'		=> $tam[0]["CoFormChucNangRieng"],
		'SoPhimLonTieuHao'			=> $tam[0]["SoPhimLonTieuHao"],
		'SoPhimNhoTieuHao'			=> $tam[0]["SoPhimNhoTieuHao"],
		'SoPhimNhuAnhTieuHao'		=> $tam[0]["SoPhimNhuAnhTieuHao"],
		'TuyenHuyen'				=> $tam[0]["TuyenHuyen"],
		'TuyenTinh'					=> $tam[0]["TuyenTinh"],
		'TuyenTrungUong'			=> $tam[0]["TuyenTrungUong"],
		'GiaBaoHiem'				=> $tam[0]["GiaBaoHiem"],
		'GiaPhuThuBenhVien'			=> $tam[0]["GiaPhuThuBenhVien"],
		'ID_Nhom_BHYT'				=> $tam[0]["ID_Nhom_BHYT"],
		'TenBHYT'					=> $tam[0]["TenBHYT"],
		'Color'						=> $tam[0]["Color"],
		'TenNhom'					=> $tam[0]["TenNhom"],
		'Ten_Nhom_BHYT'				=> $tam[0]["Ten_Nhom_BHYT"],
		'PhanTramThue'				=> $tam[0]["PhanTramThue"],
		'IsThamMy'					=> $tam[0]["IsThamMy"],
		'STT_BHYT'					=> $tam[0]["STT_BHYT"],
		'MaSoTheoDVBHYT'			=> $tam[0]["MaSoTheoDVBHYT"],
		'ID_NhomLSP'				=> $tam[0]["ID_NhomLSP"],
		'Khauhaovtyt'				=> $tam[0]["KhauHaoThuocVTYT"],
		'Khauhaodv'				=> $tam[0]["KhauHaoDichVu"],
		'TruongHopBHYT'				=> $tam[0]["TruongHopBHYT"],
		 'IsHoTro'				=> $tam[0]["IsHoTro"],
		 'Loai'				=> $tam[0]["Loai"],
		 'GiaKSKCT'				=> $tam[0]["GiaKSKCT"],
	);
echo json_encode($responce);

?>