<script language="JavaScript" src="js/SlickGrid-2.0-frozen/lib/firebugx.js"></script>

<script src="js/SlickGrid-2.0-frozen/lib/jquery.event.drag-2.2.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangedecorator.js"></script>
<script src="js/SlickGrid-2.0-frozen/lib/jquery.mousewheel.js"></script>

<script src="js/SlickGrid-2.0-frozen/slick.core.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.editors.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.formatters.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.rowselectionmodel.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.grid.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.dataview.js"></script>
<script src="js/SlickGrid-2.0-frozen/controls/slick.pager.js"></script>
<script src="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.autotooltips.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellselectionmodel.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangeselector.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.groupitemmetadataprovider.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.js"></script>


<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.pager.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.css" type="text/css" media="screen" charset="utf-8" />
 <link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid-edit.css"   type="text/css"/>
 <link rel="stylesheet" href="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.css" type="text/css"/>

<style>
.cell-title {
	font-weight: bold;
}

.cell-effort-driven {
	text-align: center;
}

.cell-selection {
	border-right-color: silver;
	border-right-style: solid;
	background: #f5f5f5;
	color: gray;
	text-align: right;
	font-size: 10px;
}

.slick-row.selected .cell-selection {
	background-color: transparent; /* show default selected row background */
}
.slick-header-column{
	word-wrap: break-word; /* IE 5.5+ and CSS3 */
	white-space: pre-wrap; /* CSS3 */
	white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
	white-space: -pre-wrap; /* Opera 4-6 */
	white-space: -o-pre-wrap; /* Opera 7 */
	overflow: hidden;
	height: auto !important;
	vertical-align: middle;
	text-align:center;
}
.slick-sort-indicator{
	display:none;
}
.textright,.slick-summaryfooter-column{
	text-align:right!important;
}
.headerAlignWithBorder{
	text-align:center!important;
}



.slick-summaryfooter-column {
  background:#53A513;
  border-right: 1px solid silver;
}
.slick-summaryfooter .slick-summaryfooter-status {
  display: inline-block;
  padding: 6px;
}

.slick-summaryfooter .ui-icon-container {
  display: inline-block;
  margin: 2px;
  border-color: gray;
}

.slick-summaryfooter .slick-summaryfooter-nav {
  display: inline-block;
  float: left;
  padding: 2px;
}

.slick-summaryfooter .slick-summaryfooter-settings {
  display: block;
  float: right;
  padding: 2px;
}

.slick-summaryfooter .slick-summaryfooter-settings * {
  vertical-align: middle;
}

.slick-summaryfooter .slick-summaryfooter-settings a {
  padding: 2px;
  text-decoration: underline;
  cursor: pointer;
}

.slick-footer-columns, .slick-footerrow-columns {
  white-space: nowrap;
  cursor: default;
  overflow: hidden;
}

.slick-footer-column.ui-state-default {
  position: relative;
  display: inline-block;
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  height: 16px;
  line-height: 16px;
  margin: 0;
  padding: 4px;
  border-right: 1px solid silver;
  border-left: 0px;
  border-top: 0px;
  border-bottom: 0px;
  float: left;
}

.slick-footerrow-column.ui-state-default {
  padding: 4px;
}


.grid-canvas{
	background-color:#FBFAF5 !important;
}
.slick-cell.selected,.grid-canvas>.active {
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
.grid-canvas .slick-group .slick-group-title{
	height:22px;
	display:inline-flex;
}
.slick-header-columns {
	display:flex;
}
.textright,.slick-summaryfooter-column{
	text-align:right!important;
}
.ghi-chu,.emr-tooltip{
	width:100%;
	height:100%;
}
.font-bold{
	font-weight:bold !important;
}
.ceo-edit{
	background:#fff !important
}

.pw-protect{
	background: #aaaaaa;
	opacity: 0;
	position:relative;
	top: 0;
	left: 0;
	width: 100%;
	height:100%;
	z-index:999;
}
mau-xam.{
	background:#d2dbce;
	height:100%;
}
.textcenter{
	text-align:center;	
}
.slick-header-columns {
    white-space: pre !important;
    height: 40px;
}
#footer_dshentrakq{
	display:none;
}
.slick-footer.ui-state-default, .slick-footerrow.ui-state-default {
  width: 4425px;
  overflow: hidden;
  border-left: 0px;
}
.slick-headerrow-column input {
    width: 99%;
}
.top-control{
	height:30px;
	width:100%;
	border:#ccc solid 1px;
	border-radius:4px;
}
.slick-pane-right div[id$='STT_summary'],
.slick-pane-right div[id$='TenNhanVien_summary']{
	display:none;
}
.bongmo{
	background: #aaaaaa;
	opacity: .3;	
}
#n_dangtaidulieu{
	position:relative;
	top: -48%;
	left: 45%;
	z-index:999;
	padding: 3px;
	margin: 5px;
	height:22px;
	width:140px;
	text-align: center;
	font-weight: bold;
	display: block;
	border:solid 2px #DFD9C3;
	font-size:13px;
	background:#FBFAF5;
	color:#55A616;
	box-shadow: 2px #919191;
}
.slick-row:hover .emr-cell{
	background:#C7EDFC;
}
.color-red{
	color:#C00;
}
.backgroup-yellow{
	background:#FF9;
}
.backgroup-red{
	background:#C30;
}
.backgroup-gray{
	background:#999;
}
.backgroup-pink{
	background:pink;
}
</style>
<body id="id-body">

