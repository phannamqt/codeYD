<?php
$params = array($_POST['idThuoc']);
$store_name = 'GD2_DMThuoc_Select_isThuocBHYT_isKhongSuDung_ByIDThuoc';
$responce = GetDataToSlickGrid($params,$store_name); // truyền về dữ liễu mảng
// $responce[0]['DefaultValue'] = strtotime($responce[0]['DefaultValue']);
// $responce[0]['DefaultValue'] = date('H:i d/m/Y',strtotime($responce[0]['DefaultValue']));
echo json_encode($responce);
?>