<!--Người viết: Trần Trương Chính-->
<?php
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	};
?>


 
<style>
 	#gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
		 margin-left:4px;
		 margin-top:5px;
		 box-shadow:0px 0px 10px #a0a0a0;
		 border:1px solid #919191;	
	 }
	
	 .ui-widget-overlay {
		opacity:0.01;
		filter: alpha(opacity=1); 
		-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";	
		/*overlay trong suot*/	 
	 }
	 .hours{
		 display:inline-block;
		 font:14px segoe ui, Tahoma, sans-serif;
		 height:100%;
		 vertical-align:top;		  
		 color:#000;
		 width:50%;
		 font-weight:bold;
		 text-align:right;
		 text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6) !important;	 	 
	 }	 
	 .minutes{
		 display:inline-block;		 
		 height:100%;
		 vertical-align:top;
		 color:#000;
		/* border-bottom:1px solid #1e8bc4;*/
		 width:30%;
		 text-align:left;
		 text-indent:-3px;	
		 margin-left:6px;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6) !important;	 
	 }
	 .minutes1{		 
		 display:inline-block;		
		 height:100%;
		 vertical-align:top;
		 color:#000;
		/* border-bottom:1px solid #1e8bc4;*/
		 width:65%;
		 text-align:left;
		 margin-left:16px;
		 text-indent:7px;
		 text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6) !important;	 
	 }
	 #rowed3_frozen tr td{		  
		 /* border-bottom:none;	 */		 
			background:#3a87ad;			 
			color: #000;
	 }
	 #rowed3  tr td,#rowed3  tr td span{
		/* word-wrap:normal!important;		 
		 text-wrap:none!important;
		 white-space: nowrap!important;	 	*/	  
		 /* border-bottom:none;	 */
	 }
	 
th.ui-th-column div{
        word-wrap: break-word; /* IE 5.5+ and CSS3 */
        white-space: pre-wrap; /* CSS3 */
        white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
	 .patient_label{
		 width:98%;
		 height:90%;
		 font-size:10px;
		 display:block;
		 border:1px solid #2e2e2e;
		 box-shadow:0px 0px 3px #333;
		 border-radius: 3px;
		 color:#2e2e2e;			 
	 }	 
	 .thongtinchinh{
		 display:inline-block;
		 margin-right:5px;
		 margin-bottom:1px;
		 vertical-align:top;
		 margin-top:1px;		
	 }
	 .patient_info{
		 
	 }
	 button#end,button#first{
		 font-size:9px!important;
		 margin-top:-6px;
	 }
	 .ui-button-text{
		 margin-left:-5px;
	 }
	 .timeEntry_control {
		vertical-align: middle;
		margin-left: 12px;
		margin-top:-2px; 
	 }
	 .ui-autocomplete-input{
		 width:120px!important;		 		 
	 }
	 .form_row div{
		 margin-top:2px;
	 }
	 span.patient_label{
		 font-size:11px!important;
	 }
	#menu { 
		width: 150px!important; 
		display:none; 
		position:absolute;  	 
		box-shadow:0px 0px 3px #333;
		z-index:100000;	 	
   }
   .ui-pg-button,.ui-pg-div{
	   width:1px!important;
	   padding:0px!important;
	   margin:0px!important;	    
   }
   .form_row input{
	   font-size:12px!important;
   }
   	
	#loading {
		position: absolute;
		top: 5px;
		right: 5px;
		}

	#calendar {
		width: 900px;
		margin: 0 auto;	 
	}
	 
</style>
<body>
<ul id="menu" >     
    <li><a id="cancel_calendar" href="#"><span class="ui-icon ui-icon-trash"></span>Hủy hẹn</a></li>
</ul>
<div class="ui-widget-content" id="panel_main" style="margin-top:7px; ">
<div class="thongtinchinh" id="tt_benhnhan"  style="width:650px;  margin-top:5px;margin-left:4px;">
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" >
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-5" class="ui-dialog-title">Thông tin bệnh nhân</span></div>
    <div class="ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 0px; max-height: none; height: 100%">
        <div class="patient_info">       
        </div>
</div>
</div>  
</div>
<div class="thongtinchinh" id="tt_henkham" style= "margin-top:6px; margin-left:3px;">
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="padding-bottom:7px;"  >
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-5" class="ui-dialog-title">Thông tin hẹn khám</span></div>
    <div class="ui-dialog-content ui-widget-content"style="display: block; width: auto; min-height: 0px; max-height: none; height: 100%">
            
        <div class="form_thongtin_henkham" style=" height:54px">                            
                <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i> <label for="nguoilienhe">Người liên hệ</label>
                    </span>
                       <span class="input_container"><input id="nguoilienhe" value="<?=$_SESSION["ThongTinBenhNhan"]["ten"]?>"  name="nguoilienhe" style="width:170px;"  type="text"></span>
                </div> 
                <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i><label for="ngayhen">Ngày h.khám</label>
                    </span>
                       <span class="input_container"><input id="ngayhen" name="ngayhen" style="width:120px;" value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>" type="text"> </span>
                 	 
                </div> 
                <div class="profile_container">
                    <span class="button_input" href="#" style="width:77px;">
                   		<button id="first">lui</button><button id="end">tới</button>
                    </span>  
                </div>           
                 <br>      
                <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i> <label for="dienthoai">Điện thoại</label>
                    </span>
                       <span class="input_container"><input id="dienthoai" value="<?=$_SESSION["ThongTinBenhNhan"]["dienthoai"]?>" name="dienthoai" style="width:170px;"   type="text"></span>
                </div>   
                <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon" ></i><label for="bacsy"  alt="time" >Bác sĩ</label>
                    </span>
                       <span class="input_container"><input id="bacsy" name="bacsy"  style="width:100px;"></span>
                </div>  
                 <div class="profile_container">
                     <span class="button_input" href="#" style="width:77px;">
                         <a href="#" id="lichcanhan" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:20px;  width:38px">C.nhân<span class="ui-icon ui-icon-calendar
 "></span></a>     
                    </span>
                       
                </div>         
               
	           
