<?php
$id_donthuoc=$_GET['id_donthuoc'];
$data= new SQLServer;
$store_name="{call GD2_DSTT_NhapThuoc_Sellect (?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
//$params = array($_GET["id_luotkham"]);
$params = array($id_donthuoc);
//print_r($params);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;

$i=0;
foreach ($tam as $row) {
	if($row["NgayKeDon"]!='')
			$row["NgayKeDon"]=$row["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]." H:i ");
	else $row["NgayKeDon"]='';
	
if($row["SoThuocDeNghiTheoDon"]!='')
			$row["SoThuocDeNghiTheoDon"]=number_format($row["SoThuocDeNghiTheoDon"]);
	else $row["SoThuocDeNghiTheoDon"]='';


/* if($row["SoThuocThucXuat"]!='')
			// $row["SoThuocThucXuat"]=number_format($row["SoThuocThucXuat"]);
	// else $row["SoThuocThucXuat"]='';
	
// if($row["Gia"]!='')
			// $row["Gia"]=number_format($row["Gia"]);
	// else $row["Gia"]='';
	
// if($row["ThanhTien"]!='')
			// $row["ThanhTien"]=number_format($row["ThanhTien"]);
	// else $row["ThanhTien"]='';
	if($row["NgaySanXuat"]!='')
			$row["NgaySanXuat"]=$row["NgaySanXuat"]->format($_SESSION["config_system"]["ngaythang"]." H:i ");
	else $row["NgaySanXuat"]='';*/
	
	if($row["NgayHetHan"]!='')
			$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]." H:i ");
	else $row["NgayHetHan"]='';
	
    $responce->rows[$i]['id']=$i;
    $responce->rows[$i]['cell']=array(
$row["ID_DonThuocCT"],
        $row["TenBietDuoc"],
        $row["TenDonViTinh"],
         $row["CachDung"],//cach dung
        round($row["SoThuocDeNghiTheoDon"]/$row["SoNgayThuoc"]),//sl dung 1 ngay
		$row["SoThuocDeNghiTheoDon"],//so luong bs ke
		 round($row["SoThuocThucXuat"]),//so thuoc thuc xuat
		$row["Gia"],//don gia
		0,//so ngay thuoc bn yeu cau
        0,//so luong bn yeu cau
		
		
		//0,//so luong thuc xuat
		$row["Gia"],//tien tra lai tren 1 vien
		0,//thanh tien theo so luong benh nhan yeu cau
		$row["ThanhTien"],//thanh tien theo so luong benh nhan yeu cau
        1,//in
        $row["SoNgayThuoc"],//so ngay thuoc theo don
		$row["TenGoc"],//ten goc
		$row["TenBietDuoc"],//ten biet duoc
		$row["TenKhac"],//ten khac
		$row["TenHoaDon"],//ten hoa don
		$row["NgayKeDon"],//ngay ke don
		$row["NickName"],//Bac sy ke don
		$row["ID_Kho"],
		$row["ID_Thuoc"],
		$row["SoLoNhaSanXuat"],
		'',//Ngay san xuat
		$row["NgayHetHan"],
		$row["SoLo"],
		$row["ID_NhapKho"],
		$row["ID_NCC"]
		
            );
     
    $i++; 
}  
echo json_encode($responce);
?>