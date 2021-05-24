<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
td{
	padding-left: 4px;
}
@media print
{
body{
    overflow: auto;
	font-size:14px !important;
	font-family:Arial, Helvetica, sans-serif;
}
.page{
	padding-top:10px;
}
#tongthe #page_1 .n_top table {
	font-weight: bold;
}
.tieude {
	font-size: 16px;
}
 thead
     {
                border-bottom:2px solid #000;
                display: table-header-group!important;
               border-left:2px solid #000;
    }
  table { page-break-inside:auto  ;page-break-after:auto}
  tr    { page-break-inside:avoid; page-break-after:auto }
</style>
</head>
<?php
$data= new SQLServer;//tao lop ket noi SQL
$store_name2="{call GD2_DoanhThuKCB(?,?)}";
$params2 = array(convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59');
$get_thongtin2=$data->query( $store_name2,$params2);
$excute2= new SQLServerResult($get_thongtin2);
$thuoc= $excute2->get_as_array();
?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
       <div class="n_top">
         <table width="300px" border="0"  cellpadding="0" cellspacing="0">
              <tr>
              <td align="center"><strong> <?=$_SESSION["com"]["TenBenhVien"]?></strong>
              </td>
              </tr>
               <tr>
              <td align="center"> <?php echo $_SESSION["com"]["DiaChi"]?>
              </td>
              </tr>
               <tr>
              <td align="center"> <?php echo $_SESSION["com"]["SoDT"]?>
              </td>
              </tr>
              <tr>
              <td align="center">-----***-----
              </td>
              </tr>
            </table><br />

       
            <br />
         <br />
       </div>

        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
        <thead>
        <tr>
                    <td colspan="8" style="text-align:center; font-weight:bold; font-size:20px">
                       BẢNG KÊ CHỨNG TỪ THU DỊCH VỤ<br />
                        Từ ngày <?=$_GET['tungay']?> đến ngày <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>
            <th width="30px">NGÀY(1)</th>
            <th width="400px">SỐ CT(2)</th>
            <th width="70px">SỐ PHIẾU(3)</th>
            <th width="70px">DỊCH VỤ KHÁM(4)</th>
            <th width="90px">MÃ BỆNH NHÂN(5)</th>
			<th width="90px">TÊN BỆNH NHÂN(6)</th>
             <th width="90px">SỐ TIỀN(7)</th>
            <th width="90px">GHI CHÚ(8)</th> 
             <th width="90px">BHYT(9)</th> 
           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
		$i=0;
		$sum=0; 
		foreach($thuoc as $row){
			$i++;
			$sum=$sum+$row['GiaBaoChoBN']; 
                echo ('<tr>
					<td style="text-align:left">'. $row['NgayGio']->format('d/m/Y').'</td>
					<td style="text-align:left">'.$row['ID_Kham'].' </td>
					<td>'.$row['MaPhieu'].'</td>
					<td>'.$row['TenLoaiKham'].'</td>
					<td>'.$row['MaBenhNhan'].'</td>
					<td>'.$row['HoTen'].'</td>
					<td style="text-align:right">'.$row['GiaBaoChoBN'].'</td> 
					<td style="text-align:right"> </td>
          <td style="text-align:right">' .$row['PhanLoaiDoiTuong'].'</td>
					</tr>');
 
			}

			  ?>
              <tr>
            <td>&nbsp;</td>
            
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
			 
            <td style="text-align:center;font-size:18px !important">Tổng cộng</td>
             <td style="text-align:right;font-size:18px !important"><?=  $sum?></td>
			 <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>
			    <td colspan=3 style=" text-align: right;"> Đà nẵng, Ngày xuất dữ liệu <?=date('d')?> tháng <?=date('m')?> năm <?=date('Y')?></td>
			  </tr>
			  <tr>
				<td>Người lập</td>
                <td>Người kiểm tra</td> 
				<td>Kế toán trưởng</td>
			  </tr>
 
		</table>
		
		<br><br><br><br>
		
		 <table width="700px" border="1" cellpadding="0" cellspacing="0">
				<tr>
				<td colspan=3 style=" text-align: center;"> DOANH THU XUẤT HÓA ĐƠN NGÀY <?=date('d/m/Y')?></td>
			  </tr>
			  <tr>
				<td>STT</td>
                <td>DIỄN GIẢI</td> 
				<td>THÀNH TIỀN</td>
			  </tr>
			  <tr>
				<td>1</td>
                <td>Phí khám chữa bệnh các loại</td> 
				<td> </td>
			  </tr>
			   <tr>
				<td>2 </td>
                <td>Hủy phiếu theo bảng kê ngày (đính kèm) </td> 
				<td></td>
			  </tr>
			   <tr>
				<td>3 </td>
                <td>Đã xuất hóa đơn lẻ _ ……… </td> 
				<td> </td>
			  </tr>
			   <tr>
				<td>4 </td>
                <td>Số tiền còn lại (1-2-3) </td> 
				<td> </td>
			  </tr>
 
		</table>
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>
 
</html>
<?php
  if($types=="excel"){
   file_put_contents('excel/temp.html', ob_get_contents());
    $exp=new ExportToExcel();
    $exp->exportWithPage("excel/temp.html","Doanh_Thu_Dich_Vu_Excel_Mấu_10.xls");
  }
  ?>

