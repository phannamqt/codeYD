<?php
$data= new SQLServer;//tao lop ket noi SQL
$tungay=convert_date($_GET["tungay"]).' 0:00:00';
$denngay=convert_date($_GET["denngay"]).' 23:59:59';
$store_name="{call GD2_LayDSBenhNhanCanLayDauHieuSinhTon_fromdaytoday(?,?)}";//tao bien khai bao store
$params = array($tungay,$denngay);
//print_r($params);
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["STT"],$row["ID_BenhNhan"],$row["MaBenhNhan"],$row["TenBenhNhan"],$row["Tuoi"],$row["GioiTinh"],$row["TenPhanLoaiKham"],$row["ID_PhanLoaiKham"],$row["ID_TrangThai"],$row["ThoiGianVaoKham"]->format("H:i"),$row["NotesStatus"],"",$row["LoaiDoiTuongKham"],$row["CoXacDinhNhanThan"],$row["ID_XacDinhNhanThan"],$row["SoPhieuKhamGoiLoa"],'G?i loa',
	$row["SoThe"]);
    $i++; 
}
echo json_encode($responce);
?>
