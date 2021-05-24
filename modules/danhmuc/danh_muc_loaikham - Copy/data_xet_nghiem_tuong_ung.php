<?php
$data= new SQLServer;
$params = array(17);
$store_name="{call GD2_DM_SelectLoaiKhamByID_NhomCLS_Copy(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["TenLoaiKham"]);
    $i++; 
}
echo json_encode($responce);
?>