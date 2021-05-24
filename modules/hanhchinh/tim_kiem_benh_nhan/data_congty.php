<?php
$data= new SQLServer;
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$params = array('DM_KhachHangLaCTy','ID_KhachHangCTy,TenCty,MaVietTat','','');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_KhachHangCTy"];
    $responce->rows[$i]['cell']=array($row["TenCty"],$row["MaVietTat"]);
    $i++; 
}   
echo json_encode($responce);
?>