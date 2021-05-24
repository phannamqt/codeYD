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
       <table width="300px" border="0" align="center" cellpadding="0" cellspacing="0">
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
        <table id="bang_1" width="700px" cellpadding="0" cellspacing="0" border="1">
          <tr>
            <th width="50px">STT</th>

            <th width="430px">THUỐC + VẬT TƯ TIÊU HAO</th>
            <th width="70px">ĐVT</th>
            <th width="100px">SỐ LƯỢNG</th>
                        <th width="100px">ĐƠN GIÁ</th>
                                                <th width="100px">THÀNH TIỀN</th>
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
						<td><?=$i?></td>

						<td style="text-align:left"><?=$row['TenGoc']?></td>
						<td><?=$row['TenDonViTinh']?></td>
						<td><?=$row['SoLuong']?></td>
            <td style="text-align:right"><?=  number_format($row['DonGia'],"0",",",".")?></td>
            <td style="text-align:right"><?=  number_format($row['ThanhTien'],"0",",",".")?></td>

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
            <td style="text-align:right"><?=  number_format($sum,"0",",",".")?></td>
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

	 $('#total').html('<STRONG>Bằng chữ: '+toWords((<?=$sum?>).toString())+"đồng.</sTRONG>");

	 print_preview();
	});
</script>
</html>
