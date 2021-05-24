<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">

   #first_navigator:hover, #prev_navigator:hover, #next_navigator:hover, #last_navigator:hover {
    background: url("js/grid/themes/south-street/images/ui-bg_highlight-soft_25_67b021_1x100.png") repeat-x scroll 50% 50% #67B021;
    border: 1px solid #327E04;
    color: #FFFFFF;
    font-weight: bold;
}
#ui-id-12.ui-autocomplete-loading {
    background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat;
}
#ui-id-12.ui-button { margin-left: -1px; }     .ui-button-icon-only .ui-button-text { padding: 0.35em; }      .ui-autocomplete-input { margin: 0; padding: 0.48em 0 0.47em 0.45em; }

#ui-id-12.ui-menu {
 width: 500px!important; display:none; position:absolute;
 box-shadow:0px 0px 3px #333;
}
#ui-id-12.ui-state-highlight{
    color:#F60!important;
}
#ui-id-12.ui-menu-item a{
    display:inline-block!important;
}
#ui-id-12.ui-autocomplete {
    max-height: 400px;
    overflow-y: auto;
    overflow-x: hidden;
}
#month,#week {

    width: 199px;
}
#from_day,#to_day{
	width: 94px!important;
}
#menu .disable{

	background-color:#666;
}
.ui-th-column{
    font-size:11px!important;    }
    #rowed3 td,#rowed_xChamCong td{
        /* line-height:25px!important;*/
        font-size:11px!important;
    }
    #prowed4_center{
        padding-left:350px;
    }
    .ui-menu {
        width: auto;
        display:none;
        position:absolute;
        box-shadow:0px 0px 3px #333;
        z-index:100000;
    }
    .sub_grid_lamdon{
        display:none;
    }
    .homnay{
     background-color: #FCF0BA!important;
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
.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {
    background-image: url(/themeroller/images/ui-icons_f0c500_256x240.png);
}
#rowed3_frozen tr td{
  font-size:11px;

}

.giocong {
    /*background-color: red !important;*/
    background-color:#666  !important;
}
.fm-button{
     box-shadow:0px 0px 5px #383838;
     border:1px solid #919191;
      text-shadow: 0 0 0 rgba(0, 0, 0, 0.6) !important;
   }
   .total,.subTotal{
    font-weight:normal!important;
   }

</style>

<div id="colichtrung">
  Tuần chép đã có lịch,bạn phải xóa lịch để chép
</div>
<ul id="menu" class="menu" style="display:none">
    <li class="lichcanhan"><a href="#"><span class="ui-icon ui-icon-calendar"></span>Xem lịch cá nhân</a></li>
    <li class="saochep"><a href="#"><span class="ui-icon ui-icon-scissors"></span>Sao chép</a></li>
    <li class="dan"><a href="#"><span class="ui-icon ui-icon-copy"></span>Dán</a></li>
    <li class="saocheplichtuan"><a href="#"><span class="ui-icon ui-icon-scissors"></span>Sao chép lịch tuần</a></li>
    <li class="danlichtuan"><a href="#"><span class="ui-icon ui-icon-copy"></span>Dán lịch tuần</a></li>
    <li class="xoa"><a href="#"><span class="ui-icon ui-icon-copy"></span>Xóa</a></li>
    <li class="xoatuan"><a href="#"><span class="ui-icon ui-icon-copy"></span>Xóa tuần</a></li>
    <li class="xemchamcong"><a href="#"><span class="ui-icon ui-icon-calculator"></span>Xem chấm công</a></li>

</ul>
<div id="grid_phong_ban">
    <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-resizable" style="width:99.5%;  box-shadow:none!important;  display: block; " >
        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
            <span id="ui-id-5" class="ui-dialog-title">Thông số lịch</span>
        </div>
        <div class="ui-dialog-content ui-widget-content top_main"style="display: block; width: auto; min-height: 0px; max-height: none; height: 100%">
            <div id="calendar_option">
                <div style="float:left">
                    <div class="form_row">
                        <label><input type="radio" lang="theo năm"   id="year_radio" checked  value="years" name="calendar_group">Xem theo năm</label>
                        <span><select name="year" id="year"></select><input value="<?php echo date("Y").'-01-01;'.date("Y").'-12-31'  ?>" type="hidden" name="year_mask" id='year_mask'></span>
                    </div><br>
                    <div class="form_row">
                        <label><input type="radio" lang="theo tháng" value="month" id="month_radio" name="calendar_group" checked="checked">Xem theo tháng</label>
                        <span><input type="text" name="month" id='month' value="<?php
                         $total = cal_days_in_month(CAL_GREGORIAN,  date("m"),  date("Y"));
                         echo "từ: 01/". date("m/Y")." đến: ".$total."/". date("m/Y");
                         ?>" ><input type="hidden" value="<?php
                         $total = cal_days_in_month(CAL_GREGORIAN,  date("m"),  date("Y"));
                         echo date("Y-m")."-01;". date("Y-m")."-".$total;
                         ?>" name="month_mask" id='month_mask'></span>
                     </div><br>
                     <div class="form_row">
                        <label><input type="radio" lang="theo tuần" value="week" id="week_radio" name="calendar_group">Xem theo tuần</label>
                        <span><input type="text" name="week" id='week'><input type="hidden" name="week_mask" id='week_mask'></span>
                    </div><br>
                    <div class="form_row">
                        <label><input type="radio" lang="theo ngày" id="date_range_radio" value="date_range" name="calendar_group">Xem theo ngày</label>
                        <span>
                            <input type="text" name="from_day" id='from_day'>
                            <input type="text" name="to_day" id='to_day'>
                            <input type="hidden" name="from_day_mask" id='from_day_mask'>
                            <input type="hidden" name="to_day_mask" id='to_day_mask'>
                        </span>
                    </div>
                </div>
                <div style="float:left; margin-left:10px;margin-top:25px;">
                    <div class="form_row">
                        <label style="width:70px;">Loại Lịch</label>
                        <span><select name="loailich" id="loailich" ></select><input type="text" style="display:none" name="text_loailich" id='text_loailich'></span>
                    </div><br>

                    <div class="form_row">
                        <label style="width:70px;">Phòng ban</label>
                        <span><select name="phongban" id="phongban" ></select><input type="text" style="display:none" name="text_phongban" id='text_phongban'></span>

                    </div>
                    <br>
                    <div class="form_row">
                        <label style="width:70px;">Tên NV</label>
                        <span class="custom-combobox"><input type="text" name="nhanvien"  class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" id="nhanvien" ><input type="text" style="display:none" name="text_nhanvien" id="text_nhanvien"></span>
                    </div>
                </div>
                <div style="float:left;margin-left:30px;margin-top:22px; ">
                    <a style="margin-left:0px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCal" href="#">Xem lịch<span class="ui-icon ui-icon-search"></span></a>
                    <!-- <a style="margin-left:0px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="sCopy" href="#">Copy Lịch<span class="ui-icon ui-icon-copy"></span></a> <br> -->
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xLog" href="#">Xem log<span class="ui-icon ui-icon-clock"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xChamCong" href="#"><?php lang('xemccong')?>
<span class="ui-icon ui-icon-calculator"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xDuyetlai" href="#">Duyệt lại<span class="ui-icon ui-icon-calculator"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xExcel_ketoan" href="#">Xuất DS Tiền Cơm<span class="ui-icon ui-icon-copy"></span></a><br />

                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xDonChamCong" href="#">Duyệt đơn chấm công<span class="ui-icon ui-icon-document"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xTinhLaiCong" href="#">Tính lại công<span class="ui-icon ui-icon-gear"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xTongHop" href="#">Tổng hợp<span class="ui-icon ui-icon-note"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xExcel" href="#">Xuất Excel<span class="ui-icon ui-icon-copy"></span></a>
                    <a style="margin-top:2px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="xExcel_cangtin" href="#">Excel-Căngtin<span class="ui-icon ui-icon-copy"></span></a>
                </div>
            </div>
        </div>
        <table id="rowed3" style="width:100%" ></table>
        <div id="prowed3"></div>
    </div>

    <!-- template donsuco-->

</body>
</html>
<script type="text/javascript">
    jQuery(document).ready(function() {

       <?php echo 'window.chucvu='.$_SESSION["user"]["chucvu"].';';
       echo 'window.id_phongban_userlogin='.$_SESSION["user"]["id_phongban"].';';
       echo 'window.id_nhanvien_userlogin='.$_SESSION["user"]["id_user"].';';
       ?>

		openform_shortcutkey();
       $("#xExcel_cangtin").click(function(e) {
         var elem;
            var elem1 = [];
           $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
            if ($(this).is(':checked')) {
                if ($(this).attr("id") == "date_range_radio") {
                    elem1[0] = $("#from_day_mask").val();
                    elem1[1] = $("#to_day_mask").val();
                } else {
                    elem = ($(this).attr("id")).split("_");
                    elem = $("#" + elem[0] + "_mask");
                    elem1 = (elem.val()).split(";");
                }
            }
        });

     
         window.open("pages.php?module=report&view=danhmuc&action=excel_Tonghoplogcanteen_nv&type=excel&fromdate="+elem1[0]+"&todate="+elem1[1]);


     });


       $("#xExcel").click(function(e) {
   var elem;
   var elem1 = [];
   $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});

         window.open("pages.php?module=report&view=lich_lam_viec&action=xuat_excel_tonghopcong&type=excel&fromdate="+elem1[0]+"&todate="+elem1[1]);
        //showGetResult();

     });
       $("#xExcel_ketoan").click(function(e) {
   var elem;
   var elem1 = [];
   $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});

         window.open("pages.php?module=report&view=lich_lam_viec&action=xuat_excel_tonghoptiencom_ketoan&type=excel&fromdate="+elem1[0]+"&todate="+elem1[1]);
        //showGetResult();

     });


       window.tonggiocongNhanvien=0;


       window.scrollPositiontop=0;
       window.scrollPositionleft=0;
       $("#colichtrung").dialog({
        autoOpen: false,
        height: 140,
        modal: false,
        zIndex: 2000,
        stack: true,
        buttons: {
            "Xóa Lịch cũ": function() {
             window.colich=1;
             $('.danlichtuan').trigger('click');
             $(this).dialog("close");
         },
         Cancel: function() {
            $(this).dialog("close");
        }
    },
    close: function(event, ui) {

    }

});

       window.colich=0;





       del();
       pastelichtuan();
       copylichtuan();
       del_tuan();
       $( "#beginning" ).button({
          text: false,
          icons: {
            primary: "ui-icon-seek-start"
        }
    });
       loadphongban();
       "use strict";
       window.id_focus="";
       window.kiemtradan = false;
       window.lichtuan=false;
       $(".lichcanhan").click(function() {
        tam = window.from.split("-")
        var firstDay = new Date(tam[0], tam[1] - 1, 1);
        var lastDay = new Date(tam[0], tam[1], 0);
        firstDay2 = $.datepicker.formatDate("yy-mm-dd", firstDay);
        lastDay2 = $.datepicker.formatDate("yy-mm-dd", lastDay);
        parent.postMessage("molichcanhan;" + window.nickname1 + ";" + $("#phongban1").val() + ";" + firstDay2 + "_" + lastDay2 + "_" + window.rowid, "*");
    });
       $("#menu").menu();
       $(document).bind("mouseup", function(e) {
        $("#menu").hide();
    });
       var currentTime = new Date();
       tam = parseInt(currentTime.getFullYear()) + 1;
       for (i = 2013; i <= tam; i++) {
        $('#year').append($('<option>', {
            value: i,
            text: i
        }));
    }
    $('#year').click(function() {
        $("#" + this.id + "_radio").prop("checked", true);
    })
    $('#year').val("<?php echo date("Y")?>");
    $('#year').change(function() {
        year = $("option:selected", this).text();
        $("#year_mask").val(year + "-01-01;" + year + "-12-31");
    })
    $('#month').click(function() {
        $("#" + this.id + "_radio").prop("checked", true);
    })
    $('#week').click(function() {
        $("#" + this.id + "_radio").prop("checked", true);
    })
    $('#to_day,#from_day').click(function() {
        $("#date_range_radio").prop("checked", true);
    })
    year_range = '2013:' + tam;
    $("#month").datepicker({
        changeMonth: true,
        firstDay: 1,
        changeYear: true,
        showWeek: true,
            //dateFormat: "mm",
            numberOfMonths: 1,
            yearRange: year_range,
            onChangeMonthYear: function(year, month, widget) {
               var firstDay = new Date(year, month - 1, 1);
               var lastDay = new Date(year, month, 0);
               firstDay1 = $.datepicker.formatDate("dd/mm/yy", firstDay);
               lastDay1 = $.datepicker.formatDate("dd/mm/yy", lastDay);
               $('#month').val('từ: ' + firstDay1 + ' đến: ' + lastDay1);
               firstDay2 = $.datepicker.formatDate("yy-mm-dd", firstDay);
               lastDay2 = $.datepicker.formatDate("yy-mm-dd", lastDay);
               $('#month_mask').val(firstDay2 + ';' + lastDay2);
               window.scrollPositiontop  =0;
               window.scrollPositionleft =0;
               $("#sCal").trigger('click');
           },
           onSelect: function(dat, inst) {
                //var week=$.datepicker.iso8601Week(new Date(dat));
                //$('#month').val($.datepicker.formatDate('yy',new Date(dat))+(week<10?'0':'/')+week);
                var month = $.datepicker.formatDate('mm', new Date(dat));
                var year = $.datepicker.formatDate('yy', new Date(dat));
                var firstDay = new Date(year, month - 1, 1);
                var lastDay = new Date(year, month, 0);
                firstDay1 = $.datepicker.formatDate("dd/mm/yy", firstDay);
                lastDay1 = $.datepicker.formatDate("dd/mm/yy", lastDay);
                $('#month').val('từ: ' + firstDay1 + ' đến: ' + lastDay1);
                firstDay2 = $.datepicker.formatDate("yy-mm-dd", firstDay);
                lastDay2 = $.datepicker.formatDate("yy-mm-dd", lastDay);
                $('#month_mask').val(firstDay2 + ';' + lastDay2);
                window.scrollPositiontop =0;
                window.scrollPositionleft = 0;
                $("#sCal").trigger('click');
            }
        });

