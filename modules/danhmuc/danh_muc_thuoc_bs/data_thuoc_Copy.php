<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Thuoc_SelectAll_bs()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve 
   $responce->rows[$i]['id']=$row["ID_Thuoc"];
   $responce->rows[$i]['id_thuoc']=$row["ID_Thuoc"];
   $responce->rows[$i]['TenBietDuoc']=$row["TenBietDuoc"];
   $responce->rows[$i]['MaThuoc']=$row["MaThuoc"];
   $responce->rows[$i]['TenGoc']=$row["TenGoc"];
   $responce->rows[$i]['HoatChatChinh']=$row["HoatChatChinh"];
   $responce->rows[$i]['HamLuong']=$row["HamLuong"];
   $responce->rows[$i]['DonGia']=$row["DonGia"];
   $responce->rows[$i]['ID_NuocSanXuat']=$row["ID_NuocSanXuat"];
   $responce->rows[$i]['parent']=$row["ID_NhomThuoc"];
   $responce->rows[$i]['QuyCach']=$row["QuyCach"];
   $responce->rows[$i]['ID_NhomBenh']=$row["ID_NhomBenh"];
   $responce->rows[$i]['ID_DonViTinh']=$row["ID_DonViTinh"];
   $responce->rows[$i]['ID_NSXThuoc']=$row["ID_NSXThuoc"];
   $responce->rows[$i]['ID_DuongDung']=$row["ID_DuongDung"];
   $responce->rows[$i]['TonKhoToiThieu']=$row["TonKhoToiThieu"];
   $responce->rows[$i]['GhiChu']=$row["GhiChu"];
   $responce->rows[$i]['HeSoDieuChinhGiaBan']=$row["HeSoDieuChinhGiaBan"];
   $responce->rows[$i]['PhanTramThue']=$row["PhanTramThue"];
   $responce->rows[$i]['LaThuoc']=$row["LaThuoc"];
   $responce->rows[$i]['Active']=$row["Active"];
   $responce->rows[$i]['DoUuTien']=$row["DoUuTien"];
   $responce->rows[$i]['ThuocBHYT']=$row["ThuocBHYT"];
   $responce->rows[$i]['BHYTNoiTruOrNgTru']=$row["BHYTNoiTruOrNgTru"]; 
   $responce->rows[$i]['ID_DuongDung']=$row["ID_DuongDung"];
   $responce->rows[$i]['indent']=$row["nLevel"];
   $responce->rows[$i]['Family']=$row["Family"];
   $responce->rows[$i]['isleaf']=$row["isleaf"];
   $responce->rows[$i]['NuocSanXuat']=$row["TenDayDu"];
   $responce->rows[$i]['HangSanXuat']=$row["TenNhaSanXuat"];
   $responce->rows[$i]['TenDonViTinh']=$row["TenDonViTinh"];
   $responce->rows[$i]['DonGia_BHYT']=$row["DonGia_BHYT"];
   $responce->rows[$i]['Giasauthue']=intval(($row["DonGia"]*(1+($row["PhanTramThue"]/100)))*(1+($row["HeSoDieuChinhGiaBan"]/100)));  
   $i++; 
}   
echo json_encode($responce);
?>