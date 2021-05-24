<?php


$ID_ThuTraNo=0;
 $phanloaiHD=0;
  $IDHoaDonThueDiary=0;
if(isset($_GET["ID_ThuTraNo"]))
{
   $ID_ThuTraNo= $_GET["ID_ThuTraNo"];
}
else
{
   $ID_ThuTraNo=0;

}
if(isset($_GET["phanloaiHD"]))
{
   $phanloaiHD= $_GET["phanloaiHD"];
}
else
{
   $phanloaiHD=0;

}

if((isset($_GET["IDHoaDonThueDiary"])&& $_GET["IDHoaDonThueDiary"]!="undefined"))
{
   $IDHoaDonThueDiary= $_GET["IDHoaDonThueDiary"];
}
else
{
   $IDHoaDonThueDiary=0;

}

$data= new SQLServer;


if((isset($_GET["ID_ThuTraNoMulti"])&& $_GET["ID_ThuTraNoMulti"]!="undefined"))
{
$store_name="{call GD2_LayThongTinHoaDonMulti (?,?,?,?)}";
$params = array($ID_ThuTraNo, $phanloaiHD, $IDHoaDonThueDiary,$_GET["ID_ThuTraNoMulti"]);
}
else
{
$store_name="{call GD2_LayThongTinHoaDon (?,?,?)}";
$params = array($ID_ThuTraNo, $phanloaiHD, $IDHoaDonThueDiary);

}
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {
//ham ID_HoaDonThueDiary  GioLap  NoiDung GhiChu  MaSoThue  KeToan  TenDonVi
//881 890 Huỳnh Thị Thanh tổ 57 HThuận1 9055  BS/14P  2014-08-18 08:29:57.000 26692 2014-08-20 14:32:48.663       178 Huỳnh Thị Thanh

$responce->rows[$i]['id']=$row["ID_BenhNhan"];
$responce->rows[$i]['cell']=array($row["ID_BenhNhan"],
    $row["MaBenhNhan"],
 $row["HoTen"],
 $row["DiaChi"],
 $row["SoHD"],
 $row["KHHD"],
 $row["ThoiGianVaoKham"],
 $row["ID_HoaDonThueDiary"],
 $row["GioLap"],
 $row["NoiDung"],
 $row["GhiChu"],
 $row["MaSoThue"],  
     $row["SoTK"],
     $row["HinhThucTT"],
 $row["KeToan"],
  $row["TenDonVi"],


    );

$i++;
}
echo json_encode($responce);
?>