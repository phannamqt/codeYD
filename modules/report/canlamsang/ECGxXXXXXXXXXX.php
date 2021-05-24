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
body {
	/*background-image:url("./modules/report/canlamsang/bckgrnd.jpg");
	background-size:1123px 794px;
	background-repeat:no-repeat;
	overflow:scroll;*/
	width:1123px;
	height:794px;
}
</style>
</head>
 
<body style="height:500px">
	
		<?php
			$data= new SQLServer;//tao lop ket noi SQL
			$params1 = array($_GET['id_kham']);//tao param cho store 
			$store_name1="{call GD2_GetKhamById_Kham(?)}";//tao bien khai bao store
			$get_thongtinluotkham=$data->query( $store_name1,$params1);//Goi store
			$excute1= new SQLServerResult($get_thongtinluotkham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$thongtinluotkham= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
			//print_r($thongtinluotkham);	
			
			$params1 = array($_GET['id_kham']);//tao param cho store 
			$store_name1="{call GD2_rpt_get_code15_ketquacls_by_idkham(?)}";//tao bien khai bao store
			$get_code15=$data->query( $store_name1,$params1);//Goi store
			$excute1= new SQLServerResult($get_code15);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$code15= $excute1->get_as_array();//Tra ve mang toan bo data lay duoc
			//print_r($code15);
		?>
		<table  style="background:transparent">
        	<tr>
            	<td>
               	  <pre style="background:transparent; font-size:15px!important; font-style:italic;vertical-align:top;border:NONE;margin-left:380px;margin-top:125px;width:352px;" READONLY><?=  $thongtinluotkham[0]["KetLuan"]."\n"?><b><?=$code15[0]["ExtField2"]?></b>
				  </pre>
                
                </td>
                
                <td valign="top" rowspan="2">
                	 <div style="margin-top:4px">
                       <?=HeaderReportA4()?>	</div>
                      
                      <div align="center">
                      	<div style="height:55px">
                        	 <img  class="chuky" id="bs_chandoan" width="100" height="60"/>
                        </div>
                		<label style="font:15px Tahoma, Geneva, sans-serif; font-style:italic;font-weight:bold;color:red"><?=  $thongtinluotkham[0]["BsChanDoan"]?></label><br/>
						<label style="font:15px Tahoma, Geneva, sans-serif; font-style:italic"><?=  $thongtinluotkham[0]["NguoiThucHien"]?></label>
                    </div>
				</td>
                
            </tr>
            <tr>
            	<td valign="top"></td>
            	 
            </tr>
        </table>
        <script>
        $(document).ready(function() {
						
			//if($.cookie("in_status")=="print_preview")
			if(1==<?php echo($_GET["chuky"])?>)
			{
				load_sign('<?=$thongtinluotkham[0]["chuky_bacsy"]?>',"bs_chandoan");
			}
			print_preview();
		});
	</script>
</body>
</html>
 