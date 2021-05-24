<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881

$params = array($_GET["tungay"],$_GET["denngay"],$_GET["id_dotkham"]); 
$store_name="{call [GD2_SelectBenhNhanXetNghiem_TheoKSK_excelmau1](?,?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    
        if($row["ThoiGianVaoKham"]!=''){
            $row["ThoiGianVaoKham"]=$row["ThoiGianVaoKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
        }
          if($row["HenXa"]!=''){
            $row["HenXa"]=$row["HenXa"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
        }
         else {$row["HenXa"]='';}
    if($row["id_phanloaikham"]=='46')
            $noitru="Yes";
    else $noitru="";
	
	if($row["NguoiThucHien"]!=''){
		$dalaymau=1;
	}else{
		$dalaymau=0;
	};
      

    $responce->rows[$i]['id']=$row["SampleID"];
    $responce->rows[$i]['cell']=array(  
                                        $row["ID_LuotKham"],
                                        $row["ID_BenhNhan"],
                                        $row["MaBenhNhan"],
                                        $row["HoLotBenhNhan"],
                                        $row["TenBenhNhan"],
                                        $row["HenGan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]),
                                     
                                          $row["HenXa"],
                                        $row["GioiTinh"],
                                        $row["ThoiGianVaoKham"],
                                        $row["TrangThaiXn"], $row["TrangThaiKQ"],$row["TrangThaiDuyet"],
                                        $noitru,
                                            $row["SampleID"],'',
                                             $row["IsCoKQTuDbTrungGian"],
                                              $row["checkHenGan"],
											 $dalaymau,
											  $row["NguoiThucHien"],
											  $row["NickName"],//Nguoilaymau
                                    );
     
    $i++; 
}  
echo json_encode($responce);
?>