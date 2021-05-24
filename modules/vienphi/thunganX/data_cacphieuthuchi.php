<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_Thu_TraNo_SelectAllTuNgayDenNgay (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
//print_r($tam);
foreach ($tam as $row) {
	$doituong='';
	$nt='';
if(trim($row["LoaiDoiTuongKham"],' ')==''){
	$doituong='Viện phí';
}else{
	$doituong=$row["LoaiDoiTuongKham"];
}
if(trim($row["ID_PhanLoaiKham"],' ')==46){
	$nt=1;
}else{
	$nt=0;
}

    $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["GhiChu"],
        $row["TenNhanVien"],
        $row["TienThuVao"],
        $row["TienChiRa"],
        $row["DaCoHDKCBNgoaiTru"],
        $row["DaCoHDThuocNgoaiTru"],
        $row["DaCoHDThuocNoiTru"],
        $row["DaCoHDKCBNoiTru"],
		$row["ID_BenhNhan"],
		$row["LoaiThanhToan"],
        $row["ID_PhanLoaiKham"],
        $row["LoaiDoiTuongKham"],
   		$doituong,
		$nt,		
		$row["TenPhongBan"],
		$row["vpnoi"],
		$row["vpngoai"],
		$row["bhytnoi"],
		$row["bhytngoai"],
		$row["ID_BenhAnNoiTru"],
		$row["conlai"],
        $row["IP"],
         $row["Tang"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>