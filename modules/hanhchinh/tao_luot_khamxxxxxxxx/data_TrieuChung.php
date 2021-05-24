<?php
$data= new SQLServer;
$params = array();
$get_lich=$data->query( '{call GD2_TrieuChung_SelectAll()}', $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
$responce->rows[0]['id']=0;
$responce->rows[0]['cell']=array("");

foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_TrieuChung"];
    $responce->rows[$i]['cell']=array($row["TenTrieuChung"]);
    $i++; 
}  
echo json_encode($responce);
 
?>

