<?php
$data= new SQLServer;
$store_name="{call GD2_SelectAllNhomCLS}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
//ID_NhomCLS	TenNhom	IDNhomCha	SoTT	TenNhomCha	stt2

foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_NhomCLS"];
   $responce->rows[$i]['cell']=array($row["TenNhom"],
        $row["TenNhomCha"]
            );
    $i++; 
} 

echo json_encode($responce);
?>
