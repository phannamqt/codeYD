<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array('Xong',$_GET["tungay"],$_GET["denngay"]); 
$store_name="{call GD2_VLTL_HoanTat_new(?,?,?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["Ngay"]!='')
            $row["Ngay"]=$row["Ngay"]->format($_SESSION["config_system"]["ngaythang"].' H:i');
    else $row["Ngay"]='';
     $responce->rows[$i]['id']=$row["ID_Physiotherapy"];
    $responce->rows[$i]['cell']=array(  
                                        $row["id_kham"],
                                        $row["ID_BenhNhan"],
                                        $row["MaBenhNhan"],
                                        $row["tenbn"],
                                        $row["NoiDung"],
                                        $row["KetLuan"],
                                        $row["ID_TrangThai"],
                                        $row["ID_LuotKham"],
                                        $row["ID_Physiotherapy"],
                                         $row["Ngay"]
                                    );
     
    $i++; 
}  
echo json_encode($responce);
?>