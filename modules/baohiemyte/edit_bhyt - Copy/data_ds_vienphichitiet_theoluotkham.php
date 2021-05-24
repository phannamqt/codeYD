<?php

$data = new SQLServer;
$store_name = "{call GD2_ThanhToan_Idluotkham (?,?)}";
$params = array($_GET["ID_LuotKham"],0);
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
	if($row["ExtField1"]=='Giuongbenh'){
		$solan =	$row["ngaybh"];
	}else{
		$solan =	$row["solan"]*$row["songay"];
	}
	$benhnhan=intval($row["PhiThucHien"])-intval($row["ThanhTienBaoHiem"])-intval($row["hotro"])-intval($row["BHCCTra"])-$row["KhauHaoThuocVTYT"]-$row["KhauHaoDichVu"];
    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(
        $row["ID_LoaiKham"],
		$row["ID_Kham"],       
        $row["TenLoaiKham"],  
        $row["GiaBaoHiem"],	
        $solan,	      
	    $row["ThanhTienBaoHiem"],	
        $row["TenNhom"],         
		$row["ExtField1"],
		$row["id"],
		$row["Isbhyt"],
    );
    $i++;	
}
echo json_encode($responce);
?>