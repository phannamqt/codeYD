<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
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
/*nam format lai luoi*/
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
#dialog-form {
	line-height:18px;
}
</style>
<body> 
	<div id="rowed3" style="margin-left:10px;"></div>
    <div id="footer"  style="width:100%;height:20px; margin-left:10px;"><button id="themmoi">Thêm mới</button> <button id="sua">Sửa</button> 
    <?php
    	if($_SESSION["user"]["id_user"]==1){
    ?>
    	<button id="btn_excel">Xuất excel</button> 
    <?php
		}
    ?>
	<button id="btn_copycmc">Copy cấu hình xét nghiệm</button> 
    </div>
    
     <div id="dialog-form" title="Thêm bản ghi" style="display:none">
     	<div id="container">
     		<div class="form_row" style="vertical-align:top"  >
             
		           <div style="padding-top:10px ">
		               <label for="TenLoaiKham" style="width:124px; color:red;text-align:right;font-weight: bold;">Tên Loại khám</label>
		               <span style="padding-top:10px "> (*) </span>
		               <input id="TenLoaiKham" name="TenLoaiKham"  type="text" style="width:170px;margin-left:5px">
		           </div>
		             
		           <div style="padding-top:5px "> <label for="ID_NhomCLS" style="width:140px;text-align:right; color:red;font-weight: bold;">Nhóm loại khám <span style="padding-top:10px ">(*) </span></label>
                        <input type="text" id="ID_NhomCLS" name="ID_NhomCLS" style="width:142px;margin-left:5px">
		           </div>
		           <div style="padding-top:5px "> <label for="MaVietTat" style="width:140px;text-align:right;font-weight: bold;">Mã viết tắt</label>
		              <input type=text id="MaVietTat" name="MaVietTat" style="width: 170px!important;margin-left:5px" >
		           </div>
		           <div style="padding-top:5px "> <label for="MaVietTat_BN"  style="width:140px;text-align:right;color:blue">Mã viết tắt BN (Hiễn thị ra khi in ở các report)</label>
		          		 <input id="MaVietTat_BN" value="" name="MaVietTat_BN"  type="text" style="width: 170px; margin-left: 5px; background-color: rgb(255, 255, 255); position: relative; top: -15px;">
		           </div>
		           <div style="padding-top:5px "> <label for="GiaBaoChoBN" style="width:140px;text-align:right; color:red;font-weight: bold;">Giá báo BN (Tính BHYT) <span style="padding-top:10px ">(*) </span></label>
		                  <input id="GiaBaoChoBN" value="" name="GiaBaoChoBN"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="GiaThueNgoaiThucHien" style="width:140px;text-align:right ">Giá thuê ngoài</label>
		               <input id="GiaThueNgoaiThucHien" name="GiaThueNgoaiThucHien"  type="text" style="width:170px;margin-left:5px" value="0">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="ThoiGianTrungBinhThucHien" style="width:140px;text-align:right ">Số phút thực hiện</label>
		               <input id="ThoiGianTrungBinhThucHien" name="ThoiGianTrungBinhThucHien"  type="text" style="width:170px;margin-left:5px"  value="0">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="ThoiGianCoKetQua" style="width:140px;text-align:right ">Thời gian có kết quả</label>
		               <input id="ThoiGianCoKetQua" name="ThoiGianCoKetQua"  type="text" style="width:170px;margin-left:5px" value="0">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="STT" style="width:140px;text-align:right ">STT</label>
		               <input id="STT" name="STT"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="PathToTemplateFile" style="width:140px;text-align:right ">Đường dẫn tập tin mẫu</label>
		               <input id="PathToTemplateFile" name="PathToTemplateFile"  type="text" style="width:170px;margin-left:5px">
		           </div> 
		           <div style="padding-top:10px ">
		               <label for="MoTa" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Mô tả</label>
		               <textarea id="MoTa" style="height:65px; width:170px;margin-left:5px" name="MoTa"></textarea>
		           </div>
		           <div style="padding-top:57px ">
		               <label for="GhiChu" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Ghi chú</label>
		               <textarea id="GhiChu" style="height:45px; width:170px;margin-left:5px" name="GhiChu"></textarea>
		           </div>   
                                             
       		 </div>
       		 <div class="form_row" style="vertical-align:top"  >
             		<div style="padding-top:10px ">
		               <label for="TenLoaiKham_EN" style="width:140px;text-align:right ">Tên loại khám tiếng anh</label>
		               <input id="TenLoaiKham_EN" name="TenLoaiKham_EN"  type="text" style="width:170px;margin-left:5px">
		           </div> 
		           <div style="padding-top:10px ">
		               <label for="ReportName" style="width:140px;text-align:right; vertical-align:top; margin-top:20px;font-weight: bold;">Report name</label>
		               <textarea id="ReportName"  style="height:42px; width:170px;margin-left:5px" name="ReportName"></textarea>
		           </div>
		             
		           <div style="padding-top:30px "> <label for="PhanTramDieuChinhGiaTaiNha" style="width:140px;text-align:right ">Điều chỉnh giá khám</label>
		           		<input id="PhanTramDieuChinhGiaTaiNha" name="PhanTramDieuChinhGiaTaiNha"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:5px "> <label for="PhuThuThucHienTaiNha" style="width:140px;text-align:right ">Phụ phí khám tại nhà</label>
		              <input type=text id="PhuThuThucHienTaiNha" name="PhuThuThucHienTaiNha" style="width: 170px!important;margin-left:5px"  value="0">
		           </div>
		           <div style="padding-top:5px "> <label for="SoPhimLonTieuHao"  style="width:140px;text-align:right ">Số phim lớn tiêu hao</label>
		          		 <input id="SoPhimLonTieuHao" value="" name="SoPhimLonTieuHao"   maxlength="3" type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:5px "> <label for="SoPhimNhoTieuHao"  style="width:140px;text-align:right ">Số phim nhỏ tiêu hao</label>
		                  <input id="SoPhimNhoTieuHao" name="SoPhimNhoTieuHao"  maxlength="3"  type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="SoPhimNhuAnhTieuHao" style="width:140px;text-align:right ">Số phim nhũ ảnh tiêu hao</label>
		               <input id="SoPhimNhuAnhTieuHao" name="SoPhimNhuAnhTieuHao"  maxlength="3" type="text" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="GiaBaoHiem" style="width:140px;text-align:right;font-weight: bold;">Giá bảo hiểm</label>
		               <input id="GiaBaoHiem" name="GiaBaoHiem"  type="text" style="width:170px;margin-left:5px">
		           </div>
                   
		           <div style="padding-top:10px ">
		               <label for="GiaPhuThuBenhVien" style="width:140px;text-align:right ">Giá phụ thu bệnh viện</label>
		               <input id="GiaPhuThuBenhVien" name="GiaPhuThuBenhVien"  type="text" style="width:170px;margin-left:5px" value="0">
		           </div>
                   <div style="padding-top:10px ">
		               <label for="TenBaoHiem" style="width:140px;text-align:right ">Tên bảo hiểm (*)</label>
		               <input id="TenBaoHiem" name="TenBaoHiem"  type="text" style="width:170px;margin-left:5px">
		           </div>
                   <div style="padding-top:10px; display:none" >
		               <label for="MauBaoHiem" style="width:140px;text-align:right ">Màu bảo hiểm</label>
		               <input id="MauBaoHiem" name="MauBaoHiem"  type="text" maxlength="1" style="width:170px;margin-left:5px">
		           </div>
		           <div style="padding-top:10px ">
		               <label for="ID_Nhom_BHYT" style="width:140px;text-align:right ">Nhóm BHYT (*)</label>
                       <input type="text" id="ID_Nhom_BHYT" name="ID_Nhom_BHYT" style="width:142px;margin-left:5px">
		           </div>
                    <div style="padding-top:10px ">
		               <label for="PhanTramThue" style="width:140px;text-align:right; vertical-align:top; margin-top:5px">Phần trăm thuế (*)</label>
		               <input type="text" id="PhanTramThue" name="PhanTramThue" style="width:170px;margin-left:5px">
		           	 </div> 
		            <div style="padding-top:10px ">
		               <label for="LoiKhuyen" style="width:140px;text-align:right; vertical-align:top; margin-top:20px">Lời khuyên</label>
		               <textarea id="LoiKhuyen" style="height:32px; width:170px;margin-left:5px" name="LoiKhuyen"></textarea>
		           	 </div>                        
       		 </div>
        	 <div class="form_row" style="vertical-align:top"  >
        	 	 	<div style="padding-top:5px "> 
                         <label for="XetNghiem" style="width:190px;text-align:right ">Xét nghiệm</label> 
                         <input type=checkbox id="XetNghiem" value="1" name="XetNghiem">
                         <button id="xetnghiem-ts" name="xetnghiem-ts" lang="end"  style="height: 30px; margin-left: 30px;" disabled>Thông số</button>
                     </div>
                     <div style="padding-top:5px ">   
                    	 <label for="CLS" style="width:190px;text-align:right;font-weight: bold;">Cận lâm sàng(menu Cận lâm sàng)</label> 
                         <input type=checkbox id="CLS" value="1" name="CLS">
                         <label for="CoLuuKQInRieng" style="width:190px;text-align:right ">Có lưu kết quả in riêng</label> 
                         <input type=checkbox id="CoLuuKQInRieng" value="1" name="CoLuuKQInRieng">
                         
                         
                     </div>
                     <div style="padding-top:5px ">  
                     	 <label for="DieuTriTaiNha" style="width:190px;text-align:right ">Điều trị tại nhà</label> 
                         <input type=checkbox id="DieuTriTaiNha" value="1" name="DieuTriTaiNha"> 
                          <label for="ThuocNhomXepHangCLS" style="width:190px;text-align:right;font-weight: bold;">Hiển thị Xếp Hàng CLS</label> 
                         <input type=checkbox id="ThuocNhomXepHangCLS" value="1" name="ThuocNhomXepHangCLS">
                     </div>
                      <div style="padding-top:5px ">  
                    	 <label for="CoMauNhapKQ" style="width:190px;text-align:right ">Có mẫu nhập kết quả</label> 
                         <input type=checkbox id="CoMauNhapKQ" value="1" name="CoMauNhapKQ"> 
                         <label for="CoTheKeToa" style="width:190px;text-align:right;font-weight: bold;">Có thể kê toa(bắt buộc với nhóm khám LS)</label> 
                         <input type=checkbox id="CoTheKeToa" value="1" name="CoTheKeToa">
                     </div>
                     <div style="padding-top:5px ">   
                         <label for="GiaTaiNhaDieuChinhTheoNhom" style="width:190px;text-align:right ">Giá tại nhà điều chỉnh theo nhóm</label> 
                         <input type=checkbox id="GiaTaiNhaDieuChinhTheoNhom" value="1" name="GiaTaiNhaDieuChinhTheoNhom">
                         <label for="CoFormChucNangRieng" style="width:190px;text-align:right ">Có form chức năng riêng</label> 
                         <input type=checkbox id="CoFormChucNangRieng" value="1" name="CoFormChucNangRieng">
                     </div>
                      
                    <div style="padding-top:5px ">   
                      	<label for="STTBaoHiem" style="width:95px;text-align:right ">STT BHYT</label> 
                         <input type="text" id="STTBaoHiem" name="STTBaoHiem" style="width:100px;margin-left:5px">
                          <label for="MaSoBH" style="width:97px;text-align:right ">Mã số BHYT</label> 
                         <input type="text" id="MaSoBH" name="MaSoBH" style="width:100px;margin-left:5px">
                     </div>   
                     <div style="padding-top:5px; display:none;">   
                      	<label for="IsThamMy" style="width:190px;text-align:right ">Thẩm mỹ</label> 
                         <input type=checkbox id="IsThamMy" value="1" name="IsThamMy">
                         <label for="ID_NhomLSP" style="width:97px;text-align:right ">Nhóm LSP</label> 
                         <input type="text" id="ID_NhomLSP" name="ID_NhomLSP" style="width:100px;margin-left:5px">
                     </div>    
                      <div style="padding-top:5px "> 
                         <label for="Active" style="width:190px;text-align:right;font-weight: bold;">Sử dụng</label> 
                         <input type=checkbox id="Active" value="1" name="Active">
                          <label for="GiaKSKCT" style="width:100px;text-align:right; font-weight: bold; color:red">Giá viện phí</label>
		               <input id="GiaKSKCT" name="GiaKSKCT"  type="text" style="width:100px;margin-left:5px">
                     </div>  
                     <div style="padding-top:5px "> 
                         <label for="IsHoTro" style="width:190px;text-align:right;font-weight: bold;">Không hỗ trợ</label> 
                         <input type=checkbox id="IsHoTro" value="1" name="IsHoTro">
                     </div>      
                     <div style="padding-top:5px ">   
                      	<label for="STTBaoHiem" style="width:108px;text-align:right ">Khấu hao thuốc vtyt</label> 
                         <input type="text" id="Khhaovtyt" name="Khhaovtyt" style="width:100px;margin-left:5px; text-align:right">
                          <label for="MaSoBH" style="width:97px;text-align:right ">Khấu hao dịch vụ</label> 
                         <input type="text" id="Khhaodv" name="Khhaodv" style="width:100px;margin-left:5px">
                     </div>    
                     <div style="padding-top:5px ">   
                      	<label for="TruongHopBHYT" style="width:108px;text-align:right ">Trường hợp BHYT</label> 
                         <input type="text" id="TruongHopBHYT" name="TruongHopBHYT" style="width:100px;margin-left:5px; text-align:right">
                     </div>         
                     <div style="padding-top:5px ">   
                      	<label for="STTBaoHiem" style="width:108px;text-align:right ">Loại</label> 
                         <input type="text" id="Loai" name="Loai" style="width:100px;margin-left:5px; text-align:right">
                         
                     </div> 
                     
        	 </div>
        </div>
    </div> 
    <div id="dialog-form2" title="Thêm bản ghi" style="display:none">
         <table id="rowed4">          
         </table>
         <div id="prowed4"></div>
    </div >  
    <div id="dialog-form3" title="Thêm bản ghi" style="display:none">
         <table id="rowed5">          
         </table>
         <div id="prowed5"></div>
    </div>
    <div id="dialog-form4" title="Đơn thuốc" style="display:none">
        <iframe id="donthuoc" name="donthuoc" width="1150px" height="520px" src=""></iframe>
    </div>  

     <div id="dialog-excel" title="Xuất excel" style="display:none">
     	Chọn nhóm: <input type="text" name="excel_nhom" id="excel_nhom" style="width: 220px;">
    </div >
	
	<div id="dialog-copychimuccon" title="Copy chỉ mục con" style="display:none">
		- Tên xét nghiệm đang chọn (To): <label class="tenxetnghiemdangchon" style="font-weight:bold"></label><br>
     	- Chọn xét nghiệm tương ứng (From): <input type="text" name="xetnghiemtuongung" id="xetnghiemtuongung" style="width: 220px;">
    </div >
	
	
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventer = window[eventMethod];
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent,function(e) { 
		tam=e.data.split('|||');
		if(tam[0]=='dongdialog'){
			$( "#dialog-form4" ).dialog('close');
		}
		if(tam[1]=='luu'){
			jQuery("#rowed3").jqGrid('setCell', window.id_edit, 'TenLoaiKham', '', {'background': '#00B3A0'});	
			jQuery("#rowed3").jqGrid('setCell', window.id_edit, 'TenDonThuoc', tam[2]);	
		}
		if(tam[1]=='huy'){
			jQuery("#rowed3").jqGrid('setCell', window.id_edit, 'TenLoaiKham', '', {'background': '#FBFAF5'});	
			jQuery("#rowed3").jqGrid('setCell', window.id_edit, 'TenDonThuoc', 'Chưa áp');	
		}
		if(tam[1]=='changetitle'){
			$('#dialog-form4').dialog('option', 'title',window.tenloaikham2+''+tam[2]);
		}
	});
	window.xetnghiemxoa='';
	
	create_combobox_new('#xetnghiemtuongung',create_xetnghiem,'bw','','data_xet_nghiem_tuong_ung',0);
	create_combobox_new('#ID_Nhom_BHYT',create_nhombhyt,'bw','','data_nhombhyt',0);
	create_combobox_new('#ID_NhomCLS',create_nhomcls,'bw','','data_nhomcls',0);
	create_combobox_new('#ID_NhomLSP',create_nhomlsp,'bw','','data_nhomlsp',0);
	create_combobox_new('#TruongHopBHYT',create_truonghopBHYT,'bw','[]','',99);
	create_combobox_new('#Loai',create_loaikham,'bw','[]','',1);

	create_combobox_new('#excel_nhom',create_nhomcls,'bw','','data_nhomcls_excel',0);

	window.donvitinh=$.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DonViTinh&id=ID_DonViTinh&name=TenDonViTinh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bhyt');}}).responseText;
	$("#themmoi,#sua,#btn_excel").button();
	phanquyen();
	thongsoxetnghiem();
	
	
	$( "#dialog-copychimuccon" ).dialog({
		autoOpen: false,
		width: 500,
		modal: true,
		open: function(event,ui){
		
		},
		buttons: {
			"Copy": function() {
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=copycmc&hienmaloi=a&ID_LoaiKham_To='+window.id_edit+'&ID_LoaiKham_From='+$("#xetnghiemtuongung_hidden").val())
                  .done(function( response) {
					$( "#dialog-copychimuccon" ).dialog( "close" );  
					dataView.beginUpdate();
					$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&q=2').done(function(a){
						data=$.parseJSON(a)			
						dataView.setItems(data);
						dataView.endUpdate();	
						dataView.refresh();										
						grid.invalidate();
					})                                                              
					 tooltip_message("<?php get_text1("sua_thanhcong") ?>");
				})
				
			},
			"Thoát": function() {
				$( this ).dialog( "close" );
			}
		}
	});
	$("#btn_copycmc").click(function(e) {
		if(window.TenLoaiKham_edit==""){

			alert("Vui lòng chọn một xét nghiệm cần thực hiện");
		}else{
			$( "#dialog-copychimuccon" ).dialog("open");
		}
		
		
	});
	
	
	
	
	$("#xetnghiem-ts").button();
	$("#themmoi").click(function(e) {
        $('#dialog-form').dialog('open');
		window.oper='add';
		$("input:text").val("");
		$("textarea").val("");
		$("#CLS").prop('checked', false);
		$("#XetNghiem").prop('checked', false);
		 $("#xetnghiem-ts").button('disable');
		$("#CoLuuKQInRieng").prop('checked', false);
		$("#DieuTriTaiNha").prop('checked', false);
		$("#CoMauNhapKQ").prop('checked', false);
		$("#CoTheKeToa").prop('checked', false);
		$("#ThuocNhomXepHangCLS").prop('checked', false);
		$("#GiaTaiNhaDieuChinhTheoNhom").prop('checked', false);
		$("#CoFormChucNangRieng").prop('checked', false);
		$("#Active").prop('checked', true);
		$("#IsHoTro").prop('checked', false);
		$("#XetNghiem").prop('checked', false);
		$("#CLS").prop('checked', true);
		$("#GiaBaoHiem").val(0);
		$("#GiaThueNgoaiThucHien").val(0);
		$("#ThoiGianTrungBinhThucHien").val(0);
		$("#ThoiGianCoKetQua").val(0);
		$("#PhuThuThucHienTaiNha").val(0);
		$("#GiaPhuThuBenhVien").val(0);
		$("#ThuocNhomXepHangCLS").prop('checked', true);
		$("#xetnghiem_xoa").addClass('ui-state-disabled');
    });
	$("#sua").click(function(e) {
		$('.slick-viewport .active').dblclick();
		
	});

	$( "#dialog-excel" ).dialog({
		autoOpen: false,
		width: 350,
		modal: true,
		open: function(event,ui){
		
		},
		buttons: {
			"OK": function() {
				if($("#excel_nhom").val()){
					window.open("pages.php?module=report&view=<?=$modules?>&action=excel_danh_muc_loai_kham&type=excel&id_nhomcls="+$("#excel_nhom_hidden").val());
					$( "#dialog-excel" ).dialog( "close" );
				}else{
					alert("Vui lòng chọn nhóm cần xuất");
				}
			},
			"Thoát": function() {
				$( this ).dialog( "close" );
			}
		}
	});

	$("#btn_excel").click(function(e) {
		$( "#dialog-excel" ).dialog("open");
	});
	
	$( "#xetnghiem-ts" )
            .button()
            .click(function() {
            $( "#dialog-form3" ).dialog( "open" );
           
             });
        $( "#dialog-form3" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(80)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(80)).toFixed(0),
            modal: true,
             open: function(event,ui){
                $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(80)).toFixed(0) );
                $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(90)).toFixed(0) );
                 
                
            },
            buttons: {
           
            "Close": function() {
            $( this ).dialog( "close" );
                        }
                    }
            });
	
	
	
	function filter(item){
		for (var columnId in columnFilters) {
            if (columnId !== undefined && columnFilters[columnId] !== "") {
				
                var c = grid.getColumns()[grid.getColumnIndex(columnId)];
                var filterVal = columnFilters[columnId].toString().toLowerCase();
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
                            if ( testCondition(condition, item[c.field].toString().toLowerCase(), filterNoCondVal.toString().toLowerCase()) == false )
                                return false;
                        }
                    } 
                }else{ //str.indexOf("abc")
					//if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
					// return false;
					//}
					if (item[c.field].toString().toLowerCase().indexOf(columnFilters[columnId].toString().toLowerCase()) ==-1 ) {
					 return false;
					}
                 
                }
            }
        }
        return true;
	}
	
	
	
	
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

			{name:'Tên loại khám',id:'TenLoaiKham',field: "TenLoaiKham",width: 400},	
			{name:'Tên BHYT',id:'TenBHYT',field: "TenBHYT",width: 400},  
			{name:'Nhóm BHYT',id:'Ten_Nhom_BHYT',field: "Ten_Nhom_BHYT",width: 200},
			//{name:'Màu BHYT',id:'Color',field: "Color",width: 80},
			//{name:'Mã viết tắt',id:'MaVietTat',field: "MaVietTat",width: 200},			
			//{name:'Mã viết tắt bệnh nhân',id:'MaVietTat_BN',field: "MaVietTat_BN",width: 200},				               
			//{name:'Mô tả',id:'MoTa',field: "MoTa",width: 70},
			{name:'Giá báo BN',id:'GiaBaoChoBN',field: "GiaBaoChoBN",width: 100,formatter: currencyFmatter},
			{name:'Giá bảo hiểm',id:'GiaBaoHiem',field: "GiaBaoHiem",width: 100,formatter: currencyFmatter},
			//{name:'Giá phụ thu bệnh viện',id:'GiaPhuThuBenhVien',field: "GiaPhuThuBenhVien",width: 150},
            //{name:'Giá thuê ngoài',id:'GiaThueNgoaiThucHien',field: "GiaThueNgoaiThucHien",width: 80},	
					
           // {name:'Số phút thực hiện',id:'ThoiGianTrungBinhThucHien',field: "ThoiGianTrungBinhThucHien",width: 70},
			//{name:'Thời gian có kết quả',id:'ThoiGianCoKetQua',field: "ThoiGianCoKetQua",width: 60},
            //{name:'Ghi chú',id:'GhiChu',field: "GhiChu",width: 80},
           // {name:'Lời khuyên',id:'LoiKhuyen',field: "LoiKhuyen",width: 110},	
			{name:'Sử dụng',id:'Active',field: "Active",width:70},
			//{name:'STT',id:'STT',field: "STT",width: 60},
           // {name:'CLS',id:'CLS',field: "CLS",width: 50},
           // {name:'Xét Nghiệm',id:'XetNghiem',field: "XetNghiem",width: 50},
			//{name:'Có lưu kết quả in riêng',id:'CoLuuKQInRieng',field: "CoLuuKQInRieng",width: 50}, 
			//{name:'Điều trị tại nhà',id:'DieuTriTaiNha',field: "DieuTriTaiNha",width: 50}, 
			//{name:'Có mẫu nhập kết quả',id:'CoMauNhapKQ',field: "CoMauNhapKQ",width: 150},
			//{name:'Đường dẫn của tập tin mẫu',id:'PathToTemplateFile',field: "PathToTemplateFile",width: 150},
			//{name:'Tên loại khám bằng tiếng anh',id:'TenLoaiKham_EN',field: "TenLoaiKham_EN",width: 150},
			
			//{name:'Report name',id:'ReportName',field: "ReportName",width: 150},
			//{name:'Có thể kê toa',id:'CoTheKeToa',field: "CoTheKeToa",width: 150},
			//{name:'Thuộc nhóm xếp hạng CLS',id:'ThuocNhomXepHangCLS',field: "ThuocNhomXepHangCLS",width: 150},
			//{name:'Khấu hao thuốc VTYT',id:'Khauhaovtyt',field: "Khauhaovtyt",width: 150},
		//	{name:'Khấu hao dịch vụ',id:'Khauhaodv',field: "Khauhaodv",width: 150},
			//{name:'Điều chỉnh giá khám',id:'PhanTramDieuChinhGiaTaiNha',field: "PhanTramDieuChinhGiaTaiNha",width: 150},
			//{name:'Phụ phí khám tại nhà',id:'PhuThuThucHienTaiNha',field: "PhuThuThucHienTaiNha",width: 150},
			//{name:'Điều chỉnh giá tại nhà',id:'GiaTaiNhaDieuChinhTheoNhom',field: "GiaTaiNhaDieuChinhTheoNhom",width: 150},
			//{name:'Có form chức năng riêng',id:'CoFormChucNangRieng',field: "CoFormChucNangRieng",width: 150},
			//{name:'Số phim lớn tiêu hao',id:'SoPhimLonTieuHao',field: "SoPhimLonTieuHao",width: 150},
			//{name:'Số phim nhỏ tiêu hao',id:'SoPhimNhoTieuHao',field: "SoPhimNhoTieuHao",width: 150},
			//{name:'Số phim nhũ ảnh tiêu hao',id:'SoPhimNhuAnhTieuHao',field: "SoPhimNhuAnhTieuHao",width: 150},
			//{name:'Tuyến huyện',id:'TuyenHuyen',field: "TuyenHuyen",width: 150},
			//name:'Tuyến tỉnh',id:'TuyenTinh',field: "TuyenTinh",width: 150},
			//{name:'Tuyến trung ương',id:'TuyenTrungUong',field: "TuyenTrungUong",width: 150},
			
			
			
  
  ];



 window.columnFilters = {};
	
   $(function () {
	 // var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();
	  dataView = new Slick.Data.DataView({inlineFilters: true});	
      grid = new Slick.Grid("#rowed3", dataView, columns, options);		
	    var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();		
		
	  	dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });	
	
          	 
    	grid = new Slick.Grid("#rowed3", dataView, columns, options);	
		grid.registerPlugin(groupItemMetadataProvider);	
	
		var columnpicker  = new Slick.Controls.ColumnPicker(columns, grid, options);
		dataView.onRowCountChanged.subscribe(function (e, args) {
			grid.updateRowCount();
			grid.invalidateRows(args.rows);
			grid.render();
			resize_control();
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
	  //console.log($(this).val());
      if (columnId != null) {
		  
		columnFilters[columnId] = $.trim($(this).val());
		//dataView.refresh();
		
		if( $.trim($(this).val())!=''){
			//console.log(1);
			dataView.expandAllGroups();
		}else{
			//console.log(2);
			dataView.collapseAllGroups();
		}
		dataView.refresh();
      }
	
    });
		
		/* grid.onDblClick.subscribe(function (e, args){
			    window.id_edit=dataView.getItem(args.row).id;
				//alert(window.id_edit);
		 })*/
	
	 grid.onDblClick.subscribe(function (e, args){
		var item = args.item;
		//alert(dataView.getItem(args.row).MaThuoc);
		
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
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&q=2').done(function(a){
		data=$.parseJSON(a)

		dataView.setItems(data);
		dataView.setFilter(filter);		
 		dataView.endUpdate();
		dataView.collapseAllGroups();		
	})

	  	dataView.setGrouping([					   
					   {
						getter: "ID_NhomCLS",
						formatter: function (g) {
						
							 return "<strong>" + g['rows'][0]['TenNhom'] + "</strong>";			
							},	
					
						  aggregateCollapsed: false,     
						  collapsed: false,
						//  lazyTotalsCalculation: false,
						  displayTotalsRow: false,
						  },
				   ]
				   );
	
      dataView.onRowsChanged.subscribe(function (e, args) {
		  grid.invalidateRows(args.rows);
		  grid.render();
		});
		grid.onClick.subscribe(function (e, args){
			window.id_edit=dataView.getItem(args.row).id;
			window.TenLoaiKham_edit=dataView.getItem(args.row).TenLoaiKham;
			$(".tenxetnghiemdangchon").html(dataView.getItem(args.row).TenLoaiKham);
			//alert(window.id_edit);
			
		})
	grid.onDblClick.subscribe(function (e, args){
			    window.id_edit=dataView.getItem(args.row).id;
			if(window.id_edit>0){
				//alert(window.id_edit)
			$('#dialog-form').dialog('open');
            $("input:text").css("background-color","white");
            window.oper='edit';
			$('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xetnghiemts&id='+window.id_edit,datatype:'json'}).trigger('reloadGrid');
			$("#xetnghiem_xoa").addClass('ui-state-disabled');
			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikhambyid&id='+window.id_edit).done(function(a){
				data=$.parseJSON(a)
				//alert(data.GiaBaoChoBN);
				var TenLoaiKham = data.TenLoaiKham;
				var MaVietTat = data.MaVietTat;
				var MaVietTat_BN = data.MaVietTat_BN; 
				var ID_NhomCLS = data.ID_NhomCLS; 
				var MoTa = data.MoTa; 
				var GiaBaoChoBN = data.GiaBaoChoBN; 
				var GiaThueNgoaiThucHien = data.GiaThueNgoaiThucHien; 
				var ThoiGianTrungBinhThucHien =data.ThoiGianTrungBinhThucHien; 
				var ThoiGianCoKetQua = data.ThoiGianCoKetQua; 
				var GhiChu = data.GhiChu; 
				var LoiKhuyen = data.LoiKhuyen; 
				var Active = data.Active; 
				var IsHoTro = data.IsHoTro;
				var STT = data.STT; 
				var CLS = data.CLS; 
				var XetNghiem = data.XetNghiem; 
				var CoLuuKQInRieng = data.CoLuuKQInRieng; 
				var DieuTriTaiNha = data.DieuTriTaiNha; 
				var CoMauNhapKQ = data.CoMauNhapKQ; 
				var PathToTemplateFile = data.PathToTemplateFile; 
				var TenLoaiKham_EN = data.TenLoaiKham_EN; 
				var ReportName = data.ReportName; 
				var CoTheKeToa = data.CoTheKeToa; 
				var ThuocNhomXepHangCLS = data.ThuocNhomXepHangCLS; 
				var PhanTramDieuChinhGiaTaiNha = data.PhanTramDieuChinhGiaTaiNha; 
				var PhuThuThucHienTaiNha = data.PhuThuThucHienTaiNha; 
				var GiaTaiNhaDieuChinhTheoNhom = data.GiaTaiNhaDieuChinhTheoNhom; 
				var CoFormChucNangRieng = data.CoFormChucNangRieng; 
				var SoPhimLonTieuHao = data.SoPhimLonTieuHao; 
				var SoPhimNhoTieuHao = data.SoPhimNhoTieuHao; 
				var SoPhimNhuAnhTieuHao = data.SoPhimNhuAnhTieuHao; 
				var GiaBaoHiem = data.GiaBaoHiem; 
				var GiaPhuThuBenhVien = data.GiaPhuThuBenhVien; 
				var ID_Nhom_BHYT = data.ID_Nhom_BHYT; 
				var TenBaoHiem = data.TenBHYT; 
				var MauBaoHiem = data.Color; 
				var PhanTramThue= data.PhanTramThue;
				var IsThamMy= data.IsThamMy;  
				var STT_BHYT= data.STT_BHYT;  
				var MaSoTheoDVBHYT= data.MaSoTheoDVBHYT;  
				var ID_NhomLSP= data.ID_NhomLSP; 
				var  Khauhaot= data.Khauhaovtyt; 
				var  Khauhaodv= data.Khauhaodv;
				var  TruongHopBHYT= data.TruongHopBHYT;
				var  Loai= data.Loai;
				var  GiaKSKCT= data.GiaKSKCT;
				
			
			setval_new('#TruongHopBHYT',TruongHopBHYT); 
			$("#TenLoaiKham").val(TenLoaiKham);
            $("#MaVietTat").val(MaVietTat);
            $("#MaVietTat_BN").val(MaVietTat_BN);
           // $("#ID_NhomCLS").val(ID_NhomCLS);
			setval_new('#ID_NhomCLS',ID_NhomCLS); 
			setval_new('#ID_NhomLSP',ID_NhomLSP); 
            $("#MoTa").val(MoTa);
            $("#GiaBaoChoBN").val(GiaBaoChoBN);
            $("#GiaThueNgoaiThucHien").val(GiaThueNgoaiThucHien);
            $("#ThoiGianTrungBinhThucHien").val(ThoiGianTrungBinhThucHien);
            $("#ThoiGianCoKetQua").val(ThoiGianCoKetQua);
            $("#GhiChu").val(GhiChu);
            $("#LoiKhuyen").val(LoiKhuyen);
            $("#STT").val(STT);
            $("#PathToTemplateFile").val(PathToTemplateFile);
            $("#TenLoaiKham_EN").val(TenLoaiKham_EN);
            $("#ReportName").val(ReportName);
            $("#PhanTramDieuChinhGiaTaiNha").val(PhanTramDieuChinhGiaTaiNha);
            $("#PhuThuThucHienTaiNha").val(PhuThuThucHienTaiNha);
            $("#SoPhimLonTieuHao").val(SoPhimLonTieuHao);
            $("#SoPhimNhoTieuHao").val(SoPhimNhoTieuHao);
            $("#SoPhimNhuAnhTieuHao").val(SoPhimNhuAnhTieuHao);
            $("#GiaBaoHiem").val(GiaBaoHiem);
            $("#GiaPhuThuBenhVien").val(GiaPhuThuBenhVien);
           // $("#ID_Nhom_BHYT").val(ID_Nhom_BHYT);
			setval_new('#ID_Nhom_BHYT',ID_Nhom_BHYT); 
			$("#TenBaoHiem").val(TenBaoHiem);
			$("#MauBaoHiem").val(MauBaoHiem);
            $("#PhanTramThue").val(PhanTramThue);
           if(CLS=="1"){
                $("#CLS").prop('checked',true);
            }else{
                 $("#CLS").prop('checked',false);
            }
            if(XetNghiem=="1"){
                $("#XetNghiem").prop('checked',true);
                 $("#xetnghiem-ts").button('enable');
            }else{
                 $("#XetNghiem").prop('checked',false);
                  $("#xetnghiem-ts").button('disable');
            }
            if(CoLuuKQInRieng=="1"){
                $("#CoLuuKQInRieng").prop('checked',true);
            }else{
                 $("#CoLuuKQInRieng").prop('checked',false);
            }
            if(DieuTriTaiNha=="1"){
                $("#DieuTriTaiNha").prop('checked',true);
            }else{
                 $("#DieuTriTaiNha").prop('checked',false);
            }
            if(CoMauNhapKQ=="1"){
                $("#CoMauNhapKQ").prop('checked',true);
            }else{
                 $("#CoMauNhapKQ").prop('checked',false);
            }
            if(CoTheKeToa=="1"){
                $("#CoTheKeToa").prop('checked',true);
            }else{
                 $("#CoTheKeToa").prop('checked',false);
            }
            if(ThuocNhomXepHangCLS=="1"){
                $("#ThuocNhomXepHangCLS").prop('checked',true);
            }else{
                 $("#ThuocNhomXepHangCLS").prop('checked',false);
            }
            if(GiaTaiNhaDieuChinhTheoNhom=="1"){
                $("#GiaTaiNhaDieuChinhTheoNhom").prop('checked',true);
            }else{
                 $("#GiaTaiNhaDieuChinhTheoNhom").prop('checked',false);
            }
            if(CoFormChucNangRieng=="1"){
                $("#CoFormChucNangRieng").prop('checked',true);
            }else{
                 $("#CoFormChucNangRieng").prop('checked',false);
            }
           	
            if(Active=="1"){
                $("#Active").prop('checked',true);
            }else{
                 $("#Active").prop('checked',false);
            }
		//alert(IsHoTro);
			if(IsHoTro=="1"){
                $("#IsHoTro").prop('checked',true);
            }else{
                 $("#IsHoTro").prop('checked',false);
            }
			if(IsThamMy=="1"){
				$("#IsThamMy").prop('checked',true);
			}else{
				$("#IsThamMy").prop('checked',false);
			}
			$("#STTBaoHiem").val(STT_BHYT);
			$("#MaSoBH").val(MaSoTheoDVBHYT);
			$("#Khhaovtyt").val(Khauhaot);
			$("#Khhaodv").val(Khauhaodv);
			
			setval_new('#Loai',Loai); 
			$("#GiaKSKCT").val(GiaKSKCT);
			})
            
			
            
		}
		 })// end dbclick
   })
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
  resize_control()
  $(window).resize(function(e) {
    resize_control();
});
	
	
	
   // init_data();
	//load_select();
	//create_grid1();
  //  create_grid2();
	var lastsel; 		
	//create_grid();	
	//shortcut_key();		
