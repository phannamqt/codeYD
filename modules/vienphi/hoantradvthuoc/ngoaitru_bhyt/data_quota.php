<?php
$data= new SQLServer;
$store_name="{call GD2_GetQuotaList()}";
$params = array();

$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row['ID_NhanVien'];
    $responce->rows[$i]['cell']=array(
		$row['NickName'],$row['ID_NhanVien']
    );
    $i++;
}
echo json_encode($responce);
?>