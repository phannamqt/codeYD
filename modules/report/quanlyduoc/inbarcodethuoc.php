<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
body{
	overflow:auto;
	margin:0;
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
	$string='<table>';
	$ID_Thuoc=explode(',',$_GET['ID_Thuoc']);
	foreach($ID_Thuoc as $tam){
		$string.='<tr style="page-break-after: always">';
		$string.='<td style="text-align:center;padding-top:10px">';
		$string.=sprintf('<img style="text-align:center;margin-left:3px;" src ="%s%09s">',get_system_one_config("GD2_BarCode_BCGcode128_Src"),$tam);	
		$string.='</td>';
		$string.='</tr>';
	}	
	$string.='</table>';
	echo $string;	    
 ?>
<script type="application/javascript">
	$(document).ready(function() {
		setTimeout(() => {
			print_preview();
		}, 
		<?php 
			if(count($ID_Thuoc)>200){
				echo '3000';
			}
			else if(count($ID_Thuoc)<50){
				echo '100';
			}else{
				echo '1000';
			}	
		?>
	
		
		);	
	});
</script>
</body>
</html>
 