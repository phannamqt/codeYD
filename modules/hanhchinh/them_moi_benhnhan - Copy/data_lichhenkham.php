<?php
if( trim($_GET['idbenhnhan'],' ')!='undefined'){
$data= new SQLServer;
$store_name="{call GD2_lichhenkham_currday(?)}";
$params = array($_GET['idbenhnhan']);

$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['cell']=array(
	$row['GioHenKham']->format('H:i'),
	$row['GioHenKham']->format('d/m/Y'),
	$row['GhiChu'],$row['bs'],$row['TrangThai'],'Lịch hẹn khám');
    $i++; 
}   
echo json_encode($responce);
}
else{
	echo'{}';
}
?>