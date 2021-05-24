<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

$data= new SQLServer;//tao lop ket noi SQL 
$store_name3="{call [GD2_LSPSelectChiTietByIDNhanVien_Excel](?,?,?)}";

$params3 = array($_GET['id_nhanvien'],$_GET['thang'],$_GET['nam']);
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam3= $excute3->get_as_array();
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;

		}

	#wrapper{
		width:1000px;
		margin:0 auto;
		}

</style>

</head>
<body>
<div id="wrapper" style="text-align:center;">
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top:5px">
		<tr bgcolor="orange" height="30">
		<th colspan="5"></th>
		<th colspan="5">TỔNG CỘNG</th>
		<th colspan="2">CHỈ ĐỊNH</th>
		<th colspan="4">GÂY MÊ HỒI SỨC</th>
		<th colspan="4">THỰC HIỆN</th>
		</tr>
    	<tr bgcolor="orange" height="30">
            <th>STT</th>
            <th>Tên hạng mục</th>
			<th>Tên nhóm</th>
            <th>Ngày T.toán</th>
            <th>ID BN</th>
			
			<th>Doanh thu (trừ giá gốc)</th>
			<th>Miễn giảm</th>
			<th>Lý do giảm</th>
			<th>Chi phí</th>
			<th>Thực nhận</th>
			
			<th>Nội viên</th>
			<th>Ngoại viên</th>
			
			<th>Chính</th>
			<th>Phụ 1</th>
			<th>Phụ 2</th>
			<th>Phụ 3</th>
			
			<th>Chính</th>
			<th>Phụ 1</th>
			<th>Phụ 2</th>
			<th>Phụ 3</th>
      </tr>
         <?php
		$stt=1;
        foreach ($tam3 as $row) {
		 if($row['TenNhom']=='Khám LS 2.0' || $row['TenNhom']=='Khám HC'){
			$row['ChiDinh']=0;
		}else{
			$row['ChiDinh']=$row['ChiDinh']; 
		}
			$row["NgayThanhToan"]=$row["NgayThanhToan"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		?>
         <tr>
         	<td align="center"><?=$stt?></td>
            <td align="left"><?=$row['TenLoaiKham']?></td>
			<td align="left"><?=$row['TenNhom']?></td>
            <td><?=$row['NgayThanhToan']?></td>
            <td ><?=$row['MaBenhNhan']?></td>
			
			<td ><?=(int)$row['TienThuBn']?></td>
			<td ><?=(int)$row['TienMienGiam']?></td>
			<td ><?=(int)$row['LyDoGiamGia']?></td>
			<td ><?=(int)$row['TienChiPhiVaThue']?></td>
			<td ><?=(int)$row['TongTienThuNhap']?></td>

			<td ><?=(int)$row['TienChiDinh']?></td>
			<td ><?=(int)$row['TienChiDinhNgoaiVien']?></td>

			<td ><?=(int)$row['TienVoCamChinh']?></td>
			<td ><?=(int)$row['TienVoCamPhuA']?></td>
			<td ><?=(int)$row['TienVoCamPhuB']?></td>
			<td ><?=(int)$row['TienVoCamPhuC']?></td>

			<td ><?=(int)$row['TienThucHienChinh']?></td>
			<td ><?=(int)$row['TienThucHienPhuA']?></td>
			<td ><?=(int)$row['TienThucHienPhuB']?></td>
			<td ><?=(int)$row['TienThucHienPhuC']?></td>
          </tr>
        <?php
			$stt++;
		}
		?>
        <?php

		?>
    
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","Xuat_LSP_".$_GET['thang']."_".$_GET['nam'].".xls");
	}
	?>