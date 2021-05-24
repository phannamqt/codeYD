<?php

$data= new SQLServer;
$params = array($_GET['id']);
$store_name="{call GD2_nhanvien_qhgiadinh(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["Id_auto"];
    $responce->rows[$i]['cell']=array($row["MaBenhNhan"],$row["ID_LoaiQuanHe"],$row["HoLotBenhNhan"],$row["TenBenhNhan"],$row["tuoi"],$row["Active"]);
    $i++; 
}
echo json_encode($responce);
?>