<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["idbenhnhan"],$_GET["idluotkham"]); 
$store_name="{call GD2_XetNghiem_ByIdBenhNhan3(?,?)}";

if(isset($_GET["sid"]) && $_GET["sid"]>0) 

{
 $params = array($_GET["idbenhnhan"],$_GET["idluotkham"],$_GET["sid"]); 
$store_name="{call [GD2_XetNghiem_ByIdBenhNhan3_new](?,?,?)}";
}

$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	 $NgayGioHenTraKQ = "";
    if (isset($row["NgayGioHenTraKQ"])) {
        $NgayGioHenTraKQ = $row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    }
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(	
    									$row["ID_Kham"],
    									$row["TenLoaiKham"],
    									$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
    									$NgayGioHenTraKQ,
    									$row["NguoiThucHien2"],
                                        $row["ThongSoKyThuat"],
    									
    									);
     
    $i++; 
   
}  
echo json_encode($responce);

?>	