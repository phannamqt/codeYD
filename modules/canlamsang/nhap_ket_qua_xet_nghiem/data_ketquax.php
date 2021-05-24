<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["idbenhnhan"],$_GET["idluotkham"]); 
$store_name="{call GD2_XetNghiem_ByIdBenhNhan(?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_Kham"].'_'.$row["ID_XetNghiem"];
    $responce->rows[$i]['cell']=array(	
    									$row["ID_Kham"],
    									$row["ID_BenhNhan"],
    									$row["ID_XetNghiem"],
    									$row["ID_LoaiKham"],
    									$row["TenXetNghiem"],
    									'',
    									$row["GiaTriBinhThuong1"],
                                        $row["MoTa"],
                                         $row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"])
                                        );
     
    $i++; 
}  
echo json_encode($responce);
?>