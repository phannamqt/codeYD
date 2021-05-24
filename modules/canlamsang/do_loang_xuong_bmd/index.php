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
	#mota{
		font-size:13px!important;		 	 
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
        	<span id="caption" style="font-size:17px;color:#09C;margin-left:5px;margin-top:5px; font-weight:bold">&nbsp;</span>
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
    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; display:none">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>	 	
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
 <table id="rowed1" cellspacing="30px"  style="width:88%;height:65%;margin:auto; display:none">
 	<tr>
    	<td style="border:1px solid #999;width:50%;height:40%;vertical-align:top;">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">Right Forearm</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_TayPhai.jpg" alt="BMD tay phải" width="288px" height="80px"></span></div>
            <div class="highlight" id="select1"><label style="font-size:14px;margin-left:5px;width:20px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_tayphai" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
              <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px;;height:15px" id="ket_luan_TayPhai"></label>
              </div>
        </td>
        <td style="border:1px solid #999;width:50%;height:40%;vertical-align:top">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">Left Forearm</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_TayTrai.jpg" alt="BMD tay trái" width="288px" height="80px"></span></div>
            <div class="highlight" id="select2"><label style="font-size:14px;margin-left:5px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_taytrai" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
            <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px;height:15px" id="ket_luan_TayTrai"></label>
            </div>
        </td>
    </tr>
    <tr>
    	<td style="border:1px solid #999;width:50%;height:40%">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">Right Calcaneus</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_ChanPhai.jpg" alt="BMD chân phải" width="288px" height="80px"></span></div>
            <div class="highlight" id="select3"><label style="font-size:14px;margin-left:5px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_chanphai" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
            <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px" id="ket_luan_ChanPhai"></label>
            </div>
        </td>
        <td style="border:1px solid #999;width:50%;height:40%">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">Left Calcaneus</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_ChanTrai.jpg" alt="BMD chân trái" width="288px" height="80px"></span></div>
            <div class="highlight" id="select4"><label style="font-size:14px;margin-left:5px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_chantrai" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
            <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px" id="ket_luan_ChanTrai"></label>
            </div>
        </td>
    </tr>
 </table>
 
 
 <table id="rowed2" cellspacing="5px"  style="width:97%;height:50%;margin:auto; display:none">
 	<tr>
    	<td style="border:1px solid #999;width:33.3%;height:70%;vertical-align:top;">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">SPINE</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_TayPhai.jpg" alt="BMD tay phải" width="288px" height="80px"></span></div>
            <div class="highlight" id="select_new1"><label style="font-size:14px;margin-left:5px;width:20px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_sprine" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
              <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px;;height:15px" id="ket_luan_sprine"></label>
              </div>
        </td>
        <td style="border:1px solid #999;width:33.3%;height:70%;vertical-align:top">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">Left FEMUR</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_TayTrai.jpg" alt="BMD tay trái" width="288px" height="80px"></span></div>
            <div class="highlight" id="select_new2"><label style="font-size:14px;margin-left:5px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_left_femur" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
            <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px;height:15px" id="ket_luan_left_femur"></label>
            </div>
        </td>
       <td style="border:1px solid #999;width:33.3%;height:70%;vertical-align:top;">
        	<div class="highlight" style="background:#56A717"><label style="margin-left:5px;font-size:16px;color:#FFFFFF;font-style:italic;font-weight:bold">Right FEMUR</label></div>
            <div class="highlight" style="margin-top:2px"><label style="font-size:14px;margin-left:5px">Hình ảnh: </label><span style="margin-left:50px"><img border="0" src="./modules/canlamsang/do_loang_xuong_bmd/BMD_TayPhai.jpg" alt="BMD tay phải" width="288px" height="80px"></span></div>
            <div class="highlight" id="select_new3"><label style="font-size:14px;margin-left:5px;width:20px">Giá trị: </label><div style="width:68px;display:inline-block"></div><input id="bmd_right_femur" style="font-size:20px;width:55px;font-weight:bold;color:#0099FF;"></div>
              <div class="highlight"><label style="font-size:14px;margin-left:5px">Kết luận: </label><label style="font-size:20px;width:150px;height:20px;color:#0099FF; font-weight:bold;text-align:center;margin-left:55px;;height:15px" id="ket_luan_right_femur"></label>
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
var id_11;
var id_12;
var id_13;
var id_14; //điều khiển insert or update
var ket_luan;
var idluotkham;

