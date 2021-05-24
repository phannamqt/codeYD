<?php
 
switch ($_GET["oper"]) {
    case "update":
     update();
        break;

}	 		 
function update()
{
  
  $data= new SQLServer;//tao lop ket noi SQL
  $store_name="{call [GD2_Update_GioHenVaNoiThucHien] (?,?,?,?,?)}";//tao bien khai bao store ThongSoKyThuat
  foreach ($_POST['id'] as $key => $value) {
  $params1 = array($value['ID_Kham'],$value['NguoiThucHien2'],convert_date($value['NgayGioHenTraKQ']),$value['ThongSoKyThuat'],$_SESSION['user']['id_user'] 
            );
 // print_r($params1);
    $data->query( $store_name, $params1);//Goi store 


  }
}

