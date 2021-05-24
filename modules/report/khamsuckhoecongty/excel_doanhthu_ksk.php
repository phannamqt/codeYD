<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
body{
 overflow: auto;
 font-size: 14px !important;
 font-family: Arial, Helvetica, sans-serif;
 text-align: center;
}

</style>
</head>

<?php

$data= new SQLServer;
$store_name="{call [GD2_ThongKe_KhamSucKhoeCongTyByThangAndNam] (?,?)}";
// $params = array($tu_ngay,$den_ngay,0);
$params = array($_GET['thang'],$_GET['nam']);
$get_lich=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_lich);
// echo'<pre>';
$tam= $excute->get_as_array();
// print_r($tam);
// exit();
?>
<body><div style="text-align:center;font-size:18px; font-weight:bold">Doanh thu KSK công ty <?=$_GET['thang']?>/<?=$_GET['nam']?></div>

    <table border="1" cellpadding="0" cellspacing="0" align="center" style="width:1500px;margin-top:5px">
      <tr height="30">
      <th>ID_BenhNhan</th>
      <th>Họ Tên Bệnh Nhân</th>
      <th>Tên Công Ty</th>
      <th>Số Tiền Khám</th>
      </tr>
   
          <?php
              $stt=1;
                foreach ($tam as $row) {
              echo('
                <tr id='. $stt.'>
                <td align="left">'.$row["MaBenhNhan"].'</td>
                <td align="left">'.$row["HoLotBenhNhan"].' '.$row["TenBenhNhan"].'</td>
                 <td align="left">'.$row["TenCty"].'</td>
                 <td align="left">'.$row["TongTienPhaiTra"].'</td>
                 </tr>');
              $stt++;
}   
          ?>

    </table>


        Xuất dữ liệu lúc<i> <?php echo date('H:m d/m/Y');  ?></i>
</body>



</html>
<?php
    if($types=="excel"){
        file_put_contents('excel/temp.html', ob_get_contents());
       $exp=new ExportToExcel();
       $name = 'excel_doanhthu_ksk_'.$_GET['thang'].'-'.$_GET['nam'].'.xls';
       $exp->exportWithPage("excel/temp.xls","$name");
    }
    ?>