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
	if($oper=='add'){	

			$Gia=$_POST['Gia'];
			$SoThuocThucXuat=convert_comma_donthuoc($_POST['SoThuocThucXuat']);
			$store_name1="{call GD2_donthuocchitiet_benhan_insert_new(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			$params1 = array (
				(int)$_POST['id_donthuoc'],
				(int)$_POST['ID_Thuoc'],
				$Gia,
				(int)$SoThuocThucXuat,
				(int)$_POST['ThanhTien'],

				(int)$_POST['ThanhTien'],
				(int)$_POST['id_dvt'],
				$_POST['CachDungLieuDung'],
				$_POST['CachDung'],
				(int)$_POST['ID_DuongDungThuoc'],
				1
				,$_POST['lavattu'],
				$Gia*$_POST['ThanhTien'],
				$_POST['PhuongThucThucHien'],
				$_POST['isbhyt'],
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);		
			$insert=$data->query( $store_name1, $params1);
			 
			echo '|'.$check1;

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