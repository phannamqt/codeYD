<script type="text/javascript" src="js/node_modules/socket.io/socket.io.js"></script>
<style type="text/css">
  	body{overflow:visible;background:#f5f3e5; display:none}
	#images_thumnail img{
		margin:6px;	 	
	}
	.mCS_no_scrollbar{
		width:500px!important
		
	}
	#images_viewer{
		<?php
			/*if(isset($_GET["viewer_height"])){
				echo "height:".$_GET["viewer_height"]."px;"; 
			}else{
				echo "height:400px;";
			}
			if(isset($_GET["viewer_width"])){
				echo "width:".$_GET["viewer_width"]."px;"; 
			}else{
				echo "width:400px;";
			}*/
		?>	 
	}	 
	#images_thumnail{		 
		 
	}
	.content{
		margin-top:10px;
		<?php
		/*	if(isset($_GET["panel_width"])){
				echo "width:".$_GET["panel_width"]."px;"; 
			}else{
				echo "width:580px;";
			}*/
		?>
		 
		height:90px;
		padding:10px;
		overflow:auto;
		background:#444;
		-webkit-border-radius:2px;
		-moz-border-radius:2px;
		border-radius:2px;
	}
	.content .images_container{overflow:hidden;}
	.content .images_container img{display:block; float:left; border:3px solid #fff;box-shadow:0px 0px 2px 1px #000!important;}
	/* styles unrelated to zoom */
		* { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:none;
			position: relative;	
			/*border:5px solid #fff;*/box-shadow:0px 0px 5px 0px #000!important;	 
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			/*background:url(images/icon.png);*/
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(images/grab.cur), default; }
		#ex2 img:active { cursor: url(images/grabbed.cur), default; }
		.delete_image{
			background:url(images/close.png) no-repeat 50px 0px ;			 
			display:block;			 		 
			width:80px;
			height:20px;	
			/*background-size: cover;*/
			cursor:pointer;
			float:right;
			position:absolute
				
		}
		#control_button{
			float:right;
			position:absolute;
			z-index:100000000000000000px;
			top:3px;
			right:3px;
			 
		}
		
		 
</style> 
<body> 
	<div class='ui-jqdialog modal42525223'>Bạn có muốn xóa ảnh này không?</div>
  <div id="images_viewer">
 	<span class="zoom" id="ex1"><img style="width:100%;"/></span>
  </div>
   <div id="control_button" >    
    <a style="margin-left: 0px; margin-bottom: 1px; visibility: visible;" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="themanh" href="#" role="button" aria-disabled="false"><span class="ui-button-text" style="width:60px">Thêm Ảnh<span class="ui-icon ui-icon-disk"></span></span></a>
	<a style="margin-left: 0px; margin-bottom: 1px; visibility: visible;" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button ui-button-text-only" id="xoa" href="#" role="button" aria-disabled="false"><span class="ui-button-text" style="width:60px">Xóa Ảnh<span class="ui-icon ui-icon-disk"></span></span></a>
  </div>
  <br>
 

 <div id="content_1" class="content"><div class="images_container" id="images_thumnail"></div></div>
