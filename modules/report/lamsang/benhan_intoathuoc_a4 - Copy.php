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

 @media print  {
      
       tfoot {
            position: fixed;
            bottom:15px!important;
        }
    }


#watermark {
  color: #FFFF66;
  font-size: 100px;
  position: absolute;  
  margin: 0;
  z-index: -1;
  left:150px;
  top:50px;
  
}
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
		if(count($thongtintoaphu)==0){
			$chuoi_toaphu='';
		}else{		
			for($i=0;$i<=count($thongtintoaphu)-1;$i++){
				if($i==0){
					$chuoi_toaphu='<br>Toa thuốc được kê với sự hội chẩn cùng '.$thongtintoaphu[$i]['VietTat'].''.$thongtintoaphu[$i]['HoLotNhanVien'].' '.$thongtintoaphu[$i]['TenNhanVien'].' - '.$thongtintoaphu[$i]['GhiChu'];
				}else{
					$chuoi_toaphu=$chuoi_toaphu.','.$thongtintoaphu[$i]['VietTat'].''.$thongtintoaphu[$i]['HoLotNhanVien'].' '.$thongtintoaphu[$i]['TenNhanVien'].' - '.$thongtintoaphu[$i]['GhiChu'];
				}
			}
		}
		
	   
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]=$thongtinluotkham[0]["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);}
	else $thongtinluotkham[0]["NgayKeDon"]='';
    ?>
    <body>
        
 <?=HeaderReportA4()?>
        
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important" >
		<thead  style="page-break-inside: avoid;">
		<tr>
		 <td colspan="2" style="text-align:center"><br /><br />
			<span style="letter-spacing: 0.5px;font-weight:bold;font-size:26px;">TOA THUỐC</span>
		 </td>        
		</tr>  

		<tr>
		<td align="left" height="40px!important" style="font-weight:500" colspan="2" valign="bottom">
		ID: <?=$thongtinluotkham[0]["MaBenhNhan"]?> <br>
		Họ tên: <?=$thongtinluotkham[0]["tenbenhnhan"]?><br>
		Giới tính: <?=$thongtinluotkham[0]["Gioi"]?> - <?=$thongtinluotkham[0]["Tuoi_thangsinh"]?><br>
		Địa chỉ: <?=$thongtinluotkham[0]["DiaChi"]?><br>
		Ngày kê đơn: <?=$thongtinluotkham[0]["NgayKeDon"]?><br>
		Chẩn đoán: <?=str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"])?>
		</td>
		</tr>
	 
		</thead>
		<tbody>

	
    
<?php
	$vtyt=0;
	$tiemtruyen=0;
	echo('<tr height="20px"><td></td><td></td></tr>'); 
	$y=1;
	$z=0;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		if($thongtinluotkham[$i]['ID_NhomThuoc']==6 && $thongtinluotkham[$i]['ID_NhomThuoc']==14 && $thongtinluotkham[$i]['ID_NhomThuoc']==3){
			$vtyt=1;
		}
		if($thongtinluotkham[$i]['PhuongThucThucHien']==1){
			$tiemtruyen=1;
		}
		if($thongtinluotkham[$i]['ID_NhomThuoc']!=6 && $thongtinluotkham[$i]['ID_NhomThuoc']!=14 && $thongtinluotkham[$i]['ID_NhomThuoc']!=3){
			if($z==0){
					echo('<tr height="38.8px" style="" >');
				}
			if($thongtinluotkham[$i]["SoThuocThucXuat"]<=9){
				$thongtinluotkham[$i]["SoThuocThucXuat"]='0'.round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}else{
				$thongtinluotkham[$i]["SoThuocThucXuat"]=round($thongtinluotkham[$i]["SoThuocThucXuat"]);
			}
				
				echo('<td width="50%" ><div style="display:table-cell;width:220px"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></div><div style="display:table-cell">
						<strong>Số lượng '.$thongtinluotkham[$i]["SoThuocThucXuat"].'   '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></div>
					 </div>
					 <div style="font-size:11px!important">
					'.$thongtinluotkham[$i]["CachDung"].' 
					 </div></td>');
				$y++;
				$z++;
				
			if($z==2){
					echo('</tr>');
					$z=0;
			}
		}


}
$tam='';
//
if($thongtinluotkham[0]["GhiChu"]==''){
	$tam='<strong style="font-size: 11px!important;"><i>'.$chuoi_toaphu.'</i></strong>';
}else{
	$tam='<strong>Lời dặn dò:</strong><pre>'.$thongtinluotkham[0]["GhiChu"].'<strong style="font-size: 11px!important;"><i>'.$chuoi_toaphu.'</i></strong></pre>';
}
 // if($vtyt==0){
	  if($tiemtruyen==0){
		  if($thongtinluotkham[0]["DaiDien"] == null){
			 echo('		 
			  <tfoot  cellpadding="0" cellspacing="0" border="0" width="100%" >
				 <td  align="left" valign="bottom" colspan="2">
				 <div style="display:table-cell;width:500px;"  >
				 '.$tam.'
				 </div>
				 <div  style="display:table-cell;width:240px;text-align:center; vertical-align:bottom" >
				 <img id="bs_chandoan" width="100"/><br>
				 <i >'.$thongtinluotkham[0]["BsChanDoan"].'</i>
				 </div>
				 </td>
				 <tr><td colspan="2" align="left"><strong><i> Vì sự an toàn dược phẩm, vui lòng không trả lại thuốc đã mua</i></strong></td></tr>
			  </tfoot>
			 ');
		  }else{
			   echo( ' <tfoot  cellpadding="0" cellspacing="0" border="0" width="100%" >
				 <td  align="left" valign="bottom" colspan="2">
				 <div style="display:table-cell;width:500px;"  >
				 '.$tam.'
				 </div>
				 <div  style="display:table-cell;width:500px;text-align:center; vertical-align:bottom" >	
				 	<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td style="font-weight:bold">BS chính</td>
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
				 <tr><td colspan="2" align="left"><strong><i> Vì sự an toàn dược phẩm, vui lòng không trả lại thuốc đã mua</i></strong></td></tr>
			  </tfoot>');
		  }
	 }else{
		  if($thongtinluotkham[0]["DaiDien"] == null){
			  echo('		 
			  <tfoot  cellpadding="0" cellspacing="0" border="0" width="100%" >
				 <td  align="left" valign="bottom" colspan="2">
				 <div style="display:table-cell;width:500px;"  >
				 '.$tam.'
				 </div>
				 <div  style="display:table-cell;width:240px;text-align:center; vertical-align:bottom" >
				 <img id="bs_chandoan" width="100"/><br>
				 <i >'.$thongtinluotkham[0]["BsChanDoan"].'</i>
				 </div>
				 </td>
				 <tr><td colspan="2" align="center"><strong><i>Toa thuốc có thuốc tiêm truyền tại nhà</i></strong></td></tr>
				 <tr><td colspan="2" align="left"><strong><i> Vì sự an toàn dược phẩm, vui lòng không trả lại thuốc đã mua</i></strong></td></tr>
			  </tfoot>
			 ');
		  }else{
			   echo('		 
				  <tfoot  cellpadding="0" cellspacing="0" border="0" width="100%" >
				 <td  align="left" valign="bottom" colspan="2">
				 <div style="display:table-cell;width:500px;"  >
				 '.$tam.'
				 </div>
				 <div  style="display:table-cell;width:500px;text-align:center; vertical-align:bottom" >
				 	<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td style="font-weight:bold">BS chính</td>
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
				 
				 
					 
				 
				 
				 </td>
				 <tr><td colspan="2" align="center"><strong><i>Toa thuốc có thuốc tiêm truyền tại nhà</i></strong></td></tr>
				 <tr><td colspan="2" align="left"><strong><i> Vì sự an toàn dược phẩm, vui lòng không trả lại thuốc đã mua</i></strong></td></tr>
			  </tfoot>
			 ');
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
			load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"bs_chandoan");
			<?php if($thongtinluotkham[0]["DaiDien"] != null){
				echo ("load_sign('".$thongtinluotkham[0]['chuky_daidien']."','bs_BSDaiDien');");
			 }
			 ?>
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
 