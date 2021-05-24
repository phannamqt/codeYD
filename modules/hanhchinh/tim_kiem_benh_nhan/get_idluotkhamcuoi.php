<?php
$data= new SQLServer;
$id_benhnhan=$_GET["id_benhnhan"];
$store_name="{call GD2_GetID_LuotKhamChuaHoanTatAndGanNhatAndID_BenhNhan(?)}";
$params = array($id_benhnhan);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
if(count($tam)>0){
	if($tam[0]["ID_TrangThai"]=='KetThucKham'){
		echo "0|||".$tam[0]["ID_LuotKham"];
	}else{
		echo "1|||".$tam[0]["ID_LuotKham"];
	}
}else{
	echo "2|||";
}
?>
