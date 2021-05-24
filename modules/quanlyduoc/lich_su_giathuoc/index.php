
<style>
.ui-jqgrid tr.myfootrow td {
    font-weight: bold;
    overflow: hidden;
    white-space:nowrap;
    height: 21px;
    padding: 0 2px 0 2px;
    border-top-width: 1px;
    border-top-color: inherit;
    border-top-style: solid;
} /*footer row modding*/
 #gbox_rowed6, #gbox_rowed7, #gbox_rowed8 {
    border: 1px solid #919191;
    box-shadow: 0 0 10px #A0A0A0;
    margin-left: -15px;
    margin-top: -8px;
}

#panel_main{
	 margin-left: -20px; margin-top: -15px;
}
#gbox_rowed4,#gbox_rowed5{
margin-left: -1px;
}
fieldset {
  margin: 0;
  padding: 0;
}

fieldset {display: inline-block; vertical-align: top;}
fieldset {display: inline !ie7; /* IE6/7 need display inline after the inline-block rule */}
   
    #DM_template_container{
        position:absolute;
        z-index:1000000;		 
        display:none;	
        box-shadow:0px 0px 6px #333;	 	
    }
    button#last,button#first,button#prev,button#next{
        font-size:7px!important;
        margin-top:-6px;
        /* padding-left:20px;*/

    }
    #open_template,#add_template{
        font-size:11px!important;
        margin-top:-3px;
        margin-left:-6px;

    }
    #open_template{		
        border-radius:0px!important;	
    }	 
    .ui-corner-all{		 
        border-radius:3px!important;		 
    }
    .fm-button{
        box-shadow:0px 0px 5px #383838;
        border:1px solid #919191;
    }  	
    .top_form{
        width:100%;
        height:139px;
        margin-top:3px;				
    }	 	 
    .thongtin_tongthe,.thongtin_luotkham_vienphi,.thongtin_lichsuvienphi,.kieuin{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;		
    }
    .thongtin_luotkham_vienphi{	 	 
        padding-bottom:4px;
        padding-top:4px;	
        width: 410px;
    }
    .thongtin_lichsuvienphi{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;		 		
    }
    .thongtin_lichsuvienphi_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
    }	 
    .kieuin{ 
      padding-bottom:4px;
        padding-top:4px;    
        width: 190px;
    }

   
    .navigator{
        display:inline-block;
        border:1px solid #327E04;
        padding-top:6px;
        margin-top:-4px;
        margin-left:2px;
        padding-bottom:2px;
        padding-left:2px;
        padding-right:1px; 
    }
    .navigator_title{
        display:inline-block;
        width:100px;
        text-align:center;
    }
    .ui-layout-mask {
        background:#FFF !important;
        opacity:.20 !important;
        filter:	alpha(opacity=20) !important;
    }
    #mota{
        font-size:13px!important;		 	 
    }
	
	#mid input
	{
		text-align:right;
		font-size:18px!important;
		font-weight:bold!important;
		margin-top:3px;
	}
	#thongtinnoptien input{
		margin-top:3px;
	}
	#thongtinnoptien #lydogiamgia{
		margin-top:0px;
	}
	
	#thongtinnoptien #lydogiamgia_combobox{
		margin-top:3px;
	}
	#thongtinnoptien #tiengiam,#thongtinnoptien #tiendathu,#thongtinnoptien #chiphigoc,#thongtinnoptien #phantram,#giamdtph,#giamchidinh,#giamthuoc,#giamtienthuoc,#toantam,#toadaxuat
	{
		text-align:right;
		font-size:18px!important;
		font-weight:bold!important;
		
		
	}
</style>

<body>


        
			
					
					<label for="from_day" style="width:40px">Từ ngày</label>
					<input type="text"  value="<?php echo '01/06/14'?>" style="width:60px" name="from_day" id='from_day'>
					<label for="to_day" style="width:49px"> Đến ngày</label>
					<input type="text"  value="<?php echo date($_SESSION["config_system"]["ngaythang"])?>" style="width:60px" name="to_day" id='to_day'>	
                    <label for="dm_thuoc" style="width:49px">Chọn thuốc</label>				
				    <input type="text"   style="width:150px;margin-left:50px;" name="to_day" id='dm_thuoc'>
                    <button type="button" style="margin-left:30px;" id="xem">Xem</button>
                    <button type="button" style="margin-left:30px;" id="excel">Excel</button>
			
      


<div id="tabs">
              <ul>
                <li id="tab1"><a href="#tabs-1">Lịch sử giá bán thuốc</a></li>
                <li id="tab2"><a href="#tabs-2">Lịch sử giá nhập thuốc</a></li>  
              
              </ul>
                  <div id="tabs-1">       
                            <table id="rowed3" style="width:100%" ></table>    
                  </div>
                   <div id="tabs-2">       
                            <table id="rowed4" style="width:100%" ></table>    
                  </div>
            </div>
       

