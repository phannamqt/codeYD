<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_Thuoc_SelectAll_bs()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
  //
  $hide='';
  if($row["HideBHYT_traituyen"]==1){
    $hide=1;
  }
  if($row["HideVienPhi"]==1){
    $hide=2;
  }

  $responce[] = array(
  'id'             => $row["ID_Thuoc"],   
  'id_thuoc'    	 => $row["ID_Thuoc"],
  'TenBietDuoc' 	 => $row["TenBietDuoc"],
  'MaThuoc'        => $row["MaThuoc"],
  'TenGoc'      	 => $row["TenGoc"], 
  'HoatChatChinh'  => $row["HoatChatChinh"],
  'HamLuong'  		 => $row["HamLuong"],
  'DonGia'  		   => $row["DonGia"],
  'ID_NuocSanXuat' => $row["ID_NuocSanXuat"],
  'parent' 	       => $row["ID_NhomThuoc"],
  'QuyCach'    		 => $row["QuyCach"],
  'ID_NhomBenh'    => $row["ID_NhomBenh"],
  'ID_DonViTinh'   => $row["ID_DonViTinh"],
  'ID_NSXThuoc'    => $row["ID_NSXThuoc"],
  'ID_DuongDung'   => $row["ID_DuongDung"],
  'TonKhoToiThieu' => $row["TonKhoToiThieu"],
  'GhiChu'  		   => $row["GhiChu"],
  'HeSoDieuChinhGiaBan'  => $row["HeSoDieuChinhGiaBan"],
  'PhanTramThue'      => $row["PhanTramThue"],
  'LaThuoc'           => $row["LaThuoc"],
  'Active'            => $row["Active"],
  'DoUuTien'          => $row["DoUuTien"],
  'ThuocBHYT'         => $row["ThuocBHYT"],
  'BHYTNoiTruOrNgTru' => $row["BHYTNoiTruOrNgTru"],
  'ID_DuongDung'      => $row["ID_DuongDung"],
  'indent'            => $row["nLevel"],
  'Family'            => $row["Family"],
  'isleaf'            => $row["isleaf"],
  'NuocSanXuat'       => $row["TenDayDu"],
  'HangSanXuat'       => $row["TenNhaSanXuat"],
  'TenDonViTinh'      => $row["TenDonViTinh"],
  'DonGia_BHYT'       => $row["DonGia_BHYT"],
  'Giasauthue'        => intval(($row["DonGia"]*(1+($row["PhanTramThue"]/100)))*(1+($row["HeSoDieuChinhGiaBan"]/100))),
  'hide'              => $hide,
	);
  
    $i++; 
}   
echo json_encode($responce);
?>