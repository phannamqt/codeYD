<?php

$data= new SQLServer;
$params = array('DM_NhomThuoc','ID_NhomThuoc,TenNhomThuoc','(ID_NhomThuocCha=0 or ID_NhomThuocCha is null ) and ID_NhomThuoc<>5','');
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
 $responce->rows[0]['id']=0;
    $responce->rows[0]['cell']=array('Tất cả');
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhomThuoc"];
    $responce->rows[$i]['cell']=array($row["TenNhomThuoc"]);
    $i++; 
}
echo json_encode($responce);
?>