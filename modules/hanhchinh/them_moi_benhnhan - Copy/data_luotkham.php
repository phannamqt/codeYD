<?php
if( trim($_GET['idbenhnhan'],'')!='undefined'){
	
$data= new SQLServer;
$store_name="{call GD2_ThongTinLuotKham_SelectAllByID_BenhNhan_Order(?)}";
$params = array($_GET['idbenhnhan']);
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
	 if($row["ThoiGianVaoKham"]!=""){
			$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format('H:i d-m-Y');
		 }
		 if($row["ThoiGianKetThucKham"]!=""){
			$row["ThoiGianKetThucKham"]=$row["ThoiGianKetThucKham"]->format('H:i d-m-Y');
		 }
		 if($row["NgayGioHenTraKQ"]!=""){
			$row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format('H:i d-m-Y');
		 }
    $responce->rows[$i]['cell']=array($row['ThoiGianVaoKham'],
    	$row['ThoiGianKetThucKham'],
    	$row['TenPhanLoaiKham'],
    	$row['bslamsang'],$row['NgayGioHenTraKQ'],$row['DaTraKQ'],$row['ID_LuotKham'],$row['DaThanhToanBill']
    	//,$row['DaLapHoaDon'],$row['NguoiTao']
    	);
    $i++; 
}   
echo json_encode($responce);
}
else{
	echo'{}';
}
?>