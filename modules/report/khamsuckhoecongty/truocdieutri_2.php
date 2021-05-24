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
    font-size:15px;!important
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
        


        $params1 = array($_GET["id_kham"]);//tao param cho store
        $store_name1="{call [GD2_GetCamKet_idcamket](?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
       //print_r($thongtinluotkham[0]["TrongDieuTri"]);
        
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
<table cellpadding="0" cellspacing="0" border="0" style="width:95%;font-family:Tahoma, Geneva, sans-serif!important;font-size:15px; margin-top:20px!important"">
	<tr>
    	<td><pre style="font-family:Tahoma, Geneva, sans-serif!important;font-size:16px; line-height:25px; margin-top:20px!important"><?php  echo $thongtinluotkham[0]["TruocDieuTri"]?></pre></td>
    </tr>
    <tr>
    	<td align="center"><strong>CHÚNG TÔI SẼ GIÚP ĐỠ BẠN XUYÊN SUỐT TRONG QUÁ TRÌNH TƯ VẤN, CHĂM SÓC VÀ ĐIỀU TRỊ TẠI BỆNH VIỆN</strong></td>
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
               // load_sign('< ?=$hinhchuky?>',"nv_chandoan");
           
            

          print_preview();

            
        });
    </script>
</body>
</html>
