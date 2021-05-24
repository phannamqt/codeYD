<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["id_benhnhan"],$_GET["id_kham"]); 
$store_name="{call GD2_LuotKhamVLTL_FollowBenhNhan(?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
	 if($row["NgayGioTao"]!='')
            $row["NgayGioTao"]=$row["NgayGioTao"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioTao"]='';
    $responce->rows[$i]['id']=$row["ID_Kham"];
    $responce->rows[$i]['cell']=array(	
                                        $row["ID_LuotKham"],
                                        $row["ID_Kham"],
    									$row["ID_LoaiKham"],
    									$row["BSChiDinh"],
    									$row["SoNgayThucHien"],
    									$row["NgayGioTao"],
    									$row["Mota"],
    									$row["KetLuan"],
                                        $row["BSChanDoan"],
                                        $row["ChanDoan"],
                                        $row["ID_TrangThai"],
                                        $row["NguoiThucHien"],
    								);
     
    $i++; 
}  
echo json_encode($responce);
?>