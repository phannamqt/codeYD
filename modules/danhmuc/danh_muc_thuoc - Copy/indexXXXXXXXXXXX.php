<head>
    <link href="js/select_input/select2.css" rel="stylesheet"/>
    <script src="js/select_input/select2.js"></script>
    
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
    <script src="js/SlickGrid-master/plugins/slick.autotooltips.js"></script>
    <link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css" type="text/css"/>
      
    <style type="text/css">
	.toggle {
      height: 9px;
      width: 9px;
      display: inline-block;
    }
	.bhyt{
	background:#0F9;
}
.bhytnt{
	background:#FF0;
}
 .toggle.expand {
      background: url(images/expand.gif) no-repeat center center;
    }

    .toggle.collapse {
      background: url(images/collapse.gif) no-repeat center center;
    }
	
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
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
    .ui-button-text{
        padding-left: 3px!important;
        padding-top: 3px!important
    }
/*    .custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input{
        width: 290px!important;
    }*/
    .select2-container-multi .select2-choices{
    min-height: 55px;
    max-height: 55px;
    overflow-y: auto; 
    }
    .input_s{
        background-color:#F4FA58!important;
    }
   
</style>
</head>

<body style="font:12px Tahoma,Geneva,sans-serif !important"> 
    <div id="dialog-form2" title="Thêm thuốc và hoạt chất">
        <table id="list10_d"></table>
         <div id="pager10_d"></div>
    </div> 
    <div id="dialog-form3" title="Thêm nhóm phân loại thuốc">
        <table id="rowed5"></table>
         <div id="prowed5"></div>
    </div> 
    <div id="dialog-form" title="Thêm bản ghi" style="display:none">
    <div id="container">
    <div class="form_row" >  
      <table id="rowed4" >   
          
                <tr>
                    <td>Mã Thuốc:*</td>
                    <td><input type=text id="mathuoc" name="mathuoc"  disabled style="width: 290px!important;"></td>
                    <td></td>
                     <td>Tên gốc:*</td>
                    <td><input type=text id="tengoc" name="tengoc"  style="width: 290px!important"></td>
                    
                    <td><!--Barcode--></td>
                    <td><!--<input type=text id="Barcode" name="Barcode" style="width: 290px!important">--></td>
                </tr>
                <tr>
                    <td>Tên biệt dược:*</td>
                    <td><input type=text id="tenbietduoc" name="tenbietduoc"  style="width: 290px!important"> </td>
                    <td></td>
                      <td>Tên khác</td>
                    <td><input type=text id="tenkhac" name="tenkhac"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td><!--Tên hóa đơn:*--></td>
                    <td><!--<input type=text id="tenhoadon" name="tenhoadon" style="width: 290px!important">--></td>
                    <td></td>
                 
                </tr>
                <tr>
                    <td>Hoạt chất chính</td>
                    <!--<td><select	 id="HoatChatChinh" style="width:300px;height:50px;margin-top:-5px!important" class="populate" multiple="multiple" ></td>-->
                    <td><a id="create-hc" name="ID_HoatChat"class="fm-button ui-state-default ui-corner-all " style="vertical-align:top;width:22px;height:22px;margin-right: 40px;"  ><span  class="ui-icon ui-icon-circle-plus"></span></a></td>
                    <td></td><td>Đường dùng</td>
                    <td><select	 id="ID_DuongDung" name="ID_DuongDung" style="width:300px;height:50px;margin-top:-5px!important" class="populate" multiple="multiple" >   
                        </select></td>
                </tr>
               
                <tr>
                    <td>Nước sản xuất:*</td>
                    <td><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"  size="1" style="width: 300px!important;" >
                        </select>
                    </td>
                    <td></td>
                    <td>Nhóm thuốc:* </td>
                    <td><select required="true" type="text" style="width: 300px!important;"id="ID_NhomThuoc" name="ID_NhomThuoc" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                </tr>
                <tr>
                    <td>Nhóm bệnh:*</td>
                    <td><select required="true" type="text" style="width: 300px!important;" id="ID_NhomBenh" name="ID_NhomBenh" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                        <td></td>
                    <td>Đơn vị tính:*</td>
                    <td><select required="true" type="text" style="width: 300px!important;" id="ID_DonViTinh" name="ID_DonViTinh" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                </tr>
                <tr>
                    <td>Hãng sản xuất:*</td>
                    <td><select required="true" type="text" style="width: 300px!important;" id="ID_HangSanXuat" name="ID_HangSanXuat" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                        <td></td>
                    <td><!--Nhóm phân loại thuốc:*-->Nhóm thuốc BHYT:</td>
                    <td><!--<a id="create-npl" name="Id_NhomphanLoaiThuoc"class="fm-button ui-state-default ui-corner-all " style="vertical-align:top;width:22px;height:22px;margin-right: 40px;"  ><span  class="ui-icon ui-icon-circle-plus" ></span></a>--><select required="true" type="text" style="width: 300px!important;" id="ID_NhomBHYT" name="ID_NhomBHYT" size="1" class="FormElement ui-widget-content ui-corner-all">
                        </select></td>
                </tr>
                <tr>
                    <td>Hàm lượng:*</td>
                    <td><input  type=text id="hamluong" name="hamluong"style="width: 290px!important"></td>
                    <td></td>
                    <td><!--Hạn sử dụng:-->Đơn giá BHYT:</td>
                    <td><!--<input type=text id="hansudung" name="hansudung" style="width: 290px!important" >--><input type=text id="DonGia_BHYT" name="DonGia_BHYT" style="width: 290px!important" ></td>
                </tr>
                <tr>
                    <td>Đơn Giá:*</td>
                     <td><input required type=text id="dongia" name="dongia" style="width: 290px!important"></td>
                     <td></td>
                    <td>Tồn kho tối thiểu</td>
                    <td><input type=text id="tonkhotoithieu" name="tonkhotoithieu" style="width: 290px!important"></td>
                </tr>
                
                <tr>
                    <td>Độ ưu tiên</td>
                    <td><input type=text id="douutien" name="douutien"style="width: 290px!important"></td>
                    <td></td>
                    <td>Ghi chú</td>
                    <td><input type=text id="ghichu" name="ghichu"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Hệ số điều chỉnh giá bán</td>
                    <td><input type=text id="hesogiaban" name="hesodieuchinhgiaban" style="width: 290px!important"></td>
                    <td></td>
                  <!--  <td>Hệ số điều chỉnh giá bán hóa đơn</td>
                    <td><input type=text id="hesogiabanhoadon" name="hesodieuchinhgiaban_hoadon"style="width: 290px!important"></td>-->
                       <td>Phần trăm thuế</td>
                    <td><input type=text id="phantramthue"name="phantramthue" style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td><!--Đơn giá hóa đơn--></td>
                    <td><!--<input type=text id="dongiahoadon" name="dongia_hoadon"style="width: 290px!important">--></td>
                    <td></td>
                 
                </tr>
                <tr>
                    <td>Quy cách</td>
                    <td><input type=text id="quycach" name="quycach"style="width: 290px!important"></td>
                    <td></td>
                    <td>Phân Hạng BV</td>
                    <td><input   type=text id="PhanHangBV" name="PhanHangBV"style="width: 290px!important"></td>
                </tr>
                <tr>
                    <td>Là thuốc</td>
                    <td><input type=checkbox id="lathuoc" value="1" name="lathuoc"></td>
                    <td></td>
                     <td>Thuốc bảo hiểm y tế</td>
                    <td><input type=checkbox id="thuocbhyt" value="1" name="ThuocBHYT"></td>
                </tr>
                <tr>
                    <td>BHYT nội trú</td>
                    <td><input type=checkbox id="bhyt" value="1" name="BHYTNoiTruOrNgTru"></td>
                    <td></td>
                    <td>Sử dụng</td>
                    <td><input type="checkbox" id='active' checked="checked" value="1" name="active"></td>
                </tr>
                <tr><td>Ẩn với viện phí</td>
                    <td><input type="checkbox" id='HideVienPhi'  value="1" name="HideVienPhi"></td>
                    <td><!--<input type=checkbox id="angpp" value="1" name="IsHide4GPP">--></td>
                    <td>Ẩn với BHYT</td>
                    <td><input type="checkbox" id='HideBHYT'  value="1" name="HideBHYT"></td>
                   
                </tr>    
                  <tr>
                    <td>Ẩn với BHYT Trái tuyến</td>
                    <td><input type="checkbox" id='HideBHYT_traituyen'  value="1" name="HideBHYT_traituyen"></td>  
                      <td><!--<input type=checkbox id="angpp" value="1" name="IsHide4GPP">--></td>                
                    <td>Ẩn với BHYT Đúng tuyến</td>
                    <td><input type="checkbox" id='HideBHYT_dungtuyen'  value="1" name="HideBHYT_dungtuyen"></td>    
                   
                </tr>  
                <tr><td>SignNumber</td>
                    <td><input type="text" id='SignNumber'   name="SignNumber" style="width: 290px!important"></td>
                    <td><!--<input type=checkbox id="angpp" value="1" name="IsHide4GPP">--></td>
                    <td>STT BHYT</td>
                    <td><input type="text" id='MaBHYT'   name="MaBHYT" style="width: 290px!important"></td>
                   
                </tr> 
                <tr><td>Cơ số tủ trực</td>
                    <td><input type="text" id='CoSoTuTruc'   name="CoSoTuTruc" style="width: 290px!important"></td>
                    <td></td>
                    <td>Mã Số Theo DMBYT</td>
                    <td><input type="text" id='MaSoTheoDMBHYT'   name="MaSoTheoDMBHYT" style="width: 290px!important"></td>
                   
                </tr> 
                <tr><td>Báo động đỏ</td>
                    <td><input type="text" id='BaoDongDo'   name="BaoDongDo" style="width: 290px!important"></td>
                    <td></td>
                    <td>Báo động vàng</td>
                    <td><input type="text" id='BaoDongVang'   name="BaoDongVang" style="width: 290px!important"></td>
                   
                </tr>      
                
                 <tr><td>Nhóm thuốc kê toa</td>
                    <td><input type="text" id='Id_NhomThuoc_Toa'   name="Id_NhomThuoc_Toa" style="width: 290px!important"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   
                </tr>  
                
                
            </table>
         </div>
    </div>
    </div>
