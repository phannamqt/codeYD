<?php

$data = new SQLServer;


if(isset($_GET["ID_LuotKham"])){	
	if(isset($_GET["VP"])){
		if($_GET["VP"]=='false'){			
			$store_name1 = "{call gd2_BHYT_lamsang (?,?,?)}";
			$params1 = array($_GET["ID_LuotKham"],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR']);
			$tam = $data->query($store_name1, $params1);
		}
	}
		
		$store_name2 = "{call GD2_update_khauhao (?)}";
		$params2 = array($_GET["ID_LuotKham"]);
		$tam = $data->query($store_name2, $params2);	
		$store_name = "{call GD2_ThanhToan_Idluotkham (?,?)}";
		$params = array($_GET["ID_LuotKham"],$_GET["lydogiamgia"]);
}else{
		$store_name = "{call GD2_ThanhToan_Idthutrano (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
}

if(isset($_GET["ko_hotro"])){	
		$ko_hotro = 1;	
}else{
		$ko_hotro = 0;	
}
$get_lich = $data->query($store_name, $params);
//print_r($params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
if($ko_hotro==1){
	$row["hotro"]=0;
}

$benhnhan=$row["PhiThucHien"]-$row["ThanhTienBaoHiem"]-$row["hotro"]-$row["BHCCTra"]-$row["KhauHaoThuocVTYT"]-$row["KhauHaoDichVu"];
$miengiam=0;
if(isset($_GET["ID_LuotKham"])){	
		$miengiam=0;
}else{
		$benhnhan=$row["PhiThucHien"]-$row["ThanhTienBaoHiem"]-$row["hotro"]-$row["BHCCTra"]-$row["KhauHaoThuocVTYT"]-$row["KhauHaoDichVu"];

		$miengiam=$row["GiamGia"];
	
}
/*if($row["PhanTramGiam"]!='' || $row["SoTienGiam"]!=''){

if($row["PhanTramGiam"]==''){
	$miengiam=$benhnhan-$row['SoTienGiam']l}else{
	$miengiam=$benhnhan*$row["PhanTramGiam"]/100;
}

}*/
    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(
        $row["ID_LoaiKham"],
		$row["ID_Kham"],       
        $row["TenLoaiKham"],  
		$row["TenTrangThaiCLSCuaBenhNhan"],
        $row["PhiThucHien"],
		$row["GiaBaoHiem"],		
		$row["solan"]*$row["songay"],
		$row["PhanTramCungChiTra"],
	    $row["ThanhTienBaoHiem"],	   
		$row["ThanhTienCungChiTra"],
		intval($row["hotro"]),
		intval($row["BHCCTra"]),
		intval($row["KhauHaoThuocVTYT"]),
		intval($row["KhauHaoDichVu"]),
		$miengiam,
		$benhnhan,
		$row["GiaThueNgoaiThucHien"],
        $row["TenNhom"],         
		$row["ExtField1"],
		$row["id"],
		$row["Isbhyt"],
		$row["Tongbhyt"],
		$row["ThanhTienBaoHiem"],
		$row["ThanhTienCungChiTra"],
		$row["PhiThucHien"]-$row["ThanhTienBaoHiem"]- $row["hotro"]-$row["BHCCTra"]-$row["KhauHaoThuocVTYT"]-$row["KhauHaoDichVu"],
		$row["PhanTramGiam"],
		$row["SoTienGiam"]
		
		
    );

    $i++;
}
echo json_encode($responce);
?>