<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$start = $limit*$page - $limit;
$end= $start + $limit;

if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$table = "DM_NuocSanXuat";
$data= new SQLServer;//tao lop ket noi SQL
$params = array('ID_NuocSanXuat',$start,$end,$sidx ,$sord ,$table,'','*');//tao param cho store 
$store_name="{call GD2_TABLEWITHPAGE_GETBY (?,?,?,?,?,?,?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
if($tam== null)
{
 $count=0;
}
else{
$count = $tam[0][1];
}
if( $count >0 ){
 $total_pages = ceil($count/$limit);
} else {
 $total_pages = 0;
}
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NuocSanXuat"];
    $responce->rows[$i]['cell']=array($row["ID_NuocSanXuat"],$row["TenDayDu"],$row["TenVietTat"],$row["GhiChu"],$row["Active"]);
    $i++; 
}
echo json_encode($responce);
?>