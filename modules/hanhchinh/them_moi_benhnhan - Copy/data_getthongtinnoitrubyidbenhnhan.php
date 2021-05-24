<?php
$data= new SQLServer;
$store_name="{call GD2_GetTTTaoBenhAnNoiTruByID_BenhNhan(?)}";
$params = array($_GET['id_benhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
if(count($tam)>0){
	echo $tam[0]['ID_LuotKham'].';'.$tam[0]['ID_PhongBan'].'__'.$tam[0]['TenPhongBan'].';'.$tam[0]['HoTenBenhNhan'].';'.$tam[0]['LoaiDoiTuongKham'].';'.$tam[0]['DiaChiBaoTin'];
}else{
	echo 'null';
	}
echo "|||";

$store_name2="{call GD2_GetThongTinBenhNhan(?)}";
$params2 = array($_GET['id_benhnhan']);
$get_danh_muc2=$data->query( $store_name2, $params2);
$excute2= new SQLServerResult($get_danh_muc2);
$tam2= $excute2->get_as_array(); 
if(count($tam2)>0){
	echo $tam2[0]['ID_XaPhuong'];
}else{
	echo 'null';
	}
?>