<?php
//print_r($_GET);
$loailich = $_GET['loailich'];
$kiemtra = $_GET['kiemtra'];
$phongbancopy = $_GET['phongbancopy'];
$from_monday = $_GET['ngay_copy']; 
$to_monday = $_GET['ngay_paste']; 
$date1 = new DateTime($from_monday);
$date2 = new DateTime($to_monday);

$from_sunday = date("Y-m-d", strtotime($from_monday . "+6 days"));

$SoNgayBatDaucopy = date_diff($date1,$date2);
if($SoNgayBatDaucopy->format("%R%a")!=0){
$data= new SQLServer;
$store_name="{call GD2_LichLamViec_Copy (?,?,?,?,?,?,?)}";
$params = array($from_monday,$from_sunday,$SoNgayBatDaucopy->format("%R%a"),$loailich,$phongbancopy, $kiemtra ,$_SESSION["user"]["id_user"]);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
}

?>

