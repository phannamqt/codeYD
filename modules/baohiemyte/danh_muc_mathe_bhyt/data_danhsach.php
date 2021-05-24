<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_DM_loaidtbhyt_Getall()}";//tao bien khai bao store
$params = array();//tao param cho store 
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["id"];
    $responce->rows[$i]['cell']=array($row["ma_dt"],$row["ten_dt"],100-(float)$row["PT_PhuThu"]);
    $i++; 
}   
echo json_encode($responce);
?>