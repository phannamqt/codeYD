<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_TongHopPhieuXuatNoiBo(?,?,?)}";//tao bien khai bao store
$params = array($_GET['khoa'],convert_date($_GET['tungay'])." 00:00:00",convert_date($_GET['denngay'])." 23:59:59");
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayDuyet"]!='')
		$row["NgayDuyet"]=$row["NgayDuyet"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyet"]='';
	$responce->rows[$i]['id']=$row["ID_PhieuXuatNoiBo_ChiTiet"];
    $responce->rows[$i]['cell']=array($row["TenGoc"],
	$row["TenDonViTinh"],
	$row["SoLuong"],
	$row["NgayDuyet"]
	);
    $i++; 
}   
echo json_encode($responce);
?>