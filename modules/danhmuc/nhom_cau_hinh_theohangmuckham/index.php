<!-- Thành NHN -->
<head>
<link href="js/select_input/select2.css" rel="stylesheet"/>
<script src="js/select_input/select2.js"></script>
<script src="js/SlickGrid6pac/lib/jquery.event.drag-2.2.js"></script>
<script src="js/SlickGrid6pac/plugins/slick.checkboxselectcolumn.js"></script>
<script src="js/SlickGrid6pac/plugins/slick.cellrangedecorator.js"></script>
<script src="js/SlickGrid6pac/plugins/slick.cellrangeselector.js"></script>
<script src="js/SlickGrid6pac/plugins/slick.cellselectionmodel.js"></script>
<script src="js/SlickGrid6pac/slick.core.js"></script>
<script src="js/SlickGrid6pac/slick.formatters.js"></script>
<script src="js/SlickGrid6pac/slick.editors.js"></script>
<script src="js/SlickGrid6pac/plugins/slick.rowselectionmodel.js"></script>
<script src="js/SlickGrid6pac/slick.grid.js"></script>
<script src="js/SlickGrid6pac/slick.dataview.js"></script>
<script src="js/SlickGrid6pac/controls/slick.pager.js"></script>
<script src="js/SlickGrid6pac/controls/slick.columnpicker.js"></script>
<script src="js/SlickGrid6pac/slick.groupitemmetadataprovider.js"></script>
<script src="js/SlickGrid6pac/plugins/slick.autotooltips.js"></script>

<link rel="stylesheet" href="js/SlickGrid6pac/slick.grid.css" type="text/css"/>
<script src="js/SlickGrid6pac/plugins/slick.checkboxselectcolumn.js"></script>

<style type="text/css">
.slick-group-select-checkbox {
  width: 13px;
  height: 13px;
  margin: 3px 10px 0 0;
  display: inline-block;
}
.slick-group-select-checkbox.checked {
  background: url(./images/GrpCheckboxY.png) no-repeat center center;
}
.slick-group-select-checkbox.unchecked {
  background: url(./images/GrpCheckboxN.png) no-repeat center center;
}
.cell-effort-driven {
  text-align: center;
}
.slick-group-title[level='0'] {
  font-weight: bold;
}
.slick-group-title[level='1'] {
  text-decoration: underline;
}
.slick-group-title[level='2'] {
  font-style: italic;
}
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}
.slick-row:hover {
  background:#008ddf;
  cursor:pointer;
}
.slick-headerrow-column{
  padding: 0!important;
  background: none repeat scroll 0 0 #53a513;
  padding-left:2px!important;
  padding-right:2px!important;
}
.ui-widget .slick-headerrow-columns {
  height: 24px!important;
  background:#53A513 !important;
}
.slick-header-column span.slick-column-name{
  font: 11.5px/16px segoe ui,Geneva,sans-serif;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.6) !important;
}
.slick-cell, .slick-headerrow-column {
  border-style: solid!important;
}
.slick-columnpicker{
  background:#FFF;
}
.slick-columnpicker li{
  list-style:none;  
}
input{
  text-align:left !important;
}
.slick-headerrow-column input{
  width:99%;
}
.slick-headerrow-column{
  padding: 0!important;
  background: none repeat scroll 0 0 #53a513;
  padding-left:2px!important;
  padding-right:2px!important;
}
.ui-widget .slick-headerrow-columns {
  height: 24px!important;
  background:#53A513 !important;
}
.slick-header-column span.slick-column-name{
  font: 11.5px/16px segoe ui,Geneva,sans-serif;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.6) !important;
}
.slick-cell, .slick-headerrow-column {
  border-style: solid!important;
}
.cell-effort-driven {
  text-align: center;
}
.slick-group-title[level='0'] {
  font-weight: bold;
}
.slick-group-title[level='1'] {
  text-decoration: underline;
}
.slick-group-title[level='2'] {
  font-style: italic;
}
table{
  width:100%;
}
/*.ui-widget-header .ui-state-focus {
	border: 1px solid #006cab;
	background: #67b021 url(images/ui-bg_highlight-soft_25_67b021_1x100.png) 50% 50% repeat-x;
	font-weight: bold;
	color: #ffffff;
	background:#008ddf;
}*/

.slick-row:hover {
background:#008ddf;
}

.slick-headerrow-column {
  background: #87ceeb;
  text-overflow: clip;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.slick-headerrow-column input {
  margin: 0;   
  width: 100%;
  height: 100%;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#dialog-form{     
}
.error{
    border:1px solid  orangered;
}
#rowed4{
   height:500px;
   text-align:left;
}
#rowed4 .textarea{
    text-align:right;
}
#text{
    width: 290px!important;
}
div.form_row{
    vertical-align:top;margin-left:40px!important;outline:#327E04;padding: 0.3em;    
}
.form_row textarea{
    font-size: 12px;
}
div.form_row input[type="text"] {
border: 1px solid #327E04;
padding: 0.3em;
text-align: center;
width: 230px;
font: 12px Tahoma,Geneva,sans-serif !important;
}
.reallyHidden { 
  display: none !important;
}
   
