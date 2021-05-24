<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$data= new SQLServer;
	$store_name="{call [GD2_DM_ThuocGet] ()}";
	$params = array();
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
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
<div id="wrapper">  
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px"">
    	<tr height="30">
            <th width="29">ID thuốc</th>
            <th width="250">Tên biệt dược</th>
            <th width="150">Tên gốc</th>
            <th width="180">HamLuong</th>
            <th width="100">ID_NhomThuoc</th>
            <th width="100">DonGia</th>
            <th width="100">TonKhoToiThieu</th>
            <th width="100">LaThuoc</th>
            <th width="100">Active</th>
            <th width="100">DoUuTien</th>
            <th width="100">ThuocBHYT</th>
            <th width="100">QuyCach</th>
            <th width="100">HeSoDieuChinhGiaBan</th>
            <th width="100">HideBHYT_traituyen</th>
            <th width="100">HoatChat_BHYT</th>
			<th width="100">MaDuongDung_BHYT</th>
			<th width="100">DuongDung_BHYT</th>
			<th width="100">DongGoi_BHYT</th>
      </tr>   
    <tr>
<?php        
    foreach ($tam as $row) {
?>
        <td align="left"><?=$row['ID_Thuoc']?></td>
        <td align="left"><?=$row['TenBietDuoc']?></td>
        <td align="left"><?=$row['TenGoc']?></td>
        <td align="right"><?=$row['HamLuong']?></td>
        <td align="right"><?=$row['ID_NhomThuoc']?></td>
        <td align="right"><?=$row['DonGia']?></td>
        <td align="right"><?=$row['TonKhoToiThieu']?></td>
        <td align="right"><?=$row['LaThuoc']?></td>
        <td align="right"><?=$row['Active']?></td>
        <td align="right"><?=$row['DoUuTien']?></td>
        <td align="right"><?=$row['ThuocBHYT']?></td>
        <td align="right"><?=$row['QuyCach']?></td>
        <td align="right"><?=$row['HeSoDieuChinhGiaBan']?></td>
        <td align="right"><?=$row['HideBHYT_traituyen']?></td>
        <td align="right"><?=$row['HoatChat_BHYT']?></td>
        <td align="right"><?=$row['MaDuongDung_BHYT']?></td>
        <td align="right"><?=$row['DuongDung_BHYT']?></td>
        <td align="right"><?=$row['DongGoi_BHYT']?></td>
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
		$exp->exportWithPage("excel/temp.html","excel_dmThuoc.xls");
	}
?>