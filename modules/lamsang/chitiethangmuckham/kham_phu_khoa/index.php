
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

?>
 
 
<style>
	#DM_template td,#data_combo_khamtt td,#data_combo_denghitk td,#data_combo_pptranhthai td  {	 
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
	legend,.chumauhong{
		color:#FF6699;
		font-weight:bold;
	}
	label{
		text-align:left;
		font-size:11px;
		/*font-weight:bold;*/
		margin-top:-10px;
	}
	table{
		width:100%;
		margin-top:-8px;
		margin-bottom:-8px; 
	}
	#gs_Ten,#gs_NoiDung{
		 height: 25px;
	}.thongtin_tongthe{
		height: 62px;
	}
</style>
<body>
<div id="dialog-confirm3" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Yêu cầu nhập đầy đủ thông số PARA</p>
</div>
<input type="hidden" id="text_para1" value="" />
<input type="hidden" id="text_para2" value=""/>
<input type="hidden" id="text_para3" value=""/>
<input type="hidden" id="text_para4" value=""/>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="height: 58px;width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người chỉ định:</label><input lang='luu' name="nguoi_chidinh"style="width:100px" type="text" id="nguoi_chidinh"disabled>
            <label style="width:90px;text-align:right">Người thực hiện:</label>
           
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label>
           
                    <input id="chuandoan"  name="chuandoan"  type="text" style="width:70px;">
         
            <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input name="ngaychidinh" id="ngaychidinh" lang='luu'style="width:100px" type="text" value="22:26 24/05/13">
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="margin-right: -10px;width: 90px;margin-left: 10px;font-size: 11px!important;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="  margin-bottom:1px; ">Đã t.hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-right: -33px;margin-left: 44px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:20px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
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
    	 
  <div>
   	
  <table width="100%" height="62px!important" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> <br>
    	
	    	<label style="">Giờ hẹn trả kết quả:</label>
	    	<label id="giohentra" style="color:blue"></label> 
            <br>   	
    
	    	<label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label>
    	
    </td>
    <td align="right" style="width:135px!important; height:34px!important">PARA
				    <input lang='luu' type="text" style="width:12px " name="para1" id="para1" class="para" maxlength="1"/>
				    <input lang='luu' type="text" style="width:12px " name="para2" id="para2" class="para" maxlength="1" />
				    <input lang='luu' type="text" style="width:12px " name="para3" id="para3" class="para" maxlength="1"/>
				    <input lang='luu' type="text" style="width:12px " name="para4" id="para4" class="para" maxlength="1"/>
    </td>
    <td align="center"  style=" width:95px!important; height:34px!important; ">
    <a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;width:64px;  margin-bottom:-2px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    <a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:-2px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a></td>
    <td align="center"  style=" width:95px!important; height:34px!important"><a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;;width:64px;  margin-bottom:-2px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> </td>
  </tr>
  <tr>
    <td align="center">
    <a href="#" id="laydulieu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; margin-top: 1px;;width:64px;  margin-bottom:-2px;float: right; "><strong>Lấy dữ liệu</strong><span class="ui-icon ui-icon-disk"></span></a>
    </a> 
    </td>
    <td align="center"  style=" width:95px!important; height:34px!important">
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    </td>
    <td align="center"  style=" width:95px!important; height:34px!important"> 
    <a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width:64px;float: right; ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    </td>
  </tr>
  </table>
  </div>
    	
    </div>


    </div>
 <div id="panel_main">    

        <div class="ui-widget-content thongtin_thai ui-layout-west">
        <fieldset id="lydo_fieldset" height="20%" width="100%"><table style="height:20%;">
                <legend al>Lý do</legend>
            <tr>
                <th><label style="text-align:left;font-size:11px">Lý do khám:</label></th>  
                <th><textarea lang='luu'id="lydokham" name="lydokham"style="width:100%;  font-size:11px" ></textarea> </th>
                <th><label >Tiền sử gia đình:</label> </th>
                <th><textarea lang='luu'id="tiensugd" name="tiensugd"style="width:100%;  font-size:11x" ></textarea> </th>
            </tr>
            </table></fieldset>
            <fieldset id="tiensubanthan_fieldset" style="height:40%;max-height:173px;min-height:173px" height="40%" width="100%"><table style="height:40%;" >
                <legend>Tiền sử bản thân</legend>
            <tr><td style="margin-top:-10px; width:115px!important"><label style="text-align:left;font-weight:bold;">Kinh nguyệt:</label></td>  
	                  <td><input id="combo_kinhnguyet" name="combo_kinhnguyet"  lang='luu' type="text" style="width:268px;height: 16px!important; font-size:13px" placeholder="--Chọn mẫu--" >
                        <input id="combo_kinhnguyet1"   name="combo_kinhnguyet1" type="text"  style="display:none" >
	                    <button id="add_templatekn" style="margin-left: 23px">thêm template</button></td>
	        </tr>
            <tr>
                <td><label style="text-align:left;font-weight:bold;">Sản phụ khoa:</label></td>  
                <td><textarea lang='luu'id="sanphukhoa" name="sanphukhoa"style="width:100%;  height: 15px;font-size:13px" ></textarea> </td>
            </tr>
            <tr>
                <td><label style="text-align:left;font-weight:bold;">Tiền sử bệnh:</label></td>  
                <td><textarea lang='luu'id="tiensubenh" name="tiensubenh"style="width:100%;  height: 15px;font-size:13px" >Bình thường</textarea> </td>
            </tr>
            <tr><td style="margin-top:-10px; width:101px!important"><label style="text-align:left;font-weight:bold;">PP tránh thai:</label></td>  
	                  <td><input id="combo_pptranhthai" name="combo_pptranhthai"  type="text" style="width:268px;;height: 16px!important; font-size:13px" placeholder="--Chọn mẫu--"> 
                        <input id="combo_pptranhthai1"  name="combo_pptranhthai1" type="text" lang='luu' style="display:none" >
	                   <button id="add_templatepptt" style="margin-left: 23px">thêm template</button></td>
	        </tr>
            <tr>
                <td><label style="text-align:left;font-weight:bold;" >Các thuốc đang dùng:</label></td>  
                <td><textarea lang='luu'id="thuocdangdung" name="thuocdangdung"style="width:100%; height: 15px;font-size:13px" ></textarea> </td>
            </tr>
            <tr>
                <td><label style="text-align:left;font-weight:bold;">Tiền sử dị ứng thuốc:</label></td>  
                <td><textarea lang='luu'id="tsdiungthuoc" name="tsdiungthuoc"style="width:100%;  height: 15px;font-size:13px" ></textarea> </td>
            </tr>
            </table></fieldset>
            <div class="khamlamsang">
            <fieldset id="khamlamsang_fieldset" style="max-height:205px" height="40%" width="100%"><table style="height:40%;">
                <legend>Khám lâm sàng</legend>
            
	            <tr><td style="margin-top:-10px; width:115px!important"><label style="width:15%;font-weight:bold;">Triệu chứng cơ năng:</label></td>  
	                  <td><input id="combo_trieuchungcn" name="combo_trieuchungcn"  type="text" style="width:268px;height: 16px!important; font-size:13px" placeholder="--Chọn mẫu--"> 
                        <input id="combo_trieuchungcn1"  name="combo_trieuchungcn1" type="text" style="display:none" >
	                   <button id="add_template" style="margin-left: 23px">thêm template</button></td></tr>
	            <tr><td></td><td><textarea lang='luu' id="trieuchungcn" name="trieuchungcn" style="margin-top:-3px;  width:100%; font-size:13px"></textarea> </td></tr>
	            
	            <tr><td><label style="width:15%;font-weight:bold;">Khám thực tế:</label></td>  
	                <td><input id="combo_khamtt" name="combo_khamtt"  type="text" style="width:268px;;height: 16px!important; font-size:13px" placeholder="--Chọn mẫu--"> 
                        <input id="combo_khamtt1"  name="combo_khamtt1" type="text" style="display:none" >
	                    <button id="add_templatektt" style="margin-left: 23px">thêm template</button></td></tr>
	            <tr><td></td><td><textarea lang='luu'id="khamtt" name="khamtt"style="margin-top:-3px; width:100%;height:50px;  font-size:13px" ></textarea> </td>
	            </tr>
            </table></fieldset>   
        </div> 
    </div>          
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
            <fieldset id="khamcls_fieldset" height="60%" width="100%"><table style="height:60%; ">
                <legend>Khám cận lâm sàng:</legend>
	            <tr><th><label style="width:15%;font-weight:bold;" >Soi tươi:</label></th>  
	                <th><textarea lang='luu'id="stuoi" name="stuoi"style="width:100%; font-size:13px" ></textarea> </th> 
	                <th><label >NSCTC:</label> </th>
	                <th><textarea lang='luu'id="nsctc" name="nsctc"style="width:100%; font-size:13px" ></textarea> </th>
	            </tr>
	            <tr><th><label style="width:15%;font-weight:bold;">Nhộm soi:</label></th>  
	                <th><textarea lang='luu'id="nhuomsoi" name="nhuomsoi"style="width:100%; font-size:13px" ></textarea> </th> 
	                <th><label style="width:15%;font-weight:bold;">Siêu âm:</label> </th>
	                <th><textarea lang='luu'id="sieuam" name="sieuam"style="width:100%; font-size:13px" ></textarea> </th>
	            </tr>
	            <tr><th><label style="width:15%;font-weight:bold;">Pap'smear:</label></th>  
	                <th><textarea lang='luu'id="papsmear" name="papsmear"style="width:100%; font-size:13px" ></textarea> </th> 
	                <th><label style="width:15%;font-weight:bold;">Khác:</label> </th>
	                <th><textarea lang='luu'id="khac" name="khac"style="width:100%; font-size:13px" ></textarea> </th>
	            </tr>
	            <tr> </tr>
            </table></fieldset>
            <div class="chuandoandieutri">
            <fieldset id="Chuandoandtr_fieldset" height="40%" width="100%"><table style="height:40%;">
                <legend>Chuẩn đoán_Điều trị</legend>
            


	            <tr><td style=" width:101px!important;font-weight:bold;"><label>Chuẩn đoán:</label></td>  
	                 <td><input id="combo_chuandoan" name="combo_chuandoan"  type="text" style="width:268px;;height: 16px!important; font-size:13px" placeholder="--Chọn mẫu--">
                        <input id="combo_chuandoan1"  name="combo_chuandoan1" type="text" style="display:none" > 
	                    <button id="add_templatecd" style="margin-left: 23px">thêm template</button></td></tr>
	            <tr><td></td><td><textarea lang='luu'id="are_chuandoan" name="are_chuandoan"style="margin-top:-3px;width:100%;height:80px; font-size:13px" ></textarea> </td></tr>
	            
	            <tr><td><label style=" width:101px!important;font-weight:bold;" >Đề nghị-tái khám:</label></td>  
	                <td><input id="combo_denghitk" name="combo_denghitk"  type="text" style="width:268px;;height: 16px!important; font-size:13px" placeholder="--Chọn mẫu--">
                        <input id="combo_denghitk1"  name="combo_denghitk1" type="text" style="display:none" >
	                    <button id="add_templatedn" style="margin-left: 23px; ">thêm template</button></td></tr>
	            <tr><td></td><td><textarea lang='luu'id="denghi" name="denghi"style="margin-top:-3px!important; height:65px; width:100%; font-size:13px" ></textarea> </td>
	            </tr>
            </table></fieldset> 
            </div>  
        </div>          
	</div>
	<div id="dialog-form" title="Thêm bản ghi" style="display:none;">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">Mô tả có rồi,bạn có muốn ghi đè hay không? </label>
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
var report_code=["KhamPhuKhoa"];
var report_name=["Khám phụ khoa"];
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
var id_benhnhan;
var nhanvien_control;

