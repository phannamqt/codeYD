<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
    overflow:auto;
	 font:12px arial, Geneva, sans-serif;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
}
.cot{
	width:49%;
	min-height:100px;
	float:left;
}
.medical{padding-right:5px; border-right:1px solid #ccc;}
</style>
</head>
 
<body style="padding-left:1%;">
 <div class="medical cot">
	 <?php
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["idbenhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
         
        
        $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_MedicalReportSelectByID_LuotKham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham_me= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
        //print_r($thongtinluotkham);      
        //print_r($thongtinluotkham[0]["HinhChuKy"]);
        if($thongtinluotkham_me!=null){
            $thongtinluotkham_me[0]["tennv"]=$thongtinluotkham_me[0]["tennv"];
        }
        else{
            $thongtinluotkham_me[0]["tennv"]="";
        }
    ?>

 <?=HeaderReportA4()?>
     <table cellpadding="0" cellspacing="0" border="0" style="width:100%;margin-top:0px;font-family:arial, Geneva, sans-serif;color:#000">
        <tr>
             <td style="text-align:center">
                <span style="letter-spacing: 0.5px;font-weight:bold;font-size:20px;">KẾT QUẢ KHÁM BỆNH</span>
                <br />
    
                <div style="height:10px;">
                </div>
             </td>
         
         </tr>    
     </table>
     <table cellpadding="0" cellspacing="0" border="0" style="color:#000;line-height:18px; width:100%;font-family:arial, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td style=" width:45%">Họ tên: <?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></td> 
            <td align="right"style=" width:30%">Giới tính: <?=$thongtinbenhnhan[0]["Gioi"];?>, <?=$thongtinbenhnhan[0]["Tuoi"];?> tuổi</td>
			<td style=" width:15%" align="right">ID: <?=$thongtinbenhnhan[0]["MaBenhNhan"]?></td>
            <?php 
				if($_SESSION["com"]["HienThiBarcodeBenhNhan"]==1){
			?>
				<td rowspan="1" style=" width:10%" align="right" valign="middle"><img id="barcode" src = '<?=get_system_one_config("GD2_BarCode_PatientID_Src")?><?=$thongtinbenhnhan[0]["MaBenhNhan"]?>'></td>
			<?php
				}else{
			?>
				<td rowspan="1" style=" width:0%" align="right" valign="middle"></td>
			<?php
				}
			?>
         </tr>
         <tr>
            <td colspan="5" style="width:100%">Địa chỉ: <?=$thongtinbenhnhan[0]["DiaChi"];?></td>           
         </tr>  

     </table>
      <td valign="top" style="width:65%;padding-top:10px">
                <b style="font-size:13px;color:#000">KẾT QUẢ KHÁM</b>
                <br />
                <pre><i><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo str_replace("<","&lt;",str_replace(">","&gt;",$thongtinluotkham_me[0]["MoTaBenh"]));
                            }
                
                ?></i></pre>
                
                <b style="font-size:13px;color:#000">KẾT LUẬN</b><br />
                <pre><b><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham_me[0]["KetLuan"] ;
                            }
                
                ?></b></pre>
                
                <b style="font-size:13px;color:#000">ĐỀ NGHỊ</b><br />
                <pre><b><?php if($_GET["kiemtranull"]=="1"){

                            }else{
                                echo $thongtinluotkham_me[0]["HuongDanDieuTri"] ;
                            }
                
                ?></b></pre>
            </td> 
     <table cellpadding="0" cellspacing="0" border="0" style="color:#000;width:100%;font-family:arial, Geneva, sans-serif; border-top:0px solid #000;  padding:5px 0px">   
     <tr>
		<td style="width:50%" valign="top">
		 </td>
       <td style="text-align:center; width:49%" valign="top">
     <i>
                    Ngày <?php $a=explode(" ",$_GET["ngaygio"]); $d= explode("/",$a[1]);echo $d[0].' tháng '.$d[1].' năm 20'.$d[2];?>
                 </i>
     </td>
     </tr>        
        <tr>
            <td style="width:50%" valign="top">
		 </td>
             <td style="text-align:center; width:49%" valign="top">
                  <h3 style="margin-top:0px">Bác sĩ kết luận</h3>
                 <div style="height:80px">
                 <img id="bs_chandoanMD" width="100"/></div>
                 <b style="color:#000"><?=$thongtinluotkham_me[0]["tennv"]?></b>
        </td>
                       
