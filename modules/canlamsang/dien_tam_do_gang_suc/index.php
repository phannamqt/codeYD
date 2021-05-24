<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}elseif(isset($_GET["idbenhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["idbenhnhan"];
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


	if(isset($_GET["id_kham"]) && $_GET["id_kham"]!=''){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".trim($_GET["id_kham"]).";";
		echo "</script>";
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=0;";
		echo "</script>";
		}
?>
 
 
<style>
	#data_lydongungdo td,#data_mauketluan td  {	 
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
		width:181px;
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
	}.thongtin_chidinh{
		height:58px;
	}#right_col{
		padding-left:2px;
	}input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}select {
    height: 22px !important;
    width: 90px;
}#right_top{
	border: 0px solid #D4CCB0;
}
#right_top table{
	padding-left:5px;
}
#right_bottom table{
	padding-left:5px;
}
#right_bottom{
	border: 1px solid #D4CCB0;
}
.right_top{
	height:18px;
	border-radius:3px;
	border: 1px solid #D4CCB0;
	background:#F5F3EB;
	
	margin-top:1px;
	margin-left:1px;
	margin-right:1px;
	padding-top: 2px;
}.cacthongso{
	font-weight:bold;
	color:#0000FF;
	margin-left:5px;
}#soitructrang{
	width:745px;
	height:95px;
}#dacdiem{
	width:745px;
	height:55px;
}
#ghichunoibo{
	width:745px;
	height:55px;
}#right_bottom select{
	width:245px;
}
#right_bottom input[type="text"] {
	width:501px;
}.custom-combobox-input{
	width:70px !important
}.ui-autocomplete {
	min-height:100px !important;
}#vitribuitri{
	width:98px;
}.thongtin_tongthe{
		height:62px;
}#combo_ppdieutri11,#combo_ppdieutri21{
	width:200px!important;
	
}.backhidde{
	background:#F0F0F0!important;

}#table_form {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #CCCCCC -moz-use-text-color -moz-use-text-color #CCCCCC;
    border-image: none;
    border-style: solid none none solid;
    border-width: 1px medium medium 1px;
}#table_form tr, #table_form td {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: -moz-use-text-color #CCCCCC #CCCCCC -moz-use-text-color;
    border-image: none;
    border-style: none solid solid none;
    border-width: medium 1px 1px medium;
	font-size: 13px;
	height:25px;
}#table_form tr:hover{
	background:#7A96DF;
}
#table_form tr:active{
	background:#7A96DF;
}.tieude{
	background:#58A71A !important;
	height:25px;
}.tieude:hover{
	background:#58A71A !important;
}#table_form td{
	padding-left:2px;
}#r_top{
	height:60px;
	width:99%;
	padding-top:10px;
	border-radius:3px;
	border: 1px solid #919191;
	margin-left:2px;
}
#r_bottom{
	width:100%;
}#comlydongungdo{
	height:15px !important;
}.tieude{
	color:#FFF!important;
	font: 11.5px/16px segoe ui,Geneva,sans-serif!important;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.6) !important;
}
</style>
<body>

<div  class="data_lydongungdo">
    <table id="data_lydongungdo">
    </table>   
</div>
<div  class="data_mauketluan">
    <table id="data_mauketluan">
    </table>   
</div>

 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
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
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="">   
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

    <div class="thongtin_luotkham" id="right_col">
    	 
    	<div style="margin-top: 2px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>
    		 	
    	</div>
    	<div style="margin-top: 12px;">

    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; display:none ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
        <a href="#" id="xeminhinh" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:96px; margin-bottom:1px;float: right; ">Xem in (hình)<span class="ui-icon ui-icon-print"></span></a>
    	<span style="float:right; margin:5px 10px 0 0" id="In_CoChuKy">
        	In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/>
        </span>	 	
    	</div>
    	<div style="margin-top: -9px">
	    	<a href="#" id='open_form_hentra' >Giờ hẹn trả kết quả: </a>
	    	<label id="giohentra" style="color:blue"></label> 	
    	</div>
    	<div style="margin-top: 5px" id="edit_by">
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
    	</div> 
    </div>
   
 </div> 
 
 <div id="panel_main">    
		<input type="hidden" lang="luu" id="daluu"  name="daluu">
        <div class="ui-widget-content ui-layout-west">
   			<iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>    
