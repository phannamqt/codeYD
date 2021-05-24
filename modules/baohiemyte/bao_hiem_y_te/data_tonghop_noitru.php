<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_baocaonoitru_bhyt_thongke(?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce= new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["ngaygio"]!=""){
		$row["ngaygio"]=date_timestamp_get($row["ngaygio"]);
	}
	$responce[] = array(
		  'id'       			 => $row["ID_LuotKham"],    
		  'tenbn' 	        	 => $row["tenbn"],
		  'NamSinh'         	 => $row["NamSinh"],
		  'GioiTinh'      		 => $row["GioiTinh"], 
		  'SoThe'    			 => $row["SoThe"],  
		  'Ma_KCB_BanDau'  		 => $row["Ma_KCB_BanDau"],
		  'MaICD10'  			 => $row["MaICD10"],
		  'thoigianvaokham'      => $row["thoigianvaokham"],
		  'ThoiGianKetThucKham'  => $row["ThoiGianKetThucKham"], 
		  'ID_LuotKham'   	     => $row["ID_LuotKham"],
		  'ID_BenhNhan'   	     => $row["ID_BenhNhan"],
		  'ID_ThuTraNo'     	 => $row["ID_ThuTraNo"],
		  'ngaygionho'     	     => $row["ngaygio"],
		  'ngaygiolon'     	     => $row["ngaygio"],
		  'ID_NguoiHoanTatA'     => $row["ID_NguoiHoanTatA"],
  	);  
    $i++;  
}  
echo json_encode($responce);
?>
