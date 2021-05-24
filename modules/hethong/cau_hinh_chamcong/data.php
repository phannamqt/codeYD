<?php
$data= new SQLServer;//tao lop ket noi SQL\
$param1=$_SESSION["user"]["id_user"];




if($_GET['quyenxemfullreport']==1 ){
	$param2=null;

}else{
	$param2=$_SERVER['REMOTE_ADDR'];
}

$params = array();
//print_r($_GET);
$store_name="{call GD2_CauHinhChamCong_select()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["Id_auto"];
    $responce->rows[$i]['cell']=array($row["Id_auto"],
    	$row["TenCauHinh"],$row["GiaTri"],$row["Ghichu"]
    	,$row["IsHeThongGlobal"],
    	);
    $i++;
}
echo json_encode($responce);
//Id_auto	TenCauHinh	GiaTri	Ghichu	IsHeThongGlobal
/*1	KhoangSom	30	Khoảng thời gian cho phép đi sớm so với mốc bắt đầu vào ca	1*/
?>