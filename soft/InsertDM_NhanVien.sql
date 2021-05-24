
use MedSmart
insert into DM_NhanVien(ID_PHongBan, HoLotNhanVien,GhiChu,GhiChu1
,NgaySinh,NgayVaoLam,GioiTinh,IsDoctor,DiaChi,Mobile,[PassWord],AllowLogin)



select 332 ID_PHongBan,HoTen,(CK+char(10)+'-'+F6+char(10)+'-'+loaiHD) as GhiChu,TinhThanh,NamSinh,'2019-04-25' NgayVaoLam,

case when GioiTinh like N'nữ' then 0 else 1 end GioiTinh ,
case when CHARINDEX('Bác sĩ',CK)>0 then 1 else 0 End IsDoctor 
,DiaChi,Phone Mobile,'123' Pass,1 AllowLogin from DM_NV
update DM_NhanVien set GhiChu1=GhiChu+char(10)+'-'+ GhiChu1