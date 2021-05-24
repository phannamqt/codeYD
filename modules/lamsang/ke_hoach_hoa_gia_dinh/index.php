
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

?>
 
 
<style>
	#DM_template td,#data_combo_thuthuat td,#data_combo_denghitk td,#data_combo_pptranhthai td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
	textarea {
    overflow-y: scroll
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

	 #open_template,#add_template,#add_templatektt,#add_templatecd,#add_templatedn,#add_templatekn,#add_templatepptt{
		 font-size:13px!important;
		 margin-top:-3px;
		 margin-left:-6px;
		 top:4px;
		 
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
		height:62px;		 		
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
		 margin-top:-10px;
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
	label{
		text-align:left;
		font-size:11px;
		/*font-weight:bold;*/
		margin-top:-10px;
	}
	
	.thongtin_tongthe{
		height: 62px;
	}.sieuam1{
		background-color: #b3ffb3;
	}
</style>
<body>
<div id="dialog-confirm3" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Yêu cầu nhập đầy đủ thông số PARA</p>
</div>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="height: 58px;width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' name="nguoi_chidinh"style="width:100px" type="text" id="nguoi_chidinh"disabled>
            <label style="width:90px;text-align:right">Người thực hiện:</label>
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
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input name="ngaychidinh" id="ngaychidinh" lang='luu'style="width:100px" type="text">
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:-10px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>      
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 664px!important">   
    	<!-- <span id="caption" style="font-size:14px;color:#09C">Khám phụ khoa</span> -->
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
               	<button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>
    <div class="thongtin_luotkham" id="right_col" style="width: 656px!important">

         <table width="672" border="0" cellpadding="0" cellspacing="0">
       <tr>
         <td width="275"><label><a id="hentrakq" href="#">Giờ hẹn trả kết quả: </a></label> <label id="giohentra" style="color:blue"></label></td>
         <td width="224">&nbsp;</td>
         <td width="76"><a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
         <a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;margin-top: 1px;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a></td>
         <td width="87"><a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a></td>
       </tr>
       <tr>
         <td><label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label></td>
         <td>In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/></td>
         <td><a href="#" id="camket" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;width:64px;  margin-bottom:1px;float: right;">Cam kết <span class="ui-icon ui-icon-circle-arrow-s" style="margin-left: -29px; margin-top: -17px;"></span> </a></td>
         <td><a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a></td>
       </tr>
     </table>
    </div>
   
 </div> 
 <div id="panel_main">    

    <div class="ui-widget-content thongtin_thai ui-layout-west">
            Chọn mẫu
            <input type="text" id="template_title"  style="width:50%">
            <input id="template_title1"  name="template_title1" type="text" style="display:none" >
            <!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">mở template</button>--> 
            <button id="add_template" style="height:23px;width:23px;margin-left: 25px;">thêm template</button>
            <br></br>
            <label style="width:90px;text-align:left;font-size:12px; font-weight:bold!important;">TƯỜNG TRINH THỦ THUẬT KẾ HOẠCH HÓA GIA ĐÌNH:</label>
    	 	<input type="button" value="Xóa" id="xoattrinh"style="float: right;margin-top: 3px;"/>      
            <textarea id="ttrinh" name="ttrinh"  lang='luu' style="width:100%;  font-size:13px!important"></textarea>   
    </div>          
    <div class="ui-widget-content  thongtin_thai ui-layout-center ">
    	<div>
    			Para:* 
    			<span style="margin-left:36px;" >     
				    <input lang='luu' type="text" style="width:12px " name="para1" id="para1" class="para" maxlength="1"/>
				    <input lang='luu' type="text" style="width:12px " name="para2" id="para2" class="para" maxlength="1" />
				    <input lang='luu' type="text" style="width:12px " name="para3" id="para3" class="para" maxlength="1"/>
				    <input lang='luu' type="text" style="width:12px " name="para4" id="para4" class="para" maxlength="1"/>
				   </span>
		</div>
		<div style="margin-top:16px;">
			 Chuẩn đoán
            <input type="text" id="template_titlecd"  style="width:75%">
            <input id="template_titlecd"  name="template_titlecd" type="text" style="display:none" >
            <button id="add_templatecd" style="height:23px;width:23px;margin-left: 25px;">thêm template</button>
    	 	<!-- <input type="button" value="Xóa" id="xoattrinh"style="float: right;margin-top: 3px;"/>   -->    
            <textarea id="are_chuandoan" name="are_chuandoan"  lang='luu' style="width:99%; height: 65px;; font-size:13px!important"></textarea>   
		</div>
		<div>
			<label style="width:90px;text-align:left;font-size:14px; font-weight:bold!important;">Dặn dò:</label>
			<input type="button" value="Xóa" id="xoadd"style="float: right;margin-top: 3px;"/>
            <textarea id="loikhuyen" name="loikhuyen"  lang='luu' style="width:99%;  font-size:13px!important"></textarea> 
		</div>
    </div>                 
	</div>
	<div id="dialog-form" title="Thêm bản ghi" style="display:none;">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">Trường trình có rồi,bạn có muốn ghi đè hay không? </label>
		</div>
		<div style="text-align: center;">
			<label style="width:90px;text-align:right;ont-size:17px;margin-right: 20px;" >Yes(Xóa)</label>
			<label style="width:90px;text-align:right;ont-size:17px">No(Chỉ chèn thêm)</label>
			<label style="width:90px;text-align:right;ont-size:17px;margin-left: 20px;">Cance(Thoát)</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px;padding-left: 6px;"/> 
			<input type="button" value="No" id="no" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px;padding-left: 6px;"/> 
			<input type="button" value="Cancel" id="cancel"class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left: 20px; width: 60px;padding-left: 6px;"/>
		</div>
	</div>
	<div id="dialog-form1" title="Thêm bản ghi" style="display:none;">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">Dặn dò có rồi,bạn có muốn ghi đè hay không? </label>
		</div>
		<div style="text-align: center;">
			<label style="width:90px;text-align:right;ont-size:17px;margin-right: 20px;" >Yes(Xóa)</label>
			<label style="width:90px;text-align:right;ont-size:17px">No(Chỉ chèn thêm)</label>
			<label style="width:90px;text-align:right;ont-size:17px;margin-left: 20px;">Cance(Thoát)</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px;padding-left: 6px;"/> 
			<input type="button" value="No" id="no" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px;padding-left: 6px;"/> 
			<input type="button" value="Cancel" id="cancel"class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left: 20px; width: 60px;padding-left: 6px;"/>
		</div>
	</div>
	<div id="dialog-form2" title="Thêm bản ghi" style="display:none">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">Bạn có muốn xóa không?</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes2" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px;padding-left: 6px;"/> 
			<input type="button" value="No" id="no2" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px;padding-left: 6px;"/> 
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
//var _id_luotkham;
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=id_benhnhan;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var trangthai;
var id_kham3;
var id_benhnhan;
var nhanvien_control;
var lkham;
$(document).ready(function() {	
openform_shortcutkey();
//$.cookie("in_status", "print_preview"); 
checkbox_search('gs_IsPopular','#data_combo_chuandoan')
$("#xemin").click(function(e){	
$.cookie("in_status", "print_preview"); 
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){ var chuky=1;}else{var chuky=0;}
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=FamlilyPlanning&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10&chuky="+chuky,'FamlilyPlanning');
		$(".frame_u78787878975f").css("width","793px");
	}); 
$("#camket").click(function(e){
$.cookie("in_status", "print_preview"); 

	dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=camketkhhhgiadinh&header=left&id_benhnhan="+id_benhnhan+"&type=report&id_form=10",'FamlilyPlanning');
});
openform_shortcutkey()
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	window.nhanvien3_complete=0;
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#camket').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	 jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   jwerty.key('shift+enter', false);
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	    
	});
       
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();

	number_textbox("#para1");
	number_textbox("#para2");
	number_textbox("#para3");
	number_textbox("#para4");
