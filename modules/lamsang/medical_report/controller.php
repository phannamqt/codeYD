<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("GD2_MedicalReport_trangthai");
        break;
    case "luuthuchien":
        luuthuchien("GD2_MedicalReport_Insert");
        break;
    case "hoantat":
        hoantat("GD2_MedicalReport_trangthai");
        break;
     case "luuhoantat":
        luuhoantat("GD2_MedicalReport_Insert");
        break; 
     case "luudangkham":
        luudangkham("GD2_MedicalReport_Insert");
        break;
     case "luudl":
        luudl("GD2_MedicalReport_DL_Insert");
        break;
   
}	 		 

function dathuchien($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
        $params3 = array($_POST["id_luotkham"]);//tao param cho store 
        $store_name3="{call GD2_MedicalReport_Del(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbenhnhan3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan3= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc  

	$chuoi="(";
	$i=0;
	$check1="";
    
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?)';

        	$bien2=  array(($_POST["id_luotkham"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["cachdieutri"]),($_POST["id_trangthai"]),($_POST["ngaythuchien"]),($_POST["nguoithuchien"]),null);
            
       
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
       $chuoi2='(?,?,?,?,?,?,?)';

        	$bien2=  array(($_POST["id_luotkham"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["cachdieutri"]),"DaThucHien",($_POST["nguoithuchien"]),null);
           
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	
}

function luudangkham($store_name){
	 	$data= new SQLServer;//tao lop ket noi SQL
        $params3 = array($_POST["id_luotkham"]);//tao param cho store 
        $store_name3="{call GD2_MedicalReport_Del(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbenhnhan3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan3= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc  

	$chuoi="(";
	$i=0;
	$check1="";
    
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?)';

        	$bien2=  array(($_POST["id_luotkham"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["cachdieutri"]),($_POST["id_trangthai"]),null,null);
            
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
	
}
function hoantat($store_name){
		$data= new SQLServer;//tao lop ket noi SQL
        $params3 = array($_POST["id_luotkham"]);//tao param cho store 
        $store_name3="{call GD2_MedicalReport_Del(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan3=$data->query( $store_name3,$params3);//Goi store
        $excute3= new SQLServerResult($get_thongtinbenhnhan3);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan3= $excute3->get_as_array();//Tra ve mang toan bo data lay duoc  

	$chuoi="(";
	$i=0;
	$check1="";
    
	$chuoi.=",?)";
      

        $chuoi2='(?,?,?,?,?,?,?,?)';

        	$bien2=  array(($_POST["id_luotkham"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["cachdieutri"]),'Xong',($_POST["ngaythuchien"]),($_POST["nguoithuchien"]),($_POST["chuandoan1"]));
            
       
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
      

          $chuoi2='(?,?,?,?,?,?,?)';

        	$bien2=  array(($_POST["id_luotkham"]),($_POST["mota"]),($_POST["ketluan"]),($_POST["cachdieutri"]),"Xong",($_POST["nguoithuchien"]),($_POST["chuandoan1"]));
           
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	
}

function luudl($store_name){

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
      

          $chuoi2='(?,?,?,?,?)';

        	$bien2=  array(($_POST["id_luotkham"]),
        		($_POST["mota_eng"]),
        		($_POST["ketluan_eng"]),
        		($_POST["cachdieutri_eng"]),
        		($_POST["nguoidich1"]));
           
       
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $get_danh_muc_phong_ban;
	
}


?>

