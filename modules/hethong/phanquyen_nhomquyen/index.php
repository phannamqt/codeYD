<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
	/* tu dong xun dong trong 1 o*/
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
    .right_col{
        background:#FFF;
    }
	.ui-jqgrid-bdiv
	{
		height:500px;
	}
</style>


<body> 

     <div class="ui-layout-center left_col"> 
        <table id="rowed3" >
         <div id="prowed3"></div>   
        
        </table>   
         
     </div>    
	 
     <div class="ui-layout-east right_col">     
     
       	<div > 
             <table id="rowed5" >
             <div id="prowed5"></div>   
             </table>
          </div>
     	 <div > 
           <table id="rowed4" >
             <div id="prowed4"></div>   
             </table>
          </div>
    
         
     
     </div>
     
     
             

</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {	
		
		load_phong_ban();
        create_layout();
        create_grid();              
		create_grid2(); 
		
				
		$('#gbox_rowed4 .ui-search-table').find(':input[type=text]').each(function(){  
			$("#"+this.id).focusin(function(){   	
				$('#rowed5').setGridParam({loadonce: true}).trigger('reloadGrid');
			});        
		});
		$('.ui-layout-east,.ui-layout-center').bind('resize', function() {
		$("#rowed3 ").setGridWidth($(".left_col").width() - 4);
		$("#rowed3 ").setGridHeight($(".left_col").height() -100);
		$("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);	
			
		}).trigger('resize');
		$("#rowed5").setGridHeight($(".right_col").height() -85);
		$("#rowed4 ").setGridHeight($(".right_col").height() -($(".left_col").height() -160));
		

    })

    var lastsel;
    function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',
		datatype: "json",	
		colNames:['Nhóm Người Dùng','Mô Tả'],
    	colModel:[		
  		{name:'TenNhomQuyen',index:'TenNhomQuyen', width:"2%",editrules: {required:true}, editable:true,align:'left',hidden:false,search: false}, 		
		{name:'MoTa',index:'MoTa', editrules: {required:true},width:"3%", editable:true,align:'left',hidden:false,search: false}, 		
				 
   	],	
		loadonce: false,
		scroll: false,		 
		modal:true,	 	 
		rowNum: 1000,
		rowList:[],
		pginput:false,
		pgbuttons:false,
		pager: '#prowed3',
		sortname: 'ID_NhomQuyen',
		height:100,
		width:100,
		viewrecords: false,	
		ignoreCase:true,		

		serializeRowData: function (postdata) { 		 	
			
		},
		onSelectRow: function(id){	
						
	    id_nhomquyen=id;				
		$("#rowed5").jqGrid('setGridParam',{datatype: "json",url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_quyen&id_nhomquyen="+id_nhomquyen}).trigger('reloadGrid');	
		$("#rowed4").jqGrid('setGridParam',{datatype: "json",url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_button&id="+0+"&id_nhomquyen="+0}).trigger('reloadGrid');						 
			var myGrid = $('#rowed3'),
			selRowId = myGrid.jqGrid ('getGridParam', 'selrow'),
			celValue = myGrid.jqGrid ('getCell', selRowId, 'TenNhomQuyen');
			celValue = "Danh sách quyền nhóm: " + celValue;					
			$('#rowed5').jqGrid('setCaption', celValue);			
		//	$("#rowed4").jqGrid("clearGridData", true);				
		
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
		
		},
	  
		caption: "Danh mục nhóm quyền"
	});

	
					
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"],addtext: 'Thêm mới (F6)',edittext: 'Sửa (F7)',
    deltext: 'Xóa (F8)', edit: permission["edit"], del: permission["delete"], search: permission["search"],search:false, refresh: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true,},	
	
	//Sửa
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="Sửa dữ liệu không thành công";													
					}else{
						tooltip_message("Sửa dữ liệu thành công");
						var success=true;	
						var new_id="Sửa dữ liệu thành công";								
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid)								  
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);	
					autocompleted_combobox("#parent");					
					autocompleted_combobox("#ID_Form");
					autocompleted_combobox("#OpenType");							 
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");				 
					if(temp[0]==1){
						var success=false;
						var new_id="Lưu dữ liệu không thành công";													
					}else{
						tooltip_message("Lưu dữ liệu thành công");						
						var success=true;	
						var new_id="Lưu dữ liệu thành công";
						//load_phongban_cha()
													
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {					
					$("#rowed3").trigger("reloadGrid");						
					
				},
				beforeSubmit : function(postdata, formid){
					if (typeof(window.id_rowed3)=='undefined'){
						 window.id_rowed3=1;
					}
					var success=true;
					var new_id="";
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {					 
					 canhgiua(formid);					 
				},									 
			 	afterShowForm : function (formid) {
								xuongdong(formid)
								lendong(formid)	
								autocompleted_combobox("#parent");	 							
								autocompleted_combobox("#ID_Form");
								autocompleted_combobox("#OpenType");
												
					
			 	},
			
				
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");
					
				}
		}, // add options		
	
				  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',navkeys : [ true, 38, 40 ],
		closeOnEscape : true,	
				beforeShowForm : function(formid) {canhgiua_del(formid);}	,
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="Xóa liệu không thành công";													
							}else{
								tooltip_message("Xóa dữ liệu thành công");
								var success=true;	
								var new_id="Xóa dữ liệu thành công";
																
							};						
							return [success,new_id] ;
				},
				
				
		}, // del options
		
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_control',navkeys : [ true, 38, 40 ],closeOnEscape : true,
					
		} // search options						 
							  
	);	 	
	
			

	//$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});


	$("#rowed3").setGridWidth($(window).width()-20);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_loai_lich").height()-105);
	$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		})
		 
		 
		
};
  
    function create_grid3()
    {
		window.status=0;
		var mydata=[];
        $("#rowed5").jqGrid({
            data:mydata,
            datatype: "local",
            colNames:['Tên nhóm quyền','Parent','Kieu Control','ID','ID_Control'],
            colModel: [			
				{name: 'Caption', index: 'Caption', search: false, width: "10%", editable: false, align: 'left', hidden: false},				
               	{name:'ID_Parent',index:'ID_Parent',search:true, width:"2%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:true,editoptions:{value:phongban}},							
				{name: 'KieuControl', index: 'KieuControl', search: true, width: "20%", editable: false, align: 'left', hidden: false}, 	
				{name: 'ID', index: 'ID', search: false, width: "2%", editable: false, align: 'left', hidden: true},	
				{name: 'ID_Control', index: 'ID', search: false, width: "2%", editable: false, align: 'left', hidden: true},			
               
            ],
            loadonce: false,
            scroll: false,
            modal: true,
			rowNum: 1000,
			gridview: true,     
		    pginput:false,
			pgbuttons:false,
            pager: '#prowed5',
            sortname: 'Caption',
            height: 100,
            width: 100,      
            ignoreCase: true,
            shrinkToFit: true,			
			grouping:true,
			multiselect: true,			
			groupingView : 
			{
				groupField : ['ID_Parent'],
				groupCollapse : false,
				groupColumnShow : [false]
			},
           
            sortorder: "desc",
            caption: "Danh sách quyền nhóm:",
			
			loadComplete: function(data) {			
		
				 ids=$('#rowed5').jqGrid('getDataIDs');				
				 for(i=0;i<ids.length;i++){		
				 var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
							if(rowData['Disable']==1){
								 $('#rowed5').jqGrid('setSelection', ids[i]);
					}					   
				}
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
					if(rowData['ID']!=0){
						 $('#rowed5').jqGrid('setSelection', ids[i]);
					}	
				}
				
		 },
        });
		
		
		$("#rowed5").jqGrid('navGrid',"#prowed5",{add: true, edit: false, del: false,addtext:"Lưu", search:false,refresh:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true ,
		addfunc: function() 
		{
			//$("#add_rowed4").addClass('ui-state-disabled');		 
		    savepermission();
		  
		}
		
		}); //options	
		$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Phân quyền cho nút nhóm quyền", buttonicon: '',	
		onClickButton: function() {
				
				 $("#rowed5").jqGrid('GridUnload');					 
			      create_grid1();
				  $("#rowed5 ").setGridHeight($(".left_col").height() -350);
				  $("#rowed5").setGridWidth($(".right_col").width() - 4);	
				  $('#gview_rowed4').show(100);
				  $('#prowed4').show(100);		
				
				  $("#rowed3 #"+id_nhomquyen).click();
					$("#rowed5").jqGrid('setGridParam',{datatype: "json",url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_quyen&id_nhomquyen="+id_nhomquyen}).trigger('reloadGrid');	
				  
				  
            },
            title: "Phân quyền cho nút nhóm quyền",
            position: "last"
    });
	
       $("#rowed5").setGridWidth($(window).width() - 400);
      $("#rowed5").setGridHeight($(window).height() - $("#kha").height()-350);

    }	
	
	 function create_grid1()
    {
		window.status=1;
		var mydata=[];
        $("#rowed5").jqGrid({
            data:mydata,
            datatype: "local",
            colNames:['Tên nhóm quyền','Parent','Kieu Control','ID','ID_Control'],
            colModel: [			
				{name: 'Caption', index: 'Caption', search: true, width: "10%", editable: false, align: 'left', hidden: false},				
               	{name:'ID_Parent',index:'ID_Parent',search:true, width:"2%", editable:true,align:'center',edittype:"select",formatter:"select",hidden:true,editoptions:{value:phongban}},							
				{name: 'KieuControl', index: 'KieuControl', search: true, width: "20%", editable: false, align: 'left', hidden: false}, 	
				{name: 'ID', index: 'ID', search: true, width: "2%", editable: false, align: 'left', hidden: true},	
				{name: 'ID_Control', index: 'ID', search: true, width: "2%", editable: false, align: 'left', hidden: true},			
               
            ],
            loadonce: true,
            scroll: false,
            modal: true,
			rowNum: 1000,
			gridview: true,     
		    pginput:false,
			pgbuttons:false,
            pager: '#prowed5',
            sortname: 'Caption',
            height: 100,
            width: 100,      
            ignoreCase: true,
            shrinkToFit: true,
			multiselect: false,
			grouping:true,				
			groupingView : 
			{
				groupField : ['ID_Parent'],
				groupCollapse : false,
				groupColumnShow : [false]
			},
           
            sortorder: "desc",     	
			onSelectRow: function(id){		
			id_nhomquyen=$('#rowed3').jqGrid('getGridParam', 'selrow');				
			$("#rowed4").jqGrid('setGridParam',{datatype: "json",url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_button&id="+id+"&id_nhomquyen="+id_nhomquyen}).trigger('reloadGrid');		
					
			celValue = $('#rowed5').jqGrid ('getCell', id, 'Caption');				
			celValue = "Danh sách quyền menu: " + celValue;					
			$('#rowed4').jqGrid('setCaption', celValue);	

			
		
		},	
			
			loadComplete: function(data) {			
			
				 ids=$('#rowed5').jqGrid('getDataIDs');				
				 for(i=0;i<ids.length;i++){		
				 var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
							if(rowData['Disable']==1){
								 $('#rowed5').jqGrid('setSelection', ids[i]);
					}					   
				}
								
		 },
        });
		
		
		$("#rowed5").jqGrid('navGrid',"#prowed5",{add: false, edit: false, del: false,addtext:"Lưu", search:false,refresh:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true ,
		addfunc: function() 
		{
			//$("#add_rowed4").addClass('ui-state-disabled');		 
		    savepermission();
		  
		}
		
		}); //options		
	
$("#rowed5").jqGrid('navButtonAdd', '#prowed5', {caption: "Phân quyền cho nhóm quyền", buttonicon: '',	
		onClickButton: function() {
				
			//	 $("#rowed5").jqGrid('GridUnload');				
				 $("#rowed5").jqGrid('GridUnload');	 
				   create_grid3();
				   	$("#rowed5 ").setGridHeight($(".left_col").height() -100);
          			 $("#rowed5").setGridWidth($(".right_col").width() - 4);	
				  $('#gview_rowed4').hide(100);
				  $('#prowed4').hide(100);		
				 
				  $("#rowed3 #"+id_nhomquyen).click();
					$("#rowed5").jqGrid('setGridParam',{datatype: "json",url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhom_quyen&id_nhomquyen="+id_nhomquyen}).trigger('reloadGrid');	
				  
				  
            },
            title: "Phân quyền cho nhóm quyền",
            position: "last"
    });
		
	  $("#rowed5").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
      $("#rowed5").setGridWidth($(window).width() - 400);
      $("#rowed5").setGridHeight($(window).height() - $("#kha").height()-350);

    }	
	 function create_grid2()
    {
         $("#rowed4").jqGrid({
            url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_button&id="+id+"&id_nhomquyen="+id_nhomquyen',		
            datatype: "json",
            colNames: ['Tên nút','Kiểu Control','Tên diễn giải',''],
            colModel: [
			
                {name: 'TenControl', index: 'TenControl', search: false, width: "15%", editable: false, align: 'left', hidden: false},			
				{name: 'KieuControl', index: 'KieuControl', search: false, width: "10%", editable: false, align: 'left', hidden: false}, 
				{name: 'Caption', index: 'Caption', search: false, width: "20%", editable: false, align: 'left', hidden: false},				
				{name: 'ID', index: 'ID', search: false, width: "2%", editable: false, align: 'left', hidden: true},
				
               
            ],
            loadonce: true,
            scroll: false,
            modal: true,
			gridview: true,          
		    pginput:false,
			pgbuttons:false,
            pager: '#prowed4',
            sortname: 'TenControl',
            height: 100,
            width: 100,    
			rowNum: 1000,
            ignoreCase: true,
            shrinkToFit: true,
			multiselect: true,           
            sortorder: "desc",
            caption: "Phân quyền button cho nhóm quyền:",
			loadComplete: function(data) {
				
				
				
				
				$('#rowed4').setGridParam({loadonce: true}).trigger('reloadGrid');		
				ids=$('#rowed4').jqGrid('getDataIDs');				
				 for(i=0;i<ids.length;i++){		
				 var rowData = jQuery('#rowed4').getRowData(ids[i]);					 			 
							if(rowData['Disable']==1){
								 $('#rowed4').jqGrid('setSelection', ids[i]);
					}					   
				}
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed4').getRowData(ids[i]);		
				
				alertObject(data);				 			 
					if(rowData['ID']!=0){
						 $('#rowed4').jqGrid('setSelection', ids[i]);
					}	
				}
				
				
		 },
        });
		
		
		$("#rowed4").jqGrid('navGrid',"#prowed4",{add: true, edit: false, del: false,addtext:"Lưu", search:false,refresh:false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true ,
		addfunc: function() 
		{
		 savebutton();		  
		}
		
		}); //options		
		
		
       $("#rowed4").setGridWidth($(window).width() - 100);
      $("#rowed4").setGridHeight($(window).height() - $("#kha").height()-390);

    }	
	
    function create_layout() {
        $('body').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: 900
                        , spacing_closed: 27
                        , togglerLength_closed: 85
                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , spacing_closed:		27
                        , togglerLength_closed:	85
                        , togglerAlign_closed: "center"
                        , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
                        , togglerTip_closed: "Open & Pin Menu"
                        , sliderTip: "Slide Open Menu"
                        , slideTrigger_open: "mouseover"
                        , fxSettings_close: {easing: "easeOutQuint"}
                , onresize_end: function() {
                   $("#rowed3 ").setGridWidth($(".left_col").width() - 4);			
                   $("#rowed5,#rowed4").setGridWidth($(".right_col").width() - 400);

                }
                , onopen_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5, #rowed4").setGridWidth($(".right_col").width() - 400);

                }
                , onclose_end: function() {
                    $("#rowed3").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4,#rowed5").setGridWidth($(".right_col").width() - 400);

                }

            }
            , center: {
                resizable: true
                        , size: 700

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5,#rowed4").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3").setGridWidth($(".left_col").width() - 4);
                    $("#rowed5, #rowed4").setGridWidth($(".right_col").width() - 4);


                }
            }
		
        });
		
    }
	
