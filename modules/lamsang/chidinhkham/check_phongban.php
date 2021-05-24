<?php
//print_r ($_GET);

if($_GET["ac"]=="check2"){
	$id_loaikham=$_GET["id_loaikham"];
	$ds_tang= explode(",",$_GET["ds_tang"]);
	$ds_id_loaikham= explode(",",$_GET["id_loaikham"]);
	$k=0;
//echo count($ds_tang);
	$flag2=0;
	for($j=0 ; $j<count($ds_id_loaikham) ;$j++){
		$flag=0;
		for($i=0 ; $i<count($ds_tang) ;$i++){
			
		//echo $ds_id_loaikham[$j]."-".$ds_tang[$i]."<br>";
		$data= new SQLServer;
		$store_name="{call Check_PhongBanByID_LoaiKham_And_ID_Tang(?,?)}";
		$params = array($ds_id_loaikham[$j],$ds_tang[$i]);
		//print_r($params);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array(); 
		if(count($tam)>0){			
				$responce[]= array('id' => $ds_id_loaikham[$j], 'ID_PhongBan' => $tam[0]["ID_PhongBan"]);
				$flag=1;
				break;
				}			
		}
		if($flag==0){
			
			$store_name2="{call CheckPhongBanByID_LoaiKham(?)}";
			$params2 = array($ds_id_loaikham[$j]);
			$get2=$data->query( $store_name2, $params2);
			$excute2= new SQLServerResult($get2);
			$tam2= $excute2->get_as_array(); 
			if(count($tam2)!=0){
				$responce[]= array('id' => $ds_id_loaikham[$j], 'ID_PhongBan' => $tam2[0]["ID_PhongBan"]);
			}else{
				$responce[]= array('id' => $ds_id_loaikham[$j], 'ID_PhongBan' => 0);
				}
		}
	}
	echo json_encode($responce);

}else{
	$id_loaikham=$_GET["id_loaikham"];
	$ds_tang= explode(",",$_GET["ds_tang"]);
	$tam1=0;
	//print_r( $id_loaikham.'==='.$_GET["ds_tang"]);
		for($i=0 ; $i<count($ds_tang) ;$i++){
			//echo $ds_tang[$i]."-<br>";
		$data= new SQLServer;
		$store_name="{call Check_PhongBanByID_LoaiKham_And_ID_Tang(?,?)}";
		$params = array($id_loaikham,$ds_tang[$i]);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array(); 
		
			if(count($tam)!=0){
			 $responce = $tam[0]["ID_PhongBan"];
			 echo $responce;
			 $tam1=0;
			 break;
			}
			
		if($i+1==count($ds_tang)){
				$tam1=1;
				}
		}
		if($tam1==1){
		$store_name2="{call CheckPhongBanByID_LoaiKham(?)}";
		$params2 = array($id_loaikham);
		$get2=$data->query( $store_name2, $params2);
		$excute2= new SQLServerResult($get2);
		$tam2= $excute2->get_as_array(); 
		if(count($tam2)!=0){
			 $responce2 = $tam2[0]["ID_PhongBan"];
			 echo $responce2;
			}
		}

}

?>