</div>
</div>
</div> 
</div> 	
</div>  
    <div class="form_dat_lich" style="display:none;">        
          <input id="ID_HenKham"  name="ID_HenKham" type="hidden" value="">          
             <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i> <label for="NguoiDatHen">Người liên hệ</label>
                    </span>
                       <span class="input_container"> <input id="NguoiDatHen"  name="NguoiDatHen" style="width:180px;"  type="text"></span>
             </div> 
             <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i><label for="DienThoaiLienHe">Điện thoại</label>
                    </span>
                       <span class="input_container"> <input id="DienThoaiLienHe"    name="DienThoaiLienHe" style="width:120px;" type="text"></span> 
             </div> 
             <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i><label for="NgayHenKham">Ngày hẹn</label>
                    </span>
                       <span class="input_container">  <input id="NgayHenKham"  alt="date" name="NgayHenKham"style="width:180px;" type="text"></span> 
             </div>
             <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i><label for="GioHenKham">Giờ hẹn</label>
                    </span>
                       <span class="input_container"> <input id="GioHenKham" alt="time" name="GioHenKham" style="width:100px;" value="<?php echo date("H:i:s") ?>" type="text"> </span> 
             </div>
             
             <div class="profile_container">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i><label for="ID_BSYeuCau1">Bác sĩ khám</label>     
                    </span>
                       <span class="input_container"><select id="ID_BSYeuCau" name="ID_BSYeuCau"  style="width:100px;"></select></span> 
             </div>
              <div class="profile_container" style="margin-top:2px">
                     <span class="label_input" href="#" style="width:77px;">
                        <i class="fa icon"></i><label for="GhiChu" style="width:90px; vertical-align:top; margin-top:36px">Ghi chú</label>    
                    </span>
                       <span class="input_container"><textarea id="GhiChu" name="GhiChu" style="height:90px; width:385px;" lang="end" ></textarea></span> 
             </div>
             
            <input id="ID_BenhNhan"  name="ID_BenhNhan" type="hidden" value="<?=$_SESSION["ThongTinBenhNhan"]["ID"]?>"> 
            <input id="ID_NhanVienCapNhat"  name="ID_NhanVienCapNhat" type="hidden" value="<?=$_SESSION["user"]["id_user"]?>">  
 		 
	</div> 


