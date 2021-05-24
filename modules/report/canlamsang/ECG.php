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
        $store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
        $get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
        $excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
        $thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
		//print_r($thongtinluotkham);	   
    ?>

    <?=HeaderReportA4()?>
     <?=ThongTinhanhChinhReportA4($thongtinluotkham[0]["ReportName"],$thongtinbenhnhan[0]["HoLotBenhNhan"]." ".$thongtinbenhnhan[0]["TenBenhNhan"],$thongtinbenhnhan[0]["Gioi"],$thongtinbenhnhan[0]["Tuoi"],$thongtinbenhnhan[0]["MaBenhNhan"],$thongtinbenhnhan[0]["DiaChi"])?>
	 
     <table cellpadding="0" cellspacing="0" border="0" style=" margin-left:auto; margin-right:auto; margin-top:400px; font-size:13px;  width:90%;font-family:Tahoma, Geneva, sans-serif;padding:5px 0px">   
         <tr>
         
            <td width="100%" valign="top" style="  font-size:15px!important; width:90%;padding-top:10px; min-height:300px;" colspan="2" >
               <b style="font-size:15px;">KẾT LUẬN</b><br />
                <pre><b style="font-size:14px"><?=$thongtinluotkham[0]["KetLuan"] ?></b></pre>
            </td>
       </tr>

             <tr>
            	<!--<td align="center">
                	<b>
                 	KỸ THUẬT VIÊN
                 </b>
                
                </td>-->
                <td width="50%"></td>
                <td align="center" >
                 <i>
                 	Ngày <?php echo $thongtinluotkham[0]["NgayGioChanDoan"]->format("d")." tháng " . $thongtinluotkham[0]["NgayGioChanDoan"]->format("m")." năm " .  $thongtinluotkham[0]["NgayGioChanDoan"]->format("Y"); ?>
                    
                 </i>
                 <br />
                 <b>
                 	NGƯỜI ĐỌC KẾT QUẢ
                 </b>
                 <br />
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
          <tr>
            	<td align="center" valign="bottom">
                </td>
                <td align="center" >
				<b style="color:red"></td>
                
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
 