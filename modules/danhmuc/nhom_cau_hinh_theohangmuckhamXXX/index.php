<!-- author:Phan Nam -->
<style type="text/css">
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
        /*	border:1px solid #000;*/
        border:none;
        background:none;
        /*border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;*/
        outline:  none;
        text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);
        font-size:11px;
        height:17px!important;
        width:40px!important;
        text-decoration:underline;

        /*box-shadow:0px 0px 2px 1px #a0a0a0;*/
    }
    input[type=button].custom_button:focus{	 
        outline:  none;
    } 
    :focus {outline:none;}
    ::-moz-focus-inner {border:0;}
	span#hangmuckhamduocchon{
		margin-left: 10px;
   		margin-top: 22px;
	}span.ui-jqgrid-title{
		width:100%;
		}#n_menu{
		border-radius: 6px 6px 6px 6px;
		border: 1px solid #d4ccb0;
		height:40px;
		margin: 5px;
	}#luu{
		margin-left: 10px;
  		margin-top: 5px;
		}
</style>


<body> 

    <div id="panel_main" style="margin-top:10px;" >  
        <div class="left_col ui-widget-content ui-layout-center"> 
            <table id="rowed3" ></table>
        </div>
        <div class="ui-layout-east ui-widget-content right_col">   
       		<table id="rowed4" ></table>
            <div id='n_menu'>
           <!-- <a  id="luu" class="fm-button ui-state-default ui-corner-all "  > <span class="ui-button-text">Lưu [F10]</span></a>-->
            <a  id="luu" class="ui-button ui-widget ui-state-default ui-corner-all fm-button-icon-left ui-button-text-only " >
               Lưu [F10]<span class="ui-icon ui-icon-disk"></span>
                 </a>
            </div>
        </div>
    </div>
</body>
</html> 

