<?php

$data = new SQLServer;

$ID_LuotKham = $_GET["ID_LuotKham"];
//spDonThuoc_SelectByID_BenhNhan 257961,'Cancel',0,'Xong'
$store_name = "{call spDonThuoc_SelectByID_BenhNhan (?,?,?,?)}";
$params = array($ID_LuotKham,'Cancel',0,'Xong');
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {

    $responce->rows[$i]['id'] = $row["ID_DonThuoc"];
    $responce->rows[$i]['cell'] = array( $row["ID_DonThuoc"],
        $row["ID_LuotKham"],
      
          $row["TenBSKeToa"],
        $row["NgayBatDauDungThuoc"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
           $row["ThanhTien"],
            $row["SoTienGiam"],
  $row["ID_BacSiChoToa"],
      
   

);
    $i++;
}
echo json_encode($responce);
?>