</style>
</head>

<body style="font:12px Tahoma,Geneva,sans-serif !important;"> 
  <!-- GRID 1 -->
  <div style="width: auto;height: auto;border: 1px solid #ccc">
  <div style="width: 24%!important;float: left;  border: 1px solid #fff;">
      <label style="font-weight: bold">Phân nhóm cấu hình: </label><br>
      <span class="custom-combobox">
        <input style="width: 175px;" placeholder="Chọn phân nhóm cấu hình" id="input_khoayeucau_xem" name="input_khoayeucau" type="text">
      </span>
      <button id="xemtatca" style="margin-left: 35px">Xem tất cả</button>

      <div class="title-maucamket" style="height:28px; width:98%; border:1px solid #ccc; margin-top: 4px;width: 99.1%; font-weight:bold; border-radius:3px;">
          <label style="margin-left:5px;line-height: 28px; ">
            Danh sách nhóm 
            <span id="n_dangtaidulieu_grid1" style="color: green">Loading...</span>
          </label>
      </div>

      <div id="grid_phongban" style="margin-top: -5px; border: 1px solid #ccc;width:99%;"></div>
      <div id="n_dangtaidulieu" style="display:none">Đang tải dữ liệu...</div>
   
  </div>

 
  <!-- GRID 2 -->
  <!-- <input tabindex="16" style="width: 173px;" type="text" name="" id="nhanvien1"> -->
  <!-- <button id="themhangmuc">Thêm hạng mục</button> -->
  <div style="width: 75%;float: right; border: 1px solid #fff;">
    <label style="font-weight: bold">Cận lâm sàng: </label><br>
      <span class="custom-combobox">
        <input style="width: 173px;" placeholder="Chọn nhóm CLS" type="text" name="" id="id_nhomcls">
      </span>
      <button id="xemtatca_cls" style="margin-left: 35px">Xem tất cả</button>
      <label style="font-size: 18px;margin-left: 5px;font-weight: bold;" id="tennhomxephang"></label>
      <!--  -->
    <div style="width: 100%; height: 40%;float: right;border: 1px solid #fff;">
      <div style="width:100%;" id="slickgrid">
        <div class="title-maucamket" style="height:28px; width:98.9%; border:1px solid #ccc; margin-top: 4px; font-weight:bold; border-radius:3px;">
          <label style="margin-left:5px;line-height: 28px;float: left;">
            Danh sách hạng mục khám
            <span id="n_dangtaidulieu_grid2" style="color: green;display: none;">Loading...</span>

          </label>
          <label id="sum_grid2" style="; font-weight: bold;margin-top: 6px; color: red;float: right;"></label>
        </div>
        <div id="myGrid" style="margin-top: -5px;margin-bottom:4px;width:99%;height: auto;border: 1px solid #ccc"></div>
      </div>
    </div>

    <center><button id="themhangmuc"><span class="ui-icon ui-icon-arrowthick-1-s" style="float: left"></span>Thêm hạng mục</button>
    <button id="bohangmuc"><span class="ui-icon ui-icon-arrowthick-1-n" style="float: left"></span>Bỏ hạng mục</button></center>


    <div style="width: 100%; height: 40%;float: right;border: 1px solid #fff;">
      <div style="width:100%" id="slickgrid">
        <div class="title-maucamket" style="height:28px; width: 98.9%;border:1px solid #ccc; margin-top: 4px; font-weight:bold; border-radius:3px;">

          <label style="margin-left:5px;line-height: 28px; ">
            Danh sách hạng mục khám đã chọn 
            <span id="n_dangtaidulieu_grid3" style="color: green;display: none;">Loading...</span>
          </label>

          <label id="id_nhomxephang_grid1" style="display: none;"></label>
          
          <label id="sum_grid3" style="float: right; margin-top: 6px; color: red"></label>
        </div>
        <div id="myGrid2" style="margin-top: -5px;margin-bottom:4px;width:99%;border: 1px solid #ccc"></div>
        
      </div>
    </div>
  </div>
  <!-- END GRID 2 -->
  </div>

</body>

<script type="text/javascript">
jQuery(document).ready(function() {
   $(window).resize(function() {		 
		   resize_control();
	})
   // themhangmuc();
   create_combobox_new('#input_khoayeucau_xem',create_phannhom_cauhinh,'bw','','data_phan_nhomxephang',0);
   create_combobox_new('#id_nhomcls',create_nhomcls,'bw','','data_nhomcls',0);
   $("#themhangmuc,#xemtatca,#bohangmuc,#xemtatca_cls").button();
   create_grid1();
   create_grid2();
   create_grid_phongban1();
});

