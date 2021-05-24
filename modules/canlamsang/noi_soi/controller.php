<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_noisoi");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_noisoi");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_noisoi");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_noisoi");
        break; 
     case "luudangkham":
        luudangkham("GD2_Kham_Update_noisoi");
        break;  
    case "luu_pilogy":
        luu_pilogy("GD2_Kham_Update_noisoi");
        break;        
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
      

        $chuoi2='(?,?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
        $bien2=  array(($_POST["nguoithuchien"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giothuchien"]));
       
	//print_r($bien2);
	//print_r($bien2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;

	if(($_POST['para'])!="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params3=array(($_POST["id_luotkham"]),($_POST['para']),$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name3="{call GD2_para_upd_idluotkham (?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }
	   //gay me
	  $check9='';
	  if($_POST["gaymechinh"]==0){
		  $_POST["gaymechinh"]=null;
	  }
	  if($_POST["gaymephu1"]==0){
		  $_POST["gaymephu1"]=null;
	  }
	  if($_POST["gaymephu2"]==0){
		  $_POST["gaymephu2"]=null;
	  }
	$store_name9="{call GD2_BSGayMe_UpdateKham(?,?,?,?,?)}";
	$params9 = array (
		
		$_POST["gaymechinh"],//@ID_BSGayMe	int,
		$_POST["gaymephu1"],//@ID_BSGayMe1 int,
		$_POST["gaymephu2"],//@ID_BSGayMe2 int,
		$_POST["gaymephu3"],//@ID_BSGayMe2 int,
		$_POST["id_kham"],//@ID_Kham int,
	);
	$data->query( $store_name9, $params9);
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),trim($_POST["id_kham"]," "),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	  $get3=$data->query( $store_name, $params);
	if(($_POST['para'])!="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params3=array(($_POST["id_luotkham"]),($_POST['para']),$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name3="{call GD2_para_upd_idluotkham (?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }
	   //gay me
	  $check9='';
	  if($_POST["gaymechinh"]==0){
		  $_POST["gaymechinh"]=null;
	  }
	  if($_POST["gaymephu1"]==0){
		  $_POST["gaymephu1"]=null;
	  }
	  if($_POST["gaymephu2"]==0){
		  $_POST["gaymephu2"]=null;
	  }
	$store_name9="{call GD2_BSGayMe_UpdateKham(?,?,?,?,?)}";
	$params9 = array (
		
		$_POST["gaymechinh"],//@ID_BSGayMe	int,
		$_POST["gaymephu1"],//@ID_BSGayMe1 int,
		$_POST["gaymephu2"],//@ID_BSGayMe2 int,
		$_POST["gaymephu3"],//@ID_BSGayMe2 int,
		$_POST["id_kham"],//@ID_Kham int,
	);
	$data->query( $store_name9, $params9);
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	if(($_POST['para'])!="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params3=array(($_POST["id_luotkham"]),($_POST['para']),$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name3="{call GD2_para_upd_idluotkham (?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }
	   //gay me
	  $check9='';
	  if($_POST["gaymechinh"]==0){
		  $_POST["gaymechinh"]=null;
	  }
	  if($_POST["gaymephu1"]==0){
		  $_POST["gaymephu1"]=null;
	  }
	  if($_POST["gaymephu2"]==0){
		  $_POST["gaymephu2"]=null;
	  }
	$store_name9="{call GD2_BSGayMe_UpdateKham(?,?,?,?,?)}";
	$params9 = array (
		
		$_POST["gaymechinh"],//@ID_BSGayMe	int,
		$_POST["gaymephu1"],//@ID_BSGayMe1 int,
		$_POST["gaymephu2"],//@ID_BSGayMe2 int,
		$_POST["gaymephu3"],//@ID_BSGayMe2 int,
		$_POST["id_kham"],//@ID_Kham int,
	);
	$data->query( $store_name9, $params9);
	  
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
      

        $chuoi2='(?,?,?,?,?,?,?,?)';

        $bien2=  array(trim($_POST['nguoithuchien']," "),($_POST["chuandoan1"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giohoantat"]));
        //$bien2=  array(($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
 if(($_POST['para'])!="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params3=array(($_POST["id_luotkham"]),($_POST['para']),$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name3="{call GD2_para_upd_idluotkham (?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }
	   //gay me
	  $check9='';
	  if($_POST["gaymechinh"]==0){
		  $_POST["gaymechinh"]=null;
	  }
	  if($_POST["gaymephu1"]==0){
		  $_POST["gaymephu1"]=null;
	  }
	  if($_POST["gaymephu2"]==0){
		  $_POST["gaymephu2"]=null;
	  }
	$store_name9="{call GD2_BSGayMe_UpdateKham(?,?,?,?,?)}";
	$params9 = array (
		
		$_POST["gaymechinh"],//@ID_BSGayMe	int,
		$_POST["gaymephu1"],//@ID_BSGayMe1 int,
		$_POST["gaymephu2"],//@ID_BSGayMe2 int,
		$_POST["gaymephu3"],//@ID_BSGayMe2 int,
		$_POST["id_kham"],//@ID_Kham int,
	);
	$data->query( $store_name9, $params9);
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
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),trim($_POST['chuandoan1']," "),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	if(($_POST['para'])!="---"){  
		//print_r($_POST["id_luotkham"]);
       
            $params3=array(($_POST["id_luotkham"]),($_POST['para']),$_SESSION['user']['id_user']);
            //print_r($params1);
            $store_name3="{call GD2_para_upd_idluotkham (?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }
	   //gay me
	  $check9='';
	  if($_POST["gaymechinh"]==0){
		  $_POST["gaymechinh"]=null;
	  }
	  if($_POST["gaymephu1"]==0){
		  $_POST["gaymephu1"]=null;
	  }
	  if($_POST["gaymephu2"]==0){
		  $_POST["gaymephu2"]=null;
	  }
	$store_name9="{call GD2_BSGayMe_UpdateKham(?,?,?,?,?)}";
	$params9 = array (
		
		$_POST["gaymechinh"],//@ID_BSGayMe	int,
		$_POST["gaymephu1"],//@ID_BSGayMe1 int,
		$_POST["gaymephu2"],//@ID_BSGayMe2 int,
		$_POST["gaymephu3"],//@ID_BSGayMe2 int,
		$_POST["id_kham"],//@ID_Kham int,
	);
	$data->query( $store_name9, $params9);
}
function luu_pilogy(){	
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_ENDO_insert(?,?,?)}";//tao bien khai bao store
    $params = array($_GET['id_kham'],$_GET['pilogy'],$_SESSION['user']['id_user']);
      // print_r($_POST) ;
	$data->query( $store_name, $params);//Goi store	

}
?>

