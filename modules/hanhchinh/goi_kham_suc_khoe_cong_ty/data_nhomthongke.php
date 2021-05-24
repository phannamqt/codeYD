
<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_DM_NhomThongKeSauKhamSKCongTy_Select_All()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["Id_NhomThongKe"];
    $responce->rows[$i]['cell']=array($row["TenNhom"],$row["ExField2"]);
     
    $i++; 
}  
echo json_encode($responce);
?>