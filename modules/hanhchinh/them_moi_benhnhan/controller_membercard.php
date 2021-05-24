<?php
switch ($_GET['oper']) {
	case 'getthe':
		getthe();
		break;
	case 'save':
		save();
	case 'check':
		check();
		break;
	default:
		# code...
		break;
}
function getthe(){
	$data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_MemberCardGetByID_BenhNhan (?)}";
	$params = array($_POST['idbenhnhan']); 
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$responce = array('SoTheThanhVien' => $tam[0]["SoTheThanhVien"], 'MaBenhNhan' => $tam[0]["MaBenhNhan"], 'HoTenBenhNhan' =>$tam[0]["HoTenBenhNhan"], 'TenTrangThai' =>$tam[0]["TenTrangThai"], 'BenhNhanDaLay' =>$tam[0]["BenhNhanDaLay"], 'TrangThai' =>$tam[0]["TrangThai"], 'DiemSoDuHienTai' =>number_format($tam[0]["DiemSoDuHienTai"],"0",",","."), 'TenHangThe' =>$tam[0]["TenHangThe"]);
	echo json_encode($responce);
}

function check(){
	$data= new SQLServer;//tao lop ket noi SQL 

	if($_POST['SoTheThanhVien']==''){
		$responce = array('ID_BenhNhan' => 0, 'MaBenhNhan' => '', 'HoTenBenhNhan' =>'');
	}else{
		$store_name="{call GD2_MemberCardCheckThe (?)}";
		$params = array($_POST['SoTheThanhVien']);
		$get=$data->query( $store_name, $params);
		$excute= new SQLServerResult($get);
		$tam= $excute->get_as_array();
		$responce = array('ID_BenhNhan' => $tam[0]["ID_BenhNhan"], 'MaBenhNhan' => $tam[0]["MaBenhNhan"], 'HoTenBenhNhan' =>$tam[0]["HoTenBenhNhan"]);
	}
	echo json_encode($responce);
}

function save(){
	$data= new SQLServer;//tao lop ket noi SQL 
	$store_name="{call GD2_MemberCardUpdate (?,?,?,?)}";
	$params = array(
		$_POST['idbenhnhan'],	//@ID_BenhNhan INT,
		$_POST['SoTheThanhVien'],	//@SoTheThanhVien NVARCHAR(100),
		$_SESSION["user"]["id_user"],	//@IdUser_login INT,
		$_SERVER['REMOTE_ADDR']	//@IP NVARCHAR(30)
		); 
	$data->query( $store_name, $params);

}


?>