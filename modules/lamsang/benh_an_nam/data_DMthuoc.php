<?php

$data= new SQLServer;
$store_name="{call GD2_dmthuoc_dmgiaban_get_byid_benhnhan(?)}";
$params = array($_GET['id_benhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$idThuoc= array();
$i=0;

foreach ($tam as $row) {

$idThuoc[]=$row["ID_Thuoc"];
if($row["LaThuoc"]==0){
	$row["LaThuoc"]=1;
}else{
	$row["LaThuoc"]=0;
}
if(isset($row["DonGia_BHYT"])){
	$row["DonGia_BHYT"]=$row["DonGia_BHYT"];	
}else{
	$row["DonGia_BHYT"]=0;	
}

    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(
		$row["TenGoc"],
		$row["HoatChatChinh"],
		$row["MaThuoc"],
		$row["ID_DuongDung"],
		$row["DonGia"],
		$row["ID_DonViTinh"],
		$row["LaThuoc"],
		$row["ThuocBHYT"],
		$row["BHYTNoiTruOrNgTru"],
		$row["DonGia_BHYT"],
		$row["TenNhaSanXuat"],
		$row["TenDayDu"],
		0,//$row["HideVienPhi"],
		$row["HideBHYT"],
		$row["HideBHYT_traituyen"],
		$row["HideBHYT_dungtuyen"],
		$row["TenDonViTinh"],
		
	);
    $i++; 
}   
echo json_encode($responce);

echo"|||";

echo json_encode($idThuoc);
?>