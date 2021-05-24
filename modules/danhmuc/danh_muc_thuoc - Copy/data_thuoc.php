<?php
$data= new SQLServer;
$store_name="{call GD2_Thuoc_SelectAll_tam()}";
$params = array();
$get_danh_muc_phong_ban=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce;

$i=0;
foreach ($tam as $row) {

  $hide='';
  if($row["HideBHYT_traituyen"]==1){
    $hide=1;
  }
  if($row["HideVienPhi"]==1){
    $hide=2;
  }
  $responce[] = array(
    'id'                => $row["ID_Thuoc"],   
    'id_thuoc'    	    => $row["ID_Thuoc"],
    'TenBietDuoc' 	    => $row["TenBietDuoc"],
    'MaThuoc'           => $row["MaThuoc"], 
    'TenGoc'      	    => $row["TenGoc"],  
    'HoatChatChinh'     => $row["HoatChatChinh"],
    'HamLuong'  		    => $row["HamLuong"],
    'DonGia'  		      => $row["DonGia"],
    'ID_NuocSanXuat'    => $row["ID_NuocSanXuat"],
    'parent' 	          => $row["ID_NhomThuoc"],
    'QuyCach'    		    => $row["QuyCach"],
    'ID_NhomBenh'       => $row["ID_NhomBenh"],
    'ID_DonViTinh'      => $row["ID_DonViTinh"],
    'ID_NSXThuoc'       => $row["ID_NSXThuoc"],
    'ID_DuongDung'      => $row["ID_DuongDung"],
    'TonKhoToiThieu'    => $row["TonKhoToiThieu"],
    'GhiChu'  		      => $row["GhiChu"],
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
    'HideVienPhi'       => $row["HideVienPhi"],
    'HideBHYT'          => $row["HideBHYT"],
    'PhanHangBV'        => $row["PhanHangBV"],
    'SignNumber'        => $row["SignNumber"],
    'Giasauthue'        => intval($row["DonGia"]*(1+($row["PhanTramThue"]/100))),
    'MaBHYT'            => $row["MaBHYT"],
    'HideBHYT_traituyen'=> $row["HideBHYT_traituyen"],
    'HideBHYT_dungtuyen'=> $row["HideBHYT_dungtuyen"],
    'CoSoTuTruc'        => $row["CoSoTuTruc"],
    'BaoDongDo'         => $row["BaoDongDo"],
    'BaoDongVang'       => $row["BaoDongVang"],
    'MaSoTheoDMBHYT'    => $row["MaSoTheoDMBHYT"],
    'Id_NhomThuoc_Toa'  => $row["Id_NhomThuoc_Toa"],
    'Giaban'            => $row["GiaBan"],
    'ID_NhomBHYT'       => $row["ID_NhomBHYT"],  
    'STT_BHYT'          => $row["STT_BHYT"],
    'MaThuoc_BV'        => $row["MaThuoc_BV"],
    'MaThuoc_BHYT'      => $row["MaThuoc_BHYT"],
    'HoatChat_BHYT'     => $row["HoatChat_BHYT"],
    'MaDuongDung_BHYT'  => $row["MaDuongDung_BHYT"],
    'DuongDung_BHYT'    => $row["DuongDung_BHYT"],
    'DongGoi_BHYT'      => $row["DongGoi_BHYT"],
    'Gia_BHYT_Thanhtoan'=> $row["Gia_BHYT_Thanhtoan"],
    'DinhMuc_BHYT'      => $row["DinhMuc_BHYT"],
    'NhietDo_DoAm'      => $row["NhietDo_DoAm"],
    'TenKhac'           => $row["TenKhac"],
    'HamLuong_BHYT'     => $row["HamLuong_BHYT"],
    'hide'              => $hide,
    );
  
  $i++; 
}   
echo json_encode($responce);
?>