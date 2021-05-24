<?php

$data = new SQLServer;



		$store_name = "{call GD2_vienphi_byID_ThuTraNo (?)}";
		$params = array($_GET["ID_ThuTraNo"]);
	



$get_lich = $data->query($store_name, $params);
//print_r($params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;
foreach ($tam as $row) {

    $responce->rows[$i]['id'] = $i;
    $responce->rows[$i]['cell'] = array(	
      
        $row["TenLoaiKham"],
     
        $row["PhiThucHien"],
        $row["TenNhom"],
      
    );

    $i++;
}
echo json_encode($responce);
?>