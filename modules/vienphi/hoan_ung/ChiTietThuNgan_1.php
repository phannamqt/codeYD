
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
    .thongtin_tongthe,.thongtin_luotkham_vienphi,.thongtin_lichsuvienphi,.kieuin{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;		
    }
    .thongtin_luotkham_vienphi{	 	 
        padding-bottom:4px;
        padding-top:4px;	
        width: 410px;
    }
    .thongtin_lichsuvienphi{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;		 		
    }
    .thongtin_lichsuvienphi_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
    }	 
    .kieuin{ 
      padding-bottom:4px;
        padding-top:4px;    
        width: 190px;
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
</style>
<body>

    <div id="DM_template_container">
        <table id="DM_template"></table>
    </div>
    <div class="top_form ui-widget-content">
        <div class="thongtin_tongthe">
       
                 <label>Ng??y</label>  <input type='textbox' value='1/1/2014'>    
                 <label>Thu ng??n</label>  <input type='textbox' value='Nguy???n Th??? L???'>  <br>  
                 <label>Ng?????i n???p</label>  <input type='textbox' value='V??n Th??? Tr??c'>     <br>  
                 <label>?????a ch???</label>  <input type='textbox' value='Nam ??'>     <br>  
                  <label>Di???n gi???i</label>  <input type='textbox' value='n???p cho ??ng b???'>     <br>  
                  <label>Chi ph?? g????c</label>  <input type='textbox' value='10000'> 
                  <label>Ly?? do gia??m gia??</label>  <input type='textbox' value='Nguoi ngheo'>     <br>  
                  <label>Ti????n ??a?? thu</label>  <input type='textbox' value='200000'> 
                  <label>% gi???m</label>  <input type='textbox' value='50%'> 
                    <label>Ti???n gi???m</label>  <input type='textbox' value='30000'>   <br>  
        </div>
     
        <div class="thongtin_luotkham_vienphi">
                <div class="form_row">
                     <label style="width:100px;text-align:Left">T???ng c???ng</label>
                    <input lang='luu' name="tongcong" style="width:90px" type="text" value="500000??" id="tongcong" >
                    <label style="width:100px;text-align:Left">N??? ?????u k???</label>
                    <input lang='luu' name="nodauky" style="width:90px" type="text" value="1000000??" id="nodauky" >

                    <br>

                    <label style="width:100px;text-align:Left">Ph??? thu</label>
                    <input lang='luu' name="tongphuthu" style="width:90px" type="text" value="20000??" id="tongphuthu" >

                    <label style="width:100px;text-align:Left">T???m ???ng</label>
                    <input lang='luu' name="tamung" style="width:90px" type="text" value="10000??" id="tamung" >
                    <br>
                   
                    <label style="width:100px;text-align:Left">Gi???m gi??</label>
                    <input lang='luu' name="giamgia" style="width:90px" type="text" value="20000??" id="giamgia" >

                    <label style="width:100px;text-align:Left">N??? cu???i k???</label>
                    <input lang='luu' name="nocuoiky" style="width:90px" type="text" value="120000??" id="nocuoiky">
                   
                    <br>

                    <label style="width:100px;text-align:Left">Ti???n thu???c</label>
                    <input lang='luu' name="tienthuoc" style="width:90px" type="text" value="20000??" id="tienthuoc" >
                    <label style="width:100px;text-align:Left">Ti???n th???a</label>
                    <input lang='luu' name="tienthua" style="width:90px" type="text" value="20000??" id="tienthua" >
                   
                    <br>

                     <label style="width:100px;text-align:Left">Ph???i tr???</label>
                    <input lang='luu' name="phaitra" style="width:90px" type="text" value="20000??" id="phaitra">
                    <label style="width:100px;text-align:Left">B???nh nh??n tr???</label>
                    <input lang='luu' name="benhnhantra" style="width:90px" type="text" value="20000??" id="benhnhantra" >

                    <br>

                </div>    
         </div>

         <div class="kieuin">
       
                <input type="radio" name="sex" value="1">In phi???u thanh to??n<br>
                 <input type="radio" name="sex" value="2">In chi ti???t x??t nghi???m<br>
                  <input type="radio" name="sex" value="3">In c??c c???n l??m s??ng<br>
                   <input type="radio" name="sex" value="4">In to??n b??? c??c DV s??? d???ng<br>
                    <input type="radio" name="sex" value="5">In bill ti???ng Anh<br>
             
        </div>
       
  
   
<div > 
            <div id="tabs">
              <ul>
                <li><a href="#tabs-1">Chi ti???t d???ch v???</a></li>
                <li><a href="#tabs-2">C??c phi???u t???m ??ng</a></li>  
              </ul>
                  <div id="tabs-1"> 
                    <div id="panel_main">
                          <div class="left_col ui-widget-content ui-layout-center"> 
                            <table id="rowed3" style="width:100%" ></table>
                          </div > 
                          <div class="right_col ui-widget-content ui-layout-east" id="subToathuoc" > 
                             <div class="right_col tren ui-widget-content ui-layout-center"> 
                                <table id="rowed4" style="width:100%" ></table>
                             </div>
                               <div class="right_col duoi ui-widget-content ui-layout-south"> 
                                <table id="rowed5" style="width:100%" ></table>
                             </div>
                          </div > 
                   </div>
                  </div>
                  <div id="tabs-2">            
                
                   </table>
                    </div>


            </div>
        </div>
   
  
</body>
</html>
<script type="text/javascript">
 var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan="89045";
var id_loaikham;
var grid_click_status=false;
var get_id_kham;
var get_id_trangthai;
var get_id_nguoithuchien;
  var _phithuchien=0;
  var _giamGia=0;
  var _tongPhuThu=0;
    $(document).ready(function() {
   

      
        $("#panel_main").css("height", $(window).height() - 200 + "px");
        $("#panel_main").fadeIn(1000);
      create_layout();
    $( "#tabs" ).tabs({
        
         heightStyle:"fill"
         
         });
        //T???o l?????i
  create_grid();
  create_grid_toathuoc();
  create_grid_toathuoc_chitiet();
  //
  resize_control();
        $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })

        //L???y th??ng tin vi???n ph??
laythongtinvienphi();

    
        
   //$('#tongcong').val=_phithuchien;
   

    });
  
  
    function resize_control() {
      
        $("#rowed3").setGridHeight($(window).height() - 285);
      
        $("#rowed3 ").setGridWidth($(".left_col").width() - 40);

        $("#rowed4").setGridHeight($(window).height() - 500);
      
        $("#rowed4 ").setGridWidth($(".right_col").width() - 14);
         $("#rowed5").setGridHeight($(window).height() - 424);
      
        $("#rowed5").setGridWidth($(".right_col").width() - 14);
          
    }
   function resize_subToathuoc() {
    $("#rowed4").setGridHeight($(".left_col").height() - 60);
      
    $("#rowed5").setGridHeight($(".left_col").height() - 30);

   }
    function create_layout() {
         $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "58%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                    resize_control();

                }
                , onopen_end: function() {

             
                }
                , onclose_end: function() {

                 resize_control();
                }

            }
            , east: {
                resizable: true
                        , size: "40%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

         
                }
                , onclose_end: function() {

              
                }
            }
        });
       
   $("#subToathuoc").layout({
    resizerClass: 'ui-state-default'
                    , center: {
                           resizable: true
                        , size: "40%"
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , togglerAlign_closed: "center"
        
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                   // alert();
                   resize_subToathuoc();
             

                }
                , onopen_end: function() {

             
                }
                , onclose_end: function() {

                
                }

            }
            , south: {
                resizable: true
                        , size: "60%"

                        , fxName: "drop"        // none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

        
                }
                , onclose_end: function() {

              
                }
            }
   });

    }
     function create_grid() {
      
        $("#rowed3").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_vienphichitiet_theoluotkham&ID_LuotKham=<?= $_GET["ID_LuotKham"] ?>',
            datatype: "json",
            colNames: ['ID_LoaiKham', 
        'ID_Kham','ID_LuotKham','MaBenhNhan','TenBenhNhan','Ng??y ch??? ?????nh','T??n lo???i kh??m','Tr???ng th??i','Ph?? th???c hi???n' ,'T??n nh??m','Ph?? g???c'],
            colModel: [
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham',  index: 'ID_LuotKham', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "1%", editable: false, align: 'center', hidden: false},                
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "3%", editable: false, align: 'left', hidden: false},
                {name: 'TenTrangThaiCLSCuaBenhNhan', index: 'TenTrangThaiCLSCuaBenhNhan', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "1%", editable: false, align: 'right', hidden: false},
                {name: 'TenNhom', index: 'TenNhom', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'GiaThueNgoaiThucHien',index: 'GiaThueNgoaiThucHien',summaryType: 'sum',formatter:"integer",sorttype:"number",  search: false, width: "1%", editable: false, align: 'right', hidden: false},
        
                
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow: true,
            userDataOnFooter: true,

            grouping:true, 
            groupingView : { 
            groupField : ['TenNhom'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            //groupOrder: ['DESC'],
            groupText : ['<b>{0} : {PhiThucHien}</b>']
             }, 


            onSelectRow: function(id) {

                    
            },
           ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId); 
            
           
               
                 var ID_LuotKham = rowData['ID_LuotKham'];
                 var id_benhnhan = rowData['ID_BenhNhan'];
                  var MaBenhNhan = rowData['MaBenhNhan'];
                      var TenBenhNhan = rowData['TenBenhNhan'];
    
                 dialog_main("Chi ti???t vi???n ph?? " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 100, 100, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=139&ID_LuotKham="+ID_LuotKham);

            },
            onselect: function(rowId, rowIndex, columnIndex) {
                // $(".ui-icon-pencil").trigger('click');
                alert(rowId("MaBenhNhan"));
                alert(rowIndex);
                alert(columnIndex);
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

                var grid = jQuery('#rowed3');
                var colModel = grid.getGridParam('colModel');

                var colName = colModel[iCol].name;
                var colIndex = colModel[iCol].index;
                var rowData = jQuery('#rowed3').getRowData(rowid);
             

            },
            loadComplete: function(data) {
                var ids = $('#rowed3').jqGrid('getDataIDs');
                for (i = 0; i < ids.length; i++) {
                   
              
                }


                var grid = $("#rowed3"),
    sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
    sumGiaThueNgoaiThucHien=grid.jqGrid('getCol', 'GiaThueNgoaiThucHien', false, 'sum');

grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
grid.jqGrid('footerData','set', {ID: 'GiaThueNgoaiThucHien:', GiaThueNgoaiThucHien: sumGiaThueNgoaiThucHien});

            },
            caption: "Ds ch??a thanh to??n"
        });
       // $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
      //  $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

    }