</body>
</html>
<script type="text/javascript">
//alert(encode64("100.jpg"));
var dem=0; 
window.set_status=true;
var _folder_name='<?=$_GET['tenthumuc']?>';	
var _search_string='<?=$_GET["search_string"]?>';
var _tenthumuc='<?=$_GET["tenthumuc"]?>';
$(document).ready(function() {
	$("body").dblclick(function(e) {
		if (!e.ctrlKey){		
			parent.postMessage('fullview;'+window._link , '*'); 
		}
    });		 
	$("body").bind("click",function(e) {
		console.log(window.set_status)		
		if (e.ctrlKey){	
			//alert(window.set_status)
			if(window.set_status==true){				 
				parent.postMessage('edit_images;<?=$_GET["search_string"]?>;<?=$_GET['tenthumuc']?>' , '*');
			}
		}
    });
	$("#themanh").click(function(e) {
		 parent.postMessage('edit_images;<?=$_GET["search_string"]?>;<?=$_GET['tenthumuc']?>' , '*');
		 console.log('edit_images;<?=$_GET["search_string"]?>;<?=$_GET['tenthumuc']?>');
		 
		 //echo('edit_images;<?=$_GET["search_string"]?>;<?=$_GET['tenthumuc']?>' , '*');
		 
    });
	
	$("#xoa").click(function(e) {
		 window.set_status=true;	
			 $("#control_button").css("display","block");
			 $(".delete_image").css("visibility","visible");
    });
	jwerty.key('ctrl+b', false);
	$("body").bind('keydown', function(e) {
		 if (jwerty.is("ctrl+b",e)) {
			 window.set_status=true;	
			 $("#control_button").css("display","block");
			 $(".delete_image").css("visibility","visible");				 
		 }
	 })
	$("#images_viewer").css("width",$(window).width()+"px");

	$(".content").css("width",$(window).width()-10+"px");
	$("#images_viewer").css("height",$(window).height()-130+"px");
	$("body").fadeIn(300);	
	check_folder_exist();
	 
	$(window).resize(function() {		 
		//$(".content").css("margin-left",($(window).width()-$(".content").width())/2-10+"px"); 
		$("#images_viewer").css("width",$(window).width()+"px");
		$(".content").css("width",$(window).width()-10+"px");
		$("#images_viewer").css("height",$(window).height()-130+"px");	
	 
	});		
	//alert(decode64("XDEyLmpwZWc"))
	//alert(encode64("5c"+"12.jpeg")) 
	//alert(encode64("89045/89045_1043344_4281_9.jpeg"))
	
	//alert(decode64("ODkwNDUvODkwNDVfMTA0MzM0NF80MjgxXzkuanBlZw"))
	                  //ODkwNDUvODkwNDVfMTA0MzM0NF80MjgxXzkuanBlZw 
	
	//alert(encode64("89045_1042882_4296_10.jpeg"))
	 window.addEventListener('message', receiver, false);
		
});
function receiver(e) {
		 // if (e.origin == 'http://example.com') {
			//if (e.data == 'Hello world') {
			  //e.source.postMessage('Hello', e.origin);
			//} else {
			 window.set_status=e.data			
			// if(window.set_status==true){				 
				$("#control_button").css("display","block");
			 //}else{
			//	$("#control_button").css("display","none");				 
			 //}
			 
			//}
		 // }
} 	
var image_data;
window.set_status = function(_value) { 
	//alert(_value)
	window.set_status=_value;
}
function imagesSelected(myFiles) {
  for (var i = 0, f; f = myFiles[i]; i++) {
    var imageReader = new FileReader();
    imageReader.onload = (function(aFile) {
      return function(e) {		 
       //var span = document.createElement('span');
	   image_data=e.target.result
	   $("#image_upload").html(['<img class="images" src="', e.target.result,'" title="', aFile.name, '"/>'].join(''));	   
       // span.innerHTML = ['<img class="images" src="', e.target.result,'" title="', aFile.name, '"/>'].join('');
        //document.getElementById('thumbs').insertBefore(span, null);
      };
    })(f);
    imageReader.readAsDataURL(f);
  }
}
function check_folder_exist(){
	var _tam=_folder_name.split("//");	
	$.getJSON( 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name, 
		function( data ){
				if (data["error"]=="errConf,errNoVolumes"){		
					//if(<?php echo $_SESSION["user"]["id_user"]?>==178){
					/* var socket = io.connect('<?=$_SESSION["com"]["IPServerNode"]?>:5000');						
					if(!socket.connected){
						socket.emit('all', _tam[0]+'||'+_tam[1]);			
						socket.on('news', function (output) {
							
							socket.close();
						})
					}	  */
					//}else{
					$.get( 'file_manager/php/connector.php?answer=42&tenthumuc='+_tam[0]+'&cmd=mkdir&name='+_tam[1]+'&target=f1_XA&_=1387301727041', 
						function( data ){							 			 
					 });
					//}
				}else{
					create_viewer();	
				}
	});	
}
function create_backup_folder(images_hash,obj,images_name){	
	var _tam=_folder_name.split("//");
	$.getJSON( 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800&tenthumuc='+_folder_name+'_bk', 
		function( data ){
				if (data["error"]=="errConf,errNoVolumes"){							 		 
					 $.get( 'file_manager/php/connector.php?answer=42&tenthumuc='+_tam[0]+'&cmd=mkdir&name='+_tam[1]+'_bk'+'&target=f1_XA&_=1387301727041', 
						function( data ){
						move_images(images_hash,obj,images_name);							 			 
					 });
				}else{
					 	move_images(images_hash,obj,images_name);	
				}
	});	
}
 
