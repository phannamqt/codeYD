<?php

switch ($_GET["oper"]) {
	case "taohoso":
	taohoso();
	break;
	 
}

function taohoso(){
	$check1="";
	$check2="";
	$i=0;
	$params=array(
		$_GET['id_benhnhan'],
		$_SESSION["user"]["id_user"],
		);
	
	$data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call MED_TaoLuotKhamKeToaTuDong (?,?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	echo $tam[0]['ID_BenhNhan'].'|'.$tam[0]['ID_LuotKham'].'|'.$tam[0]['ID_Kham'].'|'.$tam[0]['ID_DonThuoc'] ;
}
?>

