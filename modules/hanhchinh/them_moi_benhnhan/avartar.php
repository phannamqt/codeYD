
<!doctype html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>WebcamJS Test Page</title>
	<style type="text/css">
		body { font-family: Helvetica, sans-serif; max-width: 940px; }
		h2, h3 { margin-top:0; }
		form { margin-top: 15px; }
		form > input { margin-right: 15px; }
		/*#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }*/
		#results { float:right; margin:20px;}
		#results > img{ border: 5px solid #379981FF }
	</style>
</head>
<body>
	<div id="results"><h3>Hình chụp sẽ được hiển tại đây.</h3></div>
	
	<!-- <h1>Thêm avatar</h1> -->
	<!-- <h3>Demonstrates simple 320x240 capture &amp; display</h3> -->
	<h3>Nhấp vào chụp hình cho đến khi lấy được ảnh phù hợp nhất</h3>
	
	<div id="my_camera"></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="modules/hanhchinh/them_moi_benhnhan/webcam.min.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 420,
			height: 340,
			image_format: 'jpeg',
			jpeg_quality: 98
		});
		Webcam.attach( '#my_camera' );
	</script>
	
	<!-- A button for taking snaps -->
	<form>
		<input type="button" id="button" value="Chụp hình" onClick="take_snapshot()">
	</form>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<img id="view_imgae" src="'+data_uri+'"/>'+
					'<br/><br/><input type="button" id="save_img" value="Sử dụng làm ảnh đại diện">';
					$('#save_img').button();
					$('#save_img').click(function(e){
						$('#sua_hoso',window.parent.document).click();
						var img = $('#view_imgae').attr('src');
						$('#hinh_benhnhan',window.parent.document).attr('src',img);
						img = img.replace(/^data:image\/[a-z]+;base64,/, "");
						$('#view_avatar',window.parent.document).val(img);
           				$('.ui-dialog-titlebar-close',window.parent.document).click();
					})
			} );
		}
		$(document).ready(function(){
			$('#button').button();
			$('body').bind('keydown', function (e) {
			if (jwerty.is('enter',e)) {
			  $("#button").trigger("click");
			}
			if (jwerty.is('ctrl+enter',e)) {
			  $("#save_img").trigger("click");
			}
  });
		});
	</script>
	
</body>
</html>
