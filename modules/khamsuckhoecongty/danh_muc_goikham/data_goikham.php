<?php


$data= new SQLServer;
$params = array();
$store_name="{call spGoiKham_SelectAll ()}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();

$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
	$TenGoiKham=$row["TenGoiKham"].' ('.$row["SoTienDuKien"].')';
    $responce->rows[$i]['id']=$row["ID_GoiKham"];
    $responce->rows[$i]['cell']=array($row["ID_GoiKham"],$TenGoiKham,$row["MoTa"],$row["SoTienDuKien"],$row["GhiChu"],$row["TenGoiKham"]);
    $i++; 
}
echo json_encode($responce);
?>