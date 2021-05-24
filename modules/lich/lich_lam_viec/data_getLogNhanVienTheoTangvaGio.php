<?php

$fromDate = $_GET['from'] . ' 0:00:00'; // get the directio
$toDate = $_GET['to'] . ' 23:59:59'; // get the directio

$id_nhanvien = $_GET['ID_NhanVien'];


//VietLogEdit




if (strpos($_GET['from'],'/') !== false) {

    list($day, $month, $year) = explode('/', $_GET['from']);
    $fromDate= $year.'-'.$month.'-'.$day.' 0:00:00';
    $toDate= $year.'-'.$month.'-'.$day.' 23:59:59';

}
/*$id_tang=0;*/
if (isset($_GET['id_tang'])&&$_GET['id_tang']!='undefined')
{
$id_tang=$_GET['id_tang'];
$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call [GD2_LayLogByTangVaKhoan] (?,?,?)}"; //tao bien khai bao store
$params = array($fromDate,  $_GET['khoantim'],$id_tang);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

$responce = new stdClass;
$tt=1;
$i = 0;

foreach ($tam as $row) {
/*   NickName	TenPhongBan	cDateTime	Tang
Thùy	Khoa Phụ Sản	2016-07-17 07:26:00.000	1*/
   $responce->rows[$i]['id'] = $i;
   $responce->rows[$i]['cell'] = array($i,
    nl2br($row["LogAll"]),$row["SoLuotCham"],$row["Tang"]
       );
   $i++;
}
echo json_encode($responce);
}
else
{
   echo json_encode('');
}

?>