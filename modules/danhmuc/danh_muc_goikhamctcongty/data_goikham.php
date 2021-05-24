<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call GD2_spGoiKhamChoCongTy_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	 if($row["NgayBatDau"]!=""){
   		$row["NgayBatDau"]=$row["NgayBatDau"]->format($_SESSION["config_system"]["ngaythang"]); 
		
   }
   if($row["NgayKetThuc"]!=""){
    	$row["NgayKetThuc"]=$row["NgayKetThuc"]->format($_SESSION["config_system"]["ngaythang"]);
   }
    if($row["NgayGioTao"]!=""){
   		$row["NgayGioTao"]=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
   }
    $responce->rows[$i]['id']=$row["ID_GoiKhamChoCongTy"];
    $responce->rows[$i]['cell']=array($row["ID_GoiKhamChoCongTy"],$row["ID_KhachHangCTy"],$row["TenDotKham"],$row["ID_GoiKham"],$row["NgayBatDau"],$row["NgayKetThuc"],$row["ChietKhau"],$row["GhiChu"],$row["ID_NguoiTao"],$row["NgayGioTao"],$row["IsCancelled"]);
    $i++; 
}

//print_r($responce);
echo json_encode($responce);
?>