/////////////////////////////////Start grid 1////////////////////////////////////
//Grid Danh sách phòng ban
function create_grid_phongban1(){
    window.columnFilters = {};
    window.dataView_grid1='';
    var data_grid1 = [];
    var selectedRowIds = [];
    var options = {
       editable: true
      ,enableCellNavigation: true
      ,asyncEditorLoading: true
      ,forceFitColumns: false
      ,autoEdit: false
      ,topPanelHeight: 100
      ,headerRowHeight: 60
      ,showHeaderRow: true
      ,autoWidth: true
    };
    var columns = [
      {id:'id',field: "id",width: 0, minWidth: 0, maxWidth: 0, cssClass: "reallyHidden", headerCssClass: "reallyHidden"},
      {name:'STT',id:'STT',field: "STT",width: 0, sortable: true},
      {name:'Tên nhóm',id:'TenNhom',field: "TenNhom", sortable: true,width: ($(window).width()/5)+2},
      // {name:'Mô tả',id:'MoTa',field: "MoTa",width: 60, sortable: true},
      
    ];
    selectActiveRow =  false;
    var selectedRows = [];
    window.sortdir = 1;
    window.percentCompleteThreshold = 0;
    window.searchString = ""; 
    window.dataView_grid1 = new Slick.Data.DataView();
    window.grid_1 = new Slick.Grid("#grid_phongban", window.dataView_grid1, columns, options);
    
    window.dataView_grid1.onRowCountChanged.subscribe(function (e, args) {
        // $("#sum_grid3").html('Có<span style="color:red">('+args.current+')</span> hạng mục');
        // window.grid_1.updateRowCount();
        // window.grid_1.render();
      });
    window.columnpicker = new Slick.Controls.ColumnPicker(columns, window.grid_1, options);
    
    window.grid_1.setSelectionModel(new Slick.CellSelectionModel());
    selectActiveRow = true;
        window.grid_1.setSelectionModel(new Slick.RowSelectionModel({
            selectActiveRow: true
        }));
    
    plugin = new Slick.AutoTooltips();
    window.grid_1.registerPlugin(plugin);   
      $(window.grid_1.getHeaderRow()).delegate(":input", "change keyup", function (e) {
        var columnId = $(this).data("columnId");
        if (columnId != null) {
        columnFilters[columnId] = $.trim($(this).val());
        window.dataView_grid1.refresh();
        }window.grid_1.invalidate()
      });
      //search
      window.grid_1.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });
      //sửa ở đây <----
      window.grid_1.onClick.subscribe(function (e,args) {
        /////////////////////
        window.id_edit1=window.dataView_grid1.getItem(args.row).id;
        $("#id_nhomxephang_grid1").html(window.dataView_grid1.getItem(args.row).id);
        $("#tennhomxephang").html("-   Nhóm đang chọn: "+"<span style='color:red'>"+window.dataView_grid1.getItem(args.row).TenNhom+"</span>");
        // alert(window.id_edit1);
           if(selectActiveRow){
             if($.inArray(args.row, selectedRows) === -1){
               selectedRows = [];
               selectedRows.push(args.row)
             }else{
              selectedRows = []; 
             }
           }else{
            ($.inArray(args.row, selectedRows) === -1) ? selectedRows.push(args.row) : selectedRows.splice(selectedRows.indexOf(args.row), 1);
          }
        window.grid_1.setSelectedRows(selectedRows);
        $("#loadding_3").css("color", "redd");
        function loaddata_nhomxephang_chitiet_grid2_id_nhomxephang(){
          $("#n_dangtaidulieu_grid3").show();
          // $(".slick-viewport").removeClass('bongmo');
          var data = [];
          $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhomxephang_chitiet&id_nhomxephang='+window.id_edit1).done(function(a){
            $(".slick-viewport").removeClass('bongmo');
            $("#n_dangtaidulieu_grid3").hide();
            data=$.parseJSON(a);
            
            // console.log(data);
            window.grid2.resetActiveCell();
            window.dataView2.beginUpdate();
            window.dataView2.setItems(data);
            window.dataView2.setFilter(filter_3);
            window.dataView2.endUpdate();
          });
          $("#loadding_3").css("color", "#ccc");
        }
        // loaddata_nhomxephang_chitiet_grid2();
        loaddata_nhomxephang_chitiet_grid2_id_nhomxephang();
        create_grid2();
        // $("#sum_grid3").html("<span style='color:red'>"+"Không có hạng mục nào được chọn."+"</span>");
        
       
        ///////////////////////////
        function loaddata_hangmuckham_chitiet_load1(){
          $("#n_dangtaidulieu_grid2").show();
          $(".slick-viewport").addClass('bongmo');
          var data = [];
          $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmloaikham_idcls&id_nhomcls=&id_nhomxephang_parent='+window.id_edit1).done(function(a){
            $("#n_dangtaidulieu_grid2").hide();
            // $(".slick-viewport").removeClass('bongmo');
            $("#n_dangtaidulieu").hide();
            data=$.parseJSON(a);
            window.grid.resetActiveCell();
            window.dataView.beginUpdate();
            window.dataView.setItems(data);
            window.dataView.setFilter(filter);
            window.dataView.endUpdate();
          });
        }
        loaddata_hangmuckham_chitiet_load1();

        ////////////////////////count grid2
        $.ajax({
          url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=count_grid2",
          type : "post",
          dateType:"text",
          data : {
            id_nhomxephang : window.id_edit1
          },
          success : function (result){
            data=$.parseJSON(result);
            $("#sum_grid3").html("Có ("+data['Count_result']+") loại khám đang chọn.");
          }
        });
        ////////////////////////
        //Count grid 1 not id_cls
         $.ajax({
          url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=count_grid1",
          type : "post",
          dateType:"text",
          data : {
            id_nhomxephang : window.id_edit1
          },
          success : function (result){
            data2=$.parseJSON(result);
            $("#sum_grid2").html("Còn lại ("+data2['Count_result']+") loại khám.");
          }
        });
        ////////////////////////
        ///////////////////////////
      });
      window.grid_1.onDblClick.subscribe(function(e, args){
        window._dbclick=1;
        // alert('123');
        $("#sua").click();
      });
      window.grid_1.onColumnsResized.subscribe(function(e, args) {
      });
      window.grid_1.onCellChange.subscribe(function(e,args){
      }); 
            // move the filter panel defined in a hidden div into an inline secondary grid header row
            var $secondaryRow = window.grid_1.getTopPanel();

            $("#inlineFilterPanelL")
                .appendTo($secondaryRow[0])
                .show();
      $("#inlineFilterPanelR")
                .appendTo($secondaryRow[1])
                .show();
            window.grid_1.onCellChange.subscribe(function(e,args) {
                window.dataView_grid1.updateItem(args.item.id,args.item);
            });

      window.grid_1.onMouseEnter.subscribe(function(e) {
        var cell = this.getCellFromEvent(e);

        this.setSelectedRows([cell.row]);
                e.preventDefault();
      });

      window.grid_1.onMouseLeave.subscribe(function(e) {
        this.setSelectedRows([]);
                e.preventDefault();
      });

      window.grid_1.onSelectedRowsChanged.subscribe(function(e) {
                selectedRowIds = [];
                var rows = window.grid_1.getSelectedRows();
                for (var i = 0, l = rows.length; i < l; i++) {
                    var item = window.dataView_grid1.getItem(rows[i]);
                    if (item) selectedRowIds.push(item.id);
                }
            });
      
      window.grid_1.onMouseEnter.subscribe(function(e) {
        var cell = this.getCellFromEvent(e);

        this.setSelectedRows([cell.row]);
                e.preventDefault();
      });

      window.grid_1.onMouseLeave.subscribe(function(e) {
        this.setSelectedRows([]);
                e.preventDefault();
      });

      window.grid_1.onSort.subscribe(function(e, args) {
                sortdir = args.sortAsc ? 1 : -1;
                sortcol = args.sortCol.field;
        window.dataView_grid1.sort(comparer, args.sortAsc);
            
            });
      $("#btn_loc").click(function(e, args){
         sortdir = args.sortAsc ? 1 : -1;
                sortcol = args.sortCol.field;
        window.dataView_grid1.sort(DiemThi.sortAsc);
      });
      // wire up model events to drive the grid
      window.dataView_grid1.onRowCountChanged.subscribe(function(e,args) {
        window.grid_1.updateRowCount();
                window.grid_1.render();
      });

      window.dataView_grid1.onRowsChanged.subscribe(function(e,args) {});
      window.dataView_grid1.onPagingInfoChanged.subscribe(function(e,pagingInfo) {
        var isLastPage = pagingInfo.pageSize*(pagingInfo.pageNum+1)-1 >= pagingInfo.totalRows;
                var enableAddRow = isLastPage || pagingInfo.pageSize==0;
                var options = window.grid_1.getOptions();

                if (options.enableAddRow != enableAddRow)
            window.grid_1.setOptions({enableAddRow:enableAddRow});
      });
      window.grid_1.init();
      loaddata_grid1();
      // loaddata_phanloaikham();
      $("#gridContainer").resizable();
}
function loaddata_grid1(){
  $(".slick-viewport").addClass('bongmo');
  $("#n_dangtaidulieu_grid1").show();
  var data = [];
  window.dataView_grid1.setItems(data);
  var cols = window.grid_1.getColumns();
  window.grid_1.setColumns(cols);
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhomxephang&id_phanloaikham=').done(function(a){
    $(".slick-viewport").removeClass('bongmo');
    $("#n_dangtaidulieu_grid1").hide();
    data=$.parseJSON(a);
    window.grid_1.resetActiveCell();
    window.dataView_grid1.beginUpdate();
    window.dataView_grid1.setItems(data);
    window.dataView_grid1.setFilter(filter_1);
    window.dataView_grid1.endUpdate();
  }); 
}