function move_images(images_hash,obj,images_name){
	
	 //console.log(encode64(images_name)); 
	// images_name='<?=$_SESSION["user"]["id_user"]?>_'+images_name;	 
	 var _tam=_folder_name.split("//");	 
	 des_folder = 'f1_' + encode64(_tam[1]+'_bk');
	 source_folder = 'f1_' + encode64(_tam[1]);
	 //console.log(source_folder);
	 _tam1='f1_'+encode64(_tam[1]+"/"+images_name);	 
	 idkham=images_name.split("_");
	//alert(_tam1) 
	// alert(decode64("LzEyLmpwZWc"))  
	 //$.get('file_manager/php/connector.php?answer=42&tenthumuc='+_tam[0]+'&cmd=rename&target='+source_folder+images_hash+'&name='+images_name+'&_=1387443959368' , 
	 //function( data ){			
			$.get('file_manager/php/connector.php?answer=42&tenthumuc='+_tam[0]+'&cmd=paste&dst='+des_folder+'&targets[]='+_tam1+'&cut=1&src='+source_folder+'&_=1387343931476&action=delete&idkham='+idkham[1]+"&tenanh="+images_name , 
			function( data ){
				$("#"+obj.attr("role")).remove();
			 	obj.remove();			 
	 		});					 
	 //});	
}

