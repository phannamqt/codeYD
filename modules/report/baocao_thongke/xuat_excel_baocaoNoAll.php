<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php


$fromDate = $_GET['fromdate'] . ' 0:00:00';
$toDate = $_GET['todate'];


$data = new SQLServer; //tao lop ket noi SQL

$store_name = "{call [GD2_ThuChi_No_KeToan_ALL] (?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params = array(convert_date($_GET['todate']).' 23:59:59');

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
	<div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO CÔNG NỢ TẤT CẢ </div>
    <?php
	//if($_GET['theonhacungcap']=='false'){
		/*echo '<div style="text-align:center;font-size:15px; font-weight:bold">'.$_GET["ten_kho"].' </div>';*/
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Tính đến ngày '.$_GET["todate"].'</div>';
/*STT_NoMoi   STT_NoDauKy MaPhieu NoCuoi  NgayGio MaBenhNhan  HoLotBenhNhan   TenBenhNhan
1   1   PTU_007313  -260000 2013-04-12 08:46:50.023 130182  Trần Phương Loan*/
	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:100%;margin-top:5px">
    	<tr height="30">
    		<th>STT</th>
    		<th>Thanh toán lần cuối lúc</th>
    		<th>Mã BN</th>
    		<th >Họ</th>
    		<th >Tên</th>
    		<th>Nợ cuối</th>
            <th>Mã phiếu</th>
  
         
           
      </tr>
         <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
        $Ngay='';
      
        $Ngay=$row["NgayGio"]->format('H:i d/m/y');


		?>
         <tr>
         	<td width="10%" align="left"><?=$stt?></td>
         	<td width="10%" align="left"><?= $Ngay?></td>
         	<td width="10%" ><?=$row['MaBenhNhan']?></td>
         	<td width="10%" align="left"><?= $row['HoLotBenhNhan']?></td>
         	<td width="10%" align="left"><?= $row['TenBenhNhan']?></td>
         	<td width="10%" bgcolor="orange" align="right"><?= $row['NoCuoi']?></td>
            <td width="10%" align="left"><?= $row['MaPhieu']?></td>


          

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
		$exp->exportWithPage("excel/temp.xls","baocaoThuChi_CongNo_ALl.xls");
	}
	?>