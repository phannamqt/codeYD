<?php
$data= new SQLServer; 
$khoa=CheckUpdate_BhytBhccThanhtoan($_GET['id_ttluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);
if($khoa['Isupdate']==0){
	echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
}else{
	if($_GET['ac']=='bhyt'){
		$params = array($_GET['id_ttluotkham'],
						$_GET['idthe'],
						$_SESSION['user']['id_user'],
						$_SERVER['REMOTE_ADDR']
					);
		$get=$data->query( "{call GD2_BHYT_Apthe(?,?,?,?)}", $params);//Goi store

		$params_TheChinh1 = array(
			$_GET['id_ttluotkham'],
			$_GET["idthe"],
			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR']
		);
		$data->query( "{call GD2_Map_TheBHYT_UpdateTheChinh(?,?,?,?)}", $params_TheChinh1);
	}else if($_GET['ac']=='bhcc'){
		$params = array($_GET['id_ttluotkham'],
						$_GET['idthe'],
						$_SESSION['user']['id_user']
						);
		$get=$data->query( "{call GD2_BHCC_Apthe(?,?,?)}", $params);//Goi store
		if($_GET["idthe"]>0){
			$params_logapthe = array(
							$_GET['id_ttluotkham'],
							$_GET["idthe"],
							$_SESSION['user']['id_user'],
							$_SERVER['REMOTE_ADDR']
							);
			$data->query( "{call GD2_LuotKham_TheBHCC_Insert(?,?,?,?)}", $params_logapthe);//Goi store
		}
	}
	if($get==1){
		$get=1;
	}else{
		$get=0;
	}
	echo json_encode(array('IsLock' => 0, 'Notes' => 'Đã lưu', 'Error'=> $get));
}
?>