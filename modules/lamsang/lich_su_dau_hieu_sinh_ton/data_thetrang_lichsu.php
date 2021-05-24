<?php

if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
 
$table = "GD2_DM_BenhVien";
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["id_benhnhan"],$_GET["tungay"],$_GET["denngay"]." 21:59");//tao param cho store 
$store_name="{call GD2_TheTrang_SelectByID_BenhNhan_Time(?,?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_TheTrang"];
    $responce->rows[$i]['cell']=array($row["NguoiDo"],$row["NgayGioDo"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]), convert_comma_dot($row["ChieuCao"]), convert_comma_dot($row["CanNang"]), convert_comma_dot($row["VongNguc"]),$row["NgayGioDo"]->format($_SESSION["config_system"]["ngaythang"]));
    $i++; 
}
echo json_encode($responce);
?>
