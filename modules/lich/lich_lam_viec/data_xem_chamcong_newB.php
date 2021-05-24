<?php

/*$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio*/
$fromDate = $_GET['from'] . ' 0:00:00'; // get the directio
$toDate = $_GET['to'] . ' 23:59:59'; // get the directio

$id_nhanvien = $_GET['ID_NhanVien'];







if (strpos($_GET['from'],'/') !== false) {

    list($day, $month, $year) = explode('/', $_GET['from']);
    $fromDate= $year.'-'.$month.'-'.$day.' 0:00:00';
    $toDate= $year.'-'.$month.'-'.$day.' 23:59:59';

}

$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GD2_GetChamCongByIdNhanVien_New (?,?,?)}"; //tao bien khai bao store
$params = array($id_nhanvien, $fromDate, $toDate);

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc

$responce = new stdClass;
$tt=1;
$i = 0;

foreach ($tam as $row) {
   $ngaygoc=$row["Ngay"]->format('d/m/Y');
   $responce->rows[$i]['id'] = $row["ID_ChamCong"];
   $responce->rows[$i]['cell'] = array(
        $row["ID_ChamCong"],//0
        $row["ID_NhanVien"],//1
        $row["Thang"],//2
        $row["Tuan"],//3
        $row["NickName"],//4
        $row["Ngay"]->format('d/m/Y'),//5
        $ngaygoc,//6
        $row["TongCong"],//7
        $row["TC"],//8
        $row["ThoiLuongNghiGiuaCa"],//9
        $row["ChiTietCong"],//10
        $row["SoLanDiNgoaiVien"],//11
        $row["LogkhongHopLe"],//12
        $row["TreSom"],//13
        $row["TreSomChiTiet"],//14
        $row["TGCB"],//15
        $row["dayweek"],//16
        str_replace('-&gt','',$row["GChu"]),//17
        $row["Nam"],//18
        $row["Id_Donchamcong"],//19
        $tt,//20
        $row["NgayGioSua"]->format('d/m/y H:i'),//21
        $row["NName"],//22
        $row["NgayGioTaoLich"],//23
        $row["LogTaiMay"],//24
        $row["TCTruc"], //25
        $row["TongCongTruc"],//26
         $row["CongPhut"],//27
         $row["CongTheoLich"],//28
          $row["IsDuyetDonUpdate"],//29

          
   /*     $row["LichLamViec"],//27

        $row["LogDaCham"],//28
        $row["LogThem"],//29
        $row["DenghiCongthem"],//30
        $row["DiTre"],//31
        $row["RaSom"],//32
        $row["SoLogChoPhepGoiDon"],//33
        $row["IsDuyetDonUpdate"],//34
        $row["LichThem"],//35
        $row["Mavuviec"],//36
        $row["KhoangTimLog"],//37
        $row["SoLuongMocLich"]*2,//38*/



       );
   $i++;
}
echo json_encode($responce);
?>