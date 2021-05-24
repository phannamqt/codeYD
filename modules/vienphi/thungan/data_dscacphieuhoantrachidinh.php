<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_HuyChiDinh_SelectPhieuHuy_TuNgayDenNgay(?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
if($row["NgayGioHuy"]!='')
            $row["NgayGioHuy"]=$row["NgayGioHuy"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHuy"]='';
    $responce->rows[$i]['id']=$row["ID_HuyChiDinh"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayGioHuy"],
        $row["TenNguoiLapPhieu"],
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["TongTienHuy"],
        $row["DaHoanTien"],
        $row["MaPhieuHoanUng"],
        $row["TienHoanUng"],
        '',
        '',
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>