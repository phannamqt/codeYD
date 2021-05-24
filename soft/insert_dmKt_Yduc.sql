--select top 10 * from dm_loaikham where ID_NhomCLS=20
--ID_LoaiKham	TenLoaiKham	MaVietTat	MaVietTat_BN	ID_NhomCLS	MoTa	GiaBaoChoBN	GiaThueNgoaiThucHien	ThoiGianTrungBinhThucHien	ThoiGianCoKetQua	GhiChu	LoiKhuyen	Active	STT	CLS	XetNghiem	CoLuuKQInRieng	DieuTriTaiNha	CoMauNhapKQ	PathToTemplateFile	MaXetNghiem	TenLoaiKham_EN	ID4Dev	ReportName	CoTheKeToa	ThuocNhomXepHangCLS	PhanTramDieuChinhGiaTaiNha	PhuThuThucHienTaiNha	GiaTaiNhaDieuChinhTheoNhom	CoFormChucNangRieng	MocThoiGianCoKetQua	SoPhimLonTieuHao	SoPhimNhoTieuHao	SoPhimNhuAnhTieuHao	TuyenHuyen	TuyenTinh	TuyenTrungUong	GiaBaoHiem	GiaPhuThuBenhVien	ID_Nhom_BHYT	Color	TenBHYT	PhanLoaiHangBV	PhanTramThue	ID_NguoiTao	CapCuu	IsThamMy	STT_BHYT	MaSoTheoDVBHYT	ID_NhomLSP	IsKetNoiLab	KhauHaoThuocVTYT	KhauHaoDichVu	Giathitruong	TenThiTruong	TruongHopBHYT	ChuThich	ChuThichNoiBo	GiaCu	Id_benhvienban	id_nguoiphutrach	IsHoTro	Loai	NgayGioSuaUp	GiaKSKCT	Id_Nhom_TM	Id_Nhom_TTPT	TenLoaiKhamTiengAnh	IsLayDauHieuSinhTon	IsCauHinhDinhMuc	Active_cu
--33	Khám lâm sàng	Khám LS	Khám LS	20	Khám lâm sàng thông thường	55000	0	10.0	0.0	Dùng để chỉ định khám lâm sàng thông thường hay đi kèm có kê toa	Khám lâm sàng	1	1	0	0	0	0	0		NULL	(Khám lâm sàng thông thường)	KLSTT	Phiếu kết quả lâm sàng thông thường	1	0	0	140000	0	0		0	0	0	0	0	0	31000.00	0.00	1	X	Khám nội	4	0	NULL	NULL	0	02.1897	02.1897	63	NULL	0.00	0.00	NULL	Khám lâm sàng	1	NULL	NULL	50000.00	NULL	NULL	0	0	2016-08-12 16:45:04.453	40000	NULL	NULL	NULL	NULL	NULL	0
insert into dm_loaikham(TenLoaiKham,TenBHYT,GiaBaoChoBN,GiaBaoHiem,ChuThich,ChuThichNoiBo,id_nhomcls,STT,GhiChu)
SELECT 
      [ten_dvu]
      ,[ten_BHYT]
      ,[gia dv]
      ,[gia bhyt],[ma_may ],ten_khoa,199,STT,'YDUC_nEW'
  FROM [dbo].[DMkt4]


