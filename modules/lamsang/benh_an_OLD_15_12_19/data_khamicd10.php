<?php
$data= new SQLServer;
$store_name="{call GD2_kham_icd10(?)}";
$params = array($_GET['idbenhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($row["MaICD10"],$row["VVIET"]);
    $i++; 
}   
echo json_encode($responce);
?>