
<?php
	if(isset($_GET["idbenhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["idbenhnhan"];
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


	if(isset($_GET["idkham"])){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".$_GET["idkham"];
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
		/*background-color: #E8FA69;*/
		 background-color: #FFF;
		font-size: 12px!important;
		width: 98%!important;
		color: red;
	}
	.visibility {
    visibility: hidden;
	}

</style>
<body>


 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>
    </div>
    <div class="thongtin_chidinh" style="width:687px!important">
 		<div class="form_row">
        	<label style="width:90px;text-align:right">Lượt tạo bởi:</label><input lang='luu' id="nguoi_chidinh"name="nguoi_chidinh"style="width:100px" type="text"disabled>
            <label style="width:90px;margin-left:10px;text-align:right">Người thực hiện:</label>
            <span class="custom-combobox">
                    <input id="nhanvien" name="nhanvien"  type="text" style="width:70px;">
            </span>
            <input id="nhanvien1"  name="nguoithuchien" type="text" lang='luu' style="display:none" >
            <!-- <label style="width:128px;text-align:right;margin-left:15px">Bs chẩn đoán:</label> -->
            <!-- <span class="custom-combobox">
                    <input id="chuandoan" name="chuandoan"  type="text" style="width:70px;">
            </span> -->
            <!-- <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" > -->
            <div style="height:3px"></div>
			<label style="width:90px;text-align:right">Ngày khám:</label><input id="ngaychidinh"name="ngaychidinh"lang='luu'style="width:100px" type="text"disabled >
			<label id="giothuchien"  name="giothuchien" type="text" lang='luu'class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
            <a href="#" id="dathuchien" class="	 ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;  margin-bottom:1px; ">Đã thực hiện<span class="ui-icon ui-icon-play"></span></a>
     		<label id="giohoantat"  name="giohoantat" type="text" lang='luu' class="thongtin_thai zodi"style="width: 90px;margin-left: 10px;"></label>
     		<!-- <a href="#" id="hoantat" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:80px;  margin-bottom:1px; ">Hoàn tất<span class="ui-icon ui-icon-check"></span></a> -->
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

    <div class="thongtin_luotkham" id="right_col">

    	<div style="margin-top: 5px; margin-left:5px;">
    	<label id="id_trangthai"class="thongtin_thai" lang="luu" type="text" name="id_trangthai"style="color:red;font-size:14px"></label>
    	<a href="#" id="luu" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Lưu<span class="ui-icon ui-icon-disk"></span></a>
    	<a href="#" id="sua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right; ">Sửa<span class="ui-icon ui-icon-pencil"></span></a>
    	<a href="#" id="boqua" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;">Bỏ qua<span class="ui-icon ui-icon-close"></span></a>

    	</div>
    	<div style="margin-top: 10px; margin-left:5px;">

    	<a href="#" id="dong" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px;width:64px;  margin-bottom:1px;float: right;display:none ">Đóng<span class="ui-icon ui-icon-trash"></span></a>
    	<a href="#" id="xemin" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:0px; width:64px; margin-bottom:1px;float: right; ">Xem in<span class="ui-icon ui-icon-print"></span></a>
    	<span style="float:right; margin:5px 10px 0 0" id="In_CoChuKy">
        	In có chữ ký <input type="checkbox" checked name="In_ChuKy" value="1"/>
        </span>
    	</div>
    	<!-- <div style="margin-top: -9px; margin-left:5px;">
	    	<a href="#" id='open_form_hentra'>Giờ hẹn trả kết quả: </a>
	    	<label id="giohentra" style="color:blue"></label>
    	</div> -->
    	<div style="margin-top: 0px; margin-left:5px;" >
	    	<span id="edit_by" style=" visibility: hidden;"><label>Sửa bởi:</label>
	    		<label id="nguoisua" style="color:blue"></label>
	    		<label id="ngaygiosua" style="color:blue"></label>
	    	</span>
            <span style="margin-left:60px"><label  for="chonanh">Chọn ảnh</label><input id="chonanh" type="checkbox"></span>
    	</div>
    </div>

 </div>


 <div id="panel_main">

        <div id="image_id" class="ui-widget-content ui-layout-west">
            <iframe id="images_viewer"  style="border:none;width:100%;height:100%; overflow:visible;" title="Bấm ESC để up hình, double click vào ảnh để xóa ảnh"></iframe>
        </div>
        <div class="ui-widget-content  thongtin_thai ui-layout-center ">
           <!--  Chọn mẫu
            <input type="text" id="template_title"  style="width:75%"> -->

            <!--<button id="open_template"style="height:23px;width:23px; margin-left: -3px;">mở template</button>-->
            <!-- <button id="add_template" style="height:23px;width:23px;margin-left: 25px;">thêm template</button> -->
            <label style="text-align:left;font-size:12px; margin-top:7px; height:20px; display:inline-block">Lý do khám:</label>
    	 	<input type="button" value="Xóa" id="xoamota"style="float: right;margin-top: 3px;"/>
            <textarea id="mota" name="mota"  lang='luu'></textarea>
        </div>
        <div class="ui-widget-content ui-layout-east" id="inner">

            <div class="ui-layout-center thongtin_thai">
            	<label style="text-align:left;font-size:12px; margin-top:7px; height:20px; display:inline-block">Ghi chú</label>
    	 		<input type="button" value="Xóa" id="xoaketluan"style="float: right;margin-top:2px;"/>
                <textarea lang='luu'id="ketluan" name="ketluan"style="font-size:13px" ></textarea>

            </div>
            <div class="ui-layout-south thongtin_thai">
            	<label style="text-align:left;font-size:12px; margin-top:7px; height:20px; display:inline-block">Lời khuyên:</label>
     			<input type="button" value="Xóa" id="xoaloikhuyen"style="float: right;margin-top:2px;"/>
                <textarea id="loikhuyen"name="loikhuyen" lang='luu'style="font-size:13px;" ></textarea>
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
var report_code=["SieuAm"];
var report_name=["Siêu âm"];
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
	$("#open_form_hentra").click(function(e){
					   $.post('resource.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
					  elem=1 + Math.floor(Math.random() * 1000000000);
					   width=90;
						  height=90;
					  var folder= data.split(';');
					  var links='resource.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+"&idluotkham="+idluotkham;
						dialog_add_dm("",width,height,elem,links);
				  		})

					 }) ;
	$("#xemin").click(function(e){
		$("#luu").click();
		if($('#chonanh').is( ":checked" )) {
			print_action="chonanh";

		} else {
			print_action="xemin";
			//dialog_report("In",90,90,"u78787878975f","resource.php?module=report&view=canlamsang&action=sieuam&header=left&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham);
		}
		//alert(window.search_string)
		dialog_pic_select("Chọn ảnh",90,"170px","jdshju8789789",window.search_string,"XacDinhNhanThan",print_action,"PHIẾU SIÊU ÂM DOPPLER MÀU TỔNG QUÁT","GENERAL ULTRASOUND","BÁC SỸ SIÊU ÂM","left",3,"XacDinhNhanThan",'<?=$modules?>',"780");
		$(".frame_u78787878975f").css("width","793px");

	});
	window.nhanvien_complete=0;
	window.nhanvien1_complete=0;
	window.nhanvien2_complete=0;
	window.search_string="";
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
	openform_shortcutkey();
	$.get( "resource.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
	  $( ".patient_info" ).html( data );

	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");
	  ma_benhnhan=$('.profile_container:nth-child(4) .texts').text() ;

	});

	$("#panel_main").css("height",$(window).height()-151+"px");
	$("#panel_main").fadeIn(1000);
	create_layout();
	resize_control();


	//B1: đổ dữ liệu
	if(id_kham2!="0"){//
//mở  từ  form xếp hàng nên xác định được id_kham
//phanquyen();

		$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xdnhanthan&idbenhnhan="+id_benhnhan,
			function( data ) {
				data_luotkham=data;


			var tam1_cls="";
			$.each( data, function( key, val ) {
				for(i=0;i<val.length;i++){

					var tam1_cls=val[i]["cell"];

					_id_luotkham.push(tam1_cls[0]);
					_id_loaikham.push(tam1_cls[0]);
					_id_luotkham_non_unique.push(tam1_cls[0]);
					_id_kham.push(val[i]["id"]);


				}

				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham);

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
			$("#last").click();
		});
		
}
else{
	// mở từ menu CLS lấy từ form tìm kiếm

	$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xdnhanthan&idbenhnhan="+id_benhnhan,
		function( data ) {
			data_luotkham=data;
		var tam1_cls="";
		$.each( data, function( key, val ) {

			//đưa tất cả vào mảng
			for(i=0;i<val.length;i++){

				var tam1_cls=val[i]["cell"];

				_id_luotkham.push(tam1_cls[0]);
				_id_loaikham.push(tam1_cls[0]);
				_id_luotkham_non_unique.push(tam1_cls[0]);
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
		$("#last").click();
	});
}
//B2: phân quyền


//các funtion
	function test(){
		_id_luotkham.splice(0, _id_luotkham.length-1)
		_id_loaikham.splice(0, _id_loaikham.length-1)
		_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
		_id_kham.splice(0, _id_kham.length-1)

		$.getJSON( "resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_xdnhanthan&idbenhnhan="+id_benhnhan,
			function( data ) {
			data_luotkham=data;

			var tam1_cls="";
			$.each( data, function( key, val ) {
				for(i=0;i<val.length;i++){

				var tam1_cls=val[i]["cell"];

				_id_luotkham.push(tam1_cls[0]);
				_id_loaikham.push(tam1_cls[0]);
				_id_luotkham_non_unique.push(tam1_cls[0]);
				_id_kham.push(val[i]["id"]);

			}

			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);


		});
	});	}

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
					$("#mota").val("");
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

                                $('#luu').button( {disabled:false});
                                $('#ketluan').attr("disabled",false);
                                $('#mota').attr("disabled",false);
                                $('#loikhuyen').attr("disabled",false);
                                $('#xoaketluan').button( {disabled:false});
                                $('#xoaloikhuyen').button( {disabled:false});
                                $('#xoamota').button( {disabled:false});
                                $('#open_template').button( {disabled:false});
                                $( "#template_title" ).attr("disabled",false);
                                $( "#chuandoan" ).attr("disabled",true);
                                $("#sua").hide();
                         		$('#boqua').show();
                         		$('.template_title_button').button( {disabled:false});
                         		$('.chuandoan_button').button( {disabled:false});
                         		$('.nhanvien_button').button( {disabled:false});
                         		$( "#nhanvien" ).attr("disabled",false);
                         		  $( "#chuandoan" ).attr("disabled",false);
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
                       $('.chuandoan_button').button( {disabled:true});
                     // $("#mota").val(mota5);
                      // $("#ketluan").val(ketluan5);
                      // $("#loikhuyen").val(loikhuyen5);
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
                         		  // alert(test2);

				});
			  $("#dathuchien").click(function(){
				_id_trangthai="DaThucHien";
				savePara();
			  	$("#id_trangthai").html("Đã thực hiện");
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
			  	$('.template_title_button').button( {disabled:true});
			  	$('.chuandoan_button').button( {disabled:false});
			  	$('.nhanvien_button').button( {disabled:true});
			  	$( "#nhanvien" ).attr("disabled",true);
			  	$('#add_template').button( {disabled:true});
			  	$('#boqua').hide();
			  	$('#sua').show();
			  });
