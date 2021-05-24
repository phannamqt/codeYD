<?php
//echo $_GET["tu_ngay"];

$data= new SQLServer;
$store_name="{call GD2_thanhtoantong_selectby (?,?)}";
$params = array($_GET['id_benhnhan'],"");
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
		$row["MaPhieu"],
        $row["NgayGio"]->format($_SESSION["config_system"]["ngaythang"] .' h:i'),
        $row["NoCu"],
        $row["TongTienPhaiTra"],
		 $row["SoTienThanhToan"],   
        $row["GiamGia"],
       
	    -($row["SoTienThanhToan"] - ($row["TongTienPhaiTra"]+ $row["NoCu"])+ $row["TienHuyChiDinh"]+ $row["GiamGia"]), 
       );     
    $i++; 
}  
echo json_encode($responce);
?>