</body>
</html>
<script type="text/javascript">
<?php  $system_config=get_system_config(); ?>
$(document).ready(function() {	 
openform_shortcutkey();
	$("#panel_main").css("height",jQuery(window).height()+"px");
	$("#panel_main").css("width",jQuery(window).width()-3+"px");			 
	$("#panel_main").fadeIn(1000);	
	$(window).resize(function() {
		$("#panel_main").css("height",jQuery(window).height()+"px");
		$("#panel_main").css("width",jQuery(window).width()-3+"px");			
	})
	$.get( "pages.php?module=web_services&function=create_panel1&action=index&id_benhnhan=<?=$_SESSION["ThongTinBenhNhan"]["ID"]?>", function( data ) {
	  $( ".patient_info" ).html( data );
	  $( "#patient_info" ).css("width", "620px");		  
	  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"px");		  
	});
		
	<?php echo 'step = '.$system_config["GD2_KhoangThoiGianHenKham"].";\r"; ?>
	<?php echo 'idbenhnhan = '.$_SESSION["ThongTinBenhNhan"]["ID"].";\r"; ?>
	<?php echo "tenbenhnhan = '".$_SESSION["ThongTinBenhNhan"]["ten"]."';\r"; ?>
	<?php echo "dienthoai = '".$_SESSION["ThongTinBenhNhan"]["dienthoai"]."';\r"; ?>
	create_grid('<?=date("d/m/Y")?>',create_grid_callback);	
	//alert(ngaykham[2])
	$("#cancel_calendar").click(function(e){
		save_lich();		
	})
	$("#menu").menu();
	$("#lichcanhan").click(function(e){
		dialog_canhan_callback("Xem lịch hẹn khám cá nhân", 90, 85, 5674365743657, "");
		create_form_lichcanhan(init_lichcanhan);	 
	})
	window.oper="add";
	$(document).bind("mouseup", function(e) {
            $("#menu").hide();
    });
	window.kiemtra_popup=false;
	window.bacsy = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsDoctor=1&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
           if (!result)
                    alert('Không load được danh mục Bác sĩ');
            }}).responseText;
			create_select('#bacsy',window.bacsy);     
			create_combobox_new('#bacsy',create_bacsi,'bw','','data_bacsi&ngay=<?=date("d/m/y")?>',0);
		//	autocompleted_combobox('#bacsy');
			$('#ngayhen').change(function() {			  
				window.check_Timeout_henkham=true;
				t=setTimeout(function(){
					if(window.check_Timeout_henkham==true){					 
						create_grid($("#ngayhen").val(),create_grid_callback);
						window.check_Timeout_henkham=false;
						clearTimeout(t);
						//$('#rowed4').setGridParam({loadonce: false}).trigger("reloadGrid");
						//alert($('#rowed4').jqGrid('getGridParam', 'loadonce'))
					}
				},500); 
			});
	$(function() {
		$( "#first" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-first"
		  }
		})
		.click(function() {
			ngaykham=$("#ngayhen").val().split($.cookie("phancachngay"));
			var tam=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: 0,
				hour: 0,
				day: parseInt(ngaykham[0]),
				month: parseInt(ngaykham[1])-1,
				year: parseInt($.cookie("ngayDatejs")+ngaykham[2])
			});
			dates=tam.add({days: -1, months: 0, years: 0}).toString($.cookie("ngayDatejs"));				 
			$("#ngayhen").val(dates);			 
			//$("#rowed3").jqGrid().setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lich&from=&to=&mangbacsy='+mangbacsy+"&date="+dates}).trigger("reloadGrid");
			create_grid(dates,create_grid_callback);
			create_combobox_new('#bacsy',create_bacsi,'bw','','data_bacsi&ngay='+$('#ngayhen').val(),0);
		});
		$( "#end" ).button({
		  text: false,
		  icons: {
			primary: "ui-icon-seek-end"
		  }
		})
		.click(function() {
			ngaykham=$("#ngayhen").val().split($.cookie("phancachngay"));
			var tam=Date.today().set({
				millisecond: 0,
				second: 0,
				minute: 0,
				hour: 0,
				day: parseInt(ngaykham[0]),
				month: parseInt(ngaykham[1])-1,
				year: parseInt($.cookie("ngayDatejs")+ngaykham[2])
    		});				 
			dates=tam.add({days: 1, months: 0, years: 0}).toString($.cookie("ngayDatejs"));	
			$("#ngayhen").val(dates);			 
			//$("#rowed3").jqGrid().setGridParam({url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lich&from=&to=&mangbacsy='+mangbacsy+"&date="+dates}).trigger("reloadGrid");
			create_grid(dates,create_grid_callback);
			create_combobox_new('#bacsy',create_bacsi,'bw','','data_bacsi&ngay='+$('#ngayhen').val(),0);
		});   
  	}); 
  	$.dateEntry.setDefaults({spinnerImage: ''});	
	$("#ngayhen").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	var currentTime = new Date();
	tam = parseInt(currentTime.getFullYear()) + 1;        
    year_range = '2013:' + tam; 
	$("#ngayhen").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 2,
            dateFormat: $.cookie("ngayJqueryUi"),
            yearRange: year_range,
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {				 
                create_grid(dat,create_grid_callback);
            }
        });		
	  $('.form_thongtin_henkham input[type=text],.form_thongtin_henkham textarea').bind("keydown", function(e) {			 
		if (jwerty.is("enter",e)||jwerty.is("tab",e)) {  			
			/* FOCUS ELEMENT */
			var inputs = $(this).parents(".form_thongtin_henkham").eq(0).find(":input[type=text],textarea");
			var idx = inputs.index(this);			 
			if (idx == inputs.length - 1) {					 
				//inputs[0].focus();					 
			} else {				 
				/*if(inputs[idx].lang=="maKH_check"){
					MaNCC_check("maKH","maKH1")
				}
				else if(inputs[idx].lang=="maThuoc_check"){
					MaThuocC_check("maThuoc","idThuoc","maThuoc1","ghichu")}
				else{*/
					$(".ui-datepicker").hide(); 
					inputs[idx + 1].focus(); //  handles submit buttons
				//} 										 
			}			 
			return false;
		}else if(jwerty.is("shift+tab",e)){
			var inputs = $(this).parents(".form_thongtin_henkham").eq(0).find(":input[type=text],textarea,button");
			var idx = inputs.index(this);
			 if (idx >0) {					 
				inputs[idx -1].focus(); //  handles submit buttons				 
			} 
			return false;
		}			
	});
	phanquyen();
}); 
function create_form_lichcanhan(callback){
	$(".modal5674365743657").append("<div id='person_calendar'><div id='loading' style='display:none'>loading...</div><div id='calendar'></div></div>");	 
	callback();
}
function init_lichcanhan(){	
	_date=$("#ngayhen").val();	 
	_date=_date.split($.cookie("phancachngay"));
	_year=$.cookie('namjs')+_date[2];
	_month=_date[1];
	_day=_date[0];	 
	_idnhanvien=$("#bacsy_hidden").val();	 
	$('#calendar').fullCalendar({
			//defaultView:"agendaDay",
			year: _year,
			month: _month-1,
			date: _day,
			theme: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			allDaySlot:false,
			slotMinutes:step,
			timeFormat: 'H:mm{ - H:mm}',			
			monthNames:['Tháng một', 'Tháng hai', 'Tháng ba', 'Tháng bốn', 'Tháng năm', 'Tháng sáu', 'Tháng bảy', 'Tháng tám', 'Tháng chín', 'Tháng mười', 'Tháng mười một', 'Tháng mười hai'],
			dayNames:['Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy', 'Chủ nhật'],			
			dayNamesShort:['CN','T.hai', 'T.ba', 'T.tư', 'T.năm', 'T.sáu', 'T.bảy'],
			//monthNamesShort:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun' 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],//chưa dịch
			columnFormat:{
				month: 'ddd',    // Mon
				week: "ddd',' d/M", // Mon 9/7
				day: "dddd',' d/M"  // Monday 9/7
			},
			buttonText:{
				prev:     '&lsaquo;', // <
				next:     '&rsaquo;', // >
				prevYear: '&laquo;',  // <<
				nextYear: '&raquo;',  // >>
				today:    'hôm nay',
				month:    'Tháng',
				week:     'Tuần',
				day:      'Ngày'
			},
			titleFormat:{
				month: "MMMM', Năm' yyyy",                             // September 2009
				week: "'Từ' d[ yyyy]'/'MM 'đến' {[ MMM] d'/'MM  } 'năm' yyyy", // Sep 7 - 13 2009				
				//week: "'Từ' MMM d[ yyyy]{ '&#8212;'[ MMM] d yyyy}", // Sep 7 - 13 2009
				day: "dddd 'ngày' d'/'MM 'năm' yyyy"                 // Tuesday, Sep 8, 2009
			},
			/*columnFormat:{
				month: 'ddd M/d',    // Mon
				week: 'ddd M/d', // Mon 9/7
				day: 'dddd M/d'  // Monday 9/7
			},	*/		 
			editable: false,			
			//events: "json-events.php",
			events: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lich_canhan&idnhanvien='+_idnhanvien,			
			eventDrop: function(event, delta) {
				alert(event.title + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');
			},			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			},
			 eventClick: function(calEvent, jsEvent, view) {
		
		
			}
			
		});

		$('#calendar').fullCalendar('option', 'width', $(window).width());
		$(".fc-button-agendaWeek,.fc-button-agendaDay").click(function() {		 
		  $('#calendar').fullCalendar('option', 'height', $(window).height()-140);
		});
		$(".fc-button-month").click(function() {		 
		  $('#calendar').fullCalendar('option', 'height', $(window).height()-140);
		}); 
		 
		
		$(window).resize(function() {			 
		   $('#calendar').fullCalendar('option', 'height', $(window).height()-140);
		   $('#calendar').fullCalendar('option', 'width', $(window).width());
		}); 		
	 		 
	 
	
}


