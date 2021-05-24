<?php
$data= new SQLServer;
$store_name="{call GD2_bhyt_getby_idbenhnhan (?)}";
$params = array($_GET['id_benhnhan']); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce ='';
$i=0;

foreach ($tam as $row) {
	if($row["HanSD_DenNgay"]==''){
	}else{
		$row["HanSD_DenNgay"]=$row["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"]);
	}

	if($row["NgayDu5Nam"]==''){
	}else{
		$row["NgayDu5Nam"]=$row["NgayDu5Nam"]->format($_SESSION["config_system"]["ngaythang"]);
	}
	if($row["NgayMienCungChiTra"]==''){
	}else{
		$row["NgayMienCungChiTra"]=$row["NgayMienCungChiTra"]->format($_SESSION["config_system"]["ngaythang"]);
	}

	$responce->rows[$i]['id']=$row["ID_The"];
	$responce->rows[$i]['cell']=array($row["SoThe"]
		,$row["ten_dt"]									  
		,$row["DiaChiTheBHYT"]
		,$row["Ma_KCB_BanDau"]
		,$row["Ten_KCB_BanDau"]
		,$row["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"])
		,$row["HanSD_DenNgay"]
		,$row["NgayCap"]		
		,$row["IsDungTuyen"]


		,$row["NgayDu5Nam"]
		,$row["NgayMienCungChiTra"]
		,$row["ID_KhuVuc"]
		,$row["LoaiKhuVuc"]
		
		);     
	$i++; 
}  
echo json_encode($responce);
?>