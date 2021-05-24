<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');//tao param cho store
    $store_name="{call [GD2_DayDuLieu_HuyChiDinhThuoc](?,?)}";//tao bien khai bao store dieukienloc
		$get_thongtinnv=$data->query( $store_name,$params);//Goi
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop
		$thuoc= $excute1->get_as_array();
    ?>
    <body>
      <div style="text-align:center">HOÀN TRẢ THUỐC <?=' TỪ NGÀY '.$_GET["tungay"].' ĐẾN NGÀY '.$_GET["denngay"]?> </div>
      <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
        <tr>
          <th width="10px">STT</th>
          <th width="10px">Mã phiếu</th>
          <th width="430px">Mã bệnh nhân</th>
          <th width="30px">Họ tên bệnh nhân</th>
          <th width="30px">ID đơn thuốc</th>
          <th width="430px">Ngày trả</th>
          <th width="70px">Thu lại hỗ trợ khách hàng</th>
          <th width="200px">Lý do</th>
           <th width="70px">Số lượng</th>
          <th width="70px">Số tiền hoàn trả</th>
          <th width="70px">Số tiền thực trả KH</th>
          <th width="70px">Đã chuyển</th>
        </tr>
        <tbody id="tbody_1">
          <?php
          $i=0;
          foreach($thuoc as $row){
           $i++;
           ?>
           <tr>
            <td width="10px"><?=$i?></td>
            <td width="10px"><?=$row['MaPhieu']?></td>
            <td style="text-align:left"><?=$row['MaBenhNhan']?></td>
            <td style="text-align:left"><?=$row['HoTenBenhNhan']?></td>
            <td style="text-align:left"><?=$row['ID_DonThuoc']?></td>
            <td style="text-align:left"><?=$row['NgayGioHuy']->format("H:i ".$_SESSION["config_system"]["ngaythang"])?></td>
            <td style="text-align:left"><?=$row['SoTienHoTro']?></td>
            <td style="text-align:left"><?=$row['LyDoHuy']?></td>
            <td style="text-align:left"><?=$row['SoLuong']?></td>
            <td style="text-align:left"><?=$row['SoTienThucTra']?></td>
             <td style="text-align:left"><?=$row['SoTienThucTra']-$row['SoTienHoTro']?></td>
            <td style="text-align:left"><?=$row['DaChuyen']?></td>
          </tr>
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
    $exp->exportWithPage("excel/temp.html","hoantrathuoc_".$_GET['tungay']."_to_".$_GET['denngay'].".xls");
  }
  ?>