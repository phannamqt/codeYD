<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_Thu_TraNo_SelectCacBillHuyChinhSuaTheoThoiGian(?,?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']),"ThanhToanLuotKham");
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
     if($row["NgayGioSua"]!='')
            $row["NgayGioSua"]=$row["NgayGioSua"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioSua"]='';
    $responce->rows[$i]['id']=$row["ID_ThuTraNo"];
    $responce->rows[$i]['cell']=array(
        $row["MaPhieu"],
        $row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
        $row["ID_NhanVien"],
                $row["TenNVSuaPhieu"],
    
        round((int)  $row["TongTienPhaiTra"]/1000, 0, PHP_ROUND_HALF_DOWN),
       
        round((int) $row["SoTien"]/1000, 0, PHP_ROUND_HALF_DOWN),
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],

        $row["NgayGioSua"],
        $row["GhiChu"],
        $row["LyDoHuyOrSuaBill"],
        $row["ID_LuotKham"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>