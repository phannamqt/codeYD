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
</style>

<html>
<body> 
	 
         <div class="ui-layout-center left_col ui-widget-content"> 
            <table id="rowed3" >
            </table>   
             <div id="prowed3"></div>
         </div>    
         <div class="ui-layout-east ui-widget-content right_col"> 
         <div > 
         <table id="rowed4" >
         </table>
           <div id="prowed4"></div>
         </div>
     
</body>
</html> 

<script type="text/javascript">
<?php
echo ' window.idbenhnhan ='.$_GET['idbenhnhan'].';';
echo ' window.iduser ='.$_SESSION['user']['id_user'].';';
?>

jQuery(document).ready(function() {	 	
	window.nickname=	 $.ajax({                       
                        url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_Nhanvien&id=ID_Nhanvien&name=NickName",
                                               
                        async:false                       
                    }).responseText;
					window.luotkham=	 $.ajax({                       
                        url: "pages.php?module=web_services&function=get_custom_store&action=index&store=ThongTinLuotKham_LayLuotKhamMoiNhatCuaBenhNhan&term="+window.idbenhnhan+"&status=2&tables=ThongTinLuotKham&id=ID_LuotKham&name=ID_TrangThai",
                                               
                        async:false                       
                    }).responseText;
	window.lk=window.luotkham.split(';')


 window.Mavuviec = $.ajax({url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tensuco', async: false, success: function(data, result) {
                if (!result)
                    alert('Không load được danh mục vụ việc');
            }}).responseText;
    window.tensuco = ":;" + window.Mavuviec;

        create_layout();
        create_grid();
        create_grid2();
        $('.ui-layout-east,.ui-layout-center').bind('resize', function() {
            $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
			$("#rowed3 ").setGridHeight($(".left_col").height() -100);
            $("#rowed4 ").setGridWidth($(".right_col").width() - 4);	
			$("#rowed4 ").setGridHeight($(".left_col").height() -100);		
        }).trigger('resize');
     
    })

    var lastsel;
    function create_grid() {
		var d =new Date();
        $("#rowed3").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ghichubenhnhan&idbenhnhan='+window.idbenhnhan,
            datatype: "json",
            colNames: ['Người ghi chú', 'Ngày ghi chú','Nội dung'],
            colModel: [
                {name: 'nguoighichu', index: 'nguoighichu', search: false, width: "20%", editable: false, align: 'left', hidden: false,formatter: "select",editoptions:{value:nickname,defaultValue: <?=$_SESSION['user']['id_user']?>}},
                {name: 'ngayghichu', index: 'ngayghichu', search: false, width: "20%", editable: false, align: 'left', hidden: false, sorttype: "date",formatter: "date", formatoptions: {srcformat : 'Y-m-d H:i', newformat: "H:i d-m-Y" },editoptions:{defaultValue:d }},
               	 {name: 'noidung', index: 'noidung',editrules:{required:true}, search: false, width: "60%", editable: true, align: 'left', hidden: false},
                
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            rowNum: 1000,
            rowList: [],
			pginput:false,
			pgbuttons:false,
            pager: '#prowed3',
            sortname: 'NickName',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
			sortorder: "desc",
			editurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&idbenhnhan='+window.idbenhnhan,
            serializeRowData: function(postdata) {
                jQuery("#rowed3").trigger("reloadGrid");
                return postdata;
            },
            onSelectRow: function(id) {
				var nguoighichu = $("#rowed3").jqGrid('getCell', id, 'nguoighichu');
				if(iduser!=nguoighichu){					
					$("#rowed3_iledit").addClass('ui-state-disabled');
					$("#del_rowed3").addClass('ui-state-disabled');		
				}else{
					$("#rowed3_iledit").removeClass('ui-state-disabled');	
					$("#del_rowed3").removeClass('ui-state-disabled');	
				}
			  },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $("#rowed3_iledit .ui-icon-pencil").trigger('click');
				
            },
            loadComplete: function(data) {
				},
            caption: "Ghi chú BN"
        });
       	    $("#rowed3").jqGrid('navGrid',"#prowed3",{add: false,del:true,edit:false,search:false,refresh:false},
			{},
			{},
			{reloadAfterSubmit:true,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==1){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
															
							};						
							return [success,new_id] ;
				},
				beforeShowForm: function(formid) {					 
					 canhgiua_del(formid);					 
				},		
				
					}//del
			
			); 
				$("#rowed3").jqGrid('inlineNav', '#prowed3', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
                mtype: 'post',			
                addRowParams: {
					keys:true,					
                    oneditfunc: function(rowId) {	
					$("#rowed3").jqGrid('unbindKeys');
					},
                    aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {
						

                        } else {
							$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
								$("#rowed3_iledit .ui-icon-pencil").click();				
							} } );
 							
						        $('#rowed3').focus();	      
                        } 
                    },
                    afterrestorefunc: function() {
						$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#rowed3_iledit .ui-icon-pencil").click();				
						} } );
						 $('#rowed3').focus(); 
                    },					 
                }
            	},	
            editParams: {
				keys:true,			
                oneditfunc: function(rowId) {			
				$("#rowed3").jqGrid('unbindKeys');				 
                },
                aftersavefunc: function(rowId, response) {	
				if (response.responseText == 1) {
                        } else {
							$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
								$("#rowed3_iledit .ui-icon-pencil").click();				
							} } );	
							      $('#rowed3').focus();	      
                        } 
                },
                afterrestorefunc: function() {
					$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#rowed3_iledit .ui-icon-pencil").click();				
						} } );
						 $('#rowed3').focus(); 
                }
			}
       	 });
        $("#rowed3").setGridWidth($(window).width() - 100);
        $("#rowed3").setGridHeight($(window).height()  - 400);
		$("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#rowed3_iledit .ui-icon-pencil").click();				
			} } );
		
		 
    }
    function create_grid2()
    {
		var d =new Date();
        $("#rowed4").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ghichuluotkham&idbenhnhan='+window.idbenhnhan,
            datatype: "json",
            colNames: ['Tên form','Người ghi chú','Ngày ghi chú','Nội dung','Báo cáo'],
            colModel: [
				{name: 'Caption', index: 'Caption', search: false, width: "80%", editable: false, align: 'left', hidden: true}, 
				{name: 'ID_NhanVien', index: 'ID_NhanVien', search: false, width: "20%", editable: false, align: 'left',formatter: "select",editoptions:{value:nickname, defaultValue: <?=$_SESSION['user']['id_user']?>}}, 
				{name:'ngay',index:'ngay',search:false, width:"20%", editable:false,align:'center', sorttype: "date",formatter: "date", formatoptions: {srcformat : 'Y-m-d H:i', newformat: "H:i d-m-Y" },editoptions:{defaultValue:d }},
                {name: 'ghichu', index: 'ghichu', search: false, width: "40%",editrules:{required:true}, editable: true, align: 'left', hidden: false}, 				
                {name: 'Id_Suco', index: 'Id_Suco', search: false, width: "20%", editable: true, align: 'left', formatter: "select", edittype: "select", hidden: false, editoptions: {value: tensuco}},
                		   
                    
            ],
            loadonce: false,			
            scroll: false,
            modal: true,
            rowNum: 1000,
			pginput:false,
			editurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&lk='+window.lk[0],
			pgbuttons:false,
            rowList: [],
            pager: '#prowed4',
            sortname: 'Caption',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            shrinkToFit: true,
            //hoverrows:false,
			grouping:true,
			serializeRowData: function(postdata) {
                jQuery("#rowed4").trigger("reloadGrid");
                return postdata;
            },
			groupingView : 
			{
				groupField : ['ngay'],
				groupCollapse : false,
				groupColumnShow : [true],
				groupText: ['<b>Thời gian đến khám {0}</b>'],
			},
			onSelectRow: function(id) {   
				var nguoighichu = $("#rowed4").jqGrid('getCell', id, 'ID_NhanVien');
				if(iduser!=nguoighichu){					
					$("#rowed4_iledit").addClass('ui-state-disabled');	
					$("#del_rowed4").addClass('ui-state-disabled');	
				}else{
					$("#rowed4_iledit").removeClass('ui-state-disabled');	
					$("#del_rowed4").removeClass('ui-state-disabled');	
				}
            },          
            sortorder: "desc",	
			 ondblClickRow: function(rowId, rowIndex, columnIndex) {
                $("#rowed4_iledit .ui-icon-pencil").trigger('click');
				
            },
			loadComplete: function(data) {
			luotkham1=	window.luotkham.split(';')
			
				if(luotkham1[1]=='HuyXepHang'||$.trim(window.luotkham)==''){
					$("#rowed4_iledit").addClass('ui-state-disabled');	
					$("#rowed4_iladd").addClass('ui-state-disabled');	
					$("#del_rowed4").addClass('ui-state-disabled');	
				}
				
		    },
            caption: "Ghi chú lượt khám",		
   		
        });
		
			$("#rowed4").jqGrid('navGrid',"#prowed4",{add: false,del:true,edit:false,search:false,refresh:false},
			{},
			{},
			{}//del
			); 
			
			$("#rowed4").jqGrid('inlineNav', '#prowed4', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
				keys:true,
                position: "last",
                mtype: 'post',			
                addRowParams: {
					keys:true,					
                    oneditfunc: function(rowId) {	
					$("#rowed4").jqGrid('unbindKeys');
					},
                    aftersavefunc: function(rowId, response,lastsel) {
						if (response.responseText == 1) {
						

                        } else {
							$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
								$("#prowed4 .ui-icon-pencil").click();				
							} } );
 							
						        $('#rowed4').focus();	      
                        } 
                    },
                    afterrestorefunc: function() {
						$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed4 .ui-icon-pencil").click();				
						} } );
						 $('#rowed4').focus(); 
                    },					 
                }
            	},	
            editParams: {
				keys:true,			
                oneditfunc: function(rowId) {			
				$("#rowed4").jqGrid('unbindKeys');				 
                },
                aftersavefunc: function(rowId, response) {	
				if (response.responseText == 1) {
                        } else {
							$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
								$("#prowed4 .ui-icon-pencil").click();				
							} } );	
							      $('#rowed4').focus();	      
                        } 
                },
                afterrestorefunc: function() {
					$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
							$("#prowed4 .ui-icon-pencil").click();				
						} } );
						 $('#rowed4').focus(); 
                }
			}
       	 });
        $("#rowed4").setGridWidth($(window).width() - 100);
        $("#rowed4").setGridHeight($(window).height()  - 400);
		$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
					$("#rowed4_iledit .ui-icon-pencil").click();				
			} } );
		
		 
    }
 
    function create_layout() {
        $('body').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: 750
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
                   $("#rowed4").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4").setGridWidth($(".right_col").width() - 4);

                }

            }
            , center: {
                resizable: true
                        , size: 150

                        , fxName: "drop"		// none, slide, drop, scale
                        , fxSpeed_open: 450
                        , fxSpeed_close: 450
                        , fxSettings_open: {easing: "easeInQuint"}
                , fxSettings_close: {easing: "easeOutQuint"}

                , onresize_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4,#rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onopen_end: function() {
                    $("#rowed3 ").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);

                }
                , onclose_end: function() {
                    $("#rowed3").setGridWidth($(".left_col").width() - 4);
                    $("#rowed4, #rowed5").setGridWidth($(".right_col").width() - 4);


                }
            }
		
        });
		
    }

