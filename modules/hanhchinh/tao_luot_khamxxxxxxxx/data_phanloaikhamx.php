<?php
$data= new SQLServer;
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";//tao bien khai bao store
$params = array('DM_PhanLoaiKham','ID_PhanLoaiKham,TenPhanLoaiKham,GhiChu,CoLaySinhHieu,CoXacDinhNhanThan,CoKhamLamSang,ID_LoaiKhamLSMacDinh','','');
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

    $responce->rows[$i]['id']=$row['ID_PhanLoaiKham'];
    $responce->rows[$i]['cell']=array($row['TenPhanLoaiKham'],$row['GhiChu'],$row['CoLaySinhHieu'],$row['CoXacDinhNhanThan'],$row['CoKhamLamSang'],$row['ID_LoaiKhamLSMacDinh']);
    $i++; 
}   
echo json_encode($responce);

?>