$("#week").datepicker({
    showWeek: true,
    firstDay: 1,
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
    yearRange: year_range,
    onSelect: function(dat, inst) {
        var week = $.datepicker.iso8601Week(new Date(dat));

        var date = new Date(dat);
        var date1 = new Date(dat)
        var day = date.getDay() || 7;
        var day1 = date1.getDay() || 7;
        date.setHours(-24 * (day - 1));
        firstDay2 = $.datepicker.formatDate("yy-mm-dd", date);
        date1.setHours(-24 * (day1 - 7));
        lastDay2 = $.datepicker.formatDate("yy-mm-dd", date1);
        firstDay3 = $.datepicker.formatDate("dd/mm/yy", date);
        lastDay3 = $.datepicker.formatDate("dd/mm/yy", date1);
        $('#week').val("tuần: " + (week < 10 ? '0' : '') + week + " từ: "+firstDay3+" đến:"+lastDay3);
        $('#week_mask').val(firstDay2 + ";" + lastDay2);
                //alert($.datepicker.formatDate('',new Date(dat))+(week<10?'0':'')+week);week_mask
                window.scrollPositiontop =0;
                window.scrollPositionleft = 0;
                $("#sCal").trigger('click');
            }
        });
var fromday, today;
$("#from_day").datepicker({
    showWeek: true,
    firstDay: 1,
    defaultDate: "+1w",
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
    dateFormat: "dd/mm/yy",
    yearRange: year_range,
    onClose: function(selectedDate) {

        var date1=selectedDate.split("/").reverse().join("/");
        date1=(new Date(date1)).addDays(1);
        date1=$.datepicker.formatDate('yy/mm/dd', new Date(date1));

        $("#to_day").datepicker("option", "minDate", date1.split("/").reverse().join("/"));
        if(($("#from_day_mask").val()!='')&&($("#to_day_mask").val()!='')){
          $("#sCal").trigger('click');
      }


  },
  onSelect: function(dat, inst) {
    $("#from_day_mask").val(dat.split("/").reverse().join("-"));
}
});
$("#to_day").datepicker({
    showWeek: true,
    firstDay: 1,
    defaultDate: "+1w",
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
    dateFormat: "dd/mm/yy",
    yearRange: year_range,
    onClose: function(selectedDate) {
        var date1=selectedDate.split("/").reverse().join("/");
        date1=(new Date(date1)).addDays(-1);
        date1=$.datepicker.formatDate('yy/mm/dd', new Date(date1));
        $("#from_day").datepicker("option", "maxDate", date1.split("/").reverse().join("/"));

        if(($("#from_day_mask").val()!='')&&($("#to_day_mask").val()!='')){
          $("#sCal").trigger('click');
      }
  },
  onSelect: function(dat, inst) {

    $("#to_day_mask").val(dat.split("/").reverse().join("-"));
}
});
window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0 and Active=1&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
    if (!result)
        alert('Không load được danh mục phòng ban');
}}).responseText;
phongban1 = phongban.split(";");
for (i = 0; i <= phongban1.length - 1; i++) {
    temp = phongban1[i].split(":");
    $('#phongban').append($('<option>', {
        value: temp[0],
        text: temp[1]
    }));
}
window.abc=	 $.ajax({
    url: "pages.php?module=web_services&function=get_auto_complete&action=index",
    dataType:"json",
    async:false
}).responseText;
					//alert(window.abc)
                  window.abc =	jQuery.parseJSON( window.abc);
                  window.loailich = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=1&tables=DM_LoaiLich&id=ID_LoaiLich&name=TenLoaiLich', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục phòng ban');
                }}).responseText;

                  loailich1 = loailich.split(";");

                  for (i = 0; i <= loailich1.length - 1; i++) {
                    temp = loailich1[i].split(":");
                    $('#loailich').append($('<option>', {
                        value: temp[0],
                        text: temp[1]
                    }));
                }
                autocompleted_combobox_callback('#phongban',reload_grid);
                autocompleted_combobox_callback('#loailich',reload_grid);
      //autocompleted_combobox('#nhanvien');
      autocomplex_mutil ('#nhanvien',window.abc,'#text_nhanvien')
      $("#sCopy").click(function() {
        dialog_form("Copy sửa lịch", 800, 400)


    });
      $("#xTinhLaiCong").click(function() {
          tinhlaicong();


      });
      $("#xLog").click(function()
      {
        var tam;
        var elem;
        var elem1 = [];
        $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
            if ($(this).is(':checked')) {
                tam = $(this).attr('lang');
                if ($(this).attr("id") == "date_range_radio") {
                    elem1[0] = $("#from_day_mask").val();
                    elem1[1] = $("#to_day_mask").val();
                } else {
                    elem = ($(this).attr("id")).split("_");
                    elem = $("#" + elem[0] + "_mask");
                    elem1 = (elem.val()).split(";");
                }
            }
        });
        var d = new Date(elem1[0]);
        var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var dateFrom=curr_date + "/" + curr_month + "/" + curr_year;


    var d2 = new Date(elem1[1]);
    var curr_date2 = d2.getDate();
    var curr_month2 = d2.getMonth() + 1; //Months are zero based
    var curr_year2 = d2.getFullYear();
    var dateTo=curr_date2 + "/" + curr_month2 + "/" + curr_year2;



    dialog_sub_grid_xem_log("Xem log chấm công " + tam + " từ ngày " + dateFrom + " đến ngày " + dateTo, 730, 500, '', '');
            // alert('ds');
        })
		$("#xChamCong").click(function(){
            //dialog_sub_grid_xem_log("Xem log chấm công",1000,500,'2013-7-1','2013-7-31');
            // alert('ds');

			showGetResultTotalGio();
            dialog_sub_grid_xem_chamcong("Xem chấm công", "1240px", "600px",0);
        })
		
		
		$(".xemchamcong").click(function(){   
			showGetResultTotalGio_new();
            dialog_sub_grid_xem_chamcong("Xem chấm công", "1240px", "600px",1);
        })		
		
		
$("#xDonChamCong").click(function()

{

   var elem;
   var elem1 = [];
   $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});
        //alert( elem1[0])
        dialog_main("Duyệt đơn chấm công " + ' nhân viên', 98, 98, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=formduyetdon&type=test&id_form=139&fromdate="+elem1[0]+"&todate="+elem1[1]);
          /////////////////////
      })
$("#xDuyetlai").click(function()

{

   var elem;
   var elem1 = [];
   $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});
        //alert( elem1[0])
        dialog_main("Xem chấm công và duyệt lại" + ' nhân viên', 98, 98, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=formduyetlai&type=test&id_form=139&fromdate="+elem1[0]+"&todate="+elem1[1]);
          
      })
$("#xTongHop").click(function()

{

   var elem;
   var elem1 = [];
   $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});
        //alert( elem1[0])
        dialog_main("Xem tổng hợp " + ' ', 98, 98, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=formTongHop&type=test&id_form=139&fromdate="+elem1[0]+"&todate="+elem1[1]);

    })
$('#phongban').val(window.id_phongban_userlogin);
$('#text_nhanvien').val(window.id_nhanvien_userlogin);
$('#nhanvien').val("<?=$_SESSION["user"]["fullname"]?>")
$('#text_nhanvien').val(window.id_nhanvien_userlogin);
$('#optiontinhlaicong').click(function(){
    alert("click")   ;
})

$('#phongban1').val($('#phongban :selected').text());
 // alertObject($('#phongban :selected').text());
        //autocompleted("#text_phongban","pages.php?module=web_services&function=get_auto_complete&action=index",2)
        $("#sCal").click(function(e) {
         if(e.hasOwnProperty('originalEvent')){
            window.scrollPositiontop =0;
            window.scrollPositionleft = 0;
        }


        creat_grid();
        window.id_phongbancopy=$("#phongban option:selected").val();
        window.id_loailichcopy=$("#loailich option:selected").val();
        if($.trim(id_loailichcopy)==''){
            window.id_loailichcopy=0;
        }
        if((window.id_phongban_copy!=id_phongbancopy)||(window.id_lich_copy!=id_loailichcopy)){
           window.lichtuan=false;
           $('.saocheplichtuan').html('<a><span class="ui-icon ui-icon-scissors"></span>Sao chép lịch tuần</a>');
       }
       quyencopy();
       $("#rowed3").setGridWidth($(window).width() - 30);
       $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_phong_ban").height() - 268);
       $(window).resize(function() {
        $("#rowed3").setGridWidth($(window).width() - 30);
        $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_phong_ban").height() - 268);
    });
   });
phanquyen();
$('#sCal').trigger('click')
});
function  right_menu(rowid, iCol, e) {
        //$(".lichcanhan").attr("lang","");
        var grid = jQuery('#rowed3');
        var colModel = grid.getGridParam('colModel');
        window.from = colModel[iCol].name;
        window.nickname1 = grid.getCell(rowid, 'name')
        window.rowid = rowid;
        window.icol = iCol;
    }
    function creat_sub_grid(row, colName, rowID) {
        lastsel = 0;
        //ids =0;
        var focus_status =-1;
        window.y==1;
        var followupDate = new Date(colName);
        var followupDate1 = new Date(colName);
        $("#rowed4").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich1&q=2&idphong=' + row + '&from=' + colName + '' + '&loailich=' + $("#loailich option:selected").val() + '&idnhanvien=' + rowID ,
            datatype: "json",
            colNames: ['Id', 'Tên Loại Lịch', 'ngay', 'Giờ Bắt Đầu', 'Giờ Kết Thúc', 'Tên', 'Chấm Công', 'Phòng Ban', 'Ghi chú'],
            colModel: [
            {name: 'ID_LichLamViec', index: 'ID_LichLamViec', key: true, search: false, width: "2%", editable: false, align: 'right', hidden: true},
            {name: 'TenLoaiLich', index: 'TenLoaiLich', width: "200%", align: 'center', formatter: "select", edittype: "select", hidden: false, editoptions: {value: tenloailich1, defaultValue: '1', }, formoptions: {}},
            {name: 'ngay', index: 'ngay', width: "2%", editable: true, align: 'right', hidden: true, editoptions: {}},
            {name: 'GioBatDau', index: 'GioBatDau', width: "100%", edittype: "text", align: 'center', editable: true, editrules: {required: true, time: true}, editoptions: {
                dataInit: function(element) {
                    $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                    $(element).addClass('timeRange');
                    $(element).addClass('canhgiua');
                }, defaultValue: "00:00"
            }},
            {name: 'GioKetThuc', index: 'GioKetThuc', width: "100%", align: 'center', editable: true,newgrid:true,func_grid:"save_func", editrules: {required: true, time: true}, editoptions: {
                dataInit: function(element) {
                    $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                    $(element).addClass('timeRange');
                    $(element).addClass('canhgiua');
                }, defaultValue: "00:00"
            }, editrules:{required: true,custom: true, custom_func: function(value, colName) {
                var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                return TimeCheck(id_row);

            }}},
            {name: 'Id_NhanVien', index: 'Id_NhanVien', width: "100%", editable: true, align: 'left', hidden: false, edittype: "select", formatter: "select", editoptions: {value: nickname2, defaultValue: rowID}},
            {name: 'IsChamCong', index: 'IsChamCong', width: "100%", editable: true, align: 'center', edittype: "checkbox", editoptions: {value: "1:0", defaultValue: "1"}, formatter: "checkbox", formatoptions: {"disabled": true}, hidden: false },
            {name: 'ID_PhongBan', index: 'ID_PhongBan', width: "200%", editable: true, align: 'center', formatter: "select", edittype: "select", hidden: false, editoptions: {value: phongban2}, formoptions: {}},
            {name: 'GhiChu', index: 'GhiChu', width: "200%", editable: true, align: 'left', hidden: false, edittype: "textarea", formoptions: {}},
            ],
            data :["onclose"],
            grid_save_option: "",
            editurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1',
            rowNum: -1,
            pager: '#prowed4',
            gridview: true,
            page: followupDate.getDate(),
            sortname: 'Id',
            shrinkToFit: false,
            height: 250,
            width:"auto",
            sortorder: "asc",
            serializeRowData: function(postdata) {
                jQuery("#rowed4").trigger("reloadGrid");
                return postdata;
            },
            onSelectRow: function(id) {

            },
            loadComplete: function() {
                if(lastsel==0){

                   if ($('#rowed4').jqGrid('getGridParam','records')>0){
                      $('#rowed4').jqGrid('setSelection',$("#rowed4").getDataIDs()[0]);
                      $('#rowed4 #'+$("#rowed4").getDataIDs()[0]).focus()
                  }
              }else{
                $('#rowed4 #'+lastsel).focus();
                $('#rowed4').jqGrid('setSelection',lastsel);
            }
            $("#rowed4_ilsave").addClass('ui-state-disabled');
            $("#rowed4_ilcancel").addClass('ui-state-disabled');
            $("#rowed4_iladd").removeClass('ui-state-disabled');
            $("#rowed4_iledit").removeClass('ui-state-disabled');
            var loailich = $("#loailich option:selected").val()
            if (loailich == "") {
                $("#rowed4").setColProp('TenLoaiLich', {editable: true});
                $("#rowed4").setColProp('TenLoaiLich', {editoptions: {defaultValue: '1'}});
            } else
            {
                $("#rowed4").setColProp('TenLoaiLich', {editoptions: {defaultValue: loailich}});
                $("#rowed4").setColProp('TenLoaiLich', {editable: true, editoptions: {readonly: true}});
            }
            var tinh = $("#rowed4").getGridParam('page') - followupDate.getDate();
            var newdate = (new Date(followupDate1)).addDays(tinh);
            var newdate1 = $.datepicker.formatDate("D dd-mm-yy", new Date(newdate));
            var newdate2 = $.datepicker.formatDate("dd-mm-yy", new Date(newdate));
            $("#rowed4").setColProp('ngay', {editoptions: {defaultValue: newdate2}});
            var tuan = $.datepicker.iso8601Week(newdate);
            $("#rowed4").jqGrid('destroyGroupHeader');
            $("#rowed4").jqGrid('setGroupHeaders', {useColSpanStyle: true, groupHeaders: [
                {startColumnName: 'GioBatDau', numberOfColumns: 2, titleText: 'Tuần  ' + tuan + ' ' + newdate1}, ]});



        },
        ondblClickRow: function(rowId, rowIndex, columnIndex) {

            window.y=1
            $("#prowed4 .ui-icon-pencil").click();
            $('#rowed4').jqGrid('setSelection',rowId);

            $("textarea,select,input,a").focus(function() {
                $(this).css("box-shadow", "0px 0px 4px 2px #208ac8")
            });

            $("textarea,select,input,a").focusout(function() {
                $(this).css("box-shadow", "");
            });
            ischamconglich1 = window.ischamconglich.split(";");
            chamconglich1= window.chamconglich.split(";");
            TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
            for(i=0;i<=chamconglich1.length-1;i++){
                chamconglich2 = chamconglich1[i].split(":");
                ischamconglich2 = ischamconglich1[i].split(":");
                if (chamconglich2[0]===TenLich){
                   if(ischamconglich2[1]==1){
                      $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
                  }else{
                      $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
                  }
                  if(chamconglich2[1]==0){
                      $("#rowed4").setColProp('GioBatDau', {editrules: null});
                      $("#rowed4").setColProp('GioKetThuc', {editrules: null});
                      $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
                      $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);

                  }else{
                      $("#rowed4").setColProp('GioBatDau', {editrules:{custom: true, custom_func: function(value, colName) {
                         var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                         return TimeCheck(id_row);
                     }}
                 });
                      $("#rowed4").setColProp('GioKetThuc', {editrules:{custom: true, custom_func: function(value, colName) {
                         var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                         return TimeCheck(id_row);
                     }}
                 });
                      $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
                      $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
                  }
                  break;
              }
          }
      },
      caption: ""
  });
