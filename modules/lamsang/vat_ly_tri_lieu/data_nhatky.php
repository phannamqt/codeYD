<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["idphysio"]); 
$store_name="{call GD2_getnhatky_vltlByID_Physio(?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["GioThucHien"]!='')
		$row["GioThucHien"]=$row["GioThucHien"]->format("H:i ");
	else $row["GioThucHien"]='';
	if($row["NgayThucHien"]!='')
		$row["NgayThucHien"]=$row["NgayThucHien"]->format("d/m/Y");
	else $row["NgayThucHien"]='';
    $responce->rows[$i]['id']=$row["ID_Physiotherapydiary"];
    $responce->rows[$i]['cell']=array(	
			$row["ID_Physiotherapydiary"], 
			$row["GioThucHien"],
			$row["NgayThucHien"],
			$row["ID_NguoiThucHien"],
			$row["MoTa"],

			);

    $i++; 
}  
echo json_encode($responce);
?>