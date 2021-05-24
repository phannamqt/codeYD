<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["idbenhnhan"]);//tao param cho store
$store_name="{call Gd2_XacDinhNhanThan_Select(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
//ID_XacDinhNhanThan    ID_LuotKham ID_BenhNhan ID_NguoiThucHien    ID_NguoiGiamSat NgayGioThucHien NgayGioHoanTat  ID_TrangThai    Hinh    LyDo    GhiChu
//1   240515  43283   29  21  2013-11-16 09:38:00 NULL    DaThucHien   ; ; ;  KSK Bn ko chơi
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve


     if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
    $responce->rows[$i]['id']=$row["ID_XacDinhNhanThan"];
    $responce->rows[$i]['cell']=array(
	$row["ID_LuotKham"],
	$row["LyDo"],
    $row["ID_TrangThai"],
    $row["ID_NguoiThucHien"],
    $row["NgayGioThucHien"],
    $row["MaBenhNhan"],
    $row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
    $row["NguoiTaoLuotKham"],$row["GhiChu"],
     $row["SoThe"],$row["HanSD_TuNgay"],$row["HanSD_DenNgay"],

	);
    $i++;
}
echo json_encode($responce);
?>
