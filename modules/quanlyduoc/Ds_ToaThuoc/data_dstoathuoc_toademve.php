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
$store_name="{call GD2_DSToaThuoc_ToaDemVe2 (?,?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($tu_ngay,$den_ngay);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
if($row["NgayKeDon"]!='')
			$row["NgayKeDon"]=$row["NgayKeDon"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayKeDon"]='';

if($row["NgayGioInBill"]!='')
			$row["NgayGioInBill"]=$row["NgayGioInBill"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioInBill"]='';
	
if($row["Tongtientheodon"]!='')
			$row["Tongtientheodon"]=number_format($row["Tongtientheodon"]);
	else $row["Tongtientheodon"]='';

if($row["ThucTra"]!='')
			$row["ThucTra"]=number_format($row["ThucTra"]);
	else $row["ThucTra"]='';
	
if($row["GioiTinh"]=0)
			$row["GioiTinh"]='Nam';
	else $row["GioiTinh"]='Nữ';
	
	
	
	
    $responce->rows[$i]['id']=$row["id_donthuoc"];
    $responce->rows[$i]['cell']=array(
		$row["id_donthuoc"],
		$row["id_benhnhan"],
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
		$row["TenBenhNhan"],
        $row["Tuoi"],
		$row["GioiTinh"],
        $row["DiaChi"],
		$row["NickName"],//bac si ke don
        $row["NgayKeDon"],
        $row["Tongtientheodon"],
		$row["ThucTra"],
        $row["TThai"],
           '',  '',
		$row["NgayGioInBill"],
	    $row["TrangThaiDonThuoc"],
	    $row["nxuat"],
	    $row["IsLock"],
		'',
	    0,
		0,
		'',
		$row["TenPhanLoaiKham"],
        );
     
    $i++; 
}  
echo json_encode($responce);
?>