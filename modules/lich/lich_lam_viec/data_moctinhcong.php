<?php

/*$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio*/
$fromDate = $_GET['from'] . ' 0:00:00'; // get the directio
$toDate = $_GET['to'] . ' 23:59:59'; // get the directio

$id_nhanvien = $_GET['ID_NhanVien'];


//VietLogEdit




if (strpos($_GET['from'],'/') !== false) {

    list($day, $month, $year) = explode('/', $_GET['from']);
    $fromDate= $year.'-'.$month.'-'.$day.' 0:00:00';
    $toDate= $year.'-'.$month.'-'.$day.' 23:59:59';

}

$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call [Gd2_GetMocTinhCong] (?,?)}"; //tao bien khai bao store
$params = array( $fromDate,$id_nhanvien);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

$responce = new stdClass;
$tt=1;
$i = 0;

foreach ($tam as $row) {
   
   $responce->rows[$i]['id'] = $row["IdAuto"];
   $responce->rows[$i]['cell'] = array(
     $row["IdAuto"],$row["LogTinhCong"]

       );
   $i++;
}
echo json_encode($responce);
?>