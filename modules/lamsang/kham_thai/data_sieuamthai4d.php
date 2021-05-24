<?php
$idbenhnhan=$_GET["idbenhnhan"];
$idluotkham=$_GET["idluotkham"];
$data= new SQLServer;//tao lop ket noi SQL 
//$store_name="{call GD2_SelectSieuAmThai4DByID_BenhNhan(?)}";GD2_SelectSieuAmThai4DByID_BenhNhanAndMaxByIDLuotKham
$store_name="{call GD2_SelectSieuAmThai4DByID_BenhNhanAndMaxByIDLuotKham(?,?)}";
$params = array($idbenhnhan,$idluotkham); 
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$i=0;
if(count($tam)!=0){
	foreach($tam as $row){
		if($row["NgayGioThucHien"]!='')
				$row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("m/d/Y");
		else $row["NgayGioThucHien"]='';
		$responce[$i] = array('id' => $row["ID_SieuAmThai4D"], 'ID_Kham' => $row["ID_Kham"], 'SoNgayThai' => $row["SoNgayThai"], 'SANgaySinh' => $row["SANgaySinh"], 'NgayGioThucHien' => $row["NgayGioThucHien"]);
	 $i++; 
	}  
	echo json_encode($responce);
}
else{
	echo 0;
}
?>