
<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["id_benhnhan"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["id_benhnhan"];
		echo "</script>";
	}
	}


	if(isset($_GET["id_kham"])){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".$_GET["id_kham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=0";
		echo "</script>";
		}
?>
 
 
<style>
	#DM_template td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	#DM_template_container{
		position:absolute;
		z-index:1000000;		 
		display:none;	
		box-shadow:0px 0px 6px #333;	 	
	}
	 button#last,button#first,button#prev,button#next{
		 font-size:7px!important;
		 margin-top:-6px;
		/* padding-left:20px;*/
		 
	 }
	 #open_template,#add_template{
		 font-size:11px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 
	 }
	 .ui-widget-overlay {
		  opacity:0.01;
		  filter: alpha(opacity=1); 
		  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
		  /*overlay trong suot*/  
		  }
	  #open_template{		
		 border-radius:0px!important;	
	 }	 
	 .ui-corner-all{		 
		 border-radius:3px!important;		 
	 }
	 .fm-button{
		 box-shadow:0px 0px 5px #383838;
		 border:1px solid #919191;
	 }  	
	.top_form{
		width:100%;
		height:139px;
		margin-top:3px;				
	}	 	 
	.thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.thongtin_luotkham{
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		display:inline-block;
		vertical-align:top;
		width:55%;
		overflow-y:none;
		margin-top:2px;
		height:67px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:45px;
	}	 
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}	 
	.thongtin_luotkham div div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-left:2px;
		margin-top:2px;		 
		padding:2px;
		width:114px;
		height:30px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
	}
	.navigator{
		 display:inline-block;
		 border:1px solid #327E04;
		 padding-top:6px;
		 margin-top:-4px;
		 margin-left:2px;
		 padding-bottom:2px;
		 padding-left:2px;
		 padding-right:1px; 
	}
	.navigator_title{
		display:inline-block;
		width:100px;
		text-align:center;
	}
	.ui-layout-mask {
		background:#FFF !important;
		opacity:.20 !important;
		filter:	alpha(opacity=20) !important;
	}
	#mota{
		font-size:13px!important;		 	 
	}
	.sieuam1{
		background-color: #b3ffb3;
	}
</style>
<body>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' name="nguoi_chidinh"style="width:100px" type="text" id="nguoi_chidinh"disabled>
            <label style="width:90px;margin-left:10px;text-align:right">Người thực hiện:</label>
            <span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span> 
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label>
            <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span> 
            <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input name="ngaychidinh"lang='luu'style="width:100px" type="text" id="ngaychidinh" disabled>
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 604px;">   
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>
            <label id="canhbao" style="color:#F00; font-weight:bold"></label>           
    </div>
 
    <div class="thongtin_luotkham" id="right_col">  	 
    	<div style="margin-top: 2px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>	 
		<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    	</div>
    	<div style="margin-top: 10px;">
        <!--<a href="#" id="xemin2" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">In nhãn xray<span class="ui-icon ui-icon-print"></span></a> 	-->
    	 	
         
    	</div>
    	<div style="margin-top: -9px">
	   	<a href="#" id='open_form_hentra'>Giờ hẹn trả kết quả: </a>
	    	<label id="giohentra" style="color:blue"></label> 	
    	</div>
    	<div style="margin-top: 0px; margin-left:5px;" >
	    	<span id="edit_by" style=" visibility: hidden;"><label>Sửa bởi:</label>
	    		<label id="nguoisua" style="color:blue"></label>
	    		<label id="ngaygiosua" style="color:blue"></label>
	    	</span>
            <span style="margin-left:60px"><label  for="chonanh">Chọn ảnh</label><input id="chonanh" type="checkbox"></span>
			<span style="float:right; margin:5px 10px 0 0" id="In_CoChuKy">
        	In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/>
        </span>	
    	</div> 
    </div>
   
 </div> 
 
 <div id="panel_main">    

        <div id="image_id" class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>        
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
           <label style="text-align:left;font-size:14px">Kết luận:</label>
                <textarea lang='luu'id="ketluan" name="ketluan"style="font-size:13px" ></textarea>  	   
        </div>
          
	</div>
 
