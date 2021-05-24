
<style type="text/css">
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
  .thongtin_tongthe{
    display:inline-block;
    box-shadow:0px 0px 10px #a0a0a0;
    border:1px solid #919191;
    vertical-align:top;
    width:50%;    
  }
  .thongtin_luotkham_scroll{
    overflow-y:scroll;
    width:100%;
    height:45px;
  } 
  .thongtin_luotkham{
    box-shadow:0px 0px 10px #a0a0a0;
    display:inline-block;
    vertical-align:top;
    width:49%;
   border:1px solid #919191;      
  }
   button#last,button#first,button#prev,button#next{
     font-size:7px!important;
     margin-top:-6px;
    /* padding-left:20px;*/
     
   }
   .ui-widget-overlay {
      opacity:0.01;
      filter: alpha(opacity=1); 
      -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
      /*overlay trong suot*/  
      }
      .ui-corner-all{    
     border-radius:3px!important;    
   }
   .fm-button{
     box-shadow:0px 0px 5px #383838;
     border:1px solid #919191;
   } 
   .ui-layout-mask {
    background:#FFF !important;
    opacity:.20 !important;
    filter: alpha(opacity=20) !important;
  }
  .chuandoan{
    box-shadow:0px 0px 10px #a0a0a0;
    display:inline-block;
    vertical-align:top;
    height:193px;
   border:1px solid #919191; 
   margin-top:-195px;
   /*margin-left:546px;margin-top:-167px;    */
  }
  .custom_button{
    top: 44px!important;
    position:relative;
  }
  /*#gbox_rowed4{
    margin-left:0px!important;
  }
   #gbox_rowed6{
    margin-left:0px!important;
  }*/
</style>
</head>

<body>
    <div id="tabs">
      <ul >
        <li style="margin-left:1px"><a href="#tabs-1" id="chuaht">Chưa hoàn tất</a></li>
        <li style="margin-left:-3px"><a href="#tabs-2" id="daht">Đã hoàn tất</a></li>
        
      </ul>
      <div id="tabs-1">
            <div id='xct' style='float:left; margin-top: -20px; margin-left: 20%;'><input type='checkbox'  id='xemchitiet2'   /> Xem chi tiết</div>
            <table id="rowed3" ></table>
            <div id="prowed3"></div> 
            <div id="dialog-form" title="Thêm bản ghi" style="display:none">
             
                  <div style="padding:2px 0px;" class="thongtin_tongthe">
                      <div class="patient_info"></div>        
                  </div>
                  <div class="thongtin_luotkham" style="height:64px!important" id="left_col">   
                    <div class="thongtin_luotkham_scroll" style="display:none"></div>
                    <br><br>
                          <label>Lượt khám:</label>
                          <span class="navigator" >
                              <button id="first">bắt đầu</button>
                              <button id="prev">tới</button>
                              <span class="navigator_title"></span>
                              <button id="next">lui</button>
                              <button id="last">kết thúc</button> 
                          </span>
                  </div>
            <div>
              <table id="rowed4" ></table>
              <div class="chuandoan">
                <div>
                  <label>Chẩn đoán:</label>
                  <span class="custom-combobox">
                        <input id="chuandoan" name="chuandoan"  type="text" style="width:200px;">
                  </span> 
                  <input id="chuandoan1"  name="chuandoan1" type="text" lang='luu' style="display:none" >
                    <label style="margin-left:40px">Thực hiện</label>
                  <span class="custom-combobox">
                        <input id="ytathuchien" name="ytathuchien"  type="text" style="width:70px;">
                      <input id="ytathuchien1"  name="ytathuchien1" type="text" lang='luu' style="display:none" >
                  </span> 
                  

                  <label style="margin-left:40px">Người hoàn tất</label>
                  <span class="custom-combobox">
                        <input id="bsvatlytrilieu" name="bsvatlytrilieu"  type="text" style="width:70px;">
                  </span> 

                  <input id="bsvatlytrilieu1"  name="bsvatlytrilieu1" type="text" lang='luu' style="display:none" >
                  <div>
                    <label style="width:190px;text-align:left;font-size:14px">Triệu chứng:</label>
                    <label style="width:90px;text-align:left;font-size:14px;margin-left:300px">Lưu ý cho BN này(Lưu ý của BS):</label>
                    </div>
                    <div>
                          <textarea id="trieuchung" name="trieuchung" style="height:110px;width:349px;font-size:13px!important" lang='luu'></textarea>  
                          <textarea id="luuy" name="luuy" style="height:110px;width:349px;font-size:13px!important" lang='luu'></textarea> 
                    </div>

                 
            
              <button id="themnhatky" style="">Thêm nhật ký</button>
              <button id="hoantat" style="float:right">Hoàn tất</button>
              <button id="xemin" style="float:right">Xem in</button>
              <button id="luu" style="float:right">Lưu</button>
              <button id="sua" style="float:right">Sửa</button>
            
                </div>
              </div>
          
            </div>
            <table id="rowed6" ></table>
          </div> 
      </div>
      <div id="tabs-2">
                <label>Từ ngày: </label>
                <input type=text id="tungay" name="tungay" style="width: 90px!important;text-align:center" >
                <label>Đến ngày: </label>
                <input type=text id="denngay" name="denngay" style="width: 90px!important;text-align:center" >
                <button id="xem">Xem</button>
                <table id="rowed5" ></table>
                <div id="prowed5"></div> 
      </div>
      
    </div>
