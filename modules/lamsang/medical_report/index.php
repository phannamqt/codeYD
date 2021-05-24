<?php
	if(isset($_GET["id_benhnhan"]) && $_GET["id_benhnhan"]!=="undefined"){
		echo "<script type='text/javascript'>";
		echo "window.idbenhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}elseif(isset($_GET["idbenhnhan"]) && $_GET["idbenhnhan"]!=="undefined"){
		echo "<script type='text/javascript'>";
		echo "window.idbenhnhan=".$_GET["idbenhnhan"];
		echo "</script>";
		
	}else{
		if($_SESSION["ThongTinBenhNhan"]["id_benhnhan"]==""){
			echo "<script type='text/javascript'>";
				echo "parent.postMessage('hosobenhnhantrong;' , '*')";
			
			echo "</script>";
			return;
		}else{
			echo "<script type='text/javascript'>";
			echo "window.idbenhnhan=".$_SESSION["ThongTinBenhNhan"]["id_benhnhan"];
			echo "</script>";
		}
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
		  filter: alpha(opacity=1); chuand
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
		padding-top:2px;		
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
	.btn_dl{
		border-radius:5px;
		padding:.4em 1em;
		font: 12px segoe ui, Tahoma, sans-serif;
	    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.6) !important;
	    font-weight: normal!important;
	    box-shadow: 0 0 5px #383838!important;
	    border: 1px solid #327E04;
	    background: #b3ffb3 url(images/ui-bg_highlight-hard_15_459e00_1x100.png) 50% 50% repeat-x;
	    font-weight: bold;
	    color: #ffffff;
	    margin-top: 5px;
	    float:right;
	    margin-left: 3px;
	    cursor: pointer;
	}
	.btn_dl:hover{
		background-color: #1d568c;

	}
	#english a:hover{
		background-color: #008ddf;
	}
	#english{
		border:1px solid #327E04;
		width:80px;
		padding:0.35em 1em; 
		margin-right:2px;
		margin-bottom:1px;
		float: right; 
		text-decoration:none; 
		font-weight:550; 
		box-shadow:0 0 5px #383838 !important;
	}
