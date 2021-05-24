<style type="text/css">

.ui-jqgrid tr.myfootrow td {
    font-weight: bold;
    overflow: hidden;
    white-space:nowrap;
    height: 21px;
    padding: 0 2px 0 2px;
    border-top-width: 1px;
    border-top-color: inherit;
    border-top-style: solid;
} /*footer row modding*/
body{
/*overflow:auto!important;*/
height:115%;
width:1300px;
}
.ui-jqgrid tr.jqgrow td {
     
        padding-top: 0px!important;
        padding-bottom: 0px !important;
        font-size: 10px!important;
    }
#tabs .ui-tabs-panel {  
height: 85%;
}
#tabs .ui-tabs-nav li {
   
    font-style: bold !important;
margin-top: 0.1em;
}
.panel_form{
margin-left:10px;

}
.diengiai_sinhton, .diengiai_thetrang{
position:absolute;
width:500px !important;
display:inline-block!important;
left: 88px !important;
font-style: bold !important;
}
.colored{
background-color:#D5EAFF;
color:red;
padding-bottom: 0px !important;
  padding-top: 0px !important;
}
.colored2{
background-color:#FFFFC4;
color:black;
padding-bottom: 0px !important;
  padding-top: 0px !important;
}
.colored3{
background-color:#FAD8E2;
color:#2A120A;
padding-bottom: 0px !important;
  padding-top: 0px !important;
}

