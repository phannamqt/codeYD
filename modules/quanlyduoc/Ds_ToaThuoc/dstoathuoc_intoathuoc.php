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

 @media print {


       tfoot {
            position: fixed;
            bottom:15px!important;
        }
    }

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
		
		
		//print_r($thongtinluotkham);
		//print_r($thongtinluotkham[0]["NgayKeDon"]);	   
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]=$thongtinluotkham[0]["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);}
	else $thongtinluotkham[0]["NgayKeDon"]='';
	
	if($thongtinluotkham[0]["thangsinh"]<72 && $thongtinluotkham[0]["thangsinh"]!=0 ){
			$thangtuoi=$thongtinluotkham[0]["thangsinh"];
			$thangtuoi=$thangtuoi.' tháng';
		}else{
			$thangtuoi=$thongtinluotkham[0]["tuoi"];
			$thangtuoi=$thangtuoi.' tuổi';
		}
	
    ?>
    <body >
    <?php if($thongtinluotkham[0]["ID_TrangThai"]!='Xong'){
		echo '<div id="watermark"><p>Toa tạm</p></div>';
		} ?> 
        
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="height:208px;margin:0px;padding-left:67px!important" >
   <thead  style="page-break-inside: avoid;">

   
   <?php echo('
    
	

  <tr>
    <td align="right" height="90px!important" style="font-weight:500" colspan="2" valign="bottom"><em>Bn: 
      '.$thongtinluotkham[0]["tenbenhnhan"].' , 
      '.$thangtuoi .'
     ID:   '.($thongtinluotkham[0]["MaBenhNhan"]).', '.count($thongtinluotkham).' Ngày: '.$thongtinluotkham[0]["NgayKeDon"].' </em>&nbsp&nbsp</td>
  </tr>
  <tr>
    <td align="right" height="21px!important" style="max-width: 548px" colspan="2" ><em>CĐ: 
    '. str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"]) .' </em>&nbsp&nbsp</td>
	
    </tr>
	');?></thead>
 <tbody style="max-height:270px;" >

	
    
<?php
	$vtyt=0;
	$tiemtruyen=0;
	echo('<tr height="10px"><td></td><td></td></tr>');
	$y=1;
	$z=0;
	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		if($thongtinluotkham[$i]['ExtField2']==1){
			$vtyt=1;
		}
		if($thongtinluotkham[$i]['PhuongThucThucHien']==1){
			$tiemtruyen=1;
		}
		if($thongtinluotkham[$i]['ExtField2']==0){
			if($z==0){
					echo('<tr height="38.8px" style="" >');
				}
			
				
				echo('<td width="50%" ><div style="display:table-cell;width:280px"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></div><div style="display:table-cell">
						<strong>x   '.round($thongtinluotkham[$i]["SoThuocDeNghiTheoDon"]).'   '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></div>
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
  if($vtyt==0){
	  if($tiemtruyen==0){
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
		  </tfoot>
		 ');
	 }else{
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
		  </tfoot>
		 ');
		 
	 }

  }else{
	  if($tiemtruyen==0){
		   echo('
			  <tr  cellpadding="0" cellspacing="0" border="0" width="100%" >
			  <td  align="left" valign="bottom" colspan="2">
			  <div style="display:table-cell;width:500px;"  >
			  '.$tam.'
			  </div>
			  <div  style="display:table-cell;width:240px;text-align:center; vertical-align:bottom" >
			  <img id="bs_chandoan" width="100"/><br>
			  <i >'.$thongtinluotkham[0]["BsChanDoan"].'</i>
			  </div>
			  </td>
			  </tr>
		 ');
	  }else{
		  echo('
			  <tr  cellpadding="0" cellspacing="0" border="0" width="100%" >
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
			  </tr>
		 ');		  
	  }
  }
  if($vtyt==1){
	  $y=1;
	$z=0;
	   echo('<tr height="10px"><td></td><td></td><tr><tr   width="100%" style=""><td style="border-top:solid 1px #000000 !important;padding-top:10px;font-size: 12px!important;" align="center" colspan="2"><strong>(Thực phẩm chức năng - Thuốc đông y -Vật tư y tế dùng phối hợp)<strong></td></tr>');

  	for($i=0;$i<=count($thongtinluotkham)-1;$i++){
		
		if($thongtinluotkham[$i]['ExtField2']==1){
			if($z==0){
					echo('<tr height="38.8px" style=" " >');
				}
				echo('<td width="50%" style=""><div  style="display:table-cell;width:280px"><strong>' .($y) .' . '.$thongtinluotkham[$i][$_GET['tenin']].' </strong></div><div  style="display:table-cell">
						<strong>x   '.round($thongtinluotkham[$i]["SoThuocThucXuat"]).'   '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></div>
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
			
		
		
		print_preview();
			
		});
	</script>
</body>
</html>
 