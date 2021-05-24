<?php
$_POST["PT_PhuThu"]=100-(float)$_POST["PT_PhuThu"];
switch ($_GET["oper"]) {
    case "add":
        add("GD2_DM_loaidtbhyt_insert");
        break;
    case "edit":
        edit("GD2_DM_loaidtbhyt_update");
        break; 
}	 		 

function add($store_name){	
	$check1='';
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_DM_loaidtbhyt_insert] (?,?,?,?)}";//tao bien khai bao store
	$params = array(($_POST["ma_dt"]),($_POST["ten_dt"]),($_POST["PT_PhuThu"]),$_SESSION["user"]["id_user"]);
			   //print_r($params);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
function edit($store_name){
	$data= new SQLServer;
	$store_name="{call [GD2_DM_loaidtbhyt_update] (?,?,?,?,?)}";
        $bien=  array(($_POST["id"]),($_POST["ma_dt"]),($_POST["ten_dt"]),($_POST["PT_PhuThu"]),$_SESSION["user"]["id_user"]);
	
		//print_r($params);
		$params = $bien;
		//print_r ($params);
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);
} 
?>
 