</div>         
        <div class="ui-widget-content  right_col ui-layout-center ">
         <table id="table_form" cellspacing="0" cellpadding="0" width="100%" >
              <tr class="tieude">
                <td width="40%"><div align="center"><strong>Tên thông số</strong></div></td>
                <td width="30%"><div align="center"><strong>Giá trị</strong></div></td>
                <td width="30%"><div align="center"><strong>Đơn vị tính</strong></div></td>
              </tr>
              <tr>
                <td>Total Time</td>
                <td><input lang="luu" type="text" name="totaltime" id="totaltime" style="width:95%"></td>
                <td>min:sec</td>
              </tr>
              <tr>
                <td>HR at rest</td>
                <td><input lang="luu" type="text" name="hr_at_rest" id="hr_at_rest" style="width:95%"></td>
                <td>bmp</td>
              </tr>
              <tr>
                <td>Max HR</td>
                <td><input lang="luu" type="text" name="max_hr" id="max_hr" style="width:95%"></td>
                <td>bmp</td>
              </tr>
              <tr>
                <td>Max ST Level Ascend</td>
                <td><input lang="luu" type="text" name="max_st_level_ascend" id="max_st_level_ascend" style="width:95%"></td>
                <td>mv(V3)</td>
              </tr>
              <tr>
                <td>Max ST Level Descend</td>
                <td><input lang="luu" type="text" name="max_st_level_descend" id="max_st_level_descend" style="width:95%"></td>
                <td>mv(aVR)</td>
              </tr>
              <tr>
                <td>Max WorkLoad</td>
                <td><input lang="luu" type="text" name="max_workload" id="max_workload" style="width:95%"></td>
                <td>METs</td>
              </tr>
              <tr>
                <td>Max Vo2</td>
                <td><input lang="luu" type="text" name="maxvo2" id="maxvo2" style="width:95%"></td>
                <td>mlO2/kg.min</td>
              </tr>
              <tr>
                <td>BP at rest</td>
                <td><input lang="luu" type="text" name="bp_at_rest" id="bp_at_rest" style="width:95%"></td>
                <td>mmHg</td>
              </tr>
              <tr>
                <td>Max BP</td>
                <td><input lang="luu" type="text" name="max_bp" id="max_bp" style="width:95%"></td>
                <td>mmHg</td>
              </tr>
            </table>
        <div id="r_bottom">
            <div class="ui-layout-north n_tren"> 
           		<table width="100%">
                  <tr class="nt"  height="25px">
                    <td >Lý do ngừng đo: <span class="custom-combobox">
                    <input id="comlydongungdo" name="comlydongungdo"  type="text" style="width:330px; height:15px !important;" placeholder="--Chọn lý do ngừng đo--">
                    <input id="lydongungdo1"  name="lydongungdo1" type="text" lang='luu' style="display:none" >
                </span> </td>
                  </tr>
                  <tr>
                    <td>
                    <textarea  lang="luu" name="lydongungdo" id="lydongungdo" style="width:99%"></textarea></td>
                  </tr>
                </table>
            </div>
            <div class="ui-layout-center n_duoi"> 
           		<table width="100%">
                  <tr class="nb" height="25px">
                    <td >Kết luận: <span class="custom-combobox">
                    <input id="mauketluan" name="mauketluan"  type="text" style="width:330px; height:15px !important;" placeholder="--Chọn mẫu chẩn đoán--">
                </span>
               
<input id="mauketluan1"  name="mauketluan1" type="text" lang='luu' style="display:none" >
</td>
                  </tr>
                  <tr>
                    <td>
                    <textarea  lang="luu" name="ketluan" id="ketluan"  style="width:99%"></textarea></td>
                  </tr>
                </table>
            </div>
            
        </div>
        </div>
                 
</div> <!--id="panel_main"-->
	
		
		
