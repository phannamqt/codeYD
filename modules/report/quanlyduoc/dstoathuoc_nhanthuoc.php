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
       $params1 = array($_GET["id_donthuoc"]);//tao param cho store 
        $store_name1="{call GD2_thuoc_print(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);
	if($thongtinluotkham[0]["NgayXuat"]!=''){
		$thongtinluotkham[0]["NgayXuat"]=$thongtinluotkham[0]["NgayXuat"]->format($_SESSION["config_system"]["ngaythang"]);}
	else $thongtinluotkham[0]["NgayXuat"]=''; 

	 	
		if($thongtinluotkham[0]["thangsinh"]<72 && $thongtinluotkham[0]["thangsinh"]!=0){
			$thangtuoi=$thongtinluotkham[0]["thangsinh"];
			$thangtuoi=''.$thangtuoi.' tháng';
		}else{
			$thangtuoi=$thongtinluotkham[0]["tuoi"];
			$thangtuoi=''.$thangtuoi.' tuổi';
		}
		if($thongtinluotkham[0]["MaBenhNhan"]=='1350'){
			$thangtuoi='';
		}
    ?>
  <table cellpadding="0" cellspacing="0" border="1" width="99%" style="height:100px;margin-left:7px;">
 
 
   <tbody>
    <?php
	$pieces = explode(",", $_GET["check"]);
	$y=1;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){

		if($thongtinluotkham[$i]["NgayHetHan"]!=''){
			$thongtinluotkham[$i]["NgayHetHan"]=$thongtinluotkham[$i]["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);}
		else $thongtinluotkham[$i]["NgayHetHan"]='';
		if (in_array($thongtinluotkham[$i]['ID_DonThuocCT'], $pieces))
		{
		 echo('	<tr style=" font-size:11px; width:90%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="26.7px">
		<td style="padding-top:0px;" valign="bottom" width="20px!important" ><img style=" max-width: 19px;width:19px;" src="images/logo.jpg" /></td>
		<td  width="265px!important">'.'ID: '.$thongtinluotkham[0]["MaBenhNhan"].', Họ tên: '.$thongtinluotkham[0]["tenbenhnhan"].' ('.$thangtuoi.') </td>
			
			<td  >Bác sĩ kê: '.$thongtinluotkham[0]["bacsi"].'</td>
    </tr>
	 <tr  style="font-size:10px; width:100%;font-family:Tahoma, Geneva, sans-serif;font-style:italic" height="3px">
            <td colspan="3" style=" border-bottom:1px solid #000; padding-bottom:3px;">
                 Ngày cấp thuốc: '.$thongtinluotkham[0]["NgayXuat"].', Người xuất thuốc: '.$thongtinluotkham[0]["ngxthuoc"].'</td>      
       </tr>
	');
	 echo('  <tr style="padding-left:15px; font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; font-weight:bold " height="15px">
            <td colspan="2">
                  '.($y).') '.$thongtinluotkham[$i]['TenGoc'].'
            </td>
			
            <td >
           		 Số lượng '.round($thongtinluotkham[$i]["sltheolo"]).' '.$thongtinluotkham[$i]["TenDonViTinh"].'
            </td>
       </tr>  
	   <tr style="padding-left:15px; font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;" height="10px">
            <td colspan="3">
                  Số lô: '.$thongtinluotkham[$i]['SoLo'].', Hạn sử dụng: '.$thongtinluotkham[$i]['NgayHetHan'].'
            </td>
       </tr>  
        <tr  style="font-size:11px; width:100%;font-family:Tahoma, Geneva, sans-serif;page-break-after:always">
            <td colspan="3" style="width:100%; padding-bottom:1px;" height="25px">
                '.$thongtinluotkham[$i]["CachDung"].'
            </td>        
       </tr> ');
	   $y++;
	   }}
	   ?>
       
     
   </tbody>
</table>
 

  <script type="application/javascript">
		$(document).ready(function() {
			 var xemtruocin=<?=$_GET['xemtruocin']?>;
			  if(xemtruocin==0){
			   print_direct();
		   }else{
		 	  print_preview();
		   }
		});
	</script>
    
 


</body>
</html>  
 