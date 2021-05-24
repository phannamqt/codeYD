<?php
switch ($_GET["oper"]) {
    case "chonthe_bp_bhyt":
        chonthe_bp_bhyt("");
        break;
}	 		 
function chonthe_bp_bhyt(){
	$data= new SQLServer;
	$store_name="{call GD2_ThongTinLuotKham_Update_TheBHYT_BPBHYT (?,?,?,?)}";

	$params=array(
		$_POST['id_luotkham'],
		$_POST['id_the'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	);
	$data->query( $store_name, $params);
	echo json_encode(array('status' => 'success'));

}
?>

