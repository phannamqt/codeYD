<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call Gd2_combobox_dialog_join(?,?,?)}";//tao bien khai bao store
$params = array("ID_DonThuocMau,TenDonThuoc,TenNhomBenh,HoLotNhanVien,TenNhanVien  from DM_DonThuocMau join DM_NhomBenh on DM_DonThuocMau.ID_NhomBenh=DM_NhomBenh.ID_NhomBenh join DM_NhanVien on DM_DonThuocMau.ID_BacSiTao=DM_NhanVien.ID_NhanVien",'','');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_DonThuocMau"];
    $responce->rows[$i]['cell']=array($row["TenDonThuoc"],$row["TenNhomBenh"],$row["HoLotNhanVien"].' '.$row["TenNhanVien"]);
    $i++; 
}   
echo json_encode($responce);
?>