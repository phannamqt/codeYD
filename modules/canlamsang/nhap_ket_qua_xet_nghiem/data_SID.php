<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name3="{call GD2_GetSID(?)}";
$params3 = array($_GET['id_luotkham']); 
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam= $excute3->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	$responce.='|||'.$row["SoNgayLuuHinhKQ"].';'.$row["NgayCD"].';'.$row["Cdinh"];
}
echo $responce;

?>