<div class="top-control">
<label for="tungay">Từ ngày:</label> <input type="text" id="tungay" style="width:80px; text-align:center"  value="<?php echo date('d/m/Y'); ?>"  /> <label for="denngay">Đến ngày:</label> <input type="text" id="denngay"  style="width:80px; text-align:center" value="<?php echo date('d/m/Y'); ?>" /> <button id="xem">Xem</button>
<input type="checkbox" id="datrakq" style="margin-left:20px;"> <label for="datrakq">Tất cả (bao gồm đã trả KQ)</label>
</div>
<div id="grid_dshentrakq"  style="width:100%;height:350px;"></div>
<div id="footer_dshentrakq"></div>
<div id="n_dangtaidulieu" style="display:none">Đang tải dữ liệu...</div>
</body>
</html>
<script type="text/javascript">
jQuery(document).ready(function(){
	$("#tungay").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		 showButtonPanel: true,
		dateFormat: $.cookie("ngayJqueryUi"),  
		onClose: function(selectedDate) {
			$("#denngay").datepicker("option", "minDate", selectedDate);
		},
		onSelect: function(dat, inst) {

		}
	});
	$("#denngay").datepicker({
		showWeek: true,
		defaultDate: "+1w",
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 1,
		showButtonPanel: true,
		gotoCurrent:true,
		dateFormat: $.cookie("ngayJqueryUi"),   
		onClose: function(selectedDate) {

		},
		onSelect: function(dat, inst) {
		}
	});
window.columnFilters = {};
$("#xem").button();
create_grid_hentrakq();
});


