<!--Người viết: Trần Trương Chính-->
 
 
<style>
body{
	overflow:hidden;
}
#file{
 display:none;
}
.progress {
    background-color: #CCCCCC;
    display: inline-block;
    height: 29px;
    margin-bottom: 7px;
    width: 300px;
}
.progress div {
	display:inline-block;    
}
.loader {
	background: none repeat scroll 0 0 #90C018;
    font-size: 10px;
    height:inherit;
    width: 0px;
	/*background: none repeat scroll 0 0 #90C018;
    font-size: 10px;
    height:inherit;
    width: 0px;
	background: -moz-linear-gradient(#ffffff, #90C018); 
    background: -ms-linear-gradient(#ffffff, #90C018); 
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #90C018)); 
    background: -webkit-linear-gradient(#ffffff, #90C018); 
    background: -o-linear-gradient(#ffffff, #90C018); 
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#90C018'); 
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#90C018')"; 
    background: linear-gradient(#ffffff, #90C018);
    color:#000; 
    overflow:hidden;*/
}
#text{
	display:block;
	position:absolute;
	 width:inherit;
	 text-align:center;
	 height:inherit;
	 margin-top:7px;
	 text-shadow:1px 1px 1px #FFFFFF, 0 0 0 #000000, 1px 1px 1px #FFFFFF;	
}
.upload_button{
	margin-top:-6px;
	padding:0px 0px 5px 5px;
	height:20px;
}
</style>
<body>
<!--<div id="progress"></div>-->
<div class="progress">
    <div id="text">
    	<div id="dungluong"></div>
        <div id="tocdo"></div>
        <div id="thoigian"></div>
        <a style="margin-left: 0px; margin-bottom: 1px; visibility: visible;" class="upload_button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="upload1" href="#" role="button" aria-disabled="false"><span class="ui-button-text">Chọn file<span class="ui-icon ui-icon-plus"></span></span></a>
    	<a style="margin-left: 0px; margin-bottom: 1px; visibility: visible; " class="upload_button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="valuesubmit" href="#" role="button" aria-disabled="false"><span class="ui-button-text"> Lưu<span class="ui-icon ui-icon-disk"></span></span></a>
    </div>
    <div class="loader"></div>
</div>  
<?php
	$accept="";
	if(isset($_GET["accept"])){
		$accept='accept="'.$_GET["accept"].'"';
	};
?>
 <form enctype="multipart/form-data" id="upload_form">  
	<input id="file" type="file" name="valueimage[]"  <?php if($_GET["multi"]=="true") echo "multiple"?> $accept>
	<input type="hidden" name="action" id="action" value="<?=$_GET["action_upload"]?>">
    <input type="hidden" name="default_name" id="default_name" value="<?=$_GET["default_name"]?>">  
    <input type="hidden" name="cmd" value="upload">
    <input type="hidden" name="target" value="f1_XA">    
    <input type="hidden" name="answer" value="42">  
    <input type="hidden" name="tenthumuc" id="tenthumuc" value="<?=$_GET["tenthumuc"]?>">
    <input type="hidden" name="total_images" id="total_images" value="1">     
    <input type="hidden" name="profile" id="profile" value="<?=$_GET["profile"]?>">
    <input type="hidden" name="multi" id="multi" value="<?=$_GET["multi"]?>"> 
 </form>
