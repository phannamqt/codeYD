<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
}
input.doted{
	border:none;
	box-shadow:none;
	border-bottom:dotted 2px #000000;
	height: 4px;
}
.dmnd{
	width:340px;
}
.ngay{
	width:50px;
}
.tai{
	width:290px;
}
.hokhau{
	width:378px;
}
.hokhau2{
	width:539px;
	height:14px !important;
}
.choo{
	width:535px;
}
.choo2{
	width:659px;
	height:14px !important;
	margin-bottom:7px;
}
.nghenghiep{
	width:545px;
}
.noicongtac{
	width:485px;
}
.nghenghieptruoc{
	width:640px;
	margin-bottom:7px;
}
.benhtat{
	width:410px;
}
.tiensuthaisan{
	width:378px;
}
input[type=checkbox].css-checkbox {
	position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
}

input[type=checkbox].css-checkbox + label.css-label {
	padding-left:25px;
	height:20px; 
	display:inline-block;
	line-height:20px;
	background-repeat:no-repeat;
	background-position: 0 0;
	font-size:20px;
	vertical-align:middle;
	cursor:pointer;

}

input[type=checkbox].css-checkbox:checked + label.css-label {
	background-position: 0 -20px;
}
label.css-label {
background-image:url(images/csscheckbox_cbedf8fc34fc83a015128029efb1c1d4.png);
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;

}
input.css-checkbox[type="checkbox"] + label.css-label {
    background-position: 0 5px;
    background-repeat: no-repeat;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
    height: 25px;
    line-height: 20px;
    margin-top: -10px;
    padding-left: 25px;
    vertical-align: middle;
}
input.css-checkbox[type="checkbox"]:checked + label.css-label {
    background-position: 0 -20px;
	 margin-top: 0;
}
</style>
<body>
<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
   
    ?>
<table width="100%">
  <tr>
    <td style=" font-size:12px"><span style="text-transform:uppercase"><strong><?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?></strong></span><strong><br />
      <span style="text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span><br />
    SỐ: GS/SK.............
    </strong></td>
    <td style="text-align:center"><strong>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
    Độc lập - Tự do - Hạnh phúc<br />
    **************
    </strong></td>
  </tr>
</table>
<div style="text-align:center">
<span style="font-size:20px; line-height:35px; font-weight:bold; text-align:center">GIẤY KHÁM SỨC KHỎE ĐỊNH KỲ</span>
</div>

<table width="100%">
  <tr>
    <td width="10%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-right:30px;">
   <br /><br /> Ảnh <br />
    4x6
    </div>
    </td>
    <td width="90%"><p>1. Họ và tên (<em>Chữ in hoa</em>): <span style="text-transform:uppercase"> <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?></span>
      <br />
      2. Giới: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nam 
      <input type="checkbox" name="nam" id="nam" <?php
if($thongtinbenhnhan[0]['Gioi']=='Nam'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nam"></label> Nữ <input type="checkbox" name="nu" id="nu" <?php
if($thongtinbenhnhan[0]['Gioi']=='Nữ'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nu"></label>&nbsp;&nbsp;&nbsp;&nbsp; Tuổi: <?=$thongtinbenhnhan[0]['Tuoi']?><br />
      3. Số CMND hoặc Hộ chiếu:<input type="text" class="doted dmnd"  /><br />
      Cấp ngày<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />tại<input type="text" class="doted tai"  /><br />
      4. Hộ khẩu thường trú:<input type="text" class="doted hokhau"  /><br />
      <input type="text" class="doted hokhau2"  /><br />

    </td>
  </tr>
</table>
5. Chổ ở hiện tại:<input type="text" class="doted choo"  /><br />
<input type="text" class="doted choo2"  /><br />
6. Nghề nghiệp:<input type="text" class="doted nghenghiep"  /><br />
  7. Nơi công tác, học tập:<input type="text" class="doted noicongtac"  /><br />
  8. Ngày bắt đầu vào học/làm việc tại đơn vị hiện nay:<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  9. Nghề, công việc trước đây (liệt kê các công việc đã làm trong 10 năm gần đây):<br />
  a) <input type="text" class="doted nghenghieptruoc"  /><br />
  thời gian làm việc<input type="text" class="doted ngay"  />năm<input type="text" class="doted ngay"  />tháng từ ngày<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  đến<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  b) <input type="text" class="doted nghenghieptruoc"  /><br />
  thời gian làm việc<input type="text" class="doted ngay"  />năm<input type="text" class="doted ngay"  />tháng từ ngày<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
   đến<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  10. Tiền sử bệnh tật gia đình: Có ai trong gia đình(ông bà, cha mẹ, anh chị em ruột) mắc một trong các bệnh sau đây: tim mạch, đái tháo đường, hen phế quản, ung thư, động kinh, rối loạn tâm thần, truyền nhiễm...: a) Không <input type="checkbox" name="khong" id="khong" class="css-checkbox"/><label class="css-label" for="khong"></label>; b) Có <input type="checkbox" name="co" id="co" class="css-checkbox"/><label class="css-label" for="co"></label><br />
  c) Nếu có, hãy ghi cụ thể tên bệnh:<input type="text" class="doted benhtat"  /><br />
11. Tiền sử thai sản (dành cho phụ nữ):<input type="text" class="doted tiensuthaisan"  /><br />
12. Tiền sử bản thân: <br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center">Tên bệnh</div></td>
    <td><div align="center">Phát hiện năm</div></td>
    <td><div align="center">Tên bệnh nghề nghiệp</div></td>
    <td><div align="center">Phát hiện năm</div></td>
  </tr>
  <tr>
    <td>&nbsp;a)</td>
    <td>&nbsp;</td>
    <td>&nbsp;a)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;b)</td>
    <td>&nbsp;</td>
    <td>&nbsp;b)</td>
    <td>&nbsp;</td>
  </tr>
</table><br />
<table width="100%">
  <tr>
    <td width="55%">Tôi xin cam đoan những điều khai ở trên đây là hoàn toàn đúng với tình trạng sức khỏe của tôi.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:center;">Đà Nẵng, ngày <?=date('d')?> tháng <?=date('m')?> năm <?=date('Y')?>
    <br />
    Người lao động xác nhận<br />
    (Ký và ghi rỏ họ tên)<br /><br /><br /><br /><br />
    
    <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
    </td>
  </tr>
</table>

</body>
<script type="text/javascript">
	$(document).ready(function() {	
		print_preview();
	})
</script>
</html>
