<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_Template_Phieuvaovien_GetAll()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["Id_auto"];
    $responce->rows[$i]['cell']=array($row["Tentemplate"],$row["Lydovaovien"],$row["Quatrinhbenhly"],$row["Toanthan"],$row["Bophan"]);
     
    $i++; 
}  
echo json_encode($responce);
?>