</div>
<span style="position: relative; float: left; margin-top: 5px; font: 12px Lucida Grande,Helvetica,Arial,Verdana,sans-serif;">

 
</span>
</form>
</div>
</div>
</body>
</html>
<script type="text/javascript">
var last_x=0;
$(document).ready(function() {
	/*var down = false;
	 
	 	$("body").mousedown(function(e) {
            down = true;
        });
		$("body").mouseup(function(e) {
            down = false;
        });
			
		 
		$("body").mousemove(function(e) {
			if(down == true){
				if(last_x==0){
					last_x=e.pageX - this.offsetLeft;
				}		 
				var x = e.pageX - this.offsetLeft-last_x;
				var y = e.pageY - this.offsetTop;
				last_x=e.pageX - this.offsetLeft;
				parent.postMessage('mouse_move;'+e.pageX , '*');
			}
		})
	 */
	 $('#valuesubmit').css("visibility","hidden"); 	  
	 $('#upload1').click(function(event) {
		window.addEventListener('message', receiver, false); 
		 check_folder_exist();	 	 
		$('#file').click();		
	 })
	 $('#upload1').click();
	$("#file").change(function(e) {		 
	   imagesSelected(this.files);  
	});	
    $('#valuesubmit').click(function(event) {		
		if(window.file_type==false){
			parent.postMessage('hide_close;'+window.upload_elem , '*');	
			update_upload();
			//check_loader();
			$('#valuesubmit,#upload1').hide();
			 var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page
			_status=$.ajax({
				url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800',  //Server script to process data
				type: 'POST',
				 //This is just looks like bloat
				xhr: function() {  // Custom XMLHttpRequest
					var myXhr = $.ajaxSettings.xhr();
					if(myXhr.upload){ // Check if upload property exists
						myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload						
					}
					myXhr.addEventListener('load', uploadFinish, false);
					myXhr.addEventListener('abort', uploadAbort, false);

					return myXhr;
				}, 
				// Form data
				// enctype: 'multipart/form-data',  <-- don't do this       
				data: formData,
				//Options to tell jQuery not to process data or worry about content-type.
				//cache: false, post requests aren't cached
				contentType: false,
				processData: false,
				async: true, success: function(data, result) { 
					$( ".loader").css("width","100%");

					
										 
				 }}).responseText;			
			}
    });
   
});
function uploadAbort(e) { // upload abort
  clearInterval(timer);	
}
function callback_upload(){

		var name=$("#default_name").val().split("_");
		var id_kham=name[2];
		
		 dataToSend ='{';
		 dataToSend += '"id_kham":"' + id_kham + '"';
		  dataToSend += "," + '"search_string":"' +$("#default_name").val()+'.'+duoi_file[1]+ '"';
		 dataToSend +='}'; 
		  dataToSend = jQuery.parseJSON(dataToSend);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller',dataToSend)
			.done(function( gridData ) {	
								//tooltip_message( "Đã lưu" );
								 })
								.fail(function() {
								tooltip_message( "Có lỗi trong quá trình cập nhật" );
								});	
		
}

function imagesSelected(myFiles) { 
   	 var i,f;
	 //alertObject(myFiles[0]);
	 console.log(myFiles[0]["type"])	
	 //alert(myFiles.length) 
	 window.file_type=false;
	 for(i = 0; i < myFiles.length;i++){
		  $("#upload_form").append("<input type='hidden'  class='filetype' value='"+myFiles[i]["name"]+"'  name='filetype[]'>");
		  // check_file_type('<?=$_GET["filetype"]?>',myFiles[i]["type"]);
		   //alert($('.filetype').val())

		    console.log(myFiles[i]["type"])
		  window.duoi_file=myFiles[i]["name"].split(".");
		  
	 }
	 if(window.file_type==false){
		 $('#valuesubmit').css("visibility","visible"); 	
     }else{
		 parent.postMessage('post_message;' , '*');
	 }
	 /* for ( i = 0, f; f = myFiles[i]; i++) {
		var imageReader = new FileReader();
		imageReader.onload = (function(aFile) {
		  return function(e) {	
		  alert(aFile.type)		   
		  $("#upload_form").append("<input type='hidden'  class='filetype' value='"+aFile.name+"'  name='filetype[]'>");
		  console.log(aFile.name)		  	    
		   check_file_type('<?=$_GET["filetype"]?>',aFile.type);
		   if(window.file_type==false){
			   $('#valuesubmit').css("display","block");
		   }
		  };
		})(f);
		//imageReader.readAsDataURL(f);
	    imageReader.readAsArrayBuffer(f);
	  }		*/
  
 
 
}
function receiver(e) {
	window.upload_elem=e.data;		 
} 	
function check_folder_exist(){
	var _tam=$("#tenthumuc").val().split("//");
	var _thumucme="";
	for(i=0;i<_tam.length-1;i++){
		if(i==_tam.length-2){
			_thumucme+=_tam[i];
		}else{
			_thumucme+=_tam[i]+"//";
		}		
	} 
	 
	_thumuccuoi=_tam[_tam.length-1];	
	$.getJSON( 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+$("#tenthumuc").val()+"&profile=<?=$_GET["profile"]?>", 
		function( data ){
				if (data["error"]=="errConf,errNoVolumes"){					 				 		 
					 $.get( 'file_manager/php/connector.php?answer=42&tenthumuc='+_thumucme+'&cmd=mkdir&name='+_thumuccuoi+'&target=f1_XA&_=1387301727041'+"&profile=<?=$_GET["profile"]?>", 
						function( data ){
							check_files_exist();							 			 
					 });
				} 
	});	
} 
function check_files_exist(){
	$.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc=<?=$_GET["tenthumuc"]?>&cmd=search&q=<?=$_GET["default_name"]?>&_=1387364774212'+"&profile=<?=$_GET["profile"]?>", 
		function( data ) {	
		if(data["files"].length==0){		 
			$("#total_images").val(data["files"].length); 
		}else{		 
		 	total_image=data["files"][data["files"].length-1]["name"].split("_");
			total_image1=total_image[3].split(".");
		 	$("#total_images").val(total_image1[0]); 
		}		 
	});	 
} 
function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB'];
    if (bytes == 0) return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
};
function secondsToTime(secs) { // we will use this function to convert seconds in normal time format
    var hr = Math.floor(secs / 3600);
    var min = Math.floor((secs - (hr * 3600))/60);
    var sec = Math.floor(secs - (hr * 3600) -  (min * 60));
    if (hr < 10) {hr = "0" + hr; }
    if (min < 10) {min = "0" + min;}
    if (sec < 10) {sec = "0" + sec;}
    if (hr) {hr = "00";}
    return hr + ':' + min + ':' + sec;
};
var iBytesUploaded = 0;
var iBytesTotal = 0;
var iPreviousBytesLoaded = 0;
 