function create_grid_toathuoc() {
      
        $("#rowed4").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donthuoc_luotkham&ID_LuotKham=<?= $_GET["ID_LuotKham"] ?>',
            datatype: "json",
            colNames: ['ID_DonThuoc', 
        'ID_LuotKham','B??c s?? k??','Ng??y k?? toa','T???ng ti???n','Ti???n gi???m'],
            colModel: [
                {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_LuotKham', index: 'ID_LuotKham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'TenBSKeToa',  index: 'TenBSKeToa', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'NgayBatDauDungThuoc', index: 'NgayBatDauDungThuoc', search: false, width: "1%", editable: false, align: 'left', hidden: false},
                {name: 'ThanhTien',formatter:"integer", index: 'ThanhTien', search: false, width: "1%", editable: false, align: 'right', hidden: false},
                {name: 'SoTienGiam',formatter:"integer", index: 'SoTienGiam', search: false, width: "1%", editable: false, align: 'right', hidden: false},
                
                
        
                
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            //sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
           // footerrow: true,
          //  userDataOnFooter: true,

          


            onSelectRow: function(id) {

                    
            },
           ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId); 
            
           
               
                 var ID_LuotKham = rowData['ID_LuotKham'];
                 var id_benhnhan = rowData['ID_BenhNhan'];
                  var MaBenhNhan = rowData['MaBenhNhan'];
                      var TenBenhNhan = rowData['TenBenhNhan'];
    
                 dialog_main("Chi ti???t vi???n ph?? " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 100, 100, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=139&ID_LuotKham="+ID_LuotKham);

            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

             

            },
            loadComplete: function(data) {
              


            },
            caption: "Toa thu???c"
        });
    }

