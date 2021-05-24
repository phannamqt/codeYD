<?php

$kiemtra=$_GET['kiemtra'];
$data= new SQLServer;//tao lop ket noi SQL
if($kiemtra==0){
	//$table = "DM_XaPhuong";
	$params = array();//tao param cho store 
	$store_name="{call GD2_DM_GiaBan_SelectAll()}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	//print_r($tam);
	//$responce->userdata["ids"] = $ids;
}
else{
	if(isset($_GET['from_day'])){

	$from_day1=convert_date($_GET['from_day']) ;
}
if(isset($_GET['to_day'])){
	$to_day1=convert_date($_GET['to_day']) ;
}
$param1=$from_day1.' 00:00:00' ;
$param2=$to_day1.' 23:59:59';
	$params = array($param1,$param2);//tao param cho store 
	$store_name="{call GD2_DMGiaban_SellectAllDay(?,?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
}
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	$row["Ngayapdung"]=$row["Ngayapdung"]->format($_SESSION["config_system"]["ngaythang"].' H:i');
    $responce->rows[$i]['id']=$row["id_giaban"];
    $responce->rows[$i]['cell']=array(
	$row["ID_Thuoc"],
	$row["TenGoc"],
	$row["TenHoatChat"],
	$row["TenDonViTinh"],
	$row["BHYTNoiTruOrNgTru"],
	
	$row["Giaban"],
	//($row["Giaban"]*$row["PhanTramThue"])+$row["Giaban"],
	$row["Ngayapdung"],
	$row["NickName"],
	$row["Active"],
	$row["TenGoc"],
	
	);
    $i++; 
}
echo json_encode($responce);
?>