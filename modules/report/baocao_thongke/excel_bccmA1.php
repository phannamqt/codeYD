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

$store_name = "{call [BCCM_MauA] (?,?,?)}"; //tao bien khai bao store
//$params = array( $fromDate, $toDate,$kieuxem);
$params = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59',$_GET['id_nhomcls']);

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
	<div style="text-align:center;font-size:18px; font-weight:bold">BÁO CÁO CHUYÊN MÔN </div>
    <?php
	
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';

	?>
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px">
    	<tr height="30">
    		<th>STT</th>
    		<th>Ngày đến</th>
    		<th>Mã BN</th>
    		<th >Họ</th>
    		<th >Tên</th>
            <th >Năm sinh</th>
            <th >Giới tính</th>
            <th >Địa chỉ</th>
    		<th>Tên dịch vụ</th>
            <th>Mã định danh dịch vụ</th>
    		<th>Triệu chứng</th>
    		<th>Chẩn đoán</th>
    		<th>BS chẩn đoán</th>
             <th>Chẩn đoán lúc</th>    		
    		<th>Chỉ định bởi</th>
			<th>Chỉ định lúc</th>
         
           
      </tr>
         <?php
		$stt=1;
        foreach ($tam as $row) {//duyet toan bo mang tra ve
        $Ngayden='';
        $Ngayden=$row["ThoiGianVaoKham"]->format('d/m/y H:i');

        $NgayGioChanDoan='';
        $NgayGioChanDoan=$row["NgayGioChanDoan"]->format('d/m/y H:i');
		$ChiDinhLuc='';
        $ChiDinhLuc=$row["ChiDinhLuc"]->format('d/m/y H:i');
        


		?>
         <tr>
         <!--    TenLoaiKham TrieuChung  ChanDoan    BacSiChanDoan   ChiDinhBoi  NgayGioChanDoan HoLotBenhNhan   TenBenhNhan NamSinh GioiTinh    DiaChi  TenDanToc   ThoiGianVaoKham ID_Kham ID_LuotKham -->

         	<td align="center"><?=$stt?></td>
         	<td align="left"><?= $Ngayden?></td>
         	<td ><?=$row['MaBenhNhan']?></td>
         	<td align="left"><?= $row['HoLotBenhNhan']?></td>
         	<td align="left"><?= $row['TenBenhNhan']?></td>
         	<td align="left"><?= $row['NamSinh']?></td>
         	<td align="right"><?= $row['GioiTinh']?></td>
         	<td align="right"><?= $row['DiaChi']?></td>
         	<td align="right"><?= $row['TenLoaiKham']?></td>
            <td align="right"><?= $row['ID_Kham']?></td>
         	<td align="right" ><?= $row['TrieuChung']?></td>
         	<td align="right" ><?= $row['ChanDoan']?></td>
         	<td align="right"><?= $row['BacSiChanDoan']?></td>
            <td align="right"><?=  $NgayGioChanDoan?></td>
            <td align="right"><?= $row['ChiDinhBoi']?></td>
			 <td align="right"><?= $ChiDinhLuc?></td>

        
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
		$exp->exportWithPage("excel/temp.xls","baocaochuyenmon".date('Y/m/d-H:i:s').".xls");
	}
	?>