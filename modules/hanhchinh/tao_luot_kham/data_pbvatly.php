<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_phongban_vatlyget (?,?,?)}";
$search1='';
$search2='';
$search3='ORDER BY CASE';

$ds_tang=$_GET['ds_tang'];
$ds_tang = explode(",", $ds_tang);

for($i=0;$i<=count($ds_tang)-1;$i++){
	if($i==0){
		$search1=$search1.'  Id_Tang='.$ds_tang[$i];
	}else{
	$search1=$search1.' or Id_Tang='.$ds_tang[$i];
	}
	$search3=$search3.' WHEN Id_Tang='.$ds_tang[$i].' Then '.$i;
}

$search3=$search3.' END,Id_Tang ASC';
$search2='where ID_LoaiKham='.$_GET['ID_PhanLoaiKham'];

$params = array($search1,$search2,$search3); 

$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;  
if(count($tam)>0){
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_PhongBan"];
    $responce->rows[$i]['cell']=array($row["TenPhongBan"],$row["count_pb"],$row["TenLoaiKham"],$row["Id_Tang"],$row["count_tang"]);
     
    $i++; 
}  
}
echo json_encode($responce);
?>