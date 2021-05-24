<?php

$data = new SQLServer;

$ID_LuotKham = $_GET["ID_LuotKham"];

$store_name = "{call spVienPhiBenhNhan (?,?,?,?,?,?,?,?)}";
$params = array($ID_LuotKham, 'PHYSIO', 'DieuTriPhoiHop', 'HuyBo', 1, 0, 'Cancel', 0);
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {

    $responce->rows[$i]['id'] = $row["ID_Kham"];
    $responce->rows[$i]['cell'] = array(
        $row["ID_LoaiKham"],
        $row["ID_Kham"],
        $row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["NgayGioTao"]->format("H:i " . $_SESSION["config_system"]["ngaythang"]),
        $row["TenLoaiKham"],
        $row["TenTrangThaiCLSCuaBenhNhan"],
        $row["PhiThucHien"],
        $row["TenNhom"],
        $row["GiamGia"],
        $row["TongPhuThu"],
        $row["GiaThueNgoaiThucHien"],
    );

    $i++;
}
echo json_encode($responce);
?>