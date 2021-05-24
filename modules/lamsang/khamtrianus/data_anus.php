<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array('khamtrianus',$_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_Anus_Select_ByIdBenhNhan_new(?,?)}";//tao bien khai bao store
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
    $row["MaBenhNhan"],//15
	
	$row["ChiSo21"],//16
	$row["ChiSo22"],
	$row["ChiSo23"],
	$row["ChiSo24"],
	$row["ChiSo25"],//20
	
	$row["ChiSo26"],
	$row["ChiSo27"],
	$row["ChiSo28"],
	$row["ChiSo30"],
	$row["ChiSo31"],//25
	
	$row["ChiSo29"],
	$row["ChiSo32"],
	$row["ChiSo33"],
	$row["ChiSo34"],
	$row["ChiSo35"],//30
	
	$row["ChiSo36"],
	$row["ChiSo37"],
	$row["ChiSo38"],
	$row["ChiSo39"],
	$row["ChiSo45"],//35
	
	$row["ChiSo40"],
	$row["ChiSo41"],
	$row["ChiSo42"],
	$row["ChiSo43"],
	$row["ChiSo44"],//40
	
	$row["ThongSoKyThuat"],
	$row["ChanDoan"],
	$row["KetLuan"],
	$row["ExtField1"],
	$row["MoTa"],
	$row["GhiChu"],//46
	$row["BenhSu"],
	$row["DacDiemHauMon"]//48
	
	);
    $i++; 
}
echo json_encode($responce);
?>
