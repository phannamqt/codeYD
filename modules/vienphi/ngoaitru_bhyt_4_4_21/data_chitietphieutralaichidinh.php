<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_chitietphieutralaichidinh (?)}";
$params = array($_GET['id_huychidinh']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["ID_HuyChiDinhCT"];
    $responce->rows[$i]['cell']=array(
        $row["ID_LoaiKham"],
        $row["PhiThucHien"],
        $row["SoTienThucTra"],
        $row["GhiChu"],
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>