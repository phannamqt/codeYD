<?php

$data = new SQLServer;

$ID_LuotKham = $_GET["ID_LuotKham"];
//spDonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc 242094
$store_name = "{call spDonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc (?)}";
$params = array(242094);
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {

    $responce->rows[$i]['id'] = $row["ID_DonThuocCT"];
    $responce->rows[$i]['cell'] = array(
        $row["ID_DonThuocCT"],
         $row["TenThuoc"],
        $row["TenDonViTinh"],
        $row["Gia"],
        $row["SoThuocDeNghiTheoDon"],
        $row["SoThuocThucXuat"],
         $row["ThanhTien"],
   //     $row["NgayGioTao"]->format("H:i " . $_SESSION["config_system"]["ngaythang"]),
        $row["ID_DonViTinh"],
        $row["CachDungLieuDung"],
        $row["ID_DuongDungThuoc"],
        $row["GhiChu"],
       
        $row["PhuongThucThucHien"],
        $row["TenBietDuoc"],
         $row["TenGoc"],
          $row["TenHoaDon"],
          
    );

    $i++;
}
echo json_encode($responce);
?>