<?php

if (isset($_GET["oper"])){
	$oper=$_GET["oper"];
}else{
	
foreach($_POST as $key => $value){
	if(($key=="oper")){
		$oper=$value;
	}
	
}
}


switch ($oper) {
    case "add":
        add("GD2_LichLamViec_ADD");
        break;
    case "edit":
        edit("GD2_LichLamViec_UPD");
        break;
    case "del":
        del("GD2_LichLamViec_Del");
        break;
	case "copy":
		_copy("GD2_LichLamViec_ADD");
	break;
	case "del_cell":
		del_cell("GD2_LichLamViec_Del");
	break;
	case "del_tuan":
		del_tuan("GD2_LichLamViec_Del");
	break;
	case "duyetlich":
        duyetlich();
    break;
}


function duyetlich(){
	$data= new SQLServer;
	//print_r($_POST);
	
	//DEL LỊCH CŨ
	if(isset($_POST['del_lich'])){
		for ($i=0;$i<count($_POST['del_lich']);$i++){
			$params_del=array($_POST['del_lich'][$i],$_SESSION["user"]["id_user"]);
			$data->query( "{call GD2_LichLamViec_Del (?,?)}", $params_del);
		};
	}
	//END DEL LỊCH CŨ
	
	
	//INSERT LỊCH MỚI
	if(isset($_POST['lichyeucau'])){
		$ngay = explode('/',$_POST["ngay"]);
		$_ngay = $ngay[2].'-'.$ngay[1].'-'.$ngay[0];
		
		for ($i=0;$i<count($_POST['lichyeucau']);$i++){
			$check1='';
			$lich=explode("-",$_POST['lichyeucau'][$i]);
			
			$params_ins=array(		
				1
				,$_ngay
				,$lich[0]
				,$lich[1]
				,$_POST['id_nhanvien']
				,1
				,$_POST['id_phongban']
				,NULL
				,$_SESSION["user"]["id_user"]
				,array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);
			//print_r($params_ins);
			$data->query( "{call GD2_LichLamViec_ADD (?,?,?,?,?, ?,?,?,?,?)}", $params_ins);
		};
	}
	//END INSERT LỊCH MỚI
	
	//[GD2_TinhCong_DuyetLich] 196,'2016-7-21',1,178,1
	// TINH LAI CONG
	if(isset($_GET['ac']) && $_GET['ac']=='tinhlaicong'){
		$store_name_tkc = "{call GD2_TinhCong_DuyetLich (?,?,?,?,?)}"; //tao bien khai bao store	
		//echo $_ngay ;	
		$start = strtotime($_ngay);
		$end = strtotime($_ngay);
		$currentDate =strtotime(date("Y-m-d"));
		if($currentDate>=$end){
			$diff = $end - $start;
			$solan = round($diff / 86400);
		}else{
			$diff = $currentDate - $start;
			$solan = round($diff / 86400);
		}
		
		for ($i = 0; $i <= $solan; $i++) {		
			$ngay = date('Y-m-d', $start + (24 * 3600 * $i));
			$params_tkc = array(
				$_POST["id_nhanvien"],
				$ngay,
				0,
				$_SESSION["user"]["id_user"],
				1
			);
		//	print_r($params_tkc);
			$data->query( $store_name_tkc, $params_tkc);
		}		
	}//end if isset ac
	// END TINH LAI CONG
	
	
}	 

function _copy($store_name){
	//print_r($_POST);
	$data= new SQLServer;//tao lop ket noi SQL
	//echo $_GET["user_copy"];	
	// print_r($_POST);	 
	//$data= new SQLServer;//tao lop ket noi SQL
	//$store_name="SELECT * FROM Lichlamviec";//tao bien khai bao store
	//$params = $bien;//tao param cho store 
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$params1=array($_GET["user_copy"],$_GET["ngay_copy"]);
	$store_name1="{call GD2_Id_lichlamviec_getbyngayandidnv (?,?)}";
	$get_id=$data->query( $store_name1, $params1);//Goi store
	$excute= new SQLServerResult($get_id);
	$tam1= $excute->get_as_array();

	for ($i=0;$i<=count($tam1)-1;$i++){
		 $tam1[$i]["ID_LichLamViec"];
	$params2=array($tam1[$i]["ID_LichLamViec"],$_SESSION["user"]["id_user"]);
	$get_del=$data->query( "{call GD2_LichLamViec_Del (?,?)}", $params2);
	};
	//print_r($tam1);
	$check1=0;
	$i=0;
	$chuoi="(?,?,?,?,?,?,?,?,?,?)";
	
	for ($ii=0;$ii<=count($_POST["cell"])-1;$ii++){
		unset($bien);
		foreach($_POST["cell"][$ii] as $key => $value) { 	 	    
			$bien[0]= $_POST["cell"][$ii]["ID_LoaiLich"];			
			$bien[1]= $_GET["ngay_copy"];
			$bien[2]=trim($_POST["cell"][$ii]["GioBatDau"]," ");
			$bien[3]=trim($_POST["cell"][$ii]["GioKetThuc"]," ");
			$bien[4]= $_GET["user_copy"];			 
			$bien[5]=trim($_POST["cell"][$ii]["IsChamCong"]," ");
			$bien[6]="";
			$bien[7]="";
			$bien[8]=array($_SESSION["user"]["id_user"]);
			$bien[9]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
			 
			//echo "$i ";
			//$i++;		
		}
		//echo $_POST["cell"][$ii]["ID_LoaiLich"];
		$store_name1="{call $store_name $chuoi}";//tao bien khai bao store
		//echo $store_name1;
		//print_r($bien);		 
		$prm=$data->query( $store_name1, $bien);//Goi store		
		if($check1!=0){ 
			echo "thanhcong";
		}else{
			
		}
	}
	 
}

