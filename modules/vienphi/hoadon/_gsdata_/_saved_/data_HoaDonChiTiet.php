<?php

 //$ID_ThuTraNo=0;
if(isset($_GET["ID_ThuTraNo"]))
{
   $ID_ThuTraNo= $_GET["ID_ThuTraNo"];
}
else
{
   $ID_ThuTraNo=0;
   // echo $tu_ngay;
}


switch ($_GET["phanloaiHD"]) {
	case '1'://hóa đơn khám chữa bệnh ngoại trú
		HoaDonKhamChuaBenh();
		break;
		case'5'://hóa đơn thuốc ngoại trú
		HoaDonThuocNgoaiTru();
		break;
		case'6'://hóa đơn thuốc ngoại trú
		HoaDonThuocNoiTru();
		break;
	case '7'://hóa đơn khám chữa bệnh nội trú
		HoaDonKhamChuaBenh();
		break;
			case '9'://bảng kê KCB ngoại trú
		HoaDon_BangKe_KhamChuaBenhNgoaiTru();
		break;
	default:
		# code...
		# code...
		# code...
		break;
}

function HoaDonKhamChuaBenh()
{
$data= new SQLServer;
$store_name="{call GD2_HoaDonKham (?)}";
$params = array($_GET["ID_ThuTraNo"]);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

			foreach ($tam as $row) {
$SL=1;
$DonGia=$row["ThanhTien"];
$ThanhTienTruocVAT=	$row["ThanhTien"];
$GiaTruocVAT=	$row["ThanhTien"];
			$responce->rows[$i]['cell']=array(
				  $row["Ten_Nhom_BHYT"],
				  $SL,
				  $DonGia,
				$row["ThanhTien"],$GiaTruocVAT,$ThanhTienTruocVAT,


			    );

			$i++;
			}
echo json_encode($responce);
}



function HoaDon_BangKe_KhamChuaBenhNgoaiTru()
{
$data= new SQLServer;
$store_name="{call GD2_BangKe_KhamChuaBenhNgoaiTru(?)}";
$params = array($_GET["ID_ThuTraNoMulti"]);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;

			foreach ($tam as $row) {
$SL=1;
$DonGia=$row["ThanhTien"];
$ThanhTienTruocVAT=	$row["ThanhTien"];
$GiaTruocVAT=	$row["ThanhTien"];
			$responce->rows[$i]['cell']=array(
				  $row["Ten_Nhom_BHYT"],
				  $SL,
				  $DonGia,
				$row["ThanhTien"],$GiaTruocVAT,$ThanhTienTruocVAT,


			    );

			$i++;
			}
echo json_encode($responce);
}

function HoaDonThuocNgoaiTru()
{
$data= new SQLServer;
$store_name="{call GD2_donthuoc_HoaDon (?)}";
$params = array($_GET["ID_ThuTraNo"]);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;


			foreach ($tam as $row) {

 $SL=$row["SoThuocThucXuat"];
$DonGia=$row["Gia"];
$ThanhTien=$row["ThanhTien"];



			$responce->rows[$i]['cell']=array(
				  $row["Ten_Nhom_BHYT"],
				  $SL,
				  $DonGia,
				   $ThanhTien,
					$row["GiaTruocVAT"],
				   $row["ThanhTienTruocVAT"],
			    );

			$i++;
			}
echo json_encode($responce);
}
function HoaDonThuocNoiTru()
{
$data= new SQLServer;
$store_name="{call Gd2_HoaDonThuocNoiTru (?)}";
$params = array($_GET["ID_ThuTraNo"]);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
$tam= $excute->get_as_array();
$responce = new stdClass;
$i=0;


			foreach ($tam as $row) {

 $SL=$row["SoThuocThucXuat"];
$DonGia=$row["Gia"];
$ThanhTien=$row["ThanhTien"];



			$responce->rows[$i]['cell']=array(
				  $row["Ten_Nhom_BHYT"],
				  $SL,
				  $DonGia,
				   $ThanhTien,
					$row["GiaTruocVAT"],
				   $row["ThanhTienTruocVAT"],
			    );

			$i++;
			}
echo json_encode($responce);
}


?>