$( "#dialog-confirm3" ).dialog({ 
		autoOpen: false,
      resizable: false,
	  width:330,
      modal: true,
      buttons: {
        "Ok": function() {
			
          $( this ).dialog( "close" );
		  
		  setTimeout(function() {
       		var a=$("#para1").val();
			var b=$("#para2").val();
			var c=$("#para3").val();
			var d=$("#para4").val();
			if(a=="")
				$("#para1").focus();
				else if(b=="")
		  			$("#para2").focus();
					else if(c=="")
		  				$("#para3").focus();
						else if(d=="")
		  					$("#para4").focus();
			}, 300);
		 
        }
      }
    });
	$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
//para 
	$( "#para1" ).click(function() {
		//alert($( "#para1" ).val());
	  $( "#text_para1" ).val($( "#para1" ).val());
	});
	$( "#para2" ).click(function() {
	   $( "#text_para2" ).val($( "#para2" ).val());
	});
	$( "#para3" ).click(function() {
	    $( "#text_para3" ).val($( "#para3" ).val());
	});
	$( "#para4" ).click(function() {
		//alert();
	  $( "#text_para4" ).val($( "#para4" ).val());
	});
	
	$( "#para1" ).focus(function() {
		//alert($( "#para1" ).val());
	  $( "#text_para1" ).val($( "#para1" ).val());
	});
	$( "#para2" ).focus(function() {
	   $( "#text_para2" ).val($( "#para2" ).val());
	});
	$( "#para3" ).focus(function() {
	    $( "#text_para3" ).val($( "#para3" ).val());
	});
	$( "#para4" ).focus(function() {
		//alert();
	  $( "#text_para4" ).val($( "#para4" ).val());
	});

	$('#xoattrinh').click(function(){
$('#ttrinh').val('');


	})

		$('#xoadd').click(function(){
$('#loikhuyen').val('');


	})
	$( "#para1" ).keyup(function(e) {
		//alert(e.keyCode);
		
			if(e.keyCode >=48 && e.keyCode <=57 ||e.keyCode >=96 && e.keyCode <=105|| e.keyCode == 13 || e.keyCode==9){
				if(!$("#ttrinh").data('focus')){
			var a=$( "#para1" ).val();
			//alert(a)
			if (a==null || a=="") {
				$( "#para1" ).focus();
			} else {
			$( "#para2" ).focus();
			}
				}else{
			$("#ttrinh").data('focus', false);
	}
			}
			
	
  		
	});
	$( "#para2" ).keyup(function(e) {
  		if(e.keyCode >=48 && e.keyCode <=57 ||e.keyCode >=96 && e.keyCode <=105|| e.keyCode == 13 || e.keyCode==9){
			var b=$( "#para2" ).val();
			if (b==null || b=="") {
				$( "#para2" ).focus();
			} else {
			$( "#para3" ).focus();
			}
	
		}		else if(jwerty.is("shift+tab",e)){
					$("#para1").focus();
				
				
				}
	});
	$( "#para3" ).keyup(function(e) {
  		if(e.keyCode >=48 && e.keyCode <=57||e.keyCode >=96 && e.keyCode <=105 || e.keyCode == 13 || e.keyCode==9){
			var c=$( "#para3" ).val();
			if (c==null || c=="") {
				$( "#para3" ).focus();
			} else {
			$( "#para4" ).focus();
			}
		}
	});
	$( "#para4" ).keyup(function(e){
		if(e.keyCode >=48 && e.keyCode <=57 ||e.keyCode >=96 && e.keyCode <=105|| e.keyCode == 13 || e.keyCode==9){
			var d=$( "#para4" ).val();
			$( "#text_para4" ).val($( "#para4" ).val());
			if (d==null || d=="") {
				$( "#para4" ).focus();
				
			} 
		}
		if (e.keyCode === 8 || e.keyCode === 46) {
				var d =$( "#text_para4" ).val();
				$( "#text_para4" ).val($( "#para4" ).val())
				//var a=event.target.$( "#para4" ).val()
				if(val4==""){
					$( "#para3" ).focus();
					}
					
				return false;
				}
		});
	$( "#para3" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 8 || e.keyCode === 46) {
				var val3 =$( "#text_para3" ).val();
				$( "#text_para3" ).val($( "#para3" ).val())
				if(val3==""){
					$( "#para2" ).focus();
					}
					
				return false;
			}
		});
	$( "#para2" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 8 || e.keyCode === 46) {
				var val2 =$( "#text_para2" ).val();
				$( "#text_para2" ).val($( "#para2" ).val())
				if(val2==""){
					$( "#para1" ).focus();
					}
					
				return false;
			}
		});
	$( "#para1" ).keyup(function(e){
		//alert(e.keyCode);
			if (e.keyCode === 8 || e.keyCode === 46) {
				var val1 =$( "#text_para1" ).val();
				$( "#text_para1" ).val($( "#para1" ).val())
				if(val1==""){
					$( "#para1" ).focus();
					}
					
				return false;
			}
		});
	// end para

	//focus
	
	/*$( "#template_title" ).keyup(function(e){
		//alert(e.keyCode);
		$("#template_title").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#luu").data('focus')){
					$("#luu").data('focus', false);
				}else{
					$( "#ttrinh" ).focus();
					$( "#ttrinh" ).select();
					return false;
					}}
	});*/
	/*$( "#para1" ).keydown(function(e){
		$("#para1").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$( "#para1" ).focus();
				$( "#para1" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#template_title" ).focus();
				$( "#template_title" ).select();
			}
	});*/

	$( "#para1" ).keydown(function(e){
		$("#para1").data('focus', true);
			if(jwerty.is("shift+tab",e)){

				$( "#ttrinh" ).focus();
				$( "#ttrinh" ).select();
			}
	});

	$( "#para4" ).keydown(function(e){
		$("#para4").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$( "#template_titlecd" ).focus();
				$( "#template_titlecd" ).select();
				return false;
			} 
	});
	/*$( "#template_titlecd" ).keyup(function(e){
		//alert(e.keyCode);

			$("#template_titlecd").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#para4").data('focus')){
					$("#para4").data('focus', false);
				}else{
					$( "#are_chuandoan" ).focus();
					$( "#are_chuandoan" ).select();
					return false;
					}
			} else if(jwerty.is("shift+tab",e)){
				if($("#are_chuandoan").data('focus')){
					$("#are_chuandoan").data('focus', false);
				}else{
				$( "#para4" ).focus();
				$( "#para4" ).select();
				}
			}
	});
	$( "#are_chuandoan" ).keydown(function(e){
		$("#are_chuandoan").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$( "#loikhuyen" ).focus();
				$( "#loikhuyen" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#template_titlecd" ).focus();
				$( "#template_titlecd" ).select();
			}
	});
	$( "#loikhuyen" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				//$("#tsdiungthuoc").data('focus', true);
				$( "#luu" ).focus();
				$( "#luu" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#are_chuandoan" ).focus();
				$( "#are_chuandoan" ).select();
			}
	});*/

	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	create_combobox('#template_title', '#template_title1', ".data_combo_thuthuat", "#data_combo_thuthuat", create_thuthuat, 500, 400, '', 'data_thuthuat',0);
	create_combobox('#template_titlecd', '#template_titlecd1', ".data_combo_chuandoan", "#data_combo_chuandoan", create_chuandoan, 500, 400, '', 'data_cbchuandoan',0);
	
			$("#add_template").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
			})
			//them kinh nguyet
			$("#add_templatekn").click(function(e){
					 
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
			})

		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_khhgd&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;

	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {	
		//alert(val.length)	 
			for(i=0;i<val.length;i++){
				var tam1_cls=val[i]["cell"];
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);
			}
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//navigator_load("first","end");	
		
			load_complete();
			
		});		
	});	
	$(window).resize(function() {		 
	//	$("#panel_main2").css("height",$(window).height()-350+"px");			 
		//$("#panel_main2").fadeIn(1000);  
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
			 $("#combo_kinhnguyet").focus();			
		});
		$( "#add_template" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
		$( "#add_templatekn" ).button({
          text: false,
          icons: {
            primary: "ui-icon-plus"
          }
        })
        $( "#add_templatepptt" ).button({
          text: false,
          icons: {
            primary: "ui-icon-plus"
          }
        })
		$( "#add_templatektt" ).button({
          text: false,
          icons: {
            primary: "ui-icon-plus"
          }
        })
        $( "#add_templatecd" ).button({
          text: false,
          icons: {
            primary: "ui-icon-plus"
          }
        })
        $( "#add_templatedn" ).button({
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
		   
  	}); 
			  $("#sua").click(function(){
			  	//$('#sua').button( {disabled:true});
                                $('#luu').button( {disabled:false});
                         		$("#sua").hide();
                         		$('#boqua').show();
                         		$('.template_title_button').button( {disabled:false});
                         		//$('.chuandoan_button').button( {disabled:false});
                         		//$('.nhanvien_button').button( {disabled:false});
                         		//$( "#nhanvien" ).attr("disabled",false);
                         		//  $( "#chuandoan" ).attr("disabled",false);
                         		  dis_all("Hien");
								  kt_trangthai(_id_trangthai);
                         		  window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					$("#sua").show();
                    $('#boqua').hide();
                    $('#luu').button( {disabled:true});
                    $("#nhanvien1").val(nhanvien4);
                    $("#chuandoan1").val(chuandoan4);
                    $('.template_title_button').button( {disabled:true});
                  //  $('.nhanvien_button').button( {disabled:true});
                  //  $( "#nhanvien" ).attr("disabled",true);
                  //  $('.chuandoan_button').button( {disabled:true});
                 //   $( "#chuandoan" ).attr("disabled",true);
                    setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                    setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                    dis_all("An");
					kt_trangthai(_id_trangthai);
                         		  //reload();
				});
			  $("#dathuchien").click(function(){
				  	$("#id_trangthai").html("Đã thực hiện");
	                $('#dathuchien').button( {disabled:true});
	                $('#sua').button( {disabled:false});
	                $('#luu').button( {disabled:true});
	                          
	                _id_trangthai="DaThucHien";
	         		//$('.chuandoan_button').button( {disabled:false});
	         		//$('.nhanvien_button').button( {disabled:true});
	         		//$( "#nhanvien" ).attr("disabled",true);
					kt_trangthai(_id_trangthai);
	         		$('#boqua').hide();
	         		$('#sua').show();
	         		dis_all("An");
                    //====

						$("#giothuchien").html(gio("current"));
						var giothuchien2= $( "#giothuchien" ).text();
						  			var a = $("#para1").val();
									var b = $("#para2").val();
									var c = $("#para3").val();
									var d = $("#para4").val();
									if((a =="" || b=="" || c =="" || d =="") && (a !="" || b!="" || c !="" || d !="") )
							 			$( "#dialog-confirm3" ).dialog('open');
									var e=a+"-"+b+"-"+c+"-"+d;
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
			        dataToSend += phancach + '"id_luotkham":"' + _id_luotkham2 + '"';
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			        dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
					dataToSend += phancach + '"_idpara":"' +_idpara+ '"';
			        dataToSend += phancach + '"para1":"' +a+ '"';
					dataToSend += phancach + '"para2":"' +b+ '"';
					dataToSend += phancach + '"para3":"' +c+ '"';
					dataToSend += phancach + '"para4":"' +d+ '"';
			        dataToSend += '}';
			        window.datalocalToSend = jQuery.parseJSON(dataToSend);
			        dathuchien_post();  
                    //===
						                                 
			  });
			  $("#hoantat").click(function(){
			  		$("#id_trangthai").html("Đã hoàn tất");
                 	$('#dathuchien').button( {disabled:true});
                 	$('#hoantat').button( {disabled:true});
                  	$('#sua').button( {disabled:false});
                    $('#luu').button( {disabled:true});
                    dis_all("An");
                	_id_trangthai="Xong";
             		//$('.chuandoan_button').button( {disabled:true});
             		//$('.nhanvien_button').button( {disabled:true});
             		//$( "#nhanvien" ).attr("disabled",true);
             		//$( "#chuandoan" ).attr("disabled",true);
					kt_trangthai(_id_trangthai);
	         		$('#boqua').hide();
	         		$('#sua').show();
	         		dis_all("An");
                        //====

						$("#giothuchien").html(gio("current"));
						var giothuchien2= $( "#giothuchien" ).text();
						$("#giohoantat").html(gio("current"));
						var giohoantat2= $( "#giohoantat" ).text();
						  			var a = $("#para1").val();
									var b = $("#para2").val();
									var c = $("#para3").val();
									var d = $("#para4").val();
									if((a =="" || b=="" || c =="" || d =="") && (a !="" || b!="" || c !="" || d !="") )
							 			$( "#dialog-confirm3" ).dialog('open');
									var e=a+"-"+b+"-"+c+"-"+d;
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
			        dataToSend += phancach + '"id_luotkham":"' + _id_luotkham2 + '"';
			        //alert(_id_trangthai);
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			        dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
							dataToSend += phancach + '"giohoantat":"' +giohoantat2+ '"';
							dataToSend += phancach + '"_idpara":"' +_idpara+ '"';
			        dataToSend += phancach + '"para1":"' +a+ '"';
					dataToSend += phancach + '"para2":"' +b+ '"';
					dataToSend += phancach + '"para3":"' +c+ '"';
					dataToSend += phancach + '"para4":"' +d+ '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        window.datalocalToSend = jQuery.parseJSON(dataToSend);
			        hoantat_post();
                        //===
						      
						                                      
			  });
			
			  $('#luu').click(function (){
			  		if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
						kt_trangthai(_id_trangthai);
			  		//tooltip_message("Đã lưu");
			  	}
			  	else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
             		//$('.chuandoan_button').button( {disabled:true});
             		//$('.nhanvien_button').button( {disabled:true});
             		//$( "#nhanvien" ).attr("disabled",true);
             		//$( "#chuandoan" ).attr("disabled",true);
					kt_trangthai(_id_trangthai);
                    dis_all("An");
			                       if(window.test=="giosuacuoi"){
			                       	if(window.test3=="dathuchien"){
					                      	$("#edit_by").show();
					                      	var nguoisua2=$("#nhanvien1").val();
					                      	//alert(nguoisua2);
					                      	$("#nguoisua").html(nguoisua2);
											$("#ngaygiosua").html(gio("current"));
										}
									if(window.test3=="hoantat"){
					                      	$("#edit_by").show();
					                      	var nguoisua2=$("#chuandoan1").val();
					                      	//alert(nguoisua2);
					                      	$("#nguoisua").html(nguoisua2);
											$("#ngaygiosua").html(gio("current"));
										}	
			                      }}
					var ngaygiosua2=$("#ngaygiosua").text();
						  			var a = $("#para1").val();
									var b = $("#para2").val();
									var c = $("#para3").val();
									var d = $("#para4").val();
									if((a =="" || b=="" || c =="" || d =="") && (a !="" || b!="" || c !="" || d !="") ){
							 			$( "#dialog-confirm3" ).dialog('open');
							 		}else{
									var e=a+"-"+b+"-"+c+"-"+d;
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
			        dataToSend += phancach + '"id_luotkham":"' + _id_luotkham2 + '"';
			        //alert(_id_trangthai);
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			        dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
			        dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
					dataToSend += phancach + '"_idpara":"' +_idpara+ '"';
			        dataToSend += phancach + '"para1":"' +a+ '"';
					dataToSend += phancach + '"para2":"' +b+ '"';
					dataToSend += phancach + '"para3":"' +c+ '"';
					dataToSend += phancach + '"para4":"' +d+ '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        window.datalocalToSend = jQuery.parseJSON(dataToSend);
			     //alertObject(dataToSend); 
			       
			         load_complete1();            
			       }               
			    });
			 	phanquyen();
				var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
				eventer(messageEvent,function(e) {	
					 edit_images(e.data);
					//parent.postMessage(e.data , '*')
				},false);

				
	setTimeout(function(){

$("#add_templatekn,#add_templatepptt,#add_template,#add_templatektt,#add_templatecd,#add_templatedn").removeClass("ui-corner-all");


	},500);		
	
});

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
		//alert(navigator_count);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){		
			var tam1_cls=val[i]["cell"];
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+tam1_cls[5]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				$("#ngay_kham").html(tam1_cls[2]);			
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
	//console.log(navigator_count+1)
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
				//alert(val.length)
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");
					$("#"+tam).removeClass("sieuam1");
					//console.log(tam+"=="+tam1);					 
					if(tam==tam1){	
						$("#"+tam).addClass("sieuam1");
						id_kham3=val[i]["id"];
						//console.log(val[i]["cell"][6])
						//_id_luotkham=val(val[i]["cell"][35]);//id luot kham
						$("#nguoi_chidinh").val(val[i]["cell"][4]);
						$("#ngaychidinh").val(val[i]["cell"][2]);
                       if(val[i]["cell"][10]==null) nhanvien_control=1; 
					   else nhanvien_control=0;
					   $("#id_trangthai").val(val[i]["cell"][6]);
					    _idpara=val[i]["cell"][21];
						tenloaikham=val[i]["cell"][1]; 
                       	parent.postMessage('changetitle;<?=$view?>-'+id_benhnhan+';'+tenloaikham+';'+$('#panel_tenbn').text() , '*')
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][7]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][12]);
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						 //setval('#template_title','#template_title1','#data_combo_thuthuat');
						 //setval('#combo_trieuchungcn','#combo_trieuchungcn1','#data_combo_trieuchungcn');
					   $("#ttrinh").val(val[i]["cell"][16]);
					   //alert(val[i]["cell"][16])
					   $("#are_chuandoan").val(val[i]["cell"][17]);
					   $("#loikhuyen").val(val[i]["cell"][18]);
					   $("#loikhuyen").val(val[i]["cell"][18]);
                       var para = val[i]["cell"][19]; 

                       if(para!=null){
							
							var rs=para.split("-");
							$("#para1").val(rs[0]);
							$("#para2").val(rs[1]);
							$("#para3").val(rs[2]);
							$("#para4").val(rs[3]);
						}else{
							$("#para1").val('');
							$("#para2").val('');
							$("#para3").val('');
							$("#para4").val('');
							}
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                         //alert( _id_trangthai);
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                        $("#giothuchien").text(val[i]["cell"][13]);                      
                        $("#giohoantat").text(val[i]["cell"][14]);                     
                    if(_id_trangthai=="DangCho"){
                    	$("#id_trangthai").html("Đang chờ");
	            		$('#sua').button( {disabled:true});
	            		$('#luu').button( {disabled:false});
                        $('#dathuchien').button( {disabled:false});
                 		$('.chuandoan_button').button( {disabled:false});
                 		$('.nhanvien_button').button( {disabled:false});
                 		$( "#nhanvien" ).attr("disabled",false);
             		    $( "#chuandoan" ).attr("disabled",false);
             		    $('#hoantat').button( {disabled:false});
                        dis_all("Hien");
             		    setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
             		    setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.test2="dangkham1";
                    }
                    else if(_id_trangthai=="DaThucHien"){
                    	$("#id_trangthai").html("Đã thực hiện");
                    	$('#sua').button( {disabled:false});
                    	$('#luu').button( {disabled:true});
                        $('#dathuchien').button( {disabled:true});
                 		$('.chuandoan_button').button( {disabled:false});
                 		$('.nhanvien_button').button( {disabled:true});
                 		$('.template_title_button').button( {disabled:true});
                 		$( "#nhanvien" ).attr("disabled",true);
                 		$('#hoantat').button( {disabled:false});
                 		$('#add_template').button( {disabled:true});
                 		$( "#chuandoan" ).attr("disabled",false);
                 		dis_all("An");
                 		window.test2="dathuchien1";
                 		window.test3="dathuchien";
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                    }
                    else if(_id_trangthai=="DangKham"){
                    	$("#id_trangthai").html("Đang khám");
	            		 $('#sua').button( {disabled:true});
	            		 $('#luu').button( {disabled:false});
                        $('#dathuchien').button( {disabled:false});
                 		$('.chuandoan_button').button( {disabled:false});
                 		$('.nhanvien_button').button( {disabled:false});
                 		$( "#nhanvien" ).attr("disabled",false);
             		    $( "#chuandoan" ).attr("disabled",false);
             		    $('#hoantat').button( {disabled:false});
             		    $( "#chuandoan" ).attr("disabled",false);
             		    dis_all("Hien");
             		    setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
             		    setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		  window.test2="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
                    	$("#id_trangthai").html("Đã hoàn tất");
                    	$('#sua').button( {disabled:false});
                    	$('#luu').button( {disabled:true});
                        $('#dathuchien').button( {disabled:true});
                        $('#hoantat').button( {disabled:true});
                        $('.chuandoan_button').button( {disabled:true});
                        $('.nhanvien_button').button( {disabled:true});
                        $( "#nhanvien" ).attr("disabled",true);
                        $( "#chuandoan" ).attr("disabled",true);
             		    dis_all("An");
             		    window.test2="hoantat1";
             		    window.test3="hoantat";
                    }
                    $("#giohentra").html(tam1_cls[8]);
                    		 			 
						if(val[i]["cell"][12]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][9]);
								$("#ngaygiosua").text(val[i]["cell"][10]);
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
							break;
						}
						ii++;						 
					}
				}


		});
	});
}
function resize_control(){
	$("#sub_center").css("height",$("#n_center").height()+"px");			 
	$(".thongtin_tongthe").css("width",$(window).width()/2-19+"px");
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-19+"px");
	$("#right_col").css("width",$(window).width()-$("#left_col").width()-10+"px");
	$("#template_title").css("width",$(".ui-layout-center").width()-120+"px");
	$("#panel_main").css("height",$(window).height()-$("#thongtin_tongthe").height()-$("#thongtin_luotkham").height()-50+"px");

	$("#template_title").css("width",$(".ui-layout-west").width()-120+"px");
	$("#template_titlecd").css("width",$(".ui-layout-center").width()-130+"px");
	$("#ttrinh").css("height",$(".ui-layout-west").height()-82+"px");
	$("#loikhuyen").css("height",$(".ui-layout-center").height()-182+"px");
}
function create_layout(){
    //alert("")
    $('#panel_main').layout({   
        resizerClass: 'ui-state-default'       
        ,west: {
            maskContents:       true
        ,   resizable: true
        ,   size:                   "49%"
        ,   resizerDblClickToggle: false 
        ,   onresize_end:function () {               
                 resize_control();
            }
        ,   onopen_end:function () { 
                 
            }
        ,   onclose_end:function () {                
                 
            }
                        
        }           
        ,   center: {
            resizable: true
        ,   size:                   "51%"
        ,   resizerDblClickToggle: false         
                
         
        ,   onresize_end:function () {               
                  resize_control();
            }
        ,   onopen_end:function () {                 
                    
            }
        ,   onclose_end:function () {                
                     
            }       
        } 
         
    });      
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


$( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(35)).toFixed(0) );
                //$( "#dialog-form" ).getWindow().setBackgroundDrawable(new ColorDrawable(Color.argb(50, 255, 255, 255))); 
               
            },
            buttons: {
            	"Yes": function() {
            		var ttrinh2=$("#ttrinh").val();
					var loikhuyen2=$("#loikhuyen").val();
			   	    var rowData = $('#data_combo_thuthuat').getRowData($('#data_combo_thuthuat').jqGrid('getGridParam', 'selrow'));
								$("#ttrinh").val(rowData["NoiDung"]);
								$( "#dialog-form" ).dialog( "close" );
								$( "#dialog-form1" ).dialog( "open" );
			},
			"No": function() {
				var ttrinh2=$("#ttrinh").val();
			   	    var rowData = $('#data_combo_thuthuat').getRowData($('#data_combo_thuthuat').jqGrid('getGridParam', 'selrow'));
			
			    ttrinh4=$.trim(rowData["NoiDung"]);
	                              ttrinh2=ttrinh2+"\n"+ttrinh4;
	                               $("#ttrinh").val(ttrinh2);
	                               $( "#dialog-form" ).dialog( "close" );
	                               $( "#dialog-form1" ).dialog( "open" );
			},
			"Cancel": function() {
			
			  $( this ).dialog( "close" );
			  $( "#dialog-form1" ).dialog( "open" );
			},
           	}
            });