function create_form_datlich(callback){
	$(".modal4732479").append("<div id='search_border'>"+$(".form_dat_lich").html()+"</div>");
	window.form_dat_lich=$(".form_dat_lich").html();	 
	$(".form_dat_lich").html(""); 
	callback();
}
function init_datlich(){
		$("#NgayHenKham").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 2,
            dateFormat: $.cookie("ngayJqueryUi"),
            yearRange: year_range,
            onClose: function(selectedDate) {               
            },
            onSelect: function(dat, inst) {                 
            }			
        });
		create_select("#ID_BSYeuCau",window.bacsy); 	 
		autocompleted_combobox('#ID_BSYeuCau');
		//$.timeEntry.setDefaults({spinnerImage: 'images/spinnerDefault.png'});
		//$.timeEntry.setDefaults({spinnerSize: [20,20, 0]});
		$.timeEntry.setDefaults({timeSteps: [1,5,1]});
		$.timeEntry.setDefaults({show24Hours: true});	
		$.timeEntry.setDefaults({initialField: 1});
		$.timeEntry.setDefaults({minTime: "<?=$system_config["GD2_ThoiGianBatDau"]?>:00"});	
		$.timeEntry.setDefaults({maxTime: "<?=($system_config["GD2_ThoiGianBatDau"]+$system_config["GD2_ThoiGianLamViec"]-1)?>:<?=(60/$system_config["GD2_KhoangThoiGianHenKham"]-1)?>0"});			
		$.timeEntry.setDefaults({spinnerImage: 'images/spinnerSquare.png'});
		$.timeEntry.setDefaults({spinnerBigImage: 'images/spinnerSquareBig.png'});
		$("#GioHenKham").timeEntry({dateFormat: 'his:'});
		$("#NgayHenKham").val($("#ngayhen").val());
		$.dateEntry.setDefaults({spinnerImage: ''});	
	 	//$("#NgayHenKham").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
		 
		//$( ".timeEntry_control" ).wrapAll('<span class="timeEntry_control" />');		
		//$( ".timeEntry_control" ).clone().prependTo( ".timeEntry_control1" );		
	  $("#ID_BSYeuCau1").select();
	  jwerty.key('tab', false);
	  jwerty.key('shift+tab', false);		  
	   $('#search_border input[type=text],#search_border textarea').bind("keydown", function(e) {			 
            if (jwerty.is("enter",e)||jwerty.is("tab",e)) {  			
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#search_border").eq(0).find(":input[type=text],textarea");
                var idx = inputs.index(this);			 
                if (idx == inputs.length - 1) {	
					$(".ui-dialog-buttonset .ui-icon-disk").click(); 
                    //inputs[0].focus();					 
                } else {				 
					/*if(inputs[idx].lang=="maKH_check"){
						MaNCC_check("maKH","maKH1")
					}
					else if(inputs[idx].lang=="maThuoc_check"){
						MaThuocC_check("maThuoc","idThuoc","maThuoc1","ghichu")}
					else{*/
					if(inputs[idx].id=="ID_BSYeuCau1"){
						$("#GhiChu").focus();						
					}else{
						$(".ui-datepicker").hide(); 
						inputs[idx + 1].focus(); //  handles submit buttons									
					}
					 	
					//} 										 
                }			 
                return false;
            }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#search_border").eq(0).find(":input[type=text],textarea");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}				
        });
		
}
function save_lich(){			    
			    $('#rowed3').setGridParam({postData: null}); //reset post data
			    var check_setcell=true;	
				var url_tam="";
				var data_tam;				
				phancach="";
				i=0;
				dataToSend ='{';
				if(window.oper=="add"){
					kiemtraquakhu=false;
					var d = new Date();
								var curr_hour = d.getHours();
								var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
								var curr_time = curr_hour + ":" + curr_minute+ " ";	
								 				
								kiemtrangaysetcell=convert_date($("#ngayhen").val());
								kiemtrangaysetcell1=convert_date($("#NgayHenKham").val());								 					 
								if(kiemtrangaysetcell<kiemtrangaysetcell1){
									check_setcell=false;	
								}
								if( convert_date($("#NgayHenKham").val() + " " +  $("#GioHenKham").val()) < d ){									
									 tooltip_message("Không được chọn thời gian quá khứ");
									 kiemtraquakhu=true;
									 return false;									 							 
								} 
					if(kiemtraquakhu==true){
						return false;
					}
					dataToSend +=  '"NguoiDatHen":"' + $("#NguoiDatHen").val()+'"' ;
					dataToSend +=  ',"NgayHenKham":"' + $("#NgayHenKham").val()+'"' ;
					dataToSend +=  ',"ID_BSYeuCau":"' + $("#ID_BSYeuCau :selected").val()+'"' ;
					dataToSend +=  ',"DienThoaiLienHe":"' + $("#DienThoaiLienHe").val()+'"' ;
					dataToSend +=  ',"DienThoaiLienHe":"' + $("#DienThoaiLienHe").val()+'"' ;					
					dataToSend +=  ',"GioHenKham":"' + $("#NgayHenKham").val() + " " + $("#GioHenKham").val() +'"' ;	
					dataToSend +=  ',"GhiChu":' + JSON.stringify($("#GhiChu").val()) ;		
					dataToSend +=  ',"ID_BenhNhan":"' + $("#ID_BenhNhan").val()+'"' ;
					dataToSend +=  ',"ID_NhanVienCapNhat":"' + $("#ID_NhanVienCapNhat").val()+'"' ;
					tieude=	"<?=$_SESSION["ThongTinBenhNhan"]["ten"]?>" + " -- " + $("#DienThoaiLienHe").val();	
					dataToSend +=  ',"TieuDe":"' + tieude + '"' ;
					dataToSend +='}';
					dataToSend = jQuery.parseJSON(dataToSend);
					
					 					 		 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper='+window.oper,
						dataToSend
					 )
					 .done(function( gridData ) {						 
						 tam=gridData.split(";");						 
						 if($.trim(tam[1])=="0"){
							 tooltip_message("Tạo lịch hẹn thành công"); 
							 data_tam=$.trim(tam[0]) + ";" + tieude + ";" + $("#DienThoaiLienHe").val() + ";" + $("#NguoiDatHen").val() + ";" + $("#NgayHenKham").val() + ";" + $("#GioHenKham").val() + ";" + $("#ID_BenhNhan").val() + ";" + $("#GhiChu").val();
							 if(check_setcell==true){			 			 
								 $("#rowed3").jqGrid('setCell', window.rowid, $("#ID_BSYeuCau :selected").text(), data_tam, '');
							 }
							 fixPositionsOfFrozenDivs.call($("#rowed3")[0]);	
							 $(".modal4732479").dialog( "close" );				    
						 }else{							 
							 tooltip_message("Tạo lịch hẹn thất bại"); 
						 }
									 
					});
					 
				}else if (window.oper=="edit"){
					var d = new Date();
								var curr_hour = d.getHours();
								var curr_minute = d.getMinutes();
								var curr_time = curr_hour + ":" + curr_minute+ " ";																	
								kiemtrangaysetcell=convert_date($("#ngayhen").val());
								kiemtrangaysetcell1=convert_date($("#NgayHenKham").val());								 					 
								if(kiemtrangaysetcell<kiemtrangaysetcell1){
									check_setcell=false;	
								}
					dataToSend +=  '"ID_HenKham":"' + $("#ID_HenKham").val()+'"' ;
					dataToSend +=  ',"NguoiDatHen":"' + $("#NguoiDatHen").val()+'"' ;
					dataToSend +=  ',"NgayHenKham":"' + $("#NgayHenKham").val()+'"' ;
					dataToSend +=  ',"ID_BSYeuCau":"' + $("#ID_BSYeuCau :selected").val()+'"' ;
					dataToSend +=  ',"DienThoaiLienHe":"' + $("#DienThoaiLienHe").val()+'"' ;
					dataToSend +=  ',"DienThoaiLienHe":"' + $("#DienThoaiLienHe").val()+'"' ;					
					dataToSend +=  ',"GioHenKham":"' + $("#NgayHenKham").val() + " " + $("#GioHenKham").val() +'"' ;	
					dataToSend +=  ',"GhiChu":' + JSON.stringify($("#GhiChu").val()) ;		
					//dataToSend +=  ',"ID_BenhNhan":"' + $("#ID_BenhNhan").val()+'"' ;
					dataToSend +=  ',"ID_NhanVienCapNhat":"' + $("#ID_NhanVienCapNhat").val()+'"' ;
					tieude=	"<?=$_SESSION["ThongTinBenhNhan"]["ten"]?>" + " -- " + $("#DienThoaiLienHe").val();	
					dataToSend +=  ',"TieuDe":"' + tieude + '"' ;
					dataToSend += ',"HuyHen":"0"' ;
					dataToSend +='}';
					dataToSend = jQuery.parseJSON(dataToSend);
					
					
					/*$('.modal4732479').find(':input[type=text],select,textarea,input[type=hidden]').each(function(){							
						if((this.name!="ID_BSYeuCau1")&&(this.name!="ID_BenhNhan")){
							if(i>0){
							  phancach=",";	
							}					 
							if(this.alt=="time"){								 						
								var d = new Date();
								var curr_hour = d.getHours();
								var curr_minute = d.getMinutes();
								var curr_time = curr_hour + ":" + curr_minute+ " ";																	
								kiemtrangaysetcell=convert_date($("#ngayhen").val());
								kiemtrangaysetcell1=convert_date($("#NgayHenKham").val());								 					 
								if(kiemtrangaysetcell<kiemtrangaysetcell1){
									check_setcell=false;	
								}
								//if( convert_date($("#NgayHenKham").val() + " " + this.value) < d ){
									// tooltip_message("Không được chọn thời gian quá khứ");
									// return false;									 							 
								//}
								//alert($("#NgayHenKham").val() + " " + this.value)
								dataToSend += phancach + '"'+ this.name + '":"' + $("#NgayHenKham").val() + " " + this.value +'"' ;		
							}else{							 
								//if(this.name=="GhiChu"){
									//alert(JSON.stringify(this.value))	
									dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value)   ;					 
									//dataToSend += phancach + '"'+ this.name + '":"' + encodeURIComponent(this.value) +'"' ;
								// }else{
									// dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
								//};
							}
							i++;
						}		
					})
					tieude=	"<?=$_SESSION["ThongTinBenhNhan"]["ten"]?>" + " -- " + $("#DienThoaiLienHe").val();	 
					dataToSend += phancach + '"TieuDe":"' + tieude + '"' ; 
					dataToSend += phancach + '"HuyHen":"0"' ;
					dataToSend +='}';
					//alert(dataToSend);
					//dataToSend=string_parse_SQL(dataToSend)				
					dataToSend = jQuery.parseJSON(dataToSend);	*/				 
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper='+window.oper,
							dataToSend
						 )
						 .done(function( gridData ) {						  					 
							 if($.trim(gridData)=="0"){
								 tooltip_message("Sửa lịch hẹn thành công"); 
								  data_tam=dataToSend["ID_HenKham"] + ";" + tieude + ";" + $("#DienThoaiLienHe").val() + ";" + $("#NguoiDatHen").val() + ";" + $("#NgayHenKham").val() + ";" + $("#GioHenKham").val() + ";" + $("#ID_BenhNhan").val() + ";" + $("#GhiChu").val();							 			 
								 //alert(window.rowid)
								 $("#rowed3").jqGrid('setCell', window.rowid, window.from, " ", '');
								// alert(dataToSend["GioHenKham"])
								 tam1=(dataToSend["GioHenKham"]).split(" ") ;
								 if(tam1[1].substring(0,1)=="0"){
									tam1[1]=tam1[1].substring(1,5);
								 }
							 
								// if(kiemtrasave==true){							 
									 if($("#ID_BSYeuCau1").val()!=window.from){		
									  //console.log( tam1[1] +"    "+ window.from)										  
										 $("#rowed3").jqGrid('setCell', tam1[1],$("#ID_BSYeuCau1").val(), data_tam, '');									 
									 }else{		
									// console.log( tam1[1] +"    "+ window.from)							
										 $("#rowed3").jqGrid('setCell', tam1[1], window.from, data_tam, '');									  
									 }
								// }
								 fixPositionsOfFrozenDivs.call($("#rowed3")[0]);
								 $(".modal4732479").dialog( "close" );							     
							 }else{
								 tooltip_message("Sửa lịch hẹn thất bại"); 
							 }										 
					});
							
				}else if(window.oper=="cancel"){
					dataToSend +=  '"ID_HenKham":"' + window.idCancel +'"' ;					 
					dataToSend +='}';				 		
					dataToSend = jQuery.parseJSON(dataToSend);
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&hienmaloi=1&oper='+window.oper,
							dataToSend
						 )
						 .done(function( gridData ) {						  					 
							 if($.trim(gridData)==""){
								 tooltip_message("Hủy lịch hẹn thành công"); 
								 $("#rowed3").jqGrid('setCell', window.rowid, window.from, " ", '');
								 fixPositionsOfFrozenDivs.call($("#rowed3")[0]);	
								 $(".modal4732479").dialog( "close" );								  
							 }else{
								 tooltip_message("Hủy lịch hẹn thất bại"); 
							 }										 
						 });					 
				}				
				
}
function dialog_datlich_callback(title, width, height, elem, links,form) {
	$("#panel_main").append("<div class='ui-jqdialog modal" + elem + "'> </div>");	 
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};   
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: true,
        title: title,
		draggable: true,
		resizable: false,
        stack: false,
		buttons: {			 
            'Lưu': function() {
				save_lich();
				//$(form).html(form_dat_lich);
				//$(this).dialog( "close" );
				//$(this).remove();
				//window.kiemtra_popup=false;								 		
				//$(form).html(form_dat_lich);	
               // $(this).dialog('close'); 				 
			   // $(this).remove();				       
            },	            
        },
		beforeClose: function( event, ui ) {
			 
		},
        close: function(event, ui) {		 
			$(form).html(form_dat_lich);			
            //$("body").remove(".modal" + elem);
			$(this).dialog( "close" );
            $(this).remove();
			window.kiemtra_popup=false;			
        },
        hide: {
            effect: "fadeOut",
            duration: 500,
        },
        open: function(event, ui) {	
			window.kiemtra_popup=true;
			add_icon_button_dialog("Lưu","disk");		 
        },		

    });
    //$(".modal"+elem).css("box-shadow","0px 0px 30px #000");		
}
function dialog_canhan_callback(title, width, height, elem, links) {
	$("body").append("<div class='ui-jqdialog modal" + elem + "'> </div>");	 
	if (String(width).match(/px/g)==null){
		 width = ($(window).width() / 100 * parseFloat(width)).toFixed(0);		
	}else{		
		width=String(width).replace("px","")
	};
	if (String(height).match(/px/g)==null){
		 height = ($(window).height() / 100 * parseFloat(height)).toFixed(0);
	}else{		
		 height=String(height).replace("px","")
	};   
    $(".modal" + elem).dialog({
        height: height,
        width: width,
        modal: true,
        title: title,
		draggable: true,
		resizable: false,       
		beforeClose: function( event, ui ) {
			 
		},
        close: function(event, ui) {				 		
            //$("body").remove(".modal" + elem);
			$(this).dialog( "close" );
            $(this).remove();
			 
        },
        hide: {
            effect: "fadeOut",
            duration: 500,
        },
        open: function(event, ui) {	
			 
        },
		

    });
    //$(".modal"+elem).css("box-shadow","0px 0px 30px #000");		
}








