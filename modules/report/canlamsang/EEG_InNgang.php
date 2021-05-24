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
 font:13px arial, Geneva, sans-serif !important;
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
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	   
    ?>

	<?=HeaderReportA4()?>
    <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"])?>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px";>   
     	 <tr>
         	
            <td width="30%" align="center" style="font:11px Tahoma, Geneva, sans-serif;font-weight:500">
            	<img src="./modules/report/canlamsang/eeg_new.JPG" width="420px">
            	
            </td>
            <td width="70%" style="height:360px;vertical-align:top" >
            	 <b style="font-size:15px;color:#000;">MÔ TẢ</b>
                <br />
                <pre><?=$thongtinluotkham[0]["MoTa"] ?></pre>
                <br />
                <b style="font-size:15px;color:#000">KẾT LUẬN</b>
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
            </td>
         </tr>
         
             <tr>
            
       		   <td align="center" width="50%">
            	
                </td>
               <td valign="top" align="center" height="0" width="50%">
            	 <i>
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
               </td>
             </tr>
             <tr>
            	<td align="center">
                	<?= $_GET["chucdanh2"]?>
                 	 <br />
                 </b>
                
                </td>
                <td align="center" >
                 <b>
                 	
					<b>BÁC SĨ CHẨN ĐOÁN</b>
                 </b>
                </td>
                
            </tr>   
            <tr>
            	<td align="center">
                	 <div><img id="ng_thuchien" width="159" height="100"/></div>
                 
                </td>
                <td align="center" >
                	<div><img id="bs_chandoan" width="159" height="100"/></div>
                </td>
                
      	 </tr>   
          <tr>
            	<td align="center" valign="bottom">
                	
                 <b style="color:#000"><?=$thongtinluotkham[0]["NguoiThucHien"] ?></b>
                </td>
                <td align="center" >
                	  <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
                </td>
                
       </tr> 
                   
                     
     </table>
    
    <script type="application/javascript">
		$(document).ready(function() {
			load_sign('<?=$thongtinluotkham[0]["chuky_nhanvien"]?>',"ng_thuchien");
			load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			
			/*t=setTimeout(function(){
				send_message("print_preview","");
			},500);*/
			print_preview();
		});
	</script>
</body>
</html>
 