<script type="text/javascript">
    jQuery(document).ready(function() {
        $("#luu").button();
        window.scrollPositiontop=0;
      window.scrollPositionleft=0;
        temp = jQuery(window).height() - 10;
        $("#panel_main").css("height", temp + "px");
        $("#panel_main").fadeIn(1000);
		load_select_tennhomcls();
        create_layout();
        create_grid();
        create_grid2();
        resize_control()
        // alert(powerXepHang_luoidangcho);
        $(window).resize(function() {
            temp = jQuery(window).height() - 10;
            $("#panel_main").css("height", temp + "px");
            resize_control();
        })
	$("#chitiet" ).hide();
	phanquyen();
	
	
	//f10 luu
	document.onkeydown = function(e) {
			if (e.keyCode === 121) {
				$("#luu").click();
				return false;
			}
		};
	
	$("#luu").click(function(){
        window.scrollPositiontop  = jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop();
        window.scrollPositionleft = jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollLeft();
         $("#luu").button('disable');
	   var gridData = jQuery("#rowed4").getRowData();
	   var postData = JSON.stringify(gridData);
	   postData='{"id":'+postData+'}';
	   postData=$.parseJSON(postData);
	  // ids = $('#rowed3').jqGrid('getDataIDs');
	   id = $('#rowed3').jqGrid('getGridParam', 'selrow');
		 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller',postData).done(function(data){
		$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&idphongban="+id}).trigger('reloadGrid');
		tooltip_message("Lưu dữ liệu thành công");
         $("#luu").button('enable');
		  })//$.post
		})//$("#bottom_luu")
	
	//$("#cb_rowed4").click(function()
	$('#cb_rowed4').click (function ()
		{
		ids = $('#rowed4').jqGrid('getDataIDs');
		if ($(this).is(':checked')) {
           
		   for(var i=0;i<ids.length;i++){
			   	$("#rowed4").jqGrid('setCell',ids[i],'events', 1);
			   }
		   
        }else{
			
			 for(var i=0;i<ids.length;i++){
			   	$("#rowed4").jqGrid('setCell',ids[i],'events', 0);
			   }
			}
	});
	
	
	
	
})
    var lastsel;


    function create_grid() {
        $("#rowed3").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhom',
            datatype: "json",
            colNames: ['ID_PhongBan', 'Tên phòng ban', 'Tầng'],
            colModel: [
                {name: 'ID_PhongBan', index: 'ID_PhongBan', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'TenPhongBan', index: 'TenPhongBan', search: true, width: "80%", editable: false, align: 'left', hidden: false},
				{name: 'Id_Tang', index: 'Id_Tang', search: true, width: "20%", editable: false, align: 'center', hidden: false},
               
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'ID_PhongBan',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            onSelectRow: function(id) {
				
			var rowData = jQuery(this).getRowData(id); 			
			 $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&idphongban="+id,groupingView: { groupCollapse : true}}).trigger('reloadGrid');
			  window.tennhom = rowData['TenPhongBan'];
			  
			  var caption= "Danh sách hạng mục khám của: " +window.tennhom+"<a style='float: right; margin-right: 2%; margin-top: 0px;' id='thugon' class='fm-button ui-state-default ui-corner-all'>Thu gọn</a> <a style='float: right; margin-right: 2%; margin-top: 0px;' id='chitiet' class='fm-button ui-state-default ui-corner-all'>Xem chi tiết</a> "
			// var caption= "Danh sách hạng mục khám của: " +window.tennhom+"<div id='n_bt2'> </div> "
				jQuery("#rowed4").jqGrid('setCaption', caption);
				
			$("#thugon" ).hide();	
			$("#thugon").click(function(){
				$("#chitiet" ).show();
				$("#thugon" ).hide();
				$("#hr_caption").width("96%");
				$("#rowed4").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
			})
			$("#chitiet").click(function(){
				$("#thugon" ).show();
				$("#chitiet" ).hide();
				$("#hr_caption").width("96%");
				$("#rowed4").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');
			})
			},
           
		    ondblClickRow: function(rowId, rowIndex, columnIndex) {
				
            },
			
            onRightClickRow: function(rowid, iRow, iCol, e) {

            },
            loadComplete: function(data) {
				grid_filter_enter("#rowed3");
			ids = $('#rowed3').jqGrid('getDataIDs');
			 $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:"pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham&idphongban="+ids[0],groupingView: { groupCollapse : true}}).trigger('reloadGrid');
			//$("#"+ids[1]).focus();
			jQuery('#rowed3').jqGrid("setSelection",ids[0], true);	
			jQuery('#'+ids[0]).focus();
			
            },
			caption: "Danh sách phòng ban"
        });
        //$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
        $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
		$("#rowed3").jqGrid('bindKeys', {});



    }
    function create_grid2()
    {

        mydata=[];
        $("#rowed4").jqGrid({ 
            data: mydata,
            datatype: "local",
            colNames: ['Nhom_CLS','ID loại khám (Loaikham_phongbanvl)', 'ID Phòng ban', 'Luu', 'events', 'ID_PhongBan','ID Nhóm CLS','ID loại khám', 'Tên hạng mục khám', 'Mã viết tắt', 'STT', 'sum'],
            colModel: [
                {name: 'Nhom_CLS', index: 'Nhom_CLS', summaryType: 'sum', search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'IDLoaiKham_LoaiKhamPhongBanVatLy', index: 'IDLoaiKham_LoaiKhamPhongBanVatLy', search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'IDPhongBan', index: 'IDPhongBan', search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'luu', index: 'luu', search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'events', index: 'events', search: true, width: "5%", editable: false, align: 'center', hidden: true},
				{name: 'ID_PhongBan', index: 'ID_PhongBan', search: true, width: "5%", editable: false, align: 'center', hidden: true},
				
                {name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: false, width: "0%", editable: false, align: 'left', hidden: true,formatter:'select',editoptions:{value: tennhomcls}},
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: true, width: "20%", editable: false, align: 'left', hidden: true},
				{name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "50%", editable: false, align: 'left', hidden: false},
                {name: 'MaVietTat', index: 'MaVietTat', search: true, width: "45%", editable: false, align: 'left', hidden: false},
				{name: 'STT', index: 'STT', search: true, width: "5%", editable: false, align: 'center', hidden: false},
                {name: 'sum', index: 'sum', hidden: true, summaryType: 'sum'},
				
            ],
			multiselect: true,
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
          
           
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            
			grouping:true, 
		  	groupingView : { 
			groupField : ['ID_NhomCLS'],
			groupDataSorted : true ,
			groupCollapse : true,
			groupColumnShow :[false],
			groupText : ["<input type='checkbox' class='grouping_{Nhom_CLS}_{1}' onchange='cbChanged(this.className, this);'><font color='#0000FF'> <b> {0} - {1}  hạng mục </font><font color='red'> (<span id='dachon'> {sum}</span> hạng mục đã chọn)</font></b>"]
		 	 },
			
            onRightClickRow: function(rowid, iRow, iCol, e) {

            

            },
			onCellSelect: function(rowid, icol, cellcontent, e) {
				// alert(rowid); 
				 var rowData = jQuery(this).getRowData(rowid);
				 if(rowData["events"]==0){
					 $("#rowed4").jqGrid('setCell',rowid,'events', 1);
					 
					 }else{
						 $("#rowed4").jqGrid('setCell',rowid,'events', 0);
						 }
				  
				 
			},
			onSelectRow: function(id) {
				//alert($("#jqg_rowed4_"+id).val());
				//var rowData = jQuery(this).getRowData(ids[i]); 
					//alert();
					//if(rowData["events"]!=""){
						
					//	}
            },
            loadComplete: function(data) {
				grid_filter_enter("#rowed4");
				var ids = $('#rowed4').jqGrid('getDataIDs');
				var groups = $(this).jqGrid("getGridParam", "groupingView").groups
                for (var i = 0; i < groups.length; i++) {
                    if(groups[i].cnt==groups[i].summary[1].v){
                       $(".grouping_"+groups[i].summary[0].v+"_"+groups[i].cnt).prop( "checked", true ); 
                    }
                }
				for(var i=0;i<ids.length;i++){
					var rowData = jQuery(this).getRowData(ids[i]); 
					//alert(ids[i]);
					if(rowData["IDLoaiKham_LoaiKhamPhongBanVatLy"]>0 && rowData["IDPhongBan"]>0){
						$("#jqg_rowed4_"+ids[i]).prop('checked',true);
						jQuery('#rowed4').jqGrid("setSelection",ids[i], true);	
						$("#rowed4").jqGrid('setCell',ids[i],'luu', 2);
						$("#rowed4").jqGrid('setCell',ids[i],'events', 1);
						
						
					}
				}
                jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
                jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollLeft(scrollPositionleft);
				
			
				

            },
			//caption: "Danh sách hạng mục khám<hr id='hr_caption' align='left' width='361%' > <span id='hangmuckhamduocchon'>Có xxx hạng mục khám được chọn</span>  <a style='float: right; margin-right: -259%; margin-top: 0px;' id='thugon' class='fm-button ui-state-default ui-corner-all'>Thu gọn</a> <a style='float: right; margin-right: -230%; margin-top: 0px;' id='chitiet' class='fm-button ui-state-default ui-corner-all'>Xem chi tiết</a>"

        });

        //$("#rowed4").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
		$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        
		$("#rowed4").jqGrid('bindKeys', {});
    }
  
    function create_layout() {
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: "75%"
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
                        , size: "25%"

                        , fxName: "drop"		// none, slide, drop, scale
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
        $("#rowed3").setGridWidth($(".left_col").width() - 11);
        $("#rowed3").setGridHeight($(".left_col").height() - 64);
        $("#rowed4").setGridWidth($(".right_col").width() - 11);
        $("#rowed4").setGridHeight($(".right_col").height() - 145);
    }   
