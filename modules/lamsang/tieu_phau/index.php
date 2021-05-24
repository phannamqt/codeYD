
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
	 #open_template,#add_template,#add_templatecd{
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
		height:165px;
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
		height:80px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:55px;
	}	
	#center_col .thongtin_luotkham_scroll {
		height: 50px;
		margin-left: 5px;
		margin-top: 2px;
		overflow: hidden;
		width: 96%;
		margin-bottom:3px;
		line-height:14px;
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
	}.sieuam1{
		background-color: #b3ffb3;
	}
	
#right_col .fm-button-icon-left {
    padding-left: 0.6em;
}
</style>
<body>
 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Người CĐ</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
          
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày chỉ định:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a> 
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a>   
        </div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="width: 390.333px; height:92px">   
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
    <div class="thongtin_luotkham" id="center_col" style="width: 190px !important; height:92px">
    	<div class=" " style="color:blue;font-size:14px"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    	 
    </div>

        <div class="thongtin_luotkham" id="right_col" style="width:269px; height:92px;">
    	 
    	<div style="margin-top: 2px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>
    		 	
    	</div>
    	<div style="margin-top: 10px;">

    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">In hình<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    	<span id="In_CoChuKy" style="float:right;margin:5px 7px 0 0">
                    	<input type="checkbox"  checked />
            			<label>In có chữ ký</label>
        </span>	 	
    	</div>
    	<div style="margin-top: -9px; display:none">
	    	<label>Giờ hẹn trả KQ:</label>
	    	<label id="giohentra" style="color:blue"></label> 	
    	</div>
    	<div style="margin-top: 5px" id="edit_by">
	    	<!-- <label>Sửa bởi:</label>
	    	<label id="nguoisua" style="color:blue"></label>
	    	<label id="ngaygiosua" style="color:blue"></label> -->
    	</div> 
    </div>
    <div style="height:80px; width:431px;height: 92px;display: inline-block;" class="thongtin_luotkham thongtin_kipmo">    
<table width="100%" border="0"  cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">GMHS Chính&nbsp;&nbsp;&nbsp; </td>
    <td><span class="custom-combobox">
          <input id="gaymechinh" name="gaymechinh" lang='luu'  type="text" style="width:70px;">
        </span></td>
    <td align="right">PTV chính&nbsp;&nbsp;&nbsp; </td>
    <td style="width: 115px"><span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  lang='luu'  type="text" style="width:70px;">
            </span> 
            <!--<input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >--></td>
  </tr>
  <tr>
    <td align="right">Phụ 1&nbsp;&nbsp;&nbsp; </td>
    <td><span class="custom-combobox">
          <input id="gaymephu1" name="gaymephu1" lang='luu'  type="text" style="width:70px;">
        </span></td>
    <td align="right">Phụ 1&nbsp;&nbsp;&nbsp; </td>
    <td><span class="custom-combobox">
        <input id="ptvphu1" name="ptvphu1" lang='luu'  type="text" style="width:70px;">
        </span></td>
  </tr>
  <tr>
    <td align="right">Phụ 2&nbsp;&nbsp;&nbsp; </td>
    <td><span class="custom-combobox">
          <input id="gaymephu2" name="gaymephu2" lang='luu'  type="text" style="width:70px;">
        </span></td>
    <td align="right">Phụ 2&nbsp;&nbsp;&nbsp; </td>
    <td><input id="ptvphu2" name="ptvphu2" lang='luu'  type="text" style="width:70px;"></td>
  </tr>
  <tr>
    <td align="right">Phụ 3&nbsp;&nbsp;&nbsp; </td>
    <td><span class="custom-combobox">
          <input id="gaymephu3" name="gaymephu3" lang='luu'  type="text" style="width:70px;">
        </span></td>
    <td align="right">Phụ 3&nbsp;&nbsp;&nbsp; </td>
    <td><span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span> 
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" ></td>
  </tr>