function savePara()
{
	//alert(_id_trangthai);
  dataToSend = '{';
  phancach = ",";
	dataToSend+= '"id_xacdinhnhanthan":' + JSON.stringify($.trim(_kham));
	dataToSend+=phancach+ '"id_trangthai":' + JSON.stringify($.trim(_id_trangthai));
	dataToSend+= phancach + '"lydo":' + JSON.stringify($.trim($("#mota").val()));
	dataToSend+= phancach + '"nguoithuchien":' + JSON.stringify($.trim($("#nhanvien1").val()));
	dataToSend += '}';

	dataToSend = jQuery.parseJSON(dataToSend);
	alertObject(dataToSend);

			       $.post('resource.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {
			                                             tooltip_message("Đã lưu");
			                                              test();
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            })


			        test();
}

	$('#luu').click(function (){
		savePara();
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
		$('#ketluan').attr("disabled",true);
		$('#mota').attr("disabled",true);
		$('#loikhuyen').attr("disabled",true);
		$('#xoaketluan').button( {disabled:true});
		$('#xoaloikhuyen').button( {disabled:true});
		$('#xoamota').button( {disabled:true});
		$('#open_template').button( {disabled:true});
		$( "#template_title" ).attr("disabled",true);
			    });




phanquyen();

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
				if(_flag=="click"){
				var ii=tong_luotkham-1,i=0;y=_id_luotkham.length;

				//console.log(_id_kham)

				for(i=_id_kham.length-1;i>=0;i--){
				var abc=i+1;

					if(i!=_id_kham.length-1){

						if(_id_luotkham_non_unique[i]!=_id_luotkham_non_unique[abc]){
							y--;

						}
					}
					if(_id_loaikham[i]==id_loaikham){


						if(ii==sub_navigator_count){



								 navigator_load((y-(navigator_count+1)),"");

								 $('#'+_id_kham[i]).click();

							break;
						}
						ii--;

					}
				}


			}
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
			
			

			var tam1_cls=val[i]["cell"];
			var cg=tam1_cls[10];
		
					if(_id_luotkham[navigator_count]==tam1_cls[0]){

						tam_cls+= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[0]+'">'+'Mã thẻ BHYT '+tam1_cls[9]+"<br \>" 
						+'Hạn sử dụng từ '+tam1_cls[10]+' đến '+tam1_cls[11]+'</div>';
						$("#ngaychidinh").html(tam1_cls[4]);

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

//các cột dữ liệu được đổ vào function này
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) {
				$('#boqua').hide();
				$('#sua').show();
				for(i=0;i<val.length;i++){

					alertObject(val);
						tam=val[i]["id"];
						$("#"+tam).removeClass("sieuam1");

					 var tam1_cls=val[i]["cell"];
					tam1=$(this).attr("id");

					if(tam==tam1){


						 idluotkham=val[i]["cell"][0];
						 _id_luotkham2=tam1_cls[0];
						 id_loaikham=val[i]["cell"][0];

						 $("#mota").val(val[i]["cell"][1]);
						 _id_trangthai=tam1_cls[2];
						 $("#giothuchien").val(val[i]["cell"][4]);
						 $("#ngaychidinh").val(val[i]["cell"][6]);
						 tenloaikham=val[i]["cell"][6];
						 $("#nguoi_chidinh").val(val[i]["cell"][7]);
						 $('#ketluan').val(val[i]["cell"][8]);
                       	$("#"+tam).addClass("sieuam1");
                        setval('#nhanvien','#nhanvien1','#nhan_vien',val[i]["cell"][3]);
						$("#center_col div").html(val[i]["cell"][3]);


                         _kham = tam;



                    if(_id_trangthai=="DangCho"){
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
                         		  window.test2=="dangkham1";
                    }
                    else if(_id_trangthai=="DaThucHien"){
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
                         		 setval('#chuandoan','#chuandoan1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
                         		window.test2="dathuchien1";
                    }
                    else if(_id_trangthai=="DangKham"){
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
                         		  window.test2="dangkham1";
                    }
                    else if(_id_trangthai=="Xong"){
                    	$("#id_trangthai").html("Đã hoàn tất");
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
                        //setval('#chuandoan','#chuandoan1','#nhan_vien1',val[i]["cell"][15]);

                         		 // window.test2="hoantat1";
                    }

                   // $("#giohentra").html(tam1_cls[11]);

					}
				}
				$("#edit_by").addClass("visibility");
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
				create_combobox('#template_title', '', ".DM_template", "#DM_template", create_DM_template_grid, 500, 400, 'Người thực hiện', 'data_DMtemplate&hienmaloi=123&loaikham='+id_loaikham);
				window.search_string=$(this).attr("alt");
				load_image($(this).attr("alt"));
		});
	});
}