.ghichuline
{
font-size: 63px !important;
/*--font-weight: 900 !important;*/
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





</style>



<?php
$tungay='';
$denngay='';
if((int)date('d')>10){
  $tungay=date("01/m/Y");
  $denngay=date("d/m/Y");  
}else{
  if(date('m')==1){
    $month=12;
    $year=date('Y')-1;
  }else{
    $month=date('m')-1;
    $year=date('Y');
  }
  $tungay=date("01/m/Y", strtotime($year."-".$month));
  $denngay=date("t/m/Y", strtotime($year."-".$month));
}
?>
<body>
<fieldset class="ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" style="width:97.5%;;margin-top:0px">
    <div style="display:inline-block">

         <label style="margin-left:30px;font-weight:bold"> Chọn tháng, năm:</label> <select id="thang"  style="width:80px"><?php
$m=date('m');
if(date('d')<28){
if($m==1){
$m=12;
}else{
$m=$m-1;
}
}else{

}

for($i=1;$i<=12;$i++){
?>
<option value='<?=$i?>' <?php if($m==$i){ echo "selected"; }?> ><?=$i?></option>
<?php }?></select>
    / <select id="nam"  style="width:80px;"><?php
$m=date('m');
$y=date('Y');
if(date('d')<28){
if($m==1){
$m=12;
$y=$y-1;
}else{
$m=$m-1;
$y=$y;
}
}else{
$m=$m;
$y=$y;
}
$nam=2013;
for($i=0;$i<$y-2013;$i++){
$nam+=1;
?>
<option value='<?=$nam?>' <?php if($y==$nam){ echo "selected"; }?> ><?=$nam?></option>
<?php }?></select>
         
          <label style="margin-left:10px;font-weight:bold">hoặc từ </label>
          <input type="text" id="tungay" value="<?php echo $tungay; ?>" style="text-align:center;width:60px"/>
          <label  style="font-weight:bold"> đến  </label>
          <input type="text" id="denngay" value="<?php echo $denngay; ?>" style="text-align:center;width:60px"/>



        </div>
        <div style="margin-left:10px;display:inline-block" id="xemtheo_control">
        <label style="font-weight:bold"> Xem theo </label>
            <select id="xemtheo_option">
                  <option value="ngay" selected="selected" text="Ngày">Ngày</option>
                  <option value="thang" text="Tháng">Tháng</option>
                  <option value="nam" text="Tháng">Năm</option>
            </select>
        </div>  
        <div style="display:inline-block">
        <!-- <button style="margin-left:10px" id='xem'>Xem</button> -->
        <button style="margin-left:10px" id='BCCMA1'>BCCM Mẫu A1</button>
            <button style="margin-left:5px;display:none" id='xuat_excel'>Excel</button>
        </div>
   <!--     <div style="display:inline-block"><input type="radio" id="thuocnhom" name="thuocnhom" value="0"/><label>Thuộc nhóm</label></div> -->
       <span class="custom-combobox">
          <input id='com_thuocnhom' class='com_thuocnhom' placeholder="--Chọn nhóm--" >
          <input id='com_thuocnhom1' class='com_thuocnhom1'  style="width:200px;display:none">
       </span>

<!-- 

        <span class="custom-combobox" >
          <input id='com_thuochmk' class='com_thuochmk'  style="width:200px"></span>
          <input id='com_thuochmk1' class='com_thuochmk1'  style="width:200px;display:none">
        </span> -->

  </fieldset>

</body>
</html>
<script type="text/javascript">
var tab_selected=1;//dùng để điều khiển nút "Xem" khi chọn các tab khác nhau
var random_data;

$(document).ready(function() {

  create_combobox('#com_thuocnhom','#com_thuocnhom1',".data_phanloaikham","#data_phanloaikham",create_nhomcls,500,300,'Nhóm','data_nhomxephang',window.default_nhomXH);

  create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_pbChuyenMon,500,240,'Danh mục ','data_pbchuyenmon',window.default_id_pb_ChuyenMon);

$("#xem").button();
$("#xuat_excel").button();
openform_shortcutkey();
create_grid();
jQuery(window).resize(function() {
$("#rowed3").setGridWidth($(window).width()-55);
$("#rowed3").setGridHeight($(window).height()-315);
});
jQuery(window).resize(function() {
$("#rowed4").setGridWidth($(window).width()-55);
$("#rowed4").setGridHeight($(window).height()-275);
});
$.dateEntry.setDefaults({spinnerImage: ''});
$("#tungay,#denngay").dateEntry({dateFormat:$.cookie("ngayDateEntry")});

$("#tungay,#denngay").datepicker({
           showWeek: true, firstDay: 1,
defaultDate: "+1w",
changeMonth: true,
changeYear: true,
numberOfMonths: 1,
dateFormat:  $.cookie("ngayJqueryUi"),
            onClose: function(selectedDate) {
               
            },
            onSelect: function(dat, inst) {
                 
            }
        });

$("#tungay").val(FirstDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));
$("#denngay").val(LastDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));
window.opentab2=0;
window.opentab3=0;



//select tu ngay den ngay theo thang
$("#nam,#thang").change(function(e) {
$("#tungay").val(FirstDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));
$("#denngay").val(LastDayOfMonth(parseInt($("#nam").val()),parseInt($("#thang").val())));

    });

$( "#tabs" ).tabs({
/*heightStyle:"fill"  */
});

$( "#tab1_click").click(function(){
 $( "#xemtheo_control" ).show();
 tab_selected=1;
});
$( "#tab2_click" ).click(function(){
 $( "#xemtheo_control" ).show();
 tab_selected=2;
});
$( "#tab3_click").click(function(){
 $( "#xemtheo_control" ).show();
 tab_selected=3;
});
$("#xuat_excel").click(function(){
  alert()
if(tab_selected==1)
{
window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_baocaodoanhthu&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
}
if(tab_selected==2)
{
window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_baocaoThuChi_CongNo_KeToan&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
}

})

