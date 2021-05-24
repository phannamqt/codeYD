<?php
$data= new SQLServer;
$store_name="{call ThongTinLuotKham_LayLuotKhamMoiNhatCuaBenhNhan(?)}";
$params = array($_GET['id_benhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();


if(count($tam)>0){
	if (date('Y-m-d') != date('Y-m-d', strtotime($tam[0]['ThoiGianKham']->format('Y-m-d'))) || $tam[0]['DaThanhToanBill']==1) {
   		$tam[0]['ID_TrangThai']='KetThucKham';
	}
	

	echo $tam[0]['ID_LuotKham'].';'.$tam[0]['ID_TrangThai'].';'.$tam[0]['ID_PhanLoaiKham'];

}
else{
	echo ';KetThucKham;';
}
?>