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
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
   
    ?>
<table width="100%">
  <tr>
    <td style=" font-size:12px"><span style="text-transform:uppercase"><strong><?php echo $_SESSION["com"]["TenCoQuanTrucThuoc"]?></strong></span><strong><br />
      <span style="text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span><br />
    S???: GS/SK.............
    </strong></td>
    <td style="text-align:center"><strong>C???NG H??A X?? H???I CH??? NGH??A VI???T NAM<br />
    ?????c l???p - T??? do - H???nh ph??c<br />
    **************
    </strong></td>
  </tr>
</table>
<div style="text-align:center">
<span style="font-size:20px; line-height:35px; font-weight:bold; text-align:center">GI???Y KH??M S???C KH???E ?????NH K???</span>
</div>

<table width="100%">
  <tr>
    <td width="10%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-right:30px;">
   <br /><br /> ???nh <br />
    4x6
    </div>
    </td>
    <td width="90%"><p>1. H??? v?? t??n (<em>Ch??? in hoa</em>): <span style="text-transform:uppercase"> <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?></span>
      <br />
      2. Gi???i: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nam 
      <input type="checkbox" name="nam" id="nam" <?php
if($thongtinbenhnhan[0]['Gioi']=='Nam'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nam"></label> N??? <input type="checkbox" name="nu" id="nu" <?php
if($thongtinbenhnhan[0]['Gioi']=='N???'){
 echo 'checked'	;
}
 ?> class="css-checkbox"/><label class="css-label" for="nu"></label>&nbsp;&nbsp;&nbsp;&nbsp; Tu???i: <?=$thongtinbenhnhan[0]['Tuoi']?><br />
      3. S??? CMND ho???c H??? chi???u:<input type="text" class="doted dmnd"  /><br />
      C???p ng??y<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />t???i<input type="text" class="doted tai"  /><br />
      4. H??? kh???u th?????ng tr??:<input type="text" class="doted hokhau"  /><br />
      <input type="text" class="doted hokhau2"  /><br />

    </td>
  </tr>
</table>
5. Ch??? ??? hi???n t???i:<input type="text" class="doted choo"  /><br />
<input type="text" class="doted choo2"  /><br />
6. Ngh??? nghi???p:<input type="text" class="doted nghenghiep"  /><br />
  7. N??i c??ng t??c, h???c t???p:<input type="text" class="doted noicongtac"  /><br />
  8. Ng??y b???t ?????u v??o h???c/l??m vi???c t???i ????n v??? hi???n nay:<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  9. Ngh???, c??ng vi???c tr?????c ????y (li???t k?? c??c c??ng vi???c ???? l??m trong 10 n??m g???n ????y):<br />
  a) <input type="text" class="doted nghenghieptruoc"  /><br />
  th???i gian l??m vi???c<input type="text" class="doted ngay"  />n??m<input type="text" class="doted ngay"  />th??ng t??? ng??y<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  ?????n<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  b) <input type="text" class="doted nghenghieptruoc"  /><br />
  th???i gian l??m vi???c<input type="text" class="doted ngay"  />n??m<input type="text" class="doted ngay"  />th??ng t??? ng??y<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
   ?????n<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  />/<input type="text" class="doted ngay"  /><br />
  10. Ti???n s??? b???nh t???t gia ????nh: C?? ai trong gia ????nh(??ng b??, cha m???, anh ch??? em ru???t) m???c m???t trong c??c b???nh sau ????y: tim m???ch, ????i th??o ???????ng, hen ph??? qu???n, ung th??, ?????ng kinh, r???i lo???n t??m th???n, truy???n nhi???m...: a) Kh??ng <input type="checkbox" name="khong" id="khong" class="css-checkbox"/><label class="css-label" for="khong"></label>; b) C?? <input type="checkbox" name="co" id="co" class="css-checkbox"/><label class="css-label" for="co"></label><br />
  c) N???u c??, h??y ghi c??? th??? t??n b???nh:<input type="text" class="doted benhtat"  /><br />
11. Ti???n s??? thai s???n (d??nh cho ph??? n???):<input type="text" class="doted tiensuthaisan"  /><br />
12. Ti???n s??? b???n th??n: <br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center">T??n b???nh</div></td>
    <td><div align="center">Ph??t hi???n n??m</div></td>
    <td><div align="center">T??n b???nh ngh??? nghi???p</div></td>
    <td><div align="center">Ph??t hi???n n??m</div></td>
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
    <td width="55%">T??i xin cam ??oan nh???ng ??i???u khai ??? tr??n ????y l?? ho??n to??n ????ng v???i t??nh tr???ng s???c kh???e c???a t??i.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:center;">???? N???ng, ng??y <?=date('d')?> th??ng <?=date('m')?> n??m <?=date('Y')?>
    <br />
    Ng?????i lao ?????ng x??c nh???n<br />
    (K?? v?? ghi r??? h??? t??n)<br /><br /><br /><br /><br />
    
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