$("#BCCMA1").click(function(){

      {
      window.open("pages.php?module=report&view=baocao_thongke&action=excel_bccmA1&type=excel&id_nhomcls="+_idNhomCLS_dangchon+"&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
      }

})





$("#xuat_excel_gop").click(function(){

if(tab_selected==2)
{
window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_baocaoThuChi_CongNo_KeToan_Gop&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
}

})
$("#xuat_excel_TM").click(function(){

if(tab_selected==1)
{
window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_baocaodoanhthu_TM&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
}

})
var click_t3=0;
$( "#xem").click(function(){



var start = $('#tungay').datepicker({ dateFormat: 'dd-mm-yy' });
var end = $('#denngay').datepicker({ dateFormat: 'dd-mm-yy' });

var start = $('#tungay').datepicker('getDate');
var end   = $('#denngay').datepicker('getDate');
var days   = (end - start)/1000/60/60/24;
   
     if(days<0){
     
      alert("PHẢI CHỌN NGÀY SAU LỚN HƠN NGÀY TRƯỚC");
      return;
        }
    if(days>90)
    {

    alert("Vì đang chọn lớn hơn 90 ngày nên sẽ tự động chuyển sang kiểu xem tháng");

    var thang = 'Tháng';
$("#xemtheo_option option").filter(function() {
   
   return $(this).text() == thang;
}).attr('selected', true);
//alert($("#xemtheo_option option:selected").val());
    }

switch(tab_selected)
{
case 1:
loadDataForGridByOption($("#xemtheo_option option:selected").val());
break;
case 2:
loadDataForGridByOption2();
break;
case 3:
loadtab3();
break;

}
})


})
/*function create_nhomcls(elem,datalocal){ 
  datalocal=jQuery.parseJSON(datalocal);  
  $(elem).jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,  
    colNames:['Tên nhóm', 'Mô tả'],
    colModel:[      
    {name:'ten_nhom',index:'ten_nhom',hidden :false},
    {name:'mo_ta',index:'mo_ta',hidden :false},

    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,     
    modal:true,  
    rowNum: 1000000,
    rowList:[],   
    sortname: 'ten_nhom',
    height:200,
    width: 470,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:true,
    cmTemplate: {sortable:false},
    sortorder: "desc",
    serializeRowData: function (postdata) {   
    },
    onSelectRow: function(id){  
      if($(elem).data('clicked')){
      var selr = jQuery(elem).jqGrid('getGridParam','selrow');
      window.duongdandata='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_theonhom&id='+selr;
  
      $.ajax({
        type: 'POST',
        async : true,
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_xephang_theonhom&id='+selr,
        success: function(output, status, xhr) {    
          output=output.split(';;');
          $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[0]  }).trigger('reloadGrid', [{ page: 1}]);
          $('#rowed4').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[1]  }).trigger('reloadGrid', [{ page: 1}]);
          $('#rowed6').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[2]  }).trigger('reloadGrid', [{ page: 1}]);
          $('#rowed7').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:output[3]  }).trigger('reloadGrid', [{ page: 1}]);
        },
       
      });
      document.getElementById("thuocnhom").checked=true;
      document.getElementById("thuochangmuckham").checked=false;
      }
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {

    },
    loadComplete: function(data) {  
      grid_filter_enter(elem) ;
      //count = jQuery(elem).jqGrid('getGridParam', 'records'); 
    //  if(count>0){
      //  ids = ($(elem).getDataIDs()[0]);        
      //  $(elem).jqGrid("setSelection",ids, true);
      //}
    },    
    
  }); 

$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );

}  */
 function loadtab3(){

    $("#tab3").attr("src", "pages.php?module=<?=$modules?>&view=<?=$view?>&id_form=<?=$_GET["id_form"]?>&id_loai=undefined&action=index_bieudodoanhthuTongHop&type=test&kieuxem="+$("#xemtheo_option option:selected").val()+"&tungay="+ $( '#tungay' ).val()+"&denngay="+$( '#denngay' ).val());
   
 }

