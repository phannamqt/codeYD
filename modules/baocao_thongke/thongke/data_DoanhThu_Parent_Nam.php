<?php
$data= new SQLServer;//tao lop ket noi SQL 



 //$store_name3="{call [Gd2_ThongKeNew_GroupNam](?)}";       
$store_name3="{call [Gd2_ThongKeNew_FromTDTCache_Group_Nam](?)}";       


$params3 = array($_GET['nam']);
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam3= $excute3->get_as_array();
$responce3 = new stdClass;
$i=0;
/*TenNhom	ID_NhomLSP	SL	DoanhThu
Phẫu thuật 2.2	3	1	1700000*/
foreach ($tam3 as $row) {//duyet toan bo mang tra ve
$SauGiaGoc=$row["DoanhThu"]-	$row["GiaGoc"];
$Thang='Tháng '. $row["Thang"];
    $responce3->rows[$i]['id']=  $i+1;
    $responce3->rows[$i]['cell']=array(
        $i+1//0
    	,$row["DoanhThu"]//1
    	,$row["GiaGoc"]//2
    	,$SauGiaGoc//3
    	,$row["SL"]//4
    	,$row["TB"]//5
        ,$Thang //6
        ,$row["Nam"]//7
    	);
    $i++; 
} 

echo json_encode($responce3); 
?>