<!--	<div id="grid_phong_ban">      	 
          <table id="rowed3" ></table>
            <div id="prowed3"></div>  
        </div>-->
        
          <div style="width:1300px;" id="slickgrid">
            <div id="myGrid" style="width:100%;height:650px;margin-bottom:4px"></div>
            <input type="button" id="them" value="Thêm">
            <input type="button" id="sua" value="Sửa">
            <input type="button" id="xoa" value="Xóa">
          </div>
</body>

<script type="text/javascript">
jQuery(document).ready(function() {
       
       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_duongdung').done(function(data) {
           window.id_duongdung=$.parseJSON(data);
          })
        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hc').done(function(data) {
           window.hoatchatchinh2=$.parseJSON(data);
        
          })
	$("#them").button();
	$("#sua").button();
    $("#xoa").button();	 
  window.dataView;
  window.grid;
  window.data = [];
  window.search_string=0;
  var options = {
    enableCellNavigation: true,
    showHeaderRow: true,
    headerRowHeight: 30,
    explicitInitialization: true,
	forceFitColumns: false,
	
  };
  var columns = [  		
 		    
			//{name:'MaThuoc',id:'MaThuoc',field: "MaThuoc",width: 50},
			{name:'Tên Biệt Dược',id:'TenBietDuoc',field: "TenBietDuoc",width: 300, formatter: TaskNameFormatter},	 
			//{name:'Barcode',id:'Barcode',field: "Barcode",width: 150},	 
			{name:'Tên Gốc',id:'TenGoc',field: "TenGoc",width: 200},	
			//{name:'TenHoaDon',id:'TenHoaDon',field: "TenHoaDon",width: 150},			
			{name:'Hoạt Chất Chính',id:'HoatChatChinh',field: "HoatChatChinh",width: 200},				               
			{name:'Đơn Giá',id:'DonGia',field: "DonGia",width: 70},
			{name:'Đơn Giá Sau Thuế',id:'Giasauthue',field: "Giasauthue",width: 70},
			
			{name:'Đơn Giá BHYT',id:'DonGia_BHYT',field: "DonGia_BHYT",width: 100},
            {name:'Nước Sản Xuất',id:'NuocSanXuat',field: "NuocSanXuat",width: 80},			
            {name:'Quy Cách',id:'QuyCach',field: "QuyCach",width: 70},
         //  
			{name:'Đơn Vị Tính',id:'TenDonViTinh',field: "TenDonViTinh",width: 60},
            {name:'Hãng Sản Xuất',id:'HangSanXuat',field: "HangSanXuat",width: 80},
			//{name:'SignNumber',id:'SignNumber',field: "SignNumber",width: 90},
            {name:'Đường Dùng',id:'ID_DuongDung',field: "ID_DuongDung",width: 110,formatter: currencyFmatter},	
			{name:'Tồn Kho Tối Thiểu',id:'TonKhoToiThieu',field: "TonKhoToiThieu",width:110},
			{name:'Ghi Chú',id:'GhiChu',field: "GhiChu",width: 60},
            {name:'HS Điều Chỉnh Giá Bán',id:'HeSoDieuChinhGiaBan',field: "HeSoDieuChinhGiaBan",width: 150},
            //{name:'HeSoDieuChinhGiaBan_HoaDon',id:'HeSoDieuChinhGiaBan_HoaDon',field: "HeSoDieuChinhGiaBan_HoaDon",width: 210},
            //{name:'DonGia_HoaDon',id:'DonGia_HoaDon',field: "DonGia_HoaDon",width: 110},
            {name:'Phần Trăm Thuế',id:'PhanTramThue',field: "PhanTramThue",width: 110},
			{name:'Là Thuốc',id:'LaThuoc',field: "LaThuoc",width: 60}, 
			{name:'Active',id:'Active',field: "Active",width: 50}, 
			{name:'Độ Ưu Tiên',id:'DoUuTien',field: "DoUuTien",width: 80},
			{name:'Thuốc BHYT',id:'ThuocBHYT',field: "ThuocBHYT",width: 90},
			{name:'BHYT Nội Trú',id:'BHYTNoiTruOrNgTru',field: "BHYTNoiTruOrNgTru",width: 150},
			//{name:'IsHide4GPP',id:'IsHide4GPP',field: "IsHide4GPP",width: 100},
            //{name:'duongdung',id:'duongdung',field: "duongdung",width: 70},
          //  {name:'Id_NhomphanLoaiThuoc',id:'Id_NhomphanLoaiThuoc',field: "Id_NhomphanLoaiThuoc",width: 190},
  
  
  ];



 window.columnFilters = {};

 function filter(item) {
     
       var patRegex_no = /^[$]?[-+]?[0-9.,]*[$%]?$/; 
	   if(window.search_string==1){
		   item._collapsed=false;
	   }
		  if (item.parent != 0) {
			var parent = data[dataView.getIdxById(item.parent)];
			
			while (parent) {
			  if (parent._collapsed) {
				return false;
			  }
			  parent = data[dataView.getIdxById(parent.parent)];
			}
			
		  }
  
  
  if(item.isleaf==1){
  
        for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toLowerCase();
                var filterChar1 = filterVal.substring(0, 1); 

                if(item[c.field] == null)
                    return false;
               
					if(columnId=='HoatChatChinh' ){
						 if (item[c.field].toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) == -1)
                       		 return false;	
					}else{
						if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
						 return false;
						}     
					}
					 
               
                }
            
        }
  }
  
    return true;
	
  }

   
  $(function () {
	 // var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();
	  dataView = new Slick.Data.DataView({inlineFilters: true});	
	  dataView.getItemMetadata = metadata(dataView.getItemMetadata);
      grid = new Slick.Grid("#myGrid", dataView, columns, options);		
	  dataView.onRowCountChanged.subscribe(function (e, args) {
		grid.updateRowCount();			
		grid.render();
  	  });  
	/*  dataView.setGrouping({
		getter: "ID_NhomThuoc",
		formatter: function (g) {return g.value + "  <span style='color:green'>(" + g.count + " items)</span>";},	 
		aggregators :[new Slick.Data.Aggregators.Sum("Gia")],  
	    collapsed: true,
		lazyTotalsCalculation: true
	  });*/
	  //  grid.registerPlugin(groupItemMetadataProvider);
	    plugin = new Slick.AutoTooltips();
		grid.registerPlugin(plugin);		
	    grid.setSelectionModel(new Slick.CellSelectionModel());	
	    grid.setSelectionModel(new Slick.RowSelectionModel());
	    dataView.onRowsChanged.subscribe(function (e, args) {
		grid.invalidateRows(args.rows);
		grid.render();
	  });

  grid.onClick.subscribe(function (e, args) {
	 
	
	 
    if ( $(e.target).hasClass("toggle")) {
      var item = dataView.getItem(args.row);
      if (item) {
        if (!item._collapsed) {
          item._collapsed = true;
        } else {
          item._collapsed = false;
        }

        dataView.updateItem(item.id, item);
      }
      e.stopImmediatePropagation();
    }
  });
  $(grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
      var columnId = $(this).data("columnId");
      if (columnId != null) {
		  window.search_string=1;
        columnFilters[columnId] = $.trim($(this).val());
		 dataView.refresh();
		//alertObject(columnFilters);
		//datatosend=$.parseJSON(columnFilters)
		// dataView.beginUpdate();
		//$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc_search',columnFilters).done(function(a){
			
			
		//});	
      }
	

	
	
    });		
		 grid.onDblClick.subscribe(function (e, args){
			    window.id_edit=dataView.getItem(args.row).id;
		 })
	
	    grid.onDblClick.subscribe(function (e, args){
		var item = args.item;
		//alert(dataView.getItem(args.row).MaThuoc);
		if(dataView.getItem(args.row).isleaf==1){
        $('#dialog-form').dialog('open');     
		window.oper='edit';
        window.id_edit=dataView.getItem(args.row).id;
        $('#list10_d').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuochc&id='+id_edit,datatype:'json'}).trigger('reloadGrid');
        $('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc_phanloaithuoc&id='+id_edit,datatype:'json'}).trigger('reloadGrid');
		autocompleted_combobox("#ID_NuocSanXuat");
        autocompleted_combobox("#ID_NhomThuoc");
        autocompleted_combobox("#ID_NhomBenh");
        autocompleted_combobox("#ID_DonViTinh");
        autocompleted_combobox("#ID_HangSanXuat"); 
		autocompleted_combobox("#ID_NhomBHYT"); 
        var mathuoc = dataView.getItem(args.row).MaThuoc;  		
        var tenbietduoc = dataView.getItem(args.row).TenBietDuoc;
        var tengoc = dataView.getItem(args.row).TenGoc;   
        var ID_DuongDung = dataView.getItem(args.row).ID_DuongDung;
        var ID_NuocSanXuat = dataView.getItem(args.row).ID_NuocSanXuat;
        var ID_NhomThuoc = dataView.getItem(args.row).parent;
        var ID_NhomBenh = dataView.getItem(args.row).ID_NhomBenh;
        var ID_DonViTinh =dataView.getItem(args.row).ID_DonViTinh;
        var hamluong = dataView.getItem(args.row).HamLuong;
        var hansudung = dataView.getItem(args.row).HanSuDung;
        var dongia = dataView.getItem(args.row).DonGia;
        var tonkhotoithieu= dataView.getItem(args.row).TonKhoToiThieu;
        var douutien = dataView.getItem(args.row).DoUuTien;
        var ghichu = dataView.getItem(args.row).GhiChu;
        var hesogiaban = dataView.getItem(args.row).HeSoDieuChinhGiaBan;
        var phantramthue = dataView.getItem(args.row).PhanTramThue;
        var quycach = dataView.getItem(args.row).QuyCach;
        var lathuoc = dataView.getItem(args.row).LaThuoc;
        var active = dataView.getItem(args.row).Active;
        var bhyt = dataView.getItem(args.row).BHYTNoiTruOrNgTru;
        var thuocbhyt = dataView.getItem(args.row).ThuocBHYT;    
        var ID_HangSanXuat = dataView.getItem(args.row).ID_NSXThuoc;
		var dongia_bhyt = dataView.getItem(args.row).DonGia_BHYT;
		var phanhang = dataView.getItem(args.row).PhanHangBV;
		var HideVienPhi = dataView.getItem(args.row).HideVienPhi;
		var HideBHYT = dataView.getItem(args.row).HideBHYT;
		var SignNumber = dataView.getItem(args.row).SignNumber;
		var HideBHYT_traituyen = dataView.getItem(args.row).HideBHYT_traituyen;
		var MaBHYT = dataView.getItem(args.row).MaBHYT;
		var HideBHYT_dungtuyen = dataView.getItem(args.row).HideBHYT_dungtuyen;
		var CoSoTuTruc = dataView.getItem(args.row).CoSoTuTruc;
		var BaoDongDo = dataView.getItem(args.row).BaoDongDo;
		var BaoDongVang = dataView.getItem(args.row).BaoDongVang;
		var MaSoTheoDMBHYT = dataView.getItem(args.row).MaSoTheoDMBHYT;
		var Id_NhomThuoc_Toa = dataView.getItem(args.row).Id_NhomThuoc_Toa;
		//var signnumber = dataView.getItem(args.row).SignNumber;
		
        $("#mathuoc").val(mathuoc);
		$("#MaBHYT").val(MaBHYT);
		$("#PhanHangBV").val(phanhang);     		
		$("#DonGia_BHYT").val(dongia_bhyt); 		    
        $("#tenbietduoc").val(tenbietduoc);
        $("#tengoc").val(tengoc);
        $("#SignNumber").val(SignNumber);
        var lastChar = ID_DuongDung.substr(ID_DuongDung.length - 1); 
        if(lastChar==','){
           ID_DuongDung = ID_DuongDung.substring(0, ID_DuongDung.length - 1)
        }
        ID_DuongDung= ID_DuongDung.split(',');
        var tam='[';
        phancach='';
        for(i=0;i<=ID_DuongDung.length-1;i++){
              var tam=tam+''+phancach+''+ID_DuongDung[i];
                             phancach=',';
        }
              tam=tam+''+']';
		 $("#ID_DuongDung").select2("val", jQuery.parseJSON(tam));
         $("#ID_NuocSanXuat").val(ID_NuocSanXuat);		
		 $("#ID_HangSanXuat").val(ID_HangSanXuat);
         var nsx=$('#ID_NuocSanXuat :selected').text();
         $("#ID_NuocSanXuat"+"1").val(nsx);
         $("#ID_NhomThuoc").val(ID_NhomThuoc);
         var nt=$('#ID_NhomThuoc :selected').text();
         $("#ID_NhomThuoc"+"1").val(nt);
         $("#ID_NhomBenh").val(ID_NhomBenh);
         var nb=$('#ID_NhomBenh :selected').text();
         $("#ID_NhomBenh"+"1").val(nb);
         $("#ID_DonViTinh").val(ID_DonViTinh);
         var dvt=$('#ID_DonViTinh :selected').text();
         $("#ID_DonViTinh"+"1").val(dvt);
         var hsx=$('#ID_HangSanXuat :selected').text();
		 $("#ID_HangSanXuat"+"1").val(hsx);
		 $("#hamluong").val(hamluong);                  
         $("#dongia").val(dongia);
         $("#tonkhotoithieu").val(tonkhotoithieu);
         $("#douutien").val(douutien);
         $("#ghichu").val(ghichu);
         $("#hesogiaban").val(hesogiaban);
		 $("#phantramthue").val(phantramthue);
		 $("#quycach").val(quycach);
		 $("#CoSoTuTruc").val(CoSoTuTruc);
		 $("#BaoDongDo").val(BaoDongDo);
		 $("#BaoDongVang").val(BaoDongVang);
		 $("#MaSoTheoDMBHYT").val(MaSoTheoDMBHYT);
		 $("#Id_NhomThuoc_Toa").val(Id_NhomThuoc_Toa);
		 
                            
         if(lathuoc=="1"){
            $("#lathuoc").prop('checked',true);
         }else{
            $("#lathuoc").prop('checked',false);
         }
         if(bhyt=="1"){
            $("#bhyt").prop('checked',true);
         }else{
            $("#bhyt").prop('checked',false);
         }
         if(thuocbhyt=="1"){
            $("#thuocbhyt").prop('checked',true);
         }else{
            $("#thuocbhyt").prop('checked',false);
         }
		 
		 
		 if(HideBHYT=="1"){
            $("#HideBHYT").prop('checked',true);
         }else{
            $("#HideBHYT").prop('checked',false);
         }
		 
		 if(HideBHYT_traituyen=="1"){
            $("#HideBHYT_traituyen").prop('checked',true);
         }else{
            $("#HideBHYT_traituyen").prop('checked',false);
         }
		 
		  if(HideBHYT_dungtuyen=="1"){
            $("#HideBHYT_dungtuyen").prop('checked',true);
         }else{
            $("#HideBHYT_dungtuyen").prop('checked',false);
         }
		 
		 if(HideVienPhi=="1"){
            $("#HideVienPhi").prop('checked',true);
         }else{
            $("#HideVienPhi").prop('checked',false);
         }
                            /*if(angpp=="1"){
                                $("#angpp").prop('checked',true);
                            }else{
                                 $("#angpp").prop('checked',false);
                            }*/
         if(active=="1"){
            $("#active").prop('checked',true);
         }else{
            $("#active").prop('checked',false);
         }
                        $("input:text").css("background-color","white");      
                        $("#mathuoc").css("background-color","#BDBDBD");
                        $("#ID_NhomThuoc1").removeClass("input_s");
                        $("#ID_NhomBenh1").removeClass("input_s");
                        $("#ID_DonViTinh1").removeClass("input_s");
                   
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
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(a){
		data=$.parseJSON(a)
		
		 data.getItemMetadata = function (row) {
		  //cosole.log(row)
		};
	
		dataView.setItems(data);
		dataView.setFilter_new(filter);		
 		dataView.endUpdate();		
	})
  })
  
  
 resize_control();
		  $("#them").click(function(){
            $('#dialog-form').dialog('open');
			  		    window.oper='add';
                        $('#dialog-form').dialog('open');
						$('#list10_d').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuochc&id=0',datatype:'json'}).trigger('reloadGrid');
						$("#ID_HangSanXuat").val("");
						$("#ID_NuocSanXuat").val("");
						$("#ID_NhomBenh").val("");
						$("#ID_NhomThuoc").val("");
						$("#ID_DonViTinh").val("");
						$("#PhanHangBV").val("");
						$("#SignNumber").val("");
						$("#ID_DuongDung").select2("val", {});
						autocompleted_combobox("#ID_NhomBHYT"); 
                        autocompleted_combobox("#ID_NuocSanXuat");
                        autocompleted_combobox("#ID_NhomThuoc");
                        autocompleted_combobox("#ID_NhomBenh");
                        autocompleted_combobox("#ID_DonViTinh");
                        autocompleted_combobox("#ID_HangSanXuat");                        
                        $("input:text").css("background-color","white");   
                        $("#mathuoc").css("background-color","#BDBDBD");
                        $("input:text").val("");
                        $("#hesogiaban").val("");
						$("#MaBHYT").val("");
                        $("#hesogiabanhoadon").val("");
                        $("#dongiahoadon").val("");
						$("#DonGia_BHYT").val(""); 
                        $("#ID_NuocSanXuat1").removeClass("input_s");
                        $("#ID_NhomThuoc1").removeClass("input_s");
                        $("#ID_NhomBenh1").removeClass("input_s");
                        $("#ID_DonViTinh1").removeClass("input_s");
                        $("#ID_HangSanXuat1").removeClass("input_s");                    
                        $("#lathuoc").prop('checked', false);
                        $("#angpp").prop('checked', false); 
                        $("#bhyt").prop('checked', false);
                        $("#thuocbhyt").prop('checked', false);
                        $("#active").prop('checked', true); 
						$("#HideVienPhi").prop('checked', false); 
						$("#HideBHYT").prop('checked', false); 
						$("#HideBHYT_traituyen").prop('checked', false);
						$("#HideBHYT_dungtuyen").prop('checked', false);
						$("#CoSoTuTruc").val('');
						$("#BaoDongDo").val('');
						$("#BaoDongVang").val('');
						$("#MaSoTheoDMBHYT").val('');
						$("#Id_NhomThuoc_Toa").val('');
						
                        	
          })
          $("#sua").click(function(){
            $('.slick-viewport .active').dblclick();
          })
        number_textbox("#tonkhotoithieu");
        //number_textbox("#hamluong");
        number_textbox("#dongia");   
        number_textbox("#douutien");
        number_textbox("#hesogiaban");
        number_textbox("#hesogiabanhoadon");
        number_textbox("#dongiahoadon");
        number_textbox("#phantramthue");
	$( "#hansudung" ).datepicker({dateFormat: 'dd-mm-yy'});
	var lastsel; 	
	load_phong_ban(true);
       // $('#e9').select2("container");
    $("#ID_DuongDung").select2({});
    init_data(); 
	//create_grid();			
	create_grid1(); 
    create_grid2();
