<?php
$data= new SQLServer;
$store_name="{call GD2_Tang_Select()}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["Id_Tang"];
   $responce->rows[$i]['cell']=array($row["TenTang"],
      
            );
    $i++; 
} 

echo json_encode($responce);
?>
