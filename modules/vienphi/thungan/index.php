<!--author:khatm-->
<?php
if(isset($_GET["idluotkham"])){
  echo "<script type='text/javascript'>";
  echo "window.kieuxem='".$_GET["idluotkham"]."'";
  echo "</script>";

}
if(isset($_GET["idbenhnhan"])){
  echo "<script type='text/javascript'>";
  echo "window.ngay='".$_GET["idbenhnhan"]."'";
  echo "</script>";

}
if(isset($_GET["mabenhan"])){
  echo "<script type='text/javascript'>";
  echo "window.denngay='".$_GET["mabenhan"]."'";
  echo "</script>";

}
if(isset($_GET["idkham"])){
  echo "<script type='text/javascript'>";
  echo "window.tabOpen=".$_GET["idkham"];
  echo "</script>";
}
else{
  echo "<script type='text/javascript'>";
  echo "window.tabOpen2=0";
  echo "</script>";
}
?>



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
<script src="js/SlickGrid-master/plugins/slick.autotooltips.js"></script>

<link rel="stylesheet" href="js/SlickGrid-master/slick.grid.css"   type="text/css"/>
<link rel="stylesheet" href="js/SlickGrid-master/plugins/slick.summaryfooter.css" type="text/css"/>






<style type="text/css">
.bongmo{
	background: #aaaaaa;
	opacity: .0;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index:9999;
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

div[id$="TienThuVao_summary"] ,div[id$="TienChiRa_summary"],div[id$="TenNhanVien_summary"],div[id$="ThanhTienTonDau_summary"]{ 
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

.grid-canvas{
	background-color:#FBFAF5 !important;
}
.ui-button-icon-only {
  width: 1.5em  !important;
  background:url(./images/icon-cb.png) !important;
  box-shadow:none !important;
  border-bottom: 1px solid #327e04 !important;
  border-right: 1px solid #327e04 !important;
  border-top: 1px solid #327e04 !important;
  border-left:none !important;
}
.ui-button-icon-only:hover .ui-icon {
	background:none;
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





.outExcel {
  border: 1px solid #666;
  box-shadow: 0 0 3px #333;
  display: inline-block;
  height: 20px;
  margin-left: 5px;
  vertical-align: middle;
  width: 20px;
}
.dvcc {
  background: none repeat scroll 0 0 #f5f203;
  color: #000;
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
.colored4{
  background-color:pink;
  color:black;
}
.colored3{
  background-color:yellow;
  color:black;
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
#menuDVCC {
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
.at-input{
 width: 400px !important;

}
.textright{
	text-align:right!important;
}
.footrow td[aria-describedby="rowed12_TienThuVao"],.footrow td[aria-describedby="rowed12_TienChiRa"],
.footrow td[aria-describedby="rowed12_GhiChu"],.footrow td[aria-describedby="rowed12_MaPhieu"]
{
 background-color: #CEF6EC !important;
}

#n_dangluu{
	position:absolute;
	top: 45%;
	left: 45%;
	width: auto;
	z-index:9999999;
	padding: 3px;
	margin: 5px;
	height:35px;
	width:200px;
	text-align: center;
	font-weight: bold;
	display: block;
	border:solid 2px #DFD9C3;
	font-size:13px;
	background:#FBFAF5;
	color:#55A616;
	box-shadow: 2px #919191;
}
.slick-summaryfooter-column{
	text-align:right;
}
</style>


<body>
<div id="bongmo" class="" ></div>
<div id="n_dangluu" style="display:none">

</div>

<div id="panel_main" style="margin-top:10px;" >
<div id="top_main">
<div class="form_row">

<span>
<label for="from_day" style="width:17px"> Từ</label>
<input type="text"  style="width:109px" name="from_day" id='from_day'>
<label for="to_day" style="width:23px"> Đến </label>
<input type="text"   style="width:109px" name="to_day" id='to_day'>
<!--                            <input type="hidden" name="from_day_mask" id='from_day_mask'>
<input type="hidden" name="to_day_mask" id='to_day_mask'>-->
<button type="button" id="xem">Xem</button>
<button type="button" id="btn_excel_doanhthu_dichvu">Excel dịch vụ(Mẫu 10)</button>
<button type="button" id="btn_excel_doanhthu_thuoc">Excel thuốc xuất(Mẫu 1A)</button>
<button type="button" id="btn_excel_doanhthu_thuoc_B">Excel thuốc xuất BHYT(Mẫu 1B)</button>
<button type="button" id="btn_excel_doanhthu_thuoc_group">Excel thuốc xuất(Mẫu 1A-group)</button>
<button type="button" id="btn_excel_doanhthu_thuoc_group_B">Excel thuốc BHYT xuất(Mẫu 1B-group)</button>
<button type="button" id="btn_excel_nhap_thuoc">Excel thuốc nhập(Mẫu 2)</button>
<button type="button" id="btn_excel_nhap_thuoc_B">Excel thuốc BHYT nhập(Mẫu 2B)</button>
<button type="button" id="btn_excel_huybill">Xuất excel hủy bill</button>
<button type="button" id="btn_excel_doanhthukcb_bhyt">Xuất DT KCB BHYT (BH1)</button>
 
</span>

<!--  <label>Công ty: </label>
<input id='com_congty' class='com_congty'  style=" margin-left: 10px; " placeholder="--Chọn công ty--"></span>
<input id='com_congty1' class='com_congty1'  style="width:200px;display:none"> -->


<span class="custom-combobox"  style="display:none;">
<label style="color:red;font-size:12px;"> Đợt khám SK công ty </label>
<input id='com_dotkham' class='com_dotkham'  placeholder="--Chọn gói KSK công ty--" ></span>
<input id='com_dotkham1' class='com_dotkham1'  style="width:200px;display:none">



</div>
</div>
<div >
<div id="tabs">
<ul style="margin-left:5px;">
<li style="display:none;"><a href="#tabs-1" id="dsbenhnhancho">Nội trú chưa TT</a></li>
<li><a href="#tabs-2" id="dschuathanhtoan">Chưa thanh toán</a></li>
<li><a href="#tabs-7" id="dsphieuthuchi">Phiếu thu chi</a></li>
<li><a href="#tabs-12" id="dsdoichieu" class="danhdauphanquyen">Đối chiếu</a></li>
<li><a href="#tabs-3" id="tonghopthuchi">Tổng hợp phiếu thu chi</a></li>
<li style="display:none;"><a href="#tabs-4" id="dsphieuhoantrachidinh">Hoàn trả CĐ</a></li>
<li><a href="#tabs-5" id="dsbenhnhanconno">Bệnh nhân nợ</a></li>
<li><a href="#tabs-6" id="dsbillhuy">Danh sách phiếu thu chi chỉnh sửa</a></li>

<li style="display:none;"><a href="#tabs-8" id="dsdonthuoctralai">Đơn thuốc trả lại</a></li>
<li style="display:none;"><a href="#tabs-9" id="dstamungnoitru">Đề nghị tạm ứng nội trú</a></li>
<li style="display:none;"><a href="#tabs-10" id="dsBHCC">BH cao cấp</a></li>
<li style="display:none;"><a href="#tabs-11" id="dsthanhtoanstienan">Phiếu thanh toán tiền ăn</a></li>
</ul>
<div id="tabs-1">
<table id="rowed14" ></table>

</div>
<div id="tabs-2">
<table id="rowed3" ></table>
</div>
<div id="tabs-3">
<table id="rowed5"></table>

</div>
<div id="tabs-4">
<table id="rowed6"></table>
<div id="prowed6">
<div id="soluot" style="margin-left:40px">Số lượt= <span id="luot2"></span>
<input id="tongtienhuy2" class="disable" type="text" value="0" readonly disabled style="margin-left:550px;text-align:right;width:75px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   />
<input id="tiendatralai2" class="disable" type="text" value="0" readonly disabled style="margin-left:245px;text-align:right;width:75px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />

</div>
</div>
<table id="rowed7"></table>
<div id="prowed7">
<input id="phithuchien" class="disable" type="text" value="0" readonly disabled style="margin-left:409px;text-align:right;width:202px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
<input id="sotienhuy" class="disable" type="text" value="0" readonly disabled style="width:200px;background:#4CA109;text-align:right;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;" />
</div>
</div>
<div id="tabs-5">
<table id="rowed8"></table>

<table id="rowed9"></table>

</div>
<div id="tabs-6">
<table id="rowed10"></table>
<div id="prowed10">
<div class="hinhvuong sansanggoi"></div><label class="diengiai">Bill chính thức</label>
<div class="hinhvuong" style="background-color:#848484"></div><label class="diengiai">Bill hủy</label>
<div class="hinhvuong chuasansang"></div><label class="diengiai">Bill chỉnh sửa</label>
</div>
<table id="rowed11"></table>
</div>
<div id="tabs-7">

<div id="grid_12"></div>
<div id="footer3"  style="width:100%;height:20px;margin-top:-10px"></div> 

</div>
<div id="tabs-8">
<table id="rowed13"></table>
</div>
<div id="tabs-9">
<table id="rowed15"></table>
</div>
<div id="tabs-10">
<table id="rowed16"></table>
</div>
<div id="tabs-11">
<button type="button" id="excel_suatan">excel</button>
<div id="grid_13"></div>
<div id="footer13"  style="width:100%;height:20px;margin-top:-10px"></div> 
</div>
<div id="tabs-12">
	<div style="float:left;width:65%;">
		<div id="grid_17"></div>
		<div id="footer17"  style="width:100%;height:20px;margin-top:-10px"></div> 
	</div style="float:left;width:35%;">
	<div>
		<div id="grid_18"></div>
		<div id="footer18"  style="width:100%;height:20px;margin-top:-10px"></div> 
	</div>
</div>
</div>
</div>
</div>
<div id="dialog-thuhoiDvcc" title="Thu hồi nợ từ Dịch vụ cao cấp" style="display:none;">
<table width="100%" border="0" id="n_aploaikham">


<tr>
<td style="color:red">Số tiền thu hồi từ BHCC(4) </td>
<td><input type="text" id="at-bhcctra" class="at-input"  placeholder="Điền số tiền thu hồi từ cty BHCC"> </td>
</tr>
<tr>
<td style="color:blue">Số tiền thu hồi thêm từ BN nếu BHCC không trả đủ (5)</td>
<td><input type="text" id="at-bntrathem" class="at-input"  placeholder="Điền số tiền thu hồi thêm từ BN"> </td>
</tr>
<tr class="giabloggiuong">
<td>Tổng tiền dịch vụ</td>
<td><input type="text" id="at-tongtienDv" class="at-input" disabled="true"></td>
</tr>
<tr>
<td>Bệnh nhân đã trả</td>
<td><input type="text" id="at-bnTra" class="at-input" disabled="true"></td>
</tr>
<tr>
<td>BHCC  nợ</td>
<td><input type="text" id="at-bhccNo" class="at-input" disabled="true"></td>
</tr>
<tr>
<td>Ghi chú</td>
<td><input type="textarea" id="at-bhccGhichu" class="at-input"></td>
</tr>
</table>

</div>

<ul id="menu" >

<li><a id="vangmat" href="#"><span class="ui-icon ui-icon-closethick"></span><span class="menu_text">Vắng mặt</span></a></li>
<li><a id="thongtinbenhnhan" href="#"><span class="ui-icon ui-icon-person"></span><span class="menu_text">Thông tin bệnh nhân</span></a></li>
<li><a id="thongtinluotkham" href="#"><span class="ui-icon ui-icon-pencilx"></span><span class="menu_text">Thông tin lượt khám</span></a></li>
<li><a id="capnhatGioTraKQ" href="#"><span class="ui-icon ui-icon-clock"></span><span class="menu_text">Cập nhật giờ hẹn trả KQ</span></a></li>

</ul>
<ul id="menuDVCC" >

<li><a id="tranoDVCC" href="#"><span class="ui-icon ui-icon-closethick"></span><span class="menu_text">Trả nợ từ DVCC hoặc BN</span></a></li>


</ul>
</body>
</html>

<script type="text/javascript">
var bhytnoit = 0;
var bhytngoait = 0;	
var vpnoit= 0;
var vpngoait= 0;
var tphongban;
window.ID_GoiKhamCty=0;


jQuery(document).ready(function() {
  openform_shortcutkey();
  create_combobox('#com_dotkham','#com_dotkham1',".data_thuochmk","#data_thuochmk",create_dotkham_congty,500,240,'Danh mục ','data_ds_goikhambyidcongty',window.default_id_pb_ChuyenMon);

	$('#btn_excel_doanhthu_dichvu,#btn_excel_doanhthu_thuoc_B,#btn_excel_doanhthu_thuoc,#btn_excel_doanhthu_thuoc_group,#btn_excel_doanhthu_thuoc_group_B,#btn_excel_huybill,#btn_excel_nhap_thuoc,#btn_excel_nhap_thuoc_B,#btn_excel_doanhthukcb_bhyt').button();

	phanquyen();

	$('#xem').button();
  $('#btn_thongke').click(function(){
   window.open("pages.php?module=report&view=<?=$modules?>&action=thongkekham&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());

 })
  $('#excel_suatan').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=bill_suatan&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
  
  
  
  
   $('#btn_excel_doanhthu_dichvu').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=doanh_thu_excel&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
   $('#btn_excel_doanhthu_thuoc_group').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=doanh_thu_thuoc_1A&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
      $('#btn_excel_doanhthu_thuoc_group_B').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=doanh_thu_thuoc_1A_BHYT&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })

   $('#btn_excel_doanhthu_thuoc').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=doanh_thu_thuoc&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
    $('#btn_excel_doanhthu_thuoc_B').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=doanh_thu_thuoc_BHYT&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
   $('#btn_excel_huybill').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=huy_bill&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })

   $('#btn_excel_nhap_thuoc').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=duoc_mau2_nhap&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
      $('#btn_excel_nhap_thuoc_B').click(function(){
    window.open("pages.php?module=report&view=<?=$modules?>&action=duoc_mau2_nhap&type=excel&tungay="+$("#from_day").val()+"&denngay="+$("#to_day").val());
  })
  
   $('#btn_excel_doanhthukcb_bhyt').click(function(){
	  var c= confirm("Bạn muốn xuất doanh thu KCB BHYT ngày "+$("#from_day").val())
	  if(c===true){ 
		window.open("pages.php?module=report&view=<?=$modules?>&action=BangKeDoanhThuKCBDienBHYT_Excel&type=excel&ngay="+$("#from_day").val());
	  }
  })

  $( "#dialog-thuhoiDvcc" ).dialog({
    resizable: false,
    width:800,
    autoOpen:false,
    modal: true,
    buttons: {
      "Lưu": function() {

        if($("#at-bhcctra").val()!="" ){    
          if(window.ID_BHCC_TraNo==0){
            $.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_dvcc&oper=add",{iD_LuotKham_DVCC:window.iD_LuotKham_DVCC,bhcctra:$("#at-bhcctra").val(),bhccGhichu:$("#at-bhccGhichu").val(),bhccBntrathem:$("#at-bntrathem").val()}).done(function(data){
              $( "#dialog-thuhoiDvcc"  ).dialog( "close" );
              tooltip_message("Đã lưu");

              if ($('#bhccLonHonKhong').is(":checked"))
              {
                cbBHCC=1;
              }
              else
              {
                cbBHCC=0;
              }

              $("#rowed16").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_BHCC&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59"+'&checkboxbh='+cbBHCC,datatype:'json'}).trigger('reloadGrid');

                    //$("#rowed16").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_BHCC&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                    

                  });
          }else{
            $.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_dvcc&oper=edit",{ID_BHCC_TraNo:window.ID_BHCC_TraNo,iD_LuotKham_DVCC:window.iD_LuotKham_DVCC,bhcctra:$("#at-bhcctra").val(),bhccGhichu:$("#at-bhccGhichu").val(),bhccBntrathem:$("#at-bntrathem").val()}).done(function(data){
              $( "#dialog-thuhoiDvcc"  ).dialog( "close" );
              tooltip_message("Đã lưu");
                //$("#rowed16").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_BHCC&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
                if ($('#bhccLonHonKhong').is(":checked"))
                {
                  cbBHCC=1;
                }
                else
                {
                  cbBHCC=0;
                }

                $("#rowed16").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_BHCC&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59"+'&checkboxbh='+cbBHCC,datatype:'json'}).trigger('reloadGrid');

              });
          }
        }else{
          tooltip_message("Vui lòng nhập thông tin cần thiết");
        }
      },
      "Thoát": function() {
        $( this ).dialog( "close" );
      }
    },close:function(){
      $("#n_aploaikham").find("input").each(function(e) {
        $(this).val('');
      });
    },
  });


  $(document).bind("mouseup", function( e ) {
    $("#menuDVCC").hide();
  });


  search_thungan("#rowed12,#rowed3");

  $.dateEntry.setDefaults({spinnerImage: ''});
  jwerty.key('f5', false);

  $('body').bind('keydown', function(e) {
   if (jwerty.is("f5",e)) {
    $('#xem').click();
  }
})

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

  $('#rowed14').bind('keydown',function(e){
    if (e.keyCode == '32') {
     var rowData = jQuery('#rowed14').getRowData($('#rowed14').jqGrid('getGridParam', 'selrow') );

     parent.postMessage('tamung;tam_ung_notru;'+rowData['ID_BenhNhan']+';'+ rowData['ID_LuotKham']+';tamung;add','*');
   }
   if(jwerty.is('enter',e)) {

     var rowData = jQuery('#rowed14').getRowData($('#rowed14').jqGrid('getGridParam', 'selrow'));
     var ID_LuotKham = rowData['ID_LuotKham'];
     var id_benhnhan = rowData['ID_BenhNhan'];
     var MaBenhNhan = rowData['MaBenhNhan'];
     var TenBenhNhan = rowData['TenBenhNhan'];
     parent.postMessage('thutrano_add;thanhtoannoitru;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");

   }

 })

  window.loaikham=$.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiKham&id=ID_LoaiKham&name=TenLoaiKham', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
  window.nhanvien=$.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
  temp = jQuery(window).height()+490 ;
  $("#panel_main").css("height", temp + "px");
  $("#panel_main").fadeIn(1000);
  window.default_id_tang=2;
  window.ID_BHCC_TraNo=0;
  window.iD_LuotKham_DVCC=0;
  window.HoTenBn_DVCC='';
  window.BhccTra_DVCC=0;
  window.BhccBntrathem=0;
  window.BhccNo_DVCC=0;
  window.Tongtien_DVCC=0;
  window.BnTra_DVCC=0;
  window.Loai_DVCC=0;
  window.idRowSelect_DVCC=0;
  window.bhccGhichu='';
         //window.BhccTongTienPhaiTra=0;

         $("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
         $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
         $("#from_day").datepicker({
           dateFormat:  $.cookie("ngayJqueryUi")
         });
         $("#to_day").datepicker({
           dateFormat:  $.cookie("ngayJqueryUi")		
         });
         $("#from_day, #to_day").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
         window._tungay='';
         window._denngay='';
         window.tenbenhnhan3="";
         window.contro="2";
         $("#dsbenhnhancho").click(function(){
          window.contro="1";
          $("#xem").click();
        })
         $("#dschuathanhtoan").click(function(){
          window.contro="2";
          $("#xem").click();
        })
         $("#tonghopthuchi").click(function(){
          window.contro="3";
          $("#xem").click();
        })
         $("#dsphieuhoantrachidinh").click(function(){
          window.contro="4";
          $("#xem").click();
        })
         $("#dsbenhnhanconno").click(function(){
          window.contro="5";
          $("#xem").click();
        })
         $("#dsbillhuy").click(function(){
          window.contro="6";
          $("#xem").click();
        })
         $("#dsphieuthuchi").click(function(){
			  window.contro="7";

			  $("#xem").click();
			  $("#bongmo").addClass('bongmo');
				// $('body').addClass('bongmo');
	   })
	   
		$("#dsdoichieu").click(function(){
			window.contro="12";

			$("#xem").click(); 
		})
         $("#dsdonthuoctralai").click(function(){
          window.contro="8";
            //alert();
            $("#xem").click();
          })
         $("#dstamungnoitru").click(function(){
          window.contro="9";
            //alert();
            $("#xem").click();
          })

         $("#dsBHCC").click(function(){
          window.contro="10";
            //alert();
            $("#xem").click();
          })

         $("#dsthanhtoanstienan").click(function(){
          window.contro="11";            
          $("#xem").click();
        })
         $("#xem").button();
         $( "#tabs" ).tabs({

         });
         create_grid();
         create_grid2();
         create_grid3();
         create_grid4();
         create_grid5();
         create_grid6();
         create_grid7();
         create_grid8();
         create_grid9();
         create_grid10();
         create_grid11();
         create_grid14();
         create_grid15();
         create_grid16();
		 create_grid17();
		 create_grid18();
         resize_control();


         checkbox_search("gs_SanSangGoiVaoKham","#rowed3");
         checkbox_search("gs_noitru","#rowed12");
         $(window).resize(function() {
          temp = jQuery(window).height() - 50;
          $("#panel_main").css("height", temp + "px");
            //resize_control();
          })






         if(window.tabOpen==4) 
         {
            //kiểm tra xem theo ngày 
            if(window.kieuxem=='ngay'){
              $( "#tabs" ).tabs({ active: 4});
              $('#from_day').val(window.ngay);
              $('#to_day').val(window.ngay);
              $("#dsbenhnhanconno").click(); 
            }
            //hay là từ ngày đến ngày
            if(window.kieuxem=='thang'){
              $( "#tabs" ).tabs({ active: 4});
              $('#from_day').val(window.ngay);
              $('#to_day').val(window.denngay);
              $("#dsbenhnhanconno").click(); 
            }

          }
          else
          {
            $( "#tabs" ).tabs({ active: 1 });
          }
      // $('#rowed3').jqGrid('setCaption', 'Danh sách chưa thanh toán '+ $("#rowed3").jqGrid('getGridParam', 'records'));
    })

