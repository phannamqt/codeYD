<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array('do_xo_vua_dong_mach_abi',$_GET["idbenhnhan"],$_GET["idkham"]);//tao param cho store 
$store_name="{call GD2_ABI_GetDataByTenFormAndID_BenhNhan_And_ID_Kham(?,?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
     if($row["NgayGioSua"]!='')
			$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioSua"]='';
    if($row["hentra2"]!='')
            $row["hentra2"]=$row["hentra2"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["hentra2"]='';
     if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
    if($row["NgayGioChanDoan"]!='')
            $row["NgayGioChanDoan"]=$row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioChanDoan"]='';
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],
	$row["TenLoaiKham"],
	$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
	$row["ID_LoaiKham"],
	$row["NguoiChiDinh"],
	$row["ID_LuotKham"],
	$row["MoTa"],
	$row["KetLuan"],
    $row["GhiChu"],//loi khuyen
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["hentra2"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["BSChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
	);
    $i++; 
}
echo json_encode($responce);
?>
