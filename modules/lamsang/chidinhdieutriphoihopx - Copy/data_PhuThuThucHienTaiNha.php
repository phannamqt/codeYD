<?php
$data= new SQLServer;
$store_name="{call GD2_LoaiKham_PhuThuThucHienTaiNhaByID_LuotKham_New(?)}";
$params = array($_GET['idluotkham']);
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
$i=0;
foreach ($tam as $row) {
	if($row["GiaBaoHiem"]=='')
		$row["GiaBaoHiem"]=0;
	if($row["GiaPhuThuBenhVien"]==0)
		$row["GiaPhuThuBenhVien"]=0;
 	$responce[$i] = array('id' => $row["ID_LoaiKham"],
				 'DieuTriTaiNha' => $row["DieuTriTaiNha"],
				 'PhuThuThucHienTaiNha' => $row["PhuThuThucHienTaiNha"],
				 'GiaBaoChoBN' => $row["GiaBaoChoBN"],
				 'GiaBaoHiem' => $row["GiaBaoHiem"],
				 'GiaPhuThuBenhVien' => $row["GiaPhuThuBenhVien"],
				 'ID_NhomCLS' => $row["ID_NhomCLS"],
				 'HeSoNuocNgoai' => $row["HeSoNuocNgoai"],
				 'Gia' => $row["Gia"],
				 'HoTro' => $row["HoTro"]
			);  
  $i++; 
}   
echo json_encode($responce);
?>