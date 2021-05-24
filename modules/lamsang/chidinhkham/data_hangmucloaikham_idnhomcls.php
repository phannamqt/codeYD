<?php
$id=$_GET['id'];
//$table = "DM_QuocTich";
$data= new SQLServer;//tao lop ket noi SQL
$params = array($id,$_GET['idluotkham']);//tao param cho store 
$store_name="{call GD2_DM_SelectLoaiKhamByID_NhomCLSAndID_LuotKham(?,?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
$phantram=$_GET['phantram'];
//$pt_phuthu=$_GET['pt_phuthu'];
$baohiemchitra=0;
$benhnhanchitra=0;
$phantramcungchitra=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($_GET['trangthaikham']==3){
		$phantramcungchitra=$row["PhanTramCungChiTra"];
	}else{
		$phantramcungchitra=$_GET['phantram'];	
	}
	$baohiemchitra=$row["GiaBaoHiem"]-(($row["GiaBaoHiem"]*$phantramcungchitra)/100);
	/*if($_GET['nguoinuocngoai']==1){
		if($_GET['doituong']=='BHYT'){
			$giahienthi=$row["GiaBaoChoBN"];
		}else{
			$giahienthi=$row["GiaNuocNgoai"];
		}
	}else{
		$giahienthi=$row["GiaBaoChoBN"];
	}*/
	if($row["TenBHYT"]==NULL){
			$row["TenBHYT"]='';
		}
    $responce->rows[$i]['id']=$row["ID_LoaiKham"];
    $responce->rows[$i]['cell']=array($row["GiaThueNgoaiThucHien"],
									$row["ThoiGianTrungBinhThucHien"],
									"",
									$row["ID_LoaiKham"],
									$row["TenLoaiKham"],
									$row["GiaTinhTienBenhNhan"],
									$row["GiaTinhTienBenhNhan"],
									$row["GiaBaoHiem"],
									$row["GiaPhuThuBenhVien"],
									$row["PhuThuThucHienTaiNha"],
									$row["HeSoNuocNgoai"],
									$baohiemchitra,
									$row["TruongHopBHYT"],
									$row["ID_Nhom_BHYT"],
									$row["PhanTramCungChiTra"],
									$row["HoTro"],
									$row["TenBHYT"]
									);
    $i++; 
}
echo json_encode($responce);
?>