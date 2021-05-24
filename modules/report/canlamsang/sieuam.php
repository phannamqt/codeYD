<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0;
	 padding:  0px 5px;
}
pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
 font:13px arial, Geneva, sans-serif;
}
#images_container img{
	padding-bottom:2px;
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
    <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"]." - ĐT: ".$thongtinbenhnhan[0]["DienThoai1"])?>
     <table cellpadding="0" cellspacing="0" border="0" style="font-size:13px; width:100%;font-family:Tahoma, Geneva, sans-serif;padding:5px 10px">         
         <tr>
            <td valign="top" style="width:100%;padding-top:10px;padding-left:10px">
            	<b style="font-size:15px;color:<?=$_SESSION["com"]["MauChuReport"]?>">MÔ TẢ</b><br />
                <pre><?=$thongtinluotkham[0]["MoTa"] ?></pre><br />
                <b style="font-size:15px;color:<?=$_SESSION["com"]["MauChuReport"]?>">KẾT LUẬN</b><br />
                <pre><?=$thongtinluotkham[0]["KetLuan"] ?></pre><br />
                <?php
                    if($thongtinluotkham[0]["GhiChu"]!=""){
				?>
                    <b style='font-size:15px;color:<?=$_SESSION["com"]["MauChuReport"]?>'>ĐỀ NGHỊ</b><br />
					<pre><?=$thongtinluotkham[0]["GhiChu"]?></pre>
					<?php
					}
                ?>
			</td>
			<td style="width:100%;padding-top:10px; text-align:center" valign="top">
                 <div id="images_container"></div>
            </td> 
         </tr>
		 
		<tr>
			 <td style="width:65%;padding-top:10px; text-align:center" valign="top">
			 
			 </td>
             <td style="width:35%;padding-top:10px; text-align:center" valign="top">
                 <i>
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                    
                 </i>
                 <br />
                 <b>
                 	NGƯỜI THỰC HIỆN
                 </b>
                 <br />   <br />   <br />
				 <?php
					if(isset($_GET['chuky']) && $_GET['chuky']==1 && $_SESSION["com"]["HienThiChuKy"]==1){
					?>
					 <img id="bs_chandoan" width="159"/>
					<?php 
					}else{
						echo "<br /><br /><br />";
					}
					?>
                
                 <br />                 
                 <b style="color:red"><?=$thongtinluotkham[0]["BsChanDoan"] ?></b>
            </td> 
         </tr>   
     </table>
    
    <script type="application/javascript">
		$(document).ready(function() {
			<?php
			if(isset($_GET['chuky']) && $_GET['chuky']==1 && $_SESSION["com"]["HienThiChuKy"]==1){
			?>
			//load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");			
			<?php 
			}
				echo "var _links='".$_GET['links']."';";
			?>
			
			_split_link= _links.split(":::");
			for(i=0;i<=_split_link.length-2;i++){			 
				$("#images_container").append(' <img id="myImg'+i+'" width="230px" height="180px" src="'+_split_link[i]+'"  /><div style="height:7px;float:left"></div> ');
			}
				print_preview();
		});
	</script>
</body>
</html>
 