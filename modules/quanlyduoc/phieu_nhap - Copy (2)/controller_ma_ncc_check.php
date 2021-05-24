<?php	
	//print_r($_POST);	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DM_nhacungcap_check (?)}";
	$params = array(array( $_GET["MaNcc"]));//tao param cho store 
	$get=$data->query( $store_name, $params);//Goi store	
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();
	$i=0;
	$dem = count($tam);
	if($dem==0){
	echo 1;	
	}
	elseif($dem==1){
		foreach ($tam as $v) {//duyet toan bo mang tra ve
		echo $v[0].";".$v[1].";".$v[2];		
			$i++;	
	} 		
	}

?>

