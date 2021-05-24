<!-- Thành NHN - Thiết lập mẫu chuẩn đoán theo hạng mục khám NEW -->
<head>
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
      <div class="title-maucamket" style="height:28px; width:98%; border:1px solid #ccc; margin-top: 4px;width: 99.1%; font-weight:bold; border-radius:3px;">
          <label style="margin-left:5px;line-height: 28px; ">
            Danh sách nhóm mẫu chuẩn đoán 
            <span id="n_dangtaidulieu_grid1" style="color: green">Loading...</span>
          </label>
      </div>
      <div id="grid_phongban" style="margin-top: -5px; border: 1px solid #ccc;width:99%;"></div>
      <div id="n_dangtaidulieu" style="display:none">Đang tải dữ liệu...</div>
  </div>
  <!-- GRID 2 -->
  <div style="width: 75%;float: right; border: 1px solid #fff;">
    <label style="font-weight: bold">Cận lâm sàng: </label><br>
      <span class="custom-combobox">
        <input style="width: 173px;" placeholder="Chọn nhóm CLS" type="text" name="" id="id_nhomcls">
      </span>
      <button id="xemtatca_cls" style="margin-left: 35px">Xem tất cả</button>
      <label style="font-size: 18px;margin-left: 5px;font-weight: bold;" id="tenmauchandoan"></label>
      <!--  -->
    <div style="width: 100%; height: 40%;float: right;border: 1px solid #fff;">
      <div style="width:100%;" id="slickgrid">
        <div class="title-maucamket" style="height:28px; width:98.9%; border:1px solid #ccc; margin-top: 4px; font-weight:bold; border-radius:3px;">
          <label style="margin-left:5px;line-height: 28px;float: left;">
            Danh hạng mục khám
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

          <label id="id_nhomchandoan_grid1" style="display:none ;"></label>
          <label id="id_dialog_grid1" style="display:none ;"></label>
          
          <label id="sum_grid3" style="float: right; margin-top: 6px; color: red"></label>
        </div>
        <div id="myGrid2" style="margin-top: -5px;margin-bottom:4px;width:99%;border: 1px solid #ccc"></div>
        
      </div>
    </div>
  </div>
  <!-- END GRID 2 -->
  </div>

<!-- dialog -->
<div id="dialog-suakho" title="Danh mục template" style="display:none">       
        <table id="rowed3"></table>
          <div id="prowed3"></div>   
</div>

</body>

<script type="text/javascript">




