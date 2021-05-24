<?php
header('Content-Type: text/html; charset=utf-8');  
$data= new SQLServer;	
$params = array($_GET['idthutrano']);
$store_name="{call GD2_isnoitru (?)}";
$get_thongtin=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_thongtin);
$isnoitru= $excute->get_as_array();	
if($isnoitru[0][0]==0){
	$params = array($_GET['idthutrano']);
	$store_name="{call GD2_Thongtin_benhnhan_bhyt (?)}";
	$get_thongtin=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get_thongtin);
	$thongtin= $excute->get_as_array();	
	$params =  array($_GET['idthutrano']);
	$store_name="{call GD2_BHYT_ngoaithuoc_quyettoan (?)}";
	$get_thongtin=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get_thongtin);
	$thongtinthuoc= $excute->get_as_array();	
	$params =  array($_GET['idthutrano']);
	$store_name="{call GD2_BHYT_ngoaicls_quyettoan (?)}";
	$get_thongtin=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get_thongtin);
	$thongtincls= $excute->get_as_array();			
	if($thongtin[0]['ID_PhanLoaiKham']==24){
		$MA_KHOA='K02';		
	}else{
		$MA_KHOA='K01';
	}
	$MA_LOAI_KCB=2;		
	$NAM_QT=$thongtin[0]['ThoiGianVaoKham']->format('Y');
	$THANG_QT=$thongtin[0]['ThoiGianVaoKham']->format('m');
	$NGAYLAP=$thongtin[0]['ThoiGianVaoKham']->format('Ymd');						
}else{
	$params = array($_GET['idthutrano']);
	$store_name="{call GD2_Thongtin_benhnhan_bhytnt (?)}";
	$get_thongtin=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get_thongtin);
	$thongtin= $excute->get_as_array();	
	$params =  array($_GET['idthutrano']);
	$store_name="{call GD2_BHYT_ngoaithuoc_quyettoan (?)}";
	$get_thongtin=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get_thongtin);
	$thongtinthuoc= $excute->get_as_array();	
	$params =  array($_GET['idthutrano']);
	$store_name="{call GD2_BHYT_ngoaicls_quyettoan (?)}";
	$get_thongtin=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get_thongtin);
	$thongtincls= $excute->get_as_array();
	$MA_KHOA=$thongtin[0]['Makhoa_BHYT'];	
	$NAM_QT=$thongtin[0]['ThoiGianKetThucKham']->format('Y');
	$THANG_QT=$thongtin[0]['ThoiGianKetThucKham']->format('m');
	$NGAYLAP=$thongtin[0]['ThoiGianKetThucKham']->format('Ymd');	
	$MA_LOAI_KCB=3;	
}
$tongthuoc=0;
$tongcls=0;
$ThanhTienBaoHiem=0;
if($thongtin[0]['NgayThangNamSinh']==''){
	$NamSinh =$thongtin[0]['NamSinh'];
}else{		
	$NamSinh =$thongtin[0]['NgayThangNamSinh']->format('Ymd');
}

if($thongtin[0]['ThoiGianVaoKham']==''){
	$thongtin[0]['ThoiGianVaoKham']='';
}else{		
	$thongtin[0]['ThoiGianVaoKham'] =$thongtin[0]['ThoiGianVaoKham']->format('YmdHi');
}

