<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
    margin:0;	
/*	background:url(file://///192.168.1.200/phanmemtest/modules/report/hanhchinh/du_an_cham_soc.jpg) no-repeat center center fixed !important;
*/	
}
li{
    font-size:15px;
    font-weight:bold;
    }
#images_chandung
{
    /*padding-top:7px;*/
    }
fieldset {
    display: block;
    margin-left: 2px;
    margin-right: 2px;
    padding-top: 0.35em;
    padding-bottom: 0.625em;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 2px groove (internal value);
    height: 520px;
}
#chandung{width:188px;
}

pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
#myImg0{
    border-style:solid;
    border-color:#00C;
    }
	#tbnoidung td{
		padding-top:10px!important;
	}
</style>
</head>

<body>
    <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc


        $params1 = array($_GET["id_kham"]);//tao param cho store
        $store_name1="{call [GD2_GetCamKetById](?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);
        if($thongtinluotkham!=null){
                 $hinhchuky=$thongtinluotkham[0]["HinhChuKy"];
                $nhanvien=$thongtinluotkham[0]["HotenNV"];
                $viettat=$thongtinluotkham[0]["VietTat"];
          }
          else{
                $hinhchuky="";
                $nhanvien="";
                $viettat="";
            }
    ?>

    


        <div style=" margin-left:65px;margin-top:20px">
        <table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Arial, Helvetica, sans-serif;">
         <tr style="font-size:10px;">
             <td style=" width:35%">
                <span style="letter-spacing: 0.5px;font-weight:bold">FAMILY</span> <img src="images/logo_print.png" /> 
             </td>
             <td align="right" style=" width:35%; ">
              Địa chỉ: <?php echo $_SESSION["com"]["DiaChi"]?>
                <br />                
                SĐT: <?php echo $_SESSION["com"]["SoDT"]?>
             </td>
         </tr>
         <td colspan="2">
            <span style=" font-size:10px; letter-spacing: 0.5px;text-transform:uppercase"><?php echo $_SESSION["com"]["TenBenhVien"]?></span>
         </td>           
     </table>   
    <br>

<table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Tahoma, Geneva, sans-serif;color:#00b38b">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;color:#000!important">HƯỚNG DẪN BỆNH NHÂN<br /> TRƯỚC KHI ĐIỀU TRỊ NỘI TRÚ </span><br />
                <span style="font-weight:bold;font-size:20px;"></span>
                <div style="height:10px;">
                </div>
             </td>

       </tr>
     </table>
<table id="tbnoidung" cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Tahoma, Geneva, sans-serif; margin-top:20px!important">
     	<tr style=" padding-top:20px;">
        	<td align="left" valign="top" >1.
            </td>
        	<td>
            	 Nên làm sạch móng tay, móng chân và cột tóc gọn gàng (nếu bạn để tóc dài) trước khi vào viện.
            </td>
        </tr>
        <tr >
        	<td align="left" valign="top" style=" padding-top:20px;"> 2.</td>
            <td style=" padding-top:20px;">Phải gởi những vật dụng quý giá cho người thân.</td>
  </tr>
         <tr>
        	<td align="left" valign="top">3.</td>
            <td>Không được ăn, uốn hoặc hút thuốc lá ít nhất 06h trước mổ và phải ngủ sớm trước ngày mổ (trước 21h đêm). Nếu bạn có chỉ định phẩu&nbsp; thuật.</td>
  </tr>
         <tr>
        	<td align="left" valign="top">4.</td>
            <td>Vệ sinh răng - miệng, tắm VÀO đêm trước và BUỔI sáng ngày mổ.</td>
  </tr>
         <tr>
        	<td align="left" valign="top">5.</td>
            <td>Nhập viện CHẬM NHẤT 1-2 giờ trước mổ hoặc theo lịch hẹn của BsĐiều trị - BS PTV.</td>
  </tr>
         <tr>
        	<td align="left" valign="top">6.</td>
            <td>Bạn phải nhớ kỹ những loại thuốc và loại thức ăn đã gây ra dị ứng cho bạn để báo với Bác Sỹ điều trị.</td>
  </tr>
         <tr>
        	<td align="left" valign="top">7.</td>
            <td>Đối với bệnh nhân có thẻ bảo hiểm y tế : Phải mang theo 	BHYT còn hạn sử dụng, CMND, bằng lái xe hoặc giấy tờ tuỳ thân có hình ảnh. Nếu bạn khám ở những nơi khác hãy mang theo tất cả các giấy tờ đã khám và điều trị.</td>
  </tr>
         <tr>
         	<td align="left" valign="top">8.</td>
            <td>Bệnh viện có tặng kèm một voucher gội đầu, massage, xông hơi và mỗi ngày cấp 2 lít nước sôi cho tất cả các bệnh nhân nằm điều trị nội trú.</td>
  </tr>
         <tr>
         	<td align="left" valign="top">9.</td>
            <td>Bệnh viện có khu dịch vụ giặt ủi, những đồ lót thì nên sử dụng loại dùng một lần và có cung cấp áo, quần, drap giường, gối chăn đã hấp sấy tiệt khuẩn cho người bệnh.</td>
  </tr>
         <tr>
         	<td align="left" valign="top">10.</td>
            <td>NÊN thường xuyên có người túc trực chăm sóc người bệnh trong suốt quá trình điều trị bệnh.</td>
  </tr>
  <tr>
  	<td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr style="page-break-after:always">
  	<td  colspan="2" align="center"><strong>CHÚNG TÔI SẼ GIÚP ĐỠ BẠN XUYÊN SUỐT TRONG QUÁ TRÌNH TƯ VẤN, CHĂM SÓC VÀ ĐIỀU TRỊ TẠI BỆNH VIỆN</strong></td>
  </tr>
  
     </table>
     
       <br>
    <script type="application/javascript">
        $(document).ready(function() {
         var imageUrl='';
         imageUrl='images/du_an_cham_soc.jpg';
         
    
     
        $('html').css({"background":"url("+imageUrl+") no-repeat center center fixed"});
        $('html').css({"-webkit-background-size":"cover"});
        $('html').css({"-moz-background-size":"cover"});
        $('html').css({"-o-background-size":"cover"});
        $('html').css({"background-size":"cover"});
                load_sign('<?=$hinhchuky?>',"nv_chandoan");
           
            

          print_preview();

            
        });
    </script>
</body>
</html>
