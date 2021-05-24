<?php
switch ($_GET["oper"]) {
    
    case "luu1":
        luu1("GD2_Physio_kham_update");
        break;
    case "luu2":
    	luu2("GD2_PHYSIOTHERAPY_Update");
    	break;
    case "luu":
      luu("GD2_PHYSIOTHERAPY_Update");
      break;
     
}	 		 

function luu1($store_name){
        $chuoi1='(?,?,?,?,?,?,?)';
        $bien1=  array(($_POST["BSChanDoan"]),($_POST["NgayGioChanDoan"]),($_POST["ChanDoan"]),($_POST["MoTa"]),($_POST['KetLuan']),($_POST['ID_Kham']),($_POST['ID_TrangThai']));
        
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi1}";//tao bien khai bao store
	$params = $bien1;//tao param cho store 
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
		$chuoi2='(?)';
        $bien2=  array($_POST["ID_Kham"]);
       
	$store_name2="{call GD2_physio_diary_del $chuoi2}";//tao bien khai bao store
	$params2 = $bien2;//tao param cho store 
	$get_danh_muc_phong_ban2=$data->query( $store_name2, $params2);
	echo $get_danh_muc_phong_ban2;
	
  $store_name4="{call GD2_PHYSIOTHERAPY_Update (?,?)}";//tao bien khai bao store
  $params4 = array( 
                  $_POST["ID_Physio"],
                  $_POST["ID_TrangThai"]
               ); 
  $get=$data->query( $store_name4, $params4);

	if(isset($_POST['cc'])){  
       foreach ($_POST['cc'] as $key => $value) {
            unset($params1);
           // print_r($_POST['id']);
            $params3=array($value['ID_Kham'],$value['ngay'],$value['gio'],$value['dienbienbenh'],$value['nguoithuchien']);
            //print_r($params1);
            $store_name3="{call GD2_PHYSIOTHERAPY_DIARY_Insert (?,?,?,?,?)}";
            //print_r($params1);
           $get3=$data->query( $store_name3, $params3);
      }}
}
function luu2($store_name){
	 $chuoi1='(?,?)';
        $bien1=  array(
                  $_POST["ID_Physio"],
                  $_POST["ID_TrangThai"]

                  );
        
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi1}";//tao bien khai bao store
	$params = $bien1;//tao param cho store 
		$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	
}
function luu(){ 
  $data= new SQLServer;
  //print_r($_POST);

   
//print_r($_POST['data']);
   
       foreach ($_POST['cc'] as $key => $value) {
       
            $params1=array($value["ID_Physiotherapy"],'Xong');
            //print_r($params1);
            $store_name1="{call GD2_PHYSIOTHERAPY_Update (?,?)}";
            //print_r($params1);
           $get2=$data->query( $store_name1, $params1);
          //print_r($_POST['data']);
    }
   $params2=  array(
                  $_GET["id_kham_update"]

                  );
        

  $store_name2="{call GD2_Physio_kham_update_by_id_kham(?)}";//tao bien khai bao store
  
    $get_danh_muc_phong_ban=$data->query( $store_name2, $params2);//Goi store 
 
}
?>

