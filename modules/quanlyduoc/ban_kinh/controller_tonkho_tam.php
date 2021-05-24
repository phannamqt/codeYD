<?php
	$data= new SQLServer;
	
	//print_r($_POST);
	$dskho="{call GD2_Dm_kho_selectby_dskho(?)}";
	$ds_kho=explode( ',', $_GET['kho'] ) ;
	$paramdskho = array($ds_kho[0]);
	//print_r $ds_kho;
	$ds=$data->query( $dskho, $paramdskho);	
	$excute= new SQLServerResult($ds);
	$tam= $excute->get_as_array();	
	$SL_Ton='';
	$TT_Ton='';
	$chuoi='';
	$kho=0;
	$flag=0;
	$kiemtra=0;
	
	$date = date('Y-m-d H:i:s');
	$tenthuoc='<tr><td></td>';
	$sothuoc='';
	$tong='';
	$tenkho='';
	$tongthuoc=0;
	for($i=0;$i<=count($dskho)-1;$i++){
		$sothuoc=$sothuoc.'<tr>';
		$responce[$i]['kho'] = $dskho[$i];
		$chuoi='';
//
		for($y=0;$y<=count($_POST['rows'])-1;$y++){		
					$SL_Ton='';
					$TT_Ton='';
				$params5 = array(
				$date,//@DenNgay as date,
				$ds_kho[$i],//@ID_KHO as int,
				$_POST['rows'][$y]['id_thuoc'],//@ID_THuoc as int,
				array(&$SL_Ton,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),//@SL_Ton as int out,
				array(&$TT_Ton,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)//@TT_Ton as int out		
				);			
					
				$store_name5="{call GD2_TINHTONTUCTHOI (?,?,?,?,?)}";
				$get_danh_muc_phong_ban=$data->query( $store_name5, $params5);
				if($i==0){
					$_POST["rows"][$y]["soluong"]=0;
				}
				if($y==0){
					
					for($z=0;$z<=count($tam)-1;$z++){	
						if($dskho[$i]==$tam[$z]['ID_Kho']){
							$tenkho=$tam[$z]['TenKho'];
						}
					}
					$sothuoc=$sothuoc.'<td><strong>'.$tenkho.'</strong></td><td align="right">'.convert_comma_dot($SL_Ton).'</td>';
				}else{
					//echo($y);
					$sothuoc=$sothuoc.'<td align="right">'.convert_comma_dot($SL_Ton).'</td>';
				}
				
				
			$_POST["rows"][$y]["soluong"]=$_POST["rows"][$y]["soluong"]+$SL_Ton;			
			if($i==count($dskho)-1){
				$tenthuoc=$tenthuoc.'<td align="center" bgcolor="#FFFFCC"><strong>'.$_POST["rows"][$y]["TenThuoc"].'</strong></td>';
			
				$tong=$tong.'<td  bgcolor="#DBDBDB" align="right"><strong>'.convert_comma_dot($_POST["rows"][$y]["soluong"]).'</strong></td>';
					
			}
			
			if($i==0){
				if($SL_Ton>=$_POST['rows'][$y]['SoThuocThucXuat']){
								print_r($_POST['rows'][$y]['SoThuocThucXuat'].';');		
				}else{
					
					$flag=1;
				}
				
			}
		}
		
		$sothuoc=$sothuoc.'</tr>';
	}
	$tenthuoc=$tenthuoc.'</tr>';
	$tenthuoc='<br> <table  border="1" width="100%" cellpadding="0" cellspacing="0" >'.$tenthuoc.''.$sothuoc.'<tr><td   bgcolor="#DBDBDB">Tổng</td>'.$tong.'</tr></table><br>';
	//$responce['kiemtra']= $flag;
	//print_r($_POST["thuoc"]);
	echo($tenthuoc.'||'.$flag);
	//echo json_encode($responce);
?>

