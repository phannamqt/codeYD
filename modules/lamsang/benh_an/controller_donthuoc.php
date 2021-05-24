<?php
if(isset($_POST['isbhyt'])){
	$_POST['isbhyt']=$_POST['isbhyt'];
}else{
	$_POST['isbhyt']=0;
}
$data= new SQLServer;	
	if($_POST['isbhyt']=='Yes'){
		$_POST['isbhyt']=1;
	}else if($_POST['isbhyt']=='No'){
		$_POST['isbhyt']=0;
	}
	$check2='';	
	$check1='';
	$checktoatam='';
	if(isset($_GET['oper'])){
		$oper='del';
	}else{
		if(isset($_POST['extraparam'])){
			$oper='add';
		}else{
			if($_POST['oper']=='add'){
				$oper='add';
			}else{
				$oper='edit';
			}
		}
	}
	if(isset($_REQUEST['ID_LuotKham'])){
		$params2 = array($_REQUEST['ID_LuotKham']);
		$store_name2="{call GD2_GetTrangThaiLuotKhamByID_LuotKham(?)}";
		$get2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get2);
		$tam2= $excute2->get_as_array();
		 
		if($tam2[0]['DaThanhToanBill']==1){
			header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
			echo "Lượt khám này đã thanh toán nên không thể kê hoặc chỉnh sửa toa thuốc.";
			exit();
		} 	
	}
	
	
	if(isset($_REQUEST['ID_Thuoc'])){
		if($_REQUEST['ThanhTien']=='')
				$_REQUEST['ThanhTien']=9999999;
		$params2 = array('<DsThuoc><Thuoc><ID_Thuoc>'.$_REQUEST['ID_Thuoc'].'</ID_Thuoc><SoLuongCanXuat>'.$_REQUEST['ThanhTien'].'</SoLuongCanXuat><ID_Kho>2</ID_Kho></Thuoc></DsThuoc>');
		$store_name2="{call MED_KiemTraTonKhoToanVienByXML(?)}";
		$get2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get2);
		$tam2= $excute2->get_as_array();
		 
		if(count($tam2)>0){
			header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
			echo "Thuốc ".$tam2[0]['TenGoc']." hiện tại tồn kho chỉ còn ".$tam2[0]['SoLuongTonKho']." không đủ để kê đơn này.";
			exit();
		} 	
	}
	
	

		
	if($oper=='add'){	
		if($_POST['id_donthuoc']==0)	
		{			
			$params2 = array( 
				$_POST['id_kham'],
				$_POST['ID_LuotKham'],
				$_POST["id_benhnhan"],
				$_SESSION["user"]["id_user"],
				'',
				'',
				2,
				$_POST["khamchinh"],
				'',
				array(&$check2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);		
			$store_name2="{call Gd2_donthuoc_insert(?,?,?,?,?,?,?,?,?,?,?)}";
			$get=$data->query( $store_name2,$params2);
			$Gia=$_POST['Gia'];
			$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);
			$store_name1="{call GD2_donthuocchitiet_benhan_insert_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			$params1 = array ($check2,$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],$_POST['CachDung'],$_POST['ID_DuongDungThuoc'],1,$_POST['lavattu'],$Gia*$_POST['ThanhTien'],$_POST['PhuongThucThucHien'],$_POST['isbhyt'],
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
			$insert=$data->query( $store_name1, $params1);
			echo $check2.'|'.$check1;
		}else{
			$Gia=$_POST['Gia'];
			$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);
			$store_name1="{call GD2_donthuocchitiet_benhan_insert_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			$params1 = array ($_POST['id_donthuoc'],$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],$_POST['CachDung'],$_POST['ID_DuongDungThuoc'],1,$_POST['lavattu'],$Gia*$_POST['ThanhTien'],$_POST['PhuongThucThucHien'],$_POST['isbhyt'],
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));		
			$insert=$data->query( $store_name1, $params1);		
			echo '|'.$check1;
		}
	}elseif($oper=='del'){	
		$store_name1="{call GD2_donthuocchitiet_del_benhan(?,?)}";
		$params1 = array ($_GET['id'],array(&$checktoatam,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
		$insert=$data->query( $store_name1, $params1);
		echo '|'.$checktoatam;
	}elseif($oper=='edit'){
		if(substr($_POST['CachDungLieuDung'],0,50)=='<input role="textbox" style="width: 82%;" name="Ca'){

		}else{
			$Gia=$_POST['Gia'];
			$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);
			$store_name1="{call GD2_donthuocchitiet_upd_benhan_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			$params1 = array ($_POST['iddonthuocct'],$_POST['ID_Thuoc'],$Gia,$SoThuocThucXuat,$_POST['ThanhTien'],$_POST['ThanhTien'],$_POST['id_dvt'],$_POST['CachDungLieuDung'],$_POST['CachDung'],$_POST['ID_DuongDungThuoc'],1,$_POST['lavattu'],$Gia*$_POST['ThanhTien'],$_POST['PhuongThucThucHien'],$_POST['isbhyt']
				,array(&$checktoatam,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)			
				);
			$insert=$data->query( $store_name1, $params1);		
			echo '|'.$checktoatam;
		}
	}
?>