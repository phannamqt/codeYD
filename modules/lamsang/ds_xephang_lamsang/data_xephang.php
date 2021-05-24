<?php
//ds Đang chờ//
$data= new SQLServer;
$store_name="{call GD2_LayDSXepHangLamSang_New (?,?,?)}";
$params = array("DangKham","Xong",null);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {
    if($row["GioHenKham"]!=''){
     $row["GioHenKham"]= $row["GioHenKham"]->format('H:i');
 }
 $store_name1="{call spThongTinLuotKham_LayTenBSKhamLamSangLanTruoc (?)}";
 $params1 = array($row["ID_BenhNhan"]);
 $get=$data->query( $store_name1, $params1);
 $excute1= new SQLServerResult($get);
 $tam1= $excute1->get_as_array();

 if (count($tam1)==0){
    $bstruoc='';
}else{
	$bstruoc=$tam1[0][3];
}
$ID_PhongKhamVatLy='';
if (isset($row["ID_PhongKhamVatLy"])) {
    $ID_PhongKhamVatLy = $row["ID_PhongKhamVatLy"];
}

$TenLoaiKham='';
if (isset($row["TenLoaiKham$TenLoaiKham"])) {
    $TenLoaiKham = $row["TenLoaiKham"];
}

$responce->rows[$i]['id']=$row["ID_LuotKham"];
$responce->rows[$i]['cell']=array($row["ID_LuotKham"],
    $row["MaBenhNhan"],
    $row["TenBenhNhan"],
    $row["Tuoi"],
    $row["GioiTinh"],
    $row["TenPhanLoaiKham"],
    $TenLoaiKham,
    $row["LoaiDoiTuongKham"],
    $row["GioHenKham"],
    $row["ThoiGianVaoKham"]->format('H:i'),
    $row["TenBSYeuCau"],
    $bstruoc,
    $row["GhiChu"],
    $row["NoiDungTaiKham"],
    $row["ID_TrangThai"],
    $row["SanSangGoiVaoKham"],
    $row["NotesStatus"],
    $row["ID_BenhNhan"],
    $ID_PhongKhamVatLy,
	 'Gọi loa',
	$row["SoThe"],

    );

$i++;
}
echo json_encode($responce);
echo '||';

//ds Đang khám//
//bổ sung trạng thái
           /* HoanTatHoSo,
            HoanTatCacCLS,
            DaThucHienCacCLS,
            DangThucHienCacCLS ,
            DangKham,
            DenLayKetQua*/
//

$store_name = "{call GD2_LayDSBenhNhanLamSangTheoTrangThai_2 (?,?)}";
$params = array("DangKham", "DangTraKetQua");
$get_lich = $data->query($store_name, $params);
$excute = new SQLServerResult($get_lich);
$tam = $excute->get_as_array();
$responce = new stdClass;
$i = 0;

foreach ($tam as $row) {
   /* $TrangThaiHoSo = "";
    if($row["HoanTatHoSo"]==1)
    {
        $TrangThaiHoSo="Xong hồ sơ";
    }
    else{ 
     $TrangThaiHoSo="Đang khám";
     }*/
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


    $responce->rows[$i]['id'] = $row["STT"];
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
        $row["TrangThaiHoSo"],
        $row["SanSangGoiVaoKham"],$row["NotesStatus"],$row["ID_BenhNhan"], // $row["DaTraKQ"],

         $row["LoaiDoiTuongKham"],
		 'Gọi loa',
		 $row["SoThe"],
        );

    $i++;
}
echo json_encode($responce);
echo '||';

//DS Kết thúc
$store_name="{call GD2_LayDSBenhNhanLamSangTheoTrangThai_2 (?,?)}";
$params = array("KetThucKham","Xong");
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc




$responce = new stdClass;

$i=0;
foreach ($tam as $row) {

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

    $responce->rows[$i]['id']=$row["STT"];
    $responce->rows[$i]['cell']=array(
        $row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["Tuoi"],

        $row["TenPhanLoaiKham"],

        $Bslamsang,
        $row["GhiChu"],$row["NotesStatus"],
        $row["ID_BenhNhan"],
      $row["DaTraKQ"],
       $row["LoaiDoiTuongKham"],
       // $tentuoigioi
        );


    $i++;
}
echo json_encode($responce);



?>