function loadDataForGridByOption(kieuxem)
{

$("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_doanhthutheongay&kieuxem='+kieuxem+'&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');

}
function loadDataForGridByOption2()
{

$("#rowed4").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ThuChi_No_KeToan&tungay='+ $( '#tungay' ).val()+'&denngay='+$( '#denngay' ).val(),datatype:'json'}).trigger('reloadGrid');

}


function FirstDayOfMonth(Year, Month) {
//var d=new Date(Year, Month, 1);
var firstDay = new Date(Year, Month-1, 1);
    return firstDay.toLocaleFormat('%d/%m/%Y');
}
function LastDayOfMonth(Year, Month) {
var d=new Date( (new Date(Year, Month,1))-1 );
    return d.toLocaleFormat('%d/%m/%Y');
}


function loadtab2(){
if(window.opentab2==0){
      create_grid2();
  window.opentab2=1;
}
}



function create_grid(){
$("#rowed3").jqGrid({
url:'',
datatype: "json",
colNames:['ID',"Thời gian",'Phí thực hiện \n(1)',"Phí chỉ định\n(2)",'Phí hoàn tất\n(3)','Chi phí khác\n(4)','Giá vốn thuốc\n(5)','Phí thuê ngoài\n(6)','Tổng chi phí\n(7)','Miễn giảm\n(9)',
'Hủy chỉ định\n(10)','Bù BHYT trái tuyến\n(11)','Thuốc trả lại\n(12)','Tổng giảm doanh thu\n(13)','Khám và điều trị\n(14)',
'Điều trị+PTTT\n(15)','Thuốc\n(16)','Giường\n(17)',
'Ngoại trú\n(18)','Nội trú\n(19)','Tổng (18)+(19)\n----\n(20)','Lợi nhuận ròng\n(21)',
'Nợ mới từ bệnh nhân\n(22)','Nợ từ BHYT\n(23)','Nợ từ BHCC\n(24)','Thực thu tại thu ngân\n(25)','VP\n(26)','BHYT\n(27)','VP\n(28)','BHYT\n(29)','(26)+(27)\n+(28)+(29)'],
colModel:[
{name:'id',index:'id',search:false, width:"1%", editable:false,align:'right',hidden:true},
{name:'xemtheo',index:'xemtheo', width:"7%", editable:false,align:'center',hidden:false},
{name:'phithuchien',index:'phithuchien', width:"3%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'phichidinh',index:'phichidinh', width:"3%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'phihoantat',index:'phihoantat', width:"3%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'chiphikhac',index:'chiphikhac', width:"3%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'giavonthuoc',index:'giavonthuoc', width:"3%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'phithuengoai',index:'phithuengoai', width:"3%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'tongchiphi',classes:'colored',index:'tongchiphi', width:"4%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
/*{name:'quota',index:'quota', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},*/
{name:'coupon',index:'coupon', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'huychidinh',index:'huychidinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'HoTroTuBenhVien',index:'HoTroTuBenhVien', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'thuoctralai',index:'thuoctralai', width:"5%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'tonggiamdoanhthu',classes:'colored',index:'tonggiamdoanhthu', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'kham',index:'kham', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'dieutri',index:'dieutri', width:"0%", editable:false,align:'right',hidden:true,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'thuoc',index:'thuoc', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'tiengiuong',index:'tiengiuong', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TongPTraNgoaiTru',classes:'colored',index:'TongPTraNgoaiTru', width:"7%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TongPTraNoiTru',classes:'colored',index:'TongPTraNoiTru', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'tongdoanhthu',classes:'colored',index:'tongdoanhthu', width:"7%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'loinhuanrong',classes:'colored3',index:'loinhuanrong', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'nomoi',classes:'colored3',index:'nomoi', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TongTienBHYTChiTra',classes:'colored3',index:'TongTienBHYTChiTra', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TongTienBHCCTra',classes:'colored3',index:'TongTienBHCCTra', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'thucthu',classes:'colored',index:'thucthu', width:"7%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'SL_NgoaiTru_VP',classes:'colored2',index:'SL_NgoaiTru_VP', width:"4%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'SLNgoaiTru_BHYT',classes:'colored2',index:'SLNgoaiTru_BHYT', width:"4%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'SL_NoiTru_VP',classes:'colored2',index:'SL_NoiTru_VP', width:"3%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'SLNoiTru_BHYT',classes:'colored2',index:'SLNoiTru_BHYT', width:"3%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'SLK_ALL',classes:'colored2',index:'SLK_ALL', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},

],


loadonce: true,
scroll: false,
modal:true,
rowNum: 10000000,
gridview: true,
pginput:false,
pgbuttons:false,
rowList:[],
viewrecords: true,
ignoreCase:true,
shrinkToFit:true,
grouping: false,
stringResult:true,
footerrow: true,

serializeRowData: function (postdata) {

},
onSelectRow: function(id){  
},
ondblClickRow: function (rowId, rowIndex, columnIndex) {
 var rowData = jQuery('#rowed3').getRowData(rowId);

 var ngay=rowData[ "xemtheo"];
 var openTab=0;
 if (columnIndex==22){
openTab=4;
 }
if($("#xemtheo_option option:selected").val()=='ngay')
{
parent.postMessage('open_idbenhnhan;thungan;'+$("#xemtheo_option option:selected").val()+';'+ngay+';'+openTab+';;;','*');
}
else if($("#xemtheo_option option:selected").val()=='thang')
{
parent.postMessage('open_idbenhnhan;thungan;'+$("#xemtheo_option option:selected").val()+';'+$('#tungay').val()+';'+openTab+';'+$( '#denngay' ).val()+';;','*');
}

  },
loadComplete: function(data) {
var $this = $(this),
       
        $footerRow = $(this.grid.sDiv).find("tr.footrow"),
        localData = $this.jqGrid("getGridParam", "data"),
        totalRows = localData.length,
        totalSum = 0,
        $newFooterRow,
        i;
         $newFooterRow = $(this.grid.sDiv).find("tr.myfootrow");
    if ($newFooterRow.length === 0) {
        $newFooterRow = $footerRow.clone();
        $newFooterRow.removeClass("footrow")
            .addClass("myfootrow ui-widget-content");
        $newFooterRow.children("td").each(function () {
            this.style.width = ""; // remove width from inline CSS
        });
        $newFooterRow.insertAfter($footerRow);
    }

    $newFooterRow.find(">td[aria-describedby=" + this.id + "_xemtheo]").text("TB");
$newFooterRow.find(">td[aria-describedby=" + this.id + "_coupon]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'coupon', false, 'sum')/totalRows)));
$newFooterRow.find(">td[aria-describedby=" + this.id + "_HoTroTuBenhVien]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'HoTroTuBenhVien', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_huychidinh]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'huychidinh', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_tonggiamdoanhthu]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'tonggiamdoanhthu', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "kham]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'kham', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "thuoc]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'thuoc', false, 'sum')/totalRows)));

        $newFooterRow.find(">td[aria-describedby=" + this.id + "_TongPTraNgoaiTru]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'TongPTraNgoaiTru', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_TongPTraNoiTru]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'TongPTraNoiTru', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_tongdoanhthu]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'tongdoanhthu', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_nomoi]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'nomoi', false, 'sum')/totalRows)));
       
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_TongTienBHYTChiTra]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'TongTienBHYTChiTra', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_TongTienBHCCTra]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'TongTienBHCCTra', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_thucthu]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'thucthu', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_SL_NgoaiTru_VP]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'SL_NgoaiTru_VP', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_SLNgoaiTru_BHYT]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'SLNgoaiTru_BHYT', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_SL_NoiTru_VP]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'SL_NoiTru_VP', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_SLNoiTru_BHYT]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'SLNoiTru_BHYT', false, 'sum')/totalRows)));
        $newFooterRow.find(">td[aria-describedby=" + this.id + "_SLK_ALL]").text(formatMoney(Math.floor($("#rowed3").jqGrid('getCol', 'SLK_ALL', false, 'sum')/totalRows)));

