<?php

$data= new SQLServer;//tao lop ket noi SQL
//$param1= 254342;
$param1=$_GET["idluotkham"];
$params = array($param1);//tao param cho store 
$store_name="{call Gd2_ThongTinLuotKham_SelectAllByID_LuotKham(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["NgayGioHenTraKQ"]!='') {
			$row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format('H:i d-m-Y');
			$tam=explode(' ',$row["NgayGioHenTraKQ"]);
			$tam[1]= new DateTime($tam[1]);
			$row["NgayGioHenTraKQ"]=$tam[0].' '.$tam[1]->format($_SESSION["config_system"]["ngaythang"]); 
	}
	  if($row["NgayGioTraKQ"]!='') {
			$row["NgayGioTraKQ"]=$row["NgayGioTraKQ"]->format('H:i d-m-Y');
			$tam=explode(' ',$row["NgayGioTraKQ"]);
			$tam[1]= new DateTime($tam[1]);
			$row["NgayGioTraKQ"]=$tam[0].' '.$tam[1]->format($_SESSION["config_system"]["ngaythang"]); 
	}
	  if($row["NgayGioDuKienTraKQ"]!='') {
			$row["NgayGioDuKienTraKQ"]=$row["NgayGioDuKienTraKQ"]->format('H:i d-m-Y');
			$tam=explode(' ',$row["NgayGioDuKienTraKQ"]);
			$tam[1]= new DateTime($tam[1]);
			$row["NgayGioDuKienTraKQ"]=$tam[0].' '.$tam[1]->format($_SESSION["config_system"]["ngaythang"]); 
	}
	$responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["ID_LuotKham"],
									  $row["ID_BenhNhan"],
									  $row["NgayGioHenTraKQ"],
									  $row["ID_NguoiHenTraKQ"],
									  $row["NgayGioTraKQ"],
									  $row["ID_NguoiTraKQ"],
									  $row["NgayGioDuKienTraKQ"]);
    $i++; 
}
//print_r($responce);
echo json_encode($responce);
?>