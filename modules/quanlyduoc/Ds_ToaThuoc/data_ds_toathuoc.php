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

	if($_GET['toacx']==0){
		$IsLock=0;
		$TrangThaiCancel='Cancel';
	}elseif($_GET['toacx']==1){
		$IsLock=1;
		$TrangThaiCancel='Cancel';
	}elseif($_GET['toacx']==2){
		$IsLock=1;
		$TrangThaiCancel='NotFull';
	}elseif($_GET['toacx']==3){
		$IsLock=0;
		$TrangThaiCancel='NotFull';
	}elseif($_GET['toacx']==4){
		$IsLock=0;
		$TrangThaiCancel='NotFull';
	}

$data= new SQLServer;
$store_name="{call GD2_spLayDSBenhNhan_ToaThuoc (?,?,?,?,?,?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($tu_ngay,$den_ngay,$IsLock,3,$TrangThaiCancel,'Xong');
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
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["ID_LuotKham"],
		$row["ID_BenhNhan"],
        $row["MaBenhNhan"],
        $row["HoTen"],
        $row["Tuoi"],
		$row["GioiTinh"],
        $row["DiaChi"],
		$row["NickName"],//bac si ke don
        $row["NgayKeDon"],
        $row["TotalPrice"],
        $row["TotalPrice_ThucTra"],
        //$row["ID_TrangThai"],//da xuat
        $row["GhiChu"],
        $row["HoSo"],
		'',''
        //$row["TenPhanLoaiKham"],//bac si ke don
        //$row["ID_BenhNhan"],//tien lap bill
        //$row["Dienthoai"],//gio in bill
            );
     
    $i++; 
}  
echo json_encode($responce);
?>