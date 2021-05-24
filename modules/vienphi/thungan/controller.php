<?php
switch ($_GET["oper"]) {
    case "add":
        add("GD2_LichHenKham_Insert");
        break;
    case "edit":
        edit("GD2_Kham_Update_US4D");
        break;
    case "cancel":
        cancel("GD2_LichHenKham_Update_HuyHen");
        break;
    case "update_chuasansang":
        update_chuasansang();
        break;    
}	 		 

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	$id_return="";
	$_POST["GioHenKham"]=convert_date($_POST["GioHenKham"]);
	$_POST["NgayHenKham"]=convert_date($_POST["NgayHenKham"]);	
	foreach($_POST as $key => $value) {	
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)==$i){
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
			$bien[]=array(&$id_return,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  	$chuoi.="?";		
		  }elseif(count($_POST)>$i){
		  	$chuoi.="?,";  
		  }		 				
	}	
	$chuoi.=",?,?)";
	//print_r($_POST); 
	//print_r($bien); 
	//print_r($chuoi); 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo "$id_return;$check1";
	/*if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}*/
}
function edit($store_name){
    
    
    
	$chuoi="(";
	$i=0;
	$check1="";

        
   
        unset($_POST["nguoi_chidinh"]);
        unset($_POST["ngaychidinh"]);
        unset($_POST["oper"]);
 
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
      

        $chuoi2='(?,?,?,?,?,?)';
//        $bien2=  array(urldecode($_POST["id_kham"]),urldecode($_POST["mota"]),urldecode($_POST["ketluan"])
//                ,urldecode($_POST["loikhuyen"]),urldecode($_POST["nhanvien1"]), (float)urldecode($_POST["phithuchien"])
//            );
        
             $bien2=  array(($_POST["id_kham"]),($_POST["mota"]),($_POST["ketluan"])
                ,($_POST["loikhuyen"]),($_POST["nhanvien1"]), ($_POST["phithuchien"])
            );
        
	//print_r($bien2);
	//print_r($chuoi2);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $get_danh_muc_phong_ban;
}
function cancel($store_name){
	//$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["ID_HenKham"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array(date("Y-m-d H:i"),SQLSRV_PARAM_IN),
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
 
}
function update_chuasansang(){	
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call Gd2_ThongTinLuotKham_UpdateBySanSangGoiVaoKham (?,?,?)}";//tao bien khai bao store
        if($_GET['sanSangGoiVaoKham']==1)
        {
	$params = array($_GET['id_luotkham'],0,$_SESSION["user"]["id_user"]);
        }
        else{$params = array($_GET['id_luotkham'],1,$_SESSION["user"]["id_user"]);}
       // print_r($params) ;
	$data->query( $store_name, $params);//Goi store	

}
?>

