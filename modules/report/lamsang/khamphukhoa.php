<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow: auto;
	margin-left: 30px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px Tahoma, Geneva, sans-serif;
} 
</style>
</head>
 
<body>
	<?php
	
        $data= new SQLServer;//tao lop ket noi SQL
        $params = array($_GET["id_benhnhan"]);//tao param cho store 
        $store_name="{call GD2_GetThongTinBenhNhan(?)}";//tao bien khai bao store
        $get_thongtinbenhnhan=$data->query( $store_name,$params);//Goi store
        $excute= new SQLServerResult($get_thongtinbenhnhan);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinbenhnhan= $excute->get_as_array();//Tra ve mang toan bo data lay duoc  
		 
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
        $store_name1="{call GD2_GetKhamPhuKhoaById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	   
    ?>
 <?=HeaderReportA4()?>
     <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"])?>
    
     <table border="0" cellpadding="0" cellspacing="0" style="font-size:13px; margin-left:35px; width:90%;font-family:Tahoma, Geneva, sans-serif">   
  <tr><td height="10px"></td></tr>
  <tr>
  	
  	<td width="51%" align="left" valign="top" style="font-size:14px">
           Lý do khám: <?=$thongtinluotkham[0]["LyDoKham"] ?>
      
     </td></tr>
 
  <tr><td width="51%" align="left" valign="top" style="font-size:14px">
           Tiền sử gia đình: <?=$thongtinluotkham[0]["TienSuNguoiThan"] ?>
      	
     </td></tr>
  <tr><td width="51%" align="left" valign="top" style="font-size:14px"><br />
            <i style="font-size:14px">Kinh nguyệt: <?=$thongtinluotkham[0]["KinhNguyet"] ?></i>
     </td></tr>
  <tr><td align="left" valign="top" style="font-size:14px">
           <i style="font-size:14px">Sản khoa: <?=$thongtinluotkham[0]["SanKhoa"] ?></i>
     </td></tr>
  <tr><td width="51%" align="left" valign="top" style="font-size:14px">
           <i style="font-size:14px">Tiền sử bệnh: <?=$thongtinluotkham[0]["TienSu"] ?></i>
     </td></tr>
  <tr><td align="left" valign="top" style="font-size:14px">
           <i style="font-size:14px">Phương pháp tránh thai: <?=$thongtinluotkham[0]["CachTranhThai"] ?></i>
     </td></tr>
 <tr><td width="51%" align="left" valign="top" style="font-size:14px">
           <i style="font-size:14px">Các thuốc đang dùng: <?=$thongtinluotkham[0]["ThuocDangDung"] ?></i>
     </td></tr>
  <tr><td width="51%" align="left" valign="top" width:90% style="font-size:14px">
           <i style="font-size:14px">Tiền sử dị ứng thuốc: <?=$thongtinluotkham[0]["TienSuDiUngThuoc"] ?></i>
  </td></tr>

  
         <tr>
           <td colspan="3" align="left" valign="top" style="color:#000; margin-left:20px;width:90%;padding-top:10px;" >
           	<b style="font-size:15px;">KHÁM LÂM SÀNG:</b>
                
             
           <tr>
             <td align="left" valign="top"> <br />
                 <strong>Khám thực thể:
                 </strong>
               <pre><i style="font-size:14px"><?=($thongtinluotkham[0]["KhamThucthe"]) ?></i></pre>
             </td>  
                       
           <td colspan="2" align="left" valign="top"><br />
             <strong>Triệu chứng cơ năng:</strong>
               <pre><i style="font-size:14px"><?=$thongtinluotkham[0]["TrieuChungCoNang"] ?></i></pre>
             </td>
       
         <tr>
           <td colspan="3" align="left" valign="top" style=" margin-left:20px;width:65%;padding-top:10px min-height:300px;" >
           	
           </td>
         </tr>
         <tr>
           <td colspan="3" align="left" valign="top" style="color:#000; margin-left:20px;width:65%;padding-top:10px "; ><b style="font-size:15px;">KHÁM CẬN LÂM SÀNG:</b>
  <?php 
  if(trim($thongtinluotkham[0]["NhuomSoi"],'')!=''){
	  echo '<tr><td colspan="3" align="left" valign="top" >
           <i style="font-size:14px">Soi tươi: '.$thongtinluotkham[0]["NhuomSoi"].'</i>
     	</td>
     </tr>';
  }
  ?> 
  <?php 
  if(trim($thongtinluotkham[0]["ExtField2"],'')!=''){
	  echo '<tr>
   	   <td colspan="3" align="left" valign="top" >
           <i style="font-size:14px">Nhuộm soi: '.$thongtinluotkham[0]["ExtField2"].'</i>
   	   </td>
     </tr>';
  }
  ?> 
   <?php 
  if(trim($thongtinluotkham[0]["PapSmear"],'')!=''){
	  $a="'";
	  echo '<tr>
         <td colspan="3" align="left" valign="top" >
               <i style="font-size:14px">Pap'.$a.'smear: '.$thongtinluotkham[0]["PapSmear"].'</i>
         </td>
     </tr>';
  }
  ?> 
  <?php 
  if(trim($thongtinluotkham[0]["NoiSoiCTC"],'')!=''){
	  echo '<tr>
         <td colspan="3" align="left" valign="top" >
               <i style="font-size:14px">Soi cổ tử cung: '.$thongtinluotkham[0]["NoiSoiCTC"].'</i>
         </td>
     </tr>';
  }
  ?> 
  <?php 
  if(trim($thongtinluotkham[0]["SieuAm"],'')!=''){
	  echo '<tr>
         <td colspan="3" align="left" valign="top" >
               <i style="font-size:14px">Siêu âm: '.$thongtinluotkham[0]["SieuAm"].'</i>
         </td>
     </tr>';
  }
  ?> 
   <?php 
  if(trim($thongtinluotkham[0]["Khac"],'')!=''){
	  echo '<tr>
         <td colspan="3" align="left" valign="top" >
               <i style="font-size:14px">Khác: '.$thongtinluotkham[0]["Khac"].'</i>
         </td>
     </tr>';
  }
  ?>              
     
     
     
     
     
          <td align="left"></td>
         <td align="left"></tr>
         <tr>
           <td colspan="3" align="left" valign="top" style=" margin-left:20px;width:100%;padding-top:10px;" >
           <b style=" color:#000;font-size:15px;">CHẨN ĐOÁN:</b>
                <br />
                <strong><pre><i style="font-size:14px"><?=$thongtinluotkham[0]["ChanDoan"] ?></i></pre></strong>
           </td>
         </tr>
         <tr>
         
            <td colspan="3" align="left" valign="top" style=" margin-left:20px;width:100%;padding-top:10px;" >
            <b style="color:#000;font-size:15px;">ĐỀ NGHỊ:</b>
                <br />
                <strong><pre><i style="font-size:14px"><?=$thongtinluotkham[0]["KetLuan"] ?></i></pre></strong>
			</td>
            
            
		</tr>
        </table>
             <table cellpadding="0" cellspacing="0" border="0" style="font-size:14px; width:100%;font-family:Arial, Geneva, sans-serif;padding:5px 0px">
         <tr>
             <td>&nbsp;
             </td>
             <td align="center">
              <i>
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
             </td>
         </tr>
         <tr>
     	<td width="50%" align="center">
       
        </td>
        <td width="50%" align="center">
        <b>
          BÁC SỸ SẢN PHỤ KHOA
         </b>
        </td>
     </tr>
     <tr>
     	
        <td width="50%" align="center" height="80px">
        </td>
        <td width="50%" align="center">
        
         <img id="bs_chandoan" width="100"/><br />
        
                
        </td>
     </tr>
     <tr>
        <td width="50%" align="center"><b style="color:red"></td>
        <td width="50%" align="center"> <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"];?></b></td>
     </tr>
     </table>
    </body>
    
    <script type="application/javascript">
		$(document).ready(function() {
			if(1==<?php echo($_GET["chuky"])?>)
			{
			//	load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			//	load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"nuhosinh");
			}
			
			print_preview();
		});
	</script>
</body>
</html>
 