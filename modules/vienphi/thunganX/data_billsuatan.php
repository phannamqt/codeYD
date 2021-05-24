<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_dstonghopbillsuatan (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve

if($row["NgayThanhToan"]!=''){
	$row["NgayThanhToan"]=$row["NgayThanhToan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
}
  
   $responce[] = array(
		'id'         			=> $i,   
		'Id_LuotKham'   			 => $row["Id_LuotKham"],
		'Thanhtien'    			=>$row["Thanhtien"],	
		'tuoi'			 =>$row["tuoi"],
		'gioi' 		=>$row["gioi"],
		'MaBenhNhan'   		 =>$row["MaBenhNhan"],
		'TenBenhNhan'  			  =>$row["TenBenhNhan"],
		'HoLotBenhNhan'		    =>$row["HoLotBenhNhan"],
		'TenPhongBan'  		  =>$row["TenPhongBan"],
		'NickName'    =>$row["NickName"],
		'ip'    =>$row["ip"],
		'NgayThanhToan'    =>$row["NgayThanhToan"],
		
	);			
	
    $i++; 
}   

if(count($tam)==0){
echo '[]';	
}else{

echo json_encode($responce);
}

unset($responce);
?>