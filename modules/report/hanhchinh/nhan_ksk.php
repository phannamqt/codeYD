<!DOCTYPE html>
<html>
  <head>
  
  <style>
  body{
	  margin:0px;
	  padding:0px;
	  padding-left:2px;
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
.n-an{
	   display:none;
	}
@media print {
	body{
		padding-left:3px;
	}
    .page {
        margin: 0;
		size:  100mm 30mm;
        page-break-after: always;
    }
   thead {display: table-header-group!important;}
   .n-an{
	   display:none;
	}
 }
  </style> 
  <meta charset="utf-8">
</head>
<body> 

  <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call [HIS_GetInfoBenhNhanByIDBenhNhan](?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc    
    ?>
  <table cellpadding="0" cellspacing="0" border="1" width="100%" style="height:113px;">
 
 
   <tbody>
 	<tr style="margin-top:5px; font-size:15px; width:100%;font-family:Tahoma, Geneva, sans-serif;" height="36.7px">
		<td rowspan="3" style="margin-top:10px; padding-top:10px;" valign="top" width="100px!important" ><img style="width:100px;" src="images/tt_logo.png" /></td>
		<td style="width:240px!important;font-weight:700; text-align:center; padding-right:5px; padding-top:10px;" valign="top"><?=$thongtinbenhnhan[0]['TenCty']?></td>
    </tr>
	<tr style="margin-top:2px; font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;" height="10px">
		<td colspan="2" style="width:280px!important;font-weight:700; text-align:center; padding-right:5px;" valign="top">Khách hàng: <?=$thongtinbenhnhan[0]['HoTenBenhNhan']?></td>
    </tr>
	<tr style="margin-top:2px; font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;" height="10px">
		<td colspan="2" style="width:280px!important;font-weight:600; text-align:center; padding-right:5px;" valign="top">ID: <?=$thongtinbenhnhan[0]['MaBenhNhan']?>, Giới tính: <?=$thongtinbenhnhan[0]['Gioi']?>, Tuổi: <?=$thongtinbenhnhan[0]['Tuoi']?> </td>
    </tr>
   </tbody>
</table>

  <script type="application/javascript">
		$(document).ready(function() {

			//  if(xemtruocin==0){
			  // print_direct();
		  // }else{
		 	  print_preview();
		   //}
		});
	</script>
</body>
</html> 