$("#rowed3").jqGrid('footerData', 'set', {'xemtheo':'Cộng',
'giavonthuoc': $("#rowed3").jqGrid('getCol', 'giavonthuoc', false, 'sum'),
'phithuengoai': $("#rowed3").jqGrid('getCol', 'phithuengoai', false, 'sum'),
'tongchiphi': $("#rowed3").jqGrid('getCol', 'tongchiphi', false, 'sum'),
'quota': $("#rowed3").jqGrid('getCol', 'quota', false, 'sum'),
'coupon': $("#rowed3").jqGrid('getCol', 'coupon', false, 'sum'),
'huychidinh': $("#rowed3").jqGrid('getCol', 'huychidinh', false, 'sum'),
'thuoctralai': $("#rowed3").jqGrid('getCol', 'thuoctralai', false, 'sum'),
'tonggiamdoanhthu': $("#rowed3").jqGrid('getCol', 'tonggiamdoanhthu', false, 'sum'),
'kham': $("#rowed3").jqGrid('getCol', 'kham', false, 'sum'),

'thuoc': $("#rowed3").jqGrid('getCol', 'thuoc', false, 'sum'),
'tongdoanhthu': $("#rowed3").jqGrid('getCol', 'tongdoanhthu', false, 'sum'),
'loinhuanrong': $("#rowed3").jqGrid('getCol', 'loinhuanrong', false, 'sum'),
'nocu': $("#rowed3").jqGrid('getCol', 'nocu', false, 'sum'),
'noluot': $("#rowed3").jqGrid('getCol', 'noluot', false, 'sum'),
'nomoi': $("#rowed3").jqGrid('getCol', 'nomoi', false, 'sum'),
'thucthu': $("#rowed3").jqGrid('getCol', 'thucthu', false, 'sum'),
'SL_NgoaiTru_VP': $("#rowed3").jqGrid('getCol', 'SL_NgoaiTru_VP', false, 'sum'),
'SLNgoaiTru_BHYT': $("#rowed3").jqGrid('getCol', 'SLNgoaiTru_BHYT', false, 'sum'),
'SL_NoiTru_VP': $("#rowed3").jqGrid('getCol', 'SL_NoiTru_VP', false, 'sum'),
'SLNoiTru_BHYT': $("#rowed3").jqGrid('getCol', 'SLNoiTru_BHYT', false, 'sum'),
'SLK_ALL': $("#rowed3").jqGrid('getCol', 'SLK_ALL', false, 'sum'),

 'HoTroTuBenhVien': $("#rowed3").jqGrid('getCol', 'HoTroTuBenhVien', false, 'sum'),
 'tiengiuong': $("#rowed3").jqGrid('getCol', 'tiengiuong', false, 'sum'),
 'TongPTraNgoaiTru': $("#rowed3").jqGrid('getCol', 'TongPTraNgoaiTru', false, 'sum'),
 'TongPTraNoiTru': $("#rowed3").jqGrid('getCol', 'TongPTraNoiTru', false, 'sum'),
 'TongTienBHYTChiTra': $("#rowed3").jqGrid('getCol', 'TongTienBHYTChiTra', false, 'sum'),
 'TongTienBHCCTra': $("#rowed3").jqGrid('getCol', 'TongTienBHCCTra', false, 'sum'),
});
},
caption: "Kết quả"

});


