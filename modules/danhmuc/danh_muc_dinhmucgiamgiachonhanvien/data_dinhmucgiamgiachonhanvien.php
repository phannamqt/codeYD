<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
//$table = "DM_QuanHuyen";
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_QuotaNhanVien_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 if($row["NgayBatDau"]!=""){
    $row["NgayBatDau"]=$row["NgayBatDau"]->format($_SESSION["config_system"]["ngaythang"]);
   }
   if
   ($row["NgayKetThuc"]!=""){
    $row["NgayKetThuc"]=$row["NgayKetThuc"]->format($_SESSION["config_system"]["ngaythang"]);
   }
    $responce->rows[$i]['id']=$row["ID_QuotaNV"];
    $responce->rows[$i]['cell']=array($row["ID_QuotaNV"],$row["ID_NhanVien"],$row["NickName"],$row["TenPhongBan"],$row["ID_QuotaGiamGia"],$row["NgayBatDau"],$row["NgayKetThuc"],
	$row["SoTien"],$row["SoTienBoSung"],$row["Max1Day"],$row["Max1DayOfPatient"],$row["Max1Month"],$row["Max1Year"],$row["SoTienConLai"],$row["LoaiQuota"],$row["IsUsing"],$row["GhiChu"]);
    $i++; 
}
echo json_encode($responce);
?>