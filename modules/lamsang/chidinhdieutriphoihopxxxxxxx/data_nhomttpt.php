<?php
$data= new SQLServer;
$store_name="{call GD2_ChiDinhGetDM_LoaiKham()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array(); 
//$i=0;
$rs='';
 foreach ($tam as $row) {
	 if($rs==''){
		 $rs.=$row["ID_LoaiKham"].':'.$row["TenLoaiKham"];
	 }else{
		 $rs.=';'.$row["ID_LoaiKham"].':'.$row["TenLoaiKham"];
	 }
	
// $responce[$i] = array('ID_LoaiKham' => $row["ID_LoaiKham"], 'TenLoaiKham' => $row["TenLoaiKham"]);  
	
 // $i++; 
 }   
 echo $rs;

?>