<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}

$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$table = "DM_nhombenh";
$data= new SQLServer;//tao lop ket noi SQL
	
$start = $limit*$page - $limit;
$end = $start + $limit;
$store_name="{call GD2_DM_GETBY(?,?,?,?,?,?)}";//tao bien khai bao store
$params = array($start,$end,$sidx,$sord,$table,$search_string);//tao param cho store 	

$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if($tam== null)
{
	$count=0;
}
else{
$count = $tam[0]['TotalResults'];
}
if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}

//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhomBenh"];
    $responce->rows[$i]['cell']=array($row["ID_NhomBenh"],$row["TenNhomBenh"],$row["ID_NhomBenhCha"],$row["MoTa"],$row["GhiChu"],$row["STT"]);
    $i++; 
}   
echo json_encode($responce);
?>