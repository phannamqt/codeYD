<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array('dien_tam_do_gang_suc',$_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_StressECG_Select_ByIdBenhNhan(?,?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
     if($row["NgayGioSua"]!='')
			$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
	else $row["NgayGioSua"]='';
    if($row["NgayGioHenTraKQ"]!='')
            $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHenTraKQ"]='';
     if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
    if($row["NgayGioChanDoan"]!='')
            $row["NgayGioChanDoan"]=$row["NgayGioChanDoan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioChanDoan"]='';
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(
	$row["MaVietTat"],//0
	$row["TenLoaiKham"],
	$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
	$row["ID_LoaiKham"],//3
	$row["NguoiChiDinh"],
	$row["ID_LuotKham"],//5
    $row["ID_TrangThai"],
    $row["NguoiThucHien"],
    $row["NgayGioHenTraKQ"],
    $row["ID_NguoiSua"],
    $row["NgayGioSua"],
    $row["NguoiChiDinh"],
    $row["BSChanDoan"],
    $row["NgayGioThucHien"],
    $row["NgayGioChanDoan"],
 //   $row["MaBenhNhan"],//15
 
 	$row["ChiSo99"], //15
	$row["ChiSo100"],
	$row["ChiSo101"],
	$row["ChiSo102"],
	$row["ChiSo103"],
	$row["ChiSo104"],
	$row["ChiSo105"],
	$row["ChiSo106"],
	$row["ChiSo107"],
	
	$row["ExtField1"],//24
	$row["KetLuan"],
	$row["IDKham"],
	
	$row["SoNgayLuuHinhKQ"],//27
	
	);
    $i++; 
}
echo json_encode($responce);
?>
