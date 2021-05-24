<?php

$data= new SQLServer;
$params = array('DM_DuongDung','ID_DuongDung,TenDuongDung','','');
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$get=$data->query( $store_name,$params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    
  $arr[$row["ID_DuongDung"]]=$row["TenDuongDung"];
    $i++; 
}
echo json_encode($arr);
?>