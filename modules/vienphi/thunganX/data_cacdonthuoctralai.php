<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_LayDonThuocTraLai (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
//MaPhieu   NgayLapPhieu    NguoiLapPhieu   NgayDuyet   NguoiDuyet  MaBenhNhan  ID_BenhNhan TenBN   GhiChu  TienThuocTraLai Ten_LoaiNhapXuat    ID_NhapKho  DaHoanTien  MaPhieu NoCuoi
//02315   2014-06-03 00:00:00.000 System  2014-06-03 00:00:00 System  153476  106251  Vo Van Test2        77280       Phiếu nhập trả hàng NULL    0   NULL    84320
    //$responce->rows[$i]['id']=$row["ID_NhapKho"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayLapPhieu"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        $row["NguoiLapPhieu"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["GhiChu"],
        $row["TienThuocTraLai"],
        $row["DaHoanTien"],
        $row["MaPhieuThanhToan"],
        $row["SoTienPhieuThanhToan"],
        $row["NoCuoi"],
        $row["ID_NhapKho"],
 		$row["tienvon"],
		$row["ID_BenhNhan"],
		$row["ID_ThuTraNo"],
            );

    $i++;
}
echo json_encode($responce);
?>