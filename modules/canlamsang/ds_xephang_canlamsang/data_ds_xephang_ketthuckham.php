
<?php
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the directio
$data= new SQLServer;//tao lop ket noi SQL 
 
 
if($page==1){
	$start=$page-1;
}else{
	$start=$limit/$page;	
}
	$end=$limit;
 $param1='Xong';

$store_name="{call GD2_LayDSXepHangCanLamSang_New(?)}";//tao bien khai bao store
//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
$params = array($param1);//tao param cho store 
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
$responce->page = $page;
$responce->total = $total_pages; 
$kiemtra=true;


$i=0;
$flag=0;
if($_GET['gr']=='true'){
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!='') 
				$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
				
	if(($row["XetNghiem"]==true and $flag==0) ||$row["XetNghiem"]==false ){
		if($row["XetNghiem"]==true){
		$row["TenLoaiKham"]='Xét nghiệm';
		$flag=1;
		}else{
			$row["TenLoaiKham"]=$row["TenLoaiKham"];
			}
			if($row["NgayGioKetThuc"]!='') 
			$row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format('H:i');
			$responce->rows[$i]['id']=$row["ID_Kham"];
			$responce->rows[$i]['cell']=array($row["ID_Kham"],
			$row["MaBenhNhan"],
			$row["TenBenhNhan"].' - '.$row["MaBenhNhan"],
			$row["Tuoi"],
			$row["GioiTinh"],
			$row["TenLoaiKham"],
			$row["NgayGioKetThuc"],
			$row["NgayGioTao"],
			$row["ID_LoaiKham"],
			$row["ID_TrangThai"],
			$row["ID_BenhNhan"]
				);
		 
		$i++; 
	} 
	}
}else{
	foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayGioTao"]!='') 
				$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
	if(($row["XetNghiem"]==true and $flag==0) ||$row["XetNghiem"]==false ){
		if($row["XetNghiem"]==true){
		$row["TenLoaiKham"]='Xét nghiệm';
		$flag=1;
		}else{
			$row["TenLoaiKham"]=$row["TenLoaiKham"];
			}
			if($row["NgayGioKetThuc"]!='') 
			$row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format('H:i');
			$responce->rows[$i]['id']=$row["ID_Kham"];
			$responce->rows[$i]['cell']=array($row["ID_Kham"],
			$row["MaBenhNhan"],
			$row["TenBenhNhan"],
			$row["Tuoi"],
			$row["GioiTinh"],
			$row["TenLoaiKham"],
			$row["NgayGioKetThuc"],
			$row["NgayGioTao"],
			$row["ID_LoaiKham"],
			$row["ID_TrangThai"],
			$row["ID_BenhNhan"]
				);
		 
		$i++; 
	} 
	}
	
	}
//print_r($tam); 
echo json_encode($responce);
?>