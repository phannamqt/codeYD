<?php

$data= new SQLServer;//tao lop ket noi SQL
	
$store_name="{call GD2_DM_NhapXuat_SelectAll()}";//tao bien khai bao store
$params = array("");//tao param cho store 	

$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhapXuat"];
    $responce->rows[$i]['cell']=array($row["ID_NhapXuat"],$row["Ma_NhapXuat"],$row["Ten_LoaiNhapXuat"],$row["Active"]);
    $i++; 
}   
echo json_encode($responce);
?>