</body>
</html>
<script type="text/javascript">
 tab_click=1;
    $(document).ready(function() {
		openform_shortcutkey();
          load_select();//lấy dữ liệu combobox
		create_combobox_new('#dm_thuoc',create_dmthuoc,'bw','','data_dmthuoc',0);	
   		$( "#tabs" ).tabs({        
        	 heightStyle:"fill"         
         });
		 $('#xem').button();
		 create_giaban('#rowed3');
		 create_nhapkho('#rowed4') 
		 
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
		 
		 $('#tab1').click(function(){
			 tab_click=1;
			 })
		  $('#tab2').click(function(){
			 tab_click=2;
			 })
		 $('#xem').click(function(){
			 if(tab_click==1){
				  $('#rowed3').jqGrid('setGridParam', { datatype: "json",url: "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_giabanthuoc&ID_Thuoc="+$('#dm_thuoc_hidden').val()+"&tungay="+$('#from_day').val()+"&denngay="+$('#to_day').val() }).trigger("reloadGrid");	
			 }else{
			
			 $('#rowed4').jqGrid('setGridParam', { datatype: "json",url: "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhapkho&ID_Thuoc="+$('#dm_thuoc_hidden').val()+"&tungay="+$('#from_day').val()+"&denngay="+$('#to_day').val() }).trigger("reloadGrid");
			 }
			 })



            $('#excel').click(function(){
				 if(tab_click==1){
				   
					window.open("pages.php?module=report&view=quanlyduoc&action=xuat_excel_ThongKeXN&type=excel&ID_Thuoc="+$('#dm_thuoc_hidden').val()+"&fromdate="+$('#from_day').val()+"&todate="+$('#to_day').val());
				 }else{
					window.open("pages.php?module=report&view=quanlyduoc&action=xuat_excel_ThongKeXN_gianhap&type=excel&ID_Thuoc="+$('#dm_thuoc_hidden').val()+"&fromdate="+$('#from_day').val()+"&todate="+$('#to_day').val());             
				 }
             })

			 $("#tabs-1").css("height", $(window).height() - 100 + "px");
		  	 $("#tabs-1").css("width", $(window).width()  + "px");
			  $("#tabs-2").css("height", $(window).height() - 100 + "px");
		  	 $("#tabs-2").css("width", $(window).width()  + "px");
			resize_control()
			 $(window).resize(function() {
          //  temp = jQuery(window).height() - 100;
         //   $("#tabs-1").css("height", temp + "px");
		//	$("#tabs-2").css("height", $(window).height() - 100 + "px");
		  	
         //   resize_control();

        })
});


