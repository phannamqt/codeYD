<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call [GD2_HuyChiDinhThuoc_SelectPhieuHuyByID_BenhNhan](?)}";//tao bien khai bao store
$params = array($_GET['ID_BenhNhan']);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row['ID_HuyChiDinh'];
    $responce->rows[$i]['cell']=array($row['ID_HuyChiDinh'],$row['MaPhieu'],$row['ID_DonThuoc'],
	$row['NgayGioHuy']->format('y/m/d'),$row['TenNguoiLapPhieu'],
	$row['Ten_NguoiQuyetDinh'],$row['LyDoHuy'],$row['DaHoanTien']

    	);
    $i++;
}
echo json_encode($responce);
?>