</style>
<body>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" >
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
			<input id="ngaychidinh" name="ngaychidinh" lang='luu' style="width:100px;margin-left:90px" type="text" disabled>
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 604px;">   
    	<div class="thongtin_luotkham_scroll" style="display:none"></div>
    	<span id="caption" style="font-size:17px;color:#09C;margin-left:5px;margin-top:5px; font-weight:bold">Số ca:</span>
    	<br><br>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
    </div>
   
    <div class="thongtin_luotkham" id="right_col">  	 
    	<div style="margin-top: 4px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px" hidden></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:90px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:92px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:92px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>	
    	<a href="#" id="chen" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:90px;  margin-bottom:1px;float: right;">Chèn<span class="ui-icon ui-icon-pencil"></span></a>	 
    	<a href="#" id="laylaidulieu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:100px;  margin-bottom:1px;float: right;">Lấy lại dữ liệu<span class="ui-icon ui-icon-close"></span></a>
    	
    	<a href="#" id="english" style="display:none;" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" ><center>English</center></a>
    	
    	</div>
    	<div style="margin-top: 1px;float: right;">
    	<a href="#" id="intiengviet" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:90px; margin-bottom:1px;float: right; ">In <span class="ui-icon ui-icon-print"></span></a> 	
    	<a href="#" id="intienganh" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:90px; margin-bottom:1px;float: right; display:none;">In tiếng anh<span class="ui-icon ui-icon-print"></span></a> 
    	<span id="In_CoChuKy" style="float:right;margin:5px 0px 0 0;text-align:center;width:118px">
            <input type="checkbox" checked />
            <label>In có chữ ký</label>
        </span>
        <a href="#" id="xoa" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:100px; margin-bottom:1px;float: right; ">Xóa<span class="ui-icon ui-icon-close"></span></a> 
        <label id=""style="margin-right: 20px;color:green;font-size:14px">Đã hoàn tất hồ sơ</label>
    	<input type="checkbox" style="float: left;">
    	</div>
    	
    </div>
 </div> 
 
 <div id="panel_main">    
  
        <div class="ui-widget-content  thongtin_thai ui-layout-center " id="inner" >
            <div class="ui-layout-north thongtin_thai">
            	<label style="text-align:left;font-size:15px;color:red">Mô tả:</label>
                <textarea lang='luu' id="mota" name="mota" style="font-size:14px!important" ></textarea>
            	
            </div>
            <div class="ui-layout-center thongtin_thai"> 
            	<label style="text-align:left;font-size:15px;color:red">Kết luận:</label>
    	 		
                <textarea lang='luu' id="ketluan" name="ketluan" style="font-size:14px!important" ></textarea>

            </div>
            <div class="ui-layout-south thongtin_thai">
            	<label style="text-align:left;font-size:15px;color:red">Cách điều trị:</label>
            	<span class="custom-combobox">
                    <input id="cach_dieu_tri" name="cach_dieu_tri"  type="text" style="width:200px;">
            	</span> 
            	<input id="cach_dieu_tri1"  name="cach_dieu_tri1" type="text" lang='luu' style="display:none" >
                <textarea id="cachdieutri"name="cachdieutri" lang='luu'style="font-size:14px!important" ></textarea>
            </div>
        </div>
        <div class="ui-widget-content ui-layout-east" > 
            <label style="text-align:left;font-size:15px;color:red">Tổng hợp:</label>
            <textarea id="tonghop"name="tonghop" lang='luu'style="font-size:15px!important" readonly ></textarea>
        </div> 
	</div>
	<!-- Form add dữ liệu -->
	<div id="dialog-form" title="Support translate / Hỗ trợ dịch thuật" style="display:none">


			<div class="form_dl" style="border:1px solid #ccc; padding:4px;">

 				<input lang='luu' name=""style="width:100px" type="hidden">
	            <label style="width:90px;margin-left:10px;text-align:right">&nbsp + Translator / Người hỗ trợ dịch thuật : </label>
	            <span class="custom-combobox">
	                    <input id="nguoidich" name="nguoidich"  type="text" style="width:100px;" disabled="">
	            </span>
	            <input lang='luu' name="nguoidich1"  id="nguoidich1"style="width:100px" type="hidden" id="nguoidich" disabled="">
            </div>

		  	<div class="ui-layout-north thongtin_dl" style="border:1px solid #ccc;width:100%; height: auto;">
            	<label style="text-align:left;font-size:15px;color:red">&nbsp DESCRIPTIONS (Mô tả):</label>
                <center><textarea lang='luu' id="mota_eng" name="mota_eng" style="font-size:14px!important; width:98%; height:125px;" ></textarea></center>

            </div>
		    <div style="width:100%; height:auto;border:1px solid #ccc;">
		    	<div class="thongtin_dl" style="width:50%; height:auto;border:1px solid #ccc; float:left">
		    		<label style="text-align:left;font-size:15px;color:red"><p style="margin:0px; height:24px;">&nbsp DIAGNOSIS (Kết luận):</p></label>
	            	<center><textarea lang='luu' id="ketluan_eng" name="ketluan_eng" style="font-size:14px!important; width:98%; height:100px;" ></textarea></center>

		    	</div>

		    	<div class="thongtin_dl" style="width:49%; height:auto;border:1px solid #ccc; float:right">
		    		<label style="text-align:left;font-size:15px;color:red">&nbsp MANAGEMENT (cách điều trị):</label>

		    		<span class="custom-combobox">
	                    <input id="cach_dieu_tri_dl" name="cach_dieu_tri_dl"  type="text" style="width:55px;">
	            	</span> 
	            	<input id="cach_dieu_tri_dl1"  name="cach_dieu_tri_dl1" type="text" lang='luu' style="display:none;" >

	            	<center><textarea lang='luu' id="cachdieutri_eng" name="cachdieutri_eng" style="font-size:14px!important; width:98%; height:100px;" ></textarea></center>

		    	</div>
		    </div>

		    <button id="close" class="btn_dl" >Close</button>
		    <button id="clear" class="btn_dl" >Clear</button>
		    <button id="save" class="btn_dl" >Save</button>
		    <button id="intienganh1" class="btn_dl" >Print</button>
		    
    </div>
	</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$("#dialog-form").dialog({
	    autoOpen: false,
	    show: {},
	    width:640,
	    right:40,
	    //position: ['center', 'center+600'],
	    hide: {}
	});
	$("#english").click(function(){
		$("#dialog-form").dialog("open");
		jQuery("#dialog-form").dialog('option', 'position', [690,150]);
	});
	$("#close").click(function () {
	  $("#dialog-form").dialog("close");
	});
	$("#clear").click(function(){
		$("#mota_eng").val("");
		$("#ketluan_eng").val("");
		$("#cachdieutri_eng").val("");
	});

});

///////////////////////////
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];

var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;

var _id_trangthai;
var _kham;
var trangthai;
var idbenhnhan;
var nhanvien_control;
var tenloaikham;