////////////////////////////////////////////////END COL LEFT////////////////////////////////////////




function create_grid1(){
  window.dataView;
  window.grid;
  var data = [];
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    rowHeight: 30,
    explicitInitialization: true,
    multiColumnSort: true,
    asyncEditorLoading: true,
    forceFitColumns: false,
  };

  window.checkboxSelector = new Slick.CheckboxSelectColumn({
   cssClass: "slick-cell-checkboxsel",
  });
  var columns = [     
    window.checkboxSelector.getColumnDefinition(),
    // {name:'STT',id:'STT',field: "STT",width: 50, sortable: true},
    // {name:'id',id:'id',field: "id",width: 278, sortable: true},
    {name:'Tên loại khám',id:'TenLoaiKham',field: "TenLoaiKham",sortable: true,width: ($(window).width()/8)+460},
    {name:'Mã viết tắt',id:'MaVietTat',field: "MaVietTat", sortable: true,width: ($(window).width()/8)+132},
    {id:'id',field: "id",width: 0, minWidth: 0, maxWidth: 0, cssClass: "reallyHidden", headerCssClass: "reallyHidden"},

  ];
  window.columnFilters = {};

  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider({ checkboxSelect: true, checkboxSelectPlugin: checkboxSelector });

  window.dataView = new Slick.Data.DataView({
    groupItemMetadataProvider: groupItemMetadataProvider,
    inlineFilters: true
  });

  window.grid = new Slick.Grid("#myGrid", window.dataView, columns, options);
  var pager = new Slick.Controls.Pager(window.dataView, window.grid, $("#pager"));
  window.grid.registerPlugin(groupItemMetadataProvider);
  window.grid.setSelectionModel(new Slick.RowSelectionModel({selectActiveRow: false}));
  window.grid.registerPlugin(checkboxSelector);
  window.dataView.syncGridSelection(window.grid, true);
  var columnpicker = new Slick.Controls.ColumnPicker(columns, window.grid, options);  

  window.dataView.onRowCountChanged.subscribe(function(e, args) {
    // $("#sum_grid2").html('<span style="color:red">Có('+args.current+') hạng mục khám</span>');
    window.grid.updateRowCount();
    window.grid.render();
    
  });
  window.dataView.onRowsChanged.subscribe(function(e, args) {
    window.grid.invalidateRows(args.rows);
    window.grid.render();
  });
  window.grid.onClick.subscribe(function (e, args){
    var cell = window.grid.getCellFromEvent(e);
    var item = window.grid.getDataItem(cell.row);        
  });
  window.grid.onDblClick.subscribe(function (e, args){
    var cell = window.grid.getCellFromEvent(e);
    var item = window.grid.getDataItem(cell.row);
  });
  ///////////////////
  window.dataView.onRowCountChanged.subscribe(function (e, args) {
    window.grid.updateRowCount();     
    window.grid.render();
  });  
  window.dataView.setGrouping([
    {getter: "TenNhom",
    formatter: function (g) {return  "<strong>"+ g.value + "</strong>  <span style='color:green'>(" + g.count + ")</span>";},     
      collapsed: false,//true để group
      lazyTotalsCalculation: false}
  ]);
  window.grid.registerPlugin(groupItemMetadataProvider);
  plugin = new Slick.AutoTooltips();
  window.grid.registerPlugin(plugin);

  window.grid.setSelectionModel(new Slick.CellSelectionModel());  
  window.grid.setSelectionModel(new Slick.RowSelectionModel());
  window.dataView.onRowsChanged.subscribe(function (e, args) {
    window.grid.invalidateRows(args.rows);
    window.grid.render();
  });


  $(window.grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
    var columnId = $(this).data("columnId");
    if (columnId != null) {
      columnFilters[columnId] = $.trim($(this).val());
      window.dataView.refresh();
      if( $.trim($(this).val())!=''){
        window.dataView.expandAllGroups();
      }else{
        window.dataView.collapseAllGroups();
      }
    }
  });   

  window.grid.onHeaderRowCellRendered.subscribe(function(e, args) {
    $(args.node).empty();
    $("<input type='text'>")
    .data("columnId", args.column.id)
    .val(columnFilters[args.column.id])
    .appendTo(args.node);
  });   
  window.grid.init();
  window.dataView.beginUpdate();
  window.dataView.setItems(data);
  window.dataView.endUpdate();
  resize_control();
  loaddata_hangmuckham_chitiet();

