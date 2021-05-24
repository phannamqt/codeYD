<?php
$data= new SQLServer;//tao lop ket noi SQL\
$param1=$_SESSION["user"]["id_user"];




if($_GET['quyenxemfullreport']==1 ){
	$param2=null;
	
}else{
	$param2=$_SERVER['REMOTE_ADDR'];
}

$params = array($param1,$param2);//tao param cho store 
//print_r($_GET);
$store_name="{call GD2_PrinterConfig_Select_All(?,?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	//if($row["KieuIn"]==0) $row["KieuIn"]='In dọc';
	//else $row["KieuIn"]='In ngang';
    $responce->rows[$i]['id']=$row["ID_auto"];
    $responce->rows[$i]['cell']=array($row["ID_auto"],$row["TenMay"],$row["IPMay"],$row["TenReport"],$row["UserWindowName"],$row["TenMayIn"],$row["KieuIn"],$row["SoluongBanIn"],$row["margin"]);
    $i++; 
}
echo json_encode($responce);
//$_SERVER['REMOTE_ADDR']
?>