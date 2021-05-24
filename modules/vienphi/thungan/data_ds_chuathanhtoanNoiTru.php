<?php

$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]);//echo $tu_ngay;
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
   // echo $tu_ngay;
}
if(isset($_GET["den_ngay"]))
{
    $den_ngay=$_GET["den_ngay"];
$den_ngay= convert_date($den_ngay).' 23:59:59';//echo $den_ngay;
}
else
{
   $den_ngay=date("Y-m-d").' 23:59:59';
}

$data= new SQLServer;
//$store_name="{call GD2_GetDS_BNNoiTruChuaThanhToan (?)}";
// câu cũ tính tổng tiền hơi chậm
$store_name="{call GD2_NoiTruChuaThanhToan ()}";

$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;


foreach ($tam as $row) {
   $NgayGioVaoVien = "";
   if (isset($row["NgayGioVaoVien"])) {
    $NgayGioVaoVien = $row["NgayGioVaoVien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
   }
    $NgayGioRaVien = "";
   if (isset($row["NgayGioRaVien"])) {
    $NgayGioRaVien = $row["NgayGioRaVien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
   }
$responce->rows[$i]['id']=$row["ID_LuotKham"];
$responce->rows[$i]['cell']=array(
    $row["ID_LuotKham"],
    $row["MaBenhNhan"],
    $row["HoLotBenhNhan"],
    $row["TenBenhNhan"],
    $row["Tuoi"],
    $row["GioiTinh"],
    $row["LoaiDoiTuongKham"],
    $NgayGioVaoVien,
    $row["ID_BenhNhan"],
    $row["TongCong"],
    $row["TamUng"],
    $row["ConLai"],
    $NgayGioRaVien,
	$row["TenPhongBan"],
    $row["SoPhieuKhamGoiLoa"],
	$row["SoPhieuKhamGoiLoa"],
	$row["SoPhieuKhamGoiLoa"],
	$row["Id_Phieu"],
    );

$i++;
}
echo json_encode($responce);
?>