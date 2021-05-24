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
.select2-container-multi .select2-choices{
  min-height: 55px;
  max-height: 55px;
  overflow-y: auto; 
}
.input_s{
  background-color:#F4FA58!important;
}
#giaban{
	width: 110px !important; 
	background-color: #ccc !important;
}

</style>
</head>

<div id="dialogGiaThuc" title="Sửa" style="display:none">
<table> 
<tr>
<td>Mã Thuốc:*</td>
<td><input type=text id="mathuoc" name="mathuoc"  disabled style="width: 290px!important;"></td>
</tr>
</table>

</div>

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
<td >Mã Thuốc: </td>
<td><input type=text id="mathuoc" name="mathuoc"  disabled style="width: 290px!important;"></td>
<td></td>
<td style="color:red;font-weight: bold;">Tên gốc:*</td>
<td><input type=text id="tengoc" name="tengoc"  style="width: 290px!important"></td>

<td><!--Barcode--></td>
<td><!--<input type=text id="Barcode" name="Barcode" style="width: 290px!important">--></td>
</tr>
<tr>
<td style="color:red;font-weight: bold;">Tên biệt dược:*</td>
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
<td></td><td style="color:red;font-weight: bold;">Đường dùng*</td>
<td><select	 id="ID_DuongDung" name="ID_DuongDung" style="width:300px;height:50px;margin-top:-5px!important" class="populate" multiple="multiple" >   
</select></td>
</tr>

<tr>
<td style="color:red;font-weight: bold;">Nước SX:*</td>
<td><select type="text" id="ID_NuocSanXuat" name="ID_NuocSanXuat"  size="1" style="width: 300px!important;" >
</select>
</td>
<td></td>
<td style="color:red;font-weight: bold;">Nhóm thuốc:* </td>
<td><select required="true" type="text" style="width: 300px!important;"id="ID_NhomThuoc" name="ID_NhomThuoc" size="1" class="FormElement ui-widget-content ui-corner-all">
</select></td>
</tr>
<tr>
<td>Nhóm bệnh:*</td>
<td><select required="true" type="text" style="width: 300px!important;" id="ID_NhomBenh" name="ID_NhomBenh" size="1" class="FormElement ui-widget-content ui-corner-all">
</select></td>
<td></td>
<td style="color:red;font-weight: bold;">Đơn vị tính:*</td>
<td><select required="true" type="text" style="width: 300px!important;" id="ID_DonViTinh" name="ID_DonViTinh" size="1" class="FormElement ui-widget-content ui-corner-all">
</select></td>
</tr>
<tr>
<td style="color:red;font-weight: bold;">Hãng SX:*</td>
<td><select required="true" type="text" style="width: 300px!important;" id="ID_HangSanXuat" name="ID_HangSanXuat" size="1" class="FormElement ui-widget-content ui-corner-all">
</select></td>
<td></td>
<td><!--Nhóm phân loại thuốc:*-->Nhóm thuốc BHYT:</td>
<td><!--<a id="create-npl" name="Id_NhomphanLoaiThuoc"class="fm-button ui-state-default ui-corner-all " style="vertical-align:top;width:22px;height:22px;margin-right: 40px;"  ><span  class="ui-icon ui-icon-circle-plus" ></span></a>--><select required="true" type="text" style="width: 300px!important;" id="ID_NhomBHYT" name="ID_NhomBHYT" size="1" class="FormElement ui-widget-content ui-corner-all">
</select></td>
</tr>
<tr>
<td style="color:red;font-weight: bold;">Hàm lượng:*</td>
<td><input  type=text id="hamluong" name="hamluong"style="width: 290px!important"></td>
<td></td>
<td><!--Hạn sử dụng:-->Đơn giá BHYT:</td>
<td><!--<input type=text id="hansudung" name="hansudung" style="width: 290px!important" >--><input type=text id="DonGia_BHYT" name="DonGia_BHYT" style="width: 290px!important" ></td>
</tr>
<tr>
<td style="color:red;font-weight: bold;">Đơn Giá:*</td>
<td><input required type=text id="dongia" name="dongia" class="thaydoigia" style="width: 105px!important"> <span style="color:#000;font-weight: bold;">Giá bán:*</span><input required type="text" id="giaban" name="giaban" readonly style="width: 110px !important; background-color: #ccc  !important"  title="Giá bán = Giá sau nhân hệ số giá bán + (Giá sau nhân hệ số giá bán)*Phần trăm thuế"> </td>
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
<td style="color:red;font-weight: bold;">Hệ số điều chỉnh giá bán(%)</td>
<td><input type=text id="hesogiaban" name="hesodieuchinhgiaban"  class="thaydoigia" style="width: 290px!important"></td>
<td></td>
<!--  <td>Hệ số điều chỉnh giá bán hóa đơn</td>
<td><input type=text id="hesogiabanhoadon" name="hesodieuchinhgiaban_hoadon"style="width: 290px!important"></td>-->
<td style="color:red;font-weight: bold;">Phần trăm thuế(%)</td>
<td><input type=text id="phantramthue"name="phantramthue"  class="thaydoigia" style="width: 290px!important"></td>
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
<tr style="display:none;"><td>Ẩn với viện phí</td>
<td><input type="checkbox" id='HideVienPhi'  value="1" name="HideVienPhi"></td>
<td><!--<input type=checkbox id="angpp" value="1" name="IsHide4GPP">--></td>
<td>Ẩn với BHYT</td>
<td><input type="checkbox" id='HideBHYT'  value="1" name="HideBHYT"></td>

