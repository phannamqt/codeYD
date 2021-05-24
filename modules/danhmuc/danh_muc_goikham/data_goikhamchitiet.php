<?php
$data= new SQLServer;//tao lop ket noi SQL 
 
 

	//$end=$limit;
 $param1=$_GET["id"];

$store_name="{call GD2_spGoiKhamChiTiet_LoaiKham_SelectFullByID_GoiKham(?)}";//tao bien khai bao store
//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
$params = array($param1);//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);


$responce = new stdClass;
$kiemtra=true;


$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["ID_LoaiKham"],$row["TenLoaiKham"],$row["GiaBaoChoBN"],$row["ID_LoaiKham"],$row["ID_GoiKham"]);
    $i++;
}
echo json_encode($responce);
?>
