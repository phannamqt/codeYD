<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_KhamSucKhoeCongTy_KhamGetDataByTenFormAndIDBenhNhan(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

     if($row["NgayGioSua"]!='')
			$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioSua"]='';
    if($row["NgayGioHenTraKQ"]!='')
            $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHenTraKQ"]='';
     if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
    if($row["NgayGioChanDoan"]!='')
            $row["NgayGioChanDoan"]=$row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioChanDoan"]='';
	
	if($row["NgayGioKetThuc"]!='')
            $row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format($_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioKetThuc"]='';
	
	if($row["ExtField1"]!=""){
		$rs=explode(";",$row["ExtField1"]);
		if(count($rs)>1){
			$phanloaisuckhoe=$rs[1];
			$phanloaitheluc=$rs[0];
		}else{
			$phanloaisuckhoe='';
			$phanloaitheluc='';	
		}
	}else{
		$phanloaisuckhoe="";
		$phanloaitheluc="";
		}	
    $responce->rows[$i]['id']=$row["idkham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],//0
	$row["TenLoaiKham"],
	$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
	$row["ID_LoaiKham"],//3
	$row["NguoiChiDinh"],
	$row["ID_LuotKham"],//5
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["NguoiChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
    $row["MaBenhNhan"],//15
	
	$row["KetLuanChung"],//16
	$phanloaisuckhoe,
	$phanloaitheluc,
	
	$row["MatPhai_CK"],//19
	$row["MatTrai_CK"],
	$row["MatPhai_KK"],
	$row["MatTrai_KK"],
	$row["BenhMat_KL"],
	$row["ID_BacSi_Mat"],
	$row["PhanLoaiMat"],
	
	$row["TaiMuiHong_KL"],//26
	$row["ID_BacSi_TMH"],
	$row["PhanLoaiTMH"],
	
	$row["RangHamMat_KL"],//29
	$row["ID_BacSi_RHM"],
	$row["PhanLoaiRHM"],
	
	$row["DaLieu_KL"],//32
	$row["ID_BacSi_DaLieu"],
	$row["PhanLoaiDaLieu"],
	
	$row["NoiKhoa_KL"],//35
	$row["ID_BacSi_NoiKhoa"],
	$row["PhanLoaiNoiKhoa"],
	
	$row["NgoaiKhoa_KL"],//38
	$row["ID_BacSi_NgoaiKhoa"],
	$row["PhanLoaiNgoaiKhoa"],
	
	$row["SanPhuKhoa_KL"],//41
	$row["ID_BacSi_SPK"],
	$row["PhanLoaiSPK"],
	
	$row["TuanHoan_KL"],//44
	$row["ID_BacSi_TuanHoan"],
	$row["PhanLoaiTuanHoan"],
	
	$row["HoHap_KL"],//47
	$row["ID_BacSi_HoHap"],
	$row["PhanLoaiHoHap"],
	
	$row["TieuHoa_KL"],//50
	$row["ID_BacSi_TieuHoa"],
	$row["PhanLoaiTieuHoa"],
	
	$row["Than_TietNieu_SD_KL"],//53
	$row["ID_BacSi_Than_TietNieu_SD"],
	$row["PhanLoaiThan_TietNieu_SD"],
	
	$row["ThanKinh_KL"],//56
	$row["ID_BacSi_ThanKinh"],
	$row["PhanLoaiThanKinh"],
	
	$row["TamThan_KL"],//59
	$row["ID_BacSi_TamThan"],
	$row["PhanLoaiTamThan"],
	
	$row["HeVanDong_KL"],//62
	$row["ID_BacSi_HeVanDong"],
	$row["PhanLoaiHeVanDong"],
	
	$row["NoiTiet_KL"],//65
	$row["ID_BacSi_NoiTiet"],
	$row["PhanLoaiNoiTiet"],
	
	$row["ID_KhamSucKhoe"],
	$row["idkham"],
	$row["NgayGioKetThuc"],//70
	
	(float)$row["TaiPhai_NoiThuong"],//71
	(float)$row["TaiPhai_NoiTham"],
	(float)$row["TaiTrai_NoiThuong"],
	(float)$row["TaiTrai_NoiTham"],
	$row["TinhTrangBenhTatHienTai"],
	$row["HamTren_RHM"],
	$row["HamDuoi_RHM"], //77
	
	$row["ID_BacSi_XetNghiem"],//78
	$row["ID_BacSi_SieuAm"],
	$row["ID_BacSi_XQuang"],
	$row["KetQuaCLS"],//81
	$row["KQSieuAm"],//82
	$row["KQXQuang"],//83
	);
    $i++; 
}
echo json_encode($responce);
?>