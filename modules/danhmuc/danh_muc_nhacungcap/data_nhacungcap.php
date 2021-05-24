<?php
$data= new SQLServer;//tao lop ket noi SQL
$params = array();//tao param cho store 
$store_name="{call spDM_NhaCungCap_SelectAll()}";//tao bien khai bao store
$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NCC"];
    $responce->rows[$i]['cell']=array($row["TenNCC"],$row["ID_NhomNCC"],$row["MaVietTat"],$row["DiaChi"],$row["DienThoai"],$row["Email"],
        $row["Fax"],$row["SoTaiKhoan"],$row["ID_NganHang"],$row["NguoiLienHe"],$row["DTNguoiLienHe"],$row["GhiChu"],$row["Active"],$row["STT"]);
    $i++; 
}   
echo json_encode($responce);
?>