</body>
</html>
<script type="text/javascript">
var report_code=["SieuAmXRay"];
var report_name=["Siêu âm XRAY"];
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var trangthai;
var id_benhnhan;
var id_kham3;
var nhanvien_control;
var tenloaikham;
var idluotkham;
var chuky = 1;
$(document).ready(function() {	
	$("#open_form_hentra").click(function(e){
		$.post('pages.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
			elem=1 + Math.floor(Math.random() * 1000000000);
			width=90;
			height=90;
			var folder= data.split(';');
			var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+"&idluotkham="+idluotkham;				  				  
			dialog_add_dm("",width,height,elem,links);   
		})
	  
	 });	

	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;	
		create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	$('#sua').button();
	$('#luu').button();
	$('#xemin2').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	openform_shortcutkey();
		
	//load_image();
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");
	  ma_benhnhan=$('.profile_container .mabenhnhan').text() ;    	    
	});
        
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	window.search_string="";
	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}	
	})
	
	$("#xemin").click(function(e){	
			$("#luu").click();
		if($('#chonanh').is( ":checked" )) {
			print_action="chonanh";
			
		} else {
			print_action="xemin";
			//dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		}
		if($('#In_CoChuKy input:checkbox').is( ":checked" ))
		{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"InKhoA4MauInNgang",print_action,"&chuky=1","","","left",1,"dientamdo",'<?=$modules?>',"780");	
		}else{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"InKhoA4MauInNgang",print_action,"&chuky=1","","","left",1,"dientamdo",'<?=$modules?>',"780");		
			}
		
		$(".frame_u78787878975f").css("width","793px");
		 
	 
	});
 

	if(id_kham2!="0"){
		
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo&idbenhnhan="+id_benhnhan, 
			function( data ) {
			data_luotkham=data;

		 	//alertObject(data_luotkham);
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					//tam+=" ; "+val[i]["id"];
					var tam1_cls=val[i]["cell"];
					//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
					_id_luotkham.push(tam1_cls[5]);				
					_id_loaikham.push(tam1_cls[3]);
					_id_luotkham_non_unique.push(tam1_cls[5]);
					_id_kham.push(val[i]["id"]);

					
				}
				//_id_luotkham=$.unique(_id_luotkham).reverse();
				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham);
				//_id_loaikham=$.unique(_id_loaikham);
				//navigator_load("end","first");			
				 //alert(_id_kham);		
						load_complete();
						goto_kham(id_kham2)	;		 
			//$('.template_title_button').button( 'disable');
				//trangthai=tam1_cls[9]; 
				if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
					$('.template_title_button').button( 'disable');
				}
				 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
				 	$('.template_title_button').button( 'enable');
				 }
			});		
		});
}
else{
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;

	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);

				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			load_complete();
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");			
			 //alert(_id_kham);		
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
			//trangthai=tam1_cls[9]; 
			if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
				$('.template_title_button').button( 'disable');
			}
			 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
			 	$('.template_title_button').button( 'enable');
			 }
		});		
	});
}
	function test(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		delete tong_luotkham;
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdo&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			navigator_load(0,id_kham3);
		
		});		
	});	
	
	}
	
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-151+"px");	
		resize_control();	 
	});

	//navigator_load(0);
	$(function() {
		$( "#left_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			navigator_load("first","first");
			
		});
		$( "#left_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			navigator_load("end","first");
			
		}); 
		$( "#left_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			navigator_load(1,"first");			 
		});  
		$( "#left_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			navigator_load(-1,"first");
			
		});
		$( "#open_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-triangle-1-s"
		  }
		})
		.click(function(e) {
			 e.stopPropagation();   
		 	 $("#DM_template_container").fadeIn(200);
			 $("#template_title").focus();			
		});
		$( "#add_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		.click(function() {
		 
		});
                $("#cancel").click(function(){
			$("#dialog-form").dialog("close");
		});
		$("#xoamota").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoamt';
				//$("#mota").val("");
				//$("#ketluan").val("");
				//$("#loikhuyen").val("");
		});
		$("#xoatskt").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoats';
				//$("#ketluan").val("");
		});
		$("#xoaketluan").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoakl';
				//$("#ketluan").val("");
		});
		$("#xoaloikhuyen").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoalk';
				//$("#loikhuyen").val("");
		});
		/*center*/
		$( "#center_col #first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			sub_navigator_load("first","click");
		});
		$( "#center_col #last" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			sub_navigator_load("end","click"); 
		}); 
		$( "#center_col #next" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-next"
		  }
		})
		.click(function() {
			sub_navigator_load(1,"click");  
		});  
		$( "#center_col #prev" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-prev"
		  }
		})
		.click(function() {
			sub_navigator_load(-1,"click");  
		});		         
  	}); 
        $("#yes2").click(function(){
				if(window.oper=='xoamt'){
					$("#mota").val("");
					$("#thongsokt").val(""); //thong so ky thuat
					$("#ketluan").val("");
					$("#loikhuyen").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoats'){
					$("#thongsokt").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoakl'){
					$("#ketluan").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoalk'){
					$("#loikhuyen").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
			});
			  $("#no2").click(function(){
			  	$( "#dialog-form2" ).dialog( "close" );
			  });
			  
			  $("#sua").click(function(){
					//$('#sua').button( {disabled:true});
					lock_viewer(true,"visible");
					kt_trangthai(_id_trangthai);
					$('#luu').button( {disabled:false});
					$('#ketluan').attr("disabled",false);
					$('#mota').attr("disabled",false);
					$('#thongsokt').attr("disabled",false);//thong so ky thuat					
					$('#loikhuyen').attr("disabled",false);
					$('#xoatskt').button( {disabled:false});//xoa thong so ky thuat					
					$('#xoaketluan').button( {disabled:false});
					$('#xoaloikhuyen').button( {disabled:false});
					$('#xoamota').button( {disabled:false});
					$('#open_template').button( {disabled:false});
					$( "#template_title" ).attr("disabled",false);
					$("#sua").hide();
					$('#boqua').show();
					$('.template_title_button').button( {disabled:false});
					//$('.chuandoan_button').button( {disabled:false});
					//$('.nhanvien_button').button( {disabled:false});
					//$( "#nhanvien" ).attr("disabled",false);
					// $( "#chuandoan" ).attr("disabled",false);
					$('#add_template').button( {disabled:false});
					window.test1="giosuacuoi";
			  });
				$("#boqua").click(function(){
					lock_viewer(false,"hidden");
					$("#sua").show();
					$('#boqua').hide();
					$('#luu').button( {disabled:true});
					$('#ketluan').attr("disabled",true);
					$('#mota').attr("disabled",true);
					$('#thongsokt').attr("disabled",true);//thong so ky thuat
					$('#loikhuyen').attr("disabled",true);
					$('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
					$('#xoaketluan').button( {disabled:true});
					$('#xoaloikhuyen').button( {disabled:true});
					$('#xoamota').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					$("#mota").val(mota5);
					$("#thongsokt").val(thongsokt5);
					$("#ketluan").val(ketluan5);
					$("#loikhuyen").val(loikhuyen5);
					$("#nhanvien1").val(nhanvien4);
					$("#chuandoan1").val(chuandoan4);
					$('.template_title_button').button( {disabled:true});
					//$('.chuandoan_button').button( {disabled:true});
					//$('.nhanvien_button').button( {disabled:true});
					//$( "#nhanvien" ).attr("disabled",true);
					// $( "#chuandoan" ).attr("disabled",true);
					kt_trangthai(_id_trangthai);
					$('#add_template').button( {disabled:true});
					setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);

					//reload();
				});
			  $("#dathuchien").click(function(){
					$("#id_trangthai").html("Đã thực hiện");
					$('#dathuchien').button( {disabled:true});
					$('#sua').button( {disabled:false});
					$('#luu').button( {disabled:true});
					$('#xoamota').button( {disabled:true});
					$('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
					$('#xoaketluan').button( {disabled:true});
					$('#xoaloikhuyen').button( {disabled:true});
					$('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
					$('#ketluan').attr("disabled", "disabled");
					$('#mota').attr("disabled", "disabled");
					$('#loikhuyen').attr("disabled", "disabled");
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					_id_trangthai="DaThucHien";
					$('.template_title_button').button( {disabled:true});
					//$('.chuandoan_button').button( {disabled:false});
					//$('.nhanvien_button').button( {disabled:true});
					//$( "#nhanvien" ).attr("disabled",true);
					kt_trangthai(_id_trangthai);
					$('#add_template').button( {disabled:true});
					$('#boqua').hide();
					$('#sua').show();
						$("#giothuchien").html(gio("current"));
						var giothuchien2= $( "#giothuchien" ).text();
					  phancach = "";
					i = 0;
					dataToSend = '{';
					$('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

						if ($(this).attr("lang") == "luu") {
						  
							dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						  
						}
						phancach = ",";

					});
					dataToSend += phancach + '"id_kham":"' + _kham + '"';
					//alert(_id_trangthai);
					dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';

					 dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
					 dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					//alertObject(dataToSend); 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
					.done(function( gridData ) {
						if($.trim(gridData)=='') {
							tooltip_message("Đã thực hiện");
							test();
							emr_thuchienxong(_kham,'','','','');// Xếp hàng chuyển phòng  
						}else{
							alert(gridData);
						}
					})
					.fail(function() {
						alert( "error" );
					});
			                                          
			                                             
			  });
			  $("#hoantat").click(function(){
					$("#id_trangthai").html("Đã hoàn tất");
					$('#dathuchien').button( {disabled:true});
					$('#hoantat').button( {disabled:true});
					$('#sua').button( {disabled:false});
					$('#luu').button( {disabled:true});
					$('#xoamota').button( {disabled:true});
					$('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
					$('#xoaketluan').button( {disabled:true});
					$('#xoaloikhuyen').button( {disabled:true});
					$('#thongsokt').attr("disabled", "disabled"); //thong so ky thuat
					$('#ketluan').attr("disabled", "disabled");
					$('#mota').attr("disabled", "disabled");
					$('#loikhuyen').attr("disabled", "disabled");
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					_id_trangthai="Xong";
					$('.template_title_button').button( {disabled:true});
					//$('.chuandoan_button').button( {disabled:true});
					//$('.nhanvien_button').button( {disabled:true});
					//$( "#nhanvien" ).attr("disabled",true);
					kt_trangthai(_id_trangthai);
					//  $( "#chuandoan" ).attr("disabled",true);
					  $('#add_template').button( {disabled:true});
					  $('#boqua').hide();
					  $('#sua').show();
						$("#giothuchien").html(gio("current"));
						var giothuchien2= $( "#giothuchien" ).text();
						$("#giohoantat").html(gio("current"));
						var giohoantat2= $( "#giohoantat" ).text();
					  phancach = "";
					i = 0;
					dataToSend = '{';
					$('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

						if ($(this).attr("lang") == "luu") {
						  
							dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
						  
						}
						phancach = ",";

					});
					dataToSend += phancach + '"id_kham":"' + _kham + '"';
					//alert(_id_trangthai);
					dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';

					 dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
					 dataToSend += phancach + '"giohoantat":"' +giohoantat2+ '"';
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					alertObject(dataToSend); 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
					.done(function( gridData ) {	
					if($.trim(gridData)=='') {
						tooltip_message("Đã hoàn tất");
						test();                          
					}else{
						alert(gridData);
					}

					})
					.fail(function() {
					alert( "error" );
					});
			                                                       
			  });
			$("#add_template").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
					 })
			  $('#luu').click(function (){
				if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){

				}
			  	else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
					$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					//alert(_id_trangthai);
					//if(_id_trangthai=="DaThucHien")
					$( "#nhanvien" ).attr("disabled",true);
					  $( "#chuandoan" ).attr("disabled",true);
					  $('#add_template').button( {disabled:true});
					 // setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					  //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					  $('#ketluan').attr("disabled",true);
					  $('#mota').attr("disabled",true);
					  $('#thongsokt').attr("disabled",true);//thong so ky thuat
					   $('#loikhuyen').attr("disabled",true);
					   $('#xoatskt').button( {disabled:true});//xoa thong so ky thuat
					   $('#xoaketluan').button( {disabled:true});
					   $('#xoaloikhuyen').button( {disabled:true});
					   $('#xoamota').button( {disabled:true});
					   $('#open_template').button( {disabled:true});
					   $( "#template_title" ).attr("disabled",true);
					   kt_trangthai(_id_trangthai);
					   if(window.test1=="giosuacuoi"){
						//$("#edit_by").show();
						var nguoisua2=$("#nhanvien1").val();
						//alert(nguoisua2);
						$("#nguoisua").html($("#nhanvien").val());
						$("#ngaygiosua").html(gio("current"));
					  }}
						var ngaygiosua2=$("#ngaygiosua").text();
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

			            if ($(this).attr("lang") == "luu") {
			              
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
			              
			            }
			            phancach = ",";

			        });
			        dataToSend += phancach + '"id_kham":"' + _kham + '"';
			        //alert(_id_trangthai);
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			       
			        dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
			        dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			       //alertObject(dataToSend); 
			       if(window.test2=="dathuchien1"){
			       	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
			       	.done(function( gridData ) {	
			       		
			       		if($.trim(gridData)=='') {
			       			tooltip_message("Đã lưu"); 
			       			test();                          
			       		}else{
			       			alert(gridData);
			       		} 
			       	})
			       	.fail(function() {
			       		alert( "error" );
			       	})
			         }
			         if(window.test2=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
			         	.done(function( gridData ) {	
			         		if($.trim(gridData)=='') {
			         			tooltip_message("Đã lưu"); 
			         			test();                          
			         		}else{
			         			alert(gridData);
			         		}   
			         	})
			         	.fail(function() {
			         		alert( "error" );
			         	})
			                                            //alert();
			         }     
			           if(window.test2=="dangkham1"){
			           	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
			           	.done(function( gridData ) {	
			           		if($.trim(gridData)=='') {
			           			tooltip_message("Đã lưu"); 
			           			test();                          
			           		}else{
			           			alert(gridData);
			           		}    
			           	})
			           	.fail(function() {
			           		alert( "error" );
			           	})
			           }
			                                
			    });
			 	phanquyen();
				image_message();
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });  
	
	
});


