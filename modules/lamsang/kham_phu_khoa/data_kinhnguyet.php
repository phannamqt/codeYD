<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_LamSang_KhamPhuKhoaKinhNguyet()}";
$params = array(); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["TenTemplate"];
    $responce->rows[$i]['cell']=array($row["TenTemplate"]);
     
    $i++; 
}  
echo json_encode($responce);
?>