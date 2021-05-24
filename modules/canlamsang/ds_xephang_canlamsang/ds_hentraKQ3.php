<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<style type="text/css">
  #thongtin{
	width: 100%;
	height: 80px;
	background-color: #F7F5F1;
	border-radius: 4px;
	margin-bottom: 5px;	  
  }

  
  #lichhentra{
	height: 60px;
  }
  .datrahs{
	margin-left: 485px;
	margin-top: -20px;
	  
  }.nguoitra{
	margin-top: -21px;
	margin-left: 765px;
	  
  }.ngayhentra{
	margin-top: 20px;
	  
  }.nguoihen{
	margin-top: -22px;
	margin-left: 310px;
}
#prowed3{
	text-align: right;
	height: 37px;
	  
  }.tt{
	float: left;
	margin-left:5px;
  }.gc{
	float: right;

  }
 
   input{
	   text-align:center;
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
</style>
<body> 

<div id="dialog-form" >
 Bạn có muốn xóa ngày giờ trả kết quả?
</div>
<div id="dialog-form-2" >
Ngày giờ hẹn trả kết quả không được nhỏ hơn ngày giờ hiện tại
</div>
	 <div class=" ui-dialog ui-widget-content" id="panel_main" style="margin-top:7px; ">
			<div class="thongtinchinh" style="width:99%; margin-top:5px;margin-left:4px;">
				<div class=" ui-widget ui-widget-content ui-corner-all ui-resizable panel_form" >
					<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-5" class="ui-dialog-title">Cập nhật giờ hẹn trả kết quả</span>
    				</div>
    				<div class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 0px; max-height: none; height: 100%">
        				<div class="patient_info">       
        			</div>
                    <div class="ui-dialog-content ui-widget-content" style="width: auto; min-height: 0px; max-height: none; height: 100%; margin-top:20px">
                		<table width='1000px'border="1" style=" border: none; margin-left:5px; ">
			  				<tr>
								<td width="8%" style=" border: none; ">Ngày giờ dự kiến trả KQ:</td>
								<td width="11%" style=" border: none; "  align="right">
                    				<input disabled type="text" id="datepicker" style="width:100px;margin-left:5px"/><input disabled type="text" id="timepicker" style="width:60px;margin-left:5px"/>
                				</td>
				
								<td width="7%" style=" border: none; ">Đã trả hồ sơ vào lúc:</td>
								<td width="14%" style=" border: none; ">
                					<a id="clear1" class="ui-button ui-widget ui-state-default ui-button-icon-only  ui-corner-right" title="Xóa ngày giờ trả kết quả"   ><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span></a>
                					<input disabled type="text" id="datepicker1" style="width:100px;margin-left:5px"/><input disabled type="text" id="timepicker1" style="width:60px;margin-left:5px"/>
                    				<a id="get_datetime" class="ui-widget ui-state-default ui-button-icon-only  ui-corner-right" title="Lấy ngày giờ hiện tại" ><span class="ui-button-icon-primary ui-icon ui-icon-clock"></span></a>
                				</td>
								<td width="12%" style=" border: none;"><label id="nguoitra"></label></td>

			 			 	</tr>
			  				<tr>
                                <td style=" border: none; ">Ngày giờ hẹn trả KQ: </td>
               					<td style=" border: none; "  align="right">
                                	 <a id="clear2" class="ui-button ui-widget ui-state-default ui-button-icon-only  ui-corner-right " title="Xóa ngày giờ hẹn trả kết quả" ><span class="ui-icon ui-icon-closethick"></span></a>
                                <input disabled type="text" id="datepicker2" style="width:100px;margin-left:5px"/><input disabled type="text" id="timepicker2" style="width:60px;margin-left:5px"/>
                                </td>
                                <td style=" border: none;  " colspan="3"><label id="nguoihen"></label></td>
							</tr>
						</table>
                        <div style="margin-top:20px;margin-bottom:20px;padding-left:195px;display: block;">
                        <a  id="save" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left" >Lưu (F4)<span class="ui-icon ui-icon-disk" ></span></a>
                        <a  id="edit" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left "   >Sửa (F3)<span class="ui-icon ui-icon-pencil"></span></a>
                        <div style="display:inline-block;width:129px"></div>
                          <a  id="save2" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left" >Lưu (F8)<span class="ui-icon ui-icon-disk" ></span></a>
                        <a  id="edit2" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left "   >Sửa (F7)<span class="ui-icon ui-icon-pencil"></span></a>
                        <a  id="lichbacsy" class="ui-button ui-widget ui-state-default ui-corner-all  fm-button-icon-left "   > Lịch Bác sĩ<span class="ui-icon ui-icon-calculator"></span></a>
                        </div>
                       
            		</div>
                     <table id="rowed3"></table>     
				</div>
			</div>  
		</div>
     </div>
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
<?php /*?>	<?php 
  $data= new SQLServer;
  $params = array($_GET['idluotkham']);
  $store_name="{call Gd2_ThongTinLuotKham_SelectAllByID_LuotKham(?)}";
  $get=$data->query( $store_name,$params);
  $excute= new SQLServerResult($get);
  $tam= $excute->get_as_array();
  
  echo 'window.idluotkham='.$_GET['idluotkham'].';';
  echo 'window.loaidoituongkham="'.$tam[0]['LoaiDoiTuongKham'].'";';
  echo 'window.idbenhnhan='.$tam[0]['ID_BenhNhan'].';';
  ?><?php */?>
	//var idlk = <?php //echo($_GET["idluotkham"])?>;
	//alert(idlk);
	$('#save,#edit,#save2,#edit2,#lichbacsy,#clear1,#clear2,#get_datetime').button();	
	$('#clear1,#clear2,#get_datetime').removeClass("ui-button-text-only")
	$( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        Cancel: function() {
		  $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
          $( this ).dialog( "close" );
			},
			 "ok": function() {
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_trakq_update&ID_LuotKham='+rowData["ID_LuotKham"]+'&date_NgayGioTraKQ='+$("#datepicker1").val()+'&time_NgayGioTraKQ='+$("#timepicker1").val()+'&xoaID=1').done(function(data)
		{ 
			if ($.trim(data) == '') {
				tooltip_message("<?php get_text1("sua_thanhcong") ?>");
				$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
			}
			else {
				tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
			}

		});	
		$( this ).dialog( "close" );
		}
	  }
    });
 
   	$( "#dialog-form-2" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
       "Ok": function() {
		   $('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
          $( this ).dialog( "close" );
			}
	  }//button
	  
    });
