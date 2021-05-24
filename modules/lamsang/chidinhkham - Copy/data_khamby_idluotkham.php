<?php
$data= new SQLServer;//tao lop ket noi SQL 
 

 $param1=$_GET["id"];
//echo $param1;
$store_name="{call GD2_Kham_SelectByID_luotKham_New(?)}";//tao bien khai bao store
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
	/*if($row["GiaBH"]>0)
		$row["BNChiTra"]=$row["BNChiTra"];
	else
		$row["BNChiTra"]=0;
		*/
	/*if($row["ThanhTienBaoHiem"]>0){
		$bh=1;	
	}else{
		$bh=0;	
	}*/
	$row["NgayGioTao"]=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
	if($row["HoTro"]>0 && $row["Isbhyt"]==1){
		$row["BNChiTra"]=$row["BNChiTra"]-$row["HoTro"];
	}else{
		$row["HoTro"]=0;
	}
	if($row["ID_TrangThai"]=="HuyBo"){
		$row["HoTro"]=0;
		$row["ThanhTienBaoHiem"]=0;
		$row["BNChiTra"]=0;
	}

	if($row["TenBHYT"]==NULL){
		$row["TenBHYT"]='';
	}
	
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($row["Isbhyt"],
									$row["IDLoaiKham"],
									"",
									$row["TenLoaiKham"],
									$row["GiaBaoBN"],
									$row["GiaBH"],
									$row["GiaThuBV"],
									$row["PhiDuKien"],
									$row["ThanhTienBaoHiem"],
									$row["ThanhTienBaoHiem"],
									$row["HoTro"],
									$row["BNChiTra"],
									$row["PhiThucHien"],
									$row["ID_TrangThai"],
									$row["PhuongThucThucHien"],
									$row["ID_PhongChuyenMon"],
									$row["BSChiDinh"],
									$row["BSChiDinh"],
									"",
									"",
									$row["ID_Kham"],
									"",
									"",
									"",
									"",
									1,
									$row["ID_NhomCLS"],
									$row["NgayGioTao"],
									$row["LanChiDinh"],
									$row["XetNghiem"],
									$row["PhanTramCungChiTra"],
									$row["ThanhTienCungChiTra"],
									$row["TruongHopBHYT"],
									'',
									$row["BSChiDinh"],
									$row["Code"],
									$row["Isbhyt"],
									$row["TenBHYT"]
								);
    $i++; 
}
echo json_encode($responce);
?>