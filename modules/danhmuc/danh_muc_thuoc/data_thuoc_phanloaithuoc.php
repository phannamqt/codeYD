<?php

$data= new SQLServer;
$params = array($_GET['id']);
$store_name="{call Thuoc_PhanLoaiThuoc_Select(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Auto"];
    $responce->rows[$i]['cell']=array($row["ID_Thuoc"],$row["ID_PhanLoai"]);
    $i++; 
}
echo json_encode($responce);
?>