</tr>    
<tr style="display:none;">
<td>Ẩn với BHYT Trái tuyến</td>
<td><input type="checkbox" id='HideBHYT_traituyen'  value="1" name="HideBHYT_traituyen"></td>  
<td><!--<input type=checkbox id="angpp" value="1" name="IsHide4GPP">--></td>                
<td>Ẩn với BHYT Đúng tuyến</td>
<td><input type="checkbox" id='HideBHYT_dungtuyen'  value="1" name="HideBHYT_dungtuyen"></td>    

</tr>  
<tr><td>Số ĐK</td>
<td><input type="text" id='SignNumber'   name="SignNumber" style="width: 290px!important"></td>
<td><!--<input type=checkbox id="angpp" value="1" name="IsHide4GPP">--></td>
<td>STT BHYT</td>
<td><input type="text" id='MaBHYT'   name="MaBHYT" style="width: 290px!important"></td>

</tr> 
<tr><td>Cơ số tủ trực</td>
<td><input type="text" id='CoSoTuTruc'   name="CoSoTuTruc" style="width: 290px!important"></td>
<td></td>
<td>Mã hoạt chất(Theo thông tư)</td>
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

<tr><td>Hàm Lượng BHYT</td>
<td><input type="text" id='HamLuong_BHYT'   name="HamLuong_BHYT" style="width: 290px!important"></td>
<td></td>
<td>Mã thuốc bệnh viện</td>
<td><input type="text" id='MaThuoc_BV'   name="MaThuoc_BV" style="width: 290px!important"></td>                   
</tr>  

<tr><td>Hoạt chất BHYT</td>
<td><input type="text" id='HoatChat_BHYT'   name="HoatChat_BHYT" style="width: 290px!important"></td>
<td></td>
<td>Mã Đường Dùng BHYT</td>
<td><input type="text" id='MaDuongDung_BHYT'   name="MaDuongDung_BHYT" style="width: 290px!important"></td>                   
</tr> 

