<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array('sieu_am',$_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_US4d_KhamGetDataByTenFormAndIDBenhNhan(?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

    
    
    $ngaygiothuchien = "";
    if (isset($row["NgayGioThucHien"])) {
        $ngaygiothuchien = $row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    
     else $ngaygiothuchien = "";
    if (isset($row["NgayGioChanDoan"])) {
        $ngaygiochandoan = $row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
	 else $ngaygiochandoan = "";
    if (isset($row["NgayGioSua"])) {
       $ngaygiosua=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
     else $ngaygiosua = "";
    
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
         $row["BSChanDoan"],
         $row["NguoiDoc"],
         $ngaygiothuchien,
        $row["NguoiThucHien"],
        $ngaygiochandoan,// ,SieuAmThai4D.TrongLuongThai,SieuAmThai4D.SoNgayThai,SieuAmThai4D .SoLuongThai
  $row["TrongLuongThai"],
        $row["SoNgayThai"],
        $row["SoLuongThai"],
         $row["PhiThucHien"],
          $row["Para_TMP"],
		  $row["ID_NguoiSua"],
		  $ngaygiosua,
	);
    $i++; 
}
echo json_encode($responce);
?>
