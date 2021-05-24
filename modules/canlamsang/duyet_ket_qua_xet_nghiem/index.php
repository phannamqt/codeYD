
<style type="text/css">
#rowed4 td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
 .top{
		border: solid;
	   border-radius: 4px;
	   width:645px;
	     height: 32px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     
	}
.mid{
		border: solid;
	   border-radius: 4px;
	   width:645px;
	     height: 60px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     
	}
.bot{
		border: solid;
	   border-radius: 4px;
	   width:645px;
	     height: 35px;
	     border-color: #DFD5D5;
	     border-width:1px;
	     
	}
.top2{
	border: solid;
	   border-radius: 4px;
	   width:1300;
	     height: 60px;
	     border-color: #DFD5D5;
	     border-width:1px;
}
#timkiemmabn{
width: 66px !important;	
}
#xuat_thongke{
width: 38px !important;
}

</style>
</head>

<body>
    
      		<div id="main" >
		         <div class="ui-layout-west left_col">
		    		<div class="top" >
		    			<div>
		    				
		    				<input  name="giofrom" value="<?php echo ("0:00") ?>" type="text" id="giofrom" style="width:30px"/> 
				    		<input type=text id="tungay" name="tungay" style="width: 62px!important;text-align:center" >
				    		<label>Đến</label>
				    		<input  name="gioto" value="<?php echo ("23:59") ?>" type="text" id="gioto" style="width:30px"/> 
				    		<input type=text id="denngay" name="denngay" style="width: 62px!important;text-align:center" >
				    		<button id="xem">Xem</button>
		    			
		    				<label>Mã BN </label>
		    				<input type=text id="mabenhnhan" name="mabenhnhan"style="width: 50px!important" >
		    				<button id="timkiemmabn">Tìm BN</button>
		    				<button id="xuat_thongke">T.kê</button>
                            
                            
                            <label>SampleID </label>
		    				<input type=text id="SampleID" name="SampleID"style="width: 40px!important" >
		    				<button id="timSampleID">S.ID</button>
		    			</div>
		    			<div id="rd3">
		    				 <table id="rowed3" ></table>
        		  			 <div id="prowed3"></div>
        		  			   
		    			</div>
		    		</div>
		        </div> 
		        <div class="ui-layout-center right_col">
		        	<div class="mid">
			    		<div style="padding:2px 0px;" class="thongtin_tongthe">
					 		<div class="patient_info"></div>        
					    </div>
					 </div>
					  <div class="bot">
			            	<label style="text-align:left;margin-left: 10px;">Kết quả:</label><select type="text" id="ketqua" name="ketqua"style="width: 80px!important;margin-top:5px" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Xét nghiệm trùng:</label><select type="text" id="xetnghiemtrung" name="ID_NuocxetnghiemtrungSanXuat"style="width: 80px!important;" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Loại XN:</label><select type="text" id="loaixn" name="loaixn"style="width: 80px!important;" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Thông Số SN:</label><select type="text" id="thongsoxn" name="thongsoxn"style="width: 80px!important;" ></select>
			          </div>
			          <div class="bot" style="height:30px">
			            	<input type="checkbox" style="margin-left: 300px;margin-top: 10px;"id="xemchitiet" onClick="xemchitiet()"   /> 
			            	<label style="font-size:15px">Duyệt</label>
			            	<button style="float:right;"id="hoantat">Hoàn tất</button>
			            	<button style="float:right;"id="xemin">Xem in</button>
			            		<span id="In_CoChuKy">
                    			<input type="checkbox" style="margin-left:5px" checked />
            				<label>In có chữ ký</label>
                   			 </span><br>	
			            </div>
			            <div>
			            	 <table id="rowed4" ></table>
        		  			 
			            </div>
			            <div>
			            	<table id="rowed5" ></table>
        		  			 
			            </div>
		        </div>
	    	</div>
      
      
      
   
