<?php

$data = new SQLServer;


//spDonThuoc_SelectByID_BenhNhan 257961,'Cancel',0,'Xong'
if(isset($_GET["ID_LuotKham"])){
	$store_name = "{call spDonThuoc_SelectByID_BenhNhan (?,?,?,?)}";
	$params = array($_GET["ID_LuotKham"],'Cancel',0,'Xong');
}else{
		$store_name = "{call spDonThuoc_SelectByID_ThuTraNo (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
	
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
    $responce->rows[$i]['id'] = $row["ID_DonThuoc"];
    $responce->rows[$i]['cell'] = array( 
	1,
	$row["ID_DonThuoc"],
    $row["ID_LuotKham"],      
    $row["TenBSKeToa"],
	$row["NgayBatDauDungThuoc"],
    $row["ThanhTien"],
    $row["SoTienGiam"],
 	$row["ID_BacSiChoToa"],
      
   

);
    $i++;
}
echo json_encode($responce);
?>