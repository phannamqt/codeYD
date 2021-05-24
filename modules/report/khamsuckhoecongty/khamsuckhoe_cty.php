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
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
      //  $params2 = array($_GET["id_luotkham"]);//tao param cho store 
       // $store_name2="{call GD2_GetTenCongTyByID_LuotKham(?)}";//tao bien khai bao store
       // $get_tencty=$data->query( $store_name2,$params2);//Goi store
       // $excute2= new SQLServerResult($get_tencty);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
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
         CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
         Độc lập - Tự do - Hạnh phúc
        </td>
     </tr>
     </table>
     <h2 align="center">PHIẾU KHÁM SỨC KHỎE ĐỊNH KỲ</h2>
     <p align="center" style="margin-top: -18px;font-size:12px; font-weight:bold;">(LÀM TẠI <span style="text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>) </p>
    <table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;font-size:13px;">
        <tr>
        <td width="10%">Họ và tên:</td>
        <td width="30%" class="viethoachucai"><strong>
        <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
        </strong></td>
        <td width="20%">Giới tính: <strong>
        <?=$thongtinbenhnhan[0]['Gioi'];?>
        </strong></td>
        <td width="20%">Năm sinh: <strong>
        <?=$thongtinbenhnhan[0]['NamSinh'];?>
        </strong></td>
        <td width="20%">ID: <strong>
        <?=$thongtinbenhnhan[0]['MaBenhNhan'];?>
        </strong></td>
      </tr>
      <tr>
        <td>Địa chỉ:</td>
        <td colspan="4"><strong>
        <?=$thongtinbenhnhan[0]['DiaChi'];?>
        </strong></td>
      </tr>
    </table>
    <fieldset style="width:93%; font-size:13px; padding-left:15px;">
    	<legend align="center">(Thông tin do người quản lý hồ sơ điền vào)</legend>
        <table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
  <tr>
	<td width="20%">
    Ngành Nghề công tác:
    </td>
    <td width="80%"><input type='text' class='textdot'></td>
</tr>
 <tr>
	<td>
    Tình trạng hôn nhân:
    </td>
    <td><input type='text' class='tthn'> Đã có: <input type='text' class='nam'>con</td>
</tr>
<tr>
	<td>
    Thời gian công tác: 
    </td>
    <td ><input type='text' class='nam'> năm
    </td>
</tr>
</table>
       
    </fieldset>
    <fieldset style="width:93%; font-size:13px;padding-left:15px;">
    	<legend align="center">(Thông tin do người khám sức khỏe điền vào)</legend>
        <div style="line-height:18px !important;"><strong>Tiền sử gia đình:</strong> Có ai trong gia đình (ông, bà, cha, mẹ, anh chị em ruột) mắc một trong các bệnh sau:<br />Tăng huyết áp, Bệnh tim mạch, Tiểu đường, Hen phế quyển, Động kinh, Rối loạn tâm thần, Liệt, Những bệnh</div> nặng khác:<input type='text' class='nam3'><br />
 <input type='text' class='textdot'><br />
<input type='text' class='textdot'><br />

<strong>Tiền sử bản thân:</strong><br />
+ Có đang uống thuốc điều trị nào hay không:<input type='text' class='nam2'><br />
+ Có đang mắc hoặc đã mắc các bệnh sau đây không:
<div class="benhkhac" style="width:100%;">
	<div class="left"  style="width:48%; float:left; padding-right:5px;">
     <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
       <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>BỆNH/TÌNH TRẠNG</strong></td>
        <td width="14%" align="center"><strong>Có</strong></td>
        <td width="14%" align="center"><strong>Không</strong></td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td>Bệnh mắt/thị lực</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td>Bệnh, tai, mũi, họng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td>Bệnh tim mạch</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td>Cao huyết áp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td>Giãn tĩnh mạch</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td>Hen, viêm phế quản</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td>Bệnh máu</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td>Bệnh đái tháo đường</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td>Bệnh tuyến giáp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">10</td>
        <td>Bệnh tiêu hóa</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td>Bệnh thận</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">12</td>
        <td>Bệnh ngoài da</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">13</td>
        <td>Dị ứng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">14</td>
        <td>Bệnh truyền nhiễm</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">15</td>
        <td>Thoát vị</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">16</td>
        <td>Bệnh sinh dục</td>
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
        <td width="67%" align="center"><strong>BỆNH/TÌNH TRẠNG</strong></td>
        <td width="14%" align="center"><strong>Có</strong></td>
        <td width="14%" align="center"><strong>Không</strong></td>
      </tr>
      <tr>
        <td align="center">18</td>
        <td>Mất ngủ</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">19</td>
        <td>Phẫu thuật</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">20</td>
        <td>Động kinh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">21</td>
        <td>Chống mặt/ngất</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">22</td>
        <td>Mất ý thức</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">23</td>
        <td>Rối loạn tinh thần</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">24</td>
        <td>Trầm cảm</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">25</td>
        <td>Ý định tự tử</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">26</td>
        <td>Mất trí nhớ</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">27</td>
        <td>Rối loạn thăng bằng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">28</td>
        <td>Đau đầu nặng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">29</td>
        <td>Vận động hạn chế</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">30</td>
        <td>Đau cột sống</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">31</td>
        <td>Hút thuốc lá, nghiện rượu, ma túy</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">32</td>
        <td>Rối loạn vận động</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">33</td>
        <td>Cất cụt</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">34</td>
        <td>Gãy xương/trật khớp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
</div>
        
    </fieldset>
<table  cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:arial, Geneva, sans-serif;padding-left:5px; font-size:13px;">
  <tr>
	<td width="50%" style="padding-left:10px;" align="center"><strong>Đối tượng khám sức khỏe<br />
    (Ký và ghi rõ họ tên)</strong></td>
    <td width="50%" align="center" style="padding-right:10px;"><strong>Người quản lý hồ sơ<br />
   &nbsp; </strong></td>
</tr>
</table>

</div>
</body>
</body>

</html>
 