</body>
</html>
<script type="text/javascript">
var kham=[];
var chuky=1;
window.loadpage=0;
$(document).ready(function() {	 
		window.id_luotkhamP=0;
	load_select();
	$("#main").css("height",$(window).height()-20+"px");	
	$("#main").css("width",$(window).width()-4+"px");		 
	$("#main").fadeIn(1000); 
	 $( "#tabs" ).tabs();
	 create_layout();
	 //resize_control();
	 $(window).resize(function() {
            temp = jQuery(window).height() - 50;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
	 $("#xem").button();
	 $("#timkiemmabn,#xuat_thongke,#timSampleID").button();
	 $("#thugon").button();
	 $("#hoantat,#xemin").button();
	 $.timeEntry.setDefaults({show24Hours: true});
	$('#giofrom, #gioto').timeEntry({timeSteps: [1, 1, 1]});	
	$('#giofrom, #gioto').timeEntry();
	ketqua_xetnghiem();
	create_grid();
	 create_grid2();
	 $('#SampleID').bind('keydown', function (e) {
			if (jwerty.is('enter',e)) {
				 $("#timSampleID").trigger("click");
			}
		});

	 $( "#tungay" ).datepicker({dateFormat: 'yy-mm-dd'});
	 $( "#denngay" ).datepicker({dateFormat: 'yy-mm-dd'});
	 $("#tungay").val(gio("current"));
	 $("#denngay").val(gio("current"));
	 number_textbox("#mabenhnhan");
	 tungay=$("#tungay").val()+ ' '+ $("#giofrom").val();
	 denngay=$("#denngay").val()+' '+ $("#gioto").val();

	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
	resize_control();
})
function resize_control(){
	
	$("#main").css("height",$(window).height()-20+"px");	
	$("#main").css("width",$(window).width());		 
	$("#main").fadeIn(1000); 
	$(".top").css("width",$(".ui-layout-west").width()-3+"px");
	$(".mid").css("width",$(".ui-layout-center").width()-3+"px");
	$(".bot").css("width",$(".ui-layout-center").width()-3+"px");
	$("#rowed3").setGridWidth($(".left_col").width() - 10);
	$("#rowed3").setGridHeight($(".ui-layout-west").height() - 140);
	
	$("#rowed4").setGridWidth($(".right_col").width() - 10);
	$("#rowed4").setGridHeight($(".right_col").height()/2 - 70);
	$("#rowed5").setGridWidth($(".right_col").width() - 10);
	$("#rowed5").setGridHeight($(".right_col").height()/2 - 200);
	$(".thongtin_chidinh").css("width",$(window).width()-$(".thongtin_tongthe").width()-10+"px");
}
$("#xem").click(function(){
	window.tungay=$("#tungay").val()+ ' '+ $("#giofrom").val();
	window.denngay=$("#denngay").val()+ ' '+ $("#gioto").val();

	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
	
});
$("#timkiemmabn").click(function(){
	window.mabenhnhan=$("#mabenhnhan").val();
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua_mabenhnhan&mabenhnhan="+mabenhnhan}).trigger('reloadGrid');
	
	
	
});
$("#timSampleID").click(function(){
	
	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua_sampleid&SampleID="+$("#SampleID").val()}).trigger('reloadGrid');
	
	
	
});

$("#xuat_thongke").click(function(){
	var tungay=$("#tungay").val()+ ' '+ $("#giofrom").val();
	 var denngay=$("#denngay").val()+ ' '+ $("#gioto").val();
	window.open("pages.php?module=report&view=canlamsang&action=xuat_excel_ThongKeXN&type=excel&fromdate="+ tungay+"&todate="+denngay);
});
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
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay,
		datatype: "local",	
		colNames: ['','id','Mã BN', 'Họ lót', 'Tên','Giới','Ngày vào khám','Nhập KQ','Đã duyệt','Ngày hẹn trả KQ','N.trú','S.ID'],
            colModel: [
            	{name: 'ID_LuotKham', index: 'ID_LuotKham', hidden: true,width:0},
           		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', hidden: true,width:0},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', hidden: false,width:30},
                {name: 'HoLotBenhNhan', index: 'HoLotBenhNhan',width:70,align:'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', hidden: false,width:35},
                {name: 'GioiTinh', index: 'GioiTinh', hidden: false,width:20},
                {name: 'ThoiGianVaoKham', index: 'ThoiGianVaoKham', hidden: false,width:55},
               
                {name: 'TinhTrangKQ', index: 'TinhTrangKQ', hidden: false,width:40},
                {name: 'TinhTrangDuyet', index: 'TinhTrangDuyet', hidden: false,width:40},
                 {name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', hidden: false,width:60},
                {name: 'noitru', index: 'noitru',align:"center", hidden: false,width:16},
                {name: 'SampleID', index: 'SampleID',align:"center", hidden: false,width:22},
            ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:540,
		width: 640,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		
			var rowData = jQuery(this).getRowData(id); 
			window.id_benhnhan = rowData['ID_BenhNhan']; //alert(ID_DonThuocMau);
			window.id_luotkham= id;
				window.id_luotkhamP= id;
			//alert(id_luotkham);
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid');
           $.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
				  $( ".patient_info" ).html( data );
				  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
			});      
            $("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger("reloadGrid");	   
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},

		loadComplete: function(data) {	
$('#rowed3').jqGrid('setSelection', window.id_luotkhamP, true);

		//ids = $('#rowed3').jqGrid('getDataIDs');
  	//	$('#rowed3').jqGrid('setSelection', ids[0], true);

			var allRowsInGrid = $('#rowed3').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    tinhtrang = allRowsInGrid[i].TinhTrangKQ;
					duyet= allRowsInGrid[i].TinhTrangDuyet;
				    luotkham = allRowsInGrid[i].ID_LuotKham;
				    ngaygio= allRowsInGrid[i].NgayGioHenTraKQ;
				    ngaygio2=(convert_to_datejs(ngaygio)-convert_to_datejs("current"))/60000;
				    //alert((convert_to_datejs(ngaygio)-convert_to_datejs("current"))/60000);
				   if(tinhtrang=="Chưa nhập"){
				    	$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'#58FA58'});
				    	if( ngaygio<=""){
				    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
				    	}
				    	else{
						    	if( ngaygio2<="30"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#FE2E2E'});
						    	}
						    	else if(ngaygio2<="60"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'Yellow'});
						    	}
						    	else{
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
						    	}
						    }
				    }
				    else if(tinhtrang=="Đang nhập"){
				    	$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'Yellow'});
				    	if( ngaygio<=""){
				    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
				    	}
				    	else{
						    	if( ngaygio2<="30"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#FE2E2E'});
						    	}
						    	else if(ngaygio2<="60"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'Yellow'});
						    	}
						    	else{
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
						    	}
						    }
				    }else if(tinhtrang=="Nhập xong"){
				    	//$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'#FE2E2E'});
						if(duyet=="Đã duyệt"){
							$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'white'});
						}
						else{
							$('#rowed3').jqGrid('setCell',luotkham,"TinhTrangKQ","",{background:'#FE2E2E'});
						}
				    	if( ngaygio<=""){
				    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
				    	}
				    	else{
						    	if( ngaygio2<="30"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#FE2E2E'});
						    	}
						    	else if(ngaygio2<="60"){
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'Yellow'});
						    	}
						    	else{
						    			$('#rowed3').jqGrid('setCell',luotkham,"NgayGioHenTraKQ","",{background:'#58FA58'});
						    	}
						    }
				    }
				   
			}
		},	  
		caption: "Danh sách loại xét nghiệm cần nhập kết quả"
	});	
 $("#rowed3").jqGrid('bindKeys', {} );
 $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
 jQuery("#rowed3").jqGrid('navGrid','#prowed3',{add: false,del:false,edit:false,search:false,refresh:false}, {}, {},{});
 $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<div >Giờ hẹn trả kết quả:<div class='hinhvuong quathoigian_max'></div><label class='diengiai'>30' nữa trả kết quả</label><div class='hinhvuong quathoigian_min'></div><label class='diengiai'>60' nữa trả kết quả</label><div class='hinhvuong sansanggoi'></div><label class='diengiai'>Chưa đến giờ trả kết quả</label></div>",})

};
function ketqua_xetnghiem() {
		  $("#rowed4").jqGrid({
            url:"",
            datatype: "local",
            colNames: ['','id','Ngày chỉ định','Loại XN','Thông số', 'Kết quả', 'Giá Trị BT', 'Người nhập','Giờ nhập', 'Người duyệt','Đã duyệt', 'Ghi chú','','','In'],
            colModel: [
            	{name:'ID_XetNghiem',index:'ID_XetNghiem',hidden:true},
            	{name:'ID_Kham',index:'ID_Kham',hidden:true},
                {name: 'NgayGioTao', index: 'NgayGioTao',  search: false, width: "100%", editable: false, align: 'right', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham',  search: false, width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'TenXetNghiem', index: 'TenXetNghiem',  search: false, width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KetQua', index: 'KetQua', width: "80%",  search: false, align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1',  search: false, width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiThucHien',index:'NguoiThucHien',  search: false, width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'NgayGioThucHien', index: 'NgayGioThucHien',  search: false, width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiDuyet',index:'NguoiDuyet',  search: false, width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name:'DaDuyet',index:'DaDuyet',  search: false, width:"80%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},	
                {name: 'GhiChu', index: 'GhiChu',  search: false, width: "80%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'ID_KetQuaXN', index: 'ID_KetQuaXN',  search: false, width: "60%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
                {name: 'Color', index: 'Color',  search: false, width: "100%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
				//{name:'ChonIn',index:'ChonIn', width:"80%", editable:true,stype: 'text', editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false}},
				{name:'ChonIn',index:'ChonIn',search:true, width:"40%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},	
            ],
           
		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		cmTemplate: { sortable: false },
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 10000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:250,
		width: 785,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
		
		sortorder: "asc",
        grouping: true,
        groupingView: {groupField: ['NgayGioTao', 'TenLoaiKham'],
                groupOrder: ['desc', 'des', 'asc'],
                 //groupSummary : [true,true],
                showSummaryOnHide: false,
                groupColumnShow: [false, false],
               	groupText: ['<b style="color:red"> Ngày chỉ định: {0}</b><input type="checkbox" style="float:right;margin-top: -15px;margin-right:8px" checked onclick="check_list_date(this)" class="check_list_date">', '<b style="color:blue">Loại xét nghiệm: {0}</b> <input type="checkbox" style="float:right;margin-top: -15px;margin-right:8px" checked onclick="check_list(this)" class="check_list">'],
                groupCollapse: false,
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {              
					
                
            },
            loadComplete: function(data,rowid) {	
				setTimeout(function(){
					if(window.loadpage==0){
						window.loadpage=1;
						$("#gs_ChonIn").hide();
						$("#gs_ChonIn").after('<input type="checkbox" onclick="check_in_all()" id="check_in_all" checked style=" width:15px">');
					}
				},200);
				// $("#rowed4").jqGrid('setGridParam',{loadonce: true}).trigger('reloadGrid');
				 //duyet phieu chi
				// jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
			 	//$('body').unbind('click')
				ids=$('#rowed4').jqGrid('getDataIDs'); 

				 for(var i=0;i<=ids.length-1;i++){
				 	$('#rowed4 #'+ids[i]+' td[aria-describedby="rowed4_DaDuyet"] input').attr('onclick'," return duyet_one("+ids[i]+")");
					$('#rowed4 #'+ids[i]+' td[aria-describedby="rowed4_DaDuyet"] input').attr('id',"duyet"+ids[i]);
					 var rowData = jQuery('#rowed4').getRowData(ids[i]);
					if(rowData['Color']=="Red"){
						$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{color:'red'});
						$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{'font-weight':'bold'});
				    }else if(rowData['Color']=="Blue"){
				    	$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{color:'blue'});
				    	$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{'font-weight':'bold'});
				    }else if(rowData['Color']=="Orange"){
				    	$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{color:'orange'});
				    	$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{'font-weight':'bold'});
				    }else{
				    	$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{color:'black'});
				    	$('#rowed4').jqGrid('setCell',ids[i],"KetQua","",{'font-weight':'bold'});
				    }
					//$("#duyet"+ids[i]).bind('click')
				 
				/*  $('#rowed4 #'+ids[i]+' td[aria-describedby="rowed4_DaDuyet"] input').bind('click',function(e){
				  
				   window.id_tam=$(e.target).closest('tr.jqgrow').attr('id');
				   nguoiduyet=$("#rowed4").jqGrid ('getCell', id_tam, 'NguoiDuyet');
				   //alert(nguoiduyet);
				   if(nguoiduyet==<?=$_SESSION['user']['id_user']?> || nguoiduyet==""){
						   if($(e.target).is(':checked')){
								   	dataToSend = '{"rows":[';
									phancach1 = "";
									var daduyetketqua=1;
								  	phancach = ",";
								    dataToSend +=phancach1+'{"daduyetketqua":"' + daduyetketqua + '"';			   
								    dataToSend += phancach + '"id_kqxn":"' + id_tam + '"';
								    
								    dataToSend += phancach + '"nguoiduyet":"' + <?=$_SESSION['user']['id_user']?> + '"}';
								    dataToSend += ']}';
				          
				            		dataToSend = jQuery.parseJSON(dataToSend);
				            		alertObject(dataToSend);
									
								    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
												 .done(function( gridData ) {
												 						//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
							                                            $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
							                                             //tooltip_message("Đã hoàn tất");
							                                            })
							                                            .fail(function() {
							                                            alert( "error" );
							                                            });
							
						   }
						   else{
									dataToSend = '{"rows":[';
									phancach1 = "";
									var daduyetketqua=0;
								  	phancach = ",";
								    dataToSend +=phancach1+'{"daduyetketqua":"' + daduyetketqua + '"';			   
								    dataToSend += phancach + '"id_kqxn":"' + id_tam + '"';
								    
								    dataToSend += phancach + '"nguoiduyet":"' + "0" + '"}';
								    dataToSend += ']}';
				          
				            		dataToSend = jQuery.parseJSON(dataToSend);
				            		alertObject(dataToSend);
									
								    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
									.done(function( gridData ) {
										$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
										//tooltip_message("Đã hoàn tất");
									})
									.fail(function() {
										alert( "error" );
									});
							}
						  
						}else{
								return false
						}
				   
				   
				   });*/
				   
				   
				 }	 

				/* var allRowsInGrid = $('#rowed4').jqGrid('getRowData');
				 for (i = 0; i < allRowsInGrid.length; i++) {
				    window.pid = allRowsInGrid[i].DaDuyetKetQua;
				    pid2 = allRowsInGrid[i].ID_KetQuaXN;
				    if(pid=="1"){
				    	jQuery("#rowed4").jqGrid('setSelection',pid2);
				    	//alert(pid2);
				    }
				    }

				    for (j = 0; j < allRowsInGrid.length; j++) {
				     pid2 = allRowsInGrid[j].Color;

				   	pid3 = allRowsInGrid[j].ID_KetQuaXN;
				    if(pid2=="Red"){
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'red'});
				    }else if(pid2=="Blue"){
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'blue'});
				    }else if(pid2=="Orange"){
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'orange'});
				    }else{
				    	$('#rowed4').jqGrid('setCell',pid3,"KetQua","",{color:'black'});
				    }
				  }*/
				
				},	  
            onSelectRow: function(id){		
				var rowData2 = jQuery(this).getRowData(id); 
				window.id_kham = rowData2['ID_Kham']; 
				//alert(id_kham);
				},
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            },
            caption: "Danh sách kết quả xét nghiệm"
        });
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
};



	$("#In_CoChuKy input:checkbox").click(function(){
		if($('#In_CoChuKy input:checkbox').prop('checked')==true)	
		{
			chuky=1;
		}else{chuky=0;}	
	})

