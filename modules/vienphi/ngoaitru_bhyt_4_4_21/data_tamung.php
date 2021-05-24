<?php
//echo $_GET["tu_ngay"];

$data= new SQLServer;
$store_name="{call GD2_tamung_byid_luotkham (?)}";
$params = array($_GET['id_luotkham']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
	if($row["LoaiThanhToan"]=='TamUng'){
		$tamung=$row["SoTien"];
		$hoanung=0;
	}else{
		$tamung=0;
		$hoanung=$row["SoTien"];
	}



    $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
		$row["MaPhieu"],
        $row["NgayGio"]->format($_SESSION["config_system"]["ngaythang"] .' h:i'),
        $row["NguoiGiaoDich"],
        $tamung,
        $hoanung,
        $row["NickName"]       
       );
     
    $i++; 
}  
echo json_encode($responce);
?>