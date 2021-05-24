<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];
//echo $param1;
$store_name="{call GD2_KhamGetDTPHByID_luotKham(?)}";//tao bien khai bao store
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
		$giabaobn=$row["GiaBaoChoBN"];
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
		

	$row["NgayGioTao"]=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
	
	if($hotro>0 && $bh==1){
		$hotro=(($hotro*$slmoingay)*$songay);
		$bnchitra=$phithuchien-$hotro;
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

	
    $responce->rows[$i]['cell']=array($bh,$row["ID_LoaiKham"],"", $row["ID_LoaiKham"],$giabaobn,$giabaohiem,$giabaobn-$giabaohiem,$slmoingay, $songay, $thanhtienbaohiem,$hotro,$bnchitra,$phithuchien, $idtrangthai, $thuchien, $bschidinh, $bschidinh,"","", $row["ID_Kham"],"","","","","",1, $IDNhomCLS, $row["NgayGioTao"],$phithuchientheonhom,$Id_phy_dtph,$lanchidinh,$phantramcungchitra,$thanhtiencungchitra,$TruongHopBHYT,0, $bschidinh,$code,$TenBHYT);
    $i++; 
}
echo json_encode($responce);
?>