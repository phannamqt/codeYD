<!--author:khatm-->
<style type="text/css">

th.ui-th-column div{
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
  #id_thieu{
    height:160px;
  }
  #rowed3 td,#rowed4 td,#rowed5 td{

    font-size:11px!important;
  }

  .ui-menu {
    width: 150px;
    display:none;
    position:absolute;
    box-shadow:0px 0px 3px #333;
    z-index:100000;
  }

  .ghichu   {
    border:1px;
    border-style: solid;
    display: inline-block;
  }
  .grid1
  {
    width:180px;
    display:inline-block;
  }
  #menu_toggle{
    font-size:12px;
    padding:5px 0px;
    background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll   #459E00;
    border:#CCC 1px dashed;
  }

  .demgio{
    color:red;
    cursor:pointer;

  }
  .disable{
    color:red;
    background:#333;

  }
  #gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
    margin-left:4px;
    margin-top:5px;
    box-shadow:0px 0px 10px #a0a0a0;
    border:1px solid #919191;
  }
  #menu {
    width: 150px!important;
    display:none;
    position:absolute;
    box-shadow:0px 0px 3px #333;
    z-index:100000;
    background: #ffffff;
  }
  #menu2 {
    width: 210px!important;
    display:none;
    position:absolute;
    box-shadow:0px 0px 3px #333;
    z-index:100000;
    background: #ffffff;
  }
  #menu3 {
    width: 210px!important;
    display:none;
    position:absolute;
    box-shadow:0px 0px 3px #333;
    z-index:100000;
    background: #ffffff;
  }
  #calendar {
    width: 900px;
    margin: 0 auto;
  }

  .myAltRowClassEven { background: #E0E0E0; border-color: #79B7E7; color: Tomato; }
  .myAltRowClassOdd { background: DarkOrange; }
  .ui-state-hover.myAltRowClassEven { color: Magenta; }
  .ui-state-hover.myAltRowClassOdd { color: RoyalBlue; }
  .ui-state-highlight.myAltRowClassEven { color: PaleGreen; }
  .ui-state-highlight.myAltRowClassOdd { color: Sienna; }

  input[type=button].custom_button{
    /*  border:1px solid #000;*/
    border:none;
    background:none;
    /*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
    outline:  none;
    text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
    font-size:11px;
    height:17px!important;
    width:80px!important;
    text-decoration:underline;

    /*box-shadow:0px 0px 2px 1px #a0a0a0;*/
  }
  input[type=button].custom_button:focus{
    outline:  none;
  }
  :focus {outline:none;}
  ::-moz-focus-inner {border:0;}
  .ui-menu {
    width: 200px;
    display:none;
    position:absolute;
    box-shadow:0px 0px 3px #333;
    z-index:100000;
  }
  .col1 {
    background-color: #F8E0EC;
  }
  .col2 {
    background-color: #BEF781;

  }
  .CotSoTien
  {
   font-size: 14px;

 }
 .Datra
 {
  background-color: pink;
}


.footrow td[aria-describedby="rowed12_TienThuVao"],.footrow td[aria-describedby="rowed12_TienChiRa"],
.footrow td[aria-describedby="rowed12_GhiChu"],.footrow td[aria-describedby="rowed12_MaPhieu"]
{
 background-color: #CEF6EC !important;
}
</style>


<body>


  <div id="panel_main" style="margin-top:10px;" >



    <div id="top_main">
     <div class="form_row">

      <span>
        <label for="from_day" style="width:17px"> Từ</label>
        <input type="text"  style="width:109px" name="from_day" id='from_day'>
        <label for="to_day" style="width:23px"> Đến </label>
        <input type="text"   style="width:109px" name="to_day" id='to_day'>
        <label for="soHD_now" style="width:100px"> Số HĐ lớn nhất là </label>
        <input type="text"  style="width:109px;color:red" name="soHD_now" id='soHD_now'>
        <button type="button" id="xem">Xem</button>
        <span class="custom-combobox" >
          <input id='com_thuochmk' class='com_thuochmk'  style="width:200px"></span>
          <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
        </span>

      </div>
    </div>
    <div >
      <div id="tabs">
       <ul style="margin-left:5px;">
        <li><a href="#tabs-1" id="dsbenhnhancho">DS chưa lưu hóa đơn</a></li>
        <li><a href="#tabs-2" id="dschuathanhtoan">DS đã lưu hóa đơn</a></li>


      </ul>
      <div id="tabs-1">


        <div id="panel_main2" style="margin-top:10px;" >
         <div class="ui-layout-north n_tren">
           <table id="rowed14" ></table>
         </div>
         <div class="ui-layout-center n_duoi">
           <table id="rowed15" ></table>
         </div>
       </div>




     </div>
     <div id="tabs-2">
       <table id="rowed3" ></table>
     </div>
                <!--   <div id="tabs-3">
                    <table id="rowed5"></table>

                  </div> -->

                </div>

              </div>
            </div>

          </body>
          </html>

          <script type="text/javascript">
            jQuery(document).ready(function() {
_sumTienKham=0;
_sumTienThuoc=0;
_sumTienGiam=0;
window.ID_ThuTraNoMulti='';
              window.loaiHD=1;
              window.ma=0;


  openform_shortcutkey(); //mở bằng phím tắt được thiết lập trong DBpduye
  $("#panel_main2").css("height",$(window).height()-100+"px");
  $("#panel_main2").fadeIn(1000);
  $.dateEntry.setDefaults({spinnerImage: ''});
  jwerty.key('f5', false);

  $('body').bind('keydown', function(e) {
   if (jwerty.is("f5",e)) {
    $('#xem').click();
  }
})


  create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_pbChuyenMon,500,240,'Danh mục ','data_pbchuyenmon',window.default_id_pb_ChuyenMon);


  $("#from_day, #to_day").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
  $('#rowed3').bind('keydown',function(e){
    if (e.keyCode == '32') {
     var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow') );

     parent.postMessage('tamung;tam_ung;'+rowData['ID_BenhNhan']+';'+ rowData['ID_LuotKham']+';;add','*');
   }
   if(jwerty.is('enter',e)) {

     var rowData = jQuery('#rowed3').getRowData($('#rowed3').jqGrid('getGridParam', 'selrow'));
     var ID_LuotKham = rowData['ID_LuotKham'];
     var id_benhnhan = rowData['ID_BenhNhan'];
     var MaBenhNhan = rowData['MaBenhNhan'];
     var TenBenhNhan = rowData['TenBenhNhan'];
     parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");

   }

 })

  temp = jQuery(window).height()+490 ;
  $("#panel_main").css("height", temp + "px");
  $("#panel_main").fadeIn(1000);
  window.default_id_tang=2;
  $("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
  $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
  window._tungay='';
  window._denngay='';
  window.tenbenhnhan3="";
  window.contro="0";


  $("#dsbenhnhancho").click(function(){
    window.contro="1";
    $("#xem").click();
  })
  $("#dschuathanhtoan").click(function(){
    window.contro="2";
    $("#xem").click();
  })



  $("#xem").button();
  $( "#tabs" ).tabs({

   <!--heightStyle:"fill", -->



 });
  $( "#tabs" ).tabs({ active: 0 });



  $("#from_day").datepicker({
   dateFormat:  $.cookie("ngayJqueryUi")
 });
  $("#to_day").datepicker({

    dateFormat:  $.cookie("ngayJqueryUi")
  });

  create_layout();
  create_grid14();
  create_grid15('[]');
  create_grid();




  resize_control();


  $(window).resize(function() {
    temp = jQuery(window).height() - 50;
    $("#panel_main").css("height", temp + "px");
    resize_control();
  })





})


function getMaxHD()
{

  $.ajax({
    type: 'POST',
    async : true,
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_MaxHD',

    success: function(output, status, xhr) {
      output=jQuery.parseJSON(output);
      window.ma=output.rows[0]['cell'][0];
      $("#soHD_now").val($.trim( window.ma));

    },


  });
}


function create_grid() {

  $("#rowed3").jqGrid({
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_dalapHoadon',
    datatype: "json",
    colNames: ['','MaLoaiHD','Ngày Hóa đơn','Ngày khám', 'Mã BN', 'Họ tên','Số HĐ','Địa chỉ hóa đơn',
    'Đối tượng','Phải trả','Miễn giảm','Nội dung','Chi tiết bảng kê','MaLoaiHD','','id thuTN','id_thue','Người hủy','Giờ hủy','','Ngày thanh toán'],
    colModel: [


    {name: 'ID_HoaDonThueDiary', index: 'ID_HoaDonThueDiary', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'MaLoaiHD', index: 'MaLoaiHD', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'GioLap2',width: "4%",sortable: true,search: true, index: 'GioLap2', align: 'left', hidden: false, },
    {name: 'NgayKham',width: "4%",sortable: true,search: true, index: 'NgayKham', align: 'left', hidden: false, },
    {name: 'MaBenhNhan',width: "3%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'Hoten',width: "10%",  sortable: true, index: 'Hoten', search: true, editable: false, align: 'left', hidden: false},
    {name: 'SoHD', width: "3%",sortable: true, index: 'SoHD', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'DiaChiHoaDon', width: "10%", index: 'DiaChiHoaDon', search: true, editable: false, align: 'left', hidden: false},
    {name: 'LoaiDoiTuongKham', width: "3%",index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'Total',summaryType: 'sum', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'Total', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'MienGiam', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'MienGiam', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'NoiDung',width: "4%",sortable: true,search: true, index: 'NoiDung', align: 'left', hidden: false, },
    {name: 'ChiTietBangKe',width: "6%",sortable: true,search: true, index: 'ChiTietBangKe', align: 'left', hidden: false, },
    {name: 'TenLoaiHD',width: "6%",sortable: true,summaryType: 'count',search: true, index: 'TenLoaiHD', align: 'left', hidden: false, },
    {name: 'GioLap',width: "4%",sortable: true,summaryType: 'count',search: true, index: 'GioLap', align: 'left', hidden: false, },
    {name: 'ID_ThuTraNo',width: "6%",sortable: true,summaryType: 'count',search: true, index: 'ID_ThuTraNo', align: 'left', hidden: true, },
    {name: 'ID_HoaDonThueDiary',width: "6%",sortable: true,summaryType: 'count',search: true, index: 'ID_HoaDonThueDiary', align: 'left', hidden: true, },
    {name: 'HotenNguoiHuy',width: "3%",sortable: true,summaryType: 'count',search: true, index: 'HotenNguoiHuy', align: 'left', hidden: false, },
    {name: 'NgayGioHuy',width: "2%",sortable: true,summaryType: 'count',search: true, index: 'NgayGioHuy', align: 'left', hidden: false, },
    {name: 'GhiChu',width: "1%",sortable: true,search: true, index: 'GhiChu', align: 'left', hidden: true, },
	{name: 'NgayGio',width: "5%",sortable: true,search: true, index: 'NgayGio', align: 'left', hidden: false, },
    
        

    ],
    loadonce: true,
    scroll: false,
    modal: true,
    shrinkToFit: true,
    cmTemplate: {sortable: false},
    rowNum: 10000000,
    rowList: [],
    pager: '#prowed3',
    sortname: 'ID_HoaDonThueDiary',
    height: 100,
    width: 100,
    viewrecords: true,
    ignoreCase: true,
    sortorder: "desc",
    footerrow:true,

    grouping: true,
    rownumbers: true,
    autowidth:true,
    groupingView: {groupField: ['GioLap', 'TenLoaiHD'],
    groupOrder: ['desc', 'asc'],
    groupSummary: [false, false],
    showSummaryOnHide: [false, false],
    groupColumnShow: [false, false],
    groupText: [' <b >{0}</b> có  <b style="color: orangered">{Total}</b> $', '<b style="color: blue">{0}</b> có <b style="color: orangered"> {TenLoaiHD}</b> tờ'],
    groupCollapse: false,
    showSummaryOnHide: false,
  },
  onSelectRow: function(id) {
  },
  ondblClickRow: function(rowId) {

   var rowData = jQuery(this).getRowData(rowId);
   var ID_ThuTraNo = rowData['ID_ThuTraNo'];
   var MaLoaiHD = rowData['MaLoaiHD'];
   var ID_HoaDonThueDiary = rowData['ID_HoaDonThueDiary'];
    ID_ThuTraNoMultiP = rowData['GhiChu'];
   //alert(ID_ThuTraNoMultiP);
   if(MaLoaiHD==1||MaLoaiHD==5||MaLoaiHD==6||MaLoaiHD==7)
   {
    dialog_main("Hóa đơn "+ID_ThuTraNo+  '   ', 90, 90, "56743265743657", "pages.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD="+MaLoaiHD+"&ID_HoaDonThueDiary="+ID_HoaDonThueDiary);
   }
   else
   {
    dialog_main("Hóa đơn "+ID_ThuTraNo+  '   ', 90, 90, "56743265743657", "pages.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD="+MaLoaiHD+"&ID_HoaDonThueDiary="+ID_HoaDonThueDiary+"&ID_ThuTraNoMulti="+ID_ThuTraNoMultiP);
   }



 },
 onselect: function(rowId, rowIndex, columnIndex) {
 },
 onRightClickRow: function(rowid, iRow, iCol, e) {

 },
 loadComplete: function(data) {


  var ids = $('#rowed3').jqGrid('getDataIDs');
  for (i = 0; i < ids.length; i++) {
    var rowData = jQuery('#rowed3').getRowData(ids[i]);


         
            var _class="do";
         
          ChiTietBangKe = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='Bảng kê' onclick=\"moghichu('"+rowData["ID_HoaDonThueDiary"]+"','"+rowData["MaLoaiHD"]+ "','"+rowData["ID_ThuTraNo"]+"');\" />"; 
          
          $("#rowed3").jqGrid('setRowData',ids[i],{ChiTietBangKe:ChiTietBangKe});
























    window.rowcount_luoichuathanhtoan = $("#rowed3").getGridParam("reccount");


    if (rowData["MaLoaiHD"] == "1") {
      $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#67F852', color: 'black'});


    }
    else if   (rowData["MaLoaiHD"] == "3")
    {
      $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#FFCEF1', color: 'black'});

    }
    else if   (rowData["MaLoaiHD"] == "5")
    {
      $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#36DBF8', color: 'black'});

    }

    else if   (rowData["MaLoaiHD"] == "6")
    {
      $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#3FF8F8', color: 'black'});

    }
    else if   (rowData["MaLoaiHD"] == "7")
    {
      $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#E4ED47', color: 'black'});

    }





    if (rowData["HotenNguoiHuy"] != "" ||rowData["NgayGioHuy"] != "") {
      $("#rowed3").setCell(ids[i], 'SoHD', '', {background: '#B4B4B4', color: 'red'});
      $("#rowed3").setCell(ids[i], 'DiaChiHoaDon', '', {background: '#B4B4B4', color: 'red'});
      $("#rowed3").setCell(ids[i], 'Total', '', {background: '#B4B4B4', color: 'red'});
      $("#rowed3").setCell(ids[i], 'MienGiam', '', {background: '#B4B4B4', color: 'red'});
      $("#rowed3").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: '#B4B4B4', color: 'red'});
    }


 //{name: 'Total',summaryType: 'sum', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'Total', search: true,  editable: false, align: 'left', hidden: false},
    //{name: 'MienGiam', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'MienGiam', search: true,  editable: false, align: 'left', hidden: false},



                sumTongCong = $("#rowed3").jqGrid("getCol", "Total", false, "sum");
                    sumMienGiam = $("#rowed3").jqGrid("getCol", "MienGiam", false, "sum");
             



                    $("#rowed3").jqGrid("footerData", "set", {
                      Total: sumTongCong,
                      MienGiam: sumMienGiam
                    });

  }


},
caption: "Ds đã lưu hóa đơn"
});
$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

}