$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
 window.y=0;
 $("#prowed4 .ui-icon-pencil").click();
} } );
        $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: true, search: false, closeAfterEdit: true, clearAfterAdd: true, refreshstate: 'current', reloadAfterSubmit: true}, //options
        {}, // edit options
        {}, // add options
        {reloadAfterSubmit: true, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&oper=del'}, // del options
        {height: 'auto', width: 'auto'} // search options
        );
        $("#rowed4").jqGrid('inlineNav', '#prowed4', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
                keys: true,
                position: "last",
                mtype: 'post',
                addRowParams: {
                    keys: true,
                    oneditfunc: function(rowId) {
                      ischamconglich1 = window.ischamconglich.split(";");
                      chamconglich1= window.chamconglich.split(";");
                      $("#"+rowId +"_TenLoaiLich" ).bind('change keyup', function(e) {
                         TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
                         for(i=0;i<=chamconglich1.length-1;i++){
                            chamconglich2 = chamconglich1[i].split(":");
                            ischamconglich2 = ischamconglich1[i].split(":");
                            if (chamconglich2[0]===TenLich){
                               if(ischamconglich2[1]==1){
                                  $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
                              }else{
                                  $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
                              }
                              if(chamconglich2[1]==0){
                                  $("#rowed4").setColProp('GioBatDau', {editrules: null});
                                  $("#rowed4").setColProp('GioKetThuc', {editrules: null});
                                  $("#rowed4 #"+rowId+"_GioBatDau").val("");
                                  $("#rowed4 #"+rowId+"_GioKetThuc").val("");
                                  $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
                                  $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);
                                  if((e.keyCode==13 || e.keyCode ==9 )){
                                     if(e.shiftKey) {
                                     }else{
                                         $("#rowed4 #"+rowId+"_Id_NhanVien").focus();
                                     }
                                 }
                             }else{
                              $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
                              $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
                                 var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                                 return TimeCheck(id_row);
                             }}
                         });
                              $("#rowed4 #"+rowId+"_GioBatDau").val("00:00");
                              $("#rowed4 #"+rowId+"_GioKetThuc").val("00:00");
                              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
                              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
                              if((e.keyCode==13 || e.keyCode ==9 )){
                                 if(e.shiftKey) {
                                 }else{
                                     $("#rowed4 #"+rowId+"_GioBatDau").focus();
                                 }
                             }
                         }
                         break;
                     }
                 }
							//$('#'+current_rowed6).removeClass("ui-state-highlight");


						});
