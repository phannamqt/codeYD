<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_ThanhToanTong_SelectAllByID_BenhNhan(?)}";
$params = array($_GET['id_benhnhan']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["ID_ThanhToan"];
    $responce->rows[$i]['cell']=array(
        $row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        $row["MaPhieu"],
        $row["GhiChu"],
        $row["NoCu"],
        $row["TongTienPhaiTra"],
        $row["TongPhuThu"],
        $row["TienHuyChiDinh"],
        $row["SoTienThanhToan"],
        $row["GiamGia"],
        $row["NoCuoi"], $row["NoLuot"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>