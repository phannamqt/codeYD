<?php session_start(); ?>
<?php

	if(
		($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']!='192.168.1.5/medsmart/index.php') 
		&& (  
			(!isset($_SESSION["user"]["login"]) && !isset($_GET["access"]))
		)){
			die("Access is denied");
		} 
 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<link href="images/favicon.ico" rel="shortcut icon" type=image/x-icon>
<link href="images/favicon.ico" rel=icon type=image/x-icon>
<link rel="stylesheet" type="text/css" media="screen" href="css/expand_menu.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="js/grid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script src="js/grid/src/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="js/ui/jquery-ui.js"></script>
<script src="js/grid/js/jquery.layout.js" type="text/javascript"></script>
<script src="js/expandmenu.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tiny_scroll/js/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript" src="js/jwerty/jwerty.js"></script>
<script type="text/javascript" src="js/message.js?n=5"></script>
<script type="text/javascript" src="js/globalize/globalize.js"></script>
<script type="text/javascript" src="js/globalize/globalize.culture.de-DE.js"></script>
<script type="text/javascript" src="js/globalize/jquery.mousewheel.js"></script>
<?php
include("class/class.sqlserver.php");
include("class/basic_function.php");
?>

<script type="text/javascript">
    jQuery.jgrid.no_legacy_api = true;
</script>

<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/phannam_com/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/ui.jqgrid.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/grid/themes/ui.multiselect.css" />
<link rel="stylesheet" href="js/tiny_scroll/css/website.css" type="text/css" media="screen"/> 
<style type="text/css">
.ui-state-default-west{
	border:none!important;
	cursor:pointer!important;
	background:none!important;
	-webkit-transition:box-shadow 0.1s ease-in-out;
    -moz-transition:box-shadow 0.1s ease-in-out;
    -o-transition:box-shadow 0.1s ease-in-out;
    -ms-transition:box-shadow 0.1s ease-in-out;
    transition:box-shadow 0.1s ease-in-out;
}
#menu_toggle{
	padding:5px 0px;
	background:url("js/grid/themes/smoothness/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
	border:#CCC 1px dashed;
}
.ui-state-default-south{
	border:none!important;
	cursor:pointer!important;
	background:none!important;
}
.ui-widget-header{

/*	background-size:contain!important;
	border: 1px solid #369303!important;*/
}

.ui-layout-west{
	background: url(images/expand_menu/left.png) repeat !important;
	border:none!important;
}
.ui-widget-content{
	border:none!important;
}
.ui-layout-toggler .content {
    font: 14px bold Tahoma,Verdana,Arial,Helvetica,sans-serif;
	text-align:center;
	color:#fff;
	text-shadow:0px 1px 1px #000 ;
	vertical-align:middle!important;
}

.ui-state-default-south span{
	/*margin-left:20px;*/
}
.ui-state-default ui-corner-top{
	border:1px solid #000!important;
}
#tabs li .ui-icon-close {
    cursor: pointer;
    float: left;
    margin: 0.4em 0.2em 0 0;
}
#tabs iframe{
	width:1352px;
	border:none;
	margin-top:10px;
	/*border:1px solid #000;
	overflow:auto!important;	*/
	/*transform:scale(0.9);

	margin-left:-50px;*/
}
.ui-tabs .ui-tabs-panel {
    padding: 0 0px;
}
#colorbox{
	-webkit-transition:box-shadow 0.5s ease-in-out;
    -moz-transition:box-shadow 0.5s ease-in-out;
    -o-transition:box-shadow 0.5s ease-in-out;
    -ms-transition:box-shadow 0.5s ease-in-out;
    transition:box-shadow 0.5s ease-in-out;
}
#scrollbar1 .scrollbar
{opacity:0.5;filter:alpha(opacity=50);}
/*.ui-tabs-nav{
	height:39px;
}
.ui-tabs .ui-tabs-nav li{
	margin-top:5px;
}*/
.user-info a:hover{
	color:#00F;
}
</style>
<?php
$data= new SQLServer;//tao lop ket noi SQL

