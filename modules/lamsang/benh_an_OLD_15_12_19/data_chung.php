<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call  GD2_Kham_SelectDieuTriByID_LuotKham(?,?)}";//tao bien khai bao store
$params = array($_GET["ID_LuotKham"],'HuyBo');
$get_danh_muc=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['cell']=array($row["ID_Kham"],$row["MaVietTat"]);
    $i++; 
}   
echo json_encode($responce);
echo '|||';

$params = array( $_GET["ID_LuotKham"]);//tao param cho store 
$store_name="{call Gd2_Kham_SelectCLSByID_LuotKham(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($row["TenLoaiKham"],$row["TenForm"],$row["ID_LoaiKham"],$row["ID_TrangThai"],$row["ID4Dev"]);
    $i++; 
}
echo json_encode($responce);
echo '|||';
$param1=$_GET['ID_LuotKham'];
$store_name="{call Gd2_dauhieusinton_benhan(?)}";
$params = array($param1);
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$chuoi='';
    if(count($tam)>0){
		if($tam[0]['ChieuCao']!=''){
			$chuoi=$chuoi.''.$tam[0]['ChieuCao'].' cm - ';
		}
		if($tam[0]['CanNang']!=''){
			$chuoi=$chuoi.''.$tam[0]['CanNang'].' kg - ';
		}if($tam[0]['Ps']!=''){
			$chuoi=$chuoi.''.$tam[0]['Ps'].'/'.$tam[0]['Pd'].' mmHg - ';
		}if($tam[0]['Mach']!=''){
			$chuoi=$chuoi.''.$tam[0]['Mach'].' lần/phút - ';
		}if(trim($tam[0]['ThanNhiet'])!=''){
			$chuoi=$chuoi.''.$tam[0]['ThanNhiet'].' &deg;C';
		}
		echo $chuoi;
	
    }
echo '|||';

$param1=$_GET['ID_LuotKham'];
$store_name="{call GD2_tienkham_benhan(?)}";
$params = array($param1);
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();

echo number_format(round($tam[0]['PhiThucHien']/1000)+round($tam[0]['tienthuoc']/1000), 0, '', '.').'('.number_format((round($tam[0]['ThanhTienBaoHiem']/1000)+round($tam[0]['thuocbh']/1000)), 0, '', '.').')<span style="color:red">('.number_format((round($tam[0]['hotro']/1000)+round($tam[0]['thuochotro']/1000)), 0, '', '.').')</span>/'.number_format(round($tam[0]['tienthuoc']/1000), 0, '', '.').'('.number_format(round($tam[0]['thuocbh']/1000), 0, '', '.').')<span style="color:red">('.number_format(round($tam[0]['thuochotro']/1000), 0, '', '.').')</span>';


/*

$params = array( $_GET["iddonthuoc"]);//tao param cho store 
$store_name="{call GD2_DonThuocChiTiet_byID_DonThuoc (?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array(
	$row["trangthaidonthuoc"],
	$row["ID_DonThuocCT"],
	$row["ID_DuongDungThuoc"],
	$row["LaVatTuTieuHao"],
	'',
	$row["ID_Thuoc"],
	$row["Gia"],
	$row["ID_DuongDungThuoc"],
	$row["LuongThuocDungTrong1Ngay"],
	$row["SoThuocThucXuat"],	 
	$row["CachDungLieuDung"],
	$row["PhuongThucThucHien"],
	);	 
    $i++; 
}
echo json_encode($responce);*/
?>
