<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array($_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_GYNECOLOGY_KhamGetDataByTenFormAndIDBenhNhan(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//print_r($tam);
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
//print_r($tam);
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
    $responce->rows[$i]['id']=$row['ID_Kham'];
    $responce->rows[$i]['cell']=array(
    $row["MaVietTat"],
    $row["TenLoaiKham"],
    $row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
    $row["ID_LoaiKham"],
    $row["BSChiDinh"],
    $row["ID_LuotKham"],
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["BSChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
    $row["ID_Kham"],
    $row["LyDoKham"],
    $row["TienSuGiaDinh"],
    $row["KinhNguyet"],
    $row["SanKhoa"],
    $row["CachTranhThai"],
    $row["ThuocDangDung"],
    $row["TienSuDiUngThuoc"],
    $row["TrieuChungCoNang"],
    $row["KhamThucthe"],
    $row["NhuomSoi"],//soi tuoi
    $row["PapSmear"],
    $row["NoiSoiCTC"],
    $row["SieuAm"],
    $row["Khac"],
    $row["ChanDoan"],
    $row["ExtField2"],//nhuom soi
    $row["KetLuan"],
    $row["Para_TMP"],
    $row["ID_Gynecology"],
    $row["ID_LuotKham"],
	$row["TienSuGiaDinh"],
	$row["TienSu"],
	$row["ID_ThongSoPara"]
    );
    $i++; 
}
echo json_encode($responce);
?>
