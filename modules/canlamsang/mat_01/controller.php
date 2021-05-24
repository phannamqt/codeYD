<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_sieuam");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_sieuam");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_sieuam");
        break;
	case "luuhoantat":
        luuhoantat("GD2_Kham_Update_sieuam");
        break;
    case "luudangkham":
        luudangkham("GD2_Kham_Update_sieuam");
        break;
        case "lydo_tre":
        lydo_tre();
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
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
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
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
		if(isset($_POST['giothuchien_hen'])){
		$ngay = $_POST['giothuchien_hen'];
		$ngay = explode(' ', $ngay);
		$gio = $ngay[0];
		$ngay = implode("-", array_reverse(explode("/", $ngay[1])));
		$time_sys = date('Y-m-d H:i');
		$time_sys_strtotime = strtotime($time_sys);
		$time_post = $ngay.' '.$gio;
		$time_post_strtotime = strtotime($time_post);
		if($time_post_strtotime<$time_sys_strtotime){
			$datetime = $time_post;
		}else{
			$datetime = date('Y-m-d H:i');
		}
		$params = array(
			1,
    $_POST["id_kham"],
    $_POST["id_luotkham"],
    $datetime,
    $_SESSION['user']['id_user'],
    $_SERVER['REMOTE_ADDR'],
	);//tao param cho store 
	$store_name="{call GD2_HenTraKetQua_CanLamSang_Update(?,?,?,?,?,?)}";//tao bien khai bao store
	$result=$data->query( $store_name,$params);//Goi store
	}
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
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(trim($_POST['nguoithuchien']," "),0,($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),trim($_POST['nguoisua']," "),trim($_POST['ngaygiosua']," "));
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	///lưu thực hiện
	tracking_button_luu();
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
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      
            
        $chuoi2='(?,?,?,?,?,?,?,?,?)';

        	$bien2=  array(0,0,($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),0,0);
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	///lưu thực hiện
	tracking_button_luu();
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
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";			
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?)';

        $bien2=  array(($_POST["nguoithuchien"]),($_POST["chuandoan1"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giohoantat"]));
        //$bien2=  array(($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["id_kham"]),($_POST["id_trangthai"]));
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
		if(isset($_POST['giohoantat_hen'])){
		$ngay = $_POST['giohoantat_hen'];
		$ngay = explode(' ', $ngay);
		$gio = $ngay[0];
		$ngay = implode("-", array_reverse(explode("/", $ngay[1])));
		$time_sys = date('Y-m-d H:i');
		$time_sys_strtotime = strtotime($time_sys);
		$time_post = $ngay.' '.$gio;
		$time_post_strtotime = strtotime($time_post);
		if($time_post_strtotime<$time_sys_strtotime){
			$datetime = $time_post;
		}else{
			$datetime = date('Y-m-d H:i');
		}
		$params1 = array(
			2,
	    $_POST["id_kham"],
	    $_POST["id_luotkham"],
	    $datetime,
	    $_SESSION['user']['id_user'],
	    $_SERVER['REMOTE_ADDR'],
		);//tao param cho store 
		$store_name1="{call GD2_HenTraKetQua_CanLamSang_Update(?,?,?,?,?,?)}";//tao bien khai bao store
		$result=$data->query( $store_name1,$params1);//Goi store
	}
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
			$bien[]=array($check1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
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
	echo $get_danh_muc_phong_ban;
	///lưu thực hiện
	tracking_button_luu();
}
////tracking
function tracking_button_luu(){
$data= new SQLServer;//tao lop ket noi SQL
$params = array(
    $_POST["id_kham"],
    $_POST["id_trangthai"],
    $_SESSION['user']['id_user'],
    $_SERVER['REMOTE_ADDR'],
);//tao param cho store 
$store_name="{call Gd2_Tracking_Kham_ButtonLuu_Insert(?,?,?,?)}";//tao bien khai bao store
$result=$data->query( $store_name,$params);//Goi store
}
// lý do trễ
function lydo_tre(){
$data= new SQLServer;//tao lop ket noi SQL
$params = array(
    $_POST["id_kham"],
    $_POST["ghichu"],
    $_SESSION['user']['id_user'],
    $_SERVER['REMOTE_ADDR'],
);//tao param cho store 
$TaoChuoiStore=TaoChuoiStore($params);
$store_name="{call Gd2_HenTraKetQua_CanLamSang_Update_LydoTre $TaoChuoiStore}";//tao bien khai bao store
$result=$data->query( $store_name,$params);//Goi store
}
?>

