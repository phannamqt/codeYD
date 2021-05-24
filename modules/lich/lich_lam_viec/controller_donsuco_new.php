<?php

switch ($_GET["oper"]) {
    case "add":
    add();
    break;
    case "edit":
    edit();
    break;
    case "del":
    del();
    break;
}

function add() {
$data= new SQLServer;
$store_name="{call [CC_Modify_Add_New] (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";

$outRe='';
$_POST["IndexId"]= (int)str_replace(' ', '',$_POST["IndexId"]);
$_POST["Ngayxayrasuco"] = date('Y-m-d', strtotime(str_replace('/', '-', $_POST["Ngayxayrasuco"])));

        $params = array(
                        $_POST["Ngayxayrasuco"],
                        $_POST['mausuco'],
                        $_POST["noidung"],
                        $_POST["denghicongthem"],
                        $_POST["send"],
                        $_POST["tinhDitre"],
                        $_POST["tinhRasom"],
                        $_POST["id_nhanvien"],
                        $_POST["tongCongTruc"],
                        $_POST["logThem"], $_POST["lichThem"],$_POST["khoantgianSend"],
                        $_SERVER['REMOTE_ADDR'],
                        $_SESSION["user"]["id_user"],
                        $_POST["IndexId"],
                       
                        array(&$outRe, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) 
                        );

                        $data->query( $store_name, $params);//Goi store
                        echo  $outRe;
                        
      }

      function del()
      {
        $check1="";
               // echo $_GET["_id_donkey"] ;
                $data = new SQLServer; //tao lop ket noi SQL
            $store_name = "{call CC_Modify_Del_New (?,?,?)}"; //tao bien khai bao store
            $params = array(
                array($_GET["_id_donkey"]),
                array($_SESSION["user"]["id_user"]),
                 array(&$check1,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT) 
                );
               $data->query($store_name, $params); //Goi store 
              echo  $check1;
      }
?>

