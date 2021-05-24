<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];
//echo $param1;
$store_name="{call GD2_Kham_SelectByID_luotKham_CD_DieuTriPhoiHop_New(?)}";//tao bien khai bao store
//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
$params = array($param1);//tao param cho store 
//print_r($params) ;
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	unset($phidukien);
	if(isset($row["phy_idPhysiotherapy"])){
		$Id_phy_dtph = $row["phy_idPhysiotherapy"];
		$phidukien=$row["phy_phidulkien"];
		$phithuchien=$row["phy_phithuchien"];
		$slmoingay=$row["phy_slmoingay"];
		$songay=$row["phy_songay"];
		$bschidinh=$row["phy_bschidinh"];
		$idtrangthai=$row["phy_idtrangthai"];
		$IDNhomCLS=$row["ID_LoaiKham"];
		$thuchien=$row["phy_phuonthucthuchien"];
		$phithuchientheonhom=$row["PhiThucHien"];
		$lanchidinh=$row["Id_LanChiDinh"];
		$giabaobn=$row["phy_phidulkien"];
		$giabaohiem=$row["phy_GiaBaoHiem"];
		
		$thanhtienbaohiem=$row["phy_ThanhTienBaoHiem"];
		$bnchitra=$row["phy_BNChiTra"];
		$phantramcungchitra=$row["phy_PhanTramCungChiTra"];
		$thanhtiencungchitra=$row["phy_ThanhTienCungChiTra"];
		$bh=$row["phy_Isbhyt"];
		$hotro=$row["phy_HoTro"];
		$code=$row["phy_LyDoGiam"];
		$TruongHopBHYT=$row["phy_TruongHopBHYT"];
		$TenBHYT=$row["phy_TenBHYT"];
		$phuthu=$row["phy_ThanhTienPhuThuBenhVien"];
		$dongiavienphi=$row["phy_DonGiaVienPhi"];
	}else if(isset($row["dtph_idDieuTriPhoiHop"])){
		$Id_phy_dtph=$row["dtph_idDieuTriPhoiHop"];
		$phidukien=$row["dtph_phidulkien"];
		$phithuchien=$row["dtph_phithuchien"];
		$slmoingay=$row["dtph_slmoingay"];
		$songay=$row["dtph_songay"];
		$bschidinh=$row["dtph_bschidinh"];
		$idtrangthai=$row["dtph_idtrangthai"];
		$IDNhomCLS=$row["ID_LoaiKham"];
		$thuchien=$row["dtph_phuonthucthuchien"];
		$phithuchientheonhom=$row["PhiThucHien"];
		$lanchidinh=$row["Id_LanChiDinh"];
		$giabaobn=$row["dtph_phidulkien"];
		$giabaohiem=$row["dtph_GiaBaoHiem"];
		
		$thanhtienbaohiem=$row["dtph_ThanhTienBaoHiem"];
		$bnchitra=$row["dtph_BNChiTra"];
		$phantramcungchitra=$row["dtph_PhanTramCungChiTra"];
		$thanhtiencungchitra=$row["dtph_ThanhTienCungChiTra"];
		$bh=$row["dtph_Isbhyt"];
		$hotro=$row["dtph_HoTro"];
		$code=$row["dtph_LyDoGiam"];
		$TruongHopBHYT=$row["dtph_TruongHopBHYT"];
		$TenBHYT=$row["dtph_TenBHYT"];
		$phuthu=$row["dtph_ThanhTienPhuThuBenhVien"];
		$dongiavienphi=$row["dtph_DonGiaVienPhi"];
	}else{
		$phidukien=$row["PhiDuKien"];
		$phithuchien=$row["PhiThucHien"];
		$slmoingay=1;
		$songay=1;
		$bschidinh=$row["BSChiDinh"];
		$idtrangthai=$row["ID_TrangThai"];
		$IDNhomCLS=$row["ID_NhomCLS"];
		$thuchien=$row["PhuongThucThucHien"];
		$Id_phy_dtph="";
		$phithuchientheonhom=$row["PhiThucHien"];
		$lanchidinh=$row["Id_LanChiDinh"];
		$giabaobn=$row["PhiDuKien"];
		$giabaohiem=$row["GiaBaoHiem"];
		
		$thanhtienbaohiem=$row["ThanhTienBaoHiem"];
		$bnchitra=$row["BNChiTra"];
		$phantramcungchitra=$row["PhanTramCungChiTra"];
		$thanhtiencungchitra=$row["ThanhTienCungChiTra"];
		$bh=$row["Isbhyt"];
		$hotro=$row["HoTro"];
		$code=$row["LyDoGiam"];
		$TruongHopBHYT=$row["TruongHopBHYT"];
		$TenBHYT=$row["TenBHYT"];
		$phuthu=$row["ThanhTienPhuThuBenhVien"];
		$dongiavienphi=$row["DonGiaVienPhi"];
	}
		

	$row["NgayGioTao"]=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
	
	if($hotro>0 && $bh==1){
		$hotro=(($hotro*$slmoingay)*$songay);
		$bnchitra=$phithuchien;
	}else{
		$hotro=0;
	}
	if($idtrangthai=="HuyBo"){
		$hotro=0;
		$bnchitra=0;
		$thanhtienbaohiem=0;
	}

	if($TenBHYT==NULL){
		$TenBHYT='';
	}

	
    $responce->rows[$i]['cell']=array(
			$bh,
			$row["idloaikham"],
			"", 
			$row["idloaikham"],
			$idtrangthai=='HuyBo'?0:$dongiavienphi,
			
			$idtrangthai=='HuyBo'?0:$giabaohiem,
			$idtrangthai=='HuyBo'?0:$phuthu,
			$slmoingay, 
			$songay,
			$phithuchien, 
			$thanhtienbaohiem,
			$hotro,
			$bnchitra, 
			$idtrangthai, 
			$thuchien, 
			$bschidinh, 
			$bschidinh,
			"",
			"",
			$row["ID_Kham"],
			"",
			"",
			"",
			"",
			"",
			1, 
			$IDNhomCLS, 
			$row["NgayGioTao"],
			$phithuchientheonhom,
			$Id_phy_dtph,
			$lanchidinh,
			$phantramcungchitra,
			$thanhtiencungchitra,
			$TruongHopBHYT,
			0, 
			$bschidinh,
			$code,
			$TenBHYT
	);
    $i++; 
}
echo json_encode($responce);
?>