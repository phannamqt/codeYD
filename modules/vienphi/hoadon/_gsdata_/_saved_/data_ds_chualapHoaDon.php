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
$store_name="{call GD2_HoaDonThue_SelectByNgay (?,?,?)}";
$params = array($tu_ngay,$den_ngay,0);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {


   $NgayGioHenTraKQ = "";
   if (isset($row["NgayGioHenTraKQ"])) {
    $NgayGioHenTraKQ = $row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}


$ThoiGianKetThucKham = "";
   if (isset($row["ThoiGianKetThucKham"])) {
    $ThoiGianKetThucKham = $row["ThoiGianKetThucKham"]->format('H:i ') ;}


$responce->rows[$i]['id']=$row["ID_LuotKham"];
$responce->rows[$i]['cell']=array($row["ID_LuotKham"],
    $row["MaBenhNhan"],
    $row["HoLotBenhNhan"],
    $row["TenBenhNhan"],
      $row["DiaChi"],
    $row["LoaiDoiTuongKham"],
    $row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
   $row["TongPhaiTra"],
    $row["TongTienDichVu"], //TongPhuThu  TienHoanChiDinh   TongPhaiTra
        $row["TongMienGiam"],


    );

$i++;
}
echo json_encode($responce);
?>