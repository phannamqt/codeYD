<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_HuyChiDinhThuocGetDSDonThuoc(?)}";//tao bien khai bao store
$params = array($_GET['ID_BenhNhan']);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	 if($row["NgayKeDon"]!=""){
		$row["NgayKeDon"]=$row["NgayKeDon"]->format('H:i d-m-Y');
	 }
    $responce->rows[$i]['id']=$row['ID_DonThuoc'];
    $responce->rows[$i]['cell']=array($row['ID_DonThuoc'],$row['NickName'],$row['NgayKeDon']);
    $i++; 
}   
echo json_encode($responce);
?>