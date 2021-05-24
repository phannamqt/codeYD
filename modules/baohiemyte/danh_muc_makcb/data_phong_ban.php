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
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_GET_COUNT(?)}";//tao bien khai bao store
$params = array("DM_Phongban");//tao param cho store 
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
$count = $tam[0][0];
if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}

$store_name="{call GD2_DM_PhongBanGetBy (?,?,?,?,?)}";//tao bien khai bao store
if ($page > $total_pages) $page=$total_pages;
	$start = $limit*$page - $limit; // do not put $limit*($page - 1)
	if($start==$limit){$limit=$count;}
if($start<0){
	$params = array("","",$sidx,$sord,$search_string);//tao param cho store
}else{
	$params = array($start,$limit,$sidx,$sord,$search_string);//tao param cho store 	
}
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_PhongBan"];
    $responce->rows[$i]['cell']=array($row["ID_PhongBan"],$row["TenPhongBan"],$row["ID_PhongBanCha"],$row["MoTa"],$row["DienThoai"],$row["IsPhongChuyenMon"],$row["ID_KhuVuc"],$row["ID_CongTy"],$row["Active"],$row["KhoangCachDenPhongKhamLS"]);
    $i++; 
}   
echo json_encode($responce);
?>