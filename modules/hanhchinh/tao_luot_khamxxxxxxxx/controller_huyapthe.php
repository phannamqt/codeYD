<?php
$data= new SQLServer;
$get=0;
$khoa=CheckUpdate_BhccThanhtoanDichvucaocap($_GET['id_ttluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);

if($khoa['Isupdate']==0){
	echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
}else{
	if($_GET['ac']=='bhyt'){
	}elseif($_GET['ac']=='bhcc'){
		$params = array($_GET['id_ttluotkham'],
			$_SESSION['user']['id_user']
			);
		$get=$data->query( "{call GD2_BHCC_HuyApThe(?,?)}", $params);
		$params_2 = array($_GET['id_ttluotkham'],
			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR']
			);
		$data->query( "{call GD2_LuotKham_TheBHCC_HuyAp(?,?,?)}", $params_2);
	}
	echo json_encode(array('IsLock' => 0, 'Notes' => 'Đã lưu', 'Error'=> 0));
}
?>