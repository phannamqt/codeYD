<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	font-family:Arial, Helvetica, sans-serif !important;
	padding-left:35px;
	line-height: 20px !important;
}
.benhkhac{
	line-height: 18px !important;
}
fieldset{
	border:#000 1px solid;}
.viethoachucai{
	text-transform: capitalize;
	}
</style>
</head>
 
<body>

</body>
    <script type="application/javascript">
		$(document).ready(function() {
			<?php echo "var id_benhnhan='". $_GET['id_benhnhan']."';\n"; ?>
			<?php echo "var id_luotkham='". $_GET['id_luotkham']."';\n"; ?>
			<?php echo "var tencongty='". $_GET['tencongty']."';\n"; ?>
		//$.cookie("goikhamin_status")
		id_benhnhan_array=id_benhnhan.split(";;");
		id_luotkham_array=id_luotkham.split(";;");
			for(var i=0;i<id_luotkham_array.length-1;i++){
				var _report_data=$.ajax({url: "resource.php?module=report&view=khamsuckhoecongty&action=khamsuckhoe_cty&header=top&id_benhnhan="+id_benhnhan_array[i]+"&id_luotkham="+id_luotkham_array[i]+"&tencongty="+tencongty+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
				$("body").append(_report_data)	;
				if(i==id_luotkham_array.length-2){
					 if($.cookie("in_status")=="print_preview"){
						print_preview();
					 }else if($.cookie("in_status")=="print_direct"){
						$.cookie("in_status")="";
						print_direct();
					 }
				}
			}
		});
		
	</script>
</html>
 