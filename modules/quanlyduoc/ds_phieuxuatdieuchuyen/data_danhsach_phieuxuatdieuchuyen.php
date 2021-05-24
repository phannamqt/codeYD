<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GetDSPhieuXuatDieuChuyen_ChuaDuyet(?,?)}";//tao bien khai bao store
$params = array(convert_date($_GET['tungay'])." 00:00:00",convert_date($_GET['denngay'])." 23:59:59");
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgaygioTao"]!='')
			$row["NgaygioTao"]=$row["NgaygioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgaygioTao"]='';
	
	if($row["NgayDuyet"]!='')
			$row["NgayDuyet"]=$row["NgayDuyet"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyet"]='';
	
	if($row["NgayDuyetXuat"]!='')
			$row["NgayDuyetXuat"]=$row["NgayDuyetXuat"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyetXuat"]='';
	if($row["MaPhieuGop"]>0)
		$gop=1;
	else
		$gop=0;
    $responce->rows[$i]['id']=$row['ID_PhieuXuatNoiBo'];
    $responce->rows[$i]['cell']=array($row["SoPhieu"],
	$row["TuKho"],
	$row["DenKho"],
	$row["NguoiTao"],
	$row["NgaygioTao"],
	$row["NguoiDuyet"],
	$row["NgayDuyet"],
	$row["Id_PhongBan"],
	$row["ChotPhieu"],
	$row["ID_TuKho"],
	$row["ID_DenKho"],
	$row["Id_NguoiTao"],
	$row["NguoiDuyetXuat"],
	$gop,
	$row["MaPhieuGop"],
	$row["ID_NguoiDuyetXuat"],
	$row["NgayDuyetXuat"],
	$row["BHYT"]
	);
    $i++; 
}   
echo json_encode($responce);
?>