</table>

    </div>

    
 </div> 
 
 <div id="panel_main">    
        <div id="image_id" class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>  
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
            Chọn mẫu
            <input type="text" id="template_title"  style="width:75%">
            <input id="template_title1"  name="template_title1" type="text" style="display:none" placeholder="--Chọn mẫu--" >
            <!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">mở template</button>--> 
            <button id="add_template" style="height:23px;width:23px;margin-left: 25px;">thêm template</button>
            <label style="width:90px;text-align:left;font-size:14px">Mô tả:</label>
    	 	<input type="button" value="Xóa" id="xoamota"style="float: right;margin-top: 3px;"/>      
            <textarea id="mota" name="mota"  lang='luu'></textarea>    	   
        </div>
       
        <div class="ui-widget-content ui-layout-east" id="inner"> 
           <!--loi khuyen -->
            <div class="ui-layout-center thongtin_thai">
            
            <label style="text-align:left;font-size:14px">Chẩn đoán:</label>
            <input type="text" id="template_titlecd"  style="width:75%">
            <input id="template_titlecd"  name="template_titlecd" type="text" style="display:none"  placeholder="--Chọn mẫu--" >
            <button id="add_templatecd" style="height:23px;width:23px;margin-left: -3px;">thêm template</button>
            <textarea id="are_chuandoan" name="are_chuandoan"  lang='luu' style="width:99%; height: 80%; font-size:13px!important"></textarea> 
            </div>
           <!--  ket luan -->
            <div class="ui-layout-south thongtin_thai"> 
            	<label style="text-align:left;font-size:14px">Dặn dò:</label>
    	 		<input type="button" value="Xóa" id="xoadando"style="float: right;margin-top:2px;"/>
                <textarea lang='luu'id="dando" name="dando"style="font-size:13px!important" ></textarea>

            </div>

        </div>          
	</div>
	<div id="dialog-form" title="Thêm bản ghi" style="display:none;">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:16px">Mô tả có rồi,bạn có muốn ghi đè hay không? </label>
		</div>
		<div style="text-align: center;">
			<label style="width:90px;text-align:right;font-size:17px;margin-right: 20px;" >Yes(Xóa)</label>
			<label style="width:90px;text-align:right;font-size:17px">No(Chỉ chèn thêm)</label>
			<label style="width:90px;text-align:right;font-size:17px;margin-left: 20px;">Cance(Thoát)</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px;padding-left: 6px;"/> 
			<input type="button" value="No" id="no" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px;padding-left: 6px;"/> 
			<input type="button" value="Cancel" id="cancel"class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left: 20px; width: 60px;padding-left: 6px;"/>
		</div>
	</div>
	<div id="dialog-form1" title="Thêm bản ghi" style="display:none;">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:16px">Dặn dò có rồi,bạn có muốn ghi đè hay không? </label>
		</div>
		<div style="text-align: center;">
			<label style="width:90px;text-align:right;font-size:17px;margin-right: 20px;" >Yes(Xóa)</label>
			<label style="width:90px;text-align:right;font-size:17px">No(Chỉ chèn thêm)</label>
			<label style="width:90px;text-align:right;font-size:17px;margin-left: 20px;">Cance(Thoát)</label>
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
var report_code=["tieuphau_hinh"];
var report_name=["tieuphau_hinh"];
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

$(document).ready(function() {
	
$.cookie("in_status", "print_preview"); 
$("#xemin").click(function(e){
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=tieuphau&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'ThuThuat');
		}else{
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=tieuphau_khongchuky&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'ThuThuat');
			}
		$(".frame_u78787878975f").css("width","793px");
	});
