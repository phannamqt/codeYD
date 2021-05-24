<style type="text/css">
  #thongtin, #hanhdong{
	width: 1000px;
	height: 80px;
	background-color: #F7F5F1;
	border-radius: 4px;
	margin-bottom: 5px;
	  
  }
  .datrahs{
	margin-top: -28px;
	margin-left: 485px;
	  
  }.nguoitra{
	margin-top: -21px;
	margin-left: 765px;
	  
  }.ngayhentra{
	margin-top: 20px;
	  
  }.nguoihen{
	margin-top: -22px;
	margin-left: 310px;
	  
  }#input_1{
	margin-left: 10px;
	  
  }#input_3{
	margin-left: 29px;
	  
  }#hanhdong{
	text-align: right;
	height: 37px;
	  
  }
   
    
</style>
<body> 



<?php

	
	$tam=explode($_SESSION["config_system"]["phancachngay"],"2014/12/12 12:21");
	//print_r($tam);
	$tam= new DateTime("2015-12-31 22:12");
	$tam=$tam->format($_SESSION["config_system"]["ngaythang"]);
	echo($tam);
	$tam= convert_date("21/12/13");
	echo("</br>".$tam);
	
	
?>

	<div id="grid_phong_ban">
        <div id='thongtin'>
            HỌ tên, tuổi, ákdasdaskn
        </div>
		 <div>
             <div id="thongtin">
                <div class="ngaydukientrakq" style="border: none">Ngày giờ dự kiến trả KQ:<input type="date" id="input_1"/></div>
                <div class="datrahs" style="border: none">Đã trả hồ sơ vào lúc:<input type="date" id="input_2"/></div>
				<div class="nguoitra" style="border: none">Người trả hồ sơ: Phan Thị Thanh Xuân</div>
                 <div class="ngayhentra" style="border: none">Ngày giờ hẹn trả KQ:<input type="date" id="input_3"/></div> 
				 <div class="nguoihen" style="border: none">Người hẹn: KTV. Phương A</div>
                
            </div>
         </div>
         <div id="hanhdong" > 
            <a  class="fm-button ui-state-default ui-corner-all " style="margin-top: 5px; vertical-align:top;width:100px;height:15px;"  >Lưu [Ctrl+S]<span class="ui-icon ui-icon-disk"style=" margin-top: -15px; "></span></a>
            <a  class="fm-button ui-state-default ui-corner-all " style="margin-top: 5px; vertical-align:top;width:90px;height:15px;"  >Chỉnh sửa<span class="ui-icon ui-icon-pencil"style=" margin-top: -15px; "></span></a>
            <a  class="fm-button ui-state-default ui-corner-all " style="margin-top: 5px; vertical-align:top;width:90px;height:15px;"  >Lịch Bác sĩ<span class="ui-icon ui-icon-calculator"style=" margin-top: -15px; "></span></a>
         </div>
     	 
          <table id="rowed3" ></table>
          <div id="prowed3"></div>   
        
     </div>