<tr><td>Đường dùng BHYT</td>
<td><input type="text" id='DuongDung_BHYT'   name="DuongDung_BHYT" style="width: 290px!important"></td>
<td></td>
<td>Đóng gói BHYT</td>
<td><input type="text" id='DongGoi_BHYT'   name="DongGoi_BHYT" style="width: 290px!important"></td>                   
</tr> 
<tr><td>Giá BHYT thanh toán</td>
<td><input type="text" id='Gia_BHYT_Thanhtoan'   name="Gia_BHYT_Thanhtoan" style="width: 290px!important"></td>
<td></td>
<td>Định mức BHYT</td>
<td><input type="text" id='DinhMuc_BHYT'   name="DinhMuc_BHYT" style="width: 290px!important"></td>                   
</tr>
<tr><td>Nhiệt độ/Độ ẩm</td>
<td><input type="text" id='NhietDo_DoAm'   name="NhietDo_DoAm" style="width: 290px!important"></td>
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
<label for="nhomthuoc" style="margin-left:5px;">Nhóm thuốc:</label>
<input id='nhomthuoc' style="width:320px; height:20px" >
<div style="width:1200px;" id="slickgrid">
<div id="myGrid" style="width:100%;height:650px;margin-bottom:4px"></div>
<input type="button" id="them" value="Thêm">
<input type="button" id="sua" value="Sửa">
<!--<input type="button" id="sua_giathuc" value="Sửa giá thực">
<input type="button" id="excel" value="excel">
<input type="button" id="xoa" value="Xóa">-->
</div>
</body>

<script type="text/javascript">
jQuery(document).ready(function() {
 window.id_nhomthuoc=0;
 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_duongdung').done(function(data) {
   window.id_duongdung=$.parseJSON(data);
 })
 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hc').done(function(data) {
   window.hoatchatchinh2=$.parseJSON(data);

 })
 create_combobox_new('#nhomthuoc',create_nhomthuoc,'bw','','data_nhomthuoc',0);
 $("#them").button();
 $("#sua").button();
 $("#xoa").button();

$(".thaydoigia").change(function(){
	tinhgiaban();
});
$(".thaydoigia").keyup(function(){
	tinhgiaban();
});

 
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
{name:'Tên Biệt Dược',id:'TenBietDuoc',field: "TenBietDuoc",width: 300, formatter: TaskNameFormatter},	
{name:'Tên Gốc',id:'TenGoc',field: "TenGoc",width: 200},	
{name:'Tên Khác',id:'TenKhac',field: "TenKhac",width: 150},			
{name:'Hoạt Chất Chính',id:'HoatChatChinh',field: "HoatChatChinh",width: 200},	
{name:'Hàm lượng',id:'HamLuong',field: "HamLuong",width: 100},
{name:'Đơn Giá',id:'DonGia',field: "DonGia",width: 70},
{name:'Đơn Giá Sau Thuế',id:'Giasauthue',field: "Giasauthue",width: 70},
{name:'Đơn Giá bán',id:'Giaban',field: "Giaban",width: 70},
{name:'Đơn Giá BHYT',id:'DonGia_BHYT',field: "DonGia_BHYT",width: 100},
{name:'Nước Sản Xuất',id:'NuocSanXuat',field: "NuocSanXuat",width: 80},			
{name:'Quy Cách',id:'QuyCach',field: "QuyCach",width: 70},    
{name:'Đơn Vị Tính',id:'TenDonViTinh',field: "TenDonViTinh",width: 60},
{name:'Hãng Sản Xuất',id:'HangSanXuat',field: "HangSanXuat",width: 80},
{name:'Số đăng ký',id:'SignNumber',field: "SignNumber",width: 90},
{name:'Đường Dùng',id:'ID_DuongDung',field: "ID_DuongDung",width: 110,formatter: currencyFmatter},	
{name:'Tồn Kho Tối Thiểu',id:'TonKhoToiThieu',field: "TonKhoToiThieu",width:110},
{name:'Ghi Chú',id:'GhiChu',field: "GhiChu",width: 60},
{name:'HS Điều Chỉnh Giá Bán',id:'HeSoDieuChinhGiaBan',field: "HeSoDieuChinhGiaBan",width: 150},          
{name:'Phần Trăm Thuế',id:'PhanTramThue',field: "PhanTramThue",width: 110},
{name:'Là Thuốc',id:'LaThuoc',field: "LaThuoc",width: 60}, 
{name:'Active',id:'Active',field: "Active",width: 50}, 
{name:'Độ Ưu Tiên',id:'DoUuTien',field: "DoUuTien",width: 80},
{name:'Ẩn',id:'hide',field: "hide",width: 90},
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
  if(window.id_nhomthuoc==0){

  }else{
    if(item.Family==id_nhomthuoc){
    }else{
     return false;  
   }
 }
 for (var columnId in columnFilters) {
  if (columnId !== undefined && columnFilters[columnId] !== "") {
    var c = grid.getColumns()[grid.getColumnIndex(columnId)];
    var filterVal = columnFilters[columnId].toLowerCase();
    var filterChar1 = filterVal.substring(0, 1); 
    if(item[c.field] == null)
      return false;
    if(columnId=='HoatChatChinh' ){
     if (String(item[c.field]).toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) == -1)
      return false;	
  }else{
    if (String(item[c.field]).toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
     return false;
   }     
 }
}
}
}
return true;
}


