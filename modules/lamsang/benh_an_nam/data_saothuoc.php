<?php
$data= new SQLServer;
if(isset($_GET['id_luotkham']) &&!isset($_GET['id_benhnhan'])){
	$params = array( $_GET["id_luotkham"]);
	$store_name="{call GD2_donthuoc_phu_ (?)}";
}else if(isset($_GET['id_donthuoc'])){
	$params = array( $_GET["id_donthuoc"]);
	$store_name="{call GD2_DonThuocChiTiet_SelectAll (?)}";
}else if(isset($_GET['id_benhnhan'])&&isset($_GET['id_luotkham'])){
	$params = array( $_GET["id_benhnhan"], $_GET["id_luotkham"]);
	$store_name="{call GD2_toathuocgannhat_toachinh (?,?)}";
	
}




$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;



foreach ($tam as $row) {//duyet toan bo mang tra ve	
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(
	$row["ID_Thuoc"],
	$row["LuongThuocDungTrong1Ngay"],
	$row["CachDungLieuDung"]	,
	$row["PhuongThucThucHien"],
	$row["ID_DuongDungThuoc"],
	$row["SoThuocDeNghiTheoDon"],
	$row["TenGoc"],
	);	 
    $i++; 
}
echo json_encode($responce);
?>
