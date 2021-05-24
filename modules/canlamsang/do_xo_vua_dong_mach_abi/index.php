<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
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
 a.ui-button, a.fm-button {
    visibility: visible!important;
}
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
	#mota,#ketluan{
		font-size:20px!important;	 	 
	}.highlight:hover{
		background:#FCFEBA;
	}

</style>
<body>


 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id='bschidinh' name="nguoi_chidinh"style="width:100px" type="text" value="Bs Minh TQ" disabled>
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
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input name="ngaychidinh"lang='luu'style="width:100px" type="text" id='ngaychidinh' disabled>
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi" style="text-align:right; width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi" style="width: 90px;margin-left: 10px; text-align:right"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 604px;">   
    	<div class="thongtin_luotkham_scroll " style="display:none"></div>
        	<span id="caption" style="font-size:17px;color:#09C;margin-left:5px;margin-top:5px; font-weight:bold">Đo xơ vữa động mạch</span>
            <br><br>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>
    <div class="thongtin_luotkham" id="center_col" style="width: 300px;display:none">
    	<div class="thongtin_luotkham_scroll" style="color:blue;font-size:14px"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    	 
    </div>
    <div class="thongtin_luotkham" id="right_col">
    	 
    	<div>
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai" style="font-size:14px;margin-left:5px;font-weight:bold"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>		 	
    	</div>
    	<div style="margin-top: 12px;">
      
    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; display:none ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
        	 	
           <select id="loaiabi" style="float:right; margin-right: 10px; margin-top: 4px">
           		<option selected value="1">Loại mới</option>
                <option value="2">Loại cũ</option>
           </select> 
    	</div>
    	<div style="margin-top: -9px;margin-left:5px">
	    	<a href="#" id="open_form_hentra">Giờ hẹn trả kết quả:</a>
	    	<label id="giohentra" style="color:blue;margin-left:5px"></label>
    	</div>
    	<div style="margin-top: 5px;margin-left:5px" id="edit_by">
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
    	</div> 
    </div>
   
 </div> 
 <table id="rowed111" cellspacing="40px"  style="width:90%;margin:auto;">
 	
    <tr>
    	<td rowspan="2">
        <div class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:400px; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>  
        </td>
    	<td  style="border:1px solid #999;width:50%;vertical-align:top;">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">PWV (Pulse Wave Velocity) Tốc độ sóng xung</label></div>
            <div class="highlight" style="margin-top:10px"><label style="font-size:14px;margin-left:5px">Chọn mẫu: </label>   
            	<input type="text" id="pwv"  style="width:350px">
            	<input id="pwv1"  name="pwv1" type="text" style="display:none" >
            </div>
              <div class="highlight" align="center" style="margin-top:10px">
              	 <textarea id="mota" name="mota"  lang='luu' style="width:98%;height:50%"></textarea>   
              </div>
           
           
        </td>
    </tr>
    <tr>
    	<td   style="border:1px solid #999;width:50%;vertical-align:top;">
        	 <div class="highlight" style="background:#56A717"><label style="margin-left:5px; font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">ABI (Angkle Brachial Index) Chỉ số HA cổ chân - cánh tay</label></div>
           <div class="highlight" style="margin-top:10px"><label style="font-size:14px;margin-left:5px">Chọn mẫu: </label>   
            	<input type="text" id="abi"  style="width:350px">
            	<input id="abi1"  name="abi1" type="text" style="display:none" >
            </div>
              <div class="highlight" style="margin-top:10px">
              	 <textarea id="ketluan" name="ketluan"  lang='luu' style="width:98%;height:50%"></textarea>   
              </div>  
        </td>
    </tr>
   
 </table>
</body>
</html>
<script type="text/javascript">

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
var nhanvien_control; //dùng để điều khiển nút "Hoàn tất": khi bấm hoàn tất mà Người thục hiện còn trống thì sẽ chèn cả người thực hiện trùng với bs chẩn đoán
var idluotkham;

var report_code=["ABI"];
var report_name=["Đo xơ vữa động mạch"];
$(document).ready(function() {	
	openform_shortcutkey();

	
	$("#xemin").click(function(e){
			$.cookie("in_status", "print_preview"); 
			if($("#loaiabi :selected").val()==1)
			{		
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=ABI_new&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10&tieude=&chucnang=&chucdanh=",'ABI');
				
			}//loai report ABI may mơi
			else
			{
				dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=ABI&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10&tieude=&chucnang=&chucdanh=",'ABI');
			}//loai report ABI may cu
	});


	Globalize.culture( 'de-DE' );
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	create_combobox('#pwv', '#pwv1', "._pwv", "#_pwv", create_pwv, 500, 250, 'Kết Luận', 'data_pwv',0);
	create_combobox('#abi', '#abi1', "._abi", "#_abi", create_abi, 500, 250, 'Kết luận', 'data_abi',0);
	//alert(encode64("89045"));
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	
	$( "#pwv" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#abi" ).focus();
				return false;
			}
	});
	
	$( "#abi" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#luu" ).focus();
				return false;
			}
	});
	
	//alert(convert_comma_dot(2.22));
	//$('#rowed111').attr("align","center");
	
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container .mabenhnhan').text() ;    
	});
    
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	resize_control();	


	if(id_kham2!="0"){
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doxovua2&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
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
//alert(_id_trangthai); 
else{
	
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doxovua&idbenhnhan="+id_benhnhan,
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
					
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});
}

