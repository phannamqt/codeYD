<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array($_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_KhamThai_KhamGetDataByTenFormAndIDBenhNhan(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 if($row["NgayGioSua"]!=''){
		$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}
if($row["NgayGioTao"]!=''){
		$row["NgayGioTao"]=$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}
if($row["NgayGioHenTraKQ"]!=''){
			$row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}
if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
if($row["NgayGioChanDoan"]!='')
            $row["NgayGioChanDoan"]=$row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioChanDoan"]='';
if($row["NgaySinhDuKien"]!='')
            $row["NgaySinhDuKien"]=$row["NgaySinhDuKien"]->format($_SESSION["config_system"]["ngaythang"]);
    else $row["NgaySinhDuKien"]='';
if($row["NgayKinhCuoi"]!='')
            $row["NgayKinhCuoi"]=$row["NgayKinhCuoi"]->format($_SESSION["config_system"]["ngaythang"]);
    else $row["NgayKinhCuoi"]='';
if($row["NgayGioKetThuc"]!='')
            $row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format($_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioKetThuc"]='';
	
if($row["ID_KhamThai"]!='')
            $row["ID_KhamThai"]= $row["ID_KhamThai"];
    else $row["ID_KhamThai"]=0;

    $responce->rows[$i]['id']=$row["idkham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],
	$row["TenLoaiKham"],
	$row["NgayGioTao"],
	$row["ID_LoaiKham"],
	$row["BSChiDinh"],
	$row["ID_LuotKham"],
	$row["MoTa"],
	$row["KetLuan"],
    $row["GhiChu"],//loi khuyen
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["BSChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
	$row["ThongSoKyThuat"],
	//bangkhamthai
	$row["BdmTimMach"],//19
	$row["BdmTieuDuong"],
	$row["BdmBasedow"],
	$row["BdmThan"],
	$row["BdmRoiLoanDongMau"],
	$row["BdmViemGanB"],	
	$row["BdmRubella"],
	$row["BdmTamThan"],
	$row["BdmViemGanC"],
	$row["BdmBenhKhac"],
	//bangkhamthai
	$row["BtpRubella"],//29
	$row["BtpThuyDau"],
	$row["BtpQuaiBi"],
	$row["BtpUonVanSoSinh"],
	$row["BtpCum"],
	$row["BtpViemGanB"],	
	$row["BtpUonVanSoSinh_MuiSo"],
	//tính tuổi thai
	$row["SoTuanThai"],//36
	$row["SoNgayThai"],
	$row["NgaySinhDuKien"],
	$row["KhamLanDau"],
	$row["NgayKinhCuoi"],
	//dau hieu bat thuong
	$row["TcnNon"],//41
	$row["TcnBuonNon"],
	$row["TcnMetMoi"],
	$row["TcbtDauBungDuoi"],
	$row["TcbtRaMauAmDao"],
	$row["TcbtDauThuongVi"],
	$row["TcbtDauDau"],
	$row["TcbtHoaMat"],
	$row["TCBT_Khac"],
	//tien su san phu khoa
	$row["TsPara"],//50
	$row["TsThaiChetLuu"],
	$row["TsSanGiat"],
	$row["TsChayMauTruocSinh"],
	$row["TsSinhKho"],
	$row["TsBinhThuong"],
	$row["TsBangHuyet"],
	$row["TsMoLayThai"],
	$row["TsSinhConDuoi25Kg"],
	$row["TsConChetTuanDauSauSinh"],
	$row["TienSuPhuKhoa"],
	$row["TienSuBenhVaSucKhoeChong"],
	//ketluan
	$row["MoTaKhamTimPhoi"],//62
	$row["MoTaKhamPhuKhoa"],
	$row["MoTaKhamVu"],
	$row["MoTaKhamKhac"],
	//kham toan than
	$row["KttBinhThuong"],//66
	$row["KttPhuToanThan"],
	$row["KttPhu2ChiDuoi"],
	$row["KttDaXanhNiemMacNhot"],
	$row["MoTaKhamSanKhoa"],
	$row["KetLuan"],
	$row["LoiKhuyen"],
	$row["ID_KhamThai"],
	$row["NgayGioKetThuc"]
	
	
	
	);
    $i++; 
}
echo json_encode($responce);
?>
