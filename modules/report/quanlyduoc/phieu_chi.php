<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	margin-left: 0px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
} 
body,td,th {
	color: #000;
}

</style>
</head>
<body>
<?php
       $data= new SQLServer;
		$params1 = array($_GET["id_thutrano"]);//tao param cho store 
        $store_name1="{call [GD2_PhieuChi_SellecttoReport](?)}";//tao bien khai bao store
        $get_thongtinphieuchi=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinphieuchi);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinphieuchi= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	   
		
    	/*if($thongtinphieuchi[0]["NgayGio"]!=''){
			$thongtinphieuchi[0]["NgayGio"]=$thongtinphieuchi[0]["NgayGio"]->format($_SESSION["config_system"]["ngaythang"]);}
		else $thongtinphieuchi[0]["NgayGio"]=''; */
    ?>
<table width="100%" border="0" style="margin-left:15px">
  <tr>
    <td   width="75%" align="left" valign="top"><?php echo $_SESSION["com"]["TenBenhVien"]?><br />
 Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?> </td>
    <td width="25%" colspan="3" align="center" ><b style="font-size:9px">Mẫu số 02-TT <br>(Ban hành theo QĐ số: 15/2006/QĐ-BTC<br>ngày 20/03/2006 của Bộ trưởng BTC </b></td>
  </tr>
  <tr>
    <td  width="75%" rowspan="4" align="center" valign="top" style=" padding-left:80px">
    	<b style="font-size:26px">PHIẾU CHI</b><br><i style="font-size:16px">Ngày <?= $thongtinphieuchi[0]["NgayGio"]->format('d');?> tháng  <?= $thongtinphieuchi[0]["NgayGio"]->format('m');?> năm <?= $thongtinphieuchi[0]["NgayGio"]->format('Y');?></i>
    </td>
    
    <td  width="25%" align="left" valign="top">Quyển Số:<?=$thongtinphieuchi[0]["MaPhieu"] ?></td>
  </tr>
  <tr>
    <td  align="left" valign="top">Số: </td>
  </tr>
  <tr>
    <td  align="left" valign="top"><b>Nợ:</b></td>
  </tr>
  <tr>
    <td align="left" valign="top"><b>Có:</b></td>
  </tr>
  <tr>
    <td colspan="5">Họ và tên người nhận tiền:&nbsp;&nbsp;&nbsp; <?=$thongtinphieuchi[0]["NguoiGiaoDich"] ?></td>
  </tr>
  <tr>
    <td colspan="5">Địa chỉ:&nbsp;&nbsp;&nbsp;<?=$thongtinphieuchi[0]["ExtField1"] ?></td>
  </tr>
  <tr>
    <td colspan="5">Lý do chi:&nbsp;&nbsp;&nbsp;<?=$thongtinphieuchi[0]["GhiChu"] ?></td>
  </tr>
  <tr>
    <td colspan="5">Số tiền:&nbsp;&nbsp;&nbsp;<?=number_format($thongtinphieuchi[0]["SoTien"],"0",",",".")?>&nbsp; <i id="sotien"></i> &nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Kèm theo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;chứng từ gốc</td>
  </tr>
  </table>
  <table width="100%" style="margin-left:15px">
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" align="right" style="padding-right:20px; margin-bottom:15px"><em>Ngày 
      <?= $thongtinphieuchi[0]["NgayGio"]->format('d');?> tháng  <?= $thongtinphieuchi[0]["NgayGio"]->format('m');?> năm <?= $thongtinphieuchi[0]["NgayGio"]->format('Y');?>
    </em></td>
  </tr>
  <tr>
    <td width="20%" align="center" valign="top"><b style="font-size:12px">Giám đốc</b></td>
    <td width="20%" align="center" valign="top"><b style="font-size:12px">Kế toán trưởng</b></td>
    <td width="20%" align="center" valign="top"><b style="font-size:12px">Thủ quỷ</b></td>
    <td width="20%" align="center" valign="top"><b style="font-size:12px">Người lập phiếu</b></td>
    <td width="20%" align="center" valign="top"><b style="font-size:12px">Người nhận tiền</b></td>
  </tr>
  <tr>
    <td width="20%" align="center" valign="top"><em style="font-size:12px">(Ký, họ tên, đóng dấu)</em></td>
    <td width="20%" align="center" valign="top"><em style="font-size:12px">(Ký, họ tên)</em></td>
    <td width="20%" align="center" valign="top"><em style="font-size:12px">(Ký, họ tên)</em></td>
    <td width="20%" align="center" valign="top"><em style="font-size:12px">(Ký, họ tên)</em></td>
    <td width="20%" align="center" valign="top"><em style="font-size:12px">(Ký, họ tên)</em></td>
  </tr>
  <tr>
    <td style="height:100px!important">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Đã nhận đủ số tiền <i>(viết bằng chữ)</i> &nbsp;&nbsp;
    
	</td>
  </tr>
  <tr>
    <td colspan="5">+Tỷ giá ngoại tệ (vàng bạc, đá quý):</td>
  </tr>
  <tr>
    <td colspan="5">+Số tiền quy đổi:</td>
  </tr>
  <tr>
    <td colspan="5"><i>(Liên gửi ra ngoài phải đóng dấu)</i></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>
	<script type="application/javascript">
            $(document).ready(function() {
				$('#sotien').html('(viết bằng chữ): '+toWords((<?=$thongtinphieuchi[0]["SoTien"]?>).toString())+"đồng");
                 print_preview();
            });
        </script>
</body>