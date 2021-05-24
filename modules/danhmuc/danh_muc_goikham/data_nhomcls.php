<?php
$data= new SQLServer;
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$params = array('NhomCLS','ID_NhomCLS,TenNhom,MoTa','','');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
  $responce->rows[0]['id']=0;
   $responce->rows[0]['cell']=array('','' );
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_NhomCLS"];
   $responce->rows[$i]['cell']=array($row["TenNhom"],$row["MoTa"] );
    $i++; 
} 

echo json_encode($responce);
?>