</body>
</html>
<script type="text/javascript">
window.ngayT='';
var arrary_enter=[];
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var navigator_count=0,sub_navigator_count=0;
var _id_kham=[];
var _kham;
var ma_benhnhan;
var data_luotkham="";
var _id_khamP;
var _id_trangthai="";
$(document).ready(function() { 
	openform_shortcutkey(); 
  $("#xemin").click(function(e){  
    $("#luu").click();
    
    $.cookie("in_status", "print_preview"); 
    dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=vatlytrilieu&header=top&id_benhnhan="+id_benhnhan+"&id_kham="+id_kham3+"&id_physio="+id_physio+"&type=report&id_form=10",'MedicalReportVN');
    $(".frame_u78787878975f").css("width","793px");
    
  });
  create_combobox('#bsvatlytrilieu', '#bsvatlytrilieu1', ".nhan_vien1", "#nhan_vien1", create_bacsi, 500, 400, 'Người thực hiện', 'data_bacsi',<?=$_SESSION["user"]["id_user"] ?>);
  create_combobox('#ytathuchien', '#ytathuchien1', ".nhan_vien3", "#nhan_vien3", create_nhanvien, 500, 400, 'Người thực hiện', 'data_nhanvien',<?=$_SESSION["user"]["id_user"] ?>);
  create_combobox('#chuandoan', '#chuandoan1', ".nhan_vien2", "#nhan_vien2", create_chuandoan, 500, 400, 'Người thực hiện', 'data_chuandoan',0);
    load_select (); 
    $("#xem").button();
    $("#themnhatky").button();
    $("#hoantat").button();
    $("#xemin").button();
    $("#luu").button();
    $("#sua").button();
   $( "#tabs" ).tabs();
   ;
  window.denngay=gio("current")+" 23:59:59";
  window.tungay=gio("current");
  create_grid();
  create_grid3();
  create_grid4();
  $("#rowed3").setGridWidth($(window).width()-30);
  $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-130);
  /*$("#rowed4").setGridWidth($(window).width()-300);
  $("#rowed4").setGridHeight($(window).height()-510);*/
  $("#rowed5").setGridWidth($(window).width()-30);
  $("#rowed5").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
  $("#rowed6").setGridWidth($(window).width()-60);
  $("#rowed6").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-376);
  $( "#tungay" ).datepicker({dateFormat: 'yy-mm-dd'});
   $( "#denngay" ).datepicker({dateFormat: 'yy-mm-dd'});
   $("#tungay").val(gio("current"));
   $("#denngay").val(gio("current"));
  // $(".chuandoan").css("margin-left",$("#rowed4").width());

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
  $("#xemchitiet2").change(function(event) {
      if($("#xemchitiet2").is(':checked')==false){
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');

      }else{
      
      
        $("#rowed3").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');
      }
    });
})








