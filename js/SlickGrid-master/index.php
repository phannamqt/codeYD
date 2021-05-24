
       
        
    <script src="js/SlickGrid-master/lib/jquery.event.drag-2.2.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellrangedecorator.js"></script>
	<script src="js/SlickGrid-master/plugins/slick.cellrangeselector.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.cellselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.core.js"></script>
    <script src="js/SlickGrid-master/slick.formatters.js"></script>
    <script src="js/SlickGrid-master/slick.editors.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.rowselectionmodel.js"></script>
    <script src="js/SlickGrid-master/slick.grid.js"></script>
    <script src="js/SlickGrid-master/slick.dataview.js"></script>
    <script src="js/SlickGrid-master/controls/slick.pager.js"></script>
    <script src="js/SlickGrid-master/controls/slick.columnpicker.js"></script>
    <script src="js/SlickGrid-master/slick.groupitemmetadataprovider.js"></script>
    <script src="js/SlickGrid-master/plugins/slick.summaryfooter.js"></script>
   
  
     <link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css"   type="text/css"/>
     <link rel="stylesheet" href="js/SlickGrid-master/plugins/slick.summaryfooter.css" type="text/css"/>
<style>

div[id$="ThanhTienTon_summary"] ,div[id$="ThanhTienNhapTrongKy_summary"],div[id$="ThanhTienXuatTrongKy_summary"]{ 
		text-align:right!important;
font-weight: bold!important;
}

.slick-footer.ui-state-default, .slick-footerrow.ui-state-default {
  width: 100%;
  overflow: hidden;
  border-left: 0px;
}

.slick-summaryfooter {
  width: 100%;
  height: 26px;
  border: 1px solid gray;
  border-top: 0;
  background: url('../images/header-columns-bg.gif') repeat-x center bottom;
  vertical-align: middle;
}

.slick-summaryfooter-column {
  background: url('../images/header-columns-bg.gif') repeat-x center bottom;
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





.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}
/*	.slick-row:not(.slick-group) {
		margin-left:20px;	
	};*/
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
.slick-row.totals .slick-cell {
    background: #eee;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
   
    font-weight: normal!important;
	font-size:12px!important;
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
.ui-menu {
	width: 180px;
	display:none;
	position:absolute;
	box-shadow:0px 0px 3px #333;
	z-index:100000;
}
.textright{
	text-align:right!important;
}
#menu_toggle{
	font-size:12px;
	padding:5px 0px;
	background:url("js/grid/themes/south-street/images/ui-bg_highlight-hard_15_459e00_1x100.png") repeat-x scroll #459E00;
	border:#CCC 1px dashed;
}
#rowed6_frozen tr.rowed6ghead_0 td,
#rowed6_frozen tr.rowed6ghead_1 td{
	font-weight:bold !important;
}

 .dialog_dm_thuoc,.dialog_dm_duongdung{
 					position:absolute;
					z-index:1000000;
					display:none;
					box-shadow:0px 0px 6px #333
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
.frozen-div table.ui-jqgrid-htable{
	height:54px;

}
.frozen-div table.ui-jqgrid-htable tr.ui-jqgrid-labels{
	height:31px;
}
div.frozen-div{
	height:54px!important;
}
#rowed6_frozen{
	margin-top:-1px;
}
td.classsoluongton{
	font-weight:bold !important;
}
</style>

<body>
<div id="dialog_excel" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Vui lòng chọn loại xuất Excel</p>
  <select id="excel">
  <option value="1">Báo cáo tổng hợp thuốc nội trú hàng ngày</option>
  <option value="2">Báo cáo tổng hợp thuốc nội trú theo tháng</option>
  <option value="4">Báo cáo tổng hợp thuốc ngoại trú hàng ngày</option>
  <option value="5">Báo cáo tổng hợp thuốc ngoại trú theo tháng</option>
  <option value="3" selected>Báo cáo tổng hợp xuất nhập tồn</option>
  <option value="6">Báo cáo tổng hợp thuốc trả lại hàng ngày</option>
  <option value="7">Báo cáo tổng hợp thuốc trả lại theo tháng</option>