function test(){
		
		if(id_kham2!='0'){
			_id_luotkham.splice(0, _id_luotkham.length-1)
			_id_loaikham.splice(0, _id_loaikham.length-1)
			_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
			_id_kham.splice(0, _id_kham.length-1)
			
			
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doxovua2&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
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
			//_id_loaikham=$.unique(_id_loaikham);
			navigator_load("end","first");			
					
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});	
		}
		
		else{
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		delete tong_luotkham;
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doxovua&idbenhnhan="+id_benhnhan, 
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
			//_id_loaikham=$.unique(_id_loaikham);
			navigator_load("end","first");			
				
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
		});		
	});	
			}
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
		
	
		
			$("#open_form_hentra").click(function(e){
					   $.post('pages.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+"&idluotkham="+idluotkham;				  				  
						dialog_add_dm("",width,height,elem,links,test);   
				  		})
					  
					 }) ;
		
	
		/*center*/
		
  	}); 
      
			  
			  $("#sua").click(function(){
			  	//$('#sua').button( {disabled:true});
								lock_viewer(true,"visible");
								
                                $('#luu').button( {disabled:false});
                                $("#sua").hide();
                         		$('#boqua').show();
                         		$('.ui-spinner-up,.ui-spinner-down').button( {disabled:false});
                         		/*$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);*/
								  kt_trangthai(_id_trangthai);
                         	  $( "#mota,#ketluan" ).attr("disabled",false); 
						 
                       		$('.abi_button').button( {disabled:false});
                         		$( "#abi" ).attr("disabled",false);
								$('.pwv_button').button( {disabled:false});
                         		$( "#pwv" ).attr("disabled",false);
								 $('#pwv').focus();
                         		  
                         		  window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					lock_viewer(false,"hidden");
					$("#sua").show();
                    $('#boqua').hide();
                     $('#luu').button( {disabled:true});
             	       
					   $( "#mota,#ketluan").attr("disabled",true); 
						 
                       		$('.abi_button').button( {disabled:true});
                         		$( "#abi" ).attr("disabled",true);
								$('.pwv_button').button( {disabled:true});
                         		$( "#pwv" ).attr("disabled",true);	
					    	
						$("#mota").val(mota5);$("#ketluan").val(ketluan5);
                         		//$('.chuandoan_button').button( {disabled:true});
                         		/*$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
								$('.chuandoan_button').button( {disabled:true});
                         		$( "#chuandoan" ).attr("disabled",true);*/
                         		 // $( "#chuandoan" ).attr("disabled",true);
                         		 /* setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);*/
								  kt_trangthai(_id_trangthai);
                   //test(); 
				   if($( "#id_trangthai" ).text()=='Đã thực hiện')
					{
						$('.chuandoan_button').button( {disabled:false});
                        $( "#chuandoan" ).attr("disabled",false);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?php echo $_SESSION["user"]["id_user"] ?>);
					}   		  
                         		 
				});
			  $("#dathuchien").click(function(){
			  	$("#id_trangthai").html("Đã thực hiện");
                 $('#dathuchien').button( {disabled:true});
                  $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                 			_id_trangthai="DaThucHien";
							
							   $( "#mota,#ketluan").attr("disabled",true); 
						 
                       		$('.abi_button').button( {disabled:true});
                         		$( "#abi" ).attr("disabled",true);
								$('.pwv_button').button( {disabled:true});
                         		$( "#pwv" ).attr("disabled",true);	
                 			
                         		/*$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);*/
                         		kt_trangthai(_id_trangthai);
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
								dataToSend += phancach + '"mota":' + JSON.stringify($( "#mota" ).val()) + '';
								dataToSend += phancach + '"ketluan":' + JSON.stringify($( "#ketluan" ).val()) + '';
						        dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
						         dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';
						        dataToSend += '}';
						      // alert(dataToSend);
						        dataToSend = jQuery.parseJSON(dataToSend);
						       alertObject(dataToSend); 
						      $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien',dataToSend)
							   .done(function( gridData ) {	
			                                             tooltip_message("Cập nhật thành công");	
														
			                                            })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
			            test();
			            emr_thuchienxong(_kham,'','','','');// Xếp hàng chuyển phòng
						create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', '<?php echo($_SESSION["user"]["id_user"])?>');                   
			  });
			  $("#hoantat").click(function(){
			  	$("#id_trangthai").html("Đã hoàn tất");
                 $('#dathuchien').button( {disabled:true});
                 $('#hoantat').button( {disabled:true});
                  $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                        
                            
                         
                			 _id_trangthai="Xong";
                			kt_trangthai(_id_trangthai);
                         		/*$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		  $( "#chuandoan" ).attr("disabled",true);*/
                         		 
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
						        dataToSend += phancach + '"mota":' + JSON.stringify($( "#mota" ).val()) + '';
								dataToSend += phancach + '"ketluan":' + JSON.stringify($( "#ketluan" ).val()) + '';
						        dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
						         dataToSend += phancach + '"control":"' +nhanvien_control+ '"';
						        dataToSend += '}';
						   
						        dataToSend = jQuery.parseJSON(dataToSend);
						       alertObject(dataToSend); 
							  
								$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
			                        .done(function( gridData ) {	
			                                             tooltip_message("Cập nhật thành công");
														 test();   	 
			                                            })
			                                            .fail(function() {
			                                            tooltip_message( "Có lỗi trong quá trình cập nhật" );
			                                            });
                       
			  });
			
			
			$('#luu').click(function (){
				kt_trangthai(_id_trangthai);
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
			       	dataToSend += phancach + '"mota":' + JSON.stringify($( "#mota" ).val()) + '';
					dataToSend += phancach + '"ketluan":' + JSON.stringify($( "#ketluan" ).val()) + '';
			        dataToSend += phancach + '"nguoisua":"' +<?php echo($_SESSION["user"]["id_user"])?>+ '"';
			        //dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
			        dataToSend += '}';
					//alert(dataToSend);
			      
			       dataToSend = jQuery.parseJSON(dataToSend);
			       
				   //alert(window.oper);
			     if(window.oper=="dathuchien1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Lưu dữ liệu thành công");	 
														   test();
			                                            })
			                                            .fail(function() {
			                                            tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
			                                            })
			         }
			         if(window.oper=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Lưu dữ liệu thành công");	 
														   test();
			                                            })
			                                            .fail(function() {
			                                            tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
			                                            })
			         }     
					  if(window.oper=="dangkham1"){alertObject(dataToSend); 
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								.done(function( gridData ) {	
			                                             tooltip_message("Lưu dữ liệu thành công");	 
														   test();
														  
			                                            })
			                                            .fail(function() {
			                                            tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
			                                            })
			         }
			         
			
			    });
				
			 	phanquyen();
				image_message();

				
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });  
	
	
});