$("#rowed4").jqGrid('unbindKeys');
$('#' + rowId + '_GioBatDau').focus();
$('#rowed4 #'+rowId+"_GioBatDau").css("box-shadow", "0px 0px 4px 2px #208ac8")
$("textarea,select,input,a").focus(function() {
  $(this).css("box-shadow", "0px 0px 4px 2px #208ac8")
});
$("textarea,select,input,a").focusout(function() {
  $(this).css("box-shadow", "");
});
jwerty.key('tab', false);
},
aftersavefunc: function(rowId, response, lastsel) {
 if (response.responseText == 1) {
 } else {
     $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
      $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
      $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
         var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
         return TimeCheck(id_row);
     }}
 });
      window.y=0;
      $("#prowed4 .ui-icon-pencil").click();
  } } );
     setTimeout(function(){
       $("#prowed4 .ui-icon-plus").click();
   },200);
     $("#rowed4").focus();
     tooltip_message("Lưu dữ liệu thành công");
     temp = String(response.responseText).split(";");
     window.lastsel = $.trim(temp[1]);
 }
},
afterrestorefunc: function(id) {
  if (isNaN(id)){
     $('#rowed4 #'+id).focus()
     $('#rowed4').jqGrid('setSelection',id);
 }
 $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
  window.y=0;
  $("#prowed4 .ui-icon-pencil").click();
} } );
 setTimeout(function(){
   $("#prowed4 .ui-icon-plus").click();
},200);

 $("#rowed4").focus();
 $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
 $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
     var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
     return TimeCheck(id_row);
 }}
});
 window.lastsel = -1;

 var id_rowed4=$('#rowed4').jqGrid('getDataIDs');
 setTimeout(function(){$("#rowed4").jqGrid('setSelection', id_rowed4[id_rowed4.length-2],true);$("#prowed4 .ui-icon-pencil").click();},300);


},
}
},
editParams: {
    keys: true,
    oneditfunc: function(rowId) {
      ischamconglich1 = window.ischamconglich.split(";");
      chamconglich1= window.chamconglich.split(";");
      TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
      for(i=0;i<=chamconglich1.length-1;i++){
        chamconglich2 = chamconglich1[i].split(":");
        ischamconglich2 = ischamconglich1[i].split(":");
        if (chamconglich2[0]===TenLich){
           if(ischamconglich2[1]==1){
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
          }else{
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
          }
          if(chamconglich2[1]==0){
              $("#rowed4").setColProp('GioBatDau', {editrules: null});
              $("#rowed4").setColProp('GioKetThuc', {editrules: null});
              $("#rowed4 #"+rowId+"_GioBatDau").val("");
              $("#rowed4 #"+rowId+"_GioKetThuc").val("");
              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);
              $('#' + rowId + '_TenLoaiLich').focus();
              $('#rowed4 #'+rowId+"_TenLoaiLich").css("box-shadow", "0px 0px 4px 2px #208ac8");
          }else{
              $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
              $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
                 var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                 return TimeCheck(id_row);
             }}
         });
              if($("#rowed4 #"+rowId+"_GioBatDau").val()==""){
                  $("#rowed4 #"+rowId+"_GioBatDau").val("00:00");
                  $("#rowed4 #"+rowId+"_GioKetThuc").val("00:00");
              }
              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
              $('#' + rowId + '_GioBatDau').focus();
              $('#rowed4 #'+rowId+"_GioBatDau").css("box-shadow", "0px 0px 4px 2px #208ac8");
          }
          break;
      }
  }
  $("#"+rowId +"_TenLoaiLich" ).bind('change keyup', function(e) {
     TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
     for(i=0;i<=chamconglich1.length-1;i++){
        chamconglich2 = chamconglich1[i].split(":");
        ischamconglich2 = ischamconglich1[i].split(":");
        if (chamconglich2[0]===TenLich){
           if(ischamconglich2[1]==1){
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
          }else{
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
          }
          if(chamconglich2[1]==0){
              $("#rowed4").setColProp('GioBatDau', {editrules: null});
              $("#rowed4").setColProp('GioKetThuc', {editrules: null});
              $("#rowed4 #"+rowId+"_GioBatDau").val("");
              $("#rowed4 #"+rowId+"_GioKetThuc").val("");
              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);
              if((e.keyCode==13 || e.keyCode ==9 )&&window.y>0){
                 if(e.shiftKey) {
                 }else{
                     $("#rowed4 #"+rowId+"_Id_NhanVien").focus();
                 }
             }else{
                 y++;
             }
         }else{
          $("#rowed4").setColProp('GioBatDau', {editrules:{custom: true, custom_func: function(value, colName) {
             var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
             return TimeCheck(id_row);
         }}
     });
          $("#rowed4").setColProp('GioKetThuc', {editrules:{custom: true, custom_func: function(value, colName) {
             var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
             return TimeCheck(id_row);
         }}
     });
          if($("#rowed4 #"+rowId+"_GioBatDau").val()==""){
              $("#rowed4 #"+rowId+"_GioBatDau").val("00:00");
              $("#rowed4 #"+rowId+"_GioKetThuc").val("00:00");
          }
          $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
          $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
          if((e.keyCode==13 || e.keyCode ==9 )&&window.y>0){
             if(e.shiftKey) {
             }else{
                 $("#rowed4 #"+rowId+"_GioBatDau").focus();
             }
         }else{
             y++;
         }
     }
     break;
 }
}
});
$("#rowed4").jqGrid('unbindKeys');
$("textarea,select,input,a").focus(function() {
    $(this).css("box-shadow", "0px 0px 4px 2px #208ac8")
});
$("textarea,select,input,a").focusout(function() {
  $(this).css("box-shadow", "");
});
jwerty.key('tab', false);
},
aftersavefunc: function(rowId, response) {

 $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
     window.y=0;
     $("#prowed4 .ui-icon-pencil").click();
 } } );
 setTimeout(function(){
   $("#prowed4 .ui-icon-plus").click();
},200);
 $("#rowed4").focus();
 $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
 $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
     var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
     return TimeCheck(id_row);
 }}
});
 tooltip_message("Sửa dữ liệu thành công");
							//alert(getCurrPos());
							var id_rowed4=$('#rowed4').jqGrid('getDataIDs');
							for(var i=0;i<=id_rowed4.length-1;i++){
								if(id_rowed4[i]==rowId){
									if(i==id_rowed4.length-1){

                                        setTimeout(function(){$("#prowed4 .ui-icon-plus").click();},300);
                                        break;
                                    }else{
                                       var ida=(id_rowed4[i+1]);
                                       setTimeout(function(){$("#rowed4").jqGrid('setSelection', ida,true);$("#prowed4 .ui-icon-pencil").click();},300);

                                       break; }
                                   }
                               }
                               window.lastsel = rowId;

                           },
                           afterrestorefunc: function(rowId) {
                               $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
                                   window.y=0;
                                   $("#prowed4 .ui-icon-pencil").click();
                               } } );
                               setTimeout(function(){
                                   $("#prowed4 .ui-icon-plus").click();
                               },200);
                               $("#rowed4").focus();
                               $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
                               $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
                                 var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                                 return TimeCheck(id_row);
                             }}
                         });

                               window.lastsel = -1;
                           }
                       }
                   });
}
    function creat_sub_grid_XemLog(tungay, denngay) {
        var elem;
        var elem1 = [];
        $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
            if ($(this).is(':checked')) {
                if ($(this).attr("id") == "date_range_radio") {
                    elem1[0] = $("#from_day_mask").val();
                    elem1[1] = $("#to_day_mask").val();
                } else {
                    elem = ($(this).attr("id")).split("_");
                    elem = $("#" + elem[0] + "_mask");
                    elem1 = (elem.val()).split(";");
                }
            }
        });

        $("#rowed_xLog").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_log_chamcong&from=' + elem1[0] + '&to=' + elem1[1] + '&idphong=' + $("#phongban option:selected").val(),
            datatype: "json",
            colNames: ['cID', 'Tuần', 'Ngày', 'Tên', 'Giờ', 'Tên ngón', 'NgayThu','Chấm tại','Tạo lúc','cIndex',''],
            colModel: [
                {name: 'cID', index: 'cID', search: false, width: "80%", editable: false, align: 'right', hidden: false},
                {name: 'TuanThu', index: 'TuanThu', width: "50%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'Ngay', index: 'Ngay', width: "80%", align: 'center', formatter: laytenngay, edittype: "select", hidden: false, formoptions: {}},
                {name: 'TenNhanVien', index: 'TenNhanVien', width: "50%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'Gio', index: 'Gio', width: "50%", align: 'center', editable: true, editrules: {required: true, time: true}},
                {name: 'TenNgon', index: 'TenNgon', width: "50%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'dayweek', index: 'dayweek', width: "0%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
                {name: 'cDevive', index: 'cDevive', width: "50%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'timecreate', index: 'timecreate', width: "80%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'cIndex', key: true, index: 'cIndex', width: "0%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
                {name: 'cDateTime', key: true, index: 'cDateTime', width: "0%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
            ],
            rowNum: 1000000,
            pager: '#prowed4',
            loadonce:true,
            gridview: true,
            viewrecords: true,
            sortname: 'cDateTime',
            shrinkToFit: false,
            height: 330,
            width: 690,
            sortorder: "desc",
            grouping: true,
            ignoreCase:true,
            groupingView: {groupField: ['TuanThu', 'Ngay', 'TenNhanVien'],
                groupOrder: ['desc', 'des', 'asc'],
                // groupSummary : [true,true],
                showSummaryOnHide: false,
                groupColumnShow: [true, true, true],
                groupText: ['<b style="color:red"> Tuần {0}</b>', '<b style="color:blue">{0}</b>', '<b style="color:green">{0}</b>'],
                groupCollapse: false,
            },
            footerrow: true,
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            },




     loadComplete: function(data) {
            ids3 = $('#rowed_xLog').jqGrid('getDataIDs');   //cell1 = $('#rowed_xLog').jqGrid('getCell');


            for (i = 0; i < ids3.length; i++)
            {

                  $("#rowed_xLog").setCell(ids3[i], 'Gio','', {background: '#d9f970'});

           }
         }
            ,

            caption: "Log chi tiết " + $("#phongban1").val()

      });

$("#rowed_xLog").jqGrid('filterToolbar', {
    searchOnEnter: false,

    searchOperators: false
});
    }

     function creat_sub_grid_XemChamCong_new(tam) {

		if(tam==0){
				var id_nhanvien=	$("#text_nhanvien").val();
				var tennv=$("#nhanvien").val()
				if (id_nhanvien==''){
		
		
					alert('Hãy chọn nhân viên');
			  // continue thoat;
			  return;
		  }
		}else{
			 var id_nhanvien=rowid
			 var tennv=nickname1
			 
		}
  
  
  
  var elem;
  var elem1 = [];
  $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});
  var d = new Date(elem1[0]);
  var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var dateFrom=curr_date + "/" + curr_month + "/" + curr_year;


    var d2 = new Date(elem1[1]);
    var curr_date2 = d2.getDate();
    var curr_month2 = d2.getMonth() + 1; //Months are zero based
    var curr_year2 = d2.getFullYear();
    var dateTo=curr_date2 + "/" + curr_month2 + "/" + curr_year2;

    $("#rowed_xChamCong").jqGrid({
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_chamcong_newB&from=' + elem1[0] + '&to=' + elem1[1] + '&ID_NhanVien=' + id_nhanvien,
        datatype: "json",
        colNames: ['ID_ChamCong', 'ID_NhanVien', 'Tháng', 'Tuần', 'Tên', 'Ngày','s','GCông',
        'Giờ công tổng','Nghỉ giữa ca', 'Lịch - công và log','Ngoại viện', 'Log Ko hợp lệ','Trễ sớm','Log Trễ sớm',
        'TG CB', 'dayweek','Ghi chú - Cảnh báo từ hệ thống','Năm', 
        'Id_Donchamcong', 'Sự cố','Cập nhật cuối','Bởi','Lịch sửa lúc','Log tại máy','Giờ trực','','','','IsDuyetDonUpdate'],
        colModel: [
        {name: 'ID_ChamCong', index: 'ID_ChamCong', key: true, search: false, width: "100%", editable: false, align: 'right', hidden: true},
        {name: 'ID_NhanVien', index: 'ID_NhanVien', key: true, search: false, width: "100%", editable: false, align: 'right', hidden: true},
        {name: 'Thang', index: 'Thang', width: "40%", align: 'center', edittype: "select", hidden: false },
        {name: 'Tuan', index: 'Tuan', width: "40%", align: 'center', edittype: "select", hidden: false },
        {name: 'NickName', index: 'NickName', width: "40%", align: 'center', edittype: "select", hidden: true},
        {name: 'Ngay',sortable:false, index: 'Ngay', width: "25%", formatter: tomauNgayChamCong, align: 'center', edittype: "select", hidden: false,},
        {name: 'ngaygoc', index: 'ngaygoc', width: "0%", align: 'center', edittype: "select", hidden: true,},

        {name: 'TongCong', index: 'TongCong',formatter: 'number', formatoptions: { decimalPlaces: 2}, summaryType: 'sum', width: "0%", align: 'center', hidden: true,},

        {name: 'TC',sortable:false, index: 'TC', summaryType: 'sum', width: "12%", align: 'center', hidden: false, },
        {name: 'ThoiLuongNghiGiuaCa',hidden: true,sortable:false, index: 'ThoiLuongNghiGiuaCa', summaryType: 'sum', width: "10%", align: 'center', },


        {name: 'ChiTietCong',sortable:false, index: 'ChiTietCong', width: "85%", align: 'left', edittype: "text", hidden: false, },

        {name: 'SoLanDiNgoaiVien', sortable:false,index: 'SoLanDiNgoaiVien', width: "10%", summaryType: 'sum', align: 'center', edittype: "select", hidden: true, },
        {name: 'LogKoHle', index: 'LogKoHle',sortable:false, width: "26%", align: 'center', edittype: "select", hidden: false, },

        {name: 'TreSom', index: 'TreSom', sortable:false,width: "10%", summaryType: 'sum', align: 'center', edittype: "select", hidden: false, },

        {name: 'TreSomChiTiet',sortable:false, index: 'TreSomChiTiet', width: "20%", summaryType: 'sum', align: 'center', edittype: "select", hidden: false, },
        {name: 'TGCB', index: 'TGCB',sortable:false, width: "12%", sorttype: 'number', formatter: 'number',  summaryType: 'avg', align: 'center', edittype: "select", hidden: true},
        {name: 'dayweek',sortable:false, index: 'dayweek', width: "0%", align: 'center', edittype: "select", hidden: true, },

        {name: 'GhiChu',sortable:false, index: 'GhiChu', width: "80%", align: 'left', edittype: "select", hidden: false, },
        {name: 'Nam', sortable:false,index: 'Nam', width: "10%", formatter: 'number', summaryType: 'count', align: 'center', edittype: "select", hidden: true, },

        {name: 'Id_Donchamcong',sortable:false, index: 'Id_Donchamcong', width: "40%", formatter: 'number', summaryType: 'count', align: 'center', edittype: "select", hidden: true},

        {name: 'action',sortable:false, index: 'action', width: "20%", align: 'center', edittype: "button", hidden: false, },
        {name: 'NgayGioSua',sortable:false, index: 'NgayGioSua', width: "20%",  align: 'center', edittype: "text", hidden: true,},
        {name: 'NName', sortable:false,index: 'NName', width: "20%",  align: 'center', edittype: "text", hidden: true,},

        {name: 'NgayGioTaoLich', index: 'NgayGioTaoLich',sortable:false, width: "40%", align: 'center', edittype: "select", hidden: true, },
        {name: 'LogTaiMay', index: 'LogTaiMay',sortable:false, width: "40%", align: 'center', edittype: "select", hidden: false, },
        {name: 'TCTruc', index: 'TCTruc',sortable:false, width: "12%", align: 'center', edittype: "select", hidden: false, },
        {name: 'TongCongTruc', index: 'TongCongTruc',formatter: 'number', formatoptions: { decimalPlaces: 2}, summaryType: 'sum', width: "0%", align: 'center', hidden: true,},
        {name: 'CongPhut', index: 'CongPhut',formatter: 'number', summaryType: 'sum', width: "0%", align: 'center', hidden: true,},
        {name: 'CongTheoLich', index: 'CongTheoLich',formatter: 'number', summaryType: 'sum', width: "0%", align: 'center', hidden: true,},
        {name: 'IsDuyetDonUpdate', index: 'IsDuyetDonUpdate', width: "0%", align: 'center', hidden: true,},



        ],
        rowNum: 1000,
        multiSort: true,
        rowList: [1000, 30, 50],
        loadonce: true, mtype: "GET", rownumbers: true,
        rownumWidth: 40,
        pager: '#prowed4',
        gridview: true,
        viewrecords: true,

            height: 450,
            width: 1450,
           // sortorder: "asc",
            grouping: true,
            groupingView: {groupField: ['Thang', 'Tuan'],
            groupOrder: ['desc', 'desc'],
            groupSummary: [false, false],
            showSummaryOnHide: [false, false],
            groupColumnShow: [false, false],
            //groupText: ['<b class="total" style="color: blue"> Tháng {0}. Tổng giờ công : <span style="color:red" id="kha">{TongCong}</span> h. Trong đó, giờ công trực: <span style="color:red">{TongCongTruc}</span> h.Đi trễ và ra sớm: <span style="color:red">{TreSom}</span> lần. Trung bình thời gian chuẩn bị làm việc :;{TGCB};{Nam}',
            //'<b style="color: blue ;font-weight:normal!important;"> Tuần  {0} - Trung bình thời gian chuẩn bị : <span class="subTotal">{TGCB};{Nam}</span>'],
            groupText: ['<b class="total" style="color: blue"> Tháng {0}. Tổng giờ công : <span style="color:red" id="kha">{TongCong}</span> h. Trong đó, giờ công trực: <span style="color:red">{TongCongTruc}</span> h. Đi trễ và ra sớm: <span style="color:red">{TreSom}</span> lần. ',
            '<b style="color: blue ;font-weight:normal!important;"> Tuần  {0}'],
            groupCollapse: false,
            showSummaryOnHide: true,
        },
        footerrow: true, userDataOnFooter: true


        , caption: 'Công chi tiết của ' + tennv + ' từ ngày '+dateFrom+' đến ngày '+dateTo,
        loadComplete: function(data) {
            ids = $('#rowed_xChamCong').jqGrid('getDataIDs');
            cell1 = $('#rowed_xChamCong').jqGrid('getCell');


            var countDonchamcong=0;
            for (i = 0; i < ids.length; i++) {



                var rowData = jQuery('#rowed_xChamCong').getRowData(ids[i]);

                    var rowDataNickName = rowData['NickName'];
                    var rowDataNgay = rowData['ngaygoc'];

                    var rowDataId_Donchamcong = rowData['Id_Donchamcong'];

                    tomauBackGround(rowData, ids[i], 'TreSom');
                    $("body").append("<div class='xulytam' >" + rowDataNgay + "</div>");
                    if ($('.xulytam span').length) {
                        tam = $('.xulytam span').html();
                    } else {
                        tam = $('.xulytam').html();
                    }
                    $('body').find('div').remove(".xulytam");

                    if (rowDataId_Donchamcong != 0) {
                      countDonchamcong++;
                      se = "<input class='fm-button'   type='button' style='color:blue !important;padding: 0  0 !important'  value='Đơn' onclick=\"lamdon('" + rowDataNickName + "','" + rowDataNgay  + "','" +  rowData['ID_NhanVien']  +"');\" />";
                  }
                  else
                  {
                   se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='<?php lang('lamdon')?>
                        ' onclick=\"lamdon('" + rowDataNickName + "','" + rowDataNgay  + "','" +  rowData['ID_NhanVien']  +"');\" />";
                  }


                    var CongPhut =parseInt(rowData['CongPhut']) ;
                    var CongTheoLich =parseInt (rowData['CongTheoLich']);
                    var IsDuyetDonUpdate = rowData['IsDuyetDonUpdate'];
         
                   
                    if(IsDuyetDonUpdate=='1')
                    {
                        // alert(IsDuyetDonUpdate);
                          $("#rowed_xChamCong").setCell(ids[i], 'action','', {background: 'green'});
                    }
                    else
                    {   
                        if(rowDataId_Donchamcong!=0)
                        {


                            
                            $("#rowed_xChamCong").setCell(ids[i], 'action','', {background: 'yellow'});
                        }
                        else
                        {
                            if(CongPhut<CongTheoLich)
                                $("#rowed_xChamCong").setCell(ids[i], 'action','', {background: 'orange'});
                        }
                        
                        /*if(CongPhut<CongTheoLich)
                        {
                            $("#rowed_xChamCong").setCell(ids[i], 'action','', {background: 'orangered'});
                        }*/
                    }



                    $("#rowed_xChamCong").jqGrid('setRowData', ids[i], {action: se});


                    $("#rowed_xChamCong").setCell(ids[i], 'TreSomChiTiet','', {color: '#FF0A0A'});
                    $("#rowed_xChamCong").setCell(ids[i], 'LogKoHle','', {color: '#CC33FF'});
                   /* $("#rowed_xChamCong").setCell(ids[i], 'GhiChu','', {background: '#FFFFCC'});*/
                   

                }
                avgTotal();
                $("#kha").html(window.tonggiocongNhanvien);

//
                $('#rowed_xChamCong_action').html('Sự cố : <span style="color:red; font-weight:normal!important;font-size:13px;">'+countDonchamcong+'</span>');



            

            },
            ondblClickRow: function(rowid) {
                var cont = $('#rowed_xChamCong').getCell(rowid, 'NickName');
                var val = getCellValue(cont);
                //alert(cont);
            },
        }

        );


       // $("#rowed_xChamCong").jqGrid('gridResize', {minWidth: 450, minHeight: 150});

        // get the header row which contains
        headerRow = $("#rowed_xChamCong").closest("div.ui-jqgrid-view")
        .find("table.ui-jqgrid-htable>thead>tr.ui-jqgrid-labels");

        // increase the height of the resizing span
        resizeSpanHeight = 'height: ' + headerRow.height() + 'px !important; cursor: col-resize;';
        headerRow.find("span.ui-jqgrid-resize").each(function() {
            this.style.cssText = resizeSpanHeight;
        });

        // set position of the dive with the column header text to the middle
        rowHight = headerRow.height();
        headerRow.find("div.ui-jqgrid-sortable").each(function() {
            var ts = $(this);
            ts.css('top', (rowHight - ts.outerHeight()) / 2 + 'px');
        });
        // jQuery("#rowed_xChamCong").jqGrid('filterToolbar',{searchOperators : true});
        jQuery("#rowed_xChamCong").jqGrid('navGrid', '#pager452', {add: false, edit: false, del: false, search: false});


//thoat:{return false;}
}


