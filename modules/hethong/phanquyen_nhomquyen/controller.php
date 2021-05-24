<?php
//print_r($_POST);
switch ($_GET["oper"]) {
    case "add":
        add("GD2_NhomQuyen_Add");
        break;
    case "edit":
        edit("GD2_NhomQuyen_Upd");
        break;
    case "del":
        del("GD2_NhomQuyen_Del");
        break;
}	 		 

function add($store_name){	
$check1='';
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;			  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}
	$chuoi.=",?,?)";		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	 
	if($check1>0){ 
		echo "id;".$check1;
	}else{
		echo ";";
	}
 //   print_r($check1);
}
function edit($store_name){
	$chuoi="(";
	$i=0;
	foreach($_POST as $key => $value) { 	
	      
		if($key!="oper"){
		  $bien[]= $value;				  
		  $i++;			
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array($_SESSION["user"]["id_user"]);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}
	 
	$chuoi.=",?)";			 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	in
	//print_r($bien);
}
function del($store_name){
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                 array($_POST["id"], SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN)                
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	echo $check1;
}


$id=$_POST['id'];
$id_control=$_POST['id_control'];
if(isset ($_POST['id_check'])){
	$id_check=$_POST['id_check'];
}else{
	$id_check=array(0);
}

$data= new SQLServer;//tao lop ket noi SQL
$flag=0;
$params =array();
$dem=count($id_check)-1;
for($i=0;$i<=count($id_control)-1;$i++){
  unset ($params);
  //chua co quyen data
	if($id[$i]==0){
		for($ii=0;$ii<=count($id_check)-1;$ii++){
		//neu check add
			if($id_control[$i]==$id_check[$ii]){
				$params=array($id_control[$i],$_POST['id_nhanvien'],$_SESSION['user']['id_user']);
				$get_lich=$data->query( "{call GD2_quyennhanvien_add(?,?,?)}", $params);
				break;
			}
		}
		//da co quyen
	}else{
		for($y=0;$y<=count($id_check)-1;$y++){
			$flag=0;
		//neu check up co quyen
			if($id_control[$i]==$id_check[$y]){
				$params=array($id[$i],1,$_SESSION['user']['id_user']);
				$get_lich=$data->query( "{call GD2_quyennhanvien_upd(?,?,?)}", $params);
				$flag=1;
				
				break;
			}
		}
		//ko check update co quyen
		if($flag==0){
			echo $id[$i];
				$params=array($id[$i],0,$_SESSION['user']['id_user']);
				$get_lich=$data->query( "{call GD2_quyennhanvien_upd(?,?,?)}", $params);
		}
		
		
	}

}
	
?>

