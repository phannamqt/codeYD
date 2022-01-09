<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name="{call MED_DM_ICD10_GetAll()}";//tao bien khai bao store
$params = array();//tao param cho store 	
$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 

$responce;

$i=0;
foreach ($tam as $row) {
  $responce[] = array( 
  'id'               => $i, 
  'CHAPTER' 	 => $row["CHAPTER"], 
  'NHOM'      	 => $row["NHOM"], 
  'CICD10'    		=> $row["CICD10"],
  'VVIET'  		 => $row["VVIET"],
  'VANH'    	 => $row["VANH"]
	);
  
    $i++; 
}   
echo json_encode($responce);
?>