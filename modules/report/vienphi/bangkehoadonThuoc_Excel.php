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
	text-align: center;
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
</style>
</head>
<?php






$ID_ThuTraNo=0;
 $phanloaiHD=0;
  $IDHoaDonThueDiary=0;
  $ID_ThuTraNoMulti='';
if(isset($_GET["id_ttno"]))
{
   $ID_ThuTraNo= $_GET["id_ttno"];
}
else
{
   $ID_ThuTraNo=0;

}
if(isset($_GET["phanloaiHD"]))
{
   $phanloaiHD= $_GET["phanloaiHD"];
}
else
{
   $phanloaiHD=0;

}

if((isset($_GET["ID_HoaDonThueDiary"])&& $_GET["ID_HoaDonThueDiary"]!="undefined"&& $_GET["ID_HoaDonThueDiary"]!="null"))
{
   $IDHoaDonThueDiary= $_GET["ID_HoaDonThueDiary"];
}
else
{
   $IDHoaDonThueDiary=0;

}
if((isset($_GET["ID_ThuTraNoMulti"])&& $_GET["ID_ThuTraNoMulti"]!="undefined"&& $_GET["ID_ThuTraNoMulti"]!="null"))
{
   $ID_ThuTraNoMulti= $_GET["ID_ThuTraNoMulti"];
}
else
{
   $ID_ThuTraNoMulti='';

}


	$data= new SQLServer;//tao lop ket noi SQL

		$store_name1="{call GD2_LayThongTinHoaDon (?,?,?)}";
		$params1 = array($ID_ThuTraNo, $phanloaiHD, $IDHoaDonThueDiary);

		$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
		$thongtinnv= $excute1->get_as_array();//Tra ve mang toan bo 

if($phanloaiHD=='6'||$phanloaiHD=='5')
{
  $params2 = array($_GET['id_ttno']);
  $store_name2="{call Gd2_BangKeHoaDonThuocNoiTru(?)}";
}
if($phanloaiHD=='10' ||$phanloaiHD=='11')
{
  $params2 = array($ID_ThuTraNoMulti);
  $store_name2="{call Gd2_BangKeHoaDonThuocNoiTru_Multi(?)}";
}
		
		$get_thongtin2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get_thongtin2);
		$thuoc= $excute2->get_as_array();

?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
       <div class="n_top">
         <table width="700px" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
              <td colspan=2 align="left"><strong> <?=$_SESSION["com"]["TenBenhVien"]?></strong>
              </td>
              </tr>
               <tr>
              <td colspan=2 align="left"> <?php echo $_SESSION["com"]["DiaChi"]?>
              </td>
              </tr>
               <tr>
              <td colspan=2 align="left"> <?php echo $_SESSION["com"]["SoDT"]?>
              </td>
              </tr>
              <tr>
              <td colspan=2 align="left">-----***-----
              </td>
              </tr>
          <tr align="center" style="text-align:center">
                    <td colspan=6 style="text-align:center; font-weight:bold; font-size:20px">
                        B???NG K?? CHI TI???T.<br />
                        S???:<?= $thongtinnv[0]["SoHD"]?> / BKCT / <?=$thongtinnv[0]["GioLap"]->format('Y')?><br />
                        (K??m theo h??a ????n GTGT s??? 0000<?= $thongtinnv[0]["SoHD"]?> ng??y <?=$thongtinnv[0]["GioLap"]->format('d/m/Y')?>)                        <br />
                  </td>
                </tr>
            </table><br />
            <br />
         <br />
       </div>
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
         
          <tr>
            <th width="10px">STT</th>

            <th width="430px">THU???C + V???T T?? TI??U HAO</th>
            <th width="70px">??VT</th>
            <th width="100px">S??? L?????NG</th>
                        <th width="100px">????N GI??</th>
                                                <th width="100px">TH??NH TI???N</th>
          </tr>



          <tbody id="tbody_1">
              <?php
			  $i=0;
        $sum=0;
			  	foreach($thuoc as $row){
					$i++;
			   $sum=$sum+$row['ThanhTien'];

					?>
					 <tr>
						<td width="10px"><?=$i?></td>

						<td style="text-align:left"><?=$row['TenGoc']?></td>
						<td><?=$row['TenDonViTinh']?></td>
						<td><?=$row['SoLuong']?></td>
                       <!--  <td style="text-align:right"><?=  number_format($row['DonGia'],"0",",",".")?></td>
                        <td style="text-align:right"><?=  number_format($row['ThanhTien'],"0",",",".")?></td> -->
                         <td style="text-align:right"><?= $row['DonGia']?></td>
                         <td style="text-align:right"><?=  $$row['ThanhTien']?></td>

		    </tr>


					<?php

				}

			  ?>

              <tr>
            <td>&nbsp;</td>
            <td>T???ng c???ng</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align:right"><?=  $sum?></td>
            </tr>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>

			    <td id="total" colspan="6" style="text-align:right; font-style:italic">&nbsp;<?= ucfirst(strtolower(convert_number_to_words($sum))).' ?????ng'?></td>
			  </tr>
               <tr>
			    <td  colspan="4" style="text-align:right; font-style:italic">&nbsp;</td>
			  </tr>
			  <tr>
			   

			    <td  colspan="6" style="text-align:right"> ???? n???ng, ng??y <?=$thongtinnv[0]["GioLap"]->format('d/m/Y')?></td>
			  </tr>
			  <tr>
				   <td></td>
           <td></td>  
           <td></td>  
           <td></td>       
				<td colspan="2"style="text-align:center">L???p bi???u</td>
			  </tr>
			  <tr>
        <td></td>
           <td></td>  
            <td></td>       
           <td></td> <td></td>   
				<td colspan="2" style="text-align:center"> <strong><?=$thongtinnv[0]["TenNhanVien"]?></strong></td>
			  </tr>
		</table>
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>

