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
$store_name="{call GD2_CongNoNCC_SelectPhieuChiDuoc(?,?,?,?)}";
$params = array($tu_ngay,$den_ngay,'PhieuChiDuoc',$_GET["Idnhacc"]);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
//print_r($tam);
$i=0;

foreach ($tam as $row) {
	if($row["NgayGio"]!='')
			$row["NgayGio"]=$row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		else $row["NgayGio"]='';
	
		if($row["NgayGioDuyet"]!='')
			$row["NgayGioDuyet"]=$row["NgayGioDuyet"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		else $row["NgayGioDuyet"]='';
		
   $responce->rows[$i]['id']=$row["ID_NhaCungCap"];
    $responce->rows[$i]['cell']=array(
		
		$row["MaPhieu"],
		$row["MaPhieuNhapKho"],
        $row["NguoiLapPhieu"],
        $row["NgayGio"],
        $row["NguoiDuyet"],
		$row["NgayGioDuyet"],
		$row["SoTien"]
            );
     
    $i++; 
}  
echo json_encode($responce);
?>