//	shortcut_key();		
	/*jQuery(window).resize(function() {		 
	 $("#rowed3").setGridWidth($(window).width()-10);
	 $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
         $("#rowed4").setGridWidth($(window).width());
	 $("#rowed4").setGridHeight($(window).height());
	}); */
        
	$( "#dialog-form2" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(65)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(70)).toFixed(0) );
                $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(65)).toFixed(0) );
            },
            buttons: {
            Cancel: function() {
            	$( this ).dialog( "close" );}}
            });
            $( "#dialog-form3" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(40)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(45)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(50)).toFixed(0) );
                $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(45)).toFixed(0) );
                 
                
            },
            buttons: {
           
            Cancel: function() {
            $( this ).dialog( "close" );
                        }
                    }
            });

            $( "#create-hc" )
            .button()
            .click(function() {
            $( "#dialog-form2" ).dialog( "open" );
            //$(".ui-jqgrid-bdiv").empty();
            
             });	
	   $( "#create-npl" )
            .button()
            .click(function() {
            $( "#dialog-form3" ).dialog( "open" );
            //$(".ui-jqgrid-bdiv").empty();
            
             });    
			 
            
         $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(90)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
            modal: true,
            open: function(event,ui){
                $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(90)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(90)).toFixed(0) );
                 
                
            },
            buttons: {
            Save: function() {
                check_n();

                if(window.oper=='add'){
//              window.oper='edit';
                save_button();
                	
        }
            else{
                edit_button();
                
                }
            
            },

             Cancel: function() {
              $( this ).dialog( "close" );
               }
               }
            });

        add_icon_button_dialog("Save","disk");
        add_icon_button_dialog("Cancel","trash");
		phanquyen();
       })

	
 	function resize_control(){
        var h=$(window).height();
         var w=$(window).width();
      $('#myGrid').css({'height':(h-35)+'px'});
      $('#myGrid').css({'width':(w-10)+'px'});
      //grid.resizeCanvas();
     }

 function TaskNameFormatter (row, cell, value, columnDef, dataContext) {
  value = value.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;");
  var spacer = "<span style='display:inline-block;height:1px;width:" + (15 * dataContext["indent"]) + "px'></span>";
  var idx = dataView.getIdxById(dataContext.id);
 // console.log(data[0]);
  if (data[idx + 1] && data[idx + 1].indent > data[idx].indent) {
    if (dataContext._collapsed) {
      return spacer + " <span class='toggle expand'></span>&nbsp;<strong>" + value +"</strong>";
    } else {
      return spacer + " <span class='toggle collapse'></span>&nbsp;<strong>" + value +"</strong>";
    }
  } else {
    return spacer + " <span class='toggle'></span>&nbsp;" + value;
  }
};
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',
		datatype: "json",	
		colNames:['Id','<?php get_text("mathuoc")?>','<?php get_text("tenbietduoc")?>','Barcode','<?php get_text("tengoc")?>','<?php get_text("tenhoadon")?>','<?php get_text("tenkhac")?>','<?php get_text("hoatchatchinh")?>','<?php get_text("hamluong")?>',"Đơn Giá",'<?php get_text("nuocsanxuat")?>','<?php get_text("nhomthuoc")?>',"Hạn sử dụng","Quy cách",'<?php get_text("nhombenh")?>','<?php get_text("DVT")?>','Hãng sản xuất','SignNumber','<?php get_text("duongdung")?>','<?php get_text("tonkhotoithieu")?>','<?php get_text("ghichu")?>',"Hệ số điều chỉnh giá bán","Hệ số điều chỉnh giá bán hóa đơn","Đơn giá hóa đơn","Phần trăm thuế",'<?php get_text("la_thuoc")?>','<?php get_text1("sudung")?>','<?php get_text("douutien")?>','<?php get_text("thuocBHYT")?>','<?php get_text("BHYT_noitru")?>','IsHide4GPP','','Nhóm phân loại thuốc'],
		colModel:[
			//{name:'ID_Thuoc',index:'ID_Thuoc',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaThuoc',index:'MaThuoc', width:"100%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text"},
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"200%", editable:true,align:'left',hidden:false,edittype:"text"},	 
			{name:'Barcode',index:'Barcode', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	 
			{name:'TenGoc',index:'TenGoc', width:"200%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'TenHoaDon',index:'TenHoaDon', width:"200%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'TenKhac',index:'TenKhac', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'HoatChatChinh',index:'HoatChatChinh', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'HamLuong',index:'HamLuong', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},                      
			{name:'DonGia',index:'DonGia', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},
            {name:'ID_NuocSanXuat',index:'ID_NuocSanXuat',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nuocsanxuat},stype:'select',searchoptions:{ sopt:['eq'], value: nuocsanxuat}},
			{name:'ID_NhomThuoc',index:'ID_NhomThuoc',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhomthuoc}},
			{name:'HanSuDung',index:'HanSuDung', width:"100%", editable:true,align:'center',editoptions: {dataInit: function(element) {$(element).datepicker({dateFormat: 'dd-mm-yy'})}},hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1}},	 
            {name:'QuyCach',index:'QuyCach', width:"100%", editable:true,align:'center',hidden:false,edittype:"text"},
            {name:'ID_NhomBenh',index:'ID_NhomBenh',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhombenh}},
			{name:'ID_DonViTinh',index:'ID_DonViTinh',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:donvitinh}},
            {name:'ID_HangSanXuat',index:'ID_HangSanXuat',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:hangsanxuat}},
			{name:'SignNumber',index:'SignNumber', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},
            {name:'ID_DuongDung',index:'ID_DuongDung', width:"100%", editable:true,align:'center'//,formatter:currencyFmatter
			},	
			{name:'TonKhoToiThieu',index:'TonKhoToiThieu', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'GhiChu',index:'GhiChu',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"textarea"},
            {name:'HeSoDieuChinhGiaBan',index:'HeSoDieuChinhGiaBan',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"text"},
            {name:'HeSoDieuChinhGiaBan_HoaDon',index:'HeSoDieuChinhGiaBan_HoaDon',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"text"},
            {name:'DonGia_HoaDon',index:'DonGia_HoaDon',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"text"},
            {name:'PhanTramThue',index:'PhanTramThue',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"text"},
			{name:'LaThuoc',index:'LaThuoc',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}}, 
			{name:'Active',index:'Active',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}}, 
			{name:'DoUuTien',index:'DoUuTien', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'ThuocBHYT',index:'ThuocBHYT',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
			{name:'BHYTNoiTruOrNgTru',index:'BHYTNoiTruOrNgTru',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
			{name:'IsHide4GPP',index:'IsHide4GPP',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
            {name:'duongdung',index:'duongdung',search:false, width:"100%",editable: false,align:'center',hidden:true},
            {name:'Id_NhomphanLoaiThuoc',index:'Id_NhomphanLoaiThuoc',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhomphanloaithuoc}},
		],
               

		loadonce: true,
		scroll:1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 10000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_NhomThuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		stringResult:true,
		sortorder: "asc",
                grouping:true,
                groupingView : {
                        groupField : ['ID_NhomThuoc'],
                        groupColumnShow : [false],
                        groupCollapse : true,
                       
                },
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
                        number_textbox("#HamLuong");
		},
		onSelectRow: function(id){		  
		 // $("#rowed3").jqGrid().trigger('reloadGrid', [{ page: 1}]);	   
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
                          $(".ui-icon-pencil").trigger('click');                       
 		},
		loadComplete: function(data) {	
			if(typeof(window.nhanvien)!="undefined"){			 
				tam='rowed3ghead_0_'+window.nhanvien;
				jQuery('#rowed3').jqGrid('groupingToggle',tam);	
				jQuery('#rowed3').jqGrid("setSelection",window.id_return, true);	
				jQuery('#rowed3'+window.id_return).focus();
				
				 
			}
                     
		},	  
		caption: "<?php get_text("dm_thuoc")?>"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	
    	$("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "Excel", buttonicon: 'ui-icon-calculator', id : 'excel',
            onClickButton: function() {			 
				window.open('pages.php?module=report&view=danhmuc&action=in_danh_muc_thuoc&id_form=&type=excel');
            },
            title: "Xuất ra file Excel",
            position: "last"
    })	   
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
        bCancel: "Cancel", addfunc: function() { 
                        window.oper='add';
                        $('#dialog-form').dialog('open');
						$('#list10_d').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuochc&id=0',datatype:'json'}).trigger('reloadGrid');
						$("#ID_HangSanXuat").val("");
						$("#ID_NuocSanXuat").val("");
						$("#ID_NhomBenh").val("");
						$("#ID_NhomThuoc").val("");
						$("#ID_DonViTinh").val("");
                        autocompleted_combobox("#ID_NuocSanXuat");
                        autocompleted_combobox("#ID_NhomThuoc");
                        autocompleted_combobox("#ID_NhomBenh");
                        autocompleted_combobox("#ID_DonViTinh");
                        autocompleted_combobox("#ID_HangSanXuat");   
                        //autocompleted_combobox("#ID_NhomPhanLoaiThuoc");   
                        $("input:text").css("background-color","white");   
                        $("#mathuoc").css("background-color","#BDBDBD");
                        $("input:text").val("");
                        $("#hesogiaban").val("");
                        $("#hesogiabanhoadon").val("");
                        $("#dongiahoadon").val("");
                        $("#ID_NuocSanXuat1").removeClass("input_s");
                        $("#ID_NhomThuoc1").removeClass("input_s");
                        $("#ID_NhomBenh1").removeClass("input_s");
                        $("#ID_DonViTinh1").removeClass("input_s");
                        $("#ID_HangSanXuat1").removeClass("input_s");
                       // $("#ID_NhomPhanLoaiThuoc1").removeClass("input_s");
                      //  $("#ID_DuongDung").select2('data', null);
                        $("#lathuoc").prop('checked', false);
                        $("#angpp").prop('checked', false); 
                        $("#bhyt").prop('checked', false);
                        $("#thuocbhyt").prop('checked', false);
                        $("#active").prop('checked', true); 
                        	
                        },
                        editfunc: function(id) { 
                            window.oper='edit';
                            window.id_edit=id;
                            $('#list10_d').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuochc&id='+id,datatype:'json'}).trigger('reloadGrid');
                            $('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc_phanloaithuoc&id='+id,datatype:'json'}).trigger('reloadGrid');
                            $('#dialog-form').dialog('open');

                            autocompleted_combobox("#ID_NuocSanXuat");
                            autocompleted_combobox("#ID_NhomThuoc");
                            autocompleted_combobox("#ID_NhomBenh");
                            autocompleted_combobox("#ID_DonViTinh");
                             autocompleted_combobox("#ID_HangSanXuat"); 
                             //autocompleted_combobox("#ID_NhomPhanLoaiThuoc"); 
                            var sel_id = $("#rowed3").jqGrid('getGridParam', 'selrow');
                            var mathuoc = $("#rowed3").jqGrid('getCell', sel_id, 'MaThuoc');
                            var Barcode = $("#rowed3").jqGrid('getCell', sel_id, 'Barcode');
                            var tenbietduoc = $("#rowed3").jqGrid('getCell', sel_id, 'TenBietDuoc');
                            var tengoc = $("#rowed3").jqGrid('getCell', sel_id, 'TenGoc');
                            var tenhoadon = $("#rowed3").jqGrid('getCell', sel_id, 'TenHoaDon');
                            var tenkhac = $("#rowed3").jqGrid('getCell', sel_id, 'TenKhac');
                            var ID_DuongDung = $("#rowed3").jqGrid('getCell', sel_id, 'duongdung');
                            var ID_NuocSanXuat = $("#rowed3").jqGrid('getCell', sel_id, 'ID_NuocSanXuat');
                            var ID_NhomThuoc = $("#rowed3").jqGrid('getCell', sel_id, 'ID_NhomThuoc');
                            var ID_NhomBenh = $("#rowed3").jqGrid('getCell', sel_id, 'ID_NhomBenh');
                            var ID_DonViTinh = $("#rowed3").jqGrid('getCell', sel_id, 'ID_DonViTinh');
                            var hamluong = $("#rowed3").jqGrid('getCell', sel_id, 'HamLuong');
                            var hansudung = $("#rowed3").jqGrid('getCell', sel_id, 'HanSuDung');
                            var dongia = $("#rowed3").jqGrid('getCell', sel_id, 'DonGia');
                            var tonkhotoithieu = $("#rowed3").jqGrid('getCell', sel_id, 'TonKhoToiThieu');
                            var douutien = $("#rowed3").jqGrid('getCell', sel_id, 'DoUuTien');
                            var ghichu = $("#rowed3").jqGrid('getCell', sel_id, 'GhiChu');
                            var hesogiaban = $("#rowed3").jqGrid('getCell', sel_id, 'HeSoDieuChinhGiaBan');
                            var hesogiabanhoadon = $("#rowed3").jqGrid('getCell', sel_id, 'HeSoDieuChinhGiaBan_HoaDon');
                            var dongiahoadon = $("#rowed3").jqGrid('getCell', sel_id, 'DonGia_HoaDon');
                            var phantramthue = $("#rowed3").jqGrid('getCell', sel_id, 'PhanTramThue');
                            var quycach = $("#rowed3").jqGrid('getCell', sel_id, 'QuyCach');
                            var lathuoc = $("#rowed3").jqGrid('getCell', sel_id, 'LaThuoc');
                            var active = $("#rowed3").jqGrid('getCell', sel_id, 'Active');
                            var bhyt = $("#rowed3").jqGrid('getCell', sel_id, 'BHYTNoiTruOrNgTru');
                            var thuocbhyt = $("#rowed3").jqGrid('getCell', sel_id, 'ThuocBHYT');
                            var angpp = $("#rowed3").jqGrid('getCell', sel_id, 'IsHide4GPP');
                            var ID_HangSanXuat = $("#rowed3").jqGrid('getCell', sel_id, 'ID_HangSanXuat');
							
                           // var ID_NhomPhanLoaiThuoc = $("#rowed3").jqGrid('getCell', sel_id, 'ID_NhomPhanLoaiThuoc');
                            var signnumber = $("#rowed3").jqGrid('getCell', sel_id, 'SignNumber');
                            
                            $("#mathuoc").val(mathuoc);
                            $("#Barcode").val(Barcode);
                            $("#tenbietduoc").val(tenbietduoc);
                            $("#tengoc").val(tengoc);
                            $("#tenhoadon").val(tenhoadon);
                            $("#tenkhac").val(tenkhac);
                            $("#SignNumber").val(SignNumber);
                            
                            var lastChar = ID_DuongDung.substr(ID_DuongDung.length - 1); 
                                    if(lastChar==','){
                                        ID_DuongDung = ID_DuongDung.substring(0, ID_DuongDung.length - 1)
                                    }
                            
                          ID_DuongDung= ID_DuongDung.split(',');
                             var tam='[';
                             phancach='';
                            for(i=0;i<=ID_DuongDung.length-1;i++){
                                var tam=tam+''+phancach+''+ID_DuongDung[i];
                             phancach=',';
                            }
                            tam=tam+''+']';
                            
                           // alert(tam);
                             $("#ID_DuongDung").select2("val", jQuery.parseJSON(tam));
                            $("#ID_NuocSanXuat").val(ID_NuocSanXuat);
							$("#ID_HangSanXuat").val(ID_HangSanXuat);
                            var nsx=$('#ID_NuocSanXuat :selected').text();
                            $("#ID_NuocSanXuat"+"1").val(nsx);
                            $("#ID_NhomThuoc").val(ID_NhomThuoc);
                            var nt=$('#ID_NhomThuoc :selected').text();
                            $("#ID_NhomThuoc"+"1").val(nt);
                            $("#ID_NhomBenh").val(ID_NhomBenh);
                            var nb=$('#ID_NhomBenh :selected').text();
                            $("#ID_NhomBenh"+"1").val(nb);
                            $("#ID_DonViTinh").val(ID_DonViTinh);
                            var dvt=$('#ID_DonViTinh :selected').text();
                            $("#ID_DonViTinh"+"1").val(dvt);
                            var hsx=$('#ID_HangSanXuat :selected').text();
							
                            $("#ID_HangSanXuat"+"1").val(hsx);
                            //var plt=$('#ID_NhomPhanLoaiThuoc :selected').text();
                           // $("#ID_NhomPhanLoaiThuoc"+"1").val(plt);
                            $("#hamluong").val(hamluong);
                            $("#hansudung").val(hansudung);
                            $("#dongia").val(dongia);
                            $("#tonkhotoithieu").val(tonkhotoithieu);
                            $("#douutien").val(douutien);
                            $("#ghichu").val(ghichu);
                            $("#hesogiaban").val(hesogiaban);
                            $("#hesogiabanhoadon").val(hesogiabanhoadon);
                            $("#dongiahoadon").val(dongiahoadon);
                            $("#phantramthue").val(phantramthue);
                            $("#quycach").val(quycach);
                            
                            if(lathuoc=="1"){
                                $("#lathuoc").prop('checked',true);
                            }else{
                                 $("#lathuoc").prop('checked',false);
                            }
                            if(bhyt=="1"){
                                $("#bhyt").prop('checked',true);
                            }else{
                                 $("#bhyt").prop('checked',false);
                            }
                            if(thuocbhyt=="1"){
                                $("#thuocbhyt").prop('checked',true);
                            }else{
                                 $("#thuocbhyt").prop('checked',false);
                            }
                            if(angpp=="1"){
                                $("#angpp").prop('checked',true);
                            }else{
                                 $("#angpp").prop('checked',false);
                            }
                            if(active=="1"){
                                $("#active").prop('checked',true);
                            }else{
                                 $("#active").prop('checked',false);
                            }
                        $("input:text").css("background-color","white");      
                        $("#mathuoc").css("background-color","#BDBDBD");
                        $("#ID_NhomThuoc1").removeClass("input_s");
                        $("#ID_NhomBenh1").removeClass("input_s");
                        $("#ID_DonViTinh1").removeClass("input_s");
                        //check_n();
                        
         }     
