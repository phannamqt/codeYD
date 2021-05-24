<?php
$data= new SQLServer;//tao lop ket noi SQL
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}
$params = array( $tu_ngay,$den_ngay);//tao param cho store 
$store_name="{call gd2_getdanhsach_donthuoc (?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGio"]==''){
		$row["NgayGio"]='';
	}else{
		$row["NgayGio"]=$row["NgayGio"]->format("H:i d/m/Y");
	}

	if($row["NgayGioSua"]==''){
		$row["NgayGioSua"]='';
	}else{
		$row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i d/m/Y");
	}
    $responce->rows[$i]['id']=$row["ID_DonThuoc"];
    $responce->rows[$i]['cell']=array(
	
	$row["ID_DonThuoc"],
	$row["ID_LuotKham"],
	$row["ID_Kham"],
	$row["ID_BenhNhan"],
	$row["ID_ThuTraNo"],
	
	$row["HoTenBn"],
	
	$row["NgayKeDon"]->format("H:i d/m/Y"), 
	$row["NhanVienTao"],
	$row["ThanhTien"],
	$row["NgayGio"], 
	$row["NhanVienThanhToan"], 
	$row["NgayGioSua"],
	$row["NhanVienSuaBill"], 
	
	);	 
    $i++; 
}
echo json_encode($responce);
?>
