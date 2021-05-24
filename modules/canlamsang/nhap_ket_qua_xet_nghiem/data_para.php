<?php
$data= new SQLServer;//tao lop ket noi SQL 
$params = array('sieu_am',$_GET["idbenhnhan"]);//tao param cho store 
$store_name="{call GD2_US4d_KhamGetDataByTenFormAndIDBenhNhan(?,?)}";//tao bien khai bao store
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array($row["Para_TMP"],$row["SoNgayThai"],$row["CRL"],$row["BPD"],$row["translucency"],$row["DB"],$row["NgayGioDoc"]->format($_SESSION["config_system"]["ngaythang"]));
     
    $i++; 
}  
echo json_encode($responce);
?>