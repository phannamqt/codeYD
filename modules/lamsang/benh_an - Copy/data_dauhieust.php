<?php


$data= new SQLServer;
$param1=$_GET['id_luotkham'];
$store_name="{call Gd2_dauhieusinton_benhan(?)}";
$params = array($param1);
$get=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$chuoi='';
    if(count($tam)>0){
		if($tam[0]['ChieuCao']!=''){
			$chuoi=$chuoi.''.$tam[0]['ChieuCao'].' cm - ';
		}
		if($tam[0]['CanNang']!=''){
			$chuoi=$chuoi.''.$tam[0]['CanNang'].' kg - ';
		}if($tam[0]['Ps']!=''){
			$chuoi=$chuoi.''.$tam[0]['Ps'].'/'.$tam[0]['Pd'].' mmHg - ';
		}if($tam[0]['Mach']!=''){
			$chuoi=$chuoi.''.$tam[0]['Mach'].' lần/phút - ';
		}if($tam[0]['ThanNhiet']!=''){
			$chuoi=$chuoi.''.$tam[0]['ThanNhiet'].' &deg;C';
		}
		echo $chuoi;
	
    }
  
?>