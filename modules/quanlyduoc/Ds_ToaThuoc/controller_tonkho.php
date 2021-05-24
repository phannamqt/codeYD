<?php
	$data= new SQLServer;
	$xml='';
	$id_kho=0;
	$flag=0;
	$danhsach='<table border=1 cellspacing="0" cellpadding="0" ><tr><th>Tên thuốc</th><th>Số lượng cần xuất</th><th>Số lượng tồn kho</th></tr>';
	$kho=explode( ',', $_GET['kho'] ) ;
	$khobhyt=explode( ',', $_GET['khobhyt'] ) ;

	$xml='<DsThuoc>';
	
	$store_name_dst="{call MED_GetDonThuocChiTiet (?)}"; 
	$params_dst = array($_POST['id_donthuoc']); 
	$get_dst=$data->query( $store_name_dst, $params_dst);
	$excute_dst= new SQLServerResult($get_dst);
	$tam_dst= $excute_dst->get_as_array();

	foreach ($tam_dst as $row) {
		
		$id_kho=($row['IsBhyt'])==1?($khobhyt[0]):($kho[0]); 
		$xml.='<Thuoc><ID_Thuoc>'.$row['ID_Thuoc'].'</ID_Thuoc><SoLuongCanXuat>'.(int)$row['SoThuocThucXuat'].'</SoLuongCanXuat><ID_Kho>'.$id_kho.'</ID_Kho></Thuoc>';
		 
	}
	$xml.='</DsThuoc>';
 
	$store_name5="{call MED_KiemTraTonKhoByXML (?)}";
	$params5 = array($xml);	
	//print_r($params5);
	$get=$data->query( $store_name5, $params5);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	if(count($tam)>0){
		foreach ($tam as $row) {
			$danhsach.='<tr><td>'.$row['TenGoc'].'</td><td>'.$row['SoLuongCanXuat'].'</td><td>'.$row['SoLuongTonKho'].'</td></tr>';
		}
		$danhsach.='</table>';
		$flag=1;
	}else{
		$flag=0;
	}
	echo($danhsach.'||'.$flag);
?>