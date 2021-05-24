<?php

$data = new SQLServer;

$ID_LuotKham = $_GET["ID_LuotKham"];
//spDonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc 242094
$store_name = "{call GD2_DonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc (?)}";
$params = array($_GET["ID_LuotKham"]);
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {

    $responce->rows[$i]['id'] = $row["ID_Thuoc"];
    $responce->rows[$i]['cell'] = array(
	    '',
        $row["ID_DonThuocCT"],
        $row["TenThuoc"],
        $row["TenDonViTinh"],
        $row["Gia"],
        $row["SoThuocDeNghiTheoDon"],
        $row["SoThuocThucXuat"],
        $row["ThanhTien"],  
		$row["ID_Thuoc"],  
		$row["PhanTramThue"],
		$row["Gia"]*$row["SoThuocThucXuat"],
		$row["Gia"]*$row["SoThuocThucXuat"]*($row["PhanTramThue"]/100)
		 // $row["Gia"],
		 // $row["ThanhTien"]
    );

    $i++;
}
echo json_encode($responce);
?>