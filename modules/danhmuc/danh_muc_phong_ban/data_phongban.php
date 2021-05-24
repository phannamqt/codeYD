<?php

$data= new SQLServer;
$store_name="{call [GD2_DM_PhongBan_SelectAll] ()}";
$params = array();
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {

   $responce->rows[$i]['id']=$row["ID_PhongBan"];
    $responce->rows[$i]['cell']=array(
	
		$row["ID_PhongBan"],
		$row["TenPhongBan"],
        $row["ID_PhongBanCha"],
        $row["MoTa"],
        $row["DienThoai"],
		$row["IsPhongChuyenMon"],
		$row["ID_KhuVuc"],
		$row["ID_CongTy"],
		$row["Active"],
		$row["KhoangCachDenPhongKhamLS"],
		$row["Id_Tang"],
		$row["TenTang"],
		$row["Id_LoaiPBChuyenMon"],
		$row["TenPhongChuyenMon"]
            );
     
    $i++; 
}  
echo json_encode($responce);
?>