$("#rowed3").setGridWidth($(window).width()-55);
$("#rowed3").setGridHeight($(window).height()-315);
$("#rowed3").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [
{startColumnName: 'xemtheo', numberOfColumns: 1, titleText: '<b >_O_</b>'},
                                    {startColumnName: 'phithuchien', numberOfColumns: 6, titleText: '<b> Chi phí</b>'},
                                     {startColumnName: 'tongchiphi', numberOfColumns: 1, titleText: '<b>---</b>'},
{startColumnName: 'coupon', numberOfColumns: 4, titleText: '<b>Giảm doanh thu</b>'},
{startColumnName: 'tonggiamdoanhthu', numberOfColumns: 1, titleText: '<b>---</b>'},
{startColumnName: 'kham', numberOfColumns: 4, titleText: '<b>Doanh thu</b>'},
{startColumnName: 'TongPTraNgoaiTru', numberOfColumns: 3, titleText: '<b>Tổng doanh thu</b>'},
{startColumnName: 'loinhuanrong', numberOfColumns: 4, titleText: '<b>Quản trị</b>'},
{startColumnName: 'thucthu', numberOfColumns: 1, titleText: '<b>---</b>'},
{startColumnName: 'SL_NgoaiTru_VP', numberOfColumns: 5, titleText: '<b>Số lượt khám</b>'},


]
}
);
$("#rowed3").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [


{startColumnName: 'SL_NgoaiTru_VP', numberOfColumns: 2, titleText: '<b>Ngoại trú</b>'},
{startColumnName: 'SL_NoiTru_VP', numberOfColumns: 2, titleText: '<b>Nội trú</b>'},
{startColumnName: 'SLK_ALL', numberOfColumns: 1, titleText: '<b>Tổng</b>'},



]
}
);


}

