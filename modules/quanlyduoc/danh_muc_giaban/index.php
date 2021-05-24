<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
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
    }#gs_NgayTao{
	text-align:center;
}
.dateEntry_control{
	display:none!important;
}
</style>
</head>
<body>  
	<div  class="dialog_dm_thuoc" style="display:none">
    <table id="DM_thuoc">
    </table>
   
 </div>
 <div id="panel_main1">
		<div id="grid_phong_ban" style="display:inline-block">   
			Từ ngày:<input type="text" style="width:70px" name="from_day" id='from_day'  value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>"> 
			Đến ngày:<input type="text" style="width:70px" name="to_day" id='to_day' value="<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>">
			<button id="xem" type="button">Xem danh sách</button>
		 	<button id="xemtc" type="button">Xem tất cả</button>
		</div>
        </div> 
	<div id="grid_phong_ban">      	 
          <table id="rowed6" ></table>
            <div id="prowed6"></div>  
            
    </div>   
    
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	var kiemtra=0;
	$("#xem,#xemtc").button();
create_grid();
	//load_select();
	
	$.dateEntry.setDefaults({spinnerImage: ''});	
	window.nhanvien3_complete=0;
	window.xaphuongz=":;"+window.xaphuong;
			/*$("body").bind("contextmenu",function(e){
			   return false;
			});*/ 	
			
	
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
               
              //  fromday = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
               // $("#from_day").val(fromday);
              //  $("#to_day").val(today);
               // $( "#from_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {

              //  $("#from_day_mask").val(dat);
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
              //  today = $.datepicker.formatDate($.cookie("ngayJqueryUi"), new Date(selectedDate));
              //  $("#to_day").val(today);
              //  $("#from_day").val(fromday);
               // $( "#to_day" ).datepicker( "setDate", today );
            },
            onSelect: function(dat, inst) {
              //  $("#to_day_mask").val(dat);
            }
        });
         $.dateEntry.setDefaults({spinnerImage: ''});		 
	 //$("#tungay, #denngay").dateEntry({dateFormat: 'dmy-'});
	 $("#from_day, #to_day").dateEntry({dateFormat: $.cookie("ngayDateEntry")});
function resize_control(){
	$("#rowed6").setGridWidth($(window).width()-20);
	 $("#rowed6").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-$("#panel_main1").height()-120);
	}
	resize_control();
		jQuery(window).resize(function() {		 
	 resize_control()
});	
	
	$("#xem").click(function(){
		$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=1'}).trigger('reloadGrid');

	})
	$("#xemtc").click(function(){
		$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0'}).trigger('reloadGrid');
		 /*$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0').done(function(data){
		 	//alert(data)
		 	//$("#rowed6").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&from_day="+$("#from_day").val()+"&to_day="+$("#to_day").val()+'&kiemtra=0'}).trigger('reloadGrid');
		 window.data_rowed5=jQuery.parseJSON(data); 
								//data=jQuery.parseJSON(data);
								
								$("#rowed6").jqGrid('setGridParam',{datatype: "jsonstring" ,datastr: data}).trigger('reloadGrid');	
		 });*/
	})
			phanquyen();	 
		
})
var rowed6_curentsel; 
function create_grid(){	
	 
	 $("#rowed6").jqGrid({	
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xaphuong&kiemtra=1&from_day='+$("#from_day").val()+'&to_day='+$("#to_day").val(),
		datatype: "json",	
		colNames:['','Tên thuốc',"Hoạt chất" ,"Đv.tính",  "BHYT","Giá", "Ngày áp dụng", "N.cập nhật","Trạng thái",""],
		colModel:[
			{name:'id_thuoc',index:'id_thuoc',search:false, width:"0", align:'left',hidden:true}, 
			{name:'TenThuoc',index:'TenThuoc',search:true, width:"20%", align:'left',hidden:false}, 
			{name:'HoatChat',index:'HoatChat',search:true,  width:"40%", editable:false,align:'left',hidden:false}, 
			{name:'Dvtinh',index:'Dvtinh',search:true,  width:"5%", editable:false,align:'left',hidden:false},	 
			{name:'BHTY',index:'BHTY',search:true,  width:"5%",align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}},	
			{name:'Giaban', index:'Giaban',search:true, formatter:'number',width:"10%",align:'right'}, 
		//	{name:'Giabansauthue', index:'Giabansauthue',search:true, formatter:'number',width:"10%",align:'right'}, 
			{name:'NgayTao',index:'NgayTao', width:"10%", editable:false,align:'center', searchrules: {date: true}, sorttype: "date", searchoptions: {dataInit: function(el) {
                                $(el).dateEntry({dateFormat:$.cookie("ngayDateEntry")})
								
	
								$(el).datepicker({   
									dateFormat: $.cookie("ngayJqueryUi"),
									onSelect: function() {
										if (this.id.substr(0, 3) === "gs_") {
										  
											setTimeout(function() {
												$("#rowed6")[0].triggerToolbar();
											}, 100);
										}
									}
								});
                            }},  formatter: "date", formatoptions: {srcformat: 'd/m/y', newformat: 'd/m/y'}, hidden: false, },
			{name:'Ngay_capnhat',index:'Ngay_capnhat',search: true, width: "5%",  align: 'left', hidden: false},
			{name:'Active',index:'Active', width:"5%", editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'},},
			{name:'tenbietduoc',index:'tenbietduoc',width:"0%",align:'center',hidden:true, editable: false}			
		],
	//

		loadonce: true,
		scroll: 1,	
		
		modal:true,	 	
		pager: '#prowed6',	
		rowNum: 100,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'id_thuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
	serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){		  
		 
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {			
			grid_filter_enter("#rowed6");				
		}, 
		caption: "Danh mục giá bán"
	});
	$("#rowed6").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	//$("#rowed3").jqGrid('navGrid',"#prowed3",search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",bCancel: "Cancel"}); //options	
}


function load_select(){
	window.xaphuong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_QuanHuyen&id=ID_QuanHuyen&name=TenQuanHuyen', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;	
		
}

</script>