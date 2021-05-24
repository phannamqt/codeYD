<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_baocaonoitru_thuoc_bhyt(?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
$k=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $k=$k+1;
    $responce->rows[$i]['id']=$k;
    $responce->rows[$i]['cell']=array(
$k,
$row["ten"]
,$row["HamLuong"]
,$row["SignNumber"]
,$row["TenDonViTinh"]
,$row["soluong"]
,$row["Gia"]
,$row["tt"]
    	);

     
    $i++; 
}  
echo json_encode($responce);
?>
