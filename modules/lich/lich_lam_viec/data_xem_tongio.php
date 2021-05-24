<?php

$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio
$fromDate = $_GET['fromdate'] . ' 0:00:00'; // get the directio
$toDate = $_GET['todate'] . ' 23:59:59'; // get the directio

//$id_nhanvien = $_GET['ID_NhanVien'];


$data = new SQLServer; //tao lop ket noi SQL 

if ($page == 1) {
    $start = $page - 1;
} else {
    $start = $limit / $page;
}
$end = $limit;

$store_name = "{call GD2_LayTongHopChamCong (?,?)}"; //tao bien khai bao store
$params = array( $fromDate, $toDate);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc 

$count = count($tam);
if ($count > 0) {
    $total_pages = ceil($count / $limit);
} else {
    $total_pages = 0;
}


$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$i = 0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
/*    HoTen   NickName    TongGio DiTre   RaSom   ThoiGianChuanBi TenPhongBan
Phạm Thị Anh Phúc Phúc A  40.7    0   1   4,5 BP Thư ký y khoa tầng I*/

     
    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(
     $i,
        $row["ID_PhongBan"],
        $row["HoTen"],
        $row["NickName"],
        $row["TongGio"],
        $row["SLNV"],
        $row["DiTre"],
        $row["RaSom"],
        $row["TGCB"],
        $row["P"],
        $row["SoNgay"],
        
    );
    $i++;
}
echo json_encode($responce);
?>