function laytenngay(cellvalue, options, rowObject) {
    tam = cellvalue.split("/");
    var newdate = tam[2] + "-" + tam[1] + "-" + tam[0];
    var newdate1 = $.datepicker.formatDate("D dd/mm/yy", new Date(newdate));
    if (rowObject[6] == 7)
    {
        return  '<span style="color:red">' + newdate1 + "</span>";
    }
    if (rowObject[6] == 6)
    {
        return  '<spans tyle="color:blue">' + newdate1 + "</span>";
    }
    return newdate1;
}
function tomauNgayChamCong(cellvalue, options, rowObject) {
    tam = cellvalue.split("/");
    var newdate = tam[2] + "-" + tam[1] + "-" + tam[0];
    var newdate1 = $.datepicker.formatDate("D dd/mm/yy", new Date(newdate));
    if (rowObject[16] == 7)
    {
        return  '<span style="color:red">' + newdate1 + "</span>";
    }
    if (rowObject[16] == 6)
    {
        return  '<span style="color:#663300">' + newdate1 + "</span>";
    }

        //return cellvalue;

        return newdate1;

    }
    function tomauDitreRasom(cellvalue, options, rowObject) {

        if (cellvalue > 0)
        {
            return  '<span style="color:#FFFF99">' + cellvalue + "</span>";

            //              var now=new Date().toTimeString();
            //         alert (now);
        }
        return cellvalue;
    }
    function tomaughichuchamcong(cellvalue, options, rowObject) {
        return  '<span style="color:red">' + cellvalue + "</span>";
    }
    function chonkieutinhcong() {
     alert('chonkieutinhcong');

 }

 function creat_grid() {
    var elem;
    var elem1 = [];
    $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
        if ($(this).is(':checked')) {
            if ($(this).attr("id") == "date_range_radio") {
                elem1[0] = $("#from_day_mask").val();
                elem1[1] = $("#to_day_mask").val();
            } else {
                elem = ($(this).attr("id")).split("_");
                elem = $("#" + elem[0] + "_mask");
                elem1 = (elem.val()).split(";");
            }
        }
    });
    $('div').remove('#gbox_rowed3');
    $('#grid_phong_ban').append($('<table id="rowed3"></table><div id="prowed3"></div>'));
    var dateArray = getDates(new Date(elem1[0]), new Date(elem1[1]));
        //alert (dateArray)

		var hientai=0;
        colnames = [];
        colnames = ["Tên"];
        colvalues = [];
        var mang_ngay = "";
        var today = new Date();
        col_span_week(elem1[0], elem1[1]);
        colvalues = [{name: 'name', index: 'name', width: 70, frozen: true, formatter: render_name}];
        for (i = 1; i < dateArray.length + 1; i++) {
            mang_ngay += $.datepicker.formatDate("yy-mm-dd", new Date(dateArray[i - 1])) + ";";
            colnames[i] = $.datepicker.formatDate("D dd-mm-yy", new Date(dateArray[i - 1]));
			//alert(dateArray[i - 1]);
			if($.datepicker.formatDate("yy-mm-dd", new Date())==$.datepicker.formatDate("yy-mm-dd", new Date(dateArray[i - 1]))){
				hientai=i;
                colvalues[i] = {name: $.datepicker.formatDate("yy-mm-dd", new Date(dateArray[i - 1])), formatter: render_col, index: $.datepicker.formatDate("yy-mm-dd", new Date(dateArray[i - 1])), search: false, width: 120, editable: false, align: "center", hidden: false, edittype: "textarea",classes: 'homnay'};
            }else{
                colvalues[i] = {name: $.datepicker.formatDate("yy-mm-dd", new Date(dateArray[i - 1])), formatter: render_col, index: $.datepicker.formatDate("yy-mm-dd", new Date(dateArray[i - 1])), search: false, width: 120, editable: false, align: "center", hidden: false, edittype: "textarea"};
            }

            /*if (i != dateArray.length - 1) {
             colnames+= ",";
             colvalues+= ",";
         }*/
    	}
     window.url = "pages.php?module=report&view=lich_lam_viec&action=in_lich_lam_viec&idphong=" + $("#phongban option:selected").val() + '&loailich=' + $("#loailich option:selected").val() + '&from=' + elem1[0] + '&to=' + elem1[1] + "&mang_ngay=" + mang_ngay;

     $("#rowed3").jqGrid({
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich&q=2&idphong=' + $("#phongban option:selected").val() + '&loailich=' + $("#loailich option:selected").val() + '&from=' + elem1[0] + '&to=' + elem1[1] + "&mang_ngay=" + mang_ngay,
        datatype: "json",
        colNames: colnames,
        colModel: colvalues,
        loadonce: false,
        shrinkToFit: false,
        scroll: false,
        modal: true,
        rowNum: 1000000,
        rowList: [30, 50, 70],
        pager: '#prowed3',
        sortname: 'TenPhongBan',
        height: 100,
        width: 100,
        rownumbers: true,
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
				
                right_menu(rowid, iCol, e);
            },
            onSelectRow: function(id) {
                $("#menu").hide();
                $('#rowed3').focus();
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex, e) {
               // alert("");
               if(permission['copylichtuanquyenfull']==0){
                   if((permission['chinhsualich']==1)&&(window.id_phongbancopy==window.id_phongban_userlogin)){
                       var grid = jQuery('#rowed3');
                       var colModel = grid.getGridParam('colModel');
                       var colName = colModel[columnIndex].name;
                       var row = $("#phongban option:selected").val()
                       dialog_sub_grid("Chỉnh sửa lịch", 1085, 380, row, colName, rowId);
                   }
               }else{
                  var grid = jQuery('#rowed3');
                  var colModel = grid.getGridParam('colModel');
                  var colName = colModel[columnIndex].name;
                  var row = $("#phongban option:selected").val()
                  dialog_sub_grid("Chỉnh sửa lịch", 1085, 380, row, colName, rowId);
              }

          },
          onRightClickRow: function(rowid, iRow, iCol, e) {
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
            right_menu(rowid, iCol, e);

            var name_phongban=	$("#phongban option[value="+window.id_phongbancopy+"]").text();
            if(id_loailichcopy==0){
              var name_lich='Tất cả';
              }else{
               var name_lich=$("#loailich option[value="+window.id_loailichcopy+"]").text();
           }


           if (window.saocheptam != null) {
               hienthitam = $('#rowed3').getRowData(window.rowid);
               nick_nametam=hienthitam['name']
               hienthitam = hienthitam[window.from]
               $('.dan').html('<a><span class="ui-icon ui-icon-scissors"></span>Dán: '+nick_nametam+'   ('+$.datepicker.formatDate('dd-mm-yy', new Date(window.from))+') (Lịch:'+name_lich+')</a>');
           }
           sotuan = $.datepicker.iso8601Week(new Date(window.from));
           tuanhientai=$.datepicker.iso8601Week(new Date());

           monday_1 = getMonday(new Date(window.from));
           monday_2 = getMonday(new Date());
           monday_1.setDate(monday_1.getDate()+6);
           monday_2.setDate(monday_2.getDate()+6);

           nam_1=monday_1.getFullYear();
           nam_2=monday_2.getFullYear();
    					//alert()
                        if(permission['copylichtuanquyenfull']!=1){
                           if(nam_1>nam_2){
                              pastelichtuan();
                              $('.danlichtuan').removeClass('disable');
                          }else
                          {
                             if(sotuan>tuanhientai){

                                pastelichtuan();
                                $('.danlichtuan').removeClass('disable');
                            }else{
                                $('.danlichtuan').addClass('disabled');
                                $('.danlichtuan').unbind('click');
                            }
                        }


                    }else{
                      pastelichtuan();
                      $('.danlichtuan').show();
                  }




                  if(lichtuan){

                   $('.danlichtuan').html('<a><span class="ui-icon ui-icon-copy"></span>Dán  tuần '+sotuan+' ('+name_phongban+') (Lịch:'+name_lich+')</a>');
               }else{
                   $('.danlichtuan').html('<a><span class="ui-icon ui-icon-copy"></span>Dán lịch tuần</a>');

               }
                $(document).bind("contextmenu", function(e) {
                return false;
                });
                setTimeout(function(){
                    $("#menu").show(300);
                },500);

       },
       loadComplete: function(data) {
        fixPositionsOfFrozenDivs.call(this);
        jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
        jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft(scrollPositionleft);
		$("#hientai").click();


		//alert(hientai);
                //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });

                $("#rowed3 #" + <?=$_SESSION["user"]["id_user"]?>).find("td").css("background-color", "#CCC!important");
                $("#rowed3_frozen #" + <?=$_SESSION["user"]["id_user"]?>).find("td").css("background-color", "#CCC!important");


                $("#gview_rowed3 td").attr("title","");
                var ids = jQuery("#rowed3").jqGrid('getDataIDs');
                for (var i=0;i<ids.length;i++) {
                    var id=ids[i];
                    var rowData = jQuery("#rowed3").jqGrid('getRowData',id);


                    for (var key in rowData) {
                      if( typeof($( "body" ).data("id"+id+key))!="undefined"){
                         if( $( "body" ).data("id"+id+key).Ghichu !=""){
						  		//$("#rowed3").setCell(id, key, '', {background: '#f5bc59'});
                                $("#rowed3").setCell(id, key, '', {background: '#F7C98D'});
                            }
                        }
                    }
                }




            },
            caption: "Lịch làm việc của " + $("#phongban1").val()
        });
        //$("#rowed3").triggerHandler("jqGridAfterGridComplete");
        $("#rowed3").jqGrid('setFrozenColumns');
        $("#rowed3").jqGrid('setGroupHeaders', {
            useColSpanStyle: false,
            groupHeaders: window.colspan,
        });
        $("#rowed3").bind("jqGridResizeStop", function() {
           // fixPositionsOfFrozenDivs.call(this);
       });
        $("#rowed3").jqGrid({pgbuttons: false, recordtext: ''});
        var cache_id = '', cache_col = '';
        grid = $("#rowed3");
        var cm = $("#rowed3").jqGrid('getGridParam', 'colModel');
        $('#rowed3').bind('keydown', function(e) {
         if (jwerty.is("ctrl+c",e)) {
             $(".saochep").trigger('click');

         }else if (jwerty.is("ctrl+v",e)) {
             $(".dan").trigger('click');

         }
         else if (jwerty.is("delete",e)) {
             $(".xoa").trigger('click');

         }
     });

        $(".saochep").bind('click',function() {
            saochep()
        });

        $(".dan").bind('click',function() {
            dan()
        });
        $("#rowed3").mouseleave(function(e) {
            $('.tooltips').remove();
        });

        $("#rowed3").mouseover(function(e) {
         $('.tooltips').remove();
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
                        $("#rowed3").jqGrid('setCell', rowId, cm[ci].name, "", 'ui-state-hover');
                        cache_id = rowId;
                        cache_col = cm[ci].name;
				//$( "body" ).data( "id32667",{ Ghichu: "chinh" } );
				//alert($( "body" ).data("id").Ngay)
				//alert(typeof($( "body" ).data("id"+cache_id+cache_col).Ghichu));
				if( typeof($( "body" ).data("id"+cache_id+cache_col))!="undefined"){
					if( $( "body" ).data("id"+cache_id+cache_col).Ghichu !=""){
						//alert($( "body" ).data("id"+cache_id+cache_col).Ghichu)
                     $("body").append("<div class='tooltips'></div>");
                     $('.tooltips span').remove();
                     $('.tooltips').append($('<span></span>'));
                     $('.tooltips span').html($( "body" ).data("id"+cache_id+cache_col).Ghichu);
                     width = $(".tooltips").width();
                     if ($(".tooltips").width() + e.pageX > $(document).width()) {
                        $(".tooltips").css('left', e.pageX - $("#menu").width() + "px");
                    } else {
                        $(".tooltips").css('left', e.pageX + "px");
                    }
                    if ($(".tooltips").height() + e.pageY > $(document).height()) {
                        $(".tooltips").css('top', e.pageY - $("#menu").height() + "px");
                    } else {
                        $(".tooltips").css('top', e.pageY + "px");
                    }

							//$(".tooltips").css('top', ($(window).height() / 2) + 'px');
							//$(".tooltips").css('left', ($(window).width() / 2) - width / 2 + 'px');
							$('.tooltips').fadeIn(500, function() {
								/*	if(elem!="body"){
								 $( ".tooltips").effect({effect:"explode",pieces:"50",duration:"slow",complete: function() {
								 $('.tooltips').remove();
								 }
								 });
                       }else{*/
								/*$(".tooltips").delay(1500).fadeOut(1000, function() {
									$('.tooltips').remove();
								})*/
								//}
							});

                       }
                   }



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

        jQuery("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false}, //options
        {height: 100, width: 600, reloadAfterSubmit: true, url: 'modules/menu/someurl1.php'}, // edit options
        {width: 250, reloadAfterSubmit: true, url: 'modules/menu/someurl1.php'}, // add options
        {reloadAfterSubmit: true, url: 'modules/menu/someurl1.php'}, // del options
        {height: 250, width: 600} // search options

        );

        $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "In", buttonicon: 'ui-icon-print',
            onClickButton: function() {
            /*    $(".ui-icon-print").printPage({
                    url: window.url,
                    attr: "href",
                    message: "Máy in đang khởi tạo. Vui lòng đợi"
                });*/
                // elem = 1 + Math.floor(Math.random() * 1000000000);
                // dialog_main("In lịch bộ phận", 90, 90, elem, "pages.php?module=report&view=lich_lam_viec&action=in_lich_lam_viec&idphong=" + $("#phongban option:selected").val() + '&loailich=' + $("#loailich option:selected").val() + '&from=' + elem1[0] + '&to=' + elem1[1] + "&mang_ngay=" + mang_ngay)
            },
            title: "     In",
            position: "last"
        });

        $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Xem", buttonicon: 'ui-icon-document',
            onClickButton: function() {
                prin_preview(window.url);


            },
            title: "     In",
            position: "last"
        });
        //khamt  add 2/5/2014
 		$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Ds ẩn", buttonicon: 'ui-icon-document',
            onClickButton: function() {

        dialog_main("Xem Ds ẩn " + ' ', 100, 100, 5674234365743657, 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=formNhanvien_An&id_pban='+ $("#phongban option:selected").val()+'&id_form=19&type=test');

            },
            title: "     In",
            position: "last"
        });
		if((dateArray.length>10)&&(hientai>0)){
			$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Hiện tại", buttonicon: 'ui-icon-calculator',id:'hientai',
				onClickButton: function() {
					$( "#gview_rowed3 .ui-jqgrid-bdiv" ).scrollLeft((hientai-3)*120);				},
				title: "     Hiện tại",
				position: "last"
			});
		}


      /*  $(".ui-icon-print").printPage({
            url: window.url,
            attr: "href",
            message: "Máy in đang khởi tạo. Vui lòng đợi"
        });*/


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
    if (window.kiemtradan == false) {
        tam = cellValue.split("::");
        tam1 = tam[0].split(";");

        var dulieu = '', cache_lich = '';
        if (typeof tam1[2] == "undefined") {
            return "Lịch trống";
        } else {
            for (i = 0; i <= tam.length - 1; i++) {
                tam1 = tam[i].split(";");
                if (cache_lich == '') {
                    cache_lich = tam1[2];
                    dulieu += "<span style= 'color:" + tam1[5] + "!important'>" + tam1[2] + "</span>\n";
                }
                if (cache_lich == tam1[2]) {
                    dulieu += "<span lang="+tam1[6]+" style= 'color:" + tam1[5] + "!important'>" + tam1[3] + " - " + tam1[4] + "</span>\n";
                } else {
                    dulieu += "<span lang="+tam1[6]+" style= 'color:" + tam1[5] + "!important'>" + tam1[2] + "</span>\n";
                    dulieu += "<span lang="+tam1[6]+" style= 'color:" + tam1[5] + "!important'>" + tam1[3] + " - " + tam1[4] + "</span>\n";
                }
					//console.log(tam[1])

					$( "body" ).data("id"+tam1[1]+tam1[0],{ Ghichu:tam1[7].replace(/\n\r/g, '<br>')  } );
                    cache_lich = tam1[2];

                }
				//dulieu =tam1;
                return dulieu;
            }
        } else {
            window.kiemtradan = false;
            return cellValue;
        }

    }
    var kiemtra = false;
    function render_name(cellValue, opts, rowObject) {
        //cellValue
        if (kiemtra == false) {
            window.nickname = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=NickName&name=ID_NhanVien', async: false, success: function(data, result) {
                if (!result)
                    alert('Không load được tên');
            }}).responseText;
            kiemtra = true;
        }
        var tam1;
        nickname1 = window.nickname.split(";");
        for (i = 0; i <= nickname1.length - 1; i++) {
            temp = nickname1[i].split(":");
            if (temp[1] == cellValue) {

                tam1 = temp[0];
                break;
            }
        }
        tam1='<strong>'+tam1+'</strong>'
        return tam1;
    }

    Date.prototype.addDays = function(days) {
        var dat = new Date(this.valueOf())
        dat.setDate(dat.getDate() + days);
        return dat;
    }

    function getDates(startDate, stopDate) {
        var dateArray = new Array();
        var currentDate = startDate;
        while (currentDate <= stopDate) {
            dateArray.push(new Date(currentDate))
            currentDate = currentDate.addDays(1);
        }
        return dateArray;
    }


