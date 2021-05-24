
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
    </div>
    <div class="thongtin_luotkham" id="center_col" style="width: 300px;">
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
    	<div style="margin-top: 2px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a> 
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>	 	
    	</div>
    	<div style="margin-top: 10px;">
    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;display:none ">Đóng<span class="ui-icon ui-icon-trash"></span></a> 
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
        <span style="float:right; margin:5px 10px 0 0" id="In_CoChuKy">
        	In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/>
        </span>	 	
    	</div>
    	<div style="margin-top: -9px">
	    	<a href="#" id='open_form_hentra'>Giờ hẹn trả kết quả: </a>
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

        <div class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>   
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
            Chọn mẫu
            <input type="text" id="template_title"  style="width:75%">
            <input id="template_title1"  name="template_title1" type="text" style="display:none" >
            <!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">mở template</button>--> 
            <button id="add_template" style="height:23px;width:23px;margin-left: 25px;">thêm template</button>
            <label style="width:90px;text-align:left;font-size:14px">Mô tả:</label>
    	 	<input type="button" value="Xóa" id="xoamota"style="float: right;margin-top: 3px;"/>      
            <textarea id="mota" name="mota"  lang='luu'></textarea>    	   
        </div>
        <div class="ui-widget-content ui-layout-east" id="inner" > 
            
            <div class=" thongtin_thai">
            	<label style="text-align:left;font-size:14px">Lời khuyên:</label>
     			<input type="button" value="Xóa" id="xoaloikhuyen"style="float: right;margin-top:2px;"/> 
                <textarea id="loikhuyen"name="loikhuyen" lang='luu'style="font-size:13px" ></textarea>
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
var report_code=["WetMount"];
var report_name=["WetMount"];
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
var nhanvien_control;
var id_kham3;
var tenloaikham;
var idluotkham;
var chuky = 1;
number_textbox("#para1");
number_textbox("#para2");
number_textbox("#para3");
number_textbox("#para4");
$(document).ready(function() {	
$.cookie("in_status", "print_preview"); 
openform_shortcutkey();
//dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=soituoi&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham+"&type=report&id_form=10",'WetMount');
image_message();
$("#xemin").click(function(e){	
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
                         		  $('#add_template').button( {disabled:true});
                         		 // setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		  
                         		  $('#ketluan').attr("disabled",true);
			                      $('#mota').attr("disabled",true);
			                       $('#loikhuyen').attr("disabled",true);
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
			         }
		if($('#chonanh').is( ":checked" )) {
			print_action="chonanh";
			
		} else {
			print_action="xemin";
			//dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		}
		if($('#In_CoChuKy input:checkbox').is( ":checked" ))
		{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"WetMount",print_action,"PHIẾU NỘI SOI DẠ DÀY TÁ TRÀNG TRUYỀN HÌNH","VIDEO GASTRO - DOUDENAL SCOPY","BÁC SỸ NỘI SOI","left",3,"soituoi",'<?=$modules?>');
		}else{
			dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"WetMount",print_action,"PHIẾU NỘI SOI DẠ DÀY TÁ TRÀNG TRUYỀN HÌNH","VIDEO GASTRO - DOUDENAL SCOPY","BÁC SỸ NỘI SOI","left",3,"soituoi_khongchuky",'<?=$modules?>');
			}
		$(".frame_u78787878975f").css("width","793px");
		 
	 
	});
