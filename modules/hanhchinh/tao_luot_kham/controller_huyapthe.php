<?php
$data= new SQLServer;
$get=0;
$khoa=CheckUpdate_BhytBhccThanhtoan($_GET['id_ttluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);
//print_r($khoa);
if($khoa['Isupdate']==0){
	echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
}else{
	if($_GET['ac']=='bhyt'){
		/*$params = array($_GET['id_ttluotkham'],
						$_GET['idthe'],
						$_SESSION['user']['id_user']
					);
		$get=$data->query( "{call GD2_BHYT_Apthe(?,?,?)}", $params);//Goi store*/
	}elseif($_GET['ac']=='bhcc'){
		$params = array($_GET['id_ttluotkham'],
						$_SESSION['user']['id_user']
						);
		$get=$data->query( "{call GD2_BHCC_HuyApThe(?,?)}", $params);//Goi store
		$params_2 = array($_GET['id_ttluotkham'],
						$_SESSION['user']['id_user'],
						$_SERVER['REMOTE_ADDR']
						);
		$data->query( "{call GD2_LuotKham_TheBHCC_HuyAp(?,?,?)}", $params_2);//Goi store
	}
	echo json_encode(array('IsLock' => 0, 'Notes' => 'Đã lưu', 'Error'=> 0));
}
?>