//alert(new Date('2013-08-10').addDays(2))

function avgTotal() {
    $('.total').each(function() {
            //alert($(this).html())
            tam = $(this).html().split(";");
            tam1 = tam[0] + " ";
            if (typeof(tam[1]) != "undefined") {
                tam[1] = tam[1].replace(".", ",");
                if (parseFloat(tam[1]) != 100) {

                    tam1 += (parseFloat(tam[1]) / parseInt(tam[2])).toFixed(2) + " '";
                }
            }
            // alertObject(tam[1])
            $(this).html(tam1)
            //alert($(this).html());
            // i++;
        });
    $('.subTotal').each(function() {


        var subTotal = 0;
        tam = $(this).html().split(";");
            //if(typeof(tam[0])!="undefined"){
                tam[0] = tam[0].replace(".", ",");

                if (parseFloat(tam[0]) != 100) {
                    subTotal = (parseFloat(tam[0]) / parseInt(tam[1])).toFixed(2) + " '";
                }
            //}
            $(this).html(subTotal)
        });



}
function col_span_week(date1, date2) {
        //alert(DateDiff(new Date('2013-07-21'),new Date('2013-07-15')));
        day_range = DateDiff(new Date(date2), new Date(date1));
        var i = 0, cahe_week, cache_day, dem = 0, dem1 = 0;
        window.colspan = [];
        for (i = 0; i <= day_range; i++) {
            dat = (new Date(date1)).addDays(i);
            tam = $.datepicker.iso8601Week(new Date(dat));
            if (i == 0) {
                cahe_week = tam;
                cache_day = $.datepicker.formatDate("yy-mm-dd", new Date(dat));
            }
            if (cahe_week == tam) {
                dem++;
                if (i == day_range) {
                    window.colspan[dem1] = {startColumnName: cache_day, numberOfColumns: dem, titleText: 'Tuần ' + cahe_week};
                }
            } else {
                //console.log("{startColumnName: 'rowed3_'"+cache_day+", numberOfColumns: "+dem+", titleText: 'Tuần ' "+cahe_week+"}");
                window.colspan[dem1] = {startColumnName: cache_day, numberOfColumns: dem, titleText: 'Tuần ' + cahe_week}
                cache_day = $.datepicker.formatDate("yy-mm-dd", new Date(dat));
                dem = 1;
                dem1++;
            }
            //console.log($.datepicker.formatDate("yy-mm-dd",new Date(dat)) +"  "+tam);
            cahe_week = tam;
        }
    }

    function DateDiff(date1, date2) {
        var datediff = date1.getTime() - date2.getTime(); //store the getTime diff - or +
        return (datediff / (24 * 60 * 60 * 1000)); //Convert values to -/+ days and return value
    }

    ;
    (function() {
        var proto = Date.prototype;
        function adder(value, getter, setter, toAdd) {
            var d = new Date(value),
            cv = getter.call(d);
            setter.call(d, cv + toAdd);
            return +d;
        }

        proto.addDays = function(days) {
            return new Date(adder(this,
                proto.getDate,
                proto.setDate,
                days));
        };

        proto.addHours = function(hours) {
            return new Date(adder(this,
                proto.getHours,
                proto.setHours,
                hours));
        };

        proto.addMinutes = function(minutes) {
            return new Date(adder(this,
                proto.getMinutes,
                proto.setMinutes,
                minutes));
        };

        proto.addSeconds = function(seconds) {
            return new Date(adder(this,
                proto.getSeconds,
                proto.setSeconds,
                seconds));
        };

        proto.addMilliseconds = function(ms) {
            return new Date(adder(this,
                proto.getMilliseconds,
                proto.setMilliseconds,
                ms));
        };

        proto.addYears = function(years) {
            return new Date(adder(this,
                proto.getFullYear,
                proto.setFullYear,
                years));
        };

        proto.addMonths = function(months) {
            return new Date(adder(this,
                proto.getMonth,
                proto.setMonth,
                months));
        };
    })();
    function  loadphongban() {
      window.ischamconglich = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiLich&id=ID_LoaiLich&name=IsChamCong', async: false}).responseText;
      window.chamconglich = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiLich&id=ID_LoaiLich&name=KieuLich', async: false}).responseText;
      window.phongban2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon= 1 &status=0&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục phòng ban');
    }}).responseText;
      window.tenloailich1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_loailich&id=ID_loailich&name=Tenloailich', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục tên loại lịch');
    }}).responseText;
      window.nickname2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_PhongBan=<?=$_SESSION['user']['id_phongban']?>&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục phòng ban');
    }}).responseText;

      $("#rowed4").setColProp('ID_PhongBan', {editoptions: {value: phongban2}});
      $("#rowed4").setColProp('TenLoaiLich', {editoptions: {value: tenloailich1}});
      $("#rowed4").setColProp('Id_NhanVien', {editoptions: {value: nickname2}});
  }
  ;
  function  loadLog() {

    window.phongban2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục phòng ban');
    }}).responseText;
    window.tenloailich1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_loailich&id=ID_loailich&name=Tenloailich', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục tên loại lịch');
    }}).responseText;
    window.nickname2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_PhongBan=' + $("#phongban option:selected").val() + '&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục phòng ban');
    }}).responseText;

    $("#rowed4").setColProp('ID_PhongBan', {editoptions: {value: phongban2}});
    $("#rowed4").setColProp('TenLoaiLich', {editoptions: {value: tenloailich1}});
    $("#rowed4").setColProp('Id_NhanVien', {editoptions: {value: nickname2}});
}
;
    /*function reset_radio(elem,callback){
     $("#calendar_option").find('input[type=radio]').each(function(idx, val,f){
     //this.checked = false;
     $(this).removeAttr("checked");
     }).end().click(check_radio(elem));
     }
     function check_radio(elem){
     $(elem).prop("checked", true)
     //$(elem).attr("checked",true)
 }*/

 function customRange(input) {
    temp = String(input.id).split("_");

    var GioBatDau = $('#' + temp[0] + '_GioBatDau');
    var GioKetThuc = $('#' + temp[0] + '_GioKetThuc');
        //alert(GioBatDau.timeEntry('getTime'));
        return {minTime: (input.id == temp[0] + '_GioKetThuc' ?
            GioBatDau.timeEntry('getTime').addMinutes(5) : null),
        maxTime: (input.id == temp[0] + '_GioBatDau' ?
            GioKetThuc.timeEntry('getTime').addMinutes(-5) : null)};

    }
    ;

    updateButtonState = function(grid) {
        var isNonEditable, isEditing, $row, selectedId = grid.jqGrid('getGridParam', 'selrow'),
        rid = $.jgrid.jqID(selectedId), rowSelector = 'tr#' + rid;
        if (selectedId === null) {
            // no rows in grid - no View, no Edit, no Delete, but Add
            $("#add_list, #add_list_top, #list_iladd").removeClass('ui-state-disabled');
            $("#view_list_top, #del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit, #list_ilsave, list_ilcancel").addClass('ui-state-disabled');
        } else {
            $row = $(rowSelector);
            isEditing = $row.attr('editable') || '0';
            isNonEditable = $row.hasClass('not-editable-row');
            // no row selected or selected row has - no View, no Delete
            $("#view_list_top").removeClass('ui-state-disabled');
            if (isNonEditable) {
                $("#del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit").addClass('ui-state-disabled');
            } else if (isEditing === '1') {
                $("#list_ilsave, list_ilcancel").removeClass('ui-state-disabled');
                $("#add_list, #add_list_top, #list_iladd, #del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit").addClass('ui-state-disabled');
            } else {
                $("#list_ilsave, #list_ilcancel").addClass('ui-state-disabled');
                $("#add_list, #add_list_top, #list_iladd, #del_list, #del_list_top, #edit_list, #edit_list_top, #list_iledit").removeClass('ui-state-disabled');
                //$(rowSelector + " div.ui-inline-edit, " + rowSelector+" div.ui-inline-del","+rowSelector+ ".ui-jqgrid-btable:first").hide();
                //$(rowSelector + " div.ui-inline-save, " + rowSelector+" div.ui-inline-cancel","+rowSelector+ ".ui-jqgrid-btable:first").show();
            }
        }
    }
    function kiemtra_date(cellvalue, options, rowObject) {

        if (rowObject[2] == 7)
        {
            return  '<span style="color:red">' + cellvalue + "</span>";

            //              var now=new Date().toTimeString();
            //         alert (now);
        }

        return cellvalue;
    }
    function tomauBackGround(cellvalue, rowId, mangthamso) {
        if (cellvalue['TreSom'] >= 1)
        {
           // $("#rowed_xChamCong").setCell(rowId, mangthamso, '', {background: '#FFFF99'});
        }
        // $("#rowed_xChamCong").setCell(rowId, 'Phut', '', {background: 'red'});
        $("#rowed_xChamCong").setCell(rowId, 'TC', '', {background: '#d9f970'});


    }
    var avgPhut = 0;
    function myavg(val, name, record)
    {
        avgPhut += parseFloat(record[name]) / 2;
        return avgPhut;
    }

    function chinhsua(cellValue, options, rowObject) {
        tam = String(cellValue).split(";;")

        return "kha";

    }
    function lamdon(rowDataNickName, ngay, id_nhanvien) {

      dialog_main("Đơn của " + rowDataNickName+" - Ngày xảy ra sự cố "+ngay, 100, 100, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=DonChamCongChiTiet&type=test&id_form=111&Ngaysuco="+ngay+"&nhanvien="+rowDataNickName+"&idnhanvien="+id_nhanvien);

  }
  function getCellValue(rowId, cellId) {
    var cell = jQuery('#' + rowId + '_' + cellId);

    var val = cell.val();
    return val;
}
function save_func(){
  $("#prowed4 .ui-icon-disk").click();
	/*	$("#rowed4 #"+$("#rowed4").jqGrid('getGridParam', 'selrow')+"_GioKetThuc").keydown(function(e) {

				if(e.which ==13 ){
				e.preventDefault();

				}else if(e.which ==9 ){
					if(e.shiftKey) {
					}else{
					$("#rowed4 #"+$("#rowed4").jqGrid('getGridParam', 'selrow')+"_Id_NhanVien").focus();
					}
				}
          });	 */
}
function TimeCheck(id) {
        //var ids=parseInt(id)
        if (isNaN(id)) {
            oper = "add";
        } else {
            oper = "edit";
        }

        var GioBatDau = $('#' + id + '_GioBatDau');
        var GioKetThuc = $('#' + id + '_GioKetThuc');
        // var b=GioKetThuc.timeEntry('getTime')
        var BatDau = GioBatDau.timeEntry('getTime');
        var KetThuc = GioKetThuc.timeEntry('getTime');
        //if(KetThuc=BatDau){
        //return [false,KetThuc];}
        //var data = grid.jqGrid('getGridParam', 'savedRow');
        var hieu = BatDau - KetThuc
        //danh dau focus sau khi tat dialog
        TenLoaiLich = $('#' + id + '_TenLoaiLich').val();
        ngay = $('#' + id + '_ngay').val();
        GioBatDau1 = GioBatDau.val();
        GioKetThuc1 = GioKetThuc.val();
        Id_NhanVien = $('#' + id + '_Id_NhanVien').val();
        window.id_rowed4 = $('#' + id + '_GioBatDau');
        ngay = ngay.split("-").reverse().join("-")
        postData = '{"id":"' + id + '","TenLoaiLich":' + TenLoaiLich + ',"ngay":"' + ngay + '","GioBatDau1":"' + GioBatDau1 +
        '","GioKetThuc1":"' + GioKetThuc1 + '","Id_NhanVien":' + Id_NhanVien + '}'
        //alert (data);
        dataToSend = jQuery.parseJSON(postData)
        if (hieu >= 0) {
            //chuoi="Giờ Bắt Đầu Không Được Lón Hơn Hoặc Bằng Giờ Kết Thúc"
            //erro =false;
			//window.id_focus =id+"_GioBatDau"
            return [false, "Giờ Bắt Đầu Không Được Lớn Hơn Hoặc Bằng Giờ Kết Thúc","GioBatDau"]

        }

        else {
          /*  $.ajax({
                type: "POST",
                url: "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_checktime&oper=" + oper,
                dataType: "json",
                data: dataToSend,
                async: false,
                success: function(response, textStatus, jqXHR) {
                    //alert(jqXHR.responseText)
                    if (jqXHR.responseText == 1) {
						//window.id_focus =id+"_GioBatDau"
                        erro = false;
                        chuoi = "Ca Làm Việc Chồng Lịch Với Ca Khác";
						foc="GioBatDau"
                        return [false, "Ca Làm Việc Chồng Lịch Với Ca Khác"]
                    } else {
                        erro = true;
                        chuoi = "";
						foc=""
                    }
                },
            });*/
return [true, ""]

}

        //return [erro,chuoi]
    }
    function focus_(){
	 //alert(window.id_focus);
	 if (isNaN(window.id_focus)) {
        $("#"+window.id_focus).focus()
    }
    window.id_focus=0;
}
function autocomplex_mutil(input,data,id) {
    var isOpen = false;
    _init(input,data,id);
    afterInit(input,isOpen);
};
function afterInit(input,isOpen) {

 var button = $("<a>").attr("tabIndex", -1).attr("title", "Show all items").tooltip().insertAfter($(input)).button({
     icons: {
        primary: "ui-icon-triangle-1-s"
    },
    text: false
}).removeClass("ui-corner-all").addClass("custom-combobox-toggle ui-corner-right").click(function(event) {
 $(input).focus();
 wasOpen = $(input).autocomplete("widget").is(":visible");

 if (isOpen) {
    $(input).autocomplete("close");
    isOpen = false;
} else {
    isOpen = true;
    $(input).autocomplete("search", "");
    event.stopImmediatePropagation();
}
});
}
function _init(input,data,id) {
  $(input).autocomplete({
     source: data,
     minLength: 0,
     select: function (event, ui) {
      $(id).val(ui.item.id);

  },
  open: function(event, ui) {
  }  ,
  autoFocus: true,
}).data("uiAutocomplete")._renderItem = function (ul, item) {
     if($(input).val()==""){newid=item.label}
         else{
           var newid = String(item.label).replace(
               new RegExp(this.term, "gi"),
               "<strong style='color:#F60'>$&</strong>");}
           return $("<li ></li>")
           .data("item.autocomplete", item)
           .append("<a style='width:60px;display: inline-block!important'>" + newid + "</a> <a style='width:150px;display: inline-block!important'>"+ item.hoten +"</a> <a style='width:200px;display: inline-block!important'>"+ item.TenPhongBan +"</a>")
           .appendTo(ul);
       };
   }

   function dialog_donsuco_callback(title, width, height, elem, links) {
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
    modal: false,
    title: title,
    draggable: true,
    resizable: false,
    beforeClose: function( event, ui ) {

    },
    close: function(event, ui) {
            //$("body").remove(".modal" + elem);
            $("#form_lam_don").html(window.donsuco_form);
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


function copylichtuan(){
	$('.saocheplichtuan').unbind('click');
   $('.saocheplichtuan').bind('click',function(e){
       window.lichtuan=true;

       window.ngay_copy = window.from;

       var name_phongban=	$("#phongban option[value="+window.id_phongbancopy+"]").text();
       window.id_phongban_copy=	$("#phongban option[value="+window.id_phongbancopy+"]").val();

       if(window.id_loailichcopy==0){
          var name_lich='Tất cả';
          window.id_lich_copy=0;
      }else{
       var name_lich=$("#loailich option[value="+window.id_loailichcopy+"]").text();
       window.id_lich_copy=$("#loailich option[value="+window.id_loailichcopy+"]").val();
   }
   $('.saocheplichtuan').html('<a><span class="ui-icon ui-icon-scissors"></span>Đang chép  tuần '+$.datepicker.iso8601Week(new Date(window.from))+' ('+name_phongban+') (Lịch:'+name_lich+')</a>');
})

}

function pastelichtuan(){
       // alert('s');
	$('.danlichtuan').unbind('click');
   $('.danlichtuan').bind('click',function(e){


      if(window.lichtuan){
          ngaypaste = window.from;
          var name_phongban_paste=	$("#phongban option[value="+window.id_phongbancopy+"]").text();
          var id_phongban_paste=	$("#phongban option[value="+window.id_phongbancopy+"]").val();
          week_copy=$.datepicker.iso8601Week(new Date(window.ngay_copy));
          week_paste=$.datepicker.iso8601Week(new Date(window.ngaypaste));

          ngay_copy=getMonday(new Date(window.ngay_copy));
          ngaypaste=getMonday(new Date(ngaypaste));


          ngay_copy=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_copy));
          ngaypaste=$.datepicker.formatDate('yy-mm-dd', new Date(ngaypaste));
          $.post('pages.php?module=lich&view=lich_lam_viec&action=controller_Copy&loailich=' + window.id_lich_copy + '&phongbancopy=' + window.id_phongban_copy + '&ngay_copy=' + ngay_copy + '&ngay_paste=' + ngaypaste  + '&kiemtra='+window.colich).done(function(data){

             if (data == 1) {
                $("#colichtrung").dialog("open");

            } else {
                tooltip_message("Copy Lịch thành công");
                window.scrollPositiontop  = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
                window.scrollPositionleft = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft();

                $('#sCal').trigger('click');

            }
            window.colich=0;
        });
      }

  });
}
function getMonday(d) {
  d = new Date(d);
  var day = d.getDay(),
      diff = d.getDate() - day + (day == 0 ? -6:1); // adjust when day is sunday
      return new Date(d.setDate(diff));
  }


  function tinhlaicong(){
    var name_phongban=	$("#phongban option[value="+window.id_phongbancopy+"]").text();
    var id_phongban=	$("#phongban option[value="+window.id_phongbancopy+"]").val();
    var id_nhanvien=	$("#text_nhanvien").val();
    var name_nhanvien=	$("#nhanvien").val()
    var     option_tinhcong=1;
    if (id_nhanvien==''){
       alert('Hãy chọn nhân viên');
       return false;
   //  break;
}
    // alert(id_nhanvien);


    var tam;
    var elem;
    var elem1 = [];
    $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
        if ($(this).is(':checked')) {
            tam = $(this).attr('lang');
            if ($(this).attr("id") == "date_range_radio") {
                elem1[0] = $("#from_day_mask").val();
                elem1[1] = $("#to_day_mask").val();
            } else {
                elem = ($(this).attr("id")).split("_");
                elem = $("#" + elem[0] + "_mask");
                elem1 = (elem.val()).split(";");
            }
        }
    });





    var d = new Date( elem1[0]);
    var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    var dateFrom=curr_date + "/" + curr_month + "/" + curr_year;


    var d2 = new Date(elem1[1]);
    var curr_date2 = d2.getDate();
    var curr_month2 = d2.getMonth() + 1; //Months are zero based
    var curr_year2 = d2.getFullYear();
    var dateTo=curr_date2 + "/" + curr_month2 + "/" + curr_year2;
   // alert(elem1[0]);
   $('<div></div>').appendTo('body')
   .html('<div class="title_tinhlaicong"><h3 style="color: orangered" id="canhbao">'+'Tính lại công của  '+ name_nhanvien + " từ "+dateFrom +' đến '+ dateTo+'. Bạn chắc chắn ?</h3><select name="optiontinhlaicong" id="optiontinhlaicong" ><option value=1>Theo nhân viên</option><option value=2>Theo bộ phận</option><br><input type="checkbox" id="checkGhide" style="color: orangered">Ghi đè công của các đơn đã duyệt ( Không được chọn mục này nếu muốn giữ lại công những ngày đã duyệt đơn)</input></div>')
   .dialog({
    modal: true, title: 'Tính lại công' , zIndex: 10000, autoOpen: true,
    width: '800px', resizable: false,
    buttons: {
        Yes: function () {

          var x = $("#checkGhide").is(":checked");

          if(x==false)
             {x=0;}
         else
             {x=1;}
         option_tinhcong=$('#optiontinhlaicong').val();
                                       if(option_tinhcong==1)//nhavien
                                         {id_phongbanORnhanvien=id_nhanvien;}
                                     else
                                         {id_phongbanORnhanvien=id_phongban;}
                                      // alert($('#optiontinhlaicong').val());

		     $.post('pages.php?module=lich&view=lich_lam_viec&action=controller_duyetdon&oper=tinhlaicong&fromdate='+ elem1[0]+'&todate='+ elem1[1]+'&id_phongbanORnhanvien='+id_phongbanORnhanvien+'&option='+option_tinhcong+'&Ghide='+0+'&hienmaloi=3').done(function(data){

                                         if (data == 1) {
                                             tooltip_message("Tính lại không thành công");
                                         } else {
                                            tooltip_message("Tính lại thành công");
                                        }
                                    });



                                      $(this).dialog("close");
                                  },
                                  No: function () {
                                    $(this).dialog("close");
                                }
                            },
                            close: function (event, ui) {
                                $(this).remove();
                            },
                            open: function (event, ui) {
                             $('#optiontinhlaicong').change(function(){

                                 if( $('#optiontinhlaicong').val()==1)
                                 {
                                          // alert(name_nhanvien);
                                          $('.title_tinhlaicong .ui-dialog-title').html('Tính lại công của  '+ name_nhanvien + " từ "+elem1[0] +' đến '+ elem1[1] )
                                          $('#canhbao').html('Tính lại công của  '+ name_nhanvien + " từ "+dateFrom +' đến '+ dateTo);
                                      }else
                                      {
                                              // $('.title_tinhlaicong .ui-dialog-title').html('Tính lại công của  '+ name_phongban + " từ "+elem1[0] +' đến '+ elem1[1] )
                                              $('#canhbao').html('Tính lại công của  '+ name_phongban + " từ "+dateFrom+' đến '+ dateTo);
                                          }
                          //
                              //
                              //  .html('Tính lại công của  '+ name_nhanvien + " từ "+elem1[0] +' đến '+ elem1[1] )

                          })
}
});





}


