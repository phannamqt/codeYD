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
 $param1='DangCho';
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
$mabn=0;
$mabn2=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["XetNghiem"]==true){
		$mabn=$row["MaBenhNhan"];
		}
	if(($row["XetNghiem"]==true and $flag==0 or $mabn!=$mabn2) ||$row["XetNghiem"]==false ){
		if($row["XetNghiem"]==true){
			$row["TenLoaiKham"]='Xét nghiệm';
			$flag=1;
			$mabn2=$row["MaBenhNhan"];
	}else{
		$row["TenLoaiKham"]=$row["TenLoaiKham"];
	}
	//echo $mabn."!=".$mabn2;	
	if($mabn!=$mabn2){
		$flag=0;
	}
	if($row["GioHenKham"]!='') 
		$row["GioHenKham"]=$row["GioHenKham"]->format('H:i');
	if($row["NgayGioTao"]!='') 
		$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
				
			
				
				
	  $responce->rows[$i]['id']=$row["ID_Kham"];
	   $responce->rows[$i]['cell']=array($row["ID_Kham"],
			$row["ID_LuotKham"],
			$row["MaBenhNhan"],
			$row["TenBenhNhan"],
			$row["Tuoi"],
			$row["GioiTinh"],
			$row["TenLoaiKham"],
			$row["GioHenKham"],
			$row["NgayGioTao"],
			$row["TenBSChiDinh"],
			$row["GhiChu"],
			$row["GoiKham"],
			$row["NotesStatus"],
			$row["ID_BenhNhan"],
			$row["ID_LoaiKham"],
			$row["ID_LoaiKham"]
				);
		 
		$i++; 
	}
} 
//print_r($tam); 
echo json_encode($responce);
?>