function create_viewer(){
	$.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc='+_folder_name+'&cmd=search&q=<?=$_GET["search_string"]?>&_=1387364774212', 
		function( data ) {  
		var image_arr=[];
		for(i=0;i<data["files"].length;i++){
			if(String(data["files"][i]["mime"]).match('image')!=null){
				 image_arr[i]=data["files"][i]["name"];
			}
		}
		image_arr.sort(natcmp);
		for(i=0;i<image_arr.length;i++){
			 $("#images_thumnail").append( '<div class="thum_container"><span title="Xóa ảnh" role="thumn_'+i+'" id="'+i+'" class="delete_image" alt="'+"f1_"+encode64(image_arr[i])+'" lang="'+image_arr[i]+'"></span><img id="thumn_'+i+'" alt="'+"f1_"+encode64(image_arr[i])+'" lang="'+image_arr[i]+'" style="width:50px; height:60px" src="file_manager/php/connector.php?tenthumuc='+_folder_name+'&answer=42&cmd=file&target='+"f1_"+encode64(image_arr[i])+'" /></div>')
		}
		 
		
		//for(i=0;i<data["files"].length;i++){
		//	if(String(data["files"][i]["mime"]).match('image')!=null){
			//	$("#images_thumnail").append( '<div class="thum_container"><span title="Xóa ảnh" role="thumn_'+i+'" id="'+i+'" class="delete_image" alt="'+data["files"][i]["hash"]+'" lang="'+data["files"][i]["name"]+'"></span><img id="thumn_'+i+'" alt="'+data["files"][i]["hash"]+'" lang="'+data["files"][i]["name"]+'" style="width:50px; height:60px" src="file_manager/php/connector.php?tenthumuc='+_folder_name+'&answer=42&cmd=file&target='+data["files"][i]["hash"]+'" /></div>')
				/*if(i==0){
					$("#"+i).css("left",$("#thumn_"+i).width()+"px");
				}else{
					$("#"+i).css("left",$("#thumn_"+i).width()*(i+1)+(18*i)+"px");
				}	*/		
		//	};
		 	 	
		//};	
		
			
		//console.log(data["files"][i]["hash"]);		 
		$(".content").css("margin-left",($(window).width()-$(".content").width())/2-10+"px");
		/*$("#images_thumnail img").dblclick(function(e){
			//alert("") 
			//alert($(this).attr("alt").replace("f1_",""))	
			create_backup_folder($(this).attr("alt").replace("f1_",""),$(this),$(this).attr("lang"));
			//$(this).remove();	
			 
		});	*/	
		$(".delete_image").click(function(e){
			var _this_alt=$(this).attr("alt").replace("f1_","");
			var _this=$(this);	 
			var _this_lang=$(this).attr("lang"); 
			$('.modal42525223').dialog({
				height: 120,
				width: 210,
				modal: true,
				title: "Cảnh báo",
				draggable: true,
				resizable: false,
				stack: false,
				buttons: {			 
					'Xóa': function() {
						create_backup_folder(_this_alt,_this,_this_lang);
						$(this).dialog( "close" );  						   
					},
					'Hủy': function() {						 
						$(this).dialog( "close" );   
					},	            
				},
				beforeClose: function( event, ui ) {
					 
				},
				close: function(event, ui) {		 
				 
					$(this).dialog( "close" );
					//$(this).remove();
				 
				},
				hide: {
					effect: "fadeOut",
					duration: 500,
				},
				open: function(event, ui) {					 
					add_icon_button_dialog("Xóa","trash");
					add_icon_button_dialog("Hủy","cancel");
							 
				},		
		
			});		
				
		});							
		$("#images_thumnail img").click(function(e) {
			$('.zoom').trigger('zoom.destroy');
			var _dimension;
			 _dimension=$.ajax({url: 'pages.php?module=web_services&function=get_file_size&action=index&id_form=111&tenthumuc='+_folder_name+'&hash_name='+$(this).attr("alt"), async: false, success: function(data, result) { 			           		 
             }}).responseText;			 
			 _dimension=_dimension.split(";");
			 if(_dimension[0]>$("#images_viewer").width()){
				_ratio= (_dimension[1]/_dimension[0]).toFixed(2) ;
				_dimension[0]=$("#images_viewer").width()-10;
				_dimension[1]=_dimension[0]*_ratio;
			 }			 
			 if(_dimension[1]>$("#images_viewer").height()){
				_ratio= (_dimension[0]/_dimension[1]).toFixed(2) ;
				_dimension[1]=$("#images_viewer").height()-10;
				_dimension[0]=_dimension[1]*_ratio;
			 } 
			 
			/*  if(_dimension[0]>600){
				_ratio= (_dimension[1]/_dimension[0]).toFixed(2) ;
				_dimension[0]=600;
				_dimension[1]=_dimension[0]*_ratio;
			 }			 
			 if(_dimension[1]>400){
				_ratio= (_dimension[0]/_dimension[1]).toFixed(2) ;
				_dimension[1]=400;
				_dimension[0]=_dimension[1]*_ratio;
			 } */
			 
			
			 var _link=	$(this).attr("src");
			 window._link=$(this).attr("src");
			 $(".zoom img").attr("src","");			 			 	 
			 $(".zoom img").fadeOut("fast", function () {
				$(".zoom img").attr("src",_link);
				$(".zoom img").fadeIn("fast");
				$(".zoom").zoom();								
			 });
			 $(".zoom ").css("display","inline-block");	
			 $(".zoom ").css("margin-top",($("#images_viewer").height()-_dimension[1])/2+10+"px");
			 $(".zoom ").css("margin-left",($(window).width()-_dimension[0])/2+"px");	
			 $(".zoom img").css("height",_dimension[1]+"px");
			 $(".zoom img").css("width",_dimension[0]+"px");
			 
			 
			
			/* $("#pic_"+dem).zoom({
				url: "http://192.168.1.104:81/giaidoan2/file_manager/php/connector.php?answer=42&cmd=file&target=f1_ZW1haWxfZm9vdGVyLmpwZw", 
				callback: function(){
					//alert(this.src)
					//alert("<?=$_SESSION["config_system"]["URL"]?>"+$(this).attr("src"))
				 // $(this).colorbox({href: this.src});
				}
			  }); */
			 //$(".zoom img").css("margin-left",($(".zoom ").width()-_dimension[0])/2+9+"px");
			 //$(".zoom img").css("margin-top",($(".zoom ").height()-_dimension[1])/2+26+"px");
        });
		$("#thumn_0").trigger("click");	
			$("#content_1").mCustomScrollbar({
					scrollInertia:250,
					setWidth: true,
					horizontalScroll:true,
					mouseWheelPixels:116,
					scrollButtons:{
						enable:true,
						scrollType:"pixels",
						scrollAmount:116
					},
					callbacks:{
						onScroll:function(){ snapScrollbar();}
					}
			});	 
			var content=$("#content_1");
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
				/* snap scrollbar fn */
				var snapTo=[];
				$("#content_1 .images_container img").each(function(){
					var $this=$(this),thisX=$this.position().left;
					snapTo.push(thisX);
				});
				function snapScrollbar(){
					var posX=$("#content_1 .mCSB_container").position().left,closestX=findClosest(Math.abs(posX),snapTo);
					console.log(closestX)
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
            	}
			parent.postMessage('loaddone;' , '*');	
	 });		 
}
</script>
 
 
