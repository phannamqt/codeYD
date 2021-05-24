<?php

$data= new SQLServer;
$params = array('DM_HoatChat','ID_HoatChat,TenHoatChat','','');
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_HoatChat"];
    $responce->rows[$i]['cell']=array($row["TenHoatChat"]);
    $i++; 
}
echo json_encode($responce);
?>