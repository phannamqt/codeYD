<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array($_GET["id_luotkham"]);//tao param cho store 
$store_name="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    
    $responce->rows[$i]['id']="";
    $responce->rows[$i]['cell']=array(
    $row["MoTaBenh"],
	$row["KetLuan"],
	$row["HuongDanDieuTri"],
    $row["ID_TrangThai"],
    $row["ID_NguoiThucHien"],
    $row["ID_BacSiPhuTrach"],


    $row["MoTaBenh_ENG"],
    $row["KetLuan_ENG"],
    $row["HuongDanDieuTri_ENG"],
    $row["NguoiDich"],
	);
    $i++; 
}
echo json_encode($responce);
?>
