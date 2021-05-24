<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
//$table = "DM_QuocTich";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call spQuotaGiamGia_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_QuotaGiamGia"];
    $responce->rows[$i]['cell']=array($row["ID_QuotaGiamGia"],$row["TenQuotaGiamGia"],$row["SoTien"],$row["SoThangSuDung"],$row["Max1DayOfPatient"],$row["Max1Day"],$row["Max1Month"],$row["Max1Year"],$row["GhiChu"],$row["IsUsing"]);
    $i++; 
}
echo json_encode($responce);
?>