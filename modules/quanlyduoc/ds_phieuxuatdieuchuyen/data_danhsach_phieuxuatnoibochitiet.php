<?php
$data= new SQLServer;//tao lop ket noi SQL
if($_GET['maphieugop']>0){
	$store_name="{call GD2_GetDSThuocByMaPhieuGop(?)}";//tao bien khai bao store
	$params = array($_GET['maphieugop']);
}else{
	$store_name="{call GD2_GetDSThuocByID_PhieuXuatNoiBo(?)}";//tao bien khai bao store
	$params = array($_GET['id_phieuxuatnoibo']);
}
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array($row["TenGoc"],
	$row["TenDonViTinh"],
	$row["SoLuong"],
	$row["TenNhom"]
	);
    $i++; 
}   
echo json_encode($responce);
?>