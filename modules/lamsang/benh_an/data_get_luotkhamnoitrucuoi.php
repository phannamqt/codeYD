<?php
$data= new SQLServer;
$store_name1="{call GD2_GetThongTinBenhAnNoiTruByID_BenhNhan(?)}";
$params1 = array ($_GET['id_benhnhan']);
$get=$data->query( $store_name1, $params1);
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//print_r($tam);
if(count($tam)>0){
	echo '|||1|||'.$tam[0]['ID_LuotKham'].'|||'.$tam[0]['ID_BenhNhan'].'|||'.$tam[0]['ID_BenhAnNoiTru'].'|||'.$tam[0]['ID_LoaiBenhAnNoiTru'].'|||'.$tam[0]['HoTenBN'].'|||'.$tam[0]['ID_PhongBan'].'|||'.$tam[0]['NgayTaoBenhAn']->format($_SESSION["config_system"]["ngaythang"]).'|||';
}else{
	echo '|||0|||';
}

?>