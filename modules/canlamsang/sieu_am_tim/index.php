
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
	.visibility {
		visibility: hidden;
	}
	.editable {
		width: 300px;
		height: 200px;

		padding: 5px;
		overflow: auto;

		border: 1px solid #327e04;
		box-shadow: 2px 2px 2px 0 #dddddd inset;
		display: inline-block;
		font-family: segoe ui,Tahoma,sans-serif !important;
		font-size: 11px !important;
		padding: 3px;
		resize: none;
	}
	body{
   -moz-user-select: element;
   -khtml-user-select: element;
   -webkit-user-select: element;
   -ms-user-select: element;
   user-select: element;
}

</style>
<body>


	<div class="top_form ui-widget-content" >
		<div style="padding:2px 0px;" class="thongtin_tongthe">
			<div class="patient_info"></div>        
		</div>
		<div class="thongtin_chidinh" style="width:687px!important">
			<div class="form_row">
				<label style="width:90px;text-align:right">Ng?????i ch??? ?????nh:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
				<label style="width:90px;margin-left:10px;text-align:right">Ng?????i th???c hi???n:</label>
				<span class="custom-combobox">
					<input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
				</span> 
				<input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
				<label style="width:128px;text-align:right;margin-left:15px">Bs ch???n ??o??n:</label>
				<span class="custom-combobox">
					<input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
				</span> 
				<input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
				<div style="height:3px"></div>
				<label style="width:90px;text-align:right">Ng??y ch??? ?????nh:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
				<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
				<a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">???? th???c hi???n<span class="ui-icon ui-icon-play"></span></a> 
				<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
				<a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Ho??n t???t<span class="ui-icon ui-icon-check"></span></a>   
			</div>        
		</div>
		<div class="thongtin_luotkham" id="left_col" style="width: 604px;">   
			<div class="thongtin_luotkham_scroll"></div>
			<span class="navigator" >
				<button id="first">b???t ?????u</button>
				<button id="prev">t???i</button>
				<span class="navigator_title"></span>
				<button id="next">lui</button>
				<button id="last">k???t th??c</button> 
			</span>
			<label id="ngay_kham"></label>        
		</div>
		<div class="thongtin_luotkham" id="center_col" style="width: 300px;">
			<div class="thongtin_luotkham_scroll" style="color:blue;font-size:14px"></div>
			<span class="navigator" >
				<button id="first">b???t ?????u</button>
				<button id="prev">t???i</button>
				<span class="navigator_title"></span>
				<button id="next">lui</button>
				<button id="last">k???t th??c</button> 
			</span>
			<label id="ngay_kham"></label>        

		</div>
		<div class="thongtin_luotkham" id="right_col">

			<div style="margin-top: 5px; margin-left:5px;">
				<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label> 
				<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">L??u<span class="ui-icon ui-icon-disk"></span></a> 
				<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">S???a<span class="ui-icon ui-icon-pencil"></span></a>
				<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">B??? qua<span class="ui-icon ui-icon-close"></span></a>
				<a href="#" id="inHinh4D" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px;float: right; ">In m???u A5<span class="ui-icon ui-icon-print"></span></a>	
			</div>
			<div style="margin-top: 10px; margin-left:5px;">

				<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; display:none">????ng<span class="ui-icon ui-icon-trash"></span></a> 
				<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
				<span style="float:right; margin:5px 10px 0 0" id="In_CoChuKy">
					In c?? ch??? k?? <input type="checkbox" checked name="In_ChuKy" value="1"/>
				</span> 	
			</div>
			<div style="margin-top: -9px; margin-left:5px;">
				<a href="#" id='open_form_hentra'>Gi??? h???n tr??? k???t qu???: </a>
				<label id="giohentra" style="color:blue"></label> 	
			</div>
			<div style="margin-top: 0px; margin-left:5px;" >
				<span id="edit_by"><label>S???a b???i:</label>
					<label id="nguoisua" style="color:blue"></label>
					<label id="ngaygiosua" style="color:blue"></label>
				</span>
				<span style="margin-left:60px"><label  for="chonanh">Ch???n ???nh</label><input id="chonanh" type="checkbox"></span>
			</div> 
		</div>

	</div> 

	<div id="panel_main">    

		<div id="image_id" class="ui-widget-content ui-layout-west">
			<iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="B???m ESC ????? up h??nh, double click v??o ???nh ????? x??a ???nh"></iframe>   
		</div>         
		<div class="ui-widget-content  thongtin_thai ui-layout-center ">
			Ch???n m???u
			<input type="text" id="template_title"  style="width:75%">

			<!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">m??? template</button>--> 
			<button id="add_template" style="height:23px;width:23px;margin-left: 25px;">th??m template</button>
			<label style="text-align:left;font-size:12px; margin-top:7px; height:20px; display:inline-block">M?? t???:</label>
			<input type="button" value="X??a" id="xoamota"style="float: right;margin-top: 3px;"/>
			<div class="mota editable" contenteditable="true" id="mota" name="mota" lang='luu'></div>			
		 	   
		</div>
		<div class="ui-widget-content ui-layout-east" id="inner"> 

			<div class="ui-layout-center thongtin_thai"> 
				<label style="text-align:left;font-size:12px; margin-top:7px; height:20px; display:inline-block">K???t lu???n:</label>
				<input type="button" value="X??a" id="xoaketluan"style="float: right;margin-top:2px;"/>
				<textarea lang='luu'id="ketluan" name="ketluan"style="font-size:13px" ></textarea>

			</div>
			<div class="ui-layout-south thongtin_thai">
				<label style="text-align:left;font-size:12px; margin-top:7px; height:20px; display:inline-block">L???i khuy??n:</label>
				<input type="button" value="X??a" id="xoaloikhuyen"style="float: right;margin-top:2px;"/> 
				<textarea id="loikhuyen"name="loikhuyen" lang='luu'style="font-size:13px;" ></textarea>
			</div>

		</div>          
	</div>
	<div id="dialog-form" title="Th??m b???n ghi" style="display:none;">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">M?? t??? c?? r???i,b???n c?? mu???n ghi ???? hay kh??ng? </label>
		</div>
		<div style="text-align: center;">
			<label style="width:90px;text-align:right;ont-size:17px;margin-right: 20px;" >Yes(X??a)</label>
			<label style="width:90px;text-align:right;ont-size:17px">No(Ch??? ch??n th??m)</label>
			<label style="width:90px;text-align:right;ont-size:17px;margin-left: 20px;">Cance(Tho??t)</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px;padding-left: 6px;"/> 
			<input type="button" value="No" id="no" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px;padding-left: 6px;"/> 
			<input type="button" value="Cancel" id="cancel"class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left: 20px; width: 60px;padding-left: 6px;"/>
		</div>
	</div>
	<div id="dialog-form2" title="Th??m b???n ghi" style="display:none">
		<div style="text-align: center;">
			<label style="width:90px;text-align:center;font-size:20px">B???n c?? mu???n x??a kh??ng?</label>
		</div>
		<div style="text-align: center;margin-top:10px">
			<input type="button" value="Yes" id="yes2" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left"style="width: 60px; margin-right: 20px;padding-left: 6px;"/> 
			<input type="button" value="No" id="no2" class="fm-button ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="width: 60px;padding-left: 6px;"/> 
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	var report_code=["SieuAm"];
	var report_name=["Si??u ??m"];
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

	$(document).ready(function() {	 
		image_message();
		
		$('body').bind('keydown', function (e) {
		  if (jwerty.is('ctrl+b',e)) {
				jwerty.key("ctrl+b", false);
				document.execCommand('bold');
		  }else if (jwerty.is('ctrl+i',e)) {
				jwerty.key("ctrl+i", false);
				document.execCommand('italic');
		  }else if (jwerty.is('ctrl+u',e)) {
			  jwerty.key("ctrl+u", false);
				document.execCommand('underline');
		  }else if (jwerty.is('ctrl+alt+r',e)) {
			  jwerty.key("ctrl+alt+r", false);
				document.execCommand('styleWithCSS', false, true);
				document.execCommand('foreColor', false, "red");
		  }else if (jwerty.is('ctrl+alt+b',e)) {
			  jwerty.key("ctrl+alt+b", false);
				document.execCommand('styleWithCSS', false, true);
				document.execCommand('foreColor', false, "blue");
		  }
		});
		

		$("#inHinh4D").click(function(e){
			$("#luu").click();
		  //$("#dialog-form3").dialog("open");
		  print_action="xemin";
		  // alert(window.search_string);
		  dialog_pic_select("Ch???n ???nh",90,"170px","jdshju8789789",window.search_string,"InDonThuoc_Bsy",print_action,"PHI???U SI??U ??M S???N PH??? KHOA 4 CHI???U","4D 0B - GYN ULTRASOUND","B??c s?? SI??U ??M","left",6,"sieuam_kieu2",'<?=$modules?>');
		});


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
			dialog_pic_select("Ch???n ???nh",90,"170px","jdshju8789789",window.search_string,"sieuam",print_action,"PHI???U SI??U ??M DOPPLER M??U T???NG QU??T","GENERAL ULTRASOUND","B??c s?? SI??U ??M","left",3,"sieuam",'<?=$modules?>',"780");	
		}else{
			dialog_pic_select("Ch???n ???nh",90,"170px","jdshju8789789",window.search_string,"sieuam",print_action,"PHI???U SI??U ??M DOPPLER M??U T???NG QU??T","GENERAL ULTRASOUND","B??c s?? SI??U ??M","left",3,"sieuam_khongchuky",'<?=$modules?>',"780");
		}	
		$(".frame_u78787878975f").css("width","793px");


	});
		window.nhanvien_complete=0;
		window.nhanvien1_complete=0;
		window.nhanvien2_complete=0;
		window.search_string="";	
		create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 400, 'Ng?????i th???c hi???n', 'data_nhanvien');
		create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Ng?????i th???c hi???n', 'data_bacsi');
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
			$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam2&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
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
				 goto_kham(id_kham2)			 
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

			$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaisieuam&idbenhnhan="+id_benhnhan, 
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
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Ng?????i th???c hi???n', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);					 
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
		function reloaddata(){
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
				//goto_kham(id_kham2);
			//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Ng?????i th???c hi???n', 'data_DMtemplate&loaikham='+id_loaikham);					 
		//$('.template_title_button').button( 'disable');
		
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
			//$("#mota").val("");
			$("#mota").html();
			$("#ketluan").val("");
			$("#loikhuyen").val("");
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
		lock_viewer(true,"visible");
		kt_trangthai(_id_trangthai);
							//$("#images_viewer")[0].contentWindow.set_status(true);
							//frames['images_viewer'].set_status(true);							
							//$("#images_viewer")[0].contentWindow.set_status(true);
							//document.getElementById("images_viewer").contentWindow.set_status(true);
							//$("#images_viewer").contents().set_status(true);
			  	//$('#sua').button( {disabled:true});
			  	$('#luu').button( {disabled:false});
			  	$('#ketluan').attr("disabled",false);
			  	$('#mota').attr("disabled",false);
			  	$('#loikhuyen').attr("disabled",false);
			  	$('#xoaketluan').button( {disabled:false});
			  	$('#xoaloikhuyen').button( {disabled:false});
			  	$('#xoamota').button( {disabled:false});
			  	$('#open_template').button( {disabled:false});
			  	$( "#template_title" ).attr("disabled",false);
                                //$( "#chuandoan" ).attr("disabled",true);
                                $("#sua").hide();
                                $('#boqua').show();
                                $('.template_title_button').button( {disabled:false});
                         		/*$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		$( "#chuandoan" ).attr("disabled",false);*/
                         		$('#add_template').button( {disabled:false});
                         		window.test="giosuacuoi";
                         		 // alert(test2);
                         		});
	$("#boqua").click(function(){					 
		lock_viewer(false,"hidden");
		$("#sua").show();
		$('#boqua').hide();
		$('#luu').button( {disabled:true});
		$('#ketluan').attr("disabled",true);
		$('#mota').attr("disabled",true);
		$('#loikhuyen').attr("disabled",true);
		$('#xoaketluan').button( {disabled:true});
		$('#xoaloikhuyen').button( {disabled:true});
		$('#xoamota').button( {disabled:true});
		$('#open_template').button( {disabled:true});
		$( "#template_title" ).attr("disabled",true);
                       //$('.chuandoan_button').button( {disabled:true});
                       $("#mota").html(mota5);
                       $("#ketluan").val(ketluan5);
                       $("#loikhuyen").val(loikhuyen5);
                      // $("#nhanvien1").val(nhanvien4);
                      // $("#chuandoan1").val(chuandoan4);
                      $('.template_title_button').button( {disabled:true});
                         		//$('.chuandoan_button').button( {disabled:true});
                         		/*$('.nhanvien_button').button( {disabled:true});
                         		$( "#nhanvien" ).attr("disabled",true);*/
                         		 // $( "#chuandoan" ).attr("disabled",true);
                         		 $('#add_template').button( {disabled:true});
                         		//  setval('#nhanvien','#nhanvien1','#nhan_vien',nhanvien4);
                         		 // setval('#chuandoan','#chuandoan1','#nhan_vien1',chuandoan4);
                         		  // alert(test2);
                         		  kt_trangthai(_id_trangthai);

                         		});
	$("#dathuchien").click(function(){
		window.test2="dathuchien1";
		$("#id_trangthai").html("???? th???c hi???n");
		$('#dathuchien').button( {disabled:true});
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
		_id_trangthai="DaThucHien";
		$('.template_title_button').button( {disabled:true});
		/*$('.chuandoan_button').button( {disabled:false});
		$('.nhanvien_button').button( {disabled:true});
		$( "#nhanvien" ).attr("disabled",true);*/
		$('#add_template').button( {disabled:true});
		$('#boqua').hide();
		$('#sua').show();
		kt_trangthai(_id_trangthai);
		$("#giothuchien").html(gio("current"));
		var giothuchien2= $( "#giothuchien" ).text();
		phancach = "";
		i = 0;
		dataToSend = '{';
		$('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden],div.editable').each(function() {
			var _thisid=$(this).attr("id");
			if ($("#"+_thisid).attr("lang") == "luu") {
				if($("#"+_thisid).attr("contenteditable")=="true"){
					dataToSend += phancach + '"'+ $("#"+_thisid).attr("name") + '":' + JSON.stringify($("#"+_thisid).html());
				}else{
					dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
				}
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
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=dathuchien&hienmaloi=3',dataToSend)
		.done(function( gridData ) {	
			if($.trim(gridData)=='') {
				tooltip_message("???? th???c hi???n");
				emr_thuchienxong(_kham,'','','','');// X???p h??ng chuy???n ph??ng
				reloaddata();   
			}else{
				alert(gridData);
			}
		})
		.fail(function() {
			alert( "error" );
		});

	});
	$("#hoantat").click(function(){
		window.test2="hoantat1";
		$("#id_trangthai").html("???? ho??n t???t");
		$('#dathuchien').button( {disabled:true});
		$('#hoantat').button( {disabled:true});
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
		_id_trangthai="Xong";
		$('.template_title_button').button( {disabled:true});
			/*$('.chuandoan_button').button( {disabled:true});
			$('.nhanvien_button').button( {disabled:true});
			$( "#nhanvien" ).attr("disabled",true);
			$( "#chuandoan" ).attr("disabled",true);*/
			$('#add_template').button( {disabled:true});
			$('#boqua').hide();
			$('#sua').show();
			kt_trangthai(_id_trangthai);
			kt_trangthai(_id_trangthai);
			$("#giothuchien").html(gio("current"));
			var giothuchien2= $( "#giothuchien" ).text();
			$("#giohoantat").html(gio("current"));
			var giohoantat2= $( "#giohoantat" ).text();
			phancach = "";
			i = 0;
			dataToSend = '{';
			$('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden],div.editable').each(function() {
				var _thisid=$(this).attr("id");
				if ($("#"+_thisid).attr("lang") == "luu") {
					if($("#"+_thisid).attr("contenteditable")=="true"){
						dataToSend += phancach + '"'+ $("#"+_thisid).attr("name") + '":' + JSON.stringify($("#"+_thisid).html());
					}else{
						dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
					}
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
				if($.trim(gridData)=='') {
					tooltip_message("???? ho??n t???t");
					reloaddata();   
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
		dialog_add_dm("Danh m???c m???u chu???n ??o??n",width,height,elem,links,load_select1);   
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
			$('#add_template').button( {disabled:true});
			$('#ketluan').attr("disabled",true);
			$('#mota').attr("disabled",true);
			$('#loikhuyen').attr("disabled",true);
			$('#xoaketluan').button( {disabled:true});
			$('#xoaloikhuyen').button( {disabled:true});
			$('#xoamota').button( {disabled:true});
			$('#open_template').button( {disabled:true});
			$( "#template_title" ).attr("disabled",true);
			kt_trangthai(_id_trangthai);
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
				  $('.thongtin_thai,.form_row').find(':input[type=text],select,textarea,input[type=hidden],div.editable').each(function() {
					var _thisid=$(this).attr("id");
					if ($("#"+_thisid).attr("lang") == "luu") {
						if($("#"+_thisid).attr("contenteditable")=="true"){
							dataToSend += phancach + '"'+ $("#"+_thisid).attr("name") + '":' + JSON.stringify($("#"+_thisid).html());
						}else{
							dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value);
						}
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
		//alertObject(dataToSend); 
		if(window.test2=="dathuchien1"){
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luuthuchien&hienmaloi=3',dataToSend)
		.done(function( gridData ) {	 
			if($.trim(gridData)=='') {
				tooltip_message("???? l??u");
				reloaddata();  
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
				tooltip_message("???? l??u");
				reloaddata();  
			}else{
				alert(gridData);
			}
		})
		.fail(function() {
			alert( "error" );
		})
		}     
		else{
		$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luudangkham&hienmaloi=3',dataToSend)
		.done(function( gridData ) {	
			if($.trim(gridData)=='') {
				tooltip_message("???? l??u");
				reloaddata();  
			}else{
				alert(gridData);
			}  
		})
		.fail(function() {
			alert( "error" );
		})
		}

			        //reloaddata();                           
			    });
	phanquyen();

	$("#DM_template").click(function(e) {
		grid_click_status=true;
	});  
			/*e=setTimeout(function(){    
				if(	$('#boqua').css("visibility")=="visible"){
					//alert("");
					$("#images_viewer").contents().find(".delete_image").css("visibility","hidden"); 
				}
			},5000);*/
			


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
	$("#center_col .navigator_title").html("L???n " + (sub_navigator_count+1) +"/"+tong_luotkham);
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
				// $("#id_trangthai").html(tam1_cls[9]);
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}
	$("#left_col .navigator_title").html("L?????t kh??m " + (navigator_count+1) +"/"+_id_luotkham.length);	

}
function gio(inputA){
	var d = new Date();
	var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //ph??t tr??? v??? 1 ch??? s??? n???u b?? h??n m?????i n??n ph???i gh??p 0 v??o
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
				//alert(val[i]["id"]);
				for(i=0;i<val.length;i++){
					tam=val[i]["id"];	
					$("#"+tam).removeClass("sieuam1");
						//alert(val[i]["cell"])			
						var tam1_cls=val[i]["cell"]; 
						tam1=$(this).attr("id");
					//alert(tam);
					if(tam==tam1){	
						//alert(<?=$_SESSION['user']['id_user']?>);
						mota5=val[i]["cell"][6];
						ketluan5=val[i]["cell"][7];
						loikhuyen5 = val[i]["cell"][8];
						$("#nguoi_chidinh").val(val[i]["cell"][4]);
						idluotkham=val[i]["cell"][5]; 
						$("#ngaychidinh").val(val[i]["cell"][2]);
						$("#mota").html(val[i]["cell"][6]);
						$("#ketluan").val(val[i]["cell"][7]);
						$("#loikhuyen").val(val[i]["cell"][8]); 
						tenloaikham=val[i]["cell"][1]; 
                       	//alert(tam);
                       	$("#"+tam).addClass("sieuam1");

                       	setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                       	setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);
                       	nhanvien4=val[i]["cell"][10];
                       	chuandoan4=val[i]["cell"][15];
                       // ma_benhnhan=val[i]["cell"][18];
                       id_loaikham=val[i]["cell"][3];
                       $("#center_col div").html(val[i]["cell"][1]); 	
                       $("#edit_by").removeClass("visibility");
                       _id_trangthai=tam1_cls[9]; 
                       _kham = tam;
                       _id_luotkham2=tam1_cls[5];
                         //alert(_id_luotkham2);
                        // $(".zodi").show();
                        
                        $("#giothuchien").text(val[i]["cell"][16]);                      
                        $("#giohoantat").text(val[i]["cell"][17]);  
                        

                        if(_id_trangthai=="DangCho"){
                        	$("#id_trangthai").html("??ang ch???");
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
                        	$("#id_trangthai").html("???? th???c hi???n");
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
                        	setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                        	window.test2="dathuchien1";
                        }
                        else if(_id_trangthai=="DangKham"){
                        	$("#id_trangthai").html("??ang kh??m");
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
                        	window.test2="dangkham1";
                        }
                        else if(_id_trangthai=="Xong"){
                        	$("#id_trangthai").html("???? ho??n t???t");
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
                        	$('#hoantat').button( {disabled:true});
                        	$('.template_title_button').button( {disabled:true});
                        	$('.chuandoan_button').button( {disabled:true});
                        	$('.nhanvien_button').button( {disabled:true});
                        	$( "#nhanvien" ).attr("disabled",true);
                        	$( "#chuandoan" ).attr("disabled",true);
                        	$('#add_template').button( {disabled:true});
                        	setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][10]);
                        	setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);

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
							else 
								$("#edit_by").addClass("visibility");				
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
				create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Ng?????i th???c hi???n', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
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
	$("#ketluan").css("width",$(".ui-layout-east").width()-8+"px");
	$("#ketluan").css("height",$(".ui-layout-east").height()-$(".ui-layout-south").height()-47+"px");
	$("#loikhuyen").css("width",$(".ui-layout-east").width()-8+"px");
	$("#loikhuyen").css("height",$(".ui-layout-south").height()-40+"px");
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
		window.stt = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Kh??ng load ???????c danh m???c ph??ng ban');}}).responseText;	

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
			colNames:['T??n M???u', 'N???i dung', 'K???t lu???n', 'L???i khuy??n'],
			colModel:[			
			{name:'TenTemplate',index:'TenTemplate'},
			{name:'NoiDung',index:'NoiDung'},			 
			{name:'KetLuan',index:'KetLuan'}, 			
			{name:'LoiKhuyen',index:'LoiKhuyen'}, 

			],
			hidegrid: false,
			gridview: true,
			loadonce: true,
			scroll: false,		 
			modal:true,	 
			rowNum: -1,
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
				
				var mota2=$("#mota").html();
				var ketluan2=$("#ketluan").val();
				var loikhuyen2=$("#loikhuyen").val();
				var rowData = $('#DM_template').getRowData(id);
				if(mota2!=""){
					$( "#dialog-form" ).dialog( "open" );
				}
				else{
					$("#mota").html(rowData["NoiDung"]);
					$("#ketluan").val(rowData["KetLuan"]);
					$("#loikhuyen").val(rowData["LoiKhuyen"]);
				}
				if($("#yes").click(function(){
					$("#mota").html(rowData["NoiDung"]);
					$("#ketluan").val(rowData["KetLuan"]);
					$("#loikhuyen").val(rowData["LoiKhuyen"]);	
					$( "#dialog-form" ).dialog( "close" );

				})
					);
					if($("#no").click(function(){
						mota4=$.trim(rowData["NoiDung"]);
						ketluan3=$.trim(rowData["KetLuan"]);
						loikhuyen3=$.trim(rowData["LoiKhuyen"]);
						mota2=mota2+"\n"+mota4;
						if(ketluan2=="")
						{	
							ketluan2=ketluan3;
						}
						else
						{
							ketluan2=ketluan2+"\n"+ketluan3;
						}
						if(loikhuyen2=="")
						{	
							loikhuyen2=loikhuyen3;
						}
						else
						{
							loikhuyen2=loikhuyen2+"\n"+loikhuyen3;
						} 


						$("#mota").html(mota2);
						$("#ketluan").val(ketluan2);
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
			/*$("#DM_template_container").css("top",$("#template_title").offset().top+25+"px");
			$("#DM_template_container").css("left",$("#template_title").offset().left+"px");	
			$("#DM_template_container").click(function(e) {
				 e.stopPropagation();                
				});   */			 
			},	  
		//caption: "Danh m???c thu???c"
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
		colNames: ['T??n', 'H??? v?? t??n', 'B??? ph???n'],
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
		colNames: ['T??n', 'H??? v?? t??n'],
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
	window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Kh??ng load ???????c danh m???c nh??n vi??n');}}).responseText;	
	$("#rowed3").setColProp('ID_Template', { editoptions: { value: xaphuong} });
	$('#ID_Template').empty();
	create_select("#ID_Template",xaphuong);
}
function load_complete(){
	if((nhanvien1_complete==0)||(nhanvien2_complete==0)||(ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	}

	if(id_kham2!='0'){
		navigator_load("end","");
	}else{
		navigator_load("end","first");
	}
	//create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Ng?????i th???c hi???n', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
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


