<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["idbenhnhan"],$_GET["idluotkham"]); 
$store_name="{call GD2_XetNghiem_ByIdBenhNhan2(?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(  
    									$row["ID_Kham"],
    									 $row["TenLoaiKham"],
    									 '',
    									 $row["Hinh"],
    									 $row["ID_LoaiKham"],
                                        );
     
    $i++; 
}  
echo json_encode($responce);
?>