$( "#dialog-form1" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(25)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(40)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form1" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(25)).toFixed(0) );
                $( "#dialog-form1" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(35)).toFixed(0) );
                //$( "#dialog-form" ).getWindow().setBackgroundDrawable(new ColorDrawable(Color.argb(50, 255, 255, 255))); 
               
            },
            buttons: {
            	"Yes": function() {
					var loikhuyen2=$("#loikhuyen").val();
			   	    var rowData = $('#data_combo_thuthuat').getRowData($('#data_combo_thuthuat').jqGrid('getGridParam', 'selrow'));
								
								$("#loikhuyen").val(rowData["LoiKhuyen"]);	
								$( "#dialog-form1" ).dialog( "close" );
			},
			"No": function() {
				
					var loikhuyen2=$("#loikhuyen").val();
			   	    var rowData = $('#data_combo_thuthuat').getRowData($('#data_combo_thuthuat').jqGrid('getGridParam', 'selrow'));
			
	                              loikhuyen3=$.trim(rowData["LoiKhuyen"]);
	                             
	                              if(loikhuyen2=="")
	                              {	
	                              	loikhuyen2=loikhuyen3;
	                              }
	                             else
	                             {
	                             	 loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
	                             } 
	                              
	                               $("#loikhuyen").val(loikhuyen2);
	                               $( "#dialog-form1" ).dialog( "close" );
			},
			"Cancel": function() {
			
			  $( this ).dialog( "close" );
			},
           	}
            });
