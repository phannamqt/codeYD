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
$store_name2="{call MED_BangKeHoaDonThuoc(?,?)}";
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
                    <td colspan="9" style="text-align:center; font-weight:bold; color:blue;font-size:20px">
                      T???NG H???P XU???T THU???C KHO D???CH V???<br />
                        T??? ng??y <?=$_GET['tungay']?> ?????n ng??y <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>
            <th width="30px">NG??Y</th>
            <th width="400px">T??N THU???C</th>
            <th width="70px">??VT</th>
            <th width="70px">S??? L?????NG</th>
			<th width="70px">S??? L??</th>
            <th width="90px">TI???N THU???C CH??A THU???</th>
			<th width="90px">% VAT</th>
             <th width="90px">THU???</th>
            <th width="90px">TH??NH TI???N</th> 
           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
		$i=0;
		$sum=0; 
		foreach($thuoc as $row){
			$i++;
			$sum=$sum+$row['ThanhTien']; 
                echo ('<tr>
					<td style="text-align:left">'. $row['NgayDuyet']->format('d/m/Y') .'</td>
					<td style="text-align:left">'.$row['TenGoc'].'</td>
					<td>'.$row['TenDonViTinh'].'</td>
					<td>'.$row['SoLuong'].'</td>
					<td>'.$row['SoLoNhaSanXuat'].'</td>
					<td> </td>
					<td>'.$row['PhanTramThue'].'</td>
					
					<td style="text-align:right"></td> 
					<td style="text-align:right">'.$row['ThanhTien'].'</td>
					
					</tr>');
 
			} 
			  ?>
       <!--  <td style="text-align:right">'.number_format($row['ThanhTien'],"0",",",".").'</td> -->
              <tr> 
            <td colspan="8" style="text-align:right;font-size:18px !important">T???ng c???ng</td>
             <td style="text-align:right;font-size:18px !important"><?=  $sum?></td>
            </tr>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>
			    <td colspan=3 style=" text-align: right;"> ???? n???ng, Ng??y xu???t d??? li???u <?=date('d')?> th??ng <?=date('m')?> n??m <?=date('Y')?></td>
			  </tr>
			  <tr>
				<td>Ng?????i l???p</td>
                <td>Ng?????i ki???m tra</td> 
				<td>K??? to??n tr?????ng</td>
			  </tr>
 
		</table>
		
		<br><br><br><br>
		
		  
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>
 
</html>
<?php
  if($types=="excel"){
    	file_put_contents('excel/temp.html', ob_get_contents());
    	$exp=new ExportToExcel();
    	$exp->exportWithPage("excel/temp.html","Doanh_Thu_Thuoc_Excel.xls");
  }
  ?>

