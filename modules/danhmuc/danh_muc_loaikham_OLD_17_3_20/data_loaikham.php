<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$table = "DM_LoaiKham";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_DM_LoaiKham_SelectAll_NewLuoiMoi()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["TenBHYT"]==NULL)
	$row["TenBHYT"]='';
  $responce[] = array(
		'id'				=> $row["ID_LoaiKham"],
	
		'TenLoaiKham' 		=> $row["TenLoaiKham"],
		//'MaVietTat' 		=> $row["MaVietTat"],
		//'MaVietTat_BN' 		=> $row["MaVietTat_BN"],
		'ID_NhomCLS' 		=> $row["ID_NhomCLS"],
		//'MoTa'				=> $row["MoTa"],
		'GiaBaoChoBN'		=> $row["GiaBaoChoBN"],
		//'GiaThueNgoaiThucHien'		=> $row["GiaThueNgoaiThucHien"],
		//'ThoiGianTrungBinhThucHien'	=> $row["ThoiGianTrungBinhThucHien"],
		//'ThoiGianCoKetQua'	=> $row["ThoiGianCoKetQua"],
		//'GhiChu'			=> $row["GhiChu"],
		//'LoiKhuyen'			=> $row["LoiKhuyen"],
		'Active'			=> $row["Active"],
		//'STT'				=> $row["STT"],
		//'CLS'				=> $row["CLS"],
		//'XetNghiem'			=> $row["XetNghiem"],
		//'CoLuuKQInRieng'	=> $row["CoLuuKQInRieng"],
		//'DieuTriTaiNha'		=> $row["DieuTriTaiNha"],
		//'CoMauNhapKQ'		=> $row["CoMauNhapKQ"],
		//'PathToTemplateFile'=> $row["PathToTemplateFile"],
		//'TenLoaiKham_EN'	=> $row["TenLoaiKham_EN"],
		//'ReportName'		=> $row["ReportName"],
		//'CoTheKeToa'		=> $row["CoTheKeToa"],
		//'ThuocNhomXepHangCLS'		=> $row["ThuocNhomXepHangCLS"],
		//'PhanTramDieuChinhGiaTaiNha'=> $row["PhanTramDieuChinhGiaTaiNha"],
		//'PhuThuThucHienTaiNha'		=> $row["PhuThuThucHienTaiNha"],
		//'GiaTaiNhaDieuChinhTheoNhom'=> $row["GiaTaiNhaDieuChinhTheoNhom"],
		//'CoFormChucNangRieng'		=> $row["CoFormChucNangRieng"],
		//'SoPhimLonTieuHao'			=> $row["SoPhimLonTieuHao"],
		//'SoPhimNhoTieuHao'			=> $row["SoPhimNhoTieuHao"],
		//'SoPhimNhuAnhTieuHao'		=> $row["SoPhimNhuAnhTieuHao"],
		//'TuyenHuyen'				=> $row["TuyenHuyen"],
		//'TuyenTinh'					=> $row["TuyenTinh"],
		//'TuyenTrungUong'			=> $row["TuyenTrungUong"],
		'GiaBaoHiem'				=> $row["GiaBaoHiem"],
		//'GiaPhuThuBenhVien'			=> $row["GiaPhuThuBenhVien"],
		//'ID_Nhom_BHYT'				=> $row["ID_Nhom_BHYT"],
		'TenBHYT'					=> $row["TenBHYT"],
		//'Color'						=> $row["Color"],
		'TenNhom'					=> $row["TenNhom"],
		'Ten_Nhom_BHYT'				=> $row["Ten_Nhom_BHYT"],
		//'PhanTramThue'				=> $row["PhanTramThue"],
		//'IsThamMy'					=> $row["IsThamMy"],
		//'STT_BHYT'					=> $row["STT_BHYT"],
		//'MaSoTheoDVBHYT'			=> $row["MaSoTheoDVBHYT"],
		//'ID_NhomLSP'				=> $row["ID_NhomLSP"],
		//'Khauhaovtyt'				=> $row["KhauHaoThuocVTYT"],
		//'Khauhaodv'				=> $row["KhauHaoDichVu"],
	);
    $i++; 
}
echo json_encode($responce);

?>