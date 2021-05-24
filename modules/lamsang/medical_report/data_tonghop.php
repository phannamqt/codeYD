<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array($_GET["id_luotkham"]);//tao param cho store 
$store_name="{call  GD2_MedicalReportSelectAllByID_LuotKham(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["KetLuan"]!='')
            $row["KetLuan"]=$row["KetLuan"];
    else $row["KetLuan"]='';
    if($row["ketqua2"]!='')
            $row["ketqua2"]=$row["ketqua2"];
    else $row["ketqua2"]='';
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
	$row["TenLoaiKham"],
	$row["KetLuan"],
    $row["ThuocNhomXepHangCLS"],
    $row["ketqua2"],
    $row["TenXetNghiem"],
    $row["MoTa"],
    $row["ID_LoaiKham"],
    $row["Color"],
    $row["NguoiThucHien"],
    $row["BSChanDoan"],
    $row["MoTaBenh"],
    $row["ketluan2"],
    $row["HuongDanDieuTri"],
    $row["ID_TrangThai"],
    $row["motals"],
    $row["nguoithuchien"],
    $row["bacsiphutrach"],
	$row["XetNghiem"]
	);
    $i++; 
}
echo json_encode($responce);
?>
