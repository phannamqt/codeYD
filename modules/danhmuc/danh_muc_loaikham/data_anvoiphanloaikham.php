<?php

$data= new SQLServer;
$params = array($_GET['id']);
$store_name="{call GD2_CauHinhAnLoaiKhamVoiPhanLoaiKhamGetByID_LoaiKham(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
/*	 if
   ($row["NgayBatDau"]!=""){
    $row["NgayBatDau"]=$row["NgayBatDau"]->format('d/m/Y');
   }
    if
   ($row["NgayKetThuc"]!=""){
    $row["NgayKetThuc"]=$row["NgayKetThuc"]->format('d/m/Y');
   }
*/
    $responce->rows[$i]['id']=$row["ID_Auto"];
    $responce->rows[$i]['cell']=array($row["ID_PhanLoaiKham"],$row["GhiChu"]);
    $i++; 
}
echo json_encode($responce);
?>