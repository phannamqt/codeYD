<?php
$data= new SQLServer;
$store_name="{call GD2_BacSy_get()}";
$params = array();
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$i=0;
	foreach ($tam as $v) {//duyet toan bo mang tra ve
		if(trim($v[1])!=""){
			if($i!=count($tam)-1){				
				$phancach=";";
			}else{
				$phancach="";
			}
			echo $v["ID_NhanVien"].":".$v["NickName"].$phancach;	
			$i++;	
		}
	} 
?>