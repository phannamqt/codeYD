<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call DM_BHYT_KhuVuc_Get ()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_KhuVuc"];
    $responce->rows[$i]['cell']=array($row["LoaiKhuVuc"]);     
    $i++; 
}  
echo json_encode($responce);
?>