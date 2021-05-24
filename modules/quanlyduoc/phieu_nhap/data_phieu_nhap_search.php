

<?php

	$search="";
	$tungay=convert_date($_GET["tungay"]);
	$dengay=convert_date($_GET["denngay"]).' 23:59:59';
	$search .=" AND ID_NhapXuat = $_GET[id_loai]";		
    $data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_phieunhap_select (?,?,?)}";//tao bien khai bao store
	$params = array($tungay,$dengay,$search);//tao param cho store 
	//print_r($params);
	$get_lich=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	 	
	$responce = new stdClass;	 
	$kiemtra=true;	
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		 $responce->rows[$i]['id']=$row["ID_NhapKho"];
		 if($row["NgayDuyet"]==""){
			$row["NgayDuyet"]=$row["NgayDuyet"]; 
		 }else{
			$row["NgayDuyet"]=$row["NgayDuyet"]->format($_SESSION["config_system"]["ngaythang"]);
		 }		 
		 if($row["NgayHoaDon"]==""){
			$row["NgayHoaDon"]=$row["NgayHoaDon"]; 
		 }else{
			
			$row["NgayHoaDon"]=$row["NgayHoaDon"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 if($row["NgayLapPhieu"]==""){
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]; 
		 }else{
			
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 $responce->rows[$i]['cell']=array($row["ID_NhapKho"],$row["MaPhieu"],$row["nickname"],$row["NgayLapPhieu"],$row["NgayNhapKho"]->format('d-m-Y'),$row["ID_NguoiDuyet"],$row["NgayDuyet"],$row["ID_NCC"],$row["ID_Kho"],$row["ID_NhapXuat"],$row["PhanTramVat"],$row["TienVAT"],$row["ThanhTien"]+$row["TienVAT"],$row["SoHopDong"],$row["SoDonDatHang"],$row["SoHoaDon"],$row["NgayHoaDon"],$row["GhiChu"],$row["ID_NCC1"],$row["ID_Kho1"], $row["Is_BHYT"]
);
		 $i++; 
	}  
	echo json_encode($responce);


?>