$("#xemin").click( function() {
		if($.cookie("os_name")=='Linux'){
			//alert(123);
        var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
        window.idluotkham = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_LuotKham');
        var ID_BenhNhan = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_BenhNhan');

		var ID_xetnghiem="";
		 $('#rowed4 tr td[aria-describedby="rowed4_ChonIn"] input[type="checkbox"]').each(function() {
				var row = $(this).closest('tr.jqgrow');
				var tam = row.attr('id');
				var tam2=$("#rowed4").jqGrid ('getCell', tam, 'ID_XetNghiem');
				if($(this).is( ":checked" )) {
				  ID_xetnghiem+=tam+",";
				}
		});
		// alert(ID_xetnghiem);
		 $.cookie("in_status", "print_preview"); 
		//	dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=xetnghiem_ubuntu&header=top&id_benhnhan="+ID_BenhNhan+"&id_luotkham="+  window.idluotkham+"&type=report&id_form=10&ID_xetnghiem="+ID_xetnghiem+'&inrutgon='+0+'&chuky='+chuky+'&sid='+window.SampleID,'XetNghiem');
		//	$(".frame_u78787878975f").css("width","793px");


		var mapForm = document.createElement("form");
		mapForm.target = "Map";
		mapForm.method = "POST"; // or "post" if appropriate
		mapForm.action = 'pages.php?module=report&view=<?=$modules?>&action=xetnghiem_ubuntu&header=top&id_benhnhan='+ID_BenhNhan+'&id_luotkham='+  window.idluotkham+'&type=report&id_form=10&inrutgon=0&chuky='+chuky+'&sid='+window.SampleID+"&report_name=XetNghiem";

		var mapInput = document.createElement("input");
		mapInput.type = "text";
		mapInput.name = "data";
		mapInput.value = ID_xetnghiem;
		mapForm.appendChild(mapInput);

		document.body.appendChild(mapForm);

		map = window.open("", "Map");

		if (map) {
			mapForm.submit();
		} else {
			alert('Vui lòng cấu hình firefox cho phép mở popup.');
		}

    }else{
	    var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
        var ID_LuotKham = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_LuotKham');
        var ID_BenhNhan = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_BenhNhan');

		var ID_xetnghiem="";
		 $('#rowed4 tr td[aria-describedby="rowed4_ChonIn"] input[type="checkbox"]').each(function() {
				var row = $(this).closest('tr.jqgrow');
				var tam = row.attr('id');
				var tam2=$("#rowed4").jqGrid ('getCell', tam, 'ID_XetNghiem');
				 if($(this).is( ":checked" )) {
				
				  ID_xetnghiem+=tam+";";					 
				 }
			
		});
		// alert(ID_xetnghiem);

		 $.cookie("in_status", "print_preview"); 
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=xetnghiem&header=top&id_benhnhan="+ID_BenhNhan+"&id_luotkham="+ID_LuotKham+"&type=report&id_form=10&ID_xetnghiem="+ID_xetnghiem+'&inrutgon='+0+'&chuky='+chuky,'XetNghiem');
			$(".frame_u78787878975f").css("width","793px");

	}


});



