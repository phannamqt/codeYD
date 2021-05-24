<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_dm_thuoc_selectall_hoatchat_()}";//tao bien khai bao store
$params = array();
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;

$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve

    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array($row["TenGoc"],$row["HoatChatChinh"],$row["MaThuoc"],$row["ID_DuongDung"],$row["DonGia"],$row["ID_DonViTinh"],$row["LaThuoc"],$row["ThuocBHYT"],$row["TenDonViTinh"]);
    $i++; 
}   
echo json_encode($responce);
?>