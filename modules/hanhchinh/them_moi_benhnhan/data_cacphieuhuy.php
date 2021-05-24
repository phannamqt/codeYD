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

//null,43283,null,'2014-7-17','2014-9-24' ,'PHYSIO','DieuTriPhoiHop',0

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call [GD2_HuyChiDinh_SelectPhieuHuy_ByID_BenhNhan](?)}";//tao bien khai bao store
$params = array($_GET['ID_BenhNhan']);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;
/*ID_HuyChiDinh	MaPhieu	LyDoHuy	NgayGioHuy	ID_NguoiLapPhieu	ID_NguoiQuyetDinh	DaHoanTien	ID_BenhNhan	LoaiHoanTra	Ten_NguoiQuyetDinh	TenNguoiLapPhieu	MaPhieu	TenLoaiHoanTra
390	HCD_000390		2014-04-07 17:19:00	93	93	1	43283	0	Nguyễn Thị Nguyệt	Nguyễn Thị Nguyệt	PHU_013754	CLS,LS*/
foreach ($tam as $row) {//duyet toan bo mang tra ve SONGAYTHUCHIEN

    $responce->rows[$i]['id']=$row['ID_HuyChiDinh'];
    $responce->rows[$i]['cell']=array($row['ID_HuyChiDinh'],$row['MaPhieu'],
$row['NgayGioHuy']->format('y/m/d'),$row['TenNguoiLapPhieu'],
$row['Ten_NguoiQuyetDinh'],$row['LyDoHuy'],$row['DaHoanTien'],$row['TenLoaiHoanTra'],$row['LoaiHoanTra']


    	);
    $i++;
}
echo json_encode($responce);
?>