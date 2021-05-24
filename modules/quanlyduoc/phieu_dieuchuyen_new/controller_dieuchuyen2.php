<?php

$loi='';
if($_GET['id_phieuxuatnoibo']=='undefined'){
	$id_phieuxuatnoibo='';
}else{
	$id_phieuxuatnoibo=$_GET['id_phieuxuatnoibo'];
}

$data= new SQLServer;//tao lop ket noi SQL
$begin_tran=$data->begin_tran();

if($_GET['xoa']){
	$_xoa=$_GET['xoa'];
	$_del=explode(",",$_xoa);
	$_dem=count($_del);
	for($ii=0;$ii<$_dem;$ii++){
		if($_del[$ii]>0){
			$params_del = array ($_del[$ii],$_SESSION["user"]["id_user"]);
			$store_name_del="{call GD2_PhieuXuatNoiBo_ChiTiet_Delete(?,?)}";
			$del=$data->query( $store_name_del, $params_del);
		}
	}
}

if(isset($_POST['id'])){
	if(count($_POST['id'])>0 && $id_phieuxuatnoibo==''){
		$params4 = array($_GET["nguoigiaodich"],NULL,2,$_GET["tukho"],$_GET["denkho"],'',$_SESSION["user"]["id_user"],array($id_phieuxuatnoibo, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
		//print_r ($params4);
		$store_name4="{call Gd2_PhieuXuatNoiBo_Insert_New (?,?,?,?,?,?,?,?)}";
		$get_id_phieuxuatnoibo=$data->query( $store_name4, $params4);
		if( !$get_id_phieuxuatnoibo ){		
			$data->rollback();
			$loi=1;
			return;
		}
		echo ";;".$id_phieuxuatnoibo.";;";
	}
	$error='';
	foreach ($_POST['id'] as $key => $value) {
		if($value['ID_Thuoc']!='' && $value['Luu']!=1){
			$params5 = array($id_phieuxuatnoibo,
				$value['ID_Thuoc'],
				convert_comma_dot_insert($value['SoLuong']),
				$_SESSION["user"]["id_user"],
				array($error, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
			//print_r($params5);
			$store_name5="{call GD2_PhieuXuatNoiBo_ChiTiet_Insert (?,?,?,?,?)}";	 
			$get_phieuxuatnoibochitiet=$data->query( $store_name5, $params5);	
			if( !$get_phieuxuatnoibochitiet ){		 	
				$data->rollback();
				$loi=1;
				return;
			}
		}else if($value['ID_Thuoc']!=''){
			// edit thuoc
			
		}
	}
	if($loi!=1 && $_GET['id_phieuxuatnoibo']!=''){
		$params5 = array($_GET['id_phieuxuatnoibo'],$_GET["tukho"],$_GET["denkho"],$_GET['nguoigiaodich'],$_SESSION["user"]["id_user"]);
		//print_r ($params4);
		$store_name5="{call Gd2_PhieuXuatNoiBo_DieuChuyen_Update (?,?,?,?,?)}";
		$phieuxuatnoibo=$data->query( $store_name5, $params5);
		if( !$phieuxuatnoibo ){		
			$data->rollback();
			return;
		}
		echo ";;".$id_phieuxuatnoibo.";;";	
	}
}
$data->commit();
return;
?>