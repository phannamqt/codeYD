<?php
	$check="";
	//print_r($_POST);		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Ma_Thuoc_Check (?,?)}";
	$params = array(array($_POST["MaThuoc"]),
			  		array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));//tao param cho store 
	$get_mathuoc=$data->query( $store_name, $params);//Goi store	
	
	$excute= new SQLServerResult($get_mathuoc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();
	$i=0;
	if($check==1){
	echo 1;	
	}
	elseif($check==0){
		foreach ($tam as $v) {//duyet toan bo mang tra ve
		echo $v[0].";".$v[1].";".$v[2].";".$v[3];
		
			$i++;	
	} 
		
	}

?>

