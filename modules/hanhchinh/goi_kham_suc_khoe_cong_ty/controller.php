<?php

//print_r($_POST);

if($_GET['ac']=="taoluotkhamtudong"){
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	if(isset($_POST['id'])){ 
	$stt=0;
	foreach ($_POST['id'] as $key => $value) {
		$stt+=1;
		if($value['TaoLuotKham']==0){
			$store_name="{call GD2_KhanSKCongTy_TaoLuotKhamTuDong (?,?,?,?)}";//tao bien khai bao store
			$params = array($value['ID_benhNhan'],$value['ID_GoiKhamCongTy'],$_SESSION["user"]["id_user"],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
			$get=$data->query( $store_name, $params);
		}

	}
	echo "id;".$check1;
	}
}

if($_GET['ac']=="luu"){
	if(isset($_POST['id'])){ 
		$data= new SQLServer;//tao lop ket noi SQL
		$check1='';
		$stt=0;
		foreach ($_POST['id'] as $key => $value) {
			$stt++;
			if($value['TrangThai']=="HuyBo"){
					if($value['Huy']==1){
					unset($params1);
					$store_name1="{call GD2_DM_KhamUpdateTrangThaiHuyBo (?,?,?,?,?,?,?,?)}";//tao bien khai bao store
					$params1 = array($value['ID_Kham'],$value['TrangThai'],$value['PhiThucHien'],$value['PhiThucHien'],0,0,$value['LyDoHuyBo'],$_SESSION['user']['id_user'] );
					$get1=$data->query( $store_name1, $params1);
					//print_r($params1);
					}
				}elseif($value['Luu']!=1){
					unset($params);
					if($value['ThoiGianTrungBinhThucHien']==''){
						$value['ThoiGianTrungBinhThucHien']=NULL;
					}
					if($value['GiaThueNgoaiThucHien']==''){
						$value['GiaThueNgoaiThucHien']=NULL;
					}

					$store_name="{call GD2_KSK_DM_Kham_Insert (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?)}";//tao bien khai bao store
					$params = array($value['ID_LuotKham'],$value['ID_LoaiKham'],'',$_SESSION['user']['id_user'],'',$value['PhiThucHien'],$value['PhiThucHien'],$stt,$value['MaBenhNhan'],0,$value['GiaThueNgoaiThucHien'],$value['ThoiGianTrungBinhThucHien'],"",0,0,0,0,1,$_SESSION['user']['id_user'],array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) );
					$get=$data->query( $store_name, $params);
					//print_r($params);
				}
		}
	}
}
if($_GET['ac']=="chidinhgoikhamhangloat"){
$data= new SQLServer;
$chuoi = substr($_GET['id_luotkhamP'],0,-1);
$chuoi = explode(';', $chuoi);
foreach ($chuoi as $value) {
	// $value = $value.';';
	$store_name="{call GD2_ChiDinhGoiKhamKSKByIDLuotKham (?,?,?)}";
	$params = array($value,$_GET["id_goikham_congty"],$_SESSION["user"]["id_user"]);
	// print_
	$get=$data->query( $store_name, $params);
}

}


?>