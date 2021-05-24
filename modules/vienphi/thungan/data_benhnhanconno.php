<?php
//echo $_GET['id_tang'];
$data= new SQLServer;


if(isset($_GET['id_dotkham']))
{
    $store_name="{call GD2_DsCongNoBN_ByDotKham(?)}";
    $params = array($_GET['id_dotkham']);
}
else
{
    $store_name="{call GD2_DsCongNoBN(?,?)}";
    $params = array(convert_date($_GET['tunngay']),convert_date($_GET['denngay']));
}




$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {

    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array(
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["DiaChi"],
        $row["DienThoai"],
        $row["No"], $row["NoLuot"],$row["NoHienTai"],
        $row["ID_BenhNhan"],
        $row["TenCty"],
        $row["TenDotKham"],
         $row["MaPhieu"],
         $row["DoiTuong"],
          $row["ID_PhanLoaiKham"], $row["TenPhanLoaiKham"],$row["GhiChu"],
 $row["NgayGio"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),$row["DuocTraNo"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>