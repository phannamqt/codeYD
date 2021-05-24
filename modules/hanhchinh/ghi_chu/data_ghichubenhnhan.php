<?php

$idbenhnhan=$_GET['idbenhnhan'];
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call spGhiChuBenhNhan_SelectAllByID_BenhNhan(?)}";//tao bien khai bao store
$params = array($idbenhnhan);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 


$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row['NgayGioTao']!=''){
	$row['NgayGioTao']=$row['NgayGioTao']->format('Y-m-d H:i');
}
    $responce->rows[$i]['id']=$row['ID_GhiChuBN'];
    $responce->rows[$i]['cell']=array($row['ID_NhanVienTao'],$row['NgayGioTao'],$row['GhiChu']);
    $i++; 
}   
echo json_encode($responce);

?>