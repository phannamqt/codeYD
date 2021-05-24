/**
 * jQuery expand menu  Plugin
 * @version: 1.0
 * @author: Tran Truong Chinh, trantruongchinh@gmail.com
 * @licence: MIT
 * @desciption: 
 */
$.fn.makeExpandMenu = function (config) {	  
	var defaults = {
        skin: "button_green",
		icon: "plus_green",	
		icon1: "minus_green", 
    };	
	this.config = $.extend({}, defaults, config || {}); //neu ko khai config se lay default	
	var icon=this.config.icon;
	var icon1=this.config.icon1; 
	var flag=0;		
	var ExpandMenu=	$("."+$(this).attr("class"));		
	ExpandMenu.append('<div class="'+this.config.skin+'"></div>');	 
	var divMain=$("."+$(this).attr("class")+" ."+this.config.skin);	
	divMain.append('<div class="'+this.config.icon+'"></div>')	;	
	var divSub=$("."+$(this).attr("class")+" ."+this.config.icon);	
	divSub.append('<span class="title">'+this.config.title+'</span>')	;	
	ExpandMenu.append('<ul></ul>');	
	var ExpandMenuUL=	$("."+$(this).attr("class")+" ul"); 
	calPos(this.config.icon,this.config.skin); 	
	function calPos(icon,skin){			
		var replaces = Array("%","auto","px","em");
		nutbam=parseFloat(divSub.css("background-size").replace(replaces,""));		
		nutbam_kichthuoc=divMain.width()/100*nutbam;	
		top1=(divMain.height()/2)-(nutbam_kichthuoc/2)-2;		
		left=divMain.width()/100*nutbam/3+8;	 
		divSub.css("background-position",left+"px  "+top1+"px");		
		top_title=divMain.height()-($(".title").height()/2)-4;
		left_title=nutbam_kichthuoc+left+2;		
		$(".title").css("font","13px/"+top_title+"px Tahoma, Geneva, sans-serif");	
		$(".title").css("margin-left",left_title+"px");		 
	}
	//alert($(this).attr("class"))	
	divMain.click(function(){
		if(flag==0){
			divSub.removeClass(icon).addClass(icon1);			 
			flag=1;		
			ExpandMenuUL.show(300,"linear",function(){
				$('#scrollbar1').tinyscrollbar_update("relative");				
			});
			$(".old_expand").trigger("click");	
			$(this).addClass("old_expand");			 
		}else{
			divSub.removeClass(icon1).addClass(icon);			 
			flag=0;
			ExpandMenuUL.hide(300,"linear",function(){
				$('#scrollbar1').tinyscrollbar_update("relative");		
			});	
			$(this).removeClass("old_expand");				 
			//ExpandMenuUL.hide(400);	
		}		
	})		 
};