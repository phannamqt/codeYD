<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call gd2_hai_test_zzz()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
//print_r($tam);
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["id"];
    $responce->rows[$i]['cell']=array($row["id"],$row["mota"],$row["doanhthu"],$row["loinhuan"]);
     
    $i++; 
}  
echo json_encode($responce);
?>
