<?php
$data= new SQLServer;//tao lop ket noi SQL 
 $param1=$_GET["id"];
 $param2='DangCho';
 $param3=NULL;
 $param4=NULL;
$store_name="{call GD2_LayDSXepHangCanLamSang_GroupXetNghiem_TheoPhongChuyenMon(?,?,?,?)}";//tao bien khai bao store
$params = array($param1,$param2,$param3,$param4);//tao param cho store 
$get_lich=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce = new stdClass;
$flag=0;
$mabn=0;
$mabn2=0;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	/*if($row["XetNghiem"]==true){
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
	}*/
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
//}
} 
echo json_encode($responce);

echo '||';



$_param1=$_GET["id"];
$_param2='DangKham';
$_param3='DaThucHien';
$_param4='DaLayBenhPham';
$_store_name="{call GD2_LayDSXepHangCanLamSang_GroupXetNghiem_TheoPhongChuyenMon(?,?,?,?)}";//tao bien khai bao store GD2_LayDSXepHangCanLamSang
$_params = array($_param1,$_param2,$_param3,$_param4);//tao bien khai bao store GD2_LayDSXepHangCanLamSang
$_get_lich=$data->query( $_store_name, $_params);//Goi store
$_excute= new SQLServerResult($_get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$_tam= $_excute->get_as_array();
$_responce = new stdClass;

$i=0;
$_flag=0;
$_mabn=0;
$_mabn2=0;
foreach ($_tam as $row) {//duyet toan bo mang tra ve
	/*if($row["XetNghiem"]==true){
			$_mabn=$row["MaBenhNhan"];
			}
		if(($row["XetNghiem"]==true and $_flag==0 or $_mabn!=$_mabn2) ||$row["XetNghiem"]==false ){
			if($row["XetNghiem"]==true){
				$row["TenLoaiKham"]='Xét nghiệm';
				$_flag=1;
				$_mabn2=$row["MaBenhNhan"];
		}else{
			$row["TenLoaiKham"]=$row["TenLoaiKham"];
		}
		//echo $mabn."!=".$mabn2;	
		if($_mabn!=$_mabn2){
			$flag=0;
		}*/
	//-------------------
		if($row["NgayGioTao"]!='') {
			$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');}
		if($row["NgayGioHenTraKQ"]!='') {
			$row["NgayGioHenTraKQ"]=$row["NgayGioHenTraKQ"]->format('H:i d-m-y');}
  $_responce->rows[$i]['id']=$row["ID_Kham"];
   $_responce->rows[$i]['cell']=array($row["ID_Kham"],
        $row["ID_LuotKham"],
	    $row["MaBenhNhan"],
        $row["TenBenhNhan"],
        $row["Tuoi"],
        $row["GioiTinh"],
        $row["TenLoaiKham"],
        $row["NgayGioTao"],
		$row["NgayGioHenTraKQ"],
		$row["TenBSChiDinh"],
		$row["NguoiThucHien"],
		$row["GhiChu"],
        $row["GoiKham"],
		$row["ID_TrangThai"],
        $row["NotesStatus"],
        $row["ID_BenhNhan"],
        $row["ID_LoaiKham"]
            );
    $i++; 
//} 
}
//print_r($tam); 
echo json_encode($_responce);


echo'||';

$param11=$_GET["id"];
 $param22='Xong';
 $param33=NULL;
 $param44=NULL;
$store_name1="{call GD2_LayDSXepHangCanLamSang_GroupXetNghiem_TheoPhongChuyenMon(?,?,?,?)}";//tao bien khai bao store
$params1 = array($param11,$param22,$param33,$param44);//tao param cho store 
$get_lich1=$data->query( $store_name1, $params1);//Goi store
$excute1= new SQLServerResult($get_lich1);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam1= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc 
$responce1 = new stdClass;
$responce2 = new stdClass;
$i=0;
$flag=0;
	foreach ($tam1 as $row) {//duyet toan bo mang tra ve
	/*if($row["NgayGioTao"]!='') 
				$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
				
	if(($row["XetNghiem"]==true and $flag==0) ||$row["XetNghiem"]==false ){
		if($row["XetNghiem"]==true){
		$row["TenLoaiKham"]='Xét nghiệm';
		$flag=1;
		}else{
			$row["TenLoaiKham"]=$row["TenLoaiKham"];
			}*/
			if($row["NgayGioKetThuc"]!='') 
			$row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format('H:i');
			$responce1->rows[$i]['id']=$row["ID_Kham"];
			$responce1->rows[$i]['cell']=array($row["ID_Kham"],
			$row["MaBenhNhan"],
			$row["TenBenhNhan"],
			$row["Tuoi"],
			$row["GioiTinh"],
			$row["TenLoaiKham"],
			$row["NgayGioKetThuc"],
			$row["NgayGioTao"],
			$row["ID_LoaiKham"],
			$row["ID_TrangThai"],
			$row["ID_BenhNhan"],
			$row["ID_LuotKham"]
				);
		 
		$i++; 
	//} 
	}//for
$i=0;
$flag=0;
foreach ($tam1 as $row) {//duyet toan bo mang tra ve
if($row["NgayGioTao"]!='') 
			$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
/*if(($row["XetNghiem"]==true and $flag==0) ||$row["XetNghiem"]==false ){
	if($row["XetNghiem"]==true){
	$row["TenLoaiKham"]='Xét nghiệm';
	$flag=1;
	}else{
		$row["TenLoaiKham"]=$row["TenLoaiKham"];
		}*/
		if($row["NgayGioKetThuc"]!='') 
		$row["NgayGioKetThuc"]=$row["NgayGioKetThuc"]->format('H:i');
		$responce2->rows[$i]['id']=$row["ID_Kham"];
		$responce2->rows[$i]['cell']=array($row["ID_Kham"],
		$row["MaBenhNhan"],
		$row["TenBenhNhan"].' - '.$row["MaBenhNhan"],
		$row["Tuoi"],
		$row["GioiTinh"],
		$row["TenLoaiKham"],
		$row["NgayGioKetThuc"],
		$row["NgayGioTao"],
		$row["ID_LoaiKham"],
		$row["ID_TrangThai"],
		$row["ID_BenhNhan"],
		$row["ID_LuotKham"]
			);
	 
	$i++; 
//} 
}//for


echo json_encode($responce1);
echo'||';
echo json_encode($responce2);

?>