</select><br>
	<div style="margin-top:10px; display:none;padding-left:23px " id="option2_">Tháng
    	  <select id="option2_month">
              <option value="1">01</option>
              <option value="2">02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
              <option value="6">06</option>
              <option value="7">07</option>
              <option value="8">08</option>
              <option value="9">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
		</select> năm <select id="option2_year">
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
		</select>
        
    </div>
</div>
<div id="dialog-confirm" title="Thông báo" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Vui lòng chọn kho trước khi thực hiện chức năng này</p>
</div>
<ul id="menu" >
    <li><a id="taophieuxuatdieuchinh" href="#"><span class="ui-icon ui-icon-document"></span>Tạo phiếu xuất điều chỉnh</a></li>
    <li><a id="uutienxuat" href="#"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Ưu tiên xuất</a></li>
    <li><a id="xemphieunhap" href="#"><span class="ui-icon ui-icon-document-b"></span>Xem phiếu nhập</a></li>
</ul>
	<div  class="dialog_dm_thuoc" style="display:none">
    <table id="DM_thuoc">
    </table>

 </div>

 <div id="panel_main1">
		<div id="grid_phong_ban" style="display:inline-block">
			<label for="from_day" style=" margin-left:15px;">Từ ngày:</label><input type="text" style="width:70px; text-align:center" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<label for="to_day"  style=" margin-left:5px;">Đến ngày:</label><input type="text" style="width:70px; text-align:center" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
           <label for="makho" style="margin-left:5px;">Tên kho:</label>
            <span class="custom-combobox">
           	  <input id='makho' class='makho'style="width:160px; height:20px" >
           </span>
              <input id='makho1' class='makho1'  style="width:200px;display:none">
           <label for="com_nhacungcap" style="margin-left:35px;">Nhà cung cấp:</label>
           <span class="custom-combobox">
           	  <input id='com_nhacungcap' class='com_nhacungcap'style="width:160px; height:20px" >
           </span>
              <input id='com_nhacungcap1' class='com_nhacungcap1'  style="width:200px;display:none">
               <a href="#" id="in" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:5px;width:45px; margin-left:40px; margin-top:-4px; ">In<span class="ui-icon ui-icon-print"></span></a>
                <a href="#" id="xuatexcel" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:5px;width:80px; margin-top:-4px; ">Xuất excel<span class="ui-icon ui-icon-document"></span></a>
                 <a href="#" id="xem" class=" ui-widget ui-state-default ui-corner-all fm-button-icon-left" style="margin-left:5px; margin-top:-4px; ">Xem<span class="ui-icon ui-icon-refresh"></span></a>
		  <span style='margin-left:30px;'><input type='checkbox' id='NCC' />Nhóm theo nhà cung cấp</span>
        </div>
      
	</div>
<!--	<div id="grid_phong_ban" style="width:2500px;">
          <table id="rowed6" ></table>
           
    </div>-->
    
          <div style="width:1330px;height:530px;" id="slickgrid">
          <div id="myGrid" style="width:100%;height:510px;"></div>
          <div id="footer3"  style="width:100%;height:20px;"></div> 
          </div>
</body>
</html>




