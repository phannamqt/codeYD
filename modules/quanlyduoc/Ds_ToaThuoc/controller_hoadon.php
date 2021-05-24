<?php
switch ($_GET["oper"]) {
    case "update":
        update();
        break;
   
}	 		 

function update(){	
	$data= new SQLServer;
	$store_name="{call GD2_DSTT_DonThuocCT_update (?,?,?,?)}";
	for($i=0;$i<=count($_POST['rows'])-1;$i++){
		unset($params);
		$params = array($_POST['rows'][$i]['id'],
						$_POST['rows'][$i]['slbnyc'],
						$_POST['rows'][$i]['tttycbn'],
					    $_SESSION["user"]["id_user"],					
		);
		//print_r($params);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	}
	//$params = $bien;
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);
	//print_r($_POST)	 ;
}
?>

