<?php
switch ($_GET["oper"]) {
    case "add":
        add();
        break;
    case "edit":
        edit();
        break;
    case "del":
        del("GD2_DMGoiKham_Delete");
        break;
}
function add(){
	$check1='';
	$data= new SQLServer;
	$store_name="{call GD2_DMGoiKham_Insert (?,?,?,?,?,?)}";
	$params = array($_POST['TenGoiKham'],$_POST['MoTa'],$_POST['SoTienDuKien'],$_POST['GhiChu'],$_SESSION["user"]["id_user"],array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
	$get=$data->query( $store_name, $params);
	if(isset($_POST['id'])){
		foreach ($_POST['id'] as $row) { 	
			unset ($params1) ;
			$store_name1="{call GD2_DM_GoiKhamChiTiet_Insert (?,?,?,?)}";
			$params1 = array($check1,$row['ID_GoiKhamChiTiet'],$row['DonGia'],$_SESSION["user"]["id_user"]);
			$get1=$data->query( $store_name1, $params1);
		}
	}
 echo ';'.$check1;
 }
 function edit(){
      $check1="";
	  $data= new SQLServer;
        $store_name="{call GD2_DMGoiKham_Update (?,?,?,?,?,?)}";
        $params = array($_POST['TenGoiKham'],$_POST['MoTa'],$_POST['SoTienDuKien'],$_POST['GhiChu'],$_GET['id'],$_SESSION["user"]["id_user"]);
		$get=$data->query( $store_name, $params);
		
		$store_name1="{call spGoiKhamChiTiet_SelectAllByID_GoiKham (?)}";
		$params1 = array($_GET['id']);
		$get1=$data->query( $store_name1, $params1);
		$excute= new SQLServerResult($get1);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		$dem=count($tam);
		if($tam!=0){
		 foreach ($tam as $row) {//duyet toan bo mang tra ve
            $params2=array($row["ID_GoiKhamChiTiet"],$_SESSION["user"]["id_user"]);
            $get_del=$data->query( "{call spGoiKhamChiTiet_Delete(?,?)}", $params2);
        }
		}
		if(isset($_POST['id'])){
		foreach ($_POST['id'] as $row) { 	
			unset ($params3) ;
			$store_name3="{call GD2_DM_GoiKhamChiTiet_Insert (?,?,?,?)}";
			$params3 = array($_GET['id'],$row['ID_GoiKhamChiTiet'],$row['DonGia'],$_SESSION["user"]["id_user"]);
			$get3=$data->query( $store_name3, $params3);
		}
	}
}
function del($store_name){
	//print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name (?,?)}";//tao bien khai bao store
	$params = array( 
                array($_POST["id"],SQLSRV_PARAM_IN),
				 array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
                 array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
               );	
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
	//echo $check1;
}
?>