if($thongtin[0]['ThoiGianKetThucKham']==''){
	$thongtin[0]['ThoiGianKetThucKham']='';
}else{		
	$thongtin[0]['ThoiGianKetThucKham'] =$thongtin[0]['ThoiGianKetThucKham']->format('YmdHi');
}
if($thongtin[0]['GioiTinh']==1){
	$GioiTinh =2;
}else{
	$GioiTinh =1;
}
if($thongtin[0]['TrangThaiKham']==4){
	$TrangThaiKham =2;
}else if($thongtin[0]['TrangThaiKham']==1){
	$TrangThaiKham =1;
}else if($thongtin[0]['TrangThaiKham']==3){
	$TrangThaiKham =3;
}
$MA_LK=$thongtin[0]['ID_LuotKham'];
$MA_BENH=$thongtin[0]['MaICD10'];
$chitietcls='<DSACH_CHI_TIET_DVKT>';
for($i=0;$i<count($thongtincls);$i++){	 
$chuoi_MA_VAT_TU ='';
	if($thongtincls[$i]['ID_Nhom_BHYT']==10){
		$chuoi_MA_VAT_TU='<MA_VAT_TU>'.$thongtincls[$i]['MaSoTheoDVBHYT'].'</MA_VAT_TU>';
	}else{
		$chuoi_MA_VAT_TU='<MA_VAT_TU />';
	}
	$tongcls=$tongcls+$thongtincls[$i]['thanhtien'];
	$thongtincls[$i]['cungchitra']=($thongtincls[$i]['ThanhTienBaoHiem']/$thongtincls[$i]['thanhtien'])*100;
	$ThanhTienBaoHiem=$ThanhTienBaoHiem+$thongtincls[$i]['ThanhTienBaoHiem'];         
	$chitietcls=$chitietcls.'<CHI_TIET_DVKT>
	<MA_LK>'.$MA_LK.'</MA_LK>
	<STT>'.($i+1).'</STT>
	<MA_DICH_VU>'.$thongtincls[$i]['MaSoTheoDVBHYT'].'</MA_DICH_VU>'.$chuoi_MA_VAT_TU.'	
	<MA_NHOM>'.$thongtincls[$i]['ID_BHYT'].'</MA_NHOM>
	<TEN_DICH_VU><![CDATA['.$thongtincls[$i]['ten'].']]></TEN_DICH_VU>
	<DON_VI_TINH>Lần</DON_VI_TINH>
	<SO_LUONG>'.$thongtincls[$i]['soluong'].'</SO_LUONG>
	<DON_GIA>'.$thongtincls[$i]['dongia'].'</DON_GIA>
	<TYLE_TT>'.round($thongtincls[$i]['cungchitra'], 0, PHP_ROUND_HALF_UP).'</TYLE_TT>
	<THANH_TIEN>'.$thongtincls[$i]['thanhtien'].'</THANH_TIEN>
	<MA_KHOA>'.$MA_KHOA.'</MA_KHOA>
	<MA_BAC_SI></MA_BAC_SI>
	<MA_BENH>'.$MA_BENH.'</MA_BENH>
	<NGAY_YL></NGAY_YL>
	<NGAY_KQ></NGAY_KQ>
	<MA_PTTT></MA_PTTT>
	<MA_GIA></MA_GIA>
	</CHI_TIET_DVKT>';
}
$chitietcls=$chitietcls.'</DSACH_CHI_TIET_DVKT>';
if(count($thongtinthuoc)>0){
	$chitietthuoc='<DSACH_CHI_TIET_THUOC>';
	for($i=0;$i<count($thongtinthuoc);$i++){			
		$tongthuoc=$tongthuoc+$thongtinthuoc[$i]['thanhtien'];
		$ThanhTienBaoHiem=$ThanhTienBaoHiem+$thongtinthuoc[$i]['ThanhTienBaoHiem'];   
		$chitietthuoc=$chitietthuoc.'<CHI_TIET_THUOC>
		<MA_LK>'.$MA_LK.'</MA_LK>
		<STT>'.($i+1).'</STT>
		<MA_THUOC>'.$thongtinthuoc[$i]['MaSoTheoDMBHYT'].'</MA_THUOC>
		<MA_NHOM>4</MA_NHOM>
		<TEN_THUOC>'.$thongtinthuoc[$i]['ten'].'</TEN_THUOC>
		<DON_VI_TINH>'.$thongtinthuoc[$i]['TenDonViTinh'].'</DON_VI_TINH>
		<HAM_LUONG>'.$thongtinthuoc[$i]['HamLuong'].'</HAM_LUONG>
		<DUONG_DUNG>'.$thongtinthuoc[$i]['MaDD_BHYT'].'</DUONG_DUNG>
		<LIEU_DUNG>'.$thongtinthuoc[$i]['CachDung'].'</LIEU_DUNG>
		<SO_DANG_KY>'.$thongtinthuoc[$i]['SignNumber'].'</SO_DANG_KY>
		<SO_LUONG>'.$thongtinthuoc[$i]['soluong'].'</SO_LUONG>
		<DON_GIA>'.$thongtinthuoc[$i]['dongia'].'</DON_GIA>
		<TYLE_TT>'.round($thongtinthuoc[$i]['phantramchitra'], 0, PHP_ROUND_HALF_UP).'</TYLE_TT>
		<THANH_TIEN>'.$thongtinthuoc[$i]['thanhtien'].'</THANH_TIEN>
		<MA_KHOA>'.$MA_KHOA.'</MA_KHOA>
		<MA_BAC_SI></MA_BAC_SI>
		<MA_BENH>'.$MA_BENH.'</MA_BENH>
		<NGAY_YL>'.$thongtinthuoc[$i]['NgayKeDon']->format('YmdHi').'</NGAY_YL>
		<MA_PTTT></MA_PTTT>
		</CHI_TIET_THUOC>';
	}
	$chitietthuoc=$chitietthuoc.'</DSACH_CHI_TIET_THUOC>';
	$chitietthuoc=base64_encode ($chitietthuoc);
}

