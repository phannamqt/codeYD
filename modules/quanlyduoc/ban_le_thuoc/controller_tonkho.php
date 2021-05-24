<?php
	$data= new SQLServer;
	$xml='';
	$id_kho=0;
	$flag=0;
	$danhsach='<table border=1 cellspacing="0" cellpadding="0" ><tr><th>Tên thuốc</th><th>Số lượng cần xuất</th><th>Số lượng tồn kho</th></tr>';
	$kho=explode( ',', $_GET['kho'] ) ;
	$khobhyt=explode( ',', $_GET['khobhyt'] ) ;

	$xml='<DsThuoc>';
	for($i=0;$i<count($_POST['rows']);$i++){
		
		$id_kho=($_POST['rows'][$i]['bhyt'])==1?($khobhyt[0]):($kho[0]);
		//echo($id_kho).'-'.$_POST['rows'][$i]['bhyt'].'.<br>';
		$xml.='<Thuoc><ID_Thuoc>'.$_POST['rows'][$i]['id_thuoc'].'</ID_Thuoc><SoLuongCanXuat>'.$_POST['rows'][$i]['soluong'].'</SoLuongCanXuat><ID_Kho>'.$id_kho.'</ID_Kho></Thuoc>';
		 
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