</html>
<script type="text/javascript">

  $(document).ready(function(e) { //180
	//$('#total').html('<STRONG>B???ng ch???: '+toWords((<?=$sum?>).toString())+"?????ng.</sTRONG>");

   print_preview();
  });
</script>
<?php

if($types=="excel"){
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","XuatThuoc_M???u1.xls");
}

function convert_number_to_words($number) {
	$hyphen      = ' ';
	$conjunction = '  ';
	$separator   = ' ';
	$negative    = '??m ';
	$decimal     = ' ph???y ';
	$dictionary  = array(
	0                   => 'kh??ng',
	1                   => 'm???t',
	2                   => 'hai',
	3                   => 'ba',
	4                   => 'b???n',
	5                   => 'n??m',
	6                   => 's??u',
	7                   => 'b???y',
	8                   => 't??m',
	9                   => 'ch??n',
	10                  => 'm?????i',
	11                  => 'm?????i m???t',
	12                  => 'm?????i hai',
	13                  => 'm?????i ba',
	14                  => 'm?????i b???n',
	15                  => 'm?????i n??m',
	16                  => 'm?????i s??u',
	17                  => 'm?????i b???y',
	18                  => 'm?????i t??m',
	19                  => 'm?????i ch??n',
	20                  => 'hai m????i',
	30                  => 'ba m????i',
	40                  => 'b???n m????i',
	50                  => 'n??m m????i',
	60                  => 's??u m????i',
	70                  => 'b???y m????i',
	80                  => 't??m m????i',
	90                  => 'ch??n m????i',
	100                 => 'tr??m',
	1000                => 'ng??n',
	1000000             => 'tri???u',
	1000000000          => 't???',
	);
	 
	if (!is_numeric($number)) {
		return false;
	}
	 
	if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
	// overflow
		trigger_error(
		'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
		E_USER_WARNING
		);
		return false;
	}
	 
	if ($number < 0) {
		return $negative . convert_number_to_words(abs($number));
	}
	 
	$string = $fraction = null;
	 
	if (strpos($number, '.') !== false) {
		list($number, $fraction) = explode('.', $number);
	}
	 
	switch (true) {
	case $number < 21:
	$string = $dictionary[$number];
	break;
	case $number < 100:
	$tens   = ((int) ($number / 10)) * 10;
	$units  = $number % 10;
	$string = $dictionary[$tens];
	if ($units) {
	$string .= $hyphen . $dictionary[$units];
	}
	break;
	case $number < 1000:
	$hundreds  = $number / 100;
	$remainder = $number % 100;
	$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
	if ($remainder) {
	$string .= $conjunction . convert_number_to_words($remainder);
	}
	break;
	default:
	$baseUnit = pow(1000, floor(log($number, 1000)));
	$numBaseUnits = (int) ($number / $baseUnit);
	$remainder = $number % $baseUnit;
	$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
	if ($remainder) {
	$string .= $remainder < 100 ? $conjunction : $separator;
	$string .= convert_number_to_words($remainder);
	}
	break;
	}
	 
	if (null !== $fraction && is_numeric($fraction)) {
	$string .= $decimal;
	$words = array();
	foreach (str_split((string) $fraction) as $number) {
	$words[] = $dictionary[$number];
	}
	$string .= implode(' ', $words);
	}
	 
	return $string;
}
?>





