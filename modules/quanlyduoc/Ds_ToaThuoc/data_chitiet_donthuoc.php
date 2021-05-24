<?php
$data= new SQLServer;
$store_name="{call MED_GetDonThuocChiTiet (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
$params = array($_GET['id_donthuoc']);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
  
    $responce->rows[$i]['cell']=array( 
		$row["TenGoc"],
        $row["SoThuocThucXuat"],
        $row["Gia"],
        $row["ThanhTien"]			
        );
     
    $i++; 
}  
echo json_encode($responce);
?>