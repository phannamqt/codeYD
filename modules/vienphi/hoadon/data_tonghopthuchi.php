<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
/*$store_name="{call GD2_VienPhi_SelectTongDichVuThucThuCuaThuNgan (?,?,?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']),"ThanhToanLuotKham","1000");*/
$store_name="{call GD2_TongHopThuChiVaNo (?,?)}";
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']));
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    $responce->rows[$i]['id']=$row["MaBenhNhan"];
    $responce->rows[$i]['cell']=array(
        $row["MaBenhNhan"],
        $row["HoLotBenhNhan"],
        $row["TenBenhNhan"],
        $row["NamSinh"],
        $row["DienThoai"],
        $row["DiaChi"],
        $row["GiamGia"],
        $row["TienHuyChiDinh"],
        $row["NoCu"],
        $row["TongTienPhaiTra"],
        $row["SoTienThanhToan"],
        $row["NoCuoi"],

        );

    $i++;
}
echo json_encode($responce);
?>