jQuery(window).resize(function() {		 
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-180);
	}); 
        number_textbox_demical("#GiaBaoChoBN");
        number_textbox_demical("#GiaThueNgoaiThucHien");
        number_textbox_demical("#PhanTramDieuChinhGiaTaiNha");   
        number_textbox_demical("#PhuThuThucHienTaiNha");
        number_textbox_demical("#ThoiGianTrungBinhThucHien");
        number_textbox_demical("#SoPhimLonTieuHao");
        number_textbox_demical("#SoPhimNhoTieuHao");
        number_textbox_demical("#SoPhimNhuAnhTieuHao");
        number_textbox_demical("#ThoiGianCoKetQua");
        number_textbox_demical("#STT");
        number_textbox_demical("#GiaBaoHiem"); 
        number_textbox_demical("#GiaPhuThuBenhVien"); 
		number_textbox_n("#PhanTramThue");
		number_textbox_demical("#Khhaovtyt");
		number_textbox_demical("#Khhaodv");
		$("#PhanTramThue").focusout(function(e) {
            if($(this).val()>0){
				
			}else{
				$(this).val(0);	
			}
        });
	 $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(99)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(90)).toFixed(0),
            modal: true,
             open: function(event,ui){
               	$( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(99)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(90)).toFixed(0) );
                $("#XetNghiem").click(function () { 
                    var xn= $("#XetNghiem:checked").val();
                    if(xn==1){
						$("#xetnghiem-ts").button('enable');
					}else{
						$("#xetnghiem-ts").button('disable');
					}
                });
            },
            buttons: {
                   
            Save: function() {
			//	alert(oper);
                check_n();
				/*var nhom = $("#ID_NhomCLS_hidden").val();
				if(nhom==20){
					$("#CLS").prop("checked",false);
					$("#ThuocNhomXepHangCLS").prop("checked",false);
					$("#CLS").prop("CoTheKeToa",true);
				}*/
                if(window.oper=='add'){
					//alert();
					save_button();                    
                }else{
                	edit_button();
                }
            },
             
            Cancel: function() {
            $( this ).dialog( "close" );
                        }
                    }
            });
      
})
 function check_n(){
            window.kiemtra=true;
            phancach="";
            dataToSend ='{';
            key='';
            i=0;
            $('#rowed3').setGridParam({postData: null});
            $('#container').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,input[type=radio]:checked').each(function(){ 
                if(i>0){
                phancach=","; 
                        }
              dataToSend += phancach + '"'+ this.id + '":"' + $.trim(this.value) +'"' ;
              i++;
                });
               
              var myData = $('#rowed4').jqGrid('getRowData');
                myData= JSON.stringify(myData);        
                dataToSend +=',"pb":'+myData; 
               
                var myData2 = $('#rowed5').jqGrid('getRowData');
                myData2= JSON.stringify(myData2);        
                dataToSend +=',"ts":'+myData2+'}'; 
				//console.log(dataToSend);
               	dataToSend = jQuery.parseJSON(dataToSend);
                //alertObject(dataToSend);
        
          		var check_null = new Array();
                check_null["TenLoaiKham"]=$.trim(dataToSend["TenLoaiKham"]);
                check_null["GiaBaoChoBN"]=$.trim(dataToSend["GiaBaoChoBN"]);
                //check_null["GiaThueNgoaiThucHien"]=$.trim(dataToSend["GiaThueNgoaiThucHien"]);
               // check_null["ThoiGianTrungBinhThucHien"]=$.trim(dataToSend["ThoiGianTrungBinhThucHien"]);
               // check_null["ThoiGianCoKetQua"]=$.trim(dataToSend["ThoiGianCoKetQua"]);
                //check_null["PhuThuThucHienTaiNha"]=$.trim(dataToSend["PhuThuThucHienTaiNha"]);
               // check_null["GiaBaoHiem"]=$.trim(dataToSend["GiaBaoHiem"]);
                //check_null["GiaPhuThuBenhVien"]=$.trim(dataToSend["GiaPhuThuBenhVien"]);
				//check_null["TenBaoHiem"]=$.trim(dataToSend["TenBaoHiem"]);
				//check_null["MauBaoHiem"]=$.trim(dataToSend["MauBaoHiem"]);
				//check_null["ID_Nhom_BHYT"]=$.trim(dataToSend["ID_Nhom_BHYT"]);
				check_null["ID_NhomCLS"]=$.trim(dataToSend["ID_NhomCLS"]);
				check_null["PhanTramThue"]=$.trim(dataToSend["PhanTramThue"]);
				//check_null["ID_NhomLSP"]=$.trim(dataToSend["ID_NhomLSP"]);
                 for(var key in check_null){
                    if(check_null[key]==""){
						$("#"+key).css("background-color","#F4FA58");
						window.kiemtra=false;
                    }else{$("#"+key).css("background-color","white");  
						//window.kiemtra=true;               
                	}
            	}
};
function save_button(){
 // alertObject(dataToSend);
  // alert(kiemtra);
	if(kiemtra){
		 //alert();
		$("#dialog-form").dialog("close");
					
                  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=1',dataToSend)
                  .done(function( response) {
                                  temp = response.split(";");
                                  //alert(temp);
                    if(temp[0]==1){
                        var success=false;
                        var new_id="<?php get_text1("luu_khongthanhcong") ?>";
                                               
                    }else{  
                            dataView.beginUpdate();
							$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&q=2').done(function(a){
								data=$.parseJSON(a)			
								dataView.setItems(data);
								dataView.endUpdate();	
								dataView.refresh();										
								grid.invalidate();
							})                                                           
							tooltip_message("<?php get_text1("luu_thanhcong") ?>");     
							 
							// alert(window.id_return);
                    };
                        });
                }
             // alert(kiemtra);  
}
function edit_button(){
	
    if(kiemtra){
		 $("#dialog-form").dialog("close");
                  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=a&id='+window.id_edit+'&xetnghiemxoa='+window.xetnghiemxoa,dataToSend)
                  .done(function( response) {
					  //alertObject(dataToSend);
                    temp = response.split(";;");   
					
                    if(temp[1]==1){
                        var success=false;
                        var new_id="<?php get_text1("sua_khongthanhcong") ?>";
                                               
                    }else{  
                            dataView.beginUpdate();
							$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&q=2').done(function(a){
								data=$.parseJSON(a)			
								dataView.setItems(data);
								dataView.endUpdate();	
								dataView.refresh();										
								grid.invalidate();
							})                                                              
							 tooltip_message("<?php get_text1("sua_thanhcong") ?>");
							// $("#dialog-form").dialog("close");
                                                
                    };
                                     
                        });
                }
}
 function init_data(){
    $("#TenLoaiKham").focus();  
       jwerty.key('tab', false);
       jwerty.key('shift+tab', false);
           
       $('#container input[type=text],#container textarea,#container select,#container button,#container input[type=checkbox],#container input[type=radio]').bind("keydown", function(e) {                 
             if (jwerty.is("enter",e)||jwerty.is("tab",e)) {            
                /* FOCUS ELEMENT */
                var inputs = $(this).parents("#container").eq(0).find(":input[type=text],button,textarea,select,:input[type=checkbox],:input[type=radio]");
                var idx = inputs.index(this);
                if (idx == inputs.length - 1) { 
                    
                    if(inputs[0].nodeName!="SELECT"){;
                                        inputs[0].select();
                        
                    }else{
                        inputs[0].focus();
                    }
                } 
                else {      
                     //$(".ui-datepicker").hide();               
                    
                    inputs[idx+1].focus();
                    
                    if(inputs[idx+1].nodeName!="SELECT"){
                                            inputs[idx+1].select();
                                           
                    }
                                        
                                           
                }
                if(inputs[idx].lang=="end"){                     
                    if($("#rowed4").getDataIDs().length>0){ 
                        $("#rowed4").jqGrid("setSelection",$("#rowed4").getDataIDs()[0], true);                      
                        $("#prowed4 .ui-icon-pencil").click();           
                    }else{
                        $("#prowed4 .ui-icon-plus").click();
                                               //$("#rowed4_MaCc").select();
                      
                    }
                }
                    
                return false;
             }
             else if(jwerty.is("shift+tab",e)){
                var inputs = $(this).parents("#datatosend").eq(0).find(":input[type=text],:input[type=checkbox],textarea,select,checkbox");
                var idx = inputs.index(this);
                 if (idx >0) {                   
                    inputs[idx -1].focus(); //  handles submit buttons               
                } 
    }
        });
}
function resize_control(){
        var h=$(window).height();
         var w=$(window).width();
      $('#rowed3').css({'height':(h-40)+'px'});
      $('#rowed3').css({'width':(w-10)+'px'});
      //grid.resizeCanvas();
     }
