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
                       B???NG K?? CH???NG T??? THU D???CH V???<br />
                        T??? ng??y <?=$_GET['tungay']?> ?????n ng??y <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>
            <th width="30px">NG??Y(1)</th>
            <th width="400px">S??? CT(2)</th>
            <th width="70px">S??? PHI???U(3)</th>
            <th width="70px">D???CH V??? KH??M(4)</th>
            <th width="90px">M?? B???NH NH??N(5)</th>
			<th width="90px">T??N B???NH NH??N(6)</th>
             <th width="90px">S??? TI???N(7)</th>
            <th width="90px">GHI CH??(8)</th> 
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
			 
            <td style="text-align:center;font-size:18px !important">T???ng c???ng</td>
             <td style="text-align:right;font-size:18px !important"><?=  $sum?></td>
			 <td>&nbsp;</td>
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
		
		 <table width="700px" border="1" cellpadding="0" cellspacing="0">
				<tr>
				<td colspan=3 style=" text-align: center;"> DOANH THU XU???T H??A ????N NG??Y <?=date('d/m/Y')?></td>
			  </tr>
			  <tr>
				<td>STT</td>
                <td>DI???N GI???I</td> 
				<td>TH??NH TI???N</td>
			  </tr>
			  <tr>
				<td>1</td>
                <td>Ph?? kh??m ch???a b???nh c??c lo???i</td> 
				<td> </td>
			  </tr>
			   <tr>
				<td>2 </td>
                <td>H???y phi???u theo b???ng k?? ng??y (????nh k??m) </td> 
				<td></td>
			  </tr>
			   <tr>
				<td>3 </td>
                <td>???? xu???t h??a ????n l??? _ ????????? </td> 
				<td> </td>
			  </tr>
			   <tr>
				<td>4 </td>
                <td>S??? ti???n c??n l???i (1-2-3) </td> 
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
    $exp->exportWithPage("excel/temp.html","Doanh_Thu_Dich_Vu_Excel_M???u_10.xls");
  }
  ?>

