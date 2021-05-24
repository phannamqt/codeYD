<?php

$data = new SQLServer;


//spDonThuoc_SelectByID_BenhNhan 257961,'Cancel',0,'Xong'
if(isset($_GET["ID_LuotKham"])){
	$store_name = "{call GD2_DonThuoc_ngoaitru_idluotkham (?,?)}";
	$params = array($_GET["ID_LuotKham"],0);
}else{
		$store_name = "{call GD2_DonThuoc_ngoaitru_ByID_ThuTraNo (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
	
}

if(isset($_GET["ko_hotro"])){	
		$ko_hotro = 1;	
}else{
		$ko_hotro = 0;	
}

$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
 if($row["NgayBatDauDungThuoc"]!=''){
       		$row["NgayBatDauDungThuoc"]= $row["NgayBatDauDungThuoc"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	 }else{
		 $row["NgayBatDauDungThuoc"]='';
	 }
	 if($ko_hotro==1){
		$row["hotro"]=0;
	}
    $responce->rows[$i]['id'] = $row["ID_DonThuoc"];
    $responce->rows[$i]['cell'] = array( 
	1,
	$row["ID_DonThuoc"],
    $row["ID_LuotKham"],      
    $row["TenBSKeToa"],
	$row["NgayBatDauDungThuoc"],
    intval($row["tongtien"]),  
	intval($row["tongtien"])-intval($row["cungchitra"]), 
 	intval($row["cungchitra"]),
	0,
    intval($row["BHCCTra"]),
    intval($row["hotro"]),
   	intval($row["cungchitra"])-intval($row["hotro"])-intval($row["BHCCTra"]),
	intval($row["hotro"]),
	 	intval($row["cungchitra"])-intval($row["hotro"])-intval($row["BHCCTra"]),
);
    $i++;
}
echo json_encode($responce);
?>