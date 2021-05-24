<?php

	$data= new SQLServer;//tao lop ket noi SQL
	$params = array($_GET['id_phieuxuatnoibo']);//tao param cho store 
	$store_name="{call GD2_GetAllPhieuXuatNoiBo(?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayHetHan"]!='')
				$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
		else $row["NgayHetHan"]='';
	if($row["SoLoNhaSanXuat"]==null)
				$row["SoLoNhaSanXuat"]='';
				
    $responce->rows[$i]['id']=$row["ID_PhieuXuatNoiBo_ChiTiet"];
    $responce->rows[$i]['cell']=array('',$row["ID_Thuoc"],$row["TenDonViTinh"],$row["SoLuong"],$row["SoLoNhaSanXuat"],$row["NgayHetHan"],1);
    $i++; 
}
echo json_encode($responce);
?>