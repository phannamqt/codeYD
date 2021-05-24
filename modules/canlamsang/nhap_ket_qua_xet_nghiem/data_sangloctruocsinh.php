<?php
$data= new SQLServer;//tao lop ket noi SQL 
$params = array($_GET["id_luotkham"]);//tao param cho store 
$store_name="{call GD2_SangLocTruocSinh_SelectAllByID_LuotKham(?)}";//tao bien khai bao store
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	 if($row["NgayKinhCuoi"]!='')
            $row["NgayKinhCuoi"]=$row["NgayKinhCuoi"]->format($_SESSION["config_system"]["ngaythang"]);
    else $row["NgayKinhCuoi"]='';

     if($row["NgaySieuAm"]!='')
            $row["NgaySieuAm"]=$row["NgaySieuAm"]->format($_SESSION["config_system"]["ngaythang"]);
    else $row["NgaySieuAm"]='';
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array(
    	$row["CanNang"],
    	$row["Para"],
    	$row["IVF"],
    	$row["CoTieuDuong"],
    	$row["CoHutThuoc"],
    	$row["NgayKinhCuoi"],
    	$row["NgaySieuAm"],
    	$row["TuanThai"],
    	$row["NgayThai"],
    	$row["SoLuongThai"],
    	$row["CLR"],
    	$row["NT"],
    	$row["Bipariental"],
    	$row["Khac"],
    	$row["CoDoubleTest"],
    	$row["CoTripleTest"],
    	$row["BSChanDoan"],
    	$row["CLR2"],
    	$row["NT2"],
    	$row["Bipariental2"],
    	$row["Khac2"],
    	$row["CLR3"],
    	$row["NT3"],
    	$row["Bipariental3"],
    	$row["Khac3"]
    	);
     
    $i++; 
}  
echo json_encode($responce);
?>