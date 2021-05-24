<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0 !important;
	font-family:Arial, Helvetica, sans-serif!important;
}.frame_u78787878975f{
	width:300px!important;
	}
.footer{
		margin-top:55px;
       height:4px;
	   background: #f9f9f9;
}
</style>
</head>
 
<body>
	<?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_DeNghiThanhToan_new(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		
		if($thongtinbenhnhan[0]["khoa"]=='318'||$thongtinbenhnhan[0]["khoa"]=='312'){
			$tang='2';
		}else{
			$tang='4';
		}
	
    ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img width="28" src="images/logo_den.png" /> 
             </td>
             <td style=" width:65%; text-align:right">
                <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
               
     </table>
<p align="center"><strong>VOUCHER GIỮ XE</strong><br />
<strong>Giá trị 3.000đ</strong></p>
	<p align="center"><strong>ID: <?php echo ($_GET["MaBenhNhan"])?></strong></p>
<p>Ngày in <strong><?php echo (date('d/m/y'))?></strong> </p>
<p>Sử dụng đến <strong><?php echo (date('d/m/y', strtotime("+30 days")))?></strong><br />
 <em>In bởi <?php echo ($_SESSION["user"]["fullname"])?>, <?php echo ($_SESSION["user"]["TenPhongBan"])?>.&nbsp;</em></p>
    <p align="center"><em><strong><font size="5">Quý khách vui lòng thanh  toán chênh lệch nếu gởi xe qua đêm</font></strong></em></p>
<p style="text-align:center; font-family:Arial, Helvetica, sans-serif;">&nbsp;</p>


    
       
     <div class="footer"></div>
     <script type="application/javascript">
   $(document).ready(function() {
	   var _xemtruocin=<?=$_GET['xemtruocin'];?>;
	  
		   print_preview();
	   
   });
  
   </script>
  
    
    
</body>
</html>
 