function resize_control(){
	$(window).resize(function() {
		$("#rowed3").setGridWidth($(window).width()-13);		 
		$("#rowed3").setGridHeight($(window).height()  - $(".thongtinchinh").height()-101);
		$("#tt_henkham").css("width",$(window).width()-29-$("#tt_benhnhan").width()+"px");
	})
	$("#rowed3").setGridWidth($(window).width()-13);		 
	$("#rowed3").setGridHeight($(window).height()  - $(".thongtinchinh").height()-101);
	$("#tt_henkham").css("width",$(window).width()-29-$("#tt_benhnhan").width()+"px");
 
}
function create_grid(date,callback){
	$("#gbox_rowed3").remove();
	$("#panel_main").append('<table id="rowed3" style="width:100%" ></table><div id="prowed3"></div>'); 
	window.mangbacsy="";
	window.mangnickname="";	
	var idbacsy;var nickname;var nicknamenew; var giolamviec;
	window.mangbacsy=$.get("pages.php?module=web_services&function=get_doctor_list&action=index&column=ID_NhanVien&date="+date, function( data ) {
	  	window.mangbacsy=data;	
		idbacsy=window.mangbacsy.split(";");
		$.get( "pages.php?module=web_services&function=get_doctor_list&action=index&column=NickName&date="+date, function( data ) {		 
//$.get( "pages.php?module=web_services&function=get_doctor_list&action=index&column=Lich&date="+date, function( data ) {		 
			window.mangnickname=data;
			nickname=window.mangnickname.split(";");



		$.get( "pages.php?module=web_services&function=get_doctor_list&action=index&column=Lich&date="+date, function( data ) {		 
				nicknamenew=data.split(";");
				$.get("pages.php?module=web_services&function=get_doctor_list&action=index&column=ID_NhanVien&date="+date, function( data ) {
					giolamviec=data.split(";");
					callback(date,nickname,idbacsy,nicknamenew,giolamviec);
				});
				//callback(date,nickname,idbacsy,nicknamenew);
			});	


			//callback(date,nickname,idbacsy);
		});	 
	});	
}
function create_grid_callback(date,nickname,idbacsy,nicknamenew,giolamviec){	
	colnames = [];
    colnames = [""];
    colvalues = []; 
  	colvalues = [{name: 'ruler', index: 'ruler', width: 40, frozen: true,align:"left"}];	 
	for (i = 1; i <= nickname.length-1 ; i++) {		 
		//mangbacsy+=	idbacsy[i-1]+";";	 
		colnames[i] = nicknamenew[i-1];
		colvalues[i] = {name: nickname[i-1], index: idbacsy[i-1], formatter: render_col, search: false, width: 220, editable: false, align: "center", hidden: false, edittype: "textarea", formatter: render_col,cellattr:merge_cell};
	 
    }
	//alertObject(colvalues)
	$("#rowed3").jqGrid({
          /*  url: 'http://192.168.1.24:81/giaidoan2/pages.php?module=lich&view=lich_lam_viec&action=data_lich&q=2&idphong=20&loailich=&from=2013-11-01&to=2013-11-30&mang_ngay=2013-11-01;2013-11-02;2013-11-03;2013-11-04;2013-11-05;2013-11-06;2013-11-07;2013-11-08;2013-11-09;2013-11-10;2013-11-11;2013-11-12;2013-11-13;2013-11-14;2013-11-15;2013-11-16;2013-11-17;2013-11-18;2013-11-19;2013-11-20;2013-11-21;2013-11-22;2013-11-23;2013-11-24;2013-11-25;2013-11-26;2013-11-27;2013-11-28;2013-11-29;2013-11-30;&_search=false&nd=1383718337487&rows=30&page=1&sidx=TenPhongBan&sord=asc',*/
		    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich&from=&to=&mangbacsy='+mangbacsy+"&date="+date,
            datatype: "json",
            colNames: colnames,
            colModel: colvalues,
            loadonce: false,
            shrinkToFit: false,
            scroll: false,
            modal: true,
            rowNum: 200,
            rowList: [200, 300, 400],
            pager: '#prowed3',
            sortname: 'ruler',
            height: 500,
            width: 400,
            rownumbers: false,
            viewrecords: true,
            ignoreCase: true,
            rowList: [], // disable page size dropdown
            pgbuttons: false, // disable page control like next, back button
            pgtext: null, // disable pager text like 'Page 0 of 10'
            viewrecords: true,
            resizeStop: fixPositionsOfFrozenDivs,
            hoverrows: false,	
            sortorder: "asc",
            cellEdit: false,
            serializeRowData: function(postdata) {
            },
            onCellSelect: function(rowid, iCol, cellcontent, e) {
				var _id;
				var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[iCol].name;
				window.rowid=rowid;	
				window.from = colModel[iCol].name;	 	 
				//var rowData = jQuery('#rowed3').getRowData(rowid);				 
				if((cellcontent!="")&&(cellcontent!=" ")){							 	
					$(cellcontent).each(function(){						 
						 _id=this.id;						 
					});
					$("#nguoilienhe").val($( "body" ).data( _id ).Nlienhe);   
					$("#ngayhen").val($( "body" ).data( _id ).Ngayhen);
					$("#dienthoai").val($( "body" ).data( _id ).Dienthoai);
					$("#bacsy1").val(colName);
				}				 
            },
            onSelectRow: function(rowId, status, e) {
				
                
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex, e) {
				var _id;
				var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[columnIndex].name;
				var colIndex = colModel[columnIndex].index;			 	 
				var rowData = jQuery('#rowed3').getRowData(rowId);			
				if(window.kiemtra_popup==false){
                	dialog_datlich_callback("Lịch hẹn chi tiết BN:", "540px", "280px", "4732479", "",".form_dat_lich"); 				
					create_form_datlich(init_datlich);												
					if($.trim(rowData[colName])!=""){							 	
						$(rowData[colName]).each(function(){	
							_id=this.id;							
						});
						$("#nguoilienhe").val($( "body" ).data( _id ).Nlienhe);   
						$("#ngayhen").val($( "body" ).data( _id ).Ngayhen);
						$("#dienthoai").val($( "body" ).data( _id ).Dienthoai);
						$("#bacsy1").val(colName);
																			 
						$("#NguoiDatHen").val($( "body" ).data( _id ).Nlienhe); 						 
						$("#NgayHenKham").val($( "body" ).data( _id ).Ngayhen);
						$("#DienThoaiLienHe").val($( "body" ).data( _id ).Dienthoai);
						$("#GioHenKham").val($( "body" ).data( _id ).Giohen);
						$("#ID_BenhNhan").val($( "body" ).data( _id ).Idbenhnhan);
						$("#GhiChu").val($( "body" ).data( _id ).Ghichu);
						$("#ID_HenKham").val($( "body" ).data( _id ).Idkham);		
						window.oper="edit"; 		 					 
					}else{
						$("#ID_BenhNhan").val(idbenhnhan);
						$("#NguoiDatHen").val(tenbenhnhan);	
						$("#DienThoaiLienHe").val(dienthoai);
						$("#GioHenKham").val(rowId);
						window.oper="add"; 
					}							
					$("#ID_BSYeuCau1").val(colName);	
					$("#ID_BSYeuCau").val(colIndex);	
				}
            },
             onRightClickRow: function(rowid, iRow, iCol, e) {
				var _id;
				var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');
                var colName = colModel[iCol].name;
				var colIndex = colModel[iCol].index;			 	 
				var rowData = jQuery('#rowed3').getRowData(rowid);					 
				if($.trim(rowData[colName])!=""){
					window.rowid=rowid;	
					window.from = colModel[iCol].name;		
					if ($("#menu").width() + e.pageX > $(document).width()) {
						$("#menu").css('left', e.pageX - $("#menu").width() + "px");
					} else {
						$("#menu").css('left', e.pageX + "px");
					}
					if ($("#menu").height() + e.pageY > $(document).height()) {
						$("#menu").css('top', e.pageY - $("#menu").height() + "px");
					} else {
						$("#menu").css('top', e.pageY + "px");
					}
					$("#menu").show(300);
					window.oper="cancel";
					$(rowData[colName]).each(function(){	
						_id=this.id;	
					});	
					window.idCancel=$( "body" ).data( _id ).Idkham;					 			 
				}
                $(document).bind("contextmenu", function(e) {
                    return false;
                });
                //right_menu(rowid, iCol, e);
            },
            loadComplete: function(data) {
                fixPositionsOfFrozenDivs.call(this);
                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
            },
            caption: "Lịch hẹn khám"
        });
		
		$("#rowed3").jqGrid('setFrozenColumns');
		
			 
	    $("#rowed3").bind("jqGridResizeStop", function() {
            fixPositionsOfFrozenDivs.call(this);
        });
		$(".ui-jqgrid-bdiv").click(function(event){
			//$("#rowed3_frozen tr td ").addClass("ui-state-default");
			//alert("") 
  			//event.stopPropagation();
  			//$("#gbox_rowed3").remove();
			//$( ".ui-jqgrid-bdiv" ).scrollTop( 300 );
			 //$( ".ui-jqgrid-bdiv" ).scrollLeft( 300 );
		 	
			/*$(".ui-jqgrid-bdiv").mousedownScroll(function(e){
				  
   			});	*/
		});
		/*$(".ui-jqgrid-bdiv").scroll(function(e){
			// e.preventDefault();
			 $(".ui-jqgrid-bdiv").scrollTop( $(".ui-jqgrid-bdiv").scrollTop()+100);
			// alert("") ; 
			 return false; 
			 
		})*/
		 $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: false}, //options							 
				{height: 100, width: 600, reloadAfterSubmit: true, url: 'modules/menu/someurl1.php'}, // edit options
				{width: 250, reloadAfterSubmit: true, url: 'modules/menu/someurl1.php'}, // add options
				{reloadAfterSubmit: true, url: 'modules/menu/someurl1.php'}, // del options
				{height: 250, width: 600} // search options
        );
		$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "", buttonicon: 'ui-icon-seek-first',
            onClickButton: function() {
			/*	$('body').on('mousedown', $(this), function() {
            		$( ".ui-jqgrid-bdiv" ).scrollLeft(   $( ".ui-jqgrid-bdiv" ).scrollLeft()-125 )
				});
				$('body').on('mouseup',  $(this), function() {
            	 alert("")
				});*/
            },
            title: "",
            position: "last"
        });	 
		$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "", buttonicon: 'ui-icon-seek-end',
            onClickButton: function(e) {		
			/*	$('body').on('mousedown', $(this), function() {
            		startScrolling()
				});
				$('body').on('mouseup',  $(this), function() {
            	  stopScrolling
				});*/
				//$('.ui-jqgrid-bdiv').mousedown(startScrolling).mouseup(stopScrolling);		 
               // $( ".ui-jqgrid-bdiv" ).scrollLeft(   $( ".ui-jqgrid-bdiv" ).scrollLeft()+125 );				 
            },
            title: "",
            position: "last"
        });	 
		$('#prowed3 .ui-pg-div .ui-icon-seek-end').mousedown(nextScrolling).mouseup(stopScrolling);
		$('#prowed3 .ui-pg-div .ui-icon-seek-first').mousedown(backScrolling).mouseup(stopScrolling);	
		resize_control();
		var cache_id = '', cache_col = '';
		grid = $("#rowed3");
        var cm = $("#rowed3").jqGrid('getGridParam', 'colModel');      
		 $("#rowed3").mouseover(function(e) {
            var $td = $(e.target).closest('td'), $tr = $td.closest('tr.jqgrow'), rowId = $tr.attr('id'), ci;			 
            if (rowId) {
                ci = $.jgrid.getCellIndex($td[0]); // works mostly as $td[0].cellIndex
                if ((cache_id != '') && (cache_col != '')) {
                    //$("#rowed3").jqGrid('setCell',cache_id,cache_col,"",'ui-state-default');
                    //$("#"+cache_id+" td").css("color","red");							
                    var iCol = getColumnIndexByName(grid, cache_col),
                            tr = grid[0].rows.namedItem(cache_id), // grid is defined as grid=$("#grid_id")
                            td = tr.cells[iCol];
                    $(td).removeClass("ui-state-hover");
                }
				//alert(cm[ci].name)
                $("#rowed3").jqGrid('setCell', rowId, cm[ci].name, "", 'ui-state-hover');
                cache_id = rowId;
                cache_col = cm[ci].name;
                // console.log('You rolled over the row with id="' + rowId + '" in the column ' + cm[ci].name);                
            }
        });
        var getColumnIndexByName = function(grid, columnName) {
            var cm = grid.jqGrid('getGridParam', 'colModel');
            for (var i = 0, l = cm.length; i < l; i++) {
                if (cm[i].name === columnName) {
                    return i; // return the index
                }
            }
            return -1;
        }		 
 }
 
 function merge_cell(rowId, tv, rawObject, cm, rdata){

	 
 }
 var t_next;
 function nextScrolling(){
	  
		$( ".ui-jqgrid-bdiv" ).scrollLeft(   $( ".ui-jqgrid-bdiv" ).scrollLeft()+125 );			 
			t_next=setTimeout(function(){				 
					nextScrolling();
					window.check_Timeout=false;
			 
			},200);			
 }
