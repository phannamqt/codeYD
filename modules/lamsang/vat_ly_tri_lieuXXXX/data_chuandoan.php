<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_DM_BenhICD10_Select_isPopular()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Benh"];
    $responce->rows[$i]['cell']=array(
    	$row["TenBenhThongThuong"],
    	$row["TenNhomBenh"],
    	$row["IsPopular"]
    	);
     
    $i++; 
}  
echo json_encode($responce);
?>