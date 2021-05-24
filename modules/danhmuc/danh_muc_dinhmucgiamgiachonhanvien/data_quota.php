<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_POST['idquota']);//tao param cho store 
$store_name="{call GD2_DM_QuotaSelectAllByID_QuoTa(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$i=0;
foreach ($tam as $row) {
 $responce[$i] = array('TenQuotaGiamGia' => $row["TenQuotaGiamGia"], 'SoTien' => $row["SoTien"], 'SoThangSuDung' => $row["SoThangSuDung"], 'Max1DayOfPatient' => $row["Max1DayOfPatient"], 'Max1Day' => $row["Max1Day"], 'Max1Month' => $row["Max1Month"], 'Max1Year' => $row["Max1Year"], 'GhiChu' => $row["GhiChu"]);
 $i++;
}
echo json_encode($responce);
?>