function create_ds_pbChuyenMon(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
  colNames:['Loại HĐ','Diễn giải'],
  colModel:[
  {name:'TenLoaiHD',index:'TenLoaiHD',hidden :false,width: "45%",},
  {name:'DienGiai',index:'DienGiai',hidden :false,width: "55%",},


  ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 200000,
  rowList:[],
  sortname: 'tenhangmuc',
  height:265,
  width: 700,
  viewrecords: true,
  ignoreCase:true,
  shrinkToFit:true,
  cmTemplate: {sortable:false},
  sortorder: "desc",
  serializeRowData: function (postdata) {
  },
  onSelectRow: function(id){



    if($(elem).data('clicked')){


       var tmp = $("#rowed15").jqGrid('getDataIDs');
       if(tmp.length>0)
       {

          $('<div></div>').appendTo('body')
            .html('<div><h2>Bạn chọn loại hóa đơn khác sẽ  bỏ hết các ca đã chọn</h2></div>')
            .dialog({
              modal: true,
              title: 'Bỏ chọn',
              zIndex: 10000,
              autoOpen: true,
              width: 'auto',
              resizable: false,
              buttons: {
                Yes: function () {
                 // subItem();
$('#rowed15').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');

                var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.loaiHD=$.trim(selr);
                loadDatatheoComboLoaiHoadon( window.loaiHD);
                 tooltip_message("Thao tác tiếp tục");
                  $(this).dialog("close");

                },
                No: function () {
                 tooltip_message("Chưa thao tác gì");
                 $(this).dialog("close");
               }
             },
             close: function (event, ui) {
              $(this).remove();
            }
          });

       }
      else{

                var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.loaiHD=$.trim(selr);
                loadDatatheoComboLoaiHoadon( window.loaiHD);

      }



    }

  },
  ondblClickRow: function (id, rowIndex, columnIndex) {

  },
  loadComplete: function(data) {
    grid_filter_enter(elem) ;
    count = jQuery(elem).jqGrid('getGridParam', 'records');
    if(count>0){
      ids = ($(elem).getDataIDs()[0]);
      $(elem).jqGrid("setSelection",ids, true);
    }
  },

});

