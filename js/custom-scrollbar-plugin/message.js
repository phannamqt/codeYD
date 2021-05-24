			var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			var eventer = window[eventMethod];
			var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
			eventer(messageEvent,function(e) {				 
				tam=e.data.split(";");					 
				//alert(tam);		
				switch (tam[0])
{
case 'thutrano_add':
 thutrano_add()
  break;
  case 'thutrano_edit':
 thutrano_edit()
  break;
case 'molichcanhan':
 molichcanhan()
  break;
case 'addbenhnhan':
  addbenhnhan()
  break;
case 'hosobenhnhantrong':
  hosobenhnhantrong();
  break;
case 'datlichhen':
 datlichhen();
  break;
case 'editbenhnhan':
  editbenhnhan();
  break;
case 'taoluotkham':
  taoluotkham();
  break;
case 'themmoibn_thanhcong':
  themmoibn_thanhcong();
  break;
case 'taoluotkham_thanhcong':
  taoluotkham_thanhcong();
  break;
case 'molichsudauhieusinhton':
  molichsudauhieusinhton();
  break;
case 'dong_popup':
  dong_popup();
  break;
case 'chidinhkham':
  chidinhkham();
  break;
case 'benhan':
  benhan();
  break;
case 'edit_images':
  edit_images();
  break;
case 'canlamsang':
  canlamsang();
  break;
case 'dieutriphoihop':
  dieutriphoihop();
  break;
case 'dsdauhieusinhton':
  dsdauhieusinhton();
  break;
case 'changetitle':
  changetitle();
  break;
case 'opentab':
  opentab();
  break;
case 'editluotkham':
  editluotkham();
break;
case 'chitiethangmuckham':
  chitiethangmuckham();
break;
case 'in_an':
  in_an();
break; 
case 'open_idluotkham':
  open_tabmutil('idluotkham');
break;   
case 'open_idbenhnhan':
  open_tabmutil('idbenhnhan');
break; 
case 'open_idkham':
  open_tabmutil('idkham');
break; 
case 'benhan_luotkham':
  benhan_luotkham();
break; 
case 'upload_module':
  upload_module();
break; 
case 'close_upload':
  close_upload();
break; 
case 'hide_upload':
  hide_upload();
break; 
case 'hide_close':
  hide_close();
break; 
case 'post_message':
  post_message();
break; 

case 'motab_chung':
  motab_chung();
break; 

}
function close_upload(){	
	$("#dialog_"+tam[1]).fadeOut(200, function() {
		$("#dialog_"+tam[1]).remove();	
		$(".ui-widget-overlay").remove();
	});
}
function hide_upload(){
	$("#dialog_"+tam[1]).fadeOut(200);		 
}
function post_message(){
	tooltip_message("Chọn sai định dạng file");
} 
function hide_close(){
	 $("#dialog_"+tam[2]+ " #close" ).css("visibility","hidden");
}
function upload_module(){
	var kiemtradom=false;
	var _count=0		
	$('body').find('.upload_frame iframe').each(function(){		 
		// var kiemtradom=false;
		n=$(this).attr("src").search(tam[2]);	
			 
		 if(n!="-1") {
			 kiemtradom=true;	 
		 }
		 _count++;
		 //alert(kiemtradom)
	});
	if((kiemtradom==false)||(_count==0)){
		 elem1=1 + Math.floor(Math.random() * 1000000000);
		 custom_dialog("upload","305px", "64px", elem1, tam[1]);
	}else{
		tooltip_message("Tác vụ này đang thực thi");
	}
	
	//_link="pages.php?module=images_control&view=image_upload&id_form=61&multi=true&action_upload=upload_module&tenthumuc=USTQ//89045&default_name=89045_1044286_3906&profile=";
	//$("body").append("<div class='upload_module container'"+elem+" id='modal"+elem+"'><iframe id='iframe'"+elem+"></iframe></div>")	;
	//alert(tam[1])
	/*$('body').find('.upload_frame iframe').each(function(){
		
		 var kiemtradom=false;
		 if($(this).attr("src")!=tam[1]) {
			 console.log($(this).attr("src"))	
		 	dialog_upload("upload","325px", "78px", elem, tam[1]) ;		 
		 }
	});	
	if(typeof(kiemtradom)=="undefined"){*/
		//dialog_upload("upload","325px", "78px", elem, tam[1]) ;	
		
//	}
	 
}
function thutrano_add(){
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&ID_LuotKham='+tam[2]+'&idbenhnhan='+tam[3]+'&oper='+tam[4]+'&mabenhan='+tam[5]+'&tenbenhan='+tam[6];  
		 			 
		dialog_main('Thanh toán viện phí ngoại trú',100,100,elem,duong_dan);
		})	
}
function thutrano_edit(){
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&ID_ThuTraNo='+tam[2]+'&idbenhnhan='+tam[3]+'&oper='+tam[4]+'&mabenhan='+tam[5]+'&tenbenhan='+tam[6];  
		 			 
		dialog_main('Thanh toán viện phí ngoại trú',100,100,elem,duong_dan);
		})	
}
function open_tabmutil(id){ 
	
	if(id=='idluotkham'){
		var id_check=tam[2];
	}else if(id=='idbenhnhan'){
		var id_check=tam[3];
	}else if(id=='idkham'){
		var id_check=tam[4];		
	}
	
	if($('.'+tam[1]).attr("lang")=="0")	{
		window.class_tab_focus=tam[1]+'-tab';	
	}else{
		window.class_tab_focus=tam[1]+'-'+id_check;	
	}
	if($("."+window.class_tab_focus).length){	
	   $("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idluotkham='+tam[2]+'&idbenhnhan='+tam[3]+'&idkham='+tam[4]+'&mabenhan='+tam[5]+'&tenbenhan='+tam[6];  
		 makeTabs.addTab(folder[3],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus+'_close');				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}	
}



function in_an(){ 
	dialog_report(tam[1],tam[2],tam[3],tam[4],tam[5],tam[6],tam[7]);
}
function chitiethangmuckham(){ 
	
	if($('.'+tam[1]).attr("lang")=="0")	{
		window.class_tab_focus=tam[1]+'-tab';	
	}else{
		window.class_tab_focus=tam[1]+'-'+tam[2];	
	}
	if($("."+window.class_tab_focus).length){	
	   $("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idluotkham='+tam[2]+'&mabenhnhan='+tam[3]+'&tenbenhnhan='+tam[4];  
		 makeTabs.addTab(folder[3]+' '+tam[4],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus+'_close');				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}	
}
function opentab(){
	
	
	if($('.'+tam[1]).attr("lang")=="0")	{
		window.class_tab_focus=tam[1]+'-tab';	
	}else{
		window.class_tab_focus=tam[1]+'-'+$.cookie("id_benhnhan");	
	}
	if($("."+window.class_tab_focus).length){	
	   $("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];  
		 makeTabs.addTab(folder[3],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus+'_close');				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}	
}


function motab_chung(){
	
	window.class_tab_focus=tam[1]+'-tab';
	
	if($("."+window.class_tab_focus).length){	
	   $("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];  
		 makeTabs.addTab(folder[3],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus+'_close');				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}	
}



function changetitle(){
	$( "."+tam[1] ).text(tam[2]+' '+tam[3]); 
}
function dsdauhieusinhton(){
	window.class_tab_focus='dsdauhieusinhton';				
	if($("."+window.class_tab_focus).length){	
	   $("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=dau_hieu_sinh_ton:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];  
		 makeTabs.addTab(folder[3],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus+'_close');				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}	
}

function dieutriphoihop(){
	window.class_tab_focus='dieutriphoihop_'+tam[1];				
	if($("."+window.class_tab_focus).length){	
	   $("."+window.class_tab_focus).trigger("click");
	}else{						
	   $.post('pages.php?module=web_services&function=get_link&action=index&folder=dieutriphoihop:').done(function(data) {
	   elem=1 + Math.floor(Math.random() * 1000000000);
	   var folder= data.split(';');
	   var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idluotkham='+tam[1];  
	   makeTabs.addTab(folder[3]+' '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus+'_close');				 
	   callIframe(duong_dan, hide_loader,elem);
	   })	
	}			 
	window.lastclick=class_tab_focus+'_close';
}
function canlamsang(){
	if(tam[4]=='0'){
		window.class_tab_focus=tam[1]+'-'+tam[2];
	}else{
		window.class_tab_focus=tam[1]+'-'+tam[4];
	}
	if($("."+window.class_tab_focus).length){	
		$("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder='+tam[1]+':').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&id_benhnhan='+tam[2]+'&id_kham='+tam[4];  
		 makeTabs.addTab(folder[3]+' '+tam[3],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>',class_tab_focus);				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}			 
	window.lastclick=class_tab_focus;
}

function edit_images(){
	/*elem="6754353898787675";
	dialog_add_dm('Chỉnh sửa hình ảnh',95,95,elem,'pages.php?module=images_control&view=images_edit&id_form=49&search_string='+tam[1]+"&tenthumuc="+tam[2],refresh_images);	*/
}
function benhan(){
	$.post("pages.php?module=web_services&function=create_bn&action=index&id_benhnhan="+tam[1]);	 
	window.class_tab_focus='benhan_'+tam[1];
	if($("."+window.class_tab_focus).length){	
		$("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=benh_an:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&id_benhnhan='+tam[1];  
	    makeTabs.addTab('Bệnh án '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','2_btn_datlichhenkham');				 
				  callIframe(duong_dan, hide_loader,elem);
		 })	
	}
}
function chidinhkham(){
   $.post("pages.php?module=web_services&function=create_bn&action=index&id_benhnhan="+tam[3]);					
	window.class_tab_focus='chidinhkham_'+tam[1];
	if($("."+window.class_tab_focus).length){	
		$("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=chidinhkham:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idluotkham='+tam[1];  
		makeTabs.addTab('Chỉ định khám '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','2_btn_datlichhenkham');				 
		callIframe(duong_dan, hide_loader,elem);
	    })	
	}
}


function dong_popup(){
	 $(".modal" + window.elem).dialog( "close" );		
}
	
function molichsudauhieusinhton(){
	temp=($(".lich_su_dau_hieu_sinh_ton").attr("role")).split(":");
	links=$(".lich_su_dau_hieu_sinh_ton").attr("id")+"&id_benhnhan="+tam[1]+"&ten_benhnhan="+tam[2];  
	window.elem=1 + Math.floor(Math.random() * 1000000000); 
	width=temp[0];
	height=temp[1];				 				
	dialog_main($(".lich_su_dau_hieu_sinh_ton").html()+ " " +tam[2],width,height,elem,links);		
}	
				
function taoluotkham_thanhcong(){		
	tab_id='editbenhnhan_'+tam[1];				
	$( ".taoluotkham_"+tam[2] ).switchClass( "taoluotkham_"+tam[2], tab_id, 1000);				
}			
function themmoibn_thanhcong(){
	tab_id='editbenhnhan_'+tam[1];	
	$( ".themmoibn" ).text('Thông tin bệnh nhân '+tam[2]);
	$( ".themmoibn" ).switchClass( "themmoibn", tab_id, 1000);
}						
function molichcanhan(){
	 elem=1 + Math.floor(Math.random() * 1000000000);
				 dialog_main('Lịch cá nhân của ' + tam[1] + ' thuộc ' + tam[2],95,95,elem,'pages.php?module=lich&view=lich_ca_nhan&id_form=28&params='+tam[3]);			
	
}				
function addbenhnhan(){			
	window.class_tab_focus='themmoibn';
	if($("."+window.class_tab_focus).length){	
		$("."+window.class_tab_focus).trigger("click");
	}else{						
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=them_moi_benhnhan:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
	    var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&holot='+tam[1]+'&ten='+tam[2];		  				  
		makeTabs.addTab('Thêm mới bệnh nhân ','<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','2_btn_datlichhenkham');				 
		callIframe(duong_dan, hide_loader,elem);
	    })	
	}	
}				
function hosobenhnhantrong()	{	
	 $("."+window.lastclick).click();
	 tooltip_message("Vui lòng chọn hồ sơ bệnh nhân");
}
function datlichhen(){					
	 $.post("pages.php?module=web_services&function=create_bn&action=index&id_benhnhan="+tam[1]);				  
	 $.post('pages.php?module=web_services&function=get_link&action=index&folder=lich_hen_kham:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
	    var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2];				  				  
		makeTabs.addTab('Đặt lịch hẹn khám - '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','1_btn_datlichhenkham');
		callIframe(duong_dan, hide_loader,elem);	
	 })			
}
function editbenhnhan(){
	 //$.post("pages.php?module=web_services&function=create_bn&action=index&id_benhnhan="+tam[1]);
	 window.class_tab_focus='editbenhnhan_'+tam[1];
	 if($("."+window.class_tab_focus).length){	
		$("."+window.class_tab_focus).trigger("click");
	 }else{
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=them_moi_benhnhan:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&idbenhnhan='+tam[1]+'&oper=edit';				  				  
		makeTabs.addTab('Thông tin bệnh nhân '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','1_btn_datlichhenkham');
		callIframe(duong_dan, hide_loader,elem);	
		})			 
	  }
}

function taoluotkham(){
	//alert();
	window.class_tab_focus='taoluotkham_'+tam[1];			
	if($("."+window.class_tab_focus).length){						
		$("."+window.class_tab_focus).trigger("click");
	}else{
	    $.post('pages.php?module=web_services&function=get_link&action=index&folder=tao_luot_kham:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&oper=add&id_benhnhan='+tam[1];				  		makeTabs.addTab('Lượt khám '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','2_btn_datlichhenkham');				 
		callIframe(duong_dan, hide_loader,elem);
		 })				
	}				 
}
function editluotkham(){
	window.class_tab_focus='editluotkham_'+tam[1];								
	if($("."+window.class_tab_focus).length){						
		$("."+window.class_tab_focus).trigger("click");
	}else{
	    $.post('pages.php?module=web_services&function=get_link&action=index&folder=tao_luot_kham:').done(function(data) {
		elem=1 + Math.floor(Math.random() * 1000000000);
		var folder= data.split(';');
		var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&oper=edit&id_ttluotkham='+tam[1];				  		makeTabs.addTab('Lượt khám '+tam[2],'<div class="loading"><div id="loading"></div></div><iframe id="frame1" class="frame_'+elem+' src=""></iframe>','2_btn_datlichhenkham');				 
		callIframe(duong_dan, hide_loader,elem);
		})	
	}				 			 
}

function benhan_luotkham(){
	
	if(tam[3]=='undefined'||tam[2]=='undefined'){
		id_benhnhan=$.cookie("id_benhnhan");
		id_luotkham='';
	}else{
		id_benhnhan=tam[3];
		id_luotkham=tam[2];
	}
	window.class_tab_focus='benhan_'+tam[3];
		if($("."+window.class_tab_focus).length){	
			$("."+window.class_tab_focus).trigger("click");
		}else{					
			
			$.post('pages.php?module=web_services&function=get_link&action=index&folder=benh_an:').done(function(data) {
			elem=1 + Math.floor(Math.random() * 1000000000);
			var folder= data.split(';');
			var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+'&id_benhnhan='+tam[3]+'&id_luotkham='+tam[2];  
			makeTabs.addTab('Bệnh án ','<div class="loading"><div id="loading"></div></div><iframe id="'+folder[1]+'-frame1" class="frame_'+elem+' src=""></iframe>','benhan_'+tam[3]+'-close');				 
			 callIframe(duong_dan, hide_loader,elem);
		 })	
	}					 			 
}
		
			
			
			
			},false);