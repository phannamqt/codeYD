<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_KhamPhuKhoa_DuLieuCLS(?)}";
$params = array($_GET['ID_LuotKham']); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 $responce[$i] = array('id' => $row["loakham"], 'noidung' => $row["mota"]);  
  $i++; 
 }   
 echo json_encode($responce);
?>