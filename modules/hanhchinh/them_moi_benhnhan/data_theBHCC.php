<?php
$data= new SQLServer;
//$store_name="{call GD2_SelectPhongBanByChiDinhTrongNgay()}";
$store_name="{call Gd2_GetAll_TheBHCCByIdBenhNhan(?)}";
$params = array($_GET['id_luotkham']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
//print_r($tam);

//KKKKKKK
$responce = new stdClass;
$i=0;
$HSD='';
foreach ($tam as $row) {
$HSD=$row["HanSD_TuNgay"]->format($_SESSION["config_system"]["ngaythang"]). ' đến ' .$row["HanSD_DenNgay"]->format($_SESSION["config_system"]["ngaythang"]);

  $responce->rows[$i]['id']=$row["ID_The_BHCC"];
   $responce->rows[$i]['cell']=array($row["SoThe"],
    $row["TenLoaiThe"],  $row["TenCongTy"], $HSD
            );
    $i++;
}

echo json_encode($responce);
?>
