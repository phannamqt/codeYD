<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$id_kh_congty=1;
$id_goikham_congty=79;
//$id_kh_congty=$_GET["id_kh_congty"];
//$id_goikham_congty=$_GET["id_kh_congty"];
$data= new SQLServer;//tao lop ket noi SQL
$params = array($id_kh_congty,$id_goikham_congty);//tao param cho store 
$store_name="{call GD2_BenhNhan_SelectByID_CongTyAndID_GoiKhamChoCongTy(?,?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
if($row["IDLuotKham"]=="")
	$row["IDLuotKham"]=0;
	else
		$row["IDLuotKham"]=1;
    $responce->rows[$i]['id']=$row["ID_BenhNhan"];
    $responce->rows[$i]['cell']=array($row["MaBenhNhan"],$row["TenBenhNhan"],$row["Tuoi"],$row["GioiTinh"],$row["IDLuotKham"]);
    $i++; 
}
echo json_encode($responce);
?>