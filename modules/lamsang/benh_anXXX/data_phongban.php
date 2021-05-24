<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_GetKhoa()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Khoa"];
    $responce->rows[$i]['cell']=array($row["Khoa"]);
     
    $i++; 
}  
echo json_encode($responce);
?>