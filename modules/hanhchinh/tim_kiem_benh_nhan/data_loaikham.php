<?php
$data= new SQLServer;
$store_name="{call Gd2_combobox_dialog_join(?,?,?)}";
$params = array('ID_LoaiKham,TenLoaiKham,TenNhom from DM_LoaiKham join NhomCLS on DM_LoaiKham.ID_NhomCLS=NhomCLS.ID_NhomCLS','','');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
 $responce->rows[0]['id']=0;
 $responce->rows[0]['cell']=array('','');
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["TenLoaiKham"],$row["TenNhom"]);
    $i++; 
}   
echo json_encode($responce);
?>