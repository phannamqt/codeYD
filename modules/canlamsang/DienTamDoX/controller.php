<?php
if(($_POST["ExtField1"]=="")||($_POST["ExtField1"]=="ECG NEW")){$_POST["ExtField1"]="ECG_NEW";};
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_Update_NguoiThucHien_Form_DienTamDo_New");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_Form_DienTamDo");
        break;
    case "hoantat":
        hoantat("GD2_Kham_Update_BSChanDoan_Form_DienTamDo");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_Form_DienTamDo");
        break;  
	  case "luudangkham":
        luudangkham("GD2_Kham_Update_Form_DienTamDo");
        break;     
}	 		 
function luudangkham($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
        //unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	//foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		/*if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}*/
	 
	//$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';			 
        	$bien2=  array(($_POST["id_kham"]),($_POST["nguoithuchien"]),($_POST["chuandoan1"]),($_POST["ExtField1"]),($_POST["ketluan"]),($_SESSION["user"]["id_user"]),array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),0,$_POST["songayluukq"]);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	if($check1==0){
			
			if($_POST["id_15"]=='')
				{
					
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
					
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				
				}
				
			if($_POST["id_16"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				
				}
				
			if($_POST["id_17"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_18"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_19"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
		
			if($_POST["id_20"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}	
	
	}
	else echo(1);

}

function dathuchien($store_name){	
//print_r($_POST);
      
		$check1="";
        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
		
       // print_r($_POST);	    
		$bien2=  array(($_POST["id_kham"]),
				($_POST["nguoithuchien"]),
				($_POST["ExtField1"]),
				($_POST["ChiSo15"]),
				($_POST["ChiSo16"]),
				($_POST["ChiSo17"]),
				($_POST["ChiSo18"]),
				($_POST["ChiSo19"]),
				($_POST["ChiSo20"]),
				($_POST["mota_e_15"]),
				($_POST["mota_v_15"]),
				($_POST["mota_e_16"]),
				($_POST["mota_v_16"]),
				($_POST["mota_e_17"]),
				($_POST["mota_v_17"]),
				($_POST["mota_e_18"]),
				($_POST["mota_v_18"]),
				($_POST["mota_e_19"]),
				($_POST["mota_v_19"]),
				($_POST["mota_e_20"]),
				($_POST["mota_v_20"]),
				($_POST["ketluan"]),
				($_SESSION["user"]["id_user"]),
				($_POST["id_15"]),
				($_POST["id_16"]),
				($_POST["id_17"]),
				($_POST["id_18"]),
				($_POST["id_19"]),
				($_POST["id_20"]),
				$_POST["songayluukq"],
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
 	//print_r($bien2);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	//print_r($store_name);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if($check1==0){
			
			if($_POST["id_15"]=='')
				{
					
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_16"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_17"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_18"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_19"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
		
			if($_POST["id_20"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}	
	
	}
	else echo(1);

	
}
function luuthuchien($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
        //unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	//foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		/*if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}*/
	 
	//$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';			 
        	$bien2=  array(($_POST["id_kham"]),($_POST["nguoithuchien"]),($_POST["chuandoan1"]),($_POST["ExtField1"]),($_POST["ketluan"]),($_SESSION["user"]["id_user"]),array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),($_SESSION["user"]["id_user"]),$_POST["songayluukq"]);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	if($check1==0){
			
			if($_POST["id_15"]=='')
				{
					
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_16"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_17"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_18"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_19"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
		
			if($_POST["id_20"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}	
	
	}
	else echo(1);

	
}

function hoantat($store_name){
	$check1="";
        $chuoi2='(?,?,?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
		
       // print_r($_POST);	   
		$bien2=  array(($_POST["id_kham"]),
				($_POST["nguoithuchien"]),
				($_POST["chuandoan1"]),
				($_POST["ExtField1"]),
				($_POST["ketluan"]),
				($_SESSION["user"]["id_user"]),
				($_POST["control"]),
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);
 	//print_r($bien2);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	//print_r($store_name);
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	if($check1==0){
			
			if($_POST["id_15"]=='')
				{
					
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_16"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_17"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_18"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_19"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
		
			if($_POST["id_20"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}	
	
	}
	else echo(1);

}

function luuhoantat($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
        //unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	//foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		/*if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}*/
	 
	//$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';			
        	$bien2=  array(($_POST["id_kham"]),($_POST["nguoithuchien"]),($_POST["chuandoan1"]),($_POST["ExtField1"]),($_POST["ketluan"]),($_SESSION["user"]["id_user"]),array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT),($_SESSION["user"]["id_user"]),$_POST["songayluukq"]);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	if($check1==0){
			
			if($_POST["id_15"]=='')
				{
					
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							15,
							($_POST["ChiSo15"]),
							($_POST["mota_e_15"]),
							($_POST["mota_v_15"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_16"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							16,
							($_POST["ChiSo16"]),
							($_POST["mota_e_16"]),
							($_POST["mota_v_16"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_17"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							17,
							($_POST["ChiSo17"]),
							($_POST["mota_e_17"]),
							($_POST["mota_v_17"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_18"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							18,
							($_POST["ChiSo18"]),
							($_POST["mota_e_18"]),
							($_POST["mota_v_18"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
				
			if($_POST["id_19"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							19,
							($_POST["ChiSo19"]),
							($_POST["mota_e_19"]),
							($_POST["mota_v_19"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
		
			if($_POST["id_20"]=='')
				{
				$store_name="{call GD2_KQCLS_Insert (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}
			else
				{
						$store_name="{call GD2_KQCLS_Update (?,?,?,?,?,?)}";//tao bien khai bao store
					$params =  array(
							($_POST["id_kham"]),
							20,
							($_POST["ChiSo20"]),
							($_POST["mota_e_20"]),
							($_POST["mota_v_20"]),
							($_SESSION["user"]["id_user"]),
							);				
					$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
				}	
	
	}
	else echo($check1);
	
}
?>

