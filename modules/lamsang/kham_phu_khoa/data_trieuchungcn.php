<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_LamSang_KhamPhuKhoaTrieuChungCN()}";
$params = array(); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Template"];
    $responce->rows[$i]['cell']=array($row["TenTemplate"],$row["NoiDung"]);
     
    $i++; 
}  
echo json_encode($responce);
?>