$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(20)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(20)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(22)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(20)).toFixed(0) );
                 
                
            },
            buttons: {
           	}
            });
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
function create_thuthuat(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên mẫu', 'Nội dung','Kết luận','Lời khuyên'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                {name: 'KetLuan', index: 'KetLuan', hidden: false},
                {name: 'LoiKhuyen', index: 'LoiKhuyen', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 300,
            width: 550,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	if(jQuery('#data_combo_thuthuat').data('clicked')) {
			  		var ttrinh2=$("#ttrinh").val();
					var loikhuyen2=$("#loikhuyen").val();
			   	    var rowData = $('#data_combo_thuthuat').getRowData(id);
						  if(ttrinh2!=""){
						  	$( "#dialog-form" ).dialog( "open" );
						  }
			                          else{
			                             $("#ttrinh").val(rowData["NoiDung"]);
			                             $("#loikhuyen").val(rowData["LoiKhuyen"]);
			                          }
						  if($("#yes").click(function(){
								$("#ttrinh").val(rowData["NoiDung"]);
								$("#loikhuyen").val(rowData["LoiKhuyen"]);	
								$( "#dialog-form" ).dialog( "close" );
			                                        
							})
						  	);
	                           if($("#no").click(function(){
	                              ttrinh4=$.trim(rowData["NoiDung"]);
	                              loikhuyen3=$.trim(rowData["LoiKhuyen"]);
	                              ttrinh2=ttrinh2+"\n"+ttrinh4;
	                              if(loikhuyen2=="")
	                              {	
	                              	loikhuyen2=loikhuyen3;
	                              }
	                             else
	                             {
	                             	 loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
	                             } 
	                               $("#ttrinh").val(mota2);
	                               $("#loikhuyen").val(loikhuyen2);
	                               $( "#dialog-form" ).dialog( "close" );
	                           }));
			} else {
			    //run function2
			}
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
			


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
function create_chuandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên thông thường', 'Tên nhóm bệnh','Phổ biến'],
            colModel: [
                //{name: 'TenBenhThongThuong', index: 'TenBenhThongThuong', hidden: false},
                {name: 'TenBenhThongThuong', index: 'TenBenhThongThuong', hidden: false},
                {name: 'TenNhomBenh', index: 'TenNhomBenh',align:'center', hidden: false},
                {name: 'IsPopular', index: 'IsPopular', hidden: false,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:0"}},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 350,
            width: 450,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowdata = $(this).getRowData(id);
				$('#are_chuandoan').val('');
				$("#are_chuandoan").val(rowdata["TenBenhThongThuong"]);
				
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
				
				
                grid_filter_enter(elem);   
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }


function testa(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		delete tong_luotkham;
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_khhgd&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				var tam1_cls=val[i]["cell"];
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]);				
				
			}
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			navigator_load(0,id_kham3);		
		});		
	});	}
