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

		$params1 = array($_GET["idkho"],0,convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59',$_GET['dieukienloc']);//tao param cho store
		$store_name1="{call KHODUOC_TONHIENTAI_THAMSO(?,?,?,?,?)}";//tao bien khai bao store dieukienloc
		$get_thongtinnv=$data->query( $store_name1,$params1);//Goi 
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
            <th width="430px">Nhóm</th>
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
             
          </tr>



          <tbody id="tbody_1">
              <?php
			  $i=0;
       		  $sumN=0;
       		  $sumX=0;
       		  $sumT=0;
			  	foreach($thuoc as $row){
/*
{name: 'tengoc', index: 'tengoc', search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'TenNhomThuoc', index: 'TenNhomThuoc', search: true, width: "25%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'LaThuoc', index: 'LaThuoc', formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"},search: true, width: "3%", editable: false, align: 'left', hidden: false,classes:'abc'},
				{name: 'SL_TonT12_2014', index: 'SL_TonT12_2014', search: true, width: "7%", editable: false, align: 'right', hidden: false},
				{name: 'SL_N',classes:'colored', index: 'SL_N', search: true, width: "7%", editable: false, align: 'right', hidden: false},
				{name:'TT_N',classes:'colored3',index:'TT_N', width:"15%", editable:false,align:'right',hidden:false},
				{name: 'SL_X',classes:'colored', index: 'SL_X', search: true, width: "7%", editable: false, align: 'right', hidden: false},
				{name:'TT_X',classes:'colored3',index:'TT_X', width:"10%", editable:false,align:'right',hidden:false},
				{name: 'SL_X_NOITRU',classes:'colored2', index: 'SL_X_NOITRU', search: true, width: "7%", editable: false, align: 'center', hidden: false},
				{name: 'SL_X_NGOAITRU',classes:'colored2', index: 'SL_X_NGOAITRU', search: true, width: "7%", editable: false, align: 'center', hidden: false},
				{name: 'SL_X_TIEUHAONOIBO',classes:'colored2', index: 'SL_X_TIEUHAONOIBO', search: true, width: "7%", editable: false, align: 'center', hidden: false},
				{name: 'SL_X_DIEUCHUYEN',classes:'colored2', index: 'SL_X_DIEUCHUYEN', search: true, width: "7%", editable: false, align: 'center', hidden: false},
				{name: 'TonHienTai',classes:'colored', index: 'TonHienTai', search: true, width: "7%", editable: false, align: 'center', hidden: false},
				{name:'TT_Ton',classes:'colored3',index:'TT_Ton', width:"10%", editable:false,align:'right',hidden:false},*/



					$i++;
			   		$sumN=$sumN+$row['TT_N'];
		   			$sumX=$sumX+$row['TT_X'];
			   		$sumT=$sumT+$row['TT_Ton'];

					?>
					 <tr>
						<td width="10px"><?=$i?></td>
						<td style="text-align:left"><?=$row['tengoc']?></td>
						<td style="text-align:left"><?=$row['TenNhomThuoc']?></td>
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

/*  $(document).ready(function(e) { //180
	//$('#total').html('<STRONG>Bằng chữ: '+toWords((<?=$sum?>).toString())+"đồng.</sTRONG>");

   print_preview();
  })*/;
</script>
<?php

if($types=="excel"){
	file_put_contents('excel/temp.html', ob_get_contents());
	$exp=new ExportToExcel();
	$exp->exportWithPage("excel/temp.html","tonkhothuoc.xls");
}

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