jQuery(document).ready(function() {
   $(window).resize(function() {		 
		   resize_control();
	})
   create_combobox_new('#id_nhomcls',create_nhomcls,'bw','','data_nhomcls',0);
   $("#themhangmuc,#bohangmuc,#xemtatca_cls").button();
   create_grid1();
   create_grid2();
   create_grid_phongban1();

   //dialog
   $( "#dialog-suakho" ).dialog({
      resizable: false,
      autoOpen:false,
      height: 500,
      width: 1000,
      modal: true,
      buttons: {
        // "Lưu": function() {},
        "Thoát": function() {
          $("#id_dialog_grid1").html("");
          $("#dialog-suakho").dialog('close');
          // $('#rowed3').jqGrid("clearGridData");
          // $('#rowed3').jqGrid('GridDestroy');
          // $('#rowed3').remove();
          // $('#rowed3').empty();
          // create_grid().destroy;
        }
      }
    });
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


        // $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_template&id_nhom_template='+window.id_edit1,datatype:'json'}).trigger('reloadGrid');



        // alert(window.dataView_grid1.getItem(args.row).id);
        $("#id_nhomchandoan_grid1").html(window.dataView_grid1.getItem(args.row).id);
        $("#id_dialog_grid1").html(window.dataView_grid1.getItem(args.row).id);
        $("#tenmauchandoan").html("-   Nhóm đang chọn: "+"<span style='color:red'>"+window.dataView_grid1.getItem(args.row).TenNhom+"</span>");
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
        create_grid2();
        // $("#sum_grid3").html("<span style='color:red'>"+"Không có hạng mục nào được chọn."+"</span>");
        //END <-

       
        ///////////////////////////START ->
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
        // $("#dialog-suakho").dialog('open');
        // create_grid();
      });
      window.grid_1.onDblClick.subscribe(function(e, args){
        $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_template&id_nhom_template='+window.id_edit1,datatype:'json'}).trigger('reloadGrid');
        //
        $("#dialog-suakho").dialog('open');
        create_grid();

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
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom').done(function(a){
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
    {id:'ID_LoaiKham_NhomTemplate',field: "ID_LoaiKham_NhomTemplate",width: 0, minWidth: 0, maxWidth: 0, cssClass: "reallyHidden", headerCssClass: "reallyHidden"},

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
    {getter: "TenNhomCLS",
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
$("#xemtatca_cls").click(function(){
  create_grid1();
  loaddata_hangmuckham_chitiet();
  $("#id_nhomcls").val("Cận lâm sàng")
});
  $('#themhangmuc').click(function(){ 
    var id_nhomchandoan=$("#id_nhomchandoan_grid1").html();
    if (id_nhomchandoan=="") {
      alert("Nhóm chẩn đoán chưa được chọn.");
    }else{
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
            ID_NhomTemplate_Parent:window.id_edit1,
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
    }
  })
// }
///Bỏ hạng mục
$('#bohangmuc').click(function(){
   var id_nhomchandoan=$("#id_nhomchandoan_grid1").html();
    if (id_nhomchandoan=="") {
      alert("Nhóm chẩn đoán chưa được chọn.");
    }else{
      var check_cf=confirm("Bạn có muốn bỏ hạng mục khám?");
      if (check_cf==true) {
        var selectedData = [],
        selectedIndexes;
        selectedIndexes = window.grid2.getSelectedRows();  
        var ID_NhomTemplate_Parent=[];
        $.each(selectedIndexes, function (index, value) {
          var item   = window.dataView2.getItem(value); 
          if (item.ID_LoaiKham_NhomTemplate !== undefined) {           
            ID_NhomTemplate_Parent.push(item.ID_LoaiKham_NhomTemplate);
          }
        });
        // console.log(ID_NhomTemplate_Parent);
        $.ajax({
          type: 'POST',
          async : false,
          data:{
            ID_NhomTemplate_Parent_aj:ID_NhomTemplate_Parent
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
    }
})
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
        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmloaikham_idcls&id_nhomcls='+selr+"&id_nhomxephang_parent="+$("#id_nhomchandoan_grid1").html()).done(function(a){
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
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dmloaikham_idcls&id_nhomcls=&id_nhomxephang_parent='+$("#id_nhomchandoan_grid1").html()).done(function(a){
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
  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_mauchuandoan_idnhom&id_nhomtemplate='+$("#id_nhomchandoan_grid1").html()).done(function(a){
    $(".slick-viewport").removeClass('bongmo');
    $("#n_dangtaidulieu_grid3").hide();
    data=$.parseJSON(a);
    window.grid2.resetActiveCell();
    window.dataView2.beginUpdate();
    window.dataView2.setItems(data);
    window.dataView2.setFilter(filter_2);
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
  $('#grid_phongban').css({'height':($(window).height())-1+'px'});
  $('#myGrid').css({'height':(h-395)+'px'});
  $('#myGrid2').css({'height':($(window).height()/8)+180+'px'});
  grid.resizeCanvas();
}


/////////START Grid Danh mục template dialog
jQuery(document).ready(function() {
   load_select();
      /*$("body").bind("contextmenu",function(e){
         return false;
      });*/   
      var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
      var eventer = window[eventMethod];
      var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
      eventer(messageEvent,function(e) {       
        if(e.data=='table'){
         alert("chinh")
        }       
      },false);

  //dialog_none_button("Test",400,400)
  //dialog_none_button("Test1",400,400)
  //parent.postMessage("traodoi","http://192.168.1.24:81/giaidoan2/"); 
  var lastsel; 
  // create_grid();  
  shortcut_key();   
  
    
    //$('#prowed3_center table tr').append("<td>Phis</td>");
    
     
    
})
 //$("#@Model.Id").trigger('reloadGrid', [{page:1}]);
function create_grid(){ 
   $("#rowed3").jqGrid({
    url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_template&id_nhom_template='+$("#id_dialog_grid1").html(),
    datatype: "json", 
    colNames:['Id','Tên mẫu','Nhóm Template','Nội dung','Kết luận','Lời khuyên','Giá tiền','Sử dụng','STT','Người tạo','Thống số kĩ thuật','Thuộc nhóm','IsGroup'],
    colModel:[
      {name:'ID_Template',index:'ID_Template',search:false, width:"100%", editable:false,align:'right',hidden:true},
                        {name:'TenTemplate',index:'TenTemplate', width:"100%", editable:true,align:'center',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
                        {name:'ID_ParentTemplate',index:'ID_ParentTemplate', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",edittype:"select",editoptions: { value: nation},formoptions:{ rowpos:6, colpos:1, elmsuffix:'<a id="add_new2" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}}, 
      {name:'NoiDung',index:'NoiDung', width:"500%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:1}}, 
      {name:'KetLuan',index:'KetLuan', width:"120%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:2, colpos:2}},
                        {name:'LoiKhuyen',index:'LoiKhuyen', width:"120%", editable:true,align:'left',hidden:false,edittype:"textarea",formoptions:{ rowpos:3, colpos:1}},  
                        {name:'GiaTien',index:'GiaTien', width:"50%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:4, colpos:2}},
      {name:'Active',index:'Active', width:"50%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:4, colpos:1},editoptions: {value:"1:0"}}, 
      {name:'STT',index:'STT', width:"50%", editable:true,align:'center',hidden:false,sorttype: 'text', formatter: "text",formoptions:{ rowpos:5, colpos:2}}, 
            {name:'ID_NhanVien',index:'ID_NhanVien', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: nation2},formoptions:{ rowpos:5, colpos:1, elmsuffix:'<a id="add_new" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}},
                        {name:'ExtField2',index:'ExtField2', width:"100%", editable:true,align:'center',hidden:false,edittype:"textarea",formoptions:{ rowpos:3, colpos:2}},
                        {name:'ID_NhomTemplate',index:'ID_NhomTemplate', width:"100%", editable:true,align:'center',hidden:false,formatter:"select",edittype:"select",editoptions: { value: nation3},formoptions:{ rowpos:1, colpos:2, elmsuffix:'<a id="add_new3" class="fm-button ui-state-default ui-corner-all " style="margin-left:30px!important;vertical-align:top;width:16px;height:13px;"  ><span style="margin-top:-2px;margin-right:-22px!important" class="ui-icon ui-icon-circle-plus"></span></a>'}},
                {name:'IsGroup',index:'IsGroup', width:"50%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:6, colpos:2},editoptions: {value:"1:0"}}, 
        ],
  //

    loadonce: true,
    scroll: false,
    modal:true,   
    pager: '#prowed3',  
    rowNum: -1,
    gridview: true,
    pginput:false,
    pgbuttons:false,
    rowList:[],
    sortname: 'ID_Template',
    height:100,
    width: 100,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:false,
    stringResult:true,
    sortorder: "asc",
                grouping:false,
                groupingView : {
                groupField : ['ID_NhomTemplate'],
                        groupColumnShow : [false],
                        groupCollapse : true,
                },
    
  //hoverrows:false,
  //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},  
    
    serializeRowData: function (postdata) {       
      //$("#rowed3").trigger("reloadGrid");   
      //return postdata;
    },
    onSelectRow: function(id){      
      //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");     
    },
    ondblClickRow: function (rowId, rowIndex, columnIndex) {
      $(".ui-icon-pencil").trigger('click'); 
    },
    loadComplete: function(data) {  
      //$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} }); 
      grid_filter_enter("#rowed3");
    },    
    caption: "Danh mục chuẩn đoán"
  }); 
  $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
  $("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options             
    {recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_dialog&oper=edit&hienmaloi=3',closeOnEscape : true,modal: true,recreateForm: true,
         afterSubmit : function(response, postdata) { 
            if(response.responseText==1){
            var success=false;
            var new_id="<?php get_text1("sua_khongthanhcong") ?>";                          
          }else{
            tooltip_message("<?php get_text1("sua_thanhcong") ?>");
            var success=true; 
            var new_id="<?php get_text1("sua_thanhcong") ?>";               
          };            
          return [success,new_id] ;     

        },
        beforeShowForm: function(formid){          
          canhgiua(formid);
          number_textbox('#STT');   

        },
        afterShowForm : function (formid) {
          /*var mota=$("#tr_MoTa").html();
          $("#tr_MoTa").html("");
          var congty=$("#tr_ID_CongTy").html();
          $("#tr_ID_CongTy").html("");
          $("#tr_ID_CongTy").html(mota);
          $("#tr_MoTa").html(congty);*/           
          autocompleted_combobox("#ID_NhanVien,#ID_ParentTemplate,#ID_NhomTemplate");
          xuongdong(formid);
          lendong(formid);          
          $("#add_new").click(function(e){
            
            links='pages.php?module=danhmuc&view=danh_muc_nhan_vien&id_form=47&id_loai=undefined';
            elem=1 + Math.floor(Math.random() * 1000000000); 
            width=90;
            height=90;  
            dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);   
           })
                                         $("#add_new2").click(function(e){
            
            links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
            elem=1 + Math.floor(Math.random() * 1000000000); 
            width=90;
            height=90;  
            dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select2);   
           })
                                         $("#add_new3").click(function(e){
            
            links='pages.php?module=danhmuc&view=danh_muc_nhommauchandoan&id_form=47&id_loai=undefined';
            elem=1 + Math.floor(Math.random() * 1000000000); 
            width=90;
            height=90;  
            dialog_add_dm("Danh mục nhóm mẫu chuẩn đoán",width,height,elem,links,load_select3);   
           })
        },
        onClose : function(formid){
          $("#editmodrowed3").css("box-shadow","");                   
        }
                
    }, // edit options
    {height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_dialog&oper=add&hienmaloi=a',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
        ,afterSubmit : function(response, postdata){
          temp = String(response.responseText).split(";");         
          if(temp[0]==1){
            var success=false;
            var new_id="<?php get_text1("luu_khongthanhcong") ?>";                          
          }else{
            tooltip_message("<?php get_text1("luu_thanhcong") ?>");
            var success=true; 
            var new_id="<?php get_text1("luu_thanhcong") ?>";
            //load_phongban_cha()
                            
          };            
          return [success,new_id];
        },
        afterComplete : function (response, postdata, formid) {
          temp = String(response.responseText).split(";");                    
          $("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
          $("#"+$.trim(temp[1]+"> td")).trigger("click");         
          window.id_rowed3++; 
        
        },
        beforeSubmit : function(postdata, formid){
          if (typeof(window.id_rowed3)=='undefined'){
             window.id_rowed3=1;
          }
          var success=true;
          var new_id="";
          return [success,new_id];  

        },
        beforeShowForm: function(formid) {           
           canhgiua(formid);  
           number_textbox('#STT');  
          
          $("#ID_NhanVien").val("<?=$_SESSION['user']['id_user']?>");    
        },                   
        afterShowForm : function (formid) {         
          autocompleted_combobox("#ID_NhanVien,#ID_ParentTemplate,#ID_NhomTemplate");
          xuongdong(formid);
          lendong(formid);       
           $("#add_new").click(function(e){
            
            links='pages.php?module=danhmuc&view=danh_muc_nhan_vien&id_form=47&id_loai=undefined';
            elem=1 + Math.floor(Math.random() * 1000000000); 
            width=90;
            height=90;
            dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select1);     
           })
                                         $("#add_new2").click(function(e){
            
            links='pages.php?module=danhmuc&view=danh_muc_mauchandoan&id_form=47&id_loai=undefined';
            elem=1 + Math.floor(Math.random() * 1000000000); 
            width=90;
            height=90;  
            dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select2);   
           })
                                          $("#add_new3").click(function(e){
            
            links='pages.php?module=danhmuc&view=danh_muc_nhommauchandoan&id_form=47&id_loai=undefined';
            elem=1 + Math.floor(Math.random() * 1000000000); 
            width=90;
            height=90;  
            dialog_add_dm("Danh mục mẫu chuẩn đoán",width,height,elem,links,load_select3);   
           })
        },
        onClose : function(formid){
          $("#editmodrowed3").css("box-shadow","");         
        }
    }, // add options               
    {reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_dialog&oper=del', navkeys : [ true, 38, 40 ],closeOnEscape : true,
      beforeShowForm : function(formid) {canhgiua_del(formid);},  
        afterSubmit : function(response, postdata) {        
              if(response.responseText==1){
                var success=false;
                var new_id="<?php get_text1("xoa_khongthanhcong") ?>";                          
                }else{
                tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
                var success=true; 
                var new_id="<?php get_text1("xoa_thanhcong") ?>";
                              
              };            
              return [success,new_id] ;
        }   
    }, // del options
    {reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
        /*beforeShowSearch:function(formid){        
        }*/ // search options   
    } // search options            
                
  );              
  $("#rowed3").setGridWidth(($(window).width()/4)+620);
  $("#rowed3").setGridHeight(($(window).height()/4)+110);
  $("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
    } } );  
    $("#gbox_rowed3").attr("tabindex","1");
    //$("#gbox_rowed3").focus();  
    $("#gbox_rowed3").bind('keydown', function(e) {     
      if((jwerty.is("ctrl+m",e))){     
         $("#rowed3").jqGrid('restoreRow', lastsel);
         $("#rowed3").jqGrid('editRow', rowid, true);
         lastsel = rowid;
      }
    })
}

function load_select1(){
  window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_nhanvien&id=ID_nhanvien&name=Tennhanvien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText; 
  $("#rowed3").setColProp('ID_nhanvien', { editoptions: { value: xaphuong} });
  $('#ID_nhanvien').empty();
  create_select("#ID_nhanvien",xaphuong);
}
function load_select2(){
  window.xaphuong2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_template&id=ID_template&name=Tentemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục mẫu chuẩn đoán');}}).responseText; 
  $("#rowed3").setColProp('ID_template', { editoptions: { value: xaphuong2} });
  $('#ID_template').empty();
  create_select("#ID_template",xaphuong2);
}
function load_select3(){
  window.xaphuong3 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_Nhomtemplate&id=ID_Nhomtemplate&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm mẫu chuẩn đoán');}}).responseText;  
  $("#rowed3").setColProp('ID_NhomTemplate', { editoptions: { value: xaphuong3} });
  $('#ID_NhomTemplate').empty();
  create_select("#ID_NhomTemplate",xaphuong3);
}

function load_select(){
  window.nation2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nhanvien&id=ID_nhanvien&name=Tennhanvien', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;  
        window.nation = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_template&id=ID_template&name=Tentemplate', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục mẫu chuẩn đoán');}}).responseText;
        window.nation3 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhomTemplate&id=ID_NhomTemplate&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm mẫu chuẩn đoán');}}).responseText;
}
 

//END
 
</script>