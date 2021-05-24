<?php
$data= new SQLServer;//tao lop ket noi SQL 
//$store_name3="{call [Gd2_ThongKeNew_Group2](?,?,?)}";
//store GD2_TDT_DoanhThuTheoNam 2016 để chạy lại dữ liệu.
$store_name3="{call [Gd2_ThongKeNew_FromTDTCache_Group](?,?)}";

$params3 = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam= $excute3->get_as_array();
$responce= new stdClass;
$i=0;
/*TenNhom   ID_NhomLSP  SL  DoanhThu
Phẫu thuật 2.2  3   1   1700000*/
if(count($tam)>0){
    foreach ($tam as $row) {
        $i++;
        $SauGiaGoc=$row["DoanhThu"]-$row["GiaGoc"];
        $SauGiaGoc_ThangTruoc=$row["DoanhThu_ThangTruoc"]-$row["GiaGoc_ThangTruoc"];
        $responce[] = array(
                'id'            => $i,
                'STT'           => $i,
                'TenNhom'       => $row['TenNhom'],
                'DoanhThu'      => (int)$row['DoanhThu'],
                'GiaGoc'        => $row['GiaGoc'],
                'SauGiaGoc'     => $SauGiaGoc,
                'SL'            => $row['SL'],
                'TrungBinh'     => $row['TB'],

                'DoanhThu_ThangTruoc'       => $row['DoanhThu_ThangTruoc'],
                'GiaGoc_ThangTruoc'         => $row['GiaGoc_ThangTruoc'],
                'SauGiaGoc_ThangTruoc'      => $SauGiaGoc_ThangTruoc,
                'SL_ThangTruoc'             => $row['SL_ThangTruoc'],
                'TrungBinh_ThangTruoc'      => $row['TB_ThangTruoc'],
                );
        
    }
}else{
     $responce[]=array();
}
echo json_encode($responce); 
?>