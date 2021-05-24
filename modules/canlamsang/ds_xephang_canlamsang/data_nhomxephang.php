<?php
$data= new SQLServer;
$store_name="{call spNhomXepHang_SelectAllWithTenPhanNhom}";
$params = array();
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_NhomXepHang"];
   $responce->rows[$i]['cell']=array($row["TenNhom"],
        $row["MoTa"]
            );
    $i++; 
} 

echo json_encode($responce);
?>
