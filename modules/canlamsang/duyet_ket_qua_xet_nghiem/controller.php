<?php
switch ($_GET["oper"]) {
    
    case "hoantat":
        hoantat("GD2_duyetketquaxetnghiem_upd");
        break;
    case "trangthai_hoantat":
    	trangthai_hoantat("GD2_Update_TrangThai_byID_Kham");
    	break;
     
}	 		 

function hoantat($store_name){
/*	 $chuoi1='(?,?,?,?,?)';
        $bien1=  array(($_POST["id_benhnhan"]),($_POST["id_xetnghiem"]),($_POST["id_kham"]),($_POST["daduyetketqua"]),($_POST["nguoiduyet"]));
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call $store_name $chuoi1}";//tao bien khai bao store
	$params = $bien1;//tao param cho store 
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store	*/
    $data= new SQLServer;//tao lop ket noi SQL
    foreach ($_POST["rows"] as $key => $value) {

            $params1=array(($value["id_kqxn"]),($value["daduyetketqua"]),($value["nguoiduyet"]));
           // print_r($params1);
            $store_name1="{call GD2_duyetketquaxetnghiem_upd (?,?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }
    
}
function trangthai_hoantat($store_name){
/*   $chuoi1='(?,?,?,?,?)';
        $bien1=  array(($_POST["id_benhnhan"]),($_POST["id_xetnghiem"]),($_POST["id_kham"]),($_POST["daduyetketqua"]),($_POST["nguoiduyet"]));
    $data= new SQLServer;//tao lop ket noi SQL
    $store_name="{call $store_name $chuoi1}";//tao bien khai bao store
    $params = $bien1;//tao param cho store 
    $get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store */
    $data= new SQLServer;//tao lop ket noi SQL
    foreach ($_POST["rows"] as $key => $value) {

            $params1=array(($value["id_kham"]),($value["trangthai"]));
            print_r($params1);
            $store_name1="{call GD2_Update_TrangThai_byID_Kham_XetNghiem (?,?)}";
           // print_r($params1);
            $get2=$data->query( $store_name1, $params1);
      }
    
}
?>

