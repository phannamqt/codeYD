<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array( $_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_canlamsngbenhan(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["TenForm"];
    $responce->rows[$i]['cell']=array($row["TenNhom"],$row["SL"],$row["NgayGanNhat"]->format($_SESSION["config_system"]["ngaythang"]),$row["ID4Dev"]);
    $i++; 
}
echo json_encode($responce);
?>