function create_grid_hentrakq(){		
		$('#grid_dshentrakq').css({'height': $(window).height()-30+'px'});
	 	$('#grid_dshentrakq').css({'width' : $(window).width()-20+'px'});	
	 	window.dataView_dshentrakq='';
		window.grid_dshentrakq;
		var data_dshentrakq = [];
		var selectedRowIds = [];
		
		var options = {
		 	 editable: true
			,enableCellNavigation: true
			,asyncEditorLoading: true
			,forceFitColumns: false
			,autoEdit: false
			,topPanelHeight: 30
			//,frozenColumn: 0			
			,headerRowHeight: 30
			,showHeaderRow: true
		};

		var columns = [
			//{name:'STT',id:'STT',field: "STT", width:30,cssClass: "", sortable: true},
			{name:'Mã BN',id:'MaBN',field: "MaBN",cssClass: "", width:50, sortable: true,formatter: ToMauMaBN},
			{name:'Họ tên BN',id:'HoTenBN',field: "HoTenBN",cssClass: " ", width:160, sortable: true,formatter: GhiChu},
			{name:'Điện thoại',id:'DienThoai',field: "DienThoai",cssClass: " ", width:80, sortable: true},
			{name:'Địa chỉ',id:'DiaChi',field: "DiaChi",cssClass: " ", width:300, sortable: true,formatter: GhiChu},
			{name:'Ngày vào khám',id:'NgayVaoKham',field: "NgayVaoKham",cssClass: " ", width:100, sortable: true},
			{name:'Ngày hẹn trả KQ',id:'NgayHenTraKQ',field: "NgayHenTraKQ",cssClass: " ", width:100, sortable: true,formatter: NgayHenTraKQ},
			{name:'Người hẹn trả KQ',id:'NguoiHenTraKQ',field: "NguoiHenTraKQ",cssClass: " ", width:160, sortable: true},
			{name:'Trạng thái',id:'TrangThai',field: "TrangThai",cssClass: " ", width:100, sortable: true},
			{name:'BS Khám chính',id:'HoTenBS',field: "HoTenBS",cssClass: " ", width:160, sortable: true},
			{name:"Đã trả KQ", id: "DaTraKQ", field: "DaTraKQ", width: 50 ,cssClass: "textcenter", sortable: true, editor: Slick.Editors.Checkbox,formatter: ViewCheckBox},
		];

		
		selectActiveRow =  false;
		var selectedRows = [];
		window.sortcol = "STT";
		window.sortdir = 1;
		window.percentCompleteThreshold = 0;
		window.searchString = "";
		//window.dataView_dshentrakq = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });	
		window.dataView_dshentrakq = new Slick.Data.DataView();
		window.grid_dshentrakq = new Slick.Grid("#grid_dshentrakq", window.dataView_dshentrakq, columns, options);
		

		//window.pager = new Slick.Controls.Pager(window.dataView_dshentrakq, window.grid_dshentrakq, $("#footer_dshentrakq"));
		//window.summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_dshentrakq, window.grid_dshentrakq, $("#footer_dshentrakq"));
		window.columnpicker = new Slick.Controls.ColumnPicker(columns, window.grid_dshentrakq, options);
		
		window.grid_dshentrakq.setSelectionModel(new Slick.CellSelectionModel());	
		//window.grid_dshentrakq.setSelectionModel(new Slick.RowSelectionModel());
		selectActiveRow = true;
        window.grid_dshentrakq.setSelectionModel(new Slick.RowSelectionModel({
            selectActiveRow: true
        }));
		
		plugin = new Slick.AutoTooltips();
		window.grid_dshentrakq.registerPlugin(plugin);
		
			$(window.grid_dshentrakq.getHeaderRow()).delegate(":input", "change keyup", function (e) {
			  var columnId = $(this).data("columnId");
			  if (columnId != null) {
				columnFilters[columnId] = $.trim($(this).val());
				window.dataView_dshentrakq.refresh();
				/*setTimeout(function(){
					$("#grid_dshentrakq .slick-headerrow .slick-summaryfooter").remove();
					$("#grid_dshentrakq .slick-headerrow").prepend($("#footer_dshentrakq").html());
				},500);*/
			  }window.grid_dshentrakq.invalidate()
			});
			
			window.grid_dshentrakq.onHeaderRowCellRendered.subscribe(function(e, args) {
				$(args.node).empty();
				$("<input type='text'>")
				   .data("columnId", args.column.id)
				   .val(columnFilters[args.column.id])
				   .appendTo(args.node);
			});
			
			
			 window.grid_dshentrakq.onClick.subscribe(function (e,args) {
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
				//alert(selectedRows);
				window.grid_dshentrakq.setSelectedRows(selectedRows);
				  
			});

			window.grid_dshentrakq.onColumnsResized.subscribe(function(e, args) {
				$("[id$='STT_summary']").width($("[id$='STT']").width());
				$("[id$='HoTenNhanVien_summary']").width($("[id$='HoTenNhanVien']").width());

				$("[id$='STT_summary']").text(window.grid_dshentrakq.getDataLength());
		
			});	
			
			window.grid_dshentrakq.onCellChange.subscribe(function(e,args){
				//var ids=window.dataView_dshentrakq.getItem(args.row).id;
				if(window.dataView_dshentrakq.getItem(args.row).DaTraKQ==1){
					t= confirm("Bạn muốn cập nhật đã trả kết quả của lượt này?");
				}else{
					t= confirm("Bạn muốn cập nhật hủy trả kết quả của lượt này?");
				}
				if(t==1){
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=a',{
						ID_LuotKham: window.dataView_dshentrakq.getItem(args.row).ID_LuotKham
						,DaTraKQ: window.dataView_dshentrakq.getItem(args.row).DaTraKQ
					}).done(function(a){
						loaddata_dshentrakq();
						tooltip_message("Đã lưu");
						
					});
				}
				
			});	

            // move the filter panel defined in a hidden div into an inline secondary grid header row
            var $secondaryRow = window.grid_dshentrakq.getTopPanel();

            $("#inlineFilterPanelL")
                .appendTo($secondaryRow[0])
                .show();

			$("#inlineFilterPanelR")
                .appendTo($secondaryRow[1])
                .show();

            window.grid_dshentrakq.onCellChange.subscribe(function(e,args) {
                window.dataView_dshentrakq.updateItem(args.item.id,args.item);
            });

			window.grid_dshentrakq.onMouseEnter.subscribe(function(e) {
				var cell = this.getCellFromEvent(e);

				this.setSelectedRows([cell.row]);
                e.preventDefault();
			});

			window.grid_dshentrakq.onMouseLeave.subscribe(function(e) {
				this.setSelectedRows([]);
                e.preventDefault();
			});

			window.grid_dshentrakq.onSelectedRowsChanged.subscribe(function(e) {
                selectedRowIds = [];
                var rows = window.grid_dshentrakq.getSelectedRows();
                for (var i = 0, l = rows.length; i < l; i++) {
                    var item = window.dataView_dshentrakq.getItem(rows[i]);
                    if (item) selectedRowIds.push(item.id);
                }
            });
			

			window.grid_dshentrakq.onSort.subscribe(function(e, args) {
                sortdir = args.sortAsc ? 1 : -1;
                sortcol = args.sortCol.field;
				window.dataView_dshentrakq.sort(comparer, args.sortAsc);
             //   if ($.browser.msie && $.browser.version <= 8) {
                    // using temporary Object.prototype.toString override
                    // more limited and does lexicographic sort only by default, but can be much faster

                    /*var percentCompleteValueFn = function() {
                        var val = this["percentComplete"];
						alert(val);
                        if (val < 10)
                            return "00" + val;
                        else if (val < 100)
                            return "0" + val;
                        else
                            return val;
                    };*/

                    // use numeric sort of % and lexicographic for everything else
                  //  window.dataView_dshentrakq.fastSort((sortcol=="percentComplete")?percentCompleteValueFn:sortcol,args.sortAsc);
               // }
               // else {
                    // using native sort with comparer
                    // preferred method but can be very slow in IE with huge datasets
                //    window.dataView_dshentrakq.sort(comparer, args.sortAsc);
               // }
            });

			// wire up model events to drive the grid
			window.dataView_dshentrakq.onRowCountChanged.subscribe(function(e,args) {
				window.grid_dshentrakq.updateRowCount();
                window.grid_dshentrakq.render();
			});

			window.dataView_dshentrakq.onRowsChanged.subscribe(function(e,args) {
				window.grid_dshentrakq.invalidateRows(args.rows);
				window.grid_dshentrakq.render();
				
				$("[id$='STT_summary']").width($("[id$='STT']").width());
				
				$("[id$='STT_summary']").text(window.grid_dshentrakq.getDataLength());

				if (selectedRowIds.length > 0)
				{
					// since how the original data maps onto rows has changed,
					// the selected rows in the grid need to be updated
					var selRows = [];
					for (var i = 0; i < selectedRowIds.length; i++)
					{
						var idx = window.dataView_dshentrakq.getRowById(selectedRowIds[i]);
						if (idx != undefined)
							selRows.push(idx);
					}

					window.grid_dshentrakq.setSelectedRows(selRows);
				}
			});

			window.dataView_dshentrakq.onPagingInfoChanged.subscribe(function(e,pagingInfo) {
				var isLastPage = pagingInfo.pageSize*(pagingInfo.pageNum+1)-1 >= pagingInfo.totalRows;
                var enableAddRow = isLastPage || pagingInfo.pageSize==0;
                var options = window.grid_dshentrakq.getOptions();

                if (options.enableAddRow != enableAddRow)
    				window.grid_dshentrakq.setOptions({enableAddRow:enableAddRow});
			});
			
			
		/*window.grid_dshentrakq.onClick.subscribe(function(e, args) {
			var item = args.item;
			 var cell = window.grid_dshentrakq.getCellFromEvent(e);
			//dataView=window.dataView_dshentrakq.getItem(args.row);// lay data cua dong dang select
			window.grid_dshentrakq.setSelectedRows(cell.row);
    		 e.stopPropagation();

			// or dataView.getItem(args.row);
		});*/
			
			
			
			window.grid_dshentrakq.init();

			// initialize the model after all the events have been hooked up
			
			loaddata_dshentrakq();
			
			$("#xem").click(function(e) {
                loaddata_dshentrakq();
            });
			

			$("#gridContainer").resizable();
			$("#datrakq").click(function(e) {
                updateFilter()
            });

}
function updateFilter() {
    dataView_dshentrakq.setFilterArgs({
      percentCompleteThreshold: percentCompleteThreshold
    });
    dataView_dshentrakq.refresh();
  }
