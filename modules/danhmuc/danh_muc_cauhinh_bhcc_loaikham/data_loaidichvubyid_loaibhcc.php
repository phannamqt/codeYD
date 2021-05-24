<?php
$data= new SQLServer;
$params = array($_GET['id']);
$get_lich=$data->query( '{call GD2_ChiTietDichVuBHCCByID_LoaiTheBHCC(?)}', $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
global $responce = new stdClass;
$i=1;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	$giakhac=0;
	if($row["ID_auto"]>0){
		$co=1;
		if($row["GiaThoiDiemLuu"]!=$row["GiaBN"]){
			$giakhac=1;
		}else{
			$giakhac=0;
		}
	}else{
		$co=0;
	}
	
  $responce[] = array(
		'id'			=> $i,
		'TenDichVu'		=> $row["TenDichVu"],
		'GiaBN'			=> $row["GiaBN"],
		'HeSo'			=> $row["HeSo"],
		'GiaSauNhanHeSo'=> $row["GiaSauNhanHeSo"],
		'GiaBlogGiuong' => $row["GiaBlogGiuong"],
		'GiaGoc' 		=> $row["GiaGoc"],
		'GiaBlog'		=> $row["GiaBlog"],
		'ID_Nhom'		=> $row["ID_Nhom"],
		'TenNhom'		=> $row["TenNhom"],
		'IsGiuong'		=> $row["IsGiuong"],
		'ID_auto'		=> $row["ID_auto"],
		'ID_DichVu'		=> $row["ID_DichVu"],
		'DaAp'			=>$co,
		'GiaThoiDiemLuu'=>$row["GiaThoiDiemLuu"],
		'GiaKhac'		=>$giakhac,
		);
    $i++; 
}  
echo json_encode($responce);
unset($responce);
?>