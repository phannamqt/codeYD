<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array( $_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_lichsuchandoan_select(?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!=""){
	
		$ngaytao=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]." H:i");
	}else{
		
		$ngaytao="";
	}
	

    $responce->rows[$i]['id']=$row["ID_Kham"];		
	$responce->rows[$i]['cell']=
			array(		
				$row["ChanDoan"],
				$row["bacsy"],				
				$ngaytao,				
			);
		
    $i++; 
}
echo json_encode($responce);
?>
