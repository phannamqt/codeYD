<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_xquang");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_xquang");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_xquang");
        break;
	case "luuhoantat":
        luuhoantat("GD2_Kham_Update_xquang");
        break;
    case "luudangkham":
        luudangkham("GD2_Kham_Update_xquang");
        break;
    case "luu_eng":
        luu_eng("GD2_Kham_English_New");
        break;
}	 		 
function luu_eng($store_name){
  $chuoi="(";
  $i=0;
  $check1="";

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
      

          $chuoi2='(?,?,?,?,? ,?,?,?)';

          $bien2=  array(
            ($_POST["id_kham"]),
            ($_POST["mota_eng"]),
            ($_POST["thongsokt_eng"]),
            ($_POST["ketluan_eng"]),
            ($_POST["loikhuyen_eng"]),
            ($_SESSION["user"]["id_user"]),
	        ($_SERVER['REMOTE_ADDR']),
	        (array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT))
            );
           
       
  //print_r($bien2);
  //print_r($chuoi2);  
  $data= new SQLServer;//tao lop ket noi SQL
  $store_name="{call $store_name $chuoi2}";//tao bien khai bao store
  $params = $bien2;//tao param cho store 
  $get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store 
  //echo $get_danh_muc_phong_ban;
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
      

        $chuoi2='(?,?,?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
        $bien2=  array(($_POST["nguoithuchien"]),($_POST["mota"]),($_POST["thongsokt"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giothuchien"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),0,($_POST["mota"]),($_POST["thongsokt"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(0,0,($_POST["mota"]),($_POST["thongsokt"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        $bien2=  array(($_POST["nguoithuchien"]),($_POST["chuandoan1"]),($_POST["mota"]),($_POST["thongsokt"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giohoantat"]));
        //$bien2=  array(($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
 
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["thongsokt"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
}
?>

