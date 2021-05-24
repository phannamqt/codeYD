<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>
<?php
    $tenbuoi='';
    $tenloai='';
    if(isset($_GET['buoi']) && isset($_GET['loai'])){
      $_GET['buoi']=$_GET['buoi'];
      $_GET['loai']=$_GET['loai'];
      if($_GET['buoi']==1){
        $tenbuoi='Sáng';
      }elseif($_GET['buoi']==2){
        $tenbuoi='Trưa';
      }elseif($_GET['buoi']==3){
        $tenbuoi='Chiều';
      }elseif($_GET['buoi']==999){
        $tenbuoi='Tất cả';
      }

      if($_GET['loai']==1){
        $tenloai='Viện phí';
      }elseif($_GET['loai']==2){
        $tenloai='BHCC';
      }elseif($_GET['loai']==999){
        $tenloai='Tất cả';
      }
    }else{
      $_GET['buoi']=999;
      $_GET['loai']=999;
      $tenloai='Tất cả';
      $tenbuoi='Tất cả';
    }
        $data= new SQLServer;
        $params = array(convert_date($_GET["from_day"]),convert_date($_GET["to_day"]).' 23:59:59',$_GET['buoi'],$_GET['loai']);
        $store_name="{call GD2_Tonghopsuatan_benhnhan(?,?,?,?)}";
        $get_thongtinbenhnhan=$data->query( $store_name,$params);
        $excute= new SQLServerResult($get_thongtinbenhnhan);
        $tam= $excute->get_as_array();  
       
    
    ?>
    <body>
      <div style="font-size:30px;text-align: center">TỔNG HỢP SUẤT ĂN</div>
  <div style="font-size:16px;text-align: center">
  (Từ ngày <?= $_GET["from_day"]?> đến <?= $_GET["from_day"]?>)<br>
  (Loại: <?=$tenloai?> - Buổi: <?=$tenbuoi?>)
  </div>
  <br>
  <br>
      <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
        <tr>
          <th style=" font-weight:bold;width:20px">STT</th>     
            <th style=" font-weight:bold;width:40px">Mã bn</th>
      <th style=" font-weight:bold ">Họ</th>
      <th style=" font-weight:bold ">Tên</th>
      <th style=" font-weight:bold;width:40px">Tuổi</th>
      <th style=" font-weight:bold;width:40px">Số phòng</th>
      <th style=" font-weight:bold;width:40px">Id Phiếu</th>
      <th style=" font-weight:bold;width:50px">Loại</th>
      <th style=" font-weight:bold;width:40px">Buổi</th>
      <th style=" font-weight:bold ">Tên dịch vụ(suất ăn)</th>
      <th style=" font-weight:bold;width:40px">Giá</th>
      <th style=" font-weight:bold;width:40px">Số lượng</th>
      <th style=" font-weight:bold;width:40px">Thành tiền</th>
      <th style=" font-weight:bold ">Ghi chú</th>     
      <th style=" font-weight:bold;width:100px">Người nhận ký</th>  
        </tr>
        <tbody id="tbody_1">

          <?php
          
        $i=0;
        $sang=0;
        $trua=0;
        $chieu=0;
        $toi=0;
        foreach ($tam as $row) {
          echo '<tr >';
          $i++;
          echo '<td >'.$i.'</td>';
          echo '<td >'.$row["MaBenhNhan"].'</td>';
          echo '<td >'.$row["HoLotBenhNhan"].'</td>';
          echo '<td >'.$row["TenBenhNhan"].'</td>';
          echo '<td >'.$row["tuoi"].'</td>';
          echo '<td >'.$row["TenBuong_Giuong"].'</td>';
          echo '<td >'.$row["Id_Phieu"].'</td>';
          if($row["Loai"]==1){
            echo '<td >Viện phí</td>';
          }
          else{
            echo '<td >BHCC</td>';  
          }         
          echo '<td >'.$row["Buoi"].'</td>';
          echo '<td >'.$row["Ten_vt"].'</td>';          
          echo '<td  align="right">'.(int)$row["Gia"].'</td>';
          echo '<td  align="right">'.$row["So_luong"].'</td>';
          echo '<td  align="right">'.(int)$row["Thanhtien"].'</td>';
          echo '<td >'.$row["Diengiai"].'</td>';  
          echo '<td ></td>';          
          echo '</tr>';
        }
        echo '<tr >';
      ?>

        ?>

      </tbody>
    </table>
  </body>
  </html>
  <?php 
  if($types=="excel"){
    file_put_contents('excel/temp.html', ob_get_contents());
    $exp=new ExportToExcel();
    $exp->exportWithPage("excel/temp.html","suat_an_benh_nhan".convert_date($_GET["from_day"])."_to_".convert_date($_GET["to_day"]).".xls");
  }
  ?>