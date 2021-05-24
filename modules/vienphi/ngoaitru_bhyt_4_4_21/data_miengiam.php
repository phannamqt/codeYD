<?php

switch ($_GET['oper']) {
	case 'chitiet':
		chitiet();
		break;
	case 'tomtat':
		tomtat();
		break;
	default:
		# code...
		break;
}
function tomtat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_GetDSMienGiamBy_Idluotkham(?)}";
	$params = array($_GET['id_luotkham']);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$responce = array();
	$responce[0]= htmlspecialchars ($tam[0]['DanhSach']);
	$responce[1]=  $tam[0]['QuotaSoTien'];
	$responce[2]=  $tam[0]['MoFormChiTietMienGiam'];
	echo json_encode($responce);
	

}

function chitiet(){
	$data= new SQLServer;//tao lop ket noi SQL

//coupon
$store_name="{call GD2_XetMienGiamBy_Idluotkham(?)}";
$params = array($_GET['id_luotkham']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = array();
$i=0;
if(count($tam)>0){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	    $responce[0][$i]=array('ID_LyDoGiamGia'=>$row["ID_LyDoGiamGia"],'LyDoGiamGia'=>$row["LyDoGiamGia"],'BatDau'=>$row["BatDau"],'HetHan'=>$row["HetHan"],'TienGiam'=>$row["TienGiam"],'DaAp'=>$row["DaAp"]);
	    $i++; 
	}  
}else{
	 $responce[0][0]=array('ID_LyDoGiamGia'=>0);
}
 

//voucher
$store_name_voucher="{call GD2_GetVoucherListByID_LuotKham(?)}";
$params_voucher = array($_GET['id_luotkham']);
$get_voucher=$data->query( $store_name_voucher, $params_voucher);
$excute_voucher= new SQLServerResult($get_voucher);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam_voucher= $excute_voucher->get_as_array();//Tra ve mang toan bo data lay duoc 
$i_voucher=0;
if(count($tam_voucher)>0){
	foreach ($tam_voucher as $row) {//duyet toan bo mang tra ve
	    $responce[1][$i_voucher]=array('ID_LyDoGiamGia'=>$row["ID_LyDoGiamGia"],'LyDoGiamGia'=>$row["LyDoGiamGia"],'BatDau'=>$row["BatDau"],'HetHan'=>$row["HetHan"],'TienGiam'=>$row["TienGiam"],'DaAp'=>$row["DaAp"]);
	    $i_voucher++; 
	}
}else{
	 $responce[1][0]=array('ID_LyDoGiamGia'=>0);
}
//quota
$store_name_quota="{call GD2_GetQuotaByID_LuotKham(?)}";
$params_quota = array($_GET['id_luotkham']);
$get_quota=$data->query( $store_name_quota, $params_quota);
$excute_quota= new SQLServerResult($get_quota);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam_quota= $excute_quota->get_as_array();//Tra ve mang toan bo data lay duoc 
$i_quota=0;
//foreach ($tam_quota as $row) {//duyet toan bo mang tra ve
    $responce[2][$i_quota]=array('ID_NhanVienSuDungQuoTa'=>$tam_quota[0]["ID_NhanVienSuDungQuoTa"],'SoTien'=>$tam_quota[0]["SoTien"]);
    $i_quota++; 
//}

$store_name_select="{call GD2_MienGiamTheoLuotKhamGetByID_LuotKham(?)}";
$params_select = array($_GET['id_luotkham']);
$get_select=$data->query( $store_name_select, $params_select);
$excute_select= new SQLServerResult($get_select);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam_select= $excute_select->get_as_array();//Tra ve mang toan bo data lay duoc 
if(count($tam_select)>0){
	$responce[3][0]=array('SoTienCoupon'=>$tam_select[0]["SoTienCoupon"],
				'SoTienQuoTa'=>$tam_select[0]["SoTienQuoTa"],
				'SoTienQuoTaBS'=>$tam_select[0]["SoTienQuoTaBS"],
				'SoTienVoucher'=>$tam_select[0]["SoTienVoucher"],
				'GhiChuCoupon'=>$tam_select[0]["GhiChuCoupon"],
				'GhiChuQuota'=>$tam_select[0]["GhiChuQuota"],
				'GhiChuVoucher'=>$tam_select[0]["GhiChuVoucher"],
	);
}else{
	$responce[3][0]=array('SoTienCoupon'=>0,
				'SoTienQuoTa'=>0,
				'SoTienVoucher'=>0,
				'GhiChuCoupon'=>'',
				'GhiChuQuota'=>'',
				'GhiChuVoucher'=>'',
				'SoTienQuoTaBS'=>0,
	);
}


echo json_encode($responce);
}
?>