function quyencopy(){
   // alert(permission['copylichtuanquyenfull']);
	if(permission['copylichtuanquyenfull']==0){
		if(window.id_phongbancopy==window.id_phongban_userlogin){
			$('.saochep,.dan,.saocheplichtuan,.danlichtuan,.xoa,.xoatuan').show();
			copylichtuan();pastelichtuan();  del();del_tuan();
			$('.saochep,.dan').unbind('click');
			$(".saochep").bind('click',function() {
				saochep()
			});

			$(".dan").bind('click',function() {
				dan()
			});
		}else{
			$('.saochep,.dan,.saocheplichtuan,.danlichtuan,.xoa,.xoatuan').hide();
			$('.saochep,.dan,.saocheplichtuan,.danlichtuan,.xoa,.xoatuan').unbind('click');
		}
	}else{
		$('.saochep,.dan,.saocheplichtuan,.danlichtuan,.xoa,.xoatuan').show();
		copylichtuan();pastelichtuan();  del();del_tuan();
		$('.saochep,.dan').unbind('click');
       $(".saochep").bind('click',function() {
        saochep()
    });

       $(".dan").bind('click',function() {
        dan()
    });


   }

}


function saochep() {
    $('#saocheptam').remove();
    window.saocheptam = $('#rowed3').getRowData(window.rowid);
    nick_nametam=window.saocheptam['name']
    window.saocheptam = window.saocheptam[window.from]
    $("body").append("<div id='saocheptam' style='display:none'>" + window.saocheptam + "</div>");
    phancach = "";
    i = 0;
    y = 0;
    phancach1 = "";
    var _kiemtra = false;
    window.dataToSendCopy = '{';
    loailich1 = loailich.split(";");
			//alert(nick_nametam);
			if(window.id_loailichcopy==0){
				var name_lich='Tất cả';
			}else{
             var name_lich=$("#loailich option[value="+window.id_loailichcopy+"]").text();
         }
         var grid = jQuery('#rowed3');
         $('.saochep').html('<a><span class="ui-icon ui-icon-scissors"></span>Đang chép: '+nick_nametam+'   ('+$.datepicker.formatDate('dd-mm-yy', new Date(window.from))+') (Lịch:'+name_lich+')</a>');
         var colModel = grid.getGridParam('colModel');
         var colName = colModel[window.icol].name;
         var cache_id_lich = "";
         window.dataToSendCopy += '"cell":[';
         $("#saocheptam").find("span").each(function() {
            if (i > 0) {
                phancach = ",";
            }
            if (y > 0) {
                phancach1 = ",";
            }
            for (i = 0; i <= loailich1.length - 1; i++) {
                temp = loailich1[i].split(":");
                if ($(this).html() == temp[1]) {
                    _name = "ID_LoaiLich";
                    _value = temp[0];
                    _kiemtra = true;
                    break;
                } else {
                    _kiemtra = false;
                }
            }
            if (_kiemtra == true) {

                cache_id_lich = '{"' + _name + '":"' + _value + '"';

            } else {
                window.dataToSendCopy += phancach1 + '' + cache_id_lich;
                    // window.dataToSendCopy += phancach + '"'+ "Ngay" + '":"' + colName +'"';
                    _temp1 = $(this).html().split("-");
                    _value = $(this).html();
                    window.dataToSendCopy += phancach + '"' + "GioBatDau" + '":"' + _temp1[0] + '"';
                    window.dataToSendCopy += phancach + '"' + "GioKetThuc" + '":"' + _temp1[1] + '"';
                    window.dataToSendCopy += phancach + '"' + "IsChamCong" + '":"' +  $(this).attr("lang") + '"';
                    window.dataToSendCopy += '}';
                    y++;
                }
                i++;


            })
window.dataToSendCopy += ']}';
			//alert(window.dataToSendCopy)
            window.dataToSendCopy = jQuery.parseJSON(window.dataToSendCopy);

        }
        function dan() {

            $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&oper=copy&user_copy=' + window.rowid + '&ngay_copy=' + window.from,
                window.dataToSendCopy
                ).done(function(data) {

                    if (String(data).match(/thanhcong/g) != null) {
                        tooltip_message("Sao chép thành công");
                    //alert($('#saocheptam').html())
                    window.kiemtradan = true;
                    $("#rowed3").jqGrid('setCell', window.rowid, window.from, window.saocheptam, '');
					// $("#rowed3").trigger('reloadGrid', [{current:true}]);;
                    fixPositionsOfFrozenDivs.call($("#rowed3")[0]);

                } else {
                    tooltip_message("Có lỗi trong quá trình sao chép, vui lòng thử");
                }
                //alert( "Data Loaded: " + data );
            });
            }
            function del() {
             $('.xoa').unbind('click');
             $('.xoa').click(function(e){


                $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&oper=del_cell&user_copy=' + window.rowid + '&ngay_copy=' + window.from
                    ).done(function(data) {
                        if ($.trim(data)== '') {
                            tooltip_message("Xóa thành công");


                            $("#rowed3").jqGrid('setCell', window.rowid, window.from, 'Lịch Trống', '');

                            fixPositionsOfFrozenDivs.call($("#rowed3")[0]);

                        } else {
                            tooltip_message("Có lỗi trong quá trình sao chép, vui lòng thử");
                        }
                //alert( "Data Loaded: " + data );
            });

                })
         }

         function del_tuan() {
             $('.xoatuan').unbind('click');
             $('.xoatuan').click(function(e){




               ngay_del=getMonday(new Date(window.from));
               ngay_del=$.datepicker.formatDate('yy-mm-dd', new Date(ngay_del));
	//	alert(ngay_del);
    $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&hienmaloi=2&oper=del_tuan&id_phongban=' +window.id_phongbancopy + '&ngay_del=' + ngay_del +'&loailich=' + window.id_loailichcopy
        ).done(function(data) {
            if ($.trim(data)== '') {
                tooltip_message("Xóa thành công");
                window.scrollPositiontop = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
                window.scrollPositionleft = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft();

                $('#sCal').trigger('click');

            } else {
                tooltip_message("Có lỗi trong quá trình sao chép, vui lòng thử");
            }
                //alert( "Data Loaded: " + data );
            });

    })
         }

         function dialog_sub_grid(title, width, height, row, colName, rowID) {
            $("body").append('<div class="sub_grid"><table id="rowed4" style="width:100%" ></table><div id="prowed4"></div></div>');
            loadphongban();
            creat_sub_grid(row, colName, rowID);
            shortcut_key();

            $(".sub_grid").dialog({
                height: height,
                width: width,
                modal: false,
                title: title,
                stack: true,
                open: function(event, ui) {
                    $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
                },
                close: function(event, ui) {
            /*
             var rowData = $('#rowed3').jqGrid('getRowData', 79);
             rowData[colName] = '2013-07-29;79;lịch làm việc;7:30;11:00';
             tam=$('#rowed3').jqGrid('getCell',79,'name');
             nickname1 = window.nickname.split(";");
             for(i=0;i<=nickname1.length-1;i++){
             temp=nickname1[i].split(":");
             if(temp[0]==tam){
             rowData['name']=temp[1];
             break;
             }
             }


             //alertObject(window.nickname);
             $('#rowed3').jqGrid('setRowData', 79, rowData);*/
             window.scrollPositiontop = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollTop();
             window.scrollPositionleft = jQuery("#rowed3").closest(".ui-jqgrid-bdiv").scrollLeft();
             $("#rowed3").trigger("reloadGrid");
            //$("#rowed3").jqGrid('setCell',79,colName, '2013-07-29;79');
            //$("#rowed3").jqGrid('getLocalRow', 79)[colName] = '2013-07-29;79';
            //alert(colName)
            //alert($('#rowed3').jqGrid('getCell',79,'name'));
            $("body").remove(".ui-jqdialog");
            $(this).remove();






            //$("#sCal").trigger("click");
        }

    });
}

