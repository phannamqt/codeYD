<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0 !important;
	font-family:Arial, Helvetica, sans-serif!important;
}.frame_u78787878975f{
	width:300px!important;
}
.footer{
		margin-top:55px;
       height:4px;
	   background: #F9F9F9;
}

</style>
</head>
 
<body>
<div id="inchidinh" style="page-break-after: always;">

</div>


  <?php 
if($_GET['xetnghiem']==1){
?>
</p>
<div id="inxetnghiem" style="page-break-after: always">
  
</div>
<?php
}
?>
</body>
 <script type="application/javascript">
		$(document).ready(function() {
			<?php echo "var id_benhnhan=". $_GET['id_benhnhan'].";\n"; ?>
			<?php echo "var id_luotkham=". $_GET['id_luotkham'].";\n"; ?>
			<?php echo "var xetnghiem=". $_GET['xetnghiem'].";\n"; ?>
			<?php echo "var ac=". $_GET['ac'].";\n"; ?>
		//$.cookie("goikhamin_status")

				var _report_data=$.ajax({url: "pages.php?module=report&view=lamsang&action=phieuchidinhkham&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
				$("#inchidinh").append(_report_data);
				if(xetnghiem==1){
					var _report_data2=$.ajax({url: "pages.php?module=report&view=lamsang&action=phieuchidinhxetnghiem&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#inxetnghiem").append(_report_data2);
				}
				
				if(ac==0){
					print_preview();
				}else{
					print_direct();
					$.cookie("in_status")="";
				}
		});
		
	</script>
</html>
 