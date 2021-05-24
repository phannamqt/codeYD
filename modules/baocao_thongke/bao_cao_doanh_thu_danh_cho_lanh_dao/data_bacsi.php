<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call gd2_Hai_Test_select_all()}";
$params = array(); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
//echo "ádasdasdasd";
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["id"];
    $responce->rows[$i]['cell']=array($row["id"],$row["xemtheo"],$row["phithuchien"],$row["phichidinh"],$row["phihoantat"],$row["chiphikhac"],$row["giavonthuoc"],$row["phithuengoai"],$row["tongchiphi"],$row["quota"],$row["coupon"],$row["huychidinh"],$row["thuoctralai"],$row["tonggiamdoanhthu"],$row["kham"],$row["dieutri"],$row["thuoc"],$row["tongdoanhthu"],$row["loinhuanrong"],$row["nocu"],$row["noluot"],$row["nomoi"],$row["thucthu"],$row["loinhuankhongtinhno"]);
     
    $i++; 
}  
echo json_encode($responce);
?>