var report_code=["BMD"];
var report_name=["Đo loãng xương"];
$(document).ready(function() {	
	openform_shortcutkey();
	$("#xemin").click(function(e){		
			print_action="xemin";		//dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		//var tieude='',chucnang='';
		//$.post("pages.php?module=report&view=<?=$modules?>&action=BMD&type=report&id_form=10&id_kham="+id_kham);
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=BMD&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10&tieude=&chucnang=&chucdanh=",'BMD');
	});

	
	Globalize.culture( 'de-DE' );
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	//alert(encode64("89045"))
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	
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
	
	$( "#bmd_tayphai" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		 //alert($( "#bmd_tayphai" ).val());
		$( "#ket_luan_TayPhai").text(ket_luan($( "#bmd_tayphai" ).spinner( "value" )));  
	}
    });
	
	
	$( "#bmd_chanphai" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		$( "#ket_luan_ChanPhai").text(ket_luan($( "#bmd_chanphai" ).spinner( "value" )));  
	  }
    });
	
	$( "#bmd_taytrai" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		$( "#ket_luan_TayTrai").text(ket_luan($( "#bmd_taytrai" ).spinner( "value" )));  
	 }
    });
	$( "#bmd_chantrai" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		$( "#ket_luan_ChanTrai").text(ket_luan($( "#bmd_chantrai" ).spinner( "value" )));  
	 }
    });
	
	$( "#bmd_sprine" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		$( "#ket_luan_sprine").text(ket_luan_new($( "#bmd_sprine" ).spinner( "value" )));  
	 }
    });
	
	$( "#bmd_left_femur" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		$( "#ket_luan_left_femur").text(ket_luan_new($( "#bmd_left_femur" ).spinner( "value" )));  
	}
    });
	$( "#bmd_right_femur" ).spinner({
      step: 0.01,
      numberFormat: "n",
	  max: 5,
	  min: -5,
	  change: function(){
		$( "#ket_luan_right_femur").text(ket_luan_new($( "#bmd_right_femur" ).spinner( "value" )));  
	}
    });
	
	
	//number_textbox("#bmd_tayphai");	number_textbox("#bmd_taytrai");	number_textbox("#bmd_chanphai");number_textbox("#bmd_chantrai");	
	
	
	
	$( "#bmd_tayphai" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#bmd_taytrai" ).focus();
				return false;
			}
	});
	
	$( "#bmd_taytrai" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#bmd_chanphai" ).focus();
				return false;
			}
	});
	
	$( "#bmd_chanphai" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#bmd_chantrai" ).focus();
				return false;
			}
	});
	
	$( "#bmd_chantrai" ).keyup(function(e){
			if (e.keyCode === 13) {
				$( "#luu" ).focus();
				return false;
			}
	});
	
	$( "#bmd_sprine" ).keyup(function(e){
		if (e.keyCode === 13) {
			$( "#bmd_left_femur" ).focus();
			return false;
		}
	});
	$( "#bmd_left_femur" ).keyup(function(e){
		if (e.keyCode === 13) {
			$( "#bmd_right_femur" ).focus();
			return false;
		}
	});
	
	
		//$( "#bmd_tayphai" ).css("margin-left","30px");	
	$("#select1").click(function(){
		$("#bmd_tayphai").focus();
		});
	$("#select2").click(function(){
		$("#bmd_taytrai").focus();
		});
	$("#select3").click(function(){
		$("#bmd_chanphai").focus();
		});
	$("#select4").click(function(){
		$("#bmd_chantrai").focus();
		});

	if(id_kham2!="0"){
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doloangxuong2&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
			function( data ) {
				data_luotkham=data;

		 	//alertObject(data);
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					//tam+=" ; "+val[i]["id"];
					var tam1_cls=val[i]["cell"];
					//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
					_id_luotkham.push(val[i]["id"]);				
					_id_loaikham.push(tam1_cls[3]);
					_id_luotkham_non_unique.push(val[i]["id"]);
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
	
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doloangxuong&idbenhnhan="+id_benhnhan,
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(val[i]["id"]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(val[i]["id"]);
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

function bmd_load(){
	if(id_kham2!='0'){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doloangxuong2&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
			function( data ) {
			data_luotkham=data;
		//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(val[i]["id"]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(val[i]["id"]);
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
}else{
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		delete tong_luotkham;
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_doloangxuong&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(val[i]["id"]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(val[i]["id"]);
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
				dialog_add_dm("",width,height,elem,links,bmd_load);   
				})
			}) ;		
		}); 
       
			  $("#sua").click(function(){
			  	//$('#sua').button( {disabled:true});
					$('#luu').button( {disabled:false});
					$("#sua").hide();
					$('#boqua').show();
					$('.ui-spinner-up,.ui-spinner-down').button( {disabled:false});
					$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:false});
					$( "#nhanvien" ).attr("disabled",false);
					$( "#chuandoan" ).attr("disabled",false);
					$('#bmd_chanphai').attr("disabled",false);
					$('#bmd_chantrai').attr("disabled", false);
					$('#bmd_tayphai').attr("disabled", false);
					$('#bmd_taytrai').attr("disabled",false);
					
					window.giosuacuoi="giosuacuoi";
					$("#bmd_tayphai").focus();
			  });
			  $("#boqua").click(function(){
					$("#sua").show();
					$('#boqua').hide();
					$('#luu').button( {disabled:true});
					$('#bmd_chanphai').attr("disabled","disabled").val(convert_comma_dot(ketluan5));
					$( "#ket_luan_ChanPhai").text(ket_luan(ketluan5));
					if(ketluan5=='') $('#ket_luan_ChanPhai').text('');
					$('#bmd_chantrai').attr("disabled", "disabled").val(convert_comma_dot(dando5));
					$( "#ket_luan_ChanTrai").text(ket_luan(dando5));
					if(dando5=='') $('#ket_luan_ChanTrai').text('');
					$('#bmd_tayphai').attr("disabled", "disabled").val(convert_comma_dot(mota5));
					$( "#ket_luan_TayPhai").text(ket_luan(mota5));
					if(mota5=='') $('#ket_luan_TayPhai').text('');
					$('#bmd_taytrai').attr("disabled" , "disabled").val(convert_comma_dot(loikhuyen5));
					$( "#ket_luan_TayTrai").text(ket_luan(loikhuyen5));
					if(loikhuyen5=='') $('#ket_luan_TayTrai').text('');
					$('.ui-spinner-up,.ui-spinner-down').button( {disabled:true});
					$("#chuandoan1").val(chuandoan4);
					
					//$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$('.chuandoan_button').button( {disabled:true});
					$( "#chuandoan" ).attr("disabled",true);
					// $( "#chuandoan" ).attr("disabled",true);
					setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					if($( "#id_trangthai" ).text()=='Đã thực hiện'){
						$('.chuandoan_button').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?php echo $_SESSION["user"]["id_user"] ?>);
					}
					   //bmd_load();
				});
			  $("#dathuchien").click(function(){
					//var tam=get_min_val();
					//var tam_ket_luan=ket_luan(tam);
					_id_trangthai="DaThucHien";
					
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
					if(id_loaikham==10){
						var tam=get_min_val();
						var tam_ket_luan=ket_luan(tam);				
						dataToSend += phancach + '"chiso11":"' +     $('#bmd_tayphai').val() + '"';
						dataToSend += phancach + '"ketluan11":"' +  $('#ket_luan_TayPhai').text() + '"';
						dataToSend += phancach + '"chiso12":"' +     $('#bmd_taytrai').val() + '"';
						dataToSend += phancach + '"ketluan12":"' +  $('#ket_luan_TayTrai').text() + '"';
						dataToSend += phancach + '"chiso13":"' +     $('#bmd_chanphai').val() + '"';
						dataToSend += phancach + '"ketluan13":"' +  $('#ket_luan_ChanPhai').text() + '"';
						dataToSend += phancach + '"chiso14":"' +     $('#bmd_chantrai').val() + '"';
						dataToSend += phancach + '"ketluan14":"' +  $('#ket_luan_ChanTrai').text() + '"';
						
						dataToSend += phancach + '"id_11":"' +id_11+ '"';
						dataToSend += phancach + '"id_12":"' +id_12+ '"';
						dataToSend += phancach + '"id_13":"' +id_13+ '"';
						dataToSend += phancach + '"id_14":"' +id_14+ '"';
						dataToSend += phancach + '"ket_luan":"' +tam_ket_luan+ '"';
					}else{
						var tam=get_min_val_new();
						var tam_ket_luan=ket_luan(tam);
						dataToSend += phancach + '"chiso11":"' +    $('#bmd_sprine').val() + '"';
						dataToSend += phancach + '"ketluan11":"' +  $('#ket_luan_sprine').text() + '"';
						dataToSend += phancach + '"chiso12":"' +    $('#bmd_right_femur').val() + '"';
						dataToSend += phancach + '"ketluan12":"' +  $('#ket_luan_right_femur').text() + '"';
						dataToSend += phancach + '"chiso13":"' +    $('#bmd_left_femur').val() + '"';
						dataToSend += phancach + '"ketluan13":"' +  $('#ket_luan_left_femur').text() + '"';
						dataToSend += phancach + '"chiso14":""';
						dataToSend += phancach + '"ketluan14":""';
						
						dataToSend += phancach + '"id_11":"' +id_11+ '"';
						dataToSend += phancach + '"id_12":"' +id_12+ '"';
						dataToSend += phancach + '"id_13":"' +id_13+ '"';
						dataToSend += phancach + '"id_14":"' +id_14+ '"';
						dataToSend += phancach + '"ket_luan":"' +tam_ket_luan+ '"';
					}
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=a',dataToSend).done(function( gridData ) {	
						tooltip_message("Cập nhật thành công");	
						bmd_load();  
						})
						.fail(function() {
						tooltip_message( "Có lỗi trong quá trình cập nhật" );
					  });
					 // create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', '<?php echo($_SESSION["user"]["id_user"])?>');
			  });
			  
			  $("#hoantat").click(function(){
					//var tam=get_min_val();
					//var tam_ket_luan=ket_luan(tam);
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
					if(id_loaikham==10){
						var tam=get_min_val();
						var tam_ket_luan=ket_luan(tam);	
						dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
						dataToSend += phancach + '"chiso11":"' +     $('#bmd_tayphai').val() + '"';
						dataToSend += phancach + '"ketluan11":"' +  $('#ket_luan_TayPhai').text() + '"';
						dataToSend += phancach + '"chiso12":"' +     $('#bmd_taytrai').val() + '"';
						dataToSend += phancach + '"ketluan12":"' +  $('#ket_luan_TayTrai').text() + '"';
						dataToSend += phancach + '"chiso13":"' +     $('#bmd_chanphai').val() + '"';
						dataToSend += phancach + '"ketluan13":"' +  $('#ket_luan_ChanPhai').text() + '"';
						dataToSend += phancach + '"chiso14":"' +     $('#bmd_chantrai').val() + '"';
						dataToSend += phancach + '"ketluan14":"' +  $('#ket_luan_ChanTrai').text() + '"';
						
						dataToSend += phancach + '"id_11":"' +id_11+ '"';
						dataToSend += phancach + '"id_12":"' +id_12+ '"';
						dataToSend += phancach + '"id_13":"' +id_13+ '"';
						dataToSend += phancach + '"id_14":"' +id_14+ '"';
						dataToSend += phancach + '"nhanvien_control":"' +nhanvien_control+ '"';
						dataToSend += phancach + '"ket_luan":"' +tam_ket_luan+ '"';
					}else{
						var tam=get_min_val_new();
						var tam_ket_luan=ket_luan(tam);
						dataToSend += phancach + '"chiso11":"' +     $('#bmd_sprine').val() + '"';
						dataToSend += phancach + '"ketluan11":"' +  $('#ket_luan_sprine').text() + '"';
						dataToSend += phancach + '"chiso12":"' +     $('#bmd_right_femur').val() + '"';
						dataToSend += phancach + '"ketluan12":"' +  $('#ket_luan_right_femur').text() + '"';
						dataToSend += phancach + '"chiso13":"' +     $('#bmd_left_femur').val() + '"';
						dataToSend += phancach + '"ketluan13":"' +  $('#ket_luan_left_femur').text() + '"';
						dataToSend += phancach + '"chiso14":""';
						dataToSend += phancach + '"ketluan14":""';
						
						dataToSend += phancach + '"id_11":"' +id_11+ '"';
						dataToSend += phancach + '"id_12":"' +id_12+ '"';
						dataToSend += phancach + '"id_13":"' +id_13+ '"';
						dataToSend += phancach + '"id_14":"' +id_14+ '"';
						dataToSend += phancach + '"nhanvien_control":"' +nhanvien_control+ '"';
						dataToSend += phancach + '"ket_luan":"' +tam_ket_luan+ '"';
					}
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);				
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
					.done(function( gridData ) {	
					 tooltip_message("Cập nhật thành công");	
					 bmd_load();
					 emr_thuchienxong(_kham,'','','','');// Xếp hàng chuyển phòng
				
					})
					.fail(function() {
						tooltip_message( "Có lỗi trong quá trình cập nhật" );
					});
			  });
			
			  $('#luu').click(function (){
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
					if(id_loaikham==10){
						var tam=get_min_val();
						var tam_ket_luan=ket_luan(tam);		
						dataToSend += phancach + '"chiso11":"' +     $('#bmd_tayphai').val() + '"';
						dataToSend += phancach + '"ketluan11":"' +  $('#ket_luan_TayPhai').text() + '"';
						dataToSend += phancach + '"chiso12":"' +     $('#bmd_taytrai').val() + '"';
						dataToSend += phancach + '"ketluan12":"' +  $('#ket_luan_TayTrai').text() + '"';
						dataToSend += phancach + '"chiso13":"' +     $('#bmd_chanphai').val() + '"';
						dataToSend += phancach + '"ketluan13":"' +  $('#ket_luan_ChanPhai').text() + '"';
						dataToSend += phancach + '"chiso14":"' +     $('#bmd_chantrai').val() + '"';
						dataToSend += phancach + '"ketluan14":"' +  $('#ket_luan_ChanTrai').text() + '"';
						dataToSend += phancach + '"nguoisua":"' +<?php echo($_SESSION["user"]["id_user"])?>+ '"';
						
						dataToSend += phancach + '"id_11":"' +id_11+ '"';
						dataToSend += phancach + '"id_12":"' +id_12+ '"';
						dataToSend += phancach + '"id_13":"' +id_13+ '"';
						dataToSend += phancach + '"id_14":"' +id_14+ '"';
						dataToSend += phancach + '"ket_luan":"' +tam_ket_luan+ '"';
					}else{
						var tam=get_min_val_new();
						var tam_ket_luan=ket_luan(tam);		
						dataToSend += phancach + '"chiso11":"' +     $('#bmd_sprine').val() + '"';
						dataToSend += phancach + '"ketluan11":"' +  $('#ket_luan_sprine').text() + '"';
						dataToSend += phancach + '"chiso12":"' +     $('#bmd_right_femur').val() + '"';
						dataToSend += phancach + '"ketluan12":"' +  $('#ket_luan_right_femur').text() + '"';
						dataToSend += phancach + '"chiso13":"' +     $('#bmd_left_femur').val() + '"';
						dataToSend += phancach + '"ketluan13":"' +  $('#ket_luan_left_femur').text() + '"';
						dataToSend += phancach + '"chiso14":""';
						dataToSend += phancach + '"ketluan14":""';
						dataToSend += phancach + '"nguoisua":"' +<?php echo($_SESSION["user"]["id_user"])?>+ '"';
						
						dataToSend += phancach + '"id_11":"' +id_11+ '"';
						dataToSend += phancach + '"id_12":"' +id_12+ '"';
						dataToSend += phancach + '"id_13":"' +id_13+ '"';
						dataToSend += phancach + '"id_14":"' +id_14+ '"';
						dataToSend += phancach + '"ket_luan":"' +tam_ket_luan+ '"';
					}
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					//alertObject(dataToSend); 
					
					//alert(id_loaikham);
					
					if(window.oper=="dathuchien1"){
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
					 .done(function( gridData ) {	
						 tooltip_message("Lưu dữ liệu thành công");	 
						   bmd_load();
						})
						.fail(function() {
						tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
						})
					}
					if(window.oper=="hoantat1"){
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
						.done(function( gridData ) {	
						 tooltip_message("Lưu dữ liệu thành công");	 
							bmd_load();
						})
						.fail(function() {
							tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
						})
					}     
					if(window.oper=="dangkham1"){
						$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
						.done(function( gridData ) {	
						 tooltip_message("Lưu dữ liệu thành công");	 
						   bmd_load();
						  
						})
						.fail(function() {
						tooltip_message("Có lỗi trong qua trình lưu dữ liệu");
						})
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
			if(_id_luotkham[navigator_count]==val[i]["id"]){
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
			//alert(123);
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");					 
					if(tam==tam1){	
						$("#caption").text(val[i]["cell"][1]);
					//	console.log(val[i]["cell"][3]);
						if(val[i]["cell"][3]==10){
							$('#rowed2').hide();
							$('#rowed1').show();
							idluotkham=val[i]["cell"][5];
							mota5=val[i]["cell"][6];
							ketluan5=val[i]["cell"][7];
							loikhuyen5 = val[i]["cell"][8];
							dando5=val[i]["cell"][18];
							get_min_val();
							$("#bmd_tayphai").val(convert_comma_dot(val[i]["cell"][6]));
							//alert(ket_luan(-2.13));
							if(val[i]["cell"][6]!="")  $("#ket_luan_TayPhai").text(ket_luan(val[i]["cell"][6]));
							else  $("#ket_luan_TayPhai").text("");
							$("#bmd_chanphai").val(convert_comma_dot(val[i]["cell"][7]));
							if(val[i]["cell"][7]!="")  $("#ket_luan_ChanPhai").text(ket_luan(val[i]["cell"][7]));
							else  $("#ket_luan_ChanPhai").text("");
							$("#bmd_taytrai").val(convert_comma_dot(val[i]["cell"][8]));
							if(val[i]["cell"][8]!="")  $("#ket_luan_TayTrai").text(ket_luan(val[i]["cell"][8]));
							else $("#ket_luan_TayTrai").text("");
							$("#bmd_chantrai").val(convert_comma_dot(val[i]["cell"][18]));
							if(val[i]["cell"][18]!="")  $("#ket_luan_ChanTrai").text(ket_luan(val[i]["cell"][18]));
							else $("#ket_luan_ChanTrai").text("");
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
							get_min_val();
							id_11=val[i]["cell"][19];
							id_12=val[i]["cell"][20];
							id_13=val[i]["cell"][21];
							id_14=val[i]["cell"][22];
						}else{
							$('#rowed1').hide();
							$('#rowed2').show();
							idluotkham=val[i]["cell"][5];
							mota5=val[i]["cell"][6];
							ketluan5=val[i]["cell"][7];
							loikhuyen5 = val[i]["cell"][8];
							dando5=val[i]["cell"][18];
							get_min_val();
							$("#bmd_sprine").val(convert_comma_dot(val[i]["cell"][6]));
							//alert(ket_luan(-2.13));
							if(val[i]["cell"][6]!="") 
								$("#ket_luan_sprine").text(ket_luan(val[i]["cell"][6]));
							else  
								$("#ket_luan_sprine").text("");
								
							$("#bmd_left_femur").val(convert_comma_dot(val[i]["cell"][7]));
							if(val[i]["cell"][7]!="")  
								$("#ket_luan_left_femur").text(ket_luan(val[i]["cell"][7]));
							else  
								$("#ket_luan_left_femur").text("");
								
							$("#bmd_right_femur").val(convert_comma_dot(val[i]["cell"][8]));
							if(val[i]["cell"][8]!="")  
								$("#ket_luan_right_femur").text(ket_luan(val[i]["cell"][8]));
							else 
								$("#ket_luan_right_femur").text("");
						
							if(val[i]["cell"][10]==null) 
								nhanvien_control=1; 
							else 
								nhanvien_control=0;
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
							get_min_val();
							id_11=val[i]["cell"][19];
							id_12=val[i]["cell"][20];
							id_13=val[i]["cell"][21];
							id_14=val[i]["cell"][22];
						}
						$("#ngaychidinh").val(val[i]["cell"][2]);
						$("#bschidinh").val(val[i]["cell"][4]);
						//alert(id_11);
						
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
						$('.ui-spinner-up,.ui-spinner-down').button( {disabled:false});
                    }else if(_id_trangthai=="DaThucHien"){
						$("#id_trangthai").html("Đã thực hiện").css("background-color","#FF4848");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						
						$('#bmd_chanphai').attr("disabled", "disabled");
						$('#bmd_chantrai').attr("disabled", "disabled");
						$('#bmd_tayphai').attr("disabled", "disabled");
						$('#bmd_taytrai').attr("disabled", "disabled");
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
                    }else if(_id_trangthai=="DangKham"){
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
						$('#bmd_chanphai').attr("disabled",false);
						$('#bmd_chantrai').attr("disabled", false);
						$('#bmd_tayphai').attr("disabled", false);
						$('#bmd_taytrai').attr("disabled", false);
						$('.ui-spinner-up,.ui-spinner-down').button( {disabled:false}); 
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.oper="dangkham1";
						$('.ui-spinner-up,.ui-spinner-down').button( {disabled:false});
                    }else if(_id_trangthai=="Xong"){
						if(<?=$_SESSION['user']['id_user']?>==val[i]["cell"][15]){
							$('#sua').button( {disabled:false});
						}
						else{
							$('#sua').button( {disabled:true});
						}
						$("#id_trangthai").html("Đã hoàn tất").css("background-color","Transparent");;
						//$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#bmd_chanphai').attr("disabled", "disabled");
						$('#bmd_chantrai').attr("disabled", "disabled");
						$('#bmd_tayphai').attr("disabled", "disabled");
						$('#bmd_taytrai').attr("disabled", "disabled");
						$('.ui-spinner-up,.ui-spinner-down').button( {disabled:true});
						
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
                    $("#giohentra").html(tam1_cls[11]);                    		 			 
						if(val[i]["cell"][12]!=null){
							$("#nguoisua").text(val[i]["cell"][12]);
							//var khongbiet=val[i]["cell"][12];
							//$("#ID_NguoiSua").text(khongbiet);
							$("#ngaygiosua").text(val[i]["cell"][13]);
						}else $("#edit_by").hide();					
					} 
				}
				////
				var tamthoilathe= stt.split(";");
				for (i = 0; i <tamthoilathe.length; i++) {
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
							id_kham=_id_kham[i];
							break;
						}
						ii++;						 
					}
				}
				//load_image($(this).attr("alt"));				
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
	//$("#rowed111").css("height",$(window).height()-150+"px");			
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

function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}
	navigator_load("end","first");
}

