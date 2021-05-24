<?php

$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}

$data= new SQLServer;
$store_name="{call [GD2_PhieuNhap_GetBy_IDNCCANDFROMDATE2DATE](?,?,?)}";
$params = array($_GET["Idnhacc"],$tu_ngay,$den_ngay);
//print_r($params);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
//print_r($tam);
$i=0;

foreach ($tam as $row) {
	if($row["NgayDuyet"]!='')
			$row["NgayDuyet"]=$row["NgayDuyet"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		else $row["NgayDuyet"]='';
	
   $responce->rows[$i]['id']=$row["MaPhieu"];
    $responce->rows[$i]['cell']=array(
		
		$row["MaPhieu"],
		$row["NgayDuyet"],
        $row["TenNhanVien"],
        $row["TienThanhToan"],
		$row["TienDaThanhToan"],
		$row["SoTienConLai"],
        $row["GhiChu"],
		$row["ID_NhapKho"]
            );
     
    $i++; 
}  
echo json_encode($responce);
?>