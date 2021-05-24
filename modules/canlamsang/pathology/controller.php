<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_Kham_dathuchien_phathology_new");
        break;
    case "luuthuchien":
        luuthuchien("GD2_Kham_Update_phathology_new");
        break;
    case "hoantat":
        hoantat("GD2_Kham_hoantat_phathology_new");
        break;
     case "luuhoantat":
        luuhoantat("GD2_Kham_Update_phathology_new");
        break; 
     case "luudangkham":
        luudangkham("GD2_Kham_Update_phathology_new");
        break;     
}	 		 

function dathuchien($store_name){	
	if($_POST['ngaylaybp']==''){
		$ngaylaybp=NULL;
	}else{
		$ngaylaybp= convert_date($_POST['ngaylaybp']);
	}

//print_r($ngaylaybp);
	$chuoi="(";
	$i=0;
	$check1="";
        
 
	foreach($_POST as $key => $value) { 	
	   
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
        $chuoi2='(?,?,?,?,?  ,?,?,?,?,? )';
        $bien2=  array(($_POST["nguoithuchien"]),($_POST["chandoan"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["loikhuyen"]),($_POST["danhgia"]),
		($_POST["id_kham"]),($_POST["id_trangthai"]),($_POST["giothuchien"]),$ngaylaybp);
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;

}

function luuthuchien($store_name){
if($_POST['ngaylaybp']==''){
		$ngaylaybp=NULL;
	}else{
		$ngaylaybp= convert_date($_POST['ngaylaybp']);
	}
	$chuoi="(";
	$i=0;
	$check1="";
 
      

        $chuoi2='(?,?,?,?,?, ?,?,?,?,? ,?,?)';

        	$bien2=  array(
			trim($_POST['nguoithuchien']," ")
			,trim($_POST['chuandoan1']," ")
			,($_POST["chandoan"])
			,($_POST["mota"])
			,($_POST["ketluan"])
			
			,($_POST["loikhuyen"])
			,($_POST["danhgia"])
			,($_POST["id_kham"])
			,($_POST["id_trangthai"])
			,trim($_POST['nguoisua']," ")
			
			,trim($_POST['ngaygiosua']," ")
			,$ngaylaybp
			);
     
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;

}

function luudangkham($store_name){
if($_POST['ngaylaybp']==''){
		$ngaylaybp=NULL;
	}else{
		$ngaylaybp= convert_date($_POST['ngaylaybp']);
	}
	$chuoi="(";
	$i=0;
	$check1="";

	if($_POST['ngaygiosua']==''){
		$_POST['ngaygiosua']=null;
	}

	$chuoi2='(?,?,?,?,? ,?,?,?,?,? ,?,?)';

	$bien2=  array(
		trim($_POST['nguoithuchien']," "),
		trim($_POST['chuandoan1']," "),
		($_POST["chandoan"]),
		($_POST["mota"]),
		($_POST["ketluan"]),
		
		($_POST["danhgia"]),
		($_POST["loikhuyen"]),
		($_POST["id_kham"]),
		($_POST["id_trangthai"])
		,0
		
		,$_POST['ngaygiosua']
		,$ngaylaybp
		);
      
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	
}
function hoantat($store_name){
	if($_POST['ngaylaybp']==''){
		$ngaylaybp=NULL;
	}else{
		$ngaylaybp= convert_date($_POST['ngaylaybp']);
	}
	$chuoi="(";
	$i=0;
	$check1="";
	foreach($_POST as $key => $value) { 	
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
      

        $chuoi2='(?,?,?,?,? ,?,?,?,?,? ,?)';

        $bien2=  array(
					($_POST["nguoithuchien"])
					,($_POST["chuandoan1"])
					,($_POST["chandoan"])
					,($_POST["mota"])
					,($_POST["ketluan"])
					
					,($_POST["loikhuyen"])
					,($_POST["danhgia"])
					,($_POST["id_kham"])
					,($_POST["id_trangthai"])
					,($_POST["giohoantat"])
					
					,$ngaylaybp
				);
         
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	

}
function luuhoantat($store_name){
	if($_POST['ngaylaybp']==''){
		$ngaylaybp=NULL;
	}else{
		$ngaylaybp= convert_date($_POST['ngaylaybp']);
	}
	if($_POST['ngaygiosua']==''){
		$_POST['ngaygiosua']=null;
	}
	$chuoi="(";
	$i=0;
	$check1="";
        
	foreach($_POST as $key => $value) { 	
	  
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
      

        $chuoi2='(?,?,?,?,?, ?,?,?,?,? ,?,?)';

        	$bien2=  array(
			trim($_POST['nguoithuchien']," ")
			,trim($_POST['chuandoan1']," ")
			,($_POST["chandoan"])
			,($_POST["mota"])
			,($_POST["ketluan"])
			
			,($_POST["loikhuyen"])
			,($_POST["danhgia"])
			,($_POST["id_kham"])
			,($_POST["id_trangthai"])
			,trim($_POST['nguoisua']," ")
			
			,trim($_POST['ngaygiosua']," ")
			,$ngaylaybp
			);
       
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	}
?>

