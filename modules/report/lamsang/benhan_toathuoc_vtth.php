<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style type="text/css" media="print">
body{
	overflow: auto;
	margin-left: 0px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:12px Arial, Helvetica, sans-serif;
 font-style:italic;
}
#background {
   position: absolute;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   z-index: -1;
   overflow: hidden;
} 
body,td,th {
	color: #000;
	font-size: 13px!important;
	font-family:Arial, Helvetica, sans-serif;
}





 thead
            {
				
                display: table-header-group!important;
            }
  table { page-break-inside:auto }
  tr    { page-break-inside:avoid; page-break-after:auto }



#watermark {
  color: #FFFF66;
  font-size: 100px;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  position: absolute;
  width: 100%;
  height: 100%;
  margin: 0;
  z-index: -1;
  left:210px;
  top:-70px;
  
}
 .clgaynghien .clhtamthan{  page-break-after: always;}
</style>
</head>
 

	<?php
	//background="images/toatam.jpg">
        $data= new SQLServer;//tao lop ket noi SQL
        $params1 = array($_GET["id_donthuoc"]);//tao param cho store 
        $store_name1="{call GD2_Toathuoc_print(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
		
		$params2 = array($_GET["id_donthuoc"]);//tao param cho store 
        $store_name2="{call GD2_toathuoc_get_toaphu(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name2,$params2);//Goi store
        $excute2= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtintoaphu= $excute2->get_as_array();//Tra ve mang toan bo data lay duoc   
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]=$thongtinluotkham[0]["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);}
		else $thongtinluotkham[0]["NgayKeDon"]='';
    ?>
    <body>
    
<?php
	$vtyt=0; 
	
	$y=1;
	$z=0;
	$kttpcn=0;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		if($thongtinluotkham[$i]['LaThuoc']==0){
			$vtyt=1; 
		}
	}

  if($vtyt==1){
	  HeaderReportInNhiet();
	  echo('
	  	 <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;">
  		 <thead  style="page-break-inside: avoid;">
		  <tr>
			<td align="left"  style="font-weight:500"  valign="bottom"><em>Họ tên: 
			  '.$thongtinluotkham[0]["tenbenhnhan"].' , 
			  '.($thongtinluotkham[0]["tuoi"]) .'
			tuổi</td></tr><tr><td align="left"  style="font-weight:500"  valign="bottom"> ID:   '.($thongtinluotkham[0]["MaBenhNhan"]).'. '.count($thongtinluotkham).'. Ngày: '.$thongtinluotkham[0]["NgayKeDon"].' </em>&nbsp&nbsp</td>
		  </tr>
		  <tr>
			<td align="left" height="21px!important" style="padding-left: 0px!important"   ><em>Chẩn đoán: 
			'. str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"]).' '.($thongtinluotkham[0]["MaICD10"]==""?"":"(".$thongtinluotkham[0]["MaICD10"].")").' </em>&nbsp&nbsp
			'.($thongtinluotkham[0]["BenhKem"]==""?"":"<br><em>Bệnh kèm:" .$thongtinluotkham[0]["BenhKem"]).'</em>
			</td>
			
			</tr>
			</thead>
		 <tbody  >');
 
	  $y=1;
	  $z=0;
	
  	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
				if($thongtinluotkham[$i]['LaThuoc']==0){
					if($thongtinluotkham[$i]["SoThuocThucXuat"]<=9){
						$thongtinluotkham[$i]["SoThuocThucXuat"]='0'.round($thongtinluotkham[$i]["SoThuocThucXuat"]);
					}else{
						$thongtinluotkham[$i]["SoThuocThucXuat"]=round($thongtinluotkham[$i]["SoThuocThucXuat"]);
					}	
				echo('<tr height="38.8px" style=" " >');			
				echo('<td style=""><div  style="display:table-cell"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></div><div  style="display:table-cell">
						<strong>x   '.$thongtinluotkham[$i]["SoThuocThucXuat"].'   '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></div>
					 </div>
					 <div style="font-size:11px!important">
					'.$thongtinluotkham[$i]["CachDung"].' 
					 </div></td>');
				$y++;
				$z++;
				echo('</tr>');			
		}
	}
	if($thongtinluotkham[0]["DaiDien"] == null){
			 echo('		 
			  <tfoot  cellpadding="0" cellspacing="0" border="0" >
				 <td  align="center" >
				
				 <div  style="display:table-cell;text-align:center;" >
				 <img id="bs_chandoan" width="100"/><br>
				 <i >'.$thongtinluotkham[0]["BsChanDoan"].'</i>
				 </div>
				 </td>
				
			  </tfoot>
			 ');
		  }else{
			   echo( ' <tfoot  cellpadding="0" cellspacing="0" border="0" >
				 <td  align="center">
				
				 <div  style="display:table-cell;text-align:center;" >	
				 	<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td style="font-weight:bold">Bs chính</td>
							<td style="font-weight:bold">BS Tham vấn</td>						
						</tr>
						<tr>
							<td style="vertical-align:bottom"> <img id="bs_BSDaiDien" width="100"/><br>
								<i >'.$thongtinluotkham[0]["DaiDien"].'</i>
					 		</td>
							<td style="vertical-align:bottom"> <img id="bs_chandoan" width="100"/><br>			
								 <i >'.$thongtinluotkham[0]["BsChanDoan"].'</i></td>
							</tr>
						
					</table>
				 </div>
				 </td>
			
			  </tfoot>');
		  }

  }
  ?>
   
 

  </tbody>

    
</table>
    <script type="application/javascript">
		$(document).ready(function() {
			<?php if($vtyt==1){ echo 'var vtyt=1;';}
				  else{echo 'var vtyt=0;';}
				
			?>
			
		//	load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"bs_chandoan");
		//	load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"bs_chandoan2");
			$("[id^=soluong]").each(function() {
				var row = $(this).attr('id');
				//alert($('#'+row).html());
				$('#'+row).html(toWords($('#'+row).html()));
			})
   
		//	$('#sotien').html(toWords((< ?=$bhyt[count($bhyt)-1]['nguoibenh']-$hotrothuoc-$GiamGiatong?>).toString())+"đồng");
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
 