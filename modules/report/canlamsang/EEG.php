<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
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
		 //print_r($thongtinbenhnhan);
		
		$params1 = array($_GET["id_kham"]);//tao param cho store 
		//echo ($_GET["id_kham"]);
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);		 
    ?>

	<?=HeaderReportA4()?>
     <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"])?>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:0px 0px"> 
     	<tr>
        	
        	<td width="75%">
            	<div style="margin-top:5px">
            	<label style=" font:11px Tahoma, Geneva, sans-serif;font-weight:bold;color:#000;">NEUROMAP(Tỷ lệ - Abs và biên dộ - Rel của các loại sóng ở từng khu vực não)</label></div>
            	<div style="height:110px" id="images_container"></div>
                <div style="margin-top:5px">
                	<label style=" font:11px Tahoma, Geneva, sans-serif;font-weight:bold;color:#000">HISTOGRAM(Biên độ - Microvol của các loại sóng ở từng khu vực não)</label></div>
                <div style="height:250px" id="images_container_2"></div>
            </td>
            <td  width="25%" align="center" style="font:11px Tahoma, Geneva, sans-serif;font-weight:500">
            	<img src="./modules/report/canlamsang/eeg.JPG" width="200px" height="220px"><br /><br />
            	<label style="color:blue;letter-spacing:0px"> Sóng Delta(0,5 - 3 Hz): Màu xanh dương</label><br /><br />
                <label style="color:green;letter-spacing:0px"> Sóng Theta(4 - 7 Hz): Màu xanh lục</label><br /><br />
                <label style="color:#F0C"> Sóng Alpha(8 - 12 Hz): Màu hồng</label><br /><br />
                <label style="color:red"> Sóng Beta(13 - 25 Hz): Màu đỏ</label>
            </td>
        </tr>	        
         <tr>
            <td valign="top" colspan="2" style="width:100%;padding-top:7px">
            	<b style="font-size:15px;color:#000">MÔ TẢ</b>
                <br />
                <pre><i><?=$thongtinluotkham[0]["MoTa"] ?></i></pre>
          		
                <b style="font-size:15px;color:#000">KẾT LUẬN</b><br />
                <pre><b><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
			</td> 
            
            
         </tr>  
       </table>
        <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:0px 0px"> 
         <tr>
         	<td width="50%" style="padding-top:0px; text-align:center" valign="top">
            		<!--<b>
                 	KỸ THUẬT VIÊN
                 </b>
                  <div class="chuky"><img id="ng_thuchien" width="120px" height="60px"/><br />
                  <b></b>
                  </div>
                 <br/>-->
            </td>
         	 <td width="50%" style="padding-top:0px; text-align:center" valign="top">
                 
             	 
                 <i>
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                 </i>
                 <br />
                 
            	 <b>
                 	Bác sĩ chẩn đoán
                 </b>
                  <div class="chuky">
                  	<img id="bs_chandoan" width="120" height="60px"/>
                    <br />
					 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"];?></b>
                  </div>
                
            </td>  
                       
         </tr>          
     </table>
    <script type="application/javascript">
		$(document).ready(function() {
			<?php 
				echo "var _links='".$_GET['links']."';";
			?>
			_split_link= _links.split(":::");
			text=["HISTOGRAM(Biên độ - Microvol của các loại sóng ở từng khu vực não)",""];
				 
				$("#images_container").append(' <img width="445px" height="110px" src="'+_split_link[0]+'"  />');
				$("#images_container_2").append(' <img width="445px" height="250px" src="'+_split_link[1]+'"  />');
			
			
			load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			
			
			print_preview();
		});
	</script>
</body>
</html>
 