function sub_navigator_load(_value,_flag){
	var tong_luotkham=getCount2(id_loaikham, _id_loaikham);
	if((sub_navigator_count+_value>tong_luotkham-1)||(sub_navigator_count+_value<0)){
		return false;	
	}	
	if(_value=="first"){
		sub_navigator_count=0;	
	}else if(_value=="end"){		 
		sub_navigator_count=tong_luotkham-1;
	}else{
		sub_navigator_count+=parseInt(_value);
	}
	//$.each( data_luotkham, function( key, val ) {
		 
			/*	for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");					 
					if(tam==tam1){					 
						$("#mota").val(val[i]["cell"][6]); 
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 						
					} 
				}*/
				if(_flag=="click"){				 	 
				var ii=tong_luotkham-1,i=0;y=_id_luotkham.length;
				
				//console.log(_id_kham)	
							 
				for(i=_id_kham.length-1;i>=0;i--){	
				var abc=i+1;
				//console.log(_id_luotkham_non_unique[i]+" "+_id_luotkham_non_unique[abc])
					if(i!=_id_kham.length-1){
						
						if(_id_luotkham_non_unique[i]!=_id_luotkham_non_unique[abc]){													
							y--;
							//console.log(y)
						}
					}	 
					if(_id_loaikham[i]==id_loaikham){						 				 
					
										 			 
						if(ii==sub_navigator_count){
								
							
								 
								 navigator_load((y-(navigator_count+1)),"");
								 
								 $('#'+_id_kham[i]).click();
							// }
							break;
						}
						ii--;	
							//console.log(_id_kham[i]+"  "+i);												 
					}
				}
				 			
				/*for(iii=0;iii<_id_kham.length;iii++){												 
					if(id_kham[i]==_id_kham[iii]){
						console.log(i +"  -  " + navigator_count)
						//navigator_load(i-navigator_count,"");	
					}								
				} */
							//console.log(_id_luotkham_non_unique[i])
			}
				//alert(_id_luotkham_non_unique[i])
				//load_image($(this).attr("alt"));				
		 
	//});	 
	$("#center_col .navigator_title").html("Lần " + (sub_navigator_count+1) +"/"+tong_luotkham);
	//navigator_load(-1,"");
}
function navigator_load(_value,_click){
	
	if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
		return false;	
	}
	var tam_cls=""; 
	if(_value=="first"){
		navigator_count=0;	
	}else if(_value=="end"){		 
		navigator_count=_id_luotkham.length-1;
	}else{
		navigator_count+=parseInt(_value);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				$("#ngay_kham").html(tam1_cls[2]);	
				if(tam1_cls[20]==46){
					
					$("#canhbao").html("ĐÂY LÀ NỘI TRÚ, ĐỀ NGHỊ KHÔNG IN ẢNH");
				}
				else{
					$("#canhbao").html("");
				}
							 
				// $("#id_trangthai").html(tam1_cls[9]);
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}else{
		$("#left_col #"+id_kham3).click()
	}
	$("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);	

}
function gio(inputA){
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";
			var dd = d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yyyy = d.getFullYear();
			if(inputA!="current"){
			if(String(inputA).match(' ')!=null){
			var bientam=inputA.split(" ");
			if(bientam[0].length>bientam[1].length){
			var ngaytam=bientam[0].split($.cookie("phancachngay"));
			var giotam=bientam[1].split(":");
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			}else if(bientam[1].length>bientam[0].length){
			var ngaytam=bientam[1].split($.cookie("phancachngay"));
			var giotam=bientam[0].split(":");
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			}
			}else if(String(inputA).match(':')!=null){
			var ngaytam=[];
			ngaytam[0]=dd,ngaytam[1]=mm,ngaytam[2]=yyyy;
			var giotam=inputA.split(":");
			}else{
			var ngaytam=inputA.split($.cookie("phancachngay"));
			ngaytam[2]=$.cookie('namjs')+ngaytam[2];
			var giotam=[];
			giotam[0]=0;giotam[1]=0;
			}
			var thoigian=Date.today().set({
			millisecond: 0,
			second: 0,
			minute: parseInt(giotam[1]),
			hour: parseInt(giotam[0]),
			day: parseInt(ngaytam[0]),
			month: parseInt(ngaytam[1])-1,
			year: parseInt(ngaytam[2])
			});
			}else{
			var thoigian=Date.today().set({
			millisecond: 0,
			second: 0,
			minute: parseInt(curr_minute),
			hour: parseInt(curr_hour),
			day: parseInt(dd),
			month: parseInt(mm)-1,
			year: parseInt(yyyy)
			});
			thoigian=thoigian.addHours(0).toString("yyyy-MM-dd H:mm ");
			}
			return thoigian;
} 
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				$('#boqua').hide();
				$('#sua').show();
				
				for(i=0;i<val.length;i++){
					tam=val[i]["id"];	
					//alert(val[i]["cell"])			
					var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");
					$("#"+tam).removeClass("sieuam1");					 
					if(tam==tam1){	
						$("#"+tam).addClass("sieuam1");
						id_kham3=val[i]["id"];
						mota5=val[i]["cell"][6];
						thongsokt5=val[i]["cell"][18];
						ketluan5=val[i]["cell"][7];
						loikhuyen5 = val[i]["cell"][8];
						$("#nguoi_chidinh").val(val[i]["cell"][4]);
						idluotkham=val[i]["cell"][5];
						$("#ngaychidinh").val(val[i]["cell"][2]);
						$("#mota").val(val[i]["cell"][6]);
						$("#thongsokt").val(val[i]["cell"][18]);//thong so ky thuat
						$("#ketluan").val(val[i]["cell"][7]);
						$("#loikhuyen").val(val[i]["cell"][8]); 
						// $("#nhanvien").val(val[i]["cell"][14]);
						setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
						nhanvien4=val[i]["cell"][10];
						chuandoan4=val[i]["cell"][15];
						tenloaikham=val[i]["cell"][1]; 
                     //   if(id_kham2=="0"){
					 
						   parent.postMessage('changetitle;<?=$view?>-'+id_benhnhan+';'+tenloaikham+';'+$('#panel_tenbn').text() , '*')
					  // }else{
						//   parent.postMessage('changetitle;<?=$view?>-'+id_kham2+';'+tenloaikham+';'+$('.profile_outer:first').text() , '*')
					 //  }
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						//$("#edit_by").show();
						 _id_trangthai=tam1_cls[9]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                        $("#giothuchien").text(val[i]["cell"][16]);                      
                        $("#giohoantat").text(val[i]["cell"][17]);                        
                    if(_id_trangthai=="DangCho"){
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoatskt').button( {disabled:false});//xoa thong so ky thuat
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#thongsokt').attr("disabled",false);//thong so ky thuat
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.test2="dangkham1";
						kt_trangthai(_id_trangthai);
                    }
                    else if(_id_trangthai=="DaThucHien"){
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:false});
						$('#add_template').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",false);
						
						window.test2="dathuchien1";
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						kt_trangthai(_id_trangthai);
                    }
                    else if(_id_trangthai=="DangKham"){
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoatskt').button( {disabled:false});//xoa thong so ky thuat
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#thongsokt').attr("disabled",false);//thong so ky thuat
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$( "#nhanvien" ).attr("disabled",false);
						$( "#chuandoan" ).attr("disabled",false);
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.test2="dangkham1";
						kt_trangthai(_id_trangthai);
                    }
                    else if(_id_trangthai=="Xong"){
						if(<?=$_SESSION['user']['id_user']?>==val[i]["cell"][15]){
							$('#sua').button( {disabled:false});
						}
						else{
							$('#sua').button( {disabled:true});
						}
						$("#id_trangthai").html("Đã hoàn tất");
						
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoatskt').button( {disabled:true}); //xoa thong so ky thuat
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#thongsokt').attr("disabled", "disabled");//thong so ky thuat
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						//$('.nhanvien_button').button( {disabled:true});
						//$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#add_template').button( {disabled:true});
						window.test2="hoantat1";
						kt_trangthai(_id_trangthai);
                    }else{
						$("#id_trangthai").html('Đang chờ'); 
						$('#xoaketluan').button( {disabled:false});
						$('#xoaloikhuyen').button( {disabled:false});
						$('#ketluan').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#loikhuyen').attr("disabled",false);
						$('#xoamota').button( {disabled:false});
						$('#open_template').button( {disabled:false});
						$( "#template_title" ).attr("disabled",false);
						$('#dathuchien').button( {disabled:false});
						$('.template_title_button').button( {disabled:false});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$('#add_template').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						$('#thongsokt').attr("disabled", false);    
						$('#xoatskt').button( {disabled:false});  
						$('#luu').button( {disabled:false});
						 window.test2="dangkham1";     
						 kt_trangthai(_id_trangthai);           		
                    }
                    $("#giohentra").html(tam1_cls[11]);
                    		 			 
						if(val[i]["cell"][12]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][12]);
								//var khongbiet=val[i]["cell"][12];
								//$("#ID_NguoiSua").text(khongbiet);
								$("#ngaygiosua").text(val[i]["cell"][13]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) 
				{
					check=tamthoilathe[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);}
					if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);}
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
							sub_navigator_count=0;						
							sub_navigator_load(ii);							
							break;
						}
						ii++;						 
					}
				}
				window.search_string=$(this).attr("alt");
				load_image($(this).attr("alt"));				
		});
	});
}

