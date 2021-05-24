<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call Med_CheckBill_ByBnDate (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

$i=0; 

$responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 
 if($row["ThoiGianVaoKham"]!=''){
	$row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format($_SESSION["config_system"]["ngaythang"]."H:i ");
} 

   $responce[] = array(
		'id'         			=> $i,   
		'ID_LuotKham'   			 => $row["ID_LuotKham"],
		'MaBenhNhan'    			=>$row["MaBenhNhan"],	
		'HoLotBenhNhan'			 =>$row["HoLotBenhNhan"],
		'TenBenhNhan' 		=>$row["TenBenhNhan"],
		'TienMat'   		 =>$row["TienMat"], 
		'TongTienLuu'   		 =>$row["TongTienLuu"], 
		'TienLuuThuoc'   		 =>$row["TienLuuThuoc"], 
		'TienLuuKham'   		 =>$row["TienLuuKham"], 
		'TienLech'   		 =>$row["Lech"], 
		'TienNoCu'   		 =>$row["NoCu"], 
		'LechThuoc'   		 =>$row["LechThuoc"], 
		'ThoiGianVaoKham'   		 =>$row["ThoiGianVaoKham"], 
		'LyDoLechTienThuoc'   		 =>$row["LyDoLechTienThuoc"],
		'LoaiDoiTuongKham'   		 =>$row["LoaiDoiTuongKham"],
		'TongTienBHYTChiTra'   		 =>$row["TongTienBHYTChiTra"]
		
	);			
	
    $i++; 


}   

if(count($tam)==0){
echo '[]';	
}else{

echo json_encode($responce);
}

unset($responce);
?>