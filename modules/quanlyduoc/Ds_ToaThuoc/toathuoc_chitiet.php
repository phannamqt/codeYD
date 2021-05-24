<?php
$id_donthuoc=$_GET['id_donthuoc'];
$data= new SQLServer;
$store_name="{call Gd2_toathuoc_slthucxuat_byid_xuatkho (?,?)}";
//$params = array( $tu_ngay,$den_ngay,"HuyBo","Cancel");
//$params = array($_GET["id_donthuoc"]);
$params = array($id_donthuoc,$_GET['id_xuatkho']);
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
	
	if($row["SoThuocThucXuat"]!='')
				 $row["SoThuocThucXuat"]=number_format($row["SoThuocThucXuat"]);
		 else $row["SoThuocThucXuat"]='';
	
// if($row["Gia"]!='')
			// $row["Gia"]=number_format($row["Gia"]);
	// else $row["Gia"]='';
	
// if($row["ThanhTien"]!='')
			// $row["ThanhTien"]=number_format($row["ThanhTien"]);
	// else $row["ThanhTien"]='';
	
	
    $responce->rows[$i]['id']=$row["ID_DonThuocCT"];
    $responce->rows[$i]['cell']=array(
	
        $row["TenGoc"],
        $row["TenDonViTinh"],
        $row["CachDung"],//cach dung
        $row["LuongThuocDungTrong1Ngay"],//sl dung 1 ngay
		$row["SoThuocDeNghiTheoDon"],//so luong bs ke
		$row["SoNgayThuoc"],//so ngay thuoc bn yeu cau
        $row["SoThuocThucXuat"],//so luong bn yeu cau
		$row["slxuat"],//so luong thuc xuat
		$row["sltra"],
		$row["slthucxuat"],//so luong thuc xuat
		$row["Gia"],//don gia
		$row["ThanhTien"],//thanh tien theo so luong benh nhan yeu cau
        1,//in
        $row["SoNgayThuoc"],//so ngay thuoc theo don
		$row["TenGoc"],//ten goc
		$row["TenBietDuoc"],//ten biet duoc
		$row["TenKhac"],//ten khac
		$row["TenHoaDon"],//ten hoa don
		$row["NgayKeDon"],//ngay ke don
		$row["HoTenBS"],//Bac sy ke don
		nl2br($row["GhiChu"]),
		$row["ID_LuotKham"],
		$row["PhanTramThue"],
		$row["ID_Thuoc"],
		$row["DaThanhToan"],
		$row["TrangThaiDonThuoc"],
		$row["MienGiam"],
		$row["chandoan"],
		$row["IsBhyt"],
            );
     
    $i++; 
}  
echo json_encode($responce);
?>