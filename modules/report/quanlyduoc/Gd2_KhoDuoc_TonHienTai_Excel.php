<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$data= new SQLServer;
$params = array($_GET["idkho"],convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');
$store_name="{call [Gd2_KhoDuoc_TonHienTai_ThamSo_New_4](?,?,?)}";
$get_thongtinnv=$data->query( $store_name,$params);
$excute1= new SQLServerResult($get_thongtinnv);	
$thuoc= $excute1->get_as_array();
$Date = convert_date($_GET['fromdate']);
$ngay =  date('d/m/Y', strtotime($Date. ' - 1 days'));	
?>
<body>
<table width="700px" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td></td>
<td colspan=2 align="left"><strong> CÔNG TY CP Y KHOA BÁC SỸ GIA ĐÌNH</strong>
</td>
</tr>
<tr>
<td></td>
<td  colspan=2 align="left">73 Nguyễn Hữu Thọ - Đà Nẵng
</td>
</tr>
<tr>
<td></td>
<td colspan=2 align="left">ĐT : 0236.3652111   Fax 0236.3632333
</td>
</tr>
<tr>
<td></td>
<td colspan=2 align="left">-----***-----
</td>
</tr>
<tr align="center" style="text-align:center">

</tr>
</table>
<br />
<br />
</div>
<h2>BÁO CÁO XUẤT NHẬP TỒN<?=' TỪ NGÀY '.$_GET["fromdate"].' ĐẾN NGÀY '.$_GET["todate"].'---' .$_GET["kho"]?> </h2> 


<table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">

<tr>

<th width="10px">STT</th>
<th width="10px">ID_Thuoc</th>
<th width="30px">SL tồn chốt 2014</th>
<th width="30px">TT tồn chốt 2014</th>
<th width="430px">Tên thuốc</th>
<th width="30px">ĐVT</th>
<th width="30px">Quy cách</th>
<th width="430px">Nhóm</th>
<th width="70px">SL tồn đầu kỳ tới <?=$ngay?></th>
<th width="70px">TT tồn đầu kỳ tới <?=$ngay?> </th>
<th width="70px">SL nhập</th>
<th width="70px">TT nhập</th>
<th width="70px">SL xuất</th>
<th width="70px">TT xuất</th>
<th width="70px">SL tồn cuối kỳ tới <?=$_GET["todate"]?></th>
<th width="70px">TT tồn cuối kỳ tới <?=$_GET["todate"]?></th>
<th width="70px">Tồn hiện tại</th>
<th width="70px">Tiền tồn</th>
<th width="70px">Đơn giá mua</th>
<th width="70px">Cơ số tủ trực</th>
<th width="70px">Tồn hiện tại - Cơ số tủ trực</th>
<th width="70px">Số lượng xuất tiêu hao nội bộ</th>
<th width="70px">Tiền xuất tiêu hao nội bộ</th>
<th width="70px">Số lượng nhập trả</th>
<th width="70px">Tiền nhập trả</th>
<th width="70px">Sử dụng</th>


</tr>



<tbody id="tbody_1">
<?php
$i=0;

foreach($thuoc as $row){
	$i++;


	?>
	<!-- // SL_TonT12_2014  SL_N  TT_N  SL_X  TT_X  SL_X_NOITRU SL_X_NGOAITRU SL_X_TIEUHAONOIBO SL_X_DIEUCHUYEN TonHienTai  TonThucTe DonGiaMua -->

	<tr>
	<td width="10px"><?=$i?></td>
	<td width="10px"><?=$row['id_thuoc']?></td>
	<td width="10px"><?=$row['Ton2014']?></td>
	<td width="10px"><?=$row['TienTon2014']?></td>
	<td style="text-align:left"><?=$row['tengoc']?></td>
	<td style="text-align:left"><?=$row['TenDonViTinh']?></td>
	<td style="text-align:left"><?=$row['QuyCach']?></td>
	<td style="text-align:left"><font color="blue"><?=$row['TenNhomThuoc']?></font></td>
	<td style="text-align:left"><?= isset($row['SoLuongTonDauKy'])?  $row['SoLuongTonDauKy'] : 0;//$row['SL_TON_2017']?></td>
	<td style="text-align:left"><?= isset($row['ThanhTienTonDauKy'])?  $row['ThanhTienTonDauKy'] : 0;?></td>
	<td style="text-align:left"><?=$row['SL_NhapHienTai']?></td>
	<td style="text-align:left"><?=$row['TT_NhapHienTai']?></td>
	<td style="text-align:left"><?=$row['SL_XuatHienTai']?></td>
	<td style="text-align:left"><?=$row['DonGiaMua']*$row['SL_XuatHienTai']?></td>
	<td style="text-align:left" bgcolor="#D5EAFF"><?=$row['SoLuongTonDauKy']+$row['SL_NhapHienTai']-$row['SL_XuatHienTai']?></td>
	<td style="text-align:left" bgcolor="#D5EAFF"><?= $row['ThanhTienTonDauKy']+$row['TT_NhapHienTai']-($row['DonGiaMua']*$row['SL_XuatHienTai'])?></td>
	<td style="text-align:left" bgcolor="#D5EAFF"><?=$row['TonHienTai']?></td>
	<!-- <td style="text-align:left" bgcolor="#D5EAFF"><?=$row['TonHienTai']?></td> -->
	<td style="text-align:left" bgcolor="#D5EAFA"><?=$row['TienTon2014']+$row['TT_NhapHienTai']-$row['DonGiaMua']*$row['SL_XuatHienTai']?></td>
	<td style="text-align:left"><?=$row['DonGiaMua']?></td>
	<td style="text-align:left"><?=$row['CoSoTuTruc']?></td>
	<td style="text-align:left"><?=$row['TonHienTai']-$row['CoSoTuTruc']?></td>
	<td style="text-align:left"><?=$row['SL_Xuat_TIEUHAONOIBO']?></td>
	<td style="text-align:left"><?=$row['TT_Xuat_TIEUHAONOIBO']?></td>
	<td style="text-align:left"><?=$row['SL_NTraHang']?></td>
	<td style="text-align:left"><?=(int)$row['TT_NTraHang']?></td>
	<td style="text-align:left"><?=$row['SUDUNG']?></td>


	</tr>


	<?php

}

?>


</tbody>
</table>
</body>
</html>
<?php 
if($types=="excel"){
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","tonkho_".$_GET['fromdate']."_to_".$_GET['todate'].".xls");	
}
?>