<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid

$data= new SQLServer;//tao lop ket noi SQL 

if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;	
}
	$end=$limit;
 //Lấy ds bn hoàn tất khám 
$store_name="{call spLayDSBenhNhanLamSangTheoTrangThai_2 (?,?)}";//tao bien khai bao store
//spLayDSBenhNhanLamSangTheoTrangThai_2 KetThucKham,Xong

$params = array("KetThucKham","Xong");//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=  count($tam);

if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}


$responce = new stdClass;

$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
   // $tentuoigioi=$row["TenBenhNhan"]+','+$row["GioiTinh"]=','+$row["Tuoi"];
    
    
    
    
    $store_name1 = "{call GD2_DM_NhanVien_SelectNickNameByIdNhanVien(?)}";
    $params1 = array($row["BSLamSang"]);
    $get = $data->query($store_name1, $params1);
    $excute1 = new SQLServerResult($get);
    $tam1 = $excute1->get_as_array();

    if (count($tam1) == 0) {
        $Bslamsang = '';
    } else {
        $Bslamsang = $tam1[0][0];
    }
    
    $responce->rows[$i]['id']=$row["ID_LuotKham"];
    $responce->rows[$i]['cell']=array(
        $row["ID_LuotKham"],
        $row["MaBenhNhan"],
        $row["TenBenhNhan"],
           $row["Tuoi"],
     
        $row["TenPhanLoaiKham"],
        
     $Bslamsang,
        $row["GhiChu"],$row["NotesStatus"],
         $row["ID_BenhNhan"],
       // $tentuoigioi
            );
  
     
    $i++; 
}  
echo json_encode($responce);
?>