<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thẻ thành viên</title>
<style type="text/css">
body{
	font-size: 14px;
	font-family: arial;
	font-weight: bold;
	padding-top: 30px;
}
table{
	width: 100%;
}
.mabenhnhan{
	text-align: center;
	letter-spacing: 5px;
	font-size: 23px;

}
.hoten{
	text-transform: uppercase;
	padding-left: 8px;
	padding-top: 10px !important;
}
.nhomau{
	padding-left: 8px;
	padding-top: 10px !important;
}
</style>
</head>
<body>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TTV_GetThongTinByID_BenhNhan (?)}";
	$params = array($_GET['id_benhnhan']);
	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
?>

<table>
	<tr><td class="mabenhnhan"><?=$tam[0]['MaBenhNhan']?></td></tr>
	<tr><td class="hoten"><?=$tam[0]['HoTenBenhNhan']?></td></tr>
	<tr><td class="nhomau">NHÓM MÁU/BLOOD GROUP <?=$tam[0]['NhomMau']?></td></tr>
</table>
</body>
 <script type="application/javascript">
   $(document).ready(function() {
		print_preview();
   });
  
   </script>
</html>