<?php

if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$table = "GD2_DM_BenhVien";
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["id_luotkham"],$_GET["id_benhnhan"]);//tao param cho store 
$store_name="{call GD2_DauHieuSinhTon_SelectByID_BenhNhanAndID_LuotKham(?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_DauHieuSinhTon"];
    $responce->rows[$i]['cell']=array($_GET["id_luotkham"],$_GET["id_benhnhan"],$row["LanDoThu"],$row["NguoiThucHien"],$row["NgayGioDo"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),convert_comma_dot($row["Ps"]),convert_comma_dot($row["Pd"]),convert_comma_dot($row["Mach"]),convert_comma_dot($row["ThanNhiet"]),convert_comma_dot($row["NhipTho"]));
    $i++; 
}
echo json_encode($responce);
?>