</body>
</html>
<script type="text/javascript">
var report_code=["StressECG"];
var report_name=["Stress ECG"];
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
var id_benhnhan;
var tenloaikham;
var idluotkham;
var id_kham3;
var chuky = 1;
window.search_string='';	
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
	  
	 }) ;
	openform_shortcutkey();
	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}
	})	
	$("#xemin").click(function(e){		
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=StressECG&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10&tieude=&chucnang=&chucdanh=&chuky="+chuky,'StressECG');
	});
	$("#xeminhinh").click(function(e){		
		print_action="xemin";
		$.cookie("in_status", "print_preview"); 
		
		dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"StressECGImage",print_action,"","","Bác sĩ CHẨN ĐOÁN","top",3,"StressECGHinh",'<?=$modules?>');
	});
	
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;	
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
	
	create_combobox('#comlydongungdo', '#lydongungdo1', ".data_lydongungdo", "#data_lydongungdo", create_lydongungdo, 500, 400, 'Lý do ngừng đo', 'data_lydongungdo');

	create_combobox('#mauketluan', '#mauketluan1', ".data_mauketluan", "#data_mauketluan", create_mauketluan, 500, 400, 'Mẫu kết luận', 'data_mauketluan');


	$('#sua').button();
	$('#luu').button();
	$('#xemin,#xeminhinh').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );

	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
	  ma_benhnhan=$('.profile_container .mabenhnhan').text() ;
	
	});
     
	  
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	
	$("#combo_ppdieutri11,#combo_ppdieutri21,#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1").attr("lang","luu");

	
	$( "#combo_ppdieutri1" ).select(function() {
	  $("#ppdieutri1").val($( "#combo_ppdieutri1" ).val());
	});
	$( "#combo_ppdieutri2" ).select(function() {
	  $("#ppdieutri2").val($( "#combo_ppdieutri2" ).val());
	});
	document.onkeydown = function(e) {
		if (e.keyCode === 121) {
			$("#luu").click();
			return false;
		}
	};
	$("#xemin").click(function(){
		window.n_xemin=true;
		$("#luu").click();	
	});
	$('#r_bottom').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                   resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "50%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
          
        });
	
	$("#add_chuandoan").click(function(e){
	links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=169&id_loai=90';
	elem=1 + Math.floor(Math.random() * 1000000000); 
	width=90;
	height=80;   
	dialog_add_dm("",width,height,elem,links); 
}) ;
$( "#totaltime" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#hr_at_rest" ).focus();
		return false;
	}
});
$( "#hr_at_rest" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#max_hr" ).focus();
		return false;
	}
});
$( "#max_hr" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#max_st_level_ascend" ).focus();
		return false;
	}
});

$( "#max_st_level_ascend" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#max_st_level_descend" ).focus();
		return false;
	}
});

$( "#max_st_level_descend" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#max_workload" ).focus();
		return false;
	}
});

$( "#max_workload" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#maxvo2" ).focus();
		return false;
	}
});
$( "#maxvo2" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#bp_at_rest" ).focus();
		return false;
	}
});
$( "#bp_at_rest" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#max_bp" ).focus();
		return false;
	}
});

