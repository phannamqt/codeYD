<?php
$data= new SQLServer;//tao lop ket noi SQL 
//$store_name="{call gd2_Hai_Test_2_select_all()}";
$store_name="{call GD2_ThuChi_No_KeToan(?,?)}";
//$params = array(); kieuxem
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
/*ID_ThanhToan    NgayGio id_luotkham ID_BenhNhan MaBenhNhan  HoLotBenhNhan   TenBenhNhan GiamGia HuyChiDinh  HoTroTuBenhVien
 BH_YTTra    BHCC_TTra   TongTienPhaiTra TongPhaiTraSauCung  DaTra   NoDauKy NoMoi   TraNoCu DuNo    TraTamUng
111583  2014-01-28 09:53:58.523 289118  5502    1165    Bán Lẻ  1   0   0   NULL    NULL    NULL    10260   NULL    10260   0   0   0   NULL    0*/
foreach ($tam as $row) {//duyet toan bo mang tra ve
        $Ngay='';
        $Ngay=$row["NgayGio"]->format('d/m/y');
     

    $responce->rows[$i]['id']=$row["ID_ThanhToan"];
    $responce->rows[$i]['cell']=array(
$row["ID_ThanhToan"],
$row["MaBenhNhan"]
,$row["HoLotBenhNhan"]
,$row["TenBenhNhan"],$Ngay
,$row["GiamGia"]
,$row["HuyChiDinh"]
,$row["HoTroTuBenhVien"]
,$row["BH_YTTra"]
,$row["BHCC_TTra"]
,$row["TongTienPhaiTra"]
,$row["NoDauKy"]
,$row["TongPhaiTraSauCung"]
,$row["DaTra"]
,$row["NoMoi"]
,$row["TraNoCu"]
,$row["DuNo"],
$row["TraTamUng"],
$row["MaPhieu"],$row["id_luotkham"]

    	);

     
    $i++; 
}  
echo json_encode($responce);
?>
