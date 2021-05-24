<!--Người viết: Trần Trương Chính-->
<style type="text/css">
  	body{overflow:auto}
	#images_thumnail img{
		margin:0px 4px;	 	
	}
	 
	#images_viewer img{
		position:absolute;	
		/*border:5px solid #fff;*/box-shadow:0px 0px 5px 0px #000!important;	 
	}
	#images_thumnail{		 
		 
	}
	.content{width:980px; height:110px; padding:10px; overflow:auto; background:#444; -webkit-border-radius:2px; -moz-border-radius:2px; border-radius:2px;}
	.content .images_container{overflow:hidden;}
	.content .images_container img{display:block; float:left; margin:0; border:3px solid #fff;box-shadow:0px 0px 2px 1px #000!important;}
	.image_crop{
		height:450px;
		width:600px;
		 			 
	}
	.image_crop img{	 
		box-shadow:0px 0px 5px 0px #000!important;		 			 
	}
	.image_crop_thumnail{
		position:absolute;
		top:0px;
		overflow:auto;	
		box-shadow:0px 0px 5px 0px #000!important;
		display:none;	 		 
	}
	#upload_input{ cursor: pointer;
		direction: ltr;
		/*font-size: 200px;*/
		margin: 0;
		opacity: 0;
		position: absolute;
		right: 0;
		top: 0;
		border:1px solid #000;
		/*width:1000px;
		height:1000px;*/
	} 
	#control_button{
		float:right;
	}
	#camera_container{
		width:500px;
		height:240px;
		position:absolute;
		top:1px;
		border:none!important;
	}
	/*#videoElement{
		width:1280px;
		height:720px;
	}*/
	 
</style> 
<body> 
<div id="progress"></div>
<div class="image_crop" ><div id="container"><img></div></div> 
<div class="image_crop_thumnail"><img ></div>
<!--<div id="bocrop" >Bỏ crop</div> -->
<form id="image_submit">
	<input type="hidden" name="action" value="<?php if(isset($_GET["call_function"])) echo $_GET["call_function"]; else echo "custom_images";?>">
  	<input type="hidden" name="default_name" value="<?=$_GET["search_string"]?>">  
    <input type="hidden" name="cmd" value="upload">
    <input type="hidden" name="target" value="f1_XA">    
    <input type="hidden" name="answer" value="42">  
    <input type="hidden" name="tenthumuc" value="<?=$_GET["tenthumuc"]?>">
    <input type="hidden" name="total_images" id="total_images">  
    <input type="hidden" name="id_user_login" id="id_user_login"  value="<?=$_SESSION["user"]["id_user"]?>">       		
</form>
<div id="control_button" style="margin-top:15px;">
    <!--<input type="file" id="upload_input" value="Chọn file" multiple="true" >
    <input type="button" id="valuesubmit" value="Lưu" multiple="true" >-->    
    <a style="margin-left: 0px; margin-bottom: 1px; visibility: visible;" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="chonfile" href="#" role="button" aria-disabled="false"><span class="ui-button-text"> Chọn file<input type="file" id="upload_input" value="Chọn file" multiple="true" ><span class="ui-icon ui-icon-plus"></span></span></a>
    <a style="margin-left: 0px; margin-bottom: 1px; visibility: visible;" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="camera" href="#" role="button" aria-disabled="false"><span class="ui-button-text"><span>Mở Camera</span><span class="ui-icon ui-icon-disk"></span></span></a>
    <a style="margin-left: 0px; margin-bottom: 1px; visibility: visible;" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="valuesubmit" href="#" role="button" aria-disabled="false"><span class="ui-button-text"> Lưu<span class="ui-icon ui-icon-disk"></span></span></a>	
