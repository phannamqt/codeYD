<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_ThongTinLuotKham_UpdateID_TrangThai");
        break;
    
}	 		 
 
function dathuchien($store_name){
	//$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_ThongTinLuotKham_UpdateID_TrangThai (?,?,?)}";//tao bien khai bao store
	$params = array( 
	 			 $_GET["idluotkham"],
                 "DangCho",
				 $_SESSION["user"]["id_user"],           
               );			   
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	$store_name1="{call Gd2_DauHieuSinhTon_Update_TrangThai_ById_luotkham(?,?,?)}";//tao bien khai bao store
	$params1 = array( 
	 			 $_GET["idluotkham"],
                 "Xong",
				 $_SESSION["user"]["id_user"],           
               );			   
	$tam=$data->query( $store_name1, $params1);//Goi store	 
}
?>