function create_grid2(){
$("#rowed4").jqGrid({
url:'',
datatype: "json",
colNames:['ID',"Mã BN",'Họ lót','Tên','Ngày','Miễn giảm','Hủy chỉ định','Bù trái truyến','BHYT trả','BHCC trả','Tổng tiền dịch vụ','Nợ cũ',
'Tổng phát sinh sau cùng phải trả','Đã trả','Nợ mới','Trả nợ cũ','Dư nợ','Hoàn trả tạm ứng','Mã phiếu',''],
colModel:[
{name:'ID_ThanhToan',index:'ID_ThanhToan', width:"0%", editable:false,align:'right',hidden:true},
{name:'mabn',index:'mabn', width:"4%", editable:false,align:'center',hidden:false},
{name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"10%", editable:false,align:'left',hidden:false},
{name:'TenBenhNhan',index:'TenBenhNhan', width:"5%", editable:false,align:'left',hidden:false},
{name:'ngaytinhbill',index:'ngaytinhbill', width:"6%", editable:false,align:'center',hidden:false},
{name:'GiamGia',classes:'colored',index:'GiamGia', width:"6%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'HuyChiDinh',index:'HuyChiDinh', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'HoTroTuBenhVien',index:'HoTroTuBenhVien', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'BH_YTTra',index:'BH_YTTra', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'BHCC_TTra',index:'BHCC_TTra', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TongTienPhaiTra',index:'TongTienPhaiTra',classes:'colored',width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'NoDauKy',index:'NoDauKy',classes:'colored2', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TongPhaiTraSauCung',index:'TongPhaiTraSauCung',classes:'colored3',width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'DaTra',index:'DaTra',classes:'colored2', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'NoMoi',index:'NoMoi',classes:'colored2', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TraNoCu',index:'TraNoCu',classes:'colored2', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'DuNo',index:'DuNo',classes:'colored2', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'TraTamUng',index:'TraTamUng',classes:'colored2', width:"5%", editable:false,align:'right',hidden:false,formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
{name:'MaPhieu',index:'MaPhieu', width:"8%", editable:false,align:'center',hidden:false},
{name:'id_luotkham',index:'id_luotkham', width:"8%", editable:false,align:'center',hidden:true},

],


loadonce: true,
scroll: false,
modal:true,
rowNum: 10000000,
gridview: true,
pginput:false,
pgbuttons:false,
rowList:[],
viewrecords: true,
ignoreCase:true,
shrinkToFit:true,
grouping: false,
stringResult:true,
footerrow: true,


serializeRowData: function (postdata) {

},
onSelectRow: function(id){  
   
},
ondblClickRow: function (rowId, rowIndex, columnIndex) {

  },
loadComplete: function(data) {
grid_filter_enter("#rowed4"); //enter: chuyen con tro sang o tiếp theo
localData = $("#rowed4").jqGrid("getGridParam", "data");
totalRows = localData.length;
$("#rowed4").jqGrid('footerData', 'set', {'mabn': totalRows+" dòng",
'GiamGia': $("#rowed4").jqGrid('getCol', 'GiamGia', false, 'sum'),
'HuyChiDinh': $("#rowed4").jqGrid('getCol', 'HuyChiDinh', false, 'sum'),
'HoTroTuBenhVien': $("#rowed4").jqGrid('getCol', 'HoTroTuBenhVien', false, 'sum'),
'BH_YTTra': $("#rowed4").jqGrid('getCol', 'BH_YTTra', false, 'sum'),
'BHCC_TTra': $("#rowed4").jqGrid('getCol', 'BHCC_TTra', false, 'sum'),
'TongTienPhaiTra': $("#rowed4").jqGrid('getCol', 'TongTienPhaiTra', false, 'sum'),
'NoDauKy': $("#rowed4").jqGrid('getCol', 'NoDauKy', false, 'sum'),
'TongPhaiTraSauCung': $("#rowed4").jqGrid('getCol', 'TongPhaiTraSauCung', false, 'sum'),
'DaTra': $("#rowed4").jqGrid('getCol', 'DaTra', false, 'sum'),
'NoMoi': $("#rowed4").jqGrid('getCol', 'NoMoi', false, 'sum'),
'TraNoCu': $("#rowed4").jqGrid('getCol', 'TraNoCu', false, 'sum'),
'DuNo': $("#rowed4").jqGrid('getCol', 'DuNo', false, 'sum'),
'TraTamUng': $("#rowed4").jqGrid('getCol', 'TraTamUng', false, 'sum'),

});



    var     ids = $('#rowed4').jqGrid('getDataIDs');
         for (i = 0; i < ids.length; i++) {    
                    var rowData = jQuery('#rowed4').getRowData(ids[i]);

                            if (rowData["id_luotkham"] <0)
                            {
                             $("#rowed4").setCell(ids[i], 'MaPhieu','', {background: '#d9f970'});
                            }
                        }




},
caption:"<div style='float:right'><div id=xuat_excel ' onclick=xuat_excel_option(1) class='outExcel  ui-icon ui-icon-document'></div><label class='diengiai'>Xuất excel toàn bộ</label></div>"
});


$("#rowed4").setGridWidth($(window).width()-55);
$("#rowed4").setGridHeight($(window).height()-275);

$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});//bộ search
$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
} } );
$("#gbox_rowed4").attr("tabindex","1");

