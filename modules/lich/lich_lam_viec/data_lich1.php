<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
if (isset($_GET["loailich"])){
	$loailich=$_GET["loailich"];
}else{
	$loailich="";	
}

$page = $_GET['page']; // get the requested page
$from = $_GET['from'];
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$idnhanvien = $_GET['idnhanvien'];
$date1 = new DateTime($from);

$tinh = $page - $date1->format('d');
$dateInfo =  date('Y-m-d', strtotime($from . " +".$tinh."days"));


$total = cal_days_in_month(CAL_GREGORIAN, $date1->format('m'), $date1->format('Y'));

$data= new SQLServer;//tao lop ket noi SQL 
/*if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}*/
$store_name="{call GD2_LichLamViec_SelectByIDNhanVienAndDate (?,?,?)}";//tao bien khai bao store
$params = array($idnhanvien,$dateInfo,$dateInfo);//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total; 

$kiemtra=true;


$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LichLamViec"];
    $responce->rows[$i]['cell']=array($row["ID_LichLamViec"],$row["ID_LoaiLich"],$row["Ngay"]->format('Y-m-d'),$row["GioBatDau"],$row["GioKetThuc"],$row["ID_NhanVien"],$row["IsChamCong"],$row["ID_PhongBan"],$row["GhiChu"]);
    $i++; 
}   
echo json_encode($responce);
?>