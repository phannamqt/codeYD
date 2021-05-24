<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php





$data= new SQLServer;//tao lop ket noi SQL 
if($_GET['idkhoa']!=-1){
  $store_name3="{call [GD2_BaoCaoThongKe_KHTH_LuotKhamNgoaiTru](?,?,?)}";
  $params3 = array($_GET['idkhoa'],convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');
}else{
  $store_name3="{call [GD2_BaoCaoThongKe_KHTH_LuotKhamNgoaiTru_noneidkhoa](?,?)}";
  $params3 = array(convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');
}
$get_lich3=$data->query( $store_name3, $params3);
$excute3= new SQLServerResult($get_lich3);
$tam3= $excute3->get_as_array();


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
<div id="wrapper" style="text-align:center;">
	<div style="text-align:center;font-size:18px; font-weight:bold">DANH SÁCH LƯỢT KHÁM NGOẠI TRÚ</div>
    <?php
	
		echo '<div style="text-align:center;font-size:15px; font-weight:bold">Từ ngày '.$_GET["fromdate"].' đến ngày '.$_GET["todate"].'</div>';
	
	?>
    
    <table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top:5px">

   	  <tr bgcolor="orange" height="30">
         <th>STT</th>
            <th>Mã BN</th>
            <th>Họ tên BN</th>
            <th>Tuổi</th>
            <th>Giới</th>
             <th>Tên loại khám</th>
              <th>Bs Khám</th>
              <th>Chẩn đoán</th>
      </tr>
         <?php
		$stt=1;
        foreach ($tam3 as $row) {

		?>
         <tr>
         	<td align="center"><?=$stt?></td>
            <td align="left"><?=$row['MaBenhNhan']?></td>
            <td><?=$row['tenbn']?></td>
            <td ><?=$row['tuoi']?></td>
            <td ><?=$row['gioitinh']?></td>
             <td><?=$row['TenLoaiKham']?></td>
             <td><?=$row['bacsi']?></td>
             <td><?=$row['ChanDoan']?></td>
          </tr>
        <?php
			$stt++;
			
		}
		?>
        <?php

		?>
     
      
      <tfoot>
<!--      /* <tr bgcolor="#CCFF66" height="30">
            <th>STT</th>
            <th>Nhóm</th>
            <th>Số ca</th>
            <th><?=$SUMDT?></th>
            <th>TB</th>
          
      </tr>*/ -->
  </tfoot>
    </table>
</div>
</body>
</html>
<?php
	if($types=="excel"){
		file_put_contents('excel/temp.html', ob_get_contents());
		$exp=new ExportToExcel();
		$exp->exportWithPage("excel/temp.html","GD2_KeToanBaoCaoKHTH_lkngoaitru.xls");
	}
	?>