function ket_luan(x){
	kq="";
	if(x==null || x=='')
	{
		kq=""; 
		return kq;
	}

	else{
	x=parseFloat(x);
	if(x>-1){
		kq="Bình thường (Normal)"; 
		return kq;
	}
	else
		if (x<=-1 && x>-2.5)
		{
			kq="Thưa xương (Osteopenia)"; 
			return kq;
		}
		else
			if (x<=-2.5 && x>-3.5)
			{
				kq="Loãng xương (Osteoporosis)"; 
				return kq;
			}
			else
			{
				kq="Loãng xương nặng (Severe Osteoporosis)"; 
				return kq;
			}
	}
	}
function ket_luan_new(x){
	kq="";
	if(x==null || x=='')
	{
		kq=""; 
		return kq;
	}

	else{
	x=parseFloat(x);
	if(x>-1){
		kq="Bình thường (Normal)"; 
		return kq;
	}
	else
		if (x<=-1 && x>-2.5)
		{
			kq="Thưa xương (Osteopenia)"; 
			return kq;
		}else if (x<=-2.5)
			{
				kq="Loãng xương (Osteoporosis)"; 
				return kq;
			}
	}
}
function get_min_val(){
	if ($('#bmd_chanphai').val()==""){ var val_1=5;
	}else{	val_1=	parseFloat($('#bmd_chanphai').val().replace(",","."));}
	
	if ($('#bmd_chantrai').val()==""){ var val_2=5;
	}else{	val_2=	parseFloat($('#bmd_chantrai').val().replace(",","."));}
	
	if ($('#bmd_tayphai').val()==""){ var val_3=5;
	}else{	val_3=	parseFloat($('#bmd_tayphai').val().replace(",","."));}
		
	if ($('#bmd_taytrai').val()==""){ var val_4=5;
	}else{	val_4=	parseFloat($('#bmd_taytrai').val().replace(",","."));}
	
	//alert(val_3+ "  "+val_4+"\n\n"+val_1+"  "+val_2);
	var _array = [val_1,val_2,val_3,val_4];	
	return Math.min.apply(Math,_array);
}
function get_min_val_new(){
	if ($('#bmd_sprine').val()==""){ var val_1=5;
	}else{	val_1=	parseFloat($('#bmd_sprine').val().replace(",","."));}
	
	if ($('#bmd_left_femur').val()==""){ var val_2=5;
	}else{	val_2=	parseFloat($('#bmd_left_femur').val().replace(",","."));}
	
	if ($('#bmd_right_femur').val()==""){ var val_3=5;
	}else{	val_3=	parseFloat($('#bmd_right_femur').val().replace(",","."));}
	
	var _array = [val_1,val_2,val_3];	
	return Math.min.apply(Math,_array);
}
</script>