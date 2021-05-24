<?php 
switch ($_GET["oper"]) {
	case "add":
	add("[MED_PHYSIOTHERAPY_DIARY_Insert]");
	break;
	case "edit":
	edit("MED_PHYSIOTHERAPY_DIARY_Udate");
	break;
     
}	 		 
 
function add($store_name){
	$ngay=explode("/",$_POST["NgayTH"]);
	$_POST["NgayTH"]=$ngay[2].'-'.$ngay[1].'-'.$ngay[0].' '.date("H:i");
	$chuoi1='(?,?,?,?,?,?)';
	$bien1=  array(
		$_POST["id_physio"],
		$_POST["DienBien"],
		$_POST["NguoiTH"],
		$_POST["NgayTH"],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR']
	);
        
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi1}";//tao bien khai bao store
	$params = $bien1;//tao param cho store 
	print_r($params );
	$data->query( $store_name, $params);//Goi store	
}
function edit($store_name){ 
	$chuoi1='(?,?,?,?,?,?)';
	$ngay=explode("/",$_POST["NgayTH"]);
	$_POST["NgayTH"]=$ngay[2].'-'.$ngay[1].'-'.$ngay[0].' '.date("H:i");
	$bien1=  array(
		$_POST["id"],
		$_POST["DienBien"],
		$_POST["NguoiTH"],
		$_POST["NgayTH"],
		$_SESSION['user']['id_user'],
		$_SERVER['REMOTE_ADDR']

	);
        
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi1}";//tao bien khai bao store
	$params = $bien1;//tao param cho store 
	$data->query( $store_name, $params);//Goi store	
 
}
?>