</div>
<div id="content_1" class="content"><div class="images_container" id="images_thumnail"></div></div>
<canvas style="display:none" id="myCanvas"></canvas> 
</html>
<script type="text/javascript">
var dem=0; 
$(document).ready(function() {
	$.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc=<?=$_GET["tenthumuc"]?>&cmd=search&q=<?=$_GET["search_string"]?>&_=1387364774212', 
		function( data ) {	
		if(data["files"].length==0){		 
			$("#total_images").val(data["files"].length); 
		}else{	
			
		 	total_image=data["files"][data["files"].length-1]["name"].split("_");
			total_image1=total_image[2].split(".");
			//alert(total_image1[0]);	 
		 	$("#total_images").val(total_image1[0]); 
		}		 
	});	 
	$(".image_crop").css("width",$(window).width()+"px");
	$(".content").css("width",$(window).width()-20+"px");
	$(".image_crop").css("height",$(window).height()-190+"px");	
	$('#valuesubmit').click(function(event) {		
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
			 parent.postMessage('close_edit;' , '*');
			 //alert(1234);		           		 
     		}}).responseText;	
		 	
		//alert(_status)
	});	
	//$("#control_button").css("margin-left",$(window).width()/2+"px");	
	//$(".content").css("margin-left",($(window).width()-$(".content").width())/2+"px");	
	$("#upload_input").change(function(e) {
		//alert($(this).val());
	   imagesSelected(this.files);  
	});
	//onchange="imagesSelected(this.files)"   
	$("#bocrop").click(function(e) {
        //jcrop_api.release();
		jcrop_api.destroy();
    });
	bind_open();	
	
});
var demsoanh=0;
var image_data; 
window.kiemtra_landau=0;
var jcrop_api;
var image_height_org,image_width_org;
function bind_open(){ 
	$("#camera").unbind("click");
	$("#camera").bind("click",function(e){	 
       open_camera();
	   bind_close();	  
    });	
}
function bind_close(){
	//alert("")
	$("#camera").unbind("click");
	$("#camera span.ui-button-text span").html("Tắt camera");
	$("#camera").bind("click",function(e){	 
	   $("#videoElement").attr("src", "");
       $("#camera_container").remove();
	   $("#camera span.ui-button-text span").html("Mở camera");
	   bind_open();
    });	
}
function open_camera(){
	 
	$("body").append("<div id='camera_container'><video width='320' height='240' autoplay id='videoElement'></video></div>");	 
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
	var video_constraints = {
	   	 audio: false,
		 video: {
			  mandatory: {
			  minWidth: "640",
			  maxWidth: "640",
			  minHeight: "480",
			  maxHeight: "480",			  
		  },
		  optional: []
		 }
		 
	};
	if (navigator.getUserMedia) {
		// get webcam feed if available
		navigator.getUserMedia(video_constraints, handleVideo, videoError);
	}
	$("#videoElement").bind("dblclick",function(e){			 
       create_new_images_camera();
    });	
	  
}
function create_new_images_camera(){
	 v = document.getElementById('videoElement');	
	 canvas = document.getElementById('myCanvas');
	 context = canvas.getContext('2d');
	  //alert(v.videoWidth);	
	 canvas.width=v.videoWidth;
     canvas.height=v.videoHeight; 
	 w = canvas.width;
     h = canvas.height;		   
	 if(v.paused || v.ended) return false; // if no video, exit here
     context.drawImage(v,0,0,w,h); // draw video feed to canvas 	 
	 $("#images_thumnail").append('<img width="90" height="90" class="images" lang="'+demsoanh+'" src="'+ canvas.toDataURL("image/png")+'"  />');
	 $(".content .images_container").css("width",$("#images_thumnail img").length*104+"px");
	 $("#image_submit").append("<input type='hidden' value='"+canvas.toDataURL("image/png")+"' name='image_data[]'>");
	 demsoanh++;	 				
	 create_action();
	 window.kiemtra_landau++; 
	 create_scroll();	 	
}
function videoError(e) {
    alert("Không thể kết nối camera");
} 
function handleVideo(stream) {
    // if found attach feed to video element
   $("#videoElement").attr("src", window.URL.createObjectURL(stream));
   
   
}

 
function imagesSelected(myFiles) {
  var i,f;
 // alert(myFiles.length) 
 if(window.kiemtra_landau==0){ 
 	$(".content .images_container").css("width",(myFiles.length*104)+"px");
 }else{
	$(".content .images_container").css("width",parseFloat( $(".content .images_container").css("width").replace("px",""))+(myFiles.length*104)+"px");
 }   
  window.kiemtra_landau++; 
  for ( i = 0, f; f = myFiles[i]; i++) {
    var imageReader = new FileReader();
    imageReader.onload = (function(aFile) {
      return function(e) {		 
       //var span = document.createElement('span');
	   image_data=e.target.result;
	   $("#images_thumnail").append('<img width="90" height="90"  lang="'+demsoanh+'" class="images" src="'+e.target.result+'" title="'+aFile.name+'"/>')
	   //$("#images_thumnail").append(['<img width="90" height="90" class="images" src="', e.target.result,'" title="', aFile.name, '"/>'].join(''));
	   $("#image_submit").append("<input type='hidden'  class='anh"+demsoanh+"'  name='image_data[]'>");
	   $('.anh'+demsoanh).attr("value",image_data);  	     
	   demsoanh++;	       
      };
    })(f);
    imageReader.readAsDataURL(f);
	//console.log((i)+"=="+myFiles.length)	 
	/*if((i+1)==myFiles.length){
		
	}*/
  }	   
  	
    d=setTimeout(function(){
		create_action();		  
		create_scroll();		  
		clearTimeout(d);		 
	},400);	
	 
 
}
function create_action(){	
	$("#images_thumnail img").unbind("dblclick");
	$("#images_thumnail img").bind("dblclick",function(e){	 
		$(this).remove();		 
		$(".anh"+$(this).attr("lang")).remove();
		demsoanh--;
		$("#content_1").mCustomScrollbar("destroy");
		$("#content_1").mCustomScrollbar({
			scrollInertia:250,
			horizontalScroll:true,
			mouseWheelPixels:116,
			scrollButtons:{
				enable:true,
				scrollType:"pixels",
				scrollAmount:116
			},
			callbacks:{
				onScroll:function(){ //snapScrollbar();
				}
			}
		});		 
	});
	$("#images_thumnail img").unbind("click");
	$("#images_thumnail img").bind("click",function(e){		 
	 	$(".image_crop_thumnail").css("display","none");
		image_data= $(this).attr("src");
	   $(".image_crop img").remove();	  
	   $(".image_crop").append("<img>");	   
	   $(".image_crop img").attr("src",$(this).attr("src"));	   
	    image_width=$(".image_crop img").width();
	    image_height=$(".image_crop img").height();	
		image_width_org=$(".image_crop img").width();
	    image_height_org=$(".image_crop img").height();	    
	   if(image_width>$(".image_crop").width()){
			var _ratio= (image_height/image_width).toFixed(2) ;
			image_width=$(".image_crop").width();
			image_height=image_width*_ratio;			
	   }			 
	   if(image_height>$(".image_crop").height()){
		   var _ratio= (image_width/image_height).toFixed(2) ;
			image_height=$(".image_crop").height();
			image_width=image_height*_ratio;
	   }	  
	   $(".image_crop img").css("width",image_width);
	   $(".image_crop img").css("height",image_height);
	   $("#container").css("padding-top",($(".image_crop").height()-image_height)/2+10+"px");	    
	   //$(".image_crop").css("margin-left",$(".content").css("margin-left"));	
	    $(".image_crop").css("margin-left","25px");   
	  // $(".image_crop_thumnail").css("margin-top",$(".image_crop").css("margin-top"));  
	   
	  /* if(window.kiemtra_landau>1){			 
			jcrop_api.destroy();
	   };*/
	   if (typeof jcrop_api != "undefined") {
		   jcrop_api.destroy();
	   }
	  window.kiemtra_landau++; 
	   $('.image_crop img').Jcrop({
			//onChange: showCoords,
			//onSelect: showCoords
			onSelect: showCoords,		 
		},function(){
			jcrop_api = this;			
			create_new_images();
		});		 
  	});		
} 
function create_scroll(){	 
 
   //alert("")
    //e.preventDefault();
	  if(window.kiemtra_landau>1){
			$("#content_1").mCustomScrollbar("destroy");
	   };
//$("#content_1").mCustomScrollbar("destroy");
	$("#content_1").mCustomScrollbar({
		scrollInertia:250,
		horizontalScroll:true,
		mouseWheelPixels:116,
		scrollButtons:{
			enable:true,
			scrollType:"pixels",
			scrollAmount:116
		},
		callbacks:{
			//onScroll:function(){ snapScrollbar();}
		}
	});
	/*var content=$("#content_1");
	$("a[rel='toggle-buttons-scroll-type']").html("<code>scrollType: \""+content.data("scrollButtons_scrollType")+"\"</code>");
	$("a[rel='toggle-buttons-scroll-type']").click(function(e){
		e.preventDefault();
		var scrollType;
		if(content.data("scrollButtons_scrollType")==="pixels"){
			scrollType="continuous";
		}else{
			scrollType="pixels";
		}
		content.data({"scrollButtons_scrollType":scrollType}).mCustomScrollbar("update");
		$(this).html("<code>scrollType: \""+content.data("scrollButtons_scrollType")+"\"</code>");
	});
	 
	var snapTo=[];
	$("#content_1 .images_container img").each(function(){
		var $this=$(this),thisX=$this.position().left;
		snapTo.push(thisX);
	});
	function snapScrollbar(){
		var posX=$("#content_1 .mCSB_container").position().left,closestX=findClosest(Math.abs(posX),snapTo);
		//alert(closestX)
		$("#content_1").mCustomScrollbar("scrollTo",closestX,{scrollInertia:350,callbacks:false});
	}
	function findClosest(num,arr){
		var curr=arr[0];
		var diff=Math.abs(num-curr);
		for(var val=0; val<arr.length; val++){
			var newdiff=Math.abs(num-arr[val]);
			if(newdiff<diff){
				diff=newdiff;
				curr=arr[val];
			}
		}					 
		return curr;
	}	*/
} 
function create_new_images(){
	$( ".jcrop-holder" ).bind( "keyup", function(e) {
	  if (jwerty.is("enter",e)) { 	   	 
		 $("#images_thumnail").append('<img width="90" height="90" class="images" lang="'+demsoanh+'" src="'+ $(".image_crop_thumnail img").attr("src")+'"  />');
		 $(".content .images_container").css("width",$("#images_thumnail img").length*104+"px");
		 $("#image_submit").append("<input type='hidden' value='"+$(".image_crop_thumnail img").attr("src")+"' name='image_data[]'>");
		 demsoanh++;					
		 create_action();
		 create_scroll();					
	  }
	});
}
/*function dropIt(e) { 
   imagesSelected(e.dataTransfer.files);
   e.stopPropagation(); 
   e.preventDefault();  
}*/
var canvas = document.getElementById('myCanvas');
var context = canvas.getContext('2d');
var imageObj = new Image();
function showCoords(c)
{
	/*$('#x').val(c.x);
	$('#y').val(c.y);
	$('#x2').val(c.x2);
	$('#y2').val(c.y2);
	$('#w').val(c.w);
	$('#h').val(c.h);*/	   	  
	  var _ratio1=$(".image_crop img").height()/image_height_org;
	  canvas.width  = c.w/_ratio1-2; 
   	  canvas.height = c.h/_ratio1;
	  //console.log(c.x + "  " +c.y+ " "+_ratio+" "+c.w+" "+c.h);
	  context.clearRect(0,0,canvas.width, canvas.height);
      //imageObj.onload = function() {
        // draw cropped image
		//console.log(c.x + "  " +c.y+ " "+_ratio+" "+c.w+" "+c.h);
     /*   var sourceX = (c.x/_ratio).toFixed(0);
        var sourceY = (c.y/_ratio).toFixed(0);
        var sourceWidth = (c.w/_ratio).toFixed(0);
        var sourceHeight = (c.h/_ratio).toFixed(0);*/
		
		  imageObj.src =image_data;	
		var sourceX = (c.x/_ratio1).toFixed(0);
        var sourceY =( c.y/_ratio1).toFixed(0);
        var sourceWidth = (c.w/_ratio1-1).toFixed(0);
        var sourceHeight = (c.h/_ratio1).toFixed(0);		
        var destWidth = sourceWidth;
        var destHeight = sourceHeight;
       // var destX = c.x2;
       // var destY = c.y2;
		/*var destX = canvas.width / 2 - destWidth / 2;
        var destY = canvas.height / 2 - destHeight / 2; */
		var destX = 0;
		var destY = 0;
		/*var destX = sourceX + c.w/_ratio;
        var destY = sourceY + c.h/_ratio;*/
		//console.log(_ratio1+" -- "+sourceX+" -- "+sourceY+" -- "+sourceWidth + " -- " +sourceHeight);
        context.drawImage(imageObj, sourceX, sourceY, sourceWidth, sourceHeight, destX, destY, destWidth, destHeight);
     // };	  
 	//var file = $("#upload_input").prop("files")[0];
	//alertObject(file)
    
	  $(".image_crop_thumnail img").remove();	  
	  $(".image_crop_thumnail").append("<img>");
	  t=setTimeout(function(){
		  $(".image_crop_thumnail img").attr("src",canvas.toDataURL("image/jpeg"));
		  clearTimeout(t);		 
	  },100);	
	  d=setTimeout(function(){
		  var crop_height,crop_width
		  $(".image_crop_thumnail").css("display","inline-block");
		  if( $(".image_crop_thumnail img").height()>$(".image_crop img").height()){	
		  	 //$(".image_crop_thumnail").css("height",$(".image_crop img").height()+"px");
			 crop_height=$(".image_crop img").height();
		  }else{
			 //$(".image_crop_thumnail").css("height",$(".image_crop_thumnail img").height()+"px"); 
			 crop_height=$(".image_crop_thumnail img").height();
		  }
		  
		  if( $(".image_crop_thumnail img").width()>($(".content").width()-$(".image_crop img").width()-50)){			 	 
		  	crop_width= $(".content").width()-$(".image_crop img").width()-50;
			//$(".image_crop_thumnail").css("width",$(".content").width()-$(".image_crop img").width()+"px");		 	 
		  }else{
			crop_width=$(".image_crop_thumnail img").width()
			// $(".image_crop_thumnail").css("width",$(".image_crop_thumnail img").width()+"px");			   
		  }
		   
		   $(".image_crop_thumnail").animate({
			width: crop_width+"px",
			height: crop_height+"px",			 
		  }, 200 ); 
		  $(".image_crop_thumnail").css("margin-left",parseFloat($(".image_crop").css("margin-left").replace("px",""))+$(".image_crop img").width()+25+"px");  
		  $(".image_crop_thumnail").css("margin-top",$("#container").css("padding-top")); 	
	  	  //$(".image_crop_thumnail").css("margin-top",($(".image_crop").height()/2)-($(".image_crop_thumnail img").height()/2)+"px");
		  clearTimeout(d);		 
	  },400);	 
};
function progressHandlingFunction(e){
    if(e.lengthComputable){
        $("#progress").text(e.loaded + " / " + e.total);
    }
}
</script>
 
 