/*$("#xemin").click(function(e){	
	$("#luu").click();	
		if($('#chonanh').is( ":checked" )) {
			print_action="chonanh";
			
		} else {
			print_action="xemin";
			//dialog_report("In",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		}
		dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"WetMount",print_action,"PHIẾU NỘI SOI DẠ DÀY TÁ TRÀNG TRUYỀN HÌNH","VIDEO GASTRO - DOUDENAL SCOPY","BÁC SỸ NỘI SOI","left",3,"soituoi",'<?=$modules?>');		
		$(".frame_u78787878975f").css("width","793px");
		 
	 
	});*/
		
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
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;	
		create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien');
	create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi');
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
        
	$("#panel_main").css("height",$(window).height()-151+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control();
	
	
	if(id_kham2!="0"){
		
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisoituoi&idbenhnhan="+id_benhnhan, 
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
				}
				 else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
				 	$('.template_title_button').button( 'enable');
				 }
			});		
		});
}
else{
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisoituoi&idbenhnhan="+id_benhnhan, 
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
		//data_luotkham.splice(0,1)
		data_luotkham = null;
		//alertObject(data_luotkham);
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisoituoi&idbenhnhan="+id_benhnhan, 
		function( data ) {
			data_luotkham=data;
			
	 //	alertObject(data_luotkham);
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
			navigator_load(0,id_kham3);;
			
		
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
					$("#loikhuyen").val("");
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
                                $('#luu').button( {disabled:false});
                                $('#mota').attr("disabled",false);
                                $('#loikhuyen').attr("disabled",false);
                                $('#xoaloikhuyen').button( {disabled:false});
                                $('#xoamota').button( {disabled:false});
                                $('#open_template').button( {disabled:false});
                                $( "#template_title" ).attr("disabled",false);
                                $("#sua").hide();
                         		$('#boqua').show();
                         		$('.template_title_button').button( {disabled:false});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
                         		  $('#add_template').button( {disabled:false});
                         		  window.test="giosuacuoi";
			  });
				$("#boqua").click(function(){
					lock_viewer(false,"hidden");
					$("#sua").show();
                    $('#boqua').hide();
                     $('#luu').button( {disabled:true});
                      $('#mota').attr("disabled",true);
                       $('#loikhuyen').attr("disabled",true);
                       $('#xoaloikhuyen').button( {disabled:true});
                       $('#xoamota').button( {disabled:true});
                       $('#open_template').button( {disabled:true});
                       $( "#template_title" ).attr("disabled",true);
                      $("#mota").val(mota5);
                       $("#loikhuyen").val(loikhuyen5);
                       $("#nhanvien1").val(nhanvien4);
                       $("#chuandoan1").val(chuandoan4);
                       $('.template_title_button').button( {disabled:true});
                         		//$('.chuandoan_button').button( {disabled:true});
                         		$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);
                         		 // $( "#chuandoan" ).attr("disabled",true);
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
                          $('#xoaloikhuyen').button( {disabled:true});
                            $('#mota').attr("disabled", "disabled");
                             $('#loikhuyen').attr("disabled", "disabled");
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
			                                            test();
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            });
			                                            tooltip_message("Đã thực hiện");
			                    emr_thuchienxong(_kham,'','','','');// Xếp hàng chuyển phòng
			            test();                                  
			  });
			  $("#hoantat").click(function(){
			  	$("#id_trangthai").html("Đã hoàn tất");
                 $('#dathuchien').button( {disabled:true});
                 $('#hoantat').button( {disabled:true});
                  $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                          $('#xoamota').button( {disabled:true});
                          $('#xoaloikhuyen').button( {disabled:true});
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
						       //alertObject(dataToSend); 
						        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {	
			                                             test(); 
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            });
			                                            tooltip_message("Đã hoàn tất");
			         test();                                     
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
                         		  $('#add_template').button( {disabled:true});
                         		 // setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		  //setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		   $( "#para1" ).attr("disabled",true);
                         		  $( "#para2" ).attr("disabled",true);
                         		  $( "#para3" ).attr("disabled",true);
                         		  $( "#para4" ).attr("disabled",true);
			                      $('#mota').attr("disabled",true);
			                       $('#loikhuyen').attr("disabled",true);
			                       $('#xoaloikhuyen').button( {disabled:true});
			                       $('#xoamota').button( {disabled:true});
			                       $('#open_template').button( {disabled:true});
			                       $( "#template_title" ).attr("disabled",true);
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
			                                            //alert();
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
						mota5=val[i]["cell"][6];
						loikhuyen5 = val[i]["cell"][8];
						  $("#nguoi_chidinh").val(val[i]["cell"][4]);
						  idluotkham = val[i]["cell"][5];
						 $("#ngaychidinh").val(val[i]["cell"][2]);
						$("#mota").val(val[i]["cell"][6]);
                        $("#loikhuyen").val(val[i]["cell"][8]); 
                       // $("#nhanvien").val(val[i]["cell"][14]);
                       $("#"+tam).addClass("sieuam1");
					   id_kham3=val[i]["id"];
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
                        nhanvien4=val[i]["cell"][10];
                        chuandoan4=val[i]["cell"][15];
                        tenloaikham=val[i]["cell"][1]; 
						id_loaikham=val[i]["cell"][3];
						//if(id_kham2=="0"){
						   parent.postMessage('changetitle;<?=$view?>-'+id_benhnhan+';'+tenloaikham+';'+$('#panel_tenbn').text() , '*')
					   //}else{
						 // parent.postMessage('changetitle;<?=$view?>-'+id_kham2+';'+tenloaikham+';'+$('.profile_outer:first').text() , '*')
					   //}
						$("#center_col div").html(val[i]["cell"][1]); 	
						$("#edit_by").show();
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
                          $('#xoaloikhuyen').button( {disabled:false});
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
								  window.test2="dangkham1";
								  
                    }
                    else if(_id_trangthai=="DaThucHien"){
                    	$("#id_trangthai").html("Đã thực hiện");
                    	 $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                          $('#xoamota').button( {disabled:true});
                          $('#xoaloikhuyen').button( {disabled:true});
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
                         		window.test2="dathuchien1";
                         		 setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                    }
                    else if(_id_trangthai=="DangKham"){
                    	$("#id_trangthai").html("Đang khám");
                    		 $('#sua').button( {disabled:true});
                    		 $('#luu').button( {disabled:false});
                          $('#xoaloikhuyen').button( {disabled:false});
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
                    }
                    else if(_id_trangthai=="Xong"){
						if(<?=$_SESSION['user']['id_user']?>==val[i]["cell"][15]){
							$('#sua').button( {disabled:false});
						}
						else{
							$('#sua').button( {disabled:true});
						}
                    	$("#id_trangthai").html("Đã hoàn tất");
                    	// $('#sua').button( {disabled:false});
                    	  $('#luu').button( {disabled:true});
                          $('#xoamota').button( {disabled:true});
                          $('#xoaloikhuyen').button( {disabled:true});
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
                         		  window.test2="hoantat1";
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
				//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
				window.search_string=$(this).attr("alt");
				load_image($(this).attr("alt"));	

		});
	});
}
function resize_control(){
	//$(window).height()thongtin_chidinh thongtin_tongthe
	//alert($(".thongtin_tongthe").width())
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/3+135+"px");
	$("#center_col").css("width",$(window).width()/3-205+"px");
	$("#right_col").css("width",$(window).width()/3+56+"px");
	$("#mota").css("width",$(".ui-layout-center").width()-8+"px");
	$("#mota").css("height",$(".ui-layout-center").height()-64+"px");
	$("#loikhuyen").css("width",$(".ui-layout-east").width()-8+"px");
	$("#loikhuyen").css("height",$(".ui-layout-east").height()-40+"px");
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