$( "#max_bp" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#comlydongungdo" ).focus();
		return false;
	}
});
$( "#comlydongungdo" ).keyup(function(e){
	if (e.keyCode === 13 ) {
		$( "#mauketluan" ).focus();
		return false;
	}
});
$( "#mauketluan" ).keyup(function(e){
	if (e.keyCode === 13) {
		$( "#lydongungdo" ).focus();
		return false;
	}
});
$( "#lydongungdo" ).keyup(function(e){
	if (e.keyCode === 13  && e.shiftKey==false) {
		$( "#ketluan" ).focus();
		return false;
	}
});
$( "#ketluan" ).keyup(function(e){
	if (e.keyCode === 13  && e.shiftKey==false) {
		$( "#luu" ).focus();
		return false;
	}
});
	
	if(id_kham2!="0"){
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdogangsuc&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
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
				//navigator_load("end","first");			
				 //alert(_id_kham);		
						load_complete();			 
			//$('.template_title_button').button( 'disable');
				//trangthai=tam1_cls[9]; 
				if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
					$('.template_title_button').button( 'disable');
				}else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
				 	$('.template_title_button').button( 'enable');
				 }
			});		
		});
}else{
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdogangsuc&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
			
	 	//alertObject(data);
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
			load_complete();
			if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
				$('.template_title_button').button( 'disable');
			}else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
			 	$('.template_title_button').button( 'enable');
			}
		});		
	});
}
	function n_loadform(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdogangsuc&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
	 	//alertObject(data);
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
			loaikham_click();			
		});		
	});	
}
function n_loadform2(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dientamdogangsuc&idbenhnhan="+id_benhnhan, 
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
			loaddatanew();			
		});		
	});	
}



	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-151+"px");	
		resize_control();	 
	});
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
		$( "#add_chuandoan" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-plus"
		  }
		})
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
		});
		$("#xoaloikhuyen").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoalk';
		});
}); 
      		  
	$("#sua").click(function(){
		dis_all("hien");
		//$('#sua').button( {disabled:true});
		$('#luu').button( {disabled:false});
		$('#open_template').button( {disabled:false});
		$( "#template_title" ).attr("disabled",false);
		$("#sua").hide();
		$('#boqua').show();
		$('.template_title_button').button( {disabled:false});
		/*$('.chuandoan_button').button( {disabled:false});
		$('.nhanvien_button').button( {disabled:false});
		$( "#nhanvien" ).attr("disabled",false);
		$( "#chuandoan" ).attr("disabled",false);*/
		$('#add_template').button( {disabled:false});
		window.test="giosuacuoi";
		kt_trangthai(_id_trangthai);
	});
	$("#boqua").click(function(){
		dis_all("an");
		$("#sua").show();
		$('#boqua').hide();
		$('#luu').button( {disabled:true});
		$('#ketluan').attr("disabled",true);
		$('#open_template').button( {disabled:true});
		$( "#template_title" ).attr("disabled",true);
		$('.template_title_button').button( {disabled:true});
		/*$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);
		setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
		setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
		*/
		$('#add_template').button( {disabled:true});			
		kt_trangthai(_id_trangthai);	 
	});
			  $("#dathuchien").click(function(){
				    dis_all("an");
					$("#id_trangthai").html("Đã thực hiện");
					$('#dathuchien').button( {disabled:true});
					$('#sua').button( {disabled:false});
					$('#luu').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					_id_trangthai="DaThucHien";
					$('.template_title_button').button( {disabled:true});
					/*$('.chuandoan_button').button( {disabled:false});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);*/
					kt_trangthai(_id_trangthai);
					$('#add_template').button( {disabled:true});
					$('#boqua').hide();
					$('#sua').show();
					 
					$("#giothuchien").html(gio("current"));
					var giothuchien2= $( "#giothuchien" ).text();
					phancach = "";
					i = 0;
					dataToSend = '{';
					$('.thongtin_thai,.form_row,#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
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
					 dataToSend += phancach + '"daluu":"' +$("#daluu").val()+ '"';
					 dataToSend += phancach + '"songayluuhinh":"' +window.songayluuhinh+ '"';
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					alertObject(dataToSend); 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=a',dataToSend)
					.done(function( gridData ) {								
						if($.trim(gridData)=='') {
							n_loadform2();  
							tooltip_message("Đã thực hiện");   
							emr_thuchienxong(_kham,'','','','');// Xếp hàng chuyển phòng
						}else{
							alert(gridData);
						}
					});
					 
			  });
			  
			  $("#hoantat").click(function(){
				  dis_all("an");
					$("#id_trangthai").html("Đã hoàn tất");
					$('#dathuchien').button( {disabled:true});
					$('#hoantat').button( {disabled:true});
					$('#sua').button( {disabled:false});
					$('#luu').button( {disabled:true});
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					_id_trangthai="Xong";
					$('.template_title_button').button( {disabled:true});
					/*$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$( "#chuandoan" ).attr("disabled",true);*/
					kt_trangthai(_id_trangthai);
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
			        $('.thongtin_thai,.form_row,#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
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
					dataToSend += phancach + '"daluu":"' +$("#daluu").val()+ '"';
					dataToSend += phancach + '"songayluuhinh":"' +window.songayluuhinh+ '"';
					dataToSend += '}';
					//alert(dataToSend);
					dataToSend = jQuery.parseJSON(dataToSend);
					alertObject(dataToSend); 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=a',dataToSend)
					.done(function( gridData ) {							   
						if($.trim(gridData)=='') {
							tooltip_message("Đã hoàn tất");
							n_loadform2();   
						}else{
							alert(gridData);
						}
					})
					                                
			  });
			  $('#luu').click(function (){
			  	if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
			  	}else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
					/*$('.chuandoan_button').button( {disabled:true});
					$('.nhanvien_button').button( {disabled:true});
					$( "#nhanvien" ).attr("disabled",true);
					$( "#chuandoan" ).attr("disabled",true);*/
					kt_trangthai(_id_trangthai);
					$('#add_template').button( {disabled:true});
					// setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
					//setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
					$('#open_template').button( {disabled:true});
					$( "#template_title" ).attr("disabled",true);
					if(window.test=="giosuacuoi"){
						$("#edit_by").show();
						var nguoisua2=$("#nhanvien1").val();
						//alert(nguoisua2);
						$("#nguoisua").html(nguoisua2);
						$("#ngaygiosua").html(gio("current"));
					}
				}  
			                      
					var ngaygiosua2=$("#ngaygiosua").text();
			        phancach = "";
			        i = 0;
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row,#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
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
					dataToSend += phancach + '"daluu":"' +$("#daluu").val()+ '"';
					dataToSend += phancach + '"songayluuhinh":"' +window.songayluuhinh+ '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			      // alertObject(dataToSend); 
			       if(window.trangthai_luu=="dathuchien1"){
					   dis_all("an");
					   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=a',dataToSend)
					   .done(function( gridData ) {	
					   	if($.trim(gridData)=='') {						        		
					   		tooltip_message("Đã lưu");	
					   	}else{
					   		alert(gridData);
					   	}
					   })
			         }
			         if(window.trangthai_luu=="hoantat1"){
						 dis_all("an");
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=a',dataToSend)
						 .done(function( gridData ) {							
							 if($.trim(gridData)=='') {
						        		 tooltip_message("Đã lưu");   
						        	}else{
						        		alert(gridData);
						        	} 
							})
			         }     
			          if(window.trangthai_luu=="dangkham1"){
			          	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=a',dataToSend)
			          	.done(function( gridData ) {	
			          		if($.trim(gridData)=='') {
			          			n_loadform2(); 
			          			tooltip_message("Đã lưu"); 
			          		}else{
			          			alert(gridData);
			          		} 
			          	})
			         }

			                                  
			    });
			 	phanquyen();
				
				image_message();
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });  
	
	
});


