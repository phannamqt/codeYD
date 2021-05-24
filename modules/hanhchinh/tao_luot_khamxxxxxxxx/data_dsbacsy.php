<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_DM_bacsy_Getauto ()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=1;
  $responce->rows[0]['id']='0';
  $responce->rows[0]['cell']=array('','');
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["nickname"],$row["hovaten"]);
     
    $i++; 
}  
echo json_encode($responce);
?>