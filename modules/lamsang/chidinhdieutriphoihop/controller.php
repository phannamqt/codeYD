<?php
switch ($_GET["oper"]) {
    case "add":
        add();
        break;
}
function add(){
	//print_r($_POST);
	$max=0;	

	$check1='';
	$check7='';
	$check8='';
	$check_25='';
	$check_con_25='';
	$check_26='';
	$check_con_26='';
	$data= new SQLServer;//tao lop ket noi SQL
	
	if(isset($_POST['id'])){
		$stt=0;
		$dem25=0;
		$dem26=0;
		foreach ($_POST['id'] as $key => $value) {
			
			if($value['ThanhTienCungChiTra']==''){
				$value['ThanhTienCungChiTra']=0;	
			}else{
				$value['ThanhTienCungChiTra']=(float)$value['ThanhTienCungChiTra'];	
				
			}
			
			if(isset($value['Code'])){
				$value['Code']=$value['Code'];
			}else{
				$value['Code']=NULL;	
			}
			
			if($value['TrangThai']=="HuyBo"){
				if($value['IDNhomCLS']==25){
					unset($params1);
					$store_name1="{call GD2_PHYSIOTHERAPY_HuyBo_New (?,?)}";//tao bien khai bao store
					$params1 = array($value['Id_phy_dtph'],$_SESSION['user']['id_user'] );
					$data->query( $store_name1, $params1);
				}elseif($value['IDNhomCLS']==26){
					unset($param1);
					$store_name1="{call GD2_DieuTriphoiHop_HuyBo_New (?,?)}";//tao bien khai bao store
					$params1 = array($value['Id_phy_dtph'],$_SESSION['user']['id_user'] );
					$data->query( $store_name1, $params1);
				}else{
					unset($params1);
					$store_name1="{call GD2_KhamHuyBo_New (?,?,?)}";//tao bien khai bao store
					$params1 = array($value['IDKham'],$value['LyDoHuyBo'],$_SESSION['user']['id_user'] );
					$data->query( $store_name1, $params1);
				}
			
			}else if($value['Luu']==1){
				if($value['IDNhomCLS']==25){
					unset($params2);
					$store_name2="{call GD2_PHYSIOTHERAPY_Up (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?)}";//tao bien khai bao store
					$params2 = array($value['Id_phy_dtph'],$value['PhiThucHien'],$value['ThanhTien'],$value['SLMoiNgay'],$value['SoNgay'],$value['ThucHien'],$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],($value['ThanhTienCungChiTra']*$value['SLMoiNgay'])*$value['SoNgay'],$value['PhuThuBV'],($value['PhuThuBV']*$value['SLMoiNgay'])*$value['SoNgay'],$value['ThanhTienBaoHiem'],$value['NguoiChiDinh'],$value['Code'],$_SERVER['REMOTE_ADDR'],$_SESSION['user']['id_user'] );
					$data->query( $store_name2, $params2);
				}elseif($value['IDNhomCLS']==26){
					unset($params2);
					$store_name2="{call GD2_DieuTriPhoiHop_Up (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?)}";//tao bien khai bao store
					$params2 = array($value['Id_phy_dtph'],$value['PhiThucHien'],$value['ThanhTien'],$value['SLMoiNgay'],$value['SoNgay'],$value['ThucHien'],$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],($value['ThanhTienCungChiTra']*$value['SLMoiNgay'])*$value['SoNgay'],$value['PhuThuBV'],($value['PhuThuBV']*$value['SLMoiNgay'])*$value['SoNgay'],$value['ThanhTienBaoHiem'],$value['NguoiChiDinh'],$value['Code'],$_SERVER['REMOTE_ADDR'],$_SESSION['user']['id_user'] );
					//print_r($params2);
					$data->query( $store_name2, $params2);
				}else{
					unset($params2);
					$store_name2="{call GD2_Kham_Up(?,?,?,?,?, ?,?,?,?,?, ?,?,?,?)}";
					if($value['DonGiaBHYT']==''){
						$value['DonGiaBHYT']=0;	
					}
					if($value['ThanhTienCungChiTra']==''){
						$value['ThanhTienCungChiTra']=0;	
					}
					if($value['PhuThuBV']==''){
						$value['PhuThuBV']=0;	
					}
					if($value['ThanhTienBaoHiem']==''){
						$value['ThanhTienBaoHiem']=0;	
					}
					if($value['PhanTramCungChiTra']==''){
						$value['PhanTramCungChiTra']=0;	
					}
					$params2 = array($value['IDKham'],
									$value['PhiThucHien'],
									$value['ThanhTien'],
									$value['ThucHien'],
									$value['DonGiaBHYT'],
									$value['PhanTramCungChiTra'],
									$value['ThanhTienCungChiTra'],
									$value['PhuThuBV'],
									$value['PhuThuBV'],
									$value['ThanhTienBaoHiem']
									,$value['NguoiChiDinh']
									,$value['Code']
									,$_SERVER['REMOTE_ADDR']
									,$_SESSION['user']['id_user']
					 				);
					$data->query( $store_name2, $params2);
					//print_r($params2);
				}
		
			}else if($value['Luu']!=1){
				if($value['IDNhomCLS']==25 || $value['IDNhomCLS']==26 ){
					if($value['IDNhomCLS']==25){
						if($value['PhiThucHien']==''){
							$value['PhiThucHien']=NULL;
						}
						if($value['ThanhTien']==''){
							$value['ThanhTien']=NULL;
						}
						if($value['GiaThueNgoaiThucHien']==''){
							$value['GiaThueNgoaiThucHien']=NULL;
						}
						
						
						$store_name4="{call GD2_PHYSIOTHERAPY_Insert_New (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,? ,?)}";//tao bien khai bao store
						$params4 = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['NguoiChiDinh'],$value['PhiThucHien'],$value['ThanhTien'],$value['MaBenhNhan'],$value['ThucHien'],0,$value['SLMoiNgay'],$value['SoNgay'],$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],($value['ThanhTienCungChiTra']*$value['SLMoiNgay'])*$value['SoNgay'],$value['PhuThuBV'],($value['PhuThuBV']*$value['SLMoiNgay'])*$value['SoNgay'],$value['ThanhTienBaoHiem'],$_SESSION['user']['id_user'],'',$_SERVER['REMOTE_ADDR'],$value['IsBHYT'],array(&$check_con_25, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
						//print_r($params4);
						 $data->query( $store_name4, $params4);	
						 
					}else if($value['IDNhomCLS']==26){
						unset($params6);
						if($value['PhiThucHien']==''){
							$value['PhiThucHien']=NULL;
						}
						if($value['ThanhTien']==''){
							$value['ThanhTien']=NULL;
						}
						if($value['GiaThueNgoaiThucHien']==''){
							$value['GiaThueNgoaiThucHien']=NULL;
						}
						$store_name6="{call GD2_DieuTriPhoiHop_Insert_New (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,? ,?)}";//tao bien khai bao store
						$params6 = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['NguoiChiDinh'],$value['PhiThucHien'],$value['ThanhTien'],$value['MaBenhNhan'],$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['SLMoiNgay'],$value['SoNgay'],$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],($value['ThanhTienCungChiTra']*$value['SLMoiNgay'])*$value['SoNgay'],$value['PhuThuBV'],($value['PhuThuBV']*$value['SLMoiNgay'])*$value['SoNgay'],$value['ThanhTienBaoHiem'],$_SESSION['user']['id_user'],NULL,$_SERVER['REMOTE_ADDR'],$value['IsBHYT'],array(&$check_con_26, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
						$data->query( $store_name6, $params6);
						//print_r($params6); 
					}
				}else if($value['IDNhomCLS']==23){	
					unset($params);
					if($value['PhiThucHien']==''){
						$value['PhiThucHien']=NULL;
					}
					if($value['ThanhTien']==''){
						$value['ThanhTien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					$store_name7="{call GD2_DTPH_Kham_Insert_New (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?)}";//tao bien khai bao store
					$params7 = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],NULL,$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],"PhauThuat",$value['MaBenhNhan'],NULL,$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],$value['ThanhTienCungChiTra'],$value['PhuThuBV'],$value['PhuThuBV'],$value['ThanhTienBaoHiem'],$_SESSION['user']['id_user'],$value['Code'],$_SERVER['REMOTE_ADDR'],$value['IsBHYT'],array(&$check7, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
					$data->query( $store_name7, $params7);
				
				}else if($value['IDNhomCLS']==52){	
					unset($params);
					if($value['PhiThucHien']==''){
						$value['PhiThucHien']=NULL;
					}
					if($value['ThanhTien']==''){
						$value['ThanhTien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					$store_name8="{call GD2_DTPH_Kham_Insert_New (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?)}";//tao bien khai bao store
					$params8 = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],NULL,$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],"KHHGD",$value['MaBenhNhan'],NULL,$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],$value['ThanhTienCungChiTra'],$value['PhuThuBV'],$value['PhuThuBV'],$value['ThanhTienBaoHiem'],$_SESSION['user']['id_user'],$value['Code'],$_SERVER['REMOTE_ADDR'],$value['IsBHYT'],array(&$check8, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
					$data->query( $store_name8, $params8);
				}else{
					unset($params);
					if($value['PhiThucHien']==''){
						$value['PhiThucHien']=NULL;
					}
					if($value['ThanhTien']==''){
						$value['ThanhTien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					$store_name="{call GD2_DTPH_Kham_Insert_New (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?)}";//tao bien khai bao store
					$params = array($value['IDLuotKham'],$value['IDLoaiKham'],$value['IDPhongChuyenMon'],$value['NguoiChiDinh'],$value['TrangThai'],$value['PhiThucHien'],$value['ThanhTien'],NULL,$value['ThucHien'],$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],NULL,$value['MaBenhNhan'],NULL,$value['DonGiaBHYT'],$value['PhanTramCungChiTra'],$value['ThanhTienCungChiTra'],$value['PhuThuBV'],$value['PhuThuBV'],$value['ThanhTienBaoHiem'],$_SESSION['user']['id_user'],$value['Code'],$_SERVER['REMOTE_ADDR'],$value['IsBHYT'],array(&$check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
					$data->query( $store_name, $params);
					//print_r($params);
				}
		   }// end else if($value['Luu']!=1){
		}
		echo "id;".$check1; 
	   } 
}
?>