$("#hoantat").click( function() {

	//alert(window.id_luotkham);
		//ids = $('#rowed3').jqGrid('getDataIDs');
  		
		var ids = jQuery("#rowed4").jqGrid('getDataIDs');
		dataToSend = '{"rows":[';
		phancach1 = "";
       for(var i=0;i<=ids.length-1;i++){
       		id_kham=$("#rowed4").jqGrid ('getCell', ids[i], 'ID_Kham');
       		phancach = ",";
       		dataToSend +=phancach1+'{"id_kham":"' + id_kham + '"';			   
			dataToSend += phancach + '"trangthai":"' + "Xong"+ '"}';
			phancach1=",";
     	}
     	dataToSend +=']}'; 
	//alert(dataToSend);
	dataToSend = jQuery.parseJSON(dataToSend);
	alertObject(dataToSend);
	 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=trangthai_hoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {
								 						//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
			                                            //$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
			                                             tooltip_message("Đã hoàn tất");

 		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
        var noitru = jQuery('#rowed3').jqGrid('getCell', selr, 'noitru');
      
					//alert(noitru);
							if (noitru=='')
							{
								$("#xem").click();
							}

			                                             
			                                            })
			                                            .fail(function() {
			                                            alert( "error" );
			                                            });

 
});

function create_grid2(){	
	 $("#rowed5").jqGrid({
		url:""	,
		datatype: "local",	
		colNames: ['Tên xét nghiệm', 'Ngày chỉ định', 'Ghi chú'],
            colModel: [
                {name: 'TenLoaiKham', index: 'TenLoaiKham', hidden: false},
                {name: 'NgayGioTao', index: 'NgayGioTao',width:60,align:'center', hidden: false},
                {name: 'GhiChu', index: 'GhiChu', hidden: false},
                
            ],
	//

		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:115,
		width: 640,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		
		jQuery('#rowed5').jqGrid('editRow', id, true);   
		},
		
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},

		loadComplete: function(data) {	

		},	  
		caption: "Danh sách loại xét nghiệm cần nhập kết quả"
	});	

};
function create_grid3() {
		  $("#rowed6").jqGrid({
            url:"",
            datatype: "local",
            colNames: ['Ngày chỉ định','Loại XN','Mã bệnh nhân', 'Họ(tên lót)', 'Tên', 'Ngày chỉ định','Thông số xét', 'Kết quả', 'Giá trị bình thường','Người nhập KQ','Giờ nhập KQ'],
            colModel: [
                {name: 'NgayGioTao', index: 'NgayGioTao',  search: false, width: "100%", editable: false, align: 'right', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'TenXetNghiem', index: 'TenXetNghiem', width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KetQua', index: 'KetQua', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiThucHien',index:'NguoiThucHien', width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'NgayGioThucHien', index: 'NgayGioThucHien', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiDuyet',index:'NguoiDuyet', width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'GhiChu', index: 'GhiChu', width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
            ],
           
		loadonce: true,
		scroll: 1,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'nickname',
		height:250,
		width: 800,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		multiselect:true,
		
		sortorder: "asc",
           grouping: true,
            groupingView: {groupField: ['NgayGioTao', 'TenLoaiKham'],
                groupOrder: ['desc', 'des'],
                 //groupSummary : [true,true],
                showSummaryOnHide: false,
                groupColumnShow: [false, false],
               	groupText: ['<b style="color:red"> Ngày chỉ định: {0}</b>', '<b style="color:blue">Loại xét nghiệm: {0}</b>'],
                groupCollapse: false,
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {              
					
                
            },
            loadComplete: function(data,rowid) {	
				
				},	  
            onSelectRow: function(id){		
				rowData = jQuery(this).getRowData(id);
                   
                   //alert(rowData);
				
				},
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
            },
            caption: "Danh sách kết quả xét nghiệm"
        });
}
 function create_layout(){
	//alert("")
	$('#main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"52%"
		,	resizerDblClickToggle: false 
		,	onresize_end:function () { 				 
				 resize_control();
			}
		,	onopen_end:function () { 
				 
			}
		,	onclose_end:function () { 				 
			 	 
			}
						
		}			
	    ,	center: {
			resizable: true
		,	size:					"48%"
		,	resizerDblClickToggle: false		 
				
		 
		,	onresize_end:function () { 				 
				  resize_control();
			}
		,	onopen_end:function () {				 
				 	
			}
		,	onclose_end:function () { 				 
	  			 	 
			}		
		}  

		 
	});		 
}
function load_select(){
	window.nation = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục quốc tịch');}}).responseText;	
}
function xemchitiet(){
	ids=$('#rowed4').jqGrid('getDataIDs'); 
  	if($("#xemchitiet").is(':checked')==true){
		$("#hoantat").click();
		for(var i=0;i<=ids.length-1;i++){
			if($('#rowed4 #duyet'+ids[i]).is(':checked')==false){
				$('#rowed4 #duyet'+ids[i]).click();
			}
		}
      }else{
      	 for(var i=0;i<=ids.length-1;i++){
       		nguoiduyet=$("#rowed4").jqGrid ('getCell', ids[i], 'NguoiDuyet');

       		if(nguoiduyet==<?=$_SESSION['user']['id_user']?>){
       			//alert($('#rowed4 #'+ids[i] +' input').is(':checked'));
				if($('#rowed4 #duyet'+ids[i]).is(':checked')==true){
					$('#rowed4 #duyet'+ids[i]).click();
					//alert();
					}
			}
     	}
      }
}
$( "#mabenhnhan" ).keyup(function(e){
        //alert(e.keyCode);
            if (e.keyCode === 13) {
                $( "#timkiemmabn" ).click();
                return false;
            }
    });