function savepermission(){
	//Post toàn bộ rowed5
	var tam=jQuery("#rowed5").jqGrid('getRowData');
	tam=JSON.stringify(tam) ;
	selRowIds = jQuery("#rowed5").jqGrid ('getGridParam', 'selarrrow').join();	
	tam='{"id":'+tam+'}';
	tam=jQuery.parseJSON(tam);
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=save_quyen&id_nhomquyen='+id_nhomquyen+'&id_control='+selRowIds+'');
	 tooltip_message("Lưu dữ liệu thành công");
	
}
function savebutton(){
	//Post toàn bộ rowed5
	var tam=jQuery("#rowed4").jqGrid('getRowData');
	tam=JSON.stringify(tam) ;
	selRowIds = jQuery("#rowed4").jqGrid ('getGridParam', 'selarrrow');	
	id_parent=$('#rowed5').jqGrid('getGridParam', 'selrow');
	tam='{"id":'+tam+'}';
	tam=jQuery.parseJSON(tam);
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=save_button&id_nhomquyen='+id_nhomquyen+'&id_parent='+id_parent+'&id='+selRowIds+'');
	tooltip_message("Lưu dữ liệu thành công");
	
}

function load_phong_ban(){
	window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_DM_Control&id=ID_Control&name=Caption', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
	
		$("#rowed4").setColProp('ID_Parent', { editoptions: { value: phongban} });		
		 create_grid3();
		
}

	
</script>