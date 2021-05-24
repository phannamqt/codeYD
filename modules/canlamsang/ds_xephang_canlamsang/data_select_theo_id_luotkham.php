<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio
$data= new SQLServer;//tao lop ket noi SQL 
 
 
if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;	
}
	$end=$limit;
 $param1=$_GET["id"];

$store_name="{call GD2_Kham_SelectAllByID_LuotKham(?)}";//tao bien khai bao store
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
		if($row["NgayGioThucHien"]!='') 
			$row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format('H:i');
		if($row["NgayGioTao"]!='') 
			$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
	
  $responce->rows[$i]['id']=$row["ID_Kham"];
   $responce->rows[$i]['cell']=array($row["ID_Kham"],$row["ID_LoaiKham"], $row["ID_TrangThai"],$row["NguoiThucHien"],$row["NgayGioThucHien"],$row["NgayGioTao"],$row["ID_LoaiKham"]);
     
    $i++; 
} 
//print_r($tam); 
echo json_encode($responce);
?>