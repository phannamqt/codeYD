<?php
	$data= new SQLServer;	
	$begin_tran=$data->begin_tran();
	$check='';
	$id_xuatkho='';
	$params_new= array(
		$_GET['id_phieu'] 
		,$_SESSION['user']['id_user']
		,$_SERVER['REMOTE_ADDR']
		,array(&$check, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
		,array(&$id_xuatkho, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);	
	$store_name_new="{call MED_ThuocPhieuXuatDieuChuyenInsert (?,?,?,?,?)}";
	$get_new=$data->query( $store_name_new, $params_new);	
	$excute= new SQLServerResult($get_new);
	$tam= $excute->get_as_array();	
	if($check==1){
		$table='<table border=1 cellpadding=0 cellspacing=0 style="width: 100%">';
		$table.="<th>Tên thuốc</th><th>Số lô NSX</th><th>Tồn kho hiện tại</th><th>Số lượng cần xuất</th><th>Số lượng còn thiếu</th>";
	foreach ($tam as $row) {
		$row['SoLuongTon']=(float)$row['SoLuongTon'];
		$row['SoLuong']=(float)$row['SoLuong'];
		$soluongthieu = (float)$row['SoLuong']-(float)$row['SoLuongTon'];
		$table.="<tr>";	
		$table.="<td align='right' style='padding-right:3px;'>$row[TenGoc]</td>";
		$table.="<td align='right' style='padding-right:3px;'>$row[SoLoNhaSanXuat]</td>";
		$table.="<td align='right' style='padding-right:3px;'>$row[SoLuongTon]</td>";
		$table.="<td align='right' style='padding-right:3px;'>$row[SoLuong]</td>";
		$table.="<td align='right' style='padding-right:3px;'>$soluongthieu</td>";
		$table.="</tr>";
	}
	$table.='</table>';
		echo json_encode(array('check'=>1,'oke' => $table));
	}else{
		echo json_encode(array('check'=>0,'oke' => $id_xuatkho));
	}
	$data->commit();
?>