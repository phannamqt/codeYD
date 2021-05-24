<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["SampleID"]); 
$store_name="{call [GD2_TimBNBySampleID](?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["NgayGioHenTraKQ"]!='')
            $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHenTraKQ"]='';
    if($row["id_phanloaikham"]=='46')
            $noitru="Có";
    else $noitru="";
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array(  
                                         $row["ID_LuotKham"],
                                        $row["ID_BenhNhan"],
                                        $row["MaBenhNhan"],
                                        $row["HoLotBenhNhan"],
                                        $row["TenBenhNhan"],
                                        $row["GioiTinh"],
                                        $row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
                                        $row["TinhTrangKQ"],
                                        $row["TinhTrangDuyet"],
                                        $row["NgayGioHenTraKQ"],
                                        $noitru,  $row["SampleID"],
                                    );
     
    $i++; 
}  
echo json_encode($responce);
?>