<script type="text/javascript">
jQuery(document).ready(function() {
	
	window.idncc_search=0;
	 window.dataView;
 	 window.grid;
	 	$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order=ORDER BY TenBietDuoc,STT_UUTIEN,SoLo").done(function(data){
			data=$.parseJSON(data)
			dataView.setItems(data);
		})
 	 var data = [];
 	 var options = {
		enableCellNavigation: true,
		showHeaderRow: true,
		headerRowHeight: 30,
		explicitInitialization: true,
		forceFitColumns: true,
 	 };
  window.columns = [
		 		 	
			{name:'ID',id:'MaThuoc',field: "MaThuoc",width: 30 },		 
			{name:'Tên thuốc',id:'TenThuoc',field: "TenThuoc",width: 130, sortable: true},	 			
			{name:'ĐVT',id:'TenDonViTinh',field: "TenDonViTinh",width: 35},			
			{name:'Số lô HT',id:'SoLoHeThong',field: "SoLoHeThong",width: 75},	
			{name:'Số lô NSX',id:'SoLoNSX',field: "SoLoNSX",width: 70},                      
			{name:'Giá vốn',id:'GiaVon',field: "GiaVon",width: 55,formatter: number,cssClass: "textright"},
            {name:'Giá bán',id:'GiaBan',field: "GiaBan",width: 55,formatter: number,cssClass: "textright"},
			{name:'SL tồn đầu',id:'SoLuongTonDau',field: "SoLuongTonDau",width: 70,formatter: number,cssClass: "textright"},
			{name:'TT tồn đầu',id:'ThanhTienTonDau',field: "ThanhTienTonDau",width: 70,formatter: number,cssClass: "textright", hasTotal: true},				 
            {name:'SL nhập trong kỳ',id:'SoLuongNhapTrongKy',field: "SoLuongNhapTrongKy",width: 60,formatter: number,cssClass: "textright"},
            {name:'TT nhập trong kỳ',id:'ThanhTienNhapTrongKy',field: "ThanhTienNhapTrongKy",width: 100,formatter: number,cssClass: "textright",summaryFormatter: costFormatter},
			{name:'SL xuất trong kỳ',id:'SoLuongXuatTrongKy',field: "SoLuongXuatTrongKy",width: 60,formatter: number,cssClass: "textright"},
            {name:'TT xuất trong kỳ',id:'ThanhTienXuatTrongKy',field: "ThanhTienXuatTrongKy",width: 100,formatter: number,cssClass: "textright",summaryFormatter: costFormatter},			
			{name:'SL tồn',id:'SoLuongTon',field: "SoLuongTon",width: 60,formatter: number,cssClass: "textright", groupTotalsFormatter: sumTotalsFormatter},
			{name:'TT tồn',id:'ThanhTienTon',field: "ThanhTienTon",width: 100,formatter: number,cssClass: "textright",summaryFormatter: costFormatter},
            {name:'Hạn sử dụng',id:'HanSuDung',field: "HanSuDung",width: 60},
            {name:'Ưu tiên xuất',id:'UuTienXuat',field: "UuTienXuat",width: 30},          
            {name:'Nhà cung cấp',id:'TenNhaCungCap',field: "TenNhaCungCap",width: 150},
		
  			
		
  
  ];



 window.columnFilters = {};

 function filter(item) {
        // Regex pattern to validate numbers
        var patRegex_no = /^[$]?[-+]?[0-9.,]*[$%]?$/; // a number negative/positive with decimals with/without $, %
			if(idncc_search!=0){
					if(item['ID_NhaCungCap']!=idncc_search){
							return false; 
					}
			}
				
        for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
				
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); // grab the 1st Char of the filter field, so we could detect if it's a condition or not
	
                if(item[c.field] == null)
                    return false;
				
                if( filterChar1 == '<' || filterChar1 == '>' || filterChar1 == '!' || filterChar1 == '=') {                  
                    var idxFilterSpace = filterVal.indexOf(" ");
                    if( idxFilterSpace > 0 ) {
                        var condition = filterVal.substring(0, idxFilterSpace);
                        filterNoCondVal = columnFilters[columnId].substring(idxFilterSpace+1);                       
                        if( patRegex_no.test(item[c.field]) ) {                             
                            if( testCondition(condition, parseFloat(item[c.field]), parseFloat(filterNoCondVal)) == false ) 
                                return false;                       
                        }else {                             
                            if ( testCondition(condition, item[c.field].toLowerCase(), filterNoCondVal.toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{
					if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
					 return false;
					}
                 
                }
            }
        }
        return true;
    }


    function testCondition(condition, value1, value2){
        switch(condition) {
            case '<':   var resultCond = (value1 < value2) ? true : false;
                        break;
            case '<=':  var resultCond = (value1 <= value2) ? true : false;
                        break;
            case '>':   var resultCond = (value1 > value2) ? true : false;
                        break;
            case '>=':  var resultCond = (value1 >= value2) ? true : false;
                        break;
            case '!=':  
            case '<>':  var resultCond = (value1 != value2) ? true : false;
                        break;
            case '=':   
            case '==':  var resultCond = (value1 == value2) ? true : false;
                        break;          
        }
        return resultCond;
    }
  $(function () {
	    var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();		
		
	  	dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });	
		
			/*var totalsPlugin = new TotalsPlugin(1395);
		   dataProvider = new TotalsDataView(dataView, columns);*/
          	 
    	grid = new Slick.Grid("#myGrid", dataView, columns, options);	
		grid.registerPlugin(groupItemMetadataProvider);	
		var summaryfooter = new Slick.Controls.SummaryFooter(dataView, grid, $("#footer3"));
		// grid.registerPlugin(totalsPlugin);
		var columnpicker  = new Slick.Controls.ColumnPicker(columns, grid, options);
		dataView.onRowCountChanged.subscribe(function (e, args) {
			grid.updateRowCount();
			grid.invalidateRows(args.rows);
			grid.render();
			resize_control();
  		});
	  	dataView.setGrouping([					   
					   {
						getter: "MaThuoc",
						formatter: function (g) {
							 var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
							 return "<strong>" + g['rows'][0]['TenThuoc'] + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
							},	
						aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
						  aggregateCollapsed: false,     
						  collapsed: false,
						  lazyTotalsCalculation: false,
						  displayTotalsRow: false,
						  },
							{
						getter: "ID_Kho",
						formatter: function (g) {
							  var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
							  return "<strong>" + g.value + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
							},	
						aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
						aggregateCollapsed: false,     
						collapsed: false,
						lazyTotalsCalculation: false,
						displayTotalsRow: false,
					   }
				   ]
				   );
	  grid.registerPlugin(groupItemMetadataProvider);
      grid.setSelectionModel(new Slick.CellSelectionModel());	
	  grid.setSelectionModel(new Slick.RowSelectionModel());
      dataView.onRowsChanged.subscribe(function (e, args) {
		  grid.invalidateRows(args.rows);
		  grid.render();
		});


  $(grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
        columnFilters[columnId] = $.trim($(this).val());
        dataView.refresh();
      }
    });
	
	  grid.onHeaderRowCellRendered.subscribe(function(e, args) {
        $(args.node).empty();
        $("<input type='text'>")
           .data("columnId", args.column.id)
           .val(columnFilters[args.column.id])
           .appendTo(args.node);
      });
	  
	grid.init();
    dataView.beginUpdate();
		//$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho=1&n_order=ORDER BY TenBietDuoc,STT_UUTIEN,SoLo").done(function(data){
		//	data=$.parseJSON(data)
		//	dataView.setItems(data);
		
			dataView.setFilter(filter);		
 			dataView.endUpdate();
		//})
   })
	openform_shortcutkey();
	var kiemtra=0;
	window.n_action=1;
	$("#xem,#in,#xuatexcel").button();
	shortcut_key();
	 $( "#dialog-confirm" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:165,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
		  $("#makho").focus();
        },
      }
    });
	
	 $( "#dialog_excel" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:230,
      modal: true,
      buttons: {
        "OK": function() {
			switch ($('#excel option:selected').val()) {
    case '1':
        window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuochangngay&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
        break;
    case '2':
       window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuoctheothang&type=excel&thang="+$('#option2_month option:selected').val()+"&nam="+$('#option2_year option:selected').val());
        break;
    case '3':
        if(window.n_action==1){
								  window.open("pages.php?module=report&view=quanlyduoc&action=xuat_excel_baocaotonghopxuatnhapton&type=excel&theonhacungcap=false&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&n_order= ORDER BY TenBietDuoc");
							  }else{
								  window.open("pages.php?module=report&view=quanlyduoc&action=xuat_excel_baocaotonghopxuatnhapton&type=excel&theonhacungcap=true&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&idncc="+window.idncc+"&n_order=");
							  }
        break;
    case '4':
          window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuochangngay_ngoaitru&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
        break;
    case '5':
         window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuoctheothang_ngoaitru&type=excel&thang="+$('#option2_month option:selected').val()+"&nam="+$('#option2_year option:selected').val());
        break;
	 case '6':
          window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuochangngay_tralai&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
        break;
	case '7':
          window.open("pages.php?module=report&view=<?=$modules?>&action=tonghopthuoctheothang_tralai&type=excel&thang="+$('#option2_month option:selected').val()+"&nam="+$('#option2_year option:selected').val());
        break;
		}//case
          $( this ).dialog( "close" );
		},
      }
    });
	
	$("#excel").change(function(){
			$("#option2_month").val('<?= date("m")?>').attr("selected", "selected");
			$("#option2_year").val('<?= date("Y")?>').attr("selected", "selected");
			if($('#excel option:selected').val()==2||$('#excel option:selected').val()==5||$('#excel option:selected').val()==7)
				$("#option2_").show();
			else $("#option2_").hide();
	})
	
	$("#xuatexcel").click(function(e) {
		 //alert();
		 $( "#dialog_excel" ).dialog('open');
	 // if(window.n_action==1){
//		  window.open("pages.php?module=report&view=quanlyduoc&action=xuat_excel_baocaotonghopxuatnhapton&type=excel&theonhacungcap=false&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&n_order= ORDER BY TenBietDuoc");
//	  }else{
//		  window.open("pages.php?module=report&view=quanlyduoc&action=xuat_excel_baocaotonghopxuatnhapton&type=excel&theonhacungcap=true&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&idncc="+window.idncc+"&n_order=");
//	  }
    });

	$("#in").click(function(e) {
     $.cookie("in_status", "print_preview");
	  if(window.n_action==1){
		  $.cookie("in_status", "print_preview");
dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=TongHopNhapXuatTonKhoHangHoa&header=left&type=report&id_form=10&theonhacungcap=false&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&n_order= ORDER BY TenBietDuoc",'TongHopNhapXuatTonKhoHangHoa');
	  }else{
		   $.cookie("in_status", "print_preview");
dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=TongHopNhapXuatTonKhoHangHoa&header=left&type=report&id_form=10&theonhacungcap=true&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&ten_kho="+$("#makho").val()+"&idncc="+window.idncc+"&n_order=",'TongHopNhapXuatTonKhoHangHoa');
	  }
    });
	$(document).bind("mouseup", function(e) {
		$("#menu,#menu2,#menu3").hide();
	});