//	
	
	
	
		//document.getElementById('save').style.disabled=true// ẩn nút save
		//$('#save').attr('disabled', true);
		load_select();
		shortcut_key();
  	
   		$("#datepicker1,#datepicker2,#datepicker").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat:  $.cookie("ngayJqueryUi"),
          
        });
		$.timeEntry.setDefaults({show24Hours: true});
		$('#timepicker1, #timepicker2,#timtepicker').timeEntry({timeSteps: [1, 1, 1]});	
		$.dateEntry.setDefaults({spinnerImage: ''});
		$("#datepicker1, #datepicker2,#datepicker").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
		$("#timepicker1, #timepicker2,#timtepicker").timeEntry();
	
		$("#clear1").bind("click", function(e) { 
			  	
			$('#datepicker1').val('');
			$('#timepicker1').val('');
	});	
	$("#clear2").bind("click", function(e) {     	
		$('#datepicker2').val('');
		$('#timepicker2').val('');
	});	
		
	
	$("#panel_main").css("height",jQuery(window).height());
	$("#panel_main").css("width",jQuery(window).width()-3);			 
	$("#panel_main").fadeIn(1000);
	$(window).resize(function() {
		$("#panel_main").css("height",jQuery(window).height());
		$("#panel_main").css("width",jQuery(window).width()-3);			
	})
	var lastsel; 	
	
	create_grid();
	shortcut_key();		
	
		jQuery(window).resize(function() {		 
	   $("#rowed3").setGridWidth($(window).width()-50);
	 $("#rowed3").setGridHeight(20); 
	});		//sesize co giãn window

	$("#lichbacsy" ).click(function() {
		//alert("Link");
	});
	
		$("#datepicker1").focus(function() {
			if ($("#datepicker1").val()=="")
  				$( "#timepicker1").val("00:01");
		});
	
		$( "#datepicker2").focus(function() {
			if ($("#datepicker2").val()=="")
  				$( "#timepicker2").val("00:01");
		});
	 edit();edit2();
	 save(); save2(); clear1(); clear2();
	 $('#save,#save2,#clear1,#clear2,#get_datetime').button("disable");
	
})
 