$("#gbox_rowed4").bind('keydown', function(e) {
if((jwerty.is("ctrl+m",e))){
$("#rowed4").jqGrid('restoreRow', lastsel);
$("#rowed4").jqGrid('editRow', rowid, true);
lastsel = rowid;
}
})

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
    //alert(id);
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

_idNhomCLS_dangchon=0;

function create_nhomcls(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
  colNames:['Nhóm','Thuộc nhóm'],
  colModel:[
  {name:'TenNhom',index:'TenNhom',hidden :false,width: "45%",},
  {name:'TenNhomCha',index:'TenNhomCha',hidden :false,width: "55%",},
  ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 200000,
  rowList:[],
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
    _idNhomCLS_dangchon=id;
  },
  ondblClickRow: function (id, rowIndex, columnIndex) {
    _idNhomCLS_dangchon=id;
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



function xuat_excel_option(opt)
{

    switch (opt)
    {
        case 1:
       
       window.open("pages.php?module=report&view=baocao_thongke&action=xuat_excel_baocaoNoAll&type=excel&kieuxem="+$("#xemtheo_option option:selected").val()+"&fromdate="+ $( '#tungay' ).val()+"&todate="+$( '#denngay' ).val());
         break;
         case 2:
       
         break;
    }
   

}



function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "." : "") + acc;
    }, "");
}
</script>