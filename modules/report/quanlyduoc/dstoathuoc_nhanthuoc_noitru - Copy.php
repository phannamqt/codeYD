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
<?php
        $data= new SQLServer;//tao lop ket noi SQL
       $params1 = array($_GET["id_phieulinh"]);//tao param cho store 
        $store_name1="{call GD2_nhanthuocnoitru_print(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
		
    ?>
  <table cellpadding="0" cellspacing="0" border="1" width="100%" style="height:113px;">
 
 
   <tbody>
    <?php
	//$pieces = explode(",", $_GET["check"]);
	$y=1;
 for($i=0;$i<=count($thongtinluotkham)-1;$i++){

		 echo('	<tr style="margin-top:5px; font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="36.7px">
		<td style="margin-top:5px;" valign="bottom" width="20px!important" ><img style=" max-width: 19px;width:19px;" src="images/logo_den.png" /></td>
		<td  width="265px!important">Bn: '. $thongtinluotkham[$i]["tenbenhnhan"].', '.$thongtinluotkham[$i]["tuoi"].' , ID: '.$thongtinluotkham[$i]["MaBenhNhan"].'</br>'.$thongtinluotkham[$i]["Ten_LoaiBenhAnNoiTru"].'

		</td>
			
			<td  >BS: '.$thongtinluotkham[$i]["bacsi"].'</td>
    </tr>
	 <tr  style="font-size:10px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="3px">
            <td colspan="2" style=" border-bottom:1px solid #000; padding-bottom:3px;">
                 Ngày cấp thuốc: '.$thongtinluotkham[$i]["NgayXuat"]->format($_SESSION["config_system"]["ngaythang"]).'
            </td>  
			<td style=" border-bottom:1px solid #000" >N.x.thuốc:'.$thongtinluotkham[$i]["ngxthuoc"].'</td>      
       </tr>
	');
	 echo('  <tr style="margin-right:15px; font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; font-weight:bold " height="20px">
            <td colspan="2">
                  '.($y).'. '.$thongtinluotkham[$i]['TenGoc'].'
            </td>
			
            <td >
           		 x '.round($thongtinluotkham[$i]["SoThuocThucXuat"]).' '.$thongtinluotkham[$i]["TenDonViTinh"].'
            </td>
       </tr>  
        <tr  style="font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;page-break-after:always">
            <td colspan="3" style="width:100%; padding-bottom:3px;" height="30px">
                '.$thongtinluotkham[$i]["CachDung"].'
            </td>        
       </tr> ');
	   $y++;
	  // }
	  }
	   ?>
       
     
   </tbody>
</table>

  <script type="application/javascript">
		$(document).ready(function() {
			// var xemtruocin=;
			 // if(xemtruocin==0){
			//   print_direct();
		  // }else{
		 	  print_preview();
		 //  }
		});
	</script>
    
 


</body>
</html>  
 