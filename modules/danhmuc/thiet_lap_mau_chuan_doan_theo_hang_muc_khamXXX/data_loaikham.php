<?php
if (isset($_GET["searchString"])){
	$search_string=$_GET["searchString"];
}else{
	$search_string="";	
}
$id=$_GET["idphongban"];
$data= new SQLServer;//tao lop ket noi SQL
$params = array($id);//tao param cho store 
$store_name="{call GD2_DM_LoaiKhamSelectByID_NhomTemplate(?)}";//tao bien khai bao store
$get=$data->query( $store_name,$params);//Goi store
$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$i=0;
$y=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	//if($row["pbvl_idlk"]==0 or ($row["pbvl_idlk"]>0 && $row["pb"]>0)){
	
	    if($row['ID_LoaiKham_NhomTemplate']==''){
               $y=0;
           }else{
               $y=1;
            }
    
    $responce->rows[$i]['id']=$row["ID_LoaiKham"]; 
    $responce->rows[$i]['cell']=array($row["ID_NhomCLS"],$row["ID_LoaiKham_NhomTemplate"],$row["idnhom"],0,0,$row["IDNhomTemPlate"],$row["ID_NhomCLS"],$row["ID_LoaiKham"],$row["TenLoaiKham"],$row["MaVietTat"],$row["STT"],$y);
    $i++; 
	//}
}
echo json_encode($responce);
?>