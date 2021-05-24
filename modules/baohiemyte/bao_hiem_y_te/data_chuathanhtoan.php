<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_CaBHYT_chuathanhtoan(?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array(
		$row["MaBenhNhan"],
		$row["HoLotBenhNhan"],
		$row["TenBenhNhan"],
		$row["ngay"],
		$row["doituong"]
    );     
    $i++; }  
echo json_encode($responce);
?>
