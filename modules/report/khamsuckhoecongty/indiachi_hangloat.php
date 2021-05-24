<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style >
  body{
	  margin:0px;
	  padding:0px;
	  overflow:auto;
  }
  html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

 thead {display: table-header-group!important;}

@page {
    size:  100mm 30mm;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
		size:  100mm 30mm;
        page-break-after: always;
    }
}
@media print
 {
   thead {display: table-header-group!important;}
 }
</style>
</head>
 
<body>
<div id="diachi"  style="page-break-after: always;">

</div>
</body>
    <script type="application/javascript">
		$(document).ready(function() {
			<?php echo "var id_benhnhan='". $_GET['id_benhnhan']."';\n"; ?>
			<?php echo "var id_luotkham='". $_GET['id_luotkham']."';\n"; ?>
			<?php echo "var tencongty='". $_GET['tencongty']."';\n"; ?>
		//$.cookie("goikhamin_status")
		id_benhnhan_array=id_benhnhan.split(";;");
		id_luotkham_array=id_luotkham.split(";;");
			for(var i=id_luotkham_array.length-2;i>=0;i--){
				var _report_data=$.ajax({url: "resource.php?module=report&view=khamsuckhoecongty&action=ds_diachi&header=top&id_benhnhan="+id_benhnhan_array[i]+"&id_luotkham="+id_luotkham_array[i]+"&tencongty="+tencongty+"&type=&id_form=10", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;
				$("#diachi").append(_report_data)	;
				if(i==id_luotkham_array.length-2){
					 if($.cookie("in_status")=="print_preview"){
						print_preview();
					// }else if($.cookie("in_status")=="print_direct"){
					//	print_direct();
					}
				}
			}
		});
		
	</script>
</html>
 