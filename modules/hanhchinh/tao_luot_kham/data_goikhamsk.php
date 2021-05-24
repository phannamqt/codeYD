<?php

$data= new SQLServer;

 
$store_name="{call Gd2_combobox_dialog_join(?,?,?)}";
$params = array('ID_GoiKhamChoCongTy,TenCty,TenDotKham from GoiKhamChoCongTy join DM_KhachHangLaCTy on DM_KhachHangLaCTy.ID_KhachHangCTy=GoiKhamChoCongTy.ID_KhachHangCTy','','');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_GoiKhamChoCongTy"];
    $responce->rows[$i]['cell']=array($row["TenDotKham"],$row["TenCty"] );
     
    $i++; 
}  
echo json_encode($responce);
?>