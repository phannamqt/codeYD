<!DOCTYPE html>
<html>
  <head>
  
  <style>
  body{
	  margin:0px;
	  padding:0px;
	  overflow:auto;
  }
  html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

 thead {display: table-header-group!important;}

@page {
    size:  100mm 30mm;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
		size:  100mm 30mm;
        page-break-after: always;
    }
}
@media print
 {
   thead {display: table-header-group!important;}
 }
  </style> 
  <meta charset="utf-8">
</head>
<body> 
  <table cellpadding="0" cellspacing="0" border="1" width="100%" style="height:113px;">
 
   <tbody>
    <?php
	//$pieces = explode(",", $_GET["check"]);
	//$y=1;
	for($i=0;$i<1;$i++){
		//echo ($thongtinluotkham[$i]['ID_DonThuocCT'].';');
		/*if($_GET["toatam"]==0){
			$thongtinluotkham[$i]["SoThuocThucXuat"]=$thongtinluotkham[$i]["SoThuocThucXuat"]-$thongtinluotkham[$i]["SoLuongXuatTam"];

		}else{
			$thongtinluotkham[$i]["SoThuocThucXuat"]=$thongtinluotkham[$i]["SoLuongXuatTam"];
		}
		*/
		//if (in_array($thongtinluotkham[$i]['ID_DonThuocCT'], $pieces))
		//{
		 echo('	<tr style="margin-top:25px; font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="36.7px">
		<td style="padding-top:6px;" valign="bottom" width="20px!important" ><img style=" max-width: 25px;width:25px;" src="images/logo.jpg" /></td>
		<td  width="265px!important;" style="vertical-align:bottom;"><span style="letter-spacing: 0.5px;text-transform:uppercase;vertical-align:bottom; font-weight:bold">'. $_SESSION["com"]["TenBenhVien"].'</span></td>
			
			<td  ></td>
    </tr>
	 <tr  style="font-size:10px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="3px">
            <td colspan="2" style=" border-bottom:1px dashed #000; padding-bottom:3px;"></td>  
			<td style=" border-bottom:1px dashed #000" ></td>      
       </tr>
	');
	 echo('  <tr style="margin-right:15px; font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; font-weight:bold " height="20px">
            <td colspan="3">
                    Dùng theo hướng dẫn sử dụng in trên bao bì.
            </td>
       </tr>  
        <tr  style="font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;page-break-after:always">
            <td colspan="3" style="width:100%; padding-bottom:3px;" height="30px">
            </td>        
       </tr> ');
	   //$y++;
	   }//}
	   ?>
       
     
   </tbody>
</table>

  
    <?php 
	/*for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		echo('  <table cellpadding="0" cellspacing="0" border="1" width="100%" style="height:113px;margin:0px;">
		<tr style="font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="20px">
		<td style="width:80%" >Bn: '. $thongtinluotkham[$i]["tenbenhnhan"].', '.$thongtinluotkham[0]["tuoi"].' tuổi, ID: '.$thongtinluotkham[$i]["MaBenhNhan"].' 	</td>		
			<td style="width:20%">BS:'.$thongtinluotkham[$i]["bacsi"].'/DS:'.$thongtinluotkham[0]["duocsi"].'</td>
    </tr>
	 <tr  style="font-size:10px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="22px">
            <td colspan="2" style="width:100%; border-bottom:1px solid #000; padding-bottom:3px;">
                 Ngày cấp thuốc: '.$thongtinluotkham[$i]["MaBenhNhan"].'
            </td>        
       </tr>
       <tr style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; font-weight:bold" height="27px">
            <td style="width:80%">
                  '.($i+1).'. '.$thongtinluotkham[$i][$_GET['tenin']].'
            </td>
            <td style="width:20%">
           		 x  '.$thongtinluotkham[$i]["SoThuocThucXuat"].' '.$thongtinluotkham[$i]["TenDonViTinh"].'
            </td>
       </tr>  
        <tr  style="font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif">
            <td colspan="2" style="width:100%; padding-bottom:3px;" height="29px">
                Uống. Sáng 1 Viên, sau khi ăn
            </td>        
       </tr> 
	     </table> 
	');
		
	}*/
?>

  <script type="application/javascript">
		$(document).ready(function() {
		 	  print_preview();
		});
	</script>
    
 


</body>
</html>  
 