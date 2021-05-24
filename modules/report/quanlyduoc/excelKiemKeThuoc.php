<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$data= new SQLServer;
$params = array($_GET['denngay'],$_GET['ID_Kho']);
$store_name="{call [GD2_TonKhoToanVien_KiemKe](?,?)}";
$get_thongtinnv=$data->query( $store_name,$params);
$excute1= new SQLServerResult($get_thongtinnv);	
$thuoc= $excute1->get_as_array();	
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
<td colspan=3 align="left">-----***-----
</td>
</tr>
<tr align="center" style="text-align:center">

</tr>
</table>
<br />
<br />
</div>
<h2>Tồn kho <?= $_GET['TenKho']?></h2> 

<table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">

<tr>
	<th>ID_Thuoc</th>
	<th>Tên thuốc</th>
	<th>Tên đơn vị tính</th>
	<th>Tồn đầu 4/2014</th>	
	<th>Nhap2014</th>
	<th>Xuat2014</th>
	<th>Tồn</th>	
	<th>Tồn 2014</th>
	<th>Bù kho</th>
	<th>Xuất</th>
	<th>Nhập</th>	
	<th>Kiểm kê đợt 1</th>
	<th>Xuất mới</th>
	<th>Nhập mới</th>
	<th>Kiểm kê đợt 2</th>

</tr>
<tbody id="tbody_1">
<?php
$i=0;
foreach($thuoc as $row){
	$i++;
	?>
	<tr>
	<td width="10px"><?=$row['ID_Thuoc']?></td>
	<td width="10px"><?=$row['TenGoc']?></td>
	<td width="10px"><?=$row['TenDonViTinh']?></td>
	<td width="10px"><?=$row['TonDau4_2014']?></td>
	<td width="10px"><?=$row['Nhap2014']?></td>
	<td width="10px"><?=$row['Xuat2014']?></td>
	<td width="10px"><?=$row['Tondau2']?></td>
	<td width="10px"><?=$row['Ton2014']?></td>
	<td width="10px"><?=$row['BuKho']?></td>
	<td width="10px"><?=$row['Xuat']?></td>	
	<td width="10px"><?=$row['Nhap']?></td>	
	<td width="10px"><?=$row['KiemKeDot1']?></td>	
	<td width="10px"><?=$row['XuatMoi']?></td>	
	<td width="10px"><?=$row['NhapMoi']?></td>	
	<td width="10px"><?=$row['KiemKeDot2']?></td>	
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
	$exp->exportWithPage("excel/temp.html","tonkho_.xls");	
}
?>