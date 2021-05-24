<?php
$id=$_GET['id'];
$data= new SQLServer;
$params = array($id);
$store_name="{call GD2_DonThuocMauChiTiet_SelectAllByID_DonThuocMau(?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_TTMChiTiet"];
    $responce->rows[$i]['cell']=array("",$row["ID_Thuoc"],$row["LieuDungHangNgay"],$row["CachDung"],$row["CachDungChiTiet"],$row["ID_DonThuocMau"],$row["ID_Thuoc"],1,$row["ID_TTMChiTiet"]);
    $i++; 
}
echo json_encode($responce);
?>