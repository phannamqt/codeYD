<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tungay = implode("-", array_reverse(explode("/", $_GET['tungay'])));
	$toingay = implode("-", array_reverse(explode("/", $_GET['toingay'])));
	$data= new SQLServer;
	$store_name="{call [GD2_Lich_Online_Excel_LuotHenBacSy] (?,?)}";
	$params = array($tungay,$toingay);
	$get=$data->query( $store_name, $params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	$store_name2="{call [GD2_Lich_Online_Excel_KhongYeuCauBS] (?,?)}";
	$params2 = array($tungay,$toingay);
	$get2=$data->query( $store_name2, $params2);
	$excute2= new SQLServerResult($get2);
	$tam2= $excute2->get_as_array();
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;
	}
	#wrapper{
		width: 100%;
		margin:0 auto;
	}
</style>
</head>
<body>
<div id="wrapper">
  <div style="text-align:center;font-size:18px; font-weight:bold">Đặt hẹn BS từ ngày <?=$_GET['tungay']?> đến ngày <?= $_GET['toingay'] ?></div>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px"">
    	<tr height="30">
            <th width="80">STT</th>
            <th width="80">Họ tên</th>
            <th width="80">Nick Name</th>
            <th width="80">Tổng đặt</th>
            <th width="80">Đến khám</th>
            <th width="80">Không đến khám</th>
            <th width="80">Hủy lich</th>
            <th width="80">Tên nhóm</th>

      </tr>
         <?php
        	 $stt=1;
       		 foreach ($tam as $row) {//duyet toan bo mang tra ve
		?>
	 <tr>
         	<td align="center"><?=$stt?></td>
			<td align="left"><?=$row['HoTen']?></td>
			<td align="left"><?=$row['NickName']?></td>
			<td align="left"><?=$row['TongDat']?></td>
			<td align="left"><?=$row['DenKham']?></td>
			<td align="left"><?=$row['KoDenKham']?></td>
			<td align="left"><?=$row['HuyLich']?></td>
			<td align="left"><?=$row['TenNhom']?></td>
      </tr>
      <?php
			$stt++;
		}
		?>
    </table>
    <div style="text-align:center;font-size:18px; font-weight:bold">Đặt lịch hẹn không yêu cầu BS <?=$_GET['tungay']?> đến ngày <?= $_GET['toingay'] ?></div>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px"">
    	<tr height="30">
            <th width="80">STT</th>
            <th width="80">Tên nhóm</th>
            <th width="80">Tổng đặt</th>
            <th width="80">Đến khám</th>
            <th width="80">Không đến khám</th>
            <th width="80">Hủy lịch</th>

      </tr>
         <?php
        	 $stt=1;
       		 foreach ($tam2 as $row) {//duyet toan bo mang tra ve
		?>
	 <tr>
         	<td align="center"><?=$stt?></td>
			<td align="left"><?=$row['TenChuyenKhoa']?></td>
			<td align="left"><?=$row['TongDat']?></td>
			<td align="left"><?=$row['DenKham']?></td>
			<td align="left"><?=$row['KoDenKham']?></td>
			<td align="left"><?=$row['HuyLich']?></td>
      </tr>
      <?php
			$stt++;
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
		$t = date('d-m-Y');
		$exp->exportWithPage("excel/temp.html","excel_luothenbs_$t.xls");
	}
?>