//                        editfunc: function() {
//                        },
//                        delfunc: function(){
//                            
//                        }
                           
           },
           {					 
//                        {recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
//			   editfunc: function() { $('#dialog-form').dialog('open')
////			   afterSubmit : function(response, postdata) { 
//////				  	if(response.responseText==1){
////						var success=false;
////						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
//					}else{
//						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
//						var success=true;	
//						var new_id="<?php get_text1("sua_thanhcong") ?>";								
////					};						
////			 		return [success,new_id] ;					   
////				},
////				beforeShowForm: function(formid){
////                                        
////					canhgiua(formid);
////                                       	
////                                        
////				},
////				afterShowForm : function (formid) {
////                                        autocompleted_combobox("#ID_Nhom_BHYT");
////					$("#add_new").click(function(e){
////					  
////					  links='pages.php?module=danhmuc&view=danh_muc_nhom_bhyt&id_form=47&id_loai=undefined';
////					  elem=1 + Math.floor(Math.random() * 1000000000); 
////					  width=90;
////					  height=90;  
////					  dialog_add_dm("Danh mục nhóm bhyt",width,height,elem,links,load_select1);   
////					 })
////					xuongdong(formid);
////					lendong(formid);					
////					
////				},
////				onClose : function(formid){
////					$("#editmodrowed3").css("box-shadow","");										
////				}
//		}					  
		}, // edit options
                {},
					  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',navkeys : [ true, 38, 40 ],closeOnEscape : true,	
			 beforeShowForm : function(formid) {canhgiua_del(formid);},	
                         afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
								//load_phong_ban(true);								
							};						
							return [success,new_id] ;
				},		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
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