function requiredFieldValidator(value) {
	if (value == null || value == undefined || !value.length)
		return {valid:false, msg:"This is a required field"};
	else
		return {valid:true, msg:null};
}

function percentCompleteSort(a,b) {
	return a["percentComplete"] - b["percentComplete"];
}

function comparer(a,b) {
	var x = a[sortcol], y = b[sortcol];
	return (x == y ? 0 : (x > y ? 1 : -1));
}

function toggleFilterRow() {
	window.grid_dshentrakq.setTopPanelVisibility(!window.grid_dshentrakq.getOptions().showTopPanel);
}


function loaddata_dshentrakq(){
	$(".slick-viewport").addClass('bongmo');
	$("#n_dangtaidulieu").show();
	var checkedValue = $("input[name='loc']:checked").val()
	var data = [];
	//grid_12.setData(data);
	window.dataView_dshentrakq.setItems(data);
	var cols = window.grid_dshentrakq.getColumns();
	window.grid_dshentrakq.setColumns(cols);
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_dshentrakq&tungay='+$("#tungay").val()+'&denngay='+$("#denngay").val()).done(function(a){
		$(".slick-viewport").removeClass('bongmo');
		$("#n_dangtaidulieu").hide();
		data=$.parseJSON(a)
		window.grid_dshentrakq.resetActiveCell();
		window.dataView_dshentrakq.beginUpdate();
		window.dataView_dshentrakq.setItems(data);
		window.dataView_dshentrakq.setFilter(filter);
		window.dataView_dshentrakq.endUpdate();
		
		/*setTimeout(function(){
			$("#grid_dshentrakq .slick-headerrow .slick-summaryfooter").remove();
			$("#grid_dshentrakq .slick-headerrow").prepend($("#footer_dshentrakq").html());
			$("[id$='STT_summary']").text(window.grid_dshentrakq.getDataLength());
    		//window.grid_dshentrakq.setSelectedRows([0])
		},500);*/
	});	
}

