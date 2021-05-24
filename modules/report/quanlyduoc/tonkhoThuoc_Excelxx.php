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









	$data= new SQLServer;//tao lop ket noi SQL

		$params = array($_GET["idkho"],convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');//tao param cho store
		$store_name="{call KHODUOC_TONHIENTAI_THAMSO_NEW(?,?,?)}";//tao bien khai bao store dieukienloc
		$get_thongtinnv=$data->query( $store_name,$params);//Goi 
		$excute1= new SQLServerResult($get_thongtinnv);//Ket noi lop 
		//$thongtinnv= $excute1->get_as_array();//Tra ve mang toan bo 	
		
		$thuoc= $excute1->get_as_array();

?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
       <div class="n_top">
         <table width="700px" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
              <td></td>
              <td colspan=2 align="left"><strong> CÔNG TY CP Y KHOA BÁC SỸ GIA ĐÌNH</strong>
              </td>
              </tr>
               <tr>
                <td></td>
              <td  colspan=2 align="left">73 Nguyễn Hữu Thọ - Đà Nẵng
              </td>
              </tr>
               <tr>
                <td></td>
              <td colspan=2 align="left">ĐT : 0236.3652111   Fax 0236.3632333
              </td>
              </tr>
              <tr>
               <td></td>
              <td colspan=2 align="left">-----***-----
              </td>
              </tr>
          <tr align="center" style="text-align:center">
                    
                </tr>
            </table><br />
            <br />
         <br />
       </div>
      <h2>BÁO CÁO XUẤT NHẬP TỒN<?=' '.mb_strtoupper( $_GET["kho"],'UTF-8').' TỪ NGÀY '.$_GET["fromdate"].' ĐẾN NGÀY '.$_GET["todate"]?></h2> 
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
         
          <tr>
            <th width="10px">STT</th>

            <th width="430px">Tên thuốc</th>
               <th width="30px">ĐVT</th>
               <th width="30px">Quy cách</th>
            <th width="430px">Nhóm</th>
              <th width="430px">Nhà cung cấp</th>
             <th width="430px">Giá nhập cuối</th>
            <th width="70px">SL Tồn 2014</th>
            <th width="70px">SL Nhập</th>
            <th width="100px">Tiền Nhập</th>
             <th width="70px">SL Xuất</th>
             <th width="70px">Tiền Xuất</th>
             <th width="70px">SL Xuất nội trú</th>
             <th width="70px">SL Xuất ngoại trú</th>
             <th width="70px">SL Xuất tiêu hao</th>
             <th width="70px">SL Xuất điều chuyển</th>
             <th width="70px">SL tồn hiện tại</th>
             <th width="70px">Tiền tồn</th>
             <th width="70px">SL tủ trực</th>
             <th width="70px">SL TỒN THỰC TẾ</th>
             <th width="70px">SL Nhập BHYT</th>
             <th width="70px">Tiền nhập BHYT</th>
             <th width="70px">SLxuất ngoại trú BHYT</th>
             <th width="70px">Tiền xuất ngoại trú BHYT</th>
             <th width="70px">SLxuất nội trú BHYT</th>
             <th width="70px">Tiềnxuất nội trú BHYT</th>
             
          </tr>



          <tbody id="tbody_1">
              <?php
			  $i=0;
       		  $sumN=0;
       		  $sumX=0;
       		  $sumT=0;
			  	foreach($thuoc as $row){
					$i++;
			   		$sumN=$sumN+$row['TT_N'];
		   			$sumX=$sumX+$row['TT_X'];
			   		$sumT=$sumT+$row['TT_Ton'];

					?>
					 <tr>
						<td width="10px"><?=$i?></td>
						<td style="text-align:left"><?=$row['tengoc']?></td>
						<td style="text-align:left"><?=$row['TenDonViTinh']?></td>
						<td style="text-align:left"><?=$row['QuyCach']?></td>
						<td style="text-align:left"><font color="blue"><?=$row['TenNhomThuoc']?></font></td>
						<td style="text-align:left"><font color="blue"><?=$row["NCC"]?></font></td>
						<td style="text-align:left"><font color="blue"><?=$row['GiaCuoi']?></font></td>
						<td  bgcolor="#D5EAFF"><?=$row['SL_TonT12_2014']?></td>
						<td  bgcolor="#D5EAFF"><?=$row['SL_N']?></td>
                        <td  bgcolor="#FAD8E2" style="text-align:right"><?=  $row['TT_N']?></td>
                        <td  bgcolor="#D5EAFF"><?=$row['SL_X']?></td>
                        <td   bgcolor="#FAD8E2"style="text-align:right"><?=  $row['TT_X']?></td>
                         <td bgcolor="#FFFFC4"><?=$row['SL_X_NOITRU']?></td>
                         <td bgcolor="#FFFFC4"><?=$row['SL_X_NGOAITRU']?></td>
                         <td bgcolor="#FFFFC4"><?=$row['SL_X_TIEUHAONOIBO']?></td>
                         <td bgcolor="#FFFFC4"><?=$row['SL_X_DIEUCHUYEN']?></td>
                         <td bgcolor="#D5EAFF"><?=$row['TonHienTai']?></td>
                         <td  bgcolor="#FAD8E2" style="text-align:right"><?=  $row['TT_Ton']?></td>
                         <td bgcolor="#D5EAFF"><?=$row['CoSoTuTruc']?></td>
                         <td bgcolor="#D5EAFF"><?=$row['TonThucTe']?></td>
                         <td bgcolor="#f3e5f5"><?=$row['SL_N_BH']?></td>
                         <td bgcolor="#f3e5f5"><?=$row['TT_N_BH']?></td>
                         <td bgcolor="#f3e5f5"><?=$row['SLX_NgoaiTru_BH']?></td>
                         <td bgcolor="#f3e5f5"><?=$row['TT_NgoaiTru_BH']?></td>
                         <td bgcolor="#f3e5f5"><?=$row['SLX_NoiTru_BH']?></td>
                         <td bgcolor="#f3e5f5"><?=$row['TT_NoiTru_BH']?></td>

		              </tr>


					<?php

				}

			  ?>

              <tr>
            <td>&nbsp;</td>
            <td>Tổng cộng</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align:right"><?=  number_format($sumN,"0",",",".")?></td>
              <td>&nbsp;</td>
             <td style="text-align:right"><?=  number_format($sumX,"0",",",".")?></td>
                <td>&nbsp;</td>
                   <td>&nbsp;</td>
                      <td>&nbsp;</td>
                         <td>&nbsp;</td>
                            <td>&nbsp;</td>
                             <td style="text-align:right"><?=  number_format($sumT,"0",",",".")?></td>
            </tr>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>
   				<td></td>
			    <!-- <td id="total" colspan="6" style="text-align:right; font-style:italic">&nbsp;<?= ucfirst(strtolower(convert_number_to_words($sum))).' đồng'?></td> -->
			  </tr>
               <tr>
			    <td  colspan="4" style="text-align:right; font-style:italic">&nbsp;</td>
			  </tr>
			  <tr>
			   

			    <td  colspan="6" style="text-align:right"> Đà nẵng, ngày </td>
			  </tr>
			  <tr>
				   <td></td>
           <td></td>  
           <td></td>  
           <td></td>       
				<td colspan="2"style="text-align:center">Lập biểu</td>
			  </tr>
			  <tr>
        <td></td>
           <td></td>  
            <td></td>       
           <td></td> <td></td>   
				<td colspan="2" style="text-align:center"> <strong>tên nhanvien</strong></td>
			  </tr>
		</table>
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>

</html>
<script type="text/javascript">
</script>
<?php

/*if($types=="excel"){
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","tonkhothuoc.xls");
}
*/
function convert_number_to_words($number) {
	$hyphen      = ' ';
	$conjunction = '  ';
	$separator   = ' ';
	$negative    = 'âm ';
	$decimal     = ' phẩy ';
	$dictionary  = array(
	0                   => 'không',
	1                   => 'một',
	2                   => 'hai',
	3                   => 'ba',
	4                   => 'bốn',
	5                   => 'năm',
	6                   => 'sáu',
	7                   => 'bảy',
	8                   => 'tám',
	9                   => 'chín',
	10                  => 'mười',
	11                  => 'mười một',
	12                  => 'mười hai',
	13                  => 'mười ba',
	14                  => 'mười bốn',
	15                  => 'mười năm',
	16                  => 'mười sáu',
	17                  => 'mười bảy',
	18                  => 'mười tám',
	19                  => 'mười chín',
	20                  => 'hai mươi',
	30                  => 'ba mươi',
	40                  => 'bốn mươi',
	50                  => 'năm mươi',
	60                  => 'sáu mươi',
	70                  => 'bảy mươi',
	80                  => 'tám mươi',
	90                  => 'chín mươi',
	100                 => 'trăm',
	1000                => 'ngàn',
	1000000             => 'triệu',
	1000000000          => 'tỷ',
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