function currencyFmatter (row, cell, value, columnDef, dataContext) {
		tam=(parseInt(value)).formatMoney(0, ',', '.')
        return tam;
    }
function create_nhombhyt(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
	   datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên nhóm'],
		colModel: [
			{name: 'nhom', index: 'nhom', hidden: false,width:"10%"},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [],
		height: 200,
		width: 300,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {

		  var rowData = $(this).getRowData(id);
		  //alert(rowData);
		//  $("#tenbacsi").val(rowData["hovaten"]);

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}

function create_xetnghiem(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
	   datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên xét nghiệm'],
		colModel: [
			{name: 'TenLoaiKham', index: 'TenLoaiKham', hidden: false,width:"10%"},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [],
		height: 200,
		width: 300,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {

		  var rowData = $(this).getRowData(id);
		  //alert(rowData);
		//  $("#tenbacsi").val(rowData["hovaten"]);

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}

function create_nhomcls(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
	   datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên nhóm'],
		colModel: [
			{name: 'nhom', index: 'nhom', hidden: false,width:"10%"},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [],
		height: 200,
		width: 300,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {

		  var rowData = $(this).getRowData(id);
		  //alert(rowData);
		 // $("#tenbacsi").val(rowData["hovaten"]);

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}

function create_nhomlsp(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
	   datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Tên nhóm'],
		colModel: [
			{name: 'nhom', index: 'nhom', hidden: false,width:"10%"},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [],
		height: 200,
		width: 300,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {
		  var rowData = $(this).getRowData(id);
		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}

function thongsoxetnghiem(){
	var mydata=[];
 myDelOptions = {
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
    colNames:[ 'ID','Tên thông số xét nghiệm','STT','Cận nam 1','Cận nam 2','Cận nam 3','Cận nam 4','Cận nữ 1','Cận nữ 2','Cận nữ 3','Cận nữ 4','Red','Blue','Yellow','Hệ số chuyển đổi','Giá trị bình thường 1','Giá trị bình thường 2','Có lưu kết quả in riêng','Có template','Đơn vị tính','Mô tả','Đơn giá','Ghi chú','','Sử dụng'],
    colModel:[
                {name:'ID_XetNghiem',index:'ID_XetNghiem',search:false, width:"100%", editable:false,align:'right',hidden:true},
                {name:'TenXetNghiem',index:'TenXetNghiem',editable:true,editrules: {required:true}, width:50, align:"left",edittype:"text",hidden:false},
                {name:'STT',index:'STT',editable:true,editrules: { number: true, required: true}, width:15, align:"center",edittype:"text",hidden:false},
                {name:'CanNam1',index:'CanNam1',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNam2',index:'CanNam2',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNam3',index:'CanNam3',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNam4',index:'CanNam4',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu1',index:'CanNu1',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu2',index:'CanNu2',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu3',index:'CanNu3',editable:true,width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'CanNu4',index:'CanNu4',editable:true, width:15, align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 3, prefix: "", defaultValue: '0'}},
                {name:'Red',index:'Red',editable:true,width:15, align:"center",edittype:"text",hidden:false},
                {name:'Blue',index:'Blue',editable:true, width:15, align:"center",edittype:"text",hidden:false},
                {name:'Yellow',index:'Yellow',editable:true, width:15, align:"center",edittype:"text",hidden:false},
                {name:'HeSoChuyenDoi',index:'HeSoChuyenDoi',editable:true, width:15, align:"center",edittype:"text",hidden:false},
                {name:'GiaTriBinhThuong1',index:'GiaTriBinhThuong1',editable:true, width:50, align:"center",edittype:"text",hidden:false},
                {name:'GiaTriBinhThuong2',index:'GiaTriBinhThuong2',editable:true, width:50, align:"center",edittype:"text",hidden:false},
                {name:'CoKQInRieng',index:'IsUsCoKQInRienging', width:15,align:'center',editable:true,editoptions: {value:"1:0"},formatter:"checkbox",edittype:"checkbox",hidden:false},
                {name:'CoTemplate',index:'CoTemplate', width:15,align:'center',editable:true,editoptions: {value:"1:0"},formatter:"checkbox",edittype:"checkbox",hidden:false},
               
                {name:'ID_DonViTinh',index:'ID_DonViTinh', width:15, editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:donvitinh}}, 
				 {name:'MoTa',index:'MoTa',editable:true, width:35, align:"center",edittype:"text",hidden:false},
                {name:'DonGia',index:'DonGia',editable:true,width:15,align:'right',edittype:"text",editrules: { number: true, required: false},hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name:'GhiChu',index:'GhiChu',editable:true, width:35, align:"center",edittype:"text",hidden:false},
				{name:'Luu',index:'Luu',editable:false, width:35, align:"center",edittype:"text",hidden:true},
				 {name:'Active',index:'Active', width:15,align:'center',editable:true,editoptions: {value:"1:0"},formatter:"checkbox",edittype:"checkbox",hidden:false,formatoptions:{defaultValue: '1'}},
                
                
    ],
	loadonce: true,
	scroll: true,  
	rowNum:1000,
	height:200,
	rowList:[],
	pager: '#prowed5',
	sortname: 'ID_NhanVien',
	viewrecords: true,
	sortorder: "asc",
	//  multiselect: true,
	ignoreCase:true,
	//  shrinkToFit:true,
	pgbuttons: false, // disable page control like next, back button
	pgtext: null,
	onSelectRow: function(id){				
		window.id_xetnghiem=id;
		$("#xetnghiem_xoa").removeClass('ui-state-disabled');
	},
    caption:"Thêm loại khám xét nghiệm"
        });
    jQuery("#rowed5").jqGrid('navGrid','#prowed5',{add: false,del:true,edit:false,search:false}, {}, {},myDelOptions);
    $("#rowed5").jqGrid('inlineNav', '#prowed5',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
         });
	$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Xóa", buttonicon: 'ui-icon-trash',id : 'xetnghiem_xoa',
            onClickButton: function() {
				//$('#rowed5').jqGrid('delRowData',window.id_xetnghiem);
				$("#del_rowed5").click();
				//$("#rowed5_ilcancel").click();
			  if(window.xetnghiemxoa==''){
				  window.xetnghiemxoa=window.id_xetnghiem;
			  }else{
				  window.xetnghiemxoa=window.xetnghiemxoa+','+window.id_xetnghiem;
			  }	
			  $("#xetnghiem_xoa").addClass('ui-state-disabled');
            },
            title: "Xóa",
            position: "first"
    });
        $("#rowed5").setGridWidth($(window).width()+1000);
        $("#rowed5").setGridHeight($(window).height()  - 330);
        
	$("#rowed5").jqGrid('bindKeys', {"onEnter":function( rowid ) {              
				$("#rowed5_iledit .ui-icon-pencil").click();                
		} } );
	$("#del_rowed5").hide();
}
function number_textbox_n(elem){
	$(elem).bind("focus",function(e) {
		$(elem).select();
	});
	$(elem).keydown(function(e) {
		if ( $.inArray(e.keyCode,[46,8,9,27,13]) !== -1 ||
		   (e.keyCode == 65 && e.ctrlKey === true) ||
		   (e.keyCode >= 35 && e.keyCode <= 39)) {
			 return;
		  }
		  else {
		   if (e.shiftKey || (e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105 )) {
			e.preventDefault();
		   }
		  }
	})
}
 
function create_truonghopBHYT(elem, datalocal) {
	var data = {
		"rows": [
			{ "id": "99", Loai: "Không có",Mau:'Không có màu' },
			{ "id": "1", Loai: "Nội trú và ngoại trú",Mau:'Màu xanh' },
			{ "id": "2", Loai: "Nội trú",Mau:'Màu vàng'},
			{ "id": "3", Loai: "Ngoại trú",Mau:'Màu đỏ'},
		]
	}
	datalocal = data;
	$(elem).jqGrid({
	   datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Trường hợp','Màu'],
		colModel: [
			//{name: 'idnv', index: 'idnv', hidden: true,width:1},
			{name: 'Loai', index: 'Loai', hidden: false,width:"10%"},
			{name: 'Mau', index: 'Mau', hidden: false,width:"10%"},
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [],
		height: 200,
		width: 300,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {

		  var rowData = $(this).getRowData(id);
		  //alert(rowData);
		  $("#tenbacsi").val(rowData["hovaten"]);

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});


}

function create_loaikham(elem, datalocal) {
	var data = {
		"rows": [
			
			{ "id": "1", Loai: "Thủ thuật" },
			{ "id": "2", Loai: "Phẫu thuật"},
			{ "id": "3", Loai: "khám"},
		]
	}
	datalocal = data;
	$(elem).jqGrid({
	   datastr: datalocal,
		datatype: "jsonstring",
		colNames: ['Trường hợp'],
		colModel: [
			//{name: 'idnv', index: 'idnv', hidden: true,width:1},
			{name: 'Loai', index: 'Loai', hidden: false,width:"10%"},
		
			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: 1,
		modal: true,
		rowNum: 100,
		rowList: [],
		height: 200,
		width: 300,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {

		  var rowData = $(this).getRowData(id);
		  //alert(rowData);
		  $("#tenbacsi").val(rowData["hovaten"]);

		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}
</script>