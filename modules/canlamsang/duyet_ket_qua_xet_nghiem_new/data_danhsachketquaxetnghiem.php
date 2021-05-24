<?php
$data= new SQLServer;//tao lop ket noi SQL SampleID

$params = array($_GET["idbenhnhan"],$_GET["idluotkham"],$_GET["SampleID"]); 
$store_name="{call [GD2_XetNghiem_ByIdBenhNhan_Hislis_New2](?,?,?)}";
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    if($row["NgayGioThucHien"]!='')
            $row["NgayGioThucHien"]=$row["NgayGioThucHien"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
    else $row["NgayGioThucHien"]='';
    $responce->rows[$i]['id']=$row["ID_KetQuaXN"];
    $responce->rows[$i]['cell']=array(	 
                                        $row["ID_XetNghiem"],
                                        $row["ID_Kham"],
    									$row["NgayGioTao"]->format("H:i:s ".$_SESSION["config_system"]["ngaythang"]),
    									$row["TenLoaiKham"],
    									$row["TenXetNghiem"],
    									$row["KetQua"],$row["KQHisLis"],
    									$row["GiaTriBinhThuong1"],
    									$row["NguoiThucHien"],
                                        $row["NgayGioThucHien"],
    									$row["NguoiDuyet"],
                                        $row["DaDuyetKetQua"],
                                        '',
                                        $row["ID_KetQuaXN"],
                                         $row["Color"],
										 1
    									);
     
    $i++; 
   
}  
echo json_encode($responce);

?>	