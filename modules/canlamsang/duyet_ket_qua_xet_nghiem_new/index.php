
<style type="text/css">
#gbox_rowed4_ghichu_new,#gbox_rowed3_ghichu_new{
       display: inline-block !important;
    }
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
#rowed3_iledit,#rowed3_ilcancel{
	display:none;
}
</style>

</head>

<body>
<div id='dialog_ghichu_new' style="display:none;">
<table id='rowed3_ghichu_new'></table><div id='prowed3_ghichu_new'></div>
<table id='rowed4_ghichu_new'></table><div id='prowed4_ghichu_new'></div>
</div>

<div id="dialog_finger" style="display:none;">
	<span id="text_finger"></span>
</div>
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
		    				<button id="xuat_thongke">T.kê Mẫu XN.1</button>
                            
                            
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
			            	<label style="text-align:left;margin-left: 10px;">Kết quả:</label><select type="text" id="ketqua" name="ketqua"style="width: 40px!important;margin-top:5px" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Xét nghiệm trùng:</label><select type="text" id="xetnghiemtrung" name="ID_NuocxetnghiemtrungSanXuat"style="width: 40px!important;" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Loại XN:</label><select type="text" id="loaixn" name="loaixn"style="width: 40px!important;" ></select>
			            	<label style="text-align:left;margin-left: 10px;">Thông Số SN:</label><select type="text" id="thongsoxn" name="thongsoxn"style="width: 40px!important;" ></select>
			          </div>
			          <div class="bot" style="height:30px">
                      SampleID<input type="text" style="margin-left: 10px;text-align:center;color:red;font-size:18px!important;width: 60px!important;" id="ID_Sample" disabled="disabled" name="ID_Sample" ></input>
  
                      
			            	<input type="checkbox" style="margin-left: 150px;margin-top: 10px;"id="xemchitiet" onClick="xemchitiet()"   /> 
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
	
	 window.id_benhnhan_ghichu="";
	 window.id_luotkham_ghichu="";

	$("#dialog_finger").dialog({
		autoOpen:false,
        height: 200,
        width: 600,
        modal: true,
        title: '',
		draggable: true,
		resizable: false,
        stack: false,
		closeOnEscape:true,
		position: { my: "center", at: "center", of: "#gbox_rowed4" },
		buttons: {
			"Ok": function() {
			  $( this ).dialog( "close" );
			},
		},	
        close: function(event, ui) {
			
        },

    });

