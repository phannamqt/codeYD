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
	<div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH CẦN GỌI TÁI KHÁM
    </div>
    <div style="text-align:center;font-size:14px;">(Từ ngày <?=$_GET["from_day"]?> đến ngày <?=$_GET["to_day"]?>)</div>
    <br />
    <?php
	$data= new SQLServer;
	$ngaybatdau=convert_date($_GET["from_day"]).' 00:00:00';
	$ngayketthuc=convert_date($_GET["to_day"]).' 23:59:59';
	$store_name="{call GD2_ThongTinLuotKham_SelectLichHenTaiKham(?,?,?)}";
	$params = array($ngaybatdau,$ngayketthuc,$_GET["theo"]);
	//print_r($params);
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	
	?>
    <table  border="1" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px">
 	<tr style=" font-weight:bold; font-size:14px;">
    	<td>Mã BN</td>
   		<td>Họ tên</td>
        <td>Tuổi</td>
        <td>Giới tính</td>
        <td>Điện thoại</td>
        <td>Địa chỉ</td>
   		<td>BS hẹn khám</td>
        <td>Có hẹn tái khám</td>
        <td>Ngày hẹn tái khám</td>
        <td>Ngày hết thuốc</td>
        <td>Ngày gọi cuối</td>
        <td>Kết quả lần gọi cuối </td>
        <td>Người liên lạc cuối</td>
        <td>Tình trạng gửi TN</td>
    </tr>
    <?php
	foreach($tam as $row){
		if($row["NgayHenTaiKham"]!=''){
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
		}
	?>
    <tr>
    	 <td><?=$row["MaBenhNhan"]?></td>
         <td><?=$row["HoLotBenhNhan"].' '.$row["TenBenhNhan"]?></td> 
         <td><?=$row["Tuoi"]?></td>
         <td><?=$row["GioiTinh"]?></td> 
         <td>&nbsp;<?=$row["DienThoai1"]?></td>
         <td><?=$row["DiaChi"]?></td> 
         <td><?=$row["NickName"]?></td>
         <td><?=$hentk?></td> 
         <td><?=$row["NgayHenTaiKham"]?></td>
         <td><?=$row["NgayHetThuoc"]?></td>
         <td><?=$row["NgayGioGoi"]?></td>
         <td><?=$row["KetQuaCuocGoi"]?></td>
         <td><?=$row["NickNameNguoiGoi"]?></td>
         <td><?=tt($row["TinhTrangGui"])?></td>
    </tr>
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
		$exp->exportWithPage("excel/temp.html","danhsach_bn_can_goi_tai_kham.xls");
	}
	?>