function create_grid(){ 
   $("#rowed3").jqGrid({
    url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&denngay="+denngay,
    datatype: "json",  
    colNames: ['id','id_bn','Mã BN', 'Tên bệnh nhân','Nội dung thực hiện','Ghi chú','Đã hoàn tất','','',''],
            colModel: [
                {name: 'id_kham', index: 'id_kham', hidden: true,width:50},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', hidden: true,width:50,summaryType: 'sum'},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', hidden: false,width:20,search:true},
                {name: 'tenbn', index: 'tenbn',width:50, hidden: false,search:true},
                {name: 'NoiDung', index: 'NoiDung', hidden: false,width:100,search:false},
                {name: 'KetLuan', index: 'KetLuan', hidden: false,width:90,search:false},
                {name: 'ID_TrangThai', index: 'ID_TrangThai', hidden: false,width:20,align:"center",search:false},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', hidden: true,width:90,summaryType: 'sum'},
                {name: 'ID_Physiotherapy', index: 'ID_Physiotherapy', hidden: true,width:90},
                {name: 'Ngay', index: 'Ngay', hidden: false,width:90,summaryType: 'sum',formatter:tomaughichuchamcong},
            ],
  //

    loadonce: true,
    
    //rownum = false,
    //treeGrid = false,  
    modal:true,   
    pager: '#prowed3',  
    rowNum: 10000,
    gridview: true,
    pginput:false,
    pgbuttons:false,
    rowList:[],
    sortname: 'nickname',
    height:470,
    width: 640,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:true,
   
    sortorder: "asc",
     grouping:true,
                groupingView : {
                        groupField : ['tenbn','Ngay'],
                        groupColumnShow : [true,false],
                        groupCollapse : true,
                        groupText : ['<b>{0}  </b>','<b>{0}</b><input type="checkbox" onclick="hoantat_dieutri({ID_BenhNhan},{ID_LuotKham},{1},{ID_LuotKham})" style="float:right;margin-top: -15px; margin-right: 40px;">']
                       
                },
  //hoverrows:false,
  //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},  
    
    serializeRowData: function (postdata) {       
      //$("#rowed3").trigger("reloadGrid");   
      //return postdata;
    },
    onSelectRow: function(id){    
      },
    
    ondblClickRow: function (id,rowId, rowIndex, columnIndex) {
       
      window._id_luotkham=[];
       $('#dialog-form').dialog('open');
       var rowData = $('#rowed3').getRowData(id);
       window.id_benhnhan=rowData["ID_BenhNhan"];
       window.kham=rowData["id_kham"];
         window.physio=id;
       get_panel();
       create_grid2();
                $("#themnhatky").button({disabled:false});
                  $("#luu").button({disabled:false});
                   $("#hoantat").button({disabled:false});
                    $("#sua").button({disabled:true});
                     $("#xemin").button({disabled:false});
                      $('#trieuchung').attr("disabled",false);
                       $('#luuy').attr("disabled",false);
                       $(".chuandoan_button").button({disabled:false});
                       $(".bsvatlytrilieu_button").button({disabled:false});
    },

    loadComplete: function(data) {  

    }, 
  }); 
 $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
         $("#rowed3").jqGrid('bindKeys', {});

};
 $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(100)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(98)).toFixed(0),
            modal: true,
            open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(98)).toFixed(0) );
                 
                
            },
            buttons: {
            
               }
            });





  function tomaughichuchamcong(cellvalue, options, rowObject) {

    //var ngayT= cellvalue +' '+   rowObject[9];
   // console.log(ngayT);
    //alert (ngayT);
        return  '<span style="color:red">' +cellvalue +'</span>';
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
      thoigian=thoigian.addHours(0).toString("yyyy-MM-dd");
      }
      return thoigian;
} 
function get_panel(){
  $.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
    $( ".patient_info" ).html( data );
    $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css"); 
  });
  $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua3&id_benhnhan="+id_benhnhan+"&id_kham=1", 
    function( data ) {
        data_luotkham=data;

     
      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){
    
          var tam1_cls=val[i]["cell"];
          _id_luotkham.push(tam1_cls[1]);       
          _id_loaikham.push(tam1_cls[0]);
          _id_luotkham_non_unique.push(tam1_cls[5]);
          _id_kham.push(val[i]["id"]);

          
        }
     
        _id_kham=_id_kham.reverse();
        _id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
        _id_loaikham=_id_loaikham.reverse();
        _id_luotkham=$.unique(_id_luotkham);
    
        navigator_load("end","");
        goto_kham(kham); 
      });  
    });

}
$("#xem").click(function(){
  window.tungay=$("#tungay").val()+" 00:00:00";
  window.denngay=$("#denngay").val()+" 23:59:59";
  $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua2&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
  
});
function create_grid2(){ 
   $("#rowed4").jqGrid({
    url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua4&id_benhnhan="+id_benhnhan+"&id_kham=1",
    datatype: "local",  
   colNames: ['ID_LuotKham','ID_Kham','Loại khám', 'Bác sĩ chỉ định','Số ngày','Ngày bắt đầu','','','','','','Số lần/ngày'],
            colModel: [
                {name: 'ID_LuotKham', index: 'ID_LuotKham', hidden: true,width:50},
                {name: 'ID_Kham', index: 'ID_Kham', hidden: true,width:50},
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', hidden: false,width:70,formatter:"select",edittype:"select",stype: 'select',editoptions: { value: loaikham}},
                {name: 'BSChiDinh', index: 'BSChiDinh',width:50, hidden: false,formatter:"select",edittype:"select",stype: 'select',editoptions: { value: bacsi}},
                {name: 'SoNgayThucHien', index: 'SoNgayThucHien', hidden: false,width:40},
                {name: 'NgayGioTao', index: 'NgayGioTao', hidden: false,width:40},
                {name: 'MoTa', index: 'MoTa', hidden: true,width:40},
                {name: 'KetLuan', index: 'KetLuan', hidden: true,width:40}, 
                {name: 'BSChanDoan', index: 'BSChanDoan', hidden: true,width:40},              
                {name: 'ChanDoan', index: 'ChanDoan', hidden: true,width:40},  
                 {name: 'ID_TrangThai', index: 'ID_TrangThai', hidden: true,width:40},
                 {name: 'SoLanThucHienTrongNgay', index: 'SoLanThucHienTrongNgay', hidden: false,width:40},
            ],
  //

    loadonce: true,
    scroll: 1,  
    //rownum = false,
    //treeGrid = false,  
    modal:true,   
    pager: '#prowed4',  
    rowNum: 10000,
    gridview: true,
    pginput:false,
    pgbuttons:false,
    rowList:[],
    sortname: 'nickname',
    height:170,
    width: 518,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:true,
    grouping: false,
    stringResult:true,
    sortorder: "asc",
  //hoverrows:false,
  //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},  
    
    serializeRowData: function (postdata) {       
      //$("#rowed3").trigger("reloadGrid");   
      //return postdata;
    },
    onSelectRow: function(id){    
      },
    
    ondblClickRow: function (rowId, rowIndex, columnIndex) {
      //$(".ui-icon-pencil").trigger('click'); 
    },

    loadComplete: function(data) {  
         var ids = $('#rowed4').jqGrid('getDataIDs');
         window.id_physio=ids[0];
         $("#rowed4").jqGrid('setSelection',physio);   
         
    },    
    
  }); 
 /*$("#rowed4").setGridWidth($(window).width()-770);
  $("#rowed4").setGridHeight($(window).height()-430);*/
};
function create_grid3(){ 
   $("#rowed5").jqGrid({
    url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua2&tungay="+tungay+"&denngay="+denngay,
    datatype: "local",  
   colNames: ['id','id_bn','Mã BN', 'Tên bệnh nhân','Nội dung thực hiện','Ghi chú','Đã hoàn tất','','',''],
            colModel: [
                {name: 'ID_Kham', index: 'ID_Kham', hidden: true,width:50},
                {name: 'ID_BenhNhan', index: 'ID_BenhNhan', hidden: true,width:50},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', hidden: false,width:20,search:true},
                {name: 'tenbn', index: 'tenbn',width:50, hidden: false,search:true},
                {name: 'NoiDungThucHien', index: 'NoiDungThucHien', hidden: false,width:100,search:false},
                {name: 'KetLuan', index: 'KetLuan', hidden: false,width:90,search:false},
                {name: 'DaHoanTat', index: 'DaHoanTat', hidden: false,width:20,align:"center",edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",search:false},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', hidden: false,width:90,summaryType: 'sum',search:false},
                {name: 'ID_Physiotherapy', index: 'ID_Physiotherapy', hidden: true,width:90,search:false},
        {name: 'Ngay', index: 'Ngay', hidden: false,width:90,summaryType: 'sum',formatter:tomaughichuchamcong,search:false},
            ],
  //

    loadonce: true,
    scroll: 1,  
    //rownum = false,
    //treeGrid = false,  
    modal:true,   
    pager: '#prowed5',  
    rowNum: 10000,
    gridview: true,
    pginput:false,
    pgbuttons:false,
    rowList:[],
    sortname: 'nickname',
    height:470,
    width: 640,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:true,
    stringResult:true,
    sortorder: "asc",
     grouping:true,
                groupingView : {
                        groupField : ['tenbn','Ngay'],
                        groupColumnShow : [true,false],
                        groupCollapse : true,
                        groupText : ['<b>{0}  </b>','<b>{0}</b><input type="checkbox" onclick="hoantat_dieutri_2({ID_LuotKham},{1},{ID_LuotKham})" style="float:right;margin-top: -15px; margin-right: 40px;">']
            
                       
                },
  //hoverrows:false,
  //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},  
    
    serializeRowData: function (postdata) {       
      //$("#rowed3").trigger("reloadGrid");   
      //return postdata;
    },
    onSelectRow: function(id){    
      },
    
    ondblClickRow: function (rowId, rowIndex, columnIndex) {
    
      phancach = ",";
      dataToSend2 = '{';
      dataToSend2 +='"ID_TrangThai":"' + "DangCho" + '"';
      dataToSend2 +=phancach + '"ID_Physio":"' + rowId + '"';
      dataToSend2 +='}';
      dataToSend2 = jQuery.parseJSON(dataToSend2);
       // alertObject(dataToSend2);

      $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu2&hienmaloi=3',dataToSend2)
                 .done(function( gridData ) { 
                                                   tooltip_message("Đã chuyển sang chưa hoàn tất");  
                                                  })
                                                  .fail(function() {
                                                  alert( "error" );
                                                  })
      $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua2&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');                                             
    },

    loadComplete: function(data) {  

    },    
    
  }); 
 $("#rowed5").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
         $("#rowed5").jqGrid('bindKeys', {});
};
function create_grid4(){ 
  var searhicon = '<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-right: .3em;"></span></span>';
   $("#rowed6").jqGrid({
    url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua2&tungay="+tungay+"&denngay="+denngay,
    datatype: "local",  
   colNames: ['','','','Giờ','Ngày', 'Người thực hiện','Diễn biến bệnh'],
            colModel: [
                {name: 'ID_Physiotherapydiary', index: 'ID_Physiotherapydiary', hidden: true,width:20},
                {name: 'ID_Kham', index: 'ID_Kham', hidden: true,width:20},
                {name: 'xoa', index: 'xoa',align:"center", hidden: false,width:3,formatter: function (cellValue, options, rowObject) {
                    
                            return searhicon
                        },},
                {name: 'gio', index: 'gio', hidden: false,width:20,editable: true },
                {name: 'ngay', index: 'ngay', hidden: false,width:20,editable: true, editoptions:{size:20, 
                  dataInit:function(el){ 
                        $(el).datepicker({dateFormat:'yy-mm-dd'}); 
                  }, 
                  defaultValue: function(){ 
                    var currentTime = new Date(); 
                    var month = parseInt(currentTime.getMonth() + 1); 
                    month = month <= 9 ? "0"+month : month; 
                    var day = currentTime.getDate(); 
                    day = day <= 9 ? "0"+day : day; 
                    var year = currentTime.getFullYear(); 
                    return year+"-"+month + "-"+day; 
                  } 
                } },
                {name: 'nguoithuchien', index: 'nguoithuchien',width:40, hidden: false,formatter:"select",edittype:"select",stype: 'select',editoptions: { value: bacsi}},
                {name: 'dienbienbenh', index: 'dienbienbenh', hidden: false,width:100, editable: true},
            ],
  //

    loadonce: true,
    scroll: 1,  
    //rownum = false,
    //treeGrid = false,  
    modal:true,   
    pager: '#prowed6',  
    rowNum: 10000,
    gridview: true,
    pginput:false,
    pgbuttons:false,
    rowList:[],
    sortname: 'nickname',
    height:470,
    width: 640,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:true,
    grouping: false,
    stringResult:true,
    sortorder: "asc",
  //hoverrows:false,
  //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},  
    onCellSelect: function (rowid,iCol,cellcontent,e) {
          if(iCol==2){
                    $('#rowed6').jqGrid('delRowData',rowid);
          }
                      
        },  
    serializeRowData: function (postdata) {       
      //$("#rowed3").trigger("reloadGrid");   
      //return postdata;
    },
    onSelectRow: function(id){   
    var ids = $("#rowed6").getDataIDs();  
     for (var i=0;i<=ids.length-1;i++){
       $("#rowed6").jqGrid('saveRow', ids[i]); 
      // alert(ids[i]);
      
    }
    var rowData = jQuery(this).getRowData(id); 
        var temp= rowData['ngay'];
       
    //============
    var currentTime = new Date(); 
    var month = parseInt(currentTime.getMonth() + 1); 
    month = month <= 9 ? "0"+month : month; 
    var day = currentTime.getDate(); 
    day = day <= 9 ? "0"+day : day; 
    var year = currentTime.getFullYear(); 
    var bien= year+"-"+month + "-"+day; 
     //alert(bien);
    //==============
    if(bien===temp){
          $("#rowed6").jqGrid('editRow',id);
    }
    else{
      //alert();
       tooltip_message("Đã qua ngày, không được chỉnh sửa");    
    }
       },
    
    ondblClickRow: function (rowId, rowIndex, columnIndex) {
      //alert(rowId);
      $("#rowed6").jqGrid('saveRow', rowId);
    },

    loadComplete: function(data) {  
     //$( "#tungay" ).datepicker({dateFormat: 'yy-mm-dd'});
    },    
    
  }); 
$("#rowed6").setGridWidth($(window).width()-170);
  $("#rowed6").setGridHeight($(window).height()-830);
  /*$("#rowed6").jqGrid('bindKeys', {"onEnter":function( rowid ) { $("#rowed6").jqGrid('saveRow', rowid);
    } } );  */
};
$("#themnhatky").click(function(){
      var d1 = new Date();
      var curr_hour1 = d1.getHours();
      var curr_minute1 = (d1.getMinutes()<10?'0':'') + d1.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
      var curr_time1 = curr_hour1 + ":" + curr_minute1+ " ";
      var dd1 = d1.getDate();
      var mm1 = d1.getMonth()+1;//January is 0!`
      var yyyy1 = d1.getFullYear();
      var dmy=yyyy1+"-"+mm1+"-"+dd1;
  
  jQuery("#rowed6").jqGrid('addRow');
  var ids = jQuery("#rowed6").jqGrid('getDataIDs');
   
     // be = "<input style='height:22px;width:20px;' type='button' value='X' onclick=\"$('#rowed6').jqGrid('delRowData',"+cl+");\"  />";
      be='<span class="ui-state-error ui-state-hover" onclick="javascript:alert(1)" style="border:0"><span class="ui-icon ui-icon-circle-close" style="float: left; margin-right: .3em;"></span></span>';
      jQuery("#rowed6").jqGrid('setRowData',ids[0],{ID_Kham:id_kham3,xoa:be,gio:curr_time1,ngay:dmy,nguoithuchien:"<?=$_SESSION["user"]["id_user"] ?>"});
      //alert(ids);
   
 
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
      if(_id_luotkham[navigator_count]==tam1_cls[1]){
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
  $("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);  

}
function loaikham_click(){
  $.each( data_luotkham, function( key, val ) {
    $("#left_col div div").click(function(e) {
        for(i=0;i<val.length;i++){
            tam=val[i]["id"]; 
           
           var tam1_cls=val[i]["cell"]; 
          tam1=$(this).attr("id");

          if(tam==tam1){
            window.id_trangthai=val[i]["cell"][10];
            $("#trieuchung").val(val[i]["cell"][6]);
             $("#luuy").val(val[i]["cell"][7]);
             window.id_kham3=val[i]["cell"][1];


            _id_trangthai=val[i]["cell"][10];

            if(val[i]["cell"][10]=="Xong"){
                $("#hoantat").button({disabled:true});
              $("#sua").button({disabled:false});



              $('.ytathuchien_button').button( {disabled:true});
                $('.bsvatlytrilieu_button').button( {disabled:true});


            }else
            {
                 $("#hoantat").button({disabled:false});
                   $("#sua").button({disabled:true});
               $('.ytathuchien_button').button( {disabled:false});
                $('.bsvatlytrilieu').button( {disabled:false});

            }

          
            if(val[i]["cell"][8]!=""){
              setval('#bsvatlytrilieu', '#bsvatlytrilieu1', "#nhan_vien1",val[i]["cell"][8]);
          
              $("#bsvatlytrilieu").prop('disabled', true);
            }
            if(val[i]["cell"][11]!=""){
              setval('#ytathuchien', '#ytathuchien1', "#nhan_vien3",val[i]["cell"][11]);

              $("#ytathuchien").prop('disabled', true);

            }
             if( $("#ytathuchien").val()==""){
          
            setval('#ytathuchien','#ytathuchien1','#nhan_vien3',<?=$_SESSION['user']['id_user']?>);
            
            $("#ytathuchien").prop('disabled', false);
            }
          
            
             $("#chuandoan").val(val[i]["cell"][9]);
             
             $(".chuandoan").css("margin-left",$("#rowed4").width()+25+"px");
      
             $(".chuandoan").css("width",$("#dialog-form").width()-$("#rowed4").width()-32+"px");
             _id_khamP=tam;

             $('#rowed4').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua4&id_benhnhan='+id_benhnhan+"&id_kham="+tam,datatype:'json'}) .trigger('reloadGrid');

            $('#rowed6').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhatky&id_kham='+id_kham3,datatype:'json'}) .trigger('reloadGrid');
            if( $("#bsvatlytrilieu").val()==""){
           
            setval('#bsvatlytrilieu','#bsvatlytrilieu1','#nhan_vien1',<?=$_SESSION['user']['id_user']?>);
            
            $("#bsvatlytrilieu").prop('disabled', false);
            }
            var tamthoilathe= bacsi.split(";");
            //alert(tam);
            for (i = 0; i <tamthoilathe.length; i++) 
            {
              check=tamthoilathe[i].split(":");
             
              if($("#bsvatlytrilieu").val()==check[0]){ //alert(check[0]);
              
                $("#bsvatlytrilieu").val(check[1]);}

              if($("#ytathuchien").val()==check[0]){ //alert(check[0]);
              
                $("#ytathuchien").val(check[1]);}
            }
            var tamthoilathe2= chuan_doan.split(";");

            for (i = 0; i <tamthoilathe2.length; i++) 
            {

              check2=tamthoilathe2[i].split(":");
            
              if($("#chuandoan").val()==check2[0]){ //alert(check[0]);
           
                $("#chuandoan").val(check2[1]);}
            }
          } 
        }
        

    });
  });
}
function load_select () {
  window.loaikham = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText; 
  window.bacsi = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText; 
  window.chuan_doan = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_Template&id=ID_Template&name=TenTemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText; 
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

            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
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
 function create_chuandoan(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên thông thường', 'Tên nhóm bệnh',"Phổ biến"],
            colModel: [
                {name: 'TenTemplate', index: 'TenTemplate',width:"100", hidden: false},
                {name: 'ID_ParentTemplate', index: 'ID_ParentTemplate',align:'center',width:"50", hidden: false},
                {name: 'IsPopular', index: 'IsPopular',align:'center',edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true},width:"30", hidden: false},
                
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

            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
    $("#luu").click(function(){
    var ids = $("#rowed6").getDataIDs();  
    for (var i=0;i<=ids.length-1;i++){
    $("#rowed6").jqGrid('saveRow', ids[i]); 
    
    }
  dataToSend = '{';
  phancach = ",";
    dataToSend +='"MoTa":' + JSON.stringify($("#trieuchung").val()) + '';
    dataToSend += phancach + '"KetLuan":' + JSON.stringify($("#luuy").val()) + '';
    dataToSend += phancach + '"ChanDoan":' + JSON.stringify($("#chuandoan").val()) + '';
    dataToSend += phancach + '"BSChanDoan":"' + $("#bsvatlytrilieu1").val() + '"';
    dataToSend += phancach + '"NgayGioChanDoan":"' + gio("current") + '"';
    dataToSend += phancach + '"ID_Kham":"' + id_kham3 + '"';
    dataToSend += phancach + '"ID_TrangThai":"' + id_trangthai + '"';
    dataToSend += phancach + '"NguoiThucHien":"' + $("#ytathuchien1").val() + '"';
    var myData = $('#rowed6').jqGrid('getRowData');
    myData= JSON.stringify(myData);
    dataToSend +=',"cc":'+myData+'}'; 
    dataToSend = jQuery.parseJSON(dataToSend);
   
   
   $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu1&hienmaloi=3',dataToSend)
                 .done(function( gridData ) { 
         tooltip_message("Đã lưu");  
        
            $('#rowed4').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua4&id_benhnhan='+id_benhnhan+"&id_kham="+_id_khamP,datatype:'json'}) .trigger('reloadGrid');




_id_luotkham=[];
 _id_loaikham=[];
 _id_luotkham_non_unique=[];
 navigator_count=0,sub_navigator_count=0;
 _id_kham=[];
 _kham;
 data_luotkham="";

$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua3&id_benhnhan="+id_benhnhan+"&id_kham=1", 
    function( data ) {
        data_luotkham=data;

     
      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){
    
          var tam1_cls=val[i]["cell"];
          _id_luotkham.push(tam1_cls[1]);       
          _id_loaikham.push(tam1_cls[0]);
          _id_luotkham_non_unique.push(tam1_cls[5]);
          _id_kham.push(val[i]["id"]);

          
        }
     
        _id_kham=_id_kham.reverse();
        _id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
        _id_loaikham=_id_loaikham.reverse();
        _id_luotkham=$.unique(_id_luotkham);
    
        navigator_load("end","");
        goto_kham(kham); 
      });  
    });



  // $("#luu").button({disabled:true});
//   $("#sua").button({disabled:false});








        })
        .fail(function() {
        alert( "error" );
        })
  
 
});
$('#dialog-form').bind('dialogclose', function(event) {
    $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&denngay="+denngay}).trigger('reloadGrid');
   });
$("#hoantat").click(function(){
  window.id_trangthai2="Xong";
  dataToSend = '{';
  phancach = ",";
    dataToSend +='"MoTa":' + JSON.stringify($("#trieuchung").val()) + '';
    dataToSend += phancach + '"KetLuan":' + JSON.stringify($("#luuy").val()) + '';
    dataToSend += phancach + '"ChanDoan":' + JSON.stringify($("#chuandoan1").val()) + '';
    dataToSend += phancach + '"BSChanDoan":"' + $("#bsvatlytrilieu1").val() + '"';
    dataToSend += phancach + '"NguoiThucHien":"' + $("#ytathuchien1").val() + '"';
    dataToSend += phancach + '"NgayGioChanDoan":"' + gio("current") + '"';
    dataToSend += phancach + '"ID_Kham":"' + id_kham3 + '"';
    dataToSend += phancach + '"ID_TrangThai":"' + id_trangthai2 + '"';  
    dataToSend += phancach + '"ID_Physio":"' + id_physio + '"';
    var myData = $('#rowed6').jqGrid('getRowData');
    myData= JSON.stringify(myData);
    dataToSend +=',"cc":'+myData+'}'; 
    dataToSend = jQuery.parseJSON(dataToSend);
   // alertObject(dataToSend);
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu1&hienmaloi=3',dataToSend)
                 .done(function( gridData ) { 
                                                   tooltip_message("Đã lưu");  
                                                  })
                                                  .fail(function() {
                                                  alert( "error" );
                                                  })

                $("#themnhatky").button({disabled:true});
                  $("#luu").button({disabled:true});
                   $("#hoantat").button({disabled:true});
                    $("#sua").button({disabled:false});
                     $("#xemin").button({disabled:false});
                      $('#trieuchung').attr("disabled",true);
                       $('#luuy').attr("disabled",true);
                       $('#chuandoan').attr("disabled",true);
                       $('#bsvatlytrilieu').attr("disabled",true);
                          $('#ytathuchien').attr("disabled",true);
                       $(".chuandoan_button").button({disabled:true});
                       $(".bsvatlytrilieu_button").button({disabled:true});




 _id_luotkham=[];
 _id_loaikham=[];
 _id_luotkham_non_unique=[];
 navigator_count=0,sub_navigator_count=0;
 _id_kham=[];
 _kham;
 data_luotkham="";

$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua3&id_benhnhan="+id_benhnhan+"&id_kham=1", 
    function( data ) {
        data_luotkham=data;

     
      var tam1_cls="";
      $.each( data, function( key, val ) {     
        for(i=0;i<val.length;i++){
    
          var tam1_cls=val[i]["cell"];
          _id_luotkham.push(tam1_cls[1]);       
          _id_loaikham.push(tam1_cls[0]);
          _id_luotkham_non_unique.push(tam1_cls[5]);
          _id_kham.push(val[i]["id"]);

          
        }
     
        _id_kham=_id_kham.reverse();
        _id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
        _id_loaikham=_id_loaikham.reverse();
        _id_luotkham=$.unique(_id_luotkham);
    
        navigator_load("end","");
        goto_kham(kham); 
      });  
    });




















})
$("#sua").click(function(){
                $("#themnhatky").button({disabled:false});
                  $("#luu").button({disabled:false});
                   $("#hoantat").button({disabled:false});
                    $("#sua").button({disabled:true});
                     $("#xemin").button({disabled:true});
                      $('#trieuchung').attr("disabled",false);
                       $('#luuy').attr("disabled",false);
                       $('#chuandoan').attr("disabled",false);
                       $('#bsvatlytrilieu').attr("disabled",false);
                        $('#ytathuchien').attr("disabled",false);
                       $(".chuandoan_button").button({disabled:false});
                       if(_id_trangthai=='Xong')
                       {
                      $(".bsvatlytrilieu_button").button({disabled:true});
                      $(".ytathuchien_button").button({disabled:true});
                       }
                       else
                       {
                         $(".bsvatlytrilieu_button").button({disabled:false});
                          $(".ytathuchien_button").button({disabled:false});
                       }
                      

})
$("#chuaht").click(function(){
     $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua"}).trigger('reloadGrid');
})
$("#daht").click(function(){
      $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua2&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
})
function goto_kham(id_kham){

    for(var i=0; i<data_luotkham['rows'].length;i++){
      
      if(id_kham==data_luotkham['rows'][i]['id']){
       
        id_luotkham_hentai=data_luotkham['rows'][i]['cell'][1]
        // alert(data_luotkham['rows'][i]['cell'][0]);
      }
    }

    _id_luotkham
    y=0;
    //alert(id_luotkham_hentai);
    for(var i=_id_luotkham.length-1;i>=0;i--){
      if(_id_luotkham[i]==id_luotkham_hentai){

        break;
      }
      y--;
    }
    
     navigator_load(y,"");  
     $('#'+id_kham).click();

  
  
}
function hoantat_dieutri(total_idbn,ngaygiotao,soluong,luotkham){
  var id_benhnhan=parseInt(total_idbn/soluong);
   var idluotkham=(parseInt(luotkham/soluong));
  var zing="";
  var allRowsInGrid = $('#rowed3').jqGrid('getRowData');
   dataToSend = '{"cc":[';
    phancach1 = "";
  //alert(idluotkham);
         for (i = 0; i < allRowsInGrid.length; i++) {
            pid2 = allRowsInGrid[i].ID_LuotKham;
            pid3 = allRowsInGrid[i].ID_BenhNhan;
            window.id_kham_update= allRowsInGrid[i].id_kham;
            
            if( pid2==idluotkham && id_benhnhan==pid3){
                  dataToSend += phancach1 + '{"ID_Physiotherapy":"' + allRowsInGrid[i].ID_Physiotherapy+ '"}';  
                  phancach1 = ",";
                  }
          }
          dataToSend += ']}'; 
          //alert(dataToSend);
          dataToSend = jQuery.parseJSON(dataToSend);

           $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=luu&hienmaloi=3&id_kham_update='+id_kham_update,dataToSend)
                              .done(function( gridData ) {  
                                                   tooltip_message("Đã lưu");  
                                                    $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&denngay="+denngay}).trigger('reloadGrid');
                                                   })


}
function hoantat_dieutri_2(id_luotkham_tong,soluong,luotkham){

        //var id_luotkham=parseInt(id_luotkham_tong/soluong);
    var id_luotkham=parseInt(luotkham/soluong);
         var allRowsInGrid = $('#rowed5').jqGrid('getRowData'); 
         //alert(id_luotkham);
          for (i = 0; i < allRowsInGrid.length; i++) {
                  luotkham = allRowsInGrid[i].ID_LuotKham;
                  
                  if( luotkham==id_luotkham_tong ){
                       $("#"+allRowsInGrid[i].ID_Physiotherapy).dblclick();
                       //alert();
                        }
          }

}
</script>
