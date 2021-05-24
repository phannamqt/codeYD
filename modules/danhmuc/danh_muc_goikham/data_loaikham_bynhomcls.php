<?php
$data= new SQLServer;
$store_name="{call GD2_DM_SelectLoaiKhamByID_NhomCLS(?)}";
$params = array($_GET['id_nhomcls']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
	$responce->rows[0]['id']=0;
	$responce->rows[0]['cell']=array('','','',0);
foreach ($tam as $row) {
	$responce->rows[$i]['id']=$row["ID_LoaiKham"];
	$responce->rows[$i]['cell']=array($row["TenLoaiKham"],$row["MoTa"],$row["ID_NhomCLS"],$row["GiaBaoChoBN"] );
	$i++; 
} 
echo json_encode($responce);
?>