window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;	
	window.nhanvien3_complete=0;
	
	create_combobox('#template_titlecd', '#template_titlecd1', ".data_combo_chuandoan", "#data_combo_chuandoan", create_chuandoan, 500, 400, '', 'data_cbchuandoan',0);
	create_combobox_new('#nhanvien',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#chuandoan',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#ptvphu1',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#ptvphu2',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#gaymechinh',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#gaymephu1',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#gaymephu2',create_nhanvien,'bw','','data_nhanvien',0);
	create_combobox_new('#gaymephu3',create_nhanvien,'bw','','data_nhanvien',0);
	$('#sua').button();
	$('#luu').button();
	$('#xemin').button();
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
        
	$("#panel_main").css("height",$(window).height()-161+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	//==================================
	$.cookie("in_status", "print_preview"); 
openform_shortcutkey();
//dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=soituoi&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'WetMount');
image_message();
$("#dong").click(function(e){	
			/*if(_id_trangthai=="DangKham"|| _id_trangthai=="DangCho"){
			  		
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
                         		  $( "#are_chuandoan" ).attr("disabled",true);
                         		  $('#add_template').button( {disabled:true});
                         		 // setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		  
                         		  $('#ketluan').attr("disabled",true);
			                      $('#mota').attr("disabled",true);
			                       $('#dando').attr("disabled",true);
			                       $('#xoaketluan').button( {disabled:true});
			                       $('#xoaloikhuyen').button( {disabled:true});
			                       $('#xoamota').button( {disabled:true});
			                       $('#open_template').button( {disabled:true});
			                       $( "#template_title" ).attr("disabled",true);
			                       if(window.test=="giosuacuoi"){
			                      	$("#edit_by").removeClass("visibility");
			                      	var nguoisua2=$("#nhanvien1").val();
			                      	//alert(nguoisua2);
			                      	$("#nguoisua").html(nguoisua2);
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
			        var tamthoilathe= stt.split(";");
						
						for (i = 0; i <tamthoilathe.length; i++) 
						{
							check=tamthoilathe[i].split(":");
							if($("#nguoisua").text()==check[0]){ //alert(check[0]);
						 		$("#nguoisua").text(check[1]);}
						 	
							
						}
			        dataToSend += phancach + '"id_kham":"' + _kham + '"';
			        //alert(_id_trangthai);
			        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
			       
			        dataToSend += phancach + '"nguoisua":"' +nguoisua2+ '"';
			        dataToSend += phancach + '"ngaygiosua":"' +ngaygiosua2+ '"';
			        dataToSend += '}';
			        //alert(dataToSend);
			        dataToSend = jQuery.parseJSON(dataToSend);
			       alertObject(dataToSend); 
			       if(window.test2=="dathuchien1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");
			                                              test();	 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }
			         if(window.test2=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu");
			                                              test(); 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }     
			          if(window.test2=="dangkham1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu"); 
			                                             test();    
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }*/
		if($('#chonanh').is( ":checked" )) {
			print_action="chonanh";
			
		} else {
			print_action="xemin";
			//dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		}
		if($('#In_CoChuKy input:checkbox').is( ":checked" )){
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"tieuphau_hinh",print_action,"","","","left",3,"tieuphau_hinh",'<?=$modules?>');
		}else{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"tieuphau_hinh",print_action,"","","","left",3,"tieuphau_hinh_khongchuky",'<?=$modules?>');
			}
		$(".frame_u78787878975f").css("width","793px");
		 


	 
	});

//===========================================
	if(id_kham2!="0"){
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
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
				//_id_luotkham=$.unique(_id_luotkham).reverse();
				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham);
				load_complete();		
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

	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
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
		
		
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+id_benhnhan, 
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
			navigator_load(0,id_kham3);			
		});		
	});	}
	
	$(window).resize(function() {		 
		$("#panel_main").css("height",$(window).height()-161+"px");	
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
        $( "#add_templatecd" ).button({
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
				//$("#dando").val("");
				//$("#chandoan").val("");
		});
		$("#xoadando").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoakl';
				//$("#dando").val("");
		});
		$("#xoachandoan").click(function(){
			$("#dialog-form2").dialog("open");
			window.oper='xoalk';
				//$("#chandoan").val("");
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
					$("#dando").val("");
					$("#chandoan").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoakl'){
					$("#dando").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
				if(window.oper=='xoalk'){
					$("#chandoan").val("");
					$( "#dialog-form2" ).dialog( "close" );
				}
			});
			  $("#no2").click(function(){
			  	$( "#dialog-form2" ).dialog( "close" );
			  });
			  
			  $("#sua").click(function(){
			  	//$('#sua').button( {disabled:true});
                                $('#luu').button( {disabled:false});
                         		$("#sua").hide();
                         		$('#boqua').show();
                         		$('.template_title_button').button( {disabled:false});
                         		/*$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);*/
                         		  dis_all("Hien");
								  kt_trangthai(_id_trangthai);
                         		  window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					$("#sua").show();
                    $('#boqua').hide();
                    $('#luu').button( {disabled:true});
                   
                    $('.template_title_button').button( {disabled:true});
                   
                    dis_all("An");
                     kt_trangthai(_id_trangthai);    		  
                         		 
				});
			  $("#dathuchien").click(function(){
			  	$("#id_trangthai").html("Đã thực hiện");
	                $('#dathuchien').button( {disabled:true});
	                $('#sua').button( {disabled:false});
	                $('#luu').button( {disabled:true});
	                          
	                _id_trangthai="DaThucHien";
	         		
					kt_trangthai(_id_trangthai);
	         		$('#boqua').hide();
	         		$('#sua').show();
	         		//dis_all("An");
                         		 
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
								dataToSend += phancach + '"ptvphu1":' + JSON.stringify($("#ptvphu1_hidden").val());
								dataToSend += phancach + '"ptvphu2":' + JSON.stringify($("#ptvphu2_hidden").val());
								dataToSend += phancach + '"chuandoan1":' + JSON.stringify($("#chuandoan_hidden").val());
							dataToSend += phancach + '"nguoithuchien":' + JSON.stringify($("#nhanvien_hidden").val());
							
								
								dataToSend += phancach + '"gaymechinh":' + JSON.stringify($("#gaymechinh_hidden").val());
								dataToSend += phancach + '"gaymephu1":' + JSON.stringify($("#gaymephu1_hidden").val());
								dataToSend += phancach + '"gaymephu2":' + JSON.stringify($("#gaymephu2_hidden").val());
								dataToSend += phancach + '"gaymephu3":' + JSON.stringify($("#gaymephu3_hidden").val());
						        dataToSend += phancach + '"id_kham":"' + _kham + '"';
						        //alert(_id_trangthai);
						        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
						        
						         dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
						         dataToSend += phancach + '"id_luotkham":"' +_id_luotkham2+ '"';
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
			           // test();                                  
			  });
			  $("#hoantat").click(function(){
                    $("#id_trangthai").html("Đã hoàn tất");
                 	$('#dathuchien').button( {disabled:true});
                 	$('#hoantat').button( {disabled:true});
                  	$('#sua').button( {disabled:false});
                    $('#luu').button( {disabled:true});
                    dis_all("An");
                	_id_trangthai="Xong";
             		
	         		$('#boqua').hide();
	         		$('#sua').show();
	         		dis_all("An");
					kt_trangthai(_id_trangthai);
                         		  //========
                         		  
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
								
								dataToSend += phancach + '"ptvphu1":' + JSON.stringify($("#ptvphu1_hidden").val());
								dataToSend += phancach + '"ptvphu2":' + JSON.stringify($("#ptvphu2_hidden").val());
								dataToSend += phancach + '"chuandoan1":' + JSON.stringify($("#chuandoan_hidden").val());
								dataToSend += phancach + '"nguoithuchien":' + JSON.stringify($("#nhanvien_hidden").val());
								
								dataToSend += phancach + '"gaymechinh":' + JSON.stringify($("#gaymechinh_hidden").val());
								dataToSend += phancach + '"gaymephu1":' + JSON.stringify($("#gaymephu1_hidden").val());
								dataToSend += phancach + '"gaymephu2":' + JSON.stringify($("#gaymephu2_hidden").val());
								dataToSend += phancach + '"gaymephu3":' + JSON.stringify($("#gaymephu3_hidden").val());
						        dataToSend += phancach + '"id_kham":"' + _kham + '"';
						        //alert(_id_trangthai);
						        dataToSend += phancach + '"id_trangthai":"' + _id_trangthai + '"';
						        
						         dataToSend += phancach + '"giothuchien":"' +giothuchien2+ '"';
						         dataToSend += phancach + '"giohoantat":"' +giohoantat2+ '"';
						        dataToSend += '}';
						        //alert(dataToSend);
						        dataToSend = jQuery.parseJSON(dataToSend);
						       //alertObject(dataToSend); 
						        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             //alert(gridData);	 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            });
			                                            tooltip_message("Đã hoàn tất");
			        // test();                                     
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
             		$( "#nhanvien" ).attr("disabled",true);
             		$( "#chuandoan" ).attr("disabled",true);
                    //dis_all("An");
									//====
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
								}
									//======
			                       if(window.test=="giosuacuoi"){
			                      	$("#edit_by").show();
			                      	var nguoisua2=$("#nhanvien1").val();
			                      	//alert(nguoisua2);
			                      	$("#nguoisua").html(nguoisua2);
									$("#ngaygiosua").html(gio("current"));
			                      }}  
			                      
									var ngaygiosua2=$("#ngaygiosua").text();
			        phancach = "";
			        i = 0;
					//alert($("#chuandoan_hidden").val());
			        dataToSend = '{';
			        $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden]').each(function() {

			            if ($(this).attr("lang") == "luu") {
			              
			                dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;
			              
			            }
			            phancach = ",";

			        });
			        
					dataToSend += phancach + '"ptvphu1":' + JSON.stringify($("#ptvphu1_hidden").val());
					dataToSend += phancach + '"ptvphu2":' + JSON.stringify($("#ptvphu2_hidden").val());
					dataToSend += phancach + '"chuandoan1":' + JSON.stringify($("#chuandoan_hidden").val());
					dataToSend += phancach + '"nguoithuchien":' + JSON.stringify($("#nhanvien_hidden").val());
					
					dataToSend += phancach + '"gaymechinh":' + JSON.stringify($("#gaymechinh_hidden").val());
					dataToSend += phancach + '"gaymephu1":' + JSON.stringify($("#gaymephu1_hidden").val());
					dataToSend += phancach + '"gaymephu2":' + JSON.stringify($("#gaymephu2_hidden").val());
					dataToSend += phancach + '"gaymephu3":' + JSON.stringify($("#gaymephu3_hidden").val());
					
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
			                                             tooltip_message("Đã lưu");	 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }
			         if(window.test2=="hoantat1"){
			         	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuhoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu"); 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }     
			          if(window.test2=="dangkham1"){
			       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             tooltip_message("Đã lưu"); 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })
			         }

			        // test();                           
			    });
			 	phanquyen();
				image_message();
				
				$("#DM_template").click(function(e) {
					grid_click_status=true;
			    });
	
	
});
function edit_images(tam){
 tam=tam.split(";");      
 elem="6754353898787675"; 
 dialog_add_dm('Chỉnh sửa hình ảnh',95,95,elem,'pages.php?module=images_control&view=images_edit&id_form=45&search_string='+tam[1]+"&tenthumuc="+tam[2],refresh_images);  
}
/*function refresh_images(){
  $("#images_viewer").attr("src",$("#images_viewer").attr("src"));
}*/
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
				if(_flag=="click"){				 	 
				var ii=tong_luotkham-1,i=0;y=_id_luotkham.length;
						 
				for(i=_id_kham.length-1;i>=0;i--){	
				var abc=i+1;
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
					}
				}
				 	
			}
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
				tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[3]+'">'+tam1_cls[1]+"<br \>" +tam1_cls[5]+'</div>';				
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
					$("#"+tam).removeClass("sieuam1");	
					if(tam==tam1){	
					$("#"+tam).addClass("sieuam1");
					mota5=val[i]["cell"][6];
					dando5=val[i]["cell"][7];
					chandoan5 = val[i]["cell"][8];
					id_kham3=val[i]["id"];
					$("#nguoi_chidinh").val(val[i]["cell"][4]);
					$("#ngaychidinh").val(val[i]["cell"][2]);
					$("#mota").val(val[i]["cell"][6]);
					$("#dando").val(val[i]["cell"][7]);
					$("#are_chuandoan").val(val[i]["cell"][8]); 
					tenloaikham=val[i]["cell"][1]; 
					parent.postMessage('changetitle;<?=$view?>-'+id_benhnhan+';'+tenloaikham+';'+$('#panel_tenbn').text() , '*')
					
					//alert($.trim(val[i]["cell"][19]));
					 
					 
					// setval_new('#chuandoan',val[i]["cell"][15]);
					setval('#template_titlecd','#template_titlecd1','#data_combo_chuandoan');
					nhanvien4=val[i]["cell"][10];
					chuandoan4=val[i]["cell"][15];
					// ma_benhnhan=val[i]["cell"][18];
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
					//alert(val[i]["cell"][19]);
					if($.trim(val[i]["cell"][19])==0){
						val[i]["cell"][19]='';
						
					 }
					if($.trim(val[i]["cell"][23])==0){
						val[i]["cell"][23]='';
						
					 }
					 if($.trim(val[i]["cell"][20])==0){
						val[i]["cell"][20]='';
						
					 }
					 if($.trim(val[i]["cell"][21])==0){
						val[i]["cell"][21]='';
						
					 }
					 if($.trim(val[i]["cell"][22])==0){
						val[i]["cell"][22]='';
						
					 }
					 if($.trim(val[i]["cell"][24])==0){
						val[i]["cell"][24]='';
						
					 }
					 if($.trim(val[i]["cell"][10])==0){
						val[i]["cell"][10]='';
					 } 
					 
					 if($.trim(val[i]["cell"][15])==0){
						 val[i]["cell"][15]='';
					 } 
					 
                    setval_new('#ptvphu1',val[i]["cell"][19]);
					setval_new('#ptvphu2',val[i]["cell"][23]);
					setval_new('#gaymechinh',val[i]["cell"][20]);
					setval_new('#gaymephu1',val[i]["cell"][21]);
					setval_new('#gaymephu2',val[i]["cell"][22]);
					setval_new('#gaymephu3',val[i]["cell"][24]);
					 setval_new('#nhanvien',val[i]["cell"][10]);
					  setval_new('#chuandoan',val[i]["cell"][15]);
					

                    if(_id_trangthai=="DangCho"){
						$("#id_trangthai").html("Đang chờ");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#hoantat').button( {disabled:false});
						$('#dathuchien').button( {disabled:false});
						$( "#chuandoan" ).attr("disabled",false);
						$( "#nhanvien" ).attr("disabled",false);
						$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:false});
						$('#chandoan').attr("disabled",false);
						
						dis_all("Hien");
						window.test2="dangkham1";
                    }
                    else if(_id_trangthai=="DaThucHien"){
						$("#id_trangthai").html("Đã thực hiện");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#hoantat').button( {disabled:false});
						$('#dathuchien').button( {disabled:true});
						/*$('.chuandoan_button').button( {disabled:false});
						$('.nhanvien_button').button( {disabled:true});
						$('#chandoan').attr("disabled", "disabled");*/
						$('.template_title_button').button( {disabled:true});
						/*$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",false);*/
						dis_all("Hien");
						window.test2="dathuchien1";
						window.test3="dathuchien";

                    }
                    else if(_id_trangthai=="DangKham"){
						$("#id_trangthai").html("Đang khám");
						$('#sua').button( {disabled:true});
						$('#luu').button( {disabled:false});
						$('#xoadando').button( {disabled:false});
						$('#xoachandoan').button( {disabled:false});
						$('#dando').attr("disabled",false);
						$('#mota').attr("disabled",false);
						$('#chandoan').attr("disabled",false);
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
						
						
						window.test2="dangkham1";
                    }else if(_id_trangthai=="Xong"){
						$("#id_trangthai").html("Đã hoàn tất");
						$('#sua').button( {disabled:false});
						$('#luu').button( {disabled:true});
						$('#dathuchien').button( {disabled:true});
						$('#hoantat').button( {disabled:true});
						/*$('.chuandoan_button').button( {disabled:true});
						$('.nhanvien_button').button( {disabled:true});
						$( "#nhanvien" ).attr("disabled",true);
						$( "#chuandoan" ).attr("disabled",true);*/
						dis_all("An");
						
						window.test2="hoantat1";
						window.test3="hoantat";

                    }
                    $("#giohentra").html(tam1_cls[11]);
					if(val[i]["cell"][12]!=null){
						$("#nguoisua").text(val[i]["cell"][12]);
						$("#ngaygiosua").text(val[i]["cell"][13]);
					}else $("#edit_by").hide();					
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
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	//$("#left_col").css("width",$(window).width()/3+135+"px");
	//$("#center_col").css("width",$(window).width()/3-205+"px");
	//$("#right_col").css("width",$(window).width()/3+56+"px");
	$("#mota").css("width",$(".ui-layout-center").width()-8+"px");
	$("#mota").css("height",$(".ui-layout-center").height()-64+"px");
	$("#dando").css("width",$(".ui-layout-east").width()-8+"px");
	$("#dando").css("height",$(".ui-layout-east").height()-$(".ui-layout-south").height()-47+"px");
	$("#chandoan").css("width",$(".ui-layout-east").width()-8+"px");
	$("#chandoan").css("height",$(".ui-layout-south").height()-40+"px");
	//alert($(".ui-layout-center").height());
	$("#template_title").css("width",$(".ui-layout-center").width()-120+"px");
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
		,	east: {
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
}
 function load_image(search_string){    
      _folder_name=$.ajax({url: 'pages.php?module=web_services&function=get_folder_name&action=index&id_form=111&id_loaikham='+id_loaikham, async: false, success: function(data, result) {                           
      }}).responseText; 
      _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
      //alert(_folder_name);
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
function create_DM_template_grid(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
		colNames:['Tên Mẫu', 'Nội dung', 'Kết luận', 'Lời khuyên'],
		colModel:[			
			{name:'TenTemplate',index:'TenTemplate',width:'28%'},
			{name:'NoiDung',index:'NoiDung',width:'30%'},				
			{name:'chandoan',index:'chandoan',width:'37%'},		 
			{name:'dando',index:'dando',width:'5%'},  
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 100000,
		rowList:[],
		width:800,
		pager: '#prowed_DM_template',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(50)).toFixed(0),
		//width: (($(window).width() / 100 * parseFloat(50)).toFixed(0)),
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		sortorder: "desc",
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){


			if(jQuery('#DM_template').data('clicked')) {
				
			  var mota2=$("#mota").val();
						var dando2=$("#dando").val();
						var chandoan2=$("#chandoan").val();
			                        var rowData = $('#DM_template').getRowData(id);
						  if(mota2!=""){
						  	$( "#dialog-form" ).dialog( "open" );
						  }
			                          else{
			                             $("#mota").val(rowData["NoiDung"]);
			                             $("#dando").val(rowData["dando"]);
			                             $("#chandoan").val(rowData["chandoan"]);
			                          }
						  if($("#yes").click(function(){
								$("#mota").val(rowData["NoiDung"]);
								$("#dando").val(rowData["dando"]);
								$("#chandoan").val(rowData["chandoan"]);	
								$( "#dialog-form" ).dialog( "close" );
			                                        
							})
						  	);
			                           if($("#no").click(function(){
			                              mota4=$.trim(rowData["NoiDung"]);
			                              dando3=$.trim(rowData["dando"]);
			                              chandoan3=$.trim(rowData["chandoan"]);
			                              mota2=mota2+"\n"+mota4;
			                              if(dando2=="")
			                              {	
			                              	dando2=dando3;
			                              }
			                             else
			                             {
			                             	dando2=dando2+"\n"+dando3;
			                             }
			                              if(chandoan2=="")
			                              {	
			                              	chandoan2=chandoan3;
			                              }
			                             else
			                             {
			                             	 chandoan2=chandoan2+"\n"+chandoan3;
			                             } 
			                               
			                              
			                               $("#mota").val(mota2);
			                               $("#dando").val(dando2);
			                               $("#chandoan").val(chandoan2);
			                               $( "#dialog-form" ).dialog( "close" );
			                           }));
			} else {
			    //run function2
			}
           
		},
		ondblClickRow: function (id, rowIndex, columnIndex){
		
			 
			
			 $("#DM_template_container").fadeOut(200);		
 		},
		loadComplete: function(data) {		
		},	
	});	

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {"onEnter":function( id ) {
	 	
		} } );	
		
}
function getCount2(word, arr) {
    var i = arr.length, // var to loop over
        j = 0; // number of hits
    while (i) if (arr[--i] === word) ++j; // count occurance
    return j;
}  
$('#inner').layout({
            resizerClass: 'ui-state-default'
              ,north: {
                resizable: true
                        , size: "0%"
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
                        , size: "70%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , south: {
                resizable: true
                        , size: "30%"
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

function create_chuandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên thông thường', 'Tên nhóm bệnh','Phổ biến'],
            colModel: [
                //{name: 'TenBenhThongThuong', index: 'TenBenhThongThuong', hidden: false},
                {name: 'TenBenhThongThuong', index: 'TenBenhThongThuong', hidden: false,width:'60%'},
                {name: 'TenNhomBenh', index: 'TenNhomBenh',align:'center', hidden: false,width:'20%'},
                {name: 'IsPopular', index: 'IsPopular', hidden: false,stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:0"},width:'20%'},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200000,
            rowList: [],
            height: 285,
            width: 405,
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
				if(window.nhanvien3_complete==0){
				
				checkbox_search('gs_IsPopular','#data_combo_chuandoan')
				}         
				
				window.nhanvien3_complete++;


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
	create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
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
            		//var mota2=$("#mota").val();
					//var dando2=$("#dando").val();
			   	    var rowData = $('#DM_template').getRowData($('#DM_template').jqGrid('getGridParam', 'selrow'));
								$("#mota").val(rowData["NoiDung"]);
								$( "#dialog-form" ).dialog( "close" );
								$( "#dialog-form1" ).dialog( "open" );
			},
			"No": function() {
				var mota2=$("#mota").val();
			   	    var rowData = $('#DM_template').getRowData($('#DM_template').jqGrid('getGridParam', 'selrow'));
			
			    mota4=$.trim(rowData["NoiDung"]);
	                              mota2=mota2+"\n"+mota4;
	                               $("#mota").val(mota2);
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
					//var dando2=$("#dando").val();
			   	    var rowData = $('#DM_template').getRowData($('#DM_template').jqGrid('getGridParam', 'selrow'));
								
								$("#dando").val(rowData["chandoan"]);	
								$( "#dialog-form1" ).dialog( "close" );
			},
			"No": function() {
				
					var dando2=$("#dando").val();
			   	    var rowData = $('#DM_template').getRowData($('#DM_template').jqGrid('getGridParam', 'selrow'));
			
	                              dando3=$.trim(rowData["chandoan"]);
	                             
	                              if(dando2=="")
	                              {	
	                              	dando2=dando3;
	                              }
	                             else
	                             {
	                             	 dando2=dando2+"\n"+dando3;
	                             } 
	                              
	                               $("#dando").val(dando2);
	                               $( "#dialog-form1" ).dialog( "close" );
			},
			"Cancel": function() {
			
			  $( this ).dialog( "close" );
			},
           	}
            });
function dis_all(tthai) {
	if(tthai=="An"){
		$('#nguoi_chidinh').attr("disabled",true);
		$('#ngaychidinh').attr("disabled",true);
		$('#template_title').attr("disabled",true);
		$('#add_template').button( {disabled:true});
		$('#xoamota').button( {disabled:true});
		$('#mota').attr( "disabled",true);
		$('#are_chuandoan').attr( "disabled",true);
		$('#template_titlecd').attr("disabled",true);
		$('#add_templatecd').button( {disabled:true});
		$('.template_titlecd_button').button( {disabled:true});
		$('#xoadando').button( {disabled:true});
		$('#dando').attr("disabled",true);
		/*create_combobox_disable("#ptvphu1");
		create_combobox_disable("#ptvphu2");
		create_combobox_disable("#gaymechinh");
		create_combobox_disable("#gaymephu1");
		create_combobox_disable("#gaymephu2");
		create_combobox_disable("#gaymephu3");
		
		create_combobox_disable("#chuandoan");
		create_combobox_disable("#nhanvien");*/
	}else if(tthai=="Hien"){
		$('#nguoi_chidinh').attr("disabled",true);
		$('#ngaychidinh').attr("disabled",true);
		$('#template_title').attr("disabled",false);
		$('#add_template').button( {disabled:false});
		$('#xoamota').button( {disabled:false});
		$('#mota').attr( "disabled",false);
		$('#template_titlecd').attr("disabled",false);
		$('#add_templatecd').button( {disabled:false});
		$('.template_titlecd_button').button( {disabled:false});
		$('#are_chuandoan').attr("disabled",false);
		$('#xoadando').button( {disabled:false});
		$('#dando').attr("disabled",false);
		/*create_combobox_enable("#ptvphu1");
		create_combobox_enable("#ptvphu2");
		create_combobox_enable("#gaymechinh");
		create_combobox_enable("#gaymephu1");
		create_combobox_enable("#gaymephu2");
		create_combobox_enable("#gaymephu3");
		
		create_combobox_enable("#chuandoan");
		create_combobox_enable("#nhanvien");*/
	}
	
}
function kt_trangthai(id_thai){
	//alert(_id_trangthai);
	if(_id_trangthai=="Xong"){
		/*$('.chuandoan_button').button( {disabled:true});
		$('.nhanvien_button').button( {disabled:true});*/
		/*$( "#nhanvien" ).attr("disabled",true);
		$( "#chuandoan" ).attr("disabled",true);*/
		 $( "#dathuchien" ).attr("disabled",true);
		  $( "#hoantat" ).attr("disabled",true);
		  /*$( "#ptvphu1" ).attr("disabled",true);
		  $( "#ptvphu2" ).attr("disabled",true);
		  $( "#gaymechinh" ).attr("disabled",true);
		  $( "#gaymephu1" ).attr("disabled",true);
		  $( "#gaymephu2" ).attr("disabled",true);
		   $( "#gaymephu3" ).attr("disabled",true);
		  $('.ptvphu1_button').button( {disabled:true});
		  $('.ptvphu2_button').button( {disabled:true});
		   $('.gaymechinh_button').button( {disabled:true});
		  $('.gaymephu1_button').button( {disabled:true});
		  $('.gaymephu2_button').button( {disabled:true});
		  $('.gaymephu3_button').button( {disabled:true});*/
	}else if(_id_trangthai=="DaThucHien"){
		/*$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);*/
		 $( "#dathuchien" ).attr("disabled",true);
		 /*$( "#ptvphu1" ).attr("disabled",false);
		  $( "#ptvphu2" ).attr("disabled",false);
		  $( "#gaymechinh" ).attr("disabled",false);
		  $( "#gaymephu1" ).attr("disabled",false);
		  $( "#gaymephu2" ).attr("disabled",false);
		  $( "#gaymephu3" ).attr("disabled",false);
		  $('.ptvphu1_button').button( {disabled:false});
		  $('.ptvphu2_button').button( {disabled:false});
		   $('.gaymechinh_button').button( {disabled:false});
		  $('.gaymephu1_button').button( {disabled:false});
		  $('.gaymephu2_button').button( {disabled:false});
		  $('.gaymephu3_button').button( {disabled:false});*/
	}else{
		$('.nhanvien_button').button( {disabled:false});
		$( "#nhanvien" ).attr("disabled",false);
		$( "#chuandoan" ).attr("disabled",false);
		$('.chuandoan_button').button( {disabled:false});
		 $( "#ptvphu1" ).attr("disabled",false);
		  $( "#ptvphu2" ).attr("disabled",false);
		  $( "#gaymechinh" ).attr("disabled",false);
		  $( "#gaymephu1" ).attr("disabled",false);
		  $( "#gaymephu2" ).attr("disabled",false);
		   $( "#gaymephu3" ).attr("disabled",false);
		  $('.ptvphu1_button').button( {disabled:false});
		  $('.ptvphu2_button').button( {disabled:false});
		   $('.gaymechinh_button').button( {disabled:false});
		  $('.gaymephu1_button').button( {disabled:false});
		  $('.gaymephu2_button').button( {disabled:false});
		   $('.gaymephu3_button').button( {disabled:false});
	}
	}
</script>
 
 
