<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call MED_DoiChieu_ChiTiet (?)}";
$params = array($_GET['id_luotkham']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();

$i=0; 

$responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 
/* if($row["NgayGio"]!=''){
	$row["NgayGio"]=$row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
} */

   $responce[] = array(
		'id'         			=> $i,   
		'ID_AuTo'   			=> $row["id"],
		'SoLuong'    			=>$row["SoLuong"],	
		'PhiDuKien'    			=>$row["PhiDuKien"],	
		'PhiThucHien'    		=>$row["PhiThucHien"],	
		'TenLoaiKham'    		=>$row["TenLoaiKham"],
	
		'Loai'    		=>$row["Loai"],		
	);			
	
    $i++; 
}

if(count($tam)==0){
echo '[]';	
}else{

echo json_encode($responce);
}

unset($responce);
?>