function load_select_tennhomcls(){
	window.tennhomcls = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;	
	
}
function cbChanged (a,b){
    window.scrollPositiontop  = jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop();
    window.scrollPositionleft = jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollLeft();
    var rs = a.split("_");
     var id=rs[1]/rs[2];
    var tmp = $("#rowed4").jqGrid('getDataIDs'); 

    if($(b).is(':checked')==true){
        for(var i=0;i<tmp.length;i++){
            var rowData = $("#rowed4").getRowData(tmp[i]);
            if(rowData["Nhom_CLS"]==id){
                if($("#jqg_rowed4_"+tmp[i]).is(':checked')==false){
                    $("#rowed4").jqGrid("setSelection",tmp[i], true);
                    $("#rowed4").jqGrid('setCell',tmp[i],'events', 1);
                }
            }
        }
        jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
        jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollLeft(scrollPositionleft)
    }else{
        for(var i=0;i<tmp.length;i++){
            var rowData = $("#rowed4").getRowData(tmp[i]);
            if(rowData["Nhom_CLS"]==id){
                if($("#jqg_rowed4_"+tmp[i]).is(':checked')==true){
                   $("#rowed4").jqGrid("setSelection",tmp[i], false);
                   $("#rowed4").jqGrid('setCell',tmp[i],'events', 0);
                }
            }
            jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollTop(scrollPositiontop);
            jQuery("#rowed4").closest(".ui-jqgrid-bdiv").scrollLeft(scrollPositionleft)
        }
        
    }

}
</script>

