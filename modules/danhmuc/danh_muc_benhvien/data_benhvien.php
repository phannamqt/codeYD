<?php

if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$table = "GD2_DM_BenhVien";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call spDM_BenhVien_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_BenhVien"];
    $responce->rows[$i]['cell']=array($row["ID_BenhVien"],$row["TENBV"],$row["MATUYEN"],$row["MALOAI"],$row["MAHANG"],$row["MAVUNG"],$row["MATINH"]);
    $i++; 
}
echo json_encode($responce);
?>
