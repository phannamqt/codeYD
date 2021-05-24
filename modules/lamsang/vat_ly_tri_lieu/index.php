<!--//an_nam   :mo de load hinh anh-->
<?php
	if(isset($_GET["id_benhnhan"])){
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_GET["id_benhnhan"];
		echo "</script>";
		
	}else{
	if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
		echo "<script type='text/javascript'>";
			echo "parent.postMessage('hosobenhnhantrong;' , '*')";
		
		echo "</script>";
		return;
	}else{
		echo "<script type='text/javascript'>";
		echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
		echo "</script>";
	}
	}


	if(isset($_GET["id_kham"])){
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=".$_GET["id_kham"];
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "window.id_kham2=0";
		echo "</script>";
		}
?>
 
 
<style>
	#DM_template td,#data_soitructrang td  {	 
		word-wrap:normal!important;
		white-space:nowrap;
	}
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
	 .ui-widget-overlay {
		  opacity:0.01;
		  filter: alpha(opacity=1); 
		  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=1)"; 
		  /*overlay trong suot*/  
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
		margin-top:3px;				
	}	 	 
	.thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		vertical-align:top;
		width:49%;		
	}
	.thongtin_chidinh{	 	 
		padding-bottom:4px;
		padding-top:4px;		
	}
	.thongtin_luotkham{
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		display:inline-block;
		vertical-align:top;
		width:50%;
		overflow-y:none;
		margin-top:2px;
		height:67px;		 		
	}
	.thongtin_luotkham_scroll{
		overflow-y:scroll;
		width:100%;
		height:45px;
	}	 
	.canlamsang{
		vertical-align:top;
		overflow-y:scroll;
		height:76px;
		border-top:1px solid #919191;
		padding-top:2px;
		padding-left:2px;
		border-bottom:1px solid #919191;		 
	}	 
	.thongtin_luotkham div div{
		display:inline-block;
		box-shadow:0px 0px 10px #a0a0a0;
		border:1px solid #919191;
		font-size:11px;
		margin-left:2px;
		margin-top:2px;		 
		padding:2px;
		width:181px;
		height:30px;
		text-align:center;
		vertical-align:top;
		margin-bottom:2px;	
		text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
		vertical-align:text-bottom;
		cursor:pointer;
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
	}.thongtin_chidinh{
		height:58px;
	}#right_col{
		padding-left:2px;
	}input[type="checkbox"]:focus {
-webkit-box-shadow: 0px 0px 1px 1px #0463B4!important;
  box-shadow:  0px 0px 2px 2px #208AC8 !important;
}select {
    height: 22px !important;
    width: 90px;
}#right_top{
	border: 0px solid #D4CCB0;
}
#right_top table{
	padding-left:5px;
}
#right_bottom table{
	padding-left:5px;
}
#right_bottom{
	border: 1px solid #D4CCB0;
}
.right_top{
	height:18px;
	border-radius:3px;
	border: 1px solid #D4CCB0;
	background:#F5F3EB;
	
	margin-top:1px;
	margin-left:1px;
	margin-right:1px;
	padding-top: 2px;
}.cacthongso{
	font-weight:bold;
	color:#0000FF;
	margin-left:5px;
}#soitructrang{
	width:708px;
	height:95px !important;
	 font-size: 13px !important;
}#dacdiem{
	width:708px;
	height:55px !important;
	 font-size: 13px !important;
}
#benhsu{
	width:708px;
	height:95px !important;
	font-size: 13px !important;
}
#dacdiemhaumon{
	width:708px;
	height:95px;
	 font-size: 13px !important;
}
#ghichunoibo{
	width:708px;
	height:55px!important;
	 font-size: 13px !important;
}#right_bottom select{
	width:245px;
}
#right_bottom input[type="text"] {
	width:465px;
}.custom-combobox-input{
	width:70px !important
}.ui-autocomplete {
	min-height:100px !important;
}#vitribuitri{
	width:98px;
}.thongtin_tongthe{
		height:62px;
}#combo_ppdieutri11,#combo_ppdieutri21{
	width:200px!important;
	
}.backhidde{
	background:#F0F0F0!important;

}
#tgmacbenh{
	width:98px;
}
#sobuitri{
	width:98px;
}
#solandieutri{
	width:98px;
}
#right_bottom{
	overflow:auto;
}
#builonnhat {
    width: 98px;
}
</style>
<body>