function reload_grid(elem){
	$("#sCal").trigger("click");

}


function dialog_sub_grid_xem_log(title, width, height, tungay, denngay) {
    $("body").append('<div class="sub_grid"><table id="rowed_xLog" style="width:100%" ></table><div id="prowed4"></div></div>');
    //loadphongban();
    creat_sub_grid_XemLog(tungay, denngay);
    //shortcut_key();

    $(".sub_grid").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {

           // $("#rowed_xLog").trigger("reloadGrid");

           $("body").remove(".ui-jqdialog");
           $(this).remove();


       }

   });
    //$("#rowed_xLog").setGridWidth(width - 25);
    //$("#rowed_xLog").setGridHeight(height - $("#form_danh_muc_phong_ban").height() - 150);
    $(window).resize(function() {
       // $("#rowed_xLog").setGridWidth(width - 25);
       // $("#rowed_xLog").setGridHeight(height - $("#form_danh_muc_phong_ban").height() - 150);
   });
}
function dialog_sub_grid_xem_chamcong(title, width, height,tam) {
    $("body").append('<div class="sub_grid"><table id="rowed_xChamCong" style="width:100%" ></table><div id="prowed4"></div></div>');

//    creat_sub_grid_XemChamCong();

	creat_sub_grid_XemChamCong_new(tam);

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
$(".sub_grid").dialog({
    height: height,
    width: width,
    modal: false,
    title: title,
    stack: true,
    open: function(event, ui) {
        $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
    },
    close: function(event, ui) {

        $("#rowed_xChamCong").trigger("reloadGrid");

        $("body").remove(".ui-jqdialog");
        $(this).remove();


    }

});

}
function dialog_sub_grid_xem_chamcong_new(title, width, height) {
    $("body").append('<div class="sub_grid"><table id="rowed_xChamCong" style="width:100%" ></table><div id="prowed4"></div></div>');

    creat_sub_grid_XemChamCong_new();

    $(".sub_grid").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
            $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
        },
        close: function(event, ui) {

            $("#rowed_xChamCong").trigger("reloadGrid");

            $("body").remove(".ui-jqdialog");
            $(this).remove();


        }

    });

}
function create_formLamDon(nguoigui,newdate1,callback,title,width, height)
{
    $("body").append('<div class="sub_grid_lamdon"></div>');
    $(".sub_grid_lamdon").append('<label id="NgayGioTao">Đơn tạo lúc </label>');
    $(".sub_grid_lamdon").append('<input type="text" name="Ngaygui" id="Ngaygui" disabled="disabled" style="background:#c6c3c6 ;  border: none " value= "'+newdate1+'"><br>');
    $(".sub_grid_lamdon").append('<label id="label_loaisuco">Loại sự cố </label><select name="MavuviecName" id="Mavuviec" ></select><br>');
    $(".sub_grid_lamdon").append('<label id="label_NhanVien">Tên người gởi</label>');
    $(".sub_grid_lamdon").append('<textbox name="Id_NhanVien" id="Id_NhanVien" style="color:red" >'+' '+nguoigui+'</textbox><br>')  ;
    $(".sub_grid_lamdon").append('<label id="label_ghichu">Ghi chú</label>');
    $(".sub_grid_lamdon").append('<textarea id="Noidung" name="Noidung" style="width: 579px; height: 36px;"></textarea><br>');
    $(".sub_grid_lamdon").append('<label id="label_congyeucau">Tổng công yêu cầu </label>');
    $(".sub_grid_lamdon").append('<input type="text" name="DenghiCongthemGio" id="DenghiCongthemGio" style="border: none ; width=20px!important" ><label id="label_gio">giờ</label><input type="text" name="DenghiCongthemPhut" id="DenghiCongthemPhut" style="border: none; width=20px " ><label id="label_phut">phút</label> <label id="yeucau" name="yeucau"></label><br>');
    $(".sub_grid_lamdon").append('<div id="navigator" style="width: 1049px;" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr"><div role="group" class="ui-pager-control" id="pg_prowed3">');
    $("#navigator").append('<table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="table-layout:auto;"><tbody><tr>');
    $("#navigator").append('<td class="ui-pg-button ui-corner-all " id="first_navigator"><span class="ui-icon ui-icon-seek-first"></span></td>');
    $("#navigator").append('<td class="ui-pg-button ui-corner-all " id="prev_navigator"><span class="ui-icon ui-icon-seek-prev"></span></td>');
    $("#navigator").append('<td style="width:4px;" class="ui-pg-button ui-state-disabled"><span class="ui-separator"></span></td>');
    $("#navigator").append('<td dir="ltr">Trang <input type="text" role="textbox" value="0" maxlength="7" size="2" class="ui-pg-input"> trong tổng số <span id="sp_1_prowed3">1</span></td>');
    $("#navigator").append('<td style="width: 4px; cursor: default;" class="ui-pg-button ui-state-disabled"><span class="ui-separator"></span></td>');
    $("#navigator").append('<td class="ui-pg-button ui-corner-all " id="next_navigator" style="cursor: default;"><span class="ui-icon ui-icon-seek-next"></span></td>');
    $("#navigator").append('<td class="ui-pg-button ui-corner-all " id="last_navigator" style="cursor: default;"><span class="ui-icon ui-icon-seek-end"></span></td></tr>');

    $("#DenghiCongthemGio,#DenghiCongthemPhut").keyup(function(){
     var phut1=$("#DenghiCongthemGio").val()*60;
     var phut2=0;
     if ($("#DenghiCongthemPhut").val()!='')
     {
         phut2= $("#DenghiCongthemPhut").val();
     }

     var phut=parseInt(phut1)+parseInt(phut2);
     $("#yeucau").text('    (Đã yêu cầu : '+ phut+"')")
 });
   //$(".sub_grid_lamdon").append('<label id="yeucau" name="yeucau"></label><br>');


   $(".sub_grid_lamdon").append('<a style="margin-left:0px;" class="fm-button ui-state-default ui-corner-all fm-button-icon-left" id="GuiDon" href="#">Gửi đơn<span class="ui-icon ui-icon-person"></span></a><br>');
   callback(arguments[3],arguments[4],arguments[5]);
}
function callback_form_lam_don(title, width, height){

    window.loaisuco = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục sự cô');
    }}).responseText;
    loaisuco1 = loaisuco.split(";");
    $(".sub_grid_lamdon").dialog({
        height: height,
        width: width,
        modal: false,
        title: title,
        stack: true,
        open: function(event, ui) {
           for (i = 0; i <= loaisuco1.length - 1; i++) {
            temp = loaisuco1[i].split(":");
            $('#Mavuviec').append($('<option>', {
                value: temp[0],
                text: temp[1]
            }

            ));
            autocompleted_combobox('#Mavuviec');
        }

        $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
    },
    close: function(event, ui) {
        $("#rowed_xDonbaosuco").trigger("reloadGrid");
        $("body").remove(".sub_grid_lamdon");
        $(this).remove();
    }
});
    $("#first_navigator").click(function(){
      $.post('pages.php?module=lich&view=lich_lam_viec&action=data_lamdonchamcong&iddonsuco=1&id_nhanvien=' + $("#text_nhanvien").val()).done(function(data) {alert(data)});
  });
    $("#prev_navigator").click(function(){

    });
    $("#next_navigator").click(function(){

    });
    $("#last_navigator").click(function(){

    });
    $("#GuiDon").click(function(){
        window.callControllerLamđon = $.ajax({url: 'pages.php?module=lich&view=lich_lam_viec&action=controller_LamDonChamCong&Mavuviec=' + $("#Mavuviec option:selected").val() + '&id_nhanvien=56', async: false, success: function(data, textStatus, jqXHR) {
            if (jqXHR.responseText == 1) {
                $("#dialog-confirm").dialog("open");
            } else {
                tooltip_message("Tạo đơn thành công");
            }
        }}).responseText;

    });

}
function dialog_sub_grid_donbaosuco(title, width, height,nguoigui) {

    var today = new Date()
    var time = today.getHours() + ":" + today.getMinutes();
    var newdate1 = time + ' '+ $.datepicker.formatDate("dd-mm-yy", new Date(today));
    create_formLamDon(nguoigui,newdate1,callback_form_lam_don,title, width, height);

}





function showGetResultTotalGio( )
{

 var elem;
  var elem1 = [];
  $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
    if ($(this).is(':checked')) {
        if ($(this).attr("id") == "date_range_radio") {
            elem1[0] = $("#from_day_mask").val();
            elem1[1] = $("#to_day_mask").val();
        } else {
            elem = ($(this).attr("id")).split("_");
            elem = $("#" + elem[0] + "_mask");
            elem1 = (elem.val()).split(";");
        }
    }
});


            var fromdate= elem1[0];
            var todate=elem1[1];
            var id_nvien= $("#text_nhanvien").val();

            var phongban = $.ajax({url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_totalgiocong&fromdate='+ fromdate +'&todate='+todate + '&ID_NhanVien=' + id_nvien, async: false, success: function(data, result) {if (!result) alert('Không load tổng giờ');}}).responseText;

            var outp=jQuery.parseJSON(phongban);



             if(typeof outp.rows !== 'undefined'){
   // your code here.
   var ChiTietCong=outp.rows[0]['cell'][1];

            window.tonggiocongNhanvien=ChiTietCong;


 };
          /*   if (outp.rows[0]['cell'].length>0)
             {
              var ChiTietCong=outp.rows[0]['cell'][1];

            window.tonggiocongNhanvien=ChiTietCong;

             }*/
             //alert(tonggiocongNhanvien);






}



function showGetResultTotalGio_new( ){
			 var elem;
			  var elem1 = [];
			  $("#calendar_option").find('input[type=radio]').each(function(idx, val, f) {
				if ($(this).is(':checked')) {
					if ($(this).attr("id") == "date_range_radio") {
						elem1[0] = $("#from_day_mask").val();
						elem1[1] = $("#to_day_mask").val();
					} else {
						elem = ($(this).attr("id")).split("_");
						elem = $("#" + elem[0] + "_mask");
						elem1 = (elem.val()).split(";");
					}
				}
			});
            var fromdate= elem1[0];
            var todate=elem1[1];
            var id_nvien=rowid;
            var phongban = $.ajax({url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_totalgiocong&fromdate='+ fromdate +'&todate='+todate + '&ID_NhanVien=' + id_nvien, async: false, success: function(data, result) {if (!result) alert('Không load tổng giờ');}}).responseText;
			var outp=jQuery.parseJSON(phongban);
             if(typeof outp.rows !== 'undefined'){ 
  				 var ChiTietCong=outp.rows[0]['cell'][1];
          	     window.tonggiocongNhanvien=ChiTietCong;
			 };
  
}
</script>
