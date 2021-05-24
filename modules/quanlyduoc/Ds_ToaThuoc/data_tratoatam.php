<?php

//$id_luotkham=$_GET['id_luotkham'];
$data= new SQLServer;
$store_name="{call GD2_phieuxuat_toatam (?)}";
$params = array($_GET['id_donthuoc']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_XuatKhoChiTiet"];
    $responce->rows[$i]['cell']=array(
		$row["ID_Thuoc"],
        $row["TenGoc"],
        $row["SoLoNhaSanXuat"],//so luong bn yeu cau
		$row["SoLuong"],//don gia
		$row["soluongtra"],
		$row["DonGia"],//thanh tien theo so luong benh nhan yeu cau
        $row["ThanhTien"],
		$row["SoLuong"]-$row["soluongtra"],
		$row["DonGiaVon"],
		$row["TienVon"],
		$row["DonGia"],
		$row["ThanhTien"],
		$row["NgayHetHan"]
		
		
            );
     
    $i++; 
}  
echo json_encode($responce);
?>