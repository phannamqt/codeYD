<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style >
body{
	overflow:auto;
	margin:0;
	 font:13px arial, Geneva, sans-serif;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px arial, Geneva, sans-serif;
}

</style>
</head>
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
        if($thongtinluotkham[0]["GhiChu"]==""){
            $denghi="";
        }
        else{
            $denghi="ĐỀ NGHỊ";
        }
    ?>
<body>
<table width="100%" border="0" cellpadding=0 cellspacing=0>
  <tr>
    <td width="50%" style="vertical-align:top;text-align:left;padding:5px;">&nbsp;</td>
    <td width="50%" style="vertical-align:top;text-align:left;padding:5px;"><?=HeaderReportA4()?></td>
  </tr>
  <tr>
    <td style="vertical-align:top;text-align:left;padding:5px;height:470px;"><h3 style="text-align: center; line-height: 165px; margin-left: -50px;">KẾT QUẢ</h3>
	<pre style="margin-left: 20px;"><?=$thongtinluotkham[0]["KetLuan"] ?></pre>
	</td>
    <td style="vertical-align:top;padding:5px;"><h2 style="text-align:center;">PHIẾU ĐIỆN TIM</h2><br />
    <table cellpadding="0" cellspacing="0" border="0" style="color:#000;line-height:1.7;font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif; border-top:1px solid #000; border-bottom:1px solid #000; padding:5px 0px">         
         <tr>
            <td style=" width:45%">Họ tên: <b><?=$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"];?></b></td> 
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
    
    </td>
  </tr>
  <tr>
    <td width="50%" style="vertical-align:top;text-align:center;padding:5px 95px 5px 5px;">
		 <i>
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                    
                 </i>
                 <br />
                 <b>
                 	Bác sĩ
                 </b>
                 <br />
				 <?php
					if(isset($_GET['chuky']) && $_GET['chuky']==1 && $_SESSION["com"]["HienThiChuKy"]==1){
					?>
					 <img id="bs_chandoan" width="140"/>
					<?php 
					}else{
						echo "<br /><br /><br />";
					}
					?>
                
                 <br />                 
                 <b style="color:#000"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
	</td>
    <td width="50%" style="vertical-align:top;text-align:left;padding:5px;"> </td>
  </tr>
</table>
 <script type="application/javascript">
		$(document).ready(function() {
			<?php
			if(isset($_GET['chuky']) && $_GET['chuky']==1 && $_SESSION["com"]["HienThiChuKy"]==1){
			?>
			load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");			
			<?php 
			}
			?>

				print_preview();
		});
	</script>
</body>
</html>
