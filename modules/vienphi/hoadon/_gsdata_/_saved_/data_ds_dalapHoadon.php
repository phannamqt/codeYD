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
$store_name="{call spHoaDonThueFinished_SelectByNgay (?,?,?)}";
$params = array($tu_ngay,$den_ngay,0);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {

//SoHD  NgayLap GioLap  ID_HoaDonThueDiary  Total NoiDung MaLoaiHD  ID_LuotKham MaBenhNhan  ID_BenhNhan Hoten DiaChi  NguoiMuaHang  MienGiam  GhiChu  HinhThucTT  DiaChiHoaDon  KyHieuHD  MaSoThue  TenDonVi  KeToan  TenLoaiHD HuyBo NgayGioHuy  ID_NguoiHuy ChiTietBangKe HotenNguoiHuy
/*0001942 2012-12-13 00:00:00.000 2012-12-15 10:48:31.007 10796 220000  NULL  2 231516  130722  83117 Nguyễn Lương Quỳnh Khanh  116 Đỗ Quang  NULL  0 Auto insert NULL  NULL  BS/12P  NULL  NULL  50  Không lấy hóa đơn- không dùng 0 NULL  NULL  Chi tiết  NULL*/
   $GioLap = "";
   if (isset($row["GioLap"])) {
    $GioLap = $row["GioLap"]->format("d/m/Y");
  }

$GioLap2 = "";
   if (isset($row["GioLap2"])) {
    $GioLap2 = $row["GioLap2"]->format('d/m/y H:i');

}
$ChiTietBangKe='Chi tiết bảng kê';



$responce->rows[$i]['id']=$row["ID_HoaDonThueDiary"];
$responce->rows[$i]['cell']=array(
  $row["ID_HoaDonThueDiary"],$row["MaLoaiHD"],
  $GioLap2,
    $row["MaBenhNhan"],
    $row["Hoten"],
    $row["SoHD"],
    $row["DiaChiHoaDon"],
    $row["LoaiDoiTuongKham"],
   $row["Total"],
    $row["MienGiam"], 
            $row["NoiDung"],$ChiTietBangKe,
            $row["TenLoaiHD"],
            $GioLap,




    );

$i++;
}
echo json_encode($responce);
?>