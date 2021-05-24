

<?php

$data= new SQLServer;
$params = array($_GET['id']);
$store_name="{call GD2_xetnghiem_selectAll(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_XetNghiem"];
    $responce->rows[$i]['cell']=array($row["ID_XetNghiem"],$row["TenXetNghiem"],$row["STT"],$row["CanNam1"],$row["CanNam2"],$row["CanNam3"],
    	$row["CanNam4"],$row["CanNu1"],$row["CanNu2"],$row["CanNu3"],$row["CanNu4"],$row["Red"],$row["Blue"],$row["Yellow"],$row["HeSoChuyenDoi"],$row["GiaTriBinhThuong1"],
    	$row["GiaTriBinhThuong2"],$row["CoKQInRieng"],$row["CoTemplate"],$row["ID_DonViTinh"],$row["MoTa"],$row["DonGia"],$row["GhiChu"],1,$row["Active"]);
    $i++; 
}
echo json_encode($responce);
?>