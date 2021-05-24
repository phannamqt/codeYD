<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array($_GET["note"]);//tao param cho store 
$store_name="{call [spFraminghamDieuTri_SelectByNote](?)}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
 
    $responce->rows[$i]['id']=$row["ID_DieuTri"];
    $responce->rows[$i]['cell']=array(

       $row["Dieutri"],
      

       );
    $i++; 
}
echo json_encode($responce);
?>
