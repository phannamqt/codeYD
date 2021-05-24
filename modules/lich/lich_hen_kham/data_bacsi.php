<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_dm_bs_lichlamviec(?)}";
$_GET["ngay"]=convert_date($_GET["ngay"]);

$params = array($_GET["ngay"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["NickName"],$row["lichlamviciec"]);     
    $i++; 
}  
echo json_encode($responce);
?>