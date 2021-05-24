<?php

$data = new SQLServer;
$store_name = "{call GD2_DonThuocGetByIDLuotKham (?)}";
$params = array($_GET["ID_LuotKham"]);
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(
        $row["TenGoc"],
		$row["TenDonViTinh"],	
		$row["SoThuocThucXuat"], 	      
        $row["Gia"],  
        $row["GiaCungChiTra"],        
        $row["NickName"],    
        $row["ID_DonThuoc"],	   
        $row["NgayKeDon"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),   
        $row["IsBhyt"],        
		$row["ID_DonThuocCT"],
        $row["HienThi"]
        
    );
    $i++;	
}
echo json_encode($responce);
?>