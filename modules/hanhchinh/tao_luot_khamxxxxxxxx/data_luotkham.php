<?php
if( trim($_GET['id_benhnhan'],'')!='undefined'){
	
$data= new SQLServer;
$store_name="{call GD2_Lich_Online_ThongTinLuotKham_GanNhat(?)}";
$params = array($_GET['id_benhnhan']);
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
    $responce->rows[$i]['cell']=array(
    	$row['ThoiGianVaoKham'],
    	$row['ThoiGianKetThucKham'],
    	$row['TenLoaiKham'],
    	$row['TenPhanLoaiKham'],
    	$row['HoTenBS'],
    	$row['ChanDoan'],
		$row['NgayHenTaiKham'],
    	$row['NgayHetThuoc'],
    	$row['DaTraKQ'],    
    	$row['DaThanhToanBill']
    	 	
    	);
    $i++; 
}   
echo json_encode($responce);
}
else{
	echo'{}';
}
?>