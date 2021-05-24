<?php

switch ($_GET["oper"]) {
    case "add":
    add("CC_Modify_Add");
    break;
    case "edit":
    edit("CC_Modify_Upd_Don");
    break;
    case "del":
    delete("CC_Modify_Del");
    break;
}

function add($store_name) {
   unset($_POST["oper"]);
   unset($_POST["id"]);
   unset($_POST["Manv"]);
   unset($_POST["TBPOK"]);
   unset($_POST["GSCMO"]);
   unset($_POST["GSHCOK"]);
   unset($_POST["Finished"]);
   unset($_POST["IndexID"]);
    unset($_POST["ChiTietCong"]);
    unset($_POST["LogkhongHopLe"]);
    unset($_POST["TreSomChiTiet"]);
   $i = 0;
   $chuoi = "(";
    $_POST["Ngayxayrasuco"] = date('Y-m-d', strtotime(str_replace('/', '-', $_POST["Ngayxayrasuco"])));
    foreach ($_POST as $key => $value) {

        $bien[] = $value;
        $i++;
        if (count($_POST) == $i) {
            $bien[] = array($_SESSION["user"]["id_user"]);
            $chuoi.="?";
        } elseif (count($_POST) > $i) {
            $chuoi.="?,";
        }
    }
    $chuoi.=",?)";
//print_r($chuoi);
//print_r($bien);
    $data = new SQLServer; //tao lop ket noi SQL
    $store_name = "{call $store_name $chuoi}"; //tao bien khai bao store
    $params = $bien; //tao param cho store 

    $data->query($store_name, $params); //Goi store
}

function edit($store_name) {
    unset($_POST["oper"]);
    unset($_POST["id"]);
    unset($_POST["Id_nhanvien"]);
    unset($_POST["TBPOK"]);
    unset($_POST["GSCMO"]);
    unset($_POST["GSHCOK"]);
    unset($_POST["Finished"]);
        unset($_POST["ChiTietCong"]);
    unset($_POST["LogkhongHopLe"]);
    unset($_POST["TreSomChiTiet"]);
    $i = 0;
    $chuoi = "(";
// $originalDate = $_POST["Ngayxayrasuco"];
//$date = str_replace('/', '-', $originalDate);
//$date2= date('Y-m-d', strtotime(str_replace('/', '-', $_POST["Ngayxayrasuco"])));

        $_POST["Ngayxayrasuco"] = date('Y-m-d', strtotime(str_replace('/', '-', $_POST["Ngayxayrasuco"])));
        foreach ($_POST as $key => $value) {

            $bien[] = $value;
            $i++;
            if (count($_POST) == $i) {
                $bien[] = array($_SESSION["user"]["id_user"]);
                $chuoi.="?";
            } elseif (count($_POST) > $i) {
                $chuoi.="?,";
            }
        }
        $chuoi.=",?)";
print_r($_POST);
print_r($bien);
    $data = new SQLServer; //tao lop ket noi SQL
    $store_name = "{call $store_name $chuoi}"; //tao bien khai bao store
    $params = $bien; //tao param cho store 

    $data->query($store_name, $params); //Goi store
}

function delete($store_name) {
    $data = new SQLServer; //tao lop ket noi SQL
    $store_name = "{call $store_name (?,?)}"; //tao bien khai bao store
    $params = array(
        array($_POST["id"]),
        array($_SESSION["user"]["id_user"]),
        );
    $data->query($store_name, $params); //Goi store	
}
?>

