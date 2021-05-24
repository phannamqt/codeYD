<?php

//print_r($_GET);
//$page = $_GET['page'];
//$id_luotkham=$_GET['id_luotkham'];
//$MaBenhNhan=$_GET['MaBenhNhan'];
//$id_userlogin=$_SESSION["user"]["id_user"];
switch ($_GET["oper"]) {
    case "update_chuasansang":
        update_chuasansang();
        break;
    case "update_huyxephang":
        update_huyxephang();
        break;
    case "thongtinbenhnhan":
        thongtinbenhnhan();
        break;
     case "thongtinluotkham":
        thongtinluotkham("GD2_LichHenKham_Update_HuyHen");
        break;
     case "update_hoanTatHoSo":
       update_hoanTatHoSo();
        break;
    case "update_datraKQ":
    update_datraKQ();
    break;
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
function update_datraKQ(){

    $data= new SQLServer;//tao lop ket noi SQL
    $store_name="{call Gd2_ThongTinLuotKham_UpdateDaTraKQ (?,?,?)}";//tao bien khai bao store
        if($_GET['datraKQ']==1)
        {
    $params = array($_GET['id_luotkham'],0,$_SESSION["user"]["id_user"]);
        }
        else{$params = array($_GET['id_luotkham'],1,$_SESSION["user"]["id_user"]);}
       // print_r($params) ;
    $data->query( $store_name, $params);//Goi store

}
function update_hoanTatHoSo(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call [GD2_ThongTinLuotKham_UpdateHoanTatHoSo] (?,?,?)}";//tao bien khai bao store

        if($_GET['hoanTatHoSo']==1)
        {
	$params = array($_GET['id_luotkham'],0,$_SESSION["user"]["id_user"]);
        }
        else{$params = array($_GET['id_luotkham'],1,$_SESSION["user"]["id_user"]);

        }
        //print_r($params);
	$data->query( $store_name, $params);//Goi store
}

function thongtinbenhnhan($store_name){
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
function thongtinluotkham($store_name){
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


function update_huyxephang(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_ThongTinLuotKham_UpdateID_TrangThai (?,?,?)}";//tao bien khai bao store
	$params = array($_GET['id_luotkham'],"HuyXepHang",$_SESSION["user"]["id_user"]);
      //  echo $params;
	$data->query( $store_name, $params);//Goi store
}


?>

