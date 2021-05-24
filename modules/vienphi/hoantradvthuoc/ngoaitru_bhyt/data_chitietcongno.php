


<?php


$data= new SQLServer;
$store_name="{call GD2_chitietcongno(?)}";
$params = array($_GET['id_benhnhan']);

$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row['ID_ThuTraNo'];
    $responce->rows[$i]['cell']=array(
		$row['NgayGio']->format('d/m/y H:i'),
		$row['MaPhieu'],
		$row['GhiChu'],	
		$row['NoCu'],
		$row['TongTienPhaiTra'],
		$row['GiamGia'],				
		$row['TongTienBHYTChiTra'],
		$row['HoTroTuBenhVien'],
		$row['TongTienBHCCTra'],
		$row['SoTienThanhToan'],	
		$row['NoCuoi'],
		$row['LoaiThanhToan'],
		$row['ID_BenhAnNoiTru'],
    );
    $i++;
}
echo json_encode($responce);
?>