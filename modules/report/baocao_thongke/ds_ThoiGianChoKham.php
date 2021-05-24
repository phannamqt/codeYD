<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
<body>
<?php
$data= new SQLServer;
$store_name="{call GD2_thoigianchodoi_khamls(?,?)}";
$params = array(convert_date($_GET['from']),convert_date($_GET['to']).' 23:59:59');
$get=$data->query( $store_name, $params);
$excute= new SQLServerResult($get);
$tam= $excute->get_as_array();
$i=0;
?>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
    <td><div align="center"><strong>Tháng</strong></div></td>
    <td><div align="center"><strong>Ngày</strong></div></td>
    <td><div align="center"><strong>Tổng ca khám</strong></div></td>
    <td><div align="center"><strong>TB phút khám</strong></div></td>
    <td><div align="center"><strong>Tổng ca XN</strong></div></td>
    <td><div align="center"><strong>TB phút XN</strong></div></td>
    <td><div align="center"><strong>Tổng ca CĐHA</strong></div></td>
    <td><div align="center"><strong>TB phút CĐHA</strong></div></td>
    <td><div align="center"><strong>Tổng ca TDCN</strong></div></td>
    <td><div align="center"><strong>TB phút TDCN</strong></div></td>
    <td><div align="center"><strong>Tổng ca Khác</strong></div></td>
    <td><div align="center"><strong>TB phút Khác</strong></div></td>
    <td><div align="center"><strong>Tổng số ca</strong></div></td>
    <td><div align="center"><strong>TB tổng ca</strong></div></td>
    <td><div align="center"><strong>TB phút chờ khám</strong></div></td>
</tr>

<?php

foreach ($tam as $row) {
$i++;
  ?>  
   <tr>   
    <td><?=$row["thang"]?></td>
    <td><?=$row["ngay"]?></td>
    <td><?=$row["kham"]?></td>
    <td><?=$row["phut_kham"]?></td>
    <td><?=$row["xn"]?></td>
    <td><?=$row["phut_xn"]?></td>
    <td><?=$row["cdha"]?></td>
    <td><?=$row["phut_cdha"]?></td>
    <td><?=$row["tdcn"]?></td>
    <td><?=$row["phut_tdcn"]?></td>
    <td><?=$row["khac"]?></td>
    <td><?=$row["phut_khac"]?></td>
    <td><?=$row["tong"]?></td>
    <td><?=$row["phut_tong"]?></td>
    <td><?=$row["phut_chokham"]?></td>
  </tr>
<?php

}
?>
</table>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","ThoiGianChoKham.xls");
	
	}

?>