<?php
//echo $_GET['id_tang'];
$data= new SQLServer;
$store_name="{call GD2_LayDSXepHangLamSang (?,?,?)}";
$params = array("DangKham","Xong",$_GET['id_tang']);
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
    $responce->rows[$i]['cell']=array(
        $row["ID_BenhNhan"],
        $row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["Tuoi"],
        $row["GioiTinh"],
        $row["TenPhanLoaiKham"],
        $row["GioHenKham"],
        $row["ThoiGianVaoKham"]->format('H:i'),
        $row["TenBSYeuCau"],
        $bstruoc,
        $row["GhiChu"],
        $row["SanSangGoiVaoKham"],
        $row["LayDauHieuSinhTon"],
        $row["ID_TrangThai"],
        
            );
     
    $i++; 
}  
echo json_encode($responce);
?>