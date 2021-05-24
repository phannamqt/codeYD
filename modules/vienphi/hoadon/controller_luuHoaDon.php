<?php


$data= new SQLServer;//tao lop ket noi SQL
//Th hủy

if(isset($_GET["soHdXoa"])){
	$store_name="{call GD2_HoaDonThueDiary_Delete (?,?)}";//tao bien khai bao store
	$params = array(
	$_GET["_ID_HoaDonThueDiary"],
	$_SESSION["user"]["id_user"],

	);

$get=$data->query( $store_name, $params);//Goi store
break;

}


if(isset($_GET["soHdHuy"])){

	$store_name="{call GD2_HuyHoaDon (?,?)}";//tao bien khai bao store
	$params = array(
	$_GET["_ID_HoaDonThueDiary"],
	$_SESSION["user"]["id_user"],

	);

$get=$data->query( $store_name, $params);//Goi store

}
else
{//còn lại là lưu hoặc thêm mới

  		$id_hoadon=0;
  		if(isset($_POST["id_soHD"])){
  			$id_hoadon=$_POST["id_soHD"];
  		}
  		else
  		{
  			$id_hoadon=0;
  		}

		if($id_hoadon>0)//update theo id số hóa đơn
		{
			//echo ('dffff'.$id_hoadon);
		$store_name="{call GD2_HoaDonThueDiary_Update (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
		$params = array(
			$id_hoadon,
			($_POST["ngayKham"]),
			$_POST["kihieuHD"],
			$_POST["soHD"],
			$_POST["soTk"],
			$_POST["nguoiLap"],
			$_POST["tendonvi"],
			$_POST["maST"],
			$_POST["diachiKH"],
			$_POST["hinhthuctt"],
			$_POST["ghichu"],
			$_POST["noidung"],
			$_POST["tenKH"],
			$_POST["phanloaiHD"],
			$_POST["ngayHD"],
			$_POST["phaitra"],
			$_POST["miengiam"],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR'],

			);
		//print_r($params);

$get=$data->query( $store_name, $params);//Goi store
echo $id_hoadon;
}
else// insert
{
	$out1='';
$store_name="{call GD2_HoaDonThueDiary_Insert (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";//tao bien khai bao store
$params = array(
	$_GET["ID_TTNo"],
	$_POST["ngayKham"],
	$_POST["kihieuHD"],
	$_POST["soHD"],
	$_POST["soTk"],
	$_POST["nguoiLap"],
	$_POST["tendonvi"],
	$_POST["maST"],
	$_POST["diachiKH"],
	$_POST["hinhthuctt"],
	$_POST["ID_ThuTraNoMulti"],
	$_POST["noidung"],
	$_POST["tenKH"],
	$_POST["phanloaiHD"],
	$_POST["ngayHD"],
		$_POST["phaitra"],
	$_POST["miengiam"],$_SESSION["user"]["id_user"],$_SERVER['REMOTE_ADDR'],//khatm bổ sung 23/6/15
	array(&$out1, SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT)
	);
//print_r($params);
$data->query( $store_name, $params);//Goi store
echo  $out1;
}









}
?>

