<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_Select_billhuychinhsua_chitiet(?)}";
$params = array($_GET['id_luotkham']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
     
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
        $row["TenNhom"],
        $row["TenLoaiKham"],
        $row["PhiThucHien"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>