<?php
//echo $_GET["tu_ngay"];
$tu_ngay='';
$den_ngay='';
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';//echo $tu_ngay;
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
   // echo $tu_ngay;
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';//echo $den_ngay;
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}
//echo $tu_ngay;
//echo $den_ngay;
//$tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';//echo $tu_ngay;
//$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';//echo $den_ngay;
$data= new SQLServer;
$store_name="{call Gd2_ThongTinLuotKham_SelectByChuaThanhToan (?,?,?,?)}";
$params = array($tu_ngay,$den_ngay,"HuyBo","Cancel");
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

//$store_name1="{call spThongTinLuotKham_LayTenBSKhamLamSangLanTruoc (?)}";
//$params1 = array($row["ID_BenhNhan"]);
//$get=$data->query( $store_name1, $params1);
//$excute1= new SQLServerResult($get);
//$tam1= $excute1->get_as_array();
//
//if (count($tam1)==0){
//$bstruoc='';
//}else{
//	$bstruoc=$tam1[0][3];
//}

    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["Tuoi"],
        $row["GioiTinh"],
        $row["TenPhanLoaiKham"],
        $row["LoaiDoiTuongKham"],
        $row["ThoiGianVaoKham"]->format('H:i'),
        $row["GhiChu"],
        $row["ID_TrangThai"],
        $row["SanSangGoiVaoKham"],
         $row["NotesStatus"],
         $row["ID_BenhNhan"],
            $row["Dienthoai"],
        $row["HoanTatHoSo"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>