function del_cell($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	//echo $_GET["user_copy"];	
	// print_r($_POST);	 
	//$data= new SQLServer;//tao lop ket noi SQL
	//$store_name="SELECT * FROM Lichlamviec";//tao bien khai bao store
	//$params = $bien;//tao param cho store 
	//$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$params1=array($_GET["user_copy"],$_GET["ngay_copy"]);
	$store_name1="{call GD2_Id_lichlamviec_getbyngayandidnv (?,?)}";
	$get_id=$data->query( $store_name1, $params1);//Goi store
	$excute= new SQLServerResult($get_id);
	$tam1= $excute->get_as_array();

	for ($i=0;$i<=count($tam1)-1;$i++){
		 $tam1[$i]["ID_LichLamViec"];
	$params2=array($tam1[$i]["ID_LichLamViec"],$_SESSION["user"]["id_user"]);
	$get_del=$data->query( "{call GD2_LichLamViec_Del (?,?)}", $params2);
	};
	
	 
}
		 
function del_tuan($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	
	$params1=array($_GET["id_phongban"],$_GET["ngay_del"],$_GET["loailich"]);
	$store_name1="{call GD2_lichlamviec_del_week (?,?,?)}";
	$get_id=$data->query( $store_name1, $params1);//Goi store
}

function add($store_name){	
	$check1="";
	$chuoi="(";
	$i=0;
	//print_r($_POST);
	$ngay = explode('-',  $_POST["ngay"]);
	$_POST["ngay"] = $ngay[2].'-'.$ngay[1].'-'.$ngay[0];
	foreach($_POST as $key => $value) { 	        
		if(($key!="oper")&&($key!="id")){
		  $bien[]= $value;			
		  $i++;	
		 // print_r($_POST);		  
		  if(count($_POST)-2==$i){
		  	$chuoi.="?";
			$bien[]=array($_SESSION["user"]["id_user"]);
			$bien[]=array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT);
		  }elseif(count($_POST)-2>$i){
		  	$chuoi.="?,";  
		  }		 
		}		
	}	
	//print_r($_POST);
	$chuoi.=",?,?)";		 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	
	if($check1>0){ 
		echo "id;".$check1;
	}else{
		
	}
	
	// TINH LAI CONG
	if(isset($_GET['ac']) && $_GET['ac']=='tinhlaicong'){
		$store_name_tkc = "{call GD2_TinhCong_DuyetLich (?,?,?,?,?)}"; //tao bien khai bao store		
		$start = strtotime($_POST["ngay"]);
		$end = strtotime($_POST["ngay"]);
		$currentDate =strtotime(date("Y-m-d"));
		if($currentDate>=$end){
			$diff = $end - $start;
			$solan = round($diff / 86400);
		}else{
			$diff = $currentDate - $start;
			$solan = round($diff / 86400);
		}
		
		for ($i = 0; $i <= $solan; $i++) {		
			$ngay = date('Y-m-d', $start + (24 * 3600 * $i));
			$params_tkc = array(
				$_POST["Id_NhanVien"],
				$ngay,
				0,
				$_SESSION["user"]["id_user"],
				1
			);
			$data->query( $store_name_tkc, $params_tkc);
		}		
	}//end if isset ac
	// END TINH LAI CONG
	
}

function edit($store_name){
	$chuoi="(";
	$i=0;
	// print_r($_POST);
	
	foreach($_POST as $key => $value) { 	
	      
		if($key!="oper"){
		  $bien[]= $value;
		  	//if  ($i==2){  var_dump($value);};			  
		  $i++;			
		  
		  if(count($_POST)-1==$i){
		  	$chuoi.="?";			
			$bien[]=array($_SESSION["user"]["id_user"]);
		  }elseif(count($_POST)-1>$i){
		  	$chuoi.="?,";  
		  }		
		}		
	}	 
	//print_r($bien);
	$chuoi.=",?)";		
	//print_r($chuoi);	 
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi}";//tao bien khai bao store
	$params = $bien;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	
	// TINH LAI CONG
	if(isset($_GET['ac']) && $_GET['ac']=='tinhlaicong'){
		$store_name_tkc = "{call GD2_TinhCong_DuyetLich (?,?,?,?,?)}"; //tao bien khai bao store		
		$start = strtotime($_POST["ngay"]);
		$end = strtotime($_POST["ngay"]);
		$currentDate =strtotime(date("Y-m-d"));
		if($currentDate>=$end){
			$diff = $end - $start;
			$solan = round($diff / 86400);
		}else{
			$diff = $currentDate - $start;
			$solan = round($diff / 86400);
		}
		
		for ($i = 0; $i <= $solan; $i++) {		
			$ngay = date('Y-m-d', $start + (24 * 3600 * $i));
			$params_tkc = array(
				$_POST["Id_NhanVien"],
				$ngay,
				0,
				$_SESSION["user"]["id_user"],
				1
			);
			$data->query( $store_name_tkc, $params_tkc);
		}		
	}//end if isset ac
	// END TINH LAI CONG
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

}
?>