function create_layout() {
  $('#panel_main').layout({
    resizerClass: 'ui-state-default'
    , north: {
      resizable: true
      , size: "5%"
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


      }

    }
    , center: {
      resizable: true
      , size: "65%"

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


function resize_control() {


  $("#rowed3").setGridWidth($(window).width()-50);
  $("#rowed3").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
  $("#rowed4").setGridWidth($(window).width()-50);
  $("#rowed4").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-110);
  $("#rowed5").setGridWidth($(window).width()-45);
  $("#rowed5").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
  $("#rowed6").setGridWidth($(window).width()-50);
  $("#rowed6").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-230);
  $("#rowed7").setGridWidth($(window).width()-50);
  $("#rowed7").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-450);
  $("#rowed8").setGridWidth($(window).width()-50);
  $("#rowed8").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-300);
  $("#rowed9").setGridWidth($(window).width()-50);
  $("#rowed9").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-400);
  $("#rowed10").setGridWidth($(window).width()-50);
  $("#rowed10").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-230);
  $("#rowed11").setGridWidth($(window).width()-50);
  $("#rowed11").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-400);		
  $('#grid_12').css({'height' : $(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-40+'px'});
  $('#grid_12').css({'width' : $(window).width()-50+'px'});

       /* $("#rowed12").setGridWidth($(window).width()-50);
       $("#rowed12").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);*/
       $("#rowed13").setGridWidth($(window).width()-50);
       $("#rowed13").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
       $("#rowed14").setGridWidth($(window).width()-50);
       $("#rowed14").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
       $("#rowed15").setGridWidth($(window).width()-50);
       $("#rowed15").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-130);
       $("#rowed16").setGridWidth($(window).width()-50);
       $("#rowed16").setGridHeight($(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-150);
     }


     function create_grid14() {

      window.kiemtrasearch = true;
      $("#rowed14").jqGrid({
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoanNoiTru',
        datatype: "json",
        colNames: ['LuotKham', '<?php get_text1("maBN") ?>', 'Họ lót','Tên BN',
        '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
        'Đối tượng','Giờ vào viện',
        'ID_BenhNhan','Tổng cộng','Tạm ứng','Còn lại','Giờ ra viện','Khoa','SPK','Gọi loa','Tùy biến','Cơm'],
        colModel: [
        {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
        {name: 'MaBenhNhan',width: "5%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
        {name: 'HoLotBenhNhan',width: "10%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
        {name: 'TenBenhNhan', width: "4%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
        {name: 'Tuoi',width: "3%", index: 'Tuoi', search: true,  editable: false, align: 'left', hidden: false},
        {name: 'GioiTinh', width: "2%", index: 'GioiTinh', search: true, editable: false, align: 'left', hidden: false},
        {name: 'LoaiDoiTuongKham',width: "4%", sortable: true, index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
        {name: 'NgayGioVaoVien',width: "6%",sortable: true,search: true, index: 'NgayGioVaoVien', align: 'left', hidden: false, },
        {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", hidden: true},
        {name: 'TongCong',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TongCong', align: 'right', hidden: false,search: true},
        {name: 'TamUng',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TamUng',align: 'right',  hidden: false,search: true},
        {name: 'ConLai',width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'ConLai', align: 'right', hidden: false,search: true},
        {name: 'NgayGioRaVien',width: "6%",sortable: true,search: true, index: 'NgayGioRaVien', align: 'left', hidden: false, },
        {name: 'Khoa',width: "6%",sortable: true,search: true, index: 'Khoa', align: 'left', hidden: true, },
        {name: 'SoPhieuKhamGoiLoa',width: "0%",index: 'SoPhieuKhamGoiLoa',  hidden: true},
        {name: 'action',sortable:false, index: 'action', width: "3%", align: 'center', edittype: "button", hidden: true, },
        {name: 'action2',sortable:false, index: 'action2', width: "3%", align: 'center', edittype: "button", hidden: true, },
        {name: 'suatan',sortable:false, index: 'suatan', width: "3%", align: 'center', edittype: "button", hidden: true, },
        ],
        loadonce: true,
        scroll: false,
        modal: true,
        shrinkToFit: true,
        cmTemplate: {sortable: false},
        rowNum: 10000000,
        rowList: [],
        pager: '#prowed14',
        sortname: 'NgayGioVaoVien',
        height: 100,
        width: 100,
        viewrecords: true,
        ignoreCase: true,
        sortorder: "desc",
        footerrow:true,
        onSelectRow: function(id) {


        },
        ondblClickRow: function(rowId) {




         var rowData = jQuery('#rowed14').getRowData($('#rowed14').jqGrid('getGridParam', 'selrow'));
         var ID_LuotKham = rowData['ID_LuotKham'];
         var id_benhnhan = rowData['ID_BenhNhan'];
         var MaBenhNhan = rowData['MaBenhNhan'];
         var TenBenhNhan =rowData['HoLotBenhNhan']+" "+rowData['TenBenhNhan'];
				// if(rowData['LoaiDoiTuongKham']=='BHYT'){		
         parent.postMessage('thutrano_add;noitru_bhyt;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");	 
				// }
				// else{					 
					// parent.postMessage('thutrano_add;thanhtoannoitru;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");
				// }

            // parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");*/

			 // parent.postMessage('tamung;tam_ung_notru;'+id_benhnhan+';'+ID_LuotKham+';tamung;add','*');
               //  dialog_main("Chi tiết viện phí " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 98, 100, 567433265743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=22&ID_LuotKham="+ID_LuotKham+"&idbenhnhan="+id_benhnhan+"&oper=add");

             },
             onselect: function(rowId, rowIndex, columnIndex) {
                // $(".ui-icon-pencil").trigger('click');
              //  alert(rowId("MaBenhNhan"));
               // alert(rowIndex);
               // alert(columnIndex);
             },
             onRightClickRow: function(rowid, iRow, iCol, e) {
             },
             loadComplete: function(data) {
              var ids = $('#rowed14').jqGrid('getDataIDs');

              for (i = 0; i < ids.length; i++) {
                var rowData = jQuery('#rowed14').getRowData(ids[i]);








                var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";               
                var soLK= rowData['SoPhieuKhamGoiLoa'];
                var iD_LuotKham= rowData['ID_LuotKham'];


                se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"' onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                $("#rowed14").jqGrid('setRowData', ids[i], {action: se});




                se2 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"' onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                $("#rowed14").jqGrid('setRowData', ids[i], {action2: se2});









                var  NgayGioRaVien=(rowData["NgayGioRaVien"]);

                if(NgayGioRaVien!='')
                {
                  $("#rowed14").setCell (ids[i],'NgayGioRaVien','',{ background:'orange'});

                }




                window.rowcount_luoichuathanhtoan = $("#rowed14").getGridParam("reccount");


                var d=$("#rowed14").jqGrid('getGridParam', 'records');


                $("#rowed14").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);


                sumTongCong = $("#rowed14").jqGrid("getCol", "TongCong", false, "sum");
                sumTamUng = $("#rowed14").jqGrid("getCol", "TamUng", false, "sum");
                sumConLai = $("#rowed14").jqGrid("getCol", "ConLai", false, "sum");



                $("#rowed14").jqGrid("footerData", "set", {
                  TongCong: sumTongCong,
                  TamUng: sumTamUng,
                  ConLai: sumConLai,
                  MaBenhNhan:d
                });

              }
            },
            caption: "Ds chưa thanh toán"
          });
$("#rowed14").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed14").jqGrid('navGrid', "#prowed14", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

}






function create_grid() {
  window.kiemtrasearch = true;
  $("#rowed3").jqGrid({
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan',
    datatype: "json",
    colNames: ['LuotKham', '<?php get_text1("maBN") ?>', 'Họ lót','Tên',
    '<?php get_text1("tuoi") ?>', '<?php get_text1("gioitinh") ?>',
    'Phân loại khám','Đối tượng','Giờ đến','Bác sĩ','Kết thúc','Hẹn KQ', 'Ghi chú', 'Trạng thái',
    'Có mặt', 'Ghi chú', 'ID_BenhNhan','Hồ sơ','Tổng cộng','Tạm ứng','Còn lại','isdvcc','SoPhieuKhamGoiLoa','Gọi loa','Tùy biến'],
    colModel: [
    {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'MaBenhNhan',width: "5%",  classes: "CotSoTien", sortable: true,sorttype: 'number', index: 'MaBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'HoLotBenhNhan',width: "10%",  sortable: true, index: 'TenBenhNhan', search: true, editable: false, align: 'left', hidden: false},
    {name: 'TenBenhNhan', width: "4%",sortable: true, index: 'TenBenhNhan', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'Tuoi',width: "3%", index: 'Tuoi', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'GioiTinh', width: "2%", index: 'GioiTinh', search: true, editable: false, align: 'left', hidden: false},

    {name: 'TenPhanLoaiKham', width: "10%", index: 'TenPhanLoaiKham', search: true, editable: false, align: 'left', hidden: false},
    {name: 'LoaiDoiTuongKham', width: "5%",index: 'LoaiDoiTuongKham', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'ThoiGianVaoKham',width: "4%",  sortable: true,index: 'ThoiGianVaoKham', search: false, editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
      dataInit: function(element)
      {
        $(element).timeEntry({show24Hours: true, spinnerImage: ''});
      }
    }
  },




  {name: 'BSLamSang',width: "5%", sortable: true, index: 'BSLamSang', search: true,  editable: false, align: 'left', hidden: false},
  {name: 'ThoiGianKetThucKham',width: "4%",sortable: true,search: true, index: 'ThoiGianKetThucKham', align: 'left', hidden: false, },
  {name: 'NgayGioHenTraKQ',width: "6%",sortable: true,search: true, index: 'NgayGioHenTraKQ', align: 'left', hidden: false, },

  {name: 'GhiChu', index: 'GhiChu', width: "6%", search: false, editable: false, align: 'left', hidden: true},

  {name: 'TrangThai', index: 'TrangThai', search: true, width: "8%", editable: false, align: 'left', hidden: false},
  {name: 'SanSangGoiVaoKham', width: "4%",index: 'SanSangGoiVaoKham', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":;1:Co;0:Ko"},  formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: true, },

  {name: 'NotesStatus', index: 'NotesStatus', width: "0%", hidden: true},
  {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", hidden: true},
  {name: 'HoanTatHoSo',width: "3%",edittype: "checkbox", editoptions: {value: "1:0"}, index: 'HoanTatHoSo', sortable:true,search:true, hidden: false},
  {name: 'TongCong',width: "3%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TongCong', align: 'right', hidden: false,search: true},
  {name: 'TamUng',width: "3%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'TamUng',align: 'right',  hidden: false,search: true},
  {name: 'ConLai',width: "3%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,classes: "CotSoTien",sorttype: 'number', index: 'ConLai', align: 'right', hidden: false,search: true},

  {name: 'IsDichVuCC',width: "0%",index: 'IsDichVuCC',  hidden: true},
  {name: 'SoPhieuKhamGoiLoa',width: "0%",index: 'SoPhieuKhamGoiLoa',  hidden: true},
  {name: 'action',sortable:false, index: 'action', width: "3%", align: 'center', edittype: "button", hidden: true, },
  {name: 'action2',sortable:false, index: 'action2', width: "3%", align: 'center', edittype: "button", hidden: true, },
  ],
           /* loadonce: true,
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
            footerrow:true,*/

            loadonce: true,
            scroll: 1,
            hidegrid: false,
            rowNum: 25,
            pginput:false,
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            rowList: [],

            viewrecords: true,
            ignoreCase: true,
            //sortorder: "desc",
            footerrow:true,
            onSelectRow: function(id) {


            },
            ondblClickRow: function(rowId) {
             var rowData = jQuery(this).getRowData(rowId);

             alert('Lưu ý, Thanh toán xong sẽ khóa lượt khám và bác sỹ sẽ không thể kê toa');

             var ID_LuotKham = rowData['ID_LuotKham'];
             var id_benhnhan = rowData['ID_BenhNhan'];
             var MaBenhNhan = rowData['MaBenhNhan'];
             var TenBenhNhan =rowData['HoLotBenhNhan']+" "+rowData['TenBenhNhan'];;
				// if(rowData['LoaiDoiTuongKham']=='BHYT'){		
          parent.postMessage('thutrano_add;ngoaitru_bhyt;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");		 

				// }
				// else{					 
				//	parent.postMessage('thutrano_add;chitietthungan;'+ID_LuotKham+';'+id_benhnhan+';add;'+MaBenhNhan+';'+TenBenhNhan, "*");
				// }
               //  dialog_main("Chi tiết viện phí " + ' BN '+TenBenhNhan+' - '+MaBenhNhan, 98, 100, 567433265743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=ChiTietThuNgan_1&type=test&id_form=22&ID_LuotKham="+ID_LuotKham+"&idbenhnhan="+id_benhnhan+"&oper=add");

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
                window.rowData_grdchuaThanhToan = rowData;

                if ($.trim(rowData[colName]) != "") {
                  window.rowid_danhcho = rowid;
                  window.from = colModel[iCol].name;
                  if ($("#menu").width() + e.pageX > $(document).width()) {
                    $("#menu").css('left', e.pageX - $("#menu").width() + "px");
                  } else {
                    $("#menu").css('left', e.pageX + "px");
                  }
                  if ($("#menu").height() + 30 + e.pageY > $(document).height()) {
                    $("#menu").css('top', e.pageY - $("#menu").height() + "px");
                  } else {
                    $("#menu").css('top', e.pageY + "px");
                  }
                  $("#menu").show(300);

                }

                $(document).bind("contextmenu", function(e) {
                  return false;
                });
                var vangmat = window.rowData_grdchuaThanhToan["SanSangGoiVaoKham"];
                if (vangmat == 0)
                {
                    // alert(hoanTatHoSo);
                    $("#vangmat span.ui-icon").removeClass("ui-icon-closethick").addClass("ui-icon-check");
                    $("#vangmat span.menu_text").html('Có mặt');
                  }
                  else
                  {

                    $("#vangmat span.ui-icon ").removeClass("ui-icon-check").addClass("ui-icon-closethick");
                    $("#vangmat span.menu_text").html('Vắng mặt');
                  }

                },
                loadComplete: function(data) {


                  var gridDOM = this; 
                  if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {

                    setTimeout(function () {                            
                      gridDOM.triggerToolbar();
                    }, 100);
                    console.log(1);
                  }else
                  {


                    var ids = $('#rowed3').jqGrid('getDataIDs');

                    for (i = 0; i < ids.length; i++) {
                      var rowData = jQuery('#rowed3').getRowData(ids[i]);






                      var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";               
                      var soLK= rowData['SoPhieuKhamGoiLoa'];
                      var iD_LuotKham= rowData['ID_LuotKham'];


                      se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"' onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                      $("#rowed3").jqGrid('setRowData', ids[i], {action: se});




                      se2 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"' onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','"  +  iD_LuotKham +"');\" />";
                      $("#rowed3").jqGrid('setRowData', ids[i], {action2: se2});






                      window.rowcount_luoichuathanhtoan = $("#rowed3").getGridParam("reccount");









                      if (rowData["IsDichVuCC"] == 1) {
                        $("#rowed3").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: 'pink'});
                      }else
                      {
                        $("#rowed3").setCell(ids[i], 'LoaiDoiTuongKham', '', {background: '#FFFFFF'});
                      }



                      if (rowData["NotesStatus"] == 1) {
                        var _class = "do";

                      } else if (rowData["NotesStatus"] == 2) {
                        var _class = "cam";

                      } else if (rowData["NotesStatus"] == 0) {
                        var _class = "xanh";

                      }
                      ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                      $("#rowed3").jqGrid('setRowData', ids[i], {GhiChu: ghichu});

                      var d=$("#rowed3").jqGrid('getGridParam', 'records');


                      $("#rowed3").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);


                      sumTongCong = $("#rowed3").jqGrid("getCol", "TongCong", false, "sum");
                      sumTamUng = $("#rowed3").jqGrid("getCol", "TamUng", false, "sum");
                      sumConLai = $("#rowed3").jqGrid("getCol", "ConLai", false, "sum");



                      $("#rowed3").jqGrid("footerData", "set", {
                        TongCong: sumTongCong,
                        TamUng: sumTamUng,
                        ConLai: sumConLai,
                        MaBenhNhan:d
                      });
                      $("#bongmo").removeClass('bongmo');
					//$('body').removeClass('bongmo');
					$("#xem").button('enable');
        }
      }
    },
    caption: "Ds chưa thanh toán"
  });
$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

}




$("#vangmat").click(function(e) {

  var sanSangGoiVaoKham = window.rowData_grdchuaThanhToan["SanSangGoiVaoKham"];
  var iD_LuotKham = window.rowData_grdchuaThanhToan["ID_LuotKham"];
  $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_edit&oper=update_chuasansang&id_luotkham=' + iD_LuotKham + '&sanSangGoiVaoKham=' + sanSangGoiVaoKham).done(function(data)
  {
    if ($.trim(data) == '') {
      tooltip_message("<?php get_text1("sua_thanhcong") ?>");

    }
    else {
      tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
    }

  });
  $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');

})



$( "#capnhatGioTraKQ" ).click(function() {
          // alert('');

          $.post('pages.php?module=web_services&function=get_link&action=index&folder=hen_tra_ket_qua:').done(function(data) {
           elem=1 + Math.floor(Math.random() * 1000000000);
           width=90;
           height=90;
           ID_LuotKham=rowData_grdchuaThanhToan["ID_LuotKham"];
         //alert(ID_LuotKham);
         var folder= data.split(';');
         var links="pages.php?module=canlamsang&view=hen_tra_ket_qua&id_form=754&id_loai=90&idluotkham="+ID_LuotKham;
         dialog_add_dm("",width,height,elem,links);
       })
        });

$("#thongtinluotkham").click(function(e){
  //alert();
  tenBenhNhan=rowData_grdchuaThanhToan["TenBenhNhan"];
  ID_LuotKham=rowData_grdchuaThanhToan["ID_LuotKham"];
  parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");

});

$("#thongtinbenhnhan").click(function(e){
  idbenhnhan=rowData_grdchuaThanhToan["ID_BenhNhan"];
  tenBenhNhan=rowData_grdchuaThanhToan["TenBenhNhan"];

      //alert(idbenhnhan);
      parent.postMessage("editbenhnhan;"+idbenhnhan+";"+tenBenhNhan, "*");


    })




function GoiLoa(SoLk,ipClient,iD_LuotKham)
{
  var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=2'+'&ipClient='+ipClient+'&oper=default';

  $.post('pages.php?module=web_services&action=controllerSendSocket' + chuoiGoi+'&oper=default').done(function(data)
  {
           /* if ($.trim(data) == '1') {
                tooltip_message("đã cập nhật hệ thống");

               
              }*/


            });


}


function GoiLoa2(SoLk,ipClient,iD_LuotKham)
{


 goiloa_dialog_main("IP  " + ipClient+" - Số phiếu khám "+SoLk, 830, 350, "pages.php?module=web_services&view=goi_loa_tuy_chinh&action=index&id_form=41&type=test&ipClient="+ipClient+"&SoLk="+SoLk);


}


function moghichu(id_benhnhan, hoten) {
  elem = 1 + Math.floor(Math.random() * 1000000000);
  dialog_main("Ghi chú của bệnh nhân: " + hoten, 100, 70, elem, 'pages.php?module=hanhchinh&view=ghi_chu&id_form=230&idbenhnhan=' + id_benhnhan)
}
$("#xem").click(function() {
 window.search_dialog=0;

 if(window.contro=="1"){

  $("#rowed14").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoanNoiTru&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="2"){		
  var dateParts1 = $( '#from_day' ).val().split("/");
  var dateParts2 = $( '#to_day' ).val().split("/");
  var fromday = new Date('20'+''+dateParts1[2], (dateParts1[1] - 1), dateParts1[0]);
  var today = new Date('20'+''+dateParts2[2], (dateParts2[1] - 1), dateParts2[0]);
  var timeDiff = Math.abs(today.getTime() - fromday.getTime());
  var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
  if(diffDays>31){
   alert("Khoảng thời gian chọn cho phép là 31 ngày");	
 }else{							
   $.ajax({
    type: 'POST',
    async : false,
    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ds_chuathanhtoan&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val(),
    success: function(data, status, xhr) {			
     $("#rowed3").jqGrid('setGridParam', { datatype: 'jsonstring', datastr: data }).trigger('reloadGrid');			
   },
 });
 }
}
else if(window.contro=="3"){
  $("#rowed5").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tonghopthuchi&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="4"){
  $("#rowed6").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_dscacphieuhoantrachidinh&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="5"){
  $("#rowed8").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconno&tunngay='+$( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="6"){
  $("#rowed10").jqGrid('setGridParam',{datatype:'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_billhuychinhsua&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="7"){

 $("#bongmo").addClass('bongmo');

 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cacphieuthuchi2&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59").done(function(data){
   data=$.parseJSON(data)
   window.dataView_12.setItems(data);
   window.dataView_12.endUpdate();	
   window.dataView_12.refresh();										
   window.grid_12.invalidate();
   $("#bongmo").removeClass('bongmo');
   $("#xem").button('enable');
 })


}
else if(window.contro=="8"){

 $("#rowed13").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_cacdonthuoctralai&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
} else if(window.contro=="9"){

 $("#rowed15").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_denghitamung&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="10"){
  var cbBHCC=0;
  if ($('#bhccLonHonKhong').is(":checked"))
  {
    cbBHCC=1;
  }
  else
  {
    cbBHCC=0;
  }

  $("#rowed16").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_BHCC&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59"+'&checkboxbh='+cbBHCC,datatype:'json'}).trigger('reloadGrid');
}
else if(window.contro=="11"){        
  $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_billsuatan&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()
    ).done(function(data){
     data=$.parseJSON(data)
     window.dataView_13.setItems(data);		
     window.dataView_13.endUpdate();	
     window.dataView_13.refresh();										
     window.grid_13.invalidate();
     $("#xem").button('enable');
   })

  }
else if(window.contro=="12"){ 

 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_doichieu&tungay='+ $( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59").done(function(data){
   data=$.parseJSON(data)
   window.dataView_17.setItems(data);
   window.dataView_17.endUpdate();	
   window.dataView_17.refresh();										
   window.grid_17.invalidate(); 
   $("#xem").button('enable');
 })


}
  else{

  }

  var d=$("#rowed3").jqGrid('getGridParam', 'records');


  $("#rowed3").jqGrid('setCaption', 'Danh sách chưa thanh toán: '+ d);
});



function create_grid17(){		
  window.dataView_17;	
  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();  		 
  window.grid_17;	 
  var options = {
   enableCellNavigation: true,
   showHeaderRow: true,
   headerRowHeight: 30,
   explicitInitialization: true,
   forceFitColumns: true,
   multiColumnSort: true
 };		
 window.columns_17 = [		 	 
 
 {name:'Mã BN',id:'MaBenhNhan',field: "MaBenhNhan", width:35, sortable: true},
 {name:'Họ lót',id:'HoLotBenhNhan',field: "HoLotBenhNhan", width:70, sortable: true},
 {name:'Tên BN',id:'TenBenhNhan',field: "TenBenhNhan", width:35, sortable: true},  
 {name:'Nợ cũ',id:'TienNoCu',field: "TienNoCu", width:30,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Tiền mặt',id:'TienMat',field: "TienMat", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Tiền lưu',id:'TongTienLuu',field: "TongTienLuu", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Tiền thuốc',id:'TienLuuThuoc',field: "TienLuuThuoc", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
  {name:'Tiền khám',id:'TienLuuKham',field: "TienLuuKham", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Lệch',id:'TienLech',field: "TienLech", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
  {name:'Lệch thuốc',id:'LechThuoc',field: "LechThuoc", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
   {name:'Đến lúc',id:'ThoiGianVaoKham',field: "ThoiGianVaoKham", width:60,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
    {name:'Lý do',id:'LyDoLechTienThuoc',field: "LyDoLechTienThuoc", width:60,cssClass: "textright", sortable: true},
     {name:'Đối tượng',id:'LoaiDoiTuongKham',field: "LoaiDoiTuongKham", width:60,cssClass: "textright", sortable: true},
      {name:'Tiền BHYT ',id:'TongTienBHYTChiTra',field: "TongTienBHYTChiTra",formatter: number, width:60,summaryFormatter: TienThuVaoFormatter,cssClass: "textright", sortable: true},
 		

 ];
 window.dataView_17 = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });			 
 window.grid_17 = new Slick.Grid("#grid_17", window.dataView_17,  window.columns_17, options);		

 window.grid_17.registerPlugin(groupItemMetadataProvider);
 var summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_17, window.grid_17, $("#footer17"));
 window.grid_17.setSelectionModel(new Slick.CellSelectionModel());	
 window.grid_17.setSelectionModel(new Slick.RowSelectionModel());

 $('#grid_17').css({'height': $(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-90+'px'});
 $('#grid_17').css({'width' : $(window).width()/2+150+'px'});

 
 window.grid_17.onSort.subscribe(function (e, args) {
   var cols = args.sortCols;

   window.dataView_17.sort(function (dataRow1, dataRow2) {
    for (var i = 0, l = cols.length; i < l; i++) {
      var field = cols[i].sortCol.field;
      var sign = cols[i].sortAsc ? 1 : -1;
      var value1 = dataRow1[field], value2 = dataRow2[field];
      var result = (value1 == value2 ? 0 : (value1 > value2 ? 1 : -1)) * sign;
      if (result != 0) {
       return result;
     }
   }
   return 0;
 });
   window.grid_17.invalidate();
   window.grid_17.render();
 });

 window.dataView_17.onRowCountChanged.subscribe(function (e, args) {
  window.grid_17.updateRowCount();
  window.grid_17.invalidateRows(args.rows);
  window.grid_17.render();		


});	 

 plugin = new Slick.AutoTooltips();
 window.grid_17.registerPlugin(plugin);
 $(window.grid_17.getHeaderRow()).delegate(":input", "change keyup", function (e) {
   var columnId = $(this).data("columnId");
   if (columnId != null) {
    columnFilters1[columnId] = $.trim($(this).val());
    window.dataView_17.refresh();
  }
});
 window.grid_17.onHeaderRowCellRendered.subscribe(function(e, args) {
   $(args.node).empty();
   $("<input type='text'>")
   .data("columnId", args.column.id)
   .val(columnFilters[args.column.id])
   .appendTo(args.node);
 });		

 window.grid_17.onClick.subscribe(function (e, args){			
  rowData = args.item;
   var ID_LuotKham = window.dataView_17.getItem(args.row).ID_LuotKham;
   //alert(ID_LuotKham);
   $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_doichieu_ct&id_luotkham='+ID_LuotKham).done(function(data){
		data=$.parseJSON(data)
		window.dataView_18.setItems(data);
		window.dataView_18.endUpdate();	
		window.dataView_18.refresh();										
		window.grid_18.invalidate();
	})
  
})		
 window.grid_17.init();
 window.dataView_17.beginUpdate();
 window.dataView_17.setFilter(filter1);		
 window.dataView_17.endUpdate();	
}


function create_grid18(){		
  window.dataView_18;	
  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();  		 
  window.grid_18;	 
  var options = {
   enableCellNavigation: true,
   showHeaderRow: true,
   headerRowHeight: 30,
   explicitInitialization: true,
   forceFitColumns: true,
   multiColumnSort: true
 };		
 window.columns_18 = [		 	 

 {name:'Tên dịch vụ',id:'TenLoaiKham',field: "TenLoaiKham", width:60, sortable: true},
 {name:'Loại',id:'Loai',field: "Loai", width:35, sortable: true},
 {name:'Đơn giá',id:'PhiDuKien',field: "PhiDuKien", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 
 {name:'Số lượng',id:'SoLuong',field: "SoLuong", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Thành tiền',id:'PhiThucHien',field: "PhiThucHien", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true}, 			

 ];
 window.dataView_18 = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });			 
 window.grid_18 = new Slick.Grid("#grid_18", window.dataView_18,  window.columns_18, options);		

 window.grid_18.registerPlugin(groupItemMetadataProvider);
 var summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_18, window.grid_18, $("#footer18"));
 window.grid_18.setSelectionModel(new Slick.CellSelectionModel());	
 window.grid_18.setSelectionModel(new Slick.RowSelectionModel());

 $('#grid_18').css({'height': $(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-70+'px'});
 $('#grid_18').css({'width' : $(window).width()/2-50+'px'});


 window.dataView_18.setGrouping([

 {
  getter: "Loai",
  formatter: function (g) {
    var total = sumTotalsFormatter(g.totals, columns_18[4]);
    console.log(total);
    return "<strong style='font-size:14px;'>" + g.value + "</strong> <strong style='font-size:14px;'>, Tổng tiền: " + total.formatMoney(0, ',', '.')  + " </strong></span>";			
  },	
  aggregators: [new Slick.Data.Aggregators.Sum("PhiThucHien")],
  aggregateCollapsed: true,     
  collapsed: false,
  lazyTotalsCalculation: false,
  displayTotalsRow: false,
}
]
);
 window.grid_18.onSort.subscribe(function (e, args) {
   var cols = args.sortCols;

   window.dataView_18.sort(function (dataRow1, dataRow2) {
    for (var i = 0, l = cols.length; i < l; i++) {
      var field = cols[i].sortCol.field;
      var sign = cols[i].sortAsc ? 1 : -1;
      var value1 = dataRow1[field], value2 = dataRow2[field];
      var result = (value1 == value2 ? 0 : (value1 > value2 ? 1 : -1)) * sign;
      if (result != 0) {
       return result;
     }
   }
   return 0;
 });
   window.grid_18.invalidate();
   window.grid_18.render();
 });

 window.dataView_18.onRowCountChanged.subscribe(function (e, args) {
  window.grid_18.updateRowCount();
  window.grid_18.invalidateRows(args.rows);
  window.grid_18.render();		


});	 

 plugin = new Slick.AutoTooltips();
 window.grid_18.registerPlugin(plugin);
 $(window.grid_18.getHeaderRow()).delegate(":input", "change keyup", function (e) {
   var columnId = $(this).data("columnId");
   if (columnId != null) {
    columnFilters1[columnId] = $.trim($(this).val());
    window.dataView_18.refresh();
  }
});
 window.grid_18.onHeaderRowCellRendered.subscribe(function(e, args) {
   $(args.node).empty();
   $("<input type='text'>")
   .data("columnId", args.column.id)
   .val(columnFilters[args.column.id])
   .appendTo(args.node);
 });		

 window.grid_18.onDblClick.subscribe(function (e, args){			
  rowData = args.item;          
})		
 window.grid_18.init();
 window.dataView_18.beginUpdate();
 //window.dataView_18.setFilter(filterct);		
 window.dataView_18.endUpdate();	
}

function create_grid2() {
  $("#rowed4").jqGrid({
    url: '',
    datatype: "local",
    colNames: ['ID','LuotKham', 'Mã BN', 'Họ tên',
    'Tuổi', 'Giới',
    'Loại khám', 'Hẹn lúc', 'Giờ đến',
    'BS được y/cầu', 'BS trước', 'Ghi chú', 'Có mặt', 'DHST', 'BS khám'],
    colModel: [
    {name: 'ID_BenhNhan', index: 'ID_BenhNhan', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'MaBenhNhan', index: 'MaBenhNhan', search: true, width: "1%", editable: false, align: 'left', hidden: false},
    {name: 'TenBenhNhan',  index: 'TenBenhNhan', search: true, width: "3%", editable: false, align: 'left', hidden: false},
    {name: 'Tuoi', index: 'Tuoi', search: false, width: "1%", editable: false, align: 'left', hidden: false},
    {name: 'GioiTinh', index: 'GioiTinh', search: false, width: "1%", editable: false, align: 'left', hidden: false},
    {name: 'TenPhanLoaiKham', index: 'TenPhanLoaiKham', search: false, width: "2%", editable: false, align: 'left', hidden: false},

    {name: 'GioHenKham', index: 'GioHenKham', search: false, width: "1%", editable: false, align: 'left', hidden: false},
    {name: 'ThoiGianVaoKham', formatter: kiemtra_dk_tg, index: 'ThoiGianVaoKham', search: false, width: "1%", editable: false, align: 'center', hidden: false, edittype: "text", editoptions: {
      dataInit: function(element)
      {
        $(element).timeEntry({show24Hours: true, spinnerImage: ''});
      }
    }
  },
  {name: 'TenBSYeuCau', index: 'TenBSYeuCau', search: false, width: "1%", editable: false, align: 'left', hidden: false},
  {name: 'BSTruoc', index: 'BSTruoc', search: false, width: "1%", editable: false, align: 'left', hidden: false},
  {name: 'GhiChu', index: 'GhiChu', width: "1%", search: false, editable: false, align: 'left', hidden: false},
  {name: 'SanSangGoiVaoKham', index: 'SanSangGoiVaoKham', search: false, width: "1%", editable: false, align: 'left', hidden: false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",align:"center"},
  {name: 'LayDauHieuSinhTon', index: 'LayDauHieuSinhTon', search: false, width: "1%", editable: false, align: 'left', hidden: false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",align:"center"},
  {name: 'ID_TrangThai', index: 'ID_TrangThai', search: false, width: "1%", editable: false, align: 'left', hidden: false},


  ],
  loadonce: true,
  scroll: 1,
        //rownum = false,
        //treeGrid = false,
        modal:true,
        pager: '#prowed4',
        rowNum: 100,
        gridview: true,
        pginput:false,
        pgbuttons:false,
        rowList:[],
        sortname: 'nickname',
        height:100,
        width: 100,
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        stringResult:true,
        sortorder: "asc",

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
                //$("#stopxephang").addClass("disable");

              },
              loadComplete: function(data,rowid) {
               var ids = $('#rowed4').jqGrid('getDataIDs');
               for (i = 0; i < ids.length; i++) {
                var rowData = jQuery('#rowed4').getRowData(ids[i]);
                kiemtra_dk_tg_load_completed(rowData, ids[i], "ThoiGianVaoKham;ID_TrangThai;TenBenhNhan;SanSangGoiVaoKham;NotesStatus");
                window.rowcount_luoidangcho = $("#rowed3").getGridParam("reccount");

                if (rowData["NotesStatus"] == 1) {
                  var _class = "do";

                } else if (rowData["NotesStatus"] == 2) {
                  var _class = "cam";

                } else if (rowData["NotesStatus"] == 0) {
                  var _class = "xanh";

                }
                ghichu = "<input class='custom_button " + _class + "' style='height:22px;width:50px;color:blue' type='button' value='G.chú' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
                $("#rowed4").jqGrid('setRowData', ids[i], {GhiChu: ghichu});
              }
            },
            onSelectRow: function(id){
                //alert(id);
                window.id_kham=id;
              },
              onRightClickRow: function(rowid, iRow, iCol, e) {
                var rowData2 = jQuery('#rowed4').getRowData(rowid);
                window.rowData_grdangkham2 = rowData2;
               // alert(rowData_grdangkham2);
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
                //$("#stopxephang").addClass("disable");

              },
              ondblClickRow: function(rowId, rowIndex, columnIndex) {
              },
              caption: "Danh sách bệnh nhân chờ"
            });
}
$("#menu").menu();
$(document).bind("mouseup", function(e) {
  $("#menu").hide();
});
function kiemtra_dk_tg(cellvalue, options, rowObject) {

  var today = new Date();

  return cellvalue;
}
function kiemtra_dk_tg_load_completed(cellvalue, rowId, mangthamso) {
  mangthamso = mangthamso.split(";");
  var now1 = new Date().toTimeString();
  var dauvaotam = cellvalue[mangthamso[0]].split(":");
  var dauvao = Date.parse('<?php echo date("Y-m-d") ?>,' + cellvalue[mangthamso[0]]);
  var now = new Date();
  var diffMs = now - dauvao;
  var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000);
        var diffHrs = Math.round((diffMs % 86400000) / 3600000); // hours

        diffMins = diffMins + diffHrs * 60;
        //console.log(dauvao + "  " + diffHrs + "\n");
        //console.log(mangthamso[2]);

        if (diffMins >= 15) {
          $("#rowed4").setCell(rowId, mangthamso[0], '', {background: 'red'});
            //return  '<span style="background:red">' + cellvalue + '*' + diffMins + "</span>";
            //return  '<span style="background:yellow">' + cellvalue+ "</span>";
          } else {

            if (diffMins >= 10) {
              $("#rowed4").setCell(rowId, mangthamso[0], '', {background: 'yellow'});
                //    return '<span style="background:yellow">' + cellvalue + '**' + diffMins + "</span>";
              } else {
                // $("#rowed3").setCell(rowId , mangthamso[0], '', { background: '#FFF'});
              }
            }

        // alert (cellvalue[mangthamso[3]]);

        if (cellvalue[mangthamso[1]] == 'DangCho' && cellvalue[mangthamso[3]] == '1') {
          $("#rowed4").setCell(rowId, mangthamso[2], '', {background: '#7be75a'});
        } else {
            //$("#rowed3").setCell(rowId , 'TenBenhNhan', '', { background: '#fff'});
          }
        }
        $("#huyxephang").bind("click", function(e) {
          var mabenhnhan = window.rowData_grdangcho["MaBenhNhan"];
          var iD_LuotKham = window.rowData_grdangcho["ID_LuotKham"];
        // $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan='+mabenhnhan+'&id_luotkham='+iD_LuotKham)
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update_huyxephang&mabenhnhan=' + mabenhnhan + '&id_luotkham=' + iD_LuotKham).done(function(data)
        {
          if ($.trim(data) == '') {
            tooltip_message("<?php get_text1("sua_thanhcong") ?>");
            $("#rowed3").trigger("reloadGrid");
          }
          else {
            tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
          }
        });
      })
        $("#thongtinbn").click(function(e){
          idbenhnhan2=rowData_grdangkham2["ID_BenhNhan"];
          tenBenhNhan2=rowData_grdangkham2["TenBenhNhan"];
      //alert(idbenhnhan);
      parent.postMessage("editbenhnhan;"+idbenhnhan2+";"+tenBenhNhan2, "*");

    })
        $("#thongtinlk").click(function(e){
          tenBenhNhan=rowData_grdangkham2["TenBenhNhan"];
          ID_LuotKham=rowData_grdangkham2["ID_LuotKham"];
          parent.postMessage("editluotkham;"+ID_LuotKham+";"+tenBenhNhan, "*");
        })
        $("#lammoi").click(function(){
        //alert();
        $("#rowed4").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_rowed4&id_tang=',datatype:'json'}).trigger('reloadGrid');

      })
        function create_grid3(){
          $("#rowed5").jqGrid({
            url:"",
            datatype: "local",
            colNames:['Mã BN','Họ lót','Tên','Tuổi','Điện thoại','Địa chỉ','Giảm giá','Hủy chỉ định / Thuốc trả lại','Nợ cũ','Tổng phải trả','Đã trả','Nợ mới'],
            colModel:[
            {name:'MaBenhNhan',index:'MaBenhNhan',search:true, width:"1%", editable:false,align:'left',hidden:false},
            {name:'HoLotBenhNhan',index:'HoLotBenhNhan',search:true, width:"2%", editable:false,align:'left',hidden:false},
            {name:'TenBenhNhan',index:'TenBenhNhan',search:true, width:"1%", editable:true,align:'left',hidden:false},
            {name:'NamSinh',index:'Tuoi', width:"1%",search:true, editable:true,align:'left',hidden:false},
            {name:'DienThoai',index:'DienThoai1',search:true, width:"1%", editable:true,align:'left',hidden:false},
            {name:'DiaChi',index:'DiaChi',search:true, width:"3%", editable:true,align:'left',hidden:false},

            {name:'GiamGia',index:'GiamGia',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},search:true, width:"1%", editable:true,align:'right',hidden:false},
            {name:'TienHuyChiDinh',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'TienHuyChiDinh',search:true, width:"2%", editable:true,align:'right',hidden:false},
            {name:'NoCu',index:'NoCu',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}, width:"1%",search:true, editable:true,align:'right',hidden:false},
            {name:'TongTienPhaiTra',classes: "col1",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'TongTienPhaiTra',search:true, width:"1%", editable:true,align:'right',hidden:false},
            {name:'SoTienThanhToan',classes: "col2",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'SoTienThanhToan',search:true, width:"1%", editable:true,align:'right',hidden:false},
            {name:'NoCuoi',formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},index:'NoCuoi',search:true, width:"1%", editable:true,align:'right',hidden:false},
            ],



            loadonce: true,
            scroll: false,
            modal:true,
            rowNum: 100000,
            rowList:[],
        //pager: '#prowed5',
        sortname: 'MaBenhNhan',
        height:100,
        width: 100,
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false,
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        footerrow:true,


    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
    sortorder: "desc",
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
        loadComplete: function(data,rowid) {
         var ids = $('#rowed5').jqGrid('getDataIDs');
         var allRowsInGrid = $('#rowed5').jqGrid('getRowData');
         for (i = 0; i < ids.length; i++) {

          var rowData = jQuery('#rowed5').getRowData(ids[i]);
          var nomoi=rowData["NoCuoi"];

          if(nomoi>0)
          {

            $("#rowed5").setCell(ids[i], 'NoCuoi', '', {background: 'red'});


          }
          if(nomoi<0)
          {

            $("#rowed5").setCell(ids[i], 'NoCuoi', '', {background: 'yellow'});


          }
                  /* for(j=0;j<allRowsInGrid.length;j++){
                     tongphaitra = parseInt(allRowsInGrid[i].TongTienPhaiTra)+parseInt(allRowsInGrid[i].NoCu)-parseInt(allRowsInGrid[i].GiamGia)-parseInt(allRowsInGrid[i].TienHuyChiDinh);
                     $("#rowed5").jqGrid('setRowData', ids[i], {TongPhaiTra: tongphaitra});


                   }*/

                 }
                 $("#luot").html($('#rowed5').jqGrid('getGridParam','records'));


                 sumGiamGia = $("#rowed5").jqGrid("getCol", "GiamGia", false, "sum");
                 sumTienHuyChiDinh = $("#rowed5").jqGrid("getCol", "TienHuyChiDinh", false, "sum");
                 sumNoCu = $("#rowed5").jqGrid("getCol", "NoCu", false, "sum");
                 sumTongTienPhaiTra = $("#rowed5").jqGrid("getCol", "TongTienPhaiTra", false, "sum");
                 sumSoTienThanhToan = $("#rowed5").jqGrid("getCol", "SoTienThanhToan", false, "sum");
                 sumNoCuoi = $("#rowed5").jqGrid("getCol", "NoCuoi", false, "sum");

                 countMP=  $("#rowed5").getGridParam("reccount");

                 $("#rowed5").jqGrid("footerData", "set", {
                  GiamGia: sumGiamGia,
                  TienHuyChiDinh: sumTienHuyChiDinh,
                  NoCu: sumNoCu,
                  TongTienPhaiTra: sumTongTienPhaiTra,
                  SoTienThanhToan: sumSoTienThanhToan,
                  NoCuoi: sumNoCuoi,
                  MaBenhNhan:"Số ca: "+countMP });


               },
               caption: "Tổng hợp thu chi"
             });
$("#rowed5").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
}


function create_grid16(){
  $("#rowed16").jqGrid({
    url:"",
    datatype: "local",
    colNames:['','Mã BN','Họ(tên lót)','Tên','Loại dịch vụ','Nhóm',
    'Khám lúc','Thanh toán','Tổng tiền(1)','BHCC nợ(2)','BHYT trả',
    'BN trả(3)','T.thái nợ của BHCC','Thu hồi từ BHCC(4)','Thu hồi từ BN(5)','Thất thoát(2)-(4+5)','','ID_ThuTraNo','id_benhnhan','LoaiThanhToan',
    'ID_BenhAnNoiTru','ID_BHCC_TraNo','Ghi chú','Trạng thái bill','Quốc tịch','Người BL'],
    colModel:[

    {name:'ID_LuotKham',index:'ID_LuotKham', width:"0%", editable:false,align:'left',hidden:true},
    {name:'MaBenhNhan',index:'MaBenhNhan',search:true, width:"7%", editable:false,align:'left',hidden:false},
    {name:'HoLotBenhNhan',index:'HoLotBenhNhan',search:true, width:"10%", editable:false,align:'left',hidden:false},
    {name:'TenBenhNhan',index:'TenBenhNhan',search:true, width:"5%", editable:true,align:'left',hidden:false},
    {name:'TenLoaiThe',index:'TenLoaiThe',search:true, width:"13%", editable:true,align:'left',hidden:false},
    {name:'MaNhom',index:'MaNhom',search:true, width:"3%", editable:true,align:'left',hidden:false},
    {name:'ThoiGianVaoKham',index:'ThoiGianVaoKham',width:"7%",},
    {name:'NgayGioThanhToan',index:'NgayGioThanhToan',width:"7%",},

    {name:'TongTienPhaiTra',classes:'colored3',index:'TongTienPhaiTra',hidden:false,width:"6%",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},

    {name:'TongTienBHCCTra',classes:'colored4',index:'TongTienBHCCTra',hidden:false,width:"6%",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
    {name:'TongTienBHYTChiTra',index:'TongTienBHYTChiTra', width:"6%",hidden:false},
    {name:'SoTienThanhToan',index:'SoTienThanhToan',hidden:false,width:"6%",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},

    {name:'Datra',index:'Datra', width:"6%",hidden:false},
    {name:'SoTien',index:'SoTien',hidden:false,width:"6%",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
    {name:'SoTienBN',index:'SoTienBN',hidden:false,width:"6%",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
    {name:'ThatThoat',index:'ThatThoat',hidden:false,width:"6%",formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ".", decimalPlaces: 0, prefix: ""}},
    {name:'ID_BHCC_TraNo',index:'ID_BHCC_TraNo', width:"0%", editable:false,align:'left',hidden:true},
    {name:'ID_ThuTraNo',index:'ID_ThuTraNo', width:"0%", editable:false,align:'left',hidden:true},
    {name:'ID_BenhNhan',index:'ID_BenhNhan', width:"0%", editable:false,align:'left',hidden:true},
    {name:'LoaiThanhToan',index:'LoaiThanhToan', width:"0%", editable:false,align:'left',hidden:true},
    {name:'ID_BenhAnNoiTru',index:'ID_BenhAnNoiTru',hidden:true},
    {name:'ID_BHCC_TraNo',index:'ID_BHCC_TraNo',hidden:true},
    {name:'GhiChu',index:'GhiChu', width:"6%",hidden:false},

    
    
    {name:'DaThanhToanBill',index:'DaThanhToanBill', width:"6%",hidden:false},
    {name:'TenQuocTich',index:'TenQuocTich', width:"6%",hidden:false},
    {name:'TennguoiBL',index:'TennguoiBL',width:"6%",hidden:false},

    ],

    loadonce: true,
    scroll: false,
    shrinkToFit:true,
    modal:true,
    rowNum: 10000,
    rowList:[],
    pginput:false,
    pgbuttons:false,   
    sortname: 'NgayGioTao',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,
    footerrow:true,
    serializeRowData: function (postdata) {

    },
    onSelectRow: function(id){

    },
    ondblClickRow: function (rowId, rowIndex, columnIndex) {

      rowData = jQuery(this).getRowData(rowId);
      var ID_ThuTraNo = rowData['ID_ThuTraNo'];
      var id_benhnhan = rowData['ID_BenhNhan'];
      var MaBenhNhan = rowData['MaBenhNhan'];
      var TenBenhNhan = rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan'];
      var ID_PhanLoaiKham = rowData[''];

      if(rowData['LoaiThanhToan']=='TamUng'){
        parent.postMessage('tamung;tam_ung;'+id_benhnhan+';0;'+ID_ThuTraNo+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
      }else if(rowData['LoaiThanhToan']=='HoanUng'){
        parent.postMessage('hoanung;hoan_ung;'+id_benhnhan+';0;'+ID_ThuTraNo+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
      }else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && $.trim(rowData['ID_BenhAnNoiTru'])==''){

        parent.postMessage('thutrano_edit;ngoaitru_bhyt;'+ID_ThuTraNo+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");


      }
      else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && $.trim(rowData['ID_BenhAnNoiTru'])!=''){

        parent.postMessage('thutrano_edit;noitru_bhyt;'+ID_ThuTraNo+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");


      }
    },



    onRightClickRow: function(rowid, iRow, iCol, e) {
    //alert(iRow);

    var grid = jQuery('#rowed16');
    var colModel = grid.getGridParam('colModel');

    var colName = colModel[iCol].name;
    var colIndex = colModel[iCol].index;
    var rowData = jQuery('#rowed16').getRowData(rowid);
    window.iD_LuotKham_DVCC=rowData ['ID_LuotKham'];
    window.HoTenBn_DVCC=rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan'];
                window.BhccNo_DVCC=rowData ['TongTienBHCCTra'];// bh cao cap nợ
                window.BhccTra_DVCC=rowData ['SoTien'];// bảo hiểm cao cấp trả
                window.BhccBntrathem=rowData ['SoTienBN'];// bảo hiểm cao cấp trả
                window.BnTra_DVCC=rowData ['SoTienThanhToan'];// bn trả
                window.Tongtien_DVCC=rowData ['TongTienPhaiTra'];//tổng phải trả
                window.bhccGhichu=rowData ['GhiChu'];//tổng phải trả
                 window.idRowSelect_DVCC=iRow;//hàng đang chọn
                 if(rowData ['ID_BHCC_TraNo']=='')
                 {
                  window.ID_BHCC_TraNo=0;
                }else
                {window.ID_BHCC_TraNo=rowData ['ID_BHCC_TraNo'];//kiểm tra biến này =0 có nghĩa là chưa add
              }


              
              window.rowid_danhcho = rowid;
              window.from = colModel[iCol].name;
              if ($("#menuDVCC").width() + e.pageX > $(document).width()) {
                $("#menuDVCC").css('left', e.pageX - $("#menuDVCC").width() + "px");
              } else {
                $("#menuDVCC").css('left', e.pageX + "px");
              }
              if ($("#menuDVCC").height() + 30 + e.pageY > $(document).height()) {
                $("#menuDVCC").css('top', e.pageY - $("#menuDVCC").height() + "px");
              } else {
                $("#menuDVCC").css('top', e.pageY + "px");
              }
              $("#menuDVCC").show(300);



              $(document).bind("contextmenu", function(e) {
                return false;
              });


            },







            loadComplete: function(data,rowid) {


              var ids = $('#rowed16').jqGrid('getDataIDs');

              for (i = 0; i < ids.length; i++) {

                var rowData = jQuery('#rowed16').getRowData(ids[i]);
                var ID_PLoaiKham  =rowData["ID_PhanLoaiKham"];
                if(rowData ['ID_BHCC_TraNo']!='')
                {
                  $("#rowed16").setCell (ids[i],'MaBenhNhan','',{ background:'#dce775'});
                  $("#rowed16").setCell (ids[i],'TongTienBHCCTra','',{ background:'#FFFFFF'});

                }





              }
              sumSoTienThanhToan= $("#rowed16").jqGrid("getCol", "SoTienThanhToan", false, "sum");
              sumTongTienPhaiTra = $("#rowed16").jqGrid("getCol", "TongTienPhaiTra", false, "sum");
              sumTongTienBHCCNo = $("#rowed16").jqGrid("getCol", "TongTienBHCCTra", false, "sum");
              sumTongTienBHCCTra = $("#rowed16").jqGrid("getCol", "SoTien", false, "sum");
              sumThatThoat = $("#rowed16").jqGrid("getCol", "ThatThoat", false, "sum");
              countMP=  $("#rowed16").getGridParam("reccount");

              $("#rowed16").jqGrid("footerData", "set", {
                TongTienPhaiTra: sumTongTienPhaiTra,
                TongTienBHCCTra: sumTongTienBHCCNo,
                SoTien:sumTongTienBHCCTra,
                SoTienThanhToan:sumSoTienThanhToan,
                ThatThoat:sumThatThoat,
                MaBenhNhan:"Số ca: "+countMP });
              //alert(window.idRowSelect_DVCC);
              $('#rowed16').jqGrid('setSelection', window.iD_LuotKham_DVCC, true);
              
            },

            //caption:""
          });
$("#rowed16").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
//rowed12
}
function xuat_excel_dvcc(opt)
{
    //alert(opt);
    switch (opt)
    {
      case 1:
      window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_baocaoDVCC&hienmaloi=3&type=excel&fromdate="+$("#from_day").val()+"&todate="+$("#to_day").val()+" 23:59");
      break;
      case 2:
         //alert(opt);
         window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_baocaoThuChi&type=excel&fromdate="+$("#from_day").val()+"&todate="+$("#to_day").val()+" 23:59");
         break;
         case 3:
         //alert(opt);
         window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_baocaoCongNo&type=excel&fromdate="+$("#from_day").val()+"&todate="+$("#to_day").val()+" 23:59");
         break;
         case 4:
         window.open("pages.php?module=report&view=<?=$modules?>&action=xuat_excel_baocaoDVCC_Ketoan&hienmaloi=3&type=excel&fromdate="+$("#from_day").val()+"&todate="+$("#to_day").val()+" 23:59");
         break;

       }


     }
     $("#tranoDVCC").bind("click", function(e) {


      if (window.ID_BHCC_TraNo==0)
      {
        window.BhccTra_DVCC=window.BhccNo_DVCC;
        $('#dialog-thuhoiDvcc').dialog('option', 'title', window.HoTenBn_DVCC+'---'+window.ID_BHCC_TraNo+'---Ca này BHCC chưa trả nợ');
      }else
      {
        window.BhccTra_DVCC=window.BhccNo_DVCC;
        $('#dialog-thuhoiDvcc').dialog('option', 'title', window.HoTenBn_DVCC+'---'+window.ID_BHCC_TraNo+'---BHCC đã trả nợ');
      }
      $("#at-bhcctra").val(window.BhccTra_DVCC);
      $("#at-bntrathem").val(window.BhccBntrathem);

      $("#at-control").val(window.Tongtien_DVCC);
      $("#at-bnTra").val(window.BnTra_DVCC);
      $("#at-bhccNo").val(window.BhccNo_DVCC);
      $("#at-bhccGhichu").val(window.bhccGhichu);
   // $("#at-bntrathem").val(window.BhccTra_DVCC);

   $( "#dialog-thuhoiDvcc" ).dialog('open');



 })

     function tinhtien(){
      var tmp5 = $("#rowed5").jqGrid('getDataIDs');
      var tien_dv =0;
      var tien_gg =0;
      var tien_huy =0;
      var tien_nocu =0;
      var tien_tong =0;
      var tien_datra =0;
      var tien_nomoi =0;
      for(var i=0;i < tmp5.length;i++){
        var rowData = $("#rowed5").getRowData(tmp5[i]);
        tien_dv =parseFloat(tien_dv) + parseFloat(rowData["TongTienPhaiTra"]);
        tien_gg =parseFloat(tien_gg) + parseFloat(rowData["GiamGia"]);
        tien_huy =parseFloat(tien_huy) + parseFloat(rowData["TienHuyChiDinh"]);
        tien_nocu =parseFloat(tien_nocu) + parseFloat(rowData["NoCu"]);
        tien_tong =parseFloat(tien_tong) + parseFloat(rowData["TongPhaiTra"]);
        tien_datra =parseFloat(tien_datra) + parseFloat(rowData["SoTienThanhToan"]);
        tien_nomoi =parseFloat(tien_nomoi) + parseFloat(rowData["NoCuoi"]);
                                   // alert(tien_tong);
                                 }

                                 $("#tiendichvu").val(formatMoney(tien_dv));
                                 $("#tiengiamgia").val(formatMoney(tien_gg));
                                 $("#tienhuychidinh").val(formatMoney(tien_huy));
                                 $("#tiennocu").val(formatMoney(tien_nocu));
                                 $("#tientongphaitra").val(formatMoney(tien_tong));
                            //alert(formatMoney(tien_tong));
                            $("#tiendatra").val(formatMoney(tien_datra));
                            $("#tiennomoi").val(formatMoney(tien_nomoi));
                          }
                          function formatMoney(num) {
                            var p = num.toFixed(2).split(".");
                            return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                              return  num + (i && !(i % 3) ? "," : "") + acc;
                            }, "");
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
    function create_grid4(){
      $("#rowed6").jqGrid({
        url:"",
        datatype: "local",
        colNames:['Số phiếu hủy','Ngày lập phiếu','Người lập phiếu','Mã Bệnh nhân','Họ lót','Tên bệnh nhân','Tổng tiền hủy','Đã hoàn tiền','Số phiếu hoàn tiền','Tiền đã trả lại','Nợ cuối','In phiếu hủy'],
        colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"1%", editable:false,align:'left',hidden:false},
        {name:'NgayGioHuy',index:'NgayGioHuy', width:"1%", editable:false,align:'left',hidden:false},
        {name:'TenNguoiLapPhieu',index:'TenNguoiLapPhieu', width:"2%", editable:true,align:'left',hidden:false},
        {name:'MaBenhNhan',index:'MaBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',index:'TenBenhNhan', width:"1%", editable:true,align:'left',hidden:false},
        {name:'TongTienHuy',index:'TongTienHuy', width:"1%", editable:true,align:'right',hidden:false},
        {name:'DaHoanTien',index:'DaHoanTien', width:"1%", editable:true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",},
        {name:'MaPhieuHoanUng',index:'MaPhieuHoanUng', width:"2%", editable:true,align:'left',hidden:false},
        {name:'TienHoanUng',index:'TienHoanUng',classes: "col1", width:"1%", editable:true,align:'right',hidden:false},
        {name:'NoCuoi',index:'NoCuoi',classes: "col2", width:"1%", editable:true,align:'right',hidden:false},
        {name:'InPhieuHuy',index:'InPhieuHuy', width:"1%", editable:true,align:'right',hidden:false},
        ],
        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: 1000,
        rowList:[],
        pager: '#prowed6',
        sortname: 'ID_HuyChiDinh',
        height:100,
        width: 100,
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false,
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,


    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
    sortorder: "desc",
    serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
           var rowData = $("#rowed6").getRowData(id);
           window.tenbenhnhan3=rowData["TenBenhNhan"];
           window.id_huychidinh=id;

           $("#rowed7").jqGrid('setGridParam',{url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chitietphieutralaichidinh&id_huychidinh="+id_huychidinh,datatype:'json'}).trigger('reloadGrid');
           $("#rowed7").jqGrid('setCaption', 'Chi tiết phiếu trả lại chỉ định - '+tenbenhnhan3);
         },
         ondblClickRow: function (rowId, rowIndex, columnIndex) {

         },
         loadComplete: function(data,rowid) {
          var ids = $('#rowed6').jqGrid('getDataIDs');
          var phi_th =0;
          var sotien_huy =0;
          for (i = 0; i < ids.length; i++) {
            var rowData = jQuery('#rowed6').getRowData(ids[i]);
            var _class = "xanh";
            inphieuhuy = "<input class='custom_button " + _class + "' style='height:22px;width:50px;' type='button' value='In phiếu hủy' onclick=\"moghichu('" + rowData["ID_BenhNhan"] + "','" + rowData["TenBenhNhan"] + "');\" />";
            $("#rowed6").jqGrid('setRowData', ids[i], {InPhieuHuy: inphieuhuy});
            phi_th =parseFloat(phi_th) + parseFloat(rowData["TongTienHuy"]);
            sotien_huy =parseFloat(sotien_huy) + parseFloat(rowData["TienHoanUng"]);
          }
          $("#luot2").html($('#rowed6').jqGrid('getGridParam','records'));
          $("#tongtienhuy2").val(formatMoney(phi_th));
          $("#tiendatralai2").val(formatMoney(sotien_huy));
        },
        caption: ""
      });
      $("#rowed6").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    }
    function create_grid5(){
      $("#rowed7").jqGrid({
        url:"",
        datatype: "local",
        colNames:['Tên loại khám','Phí thực hiện','Số tiền hủy','Ghi chú'],
        colModel:[
        {name:'ID_LoaiKham',index:'ID_LoaiKham', width:"2%", editable:false,align:'left',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",editoptions: { value: loaikham}},
        {name:'PhiThucHien',index:'PhiThucHien', width:"1%", editable:false,align:'right',hidden:false},
        {name:'SoTienThucTra',index:'SoTienThucTra', width:"1%", editable:true,align:'right',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},

        ],
        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: 1000,
        rowList:[],
        pager: '#prowed7',
        sortname: 'ID_HuyChiDinh',
        height:100,
        width: 100,
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false,
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,


    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
    sortorder: "desc",
    serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {

        },
        loadComplete: function(data,rowid) {
          var tmp5 = $("#rowed7").jqGrid('getDataIDs');
          var phi_th =0;
          var sotien_huy =0;

          for(var i=0;i < tmp5.length;i++){
            var rowData = $("#rowed7").getRowData(tmp5[i]);
            phi_th =parseFloat(phi_th) + parseFloat(rowData["PhiThucHien"]);
            sotien_huy =parseFloat(sotien_huy) + parseFloat(rowData["SoTienThucTra"]);
                                    //alert(phi_th);
                                  }

                                  $("#phithuchien").val(formatMoney(phi_th));
                                  $("#sotienhuy").val(formatMoney(sotien_huy));

                                },
                                caption: "Chi tiết phiếu trả lại chỉ định - "
                              });
    }
    function create_grid6(){
      $("#rowed8").jqGrid({
        url:'',
        datatype: "local",
        colNames:['Mã BN','Tên bệnh nhân','Địa chỉ','Điện thoại','Nợ cuối lượt này','Nợ riêng lượt này','Nợ hiện tại','','Công ty','Đợt khám','Mã phiếu','Đối tượng','ID_PhanLoaiKham','Phân L.Khám','Lý do nợ','Nợ lúc','Trả nợ'],
        colModel:[
        {name:'MaBenhNhan',sortable: true,search:true,sorttype: 'number',index:'MaBenhNhan', width:"1%", editable:false,align:'left',hidden:false},
        {name:'TenBenhNhan',width:"2%",sortable: true,search:true,sorttype: 'text',index:'TenBenhNhan',editable:false,align:'left',hidden:false},
        {name:'DiaChi',index:'DiaChi', width:"2%", editable:true,align:'left',hidden:false},
        {name:'DienThoai',sortable: true,search:true,sorttype: 'text',index:'DienThoai', width:"1%", editable:true,align:'left',hidden:true},
        {name:'No',width:"1%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sorttype: 'number',index:'No',sortable: true,search:true,sorttype: 'number',  editable:true,align:'right',hidden:false},
        {name:'NoLuot',width:"1%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sorttype: 'number',index:'NoLuot',sortable: true,search:true,sorttype: 'number',  editable:true,align:'right',hidden:false},
        {name:'NoHienTai',width:"1%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sorttype: 'number',index:'NoHienTai',sortable: true,search:true,sorttype: 'number',  editable:true,align:'right',hidden:false},
        {name:'ID_BenhNhan',index:'ID_BenhNhan', width:"2%", editable:true,align:'right',hidden:true},
        {name:'TenCty',index:'TenCty', search:true,width:"4%", editable:true,align:'left',hidden:false},
        {name:'TenDotKham',index:'TenDotKham',search:true, width:"3%", editable:true,align:'left',hidden:false},
        {name:'MaPhieu',index:'MaPhieu',search:true, width:"1%", editable:true,align:'left',hidden:true},
        {name:'DoiTuong',index:'DoiTuong',search:true, width:"1%", editable:true,align:'left',hidden:false},
        {name:'ID_PhanLoaiKham',index:'ID_PhanLoaiKham',search:true, width:"0%", editable:true,align:'left',hidden:true},
        {name:'TenPhanLoaiKham',sortable: true,search:true,sorttype: 'text',index:'TenPhanLoaiKham', width:"1%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',sortable: true,search:true,sorttype: 'text',index:'GhiChu', width:"3%", editable:true,align:'left',hidden:false},
        {name:'NgayGio',sortable: true,search:true,sorttype: 'text',index:'NgayGio', width:"1%", editable:true,align:'left',hidden:false},
        {name:'DuocTraNo',sortable: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":;1:Co;0:Chua"},  editoptions: {value: "1:Co;0:Chua"},search:true,sorttype: 'text',index:'DuocTraNo', width:"1%",align:'left',hidden:false},
        ],
        multiselect: true,
        loadonce: true,
        scroll: false,
        modal:true,
        rowNum: 1000,
        rowList:[],
       // pager: '#prowed8',
       sortname: 'NoCuoiKy',
       height:100,
       width: 100,
       viewrecords: true,
       ignoreCase:true,
       shrinkToFit:true,
       viewrecords: false,
       ignoreCase:true,
       pginput:false,
       pgbuttons:false,
       footerrow:true,

    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
    sortorder: "desc",
    serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
            var rowData = $("#rowed8").getRowData(id);
            var id_benhnhan2=rowData["ID_BenhNhan"];
            $("#rowed9").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconnochitiet&id_benhnhan='+id_benhnhan2,datatype:'json'}).trigger('reloadGrid');
          },
          ondblClickRow: function (rowId, rowIndex, columnIndex) {

          },
          loadComplete: function(data,rowid) {


            var ids = $('#rowed14').jqGrid('getDataIDs');








            $("#ca").html($('#rowed8').jqGrid('getGridParam','records'));
            var ids = $('#rowed8').jqGrid('getDataIDs');
            var nocuoi =0;
            for (i = 0; i < ids.length; i++) {

              var rowData = jQuery('#rowed8').getRowData(ids[i]);
              var DuocTraNo  =rowData["DuocTraNo"];
                        //if(DuocTraNo==1)
                        if(DuocTraNo=='Đã trả')
                        {
                          $("#rowed8").setCell (ids[i],'MaBenhNhan','',{ background:'#BEF781'});



                        }


                        nocuoi =parseFloat(nocuoi) + parseFloat(rowData["No"]);


                      }
                      $("#nocuoi2").val(formatMoney(nocuoi));


                      sumNo = $("#rowed8").jqGrid("getCol", "No", false, "sum");
                      sumNoLuot = $("#rowed8").jqGrid("getCol", "NoLuot", false, "sum");
                      sumNoHienTai = $("#rowed8").jqGrid("getCol", "NoHienTai", false, "sum");

                      countMP=  $("#rowed8").getGridParam("reccount");

                      $("#rowed8").jqGrid("footerData", "set", {No: sumNo,NoLuot: sumNoLuot,NoHienTai: sumNoHienTai,MaBenhNhan:"Cas "+countMP });

                    },
       // caption: ""
       caption:"<div style='float:right'><div id=xuat_excel_dsNo ' onclick=xuat_excel_dvcc(3) class='outExcel  ui-icon ui-icon-document'></div><label class='diengiai'>Xuất excel công nợ---------Đã trả nợ (lập phiếu thu tự động ): Cột Mã BN tô màu xanh</label></div>"
     });
$("#rowed8").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$('.footrow td[aria-describedby="rowed8_TenBenhNhan"]').append('<input type="button" value="Thanh toán" onclick=thanhtoanMulti()> ');

}
function thanhtoanMulti()
{

  if(window.ID_GoiKhamCty==0)
  {
    alert('Thanh toán tự động phải chọn 1 đợt khám sức khỏe công ty');
    return false;
  }
  $('<div></div>').appendTo('body')
  .html('<div><h2>Trả nợ theo đợt khám SK ?phải tic chọn b.nhân, mỗi lần chọn ko quá 20 ca!</h2></div><select name="optiontinhlaicong" id="optiontrano" ><option value=1>Trả theo cột Nợ hiện tai</option><option value=2>Trả theo cột Nợ riêng lượt này</option>')
  .dialog({
    modal: true,
    title: 'Trả nợ khám sức khỏe công ty hàng loạt theo đợt khám',
    zIndex: 10000,
    autoOpen: true,
    width: 'auto',
    resizable: false,
    buttons: {
      Yes: function () {
                  // //alert('yes');
                  tooltip_message("Đang tạo các phiếu thu tự động cho từng bệnh nhân nếu bạn có tic chọn");
                  $(this).dialog("close");

                  optiontrano=$('#optiontrano').val();
                                 //     alert(optiontrano);


                                 

                                 var dem=0;
                                 $('#rowed8 tr input[type="checkbox"]').each(function() {

                                  var row = $(this).closest('tr.jqgrow');
                                  var tam = row.attr('id');
                                  var ID_BenhNhan=$("#rowed8").jqGrid ('getCell', tam, 'ID_BenhNhan');
                                  var NoLuot=0;
                                  if(optiontrano==1)
                                  {
                                    NoLuot=$("#rowed8").jqGrid ('getCell', tam, 'NoHienTai');
                                  }
                                  else
                                  {
                                    NoLuot=$("#rowed8").jqGrid ('getCell', tam, 'NoLuot');
                                  }

                                  var DiaChi=$("#rowed8").jqGrid ('getCell', tam, 'DiaChi');
                                  var TenBenhNhan=$("#rowed8").jqGrid ('getCell', tam, 'TenBenhNhan');
                                  var diengiai='ThanhToanNoTuDongTheoDot';

                                  if($(this).is( ":checked" )) {


                                    dem=dem+1;
                                   // alert(dem);

                                   window.datatosend='{';
                                   window.datatosend+='"idbenhnhan":'+JSON.stringify(ID_BenhNhan);
                                   window.datatosend+=',"nguoigd":'+JSON.stringify(TenBenhNhan);
                                   window.datatosend+=',"diachi":'+JSON.stringify(DiaChi);
                                   window.datatosend+=',"tienthu":'+JSON.stringify(NoLuot);
                                   window.datatosend+=',"diengiai":'+JSON.stringify(diengiai);
                                   window.datatosend+=',"iD_LuotKham":'+JSON.stringify(tam);
                                   window.datatosend+='}'

                                   datatosend =$.parseJSON(datatosend) ;  

                                   if(dem<=20)
                                   {
                                    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_thutien&hienmaloi=1',datatosend).
                                    done(function(data){
                                     if ($.trim(data)!='') {


                                      tooltip_message("Tạo thành công "+data);
                                    }

                                  }

                                  );
                                  }
                                  else
                                  {
                                    alert("Đã Xong. Mỗi lần thanh toán không cho phép quá " +(dem-1)+ " ca");
                                    return false;;
                                  }

                                  


                                }



                              })

                                 $("#rowed8").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconno&id_dotkham='+window.ID_GoiKhamCty+'&tunngay='+$( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');




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
function create_grid7(){
  $("#rowed9").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Ngày lập phiếu','Số phiếu','Diễn giải','Nợ đầu kỳ','Tổng phát sinh','Phụ thu','Hủy CĐ/Thuốc','Số tiền thu','Tiền miễn giảm','Nợ cuối','Nợ lượt này'],
    colModel:[
    {name:'NgayGio',index:'NgayGio', width:"3%", editable:false,align:'left',hidden:false},
    {name:'MaPhieu',index:'MaPhieu', width:"2%", editable:false,align:'left',hidden:false},
    {name:'GhiChu',index:'GhiChu', width:"3%", editable:true,align:'left',hidden:false},
    {name:'NoCu',index:'NoCu', width:"2%", editable:true,align:'left',hidden:false},
    {name:'TongTienPhaiTra',index:'TongTienPhaiTra', width:"2%", editable:true,align:'right',hidden:false},
    {name:'TongPhuThu',index:'TongPhuThu', width:"2%", editable:true,align:'right',hidden:false},
    {name:'TienHuyChiDinh',index:'TienHuyChiDinh', width:"2%", editable:true,align:'right',hidden:false},
    {name:'SoTienThanhToan',index:'SoTienThanhToan', width:"2%", editable:true,align:'right',hidden:false},
    {name:'GiamGia',index:'GiamGia', width:"2%", editable:true,align:'right',hidden:false},
    {name:'NoCuoi',index:'NoCuoi', width:"2%", editable:true,align:'right',hidden:false},
    {name:'NoLuot',index:'NoLuot', width:"2%", editable:true,align:'right',hidden:false},
    ],
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 1000,
    rowList:[],
       // pager: '#prowed9',
       sortname: 'NoCuoiKy',
       height:100,
       width: 100,
       viewrecords: true,
       ignoreCase:true,
       shrinkToFit:true,
       viewrecords: false,
       ignoreCase:true,
       pginput:false,
       pgbuttons:false,


    //hoverrows:false,
    //jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},
    sortorder: "desc",
    serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {

        },
        loadComplete: function(data,rowid) {
          $("#dong").html($('#rowed9').jqGrid('getGridParam','records'));
          var ids = $('#rowed9').jqGrid('getDataIDs');
          var tongphatsinh2 =0;
          var phuthu2 =0;
          var sotienthu2 =0;
          var tienmiengiam2 =0;
          for (i = 0; i < ids.length; i++) {
            var rowData = jQuery('#rowed9').getRowData(ids[i]);
            tongphatsinh2 =parseFloat(tongphatsinh2) + parseFloat(rowData["TongTienPhaiTra"]);
            phuthu2 =parseFloat(phuthu2) + parseFloat(rowData["TongPhuThu"]);
            sotienthu2 =parseFloat(sotienthu2) + parseFloat(rowData["SoTienThanhToan"]);
            tienmiengiam2 =parseFloat(tienmiengiam2) + parseFloat(rowData["GiamGia"]);
          }
          $("#tongphatsinh2").val(formatMoney(tongphatsinh2));
          $("#phuthu2").val(formatMoney(phuthu2));
          $("#sotienthu2").val(formatMoney(sotienthu2));
          $("#tienmiengiam2").val(formatMoney(tienmiengiam2));
        },
        caption: "DS bệnh nhân còn nợ chi tiết"
      });
  $("#rowed9").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});

}
function create_grid8(){



 nhanvien= ":Tất cả;" + nhanvien;

 $("#rowed10").jqGrid({
  url:'',
  datatype: "local",
  colNames:['Số phiếu','Ngày lập','Người lập','Người sửa','Tổng tiền','Tiền thu','Mã BN','Họ lót','Tên BN','Ngày sửa','Diễn giải','Lý do sửa/hủy','id_lk'],
  colModel:[
  {name:'MaPhieu',index:'MaPhieu', width:"3%", editable:false,align:'left',hidden:false},
  {name:'NgayGio',index:'NgayGio', width:"2%", editable:false,align:'left',hidden:false},
  {name:'ID_NhanVien',index:'ID_NhanVien', width:"3%", editable:true,align:'left',search:true,hidden:false,formatter:"select",edittype:"select",stype:"select",editoptions:{value:nhanvien}},
  {name:'TenNVSuaPhieu',index:'TenNVSuaPhieu', width:"2%", editable:true,align:'left',hidden:false},
  {name:'TongTienPhaiTra',index:'TongTienPhaiTra', width:"1%", editable:true,align:'right',hidden:false},
  {name:'SoTien',index:'SoTien', width:"1%", editable:true,align:'right',hidden:false},
  {name:'MaBenhNhan',index:'MaBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
  {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
  {name:'TenBenhNhan',index:'TenBenhNhan', width:"2%", editable:true,align:'left',hidden:false},

  {name:'NgayGioSua',index:'NgayGioSua', width:"2%", editable:true,align:'left',hidden:false},
  {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:true},
  {name:'LyDoHuyOrSuaBill',index:'LyDoHuyOrSuaBill', width:"2%", editable:true,align:'left',hidden:false},
  {name:'ID_LuotKham',index:'ID_LuotKham', width:"2%", editable:true,align:'left',hidden:true},
  ],
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 10000,
  rowList:[],
  pager: '#prowed10',
  sortname: 'MaPhieu',
  height:100,
  width: 100,
  viewrecords: true,
  ignoreCase:true,
  shrinkToFit:true,
  viewrecords: false,
  ignoreCase:true,
  pginput:false,
  pgbuttons:false,
  footerrow: true,


  serializeRowData: function (postdata) {

  },
  onSelectRow: function(id){
    rowData = jQuery(this).getRowData(id);
    window.id_luotkham2=rowData['ID_LuotKham'];
    $("#rowed11").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_billhuychinhsuachitiet&id_luotkham='+id_luotkham2,datatype:'json'}).trigger('reloadGrid');
  },
  ondblClickRow: function (rowId, rowIndex, columnIndex) {

  },
  loadComplete: function(data,rowid) {

                   /* var ids = $("#rowed10").getDataIDs();
                    for (i=0;i<=ids.length-1;i++){
                        
                    }*/
                  },
                  caption: ""
                });
 $("#rowed10").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
}
function create_grid9(){
  $("#rowed11").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Nhóm','Tên loại khám','Phí thực hiện'],
    colModel:[
    {name:'TenNhom',index:'TenNhom', width:"3%", editable:false,align:'left',hidden:false},
    {name:'TenLoaiKham',index:'TenLoaiKham', width:"2%", editable:false,align:'left',hidden:false},
    {name:'PhiThucHien',index:'PhiThucHien', width:"2%", editable:true,align:'right',hidden:false,sorttype:'number', summaryType:'sum'},
    ],
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pager: '#prowed11',
    sortname: 'TenNhom',
    height:100,
    width: 100,
    viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    viewrecords: false,
    ignoreCase:true,
    pginput:false,
    pgbuttons:false,
    grouping: true,
    groupingView: {groupField: ['TenNhom'],
    groupOrder: ['asc'],
                 //groupSummary : [true,true],
                 showSummaryOnHide: false,
                 groupColumnShow: [false, false],
                 groupText: ['<b style="color:blue"> Nhóm: {0}</b> : {PhiThucHien}'],
                 groupCollapse: false,
               },

               serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {

        },
        loadComplete: function(data,rowid) {

        },
        caption: ""
      });
}
/*function create_grid10(){

    $("#rowed12").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Số phiếu','Ngày nộp','Mã BN','Họ lót','Tên BN','Diễn giải','Bởi','Thu','Chi','SHĐ KCB','SHĐ Thuốc','SHĐ Thuốc Nội','SHĐ KCB nội','','','','','Đối Tượng','Nội Trú','','','','','','','','Máy','Tầng'],
    colModel:[
        {name:'MaPhieu',index:'MaPhieu', width:"8%", editable:false,align:'left',hidden:false},
        {name:'NgayGio',index:'NgayGio', width:"9%", editable:false,align:'left',hidden:false},
        {name:'MaBenhNhan',sortable: true,search:true,sorttype: 'number',index:'MaBenhNhan', width:"5%", editable:true,align:'left',hidden:false},
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan', width:"15%", editable:true,align:'left',hidden:false},
        {name:'TenBenhNhan',sortable: true,search:true,sorttype: 'text',index:'TenBenhNhan', width:"7%", editable:true,align:'left',hidden:false},
        {name:'GhiChu',index:'GhiChu', width:"15%", editable:true,align:'left',hidden:false},
        {name:'TenNhanVien',sortable: true,search:true,sorttype: 'text',index:'TenNhanVien', width:"7%", editable:true,align:'left',hidden:false},
        {name:'TienThuVao',summaryType: 'sum',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,search:true,sorttype: 'number',index:'TienThuVao', width:"6%", editable:true,align:'right',hidden:false},
        {name:'TienChiRa',summaryType: 'sum',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,search:true,sorttype: 'number',index:'TienChiRa', width:"6%", editable:true,align:'right',hidden:false},
        {name:'DaCoHDKCBNgoaiTru',index:'DaCoHDKCBNgoaiTru', width:"6%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDThuocNgoaiTru',index:'DaCoHDThuocNgoaiTru', width:"6%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDThuocNoiTru',index:'DaCoHDThuocNoiTru', width:"6%", editable:false,align:'center',hidden:false},
        {name:'DaCoHDKCBNoiTru',index:'DaCoHDKCBNoiTru', width:"6%", editable:false,align:'center',hidden:false},
        {name:'ID_BenhNhan',index:'ID_BenhNhan',hidden:true},
        {name:'LoaiThanhToan',index:'LoaiThanhToan',hidden:true},
		{name:'ID_PhanLoaiKham',index:'ID_PhanLoaiKham',hidden:true},
		{name:'LoaiDoiTuongKham',index:'LoaiDoiTuongKham',hidden:true},
		{name:'doituong',index:'doituong',hidden:false,width:"5%", editable:false,align:'center'},
		{name:'noitru',index:'noitru',hidden:false,width:"7%", editable:false,align:'center'
		,formatter: "select",edittype:"select",editoptions: { value:"1:Nội trú;0:Ngoại trú"}
		,stype: 'select', searchoptions: {sopt: ['eq'], value: ":;1:Co;0:Ko"}
		},
		{name:'phongban',index:'phongban',hidden:true,summaryType: 'sum'},
		{name:'vpnoi',index:'vpnoi',hidden:true,summaryType: 'sum'},
		{name:'vpngoai',index:'vpngoai',hidden:true,summaryType: 'sum'},
		{name:'bhytnoi',index:'bhytnoi',hidden:true,summaryType: 'sum'},
		{name:'bhytngoai',index:'bhytngoai',hidden:true,summaryType: 'sum'},
		{name:'ID_BenhAnNoiTru',index:'ID_BenhAnNoiTru',hidden:true,summaryType: 'sum'},
		{name:'conlai',summaryType: 'sum',index:'conlai',hidden:true},
        {name:'IP',sortable: true,search:true,sorttype: 'number',index:'IP', width:"5%", align:'left',hidden:false},
        {name:'Tang',sortable: true,search:true,sorttype: 'number',index:'Tang', width:"5%",align:'left',hidden:false},

    ],
        loadonce: true,
       
        modal:true,
        rowNum: 10000,
        rowList:[],
        sortname: 'TenNhanVien',
      
        height:100,
        width: 100,
        viewrecords: true,
        ignoreCase:true,
        shrinkToFit:true,
        viewrecords: false,
        ignoreCase:true,
        pginput:false,
        pgbuttons:false,
        footerrow: true,



    grouping: true,
   
    autowidth:true,
    groupingView: {groupField: ['phongban','TenNhanVien'],
   
    groupSummary: [false],
    
    groupColumnShow: [false,true],
    groupText: ['<b >{0}-{1}  VP Nội trú: {vpnoi}  VP Ngoại trú: {vpngoai}   BHYT Nội trú: {bhytnoi}  BHYT ngoại trú: {bhytngoai}</b>',' <b >{0}</b>  <b style="color: orangered;font-size:14px;"> Thu {TienThuVao}</b>  đồng -----<b style="color: blue;font-size:14px;"> Chi {TienChiRa}</b> -----<b style="font-size:14px;"> Tổng {conlai}</b> đồng.'],
    groupCollapse: false,
    showSummaryOnHide: false,



 },

        serializeRowData: function (postdata) {

        },
        onSelectRow: function(id){

        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {

                 rowData = jQuery(this).getRowData(rowId);
                 var id_benhnhan = rowData['ID_BenhNhan'];
                 var MaBenhNhan = rowData['MaBenhNhan'];
                 var TenBenhNhan = rowData['HoLotBenhNhan']+' '+rowData['TenBenhNhan'];
				 var ID_PhanLoaiKham = rowData[''];

                 if(rowData['LoaiThanhToan']=='TamUng'){
                      parent.postMessage('tamung;tam_ung;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
                 }else if(rowData['LoaiThanhToan']=='HoanUng'){
                      parent.postMessage('hoanung;hoan_ung;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
                 }else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && $.trim(rowData['ID_BenhAnNoiTru'])==''){									
					  parent.postMessage('thutrano_edit;ngoaitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
                 }
				 else if(rowData['LoaiThanhToan']=='ThanhToanLuotKham' && $.trim(rowData['ID_BenhAnNoiTru'])!=''){									
					  parent.postMessage('thutrano_edit;noitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");                  
                 }


        },
        loadComplete: function(data,rowid) {


                var gridDOM = this; 
                    if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {
                        
                        setTimeout(function () {                            
                            gridDOM.triggerToolbar();
                        }, 100);
                      //  console.log(1);
                    }
                    else
                    {

		
              var ids = $('#rowed12').jqGrid('getDataIDs');
              var tongthu =0;
              var tongchi =0;
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed12').getRowData(ids[i]);

                    tongthu =parseFloat(tongthu) + parseFloat(rowData["TienThuVao"]);
                    tongchi =parseFloat(tongchi) + parseFloat(rowData["TienChiRa"]);
                   
                    var  ID_PLoaiKham=(rowData["ID_PhanLoaiKham"]);

                        if(ID_PLoaiKham!=46)
                        {
							if(rowData['LoaiDoiTuongKham']=='BHYT'){
								$("#rowed12").setCell (ids[i],'MaPhieu','',{ background:'yellow'});
							}
                        }else
                        {
							if(rowData['LoaiDoiTuongKham']=='BHYT'){
								$("#rowed12").setCell (ids[i],'MaPhieu','',{ background:'yellow'});
							}else{
                          		 $("#rowed12").setCell (ids[i],'MaPhieu','',{ background:'orange'});
							}
                        }
                }

                sumThu = $("#rowed12").jqGrid("getCol", "TienThuVao", false, "sum");
                sumChi = $("#rowed12").jqGrid("getCol", "TienChiRa", false, "sum");
                countMP=  $("#rowed12").getGridParam("reccount");

                $("#rowed12").jqGrid("footerData", "set", {GhiChu: "Còn lại: "+ (sumThu-sumChi).formatMoney(0, ',', '.'), TienThuVao: sumThu,TienChiRa: sumChi,MaPhieu:"Số phiếu: "+countMP });


}

        },
        caption:"<div style='float:right'><div id=xuat_excel_pThuChi ' onclick=xuat_excel_dvcc(2) class='outExcel  ui-icon ui-icon-document'></div><label class='diengiai'>Xuất excel các phiếu thu chi</label></div>"
    });
$("#rowed12").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
}*/
function create_grid11(){
  $("#rowed13").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Mã phiếu','Ngày lập phiếu','Người lập phiếu',
    'Mã BN','Tên BN','Ghi chú','Tiền thuốc trả lại',
    'Đã giải quyết','Mã phiếu thanh toán','Số tiền Phiếu thanh toán','Nợ cuối','','','',''],
    colModel:[
    {name:'MaPhieu',index:'MaPhieu', width:"3%", editable:false,align:'center',hidden:false},
    {name:'NgayLapPhieu',index:'NgayLapPhieu', width:"2%", editable:false,align:'left',hidden:false},
    {name:'NguoiLapPhieu',index:'NguoiLapPhieu', width:"2%", editable:false,align:'left',hidden:false},
    {name:'MaBenhNhan',index:'MaBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
    {name:'TenBenhNhan',index:'TenBenhNhan', width:"2%", editable:true,align:'left',hidden:false},
    {name:'GhiChu',index:'GhiChu', width:"2%", editable:true,align:'left',hidden:false},
    {name:'TienThuocTraLai',index:'TenNhanVien', width:"2%", editable:true,align:'left',hidden:false},
    {name:'DaHoanTien',index:'TienThuVao', width:"2%", editable:true,align:'right',hidden:false},
    {name:'MaPhieuThanhToan',index:'TienChiRa', width:"2%", editable:true,align:'right',hidden:false},
    {name:'SoTienPhieuThanhToan',index:'SoTienPhieuThanhToan', width:"2%", editable:true,align:'right',hidden:false},
    {name:'NoCuoi',index:'NoCuoi', width:"2%", editable:true,align:'right',hidden:false},
    {name:'ID_NhapKho',index:'ID_NhapKho', width:"0%", editable:true,align:'right',hidden:true},
    {name:'tienvon',index:'tienvon', width:"0%", editable:true,align:'right',hidden:true},
    {name:'ID_BenhNhan',index:'ID_BenhNhan', width:"0%", editable:true,align:'right',hidden:true},
    {name:'ID_ThuTraNo',index:'ID_ThuTraNo', width:"0%", editable:true,align:'right',hidden:true},
    ],
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pager: '#prowed13',
    sortname: 'MaPhieu',
    height:100,
    width: 100,
    viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    viewrecords: false,
    ignoreCase:true,
    pginput:false,
    pgbuttons:false,


    serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
          rowData = $("#rowed13").getRowData(rowId);
          var ID_BenhNhan = $.trim(rowData['ID_BenhNhan']);
          var DaHoanTien = $.trim(rowData['DaHoanTien']);
          var ID_NhapKho = $.trim(rowData['ID_NhapKho']);
          var tienvon = $.trim(rowData['tienvon']);
          var MaPhieu = $.trim(rowData['MaPhieu']);
          var NgayLapPhieu = $.trim(rowData['NgayLapPhieu']);
          var TienThuocTraLai = $.trim(rowData['TienThuocTraLai']);
          var ID_ThuTraNo=$.trim(rowData['ID_ThuTraNo']);
          if(DaHoanTien==0){
            parent.postMessage('trathuoc;trathuoc;'+ID_BenhNhan+';'+ID_NhapKho+';'+tienvon+';'+MaPhieu+';'+NgayLapPhieu+';'+TienThuocTraLai+';add', "*");
          }else{
            parent.postMessage('trathuoc;trathuoc;'+ID_ThuTraNo+';'+ID_NhapKho+';'+tienvon+';'+MaPhieu+';'+NgayLapPhieu+';'+TienThuocTraLai+';edit', "*");
          }
        },
        loadComplete: function(data,rowid) {


        },
        caption: ""
      });

	//$("#rowe13").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
}


function create_grid15(){
  $("#rowed15").jqGrid({
    url:'',
    datatype: "local",
    colNames:['Mã BN','Họ(tên lót)','Tên','Tuổi','Năm sinh','BS chỉ định','Diễn giải','Đề nghị tạm ứng','Đã giải quyết','','','Đã tạm ứng'],
    colModel:[
    {name:'mabn',index:'mabn', width:"3%", editable:false,align:'center',hidden:false},
    {name:'holot',index:'holot', width:"2%", editable:false,align:'left',hidden:false},
    {name:'ten',index:'ten', width:"2%", editable:false,align:'left',hidden:false},
    {name:'tuoi',index:'tuoi', width:"2%", editable:true,align:'left',hidden:false},
    {name:'namsinh',index:'namsinh', width:"2%", editable:true,align:'left',hidden:false},
    {name:'bschidinh',index:'bschidinh', width:"2%", editable:true,align:'left',hidden:false},
    {name:'diengiai',index:'diengiai', width:"2%", editable:true,align:'left',hidden:false},
    {name:'tongtien',index:'tongtien', width:"2%", editable:true,align:'right',hidden:false},
    {name:'giaiquyet',index:'giaiquyet', width:"2%", editable:true,align:'right',hidden:true},
    {name:'luotkham',index:'luotkham', width:"2%", editable:true,align:'right',hidden:true},
    {name:'id_benhnhan',index:'id_benhnhan', width:"2%", editable:true,align:'right',hidden:true},
    {name:'SumDaTamUng',index:'SumDaTamUng', width:"2%", editable:true,align:'right',hidden:false},
    ],
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pager: '#prowed13',
    sortname: 'MaPhieu',
    height:100,
    width: 100,
    viewrecords: true,
    ignoreCase:true,
    shrinkToFit:true,
    viewrecords: false,
    ignoreCase:true,
    pginput:false,
    pgbuttons:false,


    serializeRowData: function (postdata) {
            //$("#rowed3").trigger("reloadGrid");
            //return postdata;
          },
          onSelectRow: function(id){
          //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");
        },
        ondblClickRow: function (rowId, rowIndex, columnIndex) {
          rowData = $("#rowed15").getRowData(rowId);
          var ID_BenhNhan = $.trim(rowData['id_benhnhan']);
          var giaiquyet = $.trim(rowData['giaiquyet']);

          var tongtien = $.trim(rowData['tongtien']);
          var luotkham=$.trim(rowData['luotkham']);
          if(giaiquyet==0){
            parent.postMessage('tamung;tam_ung_notru;'+ID_BenhNhan+';'+luotkham+';'+tongtien+';add','*');
          }else{
					// parent.postMessage('tam_ung_notru;tam_ung_notru;'+ID_BenhNhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
       }
     },
     loadComplete: function(data,rowid) {


     },
     caption: ""
   });
  $("#rowed15").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
}


function phongban(val, name, record)
{
	console.log(tphongban);
  if (tphongban!= $.trim(record.phongban)) {
   window.bhytnoit = 0;
   window.bhytngoait = 0;		
   window.vpnoit= 0;
   window.vpngoait= 0;
   window.tphongban= $.trim(record.phongban);

   if($.trim(record.doituong)=='BHYT' && record.noitru=='0'){		
     window.bhytngoait=1;

   }
   if($.trim(record.doituong)=='BHYT' && record.noitru=='1'){
     window.bhytnoit=1;
   }
   if($.trim(record.doituong)=='Viện phí' && record.noitru=='1'){
     window.vpnoit=1;
   }
   if($.trim(record.doituong)=='Viện phí' && record.noitru=='0'){
     window.vpngoait=1;
   }

 }
 else {
  if($.trim(record.doituong)=='BHYT' && record.noitru=='0'){			
   window.bhytngoait=window.bhytngoait+1;
 }
 if($.trim(record.doituong)=='BHYT' && record.noitru=='1'){
   window.bhytnoit=window.bhytnoit+1;
 }
 if($.trim(record.doituong)=='Viện phí' && record.noitru=='1'){
   window.vpnoit=window.vpnoit+1;
 }
 if($.trim(record.doituong)=='Viện phí' && record.noitru=='0'){
   window.vpngoait=window.vpngoait+1;
 }
}


return ('');
//return ('BHYT Nội trú:'+bhytnoit+' BHYT Ngoại trú:'+bhytngoait+' VP Nội trú'+vpnoit+' VP Ngoại trú:'+vpngoait);
}




function create_grid10(){			
  window.dataView_12;	
  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();		


  window.grid_12;	 
  var options = {
   enableCellNavigation: true,
   showHeaderRow: true,
   headerRowHeight: 30,
   explicitInitialization: true,
   forceFitColumns: true,
   multiColumnSort: true
 };		
 window.columns_12 = [		 	 

 {name:'Mã phiếu',id:'MaPhieu',field: "MaPhieu", width:40, sortable: true},
 {name:'Ngày nộp',id:'NgayGio',field: "NgayGio", width:40, sortable: true},
 {name:'Mã BN',id:'MaBenhNhan',field: "MaBenhNhan", width:35, sortable: true},
 {name:'Họ lót',id:'HoLotBenhNhan',field: "HoLotBenhNhan", width:70, sortable: true},
 {name:'Tên BN',id:'TenBenhNhan',field: "TenBenhNhan", width:35, sortable: true},
 {name:'Diễn giải',id:'GhiChu',field: "GhiChu", width:60, sortable: true},
 {name:'Bởi',id:'TenNhanVien',field: "TenNhanVien", width:40, sortable: true},
 {name:'Thu',id:'TienThuVao',field: "TienThuVao", width:15,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Chi',id:'TienChiRa',field: "TienChiRa", width:15,formatter: number,cssClass: "textright",summaryFormatter: TienChiRaFormatter, sortable: true},
	   /* {name:'KCB',id:'DaCoHDKCBNgoaiTru',field: "DaCoHDKCBNgoaiTru", width:30, sortable: true},
	    {name:'Thuốc',id:'DaCoHDThuocNgoaiTru',field: "DaCoHDThuocNgoaiTru", width:30, sortable: true},
	    {name:'Thuốc Nội',id:'DaCoHDThuocNoiTru',field: "DaCoHDThuocNoiTru", width:30, sortable: true},
	    {name:'KCB nội',id:'DaCoHDKCBNoiTru',field: "DaCoHDKCBNoiTru", width:30, sortable: true},*/
      {name:'Đối Tượng',id:'doituong',field: "doituong", width:40, sortable: true},
      {name:'Nội Trú',id:'nt',field: "nt", width:30, sortable: true},
      {name:'Máy',id:'IP',field: "IP", width:10, sortable: true},
      /* {name:'Tầng',id:'Tang',field: "Tang", width:10, sortable: true},		 */	

      ];
      window.dataView_12 = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });	

		 // window.dataView_12.setItems(data);		 
    window.grid_12 = new Slick.Grid("#grid_12", window.dataView_12,  window.columns_12, options);		

    $('#grid_12').css({'height': $(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-70+'px'});
    $('#grid_12').css({'width' : $(window).width()-50+'px'});

    window.grid_12.onSort.subscribe(function (e, args) {
     var cols = args.sortCols;

     window.dataView_12.sort(function (dataRow1, dataRow2) {
      for (var i = 0, l = cols.length; i < l; i++) {
        var field = cols[i].sortCol.field;
        var sign = cols[i].sortAsc ? 1 : -1;
        var value1 = dataRow1[field], value2 = dataRow2[field];
        var result = (value1 == value2 ? 0 : (value1 > value2 ? 1 : -1)) * sign;
        if (result != 0) {
         return result;
       }
     }
     return 0;
   });
     window.grid_12.invalidate();
     window.grid_12.render();
   });

    window.dataView_12.onRowCountChanged.subscribe(function (e, args) {
      window.grid_12.updateRowCount();
      window.grid_12.invalidateRows(args.rows);
      window.grid_12.render();		
      $("[id$='MaPhieu_summary']").text('Số phiếu : '+window.grid_12.getData().getPagingInfo().totalRows.formatMoney(0, ',', '.'));

    });	 
    window.grid_12.registerPlugin(groupItemMetadataProvider);
    var summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_12, window.grid_12, $("#footer3"));
    window.grid_12.setSelectionModel(new Slick.CellSelectionModel());	
    window.grid_12.setSelectionModel(new Slick.RowSelectionModel());
    window.dataView_12.onRowsChanged.subscribe(function (e, args) {
     window.grid_12.invalidateRows(args.rows);
     window.grid_12.render();
     $("[id$='MaPhieu_summary']").text('Số phiếu : '+window.grid_12.getData().getPagingInfo().totalRows.formatMoney(0, ',', '.'));
   });
    plugin = new Slick.AutoTooltips();
    window.grid_12.registerPlugin(plugin);


    window.dataView_12.setGrouping([
 
    {
      getter: "TenNhanVien",
      formatter: function (g) {
        var total = sumTotalsFormatter(g.totals, columns_12[7]);
        var chi = sumTotalsFormatter(g.totals, columns_12[8]);
        var con =(total -chi);
        return "<strong style='font-size:14px;'>" + g.value + "</strong>  <span style='font-size:14px;'>     <strong style='color: blue'>    Thu: " + total.formatMoney(0, ',', '.')  + "</strong > - <strong style='color:red;'> Chi: " + chi.formatMoney(0, ',', '.')  + "</strong> - <strong > Tổng thu: " + con.formatMoney(0, ',', '.')  + "</strong></span>";			
      },	
      aggregators: [new Slick.Data.Aggregators.Sum("TienThuVao"),
      new Slick.Data.Aggregators.Sum("TienChiRa")],
      aggregateCollapsed: true,     
      collapsed: false,
      lazyTotalsCalculation: false,
      displayTotalsRow: false,
    }
    ]
    );
    $(window.grid_12.getHeaderRow()).delegate(":input", "change keyup", function (e) {
     var columnId = $(this).data("columnId");
     if (columnId != null) {
      columnFilters[columnId] = $.trim($(this).val());
      window.dataView_12.refresh();
    }
  });
    window.grid_12.onHeaderRowCellRendered.subscribe(function(e, args) {
     $(args.node).empty();
     $("<input type='text'>")
     .data("columnId", args.column.id)
     .val(columnFilters[args.column.id])
     .appendTo(args.node);
   });		

    window.grid_12.onDblClick.subscribe(function (e, args){			
      rowData = args.item;
      var id_benhnhan = window.dataView_12.getItem(args.row).ID_BenhNhan;
      var MaBenhNhan = window.dataView_12.getItem(args.row).MaBenhNhan;
      var TenBenhNhan = window.dataView_12.getItem(args.row).HoLotBenhNhan+' '+window.dataView_12.getItem(args.row).TenBenhNhan;
      var ID_PhanLoaiKham = '';
      var rowId=window.dataView_12.getItem(args.row).ID_ThuTraNo;
          if(parseInt(window.dataView_12.getItem(args.row).ID_HuyChiDinhThuoc)>0){//+"&id_huychidinh="+window.dataView_12.getItem(args.row).ID_HuyChiDinhThuoc
           // parent.postMessage('open_idbenhnhan;hoantradvthuoc;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
         parent.postMessage("open_idbenhnhan;hoantradvthuoc;;"+rowId+";;edit;"+TenBenhNhan+"&id_huychidinh="+window.dataView_12.getItem(args.row).ID_HuyChiDinhThuoc, "*");    
       }else if(window.dataView_12.getItem(args.row).LoaiThanhToan=='TamUng'){
        parent.postMessage('tamung;tam_ung;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
      }else if(window.dataView_12.getItem(args.row).LoaiThanhToan=='HoanUng'){
        parent.postMessage('hoanung;hoan_ung;'+id_benhnhan+';0;'+rowId+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
      }else if(window.dataView_12.getItem(args.row).LoaiThanhToan=='ThanhToanLuotKham' && $.trim(window.dataView_12.getItem(args.row).ID_BenhAnNoiTru)==''){								
       parent.postMessage('thutrano_edit;ngoaitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");
     }else if(window.dataView_12.getItem(args.row).LoaiThanhToan=='ThanhToanLuotKham' && $.trim(window.dataView_12.getItem(args.row).ID_BenhAnNoiTru)!=''){									
       parent.postMessage('thutrano_edit;noitru_bhyt;'+rowId+';'+id_benhnhan+';edit;'+MaBenhNhan+';'+TenBenhNhan, "*");                  
     }else if(window.dataView_12.getItem(args.row).LoaiThanhToan=='ThuNo' ){									
       parent.postMessage("open_idbenhnhan;thu_tien;;"+rowId+";;edit;"+TenBenhNhan, "*");	              
     }
   })		
    window.grid_12.init();
    window.dataView_12.beginUpdate();
    window.dataView_12.setFilter(filter);		
    window.dataView_12.endUpdate();	
  }
  window.columnFilters = {};
  function filter(item) {	

   for (var columnId in columnFilters) {
    if (columnId !== undefined && columnFilters[columnId] !== "") {
      var c = window.grid_12.getColumns()[window.grid_12.getColumnIndex(columnId)];
		//alert(item[c.field])
		
    if ($.trim(item[c.field]).toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
      return false;
    }
  }
}

return true;		
}

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



function TienThuVaoFormatter(value) {
	window.TienThuVao=value;
  return value.formatMoney(0, ',', '.');
}
function TienChiRaFormatter(value) {
	$("[id$='GhiChu_summary']").text('Còn lại : '+(TienThuVao-value).formatMoney(0, ',', '.'));
  return value.formatMoney(0, ',', '.');
}


function reload_grid(){
	//alert();
	window.grid_12.scrollRowIntoView(0);
	
}


function create_grid11(){			
  window.dataView_13;	
  var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();  		 
  window.grid_13;	 
  var options = {
   enableCellNavigation: true,
   showHeaderRow: true,
   headerRowHeight: 30,
   explicitInitialization: true,
   forceFitColumns: true,
   multiColumnSort: true
 };		
 window.columns_13 = [		 	 

 {name:'Ngày nộp',id:'NgayThanhToan',field: "NgayThanhToan", width:60, sortable: true},
 {name:'Mã BN',id:'MaBenhNhan',field: "MaBenhNhan", width:35, sortable: true},
 {name:'Họ lót',id:'HoLotBenhNhan',field: "HoLotBenhNhan", width:70, sortable: true},
 {name:'Tên BN',id:'TenBenhNhan',field: "TenBenhNhan", width:35, sortable: true},    
 {name:'Bởi',id:'NickName',field: "NickName", width:40, sortable: true},
 {name:'Thu',id:'Thanhtien',field: "Thanhtien", width:60,formatter: number,cssClass: "textright",summaryFormatter: TienThuVaoFormatter, sortable: true},
 {name:'Tầng',id:'ip',field: "ip", width:10, sortable: true},			

 ];
 window.dataView_13 = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });			 
 window.grid_13 = new Slick.Grid("#grid_13", window.dataView_13,  window.columns_13, options);		

 window.grid_13.registerPlugin(groupItemMetadataProvider);
 var summaryfooter = new Slick.Controls.SummaryFooter(window.dataView_13, window.grid_13, $("#footer13"));
 window.grid_13.setSelectionModel(new Slick.CellSelectionModel());	
 window.grid_13.setSelectionModel(new Slick.RowSelectionModel());

 $('#grid_13').css({'height': $(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-70+'px'});
 $('#grid_13').css({'width' : $(window).width()-50+'px'});


 window.dataView_13.setGrouping([

 {
  getter: "NickName",
  formatter: function (g) {
    var total = sumTotalsFormatter(g.totals, columns_13[5]);
    console.log(total);
    return "<strong style='font-size:14px;'>" + g.value + "</strong> <strong style='font-size:14px;'>  Tổng: " + total.formatMoney(0, ',', '.')  + " </strong></span>";			
  },	
  aggregators: [new Slick.Data.Aggregators.Sum("Thanhtien")],
  aggregateCollapsed: true,     
  collapsed: false,
  lazyTotalsCalculation: false,
  displayTotalsRow: false,
}
]
);
 window.grid_13.onSort.subscribe(function (e, args) {
   var cols = args.sortCols;

   window.dataView_13.sort(function (dataRow1, dataRow2) {
    for (var i = 0, l = cols.length; i < l; i++) {
      var field = cols[i].sortCol.field;
      var sign = cols[i].sortAsc ? 1 : -1;
      var value1 = dataRow1[field], value2 = dataRow2[field];
      var result = (value1 == value2 ? 0 : (value1 > value2 ? 1 : -1)) * sign;
      if (result != 0) {
       return result;
     }
   }
   return 0;
 });
   window.grid_13.invalidate();
   window.grid_13.render();
 });

 window.dataView_13.onRowCountChanged.subscribe(function (e, args) {
  window.grid_13.updateRowCount();
  window.grid_13.invalidateRows(args.rows);
  window.grid_13.render();		


});	 

 plugin = new Slick.AutoTooltips();
 window.grid_13.registerPlugin(plugin);
 $(window.grid_13.getHeaderRow()).delegate(":input", "change keyup", function (e) {
   var columnId = $(this).data("columnId");
   if (columnId != null) {
    columnFilters1[columnId] = $.trim($(this).val());
    window.dataView_13.refresh();
  }
});
 window.grid_13.onHeaderRowCellRendered.subscribe(function(e, args) {
   $(args.node).empty();
   $("<input type='text'>")
   .data("columnId", args.column.id)
   .val(columnFilters[args.column.id])
   .appendTo(args.node);
 });		

 window.grid_13.onDblClick.subscribe(function (e, args){			
  rowData = args.item;          
})		
 window.grid_13.init();
 window.dataView_13.beginUpdate();
 window.dataView_13.setFilter(filter1);		
 window.dataView_13.endUpdate();	
}
window.columnFilters1 = {};
function filter1(item) {	
	for (var columnId in columnFilters1) {
    if (columnId !== undefined && columnFilters1[columnId] !== "") {
      var c = window.grid_13.getColumns()[window.grid_13.getColumnIndex(columnId)];	
    if (item[c.field].toLowerCase().substring(0, columnFilters1[columnId].length) != columnFilters1[columnId].toLowerCase()) {
      return false;
    }
  }
}

return true;		
}


function filterct(item) {	
	for (var columnId in columnFilters1) {
    if (columnId !== undefined && columnFilters1[columnId] !== "") {
      var c = window.grid_13.getColumns()[window.grid_13.getColumnIndex(columnId)];	
    if (item[c.field].toLowerCase().substring(0, columnFilters1[columnId].length) != columnFilters1[columnId].toLowerCase()) {
      return false;
    }
  }
}

return true;		
}



function create_dotkham_congty(elem, datalocal) {
  datalocal = jQuery.parseJSON(datalocal);
  $(elem).jqGrid({
    datastr: datalocal,
    datatype: "jsonstring",
    colNames:['Tên đợt khám', 'Tên công ty', 'ID công ty','Số ca trong đợt'],
    colModel:[  
    {name:'TenDotKham',index:'TenDotKham',hidden :false}, 
    {name:'TenCongTy',index:'TenCongTy',hidden :false},
    {name:'ID_GoiKhamCty',index:'ID_GoiKhamCty',hidden :true},
    {name:'SL',index:'SL',hidden :false},
    
    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,
    modal: true,
    rowNum: 200000,
    rowList: [],
    height: 190,
    width: 700,
    viewrecords: true,
    ignoreCase: true,
    shrinkToFit: true,
    cmTemplate: {sortable: false},
    sortorder: "desc",
    serializeRowData: function(postdata) {
    },
    onSelectRow: function(id) {
     switch (window.contro)
     {
      case "5":
      $("#rowed8").jqGrid('setGridParam',{url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_benhnhanconno&id_dotkham='+id+'&tunngay='+$( '#from_day' ).val()+'&denngay='+$( '#to_day' ).val()+" 23:59",datatype:'json'}).trigger('reloadGrid');
      window.ID_GoiKhamCty=id;
      break;
    }
  },
  ondblClickRow: function(id, rowIndex, columnIndex) {
  },
  loadComplete: function(data) {
    grid_filter_enter(elem);
  },
});
  $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
  $(elem).jqGrid('bindKeys', {});
}




</script>

