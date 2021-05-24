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
</style>
<body> 
	<div id="rowed3" style="margin-left:10px;"></div>
    <div id="footer"  style="width:100%;height:20px; margin-left:10px;"> <button id="sua">Sửa</button> </div>
    
     <div id="dialog-form" title="Thêm bản ghi" style="display:none">
     	<div id="container">
     		<div class="form_row" style="vertical-align:top"  >
            	<div style="padding-top:10px ">
		               <label for="TenLoaiKham" style="width:78px; color:red;text-align:right ">Tên Loại khám</label>
		               <span style="padding-top:10px "> (*) </span>
		               <input id="TenLoaiKham" name="TenLoaiKham"  type="text" style="width:170px;margin-left:5px" disabled>
		          
		           <label for="MaVietTat" style="width:84px;text-align:right ">Mã viết tắt</label>
		              <input type=text id="MaVietTat" name="MaVietTat" style="width: 170px!important;margin-left:5px" disabled>
                      <label for="MaVietTat_BN"  style="width:78px;text-align:right ">Mã viết tắt BN</label>
		          		 <input id="MaVietTat_BN" value="" name="MaVietTat_BN"  type="text" style="width:170px;margin-left:5px" disabled>
                          <label for="CoLuuKQInRieng" style="width:259px;text-align:right ">Có lưu kết quả in riêng(trả kết quả từ file ngoài)</label> 
                         <input type=checkbox id="CoLuuKQInRieng" value="1" name="CoLuuKQInRieng">
                          <label for="IsKetNoiLab" style="width:109px;text-align:right ">Đổ kết quả tự động</label> 
                         <input type=checkbox id="IsKetNoiLab" value="1" name="IsKetNoiLab">
		           </div>
		           <div style="padding-top:5px "> 
		           <label for="GiaBaoChoBN" style="width:94px;text-align:right ">Giá báo BN <span style="padding-top:10px ">(*) </span></label>
		                  <input id="GiaBaoChoBN" value="" name="GiaBaoChoBN"  type="text" style="width:120px;margin-left:5px" disabled>
		          
		               <label for="GiaThueNgoaiThucHien" style="width:79px;text-align:right ">Giá thuê ngoài</label>
                       <input id="GiaThueNgoaiThucHien" name="GiaThueNgoaiThucHien"  type="text" style="width:120px;margin-left:5px" value="0" disabled >
                        <label for="STT" style="width:84px;text-align:right ">STT (xếp nhóm)</label>
		               <input id="STT" name="STT"  type="text" style="width:70px;margin-left:5px">
                      
						 <label for="Active" style="width:84px;text-align:right ">Sử dụng</label> 
                         <input type=checkbox id="Active" value="1" name="Active">
                         <label for="CoFormChucNangRieng" style="text-align:right ">Có form chức năng riêng</label> 
                         <input type=checkbox id="CoFormChucNangRieng" value="1" name="CoFormChucNangRieng">
                       
                         
       		 </div>
       		 </div>
        	 <div class="form_row" style="vertical-align:top"  >
        	 	 	<div style="padding-top:5px ">
                        
                     </div>    
                         
        	 </div>
             
                 <table id="rowed5"></table>
                 <div id="prowed5"></div>
         
        </div>
    </div> 
   
 
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
	
	window.donvitinh=$.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DonViTinh&id=ID_DonViTinh&name=TenDonViTinh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhóm bhyt');}}).responseText;
	$("#sua").button();
	phanquyen();
	thongsoxetnghiem();
	
	
	$("#sua").click(function(e) {
		$('.slick-viewport .active').dblclick();
		
	});
	
	
       
	
	
	
	function filter(item){
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
                }else{ //str.indexOf("abc")
					//if (item[c.field].toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
					// return false;
					//}
					if (item[c.field].toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) ==-1 ) {
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
			{name:'Nhóm ',id:'TenNhom',field: "TenNhom",width: 200},
			
			{name:'Giá báo BN',id:'GiaBaoChoBN',field: "GiaBaoChoBN",width: 80,formatter: currencyFmatter},
			{name:'Giá bảo hiểm',id:'GiaBaoHiem',field: "GiaBaoHiem",width: 80,formatter: currencyFmatter},
			
			{name:'SD',id:'Active',field: "Active",width:40},
			{name:'STT',id:'STT',field: "STT",width:40},
			
  
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

	  	
      dataView.onRowsChanged.subscribe(function (e, args) {
		  grid.invalidateRows(args.rows);
		  grid.render();
		});
	grid.onDblClick.subscribe(function (e, args){
			    window.id_edit=dataView.getItem(args.row).id;
			if(window.id_edit>0){
				//alert(window.id_edit)
			$('#dialog-form').dialog('open');
			// $( "#dialog-form3" ).dialog( "open" );
            $("input:text").css("background-color","white");
            window.oper='edit';
			
			$('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xetnghiemts&id='+window.id_edit,datatype:'json'}).trigger('reloadGrid');
		
			$("#xetnghiem_xoa").addClass('ui-state-disabled');
			 $("#xetnghiem_sua").addClass('ui-state-disabled');
			
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikhambyid&id='+window.id_edit).done(function(a){
				data=$.parseJSON(a)
				//alert(data.GiaBaoChoBN);
				var TenLoaiKham = data.TenLoaiKham;
				var MaVietTat = data.MaVietTat;
				var MaVietTat_BN = data.MaVietTat_BN; 
				var GiaBaoChoBN = data.GiaBaoChoBN; 
				var GiaThueNgoaiThucHien = data.GiaThueNgoaiThucHien; 
				var STT = data.STT; 
				var IsKetNoiLab=data.IsKetNoiLab;
				var CoLuuKQInRieng = data.CoLuuKQInRieng; 
				var Active=data.Active;
				var CoFormChucNangRieng=data.CoFormChucNangRieng;
			$("#TenLoaiKham").val(TenLoaiKham);
            $("#MaVietTat").val(MaVietTat);
            $("#MaVietTat_BN").val(MaVietTat_BN);
            $("#GiaBaoChoBN").val(GiaBaoChoBN);
            $("#GiaThueNgoaiThucHien").val(GiaThueNgoaiThucHien);
           	$("#STT").val(STT);
			
			
			
			if(CoFormChucNangRieng=="1"){
                $("#CoFormChucNangRieng").prop('checked',true);
            }else{
                 $("#CoFormChucNangRieng").prop('checked',false);
            }
			
			if(IsKetNoiLab=="1"){
                $("#IsKetNoiLab").prop('checked',true);
            }else{
                 $("#IsKetNoiLab").prop('checked',false);
            }
			if(CoLuuKQInRieng=="1"){
                $("#CoLuuKQInRieng").prop('checked',true);
            }else{
                 $("#CoLuuKQInRieng").prop('checked',false);
            }
			
			if(Active=="1"){
                $("#Active").prop('checked',true);
            }else{
                 $("#Active").prop('checked',false);
            }
			
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
	
	var lastsel; 		
			
jQuery(window).resize(function() {		 
	  number_textbox_demical("#STT");
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-180);
	}); 
     
	 $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: ($(window).height()/100 * parseFloat(99)).toFixed(0),
            width: ($(window).width()/100 * parseFloat(90)).toFixed(0),
            modal: true,
             open: function(event,ui){
               	$( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(99)).toFixed(0) );
                $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(99)).toFixed(0) );
               
            },
            buttons: {
                   
            Save: function() {
				//alert(oper);
                check_n();
				edit_button();
				savedRow = $('#rowed5').jqGrid("getGridParam", "savedRow");	
				/*
								if (savedRow && savedRow.length > 0) {
									if($('#'+savedRow[0].id+'_TenXetNghiem').val()!=''){
										jQuery("#rowed5").jqGrid('saveRow',savedRow[0].id);
									}else{
										$('#rowed5').jqGrid('delRowData',savedRow[0].id);
									}
								}*/
								
								$('#rowed5_ilsave').click();
								 $( this ).dialog( "close" );
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
				console.log(dataToSend);
               	dataToSend = jQuery.parseJSON(dataToSend);
                alertObject(dataToSend);
        
          		var check_null = new Array();
                check_null["TenLoaiKham"]=$.trim(dataToSend["TenLoaiKham"]);
                check_null["GiaBaoChoBN"]=$.trim(dataToSend["GiaBaoChoBN"]);
                               
};
function edit_button(){
	
		 $("#dialog-form").dialog("close");
                  $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_del_xn&oper=edit&hienmaloi=a&id='+window.id_edit+'&xetnghiemxoa='+window.xetnghiemxoa,dataToSend)
                  .done(function( response) {
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
	editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller',	
	serializeRowData: function (postdata) { 	
			//postdata.id_nhanvien=window.idnv;		
			//postdata.manv=window.manv;	
			postdata.id_lk=window.id_edit;				
            return postdata;			
		 },	
	
	onSelectRow: function(id){				
		window.id_xetnghiem=id;
		$("#xetnghiem_xoa").removeClass('ui-state-disabled');
		$("#xetnghiem_sua").removeClass('ui-state-disabled');
	},
    caption:"Thêm loại khám xét nghiệm"
        });
    jQuery("#rowed5").jqGrid('navGrid','#prowed5',{add: false,del:true,edit:false,search:false}, {}, {},myDelOptions);
    $("#rowed5").jqGrid('inlineNav', '#prowed5',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
	//===
	addParams: {
				keys:true,
                position: "last",
                addRowParams: {
					keys:true,                  
                    aftersavefunc: function(rowId, response,lastsel) {
						$('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xetnghiemts&id='+window.id_edit,datatype:'json'}).trigger('reloadGrid');
						//alert();
					
						
                    },
					oneditfunc: function(rowId) {	
					
						
					},	
                    afterrestorefunc: function(rowId) {	
											
                    }				 
                }
            	},	
	//====
         });
	$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Xóa", buttonicon: 'ui-icon-trash',id : 'xetnghiem_xoa',
            onClickButton: function() {
				//$('#rowed5').jqGrid('delRowData',window.id_xetnghiem);
				//alert(window.id_xetnghiem);
				$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_del_xn&oper=delxn&hienmaloi=a&ID_XetNghiem='+window.id_xetnghiem)
                  .done(function( response) {
                    temp = $.trim(response);   
					
                    if(temp==1){
                     	
                        tooltip_message("Xét nghiệm này đã dùng, bạn không thể xóa");                       
                    }else{  
							                                                             
							 tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
							 $('#rowed5').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_xetnghiemts&id='+window.id_edit,datatype:'json'}).trigger('reloadGrid');
							                    
                    };
                                     
                });
		
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
 

</script>