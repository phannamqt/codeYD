<?php
switch ($_REQUEST["oper"]) {
	case "add":
		add("GD2_spDM_LoaiKham_Insert");
	break;
	case "edit":
		edit("GD2_spDM_LoaiKham_Update");
	break;
	case "del":
		del("GD2_spDM_LoaiKham_Delete");
	break;
	case "apGiaBHCC":
		apGiaBHCC();
	break;
	 case "copycmc":
  copycmc();
  break;
}


function copycmc(){
	$data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call MED_CopyChiMucCon(?,?,?,?)}";//tao bien khai bao store
     
      $params = array(
		$_GET['ID_LoaiKham_From'],
		$_GET['ID_LoaiKham_To'],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR']
      );
      $get=$data->query( $store_name, $params);
}	
function apGiaBHCC(){
	foreach($_POST['data'] as $row){
		$attributes = array(
			'ID_LoaiKham' => $row['ID_LoaiKham'],
			'ID_LoaiTheBHCC' => $row['ID_LoaiTheBHCC']
		);
		$data = array(
			'GiaSauNhanHeSo' => $row['GiaBHCC'],
			'GiaThoiDiemLuu' => $row['GiaBaoChoBN'],
			'GiaGoc' => $row['GiaThueNgoaiThucHien']
		);
		updateOrCreate('GD2_Map_THEBHCC_PhanTramLoaiKham','ID_auto',$attributes,$data );
	}
}

