<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_PhieuChiDuoc_NhaCungCap()}";
$params = array(); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NCC"];
    $responce->rows[$i]['cell']=array($row["TenNCC"],$row["DiaChi"],$row["DienThoai"]);
     
    $i++; 
}  
echo json_encode($responce);
?>