<div  class="data_soitructrang">
    <table id="data_soitructrang">
    </table>   
</div>
<div  class="data_chuandoan">
    <table id="data_chuandoan">
    </table>   
</div>

 <div class="top_form ui-widget-content" >
 	<div style="padding:2px 0px;" class="thongtin_tongthe">
 		<div class="patient_info"></div>        
    </div>
    <div class="thongtin_luotkham" id="left_col" style="">   
    	<div class="thongtin_luotkham_scroll"></div>
            <span class="navigator" >
                <button id="first">bắt đầu</button>
                <button id="prev">tới</button>
                <span class="navigator_title"></span>
                <button id="next">lui</button>
                <button id="last">kết thúc</button> 
            </span>
            <label id="ngay_kham"></label>        
    </div>
   
 </div> 
 
 <div id="panel_main">    
		<input type="hidden" lang="luu" id="daluu"  name="daluu">
        <div class="ui-widget-content ui-layout-west">
            <table id="rowed3" ></table>
			<div id="prowed3"></div> 
        </div>         
        <div class="ui-widget-content  thongtin_thai ui-layout-center "> 
			<table id="rowed4" ></table>
			<div id="prowed4"></div>
        </div>
                 
	</div>
	
		
		
</body>
</html>
<script type="text/javascript"> 
var _id_luotkham=[];
var _id_loaikham=[];
var _id_luotkham_non_unique=[];
var _id_kham=[];
var data_luotkham="";
var navigator_count=0,sub_navigator_count=0;
var _folder_name;
var ma_benhnhan=0;
var id_loaikham;
var grid_click_status=false;
var id_kham;
var _id_trangthai;
var _kham;
var id_benhnhan;
var tenloaikham;
window.id_physio=0;
$(document).ready(function() { 
	$.get( "pages.php?module=web_services&function=create_panel1&id_benhnhan="+id_benhnhan+"&action=index", function( data ) {
		$( ".patient_info" ).html( data );
		$( ".patient_info" ).css("width", $( "#patient_info" ).width()+"css");	
		ma_benhnhan=$('.profile_container .mabenhnhan').text() ;
	});
	$("#panel_main").css("height",$(window).height()-80+"px");			 
	$("#panel_main").fadeIn(1000); 
	create_layout();	
	resize_control(); 
	
	create_grid();
	create_grid4();
	
	if(id_kham2!="0"){
		$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idkham="+id_kham2+"&idbenhnhan="+id_benhnhan, 
			function( data ) {
				data_luotkham=data; 
			var tam1_cls="";
			$.each( data, function( key, val ) {		 
				for(i=0;i<val.length;i++){
					//tam+=" ; "+val[i]["id"];
					var tam1_cls=val[i]["cell"];
					//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
					_id_luotkham.push(tam1_cls[5]);				
					_id_loaikham.push(tam1_cls[3]);
					_id_luotkham_non_unique.push(tam1_cls[5]);
					_id_kham.push(val[i]["id"]);
				}
				//_id_luotkham=$.unique(_id_luotkham).reverse();
				_id_kham=_id_kham.reverse();
				_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
				_id_loaikham=_id_loaikham.reverse();
				_id_luotkham=$.unique(_id_luotkham); 
				if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){
					$('.template_title_button').button( 'disable');
				}else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){
					$('.template_title_button').button( 'enable');
				}
				load_complete();
			});		
		});
}else{ 
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idbenhnhan="+id_benhnhan, 
	function( data ) {
		data_luotkham=data;

		//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
				//tam+=" ; "+val[i]["id"];
				var tam1_cls=val[i]["cell"];
				//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
				_id_luotkham.push(tam1_cls[5]);				
				_id_loaikham.push(tam1_cls[3]);
				_id_luotkham_non_unique.push(tam1_cls[5]);
				_id_kham.push(val[i]["id"]); 
			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham); 

			if(_id_trangthai=="Xong" ||_id_trangthai=="DaThucHien"){

			}else if(_id_trangthai=="DangKham"||_id_trangthai=="DangCho"){ 

			}
			load_complete();
		});
	});
}
function n_loadform(){
	_id_luotkham.splice(0, _id_luotkham.length-1)
	_id_loaikham.splice(0, _id_loaikham.length-1)
	_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
	_id_kham.splice(0, _id_kham.length-1)


	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idbenhnhan="+id_benhnhan, 
	function( data ) {
		data_luotkham=data;
		//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {	 
			for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];
			var tam1_cls=val[i]["cell"];
			//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
			_id_luotkham.push(tam1_cls[5]);				
			_id_loaikham.push(tam1_cls[3]);
			_id_luotkham_non_unique.push(tam1_cls[5]);
			_id_kham.push(val[i]["id"]);				

			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham); 
				
		});		
	});
}