///end
}
///////////////END GRID///////////////////





/////////////////////////////////////START GRID2/////////////////////////////////////
function create_grid2(){
  window.dataView2;
  window.grid2;
  var data = [];
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    rowHeight: 30,
    explicitInitialization: true,
    multiColumnSort: true,
    asyncEditorLoading: true,
    forceFitColumns: false,
  };

  window.checkboxSelector = new Slick.CheckboxSelectColumn({
   cssClass: "slick-cell-checkboxsel",
  });
  var columns = [     
    window.checkboxSelector.getColumnDefinition(),
    // {name:'STT',id:'STT',field: "STT",width: 0, sortable: true},
    {name:'Tên loại khám',id:'TenLoaiKham',field: "TenLoaiKham",sortable: true,width: ($(window).width()/8)+460},
    {name:'Mã viết tắt',id:'MaVietTat',field: "MaVietTat", sortable: true,width: ($(window).width()/8)+132},
    {id:'id',field: "id",width: 0, minWidth: 0, maxWidth: 0, cssClass: "reallyHidden", headerCssClass: "reallyHidden"},
    {id:'ID_NhomXepHangChiTiet',field: "ID_NhomXepHangChiTiet",width: 0, minWidth: 0, maxWidth: 0, cssClass: "reallyHidden", headerCssClass: "reallyHidden"},

  ];
  window.columnFilters = {};

  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider({ checkboxSelect: true, checkboxSelectPlugin: checkboxSelector });

  window.dataView2 = new Slick.Data.DataView({
    groupItemMetadataProvider: groupItemMetadataProvider,
    inlineFilters: true
  });

  window.grid2 = new Slick.Grid("#myGrid2", window.dataView2, columns, options);
  var pager = new Slick.Controls.Pager(window.dataView2, window.grid2, $("#pager"));
  window.grid2.registerPlugin(groupItemMetadataProvider);
  window.grid2.setSelectionModel(new Slick.RowSelectionModel({selectActiveRow: false}));
  window.grid2.registerPlugin(checkboxSelector);
  // window.dataView2.syncgridSelection(window.grid2, true);
  window.dataView2.syncGridSelection(window.grid2, true);
  var columnpicker = new Slick.Controls.ColumnPicker(columns, window.grid2, options);  


  window.dataView2.onRowCountChanged.subscribe(function(e, args) {
    // $("#sum_grid3").html('<span style="color:red">Có('+args.current+') hạng mục đã chọn</span>');
    window.grid2.updateRowCount();
    window.grid2.render();
    
  });
  window.dataView2.onRowsChanged.subscribe(function(e, args) {
    window.grid2.invalidateRows(args.rows);
    window.grid2.render();
  });
  window.grid2.onClick.subscribe(function (e, args){
    var cell = window.grid2.getCellFromEvent(e);
    var item = window.grid2.getDataItem(cell.row);        
  });
  window.grid2.onDblClick.subscribe(function (e, args){
    var cell = window.grid2.getCellFromEvent(e);
    var item = window.grid2.getDataItem(cell.row);
  });
  ///////////////////
  window.dataView2.onRowCountChanged.subscribe(function (e, args) {
    window.grid2.updateRowCount();     
    window.grid2.render();
  });  
  window.dataView2.setGrouping([
    {getter: "TenNhom",
    formatter: function (g) {return  "<strong>"+ g.value + "</strong>  <span style='color:green'>(" + g.count + ")</span>";},     
      collapsed: false,
      lazyTotalsCalculation: false}
  ]);
  window.grid2.registerPlugin(groupItemMetadataProvider);
  plugin = new Slick.AutoTooltips();
  window.grid2.registerPlugin(plugin);

  window.grid2.setSelectionModel(new Slick.CellSelectionModel());  
  window.grid2.setSelectionModel(new Slick.RowSelectionModel());
  window.dataView2.onRowsChanged.subscribe(function (e, args) {
    window.grid2.invalidateRows(args.rows);
    window.grid2.render();
  });


  $(window.grid2.getHeaderRow()).delegate(":input", "change keyup", function (e) {
    var columnId = $(this).data("columnId");
    if (columnId != null) {
      columnFilters[columnId] = $.trim($(this).val());
      window.dataView2.refresh();
      if( $.trim($(this).val())!=''){
        window.dataView2.expandAllGroups();
      }else{
        window.dataView2.collapseAllGroups();
      }
    }
  });   

  window.grid2.onHeaderRowCellRendered.subscribe(function(e, args) {
    $(args.node).empty();
    $("<input type='text'>")
    .data("columnId", args.column.id)
    .val(columnFilters[args.column.id])
    .appendTo(args.node);
  });   
  window.grid2.init();
  window.dataView2.beginUpdate();
  window.dataView2.setItems(data);
  window.dataView2.endUpdate();
  resize_control();
  loaddata_nhomxephang_chitiet_grid2();

