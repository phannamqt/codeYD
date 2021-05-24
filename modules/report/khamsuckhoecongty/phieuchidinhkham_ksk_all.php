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
<?php
	$data= new SQLServer;//tao lop ket noi SQL
	$params = array($_GET["id_luotkham"]);//tao param cho store 
	$store_name="{call GD2_KiemTraNhomTheoReportAndID_LuotKham(?)}";//tao bien khai bao store
	$get_thongtin=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_thongtin);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$thongtin= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
?>

<div id="inchidinh" style="page-break-after: always;">

</div>

<?php 
if($_GET['xetnghiem']==1){
?>
<div id="inxetnghiem" style="page-break-after: always">
  
</div>
<?php
}
if($thongtin[0]['DemVLTL']>=1){
?>
<div id="vatlytrilieu" style="page-break-after: always">
  
</div>
<?php
}
if($thongtin[0]['DemDD']>=1){
?>

<div id="dieuduong" style="page-break-after: always">
  
</div>
<?php
}
if($thongtin[0]['DemPTTT']>=1){
?>
<div id="phauthuatgiaithuat" style="page-break-after: always">
 
</div>
<?php
}
if($thongtin[0]['DemFM']>=1){
?>
<div id="family_planning" style="page-break-after: always">
  
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

			<?php echo "var vatlytrilieu=". $thongtin[0]['DemVLTL'].";\n"; ?>
			<?php echo "var dieuduong=". $thongtin[0]['DemDD'].";\n"; ?>
			<?php echo "var phauthuatgiaithuat=". $thongtin[0]['DemPTTT'].";\n"; ?>
			<?php echo "var family_planning=". $thongtin[0]['DemFM'].";\n"; ?>
		//$.cookie("goikhamin_status")

				var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhkham&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
				$("#inchidinh").append(_report_data);
				if(xetnghiem==1){
					var _report_data2=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhxetnghiem&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#inxetnghiem").append(_report_data2);
					}

			if(vatlytrilieu>=1){
					var _report_data=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhvltl&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#vatlytrilieu").append(_report_data);
					}
				if(dieuduong>=1){
					var _report_data2=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhdieuduong&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#dieuduong").append(_report_data2);
					}
				if(phauthuatgiaithuat>=1){
					var _report_data3=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhpt_tt&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#phauthuatgiaithuat").append(_report_data3);
				}
				if(family_planning>=1){
					var _report_data4=$.ajax({url: "resource.php?module=report&view=lamsang&action=phieuchidinhfamily_planning&header=top&xemtruocin="+window.xemtruocin+"&id_benhnhan="+id_benhnhan+"&id_luotkham="+id_luotkham+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
					$("#family_planning").append(_report_data4);
				}
				print_preview();

	
		});
		
	</script>
</html>
 