function n_loadform2(){
	_id_luotkham.splice(0, _id_luotkham.length-1)
	_id_loaikham.splice(0, _id_loaikham.length-1)
	_id_luotkham_non_unique.splice(0, _id_luotkham_non_unique.length-1)
	_id_kham.splice(0, _id_kham.length-1)
	$.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsach&idbenhnhan="+id_benhnhan, 
	function( data ) {
		data_luotkham=data;
		//alertObject(data);
		var tam1_cls="";
		$.each( data, function( key, val ) {		 
			for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];
			var tam1_cls=val[i]["cell"];
			//tam_cls+= '<div id="cls_'+val[i]["id"]+'">'+tam1_cls[0]+"<br \>" +tam1_cls[5]+'</div>';
			_id_luotkham.push(tam1_cls[5]);				
			_id_loaikham.push(tam1_cls[3]);
			_id_luotkham_non_unique.push(tam1_cls[5]);
			_id_kham.push(val[i]["id"]);				

			}
			//_id_luotkham=$.unique(_id_luotkham).reverse();
			_id_kham=_id_kham.reverse();
			_id_luotkham_non_unique=_id_luotkham_non_unique.reverse();
			_id_loaikham=_id_loaikham.reverse();
			_id_luotkham=$.unique(_id_luotkham);
			//_id_loaikham=$.unique(_id_loaikham);
			//navigator_load("end","first");
			loaikham_click2();

		});		
	});
}
	
$(window).resize(function() {		 
	$("#panel_main").css("height",$(window).height()+"px");	
	resize_control();	 
});

	//navigator_load(0);
$(function() {
	$( "#left_col #first" ).button({
	text: false,
	icons: {
	primary: "ui-icon-seek-first"
	}
	})
	.click(function() {
	navigator_load("first","first");

	});
	$( "#left_col #last" ).button({
	text: false,
	icons: {
	primary: "ui-icon-seek-end"
	}
	})
	.click(function() {
	navigator_load("end","first");

	}); 
	$( "#left_col #next" ).button({
	text: false,
	icons: {
	primary: "ui-icon-seek-next"
	}
	})
	.click(function() {
	navigator_load(1,"first");			 
	});  
	$( "#left_col #prev" ).button({
	text: false,
	icons: {
	primary: "ui-icon-seek-prev"
	}
	})
	.click(function() {
	navigator_load(-1,"first");

	}); 

}); 

}); 

