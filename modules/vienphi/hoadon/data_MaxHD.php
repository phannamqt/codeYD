<?php


$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call spHoaDonThueGetMax()}"; //tao bien khai bao store
$params = array();

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

$responce = new stdClass;

$i = 0;

foreach ($tam as $row) {

   $responce->rows[$i]['cell'] = array(
     $row["MaxHD"],
       );
   $i++;
}
echo json_encode($responce);
?>