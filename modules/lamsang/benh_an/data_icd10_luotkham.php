<?php
$data= new SQLServer;
$params = array($_GET["id_luotkham"]);
$store_name="{call MED_Kham_GetDanhSachICD10(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$responce=new stdClass;
$excute= new SQLServerResult($get_danh_muc_phong_ban);

$tam= $excute->get_as_array();
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array('',$row["MaICD10"],$row["VVIET"],$row["NickName"],$row["ID_Kham"],$row["MaICD10"]);
    $i++;
}
echo json_encode($responce);

?>