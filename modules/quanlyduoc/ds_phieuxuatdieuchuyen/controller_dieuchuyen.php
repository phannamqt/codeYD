<?php
	checkUdateNew(
		'GD2_QuanLy_40',
		array (
			'ID_PhieuXuatNoiBo'=>$_REQUEST['idxuatnoibo']		
		),
		1
	);
	$data= new SQLServer;	
	$begin_tran=$data->begin_tran();
	$check='';
	$id_xuatkho='';
	$params_new= array(
		"<data><column>ID_PhieuXuatNoiBo</column><value>".$_GET['idxuatnoibo']."</value></data>"
		,$_SERVER['REMOTE_ADDR']
		,NULL
		,$_SESSION['user']['id_user']
		,array($check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		,array($id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);	
	$chuoi= TaoChuoiStore($params_new);
	$store_name_new="{call GD2_Thuoc_QuanLyXuat $chuoi}";
	$get_new=$data->query( $store_name_new, $params_new);	
	$excute= new SQLServerResult($get_new);
	$tam= $excute->get_as_array();	
	if($check==1){
		$table='<table border=1 cellpadding=0 cellspacing=0 style="width:100%">';
		$table.="<th>Tên thuốc</th><th>Tồn hiện tại</th><th>Số lượng xuất</th><th>Số lượng thiếu</th>";
	foreach ($tam as $row) {
		$soluongthieu = $row['SoThuocDeNghiTheoDon']-$row['SoLuongConLai'];
		$table.="<tr>";	
		$table.="<td align='right'>$row[TenGoc]</td>";
		$table.="<td align='right'>$row[SoLuongConLai]</td>";
		$table.="<td align='right'>$row[SoThuocDeNghiTheoDon]</td>";
		$table.="<td align='right'>$soluongthieu</td>";
		$table.="</tr>";
	}
	$table.='</table>';
		echo json_encode(array('check'=>1,'oke' => $table));
	}else{
		echo json_encode(array('check'=>0,'oke' => $id_xuatkho));
	}	
	$data->commit();
?>