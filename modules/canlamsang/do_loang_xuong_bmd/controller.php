<?php
	if($_POST["chiso11"]!='')
            $_POST["chiso11"]=convert_comma_dot($_POST["chiso11"]);
    
	
	if($_POST["chiso12"]!='')
           $_POST["chiso12"]=convert_comma_dot($_POST["chiso12"]);
 
	
	 if($_POST["chiso13"]!='')
           $_POST["chiso13"]=convert_comma_dot($_POST["chiso13"]);
   
	
	 if($_POST["chiso14"]!='')
           $_POST["chiso14"]=convert_comma_dot($_POST["chiso14"]);
   
	
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_Update_NguoiThucHien_Form_DoLoangXuong");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_DoLoangXuong");
        break;
    case "hoantat":
        hoantat("GD2_Kham_Update_BSChanDoan_Form_DoLoangXuong");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_DoLoangXuong");
        break;  
	  case "luudangkham":
        luudangkham("GD2_Kham_Update_DoLoangXuong");
        break;     
}	 		 
function luudangkham($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
        //unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(0,0,($_POST["chiso11"]),($_POST["ketluan11"]),($_POST["chiso13"]),($_POST["ketluan13"]),($_POST["chiso12"]),($_POST["ketluan12"]),($_POST["chiso14"]),($_POST["ketluan14"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,($_SESSION["user"]["id_user"]),($_POST["id_11"]),($_POST["id_12"]),($_POST["id_13"]),($_POST["id_14"]),($_POST["ket_luan"]));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	
}

function dathuchien($store_name){	
	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
       // unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
        $bien2=  array(($_POST["id_kham"]),($_POST["nguoithuchien"]),($_POST["chiso11"]),($_POST["ketluan11"]),($_POST["chiso13"]),($_POST["ketluan13"]),($_POST["chiso12"]),($_POST["ketluan12"]),($_POST["chiso14"]),($_POST["ketluan14"]),($_SESSION["user"]["id_user"]),($_POST["id_11"]),($_POST["id_12"]),($_POST["id_13"]),($_POST["id_14"]),($_POST["ket_luan"]));
 	//print_r($bien2);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;

	
}
function luuthuchien($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
        //unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

            	$bien2=  array(($_POST['nguoithuchien']),0,($_POST["chiso11"]),($_POST["ketluan11"]),($_POST["chiso13"]),($_POST["ketluan13"]),($_POST["chiso12"]),($_POST["ketluan12"]),($_POST["chiso14"]),($_POST["ketluan14"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["nguoisua"]),($_SESSION["user"]["id_user"]),($_POST["id_11"]),($_POST["id_12"]),($_POST["id_13"]),($_POST["id_14"]),($_POST["ket_luan"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	
}
function hoantat($store_name){
	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
       // unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

        $bien2=  array(($_POST["id_kham"]),($_POST["chuandoan1"]),($_POST["chiso11"]),($_POST["ketluan11"]),($_POST["chiso13"]),($_POST["ketluan13"]),($_POST["chiso12"]),($_POST["ketluan12"]),($_POST["chiso14"]),($_POST["ketluan14"]),($_SESSION["user"]["id_user"]),($_POST["id_11"]),($_POST["id_12"]),($_POST["id_13"]),($_POST["id_14"]),($_POST["nhanvien_control"]),($_POST["nguoithuchien"]),($_POST["ket_luan"]));
        //$bien2=  array(($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
 
}
function luuhoantat($store_name){

	$chuoi="(";
	$i=0;
	$check1="";
        //unset($_POST["nguoi_chidinh"]);
        //unset($_POST["ngaychidinh"]);
        //unset($_POST["oper"]);
 
	foreach($_POST as $key => $value) { 	
	   //    echo $key.": ".urldecode($value).";"."<br>";
		if($key!="oper"){
		  $bien[]=urldecode($value) ;				  
		  $i++;			
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

            	$bien2=  array(($_POST['nguoithuchien']),($_POST['chuandoan1']),($_POST["chiso11"]),($_POST["ketluan11"]),($_POST["chiso13"]),($_POST["ketluan13"]),($_POST["chiso12"]),($_POST["ketluan12"]),($_POST["chiso14"]),($_POST["ketluan14"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["nguoisua"]),($_SESSION["user"]["id_user"]),($_POST["id_11"]),($_POST["id_12"]),($_POST["id_13"]),($_POST["id_14"]),($_POST["ket_luan"])); 
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	
}
?>

