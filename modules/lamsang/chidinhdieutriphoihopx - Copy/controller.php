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
			
			if(isset($value['Code'])){
				$value['Code']=$value['Code'];
			}else{
				$value['Code']=NULL;	
			}
			
			if($value['TrangThai']=="HuyBo"){

					unset($params1);
					$store_name1="{call GD2_KhamHuyBo_New (?,?,?)}";//tao bien khai bao store
					$params1 = array($value['IDKham'],$value['LyDoHuyBo'],$_SESSION['user']['id_user'] );
					$data->query( $store_name1, $params1);
			}else if($value['Luu']==1){
					unset($params2);
					$store_name2="{call GD2_Kham_DTPH_Up(?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,? ,?)}";
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
									,$value['SLMoiNgay']
									,$value['SoNgay']
									,$value['Code']
									,$_SERVER['REMOTE_ADDR']
									,$_SESSION['user']['id_user']
					 				);
					$data->query( $store_name2, $params2);
		
			}else if($value['Luu']!=1){
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
					$store_name="{call GD2_Kham_DTPH_Ins (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store
					$params = array(
						$value['IDLuotKham']
						,$value['IDLoaiKham']
						,$value['IDPhongChuyenMon']
						,$value['NguoiChiDinh']
						,$value['TrangThai']
						,$value['PhiThucHien']
						,$value['ThanhTien']
						,NULL
						,$value['ThucHien']
						,$value['GiaThueNgoaiThucHien']
						,$value['ThoiGianTrungBinhThucHien']
						,NULL
						,$value['MaBenhNhan']
						,NULL
						,$value['DonGiaBHYT']
						,$value['PhanTramCungChiTra']
						,$value['ThanhTienCungChiTra']
						,$value['PhuThuBV']
						,$value['PhuThuBV']
						,$value['ThanhTienBaoHiem']
						,$_SESSION['user']['id_user']
						,$value['SLMoiNgay']
						,$value['SoNgay']
						,$value['Code']
						,$_SERVER['REMOTE_ADDR']
						,$value['IsBHYT']
						,array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) 
					);
					$data->query( $store_name, $params);
					//print_r($params);
		   }// end else if($value['Luu']!=1){
		}
		echo "id;".$check1; 
	   } 
}
?>