var kham=[];
var chuky=1;
window.loadpage=0;
$(document).ready(function() {	 

$(document).keyup(function(e){
    if(e.which == 27){
        $("#dialog_finger").dialog("close");;
    }
});
	$( "#dialog_ghichu_new" ).dialog({
		autoOpen: false,
		height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
		width: ($(window).width()/100 * parseFloat(95)).toFixed(0),
		modal: true,
		open: function(event,ui){}, 
	});	
    create_ghichu_luotkham();
	create_ghichu_benhnhan();
	
	
openform_shortcutkey();
		window.id_luotkhamP=0;
		window.idluotkham=0;
		window.SampleID=0;
		window.isScan=0;
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
	jwerty.key('tab', false);
	create_grid();
	ketqua_xetnghiem();
	create_grid2();
	 $('#SampleID').bind('keyup', function (e) {
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








 	var barcode="";
    $(document).keydown(function(e) {
		
        var code = (e.keyCode ? e.keyCode : e.which);
        var dem=0;

        if(code==13 )// Enter key hit
        {
        	
        }
        else if(code==9)// Tab key hit
        {
            dem=1;
          
           if(barcode!="" )
           {
          
           	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua_sampleid&SampleID="+barcode}).trigger('reloadGrid');
         
           	 	
        
           }
           
            if (dem ==1)
            {
            	dem=0;
            	barcode="";
            }
        }
        else
        {
            barcode=barcode+String.fromCharCode(code);
        }

    });


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
	
	$('#SampleID').val("");    
	
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
		colNames: ['','id','Mã BN', 'Họ lót', 'Tên','Hẹn gần','Hẹn xa','Giới','Ngày vào','XN','KQ','Duyệt','N.trú','SID','In SID','','','Số PK','Gọi Loa','Tùy biến','Chuyển BN','TenBTC','ID_MapXepHang'],
            colModel: [
            	{name: 'ID_LuotKham', index: 'ID_LuotKham', hidden: true,width:0},
           		{name: 'ID_BenhNhan', index: 'ID_BenhNhan', hidden: true,width:0},
                {name: 'MaBenhNhan', index: 'MaBenhNhan', hidden: false,width:22},
                {name: 'HoLotBenhNhan', index: 'HoLotBenhNhan',width:60,align:'left', hidden: false},
                {name: 'TenBenhNhan', index: 'TenBenhNhan', hidden: false,width:20},
                {name: 'NgayGioHenGan',editable: true, index: 'NgayGioHenGan',width:40
					,editoptions:{
					dataEvents: [{ type: 'keydown ', fn: function(e) {
					if(jwerty.is("enter",e)){
						$("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+'_NgayGioHenXa').focus();
						}}}]
					,dataInit: function(element) {
	                    $(element).datetimeEntry({show24Hours: true, spinnerImage: ''});
	                		}, defaultValue: "00:00"
						},
				},
                {name: 'NgayGioHenXa',editable: true, index: 'NgayGioHenXa',width:40
				,editoptions:{
					dataEvents: [{ type: 'keydown ', fn: function(e) {
					if(jwerty.is("enter",e)){
						var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
						var NgayGioHenXa=($("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+'_NgayGioHenXa').val());
						var NgayGioHenGan=($("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+'_NgayGioHenGan').val());
						$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&NgayGioHenGan='+NgayGioHenGan+'&NgayGioHenXa='+NgayGioHenXa+'&SID='+id_row+'&hienmaloi=3&oper=updateGioHenGan');
							 dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sampleIDNew&type=report&id_form=794&xemtruocin=0&idsample="+id_row,'nhan_sampleID');
			 				$(".frame_u787877878975f").css("width","793px");
						}else if(jwerty.is("Esc",e)){
						var id_row = $('#rowed3').jqGrid('getGridParam', 'selrow')
						var NgayGioHenXa=($("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+'_NgayGioHenXa').val());
						var NgayGioHenGan=($("#"+$("#rowed3").jqGrid('getGridParam', 'selrow')+'_NgayGioHenGan').val());
						$.get('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&NgayGioHenGan='+NgayGioHenGan+'&NgayGioHenXa='+NgayGioHenXa+'&SID='+id_row+'&hienmaloi=3&oper=updateGioHenGan');
						}

					}}]

					,dataInit: function(element) {
	                    $(element).datetimeEntry({show24Hours: true, spinnerImage: ''});
	                		}, defaultValue: "00:00"
						},
            	},
					{name: 'GioiTinh', index: 'GioiTinh', hidden: true,width:0},
					{name: 'ThoiGianVaoKham', index: 'ThoiGianVaoKham', hidden: true,width:0},
					{name: 'TrangThaiXn', index: 'TrangThaiXn', hidden: false,width:20},
					{name: 'TrangThaiKQ', index: 'TrangThaiKQ', hidden: false,width:20},
					{name: 'TrangThaiDuyet', index: 'TrangThaiDuyet', hidden: false,width:20},
					{name: 'noitru', index: 'noitru',align:"center", hidden: false,width:16},
					{name: 'SampleID', index: 'SampleID',align:"center", hidden: false,width:22},

					{name: 'action',sortable:false, index: 'action', width:20, align: 'center', edittype: "button", hidden: false, },
					{name: 'IsCoKQTuDbTrungGian', index: 'IsCoKQTuDbTrungGian',align:"center", hidden: true,width:0},
					{name: 'checkHenGan', index: 'checkHenGan',align:"center", hidden: true,width:0},
					{name: 'SoPhieuKhamGoiLoa', index: 'SoPhieuKhamGoiLoa',align:"center", hidden: true,width:0},
					{name: 'action2',sortable:false, index: 'action2', width: 20, align: 'center', edittype: "button", hidden: false, },
					{name: 'action3',sortable:false, index: 'action3', width: 20, align: 'center', edittype: "button", hidden: false, },
					{name: 'action4',sortable:false, index: 'action4', width: 20, align: 'center', edittype: "button", hidden: false, },
					{name: 'TenBTC',sortable:false, index: 'TenBTC', width: 20, align: 'center', edittype: "button", hidden: true, },
					{name: 'ID_MapXepHang',sortable:false, index: 'ID_MapXepHang', width: 20, align: 'center', edittype: "button", hidden: true, },
            ],


		loadonce: true,
		//cellEdit: true,
		grid_mode:'',
		grid_move:"",	
		scroll: 1,	
		modal:true,	 	
		rowNum: 100,
		pager: '#prowed3',	
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
 		cellsubmit: 'remote',
        cellurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&hienmaloi=3&oper=updateGioHenGan',
		
		serializeRowData: function (postdata) { 	
		postdata.NgayGioHenGan=$("#rowed3").getRowData( rowed3_select)['NgayGioHenGan'];	 	
		postdata.NgayGioHenXa=$("#rowed3").getRowData( rowed3_select)['NgayGioHenXa'];	

		},
		onSelectRow: function(id){		
			//alert();
			var rowData = jQuery(this).getRowData(id); 
			window.id_benhnhan = rowData['ID_BenhNhan']; //alert(ID_DonThuocMau);
			window.idluotkham= rowData['ID_LuotKham'];
			window.SampleID= rowData['SampleID'];
			$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+window.idluotkham+"&idbenhnhan="+id_benhnhan+"&SampleID="+window.SampleID}).trigger('reloadGrid');
           $.get( "pages.php?module=web_services&function=create_panel_new&id_luotkham="+window.idluotkham+"&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
				  $( ".patient_info" ).html( data );
				  $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
			});      
           $('#ID_Sample').val(window.SampleID);
           $("#rowed5").jqGrid().setGridParam({datatype:'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaixetnghiem&idluotkham="+window.idluotkham+"&idbenhnhan="+id_benhnhan}).trigger("reloadGrid");	  
			$("#rowed3_iledit").click(); 

	 		$('#rowed4 tr td[aria-describedby="rowed4_DaDuyet"] input[type="checkbox"]').each(function() {
				 if($(this).is( ":checked" )) {
					$( "#xemchitiet" ).prop( "checked", true );			
				 	return false;	 
				 } else {
				  	$( "#xemchitiet" ).prop( "checked", false );
				 }
			});
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			var rowData = jQuery(this).getRowData(rowId); 
			parent.postMessage('canlamsang;nhap_ket_qua_xet_nghiem_new;'+rowData["ID_BenhNhan"]+';'+rowData["TenBenhNhan"]+';'+rowData["SampleID"]+';', "*");
 		},

		loadComplete: function(data) {
					var gridDOM = this; 
                    if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {
                        setTimeout(function () {                            
                            gridDOM.triggerToolbar();
                        }, 100);
                    }

                    ids = $('#rowed3').jqGrid('getDataIDs');
                    for (i = 0; i < ids.length; i++)  {
                    	 var rowData = jQuery('#rowed3').getRowData(ids[i]);
                    	 ce = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='P' onclick=\"inSampleID('" + rowData['SampleID'] + "','" + rowData['TenBenhNhan']  + "','" +  rowData['ID_LuotKham']  +"');\" />"+"<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='V' onclick=\"inSampleID2('" + rowData['SampleID'] + "','" + rowData['TenBenhNhan']  + "','" +  rowData['ID_LuotKham']  +"');\" />";
                		$("#rowed3").jqGrid('setRowData', ids[i], {action: ce});

						var ipClient="<?php echo $_SERVER['REMOTE_ADDR']?>";      
						var soLK= rowData['SoPhieuKhamGoiLoa'];
						var iD_LuotKham= rowData['ID_LuotKham'];

						var se = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"'  onclick=\"GoiLoa('" + soLK + "','" + ipClient  + "','" +  iD_LuotKham  +"');\" />";
						$("#rowed3").jqGrid('setRowData', ids[i], {action2: se});

						var se2 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='"+soLK+"'  onclick=\"GoiLoa2('" + soLK + "','" + ipClient  + "','" +  iD_LuotKham  +"');\" />";
						$("#rowed3").jqGrid('setRowData', ids[i], {action3: se2});

						var se4 = "<input class='fm-button'  type='button' style='padding: 0  0 !important'  value='" + rowData['TenBTC']  + "'  onclick=\"HoanTat('" + rowData['SampleID'] + "','" + rowData['HoLotBenhNhan']  + " " + rowData['TenBenhNhan']  + "','" + rowData['ID_MapXepHang']  +"');\" />";
						$("#rowed3").jqGrid('setRowData', ids[i], {action4: se4});
               
	                 	if (rowData["IsCoKQTuDbTrungGian"] === 'chuaco') {
	                       $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#FFFFFF'});
	                    }else{
	                    	//console.log(rowData["IsCoKQTuDbTrungGian"]);
	                        $("#rowed3").setCell(ids[i], 'MaBenhNhan', '', {background: '#C1F7D6'});
	                    }
	                    if (rowData["checkHenGan"] =='1') {
	                       $("#rowed3").setCell(ids[i], 'NgayGioHenGan', '', {background: '#ffccff'});
	                    }else{
	                        $("#rowed3").setCell(ids[i], 'NgayGioHenGan', '', {background: '#FFFFFF'});
	                    }
            		}

		},	  
		caption: "Danh sách Bệnh nhân Xn theo thời gian"
	});	
 $("#rowed3").jqGrid('bindKeys', {} );
 $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
 $("#rowed3").jqGrid('navGrid',"#prowed3",{add: false, edit: false, del: false, search: false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,navkeys : [ true, 38, 40 ]});
 $("#rowed3").jqGrid('inlineNav', '#prowed3', {add: false, addtext: '', edittext: '', edit: true,save:false,
            addParams: {
				keys:true,
                position: "last",
                addRowParams: {

                }
            	},	
            editParams: {

			}
       	 });
 $("#rowed3").jqGrid('navButtonAdd', '#prowed3', {caption: "<div >Giờ hẹn trả kết quả:<div class='hinhvuong quathoigian_max'></div><label class='diengiai'>30' nữa trả kết quả</label><div class='hinhvuong quathoigian_min'></div><label class='diengiai'>60' nữa trả kết quả</label><div class='hinhvuong sansanggoi'></div><label class='diengiai'>Chưa đến giờ trả kết quả</label></div>",})
};

function GoiLoa(SoLk,ipClient,iD_LuotKham){
	var chuoiGoi='&SoLk='+SoLk+'&n_nhomgoi=3'+'&ipClient='+ipClient+'&oper=default';
	$.post('pages.php?module=web_services&action=controllerSendSocket&strFromClient=' + chuoiGoi+'&oper=default').done(function(data){
	    if ($.trim(data) == '1') {
	        tooltip_message("Đã cập nhật hệ thống");
	    }
	});
}

function GoiLoa2(SoLk,ipClient,iD_LuotKham){
    goiloa_dialog_main("IP  " + ipClient+" - Số phiếu khám "+SoLk, 830, 350, "pages.php?module=web_services&view=goi_loa_tuy_chinh&action=index&id_form=41&type=test&ipClient="+ipClient+"&SoLk="+SoLk);
    }

function HoanTat(sampleid,hoten,id_luotkham){
	//alert(sampleid+" "+hoten+" "+id_luotkham);
	var cf=confirm("Bạn chắc chắn đã hoàn tất để chuyển bệnh nhân "+hoten+" qua phòng khác không?");
	if(cf===true){
		emr_thuchienxong('',sampleid,'','','');// Xếp hàng chuyển phòng
		tooltip_message("Đã lưu");
	}
	
}


 function inSampleID(P1, P2,P3) {
 			$.cookie("in_status", "print_preview"); 
  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sampleIDNew&type=report&id_form=794&xemtruocin=0&idluotkham="+P3+"&idsample="+P1+"&TenBenhNhan="+P2,'nhan_sampleID');
  $(".frame_u78787878975f").css("width","793px");
$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ketqua&tungay="+tungay+"&denngay="+denngay}).trigger('reloadGrid');
  }
   function inSampleID2(P1, P2,P3) {
   			$.cookie("in_status", "print_preview"); 
  dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=canlamsang&action=sampleIDNew&type=report&id_form=794&xemtruocin=1&idluotkham="+P3+"&idsample="+P1+"&TenBenhNhan="+P2,'nhan_sampleID');
  $(".frame_u78787878975f").css("width","793px");
  }
function ketqua_xetnghiem() {
		  $("#rowed4").jqGrid({
            url:"",
            datatype: "local",
            colNames: ['','id','Ngày chỉ định','Loại XN','Thông số', 'KQ','KQ LAB' ,'G.TrịBT', 'N.nhập','G.nhập', 'Duyệt','Đã duyệt', 'Ghi chú','','','In'],
            colModel: [
            	{name:'ID_XetNghiem',index:'ID_XetNghiem',hidden:true},
            	{name:'ID_Kham',index:'ID_Kham',hidden:true},
                {name: 'NgayGioTao', index: 'NgayGioTao',  search: false, width: "100%", editable: false, align: 'right', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham',  search: false, width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'TenXetNghiem', index: 'TenXetNghiem',  search: false, width: "200%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KetQua', index: 'KetQua', width: "80%",  search: false, align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'KQHisLis', index: 'KQHisLis', width: "80%",  search: false, align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name: 'GiaTriBinhThuong1', index: 'GiaTriBinhThuong1',  search: false, width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiThucHien',index:'NguoiThucHien',  search: false, width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
                {name: 'NgayGioThucHien', index: 'NgayGioThucHien',  search: false, width: "100%", align: 'center', edittype: "select", hidden: false, formoptions: {}},
                {name:'NguoiDuyet',index:'NguoiDuyet',  search: false, width:"80%", editable:true,align:'center',hidden:false,formatter:"select",editrules: {required:true},edittype:"select",stype: 'select',editoptions: { value: nation}},
               {name:'DaDuyet',index:'DaDuyet',  search: false, width:"80%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:7, colpos:1},editoptions: {value:"1:0"},formatoptions:{disabled: false}},	
                {name: 'GhiChu', index: 'GhiChu',  search: false, width: "80%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
                {name: 'ID_KetQuaXN', index: 'ID_KetQuaXN',  search: false, width: "60%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
                {name: 'Color', index: 'Color',  search: false, width: "100%", align: 'center', edittype: "select", hidden: true, formoptions: {}},
				
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
               groupOrder: ['desc', 'desc'],
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
					
				   
				 }	 

				

		$('#rowed4 tr td[aria-describedby="rowed4_DaDuyet"] input[type="checkbox"]').each(function() {
					
			
			
				 if($(this).is( ":checked" )) {
			
				 $( "#xemchitiet" ).prop( "checked", true );
				
			
				 return false;	 

				 }
				 else
				 {
				  		 $( "#xemchitiet" ).prop( "checked", false );
				 }
			
		});









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
		mapForm.action = 'pages.php?module=report&view=<?=$modules?>&action=xetnghiem2_ubuntu&header=top&id_benhnhan='+ID_BenhNhan+'&id_luotkham='+  window.idluotkham+'&type=report&id_form=10&inrutgon=0&chuky='+chuky+'&sid='+window.SampleID+"&report_name=XetNghiem";

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
        window.idluotkham = jQuery('#rowed3').jqGrid('getCell', selr, 'ID_LuotKham');
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
			dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=<?=$modules?>&action=xetnghiem2&header=top&id_benhnhan="+ID_BenhNhan+"&id_luotkham="+  window.idluotkham+"&type=report&id_form=10&ID_xetnghiem="+ID_xetnghiem+'&inrutgon='+0+'&chuky='+chuky+'&sid='+window.SampleID,'XetNghiem');
			$(".frame_u78787878975f").css("width","793px");
    }	
	    




});



$("#hoantat").click( function() {

	
  		
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

	dataToSend = jQuery.parseJSON(dataToSend);
	//alertObject(dataToSend);
	 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=trangthai_hoantat&hienmaloi=3',dataToSend)
								 .done(function( gridData ) {
								 							
			                                             tooltip_message("Đã hoàn tất");



 		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow');
        var noitru = jQuery('#rowed3').jqGrid('getCell', selr, 'noitru');
      
			
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
	
		
		serializeRowData: function (postdata) { 		 	
		
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
		,	size:					"53%"
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
		,	size:					"47%"
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
			//alertObject(dataToSend);
			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {
					$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+idluotkham+"&idbenhnhan="+id_benhnhan+"&SampleID="+window.SampleID}).trigger('reloadGrid'); 	
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
				//alertObject(dataToSend);
				
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=hoantat&hienmaloi=3',dataToSend)
				.done(function( gridData ) {
					$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachketquaxetnghiem&idluotkham="+  window.idluotkham+"&idbenhnhan="+id_benhnhan+"&SampleID="+window.SampleID}).trigger('reloadGrid'); 	

				})
				.fail(function() {
					alert( "error" );
				});
		}
	  
	}else{
			return false
	}
}


				
				
			
function create_ghichu_benhnhan() {
	var d =new Date();
	$("#rowed3_ghichu_new").jqGrid({
		url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichubenhnhan&idbenhnhan="+window.id_benhnhan_ghichu,
		datatype: "json",
		colNames: ["Người ghi chú","Ngày ghi chú","Nội dung",""],
		colModel: [
			{name: "nguoighichu", index: "nguoighichu", search: false, width: "20%", editable: false, align: "left", hidden: false,editoptions:{defaultValue:"<?=$_SESSION['user']['nickname']?>"}},
			{name: "ngayghichu", index: "ngayghichu", search: false, width: "20%", editable: false, align: "left", hidden: false, sorttype: "date",formatter: "date", formatoptions: {srcformat : "Y-m-d H:i", newformat: "H:i d-m-Y" },editoptions:{defaultValue:d }},
			{name: "noidung", index: "noidung",editrules:{required:true}, search: false, width: "60%", editable: true, align: "left", hidden: false},
			{name: "ID_NhanVienTao", index: "ID_NhanVienTao", search: false, width: "60%", editable: false, align: "left", hidden: true},
		],
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 1000,
		rowList: [],
		pginput:false,
		pgbuttons:false,
		pager: "#prowed3_ghichu_new",
		sortname: "NickName",
		height: 100,
		width: 100,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		sortorder: "desc",
		editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller&idbenhnhan="+window.id_benhnhan_ghichu,
		serializeRowData: function(postdata) {
		$("#rowed3_ghichu_new").trigger("reloadGrid");
			return postdata;
		},
		onSelectRow: function(id) {
			var nguoighichu = $("#rowed3_ghichu_new").jqGrid("getCell", id,"ID_NhanVienTao");
			if(<?=$_SESSION["user"]["login"]?>!=nguoighichu){					
				$("#rowed3_ghichu_new_iledit").addClass("ui-state-disabled");
				$("#del_rowed3_ghichu_new").addClass("ui-state-disabled");		
			}else{
				$("#rowed3_ghichu_new_iledit").removeClass("ui-state-disabled");	
				$("#del_rowed3_ghichu_new").removeClass("ui-state-disabled");	
			}
		},
		ondblClickRow: function(rowId, rowIndex, columnIndex) {
			$("#rowed3_ghichu_new_iledit .ui-icon-pencil").trigger("click");
		},
		loadComplete: function(data) {			
		},
		caption: "Ghi chú BN"
		});
		$("#rowed3_ghichu_new").jqGrid("navGrid","#prowed3_ghichu_new",{add: false,del:true,edit:false,search:false,refresh:false},
		{},
		{},
		{reloadAfterSubmit:true,url:"pages.php?module=hanhchinh&view=ghi_chu_new&action=controller&oper=del",navkeys : [ true, 38, 40 ],closeOnEscape : true,	
			afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="Xóa dữ liệu thành công";													
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;	
								var new_id="Xóa dữ liệu thành công";															
							};						
							return [success,new_id] ;
						},
						beforeShowForm: function(formid) {					 
							 canhgiua_del(formid);					 
						},				
		}			
		); 
		$("#rowed3_ghichu_new").jqGrid("inlineNav", "#prowed3_ghichu_new", {add: true, addtext: "", edittext: "", edit: true, closeOnEscape: true,
					addParams: {
						keys:true,
						position: "last",
						mtype: "post",			
						addRowParams: {
							keys:true,					
							oneditfunc: function(rowId) {	
								$("#rowed3_ghichu_new").jqGrid("unbindKeys");
							},
							aftersavefunc: function(rowId, response,lastsel) {
								if (response.responseText == 1) {	
								} else {
									$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
										$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
									}}); 							
									$("#rowed3_ghichu_new").focus();	      
								} 
							},
							afterrestorefunc: function() {
								$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
									$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
								}});
								$("#rowed3_ghichu_new").focus(); 
							},					 
						}
						},	
					editParams: {
						keys:true,			
						oneditfunc: function(rowId) {			
							$("#rowed3_ghichu_new").jqGrid("unbindKeys");				 
						},
						aftersavefunc: function(rowId, response) {	
							if (response.responseText == 1) {
							} 
							else{
								$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
									$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
								}});	
								$("#rowed3_ghichu_new").focus();	      
							} 
						},
						afterrestorefunc: function() {
							$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
									$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
							}});
							$("#rowed3_ghichu_new").focus(); 
						}
					}
					});
					$("#rowed3_ghichu_new").setGridWidth($(window).width()/2 - 60);
					$("#rowed3_ghichu_new").setGridHeight( ($(window).height()/100 * parseFloat(70)).toFixed(0)  - 150);
					$("#rowed3_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
						$("#rowed3_ghichu_new_iledit .ui-icon-pencil").click();				
					}});		 
    }


			function create_ghichu_luotkham()
    {
		var d =new Date();
        $("#rowed4_ghichu_new").jqGrid({
            url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichuluotkham&idbenhnhan="+window.id_benhnhan_ghichu,
            datatype: "json",
            colNames: ["","Người ghi chú","Ngày ghi chú","Nội dung",""],
            colModel: [
				{name: "Caption", index: "Caption", search: false, width: "80%", editable: false, align: "left", hidden: true}, 
				{name: "NickName", index: "NickName", search: false, width: "20%", editable: false, align: "left",editoptions:{ defaultValue:"<?=$_SESSION['user']['nickname']?>"}}, 
				{name: "ngay",index:"ngay",search:false, width:"20%", editable:false,align:"center", sorttype: "date",formatter: "date", formatoptions: {srcformat : "Y-m-d H:i", newformat: "H:i d-m-Y" },editoptions:{defaultValue:d }},
                {name: "ghichu", index: "ghichu", search: false, width: "40%",editrules:{required:true}, editable: true, align: "left", hidden: false}, 				
				{name: "ID_NhanVienTao", index: "ID_NhanVienTao", search: false, width: "20%", editable: false, align: "left", hidden: true}, 
            ],
            loadonce: true,			
            scroll: false,
            modal: true,
            rowNum: 1000,
			pginput:false,
			editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller1&lk="+window.id_luotkham_ghichu,
			pgbuttons:false,
            rowList: [],
            pager: "#prowed4_ghichu_new",
            sortname: "ngay",
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,         
			grouping:true,
			sortorder: "desc",
			serializeRowData: function(postdata) {
                jQuery("#rowed4_ghichu_new").trigger("reloadGrid");
                return postdata;
            },
			groupingView : 
			{
				groupField : ["ngay"],
				groupCollapse : false,
				groupColumnShow : [true],
				groupText: ["<b>Thời gian tạo ghi chú {0}</b>"],
			},
			onSelectRow: function(id) {   
				var nguoighichu = $("#rowed4_ghichu_new").jqGrid("getCell", id, "ID_NhanVienTao");
				if(<?=$_SESSION["user"]["login"]?>!=nguoighichu){					
					$("#rowed4_ghichu_new_iledit").addClass("ui-state-disabled");	
					$("#del_rowed4_ghichu_new").addClass("ui-state-disabled");	
				}else{
					$("#rowed4_ghichu_new_iledit").removeClass("ui-state-disabled");	
					$("#del_rowed4_ghichu_new").removeClass("ui-state-disabled");	
				}
            },
			ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $("#rowed4_ghichu_new_iledit .ui-icon-pencil").trigger("click");				
            },
			loadComplete: function(data) {				
				if($.trim(window.id_luotkham_ghichu)==""){
					$("#rowed4_ghichu_new_iledit").addClass("ui-state-disabled");	
					$("#rowed4_ghichu_new_iladd").addClass("ui-state-disabled");	
					$("#del_rowed4_ghichu_new").addClass("ui-state-disabled");	
				}				
		    },
            caption: "Ghi chú lượt khám",   		
        });
		
		$("#rowed4_ghichu_new").jqGrid("navGrid","#prowed4_ghichu_new",{add: false,del:true,edit:false,search:false,refresh:false},
		{},
		{},
		{}
		); 
			
		$("#rowed4_ghichu_new").jqGrid("inlineNav", "#prowed4_ghichu_new", {add: true, addtext: "", edittext: "", edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
                mtype: "post",
                addRowParams: {
					keys:true,					
                    oneditfunc: function(rowId) {	
					$("#rowed4_ghichu_new").jqGrid("unbindKeys");
					},
                    aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {			
                        } else {
							$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
								$("#prowed4_ghichu_new .ui-icon-pencil").click();				
							}}); 							
						    $("#rowed4_ghichu_new").focus();	 						
							$("#rowed4_ghichu_new").jqGrid("setGridParam",{datatype:"json"}).trigger("reloadGrid");
                        } 
                    },
                    afterrestorefunc: function() {
						$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
							$("#prowed4_ghichu_new .ui-icon-pencil").click();				
						}});
						$("#rowed4_ghichu_new").focus(); 
                    },					 
                }
            	},	
            editParams: {
				keys:true,			
                oneditfunc: function(rowId) {			
					$("#rowed4_ghichu_new").jqGrid("unbindKeys");				 
                },
                aftersavefunc: function(rowId, response) {	
					if (response.responseText == 1) {} 
					else {
						$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
							$("#prowed4_ghichu_new .ui-icon-pencil").click();				
						}});	
						$("#rowed4_ghichu_new").focus();	     
						$("#rowed4_ghichu_new").jqGrid("setGridParam",{datatype:"json"}).trigger("reloadGrid");
					} 
                },
                afterrestorefunc: function() {
					$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
						$("#prowed4_ghichu_new .ui-icon-pencil").click();				
					}});
					$("#rowed4_ghichu_new").focus(); 
                }
			}
       	 });
        $("#rowed4_ghichu_new").setGridWidth($(window).width()/2 - 60);
		$("#rowed4_ghichu_new").setGridHeight( ($(window).height()/100 * parseFloat(70)).toFixed(0)  - 150);
		$("#rowed4_ghichu_new").jqGrid("bindKeys", {"onEnter":function( rowid ) {				
			$("#rowed4_ghichu_new_iledit .ui-icon-pencil").click();				
		}});
    }
			 
				
		



