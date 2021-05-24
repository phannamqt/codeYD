<?php

$data = new SQLServer;

//$ID_LuotKham = $_GET["ID_LuotKham"];
$store_name = "{call GD2_donthuoc_sumtoatam(?)}";
$params = array($_GET["ID_LuotKham"]);

//spDonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc 242094
/*$store_name = "{call GD2_DonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc (?)}";
$params = array($_GET["ID_LuotKham"]);*/
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

echo $tam[0][0]
?>