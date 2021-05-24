<?php
$data= new SQLServer;
$params = array();
$store_name="{call GD2_DM_NhomTemplate_Select()}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce;
$i=0;
foreach ($tam as $row) {
  $responce[] = array(
				'STT'						=> $i+1,
				'id'						=> $row["ID_NhomTemplate"],
				'TenNhom'					=> $row["TenNhom"],
	);
   $i++; 
}
if(empty($responce)){
	$responce= '[]';
	echo $responce;
}else{
	echo json_encode($responce);
}
?>