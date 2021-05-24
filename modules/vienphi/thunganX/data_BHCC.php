<?php

$data= new SQLServer;
if($_GET['checkboxbh']==0)
{
$store_name="{call GD2_LayDSBHCC (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
}
else
{
$store_name="{call [GD2_LayDSBHCCThenZero] (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
}

$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
//$NgayGioThanhToan='';
foreach ($tam as $row) {


 if($row["NgayGioThanhToan"]!='')
            $row["NgayGioThanhToan"]=$row["NgayGioThanhToan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThanhToan"]='';

    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array($row["ID_LuotKham"],

        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],   $row["TenLoaiThe"],   $row["MaNhom"],
        $row["ThoiGianVaoKham"]->format('H:i d/m/y' ),
        $row["NgayGioThanhToan"],

        $row["TongTienPhaiTra"],
        $row["TongTienBHCCTra"]
        ,$row["TongTienBHYTChiTra"],
        $row["SoTienThanhToan"]
        , $row["Datra"]
        ,$row["SoTien"],$row["SoTienBN"]
        ,$row["ThatThoat"],$row["ID_BHCC_TraNo"],$row["ID_ThuTraNo"]
        ,$row["ID_BenhNhan"],$row["LoaiThanhToan"],$row["ID_BenhAnNoiTru"],
        $row["ID_BHCC_TraNo"],   $row["GhiChu"]
        ,$row["DaThanhToanBill"]
        ,$row["TenQuocTich"],$row["TennguoiBL"]

        );

    $i++;
}
echo json_encode($responce);
?>