$(document).ready(function() {	
	
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	$.cookie("in_status", "print_preview"); 
	$("#xemin").click(function(e){	
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=khamphukhoa&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'KhamPhuKhoa');
		$(".frame_u78787878975f").css("width","793px");
	});
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
	$('#dong').button();
	$('#dathuchien').button();
	$('#hoantat').button();
	$('#boqua').button();
	$('#boqua').hide();
	load_select();
	openform_shortcutkey();
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
	
	$( "#para1" ).keyup(function(e) {
		//alert(e.keyCode);
		if (e.keyCode === 17) {
			return false
		}else{
			if(e.keyCode >=48 && e.keyCode <=57 || e.keyCode == 13){
			var a=$( "#para1" ).val();
			//alert(a)
			if (a==null || a=="") {
				$( "#para1" ).focus();
			} else {
			$( "#para2" ).focus();
			}
			}
			
		}
  		
	});
	$( "#para2" ).keyup(function(e) {
  		if(e.keyCode >=48 && e.keyCode <=57 || e.keyCode == 13){
			var b=$( "#para2" ).val();
			if (b==null || b=="") {
				$( "#para2" ).focus();
			} else {
			$( "#para3" ).focus();
			}
		}
	});
	$( "#para3" ).keyup(function(e) {
  		if(e.keyCode >=48 && e.keyCode <=57 || e.keyCode == 13){
			var c=$( "#para3" ).val();
			if (c==null || c=="") {
				$( "#para3" ).focus();
			} else {
			$( "#para4" ).focus();
			}
		}
	});
	$( "#para4" ).keyup(function(e){
		if(e.keyCode >=48 && e.keyCode <=57 || e.keyCode == 13){
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
	$( "#lydokham" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$( "#tiensugd" ).focus();
				$( "#tiensugd" ).select();
				
				return false;

			}
	});
	$( "#tiensugd" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$("#tiensugd").data('focus', true);
				$( "#combo_kinhnguyet" ).focus();
				$( "#combo_kinhnguyet" ).select();
				return false;
				 
       			
			} else if(jwerty.is("shift+tab",e)){

				$( "#lydokham" ).focus();
				$( "#lydokham" ).select();
			}
	});
	$( "#combo_kinhnguyet" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#tiensugd").data('focus')){
					$("#tiensugd").data('focus', false);
				}else{
				$( "#sanphukhoa" ).focus();
				$( "#sanphukhoa" ).select();
				}
				return false;
			} else if(jwerty.is("shift+tab",e)){
				if($("#sanphukhoa").data('focus')){
					$("#sanphukhoa").data('focus', false);
				}else{
				$( "#tiensugd" ).focus();
				$( "#tiensugd" ).select();
				}
			}
	});
	$( "#sanphukhoa" ).keydown(function(e){
			$("#sanphukhoa").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				//$("#sanphukhoa").data('focus', true);
				$( "#tiensubenh" ).focus();
				$( "#tiensubenh" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){
			
				$( "#combo_kinhnguyet" ).focus();
				$( "#combo_kinhnguyet" ).select();
			}
	});
	$( "#tiensubenh" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#tiensubenh").data('focus', true);
				$( "#combo_pptranhthai" ).focus();
				$( "#combo_pptranhthai" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#sanphukhoa" ).focus();
				$( "#sanphukhoa" ).select();
			}
	});
	$( "#combo_pptranhthai" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#tiensubenh").data('focus')){
					$("#tiensubenh").data('focus', false);
				}else{
					$( "#thuocdangdung" ).focus();
					$( "#thuocdangdung" ).select();
					return false;
				}
			} else if(jwerty.is("shift+tab",e)){
				if($("#thuocdangdung").data('focus')){
					$("#thuocdangdung").data('focus', false);
				}else{
				$( "#tiensubenh" ).focus();
				$( "#tiensubenh" ).select();
				}
			}
	});
	$( "#thuocdangdung" ).keydown(function(e){
		//alert(e.keyCode);
				$("#thuocdangdung").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#thuocdangdung").data('focus', true);
				$( "#tsdiungthuoc" ).focus();
				$( "#tsdiungthuoc" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#combo_pptranhthai" ).focus();
				$( "#combo_pptranhthai" ).select();
			}
	});
	$( "#tsdiungthuoc" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#tsdiungthuoc").data('focus', true);
				$( "#combo_trieuchungcn" ).focus();
				$( "#combo_trieuchungcn" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#thuocdangdung" ).focus();
				$( "#thuocdangdung" ).select();
			}
	});
	$( "#combo_trieuchungcn" ).keyup(function(e){
		//alert(e.keyCode);

			$("#combo_trieuchungcn").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#tsdiungthuoc").data('focus')){
					$("#tsdiungthuoc").data('focus', false);
				}else{
					$( "#trieuchungcn" ).focus();
					$( "#trieuchungcn" ).select();
					return false;
					}
			} else if(jwerty.is("shift+tab",e)){
				if($("#trieuchungcn").data('focus')){
					$("#trieuchungcn").data('focus', false);
				}else{
				$( "#tsdiungthuoc" ).focus();
				$( "#tsdiungthuoc" ).select();
				}
			}
	});
	$( "#trieuchungcn" ).keydown(function(e){
		$("#trieuchungcn").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$( "#combo_khamtt" ).focus();
				$( "#combo_khamtt" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#combo_trieuchungcn" ).focus();
				$( "#combo_trieuchungcn" ).select();
			}
	});
	$( "#combo_khamtt" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#trieuchungcn").data('focus')){
					$("#trieuchungcn").data('focus', false);
				}else{
					$( "#khamtt" ).focus();
					$( "#khamtt" ).select();
					return false;
					}
			} else if(jwerty.is("shift+tab",e)){
				if($("#khamtt").data('focus')){
					$("#khamtt").data('focus', false);
				}else{
				$( "#trieuchungcn" ).focus();
				$( "#trieuchungcn" ).select();
				}
			}
	});
	$( "#khamtt" ).keydown(function(e){
		//alert(e.keyCode);
		$("#khamtt").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#khamtt").data('focus', true);
				$( "#stuoi" ).focus();
				$( "#stuoi" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#combo_khamtt" ).focus();
				$( "#combo_khamtt" ).select();
			}
	});
	$( "#stuoi" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				
				$( "#nhuomsoi" ).focus();
				$( "#nhuomsoi" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#khamtt" ).focus();
				$( "#khamtt" ).select();
			}
	});
	$( "#nhuomsoi" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#nhuomsoi").data('focus', true);
				$( "#papsmear" ).focus();
				$( "#papsmear" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#stuoi" ).focus();
				$( "#stuoi" ).select();
			}
	});
	$( "#papsmear" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#papsmear").data('focus', true);
				$( "#nsctc" ).focus();
				$( "#nsctc" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#nhuomsoi" ).focus();
				$( "#nhuomsoi" ).select();
			}
	});
	$( "#nsctc" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#nsctc").data('focus', true);
				$( "#sieuam" ).focus();
				$( "#sieuam" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#papsmear" ).focus();
				$( "#papsmear" ).select();
			}
	});
	$( "#sieuam" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#sieuam").data('focus', true);
				$( "#khac" ).focus();
				$( "#khac" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#nsctc" ).focus();
				$( "#nsctc" ).select();
			}
	});
	$( "#khac" ).keydown(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#khac").data('focus', true);
				$( "#combo_chuandoan" ).focus();
				$( "#combo_chuandoan" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#sieuam" ).focus();
				$( "#sieuam" ).select();
			}
	});
	$( "#combo_chuandoan" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#khac").data('focus')){
					$("#khac").data('focus', false);
				}else{
					$( "#are_chuandoan" ).focus();
					$( "#are_chuandoan" ).select();
					return false;
				}
			}else if(jwerty.is("shift+tab",e)){
				if($("#are_chuandoan").data('focus')){
					$("#are_chuandoan").data('focus', false);
				}else{
				$( "#khac" ).focus();
				$( "#khac" ).select();
				}
			}
	});
	$( "#are_chuandoan" ).keydown(function(e){
		//alert(e.keyCode);
		$("#are_chuandoan").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#are_chuandoan").data('focus', true);
				$( "#combo_denghitk" ).focus();
				$( "#combo_denghitk" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#combo_chuandoan" ).focus();
				$( "#combo_chuandoan" ).select();
			}
	});
	$( "#combo_denghitk" ).keyup(function(e){
		//alert(e.keyCode);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				if($("#are_chuandoan").data('focus')){
					$("#are_chuandoan").data('focus', false);
				}else{
					$( "#denghi" ).focus();
					$( "#denghi" ).select();
					return false;
				}
			} else if(jwerty.is("shift+tab",e)){
				if($("#denghi").data('focus')){
					$("#denghi").data('focus', false);
				}else{
				$( "#are_chuandoan" ).focus();
				$( "#are_chuandoan" ).select();
				}
			}
	});
	$( "#denghi" ).keydown(function(e){
		//alert(e.keyCode);
		$("#denghi").data('focus', true);
			if (jwerty.is("enter",e)||jwerty.is("tab",e)) {
				$("#denghi").data('focus', true);
				$( "#luu" ).focus();
				$( "#luu" ).select();
				return false;
			} else if(jwerty.is("shift+tab",e)){

				$( "#combo_denghitk" ).focus();
				$( "#combo_denghitk" ).select();
			}
	});



	//focus
	create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');

	create_combobox('#combo_kinhnguyet', '#combo_kinhnguyet1', ".data_combo_kinhnguyet", "#data_combo_kinhnguyet", create_kinhnguyet, 500, 400, 'Kinh nguyệt', 'data_kinhnguyet',0);
	create_combobox('#combo_pptranhthai', '#combo_pptranhthai1', ".data_combo_pptranhthai", "#data_combo_pptranhthai", create_pptranhthai, 500, 400, 'PP Tránh thai', 'data_pptranhthai',0);
	
	create_combobox('#combo_trieuchungcn', '#combo_trieuchungcn1', ".data_combo_trieuchungcn", "#data_combo_trieuchungcn", create_trieuchungcn, 'bw', 400, 'Triệu chứng cơ năng', 'data_trieuchungcn',0);
	create_combobox('#combo_khamtt', '#combo_khamtt1', ".data_combo_khamtt", "#data_combo_khamtt", create_khamtt, 500, 400, 'Khám thực tế', 'data_khamtt',0);
	create_combobox('#combo_chuandoan', '#combo_chuandoan1', ".data_combo_chuandoan", "#data_combo_chuandoan", create_chuandoan, 500, 400, 'Chuẩn đoán', 'data_chuandoan',0);
	create_combobox('#combo_denghitk', '#combo_denghitk1', ".data_combo_denghitk", "#data_combo_denghitk", create_denghitk, 500, 400, 'Đề nghị-tái khám', 'data_denghitaikham',0);
	//them trieu chung co nang


	/*$( '<a id="add_templatekn" style="margin-left: 24px">thêm template</a>' ).insertAfter( ".combo_kinhnguyet_button" );
	$( '<a id="add_templatepptt" style="margin-left: 24px">thêm template</a>' ).insertAfter( ".combo_pptranhthai_button" );
	$( '<a id="add_template" style="margin-left: 24px">thêm template</a>' ).insertAfter( ".combo_trieuchungcn_button" );
	$( '<a id="add_templatektt" style="margin-left: 24px">thêm template</a>' ).insertAfter( ".combo_khamtt_button" );*/
	

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

			//them phuong phap tranh thai
			$("#add_templatepptt").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
			})
			//them kham thuc the
			$("#add_templatektt").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
			})
			//them chuan doan
			$("#add_templatecd").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
			})
			//them de nghi_tai kham
			$("#add_templatedn").click(function(e){
					  
					  links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
					  elem=1 + Math.floor(Math.random() * 1000000000); 
					  width=90;
					  height=90;  
					  dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
			})

				
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phukhoa&idbenhnhan="+<?=$_SESSION["ThongTinBenhNhan"]["ID"]?>, 
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
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
                         		  dis_all("Hien");
                         		  window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					$("#sua").show();
                    $('#boqua').hide();
                    $('#luu').button( {disabled:true});
                    $("#nhanvien1").val(nhanvien4);
                    $("#chuandoan1").val(chuandoan4);
                    $('.template_title_button').button( {disabled:true});
                    $('.nhanvien_button').button( {disabled:true});
                    $( "#nhanvien" ).attr("disabled",true);
                    $('.chuandoan_button').button( {disabled:true});
                    $( "#chuandoan" ).attr("disabled",true);
                    setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                    setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                    dis_all("An");
                         		  //reload();
				});
			  $("#dathuchien").click(function(){
				  	$("#id_trangthai").html("Đã thực hiện");
	                $('#dathuchien').button( {disabled:true});
	                $('#sua').button( {disabled:false});
	                $('#luu').button( {disabled:true});
	                          
	                _id_trangthai="DaThucHien";
	         		$('.chuandoan_button').button( {disabled:false});
	         		$('.nhanvien_button').button( {disabled:true});
	         		$( "#nhanvien" ).attr("disabled",true);
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
					dataToSend += phancach + '"idkhampkhoa":"' +_idkhampkhoa+ '"';
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
             		$('.chuandoan_button').button( {disabled:true});
             		$('.nhanvien_button').button( {disabled:true});
             		$( "#nhanvien" ).attr("disabled",true);
             		$( "#chuandoan" ).attr("disabled",true);
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
					dataToSend += phancach + '"idkhampkhoa":"' +_idkhampkhoa+ '"';
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
			  		//tooltip_message("Đã lưu");
			  	}
			  	else{
			  		$('#luu').button( {disabled:true});
			  		$('#boqua').hide();
					$('#sua').show();
					$('#sua').button( {disabled:false});
					$('.template_title_button').button( {disabled:true});
             		$('.chuandoan_button').button( {disabled:true});
             		$('.nhanvien_button').button( {disabled:true});
             		$( "#nhanvien" ).attr("disabled",true);
             		$( "#chuandoan" ).attr("disabled",true);
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
							 		}
							 		else{
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
					dataToSend += phancach + '"idkhampkhoa":"' +_idkhampkhoa+ '"';
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

	$("#laydulieu").click(function(){

		$("#stuoi").val("Soi tươi:+ Bạch cầu:( xxx ).+ Tế bào biểu mô: ( xxx ).+ Nẫm: ( xxx ).+ Trichomonas: ( xxx ).+ Clue Cell: ( xxx ).");
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
		//alert(navigator_count);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {	
	//alertObject(data_luotkham);				 
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
					//console.log(tam+"=="+tam1);	

					if(tam==tam1){	
						//console.log(val[i]["cell"][6])
						//_id_luotkham=val(val[i]["cell"][35]);//id luot kham
						$("#nguoi_chidinh").val(val[i]["cell"][4]);
						$("#ngaychidinh").val(val[i]["cell"][2]);

                       if(val[i]["cell"][10]==null) nhanvien_control=1; 
					   else nhanvien_control=0;
					   $("#id_trangthai").val(val[i]["cell"][6]);

                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][7]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][12]);
                        nhanvien4=val[i]["cell"][7];
                        chuandoan4=val[i]["cell"][12];
					   $("#lydokham").val(val[i]["cell"][16]);
					   $("#tiensugd").val(val[i]["cell"][17]);
					 //  $("#combo_kinhnguyet").val(val[i]["cell"][18]);
					    setval('#combo_kinhnguyet','#combo_kinhnguyet1','#data_combo_kinhnguyet',val[i]["cell"][18]);
						 setval('#combo_pptranhthai','#combo_pptranhthai1','#data_combo_pptranhthai',val[i]["cell"][20]);
						 setval('#combo_khamtt','#combo_khamtt1','#data_combo_khamtt');
						 setval('#combo_chuandoan','#combo_chuandoan1','#data_combo_chuandoan');
						 setval('#combo_denghitk','#combo_denghitk1','#data_combo_denghitk');
						 setval('#combo_trieuchungcn','#combo_trieuchungcn1','#data_combo_trieuchungcn');
						 //alert(val[i]["cell"][20])
						// alert(val[i]["cell"][24]);
						// alert(val[i]["cell"][24]);
					   //alert(val[i]["cell"][18])
					   $("#sanphukhoa").val(val[i]["cell"][19]);
					    $("#tiensugd").val(val[i]["cell"][36]);
						$("#tiensubenh").val(val[i]["cell"][37]);
					  // $("#combo_pptranhthai").val(val[i]["cell"][20]);
					   $("#thuocdangdung").val(val[i]["cell"][21]);
					   $("#tsdiungthuoc").val(val[i]["cell"][22]);
					   $("#trieuchungcn").html(val[i]["cell"][23]);
					   //alert(val[i]["cell"][23]);
					   $("#khamtt").val(val[i]["cell"][24]);
					 //  setval_col('#combo_khamtt','#combo_khamtt1','#data_combo_khamtt',val[i]["cell"][24],1);
					   $("#stuoi").val(val[i]["cell"][25]);
					   $("#nhuomsoi").val(val[i]["cell"][31]);
					   $("#papsmear").val(val[i]["cell"][26]);
					   $("#nsctc").val(val[i]["cell"][27]);
					   $("#sieuam").val(val[i]["cell"][28]);
					   $("#khac").val(val[i]["cell"][29]);
					   $("#are_chuandoan").val(val[i]["cell"][30]);
					   $("#denghi").val(val[i]["cell"][32]);
                       _idkhampkhoa=val[i]["cell"][34];
                       var para = val[i]["cell"][33]; 
					   _idpara=val[i]["cell"][38]; 
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
						 //alert(tam);
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
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
/*	$("#panel_main2").css("height",$(window).height()-350+"px");			 
	$("#sub_panel_main").css("height",$("#panel_main").height()+"px");		//n_center	 
	$("#sub_panel_main2").css("height",$("#panel_main").height()+"px");	*/
	
	$("#sub_center").css("height",$("#n_center").height()+"px");			 
	$(".thongtin_tongthe").css("width",$(window).width()/2-19+"px");
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/2-19+"px");
	$("#right_col").css("width",$(window).width()-$("#left_col").width()-10+"px");
	$("#template_title").css("width",$(".ui-layout-center").width()-120+"px");
	$("#panel_main").css("height",$(window).height()-$("#thongtin_tongthe").height()-$("#thongtin_luotkham").height()-50+"px");
	$("#lydo_fieldset").css("height",$(".ui-layout-west").height()*8/100+"px");
	$("#lydokham,#tiensugd").css("height",$(".ui-layout-west").height()*6/100+"px");
	
	$("#tiensubanthan_fieldset").css("height",$(".ui-layout-west").height()*32/100+"px");
	$("#khamlamsang_fieldset").css("height",$(".ui-layout-west").height()-$("#tiensubanthan_fieldset").height()-$("#lydo_fieldset").height()-20+"px");
	//alert($(".ui-layout-west").height()-$("#tiensubanthan_fieldset").height()-$("#lydo_fieldset").height());
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
function create_kinhnguyet(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mẫu'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 240,
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
function create_pptranhthai(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mẫu'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                
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
function create_trieuchungcn(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mẫu', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 90,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowdata = $(this).getRowData(id);
				$('#trieuchungcn').val('');
				$("#trieuchungcn").val(rowdata["NoiDung"]);
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

function create_khamtt(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mẫu', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 89,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowdata = $(this).getRowData(id);
				$('#khamtt').val('');
				$("#khamtt").val(rowdata["NoiDung"]);
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

function create_chuandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mẫu', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 135,
            width: 470,
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
				$("#are_chuandoan").val(rowdata["NoiDung"]);
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

function create_denghitk(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Mẫu', 'Nội dung'],
            colModel: [
                {name: 'Ten', index: 'Ten', hidden: false},
                {name: 'NoiDung', index: 'NoiDung', hidden: false},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 89,
            width: 470,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
            	var rowdata = $(this).getRowData(id);
				$('#denghi').val('');
				$("#denghi").val(rowdata["NoiDung"]);
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
function testa(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)
		//delete tong_luotkham;
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_phukhoa&idbenhnhan="+<?=$_SESSION["ThongTinBenhNhan"]["ID"]?>, 
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
			navigator_load(0,"end");		
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

		//alertObject(datalocalToSend); 
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
		 reloadform(); 
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
	reloadform(); 
	delete window.datalocalToSend;
	tooltip_message("Đã lưu");
})
}

function dis_all(tthai) {
	if(tthai=="An"){
		$('#nguoi_chidinh').attr("disabled",true);
		$('#ngaychidinh').attr("disabled",true);
		$('#lydokham').attr("disabled",true);
		$('#tiensugd').attr("disabled",true);
		$('#combo_kinhnguyet').attr("disabled",true);
		$('#sanphukhoa').attr("disabled",true);
		$('#tiensubenh').attr("disabled",true);
		$('#combo_pptranhthai').attr("disabled",true);
		$('#thuocdangdung').attr("disabled",true);
		$('#tsdiungthuoc').attr("disabled",true);
		$('#combo_trieuchungcn').attr("disabled",true);
		$('#trieuchungcn').attr("disabled",true);
		$('#combo_khamtt').attr("disabled",true);
		$('#khamtt').attr("disabled",true);
		$('#stuoi').attr("disabled",true);
		$('#nhuomsoi').attr("disabled",true);
		$('#papsmear').attr("disabled",true);
		$('#nsctc').attr("disabled",true);
		$('#sieuam').attr("disabled",true);
		$('#khac').attr("disabled",true);
		$('#combo_chuandoan').attr("disabled",true);
		$('#are_chuandoan').attr("disabled",true);
		$('#combo_denghitk').attr("disabled",true);
		$('#denghi').attr("disabled",true);
		$('#add_template').button( {disabled:true});
		$('#add_templatektt').button( {disabled:true});
		$('#add_templatecd').button( {disabled:true});
		$('#add_templatedn').button( {disabled:true});
		$('#add_templatekn').button( {disabled:true});
		$('#add_templatepptt').button( {disabled:true});

		$( "#para1" ).attr("disabled",true);
        $( "#para2" ).attr("disabled",true);
        $( "#para3" ).attr("disabled",true);
        $( "#para4" ).attr("disabled",true);
        $('.combo_kinhnguyet_button').button( {disabled:true});
        $('.combo_pptranhthai_button').button( {disabled:true});
        $('.combo_trieuchungcn_button').button( {disabled:true});
        $('.combo_khamtt_button').button( {disabled:true});
        $('.combo_chuandoan_button').button( {disabled:true});
        $('.combo_denghitk_button').button( {disabled:true});
	}
	else if(tthai=="Hien"){
		$('#nguoi_chidinh').attr("disabled",true);
		$('#ngaychidinh').attr("disabled",true);
		$('#lydokham').attr("disabled",false);
		$('#tiensugd').attr("disabled",false);
		$('#combo_kinhnguyet').attr("disabled",false);
		$('#sanphukhoa').attr("disabled",false);
		$('#tiensubenh').attr("disabled",false);
		$('#combo_pptranhthai').attr("disabled",false);
		$('#thuocdangdung').attr("disabled",false);
		$('#tsdiungthuoc').attr("disabled",false);
		$('#combo_trieuchungcn').attr("disabled",false);
		$('#trieuchungcn').attr("disabled",false);
		$('#combo_khamtt').attr("disabled",false);
		$('#khamtt').attr("disabled",false);
		$('#stuoi').attr("disabled",false);
		$('#nhuomsoi').attr("disabled",false);
		$('#papsmear').attr("disabled",false);
		$('#nsctc').attr("disabled",false);
		$('#sieuam').attr("disabled",false);
		$('#khac').attr("disabled",false);
		$('#combo_chuandoan').attr("disabled",false);
		$('#are_chuandoan').attr("disabled",false);
		$('#combo_denghitk').attr("disabled",false);
		$('#denghi').attr("disabled",false);
		$('#add_template').button( {"disabled":false});
		$('#add_templatektt').button( {"disabled":false});
		$('#add_templatecd').button( {"disabled":false});
		$('#add_templatedn').button( {"disabled":false});
		$('#add_templatekn').button( {"disabled":false});
		$('#add_templatepptt').button( {"disabled":false});
		$( "#para1" ).attr("disabled",false);
        $( "#para2" ).attr("disabled",false);
        $( "#para3" ).attr("disabled",false);
        $( "#para4" ).attr("disabled",false);
        $('.combo_kinhnguyet_button').button( {disabled:false});
        $('.combo_pptranhthai_button').button( {disabled:false});
        $('.combo_trieuchungcn_button').button( {disabled:false});
        $('.combo_khamtt_button').button( {disabled:false});
        $('.combo_chuandoan_button').button( {disabled:false});
        $('.combo_denghitk_button').button( {disabled:false});
	}
}





</script>
 
 