create_combobox('#com_nhacungcap','#com_nhacungcap1',".data_phanloaikham","#data_phanloaikham",create_nhacungcap,500,300,'Nhà cung cấp','data_nhacungcap','');
create_combobox('#makho','#makho1',".data_phanloaikham2","#data_phanloaikham2",create_kho,500,300,'Kho','data_kho');

$("#from_day").datepicker({
	showWeek: true,
	defaultDate: "+1w",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showButtonPanel: true,
	dateFormat: $.cookie("ngayJqueryUi"),
	maxDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
	onClose: function(selectedDate) {
		$("#to_day").datepicker("option", "minDate", selectedDate);
	},
	onSelect: function(dat, inst) {
	}
});
$("#to_day").datepicker({
	showWeek: true,
	defaultDate: "+1w",
	changeMonth: true,
	changeYear: true,
	numberOfMonths: 1,
	showButtonPanel: true,
	gotoCurrent:true,
	dateFormat: $.cookie("ngayJqueryUi"),
	minDate: new Date(<?php echo date("Y")?>, <?php echo date("m")?>-1, <?php echo date("d")?>),
	onClose: function(selectedDate) {
		$("#from_day").datepicker("option", "maxDate", selectedDate);
	},
	onSelect: function(dat, inst) {
	}
});
	$.dateEntry.setDefaults({spinnerImage: ''});
	$("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
	

	$("#xem").click(function(){
		$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order=ORDER BY TenBietDuoc,STT_UUTIEN,SoLo&hienmaloi=1").done(function(data){
			data=$.parseJSON(data)
			dataView.setItems(data);
			dataView.setFilter(filter);			
 			dataView.endUpdate();
		})
	});
