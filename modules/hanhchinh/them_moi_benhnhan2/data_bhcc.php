<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_BHCCGetByID_luotkham (?)}";
$params = array($_GET['id_luotkham']); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce ='';
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["HanSD_TuNgay"]!='')
		$row["HanSD_TuNgay"]=$row["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"])	;
	if($row["HanSD_DenNgay"]!='')
		$row["HanSD_DenNgay"]=$row["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"])	;
    $responce->rows[$i]['id']=$row["ID_The_BHCC"];
    $responce->rows[$i]['cell']=array($row["SoThe"]
									  ,$row["DiaChiTheBHCC"]
									  ,$row["ID_LoaiTheBHCC"]
									  ,$row["TenLoaiThe"]
									  ,$row["HanSD_TuNgay"]
								      ,$row["HanSD_DenNgay"]
									  ,$row["NgayCap"]
									  ,$row["ID_LuotKham"]
									  ,$row["MaNhom"]
									  ,$row["IsSaveTienBHCC"]
	
	);     
    $i++; 
 
}  
echo json_encode($responce);
?>