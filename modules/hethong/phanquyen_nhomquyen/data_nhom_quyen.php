<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["id_nhomquyen"]);//tao param cho store 
$store_name="{call GD2_PhanQuyen_NhanVien_selectAll(?)}";	//214079 null  3907
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Control"];
    $responce->rows[$i]['cell']=array($row["Caption"],$row["ID_Parent"],$row["KieuControl"],$row["ID"],$row["ID_Control"],);
     
    $i++; 
}  
echo json_encode($responce);

?>