function navigator_load(_value,_click){
	//alert(tam1_cls.length);
	if((navigator_count+_value>_id_luotkham.length-1)||(navigator_count+_value<0)){
		return false;	
	}
	var tam_cls=""; 
	if(_value=="first"){
		navigator_count=0;	
	}else if(_value=="end"){		 
		navigator_count=_id_luotkham.length-1;
	}else{
		navigator_count+=parseInt(_value);
	}
	var _mota="";		
	$.each( data_luotkham, function( key, val ) {					 
		for(i=0;i<val.length;i++){
			//tam+=" ; "+val[i]["id"];				
			var tam1_cls=val[i]["cell"];
			//alert(tam1_cls[5])
			if(_id_luotkham[navigator_count]==tam1_cls[5]){
				//alert(_id_luotkham[navigator_count]) 
				tam_cls= '<div id="'+val[i]["id"]+'" alt="'+ma_benhnhan+"_"+val[i]["id"]+"_"+tam1_cls[4]+'">'+tam1_cls[4]+'<br>'+tam1_cls[5]+'</div>';				
				//$("#ngay_kham").html(tam1_cls[2]);				 
				// $("#id_trangthai").html(tam1_cls[9]);
				 $('#rowed3').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachchidinh&idluotkham='+tam1_cls[4],datatype:'json'}) .trigger('reloadGrid');
			}
		}
		$("#left_col div").html(tam_cls);	
	});
	loaikham_click();
	if(_click=="first"){
		$("#left_col div div:first-child").click();

	}
	$("#left_col .navigator_title").html("Lượt khám " + (navigator_count+1) +"/"+_id_luotkham.length);	

}
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
		thoigian=thoigian.addHours(0).toString("yyyy-MM-dd H:mm ");
	}
	return thoigian;
} 
function loaikham_click(){
	$.each( data_luotkham, function( key, val ) {
		$("#left_col div div").click(function(e) { 
			for(i=0;i<val.length;i++){
				tam=val[i]["id"];	
				//alert(val[i]["cell"])			
				var tam1_cls=val[i]["cell"]; 
				tam1=$(this).attr("id");	
				//console.log(tam+"=="+tam1);				 
				if(tam==tam1){
					$("#nguoi_chidinh").val(val[i]["cell"][4]);
					$("#ngaychidinh").val(val[i]["cell"][2]);
					tenloaikham=val[i]["cell"][1];  
					nhanvien4=val[i]["cell"][7];
					chuandoan4=val[i]["cell"][12];
					id_loaikham=val[i]["cell"][3];
					$("#center_col div").html(val[i]["cell"][1]); 	
					$("#edit_by").show();
					_id_trangthai=tam1_cls[6]; 
					_kham = tam;
					_id_luotkham2=tam1_cls[5];
					idluotkham=val[i]["cell"][5]; 
				} 
			} 			
		});
	});
}

function loaikham_click2(){
	$.each( data_luotkham, function( key, val ) { 
		for(i=0;i<val.length;i++){
			tam=val[i]["id"];	 	
			var tam1_cls=val[i]["cell"]; 
			tam1=$(this).attr("id");	 				 
			if(tam==tam1){	
				$("#nguoi_chidinh").val(val[i]["cell"][4]);
				$("#ngaychidinh").val(val[i]["cell"][2]);
				tenloaikham=val[i]["cell"][1]; 
				nhanvien4=val[i]["cell"][7];
				chuandoan4=val[i]["cell"][12];
				id_loaikham=val[i]["cell"][3];
				$("#center_col div").html(val[i]["cell"][1]); 	 
				_id_trangthai=tam1_cls[6]; 
				_kham = tam;
				_id_luotkham2=tam1_cls[5];
			}
		}
                         			
	});
}

