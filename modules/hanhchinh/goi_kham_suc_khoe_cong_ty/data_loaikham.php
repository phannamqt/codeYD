<?php
$data= new SQLServer;
$store_name="{call GD2_DM_LoaiKham_Select_KhamKCongTy()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
	//$row["GiaKSKCT"]
	$responce->rows[$i]['id']=$row["ID_LoaiKham"];
	$responce->rows[$i]['cell']=array($row["ID_LoaiKham"],$row["ID_NhomCLS"],$row["TenLoaiKham"],$row["GiaKSKCT"],$row["GiaThueNgoaiThucHien"],$row["ThoiGianTrungBinhThucHien"]);
	$i++;
}

echo json_encode($responce);
?>