function number(row, cell, value, columnDef, dataContext) {
	if($.trim(value)=='' || value==0){
		tam='';
	}else{
		tam=(parseInt(value)).formatMoney(0, ',', '.')
	}
	return tam;
}
function TienThuVaoFormatter(value) {
	if($.trim(value)=='' || value==0){
		return 0;
	}else{
		return value.formatMoney(0, ',', '.');
	}
}
function FloatFormatter(value) {
	if($.trim(value)=='' || value==0){
		return 0;
	}else{
		return value;//.formatMoney(0, ',', '.');
	}
}
function NgayHenTraKQ (row, cell, value, columnDef, dataContext) {

	if($.trim(dataContext.TrangThai)=='Sắp đến hẹn'){
		tam='<div class="emr-tooltip emr backgroup-yellow"> '+value+' </div>';
	}else if($.trim(dataContext.TrangThai)=='Đã đến hẹn'){
		tam='<div class="emr-tooltip emr backgroup-red"> '+value+' </div>';
	}else if($.trim(dataContext.TrangThai)=='Quá hẹn'){
		tam='<div class="emr-tooltip emr backgroup-gray"> '+value+' </div>';
	}else{
		tam='<div class="emr-tooltip emr"> '+value+' </div>';
	}
	return tam;
}
function GhiChu (row, cell, value, columnDef, dataContext) {
	if(value==null){
		value='';
	}
	tam="<div class='ghi-chu' title='"+value+"'>"+value+"</div>";
	return tam;
}

function ToMauMaBN (row, cell, value, columnDef, dataContext) {

	if($.trim(dataContext.BHCC)==1){
		tam='<div class="emr-tooltip emr backgroup-pink"> '+value+' </div>';
	}else{
		tam='<div class="emr-tooltip emr"> '+value+' </div>';
	}
	return tam;
}

function filter(item) {
	if (!$('#datrakq').is(':checked') && item["DaTraKQ"] ===1) {
		return false;
	}
    for (var columnId in columnFilters) {
      if (columnId !== undefined && columnFilters[columnId] !== "") {
        var c = window.grid_dshentrakq.getColumns()[window.grid_dshentrakq.getColumnIndex(columnId)];
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
function ViewCheckBox(row, cell, value, columnDef, dataContext) {
	if(value==true){
		tam='<img nam="'+$.trim(value)+'" src="modules/hanhchinh/danhsachhentraketqua/checked.jpg">';
		//tam='<input type="checkbox" hidefocus="" class="editor-checkbox" checked value="1" disabled>';
	}else{
		tam='<img nam="'+$.trim(value)+'" src="modules/hanhchinh/danhsachhentraketqua/unchecked.jpg">';
		//tam='<input type="checkbox" hidefocus="" class="editor-checkbox" value="0" disabled>';
	}
	return tam;
}
</script>