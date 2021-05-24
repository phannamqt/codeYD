<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call Gd2_combobox_dialog (?,?,?,?)}";
$params = array('DM_KhachHangLaCTy','ID_KhachHangCTy,TenCty,DiaChi','',''); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_KhachHangCTy"];
    $responce->rows[$i]['cell']=array($row["TenCty"],$row["DiaChi"]);
     
    $i++; 
}  
echo json_encode($responce);
?>