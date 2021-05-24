<?php
$data= new SQLServer; 
$khoa=CheckUpdate_BhytBhccThanhtoan($_GET['id_ttluotkham'],NULL,NULL,NULL,$_SESSION["user"]["id_user"]);
if($khoa['Isupdate']==0){
	echo json_encode(array('IsLock' => 1, 'Notes' => $khoa['Chuoi'], 'Error'=> 0));
}else{
	if($_GET['ac']=='bhyt_thephu'){
		$params = array(
			$_GET['id_ttluotkham'],
			$_GET['idthe_phu'],
			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR']
		);
		$get=$data->query( "{call GD2_BHYT_ApThePhu(?,?,?,?)}", $params);//Goi store
	}else if($_GET['ac']=='bhyt_huychon_thephu'){
		$params = array(
			$_GET['id_ttluotkham'],
			$_GET['idthe_phu'],
			$_SESSION['user']['id_user'],
			$_SERVER['REMOTE_ADDR']
		);
		$get=$data->query( "{call GD2_Map_TheBHYT_ThePhu_Delete(?,?,?,?)}", $params);//Goi store
	}
	if($get==1){
		$get=1;
	}else{
		$get=0;
	}
	echo json_encode(array('IsLock' => 0, 'Notes' => 'Đã lưu', 'Error'=> $get));
}
?>