function resize_control(){

	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
	$("#left_col").css("width",$(window).width()/3+24+"px");
	//$("#center_col").css("width",$(window).width()/3-205+"px");
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
      _folder_name='HinhBenhNhan';
	  _folder_name=$.trim(_folder_name)+"//"+ma_benhnhan;
	  $("#images_viewer").attr("src","resource.php?module=images_control&view=non_dicom_viewer&id_form=61&tenthumuc="+_folder_name+"&search_string="+search_string);
	  $('#DM_template').jqGrid('setGridParam', {url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_DMtemplate&loaikham='+id_loaikham,datatype:'json'}) .trigger('reloadGrid');
}
function load_select(){
window.stt = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;

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

		sortorder: "desc",
		serializeRowData: function (postdata) {
			//$("#rowed3").trigger("reloadGrid");
			//return postdata;
		},
		onSelectRow: function(id){


			if(jQuery('#DM_template').data('clicked')) {

			  var mota2=$("#mota").val();
						var ketluan2=$("#ketluan").val();
						var loikhuyen2=$("#loikhuyen").val();
			                        var rowData = $('#DM_template').getRowData(id);
						  if(mota2!=""){
						  	$( "#dialog-form" ).dialog( "open" );
						  }
			                          else{
			                             $("#mota").val(rowData["NoiDung"]);
			                             $("#ketluan").val(rowData["KetLuan"]);
			                             $("#loikhuyen").val(rowData["LoiKhuyen"]);
			                          }
						  if($("#yes").click(function(){
								$("#mota").val(rowData["NoiDung"]);
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


			                               $("#mota").val(mota2);
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

//Layout
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
           	}});

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
	window.xaphuong = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;
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

}


function goto_kham(id_kham){

for(var i=0; i<data_luotkham['rows'].length;i++){

	if(id_kham==data_luotkham['rows'][i]['id']){
		id_luotkham_hentai=data_luotkham['rows'][i]['cell'][0]
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
</script>

