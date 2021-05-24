<?php



switch ($_GET["oper"]) {

  case "hienthilich":

  hienthilich("GD2_UpHideLich_DM_NVien");
  break;

}


function hienthilich($store_name){

	unset($_POST["oper"]);

  $bien2=  array(
    $_POST["id"],
    $_POST["HideLich"],
    $_SESSION["user"]["id_user"],

    );
  $chuoi2='(?,?,?)';
  $data= new SQLServer;
  $store_name="{call $store_name $chuoi2}";
  $params = $bien2;
  $data->query( $store_name, $params);

}

?>

