<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	font-family:Arial, Helvetica, sans-serif !important;
	padding-left:35px;
	line-height: 20px !important;
}
.benhkhac{
	line-height: 18px !important;
}
fieldset{
	border:#000 1px solid;}
.viethoachucai{
	text-transform: capitalize;
	}
input[class="textdot"] {
  border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  border-bottom:dotted 2px #000000;
  width: 100%;
   padding: 0px!important;
}
input[class="nam"] {
	width:95px;	
	 border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}
input[class="nam2"] {
	width:385px;	
	 border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}
input[class="nam3"] {
width:90%;	
	 border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}
input[class="tthn"] {
  width:352px;	
  border-top: none!important;
  border-left: none!important;
  border-right: none!important;
  box-shadow:  none!important;
  padding: 0px!important;
  border-bottom:dotted 2px #000000;
}
</style>
</head>
 
<body >
<div style="page-break-after: always;">
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
      //  $params2 = array($_GET["id_luotkham"]);//tao param cho store 
       // $store_name2="{call GD2_GetTenCongTyByID_LuotKham(?)}";//tao bien khai bao store
       // $get_tencty=$data->query( $store_name2,$params2);//Goi store
       // $excute2= new SQLServerResult($get_tencty);//Ket noi lop xu ly SQL v?? truyen gia tri tra ve tu lop ket noi SQL
        //$thongtincty= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc  
		//print_r($thongtincty);
   
    ?>


     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;font-size:13px;">
     <tr>
     	<td width="50%" align="center" style="padding-left:15px; padding-top:8px;">
          <strong style=" font-size:13px; padding-top:5px; padding-bottom:8px; text-transform: uppercase;"><?php if(count($_GET['tencongty'])){ echo $_GET['tencongty'];} ?></strong>
          <?php
		  if(mb_strlen($_GET['tencongty'], 'UTF-8')<45)
		  {
		  ?>
          <br />&nbsp;
          <?php
		  }
		  ?>
          
        </td>
       
       <td align="center" width="50%" style="font-weight:bold; font-size:13px;padding-left: 50px;padding-top:8px;"> 
         C???NG H??A X?? H???I CH??? NGH??A VI???T NAM<br />
         ?????c l???p - T??? do - H???nh ph??c
        </td>
     </tr>
     </table>
     <h2 align="center">PHI???U KH??M S???C KH???E ?????NH K???</h2>
     <p align="center" style="margin-top: -18px;font-size:12px; font-weight:bold;">(L??M T???I <span style="text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>) </p>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;font-size:13px;">
        <tr>
        <td width="10%">H??? v?? t??n:</td>
        <td width="30%" class="viethoachucai"><strong>
        <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
        </strong></td>
        <td width="20%">Gi???i t??nh: <strong>
        <?=$thongtinbenhnhan[0]['Gioi'];?>
        </strong></td>
        <td width="20%">N??m sinh: <strong>
        <?=$thongtinbenhnhan[0]['NamSinh'];?>
        </strong></td>
        <td width="20%">ID: <strong>
        <?=$thongtinbenhnhan[0]['MaBenhNhan'];?>
        </strong></td>
      </tr>
      <tr>
        <td>?????a ch???:</td>
        <td colspan="4"><strong>
        <?=$thongtinbenhnhan[0]['DiaChi'];?>
        </strong></td>
      </tr>
    </table>
    <fieldset style="width:93%; font-size:13px; padding-left:15px;">
    	<legend align="center">(Th??ng tin do ng?????i qu???n l?? h??? s?? ??i???n v??o)</legend>
        <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
  <tr>
	<td width="20%">
    Ng??nh Ngh??? c??ng t??c:
    </td>
    <td width="80%"><input type='text' class='textdot'></td>
</tr>
 <tr>
	<td>
    T??nh tr???ng h??n nh??n:
    </td>
    <td><input type='text' class='tthn'> ???? c??: <input type='text' class='nam'>con</td>
</tr>
<tr>
	<td>
    Th???i gian c??ng t??c: 
    </td>
    <td ><input type='text' class='nam'> n??m
    </td>
</tr>
</table>
       
    </fieldset>
    <fieldset style="width:93%; font-size:13px;padding-left:15px;">
    	<legend align="center">(Th??ng tin do ng?????i kh??m s???c kh???e ??i???n v??o)</legend>
        <div style="line-height:18px !important;"><strong>Ti???n s??? gia ????nh:</strong> C?? ai trong gia ????nh (??ng, b??, cha, m???, anh ch??? em ru???t) m???c m???t trong c??c b???nh sau:<br />T??ng huy???t ??p, B???nh tim m???ch, Ti???u ???????ng, Hen ph??? quy???n, ?????ng kinh, R???i lo???n t??m th???n, Li???t, Nh???ng b???nh</div> n???ng kh??c:<input type='text' class='nam3'><br />
 <input type='text' class='textdot'><br />
<input type='text' class='textdot'><br />

<strong>Ti???n s??? b???n th??n:</strong><br />
+ C?? ??ang u???ng thu???c ??i???u tr??? n??o hay kh??ng:<input type='text' class='nam2'><br />
+ C?? ??ang m???c ho???c ???? m???c c??c b???nh sau ????y kh??ng:
<div class="benhkhac" style="width:100%;">
	<div class="left"  style="width:48%; float:left; padding-right:5px;">
     <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
       <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>B???NH/T??NH TR???NG</strong></td>
        <td width="14%" align="center"><strong>C??</strong></td>
        <td width="14%" align="center"><strong>Kh??ng</strong></td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td>B???nh m???t/th??? l???c</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td>B???nh, tai, m??i, h???ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td>B???nh tim m???ch</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td>Cao huy???t ??p</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td>Gi??n t??nh m???ch</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td>Hen, vi??m ph??? qu???n</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td>B???nh m??u</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td>B???nh ????i th??o ???????ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td>B???nh tuy???n gi??p</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">10</td>
        <td>B???nh ti??u h??a</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td>B???nh th???n</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">12</td>
        <td>B???nh ngo??i da</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">13</td>
        <td>D??? ???ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">14</td>
        <td>B???nh truy???n nhi???m</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">15</td>
        <td>Tho??t v???</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">16</td>
        <td>B???nh sinh d???c</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">17</td>
        <td>Mang thai</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
    <div class="right"  style="width:48%; float:left;padding-left:10px;">
    <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
        <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>B???NH/T??NH TR???NG</strong></td>
        <td width="14%" align="center"><strong>C??</strong></td>
        <td width="14%" align="center"><strong>Kh??ng</strong></td>
      </tr>
      <tr>
        <td align="center">18</td>
        <td>M???t ng???</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">19</td>
        <td>Ph???u thu???t</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">20</td>
        <td>?????ng kinh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">21</td>
        <td>Ch???ng m???t/ng???t</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">22</td>
        <td>M???t ?? th???c</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">23</td>
        <td>R???i lo???n tinh th???n</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">24</td>
        <td>Tr???m c???m</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">25</td>
        <td>?? ?????nh t??? t???</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">26</td>
        <td>M???t tr?? nh???</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">27</td>
        <td>R???i lo???n th??ng b???ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">28</td>
        <td>??au ?????u n???ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">29</td>
        <td>V???n ?????ng h???n ch???</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">30</td>
        <td>??au c???t s???ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">31</td>
        <td>H??t thu???c l??, nghi???n r?????u, ma t??y</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">32</td>
        <td>R???i lo???n v???n ?????ng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">33</td>
        <td>C???t c???t</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">34</td>
        <td>G??y x????ng/tr???t kh???p</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
</div>
        
    </fieldset>
<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
  <tr>
	<td width="50%" style="padding-left:10px;" align="center"><strong>?????i t?????ng kh??m s???c kh???e<br />
    (K?? v?? ghi r?? h??? t??n)</strong></td>
    <td width="50%" align="center" style="padding-right:10px;"><strong>Ng?????i qu???n l?? h??? s??<br />
   &nbsp; </strong></td>
</tr>
</table>

</div>
</body>
</body>

</html>
 