function navigator_load(_value,_click){
	//alert(tam1_cls.length);
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
				tam_cls+= '<div  style="color:#4AC4F3;font-weight: bold;font-size:13px;" id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">Điện tâm đồ gắng sức</div>';				
				$("#ngay_kham").html(tam1_cls[2]);				 
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
					//console.log(tam+"=="+tam1);				 
					if(tam==tam1){	
						id_kham3=val[i]["id"];
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
                       	tenloaikham=val[i]["cell"][1]; 
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][7]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][12]);
						
						setval('#comlydongungdo','#comlydongungdo1','#data_lydongungdo');
						setval('#mauketluan','#mauketluan1','#data_mauketluan');
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
						 idluotkham=val[i]["cell"][5];
                        $("#giothuchien").text(val[i]["cell"][13]);                      
                        $("#giohoantat").text(val[i]["cell"][14]);  
						
						//---
                        $("#totaltime").val(val[i]["cell"][15]);
						$("#hr_at_rest").val(val[i]["cell"][16]);
						$("#max_hr").val(val[i]["cell"][17]);
						$("#max_st_level_ascend").val(val[i]["cell"][18]);
						 $("#max_st_level_descend").val(val[i]["cell"][19]);
						$("#max_workload").val(val[i]["cell"][20]);
						$("#maxvo2").val(val[i]["cell"][21]);
						 $("#bp_at_rest").val(val[i]["cell"][22]);
						$("#max_bp").val(val[i]["cell"][23]);
						
						$("#lydongungdo").val(val[i]["cell"][24]);
						$("#ketluan").val(val[i]["cell"][25]);
						if(val[i]["cell"][26]>0){
							$("#daluu").val(1);
						}else{
							$("#daluu").val(0);
						}
						window.songayluuhinh=val[i]["cell"][27];
						
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
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
						window.trangthai_luu="dangkham1";
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
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
						//setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						 
						window.trangthai_luu="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
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
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.trangthai_luu="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						dis_all("an");
						if(<?=$_SESSION['user']['id_user']?>==val[i]["cell"][12]){
							$('#sua').button( {disabled:false});
						}
						else{
							$('#sua').button( {disabled:true});
						}
						
						$("#id_trangthai").html("Đã hoàn tất");
						//$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#add_template').button( {disabled:true});
						
						window.trangthai_luu="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[8]);
                    		 			 
						if(val[i]["cell"][9]!=null)
						{
								$("#nguoisua").text(val[i]["cell"][9]);
								$("#ngaygiosua").text(val[i]["cell"][10]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var _bientam= stt.split(";");
				for (i = 0; i <_bientam.length; i++) 
				{
					check=_bientam[i].split(":");
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
						
							break;
						}
						ii++;						 
					}
				}
				load_image($(this).attr("alt"));	
				window.search_string=$(this).attr("alt");	
		});
	});
}
function loaddatanew(){
	$.each( data_luotkham, function( key, val ) {

				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){
						tam=val[i]["id"];	
						//alert(val[i]["cell"])			
					 var tam1_cls=val[i]["cell"]; 
					tam1=$(this).attr("id");	
					//console.log(tam+"=="+tam1);				 
					if(tam==tam1){	
						 $("#nguoi_chidinh").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][2]);
                       	tenloaikham=val[i]["cell"][1]; 
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][7]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][12]);
						
						setval('#comlydongungdo','#comlydongungdo1','#data_lydongungdo');
						setval('#mauketluan','#mauketluan1','#data_mauketluan');
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
						id_loaikham=val[i]["cell"][3];
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
						 _id_trangthai=tam1_cls[6]; 
                         _kham = tam;
                         _id_luotkham2=tam1_cls[5];
                        $("#giothuchien").text(val[i]["cell"][13]);                      
                        $("#giohoantat").text(val[i]["cell"][14]);  
						
						//---
                        $("#totaltime").val(val[i]["cell"][15]);
						$("#hr_at_rest").val(val[i]["cell"][16]);
						$("#max_hr").val(val[i]["cell"][17]);
						$("#max_st_level_ascend").val(val[i]["cell"][18]);
						 $("#max_st_level_descend").val(val[i]["cell"][19]);
						$("#max_workload").val(val[i]["cell"][20]);
						$("#maxvo2").val(val[i]["cell"][21]);
						 $("#bp_at_rest").val(val[i]["cell"][22]);
						$("#max_bp").val(val[i]["cell"][23]);
						
						$("#lydongungdo").val(val[i]["cell"][24]);
						$("#ketluan").val(val[i]["cell"][25]);
						if(val[i]["cell"][26]>0){
							$("#daluu").val(1);
						}else{
							$("#daluu").val(0);
							}
						window.songayluuhinh=val[i]["cell"][27];
						
						
                    if(_id_trangthai=="DangCho"){
						dis_all("hien");
						$("#id_trangthai").html("Đang chờ");
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
						window.trangthai_luu="dangkham1";
                         		  
                    }
                    else if(_id_trangthai=="DaThucHien"){
						dis_all("an");
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
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
						//setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						 
						window.trangthai_luu="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
						dis_all("hien");
						$("#id_trangthai").html("Đang khám");
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
						
						setval('#nhanvien','#nhanvien1','#nhan_vien',<?=$_SESSION['user']['id_user']?>);
						setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
						window.trangthai_luu="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
						
						dis_all("an");
						if(<?=$_SESSION['user']['id_user']?>==val[i]["cell"][12]){
							$('#sua').button( {disabled:false});
						}
						else{
							$('#sua').button( {disabled:true});
						}
						$("#id_trangthai").html("Đã hoàn tất");
						//$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#xoamota').button( {disabled:true});
						$('#xoaketluan').button( {disabled:true});
						$('#xoaloikhuyen').button( {disabled:true});
						$('#ketluan').attr("disabled", "disabled");
						$('#mota').attr("disabled", "disabled");
						$('#loikhuyen').attr("disabled", "disabled");
						$('#open_template').button( {disabled:true});
						$( "#template_title" ).attr("disabled",true);
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						$('.template_title_button').button( {disabled:true});
						$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);
						$('#add_template').button( {disabled:true});
						
						window.trangthai_luu="hoantat1";
                    }
                    $("#giohentra").html(tam1_cls[8]);
                    		 			 
						if(val[i]["cell"][9]!=null){
							$("#nguoisua").text(val[i]["cell"][9]);
							$("#ngaygiosua").text(val[i]["cell"][10]);
						}
						else $("#edit_by").hide();					
					} 
				}
				////
				var _bientam= stt.split(";");
				for (i = 0; i <_bientam.length; i++){
					check=_bientam[i].split(":");
					if($("#nguoisua").text()==check[0]){ //alert(check[0]);
				 		$("#nguoisua").text(check[1]);
					}
				 	if($("#nguoi_chidinh").val()==check[0]){ //alert(check[0]);
				 		$("#nguoi_chidinh").val(check[1]);
					}
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
				load_image($(this).attr("alt"));
				window.search_string=$(this).attr("alt");			
		});
}

