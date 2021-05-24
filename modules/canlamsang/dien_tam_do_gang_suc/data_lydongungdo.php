<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call spDm_LyDoNgungDo_SelectAllByID_LoaiKham_NullOrNotNull(?)}";
$params = array(8); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_LyDoNgungDo"];
    $responce->rows[$i]['cell']=array($row["LyDoNgungDo"],$row["GhiChu"]);
     
    $i++; 
}  
echo json_encode($responce);
?>