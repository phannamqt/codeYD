<?php
/*$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
//$idnhanvien = $_GET['idphong'];
//$from = $_GET['from'];


$data= new SQLServer;//tao lop ket noi SQL 

if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;	
}
	$end=$limit;
 [Gd2_PhieuNhap_SelectByDateAndYear]  '2013-9-30', '2013-10-1',2013
$store_name="{call Gd2_PhieuNhap_SelectByDateAndYear (?,?,?,?,?,?,?,?)}";//tao bien khai bao store
$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
//print_r($params) ;
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$count=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $count=$row["CountN"];
	break;     
}   
//echo $count;
if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}


$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages; 
$kiemtra=true;


$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
     $responce->rows[$i]['id']=$row["ID_NhapKho"];
     $responce->rows[$i]['cell']=array($row["ID_NhapKho"],$row["MaPhieu"],$row["NgayLapPhieu"]->format('d-m-Y'),$row["NgayNhapKho"]->format('d-m-Y'),$row["ID_NguoiDuyet"],$row["NgayDuyet"]->format('d-m-Y'),$row["ID_NCC"],$row["ID_Kho"],$row["ID_NhapXuat"],$row["PhanTramVat"],$row["TienVAT"],$row["ThanhTien"],$row["GhiChu"]);
    $i++; 
}  
echo json_encode($responce);*/
?>

<?php
switch ($_GET["oper"]) {
    case "phieunhap":
        phieunhap();
        break;
    case "phieunhap_sub":
		phieunhap_sub();        
        break;
	case "phieunhap_edit":
		phieunhap_edit();        
        break;
    
}	 	