///end
}
/////////////////////////////////////END GRID2///////////////////////////////////////
//CÁC BUTTON
$("#xemtatca").click(function(){
  create_grid_phongban1();
  loaddata_grid1();
  $("#input_khoayeucau_xem").val("Phân nhóm xếp hàng CLS");
});
$("#xemtatca_cls").click(function(){
  create_grid1();
  loaddata_hangmuckham_chitiet();
  $("#id_nhomcls").val("Cận lâm sàng")
});
  $('#themhangmuc').click(function(){ 
    var check_cf=confirm("Bạn có muốn thêm hạng mục khám?");
    if (check_cf==true) {
      var selectedData = [],
      selectedIndexes;
      selectedIndexes = window.grid.getSelectedRows();  
      var ID_LoaiKham=[];
      $.each(selectedIndexes, function (index, value) {
        var item   = dataView.getItem(value); 
        if (item.id !== undefined) {           
          ID_LoaiKham.push(item.id);
        }
      });
      $.ajax({
        type: 'POST',
        async : false,
        data:{
          ID_NhomXepHang:window.id_edit1,
          ID_LoaiKham:ID_LoaiKham
        },      
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=add_hangmuckham_chitiet',
        success: function(data, status, xhr) {
          tooltip_message('Thêm hạng mục khám thành công!');
          create_grid2();
          create_grid1();
          loaddata_nhomxephang_chitiet_grid2();
          loaddata_hangmuckham_chitiet();
          ///
           ////////////////////////count grid2
            $.ajax({
              url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=count_grid2",
              type : "post",
              dateType:"text",
              data : {
                id_nhomxephang : window.id_edit1
              },
              success : function (result){
                data=$.parseJSON(result);
                $("#sum_grid3").html("Có ("+data['Count_result']+") loại khám đang chọn.");
              }
            });
            ////////////////////////
            //Count grid 1 not id_cls
             $.ajax({
              url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=count_grid1",
              type : "post",
              dateType:"text",
              data : {
                id_nhomxephang : window.id_edit1
              },
              success : function (result){
                data2=$.parseJSON(result);
                $("#sum_grid2").html("Còn lại ("+data2['Count_result']+") loại khám.");
              }
            });
            ////////////////////////
        },
      });
    }else{}
    
  })