$XML1 = 
'<?xml version="1.0" encoding="utf-8"?><GIAMDINHHS xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">  
<THONGTINDONVI>    
<MACSKCB>48195</MACSKCB>  
</THONGTINDONVI>  
<THONGTINHOSO>    
<NGAYLAP>'.$NGAYLAP.'</NGAYLAP>
<SOLUONGHOSO>1</SOLUONGHOSO>    
<DANHSACHHOSO>		
<HOSO>			
<FILEHOSO>				
<LOAIHOSO>XML1</LOAIHOSO>				
<NOIDUNGFILE>';
$tonghop='<TONG_HOP>
<MA_LK>'.$thongtin[0]['ID_LuotKham'].'</MA_LK>
<STT>1</STT>
<MA_BN>'.$thongtin[0]['MaBenhNhan'].'</MA_BN>
<HO_TEN>'.$thongtin[0]['HoLotBenhNhan'].' '.$thongtin[0]['TenBenhNhan'].'</HO_TEN>
<NGAY_SINH>'.$NamSinh.'</NGAY_SINH>
<GIOI_TINH>'.$GioiTinh.'</GIOI_TINH>
<DIA_CHI>'.str_replace("&"," ",$thongtin[0]['DiaChiTheBHYT']).'</DIA_CHI>
<MA_THE>'.$thongtin[0]['SoThe'].'</MA_THE>
<MA_DKBD>'.str_replace("-","",$thongtin[0]['Ma_KCB_BanDau']).'</MA_DKBD>
<GT_THE_TU>'.$thongtin[0]['HanSD_TuNgay']->format('Ymd').'</GT_THE_TU>
<GT_THE_DEN>'.$thongtin[0]['HanSD_DenNgay']->format('Ymd').'</GT_THE_DEN>
<TEN_BENH>'.$thongtin[0]['ChanDoan'].'</TEN_BENH>
<MA_BENH>'.$thongtin[0]['MaICD10'].'</MA_BENH>
<MA_BENHKHAC />
<MA_LYDO_VVIEN>'.$TrangThaiKham.'</MA_LYDO_VVIEN>
<MA_NOI_CHUYEN />
<MA_TAI_NAN />
<NGAY_VAO>'.$thongtin[0]['ThoiGianVaoKham'].'</NGAY_VAO>
<NGAY_RA>'.$thongtin[0]['ThoiGianKetThucKham'].'</NGAY_RA>
<SO_NGAY_DTRI>1</SO_NGAY_DTRI>
<KET_QUA_DTRI></KET_QUA_DTRI>
<TINH_TRANG_RV></TINH_TRANG_RV>
<NGAY_TTOAN>'.$thongtin[0]['ThoiGianKetThucKham'].'</NGAY_TTOAN>
<MUC_HUONG>'.$thongtin[0]['phantramchitra'].'</MUC_HUONG>
<T_THUOC>'.$tongthuoc.'</T_THUOC>
<T_VTYT>0</T_VTYT>
<T_TONGCHI>'.($tongthuoc+$tongcls).'</T_TONGCHI>
<T_BNTT>'.(($tongthuoc+$tongcls)-$ThanhTienBaoHiem).'</T_BNTT>
<T_BHTT>'.$ThanhTienBaoHiem.'</T_BHTT>
<T_NGUONKHAC />
<T_NGOAIDS />
<MA_LOAI_KCB>'.$MA_LOAI_KCB.'</MA_LOAI_KCB>
<NAM_QT>'.$NAM_QT.'</NAM_QT>
<THANG_QT>'.$THANG_QT.'</THANG_QT>
<MA_KHOA>'.$MA_KHOA.'</MA_KHOA>
<MA_CSKCB>48195</MA_CSKCB>
<MA_KHUVUC />
<MA_PTTT_QT />
<CAN_NANG />
</TONG_HOP>';
$XML2="</NOIDUNGFILE>
</FILEHOSO>                    
<FILEHOSO>
<LOAIHOSO>XML2</LOAIHOSO>
<NOIDUNGFILE>";
$XML3="</NOIDUNGFILE>
</FILEHOSO>                    
<FILEHOSO>
<LOAIHOSO>XML3</LOAIHOSO>
<NOIDUNGFILE>";
$XML4="</NOIDUNGFILE>
</FILEHOSO>         
</HOSO>
</DANHSACHHOSO>
</THONGTINHOSO>
<CHUKYDONVI />
</GIAMDINHHS>";	
$tonghop=base64_encode ($tonghop);		
$chitietcls=base64_encode ($chitietcls);
if(count($thongtinthuoc)>0){
	$tong=$XML1 .$tonghop.$XML2.$chitietthuoc.$XML3.$chitietcls.$XML4;
}else{
	$tong=$XML1 .$tonghop.$XML3.$chitietcls.$XML4;
}
$filename=$thongtin[0]['MaBenhNhan']."_".$_GET['idthutrano'].".xml";
echo file_put_contents("F:/pic_data/BHYT/".$filename,$tong,FILE_USE_INCLUDE_PATH);

?>

