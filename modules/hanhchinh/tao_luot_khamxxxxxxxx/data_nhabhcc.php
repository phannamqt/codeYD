<?php
$data= new SQLServer;
$params = array($_REQUEST['id_loaibhcc']);
$get_lich=$data->query( '{call GD2_NhaBHCC_GetByIDLoaiTheBHCC(?)}', $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {
    if($row['ID_NhaBHCC_LoaiThe']<>0){
        $responce->rows[$i]['id']=$row["ID_auto"];
        $responce->rows[$i]['cell']=array($row["TenNhaBHCC"],$row["Active"]);
        $i++; 
    }
}  
echo json_encode($responce); 
?>

