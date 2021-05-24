<!DOCTYPE html>
<html>
  <head> 
  
  <style>
  body{
	  margin:0px;
	  padding:0px;
	  overflow:auto;
	  font:Arial, Helvetica, sans-serif!important;
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
#ht,#bs,#dd,#phai,#trai,#ten2,#ngay_ht{
		font-weight:bold;
		}
#phai,#chuoi,#tent,#tuoi{
	font-weight:bold;
}
#trai2,#trai3,#bs,#dd,#ngay_ht{
		font-style: italic;
		}
/*#ten2{
	display:block; 
	width:55px 
}*/
#ten2,#ht {text-transform:uppercase;}
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
	#ht{
		font-weight:bold;
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
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan_nhanxray(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		
		if($thongtinbenhnhan[0]["Tuoi"]==""){
			$thongtinbenhnhan[0]["Tuoi"]='';
		}
		/*if($thongtinbenhnhan[0]["thangsinh"]<72 && $thongtinbenhnhan[0]["thangsinh"]!=0){
			$thangtuoi=$thongtinbenhnhan[0]["thangsinh"];
			$thangtuoi=$thangtuoi.' M';
		}else{
			$thangtuoi=$thongtinbenhnhan[0]["Tuoi"];
			$thangtuoi=$thangtuoi.' Y';
		} */  
		if($thongtinbenhnhan[0]["Gioi"]=='Nam'){
			$thongtinbenhnhan[0]["Gioi"]='M';
		}else{
			$thongtinbenhnhan[0]["Gioi"]='W';

		}
    ?>
<table height="99px" cellpadding="0" cellspacing="0" border="1" width="95%" style="margin-left:8px; margin-right:18px; margin-top:5px; margin-bottom:5px">
  <tr style="font-size:16px;">
    <td > Name:
      <label id="ht" ><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?>    </label>&nbsp;
      <label id="tuoi" ><?= $thongtinbenhnhan[0]["Tuoi"]."/".$thongtinbenhnhan[0]["Gioi"];?> </label>
    <br><br>
      ID: <label id="bs" ><?=$thongtinbenhnhan[0]["MaBenhNhan"];?></label>&nbsp;&nbsp; Date:<label id="ngay_ht" >
    <?php 
		 $now = getdate(); 
    
    $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];  
	echo  $currentDate ;
	?></label></td>
  </tr>
</table>
<script type="application/javascript">
		$(document).ready(function() {
		 	print_preview();
		   
		});
	</script>
    
 


</body>
</html>  
 