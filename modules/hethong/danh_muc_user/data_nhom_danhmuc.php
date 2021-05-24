<?php
$data= new SQLServer;//tao lop ket noi SQL

// $id = $_GET['id'];
 //$id_nhanvien = $_GET['id_nhanvien'];

 
$store_name="{call GD2_NhomQuyen_Control_selectAll()}";//tao bien khai bao store
//spLayDSBenhNhanLamSangTheoTrangThai_2 KetThucKham,Xong

$params = array();//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Control"];
    $responce->rows[$i]['cell']=array($row["Caption"],);
     
    $i++; 
}  
echo json_encode($responce);

?>