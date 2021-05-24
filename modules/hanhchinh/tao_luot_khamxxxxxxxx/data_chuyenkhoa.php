<?php
$data= new SQLServer;
if(isset($_GET['id_trieuchung'])){
$params = array($_GET['id_trieuchung']);
}else{
$params = array('0');
}
$store_name="{call GD2_Dm_ChuyenKhoa_SelectAll_TrieuChung(?)}";//tao bien khai bao store
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

    $responce->rows[$i]['id']=$row['ID_ChuyenKhoa'];
    $responce->rows[$i]['cell']=array($row['Ten'],$row['CoLayDauHieuSinhTon'],$row['ID_ChuyenKhoa_Online']);
    $i++; 
}   
echo json_encode($responce);

?>