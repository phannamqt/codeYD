<?php

$data = new SQLServer;

//$ID_LuotKham = $_GET["ID_LuotKham"];

if(isset($_GET["ID_LuotKham"])){
	$store_name = "{call GD2_DonThuocChiTiet_BHYT_SelectDonThuocChiTietByID_luotkham(?,?)}";
	$params = array($_GET["ID_LuotKham"],0);
}else{
	$store_name = "{call GD2_DonThuocChiTiet_BHYT_SelectDonThuocChiTietByID_thu_trano (?)}";
	$params = array($_GET["ID_ThuTraNo"]);	
}

if(isset($_GET["ko_hotro"])){	
		$ko_hotro = 1;	
}else{
		$ko_hotro = 0;	
}
//spDonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc 242094
/*$store_name = "{call GD2_DonThuocChiTiet_SelectDonThuocChiTietByID_DonThuoc (?)}";
$params = array($_GET["ID_LuotKham"]);*/
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {
	$SoLoNhaSanXuat='';
	$NgayHetHan='';
	$SoLuong='';
	$SoLuongXuatTam=0;
	if($ko_hotro==1){
		$row["hotro"]=0;
	}
		if(isset($row["SoLoNhaSanXuat"])){
			$SoLoNhaSanXuat=$row['SoLoNhaSanXuat'];
		}
		if(isset($row["NgayHetHan"])){
			$NgayHetHan=$row['NgayHetHan']->format($_SESSION["config_system"]["ngaythang"]);
		}
		if(isset($row["SoLuong"])){
			$SoLuong=$row['SoLuong'];
		}
		if(isset($row["SoLuongXuatTam"])){
			$SoLuongXuatTam=$row['SoLuongXuatTam'];
		}
	/*$phaitra=(($row["GiaCungChiTra"])*$row["SoThuocThucXuat"])-$row["hotro"];
	if($phaitra<0){
	$row["hotro"]=(($row["GiaCungChiTra"])*$row["SoThuocThucXuat"]);	
	}*/
	
    $responce->rows[$i]['id'] = $row["ID_Thuoc"];
    $responce->rows[$i]['cell'] = array( 
        $row["ID_DonThuocCT"],
        $row["TenThuoc"],
        $row["TenDonViTinh"],
        $row["Gia"],
		$row["GiaCungChiTra"],
        $row["SoThuocDeNghiTheoDon"],
        $row["SoThuocThucXuat"],
        intval($row["Gia"]*$row["SoThuocThucXuat"]),  
		  
		intval(($row["GiaCungChiTra"])*$row["SoThuocThucXuat"]),  
		intval($row["hotro"]),
		0,
		intval($row["BHCCTra"]),
		intval((intval(($row["GiaCungChiTra"])*$row["SoThuocThucXuat"]))-$row["hotro"]-$row["BHCCTra"]),  
		$row["ID_Thuoc"],  
		$SoLuong,
		$SoLuongXuatTam,
		$row["giavon"]*$row["SoThuocThucXuat"],
		$row["IsBhyt"],
		$row["Tongbhyt"],
		intval(($row["GiaCungChiTra"])*$row["SoThuocThucXuat"]),
		intval((($row["GiaCungChiTra"])*$row["SoThuocThucXuat"])-$row["hotro"]-$row["BHCCTra"]),
		$row["GiaCungChiTra"]
    );

    $i++;
}
echo json_encode($responce);
?>