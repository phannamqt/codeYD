<?php

$tu_ngay='';
$den_ngay='';
$daduyet=0;
if(isset($_GET["tu_ngay"]))
{
   $tu_ngay= convert_date($_GET["tu_ngay"]).' 0:00:00';
}
else
{
    $tu_ngay=date("Y-m-d").' 0:00:00';
}
if(isset($_GET["den_ngay"]))
{
$den_ngay= convert_date($_GET["den_ngay"]).' 23:59:59';
}
else
{
     $den_ngay=date("Y-m-d").' 23:59:59';
}

$data= new SQLServer;
$store_name="{call [GD2_SelectCongNoNhaCungCapTuNgayDenNgay] (?,?,?,?,?)}";
$params = array($tu_ngay,$den_ngay,'PhieuChiDuoc','87','NhaCungCapV.2');
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
//print_r($tam);
$i=0;

foreach ($tam as $row) {
   $responce->rows[$i]['id']=$row["ID_NCC"];
    $responce->rows[$i]['cell']=array(
		
		$row["ID_NCC"],
		//'',
		$row["TenNCC"],
        $row["NoDauKy"],
        $row["NhapTrongKy"],
        $row["TraTrongKy"],
		$row["NoCuoiKy"]
            );
     
    $i++; 
}  
echo json_encode($responce);
?>