
<?php
$data= new SQLServer;
$store_name="{call GD2_SelectBenhNhanXetNghiem_TheoKSK_excelmau1(?,?,?)}";
$params = array($_GET["tungay"],$_GET["denngay"],$_GET["id_dotkham"]);
$get_thongtin=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_thongtin);
$thongtin= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($thongtin as $row) {
	$responce->rows[$i]['id']=$i+1;
	$responce->rows[$i]['cell']=array(   
		$i+1,
		$row["ID_BenhNhan"],
		$row["MaBenhNhan"],
		$row["SampleID"],
		
		$row["HoLotBenhNhan"],
		$row["TenBenhNhan"],
		$row["GioiTinh"],
		0,
		);
	$i++; 
}  
echo json_encode($responce);

?>
