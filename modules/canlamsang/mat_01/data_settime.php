<?php
$data= new SQLServer;//tao lop ket noi SQL

$params = array(
    $_POST["id_kham"],
    $_POST["id_loaikham"],
    $_POST["id_luotkham"],
    $_SESSION['user']['id_user'],
    $_SERVER['REMOTE_ADDR'],
);//tao param cho store 
$store_name="{call GD2_HenTraKetQua_CanLamSang_Insert_new(?,?,?,?,?)}";//tao bien khai bao store
$result=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($result);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if(!empty($tam[0]['NgayGioThucHien'])){
     $tam[0]['NgayGioThucHien'] = $tam[0]['NgayGioThucHien']->format('H:i d/m/Y');
}else{
    $tam[0]['NgayGioThucHien'] = '';
}
if(!empty($tam[0]['NgayGioChanDoan'])){
     $tam[0]['NgayGioChanDoan'] = $tam[0]['NgayGioChanDoan']->format('H:i d/m/Y');
}else{
    $tam[0]['NgayGioChanDoan'] = '';
}
if(isset($tam[0]['TenLoaiKham']) && $tam[0]['TenLoaiKham']!=NULL){
     $tam[0]['TenLoaiKham'] = $tam[0]['TenLoaiKham'];
}else{
     $tam[0]['TenLoaiKham'] = '';
}
$responce = array(
        'status'  => 'oke',
        'ngaythuchien' => $tam[0]['ThoiGianThucHien']->format('H:i d/m/Y'),
        'ngayhentrakq' => $tam[0]['ThoiGianHenTraKQ']->format('H:i d/m/Y'),
        'k_ngaythuchien' => $tam[0]['NgayGioThucHien'],
        'k_ngayhentrakq' => $tam[0]['NgayGioChanDoan'],
        'k_bschuandoan' => $tam[0]['BSChanDoan'],
        'tenloaikham' => $tam[0]['TenLoaiKham'],
        'thuchien' => $tam[0]['PhutThucHien'],
        'hoantat' => $tam[0]['PhutHen'],
        'ghichu' => $tam[0]['GhiChu'],
        'id_kham' => $tam[0]['ID_Kham'],
        'id_nguoighichu' => $tam[0]['ID_NguoiGhiChu'],
        'timenow' =>date('H:i d/m/Y'),
    );
echo json_encode($responce);
?>
