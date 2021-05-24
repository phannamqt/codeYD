<?php ob_start(); ?>
<?php 
function tt($input){
	$input = str_replace('1', 'Thành công', $input);
	$input = str_replace('0', 'Thất bại', $input);
	$input = str_replace('', 'chưa gửi', $input);
	return $input;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body{
	width: 100%;
	margin-top: 5px;
	overflow:scroll;
}
#wrapper{
	width:800px;
	margin:0 auto;
}
</style>
</head>
<body>

<div id="wrapper">
	<div style="text-align:center;font-size:18px; font-weight:bold"><?=$_GET["tencongty"]?>
    </div>
   
    <br />
    <?php
	$data= new SQLServer;
/*	$ngaybatdau=convert_date($_GET["from_day"]).' 00:00:00';
	$ngayketthuc=convert_date($_GET["to_day"]).' 23:59:59';*/


//iddotkham=802&id_congty=23&id_goikham=802&tencongty=CTY CPXL THÀNH AN 96 ( XÍ NGHIỆP XÂY LẮP 54)
//c	TenBenhNhan	Tuoi	GioiTinh	Tên dịch vụ	KetLuan	MoTa


	$store_name="{call [Med_KSK_KQ_KHAMTONGQUAT](?,?)}";
	$params = array($_GET["id_congty"],$_GET["iddotkham"]);
	//print_r($params);
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	
	?>
    <table  border="1" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px">
 	<tr style=" font-weight:bold; font-size:14px;">
    	<td>***</td>
    	<td>Mã BN</td>
   		<td>Họ lót</td>
   		<td>Tên</td>
        <td>Tuổi</td>
        <td>Giới tính</td>
         <td>Ps</td>
          <td>Pd</td>
           <td>Mạch</td>
            <td>Thân nhiệt</td>
             <td>Nhịp thở</td>
              <td>Chiều cao(cm)</td>
                <td>Cân nặng(kg)</td>
                  <td>Vòng ngực(cm)</td>


		<td>Mắt phải có kính</td>
		<td>Mắt phải không kính</td>
		<td>Mắt trái có kính</td> 
		<td>Mắt trái không kính</td>
		<td>Khám mắt</td> 
		<td>Khám TMH</td> 
		<td>Khám RHM</td> 
		<td>Khám da liễu</td> 
		<td>Khám nội khoa</td> 
		<td>Khám ngoại khoa</td> 
		<td>Khám SPK</td> 
		<td>Khám tuần hoàn</td> 
		<td>khám hô hấp</td>
		<td>Khám tiêu hóa</td>
		<td>Khám tiết niệu</td>
		<td>Khám thần kinh</td>
		<td>Khám tâm thần</td>
		<td>khám hệ vận động</td>
		<td>khám nội tiết</td>

        <td>Kết luận chung</td>
              <td>Phân loại thể lực</td>
                    <td>Phân loại sức khỏe</td>
    </tr>
    <?php
    $k=0;
	foreach($tam as $row){
		$k++;
		/*if($row["NgayHenTaiKham"]!=''){
			$row["NgayHenTaiKham"]=$row["NgayHenTaiKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		}
		if($row["NgayHetThuoc"]!=''){
			$row["NgayHetThuoc"]=$row["NgayHetThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
		}
		if($row["NgayGioGoi"]!=''){
			$row["NgayGioGoi"]=$row["NgayGioGoi"]->format($_SESSION["config_system"]["ngaythang"]);
		}
		if($row["NgayHenTaiKham"]!=''){
			$hentk="Có";
		}else{
			$hentk="Không";
		}
		if($row["NgayGioGoi"]!=''){
			$row["KetQuaCuocGoi"]=$row["KetQuaCuocGoi"];
		}else{
			$row["KetQuaCuocGoi"]="Chưa gọi lần nào";
		}*/
	?>
    <tr>
																<!-- TinhTrangBenhTatHienTai	HamTren_RHM	HamDuoi_RHM	TaiPhai_NoiThuong	TaiPhai_NoiTham	TaiTrai_NoiThuong	TaiTrai_NoiTham	KetLuanChung	PhanLoaiTheLuc	PhanLoaiSucKhoe	ID_LuotKham	Ps	Pd	Mach	 -->

		<td><?=$k?></td>
		<td><?=$row["MaBenhNhan"]?></td>
		<td><?=$row["HoLotBenhNhan"]?></td>
		<td><?=$row["TenBenhNhan"]?></td> 
		<td><?=$row["Tuoi"]?></td>
		<td><?=$row["GioiTinh"]?></td> 
		<td><?=$row["Ps"]?></td> 
		<td><?=$row["Pd"]?></td> 
		<td><?=$row["Mach"]?></td> 
		<td><?=$row["ThanNhiet"]?></td> 
		<td><?=$row["NhipTho"]?></td> 
		<td><?=$row["ChieuCao"]?></td> 
		<td><?=$row["CanNang"]?></td> 
		<td><?=$row["VongNguc"]?></td> 


		<td><?=$row["MatPhai_CK"]?></td>
		<td><?=$row["MatPhai_KK"]?></td>
		<td><?=$row["MatTrai_CK"]?></td> 
		<td><?=$row["MatTrai_KK"]?></td>
		<td><?=$row["BenhMat_KL"]?></td> 
		<td><?=$row["TaiMuiHong_KL"]?></td> 
		<td><?=$row["RangHamMat_KL"]?></td> 
		<td><?=$row["DaLieu_KL"]?></td> 
		<td><?=$row["NoiKhoa_KL"]?></td> 
		<td><?=$row["NgoaiKhoa_KL"]?></td> 
		<td><?=$row["SanPhuKhoa_KL"]?></td> 
		<td><?=$row["TuanHoan_KL"]?></td> 
		<td><?=$row["HoHap_KL"]?></td>
		<td><?=$row["TieuHoa_KL"]?></td>
		<td><?=$row["Than_TietNieu_SD_KL"]?></td>
		<td><?=$row["ThanKinh_KL"]?></td>
		<td><?=$row["TamThan_KL"]?></td>
		<td><?=$row["HeVanDong_KL"]?></td>
		<td><?=$row["NoiTiet_KL"]?></td>


		





         <td><?=$row["KetLuanChung"]?></td> 
         <td><?=$row["PhanLoaiTheLuc"]?></td>
          <td><?=$row["PhanLoaiSucKhoe"]?></td>
    	
    <?php
	}
	?>
	</table>

</div>
</body>
</html>
 
					<?php
				if($types=="excel"){
					file_put_contents('excel/temp.html', ob_get_contents());
					$exp=new ExportToExcel();
					$exp->exportWithPage("excel/temp.html","KetQua_KhámTổngQuát.xls");
				}
			?>