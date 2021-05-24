<?php
$data= new SQLServer;
$store_name="{call GD2_KiemTraID_Kham(?)}";
$params = array($_GET['id_kham']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
//if(($tam[0]['ID_TrangThai']!='DangCho' && $tam[0]['ID_TrangThai']!='DangKham') || $tam[0]['DaThanhToan']==1){
if($tam[0]['DaThanhToan']==1){
	echo "false;;";
}
/* elseif($tam[0]['ID_NhomCLS']==20){
	echo "false;;bschinh";
}elseif($tam[0]['ID_NhomCLS']==17 && $tam[0]['ID_TrangThai']!='DangCho'){
	echo "false;;";
}elseif($tam[0]['ID_TrangThai']!='DangCho' && $tam[0]['ID_TrangThai']!='DangKham'){
	echo "false;;";
} */
else{
	echo "true;;";	
}
?>