// }
///Bỏ hạng mục
$('#bohangmuc').click(function(){
    var check_cf=confirm("Bạn có muốn bỏ hạng mục khám?");
    if (check_cf==true) {
      var selectedData = [],
      selectedIndexes;
      selectedIndexes = window.grid2.getSelectedRows();  
      var ID_NhomXepHang_ChiTiet_Grid2=[];
      $.each(selectedIndexes, function (index, value) {
        var item   = window.dataView2.getItem(value); 
        if (item.ID_NhomXepHangChiTiet !== undefined) {           
          ID_NhomXepHang_ChiTiet_Grid2.push(item.ID_NhomXepHangChiTiet);
        }
      });
      $.ajax({
        type: 'POST',
        async : false,
        data:{
          ID_NhomXepHang_ChiTiet:ID_NhomXepHang_ChiTiet_Grid2
        },      
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=del_hangmuckham_chitiet',
        success: function(data, status, xhr) {
          tooltip_message('Bỏ hạng mục khám thành công!');
          create_grid2();
          create_grid1();
          loaddata_nhomxephang_chitiet_grid2();
          loaddata_hangmuckham_chitiet();
          ////////////////////////count grid2
          $.ajax({
            url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=count_grid2",
            type : "post",
            dateType:"text",
            data : {
              id_nhomxephang : window.id_edit1
            },
            success : function (result){
              data=$.parseJSON(result);
              $("#sum_grid3").html("Có ("+data['Count_result']+") loại khám đang chọn.");
            }
          });
          ////////////////////////
          //Count grid 1 not id_cls
           $.ajax({
            url : "pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=count_grid1",
            type : "post",
            dateType:"text",
            data : {
              id_nhomxephang : window.id_edit1
            },
            success : function (result){
              data2=$.parseJSON(result);
              $("#sum_grid2").html("Còn lại ("+data2['Count_result']+") loại khám.");
            }
          });
          ////////////////////////
        },
      });
    }else{}
})