</body>
</html> 
<script type="text/javascript">
jQuery(document).ready(function() {

	create_grid();	 
		
})
function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',
		datatype: "json",	
		colNames:['Id','<?php get_text("mathuoc")?>','<?php get_text("tenbietduoc")?>','Barcode','<?php get_text("tengoc")?>','<?php get_text("tenhoadon")?>','<?php get_text("tenkhac")?>','<?php get_text("hoatchatchinh")?>','<?php get_text("hamluong")?>','<?php get_text("nuocsanxuat")?>','<?php get_text("nhomthuoc")?>','<?php get_text("nhombenh")?>','<?php get_text("DVT_quydoi")?>','<?php get_text("duongdung")?>','<?php get_text("soluong_quydoi")?>','<?php get_text("DVT")?>','<?php get_text("tonkhotoithieu")?>','<?php get_text("ghichu")?>','<?php get_text("la_thuoc")?>','<?php get_text1("sudung")?>','<?php get_text("douutien")?>','<?php get_text("thuocBHYT")?>','<?php get_text("BHYT_noitru")?>','IsHide4GPP'],
		colModel:[
			{name:'ID_Thuoc',index:'ID_Thuoc',search:false, width:"2%", editable:false,align:'right',hidden:true}, 
			{name:'MaThuoc',index:'MaThuoc', width:"100%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}},
			{name:'TenBietDuoc',index:'TenBietDuoc', width:"200%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:2, colpos:1}},	 
			{name:'Barcode',index:'Barcode', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:1, colpos:2}},	 
			{name:'TenGoc',index:'TenGoc', width:"200%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:2, colpos:2}},	
			{name:'TenHoaDon',index:'TenHoaDon', width:"200%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:1}},	
			{name:'TenKhac',index:'TenKhac', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",formoptions:{ rowpos:3, colpos:2}},	
			{name:'HoatChatChinh',index:'HoatChatChinh', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'HamLuong',index:'HamLuong', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'ID_NuocSanXuat',index:'ID_NuocSanXuat',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nuocsanxuat},stype:'select',searchoptions:{ sopt:['eq'], value: nuocsanxuat} },
			{name:'ID_NhomThuoc',index:'ID_NhomThuoc',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhomthuoc},},
			{name:'ID_NhomBenh',index:'ID_NhomBenh',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:nhombenh}},
			{name:'ID_DonViTinhQuyDoi',index:'ID_DonViTinhQuyDoi',search:false, width:"100%", editable:true,align:'center',formatter:"select",edittype:"select",hidden:false,editoptions:{value:donviquitinh}},
			{name:'ID_DuongDung',index:'ID_DuongDung', width:"100%", editable:true,align:'left',hidden:false,edittype:"text"},	
			{name:'SoLuongQuyDoi',index:'SoLuongQuyDoi', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'ID_DonViTinh',index:'ID_DonViTinh', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}}, 
			{name:'TonKhoToiThieu',index:'TonKhoToiThieu', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'GhiChu',index:'GhiChu',search:false, width:"100%", editable:true,align:'center',hidden:false,edittype:"textarea"},
			{name:'LaThuoc',index:'LaThuoc',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}}, 
			{name:'Active',index:'Active',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}}, 
			{name:'DoUuTien',index:'DoUuTien', width:"100%", editable:true,align:'left',hidden:false,edittype:"text",editrules: {number:true}},
			{name:'ThuocBHYT',index:'ThuocBHYT',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
			{name:'BHYTNoiTruOrNgTru',index:'BHYTNoiTruOrNgTru',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
			{name:'IsHide4GPP',index:'IsHide4GPP',search:false, width:"100%",editable: true,align:'center',hidden:false,edittype:"checkbox",editoptions: {value:"1:0"},formatter:"checkbox",formatoptions:{"disabled":true}},
		],
	//

		loadonce: false,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed3',	
		rowNum: 50,
		gridview: false,
		rowList:[30,50,70],
		sortname: 'ID_NhomThuoc',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:false,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
        groupingView : { 
                groupField : ['ID_NhomThuoc'], 
            groupColumnShow : [false], 
            groupText : ['<b>{0} - {1} Item(s)</b>'], 
            groupCollapse : true, 
            groupOrder: ['asc'], 
            groupDataSorted : true ,
			
            },
		
		
	//hoverrows:false,
	//jsonReader:{repeatitems:true,subgrid:{repeatitems:false}},	
		
		serializeRowData: function (postdata) { 		 	
			//$("#rowed3").trigger("reloadGrid");		
			//return postdata;
		},
		onSelectRow: function(id){		  
		  //$("#rowed4").jqGrid().setGridParam({url:'data2_tam.php?id='+lastsel}).trigger("reloadGrid");	   
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			//$("#rowed3").setColProp('ID_PhongBanCha', { editoptions: { value: ""} });				 
		},	  
		caption: "<?php get_text("dm_thuoc")?>"
	});	
	$("#rowed3").jqGrid('filterToolbar',{stringResult: true});
	$("#rowed3").jqGrid('navGrid',"#prowed3",{add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";								
					};						
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
					autocompleted_combobox("#ID_KhuVuc");
					autocompleted_combobox("#ID_CongTy");
					autocompleted_combobox("#ID_PhongBanCha");								  
				},
				afterShowForm : function (formid) {
					/*var mota=$("#tr_MoTa").html();
					$("#tr_MoTa").html("");
					var congty=$("#tr_ID_CongTy").html();
					$("#tr_ID_CongTy").html("");
					$("#tr_ID_CongTy").html(mota);
					$("#tr_MoTa").html(congty);*/						
					
					xuongdong(formid);
					lendong(formid);					
					$("#sKhuvuc").click(function(e){		 
						//temp=($(this).attr("role")).split(":");
						links="pages.php?module=danhmuc&view=danh_muc_thuoc&id_form=12"
						elem=1 + Math.floor(Math.random() * 1000000000); 
						width=80;
						height=80;		
						dialog_main("Danh mục khu vực",width,height,elem,links);				 
					})
				},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "first",recreateForm:true,savekey: [true,121]
				,afterSubmit : function(response, postdata){
					temp = String(response.responseText).split(";");				 
					if(temp[0]==1){
						var success=false;
						var new_id="<?php get_text1("luu_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("luu_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("luu_thanhcong") ?>";
						//load_phongban_cha()
						re_create_grid();								
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");					 					
					$("#jqg"+window.id_rowed3).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
					window.id_rowed3++; 
					load_phong_ban(true);
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
					autocompleted_combobox("#ID_NuocSanXuat");
					autocompleted_combobox("#ID_NhomThuoc");
					autocompleted_combobox("#ID_NhomBenh");
					utocompleted_combobox("#ID_DonViTinhQuyDoi");
					xuongdong(formid);
					lendong(formid);			  
			 	},
				onClose : function(formid){
					$("#editmodrowed3").css("box-shadow","");					
				}
		}, // add options							  
		{reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=del',	navkeys : [ true, 38, 40 ],closeOnEscape : true,	
				afterSubmit : function(response, postdata) { 				
							if(response.responseText==0){
								var success=false;
								var new_id="<?php get_text1("xoa_khongthanhcong") ?>";													
								}else{
								tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
								var success=true;	
								var new_id="<?php get_text1("xoa_thanhcong") ?>";
								load_phong_ban(true);								
							};						
							return [success,new_id] ;
				}		
		}, // del options
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_thuoc&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed3").setGridWidth($(window).width()-10);
	$("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-400);
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
