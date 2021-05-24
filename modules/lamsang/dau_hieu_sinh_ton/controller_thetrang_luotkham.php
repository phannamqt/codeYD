<?php
switch ($_REQUEST["oper"]) {
    case "add":
        add("GD2_TheTrang_Insert");
        break;
    case "edit":
        edit("GD2_TheTrang_Update");
        break;
    case "del":
        delete("GD2_TheTrang_Delete");
        break;
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	$id_return="";
	unset($_POST["oper"]);
	unset($_POST["id"]);
	$_POST["NgayGioDo"]= convert_date($_POST["NgayGioDo"]);	 
	$_POST["ChieuCao"]=round($_POST["ChieuCao"]);
	$_POST["VongNguc"]=round($_POST["VongNguc"]);
	
	//print_r($_POST);
	foreach($_POST as $key => $value) {	
		
			$tam=explode('.',$value);
			if(count($tam)>1){
				if($value==''){
					$bien[]= 0;
				}else{
					$bien[]= $value;
				}
			}else{
				if($value==''){
					$bien[]= 0;
				}else{
					$bien[]= convert_comma_dot($value);	
				}
			}
			  $i++;			  
			  if(count($_POST)==$i){
				$bien[]=array($_SESSION["user"]["id_user"]);
				$bien[]=array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
				$chuoi.="?";		
			  }elseif(count($_POST)>$i){
				$chuoi.="?,";  
			  }	
		
	}	
	$chuoi.=",?,?)";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
function edit($store_name){
    $check1="";
	$chuoi="(";
	$i=0;
	$id_return="";
	unset($_POST["oper"]);
	unset($_POST["ID_LuotKham"]);
	unset($_POST["ID_BenhNhan"]);
	$_POST["NgayGioDo"]= convert_date($_POST["NgayGioDo"]);	 
	$_POST["ChieuCao"]=round($_POST["ChieuCao"]);
	$_POST["VongNguc"]=round($_POST["VongNguc"]);
	foreach($_POST as $key => $value) {	
		
			  $tam=explode('.',$value);
				if(count($tam)>1){
					if($value==''){
						$bien[]= 0;
					}else{
						$bien[]= $value;
					}
				}else{
					if($value==''){
						$bien[]= 0;
					}else{
						$bien[]= convert_comma_dot($value);	
					}
				}		
			  $i++;			  
			  if(count($_POST)==$i){
				$bien[]=array($_SESSION["user"]["id_user"]);				 
				$chuoi.="?";		
			  }elseif(count($_POST)>$i){
				$chuoi.="?,";  
			  }	
	}	
	$chuoi.=",?)";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
}
function delete($store_name){
	//$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"]),
				 array($_SESSION["user"]["id_user"]),
            
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
 
}
?>

