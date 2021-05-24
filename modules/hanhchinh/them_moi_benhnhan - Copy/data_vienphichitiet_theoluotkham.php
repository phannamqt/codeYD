<?php

$data = new SQLServer;


if(isset($_GET["ID_LuotKham"])){
		$store_name = "{call GD2_chitietdich_BHCC (?)}";
		$params = array($_GET["ID_LuotKham"]);
}/*else{
		$store_name = "{call GD2_vienphichitiet_byID_ThuTraNo (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
}*/


$get_lich = $data->query($store_name, $params);
//print_r($params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
	$benhnhan=0;
if($row["ExtField1"]=='Thuoc'){
	$benhnhan=$row["Phithuchiencc"]-$row["ThanhTienBaoHiem"];
}else{
	$benhnhan=$row["PhiThucHien"]-$row["ThanhTienBaoHiem"];
}
    //$responce->rows[$i]['id'] = $row["id"];
    $responce->rows[$i]['cell'] = array(
        $row["ID_LoaiKham"],
        $row["ID_Kham"],
        $row["NgayGioTao"]->format("H:i " . $_SESSION["config_system"]["ngaythang"]),
        $row["TenLoaiKham"],
		$row["solan"],
		$row["songay"],
		$row["Phithuchienthuong"],
		$row["Phithuchiencc"],
        $row["PhiThucHien"],
		$row["ThanhTienBaoHiem"],
		$benhnhan,
		$row["GiaCungChiTra"],		
        $row["TenNhom"],       
		$row["ExtField1"],
		$row["id"],		
		$row["nhomcha"],
		$row["BHCCTra"],		
        $row["Isbhcc"],
		$row["GiaBlog_thuong"],
		$row["GiaBlog_heso"],
		$row["DonGia_thuong"],
		$row["DonGia_heso"],
		$row["ID_NguoiBaoLanhBHCC"],
		
		
		
		
		
		
		
		
		
		
    );

    $i++;
}
echo json_encode($responce);
?>