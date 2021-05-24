<?php
$data= new SQLServer;
$params = array();
$get_lich=$data->query( '{call GD2_DM_LoaiTheBHCCGetAll()}', $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
global $responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
  $responce[] = array(
		'id'				=> $row["ID_LoaiTheBHCC"],
		'ID_LoaiThe'		=> $row["ID_LoaiTheBHCC"],
		'TenLoaiThe'		=> $row["TenLoaiThe"],
		'TenCongTy'			=> $row["TenCongTy"],
		'MaNhom'			=> $row["MaNhom"],
		'IsSaveTienBHCC'	=> $row["IsSaveTienBHCC"],
		'SuDung'			=> $row["SuDung"],
		'GhiChu'			=> $row["GhiChu"],
		'HeSo'				=> $row["HeSo"]
		);
    $i++;
}
echo json_encode($responce);
?>