<?php
	$data= new SQLServer;
	$soluong=0;
	$SL_Ton='';
	$TT_Ton='';
	$kiemtra=0;
	$sluong=0;
	//print_r($tam);
	$date_curr = date('Y-m-d h:i:s');
		$tinhton="{call GD2_TINHTONTUCTHOI(?,?,?,?,?)}";
		$tinhton1 = array ($date_curr,
						   $_GET['id_kho'],
						   $_GET['id_thuoc'],							  
						   array($SL_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),
						   array($TT_Ton, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
						  );
		//print_r($tinhton1);
		$tinhton_tam=$data->query( $tinhton, $tinhton1);
		$soluong=$SL_Ton;
			if($soluong>=$_GET['soluong']){
				$kiemtra=1;		
			}	
	$mangtrave=";;".$soluong.';;'.$kiemtra;
	echo($mangtrave);
?>
