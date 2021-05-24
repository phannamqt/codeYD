<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["tungay"],$_GET["denngay"]); 
$store_name="{call GD2_ThongTinLuotKham_SelectBenhNhanXetNghiem(?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioHenTraKQ"]!='')
		{
            $row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
        }	
	else {$row["NgayGioHenTraKQ"]='';}
        if($row["ThoiGianVaoKham"]!=''){
            $row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
        }
    else {$row["ThoiGianVaoKham"]='';}
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
    									$row["ThoiGianVaoKham"],
    									$row["TinhTrangKQ"],
    									$row["TinhTrangDuyet"],
    									$row["NgayGioHenTraKQ"],
                                        $noitru,
                                            $row["SampleID"],
    								);
     
    $i++; 
}  
echo json_encode($responce);
?>