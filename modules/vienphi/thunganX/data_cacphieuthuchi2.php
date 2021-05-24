<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_Thu_TraNo_SelectAllTuNgayDenNgay (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

$i=0;

/*foreach ($tam as $row) {
	

    $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["GhiChu"],
        $row["TenNhanVien"],
        $row["TienThuVao"],
        $row["TienChiRa"],
        $row["DaCoHDKCBNgoaiTru"],
        $row["DaCoHDThuocNgoaiTru"],
        $row["DaCoHDThuocNoiTru"],
        $row["DaCoHDKCBNoiTru"],
		$row["ID_BenhNhan"],
		$row["LoaiThanhToan"],
        $row["ID_PhanLoaiKham"],
        $row["LoaiDoiTuongKham"],
   		$doituong,
		$nt,		
		$row["TenPhongBan"],
		$row["vpnoi"],
		$row["vpngoai"],
		$row["bhytnoi"],
		$row["bhytngoai"],
		$row["ID_BenhAnNoiTru"],
		$row["conlai"],
        $row["IP"],
         $row["Tang"],
            );
     
    $i++; 
}  
*/




$responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
$doituong='';
	$nt='';
if(trim($row["LoaiDoiTuongKham"],' ')==''){
	$doituong='Viện phí';
}else{
	$doituong=$row["LoaiDoiTuongKham"];
}
if(trim($row["ID_PhanLoaiKham"],' ')==46){
	$nt='Nội';
}else{
	$nt='Ngoại';
}

if($row["NgayGio"]!=''){
	$row["NgayGio"]=$row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}
  
   $responce[] = array(
		'id'         			=> $i,   
		'MaPhieu'   			 => $row["MaPhieu"],
		'NgayGio'    			=>$row["NgayGio"],	
		'MaBenhNhan'			 =>$row["MaBenhNhan"],
		'HoLotBenhNhan' 		=>$row["HoLotBenhNhan"],
		'TenBenhNhan'   		 =>$row["TenBenhNhan"],
		'TenNhanVien'  			  =>$row["TenNhanVien"],
		'TienThuVao'		    =>$row["TienThuVao"],
		'TienChiRa'  		  =>$row["TienChiRa"],
		'DaCoHDKCBNgoaiTru'    =>$row["DaCoHDKCBNgoaiTru"],
		'DaCoHDThuocNgoaiTru'    =>$row["DaCoHDThuocNgoaiTru"],
		'DaCoHDThuocNoiTru'    =>$row["DaCoHDThuocNoiTru"],
		'DaCoHDKCBNoiTru'      =>$row["DaCoHDKCBNoiTru"],
		'ID_BenhNhan'    =>$row["ID_BenhNhan"],
		'LoaiThanhToan'    =>$row["LoaiThanhToan"],
		'ID_PhanLoaiKham'    =>$row["ID_PhanLoaiKham"],
		'LoaiDoiTuongKham'    =>$row["LoaiDoiTuongKham"],	
		'doituong'    =>$doituong,
		'nt'    =>$nt,
		'TenPhongBan'    =>$row["TenPhongBan"],
		'vpnoi'    =>$row["vpnoi"],
		'vpngoai'    =>$row["vpngoai"],
		'bhytnoi'    =>$row["bhytnoi"],	
		'bhytngoai'    =>$row["bhytngoai"],
		'ID_BenhAnNoiTru'    =>$row["ID_BenhAnNoiTru"],
		'conlai'    =>$row["conlai"],
		'ID_ThuTraNo'    =>$row["ID_ThuTraNo"],
		'GhiChu'    =>$row["GhiChu"],
		'IP'    =>$row["IP"],
		'Tang'    =>$row["Tang"],
		'ID_HuyChiDinhThuoc'    =>$row["ID_HuyChiDinhThuoc"],
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