$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );

}

function resize_control() {

  $("#rowed3").setGridWidth($(window).width()-50);
  $("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);

  $("#rowed5").setGridWidth($(window).width()-45);
  $("#rowed5").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);

  $("#rowed14").setGridWidth($(window).width()-50);


  $("#rowed15").setGridWidth($(window).width()-50);

  $("#rowed14").setGridHeight($('.n_tren').height()-110);
  $("#rowed15").setGridHeight($('.n_duoi').height()-105);


}


function create_grid14() {


  $("#rowed14").jqGrid({
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chualapHoaDon&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&id_loaiHD='+window.loaiHD,
    datatype: "json",
    colNames: ['LuotKham', 'Mã BN', 'Họ lót','Tên BN','Tên gói khám SKCT','Địa chỉ','Đối tượng','Thanh toán lúc',
    'Tổng cộng','Miễn giảm','Tiền thuốc','Tiền khám CB','','Ngày khám','NgT1','NgT2','NoT1','NoT2'],
    colModel: [
    {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'MaBenhNhan',width: "3%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'HoLotBenhNhan',width: "9%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'TenBenhNhan', width: "3%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TenDotKham', width: "5%",sortable: true, index: 'TenDotKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'DiaChi', width: "8%",sortable: true, index: 'DiaChi', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'LoaiDoiTuongKham',width: "2%", sortable: true, index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'NgayGio',width: "3%",sortable: true,search: true, index: 'NgayGio', align: 'left', hidden: false, },
    {name: 'TongPhaiTra', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongPhaiTra', search: true,  editable: false, align: 'left', hidden: false},

    {name: 'TongMienGiam',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'TongMienGiam', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TienThuoc',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'TienThuoc', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TienKham',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'TienKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'ID_ThuTraNo',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "4%",sortable: true, index: 'ID_ThuTraNo', search: true,  editable: false, align: 'left', hidden: true},
    {name: 'ThoiGianVaoKham',width: "3%",sortable: true,search: true, index: 'ThoiGianVaoKham', align: 'left', hidden: false, },
      {name:'DaCoHDKCBNgoaiTru',index:'DaCoHDKCBNgoaiTru', width:"2%", editable:false,align:'center',hidden:true},
        {name:'DaCoHDThuocNgoaiTru',index:'DaCoHDThuocNgoaiTru', width:"2%", editable:false,align:'center',hidden:true},
        {name:'DaCoHDKCBNoiTru',index:'DaCoHDKCBNoiTru', width:"2%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDThuocNoiTru',index:'DaCoHDThuocNoiTru', width:"2%", editable:false,align:'center',hidden:false},
    ],
    multiselect: true,
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pginput:false,
    pgbuttons:false,
    pager: '#prowed14',
    sortname: 'ID_LuotKham',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,
    footerrow:true,

    onSelectRow: function(id) {


    },
    ondblClickRow: function(rowId) {
     var rowData = jQuery(this).getRowData(rowId);

     var rowData = jQuery(this).getRowData(rowId);
     var ID_ThuTraNo = rowData['ID_ThuTraNo'];
     var ID_HoaDonThueDiary = rowData['ID_HoaDonThueDiary'];


     dialog_main("Đang chọn loại "+ $("#com_thuochmk").val() +  '   ', 90, 90, "56743265743657", "pages.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&ID_ThuTNo="+ID_ThuTraNo+"&phanloaiHD="+window.loaiHD);



   },
   onselect: function(rowId, rowIndex, columnIndex) {

   },
   onRightClickRow: function(rowid, iRow, iCol, e) {



   },
   loadComplete: function(data) {


     var ids = $('#rowed14').jqGrid('getDataIDs');


     for (i = 0; i < ids.length; i++) {

  var rowData = jQuery('#rowed14').getRowData(ids[i]);

/*    if(rowData["DaCoHDKCBNgoaiTru"]>0)
    {
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: 'red', color: 'black'});
      $("#rowed14").setCell(ids[i], 'HoLotBenhNhan', '', {background: 'red', color: 'black'});
      $("#rowed14").setCell(ids[i], 'TenBenhNhan', '', {background: 'red', color: 'black'});

        $("#rowed14").setCell(ids[i], 'DaCoHDKCBNgoaiTru', '', {background: '#67F852', color: 'black'});

    }

    if(rowData["DaCoHDThuocNgoaiTru"]>0)
    {
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: 'red', color: 'black'});
      $("#rowed14").setCell(ids[i], 'HoLotBenhNhan', '', {background: 'red', color: 'black'});
      $("#rowed14").setCell(ids[i], 'TenBenhNhan', '', {background: 'red', color: 'black'});
       $("#rowed14").setCell(ids[i], 'DaCoHDThuocNgoaiTru', '', {background: '#36DBF8', color: 'black'});
    }
*/

   /* switch($.trim(window.loaiHD)){
      case 1:

      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#3FF8F8', color: 'black'});

      break;

      case 5:
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#36DBF8', color: 'black'});
      break;
      case 6:

      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#3FF8F8', color: 'black'});
      break;
      case 7:
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#FBA8F2', color: 'black'});
      break;
      case 8:
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#FBA8F2', color: 'black'});
      break;
      case 9:
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#3FF8F8', color: 'black'});
      break;
      case 10:
      $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#3FF8F8', color: 'black'});
      break;
      case 11:
     $("#rowed14").setCell(ids[i], 'MaBenhNhan', '', {background: '#36DBF8', color: 'black'});
      break;
    }*/


}
    var d=$("#rowed14").jqGrid('getGridParam', 'records');


    $("#rowed14").jqGrid('setCaption', 'Danh sách : '+ d);


    sumTongCong = $("#rowed14").jqGrid("getCol", "TongPhaiTra", false, "sum");

    sumTongMienGiam = $("#rowed14").jqGrid("getCol", "TongMienGiam", false, "sum");
    sumThuoc = $("#rowed14").jqGrid("getCol", "TienThuoc", false, "sum");
    sumTienKham = $("#rowed14").jqGrid("getCol", "TienKham", false, "sum");

    $("#rowed14").jqGrid("footerData", "set", {
      TongPhaiTra: sumTongCong,
      TongMienGiam: sumTongMienGiam,
      TienThuoc: sumThuoc,
      TienKham:sumTienKham,
      MaBenhNhan:d
    });

  },
  caption: "Ds chưa lập hóa đơn"
});
$("#rowed14").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed14").jqGrid('navGrid', "#prowed14", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

$('.footrow td[aria-describedby="rowed14_HoLotBenhNhan"]').append('<input type="button" value="Chọn" onclick=addItem()> ');
$('.footrow td[aria-describedby="rowed14_HoLotBenhNhan"]').append('<input type="button" value="Bỏ" onclick=subItem()> ');
$('.footrow td[aria-describedby="rowed14_HoLotBenhNhan"]').append('<input type="button" value="Bảng kê" onclick=save()> ');

}



function save()
{

var tam=window.loaiHD;
if(tam==1||tam==5||tam==6||tam==7)
    {
alert('hãy chọn loại bảng kê');
    }

else
    {

            var tmp = $("#rowed15").jqGrid('getDataIDs');
            window.ID_ThuTraNoMulti='';
            for (var i = 0; i < tmp.length; i++){
              var rowData = jQuery('#rowed15').jqGrid ('getRowData', tmp[i]);
                window.ID_ThuTraNoMulti+=rowData['ID_ThuTraNo']+'|||';

            }

            var para="pages.php?module=vienphi>&view=hoadon&action=HDChiTiet&type=test&id_form=11&phanloaiHD="+tam+"&ID_ThuTraNoMulti="+ID_ThuTraNoMulti+"&_sumTienKham="+_sumTienKham+"&_sumTienThuoc="+_sumTienThuoc+"&_sumTienGiam="+_sumTienGiam;
//alert(para)
                 dialog_main("Đang chọn loại "+ $("#com_thuochmk").val() +  '   ', 90, 90, "56743265743657", para);

    }
}


function  addItem()
{
 var tam=window.loaiHD;
if(tam==1||tam==5||tam==6||tam==7)
    {
alert('hãy chọn loại bảng kê');
    }

else
    {
 row= jQuery("#rowed14").jqGrid('getGridParam','selarrrow');
 for(i=0;i<row.length;i++){
  var rowData = jQuery('#rowed14').jqGrid ('getRowData', row[i]);
  _sumTienKham+=parseInt(rowData["TienKham"]);
  _sumTienThuoc+=parseInt(rowData["TienThuoc"]);
  _sumTienGiam+=parseInt(rowData["TongMienGiam"]);

  parameters =
  {

    initdata : rowData,
    position :"last",
    useDefValues : false,
    useFormatter : false,
    addRowParams : {extraparam:{}}
  }
  jQuery("#rowed15").jqGrid('addRow',parameters);
  jQuery("#rowed14").jqGrid('delRowData', row[i]);
  i--;

}
$('#rowed14').setGridParam({loadonce: true}).trigger('reloadGrid');
$('#rowed15').setGridParam({loadonce: true}).trigger('reloadGrid');
}
}
function  subItem()
{
 //alert('2');
 row= jQuery("#rowed15").jqGrid('getGridParam','selarrrow');
 for(i=0;i<row.length;i++){
  var rowData = jQuery('#rowed15').jqGrid ('getRowData', row[i]);
  _sumTienKham-=parseInt(rowData["TienKham"]);
  _sumTienThuoc-=parseInt(rowData["TienThuoc"]);
  _sumTienGiam-=parseInt(rowData["TongMienGiam"]);



  parameters =
  {

    initdata : rowData,
    position :"last",
    useDefValues : false,
    useFormatter : false,
    addRowParams : {extraparam:{}}
  }
  jQuery("#rowed14").jqGrid('addRow',parameters);
  jQuery("#rowed15").jqGrid('delRowData', row[i]);
  i--;

}
$('#rowed14').setGridParam({loadonce: true}).trigger('reloadGrid');
$('#rowed15').setGridParam({loadonce: true}).trigger('reloadGrid');

}


function create_grid15(datalocal){

  datalocal=jQuery.parseJSON(datalocal);
  $("#rowed15").jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,
    colNames: ['LuotKham', 'Mã BN', 'Họ lót','Tên BN','Tên gói khám SKCT','Địa chỉ','Đối tượng','Ngày khám','Phải trả','Miễn giảm','Tiền thuốc','Tiền khámCB','ID_ThuTNo','SOHD'],
    colModel: [
    {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'MaBenhNhan',width: "2%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'HoLotBenhNhan',width: "4%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'TenBenhNhan', width: "3%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TenDotKham', width: "5%",sortable: true, index: 'TenDotKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'DiaChi', width: "8%",sortable: true, index: 'DiaChi', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'LoaiDoiTuongKham',width: "2%", sortable: true, index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'ThoiGianVaoKham',width: "2%",sortable: true,search: true, index: 'ThoiGianVaoKham', align: 'left', hidden: false, },
    {name: 'TongPhaiTra', width: "2%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongPhaiTra', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TongMienGiam', width: "2%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'TongMienGiam', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TienThuoc', width: "2%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, sortable: true, index: 'TienThuoc', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'TienKham', width: "2%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, sortable: true, index: 'TienKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'ID_ThuTraNo', width: "0%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, index: 'ID_ThuTraNo', search: true,  editable: false, align: 'left', hidden: true},
    {name: 'SoHD',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width: "0%",sortable: true, index: 'SoHD', search: true,  editable: false, align: 'left', hidden: true},
    ],
    multiselect: true,
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pginput:false,
    pgbuttons:false,
    pager: '#prowed15',
    sortname: 'ID_NhanVien',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,
    footerrow:true,

    loadComplete: function(data) {


     getMaxHD();


     var ids = $('#rowed15').jqGrid('getDataIDs');


     for (i = 0; i < ids.length; i++) {
      var rowData = jQuery('#rowed15').getRowData(ids[i]);


      window.rowcount_luoichuathanhtoan = $("#rowed15").getGridParam("reccount");


      $("#rowed15").jqGrid('setCell',ids[i],'SoHD', i+window.ma+1);



      var d=$("#rowed15").jqGrid('getGridParam', 'records');


      $("#rowed15").jqGrid('setCaption', 'Danh sách : '+ d);


      sumTongCong = $("#rowed15").jqGrid("getCol", "TongPhaiTra", false, "sum");

      sumTongMienGiam = $("#rowed15").jqGrid("getCol", "TongMienGiam", false, "sum");
      sumThuoc = $("#rowed15").jqGrid("getCol", "TienThuoc", false, "sum");
      sumTienKham = $("#rowed15").jqGrid("getCol", "TienKham", false, "sum");




      $("#rowed15").jqGrid("footerData", "set", {
        TongPhaiTra: sumTongCong,
        TongMienGiam: sumTongMienGiam,
        TienThuoc: sumThuoc,
        TienKham:sumTienKham,
         MaBenhNhan:d
      });
    }
  },

  caption: "Danh sách các lượt đã chọn để lập hóa đơn",


});

$("#rowed15").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed15").jqGrid('navGrid', "#prowed15", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

};



$( "#xem" ).click(function() {


 if(window.contro=="1"){
  loadDatatheoComboLoaiHoadon(window.loaiHD);
}

else if(window.contro=="2"){
  $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_dalapHoadon&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
}

else if(window.contro=="8"){
                        //alert('d')   ;
                        $("#rowed13").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cacdonthuoctralai&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                      }
                      else{

                      }

                      var d=$("#rowed3").jqGrid('getGridParam', 'records');


                      $("#rowed3").jqGrid('setCaption', 'Danh sách hóa đơn đã lưu: '+ d);
                    });


function create_layout(){
  $('#panel_main2').layout({
    resizerClass: 'ui-state-default'
    , north: {
      resizable: true
      , size: "60%"
      , resizerDblClickToggle: false
      , onresize_end: function() {
       resize_control();
     }
     , onopen_end: function() {
      resize_control();
    }
    , onclose_end: function() {
      resize_control();
    }

  }
  , center: {
    resizable: true
    , size: "40%"
    , resizerDblClickToggle: false
    , onresize_end: function() {
      resize_control();
    }
    , onopen_end: function() {
      resize_control();
    }
    , onclose_end: function() {
      resize_control();
    }
  }

});
}

function loadDatatheoComboLoaiHoadon(loaiHD)
{

  $("#rowed14").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chualapHoaDon&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&id_loaiHD='+loaiHD,datatype:'json'}).trigger('reloadGrid');

}

function moghichu(ID_HoaDonThueDiary,MaLoaiHD,ID_ThuTraNo){
  elem = 1 + Math.floor(Math.random() * 1000000000);
 // dialog_main("Ghi chú của bệnh nhân: "+hoten, 95, 70, elem, 'pages.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan);
  $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=bangkehoadon&header=top&lien=3&type=report&id_form=11&kieuin=1&id_ttno="+ID_ThuTraNo+'&phanloaiHD='+MaLoaiHD+"&ID_HoaDonThueDiary="+ID_HoaDonThueDiary,'HoaDonChinhThuc');
          $('#dialog_print').dialog('close');
}
</script>

