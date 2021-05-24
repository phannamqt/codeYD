<?php  
$idnhanvien = $_GET['idnhanvien'];
$from= date('Y-m-d',$_GET['start']);
$to= date('Y-m-d',$_GET['end']); 
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
 
$params = array('ID_HenKham','0','100000000','ID_BSYeuCau ASC',',GioHenKham ASC ','Lichhenkham'," (NgayHenKham  BETWEEN '$from' AND '$to')  AND HuyHen=0 
AND ID_BSYeuCau=$idnhanvien",'*');//tao param cho store
$get_lich_kham=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich_kham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 		  
//print_r($tam);
 

$system_config=get_system_config(); 
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
   // $responce->rows[$i]['id']=$row["ID_NhanVien"];
    //$row["TieuDe"]=str_ireplace("--","\r",$row["TieuDe"]);
    $responce[]=array('id' => $row["ID_HenKham"],'title' => $row["TieuDe"],'start' =>$row["GioHenKham"]->format("Y-m-d H:i:s"),'end' =>$row["GioHenKham"]->format("Y-m-d")." ".($row["GioHenKham"]->format("H:")).($row["GioHenKham"]->format("i")+$system_config["GD2_KhoangThoiGianHenKham"]).":00",'url' => "#","allDay" => false);
    $i++; 
}echo json_encode($responce);

function get_system_config(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array('VarName','0','1000000','VarName','ASC','SysVars'," Category='lich_hen_kham'",'*');//tao param cho store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
	foreach ($tam as $row) {//duyet toan bo mang tra ve
    	$system_config[$row["VarName"]]=$row["DefaultValue"];
	}  
	return $system_config;
}
?>