function refresh_images(){
  $("#images_viewer").attr("src",$("#images_viewer").attr("src"));
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
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+tam1_cls[5]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';				
				$("#ngay_kham").html(tam1_cls[2]);				 
				// $("#id_trangthai").html(tam1_cls[9]);
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

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
					if(tam==tam1){	
						//alert(ket_luan(-3.5));
						$("#ngaychidinh").val(val[i]["cell"][2]);
						$("#bschidinh").val(val[i]["cell"][4]);
						idluotkham=val[i]["cell"][5];
						mota5=val[i]["cell"][6];
						ketluan5=val[i]["cell"][7];
					$("#mota").val(val[i]["cell"][6]);
						$("#ketluan").val(val[i]["cell"][7]);
						
						
					   if(val[i]["cell"][10]==null) nhanvien_control=1; 
					  else nhanvien_control=0;
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
                        nhanvien4=val[i]["cell"][10];
                        chuandoan4=val[i]["cell"][15];
                        
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[9]; 
						 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                        $("#giothuchien").text(val[i]["cell"][16]);                      
                        $("#giohoantat").text(val[i]["cell"][17]); 
						kt_trangthai(_id_trangthai); 	
                    if(_id_trangthai=="DangCho"){
                    	$("#id_trangthai").html("Đang chờ").css("background-color","#3F3"); 
                    		 $('#sua').button( {disabled:true});
                    		 $('#luu').button( {disabled:false});
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
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
                         		  $('#add_template').button( {disabled:false});
                         		  $('#hoantat').button( {disabled:false});
                         		  setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                         		  setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
                    	$("#id_trangthai").html("Đã thực hiện").css("background-color","#FF4848");
                    	 $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
         
                          $( "#mota,#ketluan" ).attr("disabled",true); 
						 
                       		$('.abi_button').button( {disabled:true});
                         		$( "#abi" ).attr("disabled",true);
								$('.pwv_button').button( {disabled:true});
                         		$( "#pwv" ).attr("disabled",true);
                             $('#open_template').button( {disabled:true});
                             $( "#template_title" ).attr("disabled",true);
                             $('#dathuchien').button( {disabled:true});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:true});
                         		
                         		$( "#nhanvien" ).attr("disabled",true);
                         		$('#hoantat').button( {disabled:false});
                         		
                         		$( "#chuandoan" ).attr("disabled",false);
								$('.ui-spinner-up,.ui-spinner-down').button( {disabled:true});
                         		 
                         		window.oper="dathuchien1";
						 setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                    }
                    else if(_id_trangthai=="DangKham"){
                    	$("#id_trangthai").html("Đang khám").css("background-color","#FF6");
                    		 $('#sua').button( {disabled:true});
                    		 $('#luu').button( {disabled:false});
                              $('#open_template').button( {disabled:false});
                              $('#dathuchien').button( {disabled:false});                      
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false); 
                         		  $('#hoantat').button( {disabled:false});
                         		  $( "#chuandoan" ).attr("disabled",false);
								$('.abi_button').button( {disabled:false});
                         		$( "#abi" ).attr("disabled",false);
								$('.pwv_button').button( {disabled:false});
                         		$( "#pwv" ).attr("disabled",false);
								 $( "#mota,#ketluan" ).attr("disabled",false); 
								
                         		 $('.ui-spinner-up,.ui-spinner-down').button( {disabled:false}); 
                         		  setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
                         		  setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
								 window.oper="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						if(<?=$_SESSION['user']['id_user']?>==val[i]["cell"][15]){
							$('#sua').button( {disabled:false});
						}
						else{
							$('#sua').button( {disabled:true});
						}
                    	$("#id_trangthai").html("Đã hoàn tất").css("background-color","Transparent");;
                    	// $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                      		
							$('.abi_button').button( {disabled:true});
                         		$( "#abi" ).attr("disabled",true);
								$('.pwv_button').button( {disabled:true});
                         		$( "#pwv" ).attr("disabled",true);
                      		
						 $( "#mota,#ketluan" ).attr("disabled",true); 
                          
                             $('#dathuchien').button( {disabled:true});
                              $('#hoantat').button( {disabled:true});
                            
                         		$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		 $( "#nhanvien" ).attr("disabled",true);
                         		  $( "#chuandoan" ).attr("disabled",true);
                         		
                         		   
                         		 window.oper="hoantat1";
                    }
                   /* else{
                       $("#id_trangthai").html(tam1_cls[9]); 
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
                         		$( "#para1" ).attr("disabled",false);
                         		  $( "#para2" ).attr("disabled",false);
                         		  $( "#para3" ).attr("disabled",false);
                         		  $( "#para4" ).attr("disabled",false);
                    }*/
                    $("#giohentra").text(val[i]["cell"][11]);
                    		 			 
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
					if($("#nguoisua").text()==check[0]) //alert(check[0]);
				 		$("#nguoisua").text(check[1]);
					
				}
				
				////////
				var ii=0;				 
				for(i=0;i<_id_kham.length;i++){
					if(_id_loaikham[i]==id_loaikham){						 				 
						//console.log(_id_kham[i]+"  "+ii);						 			 
						if((_id_kham[i]==$(this).attr("id"))&&(_id_loaikham[i])==id_loaikham){
							id_kham=_id_kham[i]
												
													
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
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-13+"px");
	//$("#center_col").css("width",$(window).width()/3-205+"px");
	$("#right_col").css("width",$(window).width()/2+3+"px");
	$("#images_viewer").css("height",$(window).height()/2+100+"px");
	
}

function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  //alert(_folder_name);
	  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);   
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
	
	
	function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  //alert(_folder_name);
	  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);   
	
}
	
 function create_pwv(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Kết luận'],
            colModel: [
                {name: 'KetLuan', index: 'KetLuan', hidden: false}
             
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				 var rowData = $('#_pwv').getRowData(id);
				 $("#mota").val(rowData["KetLuan"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	 function create_abi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Kết luận'],
            colModel: [
                {name: 'KetLuan', index: 'KetLuan', hidden: false}
             
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				 var rowData = $('#_abi').getRowData(id);
				 $("#ketluan").val(rowData["KetLuan"]);
            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {

                grid_filter_enter(elem);
            
				//window.nhanvien2_complete=1;


            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
   

function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	
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
		 $('.chuandoan_button').button( {disabled:false});
		 $( "#chuandoan" ).attr("disabled",false);
	}else{
		$('.nhanvien_button').button( {disabled:false});
		$( "#nhanvien" ).attr("disabled",false);
		$( "#chuandoan" ).attr("disabled",false);
		$('.chuandoan_button').button( {disabled:false});
	}
	}
</script>
 
 
