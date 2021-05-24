<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien("");
        break;
    case "luuthuchien":
        luuthuchien("");
        break;
    case "hoantat":
        hoantat("");
        break;
     case "luuhoantat":
        luuhoantat("");
        break; 
     case "luudangkham":
        luudangkham("");
        break;     
}	 		 

function dathuchien($store_name){	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del_New (?,?,?)}";//tao bien khai bao store
	$params = array( 
                $_POST["id_kham"],
                $_SESSION["user"]["id_user"],
                $_SERVER['REMOTE_ADDR']
            );	
	$get=$data->query( $store_name, $params);//Goi store

  $check_insert_1='';
  $params_insert_1=  array(
        $_POST['id_kham'],
        $_POST["trongluongthai"],
        $_POST["songaythai"],
        $_POST["soluongthai"],
        $_SESSION["user"]["id_user"],

        $_SERVER['REMOTE_ADDR'],
        array(&$check_insert_1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
    );

	$store_name_insert_1="{call GD2_SieuAmThai4D_Insert_New (?,?,?,?,? ,?,?)}";//tao bien khai bao store

	$get_insert_1=$data->query( $store_name_insert_1, $params_insert_1);//Goi store

  $params3= array(
          $_POST["nguoithuchien"],
          $_POST["mota"],
          $_POST["ketluan"],
          $_POST["loikhuyen"],
          $_POST["id_kham"],

          $_POST["id_trangthai"],
          $_POST["giothuchien"],
          $_POST["phithuchien"],
          $_SESSION["user"]["id_user"],
          $_SERVER['REMOTE_ADDR'],
    ); 
	$store_name3="{call GD2_Kham_DaThucHien_SieuAm4D_New (?,?,?,?,? ,?,?,?,?,?)}";//tao bien khai bao store
	$get3=$data->query( $store_name3, $params3);//Goi store

  $params5=array(
          $_POST["id_luotkham"]
         );

  $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
  $get5=$data->query( $store_name5, $params5);

	if($_POST['para']!="---"){     
     $check_insert_2='';    
      $params4=array(
                $_POST["id_luotkham"],
                $_POST['para'],
                $_SESSION["user"]["id_user"],
                $_SERVER['REMOTE_ADDR'],
                array(&$check_insert_2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
              );
      $store_name4="{call GD2_ThongSoPARA_Insert_New (?,?,?,?,?)}";
      $get4=$data->query( $store_name4, $params4);
  }

}

function luuthuchien($store_name){

	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del_New (?,?,?)}";//tao bien khai bao store
  $params = array( 
                $_POST["id_kham"],
                $_SESSION["user"]["id_user"],
                $_SERVER['REMOTE_ADDR']
            );  
	$get=$data->query( $store_name, $params);//Goi store

  $check_insert_1='';
  $params_insert_1=  array(
        $_POST['id_kham'],
        $_POST["trongluongthai"],
        $_POST["songaythai"],
        $_POST["soluongthai"],
        $_SESSION["user"]["id_user"],

        $_SERVER['REMOTE_ADDR'],
        array(&$check_insert_1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
    );

  $store_name_insert_1="{call GD2_SieuAmThai4D_Insert_New (?,?,?,?,? ,?,?)}";//tao bien khai bao store
  $get_insert_1=$data->query( $store_name_insert_1, $params_insert_1);//Goi store

	$params3=  array(
    $_POST['nguoithuchien'],
    $_POST['chuandoan1'],
    $_POST["mota"],
    $_POST["ketluan"],
    $_POST["loikhuyen"],

    $_POST["id_kham"],
    $_POST["id_trangthai"],
    $_SESSION["user"]["id_user"],
    $_POST['ngaygiosua'],
    $_POST["phithuchien"],

    $_SESSION["user"]["id_user"],
    $_SERVER['REMOTE_ADDR'],
  );
  
	
	$store_name3="{call GD2_Kham_Update_SieuAm4D_New (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store
	$get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);

	$params5=array(
    $_POST["id_luotkham"]
  );
  $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
  $get5=$data->query( $store_name5, $params5);

	if($_POST['para']!="---"){         
    $check_insert_2='';    
    $params4=array(
              $_POST["id_luotkham"],
              $_POST['para'],
              $_SESSION["user"]["id_user"],
              $_SERVER['REMOTE_ADDR'],
              array(&$check_insert_2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
            );
    $store_name4="{call GD2_ThongSoPARA_Insert_New (?,?,?,?,?)}";
    $get4=$data->query( $store_name4, $params4);
  }

}

function luudangkham($store_name){
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del_New (?,?,?)}";//tao bien khai bao store
  $params = array( 
                $_POST["id_kham"],
                $_SESSION["user"]["id_user"],
                $_SERVER['REMOTE_ADDR']
            );
 // print_r($params);
	$get=$data->query( $store_name, $params);//Goi store


  $check_insert_1='';
  $params_insert_1=  array(
        $_POST['id_kham'],
        $_POST["trongluongthai"],
        $_POST["songaythai"],
        $_POST["soluongthai"],
        $_SESSION["user"]["id_user"],

        $_SERVER['REMOTE_ADDR'],
        array(&$check_insert_1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
    );

  $store_name_insert_1="{call GD2_SieuAmThai4D_Insert_New (?,?,?,?,? ,?,?)}";//tao bien khai bao store
  $get_insert_1=$data->query( $store_name_insert_1, $params_insert_1);//Goi store
  //print_r($params_insert_1);


	$params3=  array(
    $_POST['nguoithuchien'],
    $_POST['chuandoan1'],
    $_POST["mota"],
    $_POST["ketluan"],
    $_POST["loikhuyen"],

    $_POST["id_kham"],
    $_POST["id_trangthai"],
    $_SESSION["user"]["id_user"],
    $_POST['ngaygiosua'],
    $_POST["phithuchien"],

    $_SESSION["user"]["id_user"],
    $_SERVER['REMOTE_ADDR'],
  );

  $store_name3="{call GD2_Kham_Update_SieuAm4D_New (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store
  $get3=$data->query( $store_name3, $params3);
 // print_r($params3);


  $params5=array($_POST["id_luotkham"]);
  $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
  $get5=$data->query( $store_name5, $params5);

	if($_POST['para']!="---"){  
    $check_insert_2='';    
    $params4=array(
              $_POST["id_luotkham"],
              $_POST['para'],
              $_SESSION["user"]["id_user"],
              $_SERVER['REMOTE_ADDR'],
              array(&$check_insert_2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
            );
    $store_name4="{call GD2_ThongSoPARA_Insert_New (?,?,?,?,?)}";
    $get4=$data->query( $store_name4, $params4);
  }

}
function hoantat($store_name){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del_New (?,?,?)}";//tao bien khai bao store
  $params = array( 
                $_POST["id_kham"],
                $_SESSION["user"]["id_user"],
                $_SERVER['REMOTE_ADDR']
            );  
	$get=$data->query( $store_name, $params);//Goi store


 $check_insert_1='';
  $params_insert_1=  array(
        $_POST['id_kham'],
        $_POST["trongluongthai"],
        $_POST["songaythai"],
        $_POST["soluongthai"],
        $_SESSION["user"]["id_user"],

        $_SERVER['REMOTE_ADDR'],
        array(&$check_insert_1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
    );

  $store_name_insert_1="{call GD2_SieuAmThai4D_Insert_New (?,?,?,?,? ,?,?)}";//tao bien khai bao store
  $get_insert_1=$data->query( $store_name_insert_1, $params_insert_1);//Goi store
	


  $bien3=  array(
    $_POST['nguoithuchien'],
    $_POST["chuandoan1"],
    $_POST["mota"],
    $_POST["ketluan"],
    $_POST["loikhuyen"],

    $_POST["id_kham"],
    $_POST["id_trangthai"],
    $_POST["giohoantat"],
    $_POST["phithuchien"],
    $_SESSION["user"]["id_user"],

    $_SERVER['REMOTE_ADDR'],
  );
        
	$store_name3="{call GD2_Kham_HoanTat_SieuAm4D_New (?,?,?,?,? ,?,?,?,?,? ,?)}";//tao bien khai bao store
	$params3 = $bien3;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name3, $params3);//Goi store	

  $params5=array(($_POST["id_luotkham"]));
  $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
  $get5=$data->query( $store_name5, $params5);

	if($_POST['para']!="---"){  
		$check_insert_2='';    
    $params4=array(
              $_POST["id_luotkham"],
              $_POST['para'],
              $_SESSION["user"]["id_user"],
              $_SERVER['REMOTE_ADDR'],
              array(&$check_insert_2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
            );
    $store_name4="{call GD2_ThongSoPARA_Insert_New (?,?,?,?,?)}";
    $get4=$data->query( $store_name4, $params4);
  }
}
function luuhoantat($store_name){
	
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_SieuAm4D_Del_New (?,?,?)}";//tao bien khai bao store
  $params = array( 
                $_POST["id_kham"],
                $_SESSION["user"]["id_user"],
                $_SERVER['REMOTE_ADDR']
            );  
	$get=$data->query( $store_name, $params);//Goi store
  
  $check_insert_1='';
  $params_insert_1=  array(
        $_POST['id_kham'],
        $_POST["trongluongthai"],
        $_POST["songaythai"],
        $_POST["soluongthai"],
        $_SESSION["user"]["id_user"],

        $_SERVER['REMOTE_ADDR'],
        array(&$check_insert_1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
    );

  $store_name_insert_1="{call GD2_SieuAmThai4D_Insert_New (?,?,?,?,? ,?,?)}";//tao bien khai bao store
  $get_insert_1=$data->query( $store_name_insert_1, $params_insert_1);//Goi store


  $params3=  array(
    $_POST['nguoithuchien'],
    $_POST['chuandoan1'],
    $_POST["mota"],
    $_POST["ketluan"],
    $_POST["loikhuyen"],

    $_POST["id_kham"],
    $_POST["id_trangthai"],
    $_SESSION["user"]["id_user"],
    $_POST['ngaygiosua'],
    $_POST["phithuchien"],

    $_SESSION["user"]["id_user"],
    $_SERVER['REMOTE_ADDR'],
  );
  
  $store_name3="{call GD2_Kham_Update_SieuAm4D_New (?,?,?,?,? ,?,?,?,?,? ,?,?)}";//tao bien khai bao store
  $get_danh_muc_phong_ban3=$data->query( $store_name3, $params3);


	$params5=array($_POST["id_luotkham"]);
  $store_name5="{call GD2_ThongSoPARA_DeleteAllByID_LuotKham (?)}";
  $get5=$data->query( $store_name5, $params5);

	if($_POST['para']!="---"){  
    $check_insert_2='';    
    $params4=array(
              $_POST["id_luotkham"],
              $_POST['para'],
              $_SESSION["user"]["id_user"],
              $_SERVER['REMOTE_ADDR'],
              array(&$check_insert_2,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
            );
    $store_name4="{call GD2_ThongSoPARA_Insert_New (?,?,?,?,?)}";
    $get4=$data->query( $store_name4, $params4);
  }
}
?>

