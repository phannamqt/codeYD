<?php


$id_phongban = $_GET['id_pban'];


//echo ($id_phongban);
$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call Gd2_DM_NhanVien_SelectAllByID_PhongBan (?)}"; //tao bien khai bao store
$params = array( $id_phongban);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

$responce = new stdClass;
$responce->page = 1;
$responce->total = 1;
$i = 0;

foreach ($tam as $row) {//duyet toan bo mang tra ve


    $responce->rows[$i]['id'] = $row["ID_NhanVien"];
    $responce->rows[$i]['cell'] = array(
    	$row["ID_NhanVien"],
        $row["HoLotNhanVien"],
        $row["TenNhanVien"],
        $row["NickName"],
        $row["HideLich"],


    );
    $i++;
}
echo json_encode($responce);
?>