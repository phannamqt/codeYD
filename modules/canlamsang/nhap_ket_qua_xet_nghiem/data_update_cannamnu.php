<?php
$data= new SQLServer;//tao lop ket noi SQL 
//257881
$params = array($_GET["id_xetnghiem"]); 
$store_name="{call GD2_Select_cannamnu_XetNghiem(?)}";
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_XetNghiem"];
    $responce->rows[$i]['cell']=array(	
    									$row["ID_XetNghiem"],
    									$row["TenXetNghiem"],
    									$row["CanNam1"],
    									$row["CanNam2"],
    									$row["CanNam3"],
    									$row["CanNam4"],
    									$row["CanNu1"],
    									$row["CanNu2"],
    									$row["CanNu3"],
										$row["CanNu4"],
										$row["Red"],
										$row["Blue"],
										$row["Yellow"],
										$row["GiaTriBinhThuong1"],
										);
     
    $i++; 
}  
echo json_encode($responce);
?>