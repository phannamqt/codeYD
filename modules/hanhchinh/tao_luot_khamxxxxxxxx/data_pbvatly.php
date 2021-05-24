<?php
$data= new SQLServer;
$store_name="{call GD2_PhongVatLy_ByBacSi (?)}";
$params = array($_GET['ID_BacSi']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;  

foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_Phong"];
    $responce->rows[$i]['cell']=array($row["SoPhong"],$row["Tang"],$row["TenNhom"]);     
    $i++; 
}  

echo json_encode($responce);
?>