function create_dmthuoc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên gốc', 'Tên nhóm thuốc'],
            colModel: [
                {name: 'tengoc', index: 'tengoc', hidden: false,width:'70%'},
                {name: 'tennhomthuoc', index: 'tennhomthuoc', hidden: false,width:'30%'},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 200,
            rowList: [],
            height: 300,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
		    },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_giaban(elem) {
          window.Id_LoaiNhapXuatZ = ":Tất cả;" + window.Id_LoaiNhapXuat;
        $(elem).jqGrid({
      		data:[],
            datatype: "jsonstring",
            colNames: ['Tên gốc','Ngày xuất', 'Mã BN','Tên BN','Đơn vị tính','Số lượng','Đơn giá','Thành tiền','Loại xuất','Xuất từ','Nơi nhận'],
            colModel: [
			 {name: 'tengoc', index: 'tengoc', hidden: false,width:'15%'},
                {name: 'nx', index: 'nx', hidden: false,width:'6%'},
                {name: 'mabn', index: 'mabn', hidden: false,width:'5%'},
				{name: 'tenbn', index: 'tenbn', hidden: false,width:'12%'},
				{name: 'dvt', index: 'dvt', hidden: false,width:'3%'},
                {name: 'sl', index: 'sl', hidden: false,width:'3%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'dongia', index: 'dongia', hidden: false,width:'5%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'thanhtien', index: 'thanhtien', hidden: false,width:'6%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                /*{name: 'Ten_LoaiNhapXuat',stype: 'select', formatter: "select",edittype: "select", index: 'Ten_LoaiNhapXuat', hidden: false,width:'10%',align: 'left'},*/
                {name: 'Ten_LoaiNhapXuat', index: 'Ten_LoaiNhapXuat', summaryType: 'count', search: true, stype: 'select', searchoptions: {sopt: ['eq', 'ne'], value: Id_LoaiNhapXuatZ}, width: "15%", formatter: "select", editable: false, edittype: "select", editoptions: {value: Id_LoaiNhapXuatZ}, align: 'left', hidden: false, },
                {name: 'TenKho', index: 'TenKho', hidden: false,width:'10%',align: 'left'},
                 {name: 'TenKhoNhan', index: 'TenKhoNhan', hidden: false,width:'10%',align: 'left'},
				
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 1000,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
			 footerrow: true,
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
		    },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
                 var countR=$("#rowed3").jqGrid('getGridParam', 'records');
				sumsl = $("#rowed3").jqGrid('getCol', 'sl', false, 'sum');
				sumdongia=$("#rowed3").jqGrid('getCol', 'dongia', false, 'sum');	
				sumthanhtien=$("#rowed3").jqGrid('getCol', 'thanhtien', false, 'sum');		
			
				
				$("#rowed3").jqGrid('footerData','set', {sl: sumsl, dongia: sumdongia, thanhtien: sumthanhtien, mabn:countR});
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	 function resize_control() {     
        $("#rowed3").setGridHeight($("#tabs-1").height() - 60);      
        $("#rowed3 ").setGridWidth($("#tabs-1").width() -25);
        $("#rowed4").setGridHeight($("#tabs-2").height() - 60);      
        $("#rowed4 ").setGridWidth($("#tabs-2").width() -25);
		  
    }

  function load_select() {
             window.Id_LoaiNhapXuat = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=GD2_DM_Nhapxuat&id=ID_NhapXuat&name=Ten_LoaiNhapXuat', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục LoaiNhapXuat');
                }}).responseText;
        }

	function create_dmthuoc(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
            datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tên gốc', 'Tên nhóm thuốc'],
            colModel: [
                {name: 'tengoc', index: 'tengoc', hidden: false,width:'70%'},
                {name: 'tennhomthuoc', index: 'tennhomthuoc', hidden: false,width:'30%'},
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 500,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
		    },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
	
	function create_nhapkho(elem) {
        window.Id_LoaiNhapXuatY = ":Tất cả;" + window.Id_LoaiNhapXuat;
        $(elem).jqGrid({
      		data:[],
            datatype: "jsonstring",
            colNames: ['Tên gốc','Ngày nhập', 'Mã phiếu','Tên NCC','Số lô NXS','Hạn sử dụng','ĐVT','Số lượng','Giá trước V','Giá sau V','Thành tiền','Loại nhập','Nhập tại','Nhân viên','Duyệt bởi'],
            colModel: [
				{name: 'tengoc', index: 'tengoc', hidden: false,width:'20%'},
                {name: 'nx', index: 'nx', hidden: false,width:'10%'},
                {name: 'mabn', index: 'mabn', hidden: false,width:'10%'},
				{name: 'tenbn', index: 'tenbn', hidden: false,width:'20%'},
				{name: 'nxs', index: 'nxs', hidden: false,width:'10%'},
				{name: 'hsd', index: 'hsd', hidden: false,width:'10%'},
				{name: 'dvt', index: 'dvt', hidden: false,width:'5%'},
                {name: 'sl', index: 'sl', hidden: false,width:'5%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'dongia', index: 'dongia', hidden: false,width:'10%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
				{name: 'giaban', index: 'giaban', hidden: false,width:'10%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'thanhtien', index: 'thanhtien', hidden: false,width:'5%',align: 'right',formatter:'currency',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
                {name: 'id_nhapxuat', index: 'id_nhapxuat', summaryType: 'count', search: true, stype: 'select', searchoptions: {sopt: ['eq', 'ne'], value: Id_LoaiNhapXuatY}, width: "15%", formatter: "select", editable: false, edittype: "select", editoptions: {value: Id_LoaiNhapXuatY}, align: 'left', hidden: false, },
                {name: 'TenKho', index: 'TenKho', hidden: false,width:'10%'},
                {name: 'TenNv', index: 'TenNv', hidden: false,width:'10%'},
                {name: 'NguoiDuyet', index: 'NguoiDuyet', hidden: false,width:'10%'},
				
                
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 100000,
            rowList: [],
            height: 300,
            width: 1000,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            sortorder: "desc",
			 footerrow: true,
            serializeRowData: function(postdata) {
            },
            onSelectRow: function(id) {
		    },
            ondblClickRow: function(id, rowIndex, columnIndex) {
            },
            loadComplete: function(data) {
				sumsl = $(elem).jqGrid('getCol', 'sl', false, 'sum');
				sumdongia=$(elem).jqGrid('getCol', 'dongia', false, 'sum');	
				sumthanhtien=$(elem).jqGrid('getCol', 'thanhtien', false, 'sum');		
			
				
				$(elem).jqGrid('footerData','set', {sl: sumsl, dongia: sumdongia, thanhtien: sumthanhtien});
            },
        });
        $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $(elem).jqGrid('bindKeys', {});
    }
</script>


