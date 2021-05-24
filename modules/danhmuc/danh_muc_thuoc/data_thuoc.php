<?php
$data= new SQLServer;
$store_name="{call GD2_Thuoc_SelectAll_tam()}";
$params = array();
$get_danh_muc_phong_ban=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
      $hide='';
  if($row["HideBHYT_traituyen"]==1){
    $hide=1;
  }
  if($row["HideVienPhi"]==1){
    $hide=2;
  }
   
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['ID_thuoc']=$row["ID_Thuoc"];
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
    $responce->rows[$i]['indent']=$row["nLevel"];  

    $responce->rows[$i]['Family']=$row["Family"];
    $responce->rows[$i]['isleaf']=$row["isleaf"];  
    $responce->rows[$i]['NuocSanXuat']=$row["TenDayDu"];  
    $responce->rows[$i]['HangSanXuat']=$row["TenNhaSanXuat"];  
    $responce->rows[$i]['TenDonViTinh']=$row["TenDonViTinh"];  

    $responce->rows[$i]['DonGia_BHYT']=$row["DonGia_BHYT"];
    $responce->rows[$i]['HideVienPhi']=$row["HideVienPhi"];  
    $responce->rows[$i]['HideBHYT']=$row["HideBHYT"];  
    $responce->rows[$i]['PhanHangBV']=$row["PhanHangBV"];  
    $responce->rows[$i]['SignNumber']=$row["SignNumber"];  

    $responce->rows[$i]['Giasauthue']=intval($row["DonGia"]*(1+($row["PhanTramThue"]/100)));
    $responce->rows[$i]['MaBHYT']=$row["MaBHYT"];  
    $responce->rows[$i]['HideBHYT_traituyen']=$row["HideBHYT_traituyen"];  
    $responce->rows[$i]['HideBHYT_dungtuyen']=$row["HideBHYT_dungtuyen"];  
    $responce->rows[$i]['ShowLoHanDung']=$row["Is_Print_Lohandung"];  
    $responce->rows[$i]['CoSoTuTruc']=$row["CoSoTuTruc"];  

    $responce->rows[$i]['BaoDongDo']=$row["BaoDongDo"];
    $responce->rows[$i]['BaoDongVang']=$row["BaoDongVang"];  
    $responce->rows[$i]['MaSoTheoDMBHYT']=$row["MaSoTheoDMBHYT"];  
    $responce->rows[$i]['Id_NhomThuoc_Toa']=$row["Id_NhomThuoc_Toa"];  
    $responce->rows[$i]['Giaban']=intval(($row["DonGia"]*(1+($row["PhanTramThue"]/100)))*(1+($row["HeSoDieuChinhGiaBan"]/100)));

    $responce->rows[$i]['ID_NhomBHYT']=$row["ID_NhomBHYT"];
    $responce->rows[$i]['STT_BHYT']=$row["STT_BHYT"];  
    $responce->rows[$i]['MaThuoc_BV']=$row["MaThuoc_BV"];  
    $responce->rows[$i]['MaThuoc_BHYT']=$row["MaThuoc_BHYT"];  
    $responce->rows[$i]['HoatChat_BHYT']=$row["HoatChat_BHYT"];  

    $responce->rows[$i]['MaDuongDung_BHYT']=$row["MaDuongDung_BHYT"];
    $responce->rows[$i]['DuongDung_BHYT']=$row["DuongDung_BHYT"];  
    $responce->rows[$i]['DongGoi_BHYT']=$row["DongGoi_BHYT"];  
    $responce->rows[$i]['Gia_BHYT_Thanhtoan']=$row["Gia_BHYT_Thanhtoan"];  
    $responce->rows[$i]['DinhMuc_BHYT']=$row["DinhMuc_BHYT"]; 

    $responce->rows[$i]['NhietDo_DoAm']=$row["NhietDo_DoAm"];
    $responce->rows[$i]['TenKhac']=$row["TenKhac"];  
    $responce->rows[$i]['HamLuong_BHYT']=$row["HamLuong_BHYT"];  
    $responce->rows[$i]['hide']=$hide; 
    $responce->rows[$i]['ThongTinThauBHYT']=$row["ThongTinThauBHYT"]; 
    $responce->rows[$i]['GiaBHYTSoLe']=$row["GiaBHYTSoLe"]; 
	$responce->rows[$i]['HideVienPhiNgoaiTru']=$row["HideVienPhiNgoaiTru"]; 
	
    $i++;
}
$trave=json_encode($responce);
$trave=substr($trave, 8,-1);
echo $trave;
/*
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
    'Giaban'            => intval(($row["DonGia"]*(1+($row["PhanTramThue"]/100)))*(1+($row["HeSoDieuChinhGiaBan"]/100))),
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
echo json_encode($responce);*/
?>