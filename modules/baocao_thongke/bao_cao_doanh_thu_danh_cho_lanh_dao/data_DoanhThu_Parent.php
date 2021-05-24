<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name3='';

if($_GET['OPTION']=='CAO')
{
$store_name3="{call [Gd2_ThongKeNew_Group2Cao](?,?,?)}";    
}
else
{
 $store_name3="{call [Gd2_ThongKeNew_Group2Thap](?,?,?)}";       
}
//echo $store_name3;
$params3 = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',$_GET['mucDT']);
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam3= $excute3->get_as_array();
$responce3 = new stdClass;
$i=0;
/*TenNhom   ID_NhomLSP  SL  DoanhThu
Phẫu thuật 2.2  3   1   1700000*/
foreach ($tam3 as $row) {//duyet toan bo mang tra ve
$SauGiaGoc=$row["DoanhThu"]-    $row["GiaGoc"];
    $responce3->rows[$i]['id']=$row["ID_NhomLSP"];
    $responce3->rows[$i]['cell']=array($row["ID_NhomLSP"],$i+1,''

        ,$row["TenNhom"]//3
        ,$row["DoanhThu"]//4
        ,$row["GiaGoc"]//5
        ,$SauGiaGoc//6
        ,$row["SL"]//7
        ,$row["TB"]//8

        );
    $i++; 
} 

echo json_encode($responce3); 
?>