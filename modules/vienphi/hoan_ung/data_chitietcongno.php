<?php
//echo $_GET["tu_ngay"];

$data= new SQLServer;
$store_name="{call GD2_thutrano_byloaithanhtoan (?,?)}";
$params = array($_GET['id_benhnhan'],'');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {


    $responce->rows[$i]['id']=$row["ID_ThanhToan"];
    $responce->rows[$i]['cell']=array(
        $row["NgayGio"]->format($_SESSION["config_system"]["ngaythang"] .' h:i'),
        $row["MaPhieu"],
        $row["GhiChu"],
        $row["NoCu"],
        $row["TongTienPhaiTra"],
        $row["SoTienThanhToan"],
        $row["TienHuyChiDinh"],
        $row["GiamGia"],
        -($row["SoTienThanhToan"] - ($row["TongTienPhaiTra"]+ $row["NoCu"])+ $row["TienHuyChiDinh"]+ $row["GiamGia"])
            );
     
    $i++; 
}  
echo json_encode($responce);
?>