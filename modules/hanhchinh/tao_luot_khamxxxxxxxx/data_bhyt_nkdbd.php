<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call Gd2_combobox_dialog (?,?,?,?)}";
$params = array('GD2_DM_DKKCB_BanDau','Ma_KCB_BanDau,Ten_KCB_BanDau','',''); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["Ma_KCB_BanDau"];
    $responce->rows[$i]['cell']=array($row["Ma_KCB_BanDau"],$row["Ten_KCB_BanDau"]);     
    $i++; 
}  
echo json_encode($responce);
?>