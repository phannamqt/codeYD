<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name3="{call [GD2_GetKhoaLSP_New]()}";
$params3 = array(); 
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam3= $excute3->get_as_array();
$responce3 = new stdClass;
$i=0;
foreach ($tam3 as $row) {//duyet toan bo mang tra ve
    $responce3->rows[$i]['id']=$row["ID_Khoa"];
    $responce3->rows[$i]['cell']=array($row["Khoa"]);
    $i++; 
} 

echo json_encode($responce3); 
?>