function create_phannhom_cauhinh(elem, datalocal) {
    datalocal = jQuery.parseJSON(datalocal);
    $(elem).jqGrid({
        datastr: datalocal,
        datatype: "jsonstring",
        colNames: ['Tên phân nhóm','Mô tả'],
        colModel: [
            {name: 'TenPhanNhom', index: 'TenPhanNhom', hidden: false,width:7},
            {name: 'MoTa', index: 'MoTa', hidden: false,width:7},
        ],
        hidegrid: false,
        gridview: true,
        loadonce: true,
        scroll: false,
        modal: true,
        rowNum: 200000,
        rowList: [],
        height: 200,
        width: 400,
        viewrecords: true,
        ignoreCase: true,
        shrinkToFit: true,
        cmTemplate: {sortable: false},
        sortorder: "desc",
        serializeRowData: function(postdata) {
        },
        onSelectRow: function(id) {
          if($(elem).data('clicked')){
        var selr = jQuery(elem).jqGrid('getGridParam','selrow');
        // $("#input_khoayeucau_xem_").val(selr);
        function loaddata_phanloaikham(){
          $(".slick-viewport").addClass('bongmo');
          $("#n_dangtaidulieu").show();
          var data = [];
          window.dataView_grid1.setItems(data);
          var cols = window.grid_1.getColumns();
          window.grid_1.setColumns(cols);
          // var id_khaphong=$("#input_khoayeucau_xem_").val();
          // console.log(id_khaphong);
          $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhomxephang&id_phanloaikham='+selr).done(function(a){
            $(".slick-viewport").removeClass('bongmo');
            $("#n_dangtaidulieu").hide();
            data=$.parseJSON(a);
            window.grid_1.resetActiveCell();
            window.dataView_grid1.beginUpdate();
            window.dataView_grid1.setItems(data);
            window.dataView_grid1.setFilter(filter_1);
            window.dataView_grid1.endUpdate();
          }); 
        }
        create_grid_phongban1();
        loaddata_phanloaikham();
      }
        },
        ondblClickRow: function(id, rowIndex, columnIndex) {
        },
        loadComplete: function(data) {
        },
    });
    $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    $(elem).jqGrid('bindKeys', {});
}
function create_nhomcls(elem,datalocal){
  datalocal=jQuery.parseJSON(datalocal);  
  $(elem).jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,
    colNames:['Tên nhóm CLS'],
    colModel:[
      {name:'TenNhom',index:'TenNhom',hidden :false},      
     
    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,     
    modal:true,  
    rowNum: 1000000,
    rowList:[],   
    sortname: 'ten_nhanvien',
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
      function loaddata_hangmuckham_chitiet_idcls(){
        var data = [];
        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmloaikham_idcls&id_nhomcls='+selr+"&id_nhomxephang_parent="+$("#id_nhomxephang_grid1").html()).done(function(a){
          $(".slick-viewport").removeClass('bongmo');
          $("#n_dangtaidulieu").hide();
          data=$.parseJSON(a);
          window.grid.resetActiveCell();
          window.dataView.beginUpdate();
          window.dataView.setItems(data);
          window.dataView.setFilter(filter);
          window.dataView.endUpdate();
        });
      }
      // create_grid1();
      loaddata_hangmuckham_chitiet_idcls();
    }
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {
    },
    loadComplete: function(data) {
      
    },
  });
$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );
}
function loaddata_hangmuckham_chitiet(){
  $("#n_dangtaidulieu_grid2").show();
  var data = [];
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmloaikham_idcls&id_nhomcls=&id_nhomxephang_parent='+$("#id_nhomxephang_grid1").html()).done(function(a){
    $(".slick-viewport").removeClass('bongmo');
    $("#n_dangtaidulieu_grid2").hide();
    data=$.parseJSON(a);
    window.grid.resetActiveCell();
    window.dataView.beginUpdate();
    window.dataView.setItems(data);
    window.dataView.setFilter(filter);
    window.dataView.endUpdate();
  });
}
function loaddata_nhomxephang_chitiet_grid2(){
  $("#n_dangtaidulieu_grid3").show();
  var data = [];
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhomxephang_chitiet&id_nhomxephang='+$("#id_nhomxephang_grid1").html()).done(function(a){
    $(".slick-viewport").removeClass('bongmo');
    $("#n_dangtaidulieu_grid3").hide();
    data=$.parseJSON(a);
    window.grid2.resetActiveCell();
    window.dataView2.beginUpdate();
    window.dataView2.setItems(data);
    window.dataView2.setFilter(filter);
    window.dataView2.endUpdate();
  });
}
function filter(item) {
    for (var columnId in columnFilters) {
      if (columnId !== undefined && columnFilters[columnId] !== "") {
        var c = window.grid.getColumns()[window.grid.getColumnIndex(columnId)];
        if($.trim(item[c.field])==''){
      item[c.field]=' ';
    }
    if(item[c.field].toString().toLowerCase().indexOf(columnFilters[columnId].toLowerCase())===-1){
        return false;
    }
      }
    }
    return true;
}
function filter_1(item) {
    for (var columnId in columnFilters) {
      if (columnId !== undefined && columnFilters[columnId] !== "") {
        var c = window.grid_1.getColumns()[window.grid_1.getColumnIndex(columnId)];
        if($.trim(item[c.field])==''){
      item[c.field]=' ';
    }
    if(item[c.field].toString().toLowerCase().indexOf(columnFilters[columnId].toLowerCase())===-1){
        return false;
    }
      }
    }
    return true;
}
function filter_2(item) {
    for (var columnId in columnFilters) {
      if (columnId !== undefined && columnFilters[columnId] !== "") {
        var c = window.grid2.getColumns()[window.grid2.getColumnIndex(columnId)];
        if($.trim(item[c.field])==''){
      item[c.field]=' ';
    }
    if(item[c.field].toString().toLowerCase().indexOf(columnFilters[columnId].toLowerCase())===-1){
        return false;
    }
      }
    }
    return true;
}
function resize_control(){
  var h=$(window).height();
  var w=$(window).width();


  $('#grid_phongban').css({'height':($(window).height())-35+'px'});
  // $(".slick-viewport").height(($("#grid_phongban").height()/2)-45+'px');


  $('#myGrid').css({'height':(h-395)+'px'});
  // $(".slick-viewport").height($("#myGrid").height()-335+'px');
  // grid.resizeCanvas();


  $('#myGrid2').css({'height':($(window).height()/8)+180+'px'});
  // $(".slick-viewport").height(($("#myGrid2").height()/5)+150+'px');
  grid.resizeCanvas();

}
 
</script>