function resize_control(){
 
}
function create_layout(){
	//alert("")
	$('#panel_main').layout({	
		resizerClass: 'ui-state-default'       
		,west: {
			maskContents:		true
		,	resizable: true
		,	size:					"35%"
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
		,	size:					"65%"
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

function load_complete(){
	if((ma_benhnhan==0)){
		setTimeout(load_complete,50);
		return;
	} 
	navigator_load("end","first"); 
}


function create_grid(){	
	 $("#rowed3").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachchidinh',
		datatype: "json",	
		colNames:['ID_Phy','Tên loại khám','Người CD','Ngày CĐ','Số lần','Số ngày'],
		colModel:[
			{name:'ID_Phy',index:'ID_Phy',search:false,search:false, width:"2%", editable:false,align:'left',hidden:true}, 
			{name:'TenLoaiKham',index:'TenLoaiKham',search:true, width:"30%", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'NguoiCD',index:'NguoiCD',search:true, width:"30%", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 	
			{name:'NgayGioTao',index:'NgayGioTao',search:true, width:"15%", editable:false,align:'left',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'SoNgayThucHien',index:'SoNgayThucHien',search:true, width:"10%", editable:false,align:'right',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			{name:'SoLanThucHienTrongNgay',index:'SoLanThucHienTrongNgay',search:true, width:"10%", editable:false,align:'right',hidden:false,editrules: {required:true},edittype:"text",formoptions:{ rowpos:1, colpos:1}}, 
			
		], 
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
		sortname: 'ID_Phy',
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
			window.id_physio=id;
			var rowData = $('#rowed3').getRowData(id);
			$('#rowed4').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhatky&idphysio='+id_physio,datatype:'json'}) .trigger('reloadGrid');
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed3");
			 var ids = $('#rowed3').jqGrid('getDataIDs');
			window.id_physio=ids[0];
			$("#rowed3").jqGrid('setSelection',id_physio); 
		},	  
		
		caption: "Danh sách CĐ"
	});	
	$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"}); 					  
	$("#rowed3").setGridWidth($(".ui-layout-west").width());
	$("#rowed3").setGridHeight($(".ui-layout-west").height()-110);
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

function create_grid4(){
window.bacsi =":;"+ $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục');}}).responseText; 	
	 $("#rowed4").jqGrid({
		url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhatky',
		datatype: "json",	
		colNames:['ID_Phy','Giờ thực hiện','Ngày thực hiện','Người TH','Diễn biến'],
		colModel:[
			{name:'ID_Phy',index:'ID_Phy',search:false,search:false, width:"1%", editable:false,align:'left',hidden:true}, 
			{name:'GioTH',index:'GioTH',search:false,search:false, width:"10%", editable:false,align:'left',hidden:false}, 
			{name:'NgayTH',index:'NgayTH',search:true, width:"20%", editable:true,align:'left',hidden:false,editrules: {required:true}, editoptions:{size:20, 
                  dataInit:function(el){ 
                        $(el).datepicker({dateFormat:'dd/mm/yy'}); 
                  },  
                },formoptions:{ rowpos:2, colpos:1} },
			{name:'NguoiTH',index:'NguoiTH',search:true, width:"30%", editable:true,align:'left',hidden:false,formatter:"select",edittype:"select",stype: 'select',editrules: {required:true},editoptions: { value: bacsi},formoptions:{ rowpos:1, colpos:1}}, 	
			{name:'DienBien',index:'DienBien',search:true, width:"50%", editable:true,align:'left',hidden:false,editrules: {required:true},edittype:"textarea",formoptions:{ rowpos:3, colpos:1}}, 
			
			
		],  
		loadonce: true,
		scroll: false,	
		//rownum = false,
		//treeGrid = false,	 
		modal:true,	 	
		pager: '#prowed4',	
		rowNum: 10000,
		gridview: true,
		pginput:false,
		pgbuttons:false,
		rowList:[],
		sortname: 'ID_Ngay',
		height:100,
		width: 100,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		grouping: false,
		stringResult:true,
		sortorder: "asc",
		
	
		serializeRowData: function (postdata) {
			console.log(postdata);
		},
		onSelectRow: function(id){	
		},
		ondblClickRow: function (rowId, rowIndex, columnIndex) {
			$(".ui-icon-pencil").trigger('click'); 
 		},
		loadComplete: function(data) {	
			grid_filter_enter("#rowed4");
		},	  
		
		caption: "Nhật ký"
	});	
	$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	$("#rowed4").jqGrid('navGrid',"#prowed4",{add: permission["add"], edit: permission["edit"], del: false, search: false,closeAfterEdit: true,clearAfterAdd :true,closeOnEscape : true, bSubmit: "Submit",
     bCancel: "Cancel"}, //options						 
		{recreateForm:true,height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&hienmaloi=a',closeOnEscape : true,modal: true,recreateForm: true,
			   afterSubmit : function(response, postdata) { 
				  	if(response.responseText==1){
						var success=false;
						var new_id="<?php get_text1("sua_khongthanhcong") ?>";													
					}else{
						tooltip_message("<?php get_text1("sua_thanhcong") ?>");
						var success=true;	
						var new_id="<?php get_text1("sua_thanhcong") ?>";								
					};
					$('#rowed4').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhatky&idphysio='+id_physio,datatype:'json'}) .trigger('reloadGrid');
					
					return [success,new_id] ;					   
				},
				beforeShowForm: function(formid){					 
					canhgiua(formid);
												  
				},
				afterShowForm : function (formid) {
					xuongdong(formid);
					lendong(formid);					
					
				},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");										
				}
							  
		}, // edit options
		{height:'auto',width:'auto',reloadAfterSubmit:false,url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=a',closeOnEscape : true,closeAfterAdd:false,modal: true,addedrow: "last",recreateForm:true,savekey: [true,121]
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
														
					};						
					return [success,new_id];
				},
				afterComplete : function (response, postdata, formid) {
					temp = String(response.responseText).split(";");					 					
					$("#jqg"+window.id_rowed4).attr("id",$.trim(temp[1]));
					$("#"+$.trim(temp[1]+"> td")).trigger("click");					
					window.id_rowed4++; 
					$('#rowed4').jqGrid('setGridParam', {url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_nhatky&idphysio='+id_physio,datatype:'json'}) .trigger('reloadGrid');
				
				},
				beforeSubmit : function(postdata, formid){
					postdata["id_physio"]=id_physio;
					if (typeof(window.id_rowed4)=='undefined'){
						 window.id_rowed4=2;
					}
					var success=true;
					var new_id="";
					var rowData = $('#rowed3').getRowData(window.id_physio);
					var ids = $('#rowed4').jqGrid('getDataIDs'); 
					if(ids.length>=parseInt(rowData['SoNgayThucHien'])*parseInt(rowData['SoLanThucHienTrongNgay'])){
						var success=false;
						alert("Bạn không thể ghi nhật ký quá số lượng chỉ định!!!");
						new_id = "Bạn không thể ghi nhật ký quá số lượng chỉ định!!!";
					}
					return [success,new_id];					  
				},
				beforeShowForm: function(formid) {
					 var rowData = $('#rowed3').getRowData(window.id_physio);
					 var ids = $('#rowed4').jqGrid('getDataIDs'); 
					if(ids.length>=parseInt(rowData['SoNgayThucHien'])*parseInt(rowData['SoLanThucHienTrongNgay'])){
						alert("Bạn không thể ghi nhật ký quá số lượng chỉ định!!!");
					}
					 canhgiua(formid);					 
				},									 
			 	afterShowForm : function (formid) {					
					
					xuongdong(formid);
					lendong(formid);			  
			 	},
				onClose : function(formid){
					$("#editmodrowed4").css("box-shadow","");					
				}
		}, 
		{reloadAfterSubmit:true,height:250,width:600,sopt: ["cn"],url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ngaychuyenkhoa&q=2',closeOnEscape : true,
				/*beforeShowSearch:function(formid){				
				}*/ // search options		
		} // search options						 
							  
	);	 					  
	$("#rowed4").setGridWidth($(".ui-layout-center").width()-20);
	$("#rowed4").setGridHeight($(".ui-layout-center").height()-110);
	$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		} } );	
		$("#gbox_rowed4").attr("tabindex","1");
		//$("#gbox_rowed4").focus();	
		$("#gbox_rowed4").bind('keydown', function(e) {			
			if((jwerty.is("ctrl+m",e))){		 
				 $("#rowed4").jqGrid('restoreRow', lastsel);
				 $("#rowed4").jqGrid('editRow', rowid, true);
				 lastsel = rowid;
			}
		}) 	  
} 
</script>