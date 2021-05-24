<?php

$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call [GD2_HuyChiDinhChiTiet_Thuoc_SelectChiTietByID_ChiDinh](?)}";//tao bien khai bao store
$params = array($_GET['ID_HuyChiDinh']);
//print_r($params);
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve SONGAYTHUCHIEN
    $responce->rows[$i]['id']=$row['ID_HuyChiDinhCT_Thuoc'];
    $responce->rows[$i]['cell']=array(
	$row['ID_HuyChiDinhCT_Thuoc']
	,'<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:2px;"></span></span>'
	,$row['TenGoc']
	,$row['ThanhTien']
	,$row['SoLuongTra']	
	,$row['SoTienThucTra']
	,$row['DonGia']
	,$row['ID_Thuoc']
	,$row['ID_HuyChiDinh']
	,$row['SoLuong']
    	);
    $i++;
}
echo json_encode($responce);
?>