<?php 
switch ($_GET["oper"]) {
    case "add":
        add("Gd2_donthuocmau_Add");
        
        break;
    case "edit":
        edit("GD2_DM_DonThuocMau_Update");
        break;
    case "del":
        del("Gd2_Thuoc_Delete");
        break;
}

function add($store_name){
        //print_r($_POST);
        $check1='';
        if(!isset($_POST['latoachuan_check'])){    
            $latoachuan_check=0;
        }else{    
            $latoachuan_check=$_POST['latoachuan_check'];
         }
        if(!isset($_POST['apdung_check'])){    
            $apdung_check=0;
        }else{    
            $apdung_check=$_POST['apdung_check'];
         }
        

        $data= new SQLServer;//tao lop ket noi SQL
        $store_name="{call Gd2_donthuocmau_Add (?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
        $params = array(
           trim($_POST['madonthuoc_text']," "),
           trim($_POST['tendonthuoc_text']," "),
           trim($_POST['ID_BacSiTao']," "),
           trim($_POST['ID_NhomBenh']," "),
           trim($_POST['mota_text']," "),
           trim($_POST['ghichu_text']," "),
           $latoachuan_check,
           $apdung_check,
          
           $_SESSION['user']['id_user'],

           array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)   
        );
       $get=$data->query( $store_name, $params);
      if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params1=array($value['ID_Thuoc'],
					$value['LieuDungHangNgay'],
					$value['CachDung'],
					$value['CachDungChiTiet'],
					$check1,
					$_SERVER['REMOTE_ADDR'], 
					$_SESSION['user']['id_user'],
					
			);
            //print_r($params1);
            $store_name1="{call GD2_DonThuocMauChiTiet_Insert_New (?,?,?,?,? ,?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }}
        echo ';'.$check1;
}
function edit($store_name){
        if(!isset($_POST['latoachuan_check'])){    
            $latoachuan_check=0;
        }else{    
            $latoachuan_check=$_POST['latoachuan_check'];
         }
        if(!isset($_POST['apdung_check'])){    
            $apdung_check=0;
        }else{    
            $apdung_check=$_POST['apdung_check'];
         }
        //print_r($_POST);
	$check1="";
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_DM_DonThuocMau_Update(?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array( 
            $_GET['id'],
           trim($_POST['madonthuoc_text']," "),
           trim($_POST['tendonthuoc_text']," "),
           trim($_POST['ID_BacSiTao']," "),
           trim($_POST['ID_NhomBenh']," "),
           trim($_POST['mota_text']," "),
           trim($_POST['ghichu_text']," "),
           $latoachuan_check,
           $apdung_check,
           $_SESSION['user']['id_user']
           
      );	
	//$get=$data->query( $store_name, $params);//Goi store	
    //$params2=array($_GET['id'],$_SESSION['user']['id_user']);
    //$get_del=$data->query( "{call [GD2_DonThuocMauChiTiet_DeleteAllByID_DonThuocMau](?,?)}", $params2);

    if(isset($_POST['id'])){  
       foreach ($_POST['id'] as $key => $value) {
            unset($params1);
          // print_r($_POST['id']);
		  if($value['DaLuu']==1){
			  $params1=array(
			  	$value['ID_Thuoc'],
				$value['LieuDungHangNgay'],
				$value['CachDung'],
				$value['CachDungChiTiet'],
				$value['ID_TTMChiTiet'],
				$_SERVER['REMOTE_ADDR'], 
				$_SESSION['user']['id_user'],
			);
			$store_name1="{call GD2_DonThuocMauChiTiet_Update_New (?,?,?,?,? ,?,?)}";
			$get2=$data->query( $store_name1, $params1);
		  }else{
			$params1=array($value['ID_Thuoc'],
				$value['LieuDungHangNgay'],
				$value['CachDung'],
				$value['CachDungChiTiet'],
				$_GET['id'],
				$_SERVER['REMOTE_ADDR'], 
				$_SESSION['user']['id_user'],
			);
			$store_name1="{call GD2_DonThuocMauChiTiet_Insert_New (?,?,?,?,? ,?,?)}";
			$get2=$data->query( $store_name1, $params1);
		  }
      }
	}
	
	if($_GET['xoa']){
		$_xoa=$_GET['xoa'];
		$_del=explode(",",$_xoa);
		$_dem=count($_del);
		for($ii=0;$ii<$_dem;$ii++){
			if($_del[$ii]>0){
				$params22 = array ($_del[$ii],$_SERVER['REMOTE_ADDR'],$_SESSION["user"]["id_user"]);
				$store_name22="{call GD2_DonThuocMauChiTiet_Delete_New(?,?,?)}";
				$del=$data->query( $store_name22, $params22);
			}
		}
	}
        
        
}
function del($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$check1="";
	if(isset($_POST['id'])){  
		$store_name="{call GD2_DonThuocMauChiTiet_DeleteAllByID_DonThuocMau (?,?)}";//tao bien khai bao store
		$params = array( 
					array($_POST["id"], SQLSRV_PARAM_IN),
					array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
					array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
				);	
		$get=$data->query( $store_name, $params);         
	}
	$store_name1="{call GD2_DM_DonThuocMau_Delete (?,?)}";//tao bien khai bao store
	$params1 = array( 
				array($_POST["id"], SQLSRV_PARAM_IN),
				array($_SESSION["user"]["id_user"],SQLSRV_PARAM_IN),
				array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
			);	
	$get1=$data->query( $store_name1, $params1);//Goi store	
}
?>