function create_DM_template_grid(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
		colNames:['Tên Mẫu', 'Nội dung',  'Lời khuyên'],
		colModel:[			
			{name:'TenTemplate',index:'TenTemplate'},
			{name:'NoiDung',index:'NoiDung'},			
			{name:'LoiKhuyen',index:'LoiKhuyen'}, 
				 	 	 
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 2000000,
		rowList:[],
		pager: '#prowed_DM_template',
		sortname: 'ID_Thuoc',
		height:($(window).height() / 100 * parseFloat(50)).toFixed(0),
		width: (($(window).width() / 100 * parseFloat(50)).toFixed(0)),
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
						var loikhuyen2=$("#loikhuyen").val();
			                        var rowData = $('#DM_template').getRowData(id);
						  if(mota2!=""){
						  	$( "#dialog-form" ).dialog( "open" );
						  }
			                          else{
			                             $("#mota").val(rowData["NoiDung"]);
			                             $("#loikhuyen").val(rowData["LoiKhuyen"]);
			                          }
						  if($("#yes").click(function(){
								$("#mota").val(rowData["NoiDung"]);
								$("#loikhuyen").val(rowData["LoiKhuyen"]);	
								$( "#dialog-form" ).dialog( "close" );
			                                        
							})
						  	);
			                           if($("#no").click(function(){
			                              mota4=$.trim(rowData["NoiDung"]);
			                              loikhuyen3=$.trim(rowData["LoiKhuyen"]);
			                              mota2=mota2+"\n"+mota4;
			                              
			                              if(loikhuyen2=="")
			                              {	
			                              	loikhuyen2=loikhuyen3;
			                              }
			                             else
			                             {
			                             	 loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
			                             } 
			                               
			                              
			                               $("#mota").val(mota2);
			                               $("#loikhuyen").val(loikhuyen2);
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
			window.nhanvien_complete=1;			 
		},	  
		//caption: "Danh mục thuốc"
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


function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	navigator_load("end","first");
	create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
}
</script>
 
 
