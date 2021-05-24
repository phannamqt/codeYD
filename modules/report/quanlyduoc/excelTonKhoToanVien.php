<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$data= new SQLServer;
// start get mảng kho
$params_kho = array();
$store_name_kho="{call [GD2_Kho_GetAll]()}";
$get_thongtinnv_kho=$data->query( $store_name_kho,$params_kho);
$excute_kho= new SQLServerResult($get_thongtinnv_kho);	
$kho= $excute_kho->get_as_array();
// end get mảng kho
$params = array();
$store_name="{call [GD2_TonKhoToanVien]()}";
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
<td colspan=2 align="left">-----***-----
</td>
</tr>
<tr align="center" style="text-align:center">

</tr>
</table>
<br />
<br />
</div>
<h2>Tồn kho toàn viện hiện tại đến ngày <?=date('d-m-Y');?></h2> 

<table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">

<tr>
	<th rowspan="2">ID_Thuoc</th>
	<th rowspan="2">Tên thuốc</th>
	<th rowspan="2">Tên đơn vị tính</th>
	<th rowspan="2">Quy cách</th>
	<th rowspan="2">Tên nhóm thuốc</th>
<th width="100px" colspan ="10"><strong>Danh sách các kho</strong></th>
<th rowspan="2">Tổng tồn</th>
</tr>
<tr>
<?php
$i = 0;
foreach ($kho as $key => $value) {
	$id_kho = $value['ID_Kho'];
	// print_r($thuoc[0][$id_kho]); //$thuoc[0][$id_kho];
	foreach ($thuoc[0] as $key1 => $value1) {
	if($id_kho == $key1){
	echo '<th>'.$value['TenKho'].'</th>';
	}
	}
	$i++;
}
?>
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
	<td width="10px"><?=$row['QuyCach']?></td>
	<td width="10px"><?=$row['TenNhomThuoc']?></td>
	<?php
	$tongton = 0;
	foreach ($kho as $key => $value) {
		$id_kho = $value['ID_Kho'];
		echo '<td width="50px">'. $row[$id_kho].' </td>';
		$tongton += $row[$id_kho];
	}
	?>
	<td width="10px"><?=$tongton?></td>
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
	$exp->exportWithPage("excel/temp.html","tonkhotoanvien_".date('d-m-Y').".xls");	
}
?>