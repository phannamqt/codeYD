<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call spDM_Template_SelectTemplateDifferentCode0_2(?,?)}";
$params = array('ECG','Code0'); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Template"];
    $responce->rows[$i]['cell']=array($row["TenTemplate"],$row["NoiDung"],$row["KetLuan"]);
     
    $i++; 
}  
echo json_encode($responce);
?>