function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	
}


function load_complete1(){
	if(typeof window.datalocalToSend=='undefined'){
		setTimeout(load_complete1,50);
		
		return;
	}
		//alert(lkham)
		//alertObject(datalocalToSend); 
		//alert(test2)
	if(window.test2=="dathuchien1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',datalocalToSend)
								 .done(function( gridData ) {	
								   testa();
								 	delete window.datalocalToSend; 								 	
								 							tooltip_message("Đã lưu");
			                                           	 
			                                            })
			         }
			         if(window.test2=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',datalocalToSend)
								 .done(function( gridData ) {	
								 	delete window.datalocalToSend; 
								 							tooltip_message("Đã lưu");
			                                            testa();
			                                            })			                                           
			         }     
			           if(window.test2=="dangkham1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',datalocalToSend)
								 .done(function( gridData ) {	
								 	delete window.datalocalToSend;
								 	tooltip_message("Đã lưu");
			                                            testa();	 
			                                            })			                                           
			         }

	
}
function hoantat_post(){
if(typeof window.datalocalToSend=='undefined'){
		setTimeout(hoantat_post,50);
		return;
	}
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat',datalocalToSend)
	.done(function( gridData ) {	
		 //reloadform(); 
		 testa();
		 delete window.datalocalToSend;
	 	tooltip_message("Đã lưu");
	})       
}

