<?php
$data= new SQLServer;
$params = array($_GET["id_phanloaikham"]);
$store_name="{call DM_NhomXepHang_SelectAll_ID_PhanLoaiKham(?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce;
$i=0;
foreach ($tam as $row) {
  $responce[] = array(
				'STT'						=> $i+1,
				'id'						=> $row["ID_NhomXepHang"],
				'TenNhom'					=> $row["TenNhom"],
				'ID_PhanNhomXepHang'		=> $row["ID_PhanNhomXepHang"],
				'MoTa'						=> $row["MoTa"]
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