$(document).ready(function() {

	$('#themmoi').button();

	openform_shortcutkey();
	$("#intiengviet").click(function(e){
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){var chuky=1;}else{var chuky=0;}	
		kiemtranull="0";
		mota=$("#mota").val();
		ketluan=$("#ketluan").val();
		cachdieutri=$("#cachdieutri").val();
		if(mota=="" && ketluan=="" && cachdieutri==""){
			kiemtranull="1";
		}
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=medicalreport&header=top&idbenhnhan="+idbenhnhan+"&id_luotkham="+id_luotkham2+"&ngaygio="+$("#ngaychidinh").val()+"&kiemtranull="+kiemtranull+"&type=report&id_form=10&chuky="+chuky,'InKhoA4DenTrang');
		$(".frame_u78787878975f").css("width","793px");
		//MedicalReportEN= $.cookie*("in_status","print_pewview");
	});
	$("#intienganh").click(function(e){	
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){var chuky=1;}else{var chuky=0;}
		kiemtranull="0";
		mota_eng=$("#mota_eng").val();
		ketluan_eng=$("#ketluan_eng").val();
		cachdieutri_eng=$("#cachdieutri_eng").val();
		if(mota_eng=="" && ketluan_eng=="" && cachdieutri_eng==""){
			kiemtranull="1";
		}
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=medicalreport2&header=top&idbenhnhan="+idbenhnhan+"&id_luotkham="+id_luotkham2+"&ngaygio="+$("#ngaychidinh").val()+"&kiemtranull="+kiemtranull+"&type=report&id_form=10&chuky="+chuky,'MedicalReportEN');
		$(".frame_u78787878975f").css("width","793px");
		
	});
	$("#intienganh1").click(function(e){
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){var chuky=1;}else{var chuky=0;}
		kiemtranull="0";
		mota_eng=$("#mota_eng").val();
		ketluan_eng=$("#ketluan_eng").val();
		cachdieutri_eng=$("#cachdieutri_eng").val();
		if(mota_eng=="" && ketluan_eng=="" && cachdieutri_eng==""){
			kiemtranull="1";
		}
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=medicalreport_eng&header=top&idbenhnhan="+idbenhnhan+"&id_luotkham="+id_luotkham2+"&ngaygio="+$("#ngaychidinh").val()+"&kiemtranull="+kiemtranull+"&type=report&id_form=10&chuky="+chuky,'MedicalReportEN');
		$(".frame_u78787878975f").css("width","793px");
	});
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	

	//combobox người dịch
	var id_nd = '<?php echo $_SESSION["user"]["id_user"] ?>'
	$("#id_nguoinhap_edit").val('<?php echo $_SESSION["user"]["id_user"] ?>');
	create_combobox('#nguoidich', '#nguoidich1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người dịch thuật', 'data_nhanvien',id_nd);
	//end combobox người dịch
	create_combobox('#cach_dieu_tri_dl', '#cach_dieu_tri_dl1', ".nhan_vien3", "#nhan_vien3", create_cachdieutri1, 500, 400, 'Người thực hiện', 'data_cachdieutri_eng');
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	create_combobox('#cach_dieu_tri', '#cach_dieu_tri1', ".nhan_vien2", "#nhan_vien2", create_cachdieutri, 500, 400, 'Người thực hiện', 'data_cachdieutri');
	
	$('#sua').button();
	$('#luu').button();
	//$('#save').button();

	$('#intiengviet').button();
	$('#intienganh').button();
	$('#xoa').button();
	$('#chen').button();
	$('#laylaidulieu').button();
	$('#chen1').button();

	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	
	load_select();
	create_grid();	
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+idbenhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container .mabenhnhan').text() ;  

	});
        
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+idbenhnhan, 
		function( data ) {
			data_luotkham=data;

	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				_id_luotkham.push(tam1_cls[0]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			//_id_luotkham=$.unique(_id_luotkham);
			load_complete();
			if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
				$('.template_title_button').button( 'disable');
			}
			 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
			 	$('.template_title_button').button( 'enable');
			 }
		});		
	});
	
	function test(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		
		delete tong_luotkham;
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+idbenhnhan, 
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
						
				
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			
		});		
	});	}
	
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
        

			  $("#sua").click(function(){
				$('#luu').button( {disabled:false});
				$('#ketluan').attr("disabled",false);
				$('#mota').attr("disabled",false);
				$('#cachdieutri').attr("disabled",false);
				$('.cach_dieu_tri_button').button( {disabled:false});
				$('#cach_dieu_tri').attr("disabled", false);
				$('#ID_NuocSanXuat').attr("disabled",false);
				$('#open_template').button( {disabled:false});
				$( "#template_title" ).attr("disabled",false);
				$("#sua").hide();
				$('#boqua').show();
				$('.template_title_button').button( {disabled:false});
				$('.chuandoan_button').button( {disabled:false});
				$('.nhanvien_button').button( {disabled:false});
				$( "#nhanvien" ).attr("disabled",false);
				$( "#chuandoan" ).attr("disabled",false);

				window.thongtin_giosua="giosuacuoi";
			  });
				$("#boqua").click(function(){
					$("#sua").show();
					$('#boqua').hide();
					$('.cach_dieu_tri_button').button( {disabled:true});
					$('#cach_dieu_tri').attr("disabled", "disabled");

					$('#luu').button( {disabled:true});
					$('#ketluan').attr("disabled",true);
					$('#mota').attr("disabled",true);
					$('#cachdieutri').attr("disabled",true);
					$('#xoaketluan').button( {disabled:true});
					$('#xoaloikhuyen').button( {disabled:true});
					$('#xoamota').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					$("#mota").val(mota5);
					$("#ketluan").val(ketluan5);
					$("#cachdieutri").val(cachdieutri5);
					//$("#nhanvien1").val(nhanvien4);
					//  $("#chuandoan1").val(chuandoan4);
					$('.template_title_button').button( {disabled:true});
					//$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					// $( "#chuandoan" ).attr("disabled",true);
					$('#add_template').button( {disabled:true});
					//setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);

					//reload();
				});
			  $("#dathuchien").click(function(){
				window.thongtin_giosua2="dathuchien1";
				$("#id_trangthai").html("Đã thực hiện");
				$('#dathuchien').button( {disabled:true});
				$('#sua').button( {disabled:false});
				$('#luu').button( {disabled:true});
				$('#ID_NuocSanXuat').attr("disabled",true);
				$('#ketluan').attr("disabled", "disabled");
				$('#mota').attr("disabled", "disabled");
				$('#cachdieutri').attr("disabled", "disabled");
				$('#open_template').button( {disabled:true});
				$( "#template_title" ).attr("disabled",true);
				_id_trangthai="DaThucHien";
				$('.template_title_button').button( {disabled:true});
				$('.chuandoan_button').button( {disabled:false});
				$('.nhanvien_button').button( {disabled:true});
				$( "#nhanvien" ).attr("disabled",true);
				$('#add_template').button( {disabled:true});
				$('#boqua').hide();
				$('#sua').show();

				var a = $("#para1").val();
				var b = $("#para2").val();
				var c = $("#para3").val();
				var d = $("#para4").val();
				var e=a+"-"+b+"-"+c+"-"+d;
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
				dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
				//dataToSend += phancach + '"id_trangthai":"' + "DaThucHien" + '"';
				dataToSend += phancach + '"ngaythuchien":"' + gio("current") + '"';
				dataToSend += '}';
				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
				alertObject(dataToSend); 
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
				.done(function( gridData ) {	
				//alert(gridData);	 
				})
				.fail(function() {
				alert( "error" );
				});
				tooltip_message("Đã thực hiện");
			            //test();                                  
			  });
			  $("#hoantat").click(function(){
				window.thongtin_giosua2="hoantat1";
				$("#id_trangthai").html("Đã hoàn tất");
				$('#dathuchien').button( {disabled:true});
				$('#hoantat').button( {disabled:true});
				$('#cachdieutri').attr("disabled", "disabled");;
				$('#sua').button( {disabled:false});
				$('#luu').button( {disabled:true});
				$('#ID_NuocSanXuat').attr("disabled",true);
				$('#ketluan').attr("disabled", "disabled");
				$('#mota').attr("disabled", "disabled");
				$('#loikhuyen').attr("disabled", "disabled");
				$('#open_template').button( {disabled:true});
				$( "#template_title" ).attr("disabled",true);
				_id_trangthai="Xong";
				$('.template_title_button').button( {disabled:true});
				$('.chuandoan_button').button( {disabled:true});
				$('.nhanvien_button').button( {disabled:true});
				$( "#nhanvien" ).attr("disabled",true);
				$( "#chuandoan" ).attr("disabled",true);
				$('#add_template').button( {disabled:true});
				$('#boqua').hide();
				$('#sua').show();

				var a = $("#para1").val();
				var b = $("#para2").val();
				var c = $("#para3").val();
				var d = $("#para4").val();
				var e=a+"-"+b+"-"+c+"-"+d;
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
				dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
				//dataToSend += phancach + '"id_trangthai":"' + "Xong" + '"';
				dataToSend += phancach + '"ngaythuchien":"' + gio("current") + '"';
				dataToSend += '}';

				//alert(dataToSend);
				dataToSend = jQuery.parseJSON(dataToSend);
				//alertObject(dataToSend); 
				/*if(nhanvien_control==1){

				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {	
				tooltip_message("Đã hoàn tất");	 
				})
				.fail(function() {
				tooltip_message( "Có lỗi trong quá trình cập nhật" );
				});

				}
				else{*/
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {	
				tooltip_message("Đã hoàn tất");	 
				})
				.fail(function() {
				tooltip_message( "Có lỗi trong quá trình cập nhật" );
				});
				/*}*/
				//test();                                        
			  });
			  $('#luu').click(function (){

		  		if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
		  			tooltip_message("Đã lưu");
			  	}
			                      
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

			            if ($(this).attr("lang") == "luu") {
			              
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
			            
			            }
			            phancach = ",";

			        });
			        dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';

			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			       alertObject(dataToSend); 
			        
			       if(window.thongtin_giosua2=="dathuchien1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
                                     tooltip_message("Đã lưu");
                                     // test();	 
                                    })
                                    .fail(function() {
                                    alert( "error" );
                                    })
			         }else
			         if(window.thongtin_giosua2=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
                                     tooltip_message("Đã lưu");
                                    //  test(); 
                                    })
                                    .fail(function() {
                                    alert( "error" );
                                    })
			         }   
			         else  
			          {
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
                                     tooltip_message("Đã lưu"); 
                                    // test();    
                                    })
                                    .fail(function() {
                                    alert( "error" );
                                    })
			         }
			  });



			$('#save').click(function (){

		  		if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho" || _id_trangthai=="Xong" ){
		  			tooltip_message("Đã lưu");
			  	}
			  	else{}
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_dl,.form_dl').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {
			            if ($(this).attr("lang") == "luu") {
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
			            }
			            phancach = ",";
			        });
			        dataToSend += phancach + '"id_luotkham":"' + id_luotkham2 + '"';
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			       alertObject(dataToSend); 
			        
			       if(window.thongtin_giosua2=="dathuchien1"){}else
			         if(window.thongtin_giosua2=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudl&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
                                     tooltip_message("Đã lưu");
                                    //  test(); 
                                    })
                                    .fail(function() {
                                    alert( "error" );
                                    })
			         }   
			         else  
			          {}    
			  });
				
			 	phanquyen();
				var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
				var eventer = window[eventMethod];
				var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
				eventer(messageEvent,function(e) {	
					 edit_images(e.data);
					//parent.postMessage(e.data , '*')
				},false);

				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });
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
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {

		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];

			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[0]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();
	}
	$("#left_col .navigator_title").html("Lần " + (navigator_count+1) +"/"+_id_luotkham.length);	
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
					var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");
					//alert(tam1);
					if(tam==tam1){
					parent.postMessage('changetitle;<?=$view?>-'+idbenhnhan+';Medical report - ;'+$('#panel_tenbn').text() , '*');
					$("#edit_by").show();
					window._id_trangthai=tam1_cls[4];
					window.id_luotkham2=tam1_cls[0];
					//alert(id_luotkham2);
						$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_tonghop&id_luotkham="+id_luotkham2, 
								function( data ) {
									data_luotkham4=data;

									var tam1_cls="";
									var thongtin4="";
									var thongtin5="";
									var test6="";
									
									$.each( data, function( key, val ) {							
											for(i=0;i<val.length;i++){
												 if(val[i]["cell"][11]!='' && val[i]["cell"][11]!='null' && val[i]["cell"][11]!= null){
													 $("#ketluan").val(val[i]["cell"][11]);
												 }
												
												var tam1_cls=val[i]["cell"];
												//console.log(tam1_cls[11]);
												$("#mota").val(tam1_cls[10]);
												
												$("#cachdieutri").val(tam1_cls[12]);
												window._id_trangthai=tam1_cls[13];
												//alert(_id_trangthai);
												if(tam1_cls[2]=="0"){
													thongtin5+=tam1_cls[0]+":"+tam1_cls[1]+" "+tam1_cls[14]+"\n";
													//alert(tam1_cls[10]);
													thongtin5 = thongtin5.replace(/Khám lâm sàng:/gi, " ").replace(/Khám sức khoẻ cty:/gi, "");
												}
											  else if(tam1_cls[17]=="1"){
														if(tam1_cls[7]=="Red" || tam1_cls[7]=="Orange" || tam1_cls[7]=="BatBuoc"){
															test6+="    - "+tam1_cls[4]+" : "+tam1_cls[3]+" "+tam1_cls[5]+"\n";
														}
												}
												else{
													thongtin4+=" + "+tam1_cls[0]+" : "+tam1_cls[1]+tam1_cls[3]+"\n";
												}												
											}
											if(tam1_cls[16]==null && tam1_cls[15]==null){
												setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
												setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
											}
											else{
												setval('#nhanvien','#nhanvien1','#nhan_vien',tam1_cls[15]);
												setval('#chuandoan','#chuandoan1','#nhan_vien1',tam1_cls[16]);
											}
										});
											$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dauhieusinhton&id_luotkham="+id_luotkham2, 
											function( data) {
													$.each( data, function( key, val ) {
														var tam1_cls=val[0]["cell"];
														window.sinhton="1/ Huyết áp: "+tam1_cls[0]+" mmHg    Mạch: "+tam1_cls[1]+" L/p    Chiều cao: "+tam1_cls[2]+" cm    Cân nặng: "+tam1_cls[3]+" kg     BMI: "+tam1_cls[4];
														
														if(tam1_cls[4]!=null){
															//echo round($BMI,1);			
															if(tam1_cls[4]<18.5 ){
																window.sinhton+= " (Gầy)";                 
															}else if((tam1_cls[4]>=18.5)&&(tam1_cls[4]<23)){
																window.sinhton+= " (Bình thường)";                
															}else if((tam1_cls[4]>=23)&&(tam1_cls[4]<25)){
																window.sinhton+= " (Thừa cân)";                 
															}else if((tam1_cls[4]>=25)&&(tam1_cls[4]<30)){
																window.sinhton+= " (Béo phì độ I)";                 
															}else if((tam1_cls[4]>=30)&&(tam1_cls[4]<35)){
																window.sinhton+= " (Béo phì độ II)";               
															}else if(tam1_cls[4]>=35){
																window.sinhton+= " (Béo phì độ III)";                
															}
														}
														if(parseInt(tam1_cls[5])==25){
															var _muc2='Đo thị lực hai mắt: ';
														}else{
															var _muc2='Lý do khám: ';
														}
														
														//alert(sinhton);
													//$("#tonghop").val(sinhton);
													    //sinhton=sinhton.replace("1/ Lý do khám bệnh: ","");
														sinhton=sinhton.replace("1/ Huyết áp: / mmHg    Mạch: null L/p    Chiều cao: null m    Cân nặng: null kg     BMI: null","");
														sinhton=sinhton.replace("Chiều cao: null m    Cân nặng: null kg     BMI: null ","");
														if(tam1_cls[4]==null){
															sinhton=sinhton.replace("Chiều cao: "+tam1_cls[2]+" m    Cân nặng: "+tam1_cls[3]+" kg     BMI: null","");
														}
														$("#tonghop").val(sinhton+ " \n2/ "+_muc2+"\n3/ Triệu chứng lâm sàng: \n"+thongtin5+"\n4/ Khám nghiệm cận lâm sàng:\n"+thongtin4+" + Xét Nghiệm:\n"+test6);
														var res = $("#tonghop").val().replace(/null/gi, " ");
														$("#tonghop").val(res);
													});
												})
														
											$("#tonghop").val("3/ Triệu chứng lâm sàng:\n"+thongtin5+"4/ Khám nghiệm cận lâm sàng:\n"+thongtin4+" + Xét Nghiệm:\n"+test6);
											var res = $("#tonghop").val().replace(/null/gi, " ");
														$("#tonghop").val(res);

							})
							$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_medical&id_luotkham="+id_luotkham2, 
								function( data ) {
									data_luotkham4=data;
									var thongtin5="";
									//alert($.isEmptyObject(data));
									if($.isEmptyObject(data)==true){
										setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
												setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
									}else{
									$.each( data, function( key, val ) {
											for(i=0;i<val.length;i++){
												var tam1_cls=val[i]["cell"];
												$("#mota").val(tam1_cls[0]);
												$("#ketluan").val(tam1_cls[1]);
												$("#cachdieutri").val(tam1_cls[2]);
												$("#id_trangthai").html(tam1_cls[3]);

												$("#mota_eng").val(tam1_cls[6]);
												$("#ketluan_eng").val(tam1_cls[7]);
												$("#cachdieutri_eng").val(tam1_cls[8]);
												$("#nguoidich1").val(tam1_cls[9]);
												//alert($("#mota").val());
												window.mota5=tam1_cls[0];
												window.ketluan5=tam1_cls[1];
												window.cachdieutri5=tam1_cls[2];
												if(tam1_cls[3]=="Xong"){
													$('#ketluan').attr("disabled", "disabled");
													$('#mota').attr("disabled", "disabled");
													$('#cachdieutri').attr("disabled", "disabled");
													$('#dathuchien').button( {disabled:true});
													$('#hoantat').button( {disabled:true});
													$('#sua').button( {disabled:false});

													$('#luu').button( {disabled:true});
													$('.cach_dieu_tri_button').button( {disabled:true});
													$('#cach_dieu_tri').attr("disabled", "disabled");
													setval('#nhanvien','#nhanvien1','#nhan_vien',tam1_cls[4]);
													setval('#chuandoan','#chuandoan1','#nhan_vien1',tam1_cls[5]);
													window.thongtin_giosua2=="dathuchien1";

												}else if(tam1_cls[3]=="DaThucHien"){
													$('#ketluan').attr("disabled", "disabled");
													$('#mota').attr("disabled", "disabled");
													$('#cachdieutri').attr("disabled", "disabled");
													$('#dathuchien').button( {disabled:true});
													$('#hoantat').button( {disabled:false});
													$('#sua').button( {disabled:false});
													$('#luu').button( {disabled:true});
													$('.cach_dieu_tri_button').button( {disabled:true});
													$('.chuandoan_button').button( {disabled:false});
													$('#cach_dieu_tri').attr("disabled", "disabled");
													$('.nhanvien_button').button( {disabled:true});
													$('#nhanvien').attr("disabled", "disabled");
													window.thongtin_giosua2=="dathuchien1";
													setval('#nhanvien','#nhanvien1','#nhan_vien',tam1_cls[4]);
													setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
												}else{
													$('#ketluan').attr("disabled", false);
													$('#mota').attr("disabled", false);
													$('#cachdieutri').attr("disabled",false);
													$('#dathuchien').button( {disabled:false});
													$('#hoantat').button( {disabled:false});
													$('#sua').button( {disabled:true});
													$('#luu').button( {disabled:false});
													$('.cach_dieu_tri_button').button( {disabled:false});
													$('#cachdieutri').attr("disabled", false);
													setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
													setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
													window.thongtin_giosua2=="dangkham1";
													}
												}
											});	
										}
							})
						//$("#tonghop").html(data_luotkham4);
						 $("#ngaychidinh").val(tam1_cls[2]);
						 $("#nguoi_chidinh").val(tam1_cls[3]);
						 $("#tonghop").val();
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                    if(_id_trangthai=="Xong"){
						//$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$('#hoantat').button( {disabled:true});
						$('#add_template').button( {disabled:true});
						$( "#chuandoan" ).attr("disabled",false);
						$('.chuandoan_button').button( {disabled:true});
						$('#chuandoan').attr("disabled", "disabled");

						window.thongtin_giosua2="hoantat1";
						window.thongtin_giosua3="dathuchien";
						//setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);

                    }
                    else  if(_id_trangthai=="DaThucHien"){
						//$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
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
						$('.chuandoan_button').button( {disabled:true});
						$('#chuandoan').attr("disabled", false);

						window.thongtin_giosua2="dathuchien1";
						window.thongtin_giosua3="dathuchien";
						//setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                    }
                    else {
						//$("#id_trangthai").html("Đang khám");
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
						$( "#chuandoan" ).attr("disabled",false);
						$( "#para1" ).attr("disabled",false);
						$( "#para2" ).attr("disabled",false);
						$( "#para3" ).attr("disabled",false);
						$( "#para4" ).attr("disabled",false);
						window.thongtin_giosua2="dangkham1";
						$('.cach_dieu_tri_button').button( {disabled:false});
						$('#cachdieutri').attr("disabled", false);
						$('#cach_dieu_tri').attr("disabled", false);
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
		});
	});
}
function resize_control(){
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	
	$("#left_col").css("width",$(window).width()/3+135+"px");
	$("#center_col").css("width",$(window).width()/3-205+"px");
	$("#right_col").css("width",$(window).width()/3+56+"px");
	$("#mota").css("width",$(".ui-layout-center").width()-8+"px");
	$("#mota").css("height",$(".ui-layout-north").height()-28+"px");
	$("#ketluan").css("width",$(".ui-layout-center").width()-8+"px");
	$("#ketluan").css("height",$(".ui-layout-east").height()-$(".ui-layout-south").height()-$(".ui-layout-north").height()-40+"px");
	$("#cachdieutri").css("width",$(".ui-layout-center").width()-8+"px");
	$("#cachdieutri").css("height",$(".ui-layout-south").height()-33+"px");
	$(".thongtin_luotkham").css("width",$(window).width()/2-5+"px");
	$(".thongtin_chidinh").css("width",$(window).width()/2-5+"px");
	$(".thongtin_tongthe").css("width",$(window).width()/2-5+"px");
	$("#tonghop").css("width",$(".ui-layout-east").width()-8+"px");
	$("#tonghop").css("height",$(".ui-layout-east").height()-30+"px");
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		
	    ,	center: {
			resizable: true
		,	size:"50%"
		,	resizerDblClickToggle: false
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  

		,	east: {
			resizable: true
		,	size:"50%"
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

$('#inner').layout({
            resizerClass: 'ui-state-default'
            , north: {
		               maskContents:		true
				,	resizable: true
				,	size:					"45%"
				,	resizerDblClickToggle: false 
				,	onresize_end:function () { 				 
						 resize_control();
					}
				,	onopen_end:function () { 
						 
					}
				,	onclose_end:function () { 				 
					 	 
					}

            }
            , center: {
		                resizable: true
				,	size:					"25%"
				,	resizerDblClickToggle: false		 
						
				 
				,	onresize_end:function () { 				 
						  resize_control();
					}
				,	onopen_end:function () {				 
						 	
					}
				,	onclose_end:function () { 				 
			  			 	 
					}	
            }
            , south: {
                resizable: true
					,	size:					"30%"
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
            height: 200,
            width: 300,
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
    function create_cachdieutri(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Cách điều trị'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
               
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				if(jQuery('#nhan_vien2').data('clicked')) {

						var ketluan2=$.trim($("#ketluan").val());
						var cachdieutri2=$("#cachdieutri").val();
			             var rowData = $('#nhan_vien2').getRowData(id);
						  if(cachdieutri2!=""){
						  	cachdieutri3=$.trim(rowData["TenTemplate"]);
						  	cachdieutri2=cachdieutri2+"\n"+cachdieutri3;
						  	$("#cachdieutri").val(cachdieutri2);
						  	if(ketluan2==""){
						  		$("#ketluan").val("- Không có phát hiện bất thường");
						  	}
						  }
			              else{
			                    $("#cachdieutri").val(rowData["TenTemplate"]);
			                    	if(ketluan2==""){
						  		$("#ketluan").val("- Không có phát hiện bất thường");
						  	}
			              }
						  
							
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
    function create_cachdieutri1(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['MANAGEMENT'],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate', hidden: false},
               
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 300,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				if(jQuery('#nhan_vien3').data('clicked')) {

						var ketluan3=$.trim($("#ketluan_eng").val());
						var cachdieutri3=$("#cachdieutri_eng").val();
			             var rowData = $('#nhan_vien3').getRowData(id);
						  if(cachdieutri3!=""){
						  	cachdieutri4=$.trim(rowData["TenTemplate"]);
						  	cachdieutri3=cachdieutri3+"\n"+cachdieutri4;
						  	$("#cachdieutri_eng").val(cachdieutri3);
						  	if(ketluan3==""){
						  		$("#ketluan_eng").val("- No normal occurrence");
						  	}
						  }
			              else{
			                    $("#cachdieutri_eng").val(rowData["TenTemplate"]);
			                    	if(ketluan3==""){
						  		$("#ketluan_eng").val("- No normal occurrence");
						  	}
			              }
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
function load_complete(){
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	
}
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_tonghop&id_luotkham=0",
		datatype: "jsonstring",	
		colNames: ["id_kham","idbenhnhan","id_xetnghiem",'Loại xét nghiệm', 'Chỉ số', 'Giá trị bình thường','Kết quả',''],
            colModel: [
            	{name:"ID_Kham",index:"ID_Kham",hidden:true,width:50},
            	{name:"idbenhnhan",index:"idbenhnhan",hidden:true,width:50},
            	{name:"ID_XetNghiem",index:"ID_XetNghiem",hidden:true,width:50},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', hidden: false,width:50},
                {name: 'TenXetNghiem', index: 'TenXetNghiem',hidden: false,width:150},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', hidden: false,width:100},
                {name: 'ketqua', index: 'ketqua', hidden: false,editable: true,width:50},
                {name: 'ID_NguoiNhap', index: 'ID_NguoiNhap', hidden: true,width:50},
            ],
		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'TenXetNghiem',
		height:220,
		width: 600,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		stringResult:true,
		sortorder: "asc",

		serializeRowData: function (postdata) {

		},
		onSelectRow: function(id){		  
		  
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex,id) {
			$(".ui-icon-pencil").trigger('click');

 		},
		loadComplete: function(data,rowid) {	 
		},	  
		caption: ""
	});
		
}; 
$("#chen").click(function(){
	$("#mota").val($("#tonghop").val());
	if($("#ketluan").val()==""){
		$("#ketluan").val("- Không có phát hiện bất thường");
	}
});
$("#laylaidulieu").click(function(){
	
});
$("#xoa").click(function(){
	$("#mota").val("");
	$("#ketluan").val("");
	$("#cachdieutri").val("");
});
</script>
 
 