function create_grid(){	

	 $("#rowed3").jqGrid({
		  url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_hentrakq&idluotkham=257722',
		datatype: "json",	
		colNames:['Id lượt khám','Tên bệnh nhân','Ngày giờ hẹn trả KQ','Người hẹn trả kết quả','Ngày giờ trả kết quả','Người trả kết quả','Ngày giờ dự kiến trả KQ'],
		colModel:[
			{name:'ID_LuotKham',index:'ID_LuotKham',search:false, width:"5%", editable:false,align:'right',hidden:true}, 
			{name:'ID_BenhNhan',index:'ID_BenhNhan', width:"10%", editable:false,align:'left',hidden:true},
			{name: 'NgayGioHenTraKQ', index: 'NgayGioHenTraKQ', search: false, width: "10%", editable: true, align: 'center', hidden: false, edittype: "text"}, 
			{name:'ID_NguoiHenTraKQ',index:'ID_NguoiHenTraKQ', width:"10%", editable:true,editoptions: { value: hoten2},align:'left',hidden:false,edittype:"text",formatter:'select'},
			{name: 'NgayGioTraKQ', index: 'NgayGioTraKQ', search: false, width: "10%", editable: true, align: 'center', hidden: false, edittype: "text"}, 
			{name:'ID_NguoiTraKQ',index:'ID_NguoiTraKQ', width:"10%", editable:true,editoptions: { value: hoten},align:'left',hidden:false,edittype:"text",formatter:'select'},
			{name: 'NgayGioDuKienTraKQ', index: 'NgayGioDuKienTraKQ', search: false, width: "10%", editable: true, align: 'center', hidden: true, edittype: "text"}		
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
		
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
	
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		loadComplete: function(data) {	
			///grid_filter_enter("#rowed3") ,//enter: chuyen con tro sang o tiếp theo	
			ids = $('#rowed3').jqGrid('getDataIDs');    /// lấy data từ lưới, đổ vào textbox
			window.rowData = jQuery(this).getRowData(ids[0]);
			idbenhnhan= rowData["ID_BenhNhan"];
			//alert(idbenhnhan);
			if(rowData["NgayGioHenTraKQ"]!=""){
				var n = rowData["NgayGioHenTraKQ"].split(" ");
				$("#datepicker2").val(n[1]);
				$("#timepicker2").val(n[0]);
			};
			if(rowData["NgayGioDuKienTraKQ"]!=""){
				var n = rowData["NgayGioDuKienTraKQ"].split(" ");
				$("#datepicker").val(n[1]);
				$("#timepicker").val(n[0]);
			};
			if(rowData["NgayGioTraKQ"]!=""){
				var n = rowData["NgayGioTraKQ"].split(" ");
				$("#datepicker1").val(n[1]);
				if(n[0]=='00:00') {$("#timepicker1").val("");}
				else 
				{$("#timepicker1").val(n[0]);}
			};			
			var tam= hoten.split(";");
			for (i = 0; i <tam.length; i++) 
			{
   				check=tam[i].split(":");
				if(rowData["ID_NguoiTraKQ"]==check[0]) //alert(check[0]);
				 	$("#nguoitra").text("Người trả KQ: "+check[1]);
				if(rowData["ID_NguoiTraKQ"]=='')
					$("#nguoitra").text("");
				if(rowData["ID_NguoiHenTraKQ"]==check[0])
				 	$("#nguoihen").text("Người hẹn: "+check[1]);
				if(rowData["ID_NguoiHenTraKQ"]=='')
				 	$("#nguoihen").text('');
				//else $("#nguoihen").text('');
			}
		$.get( "pages.php?module=web_services&function=create_panel&action=index&id_benhnhan="+idbenhnhan, function( data ) {
		   $( ".patient_info" ).html( data );
		   $( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
		})
		},	  
		caption: ""
	});	
	  $("#rowed3").setGridWidth($(window).width()-50);
	 $("#rowed3").setGridHeight(40); 
	 $("#rowed3").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed3").attr("tabindex","1");
		//$("#gbox_rowed3").focus();	
		$("#gbox_rowed3").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed3").jqGrid('restoreRow', lastsel);
				 $("#rowed3").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	 
}

function load_select(){
	window.hoten = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_hovaten&action=index", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;	
	window.hoten2 = $.ajax({url: "pages.php?module=web_services&function=get_auto_edit_hovaten&action=index", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;		
}

function   edit(){
	
	$("#edit").bind("click", function(e) {    
	//console.log('a') 	
		$("#edit").button("disable");		
		$('#save,#clear2').button("enable");
		$("#datepicker2").removeAttr("disabled").focus();
		$("#timepicker2").removeAttr("disabled");
	});		
}

function  edit2(){
	
	$("#edit2").bind("click", function(e) {    
	//console.log('a') 	
		
		$("#edit2").button("disable");
		$('#save2,#clear1,#get_datetime').button("enable");
		$("#datepicker1").removeAttr("disabled").focus();
		$("#timepicker1").removeAttr("disabled");
		get_date_time();
	});		
}

function   save(){
		$("#save").bind("click", function(e) {  

				var date=($('#datepicker2').val()+" "+$('#timepicker2').val());
				date=convert_date(date);
				var today= new Date();
				//alert(date+"\n"+today);
				if ( $('#datepicker2').val()!=''&&date<today)
					
				
					$('#dialog-form-2').dialog('open');	
				else
				{
					$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_hentrakq_update&ID_LuotKham='+rowData["ID_LuotKham"]+'&date_NgayGioHenTraKQ='+$("#datepicker2").val()+'&time_NgayGioHenTraKQ='+$("#timepicker2").val()).done(function(data)
					{
						if ($.trim(data) == '') {
							tooltip_message("<?php get_text1("sua_thanhcong") ?>");
							$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
						}
						else {
						tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
						
						}
					});	
				}
				clear1();
				$("#edit").button("enable");		
				$('#save,#clear1,#clear2,#get_datetime').button("disable");
			})
}
/////////////////////////
function   save2(){
		$("#save2").bind("click", function(e) { 
			
				if($('#datepicker1').val()==''&&rowData['NgayGioTraKQ']!='')
					$('#dialog-form').dialog('open')
				else
					{
						$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_trakq_update&ID_LuotKham='+rowData["ID_LuotKham"]+'&date_NgayGioTraKQ='+$("#datepicker1").val()+'&time_NgayGioTraKQ='+$("#timepicker1").val()).done(function(data){ 
							if ($.trim(data) == '') {
								tooltip_message("<?php get_text1("sua_thanhcong") ?>");
								$('#rowed3').setGridParam({loadonce: false, datatype: "json"}).trigger('reloadGrid');
							}
							else {
								tooltip_message("<?php get_text1("sua_khongthanhcong") ?>");
							}
						});			
					}
				clear2();
				$("#edit2").button("enable");		
				$('#save2,#clear1,#get_datetime').button("disable");
			})
}
///////////////////////
function clear1()
{
		$("#datepicker2,#timepicker2").attr("disabled", "disabled");
}

function clear2()
{
		$("#datepicker1,#timepicker1").attr("disabled", "disabled");	
}

function get_date_time()
{
	$("#get_datetime").bind("click", function(e) { 
			var d = new Date();
			var curr_hour = d.getHours();
			var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
			var curr_time = curr_hour + ":" + curr_minute+ " ";	
			var dd = (d.getDate()<10?'0':'')+ d.getDate();
			var mm = d.getMonth()+1;//January is 0!`
			var yy= d.getFullYear().toString().substr(2,2);
			$('#datepicker1').val(dd+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+mm+'<?php echo $_SESSION["config_system"]["phancachngay"]?>'+yy);
			$('#timepicker1').val(curr_time);
			
			
		})
}

function shortcut_key(){
	jwerty.key('f3', false);jwerty.key('f4', false);jwerty.key('f7', false);jwerty.key('f8', false);
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f3',e)) {
				 $("#edit").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f4',e)) {
				 $("#save").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		
			if (jwerty.is('f7',e)) {
				 $("#edit2").trigger("click");				 
			}
		});
		$('body').bind('keydown', function (e) {		 
			if (jwerty.is('f8',e)) {
				 $("#save2").trigger("click");				 
			}
		});
} 

</script>