?>
<title>PHẦN MỀM QUẢN LÝ KHÁM CHỮA BỆNH</title>
</head>
<body>
	<?php
		if((isset($_GET["login"]))){
			session_unset();
			session_destroy();
		}
		if(!isset($_SESSION["user"]["login"])){
			$_SESSION["user"]["id_user"]="";
			$_SESSION["user"]["fullname"]="";
			include("modules/login/index.php");
			//echo "<div id='overlay'></div>";
			return;
		}
			taoconfig();
			
			$store_name="{call GD2_GetPhanQuyenById_NhanVien_and_group_quyen(?)}";//tao bien khai bao store
			$params = array($_SESSION["user"]["id_user"]);//tao param cho store
			$get_main_menu=$data->query( $store_name, $params);//Goi store
			$excute= new SQLServerResult($get_main_menu);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
			$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc
			//echo count($tam);
			//print_r($tam);
    ?>
	<div class="header_form theme_color">
    	<div id="header_main2">
                <div id='cssmenu' class="theme_color" style="width:85%;">
                    <ul>
                    <?php
						createmenu(0,$tam,'');
					?>
                    </ul>
                 </div>
				 <!--yduc.dynu.net/medsmart/index.php <?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>-->
				<div class="user-info  theme_color" style="float:left; width:14%; padding-right:1px; text-align:right; height:22px; background:#46997D;padding-top: 6px; text-transform:uppercase;">
				
				<span style="color:red "><?=$_SERVER['REMOTE_ADDR']?></span> <?=$_SESSION["user"]["nickname"];?> | <a href="http://<?=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>?login=false" class="btn-logout theme_color">Thoát</a>
				</div>
         </div>
    </div>
    <div style="height:32px;"></div>
	<div id="panel_main">
        <div class="left_col ui-widget-content ui-layout-west" id="LeftPane" style="display:none">
            <div id="scrollbar1">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">  <div class="overview">
            
             </div></div></div>
        </div>
        <div class="right_col ui-widget-content  ui-layout-center">
        	<div id="tabs" style="margin-top:-3px; width:99%"  class="ui-tabs ui-widget ui-widget-content ui-corner-all">
                   <div id="scrollbar2">
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
            <div class="viewport">  <div class="overview">
            			<!-- <div class="scroller">--><ul id="tab_tam" style="margin-left:2px;"> </ul><!--</div>-->
               </div></div></div>


             </div>
        </div>
   </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	var flag=0;

	render_page();
	create_scroll();
	tab_idbenhan();
	//dongtab();
	$("#tabs iframe").css("height",$(window).height()-90+"px");
	var cache_left_col=$('.left_col').height();	//fix bug
	var cache_left_col1=0;	//fix bug
	jQuery(window).resize(debouncer(function() {
		render_page();
		$("#tabs iframe").css("height",$(window).height()-90+"px");
		t=setTimeout(function(){
		  if((resize_flag==1)||( window.resolution==true)){
			   $("#tabs .ui-tabs-panel").css("overflow-x","scroll");
			   $("#tabs .ui-tabs-panel").css("height",$(window).height()-78+"px");
			   $("#tabs iframe").css("height",$(window).height()-105+"px");
		  }
		},500);
		//console.log($("#tabs iframe").height())
	}));
	makeTabs.creatTab();
	$(".modal_form").click(function(e){
		//$(this).closest('ul').css('display','none');
		$("#cssmenu ul li ul").hide();
		setTimeout(function(){
			$("#cssmenu ul li ul").css('display','block');
		},10);
		temp=($(this).attr("role")).split(":");
		links=$(this).attr("id");
		elem=1 + Math.floor(Math.random() * 10000000000000);
		width=temp[0];
		height=temp[1];
		//alertObject(this);
		dialog_main($(this).html(),width,height,elem,links);
	})

	$(".tab_form").click(function(e){
		//$(this).closest('ul').css('display','none');
		$("#cssmenu ul li ul").hide();
		setTimeout(function(){
			$("#cssmenu ul li ul").css('display','block');
		},200);
		if($(this).attr("lang")=="0"){
			temp=($(this).attr("role")).split(":");
			links=$(this).attr("id");
			mask=	($(this).attr("class")).split(" ");
			if($.trim(mask[0])==''){
				mask[0]='formchuaco'
			}
			if($("."+mask[0]+"-tab").length){
	  			$("."+mask[0]+"-tab").trigger("click");
			}else{
				elem=1 + Math.floor(Math.random() * 1000000000);
				window.lastclick=mask[0];
			//	alertObject(this);
				makeTabs.addTab($(this).html(),'<div class="loading"><div id="loading"></div></div><iframe id="'+mask[0]+'-frame" class="frame_'+elem+'"></iframe>',mask[0],$(this).attr("lang"));
				callIframe(links, hide_loader,elem);
			}
			$(".ui-state-default-west-open").dblclick()
			tab_active();
		}else if($(this).attr("lang")=="1"){
			temp=($(this).attr("role")).split(":");
			links=$(this).attr("id");
			mask=	($(this).attr("class")).split(" ");
			if($.trim(mask[0])==''){
				mask[0]='formchuaco'
			}
			if($("."+mask[0]+"-"+$.cookie("id_benhnhan")).length){
				$("."+mask[0]+"-"+$.cookie("id_benhnhan")).trigger("click");
			}else{
				elem=1 + Math.floor(Math.random() * 1000000000);
				window.lastclick=mask[0];
				makeTabs.addTab($(this).html(),'<div class="loading"><div id="loading"></div></div><iframe id="'+mask[0]+'-frame" class="frame_'+elem+'"></iframe>',mask[0],$(this).attr("lang"));
				callIframe(links, hide_loader,elem);
			}
			$(".ui-state-default-west-open").dblclick()
			tab_active()
		}
		t=setTimeout(function(){
		  if( window.resolution==true){
			set_resolution();
		  }
		},500);

	})

	$(".ui-tabs-nav,#scrollbar2 .overview").css("width",$('.right_col').width()+"px");
	$('#scrollbar2,#scrollbar2 .scrollbar,#scrollbar2 .viewport,#scrollbar2 .track').css("width",$('.right_col').width()+"px");
	$('#scrollbar2').tinyscrollbar({ axis: 'x'});
	$(".tim_kiem_benh_nhan").trigger("click");
	set_resolution();
});
var makeTabs = new function(){
		var tabTitle = $( "#tab_title" ),
			tabContent = $( "#tab_content" ),
			tabCounter = 0,
			tabCounter1 = 0;
			var tabs= $( "#tabs" );
	 	this.creatTab = function() {
			var tabs= $( "#tabs" ).tabs();
			tabs.find( ".ui-tabs-nav" ).sortable({
				axis: "x",
				stop: function() {
				tabs.tabs( "refresh" );
				}
			});
			tabs.tabs({
				activate:function(event,ui){
					$(ui.newPanel.selector+ " iframe").focus();
				}
         	});
			tabs.delegate( "span.ui-icon-close", "click", function(e) {
						var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
						temp=$( "#" + panelId ).attr("lang");
						$( "#" + panelId ).remove();
						tabCounter1--;
						tabs.tabs( "refresh" );
						tab_active();
			});
			tabs.bind( "keyup", function( event ) {
				if ( event.altKey && event.keyCode === $.ui.keyCode.BACKSPACE ) {
				var panelId = tabs.find( ".ui-tabs-active" ).remove().attr( "aria-controls" );
				$( "#" + panelId ).remove();
				tabs.tabs( "refresh" );
				}
			});
			tabs.resizable({
			 handles: 's',
			 alsoResize: '.ui-tabs-panel'
			});
		}
		this.addTab = function(Title,Content,Mask,lang) {


			if(lang==0){
				var tabTemplate = "<li><a href='#{href}'  class="+Mask+"-tab >#{label}</a> <span class='ui-icon ui-icon-close "+Mask+"' role='presentation'>Remove Tab</span></li>";

			}else{
				if(typeof window.class_tab_focus == 'undefined'){
					var tabTemplate = "<li><a href='#{href} ' class="+Mask+"-"+$.cookie("id_benhnhan")+"  >#{label}</a> <span class='ui-icon ui-icon-close "+Mask+"' role='presentation'>Remove Tab</span></li>";
				}else{
					var tabTemplate = "<li><a href='#{href} 'class="+window.class_tab_focus+" >#{label}</a> <span class='ui-icon ui-icon-close "+Mask+"' role='presentation'>Remove Tab</span></li>";
					delete window.class_tab_focus;
				}
			}

			var label = Title || "Tab " + tabCounter,
			id = "tabs-" + tabCounter,
			li = $( tabTemplate.replace( /#\{href\}/g, "#" + id ).replace( /#\{label\}/g, label ) ),
			tabContentHtml = Content || "Tab " + tabCounter + " content.";
			tabs.find( ".ui-tabs-nav" ).append( li );
			tabs.append( "<div lang='"+Mask+"' id='" + id + "'>" + tabContentHtml + "</div>" );
			$("#tabs iframe").css("height",$(window).height()-90+"px");
			tabs.tabs( "refresh" );
			
			$("#tabs").tabs( "option", "active", tabCounter1 );
			tabCounter++;
			tabCounter1++;
			$("#scrollbar2 .overview").css("width",$('.ui-tabs-nav').width()+"px");
			$('#scrollbar2').tinyscrollbar_update("relative");
		};
};
function create_scroll(){
	$('#scrollbar1,#scrollbar1 .scrollbar,#scrollbar1 .viewport,#scrollbar1 .track').css("height",$('.left_col').height()-30+"px");
	$('#scrollbar1').tinyscrollbar();
	$("#scrollbar1 .scrollbar").css("opacity","0.5");
	$("#scrollbar1 .scrollbar").hover(function(){
		 $('#scrollbar1 .scrollbar').animate({
   			opacity: 1,
		  }, 500, function() {
		  });
	})
	$("#scrollbar1 .scrollbar").mouseleave(function(){
		 $('#scrollbar1 .scrollbar').animate({
   			opacity: 0.2,
		  }, 500, function() {
		  });

	})
}
function render_page(){
	temp=jQuery(window).height()- ($(".header_form").height())+13;
	$("#panel_main").css("height",temp+"px");
	$(".header_form").fadeIn(1000);
	$("#panel_main").fadeIn(1000);
}
var resize_flag=0;
jwerty.key('f6', false);jwerty.key('f7', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f11', false);jwerty.key('ctrl+p', false);


function tab_idbenhan(){
	$('#tab_tam').click(function(e){
		//alertObject($(e.target).attr('attr'));
		if($(e.target).attr('class').split(' ')[1]=='ui-icon-close'){
			
		}else{
			tab_active()
		}
	})
}
function tab_active(){
	var curTab = $('.ui-tabs-active a');
		
	if(curTab.attr('class').split(' ')[0].split('-')[0]=='benh_an'){	
	
		$.cookie("id_benhnhan", curTab.attr('class').split(' ')[0].split('-')[1]);			
		$.post('pages.php?module=web_services&function=create_session&action=index&id_benhnhan='+curTab.attr('class').split(' ')[0].split('-')[1])
		if($('#'+curTab.attr('class').split(' ')[0]+'-frame').length){
			if (document.getElementById(curTab.attr('class').split(' ')[0]+'-frame').contentWindow.lammoi_click) { 
				document.getElementById(curTab.attr('class').split(' ')[0]+'-frame').contentWindow.lammoi_click();
			}			
		}
	}
	
		if(curTab.attr('class').split(' ')[0].split('-')[0]=='DS_XepHang_LamSang'){		
			if($('#DS_XepHang_LamSang-frame').length){	
				if (document.getElementById('DS_XepHang_LamSang-frame').contentWindow.reload_grid) { 		
					document.getElementById('DS_XepHang_LamSang-frame').contentWindow.reload_grid();
				}
			}
		}else{				
			if($('#DS_XepHang_LamSang-frame').length){		
				if (document.getElementById('DS_XepHang_LamSang-frame').contentWindow.timer_title_danhsach) { 
					document.getElementById('DS_XepHang_LamSang-frame').contentWindow.timer_title_danhsach('stop');
				}
			}
		}
	

		if(curTab.attr('class').split(' ')[0].split('-')[0]=='ds_xephang_canlamsang'){	
			if($('#ds_xephang_canlamsang-frame').length){			
				if (document.getElementById('ds_xephang_canlamsang-frame').contentWindow.reload_grid) { 
					document.getElementById('ds_xephang_canlamsang-frame').contentWindow.reload_grid();		
				}
			}
		}else{
			if($('#ds_xephang_canlamsang-frame').length){	
				if (document.getElementById('ds_xephang_canlamsang-frame').contentWindow.timer_title_danhsach) { 		
					document.getElementById('ds_xephang_canlamsang-frame').contentWindow.timer_title_danhsach('stop');
				}
			}
		}
	
}

</script>