$("#NCC").change(function(event) {
      if($("#NCC").is(':checked')==true){
		dataView.setGrouping([
		{
		getter: "TenNhaCungCap",
		formatter: function (g) {
			  var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
			  return "<strong>" + g.value + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
			},	
		aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
		aggregateCollapsed: true,     
	    collapsed: false,
		lazyTotalsCalculation: false
	   },	   
	   {
		getter: "MaThuoc",
		formatter: function (g) {
			 var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
			 return "<strong>" + g['rows'][0]['TenThuoc'] + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
			},	
		aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
		  aggregateCollapsed: true,     
	      collapsed: false,
		  lazyTotalsCalculation: false
	      }
	   ]
	   );
      }else{
		dataView.setGrouping({
		getter: "MaThuoc",
		formatter: function (g) {
			  var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
			  return "<strong>" + g['rows'][0]['TenThuoc'] + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
			},	
		aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
		  aggregateCollapsed: true,     
	      collapsed: false,
		  lazyTotalsCalculation: false
	   });
	  }
	  });

phanquyen();
})
jQuery(window).resize(function() {
	 resize_control()
});
var rowed6_curentsel;
function create_grid(){
	 myTemplate = {width:80, align:'right', formatter:'integer', sorttype:'integer', summaryType:'sum'};
	 $("#rowed6").jqGrid({
	//	url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+window.idkho+"&idncc="+window.idncc+"&n_order= ORDER BY TenNCC,TenBietDuoc",
		url:'',
		datatype: "json",
		colNames:['ID thuốc','ID thuốc','Tên thuốc','Tên thuốc',"ĐVT","Số lô HT","Số lô NSX", "Giá vốn",'Giá bán', "SL tồn đầu","TT tồn đầu","SL nhập trong kỳ",'TT nhập trong kỳ','SL xuất trong kỳ','TT xuất trong kỳ','SL tồn','TT tồn','Hạn sử dụng','Ưu tiên xuất','ID nhà cung cấp','Nhà cung cấp','Chỉnh sửa'],
		colModel:[

			{name:'MaThuoc',index:'MaThuoc', width:"60",align:'left',hidden:true, editable: true},
			{name:'MaThuoc2',index:'MaThuoc2', width:"60",align:'left',hidden:false, editable: false},
			{name:'TenThuoc',index:'TenThuoc', width:"150",align:'left', editable: false},
			{name:'TenThuoc2',index:'TenThuoc2', width:"150",align:'left', editable: false},
			{name:'TenDonViTinh',index:'TenDonViTinh',width:"50",align:'center',hidden:false, editable: false},
			{name:'SoLoHeThong',index:'SoLoHeThong', width:"70",align:'left', editable: false},
			{name:'SoLoNSX',index:'SoLoNSX', width:"70",align:'left', editable: false},
			{name:'GiaVon',index:'GiaVon', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false},
			{name:'GiaBan',index:'GiaBan', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false},
			{name:'SoLuongTonDau',index:'SoLuongTonDau', width:"40",align:'right', editable: false},
			{name:'ThanhTienTonDau',index:'ThanhTienTonDau', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongNhapTrongKy',index:'SoLuongNhapTrongKy', width:"50",align:'right', editable: false},
			{name:'ThanhTienNhapTrongKy',index:'ThanhTienNhapTrongKy', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongXuatTrongKy',index:'SoLuongXuatTrongKy', width:"50",align:'right', editable: false},
			{name:'ThanhTienXuatTrongKy',index:'ThanhTienXuatTrongKy', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'SoLuongTon',index:'SoLuongTon', width:"70",align:'right', editable: false,formatter:'number', formatoptions:{decimalPlaces: 0},  summaryType:'sum',classes:'classsoluongton'},
			{name:'ThanhTienTon',index:'ThanhTienTon', width:"70",formatter:'number', formatoptions:{decimalPlaces: 0},align:'right',hidden:false, editable: false,  summaryType:'sum'},
			{name:'HanSuDung',index:'HanSuDung', width:"80",align:'center', editable: false},
			{name:'UuTienXuat',index:'UuTienXuat', width:"50",align:'center', editable: false},
			{name:'ID_NhaCungCap',index:'ID_NhaCungCap', width:"50",align:'left',hidden:true, editable: true},
			{name:'TenNhaCungCap',index:'TenNhaCungCap', width:"500",align:'left', editable: false},
			{name:'ChinhSua',index:'ChinhSua',search:false, width:"50",align:'center', editable: false,hidden:true, formatter: function(cellvalue, options, rowObject) {
        return '<span class="ui-icon ui-icon-pencil" title="click to open" onclick="clickme('+options.rowId+');"></span>'; }},
		],

		rownumbers: false,
		treeGrid: false,
		gridview: true,
		ignoreCase:true,
		footerrow: true,
        userDataOnFooter: true,
		loadonce: true,
		local:true,
		forceFit:false,
		scroll: false,
		modal:true,
        shrinkToFit: false,
		rowNum: 1000000,
		rowList:[],
		pager: '#prowed6',
		multiSort: true,
		height:100,
		width:'auto',
		viewrecords: false,
		ignoreCase:true,
		sortorder: "asc",
	    grouping:true,
          groupingView : {
             groupField : ['TenThuoc'],
			 groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			groupSummary : [true],
			groupText : ['<b>{0}</b><span class="tongton"> - Số lượng tồn: <b>{SoLuongTon}</b></span>','<b>{0}</b> - Số lượng tồn: <b>{SoLuongTon}</b>']
       },

		pgbuttons: false, // disable page control like next, back button
        pgtext: null, // disable pager text like 'Page 0 of 10'
		serializeRowData: function (postdata) {


                return postdata;
		},
		onSelectRow: function(id){

		},
		onRightClickRow: function(rowid, iRow, iCol, e) {
			if ($("#menu").width() + e.pageX > $(document).width()) {
				$("#menu").css('left', e.pageX - $("#menu").width() + "px");
			} else {
				$("#menu").css('left', e.pageX + "px");
			}
			if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
				$("#menu").css('top', e.pageY  - $("#menu").height() + "px");
			} else {
				$("#menu").css('top', e.pageY + "px");
			}
			$("#menu").show(300);
			$(document).bind("contextmenu", function(e) {
				return false;
			});
        },
		ondblClickRow: function (rowId, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
			grid_filter_enter("#rowed6");
			if($("#tenthuoc").is(':checked')==true){
		  		$(".tongton").show();
			}else{
				$(".tongton").hide();
			}
		//var GiaVon = $("#rowed6").jqGrid('getCol', 'GiaVon', false, 'sum');
      //  $("#rowed6").jqGrid('footerData', 'set', { 'GiaVon': GiaVon });
		//var GiaBan = $("#rowed6").jqGrid('getCol', 'GiaBan', false, 'sum');
      //  $("#rowed6").jqGrid('footerData', 'set', { 'GiaBan': GiaBan });
		var ThanhTienTonDau = $("#rowed6").jqGrid('getCol', 'ThanhTienTonDau', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienTonDau': ThanhTienTonDau });
		var ThanhTienNhapTrongKy = $("#rowed6").jqGrid('getCol', 'ThanhTienNhapTrongKy', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienNhapTrongKy': ThanhTienNhapTrongKy });
		var ThanhTienXuatTrongKy = $("#rowed6").jqGrid('getCol', 'ThanhTienXuatTrongKy', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienXuatTrongKy': ThanhTienXuatTrongKy });
		var ThanhTienTon = $("#rowed6").jqGrid('getCol', 'ThanhTienTon', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'ThanhTienTon': ThanhTienTon });
		var SoLuongTon = $("#rowed6").jqGrid('getCol', 'SoLuongTon', false, 'sum');
        $("#rowed6").jqGrid('footerData', 'set', { 'SoLuongTon': SoLuongTon });
		$("#rowed6").jqGrid('footerData', 'set', { 'MaThuoc2': 'Tổng' });
		/*setTimeout(function(){
			var tmp1 = $("#rowed6").jqGrid('getDataIDs');
			for(var i=0;i < tmp1.length;i++){
				//var rowData = $("#rowed6").getRowData(tmp1[i]);
				chinhsua = "<input class='custom_button xanh' style='height:22px;width:50px;' type='button' value='button' onclick=\"thuchien('"+tmp1[i]+"');\" />";

				$("#rowed6").jqGrid('setRowData',tmp1[i],{ChinhSua:chinhsua});
			}
		},1000);*/


		},
		caption: "Danh sách thuốc <span style='margin-left:30px;'><input type='checkbox' id='tenthuoc' /> Nhóm theo Tên biệt dược</span>",
		//editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',

	});
$("#rowed6").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw",  stringResult: true});
}

function create_nhacungcap(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Nhà cung cấp'],
		colModel:[
			{name:'NhaCungCap',index:'NhaCungCap',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.n_action=2;
			window.idncc=id;
			window.idncc_search=id;
			
			dataView.refresh();
		 
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}
function create_kho(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
   $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
		colNames:['Kho'],
		colModel:[
			{name:'kho',index:'kho',hidden :false},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal:true,
		rowNum: 200000,
		rowList:[],
		sortname: 'Id_Tang',
		height:200,
		width: 300,
		viewrecords: true,
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) {
		},
		onSelectRow: function(id){
			window.idkho=id;
				var selr = jQuery(elem).jqGrid('getGridParam','selrow');
				if($(elem).data('clicked')){
					$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+id+"&n_order=ORDER BY TenBietDuoc,STT_UUTIEN,SoLo&hienmaloi=1").done(function(data){
						data=$.parseJSON(data)
						dataView.setItems(data);				
						dataView.endUpdate();
						if(id==0){
					dataView.setGrouping([					   
					   {
						getter: "MaThuoc",
						formatter: function (g) {
							 var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
							 return "<strong>" + g['rows'][0]['TenThuoc'] + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
							},	
						aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
						  aggregateCollapsed: true,     
						  collapsed: false,
						  lazyTotalsCalculation: false
						  },
							{
						getter: "ID_Kho",
						formatter: function (g) {
							  var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
							  return "<strong>" + g.value + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
							},	
						aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
						aggregateCollapsed: true,     
						collapsed: false,
						lazyTotalsCalculation: false
					   }
				   ]
				   );
				
				}else if(id!=0){
					dataView.setGrouping([					   
					   {
						getter: "MaThuoc",
						formatter: function (g) {
							 var total = sumTotalsFormatter(g.totals, columns[13]).formatMoney(0, ',', '.');
							 return "<strong>" + g['rows'][0]['TenThuoc'] + "</strong>  <span style=''> Số lượng tồn: <strong>" + total  + "</strong></span>";			
							},	
						aggregators: [new Slick.Data.Aggregators.Sum("SoLuongTon")],
						aggregateCollapsed: false,     
						collapsed: false,
						lazyTotalsCalculation: false
					   }
				    ]);					
				}
					})
				}
				
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {

 		},
		loadComplete: function(data) {
		grid_filter_enter(elem) ;

		},

	});

	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );

}
$("#menu").menu();
function resize_control(){
	   var h=$(window).height();
	    var w=$(window).width();
		$('#myGrid').css({'height':(h-55)+'px'});
		$('#myGrid').css({'width':(w-10)+'px'});
		grid.resizeCanvas();
	}
function clickme(id){
	alert(id);
}
 $("#taophieuxuatdieuchinh").bind( "click", function(e) {
   	alert("Tạo phiếu xuất điều chỉnh");
   });
   $("#uutienxuat").bind( "click", function(e) {
	   selectedRowId = $("#rowed6").jqGrid('getGridParam', 'selrow');
	   
	   var rowData = $("#rowed6").getRowData(selectedRowId);
   		$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_uutienxuat&hienmaloi=a&idthuoc='+rowData['MaThuoc']+'&solohethong='+rowData['SoLoHeThong']).done(function(data) {
			 if(window.n_action==1){
			 	$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&n_order= ORDER BY TenNCC,TenBietDuoc"}).trigger('reloadGrid');
			 }
			 if(window.n_action==2){
				$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_baocao_tonghop_theonhacungcap&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+"&tenkho="+$("#makho1").val()+"&idncc="+window.idncc+"&n_order= ORDER BY TenBietDuoc,STT_UUTIEN,SoLo"}).trigger('reloadGrid');
			 }

		});
   });
   $("#xemphieunhap").bind( "click", function(e) {
   	alert("Xem phiếu nhập");
   });
   function number(row, cell, value, columnDef, dataContext) {
		tam=(parseInt(value)).formatMoney(0, ',', '.')
        return tam;
    }
	function sumTotalsFormatter(totals, columnDef) {
  var val = totals.sum && totals.sum[columnDef.field];
  if (val != null) {
    return val;
  }
  return "";
}

function myFormatter (row, cell, value, columnDef, dataContext) {
    var groupings = this.getGrouping().length;
    var indentation = groupings * 15 + 'px';
    var spacer = '<span style="margin-left:' + indentation + '"></span>';
    return spacer + value;
};
function costFormatter(value) {
	
  return value.formatMoney(0, ',', '.');
}
</script>