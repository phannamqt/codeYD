<?php

$idnhanvien = $_GET['idnhanvien'];
$from= date('Y-m-d',$_GET['start']);
$to= date('Y-m-d',$_GET['end']);
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_LichLamViec_SelectByIDNhanVienAndDate (?,?,?)}";//tao bien khai bao store
$params = array($idnhanvien,$from,$to);//tao param cho store
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
//$responce = new stdClass;
/*$responce->page = 1;
$responce->total = 1; */
$kiemtra=true;


$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 
	$responce[]=array('id' => $row["ID_LichLamViec"],'title' => $row["TenLoaiLich"],
		'start' =>$row["Ngay"]->format("Y-m-d") ." ".$row["GioBatDau"].":00",
		'end' =>$row["Ngay"]->format("Y-m-d") ." ".$row["GioKetThuc"].":00",
		'url' => "#",
		"allDay" => false);
	$i++;






}


echo json_encode($responce);


//echo json_encode($responce);





/*foreach ($tam as $row) {
		array(
			'id' => $row["ID_LichLamViec"],
			'title' => "Event1",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"
		)

}



	echo json_encode(array(



		));*/
?>