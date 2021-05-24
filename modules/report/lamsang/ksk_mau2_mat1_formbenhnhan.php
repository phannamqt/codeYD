<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
div.bg-doted{
	margin-top:2px !important;
	background:url(images/dotted.png) repeat;
	line-height:20px;
	
}
</style>
</head>
<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
		if($thongtinbenhnhan[0]['NgayThangNamSinh']){
			$thongtinbenhnhan[0]['NgayThangNamSinh']=$thongtinbenhnhan[0]['NgayThangNamSinh']->format('d/m/Y');
		}else{
			$thongtinbenhnhan[0]['NgayThangNamSinh']='';	
		}
    ?>
<body>
<table width="100%">
  <tr>
    <td style="vertical-align:top; text-align:center;"><?php echo $_SESSION["com"]["TenBenhVien"]?><br />
    <?php echo $_SESSION["com"]["DiaChi"]?><br />
    -------*******-------
    </td>
    <td style="text-align:center;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br />
    Độc Lập - Tự Do - Hạnh Phúc<br />
    **************
    </td>
  </tr>
</table>
<br /><br />
<div style="text-align:center;">
	<span style="font-size:20px; line-height:35px; font-weight:bold;">GIẤY CHỨNG NHẬN SỨC KHỎE CÁ NHÂN</span><br />

</div>
<br />
<table width="100%">
  <tr>
    <td width="25%">
    <div class="anh" style="text-align:center; border:solid 1px #000; height:100px; width:80px; margin-left:60px;">
   <br /><br /> Ảnh <br />
    4x6
    </div>
    </td>
   <td width="75%">
   <div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Họ và tên: </div> <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
      <div style="position: absolute; left: 380px; top: 0px;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Giới tính: </div> <?=$thongtinbenhnhan[0]['Gioi'];?></div>
    </div>
     <div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Ngày tháng năm sinh: </div> <?=$thongtinbenhnhan[0]['NgayThangNamSinh'];?>
      <div style="position: absolute; left: 380px; top: 0px;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">ID: </div> <?=$thongtinbenhnhan[0]['MaBenhNhan'];?></div>
    </div>
    <div class="bg-doted" style="height:22px; width:98%;float: left;position:relative;">
   		<div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block; font-weight:bold">Địa chỉ: </div> <?=$thongtinbenhnhan[0]['DiaChi'];?>
	</div>
     <div class="bg-doted" style="height:22px; width:98%;float: left;position:relative;">
   		<div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block; font-weight:bold">Ngành nghề công tác: </div>
	</div>
    <div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Tình trạng hôn nhân:</div>
      <div style="position: absolute; left: 380px; top: 0px;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Con cái:</div>
    </div>
    </div>
	<div class="bg-doted" style="height:22px; width:98%; float:left; position:relative">
      <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; font-weight:bold">Thời gian công tác:</div>
      <div style="position: absolute; left: 380px; top: 0px; width: 100%;">
    <div style="height:20px; margin-left:-6px; padding-left:5px; background:#fff; display: inline-block; width:100%">năm</div>
    </div>
    </div>
	</td>
  </tr>
</table>
<br />
<strong>- Tiền sử gia đình:</strong> Có ai trong gia đình (ông bà, cha mẹ, anh chị em ruột) mắc một trong các bệnh như sau:
<div class="bg-doted" style="height:60px; width:98%;position:relative;">
           <div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block;">Tăng huyết áp, Bệnh tim mạch, Tiểu đường, Hen phế quản, Động kinh, Rối loạn tâm thần, Bệnh truyền nhiễm...: </div>
         </div>
<strong>- Tiền sử bản thân:</strong><br />

<div class="bg-doted" style="height:22px; width:98%;position:relative;">
   <div style="height:20px; margin-left:-2px; padding-left:2px; background:#fff;display: inline-block;">+ Tiền sử thai sản (dành cho phụ nữ): </div>
</div>
+ Bản thân đã từng mắc một trong các bệnh sau đây:<br />
<div class="benhkhac" style="width:100%;">
	<div class="left"  style="width:48%; float:left; padding-right:15px;">
     <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
       <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>BỆNH TẬT</strong></td>
        <td width="14%" align="center"><strong>Có</strong></td>
        <td width="14%" align="center"><strong>Không</strong></td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td>Bệnh mắt/ Thị lực</td>
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
        <td>Răng hàm mặt</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td>Bệnh ngoài da</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td>Cao huyết áp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td>Hen, viêm phế quản/ Hô hấp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td>Bệnh đái tháo đường</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td>Bệnh tuyến giáp/ Nội tiết</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td>Bệnh tiêu hóa</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">10</td>
        <td>Bệnh thận</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td>Bệnh tim mạch</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">12</td>
        <td>Bệnh truyền nhiễm</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">13</td>
        <td>Bệnh sinh dục</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
    <div class="right"  style="width:48%; padding-left:10px;">
    <table cellpadding="0" cellspacing="0" border="1" style="width:100%;font-family:arial, Geneva, sans-serif; font-size:13px;">
      <tr>
        <td width="5%" align="center"><strong>STT</strong></td>
        <td width="67%" align="center"><strong>BỆNH TẬT</strong></td>
        <td width="14%" align="center"><strong>Có</strong></td>
        <td width="14%" align="center"><strong>Không</strong></td>
      </tr>
      <tr>
        <td align="center">14</td>
        <td>Động kinh/ Rối loạn thần kinh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">15</td>
        <td>Chống mặt/ ngất</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">16</td>
        <td>Trầm cảm</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">17</td>
        <td>Mất trí nhớ</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">18</td>
        <td>Đau đầu nặng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">19</td>
        <td>Mất ngủ</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">20</td>
        <td>Đau cột sống</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">21</td>
        <td>Rối loạn vận động</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">22</td>
        <td>Gãy xương/ Trật khớp</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">23</td>
        <td>Cắt cụt/ Phẫu thuật</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">24</td>
        <td>Thoái vị</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">25</td>
        <td>Bệnh dị ứng</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">26</td>
        <td>Nghiện rượu, thuốc lá, ma túy</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
</div><!-- end benhkhac-->
<br />
 <strong>- Tình trang sức khỏe hiện tại, thuốc đang được điều trị:
 </strong>
 </div>
 <div class="bg-doted" style="height:22px; width:98%;position:relative;">
  </div>
<br />
<table width="100%">
  <tr>
    <td width="50%">Tôi xin cam đoan những điều khai trên là hoàn toàn đúng với tình trạng sức khỏe của tôi.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">&nbsp;</td>
    <td style="text-align:center;">Đà Nẵng, ngày <?=date('d');?> tháng <?=date('m');?>  năm <?=date('Y');?><strong><br />
    Người khám sức khỏe</strong><br />
    (Ký và ghi rõ họ tên)
    <br /><br /><br /><br /><br /><strong>
    <?=$thongtinbenhnhan[0]['HoLotBenhNhan'].' '.$thongtinbenhnhan[0]['TenBenhNhan'] ?>
    </strong>
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
