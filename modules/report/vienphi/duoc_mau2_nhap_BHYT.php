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
//$store_name2="{call [Med_Thuoc_Nhap_Group_A](?,?,?)}";

$store_name2="{call [Med_TonKhoDuocChuan](?,?,?,?,?)}";
//Med_TonKhoDuocChuan 2,'2019-5-4','2019-6-30 23:59:59',4,null
$params2 = array(3,convert_date($_GET['tungay']),convert_date($_GET['denngay']).' 23:59:59',4,null);
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
                    <td colspan="8" style="text-align:center; color:blue;font-weight:bold; font-size:20px">
                     B??O C??O NH???P THU???C KHO B???O HI???M Y T???  THEO NH?? CUNG C???P (M???u 2B)<br />
                        T??? ng??y <?=$_GET['tungay']?> ?????n ng??y <?=$_GET['denngay']?><br />
                  </td>
                </tr>
          <tr>
      <th width="20px">STT(1)</th>         
<th width="400px">NH?? CUNG C???P(2)</th>
<th width="400px">M?? PHI???U(3)</th>
<th width="400px">S??? H??A ????N(4)</th>
<th width="400px">NG??Y H??A ????N(5)</th>
<th width="400px">ID_THUOC(6)</th>
<th width="400px">M?? THU???C(7)</th>
<th width="400px">T??N THU???C(8)</th>
<th width="400px">S??? L??(9)</th>
<th width="400px">H???N D??NG(10)</th>
<th width="400px">THU??C/VTYT(11)</th>
<th width="70px">??VT(12)</th>
<th width="400px">????N GI?? NH???P(13)</th>
<th width="70px">S??? L?????NG NH???P(14)</th>
<th width="90px">TI???N THU???C CH??A THU???(15)</th>
<th width="90px">% VAT(16)</th>
<th width="90px">THU???(17)</th>
<th width="90px">TH??NH TI???N NH???P(???? C?? VAT)(18)</th> 
<th width="90px">Ng??y Duy???t (19)</th> 

<!-- 
  id_kho  MaThuoc ID_Thuoc  TenDonViTinh  tengoc  TenNhomThuoc  LaThuoc CoSoTuTruc  QuyCach ID_Thuoc  ID_NCC  SoLoNhaSanXuat  NgayHetHan  DonGia_NTK  SL_NTK  TT_NTK  TenNCC
2 4186  5361  Vi??n  Paracetamol 500mg (Efferalgan 500mg)  THU???C GI???M ??AU, H??? S???T, CH???NG VI??M KH??NG STEROID, ??I???U TR??? G??T V?? C??C B???NH X????NG KH???P 1 0 H/16V 5361  26  T9817 2021-10-11 00:00:00.000 2567.56 160 410809.60 C??NG TY C??? PH???N D?????C-TBYT ???? N???NG (S??? 02 Phan ????nh Ph??ng)
    TenNCC  Id_Thuoc  TenGoc  DonGiaN SL_N  TT_N  PhanTramThue  TenDonViTinh -->

           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
		$i=0;
		$sum=0; 
		foreach($thuoc as $row){
			$i++;
			$sum=$sum+$row['TT_NTK']; 
        if($row["NgayHetHan"]!=''){
          $row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
        } 
       if($row["NgayHoaDon"]!=''){
          $row["NgayHoaDon"]=$row["NgayHoaDon"]->format($_SESSION["config_system"]["ngaythang"]);
        } 
         if($row["NgayDuyet"]!=''){
          $row["NgayDuyet"]=$row["NgayDuyet"]->format($_SESSION["config_system"]["ngaythang"]);
        } 
                echo ('<tr>
                  <td style="text-align:left">'.$i.'</td>
                            <td style="text-align:left">'.$row['TenNCC'].'</td>
                            <td style="text-align:left">'.$row['MaPhieu'].'</td>
                            <td style="text-align:left">'.$row['SoHoaDon'].'</td>
                            <td style="text-align:left">'.$row['NgayHoaDon'].'</td>
                            <td style="text-align:left">'.$row['MaThuoc'].'</td>
                            <td style="text-align:left">'.$row['ID_Thuoc'].'</td>
                            <td style="text-align:left">'.$row['TenGoc'].'</td>
                                <td>'.$row['SoLoNhaSanXuat'].'</td>
                                 <td>'.$row['NgayHetHan'].'</td>
                            <td style="text-align:left">'.$row['LaThuoc'].'</td>
                            <td>'.$row['TenDonViTinh'].'</td>
                            <td style="text-align:left">'.$row['DonGia_NTK'].'</td>		
                            <td>'.$row['SL_NTK'].'</td>
                            <td> </td>
                            <td>'.$row['PhanTramThue'].'</td>
                            <td style="text-align:right"></td> 
                            <td style="text-align:right">'.$row['TT_NTK'].'</td>
                            <td style="text-align:right">'.$row['NgayDuyet'].'</td>
                            </tr>');
 
			} 
			  ?>
              <tr>
            <td>&nbsp;</td>
             <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
             <td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td> <td>&nbsp;</td>
			  <td>&nbsp;</td> <td>&nbsp;</td><td>&nbsp;</td> <td>&nbsp;</td>
            <td style="text-align:center;font-size:18px !important">T???ng c???ng</td>
             <td style="text-align:right;font-size:18px !important"><?= $sum?></td>
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
    $exp->exportWithPage("excel/temp.html","Duoc_Nhap_Mau2(V1.1).xls");
  }
  ?>