function savepermission(){
	//boot chuoi tao mảng json
	 phancach="";
	 var localdataToSend='{"id":[';
	  ids=$('#rowed5').jqGrid('getDataIDs');	
				for(i=0;i<ids.length;i++){		
				var rowData = jQuery('#rowed5').getRowData(ids[i]);					 			 
				localdataToSend = localdataToSend+''+phancach+'"'+rowData['id_nvacesss']+'"';
						phancach=","
		 			};
	 localdataToSend=localdataToSend+''+'],"id_control":[';
	 id_control= jQuery("#rowed5").jqGrid('getGridParam','selarrrow');
	// id_nhanvien= jQuery("#rowed3").jqGrid('getGridParam','selrow');
	 
	 
	 localdataToSend = localdataToSend+''+id_control;
	 localdataToSend  = localdataToSend+'],"id_nhanvien":'+id_nhanvien+'}'
	//alert (id_parent);
	//Tạo mảng thành object 
	localdataToSend = jQuery.parseJSON(localdataToSend)
	$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller',
	 	localdataToSend).done(function(data) 
		{
			id_parent= jQuery("#rowed4").jqGrid('getGridParam','selrow');
		  //  alert (id_parent);
          
		  $('#rowed4').trigger('reloadGrid',id_parent);	
		  // alert (id_parent);
		  $('#rowed5').trigger('reloadGrid');	 
		  
	
		 // alert ("Lưu dữ liệu thành công.");
		
		  
		}	 
		  );
		  	  
	

}
		

</script>