function add($store_name){
	$check1='';
	if(!isset($_POST['XetNghiem'])){    
		$XetNghiem=0;
	}else{    
		$XetNghiem=$_POST['XetNghiem'];
	}
	if(!isset($_POST['CLS'])){    
		$CLS=0;
	}else{    
		$CLS=$_POST['CLS'];
	}
	if(!isset($_POST['CoLuuKQInRieng'])){    
		$CoLuuKQInRieng=0;
	}else{    
		$CoLuuKQInRieng=$_POST['CoLuuKQInRieng'];
	}
	if(!isset($_POST['DieuTriTaiNha'])){    
		$DieuTriTaiNha=0;
	}else{    
		$DieuTriTaiNha=$_POST['DieuTriTaiNha'];
	}
	if(!isset($_POST['CoMauNhapKQ'])){    
		$CoMauNhapKQ=0;
	}else{    
		$CoMauNhapKQ=$_POST['CoMauNhapKQ'];
	}
	if(!isset($_POST['CoTheKeToa'])){    
		$CoTheKeToa=0;
	}else{    
		$CoTheKeToa=$_POST['CoTheKeToa'];
	}
	if(!isset($_POST['ThuocNhomXepHangCLS'])){    
		$ThuocNhomXepHangCLS=0;
	}else{    
		$ThuocNhomXepHangCLS=$_POST['ThuocNhomXepHangCLS'];
	}
	if(!isset($_POST['GiaTaiNhaDieuChinhTheoNhom'])){    
		$GiaTaiNhaDieuChinhTheoNhom=0;
	}else{    
		$GiaTaiNhaDieuChinhTheoNhom=$_POST['GiaTaiNhaDieuChinhTheoNhom'];
	}
	if(!isset($_POST['CoFormChucNangRieng'])){    
		$CoFormChucNangRieng=0;
	}else{    
		$CoFormChucNangRieng=$_POST['CoFormChucNangRieng'];
	}
	if(!isset($_POST['TuyenHuyen'])){    
		$TuyenHuyen=0;
	}else{    
		$TuyenHuyen=$_POST['TuyenHuyen'];
	}
	if(!isset($_POST['TuyenTinh'])){    
		$TuyenTinh=0;
	}else{    
		$TuyenTinh=$_POST['TuyenTinh'];
	}
	if(!isset($_POST['TuyenTrungUong'])){    
		$TuyenTrungUong=0;
	}else{    
		$TuyenTrungUong=$_POST['TuyenTrungUong'];
	}
	if(!isset($_POST['Active'])){    
		$Active=0;
	}else{    
		$Active=$_POST['Active'];
	}
	if(!isset($_POST['IsHoTro'])){    
		$IsHoTro=0;
	}else{    
		$IsHoTro=$_POST['IsHoTro'];
	}
	if(!isset($_POST['IsThamMy'])){    
		$IsThamMy=0;
	}else{    
		$IsThamMy=$_POST['IsThamMy'];
	}

	if($_POST['GiaPhuThuBenhVien']==''){    
		$_POST['GiaPhuThuBenhVien']=null;
	}else{    
		$_POST['GiaPhuThuBenhVien']=trim($_POST['GiaPhuThuBenhVien']," ");
	}
	if($_POST['PhanTramThue']==''){    
		$_POST['PhanTramThue']=null;
	}else{    
		$_POST['PhanTramThue']=trim($_POST['PhanTramThue']," ");
	}
	if(trim($_POST['ThoiGianCoKetQua'])==''){
		$_POST['ThoiGianCoKetQua']=0;
	}
	if(trim($_POST['PhuThuThucHienTaiNha'])==''){
		$_POST['PhuThuThucHienTaiNha']=0;
	}
	if(trim($_POST['GiaBaoHiem'])==''){
		$_POST['GiaBaoHiem']=0;
	}
	if(trim($_POST['Khhaovtyt'])==''){
		$_POST['Khhaovtyt']=0;
	}
	if(trim($_POST['Khhaodv'])==''){
		$_POST['Khhaodv']=0;
	}
	if(trim($_POST['GiaKSKCT'])==''){
		$_POST['GiaKSKCT']=0;
	}
	if(trim($_POST['GiaKhamCapCuu'])==''){
		$_POST['GiaKhamCapCuu']=0;
	}
	if(trim($_POST['TruongHopBHYT_hidden'])==99){
		$_POST['TruongHopBHYT_hidden']=NULL;
	}

	if(!isset($_POST['IsVatLyTriLieu'])){    
		$IsVatLyTriLieu=0;
	}else{    
		$IsVatLyTriLieu=$_POST['IsVatLyTriLieu'];
	}
	if(trim($_POST['SoNgayXmlBHYT'])==''){
		$_POST['SoNgayXmlBHYT']=null;
	}
	$data= new SQLServer;
	$params = array(
		trim($_POST['TenLoaiKham']," "),
		trim($_POST['ID_NhomCLS_hidden']," "),
		trim($_POST['MaVietTat']," "),
		trim($_POST['MaVietTat_BN']," "),
		trim($_POST['GiaBaoChoBN']," "),
		trim($_POST['GiaThueNgoaiThucHien']," "),
		trim($_POST['ThoiGianTrungBinhThucHien']," "),
		trim($_POST['ThoiGianCoKetQua']," "),
		trim($_POST['STT']," "),
		trim($_POST['PathToTemplateFile']," "),
		trim($_POST['MoTa']," "),
		trim($_POST['GhiChu']," "),
		trim($_POST['TenLoaiKham_EN']," "),
		trim($_POST['ReportName']," "),
		trim($_POST['PhanTramDieuChinhGiaTaiNha']," "),
		trim($_POST['PhuThuThucHienTaiNha']," "),
		trim($_POST['SoPhimLonTieuHao']," "),
		trim($_POST['SoPhimNhoTieuHao']," "),
		trim($_POST['SoPhimNhuAnhTieuHao']," "),
		trim($_POST['GiaBaoHiem']," "),
		$_POST['GiaPhuThuBenhVien'],
		trim($_POST['MauBaoHiem']," "),
		trim($_POST['TenBaoHiem']," "),
		trim($_POST['ID_Nhom_BHYT_hidden']," "),
		trim($_POST['LoiKhuyen']," "),  
		$XetNghiem,
		$CLS,
		$CoLuuKQInRieng,
		$DieuTriTaiNha,
		$CoMauNhapKQ,
		$CoTheKeToa,
		$ThuocNhomXepHangCLS,
		$GiaTaiNhaDieuChinhTheoNhom,
		$CoFormChucNangRieng,
		$TuyenHuyen,
		$TuyenTinh,
		$TuyenTrungUong,
		$_POST['PhanTramThue'],
		$Active,
		$IsThamMy,
		trim($_POST['STTBaoHiem']," "),
		trim($_POST['MaSoBH']," "),
		trim($_POST['ID_NhomLSP_hidden']," "),
		$_POST['Khhaovtyt'],
		$_POST['Khhaodv'],
		$_POST['TruongHopBHYT_hidden'],
		$IsHoTro, 
		$_POST['Loai_hidden'],   
		$_POST['GiaKSKCT'],
		$IsVatLyTriLieu, 
		$_POST['SoNgayXmlBHYT'],

		$_POST['GiaKhamCapCuu'],
		$_POST['ID_LoaiPhauThuat_TT_hidden'],

		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR'],
		array(&$check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)

	);
	$TaoInputStore=TaoInputStore($params);       
	$store_name="{call GD2_spDM_LoaiKham_Insert $TaoInputStore}";	
	$get=$data->query( $store_name, $params);
	if(isset($_POST['pb'])){  
		foreach ($_POST['pb'] as $key => $value) {          
			$params1=array($value['ID_PhongBan'],$check1,$value['GhiChu'],$value['IsUsing'],$_SESSION['user']['id_user']);
			$store_name1="{call GD2_PhongBan_LoaiKham_Insert (?,?,?,?,?)}";
			$get2=$data->query( $store_name1, $params1);
		}};
		if(isset($_POST['ts'])){  
			foreach ($_POST['ts'] as $key => $value) {			
				$params2=array($check1
					,$value['TenXetNghiem']
					,$value['MoTa']
					,$value['DonGia']
					,$value['GhiChu']
					,$value['CanNam1']
					,$value['CanNam2']
					,$value['CanNam3']
					,$value['CanNam4']
					,$value['CanNu1']
					,$value['CanNu2']
					,$value['CanNu3']
					,$value['CanNu4']
					,$value['Red']
					,$value['Blue']
					,$value['Yellow']
					,$value['HeSoChuyenDoi']
					,$value['GiaTriBinhThuong1']
					,$value['GiaTriBinhThuong2']
					,$value['CoKQInRieng']
					,$value['CoTemplate']
					,$value['STT']
					,$value['ID_DonViTinh']
					,$value['Active']
					,$_SESSION['user']['id_user']
					,
				);			
				$store_name2="{call GD2_Xetnghiem_insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";			
				$get3=$data->query( $store_name2, $params2);
				echo ';'.$get3.';;';
			}
		};

	}
	function edit($store_name){
		$check1='';

		if(!isset($_POST['XetNghiem'])){    
			$XetNghiem=0;
		}else{    
			$XetNghiem=$_POST['XetNghiem'];
		}
		if(!isset($_POST['CLS'])){    
			$CLS=0;
		}else{    
			$CLS=$_POST['CLS'];
		}
		if(!isset($_POST['CoLuuKQInRieng'])){    
			$CoLuuKQInRieng=0;
		}else{    
			$CoLuuKQInRieng=$_POST['CoLuuKQInRieng'];
		}
		if(!isset($_POST['DieuTriTaiNha'])){    
			$DieuTriTaiNha=0;
		}else{    
			$DieuTriTaiNha=$_POST['DieuTriTaiNha'];
		}
		if(!isset($_POST['CoMauNhapKQ'])){    
			$CoMauNhapKQ=0;
		}else{    
			$CoMauNhapKQ=$_POST['CoMauNhapKQ'];
		}
		if(!isset($_POST['CoTheKeToa'])){    
			$CoTheKeToa=0;
		}else{    
			$CoTheKeToa=$_POST['CoTheKeToa'];
		}
		if(!isset($_POST['ThuocNhomXepHangCLS'])){    
			$ThuocNhomXepHangCLS=0;
		}else{    
			$ThuocNhomXepHangCLS=$_POST['ThuocNhomXepHangCLS'];
		}
		if(!isset($_POST['GiaTaiNhaDieuChinhTheoNhom'])){    
			$GiaTaiNhaDieuChinhTheoNhom=0;
		}else{    
			$GiaTaiNhaDieuChinhTheoNhom=$_POST['GiaTaiNhaDieuChinhTheoNhom'];
		}
		if(!isset($_POST['CoFormChucNangRieng'])){    
			$CoFormChucNangRieng=0;
		}else{    
			$CoFormChucNangRieng=$_POST['CoFormChucNangRieng'];
		}
		if(!isset($_POST['TuyenHuyen'])){    
			$TuyenHuyen=0;
		}else{    
			$TuyenHuyen=$_POST['TuyenHuyen'];
		}
		if(!isset($_POST['TuyenTinh'])){    
			$TuyenTinh=0;
		}else{    
			$TuyenTinh=$_POST['TuyenTinh'];
		}
		if(!isset($_POST['TuyenTrungUong'])){    
			$TuyenTrungUong=0;
		}else{    
			$TuyenTrungUong=$_POST['TuyenTrungUong'];
		}
		if(!isset($_POST['Active'])){    
			$Active=0;
		}else{    
			$Active=$_POST['Active'];
		}
		if(!isset($_POST['IsHoTro'])){    
			$IsHoTro=0;
		}else{    
			$IsHoTro=$_POST['IsHoTro'];
		}
		if(!isset($_POST['IsThamMy'])){    
			$IsThamMy=0;
		}else{    
			$IsThamMy=$_POST['IsThamMy'];
		}
		if($_POST['GiaPhuThuBenhVien']==''){    
			$_POST['GiaPhuThuBenhVien']=null;
		}else{    
			$_POST['GiaPhuThuBenhVien']=trim($_POST['GiaPhuThuBenhVien']," ");
		}
		if($_POST['PhanTramThue']==''){    
			$_POST['PhanTramThue']=null;
		}else{    
			$_POST['PhanTramThue']=trim($_POST['PhanTramThue']," ");
		}
		if(trim($_POST['Khhaovtyt'])==''){
			$_POST['Khhaovtyt']=0;
		}
		if(trim($_POST['Khhaodv'])==''){
			$_POST['Khhaodv']=0;
		}
		$data= new SQLServer;
		if(trim($_POST['ThoiGianTrungBinhThucHien'])==''){
			$_POST['ThoiGianTrungBinhThucHien']=0;
		}
		if(trim($_POST['GiaThueNgoaiThucHien'])==''){
			$_POST['GiaThueNgoaiThucHien']=0;
		}
		if(trim($_POST['GiaBaoHiem'])==''){
			$_POST['GiaBaoHiem']=0;
		}
		if(trim($_POST['GiaPhuThuBenhVien'])==''){
			$_POST['GiaPhuThuBenhVien']=0;
		}
		if(trim($_POST['ThoiGianCoKetQua'])==''){
			$_POST['ThoiGianCoKetQua']=0;
		}
		if(trim($_POST['PhuThuThucHienTaiNha'])==''){
			$_POST['PhuThuThucHienTaiNha']=0;
		}
		if(trim($_POST['GiaBaoChoBN'])==''){
			$_POST['GiaBaoChoBN']=0;
		}
		if(trim($_POST['TruongHopBHYT_hidden'])==99){
			$_POST['TruongHopBHYT_hidden']=NULL;
		}
		if(trim($_POST['PhanTramDieuChinhGiaTaiNha'])==''){
			$_POST['PhanTramDieuChinhGiaTaiNha']=0;
		}
		if(trim($_POST['PhanTramThue'])==''){
			$_POST['PhanTramThue']=0;
		}
		if(trim($_POST['Khhaovtyt'])==''){
			$_POST['Khhaovtyt']=0;
		}
		if(trim($_POST['Khhaodv'])==''){
			$_POST['Khhaodv']=0;
		}
		if(trim($_POST['GiaKSKCT'])==''){
			$_POST['GiaKSKCT']=null;
		}
		if(trim($_POST['GiaKhamCapCuu'])==''){
			$_POST['GiaKhamCapCuu']=0;
		}

		if(!isset($_POST['IsVatLyTriLieu'])){    
			$IsVatLyTriLieu=0;
		}else{    
			$IsVatLyTriLieu=$_POST['IsVatLyTriLieu'];
		}
		if(trim($_POST['SoNgayXmlBHYT'])==''){
			$_POST['SoNgayXmlBHYT']=null;
		}

		$params = array(
			$_GET['id'],
			trim($_POST['TenLoaiKham']," "),
			trim($_POST['ID_NhomCLS_hidden']," "),
			trim($_POST['MaVietTat']," "),
			trim($_POST['MaVietTat_BN']," "),
			trim($_POST['GiaBaoChoBN']," "),
			trim($_POST['GiaThueNgoaiThucHien']," "),
			trim($_POST['ThoiGianTrungBinhThucHien']," "),
			trim($_POST['ThoiGianCoKetQua']," "),
			trim($_POST['STT']," "),
			trim($_POST['PathToTemplateFile']," "),
			trim($_POST['MoTa']," "),
			trim($_POST['GhiChu']," "),
			trim($_POST['TenLoaiKham_EN']," "),
			trim($_POST['ReportName']," "),
			trim($_POST['PhanTramDieuChinhGiaTaiNha']," "),
			trim($_POST['PhuThuThucHienTaiNha']," "),
			trim($_POST['SoPhimLonTieuHao']," "),
			trim($_POST['SoPhimNhoTieuHao']," "),
			trim($_POST['SoPhimNhuAnhTieuHao']," "),
			trim($_POST['GiaBaoHiem']," "),
			$_POST['GiaPhuThuBenhVien'],
			trim($_POST['MauBaoHiem']," "),
			trim($_POST['TenBaoHiem']," "),
			trim($_POST['ID_Nhom_BHYT_hidden']," "),
			trim($_POST['LoiKhuyen']," "),
			$XetNghiem,
			$CLS,
			$CoLuuKQInRieng,
			$DieuTriTaiNha,
			$CoMauNhapKQ,
			$CoTheKeToa,
			$ThuocNhomXepHangCLS,
			$GiaTaiNhaDieuChinhTheoNhom,
			$CoFormChucNangRieng,
			$TuyenHuyen,
			$TuyenTinh,
			$TuyenTrungUong,
			$_POST['PhanTramThue'],
			$Active,
			$IsThamMy,
			trim($_POST['STTBaoHiem']," "),
			trim($_POST['MaSoBH']," "),
			trim($_POST['ID_NhomLSP_hidden']," "),
			$_POST['Khhaovtyt'],
			$_POST['Khhaodv'],
			$_POST['TruongHopBHYT_hidden'],
			$IsHoTro, 
			$_POST['Loai_hidden'], 
			$_POST['GiaKSKCT'],
			$IsVatLyTriLieu, 
			$_POST['SoNgayXmlBHYT'],

			$_POST['GiaKhamCapCuu'],
			$_POST['ID_LoaiPhauThuat_TT_hidden'],

			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR'],

		);
	//	print_r($_POST);
		$TaoInputStore=TaoInputStore($params);
		$store_name="{call GD2_spDM_LoaiKham_Update $TaoInputStore}";
	//	print_r($TaoInputStore);
    //$store_name="{call GD2_spDM_LoaiKham_Update(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store

		$get=$data->query( $store_name, $params);
		echo ';;'.$check1.';;';

		if(isset($_POST['ts'])){  
			foreach ($_POST['ts'] as $key => $value) {
				unset($params4);
				if($value['Luu']!=1){
					$params4=array($_GET['id'],
						$value['TenXetNghiem'],
						$value['MoTa'],
						$value['DonGia'],
						$value['GhiChu'],

						$value['CanNam1'],
						$value['CanNam2'],
						$value['CanNam3'],
						$value['CanNam4'],
						$value['CanNu1'],

						$value['CanNu2'],
						$value['CanNu3'],
						$value['CanNu4'],
						$value['Red'],
						$value['Blue'],

						$value['Yellow'],
						$value['HeSoChuyenDoi'],
						$value['GiaTriBinhThuong1'],
						$value['GiaTriBinhThuong2'],
						$value['CoKQInRieng'],

						$value['CoTemplate'],
						$value['STT'],
						$value['ID_DonViTinh'],
						$value['Active'],
						$_SESSION['user']['id_user']
					);			
					$store_name2="{call GD2_Xetnghiem_insert(?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?)}";			
					$get4=$data->query( $store_name2, $params4);
				}else{
					$params4=array($value['ID_XetNghiem'],
						$_GET['id'],
						$value['TenXetNghiem'],
						$value['MoTa'],
						$value['DonGia'],
						$value['GhiChu'],

						$value['CanNam1'],
						$value['CanNam2'],
						$value['CanNam3'],
						$value['CanNam4'],
						$value['CanNu1'],

						$value['CanNu2'],
						$value['CanNu3'],
						$value['CanNu4'],
						$value['Red'],
						$value['Blue'],

						$value['Yellow'],
						$value['HeSoChuyenDoi'],
						$value['GiaTriBinhThuong1'],
						$value['GiaTriBinhThuong2'],
						$value['CoKQInRieng'],

						$value['CoTemplate'],
						$value['STT'],
						$value['ID_DonViTinh'],
						$value['Active'],
						$_SESSION['user']['id_user']
					);
				//$store_name2="{call GD2_Xetnghiem_Update(?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?)}";
			   // print_r($params4);
			  // $get4=$data->query( $store_name2, $params4); // tạm thời khoong update xet nghiem	
				}
			}};


	/*if($_GET['xetnghiemxoa']){
		$_xoa_xetnghiem=$_GET['xetnghiemxoa'];
		$_del_xetnghiem=explode(",",$_xoa_xetnghiem);
		$_dem_xetnghiem=count($_del_xetnghiem);
		for($i=0;$i<$_dem_xetnghiem;$i++){
			if($_del_xetnghiem[$i]>0){
				$params_xetnghiem = array ($_del_xetnghiem[$i],$_SESSION["user"]["id_user"]);
				$store_name_xetnghiem="{call GD2_XetNghiem_DeleteByID_XetNghiem(?,?)}";
				$data->query( $store_name_xetnghiem, $params_xetnghiem);
			}
		}
	}*/
}
function del($store_name){
	
	$check1="";
	$data= new SQLServer;
	$store_name="{call $store_name (?,?,?)}";
	$params = array( 
		array($_POST["id"], SQLSRV_PARAM_IN),
		array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
		array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);
}
?>