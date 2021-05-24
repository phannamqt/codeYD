<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_List_Quyennhanvien (?,?)}";//tao bien khai bao store
if($_GET['q']==0){

$params = array($_GET["id"],1);//tao param cho store 

}
else
{
$params = array($_GET["id"],0);//tao param cho store 
}

//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $btam1="";
    $responce->rows[$i]['id']=$row["ID_Control"];
    $responce->rows[$i]['cell']=array($row["IsActive"],$row["ID_Parent"],$row["ID_NhanVienAcesss"],$row["Caption"],$row["KieuControl"]);        
     
    $i++; 
}  
echo json_encode($responce);
?>