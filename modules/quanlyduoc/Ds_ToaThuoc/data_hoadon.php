<?php
$id_luotkham=258048;
//$id_luotkham=$_GET['id_luotkham'];
$data= new SQLServer;
$store_name="{call GD2_DSTT_ToaThuoc_HoaDon (?)}";
$params = array($id_luotkham);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["ID_Thuoc"];
    $responce->rows[$i]['cell']=array($row["ID_Thuoc"],
        $row["TenHoaDon"],
        $row["SoThuocThucXuat"],//so luong bn yeu cau
		$row["Gia"],//don gia
		$row["HeSoDieuChinhGiaBan_HoaDon"],
		($row["SoThuocThucXuat"]*$row["Gia"])*((100+$row["HeSoDieuChinhGiaBan_HoaDon"])/100 )//thanh tien theo so luong benh nhan yeu cau
        
		
            );
     
    $i++; 
}  
echo json_encode($responce);
?>