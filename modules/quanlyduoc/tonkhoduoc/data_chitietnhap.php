<?php
 
	$data= new SQLServer;//tao lop ket noi SQL
	
    $params = array($_GET["id_kho"],$_GET["id_thuoc"],convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');//tao param cho store
	
	$store_name="{call [Med_Thuoc_Nhap_ByIdThuoc_Details](?,?,?,?)}";//tao bien khai bao store dieukienloc
	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$responce = new stdClass;

	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve



	if($row["NgayKeDon"]!='')
			$row["NgayKeDon"]=$row["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayKeDon"]='';
	if($row["NgayDuyet"]!='')
			$row["NgayDuyet"]=$row["NgayDuyet"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayDuyet"]='';



    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["ID_Thuoc"],  $row["TenNCC"],$row["TenKho"],
    $row["TenGoc"],$row["Ten_LoaiNhapXuat"],$row["NgayDuyet"],
    $row["NguoiDuyet"],    $row["MaPhieu"],
    $row["SoLuong"], $row["Dongia"],
    $row["ThanhTien"], $row["NgayKeDon"], $row["BSKeDon"],
    $row["TenBenhNhan"],$row["MaBenhNhan"],
    );
    $i++; 
}   
	echo json_encode($responce);
/*	NgayNhapKho	NgayDuyet	ID_NguoiDuyet	ID_NhapXuat	ID_NCC	MaPhieu	ID_Thuoc	DonGiaN	SL_N	TT_N
2019-05-04 00:00:00.000	2019-05-04 18:23:00.000	51	0	503	186	5396	5952.38	1000	5952380.00*/
?>