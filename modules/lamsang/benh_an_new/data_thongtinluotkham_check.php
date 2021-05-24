<?php
$data= new SQLServer;
$store_name="{call GD2_ThongTinLuotKhamNoiTru_LayLuotKhamMoiNhatCuaBenhNhan(?)}";
$params = array($_GET['id_benhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
if(count($tam)>0){
echo $tam[0]['ID_LuotKham'].';'.$tam[0]['ID_TrangThai'];

}
else{
	echo ';KetThucKham';
}
?>