function dathuchien_post(){
	if(typeof window.datalocalToSend=='undefined'){
		setTimeout(dathuchien_post,50);
		return;
	}
$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien',datalocalToSend)
.done(function( gridData ) {	
	testa();
	//reloadform(); 
	delete window.datalocalToSend;
	tooltip_message("Đã lưu");
})
}

function dis_all(tthai) {
	if(tthai=="An"){
		$('#nguoi_chidinh').attr("disabled",true);
		$('#ngaychidinh').attr("disabled",true);
		$('#ttrinh').attr("disabled",true);
		$('#are_chuandoan').attr("disabled",true);
		$('#loikhuyen').attr("disabled",true);
		$('#add_template').button( {disabled:true});
		$('#add_templatecd').button( {disabled:true});
		$('#template_title').attr("disabled",true);
		$('#template_titlecd').attr("disabled",true);
		$('#xoattrinh,#xoadd').button({disabled:true});
		$( "#para1" ).attr("disabled",true);
        $( "#para2" ).attr("disabled",true);
        $( "#para3" ).attr("disabled",true);
        $( "#para4" ).attr("disabled",true);
        $('.template_title_button').button( {disabled:true});
        $('.template_titlecd_button').button( {disabled:true});
	}
	else if(tthai=="Hien"){
		$('#xoattrinh,#xoadd').button({disabled:false});
		$('#nguoi_chidinh').attr("disabled",true);
		$('#ngaychidinh').attr("disabled",true);
		$('#ttrinh').attr("disabled",false);
		$('#are_chuandoan').attr("disabled",false);
		$('#loikhuyen').attr("disabled",false);
		$('#add_template').button( {"disabled":false});
		$('#add_templatecd').button( {"disabled":false});
		$( "#template_title" ).attr("disabled",false);
        $( "#template_titlecd" ).attr("disabled",false);
        $( "#para1" ).attr("disabled",false);
        $( "#para2" ).attr("disabled",false);
        $( "#para3" ).attr("disabled",false);
        $( "#para4" ).attr("disabled",false);
        $('.template_title_button').button( {disabled:false});
        $('.template_titlecd_button').button( {disabled:false});
	}
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
 
 
