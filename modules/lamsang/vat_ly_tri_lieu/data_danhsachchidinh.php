<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["idluotkham"]); 
$store_name="{call GD2_VLTL_ByID_LuotKham(?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
	 if($row["NgayGioTao"]!='')
            $row["NgayGioTao"]=$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioTao"]='';
    $responce->rows[$i]['id']=$row["ID_Physiotherapy"];
    $responce->rows[$i]['cell']=array(
			$row["ID_Physiotherapy"],
			$row["TenLoaiKham"],
			$row["NguoiCD"],
			$row["NgayGioTao"],
			$row["SoLanThucHienTrongNgay"],
			
			$row["SoNgayThucHien"],
			);
     
    $i++; 
}  
echo json_encode($responce);
?>