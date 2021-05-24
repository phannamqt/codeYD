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


if($phanloaiHD=='9'||$phanloaiHD=='8')
{
  $params2 = array($ID_ThuTraNoMulti);
  $store_name2="{call GD2_BangKeHoaDon_KhamCB(?)}";
}
if($phanloaiHD=='1'||$phanloaiHD=='7')
{
  $params2 = array($ID_ThuTraNo);
  $store_name2="{call GD2_BangKeHoaDon_KhamCB(?)}";
}
		
		$get_thongtin2=$data->query( $store_name2,$params2);
		$excute2= new SQLServerResult($get_thongtin2);
		$thuoc= $excute2->get_as_array();

?>
<body>
<div id="tongthe">
     <div id="page_1" class="page" style="page-break-after: always; padding-left: 10px; padding-top:5px">
       <div class="n_top">
         <table width="300px" border="0" align="left" cellpadding="0" cellspacing="0">
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

         <table  width="700px" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="text-align:center; font-weight:bold; font-size:20px">
                        BẢNG KÊ CHI TIẾT<br />
                        Số:<?= $thongtinnv[0]["SoHD"]?> / BKCT / <?=$thongtinnv[0]["GioLap"]->format('Y')?><br />
                        (Kèm theo hóa đơn GTGT số 0000<?= $thongtinnv[0]["SoHD"]?> ngày <?=$thongtinnv[0]["GioLap"]->format('d/m/Y')?>)                        <br />
                  </td>
                </tr>
            </table>
            <br />
         <br />
       </div>
<!--        STT  MaBenhNhan  hoten TenLoaiKham SoLanThucHienTrongNgay  SoNgayThucHien  ThanhTien
1 113269  Nguyễn Thị Hải  Khám LS 0 1 1 0 -->
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
        <thead>
          <tr>
            <th width="30px">STT</th>
            <th width="400px">Tên dịch vụ KCB</th>
            <th width="70px">Số lần(1)</th>
            <th width="70px">Số ngày(2)</th>
            <th width="90px">Đơn giá(3)</th>
             <th width="90px">Thành tiền(4)=(1)x(2)x(3)</th>
            <th width="90px">Miễn giảm(5)</th>
             <th width="90px">Tổng tiền(6)=(4) - (5)</th>
           
          </tr>
           <thead>
          <tbody id="tbody_1">
              <?php
			  $i=0;
$sum=0;
 $sumBn=0;
  $sttBN=0;
    $sumMG=0;
	 $sumTongCong=0;
			  	foreach($thuoc as $row){
					$i++;
			$sum=$sum+$row['ThanhTien'];
			
     

					?>
					

           <!--  <td><?=$row['STT3']-1?></td>
            <td style="text-align:left"><?=$row['TenLoaiKham']?></td>
            <td><?=$row['SoLanThucHienTrongNgay']?></td>
            <td><?=$row['SoNgayThucHien']?></td>
            <td style="text-align:right"><?=  number_format($row['GiaBaoChoBN'],"0",",",".")?></td>
            <td style="text-align:right"><?=  number_format($row['ThanhTien'],"0",",",".")?></td>
 -->

<!-- style="text-align:center; font-size:18px; font-family:Arial, Helvetica, sans-serif; font-style:italic; background:#F5F5F5; -->
  <?php
     
     if($row['STT3']==1)//dòng tổng cộng cho từng bệnh  nhân)
              {
               $sumBn=$sumBn+$row['ThanhTien'];
			   $sumMG=$sumMG+$row['MienGiam'];
			    $sumTongCong=$sumTongCong+$row['TongCong'];
                $sttBN++;
                 echo ('<tr style="height:21px!important;text-align:right;background:#F5F5F5;font-size:14px;font-family:Arial, Helvetica, sans-serif;font-style:italic; ">
				 <td><b>'.$sttBN.'<b></td>
            <td colspan="4"  ><b>'.$row['TenLoaiKham'] .'</b></td>
            <td style="text-align:right"><b>'.number_format($row['ThanhTien'],"0",",",".").'</b></td>
			<td style="text-align:right"><b>'.number_format($row['MienGiam'],"0",",",".").'</b></td>
			<td style="text-align:right"><b>'.number_format($row['TongCong'],"0",",",".").'</b></td>
            </tr>');

              }
              else
               {//khám chữa bệnh
                echo ('<tr>
                  <td style="text-align:left">'.$sttBN.'.'.($row['STT3']-1).'</td>
            <td style="text-align:left">'.$row['TenLoaiKham'].'</td>
            <td>'.$row['SoLanThucHienTrongNgay'].'</td>
            <td>'.$row['SoNgayThucHien'].'</td>
            <td style="text-align:right">'.number_format($row['GiaBaoChoBN'],"0",",",".").'</td>
            <td style="text-align:right">'.number_format($row['ThanhTien'],"0",",",".").'</td>
			<td style="text-align:right">'.number_format($row['MienGiam'],"0",",",".").'</td>
			<td style="text-align:right">'.number_format($row['TongCong'],"0",",",".").'</td>
                        </tr>');


              }
     ?>
		   







					<?php

				}

			  ?>
              <tr>
            <td>&nbsp;</td>
            <td style="text-align:center;font-size:18px !important">Tổng cộng</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align:right;font-size:18px !important"><?=  number_format($sumBn,"0",",",".")?></td>
             <td style="text-align:right;font-size:18px !important"><?=  number_format($sumMG,"0",",",".")?></td>
             <td style="text-align:right;font-size:18px !important"><?=  number_format($sumTongCong,"0",",",".")?></td>
            </tr>
          </tbody>
        </table>
        <div id="bottom">
		   <br />
		    <table width="700px" border="0" cellpadding="0" cellspacing="0">
			  <tr>
			    <td id="total" colspan="4" style="text-align:right; font-style:italic">&nbsp;</td>
			  </tr>
               <tr>
			    <td  colspan="4" style="text-align:right; font-style:italic">&nbsp;</td>
			  </tr>
			  <tr>
			    <td width="34" style="text-align:center">&nbsp;</td>
                <td width="34" style="text-align:center">&nbsp;</td>
                <td width="359">&nbsp;</td>

			    <td width="273" style="text-align:center"> Đà nẵng, ngày <?=$thongtinnv[0]["GioLap"]->format('d/m/Y')?></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style="text-align:center">&nbsp;</td>
				<td>Lập biểu</td>
			  </tr>
			  <tr>

				<td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style="text-align:center">&nbsp;</td>
				<td style="text-align:center"><br /><br /><br /> <strong><?=$thongtinnv[0]["TenNhanVien"]?></strong></td>
			  </tr>
		</table>
	 </div>
    </div><!-- end page-->
</div><!-- end tongthe-->


</body>
<script type="text/javascript">
	$(document).ready(function(e) { //180

	 $('#total').html('<STRONG>Bằng chữ: '+toWords((<?=$sumTongCong?>).toString())+"đồng.</sTRONG>");

	 print_preview();
	});
</script>
</html>