function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
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
	    ,	center: {
			resizable: true
		,	size:					"75%"
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
	
	 function create_lydongungdo(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Lý do ngừng đo', 'Ghi chú'],
            colModel: [
                {name: 'LyDo', index: 'LyDo', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', hidden: false},
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				var rowdata = $(this).getRowData(id);
				$('#lydongungdo').val('');
				$("#lydongungdo").val(rowdata["LyDo"]);
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
	
	function create_mauketluan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên mẫu', 'Nội dung', 'Kết luận','Lời khuyên','Ưa thích'],
            colModel: [
                {name: 'TenMau', index: 'TenMau', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
				{name: 'KetLuan', index: 'KetLuan', hidden: false},
				{name: 'LoiKhuyen', index: 'LoiKhuyen', hidden: false},
				{name: 'UaThich', index: 'UaThich', hidden: true},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 200,
            width: 700,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
				var rowdata = $(this).getRowData(id);
				$('#ketluan').val('');
				$("#ketluan").val(rowdata["TenMau"]);
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
	if((nhanvien1_complete==0)&&(nhanvien2_complete==0)&&(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
}
function checkboxval(el){
		//alert();
		if($("#"+el).is(':checked'))
		return $("#"+el).val("True");
		return $("#"+el).val("False");
}
function dis_all(tam){
	if(tam=="an"){
	 	$('#panel_main').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
		$(this).attr("disabled",true);
});
		$(".custom-combobox-toggle").button( {disabled:true});
		$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
		$("#add_chuandoan").button( {disabled:true});
		//$(".custom-combobox-toggle").attr("class","backhidde");
		$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).addClass( "backhidde" );
		
	 }else if(tam=="hien"){
		$('.thongtin_thai,.form_row,#panel_main,#tiensu,#panel_main2,.tinhtuoithai').find('input[type=text],input[type=checkbox],select,textarea,input[type=hidden]').each(function() {
		$(this).attr("disabled",false);
		});
		$(".custom-combobox-toggle").button( {disabled:false});
		$("#nguoi_chidinh,#ngaychidinh").attr("disabled",true);
		$("#add_chuandoan").button( {disabled:false});
		$( "#tgmacbenh1,#solandieutri1,#ppdieutricu1,#sobuitri1,#builonnhat1,#combo_ppdieutri11,#combo_ppdieutri21" ).removeClass( "backhidde" );
	}
}

function resize_control(){

	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-14+"px");
	$("#right_col").css("width",$(window).width()/2+1+"px");
	$("#r_bottom").css("height",$(".right_col").height()-$("#table_form").height()+"px");
	
	$(".ttright").css("width",$(".right_col").width()-$(".ttleft").height()+"px");
	
	$("#lydongungdo").css("height",$("#r_bottom").height()/2-48+"px");
	$("#ketluan").css("height",$("#r_bottom").height()/2-50+"px");
	
	//$("#lydongungdo").css("height",$(".n_tren").height()-$(".nt").height()-15+"px");
	//$("#ketluan").css("height",$(".n_duoi").height()-$(".nd").height()-50+"px");
}

function load_image(search_string){	   
	  _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) { 			           		 
      }}).responseText;	
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	 // alert(_folder_name);
	  $("#images_viewer").attr("src","pages.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);   
	  $('#DM_template').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+id_loaikham,datatype:'json'}) .trigger('reloadGrid');
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