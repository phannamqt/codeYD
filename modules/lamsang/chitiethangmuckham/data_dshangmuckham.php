<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET['idluotkham']);//tao param cho store 
$store_name="{call GD2_GetHangMucKhamByID_LuotKham(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
$flag=0;
$mabn=0;
$mabn2=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	//if($row["XetNghiem"]==true){
	//	$mabn=$row["HoTenBN"];
	//	}
	//if(($row["XetNghiem"]==true and $flag==0 or $mabn!=$mabn2) ||$row["XetNghiem"]==false ){
	//	if($row["XetNghiem"]==true){
	//		$row["TenLoaiKham"]='Xét nghiệm';
	//		$flag=1;
	//		$mabn2=$row["HoTenBN"];
	//	}else{
	//		$row["TenLoaiKham"]=$row["TenLoaiKham"];
	//	}
	//}
	//if($mabn!=$mabn2){
	//	$flag=0;
	//}


	if($row["NgayGioKetThuc"]!='')
        $row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioKetThuc"]='';
	
	if($row["NgayGioHenTraKQ"]!='')
        $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHenTraKQ"]='';
	
	if($row["NgayGioTraKQ"]!='')
        $row["NgayGioTraKQ"]=$row["NgayGioTraKQ"]->format('H:i '.$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioTraKQ"]='';
	
	if($row["NgayGioTraKQ"])
		$trakq=1;
	else
		$trakq=0;
	
	
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($row["TenLoaiKham"],
	$row["BSChiDinh"],
	$row["NguoiThucHien"],
	$row["BSChanDoan"],
	$row["NgayGioKetThuc"],
	$row["ID_TrangThai"],
	$row["IsPrinted"],
	$trakq,
	'In kết quả',
	$row["NgayGioHenTraKQ"],
	$row["NgayGioTraKQ"],
	null,
	$row["TenForm"]	,
	$row["ID_LoaiKham"],
	$row["ID_BenhNhan"],
	$row["HoTenBN"]	,
	$row["DaTraKQ"]	,
	);
	
    $i++; 
}
echo json_encode($responce);
?>