<?php
/*$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_DM_nhanvien_get_hotenphongban()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();*/
$data= new SQLServer;
$store_name="{call GD2_GetDMSuCo_New(?)}";
$params = array(1);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["idIndex"];
    $responce->rows[$i]['cell']=array($row["TenVuviec"],
	$row["Diengiai"],$row["Tenmau"]);
     
    $i++; 
}  
echo json_encode($responce);
?>