<?php
$data= new SQLServer;//tao lop ket noi SQL 
$param1=$_GET["id"];
if($param1>0){
	$store_name="{call GD2_KhamSK_SelectByID_luotKham(?)}";//tao bien khai bao store
	$params = array($param1);//tao param cho store 
	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$count=  count($tam);
	
	$responce = new stdClass;
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		if($row["ID_TrangThai"]=="HuyBo")
			$huy=1;
		else
			$huy=0;
	
		$responce->rows[$i]['id']=$row["ID_Kham"];  //
		$responce->rows[$i]['cell']=array($row["IDLoaiKham"],"",$row["SoTT"],$row["TenLoaiKham"],$row["PhiThucHien"],$row["ID_TrangThai"],$row["BSChiDinh"],$row["ID_Kham"],$row["ID_LuotKham"],$row["MaBenhNhan"],1,$huy,'','','',$row["XetNghiem"]); 
		$i++; 
	}
	echo json_encode($responce);
}
?>