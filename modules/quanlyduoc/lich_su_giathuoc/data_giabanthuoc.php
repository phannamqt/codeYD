<?php

$data = new SQLServer;
$store_name = "{call GD2_lichsugiathuoc (?,?,?)}";

$tungay=convert_date($_GET["tungay"]);
$dengay=convert_date($_GET["denngay"]).' 23:59:59';
$params = array($_GET["ID_Thuoc"],$tungay,$dengay);
	



$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {
 if($row["NgayLapPhieu"]!=''){
       		$row["NgayLapPhieu"]= $row["NgayLapPhieu"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	 }else{
		 $row["NgayLapPhieu"]='';
	 }
 
    $responce->rows[$i]['cell'] = array( 
	$row["TenGoc"],
	$row["NgayLapPhieu"],
    $row["MaBenhNhan"],      
    $row["tenbn"],
	$row["TenDonViTinh"],
	$row["SoLuong"],
    $row["DonGia"],
    $row["ThanhTien"],
     $row["ID_NhapXuat"],
       $row["TenKho"],
         $row["TenKhoNhan"],
 
 
 
      
   

);
    $i++;
}
echo json_encode($responce);
?>