<?php	
	 $khoa=Check_update($_GET['id_luotkham'],0,0,0,0,$_SESSION["user"]["id_user"],0,0,4);
	 if($khoa['Isupdate']==0){
		echo $khoa['Chuoi'];
	}else{
		$data= new SQLServer;		
		$store_name="{call GD2_del_luotkham(?,?,?)}";	
		$params    = array ($_GET['id_luotkham'],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR']);
		$upd=$data->query( $store_name, $params);
	}	
	 
?>