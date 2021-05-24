<?php
$data= new SQLServer;
$params = array();
$store_name="{call GD2_DM_LoaiPhauThuat_ThuThuat_New_SelectAll()}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LoaiPhauThuat_ThuThuat"];
    $responce->rows[$i]['cell']=array($row["Ten_LoaiPhauThuat_ThuThuat"]);
    $i++; 
}
echo json_encode($responce);
?>