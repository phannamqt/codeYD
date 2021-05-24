
<?php
$data= new SQLServer;//tao lop ket noi SQL 
$store_name="{call GD2_XetNghiem_ByIdBenhNhan6(?)}";
$params = array($_GET["idbenhnhan"]); 
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["ThoiGianVaoKham"]!='')
            $row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["ThoiGianVaoKham"]='';
    if($row["NgayGioHenTraKQ"]!='')
            $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioHenTraKQ"]='';


   if($row["HenGan"]!='')
            $row["HenGan"]=$row["HenGan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["HenGan"]='';


   if($row["HenXa"]!='')
            $row["HenXa"]=$row["HenXa"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["HenXa"]='';


    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array(  
                                        $row["ID_LuotKham"],
                                        $row["ThoiGianVaoKham"],
                                        $row["ID_TrangThai"],
                                        $row["NgayGioHenTraKQ"],
                                         $row["SampleID"], $row["HenGan"],$row["HenXa"]
                                        );
     
    $i++; 
}  
echo json_encode($responce);
?>