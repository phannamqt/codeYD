<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php


$fromDate = $_GET['fromdate'] . ' 0:00:00';
$toDate = $_GET['todate'] . ' 23:59:59';
$kieuxem = $_GET['kieuxem'];

$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call GD2_ThuChi_No_KeToan (?,?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');

$get_lich = $data->query($store_name, $params); //Goi store
$excute = new SQLServerResult($get_lich); //Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam = $excute->get_as_array(); //Tra ve mang toan bo data lay duoc
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
	<div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO THU CHI CÔNG NỢ BỆNH NHÂN KẾ TOÁN(ĐƠN VỊ TÍNH 1000đ) </div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		/*echo '<div style="text-align:center;font-size:15px; font-weight:bold">'.$_GET["ten_kho"].' </div>';*/
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	//}
	//else{
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Kho '.$_GET["ten_kho"].'</div>';
	//	echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["from_day"].' đến ngày '.$_GET["to_day"].'</div>';
	//	}
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px">
    	<tr height="30">
    		<th>STT</th>
    		<th>Ngày</th>
    		<th>Mã BN</th>
    		<th bgcolor="orange">Họ</th>
    		<th bgcolor="yellow">Tên</th>
    		<th>Giảm giá</th>
    		<th>Hủy CĐịnh</th>
    		<th>Hỗ trợ trái tuyến</th>
    		<th>Tổng tiền dịch vụ</th>
    		<th>Nợ cũ(đầu kỳ)</th>
    		<th>Phát sinh phải trả sau cùng</th>
    		<th>Đã trả</th>
             <th>BHYT nợ</th>
            <th>BHCC nợ</th>
    		<th>Nợ mới BN</th>
    		<th>Trả nợ cũ</th>
    		<th>Dư nợ</th>
    		<th>HTrả tạm ứng</th>
            <th>Thu hồi BHCC</th>

         
           
      </tr>
         <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
        $Ngay='';
      
        $Ngay=$row["NgayGio"]->format('d/m/y');


		?>
         <tr>
         	<td align="center"><?=$stt?></td>
         	<td align="left"><?= $Ngay?></td>
         	<td bgcolor="orange"><?=$row['MaBenhNhan']?></td>
         	<td align="left"><?= $row['HoLotBenhNhan']?></td>
         	<td align="left"><?= $row['TenBenhNhan']?></td>
         	<td align="left"><?= $row['GiamGia']?></td>
         	<td align="right"><?= $row['HuyChiDinh']?></td>
         	<td align="right"><?= $row['HoTroTuBenhVien']?></td>
         	
         	<td align="right"><?= $row['TongTienPhaiTra']?></td>
         	<td align="right" bgcolor="pink"><?= $row['NoDauKy']?></td>
         	<td align="right" bgcolor="yellow"><?= $row['TongPhaiTraSauCung']?></td>
         	<td align="right"><?= $row['DaTra']?></td>
            <td align="right"><?= $row['BH_YTTra']?></td>
            <td align="right"><?= $row['BHCC_TTra']?></td>
         	<td align="right"><?= $row['NoMoi']?></td>
         	<td align="right"><?= $row['TraNoCu']?></td>
         	<td align="right"><?= $row['DuNo']?></td>
         	<td align="right"><?= $row['TraTamUng']?></td>
           <td align="right"><?= $row['ThuHoiBHCC']?></td>
         

          

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
		$exp->exportWithPage("excel/temp.xls","baocaoThuChi_CongNo_KeToan.xls");
	}
	?>