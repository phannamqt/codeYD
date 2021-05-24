<?php
//$id1=$_GET[com_thuocnhomcls1];
$data= new SQLServer;
//$dk= "ID_NhomCLS=".$id1;
$store_name="{call Gd2_combobox_dialog(?,?,?,?)}";
$params = array('DM_LoaiKham','ID_LoaiKham,ID_NhomCLS,TenLoaiKham,MoTa,GiaBaoChoBN','','');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
  $responce->rows[0]['id']=0;
   $responce->rows[0]['cell']=array('','','');
foreach ($tam as $row) {
  $responce->rows[$i]['id']=$row["ID_LoaiKham"];
   $responce->rows[$i]['cell']=array($row["TenLoaiKham"],$row["MoTa"],$row["ID_NhomCLS"],$row["GiaBaoChoBN"] );
    $i++; 
} 

echo json_encode($responce);
?>
