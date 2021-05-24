<?php



switch ($_REQUEST["oper"]) {

          case "edit":

          edit("CC_Modify_Upd_DuyetDon");
          break;

          break;
          case "tinhlaicong":

          tinhlaicong();
          break;

}





/*function add($store_name) {
    $check1 = "";
    $chuoi = "(";
    $i = 0;

    foreach ($_POST as $key => $value) {
        if (($key != "oper") && ($key != "id")) {
            $bien[] = $value;
            $i++;
            if (count($_POST) - 2 == $i) {
                $chuoi.="?";
                $bien[] = array($_SESSION["user"]["id_user"]);
                $bien[] = array(&$check1,  SQLSRV_PARAM_OUT, SQLSRV_PHPTYPE_INT);
            } elseif (count($_POST) - 2 > $i) {
                $chuoi.="?,";
            }
        }
    }
    $chuoi.=",?,?)";
    $data = new SQLServer; //tao lop ket noi SQL
    $store_name = "{call $store_name $chuoi}"; //tao bien khai bao store
    $params = $bien; //tao param cho store
    $get_danh_muc_phong_ban = $data->query($store_name, $params); //Goi store
    if ($check1 > 0) {
        echo "id;" . $check1;
    } else {
        echo ";";
    }
}*/

function edit($store_name){
    $check1="";
	$chuoi="(";
	$i=0;
	$id_return="";
	unset($_POST["oper"]);


	foreach($_POST as $key => $value) {
		//if(($key!="oper")&&($key!="id")){
       // echo ($key.'  '.$value.'<br>');
			  $bien[]= convert_comma_dot($value);
			  $i++;
			  if(count($_POST)==$i){
				$bien[]=array($_SESSION["user"]["id_user"]);
				$chuoi.="?";
			  }elseif(count($_POST)>$i){
				$chuoi.="?,";
			  }
		//}
	}
	$chuoi.=",?)";



     $bien2=  array(
$_POST["TongCong"],
$_POST["ccDiTre"],
$_POST["ccRaSom"],
$_POST["TBPOK"],
$_POST["GSCMOK"],
$_POST["GSHCOK"],
$_POST["Finished"],
$_POST["ID_ChamCong"],
$_POST["IndexID"],
$_POST["MauDon"],$_POST["ccCongTruc"],

$_SESSION["user"]["id_user"],

);
    // print_r($bien2);
    $chuoi2='(?,?,?,?,?,?
    ,?,?,?,?,?,?)';
    /* TongCong 254
ccDiTre 1
ccRaSom 1
TBPOK 0
Finished 0
ID_ChamCong 131774
id 16291
GSHCOK 0
GSCMOK 0
IndexID 16291*/




	//print_r($_POST);
	print_r($bien2);
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi2}";//tao bien khai bao store
	$params = $bien2;//tao param cho store
	$data->query( $store_name, $params);//Goi store

}

function tinhlaicong() {

    $data = new SQLServer; //tao lop ket noi SQL
    $store_name = "{call GD2_TinhCong (?,?,?,?)}"; //tao bien khai bao store


    $start = strtotime($_GET["fromdate"]);
    $end = strtotime($_GET["todate"]);
    $currentDate =strtotime(date("Y-m-d"));
if($currentDate>=$end)

{
    $diff = $end - $start;
    $solan = round($diff / 86400);
}
 else {
    $diff = $currentDate - $start;
    $solan = round($diff / 86400);
}





    switch ($_GET["option"]) {
        case '1'://theo nhân viên
            for ($i = 0; $i <= $solan; $i++) {


                $ngay = date('Y-m-d', $start + (24 * 3600 * $i));
                // echo $i.'--'.$ngay.'<br>';
                $params = array(
                    $_GET["id_phongbanORnhanvien"],
                    $ngay,
                    0,
                    $_SESSION["user"]["id_user"],
                );
              // print_r($params);
              $get=$data->query( $store_name, $params);
            }
            break;
              case '2'://theo bộ phận
                  // lấy mảng iđ theo phòng ban
                    $store_name_laymangid = "{call GD2_DM_NhanVien_SelectIDByID_PhongBan(?)}";
                   $params = array(  $_GET["id_phongbanORnhanvien"]);

                  $get_manhanvien = $data->query($store_name_laymangid, $params);
                  $excute = new SQLServerResult($get_manhanvien);
                  $tam = $excute->get_as_array();


                  $i = 0;

               foreach ($tam as $row) {//duyet qua từng nhân viên và tính lại công



                    for ($i = 0; $i <= $solan; $i++) {


                $ngay = date('Y-m-d', $start + (24 * 3600 * $i));
                // echo $i.'--'.$ngay.'<br>';
                $params2 = array(
                    $row["ID_NhanVien"],
                    $ngay,
                    0,
                    $_SESSION["user"]["id_user"],
                );
              // print_r($params2);
             $data->query( $store_name, $params2);
            }




              // echo    $row["ID_NhanVien"].'<br>';




    $i++;
}





                  //
                  break;
    }




    //$get=$data->query( $store_name, $params);//Goi store
}

class myClass {

    function diff($start, $end = false) {
        /*
         * For this function, i have used the native functions of PHP. It calculates the difference between two timestamp.
         *
         * Author: Toine
         *
         * I provide more details and more function on my website
         */

        // Checks $start and $end format (timestamp only for more simplicity and portability)
        if (!$end) {
            $end = time();
        }
        if (!is_numeric($start) || !is_numeric($end)) {
            return false;
        }
        // Convert $start and $end into EN format (ISO 8601)
        $start = date('Y-m-d H:i:s', $start);
        $end = date('Y-m-d H:i:s', $end);
        $d_start = new DateTime($start);
        $d_end = new DateTime($end);
        $diff = $d_start->diff($d_end);
        // return all data
        $this->year = $diff->format('%y');
        $this->month = $diff->format('%m');
        $this->day = $diff->format('%d');
        $this->hour = $diff->format('%h');
        $this->min = $diff->format('%i');
        $this->sec = $diff->format('%s');
        return true;
    }

    function dateDiff($start, $end) {
        $start_ts = strtotime($start);
        $end_ts = strtotime($end);
        $diff = $end_ts - $start_ts;
        return round($diff / 86400);
    }

}
?>