function phieunhap(){ 
	//print_r($_GET);
	$search="";
	if(isset($_GET["tungay"]) && isset($_GET["denngay"])){
		 $tungay=$_GET["tungay"];
		 $dengay=$_GET["denngay"].' 23:59:59';
	}else{
		 $tungay=date("Y-m-d");
		 $dengay=date("Y-m-d").' 23:59:59';		 
	}
	//$search=" AND (MaPhieu BETWEEN '$tungay' AND '$dengay' )";
	if(isset($_GET["tuso"]) && isset($_GET["denso"])){
		$search .=" AND (MaPhieu BETWEEN '$_GET[tuso]' AND '$_GET[denso]' )";
	}
	if(isset($_GET["maKH"])){
		$search .=" AND ID_NCC = $_GET[maKH]";
	}
	if(isset($_GET["maKHO"])){
		$search .=" AND ID_Kho = $_GET[maKHO]";
	}
	if(isset($_GET["ghichu"])){
		$search .=" AND Gd2_PhieuNhap_".$_SESSION["namhethong"].".GhiChu like '%$_GET[ghichu]%'";
	}
	if(isset($_GET["idThuoc"])){
		$search .=" AND ID_Thuoc = $_GET[idThuoc]";
	}
	if(isset($_GET["id_loai"])){
		$search .=" AND ID_NhapXuat = $_GET[id_loai]";
	}     
	//$search1 = "AND (MaPhieu BETWEEN '1' AND '44' )";
	//$solo ="";
		 
    $data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_phieunhap_select (?,?,?)}";//tao bien khai bao store
	$params = array($tungay,$dengay,$search);//tao param cho store 
	//print_r($search);
	$get_lich=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	 
	//echo $count;	
	//echo($solo) ;
	$responce = new stdClass;	 
	$kiemtra=true;	
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		 $responce->rows[$i]['id']=$row["ID_NhapKho"];
		 if($row["NgayDuyet"]==""){
			$row["NgayDuyet"]=$row["NgayDuyet"]; 
		 }else{
			$row["NgayDuyet"]=$row["NgayDuyet"]->format($_SESSION["config_system"]["ngaythang"]);
		 }		 
		 if($row["NgayHoaDon"]==""){
			$row["NgayHoaDon"]=$row["NgayHoaDon"]; 
		 }else{
			
			$row["NgayHoaDon"]=$row["NgayHoaDon"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 if($row["NgayLapPhieu"]==""){
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]; 
		 }else{
			
			$row["NgayLapPhieu"]=$row["NgayLapPhieu"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 $responce->rows[$i]['cell']=array(
		 $row["ID_NhapKho"],
		 $row["MaPhieu"],
		 $row["nickname"],
		 $row["NgayLapPhieu"],
		 $row["NgayNhapKho"]->format('d-m-Y'),
		 $row["ID_NguoiDuyet"],
		 $row["NgayDuyet"],
		 $row["ID_NCC"],
		 $row["ID_Kho"],
		 $row["ID_NhapXuat"],
		 $row["PhanTramVat"],
		 $row["TienVAT"],
		 $row["ThanhTien"]+$row["TienVAT"],
		 $row["SoHopDong"],
		 $row["SoDonDatHang"],
		 $row["SoHoaDon"],
		 $row["NgayHoaDon"],
		 $row["GhiChu"],
		 $row["ID_NCC1"],
		 $row["ID_Kho1"], $row["Is_BHYT"]

		 );
		 $i++; 
	}  
	echo json_encode($responce);
}

function phieunhap_sub(){ 
    $data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_phieunhapchitiet (?)}";//tao bien khai bao store
	$params = array($_GET["ids"]);//tao param cho store 
	//print_r($params) ;
	$get_lich=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	 
	//echo $count;	
	$responce = new stdClass;	 
	$kiemtra=true;	
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		 $responce->rows[$i]['id']=$row["ID_NhapKhoChiTiet"];
		 if($row["NgaySanXuat"]==""){
			$row["NgaySanXuat"]=$row["NgaySanXuat"]; 
		 }else{
			 
			$row["NgaySanXuat"]=$row["NgaySanXuat"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 
		 if($row["NgayHetHan"]==""){
			$row["NgayHetHan"]=$row["NgayHetHan"]; 
		 }else{
			 
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 $responce->rows[$i]['cell']=array($row["ID_NhapKho"],$row["ID_Thuoc"],$row["MaThuoc"],$row["TenGoc"],$row["TenDonViTinh"],$row["SoLuong"],$row["DonGia"],$row["ThanhTien"],$row["SoLoNhaSanXuat"],$row["NgayHetHan"],$row["TenDayDu"],$row["TenNhaSanXuat"],$row["SignNumber"],$row["SoLoHeThong"],$row["NgaySanXuat"]);
		 $i++; 
	}  
	echo json_encode($responce);
}


function phieunhap_edit(){ 
    $data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_phieunhapchitiet (?)}";//tao bien khai bao store
	$params = array($_GET["ids"]);//tao param cho store 
	//print_r($params) ;
	$get_lich=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	 
	//echo $count;	
	$responce = new stdClass;	 
	$kiemtra=true;	
	$i=0;
	foreach ($tam as $row) {//duyet toan bo mang tra ve
		 $responce->rows[$i]['id']=$row["ID_NhapKhoChiTiet"];
		 if($row["NgaySanXuat"]==""){
			$row["NgaySanXuat"]=$row["NgaySanXuat"]; 
		 }else{
			$row["NgaySanXuat"]=$row["NgaySanXuat"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 
		 if($row["NgayHetHan"]==""){
			$row["NgayHetHan"]=$row["NgayHetHan"]; 
		 }else{
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
		 }
		 $responce->rows[$i]['cell']=array('',$row["ID_NhapKho"],$row["ID_Thuoc"],$row["TenDonViTinh"],$row["SoLuong"],$row["DonGia"],$row["ThanhTien"],$row["SoLoNhaSanXuat"],$row["NgayHetHan"],$row["TenNhaSanXuat"],$row["TenDayDu"],$row["SignNumber"],$row["SoLoHeThong"],$row["NgaySanXuat"]);
		 $i++; 
	}  
	echo json_encode($responce);
}

function search_main(){
	
	
}
?>