function create_grid_toathuoc_chitiet() {
      
        $("#rowed5").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_toathuoc&ID_LuotKham=<?= $_GET["ID_LuotKham"] ?>',
            datatype: "json",
            colNames: ['ID_DonThuocCT', 
        'T??n thu???c','??VT','????n gi??','SL k??','SL Bn l???y'],
            colModel: [
                {name: 'ID_DonThuocCT', index: 'ID_DonThuocCT', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenThuoc', index: 'TenThuoc', search: true, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'TenDonViTinh',  index: 'TenDonViTinh', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'Gia', index: 'Gia', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'SoThuocDeNghiTheoDon',formatter:"integer", index: 'SoThuocDeNghiTheoDon', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'SoThuocThucXuat',formatter:"integer", index: 'SoThuocThucXuat', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                
                
        
                
            ],
            loadonce: false,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed4',
            //sortname: 'ThoiGianVaoKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
           // footerrow: true,
          //  userDataOnFooter: true,

          


            onSelectRow: function(id) {

                    
            },
           ondblClickRow: function(rowId) {
         var rowData = jQuery(this).getRowData(rowId); 
            
           
               
                 var ID_LuotKham = rowData['ID_LuotKham'];
                 var id_benhnhan = rowData['ID_BenhNhan'];
                  var MaBenhNhan = rowData['MaBenhNhan'];
                      var TenBenhNhan = rowData['TenBenhNhan'];
    
                 dialog_main("Chi ti???t vi???n ph?? " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 100, 100, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=139&ID_LuotKham="+ID_LuotKham);

            },
            onselect: function(rowId, rowIndex, columnIndex) {
              
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {

             

            },
            loadComplete: function(data) {
              


            },
            caption: "Toa thu???c chi ti???t"
        });
    }


    function laythongtinvienphi(){
        _id_luotkham.splice(0, _id_luotkham.length-1)
        _id_loaikham.splice(0, _id_loaikham.length-1)
        _id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
        _id_kham.splice(0, _id_kham.length-1)
      
        
    $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitiet_vienphi_luotkhamcuoi&ID_LuotKham="+<?= $_GET["ID_LuotKham"] ?>, 
        function( data ) {
            data_luotkham=data;
       // alertObject(data);
        var tam1_cls="";
      
        $.each( data, function( key, val ) {         
            for(i=0;i<val.length;i++){
             
                var tam1_cls=val[i]["cell"];
                
                _id_luotkham.push(tam1_cls[5]);             
                _id_loaikham.push(tam1_cls[3]);
                _id_luotkham_non_unique.push(tam1_cls[5]);
                _id_kham.push(val[i]["id"]);    
                _phithuchien+= parseInt(tam1_cls[8])  ;   
                  _giamGia+= parseInt(tam1_cls[10])  ;   
                    _tongPhuThu+= parseInt(tam1_cls[11])  ;   
                 
                    
            }
         //G??n c??c gi?? tr??? tinh ???????c sau khi ch???y v??ng l???p
   $("#tongcong").val(_phithuchien);
   $("#giamgia").val(_giamGia);
   $("#tongphuthu").val(_tongPhuThu);
//g??n c??c gi?? tr??? tinh ???????c sau khi ch???y v??ng l???p
          
            _id_kham=_id_kham.reverse();
            _id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
        
            _id_luotkham=$.unique(_id_luotkham);
                  
        
        });  

    });


     }

</script>


