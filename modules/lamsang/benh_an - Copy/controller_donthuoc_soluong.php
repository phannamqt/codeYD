<?php
	$data= new SQLServer;
		
	$dskho="{call GD2_Dm_kho_selectby_dskho(?)}";
	$ds_kho=explode( ',', $_GET['ds_kho'] ) ;
	$paramdskho = array($ds_kho[0]);
	$ds=$data->query( $dskho, $paramdskho);	
	$excute= new SQLServerResult($ds);
	$tam= $excute->get_as_array();	
	$SL_Ton='';
	$TT_Ton='';
	$chuoi='';
	//print_r($paramdskho);
	$tenthuoc='<tr><td></td>';
	$soluong=0;
	$kiemtra=0;
	$sothuoc='';
	$tenkho='';
	//print_r($tam);
	$date_curr = date('Y-m-d h:i:s');
	for($i=0;$i<=count($ds_kho)-1;$i++){
			$SL_Ton='';
			$tinhton="{call GD2_TINHTONTUCTHOI(?,?,?,?,?)}";
			$tinhton1 = array ($date_curr,
							   $ds_kho[$i],
							   $_GET['id_thuoc'],							  
							   array(&$SL_Ton,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),
							   array(&$TT_Ton,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
							  );
							
			$tinhton_tam=$data->query( $tinhton, $tinhton1);
			
			
					$soluong=$soluong+$SL_Ton;
					for($z=0;$z<=count($tam)-1;$z++){
						//echo($dskho.';');	
						if($ds_kho[$i]==$tam[$z]['ID_Kho']){
							
							$tenkho=$tam[$z]['TenKho'];
						}
					}
					$sothuoc=$sothuoc.'<tr><td><strong>'.$tenkho.'</strong></td><td align="right">'.convert_comma_dot($SL_Ton).'</td></tr>';
			if($i==0){
				//echo($_GET['soluong']);
				if($SL_Ton>=$_GET['soluong']){
					$kiemtra=1;		
				}
				$tenthuoc=$tenthuoc.'<td align="center" id="tenthuocton" bgcolor="#FFFFCC"><strong>'.$_GET['id_thuoc'].'</strong></td></tr>';
			}
		
	}
	
	
	$mangtrave='<strong>Số lượng thuốc trong kho mặc định không đủ</strong><br><table border="1" width="100%">'.$tenthuoc.''.$sothuoc.'<tr><td   bgcolor="#DBDBDB">Tổng</td><td bgcolor="#DBDBDB" align="right"><strong>'.$soluong.'</strong></td></tr></table><strong>Bạn có muốn tiếp tục kê</strong>;;'.$kiemtra;
	echo($mangtrave);
	
?>
