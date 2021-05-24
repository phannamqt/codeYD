<?php
//echo $_GET["tu_ngay"];

$data= new SQLServer;
$store_name="{call GD2_bhyt_chandoan_icd_ngoaitru (?)}";
$params = array($_GET['id_luotkham'],'');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
if(count($tam)>0){
echo $tam[0]['ChanDoan'].'||'.$tam[0]['MaICD10'].'||'.$tam[0]['NickName'];
}
?>