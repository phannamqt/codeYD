<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_NhanVien_SelectAll_new()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
  
 if($row["NgaySinh"]!=""){
  $row["NgaySinh"]=date_timestamp_get($row["NgaySinh"]);
}
if
 ($row["NgayVaoLam"]!=""){
  $row["NgayVaoLam"]=date_timestamp_get($row["NgayVaoLam"]);
}
if
 ($row["Kinhnghiem"]!=""){
  $row["Kinhnghiem"]=date_timestamp_get($row["Kinhnghiem"]);
}   

if
 ($row["NgayCapCMND"]!=""){
  $row["NgayCapCMND"]=date_timestamp_get($row["NgayCapCMND"]);
}

if
 ($row["NgayBatDau"]!=""){
  $row["NgayBatDau"]=date_timestamp_get($row["NgayBatDau"]);
}

if
 ($row["NgayKetThuc"]!=""){
  $row["NgayKetThuc"]=date_timestamp_get($row["NgayKetThuc"]);
}
if
 ($row["NgayNghiViec"]!=""){
  $row["NgayNghiViec"]=date_timestamp_get($row["NgayNghiViec"]);
}



$responce[] = array(
  'id'                => $row["ID_NhanVien"],   
  'MaNV'    	  => $row["MaNV"],
  'CanhBao' 	  => $row["CanhBao"],
  'ID_PhongBan'           => $row["ID_PhongBan"],
  'HoLotNhanVien'      	  => $row["HoLotNhanVien"], 
  'TenNhanVien'     => $row["TenNhanVien"],  
  'ID_TrinhDo'  		  => $row["ID_TrinhDo"],
  'GioiTinh'  		  => $row["GioiTinh"],
  'ID_DanToc'    => $row["ID_DanToc"],
  'ID_QuocTich' 	          => $row["ID_QuocTich"],
  'CMND'    		  => $row["CMND"],
  'HoChieu'       => $row["HoChieu"],
  'ID_ChucVu'      => $row["ID_ChucVu"],
  'ID_ChucDanh'       => $row["ID_ChucDanh"],
  'DiaChi'      => $row["DiaChi"],
  'Mobile'    => $row["Mobile"],
  'HomePhone'  		  => $row["HomePhone"],
  'Email'  => $row["Email"],  
  'YahooID'      => $row["YahooID"],
  'SkypeID'           => $row["SkypeID"],
  'NgaySinh'            => $row["NgaySinh"],
  'NgayVaoLam'          => $row["NgayVaoLam"],
  'ID_TrinhDo'         => $row["ID_TrinhDo"],
  'ID_LoaiTinhLuong' => $row["ID_LoaiTinhLuong"],
  'ChamCongBangMay'      => $row["ChamCongBangMay"],  
  'TaiKhoanNH'            => $row["TaiKhoanNH"],
  'ID_NganHang'            => $row["ID_NganHang"],
  'MaSoThueCaNhan'            => $row["MaSoThueCaNhan"],
  'SoBaoHiem'       => $row["SoBaoHiem"],
  'GhiChu'       => $row["GhiChu"],
  'HinhChuKy'      => $row["HinhChuKy"],
  'IsDoctor'       => $row["IsDoctor"],
  'IsCTVBenNgoai'       => $row["IsCTVBenNgoai"],
  'AllowLogin'          => $row["AllowLogin"],
  'NickName'        => $row["NickName"],
  'UserName'        => $row["UserName"],
  'PassWord'        => $row["PassWord"],
  'Disable'            => $row["Disable"],
  'Kinhnghiem'=> $row["Kinhnghiem"],
  'CoTinhLuongKeToan'=> $row["CoTinhLuongKeToan"],
  'TenTrinhDo'  		  => $row["TenTrinhDo"],
  'TenDanToc'  		  => $row["TenDanToc"],
  'TenQuocTich'  		  => $row["TenQuocTich"],
  'gioi'  		  => $row["gioi"],
  'TenChucVu'  		  => $row["TenChucVu"],
  'TenChucDanh'  		  => $row["TenChucDanh"], 
  'TenLoaiTinhLuong'  		  => $row["TenLoaiTinhLuong"], 
  'TenNganHang'  		  => $row["TenNganHang"], 
  'DaNghiViec'  		  => $row["DaNghiViec"], 
  'TenPhongBan'  		  => $row["TenPhongBan"],   
  'TenTinhTrangHonNhan'  		  => $row["TenTinhTrangHonNhan"], 
  'Id_TinhTrangHonNhan'  		  => $row["Id_TinhTrangHonNhan"], 
  'NgayCapCMND'  		  => $row["NgayCapCMND"], 
  'NoiCapCMND'  		  => $row["NoiCapCMND"], 
  'TenBangCap'  		  => $row["TenBangCap"],   
  'TenHopDong'  		  => $row["TenLoaiHopDong"], 
  'NgayBatDauHopDong'  		  => $row["NgayBatDau"], 
  'NgayKetThucHopDong'  		  => $row["NgayKetThuc"], 
  'TenChuyenKhoa'  		  => $row["TenChuyenKhoa"], 
  'Id_chuyenkhoa'  		  => $row["Id_ChuyenKhoa"], 
  'Quanhe'  		  => $row["Quanhe"], 
  'manhanvien'  		  => $row["manhanvien"], 
  'hethan'  		  => $row["hethan"],    
  'ChungChiHanhNghe'  		  => $row["ChungChiHanhNghe"], 
  'NgayNghiViec'  		  => $row["NgayNghiViec"], 
'Id_GoiBenh'        => $row["Id_GoiBenh"], 
 'SoChungChiHanhNghe'  		  => $row["SoChungChiHanhNghe"], 
  
  
  
  
  );

$i++; 
}   
echo json_encode($responce);






?>