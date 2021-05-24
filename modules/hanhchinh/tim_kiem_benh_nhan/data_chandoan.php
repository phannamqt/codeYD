<?php
$data= new SQLServer;
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$params = array('DM_BenhICD10','TenBenhThongThuong','','');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
 	$responce->rows[0]['id']='';
    $responce->rows[0]['cell']=array('');
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["TenBenhThongThuong"];
    $responce->rows[$i]['cell']=array($row["TenBenhThongThuong"]);
    $i++; 
}   
echo json_encode($responce);
?>