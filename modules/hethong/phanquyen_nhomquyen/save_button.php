<?php
$data= new SQLServer;//tao lop ket noi SQL
$id_parent = $_GET['id_parent'];
$id_nhomquyen = $_GET['id_nhomquyen'];
$params = array($id_nhomquyen,$id_parent);//tao param cho store 
$store_name="{call GD2_DelButtonbyID(?,?)}";	
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$pieces = explode(",", $_GET['id']);
for ($i=0;$i<=count($pieces)-1;$i++) { 	
			unset ($params1) ;
			$store_name1="{call GD2_Add_yes_grouppermission (?,?)}";
			$params1 = array($id_nhomquyen,$pieces[$i]);
			$get1=$data->query( $store_name1, $params1);
}

?>