function vantay(tinhieu,id){	

	if(tinhieu=="dadk"){	
		$.ajax({
			type: 'POST',
			async : false,
			url: "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_vantay&id_auto="+id,
			success: function(data, status, xhr) {				
			   var vantay= ($.trim(data)).split('|');	
			   //$("#mabenhnhan").val(vantay[0]);
			   //$("#timkiemmabn").click();
			  // $('#dialog_finger').dialog('option', 'title', 'Đang ký vân tay bệnh nhân: '+tam[3]+' '+tam[2]);
			  // $("#text_finger").html("<div style='font-size:22px'>Mã BN:<strong>"+vantay[0]+"</strong> Tên:<strong>"+vantay[1]+" "+vantay[2]+"</strong> Tuổi:<strong>"+vantay[3]+"</strong> Giới:<strong>"+vantay[4]+"</strong> Số gọi loa:<strong>"+vantay[5]+"</strong></div>");
			   //$("#dialog_finger").dialog("open");
			   
			 
			   window.id_benhnhan_ghichu=$.trim(vantay[7]);
			   window.id_luotkham_ghichu=$.trim(vantay[6]);
			  
			   $("#rowed3_ghichu_new").jqGrid("setGridParam",{datatype:"json", url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichubenhnhan&idbenhnhan="+window.id_benhnhan_ghichu,editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller&idbenhnhan="+window.id_benhnhan_ghichu}).trigger("reloadGrid");
			   $("#rowed4_ghichu_new").jqGrid("setGridParam",{datatype:"json", url: "pages.php?module=hanhchinh&view=ghi_chu_new&action=data_ghichuluotkham&idbenhnhan="+window.id_benhnhan_ghichu,editurl: "pages.php?module=hanhchinh&view=ghi_chu_new&action=controller1&lk="+window.id_luotkham_ghichu,}).trigger("reloadGrid");
			   $("#dialog_ghichu_new").prev().find("span.ui-dialog-title").html("<div style='font-size:22px'>Mã BN:<strong>"+vantay[0]+"</strong> Tên:<strong>"+vantay[1]+" "+vantay[2]+"</strong> Tuổi:<strong>"+vantay[3]+"</strong> Giới:<strong>"+vantay[4]+"</strong> Số gọi loa:<strong>"+vantay[5]+"</strong></div>");
			   $("#dialog_ghichu_new" ).dialog("open");
			  // setTimeout(function(){ $( "#dialog_ghichu_new" ).dialog("close"); }, 20000);
			},
		 });
	}else if(tinhieu=="chuadk"){
		tooltip_message("Vân tay chưa đăng ký");
	}else if(tinhieu=="thulai"){
		tooltip_message("Không nhận diện được vân tay vui lòng thử lại");
	}
}

</script>