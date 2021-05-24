<?php

//print_r ($_SESSION["user"]["id_user"]+'\n');
$data = new SQLServer;
$store_name = "{call GD2_LayDSBenhNhanLamSangTheoTrangThai_2 (?,?)}";
$params = array("DangKham", "Xong");
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
        $TrangThaiHoSo = "";
        if($row["HoanTatHoSo"]==1)
        {
            $TrangThaiHoSo="Xong hồ sơ";
        }else{  $TrangThaiHoSo="Đang khám";}
    $NgayGioHenTraKQ = "";
    if (isset($row["NgayGioHenTraKQ"])) {
        $NgayGioHenTraKQ = $row["NgayGioHenTraKQ"]->format('d/m/Y H:i');
    }

    $store_name1 = "{call GD2_DM_NhanVien_SelectNickNameByIdNhanVien(?)}";
    $params1 = array($row["BSLamSang"]);
    $get = $data->query($store_name1, $params1);
    $excute1 = new SQLServerResult($get);
    $tam1 = $excute1->get_as_array();

    if (count($tam1) == 0) {
        $Bslamsang = '';
    } else {
        $Bslamsang = $tam1[0][0];
    }


    $responce->rows[$i]['id'] = $row["ID_LuotKham"];
    $responce->rows[$i]['cell'] = array($row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["Tuoi"],
        $row["GioiTinh"],
        $row["TenPhanLoaiKham"],
        $row["ThoiGianVaoKham"]->format('H:i'),
        $NgayGioHenTraKQ,
        $Bslamsang,
        $row["GhiChu"],
        $row["HoanTatHoSo"],
        $TrangThaiHoSo,
           $row["SanSangGoiVaoKham"],$row["NotesStatus"],$row["ID_BenhNhan"],
            );

    $i++;
}
echo json_encode($responce);
?>