function backScrolling(){		 
		$( ".ui-jqgrid-bdiv" ).scrollLeft(   $( ".ui-jqgrid-bdiv" ).scrollLeft()-125 );			 
			t_next=setTimeout(function(){				 
					backScrolling();
					window.check_Timeout=false;
			 
			},200);			
}
	
function stopScrolling(){
	
	// stop increasing scroll position
  clearTimeout(t_next);
	//alert("")
}
 var fixPositionsOfFrozenDivs = function() {
        var $rows;
        if (typeof this.grid.fbDiv !== "undefined") {
            $rows = $('>div>table.ui-jqgrid-btable>tbody>tr', this.grid.bDiv);
            $('>table.ui-jqgrid-btable>tbody>tr', this.grid.fbDiv).each(function(i) {
                var rowHight = $($rows[i]).height(), rowHightFrozen = $(this).height();
                if ($(this).hasClass("jqgrow")) {
                    $(this).height(rowHight);
                    rowHightFrozen = $(this).height();
                    if (rowHight !== rowHightFrozen) {
                        $(this).height(rowHight + (rowHight - rowHightFrozen));
                    }
                }
            });
            $(this.grid.fbDiv).height(this.grid.bDiv.clientHeight);
            $(this.grid.fbDiv).css($(this.grid.bDiv).position());
        }
        if (typeof this.grid.fhDiv !== "undefined") {
            $rows = $('>div>table.ui-jqgrid-htable>thead>tr', this.grid.hDiv);
            $('>table.ui-jqgrid-htable>thead>tr', this.grid.fhDiv).each(function(i) {
                var rowHight = $($rows[i]).height(), rowHightFrozen = $(this).height();
                $(this).height(rowHight);
                rowHightFrozen = $(this).height();
                if (rowHight !== rowHightFrozen) {
                    $(this).height(rowHight + (rowHight - rowHightFrozen));
                }
            });
            $(this.grid.fhDiv).height(this.grid.hDiv.clientHeight);
            $(this.grid.fhDiv).css($(this.grid.hDiv).position());
        }
    };
	function render_col(cellValue, opts, rowObject) {
		if($.trim(cellValue)!=""){
			tam = cellValue.split(";");	
			//tam[1]=tam[1].substring(0,20);			
			//return "<textarea  class='patient_label' title='"+tam[1]+"' >"+tam[1]+"</textarea>";
			//return tam[5];	
			$( "body" ).data( 'id'+tam[0], { Dienthoai: tam[2], Nlienhe: tam[3], Ngayhen: tam[4], Giohen: tam[5],  Idkham: tam[0], Idbenhnhan: tam[6],Ghichu: tam[7] } );			 
			//return "<span  id='id"+tam[0]+"' lang='"+tam[2]+";"+tam[3]+";"+tam[4]+";"+tam[5]+";"+tam[0]+";"+tam[6]+";"+tam[7]+  "' class='patient_label' title='"+tam[1]+"'>"+tam[1]+"</span>";
			return "<span  id='id"+tam[0]+"' class='patient_label' title='"+tam[1]+"'>"+tam[1]+"</span>";
		}else{
			return cellValue;
		}
	}
	function create_person_calendar(){
		
		
	}
	function create_bacsi(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
			colNames: ['Nickname', 'Lịch làm việc'],
            colModel: [
				//{name: 'idnv', index: 'idnv', hidden: true,width:1},
                {name: 'manv', index: 'manv', hidden: false,width:"30%"},
                {name: 'hovaten', index: 'hovaten', hidden: false,width:"60%"},		
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
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

              var rowData = $(this).getRowData(id);
              //alert(rowData);
              $("#thao_37").val(rowData["hovaten"]);

            },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
</script>
 
<?php
	
	function get_system_config(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array('VarName','0','1000000','VarName','ASC','SysVars'," Category='lich_hen_kham'",'*');//tao param cho store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
		foreach ($tam as $row) {//duyet toan bo mang tra ve
			$system_config[$row["VarName"]]=$row["DefaultValue"];
		}  
		return $system_config;
	}
?>
