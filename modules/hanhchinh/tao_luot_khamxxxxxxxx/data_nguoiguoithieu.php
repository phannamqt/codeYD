<?php

$data= new SQLServer; 
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$params = array('DM_NoiGioiThieu','ID_NoiGioiThieu,NguoiGioiThieu,TenNoiGioiThieu,DiaChi,DienThoai','','');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
 $responce->rows[0]['id']=0;
 $responce->rows[0]['cell']=array('','','','' );
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_NoiGioiThieu"];
    $responce->rows[$i]['cell']=array($row["NguoiGioiThieu"],$row["TenNoiGioiThieu"],$row["DiaChi"],$row["DienThoai"] );
     
    $i++; 
}  
echo json_encode($responce);

?>