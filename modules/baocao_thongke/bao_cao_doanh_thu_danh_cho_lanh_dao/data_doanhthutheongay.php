<?php
$data= new SQLServer;//tao lop ket noi SQL 
//$store_name="{call gd2_Hai_Test_2_select_all()}";
$store_name="{call GD2_MIX_DOANHTHU_TDT(?,?,?)}";
//$params = array(); kieuxem
$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',$_GET['kieuxem']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {
    $responce->rows[$i]['id']=$i;
    $TongPTraNoiTru=($row["TongTienPhaiTra"]-$row["TongPTraNgoaiTru"]);
    $tonggiamdoanhthu=$row["MienGiam"]+	$row["TienHuyChiDinh"];
    $SL_NgoaiTru_VP=$row["SLNgoaiTru"]-$row["SLNgoaiTru_BHYT"];
    $SL_NoiTru_VP=$row["SLNoiTru"]-$row["SLNoiTru_BHYT"];
    $SLK_ALL=$row["SLNoiTru"]+$row["SLNgoaiTru"];
    $Ngay='';
    if ($row["Ngay"] instanceof DateTime) {
        $Ngay=$row["Ngay"]->format('d/m/y');
        }else{ $Ngay=$row["Ngay"];}

    $responce->rows[$i]['cell']=array(
                0,$Ngay,0,0,0,0,0,0,0,
                $row["MienGiam"],//9
                $row["TienHuyChiDinh"],//10
                $row["HoTroTuBenhVien"],//11
                0,//12
                $tonggiamdoanhthu,//13
                $row["KhamVaDieutri"],//14
                0,//15
                $row["TienThuoc"],//16
                0,//17
                $row["TongPTraNgoaiTru"],//18
                $TongPTraNoiTru,//19
                $row["TongTienPhaiTra"],//20
                0,//21
                $row["nomoi"],//22
                $row["TongTienBHYTChiTra"],//23
                $row["TongTienBHCCTra"],//24
                $row["SoTienThanhToan"],//25
                $SL_NgoaiTru_VP,//26
                $row["SLNgoaiTru_BHYT"],//27
                $SL_NoiTru_VP,//28
                $row["SLNoiTru_BHYT"],//29
                $SLK_ALL//30
  

    	);

     
    $i++; 
}  
echo json_encode($responce);
?>
