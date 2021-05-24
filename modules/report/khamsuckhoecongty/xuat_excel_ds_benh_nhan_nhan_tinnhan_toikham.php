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
	<div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH BỆNH NHÂN ĐÃ NHẬN SMS TỚI KHÁM
    </div>
    <div style="text-align:center;font-size:14px;">(Từ ngày <?=$_GET["from_day"]?> đến ngày <?=$_GET["to_day"]?>)</div>
    <br />
    <?php
	$data= new SQLServer;
	$ngaybatdau=convert_date($_GET["from_day"]).' 00:00:00';
	$ngayketthuc=convert_date($_GET["to_day"]).' 23:59:59';
	$store_name="{call Gd2_TinNhanTaiKham_ExcelToiKham(?,?)}";
	$params = array($ngaybatdau,$ngayketthuc);
	//print_r($params);
	$get=$data->query( $store_name,$params);
	$excute= new SQLServerResult($get);
	$tam= $excute->get_as_array();
	
	?>
    <table  border="1" cellpadding="0" cellspacing="0" align="center" style="width:800px;margin-top:5px">
 	<tr style=" font-weight:bold; font-size:14px;">
    	<td>STT</td>
    	<td>Mã BN</td>
   		<td>Họ tên</td>
        <td>Tuổi</td>
        <td>Giới tính</td>
        <td>Điện thoại</td>
        <td>Nội dung sms</td>
        <td>Ngày hẹn tái khám</td>
        <td>Tình trạng gửi</td>
        <td>Tình trạng tới khám</td>
    </tr>
    <?php
    $i = 1;
	foreach($tam as $row){
		if($row["NgayTaiKham"]!=''){
			$row["NgayTaiKham"]=$row["NgayTaiKham"]->format("H:i ".$_SESSION["config_system"]["ngaythang"]);
		}
	?>
    <tr>
    	 <td><?=$i?></td>
    	 <td><?=$row["MaBenhNhan"]?></td>
         <td><?=$row["HoTen"]?></td> 
         <td><?=$row["Tuoi"]?></td>
         <td><?=$row["GioiTinh"]?></td> 
         <td>&nbsp;<?=$row["DienThoai"]?></td>
         <td><?=$row["NoiDungSMS"]?></td> 
         <td><?=$row["NgayTaiKham"]?></td>
         <td><?=($row["TinhTrangGui"])==0?'Thành công':'Thất bại'?></td>
         <td><?=($row["CheckToiKham"])==0?'Không tới khám':'Có tới khám'?></td>
    </tr>
    <?php
    $i++;
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
		$exp->exportWithPage("excel/temp.html","danhsach_bn_can_toi_kham_after_sendsms.xls");
	}
	?>