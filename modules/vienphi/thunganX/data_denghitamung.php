<?php

$data = new SQLServer;
$store_name = "{call GD2_vienphi_denghitamung (?,?)}";	
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

//print_r($params);
foreach ($tam as $row) {

    $responce->rows[$i]['id'] = $row["ID_PhieuDeNghiTamUng"];
    $responce->rows[$i]['cell'] = array( 
	$row["MaBenhNhan"],
    $row["HoLotBenhNhan"],      
    $row["TenBenhNhan"],
	$row["gioitinh"],
    $row["namsinh"],
    $row["NickName"],
 	$row["DienGiai"],
    $row["SoTienTamUng"],
	$row["DaTamUng"],
	$row["ID_LuotKham"],
	$row["ID_BenhNhan"],
        $row["SumDaTamUng"],
   

);
    $i++;
}
echo json_encode($responce);
?>