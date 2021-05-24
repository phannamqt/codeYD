<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_LuotKham_GetNguoiApTheBHCC (?)}";
$params = array($_GET['id_luotkham']); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
if(count($tam)>0){
	echo $tam[0]['NickName'];
}else{
	echo "";
}
?>