function check_list(obj){
	//console.log(obj);
	$('#'+$(obj).closest('tr.jqgroup').next('.jqgrow').attr('id') +' td[aria-describedby="rowed4_ChonIn"] input').click();
	check_list_next($(obj).closest('tr.jqgroup').next('.jqgrow').attr('id'));
}

function check_list_next(id){
	if(typeof($('#'+id).next('.jqgrow').attr('id'))!='undefined'){
		//console.log($('#'+$('#'+id).next('.jqgrow').attr('id') +' td[aria-describedby="rowed4_ChonIn"]').html());
		$('#'+$('#'+id).next('.jqgrow').attr('id') +' td[aria-describedby="rowed4_ChonIn"] input').click();
		check_list_next($('#'+id).next('.jqgrow').attr('id'))
	}	
}
function check_list_date(obj){
	$('#'+$(obj).closest('tr.jqgroup').next('tr.rowed4ghead_1').attr('id')+' input.check_list').click();
	check_list_next_date($(obj).closest('tr.jqgroup').next('tr.rowed4ghead_1').attr('id'));
}
function check_list_next_date(id){
	//console.log(id);
	//console.log($('#'+id).next('tr.rowed4ghead_1').attr('id'));
	if(typeof($('#'+id).next('tr.rowed4ghead_1').attr('id'))!='undefined'){
		//console.log($('#'+$('#'+id).next('.jqgrow').attr('id') +' td[aria-describedby="rowed4_ChonIn"]').html());
		$('#'+$('#'+id).next('tr.rowed4ghead_1').attr('id')+' input.check_list').click();
		check_list_next_date($('#'+id).next('tr.rowed4ghead_1').attr('id'))
	}else if(typeof($('#'+id).next('tr.jqgrow').attr('id'))!='undefined'){
		check_list_next_date($('#'+id).next('tr.jqgrow').attr('id'))
	}
}