function save_button(){
    
    if(kiemtra){

                  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=a',dataToSend)
                  .done(function( response) {
                                  temp = response.split(";");	
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";
                                               
					}else{	
                                          //  $('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');
                                                
                                          //      window.id_return=$.trim(temp[1]);
                                          //      window.nhanvien = $('#ID_NhanVien :selected').index();  
									dataView.beginUpdate();
									$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(a){
										data=$.parseJSON(a)			
										dataView.setItems(data);
										dataView.endUpdate();	
										dataView.refresh();										
										grid.invalidate();
									})
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");		
                                                 $("#dialog-form").dialog("close");
                                                 
					};	
                        });
                }
}
function edit_button(){
    if(kiemtra){
                  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=2&id='+window.id_edit,dataToSend)
                  .done(function( response) {
                                  temp = response.split(";");	
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";
                                               
					}else{	
                                        //  $('#rowed3').jqGrid('setGridParam', {datatype:'json'}).trigger('reloadGrid');                                             
                                        //      window.id_return= window.id_edit;
                                         //       window.nhanvien = $('#ID_NhanVien :selected').index(); 
										 dataView.beginUpdate();
									$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(a){
										data=$.parseJSON(a)			
										dataView.setItems(data);
										dataView.endUpdate();											
										dataView.refresh();
										grid.invalidate();
									})                                               
                                                 tooltip_message("<?php get_text1("sua_thanhcong") ?>");		
                                                 $("#dialog-form").dialog("close");
                                                
					};
                                     
                        });
                }
}
function check_n(){
            window.kiemtra=true;
            phancach="";
            dataToSend ='{';
            key1='';
            i=0;
            //$('#rowed3').setGridParam({postData: null});
            $('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.name + '":"' + this.value +'"' ;
              i++;
                })
            
             dataToSend +=',"ID_DuongDung":"'+$('#ID_DuongDung').val()+'"'; 
             var myData = $('#list10_d').jqGrid('getRowData');
			
             myData= JSON.stringify(myData);
            //alert(myData);
            
             dataToSend +=',"id":'+myData; 
             var myData2 = $('#rowed5').jqGrid('getRowData');
            
             myData2= JSON.stringify(myData2);
              dataToSend +=',"id2":'+myData2+'}'; 
              //alert(dataToSend);
             dataToSend = jQuery.parseJSON(dataToSend);
            // alert(dataToSend);
                var check_null = new Array();
                //check_null["mathuoc"]=$.trim(dataToSend["mathuoc"]);
                check_null["tenbietduoc"]=dataToSend["tenbietduoc"];
                check_null["tengoc"]=dataToSend["tengoc"];
                check_null["tenhoadon"]=dataToSend["tenhoadon"];
                //check_null["ID_NuocSanXuat"]=$.trim(dataToSend["ID_NuocSanXuat"]);
                check_null["ID_NhomThuoc"]=$.trim(dataToSend["ID_NhomThuoc"]);
                //check_null["ID_NhomBenh"]=$.trim(dataToSend["ID_NhomBenh"]);
                check_null["ID_DonViTinh"]=$.trim(dataToSend["ID_DonViTinh"]);
                //check_null["ID_HangSanXuat"]=$.trim(dataToSend["ID_HangSanXuat"]);
               // check_null["ID_NhomPhanLoaiThuoc"]=$.trim(dataToSend["ID_NhomPhanLoaiThuoc"]);
                 check_null["hesogiaban"]=dataToSend["hesogiaban"];
               // check_null["hamluong"]=dataToSend["hamluong"];
                check_null["dongia"]=dataToSend["dongia"];
               
           //alertObject(check_null);
               for(var key in check_null)
                  { 
                    
                      if(check_null[key]==""){
                            
                      
                             if(key1==''){
                                 if(key=="ID_NhomThuoc"||key=="ID_DonViTinh"){
                                 key1=key+"1";
                                            }
                             else{
                                 key1=key;
                                 }     
                             }
							  window.kiemtra=true;
                           //  window.kiemtra=false;
                             if(key=="ID_NhomThuoc"||key=="ID_DonViTinh"){
                                 $("#"+key+"1").addClass("input_s");
                                 }
                             else{
                               
                                 $("#"+key).css("background-color","#F4FA58");
                                 }
                            
                              }
                       else{
                           // $("#"+key).css("background-color","white");
                            if(key=="ID_NhomThuoc"||key=="ID_DonViTinh"){
                                 $("#"+key+"1").removeClass("input_s");
                                  }
                             else{
                               
                                 $("#"+key).css("background-color","white");
                                }
                            }
}
}
function create_grid1(){
var mydata=[];
 myDelOptions = {
        // because I use "local" data I don't want to send the changes
        // to the server so I use "processing:true" setting and delete
        // the row manually in onclickSubmit
        onclickSubmit: function(options, rowid) {
            var grid_id = $.jgrid.jqID(jQuery("#list10_d")[0].id),
                grid_p = jQuery("#list10_d")[0].p,
                newPage = grid_p.page;

            // reset the value of processing option which could be modified
            options.processing = true;

            // delete the row
            jQuery("#list10_d").delRowData(rowid);
            $.jgrid.hideModal("#delmod"+grid_id,
                              {gb:"#gbox_"+grid_id,
                              jqm:options.jqModal,onClose:options.onClose});

            if (grid_p.lastpage > 1) {// on the multipage grid reload the grid
                if (grid_p.reccount === 0 && newPage === grid_p.lastpage) {
                    // if after deliting there are no rows on the current page
                    // which is the last page of the grid
                    newPage--; // go to the previous page
                }
                // reload grid to make the row from the next page visable.
                jQuery("#list10_d").trigger("reloadGrid", [{page:newPage}]);
            }

            return true;
        },
        processing:true
    };

jQuery("#list10_d").jqGrid({

   	data:mydata,
	datatype: "local",
   	colNames:[ 'Tên hoạt chất','Hàm lượng','Đơn vị tính','Là hoạt chất chính','Active'],
   	colModel:[
   		{name:'ID_HoatChat',index:'ID_HoatChat', width:200, editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:hoatchatchinh}},		
   		{name:'HamLuong',index:'HamLuong',editrules: {required:true}, width:80,align:"right",editable:true,formatter:'currency', sortable:false},
                {name:'ID_DonViTinh',index:'ID_DonViTinh',editable:true, width:80, align:"center",formatter:"select",edittype:"select",hidden:false,editoptions:{value:donvitinh2}},
                {name:'IsHoatChatChinh',index:'IsHoatChatChinh', width:100,align:'center',editable:true,edittype:"checkbox",formatter:"checkbox",editoptions: {value:"1:0"}},
                {name:'Active',index:'Active', width:50,align:'center',editable:true,edittype:"checkbox",formatter:"checkbox",editoptions: {value:"1:0"}}	
   	],
        loadonce: true,
        scroll: 1,	
   	rowNum:1000,
        height:320,

   	rowList:[],
   	pager: '#pager10_d',
   	sortname: 'ID_HoatChat',
        viewrecords: true,
        sortorder: "asc",
//	multiselect: true,
        ignoreCase:true,
//	shrinkToFit:true,
        pgbuttons: false, // disable page control like next, back button
        pgtext: null,
        editurl:'clientArray',
        onSelectRow: function(id){  
           
        },
	caption:"Thêm hoạt chất"
        });
    jQuery("#list10_d").jqGrid('navGrid','#pager10_d',{add: false,del:true,edit:false,search:false}, {}, {},
                  myDelOptions);
    $("#list10_d").jqGrid('inlineNav', '#pager10_d',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
        addParams: {
                keys:true,
                position: "last",
                addRowParams: {
                    keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
                        destroy_combobox_inline_new('ID_HoatChat',rowId,'list10_d'); 
                        $('#list10_d').focus();   
                        
                    },
                    oneditfunc: function(rowId) {   
                        //alert(hoatchatchinh2);
                        combobox_inline_new('ID_HoatChat',rowId,'list10_d',create_Dm_thuoc_grid2,window.hoatchatchinh2,0,1,tralaithuoc_callback)//new
                       
                    },  
                    afterrestorefunc: function(rowId) { 
//destroy_combobox_inline('TenBietDuoc',rowId,'tralaithuoc_rowed3','#dialog_dm_thuoc_'+rowId,'#DM_thuoc_'+rowId)    ;
                        destroy_combobox_inline_new('ID_HoatChat',rowId,'list10_d');                 
                        $("#list10_d").jqGrid('bindKeys');
                        $('#list10_d').focus();                       
                    }                
                }
                },  
         editParams: {
                keys:true,               
                    aftersavefunc: function(rowId, response,lastsel) {
                       
                        
                    },                      
                    oneditfunc: function(rowId) {   
                        combobox_inline_new('ID_HoatChat',rowId,'list10_d',create_Dm_thuoc_grid2,window.hoatchatchinh2,$("#"+rowId+"_ID_HoatChat").val(),1,tralaithuoc_callback)//new
                   
                        
                    },  
                    afterrestorefunc: function(rowId) { 
                                                    
                    },   
            }
         });      
        $("#list10_d").setGridWidth($(window).width() - 490);
        $("#list10_d").setGridHeight($(window).height()  - 400);
        
		$("#list10_d").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#list10_d_iledit .ui-icon-pencil").click();				
			} } );
}
function create_grid2(){
var mydata=[];
 myDelOptions2 = {
        // because I use "local" data I don't want to send the changes
        // to the server so I use "processing:true" setting and delete
        // the row manually in onclickSubmit
        onclickSubmit: function(options, rowid) {
            var grid_id = $.jgrid.jqID(jQuery("#rowed5")[0].id),
                grid_p = jQuery("#rowed5")[0].p,
                newPage = grid_p.page;

            // reset the value of processing option which could be modified
            options.processing = true;

            // delete the row
            jQuery("#rowed5").delRowData(rowid);
            $.jgrid.hideModal("#delmod"+grid_id,
                              {gb:"#gbox_"+grid_id,
                              jqm:options.jqModal,onClose:options.onClose});

            if (grid_p.lastpage > 1) {// on the multipage grid reload the grid
                if (grid_p.reccount === 0 && newPage === grid_p.lastpage) {
                    // if after deliting there are no rows on the current page
                    // which is the last page of the grid
                    newPage--; // go to the previous page
                }
                // reload grid to make the row from the next page visable.
                jQuery("#rowed5").trigger("reloadGrid", [{page:newPage}]);
            }

            return true;
        },
        processing:true
    };

jQuery("#rowed5").jqGrid({

    data:mydata,
    datatype: "local",
    colNames:[ '','Tên nhóm phân loại thuốc'],
    colModel:[
        {name:'ID_Thuoc',index:'ID_Thuoc',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
        {name:'ID_PhanLoai',index:'ID_PhanLoai', width:250, editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhomphanloaithuoc}}, 
    ],
        loadonce: true,
        scroll: 1,  
    rowNum:1000,
        height:320,
        width:320,
    rowList:[],
    pager: '#prowed5',
    sortname: 'ID_PhanLoai',
        viewrecords: true,
        sortorder: "asc",
//  multiselect: true,
        ignoreCase:true,
//  shrinkToFit:true,
        pgbuttons: false, // disable page control like next, back button
        pgtext: null,
    caption:"Thêm nhóm phân loại thuốc"
        });
    jQuery("#rowed5").jqGrid('navGrid','#prowed5',{add: false,del:true,edit:false,search:false}, {}, {},
                  myDelOptions2);
    $("#rowed5").jqGrid('inlineNav', '#prowed5',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
        
          
         });
        $("#rowed5").setGridWidth($(window).width() - 750);
        $("#rowed5").setGridHeight($(window).height()  - 480);
        
        $("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {                
                    $("#rowed5_iledit .ui-icon-pencil").click();              
            } } );
}
function load_phong_ban(status){
	window.nuocsanxuat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nuocsanxuat&id=ID_NuocSanXuat&name=TenDayDu', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	window.nhomthuoc = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nhomthuoc &id=ID_NhomThuoc&name=TenNhomThuoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.nhombenh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_nhombenh &id=ID_NhomBenh&name=TenNhomBenh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.donvitinh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_DonViTinh &id=ID_DonViTinh&name=TenDonViTinh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.duongdung = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DuongDung &id=ID_DuongDung&name=TenDuongDung', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
//        window.thuoc = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_Thuoc &id=ID_Thuoc&name=TenGoc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
//        window.hoatchat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_HoatChat &id=ID_HoatChat&name=TenHoatChat', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.donvitinh2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DonViTinh &id=ID_DonViTinh&name=TenDonViTinh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.hoatchatchinh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_HoatChat &id=ID_HoatChat&name=TenHoatChat', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.hangsanxuat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_NSXThuoc&id=ID_NSXThuoc&name=TenNhaSanXuat', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        window.nhomphanloaithuoc = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_PhanLoaiThuoc&id=Id_NhomphanLoaiThuoc&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
		 window.NhomThuocBHYT = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DM_NhomThuocBHYT&id=ID_NhomThuocBHYT&name=TenNhom', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
        create_select("#ID_NuocSanXuat",nuocsanxuat);
        create_select("#ID_NhomThuoc",nhomthuoc);
        create_select("#ID_NhomBenh",nhombenh);
        create_select("#ID_DonViTinh",donvitinh);
        create_select("#ID_DuongDung",duongdung);
        create_select("#HoatChatChinh",hoatchatchinh);
        create_select("#ID_HangSanXuat",hangsanxuat);
        create_select("#ID_NhomPhanLoaiThuoc",nhomphanloaithuoc);
		create_select("#ID_NhomBHYT",NhomThuocBHYT);

    if(status==true){
        $("#rowed3").setColProp('ID_HangSanXuat', { editoptions: { value: hangsanxuat} });
        $("#rowed3").setColProp('ID_NhomPhanLoaiThuoc', { editoptions: { value: nhomphanloaithuoc} });
		$("#rowed3").setColProp('ID_NuocSanXuat', { editoptions: { value: nuocsanxuat} });
		$("#rowed3").setColProp('ID_NhomThuoc', { editoptions: { value: nhomthuoc} });
		$("#rowed3").setColProp('ID_NhomBenh', { editoptions: { value: nhombenh} });
		$("#rowed3").setColProp('ID_DonViTinh', { editoptions: { value: donvitinh} });
                $("#rowed3").setColProp('HoatChatChinh', { editoptions: { value: hoatchatchinh} });
                $("#rowed3").setColProp('ID_DuongDung', { editoptions: { value: duongdung} });
                $("#list10_d").setColProp('ID_HoatChat', { editoptions: { value: hoatchatchinh} });
                $("#list10_d").setColProp('ID_DonViTinh', { editoptions: { value: donvitinh2} });
            }	
}
function shortcut_key(){
	jwerty.key('f6', false);jwerty.key('f7', false);jwerty.key('f8', false);jwerty.key('f9', false);jwerty.key('f10', false);
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f3',e)) {
				 $(".ui-icon-plus").trigger("click");				 
			}
		});
                $('body').bind('keydown', function (e) {		
			if (jwerty.is('f4',e)) {
				 $(".ui-icon-pencil").trigger("click");				 
			}
		});
                $('body').bind('keydown', function (e) {		
			if (jwerty.is('f6',e)) {
				 $(".ui-icon-plus").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f7',e)) {
				 $(".ui-icon-pencil").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f8',e)) {
				 $(".ui-icon-trash").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f9',e)) {
				 $(".ui-icon-search").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f11',e)) {
				 $(".ui-icon-refresh").trigger("click");				 
			}
		});
}
/*function currencyFmatter (cellvalue, options, rowObject)
{
    var ketqua='';
    phancach='';
    
    var lastChar = cellvalue.substr(cellvalue.length - 1); 
    if(lastChar==','){
        cellvalue = cellvalue.substring(0, cellvalue.length - 1)
    }
 cellvalue=cellvalue.split(',');
 for(i=0;i<=cellvalue.length-1;i++){
             ketqua=ketqua+''+phancach+''+id_duongdung[cellvalue[i]];
             phancach=',';
 }
   return ketqua;
}*/
function add_icon_button_dialog(_text,_icon){
var btndialog = $('.ui-dialog-buttonpane').find('button:contains("'+_text+'")');
btndialog.prepend('<span style="float:left; margin-top: 3px;" class="ui-icon ui-icon-'+_icon+'"></span>');
btndialog.width(btndialog.width() + 75);
}
function init_data(){
     $("#mathuoc").focus();	 
	   jwerty.key('tab', false);
	   jwerty.key('shift+tab', false);			  
	   $('#container input[type=text],#container textarea,#container select[type=text],#container select,#container select2').bind("keydown", function(e) {		   		 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text],select[type=text], textarea,select,select2");
                var idx = inputs.index(this);
				//alert(idx)
                if (idx == inputs.length - 1) {					 
					if(inputs[0].nodeName!="SELECT"){;
                    	inputs[0].select();
					}else{
						inputs[0].focus();
					}
                } else {		
					 $(".ui-datepicker").hide();  			 
                    
					if(inputs[idx].lang=="new_grid"){
						MaNCC_check("ID_NCC","ID_NCC1")
					}else{
						inputs[idx + 1].focus(); //  handles submit buttons
					}
                                       
					if(inputs[idx + 1].nodeName!="SELECT"){
                   	 	inputs[idx + 1].select();
					}
                }
				if(inputs[idx].lang=="end"){					 
					if($("#rowed5").getDataIDs().length>0){	
						$("#rowed5").jqGrid("setSelection",$("#rowed5").getDataIDs()[0], true);						 
						$("#prowed5 .ui-icon-pencil").click();           
					}else{
						$("#prowed5 .ui-icon-plus").click();
						//action="edit";
					}
				}
                return false;
             }else if(jwerty.is("shift+tab",e)){
				var inputs = $(this).parents("#container").eq(0).find(":input[type=text], textarea,select");
                var idx = inputs.index(this);
				 if (idx >0) {					 
                    inputs[idx -1].focus(); //  handles submit buttons				 
                } 
			}
        });
}
function create_Dm_thuoc_grid2(elem,datalocal){ 
       // datalocal=jQuery.parseJSON(datalocal);   
        $(elem).jqGrid({
        datastr:datalocal,  
        datatype: "jsonstring" ,
        colNames:['Tên hoạt chất'],
        colModel:[          
            {name:'TenHoatChat',index:'TenHoatChat',hidden :false,width:'20%'},
            
        ],
        hidegrid: false,
        gridview: true,
        loadonce: false,
        scrollrows : true,
        scroll: false,       
        modal:true,  
        rowNum: 5000,
        rowList:[],
        pager: '#prowed_DM_thuoc',
        sortname: 'TenHoatChat',
        height:($(window).height() / 100 * parseFloat(40)).toFixed(0),
        width: (($(window).width() / 100 * parseFloat(58)).toFixed(0)),
        viewrecords: true,  
        ignoreCase:true,
        shrinkToFit:true,
        cmTemplate: {sortable:false},       
        sortorder: "desc",
        serializeRowData: function (postdata) { 
        },
        onSelectRow: function(id){  
           
        },
        ondblClickRow: function (id, rowIndex, columnIndex) {
                
        },
        loadComplete: function(data) {              
        },          
    }); 
     $("#DM_thuoc").jqGrid('navGrid',"#prowed_DM_thuoc",{add: false, edit: false, del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true });                
     $("#DM_thuoc").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"bw"});
     $("#DM_thuoc").jqGrid('bindKeys', {} );        
}   
function tralaithuoc_callback(){

}

function currencyFmatter (row, cell, value, columnDef, dataContext)
{
    var ketqua='';
    phancach='';
	
    cellvalue=$.trim(value);
    var lastChar = cellvalue.substr(cellvalue.length - 1); 
    if(lastChar==','){
        cellvalue = cellvalue.substring(0, cellvalue.length - 1)
    }
 cellvalue=cellvalue.split(',');
 for(i=0;i<=cellvalue.length-1;i++){
             ketqua=ketqua+''+phancach+''+id_duongdung[cellvalue[i]];
             phancach=',';
 }
 if( ketqua == 'undefined'){
	 ketqua='';
 }
   return ketqua;
}
function metadata(old_metadata) {
  return function(row) {
    var item = this.getItem(row);
    var meta = old_metadata(row) || {};
    if (item) {     
      meta.cssClasses = meta.cssClasses || '';
      if (item.ThuocBHYT==1 && item.BHYTNoiTruOrNgTru==0) {                    
        meta.cssClasses += ' bhyt';      
      } else if(item.ThuocBHYT==1 && item.BHYTNoiTruOrNgTru==1) {                   
        meta.cssClasses += ' bhytnt';
      }    
    }

    return meta;
  }
}
</script>