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
$store_name="{call [GD2_CongNoNhaCungCap_SelectPhieuTraHang](?,?,?)}";
$params = array($tu_ngay,$den_ngay,$_GET["Idnhacc"]);
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
		
	if($row["NgayLapPhieu"]!='')
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		else $row["NgayLapPhieu"]='';
	
   $responce->rows[$i]['id']=$row["MaPhieu"];
    $responce->rows[$i]['cell']=array(
		
		$row["MaPhieu"],
		$row["NgayDuyet"],
        $row["nguoichi"],
        $row["NgayLapPhieu"],
		$row["nguoinhap"],
		$row["ThanhTien"]+$row["TienVAT"]
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>