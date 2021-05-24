<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call GD2_CD_DM_Nhanvien_get()}";//tao bien khai bao store
$params = array();
$get_danh_muc=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["NickName"],
								$row["HoLotNhanVien"].' '.$row["TenNhanVien"]
								);
    $i++;
}
echo json_encode($responce);
echo"|||";
$store_name2="{call GD2_LoaiKham_PhuThuThucHienTaiNhaByID_LuotKham_New(?)}";
$params2 = array($_GET['idluotkham']);
$get2=$data->query( $store_name2, $params2);
$excute2= new SQLServerResult($get2);
$tam2= $excute2->get_as_array(); 
$i=0;
foreach ($tam2 as $row) {
if($row["GiaBaoHiem"]=='')
	$row["GiaBaoHiem"]=0;
if($row["GiaPhuThuBenhVien"]==0)
	$row["GiaPhuThuBenhVien"]=0;
	
$responce2[$i] = array('id' => $row["ID_LoaiKham"], 
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
echo json_encode($responce2);
echo"|||";
$params3 = array($_GET['idluotkham']);
$store_name3="{call GD2_GetTrangThaiHoanTat(?)}";
$get3=$data->query( $store_name3,$params3);
$excute3= new SQLServerResult($get3);
$tam3= $excute3->get_as_array();
echo $tam3[0]['KhoaSo'];
echo"|||";

$store_name4="{call GD2_SelectBenhNhanByID_LuotKham(?)}";//tao bien khai bao store
$params4 = array($_GET["idluotkham"]);//tao param cho store 
$get4=$data->query( $store_name4, $params4);//Goi store
$excute4= new SQLServerResult($get4);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam4= $excute4->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce4=';;'.$tam4[0]["ID_BenhNhan"].';;'.$tam4[0]["MaBenhNhan"].';;'.$tam4[0]["HoLotBenhNhan"]." ".$tam4[0]["TenBenhNhan"];
echo $responce4;
echo"|||";
?>