function check_in_all(){// 
	$(".check_list_date").click();
	/*$("#rowed4").find(" td[aria-describedby='rowed4_ChonIn'] input").each(function(e) {
        $(this).click();
    });*/
}

function duyet_one(tam){
	
	window.id_tam=tam;
	var nguoiduyet=$("#rowed4").jqGrid ('getCell', tam, 'NguoiDuyet');
	//alert(nguoiduyet);
	if(nguoiduyet==<?=$_SESSION['user']['id_user']?> || nguoiduyet==""){
		
	   if($("#duyet"+tam).is(':checked')){
			dataToSend = '{"rows":[';
			phancach1 = "";
			var daduyetketqua=1;
			phancach = ",";
			dataToSend +=phancach1+'{"daduyetketqua":"' + daduyetketqua + '"';			   
			dataToSend += phancach + '"id_kqxn":"' + tam + '"';
			
			dataToSend += phancach + '"nguoiduyet":"' + <?=$_SESSION['user']['id_user']?> + '"}';
			dataToSend += ']}';
	
			dataToSend = jQuery.parseJSON(dataToSend);
			alertObject(dataToSend);
			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {
					$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
					 //tooltip_message("Đã hoàn tất");
					})
				.fail(function() {
					alert( "error" );
				});
	   }else{
				dataToSend = '{"rows":[';
				phancach1 = "";
				var daduyetketqua=0;
				phancach = ",";
				dataToSend +=phancach1+'{"daduyetketqua":"' + daduyetketqua + '"';			   
				dataToSend += phancach + '"id_kqxn":"' + id_tam + '"';
				
				dataToSend += phancach + '"nguoiduyet":"' + "0" + '"}';
				dataToSend += ']}';
	  
				dataToSend = jQuery.parseJSON(dataToSend);
				alertObject(dataToSend);
				
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {
					$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+id_luotkham+"&idbenhnhan="+id_benhnhan}).trigger('reloadGrid'); 	
					//tooltip_message("Đã hoàn tất");
				})
				.fail(function() {
					alert( "error" );
				});
		}
	  
	}else{
			return false
	}
}
</script>