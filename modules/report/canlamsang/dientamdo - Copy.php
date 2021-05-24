<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
<?php

if($_GET['report_name']=='ECG' || $_GET['report_name']=='DienTimDiDong' || $_GET['report_name']=='DienTimNghi'){
	echo "body{height:750px;width:1040px;}";
}else{
	echo "body{height:1040px;width:800px;}";	
}

?>


#pdf {
	<?php
	if($_GET['report_name']=='ECG' || $_GET['report_name']=='DienTimDiDong' || $_GET['report_name']=='DienTimNghi'){
		echo "height:750px;width:1200px;";
	}else{
		echo "height:1040px;width:800px;";	
	}
	
	?>
	overflow: hidden;
	margin-left:-15px;
	-ms-zoom: 0.9;
	-ms-transform-origin: 0 0;
	-moz-transform: scale(0.95);
	-moz-transform-origin: 0px 95px;
	-o-transform: scale(0.95);
	-o-transform-origin: 0px 95px;
	-webkit-transform: scale(0.95);
	-webkit-transform-origin: 0 0;
	border:none;
}

@media print {
	<?php
	if($_GET['report_name']=='ECG' || $_GET['report_name']=='DienTimDiDong' || $_GET['report_name']=='DienTimNghi'){
		echo "#pdf{border:none; width:1200px;height:750px;	margin-left:-15px;	overflow: hidden;}";
	}else{
		echo "#pdf{border:none; width:800px;height:1200px;	margin-left:-15px;	overflow: hidden;}";	
	}
	?>
   
}


</style>
</head>
 
<body>
<iframe id="pdf" src="<?=get_system_one_config("GD2_Default_Url")."file_manager/php/tmp_images/".$_GET["file"]?>"></iframe>


<script type="application/javascript">
	$(document).ready(function() {
		print_preview();	
	});
</script>
</body>
</html>