$(function () {	
 dataView = new Slick.Data.DataView({inlineFilters: true});	
 dataView.getItemMetadata = metadata(dataView.getItemMetadata);
 grid = new Slick.Grid("#myGrid", dataView, columns, options);		
 dataView.onRowCountChanged.subscribe(function (e, args) {
  grid.updateRowCount();			
  grid.render();
});  	
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
  }
});		
 grid.onDblClick.subscribe(function (e, args){
   window.id_edit=dataView.getItem(args.row).id;
 })
 grid.onDblClick.subscribe(function (e, args){
  var item = args.item;
  if(dataView.getItem(args.row).isleaf==1 && permission['sua']==1){
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
    var tenkhac=dataView.getItem(args.row).TenKhac;
    var tengoc = dataView.getItem(args.row).TenGoc;   
    var ID_DuongDung = dataView.getItem(args.row).ID_DuongDung;
    var ID_NuocSanXuat = dataView.getItem(args.row).ID_NuocSanXuat;
    var ID_NhomThuoc = dataView.getItem(args.row).parent;
    var ID_NhomBenh = dataView.getItem(args.row).ID_NhomBenh;
    var ID_DonViTinh =dataView.getItem(args.row).ID_DonViTinh;
    var hamluong = dataView.getItem(args.row).HamLuong;
    var hansudung = dataView.getItem(args.row).HanSuDung;
    var dongia = dataView.getItem(args.row).DonGia;
	 var giaban = dataView.getItem(args.row).Giaban;
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
    var ID_NhomBHYT = dataView.getItem(args.row).ID_NhomBHYT;
    var HamLuong_BHYT = dataView.getItem(args.row).HamLuong_BHYT;
    var MaThuoc_BV = dataView.getItem(args.row).MaThuoc_BV;
    var MaThuoc_BHYT = dataView.getItem(args.row).MaThuoc_BHYT;
    var HoatChat_BHYT = dataView.getItem(args.row).HoatChat_BHYT;
    var MaDuongDung_BHYT = dataView.getItem(args.row).MaDuongDung_BHYT;
    var DuongDung_BHYT = dataView.getItem(args.row).DuongDung_BHYT;
    var DongGoi_BHYT = dataView.getItem(args.row).DongGoi_BHYT;
    var Gia_BHYT_Thanhtoan = dataView.getItem(args.row).Gia_BHYT_Thanhtoan;
    var DinhMuc_BHYT = dataView.getItem(args.row).DinhMuc_BHYT;
    var NhietDo_DoAm = dataView.getItem(args.row).NhietDo_DoAm;	
    $("#mathuoc").val(mathuoc);
    $("#MaBHYT").val(MaBHYT);
    $("#PhanHangBV").val(phanhang);     		
    $("#DonGia_BHYT").val(dongia_bhyt); 		    
    $("#tenbietduoc").val(tenbietduoc);
    $("#tenkhac").val(tenkhac);
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
   $("#giaban").val(giaban);
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
  $("#ID_NhomBHYT").val(ID_NhomBHYT);
  $("#HamLuong_BHYT").val(HamLuong_BHYT);
  $("#MaThuoc_BV").val(MaThuoc_BV);
  $("#MaThuoc_BHYT").val(MaThuoc_BHYT);
  $("#HoatChat_BHYT").val(HoatChat_BHYT);
  $("#MaDuongDung_BHYT").val(MaDuongDung_BHYT);
  $("#DuongDung_BHYT").val(DuongDung_BHYT);
  $("#DongGoi_BHYT").val(DongGoi_BHYT);
  $("#Gia_BHYT_Thanhtoan").val(Gia_BHYT_Thanhtoan);
  $("#DinhMuc_BHYT").val(DinhMuc_BHYT);
  $("#NhietDo_DoAm").val(NhietDo_DoAm);
  var nhombhyt_text=$('#ID_NhomBHYT :selected').text();
  $("#ID_NhomBHYT1").val(nhombhyt_text);
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
  $("#ID_NhomBHYT").val("");
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
$("#excel").click(function(){
 window.open("pages.php?module=report&view=<?=$modules?>&action=excel_dmThuoc&type=excel");
})
$("#sua_giathuc").click(function(){
      //dialogGiaThuc
    })



number_textbox("#tonkhotoithieu");      
number_textbox("#dongia"); 
number_textbox("#giaban");   
number_textbox("#douutien");
number_textbox("#hesogiaban");
number_textbox("#hesogiabanhoadon");
number_textbox("#dongiahoadon");
number_textbox("#phantramthue");
$( "#hansudung" ).datepicker({dateFormat: 'dd-mm-yy'});
var lastsel; 	
load_phong_ban(true);   
$("#ID_DuongDung").select2({});
init_data(); 	
create_grid1(); 
create_grid2();

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
});	
$( "#create-npl" )
.button()
.click(function() {
  $( "#dialog-form3" ).dialog( "open" );
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
  $('#myGrid').css({'height':(h-65)+'px'});
  $('#myGrid').css({'width':(w-10)+'px'});
}

function TaskNameFormatter (row, cell, value, columnDef, dataContext) {
  value = value.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;");
  var spacer = "<span style='display:inline-block;height:1px;width:" + (15 * dataContext["indent"]) + "px'></span>";
  var idx = dataView.getIdxById(dataContext.id);
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
function save_button(){
  if(kiemtra){
    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=a',dataToSend)
    .done(function( response) {
      temp = response.split(";");	
      if(temp[0]==1){
        var success=false;
        var new_id="<?php get_text1("luu_khongthanhcong") ?>";
      }else{	                            
        dataView.beginUpdate();
        $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(a){
         data=$.parseJSON(a);	
         dataView.setItems(data);
         dataView.endUpdate();	
         dataView.refresh();										
         grid.invalidate();
         tooltip_message("<?php get_text1("luu_thanhcong") ?>");
       })
        
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
       dataView.beginUpdate();
       $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2').done(function(a){
        data=$.parseJSON(a)			
        dataView.setItems(data);
        dataView.endUpdate();											
        dataView.refresh();
        grid.invalidate();
        tooltip_message("<?php get_text1("sua_thanhcong") ?>");		
      })         
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
  dataToSend +=',"id":'+myData; 
  var myData2 = $('#rowed5').jqGrid('getRowData');
  myData2= JSON.stringify(myData2);
  dataToSend +=',"id2":'+myData2+'}';            
  dataToSend = jQuery.parseJSON(dataToSend);          
  var check_null = new Array();             
  check_null["tenbietduoc"]=dataToSend["tenbietduoc"];
  check_null["tengoc"]=dataToSend["tengoc"];
  check_null["tenhoadon"]=dataToSend["tenhoadon"];        
  check_null["ID_NhomThuoc"]=$.trim(dataToSend["ID_NhomThuoc"]);             
  check_null["ID_DonViTinh"]=$.trim(dataToSend["ID_DonViTinh"]);             
  check_null["hesogiaban"]=dataToSend["hesogiaban"];          
  check_null["dongia"]=dataToSend["dongia"];  
  check_null["giaban"]=dataToSend["giaban"];  
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
                            
     if(key=="ID_NhomThuoc"||key=="ID_DonViTinh"){
       $("#"+key+"1").addClass("input_s");
	   window.kiemtra=false; 
     }
     else{
       $("#"+key).css("background-color","#F4FA58");
	    window.kiemtra=false; 
     }
   }
   else{    
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
    onclickSubmit: function(options, rowid) {
      var grid_id = $.jgrid.jqID(jQuery("#list10_d")[0].id),
      grid_p = jQuery("#list10_d")[0].p,
      newPage = grid_p.page;
      options.processing = true;
      jQuery("#list10_d").delRowData(rowid);
      $.jgrid.hideModal("#delmod"+grid_id,
        {gb:"#gbox_"+grid_id,
        jqm:options.jqModal,onClose:options.onClose});
      if (grid_p.lastpage > 1) {
        if (grid_p.reccount === 0 && newPage === grid_p.lastpage) {                   
          newPage--; 
        }               
        $("#list10_d").trigger("reloadGrid", [{page:newPage}]);
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
    ignoreCase:true,
    pgbuttons: false, 
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
          combobox_inline_new('ID_HoatChat',rowId,'list10_d',create_Dm_thuoc_grid2,window.hoatchatchinh2,0,1,tralaithuoc_callback)
        },  
        afterrestorefunc: function(rowId) { 
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
    onclickSubmit: function(options, rowid) {
      var grid_id = $.jgrid.jqID(jQuery("#rowed5")[0].id),
      grid_p = jQuery("#rowed5")[0].p,
      newPage = grid_p.page;
      options.processing = true;
      jQuery("#rowed5").delRowData(rowid);
      $.jgrid.hideModal("#delmod"+grid_id,
        {gb:"#gbox_"+grid_id,
        jqm:options.jqModal,onClose:options.onClose});
      if (grid_p.lastpage > 1) {
        if (grid_p.reccount === 0 && newPage === grid_p.lastpage) {                  
          newPage--;
        }            
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
    ignoreCase:true,
    pgbuttons: false, 
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
    var inputs = $(this).parents("#container").eq(0).find(":input[type=text],select[type=text], textarea,select,select2");
    var idx = inputs.index(this);			
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
function create_nhomthuoc(elem, datalocal) {
  datalocal = jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
   datastr: datalocal,
   datatype: "jsonstring",
   colNames: ['Tên nhóm thuốc'],
   colModel: [			
   {name: 'manv', index: 'manv', hidden: false,width:"10%"},                
   ],
   hidegrid: false,
   gridview: true,
   loadonce: true,
   scroll: 1,
   modal: true,
   rowNum: 100,
   rowList: [],
   height: 200,
   width: 500,
   viewrecords: true,
   ignoreCase: true,
   shrinkToFit: true,
   cmTemplate: {sortable: false},
   sortorder: "desc",
   serializeRowData: function(postdata) {
   },
   onSelectRow: function(id) {
    window.id_nhomthuoc=id;		
    dataView.refresh();
    window._grid_click=0;
  },
  ondblClickRow: function(id, rowIndex, columnIndex) {
  },
  loadComplete: function(data) {
  },
});
  $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "bw"});
  $(elem).jqGrid('bindKeys', {});
} 
function tralaithuoc_callback(){

}

function tinhgiaban(){
	var DonGia=parseFloat($("#dongia").val());
	var HeSoDieuChinhGiaBan=parseFloat($("#hesogiaban").val());
	var PhanTramThue=parseFloat($("#phantramthue").val());
	if(DonGia>0){
		DonGia=DonGia;
	}else{
		DonGia=0;
	}
	
	if(HeSoDieuChinhGiaBan>0){
		HeSoDieuChinhGiaBan=HeSoDieuChinhGiaBan;
	}else{
		HeSoDieuChinhGiaBan=0;
	}
	
	if(PhanTramThue>0){
		PhanTramThue=PhanTramThue;
	}else{
		PhanTramThue=0;
	}
	
	var GiaSauNhanHeSo =DonGia+(DonGia*(HeSoDieuChinhGiaBan)/100);
	var GiaSauThue =Math.round((GiaSauNhanHeSo+(GiaSauNhanHeSo*(PhanTramThue)/100)));
	$("#giaban").val(GiaSauThue);
}
</script>