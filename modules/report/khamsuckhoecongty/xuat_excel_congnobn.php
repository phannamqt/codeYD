<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$tu_ngay='';
	$den_ngay='';
	$data= new SQLServer;//tao lop ket noi SQL

	
/*	$tungay= strtotime($_GET["tungay"]);
	$denngay= strtotime($_GET["denngay"]);*/
$format = 'd/m/y';
$tungay = DateTime::createFromFormat($format, $_GET["tungay"]);
$denngay = DateTime::createFromFormat($format, $_GET["denngay"]);

	if($_GET["tab_click"]==1){
		$store_name="{call GD2_dsbill (?)}";
		$params = array($_GET["id_benhnhan"]);
	}else{
		$store_name="{call GD2_chitietcongno (?)}";
		$params = array($_GET["id_benhnhan"]);
	}
	$get=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
?>
<style type="text/css">
	body{
		width: 100%;
		margin-top: 5px;
		overflow:scroll;

		}

	#wrapper{
		width:2000px;
		margin:0 auto;
		}

</style>
</head>
<body>

  <div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO CÔNG NỢ</div>
    <?php
		
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["tungay"].' đến ngày '.$_GET["denngay"].'</div>';
	
	?>
  <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:2000px;margin-top:5px">
    	<tr height="30">    
            <th width="200">Ngày</th>
            <th width="100">Mã phiếu</th>
            <th width="150">Ghi chú</th>
            <th width="150">Nợ cũ</th>
            <th width="150">Tổng tiền phải trả</th>
            <td width="150">Giảm giá</td>
            <th width="150">Tổng BHYT</th>
            <th width="150">Hỗ trợ</th>
            <th width="150">Tổng BHCC</th>
            <th width="150">Số tiền thanh toán</th>
            <th width="150">Nợ cuối</th>
      </tr>
         <?php

        foreach ($tam as $row) {
			if($row['NgayGio']>=$tungay && $row['NgayGio']<=$denngay){
		?>
    <tr height="30">    	
         	<td width="29" align="center"><?=$row['NgayGio']->format('d/m/Y H:i')?></td>
            <td width="100" align="left"><?=$row['MaPhieu']?></td>
            <td width="150" align="right"><?=$row['GhiChu']?></td>
            <td width="150" align="right"><?=$row['NoCu']?></td>
            <td width="150" align="right"><?=$row['TongTienPhaiTra']?></td>
            <td width="150" align="right"><?=$row['GiamGia']?></td>
            <td width="150" align="right"><?=$row['TongTienBHYTChiTra']?></td>
            <td width="150" align="right"><?=$row['HoTroTuBenhVien']?></td>
            <td width="150" align="right"><?=$row['TongTienBHCCTra']?></td>
            <td width="150" align="right"><?=$row['SoTienThanhToan']?></td>
            <td width="150" align="right"><?=$row['NoCuoi']?></td>
      </tr>
      <?php			
			}
		}		
		?>
    </table>

</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","baocaocongno_nhacungcap.xls");
	}
	?>