function check_loader(){
	 $( "#text").html("Đã upload xong vui lòng đợi máy chủ xử lý");
	/*timer1=setInterval(function() {  
	//console.log(iBytesTotal - iBytesUploaded);
		if((iBytesTotal - iBytesUploaded<90000)&&(_count_>0)){
			 clearInterval(timer);			   
			 $( "#text").html("Đã upload xong vui lòng đợi máy chủ xử lý");
			 clearInterval(timer1);		
			 parent.postMessage('hide_upload;'+window.upload_elem , '*');		 
		}
		_count_++;		
	}, 100);*/
}
function uploadFinish(e){
	callback_upload();
	 $( "#text").html("Hoàn thành");
	 clearInterval(timer);	
	 t=setTimeout(function(){
		 parent.postMessage('close_upload;'+window.upload_elem , '*');		
	 },1000);	
}
function update_upload(){
	timer=setInterval(function() {		 
		var iCB = iBytesUploaded;
   		var iDiff = iCB - iPreviousBytesLoaded;    	
		if (iDiff == 0)
        return false;
		iPreviousBytesLoaded = iCB;
		iDiff = iDiff * 2;
    	var iBytesRem = iBytesTotal - iPreviousBytesLoaded;     
		var secondsRemaining = iBytesRem / iDiff;
    	var iSpeed = iDiff.toString() + 'B/s';
		if (iDiff > 1024 * 1024) {
			iSpeed = (Math.round(iDiff * 100/(1024*1024))/100).toString() + 'MB/s';
		} else if (iDiff > 1024) {
			iSpeed =  (Math.round(iDiff * 100/1024)/100).toString() + 'KB/s';
		}		
		 $( "#tocdo").html(" T.độ: "+iSpeed);
		 $( "#thoigian").html(" T.gian: "+secondsToTime(secondsRemaining));		 
	}, 300);
}

function progressHandlingFunction(e){
	iBytesUploaded = e.loaded;
    iBytesTotal = e.total;
    
    // if nothing new loaded - exit     
   // document.getElementById('speed').innerHTML = iSpeed;
    //document.getElementById('remaining').innerHTML = '| ' + secondsToTime(secondsRemaining);
	
	//console.log(e.loaded)
    if(e.lengthComputable){		
        //$("#progress").text(e.loaded + " / " + e.total);
		 tam=$( ".progress").width()*(iBytesUploaded/iBytesTotal).toFixed(4);
		 //console.log(tam)
		 $( ".loader").css("width",tam+"px");
		 $( "#dungluong").html(bytesToSize(iBytesUploaded) + " \/ " + bytesToSize(iBytesTotal));
		 
		 /*$( "#progressbar" ).progressbar( "option", {
			  value: Math.floor( 100)
		  });*/
    }else {
  		$( "#dungluong").html("Không thể tính toán");
    }

}
</script>
 
 
