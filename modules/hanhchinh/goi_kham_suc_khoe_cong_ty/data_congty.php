<?php
$data= new SQLServer;
$store_name="{call GD2_KhachHangLaCTy_Select()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_KhachHangCTy"];
   $responce->rows[$i]['cell']=array($row["TenCty"],
        $row["DiaChi"],$row["DienThoai"]
            );
    $i++; 
} 

echo json_encode($responce);
?>
