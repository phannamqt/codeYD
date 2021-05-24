<?php
//print_r($_POST['NickName']);
$data= new SQLServer;
$store_name="{call GD2_get_yes_userpermission(?)}";
$params = array($_GET["id"]);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $btam1="";
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["ID_NhanVien"],$row["HoLotNhanVien"],$row["TenNhanVien"],$row["NickName"],$row["TenPhongBan"],$row["TenChucDanh"],);     
    $i++; 
}  
echo json_encode($responce);
?>