function resize_control(){
 
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-13+"px");
	//$("#center_col").css("width",$(window).width()/3-205+"px");
	$("#right_col").css("width",$(window).width()/2+3+"px");
	$("#ketluan").css("width",$(".ui-layout-center").width()-30+"px");
	$("#ketluan").css("height",$(".ui-layout-center").height()-30+"px");
 
 
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"65%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
				 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"35%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  
		 
	});		 
}
function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  //alert(_folder_name)
	 // alert(search_string);
	  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);   
	  $('#DM_template').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+id_loaikham,datatype:'json'}) .trigger('reloadGrid');
}
function load_select(){
window.stt = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	

}
function reload(){
	$('#nhanvien').combobox('reload');
	$('#chuandoan').combobox('reload');
}

function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
}  

function create_nhanvien(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên', 'Bộ phận'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
                grid_filter_enter(elem);
				window.nhanvien1_complete=1;
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên', 'Họ và tên'],
            colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
                grid_filter_enter(elem);
				window.nhanvien2_complete=1;
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    function load_select1(){
		window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
		$("#rowed3").setColProp('ID_Template', { editoptions: { value: xaphuong} });
		$('#ID_Template').empty();
		create_select("#ID_Template",xaphuong);
	}


function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}
	//sua
	if(id_kham2!='0'){
		navigator_load("end","");
	}else{
		navigator_load("end","first");
	}
	//sua
	//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham,0);
}



function goto_kham(id_kham){

for(var i=0; i<data_luotkham['rows'].length;i++){
	
	if(id_kham==data_luotkham['rows'][i]['id']){
		id_luotkham_hentai=data_luotkham['rows'][i]['cell'][5]
	}
}

_id_luotkham
y=0;
for(var i=_id_luotkham.length-1;i>=0;i--){
	if(_id_luotkham[i]==id_luotkham_hentai){
		break;
	}
	y--;
}

 navigator_load(y,"");	
 $('#'+id_kham).click();

	
	
}
function kt_trangthai(id_thai){
	//alert(_id_trangthai);
	if(_id_trangthai=="Xong"){
		$('.chuandoan_button').button( {disabled:true});
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		$( "#chuandoan" ).attr("disabled",true);
		$( "#dathuchien" ).attr("disabled",true);
		$( "#hoantat" ).attr("disabled",true);
	}else if(_id_trangthai=="DaThucHien"){
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		$( "#dathuchien" ).attr("disabled",true);
	}else{
		$('.nhanvien_button').button( {disabled:false});
		$( "#nhanvien" ).attr("disabled",false);
		$( "#chuandoan" ).attr("disabled",false);
		$('.chuandoan_button').button( {disabled:false});
	}
}

</script>