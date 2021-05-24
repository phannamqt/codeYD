<?php
$data= new SQLServer;//tao lop ket noi SQL SampleID

$params = array($_GET["id_auto"]); 
$store_name="{call [GD2_DmBenhnhan_vantay](?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

echo ($tam[0]['MaBenhNhan'].'|'.$tam[0]['HoLotBenhNhan'].'|'.$tam[0]['TenBenhNhan'].'|'.$tam[0]['tuoi'].'|'.$tam[0]['gioi'].'|'.$tam[0]['SoPhieuKhamGoiLoa'].'|'.$tam[0]['ID_LuotKham'].'|'.$tam[0]['ID_BenhNhan']) ;

?>	