</tr>          
     </table>
</div>
 <div class="toathuoc cot">
	<?php
	//background="images/toatam.jpg">
        $data= new SQLServer;//tao lop ket noi SQL
        $params1 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name1="{call GD2_Toathuoc_print_IDLuotKham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		
	
		$params2 = array($_GET["id_luotkham"]);//tao param cho store 
        $store_name2="{call GD2_toathuoc_get_toaphu_IDLuotKham(?)}";//tao bien khai bao store
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
	if(count( $thongtinluotkham)>0){	
	   
		if($thongtinluotkham[0]["NgayKeDon"]!=''){
			$thongtinluotkham[0]["NgayKeDon"]=$thongtinluotkham[0]["NgayKeDon"]->format($_SESSION["config_system"]["ngaythang"]);}
	else $thongtinluotkham[0]["NgayKeDon"]='';
	
	
    ?>
    <body>
        
 <?=HeaderReportA4()?>
	
 
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:0px;padding-left:5px!important;font-family:arial, Geneva, sans-serif" >
		<thead  style="page-break-inside: avoid;">
		<tr>
		 <td colspan="2" style="text-align:center">
			<span style="letter-spacing: 0.5px;font-weight:bold;font-size:20px;">TOA THUỐC</span><br><br>
		 </td>        
		</tr>  

		
		<tr>
            <td style=" width:100%; line-height:18px;" colspan="2">Họ tên: <?=$thongtinluotkham[0]["tenbenhnhan"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?> ID: <?=$thongtinluotkham[0]["MaBenhNhan"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?> Giới tính: <?=$thongtinluotkham[0]["Gioi"];?>, <?=$thongtinluotkham[0]["Tuoi_thangsinh"];?></td>
        </tr>
		<tr>
            <td style="width:100%; line-height:18px;" colspan="2">Ngày kê đơn: <?=$thongtinluotkham[0]["NgayKeDon"]?> </td>
        </tr>
		<tr>
            <td style="width:100%; line-height:18px;" colspan="2">Chẩn đoán: <?=str_replace(array("", "\n", "chr(13)",  "\t", "\0", "\x0B"),"/",$thongtinluotkham[0]["ChanDoan"])?></td>
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
				
				echo('<td width="50%" ><div style="display:table-cell;width:150px"><strong>' .($y) .' . '.$thongtinluotkham[$i]['TenGoc'].' </strong></div><div style="display:table-cell">
						<strong>x   '.$thongtinluotkham[$i]["SoThuocThucXuat"].'   '.$thongtinluotkham[$i]["TenDonViTinh"].' </strong></div>
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
				<b>Bác sĩ kê đơn</b><br>
				 <img id="bs_chandoan" width="100"/><br>
				 <i  style="font-weight:bold">'.$thongtinluotkham[0]["BsChanDoan"].'</i>
				 </div>
				 </td>
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
	 }else{
		  if($thongtinluotkham[0]["DaiDien"] == null){
			  echo('		 
			  <tfoot  cellpadding="0" cellspacing="0" border="0" width="100%" >
				 <td  align="left" valign="bottom" colspan="2">
				 <div style="display:table-cell;width:500px;"  >
				 '.$tam.'
				 </div>
				 <div  style="display:table-cell;width:240px;text-align:center; vertical-align:bottom" >
				<b>Bác sĩ kê đơn</b><br>
				 <img id="bs_chandoan" width="100"/><br>
				 <i  style="font-weight:bold">'.$thongtinluotkham[0]["BsChanDoan"].'</i>
				 </div>
				 </td>
				 <tr><td colspan="2" align="center"><strong><i>Toa thuốc có thuốc tiêm truyền tại nhà</i></strong></td></tr>
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
				 
				 
					 
				 
				 
				 </td>
				 <tr><td colspan="2" align="center"><strong><i>Toa thuốc có thuốc tiêm truyền tại nhà</i></strong></td></tr>
			  </tfoot>
			 ');
		  }
		 
	 }
 }//	if(count( $thongtinluotkham)>0){
?>

  </tbody>

    
</table>
</div>
</body>
</html>
  <script type="application/javascript">
   $(document).ready(function() {

		load_sign('<?=$thongtinluotkham_me[0]["HinhChuKy"]?>',"bs_chandoanMD");
	<?php
		if(count( $thongtinluotkham)>0){
		?>
			load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"bs_chandoan");
	<?php }?>
		

			 
			 
		print_preview();
   });
    </script>