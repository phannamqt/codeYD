<script language="JavaScript" src="js/SlickGrid-2.0-frozen/lib/firebugx.js"></script>
<script src="js/SlickGrid-2.0-frozen/lib/jquery.event.drag-2.2.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangedecorator.js"></script>
<script src="js/SlickGrid-2.0-frozen/lib/jquery.mousewheel.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.core.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.editors.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.formatters.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.rowselectionmodel.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.grid.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.dataview.js"></script>
<script src="js/SlickGrid-2.0-frozen/controls/slick.pager.js"></script>
<script src="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.autotooltips.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellselectionmodel.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.cellrangeselector.js"></script>
<script src="js/SlickGrid-2.0-frozen/slick.groupitemmetadataprovider.js"></script>
<script src="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.js"></script>

<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.pager.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/controls/slick.columnpicker.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/slick.grid-edit.css"   type="text/css"/>
<link rel="stylesheet" href="js/SlickGrid-2.0-frozen/plugins/slick.summaryfooter.css" type="text/css"/>

<style>
.slick-cell.selected,.grid-canvas>.active {
  background: none repeat scroll 0 0 #76C4EB;
}
.cot1 input{
	width:100px;!important
}
.cot1 select,.cot4 select{
	width:110px;!important
}
.cot2 input,.cot5 input{
	width:90px;!important
}
.cot2 select{
	width:100px;!important
}
.cot4 select{
	width:120px;!important
}
.cot5 select{
	width:98px;!important
}



.column
{
    float: left;
    width: auto;
}
.slick-cell.selected {
  background: none repeat scroll 0 0 #76C4EB;
}
.slick-row:hover {
 background:#008ddf;
 cursor:pointer;
}

.slick-column-name { white-space: normal;
    word-wrap: break-word;
    text-align:center!important;
}
.slick-header-column.ui-state-default{
   height:70px	 !important;
   text-align:center!important;
}
.slick-cell, .slick-headerrow-column {
  border-style: solid!important;
}
.slick-row.selected .cell-selection {
    background-color: transparent; /* show default selected row background */
}
.ui-datepicker{ z-index: 9999 !important;}
th.ui-th-column div {
    height: auto !important;
    overflow: hidden;
    vertical-align: middle;
    white-space: pre-wrap;
    word-wrap: break-word;
}

</style>
<body> 
<input type="file" id="upload_input" hidden value="Chọn file" accept="image/*">
<form id="image_submit">
<input type="hidden" name="action" value="single_image">
<input type="hidden" name="default_name" id="default_name">  
<input type="hidden" name="cmd" value="upload">
<input type="hidden" name="target" value="f1_XA">    
<input type="hidden" name="answer" value="42">  
<input type="hidden" name="tenthumuc" value="<?=$_SESSION["config_system"]["Signs"]?>">  
<input type='hidden'  id='anh'  name='image_data[]'>         		
</form>
<input type="file" id="upload_input2" style="visibility:hidden; display:none"  value="Chọn file" accept="image/*">
<form id="image_submit2">
<input type="hidden" name="action" id="action2"  value="custom_images_signs">
<input type="hidden" name="default_name" id="default_name2">  
<input type="hidden" name="cmd" value="upload">
<input type="hidden" name="target" value="f1_XA">    
<input type="hidden" name="answer" value="42">  
<input type="hidden" name="tenthumuc" value="<?=$_SESSION["config_system"]["Staff"]?>">  
<input type='hidden'  id='anh2'  name='image_data[]'>         		
</form>
<input type="checkbox" value="1" id="group" checked>Nhóm theo phòng ban <input type="checkbox" value="1" id="chuyenmon">Chuyên môn
<!-- <input type="checkbox" value="1" id="group" checked>Mở toàn bộ nhóm<label id="mo_nhom"></label>-->
<div id="grid"></div>
<div id="pager" style="width:100%;height:20px;"></div>

<button id="themmoi">Thêm mới</button> 
<button id="sua">Sửa</button> 
<button id="execl_nhansu">execl Nhân sự</button> 
</div>




<div id="dialog-form" title="Thêm bản ghi" style="display:none">   

<div style="display:block; width: 100%;">
<div class="column">
<img id="hinhnhanvien_nv" class="non_image" style="border-style:solid;border-color:green;width:125px;height:144px" src=""/>  
</div>
<div class="column cot1" >
<table>
<tr>
<td align="right"><label for="mabenhnhan" >Mã bệnh nhân</label></td>
<td><input id="mabenhnhan" name="mabenhnhan" type="text"></td>                   
</tr>
<tr>
<td align="right"><label for="ho">Họ</label></td>
<td><input id="ho" type="text"  lang="ho" name="ho"></td>                   
</tr>
<tr>
<td align="right"><label for="ngaysinh">Ngày Sinh</label></td>
<td><input type=text id="ngaysinh" name="ngaysinh"></td>                   
</tr>
<tr>
<td align="right"><label for="cmnd">CMND</label></td>
<td><input id="cmnd"  name="cmnd"  type="text"></td>                   
</tr>
<tr>
<td align="right"><label for="NoiCapCMND">Nơi cấp CMND</label></td>
<td><select id="NoiCapCMND" name="NoiCapCMND" type="text"></select></td>                   
</tr>
<tr>
<td align="right"><label for="hochieu">Hộ chiếu</label></td>
<td><input id="hochieu" name="hochieu"  type="text" ></td>                   
</tr>
</table>
</div>
<div class="column cot2">
<table>
<tr>
<td align="right"><label for="Nickname">Nickname</label></td>
<td><input id="Nickname" name="Nickname"  type="text"></td>                   
</tr>
<tr>
<td align="right"><label for="ten" >Tên</label></td>
<td><input name="ten" type="text"   id="ten"></td>                   
</tr>
<tr height="25px">
<td align="right"><label for="gioitinh"> Giới tính</label></td>
<td><input id="nam"   style="vertical-align: middle;width:10px" lang="nam" type="radio" name="sex" value="1">Nam
<input id="nu"   style="vertical-align: middle;width:10px" lang="nu" type="radio" name="sex" value="0">Nữ
</td>                   
</tr>
<tr>
<td align="right"><label for="NgayCapCMND">Ngày cấp CMND</label></td>
<td><input id="NgayCapCMND" name="NgayCapCMND" type="text"></td>                   
</tr>
<tr>
<td align="right"><label for="quoctich">Quốc tịch</label></td>
<td><select id="quoctich" name="quoctich" type="text"></select></td>                   
</tr>
<tr>
<td align="right"><label for="sobaohiem">Số bảo hiểm</label></td>
<td><input id="sobaohiem" lang="end" name="sobaohiem" type="text"></td>               		
</tr> 
</table>
</div>
<div class="column">
<fieldset style="height:154px">
<legend>Thông tin liên lạc</legend>
<table>
<tr>
<td align="right"><label for="diachi">Địa chỉ </label></td>
<td  ><textarea name="diachi" id="diachi" type="text" style="width:150px"></textarea></td>                   
</tr>
<tr>
<td align="right"><label for="mobile" >Mobile 1</label></td>
<td><input id="mobile" name="mobile" type="text" style="width:150px"></td>   
</tr>
<tr>
<td align="right"><label for="dienthoainha">Mobile 2</label></td>
<td> <input id="dienthoainha" name="dienthoainha" type="text" style="width:150px"></td>                   
</tr>
<tr>
<td align="right"><label for="email">Email</label></td>
<td ><input id="email" name="email" type="text" style="width:150px"></td>                   
</tr>                              
</table>
</fieldset>
</div>      
<div > 

<fieldset style="height:154px" id="qh_giadinh">
<legend>Ghi Chú</legend>
<textarea id="ghichu" lang="end" name="ghichu" style="height:140px">
</textarea>
</fieldset> 
</div>
<div class="column cot4">
<table>        
<tr>
<td align="right"><label for="phongban">Phòng ban</label></td>
<td><select id="phongban" name="phongban" type="text"></select></td>    
</tr>
<tr>
<td align="right"><label for="chucdanh">Chuyên môn</label></td>
<td><select id="chucdanh" name="chucdanh" type="text" ></select></td>    
</tr>
<tr>
<td align="right"><label for="trinhdo">Trình độ</label></td>
<td><select id="trinhdo" name="trinhdo" type="text"></select></td>    
</tr>           
<tr>
<td align="right"><label for="Id_chuyenkhoa">Chuyên khoa</label></td>
<td><select id="Id_chuyenkhoa" name="Id_chuyenkhoa" type="text"></select></td>    
</tr>  
<tr>
<td align="right"><label for="chucvu">Chức vụ</label> </td>
<td><select id="chucvu" name="chucvu" type="text" ></select></td>               		
</tr>
<tr>
<tr>                
<td align="right"><label for="SoChungChiHanhNghe">Số CCHN</label> </td>
<td><input id="SoChungChiHanhNghe" name="SoChungChiHanhNghe" style="width:110px"  type="text"></td>    
</tr>  
</tr>
</table>    
</div>
<div class="column cot5">
<table>
<tr>
<td align="right"><label for="Id_TinhTrangHonNhan">Hôn nhân</label></td>
<td><select id="Id_TinhTrangHonNhan" name="Id_TinhTrangHonNhan" type="text" ></select></td>    
</tr> 
<tr>
<td align="right"><label for="masothue">Mã số thuế</label></td>
<td><input id="masothue" name="masothue"  type="text"></td>    
</tr>         
<tr>
<td align="right"><label for="ngayvaolam">Ngày vào làm</label></td>
<td><input id="ngayvaolam" name="ngayvaolam" type="text"></td>               		
</tr>   
<tr>
<td align="right"><label for="Kinhnghiem">Kinh nghiệm</label> </td>
<td><input id="Kinhnghiem" name="Kinhnghiem" type="text"></td>               		
</tr>
<tr>
<td align="right"><label for="NgayNghiViec">Ngày nghỉ việc</label> </td>
<td><input id="NgayNghiViec" name="NgayNghiViec"  type="text"></td>               		
</tr> 
<tr>
<td align="right"><label for="username">Username</label> </td>
<td><input id="username" name="username"  type="text"></td>               		
</tr>  
 
</table>
</div>
<div class="column">
<table> 
 
<tr>
<td align="right"><label for="nghiviec" >Đã nghỉ việc</label></td>
<td> <input type="checkbox" id="nghiviec" value="1" name="nghiviec"></td>               		
</tr>
<tr>
<td align="right"><label for="labacsi" >Là bác sĩ</label> </td>
<td><input type="checkbox" id="labacsi" value="1" name="labacsi"></td>   
</tr>
<tr>
<td align="right"> <label for="congtacvien">Là cộng tác viên</label> </td>
<td><input type="checkbox" id="congtacvien" value="1" name="congtacvien"></td>               		
</tr> 
<tr> 
<td align="right"> <label for="ChungChiHanhNghe" >Chứng chỉ HN</label> </td>
<td>  <input type='checkbox' id="ChungChiHanhNghe" value="1" name="ChungChiHanhNghe"></td>   
</tr>                             
<tr> 
<td align="right"> <label for="disable" >Disable</label> </td>
<td>  <input type='checkbox' id="disable" value="1" name="disable"></td>   
</tr>
</table>           
</div>

<div class="column">
<fieldset style="height:188px;width:400px" id="bangcap">
<legend>Bằng cấp</legend>
<table id="rowed_bangcap"></table>
<div id="prowed_bangcap"></div>
</fieldset>
</div>

<div >
<fieldset style="height:188px" id="hopdong">
<legend>Hợp đồng</legend>
<table id="rowed_hopdong"></table>
<div id="prowed_hopdong"></div>
</fieldset>
</div>

<div class="column">
<table>
<tr>
<td>
<label for="chuki" style="width:100px;text-align:right">Chữ kí</label>
</td>
<td>
<img id="chuky_nv" class="non_image" style="border-style:solid;border-color:green;width:125px;height:85px" src=""/>
</td>
</tr>
</table>
</div>

</div> 


<div id="dialog-qhgd" title="Thêm bản ghi" style="display:none">
<table id="rowed_qhgiadinh">         
</table>
<div id="prowed_qhgiadinh"></div>
</div >


<div id="dialog-form2" title="Thêm bản ghi" style="display:none">
<table id="rowed4">         
</table>
<div id="prowed4"></div>
</div >
<div id="dialog-form3" title="Thêm hình nhân viên" >
<div id="images_viewer">
<span class="zoom" id="ex1"><img /></span>
</div>
<br>
<div id="content_1" class="content"><div class="images_container" id="images_thumnail"></div></div>
</div>
</body>
</html> 

<script type="text/javascript">
jQuery(document).ready(function() {
	$("#themmoi").click(function(e) {
        $('#dialog-form').dialog('open');
        window.oper='add';
        $('#nam').prop('checked', false);
        $('#nu').prop('checked', false);
        $("input:text,textarea").val("");	
        $("input:checkbox").prop('checked', false);
        $("#hinhnhanvien_nv").attr("src","");
        $("#chuky_nv").attr("src","");
        $('#quoctich').val(138);
        $('#NoiCapCMND').val(48);
        $('#rowed_qhgiadinh_iladd').hide();
        $('#rowed_qhgiadinh_iledit').hide();
        $('#rowed_qhgiadinh_ilsave').hide();
        $('#rowed_qhgiadinh_ilcancel').hide();
        $('#del_rowed_qhgiadinh').hide();		
        $('#rowed_bangcap_iladd').hide();
        $('#rowed_bangcap_iledit').hide();
        $('#rowed_bangcap_ilsave').hide();
        $('#rowed_bangcap_ilcancel').hide();
        $('#del_rowed_bangcap').hide();		
        $('#rowed_hopdong_iladd').hide();
        $('#rowed_hopdong_iledit').hide();
        $('#rowed_hopdong_ilsave').hide();
        $('#rowed_hopdong_ilcancel').hide();
        $('#del_rowed_hopdong').hide();
        $('#chamcong-ic').hide();		
        $('#rowed4').jqGrid('setGridParam', {data:[],datatype:'json'}) .trigger('reloadGrid');
        $('#rowed_qhgiadinh').jqGrid('setGridParam', {data:[],datatype:'json'}) .trigger('reloadGrid');
        $('#rowed_bangcap').jqGrid('setGridParam', {data:[],datatype:'json'}) .trigger('reloadGrid');
        $('#rowed_hopdong').jqGrid('setGridParam', {data:[],datatype:'json'}) .trigger('reloadGrid');

    });
	$("#sua").click(function(e) {
		$('.slick-viewport .active').dblclick();
	});
	$("#group").click(function(e) {		
		isgroup()
	});
	$("#chuyenmon").click(function(e) {		
		isgroup()
	});
	window.loadlandau=1;
	<?php
  if(isset($_GET['idnhanvien']) && trim($_GET['idnhanvien'])>0){
     echo "window.idnhanvien_open=".$_GET['idnhanvien'].";\n";	
 }else{
     echo "window.idnhanvien_open=0;\n";	
 }

 ?>
 window.hinh_nhanvien='';
 window.chuky_nhanvien='';
 $("#upload_input").change(function(e) {		
   imagesSelected(this.files,submit_file); 		
});
 $("#upload_input2").change(function(e) {		
   imagesSelected2(this.files,submit_file); 			
});	 
 number_textbox("#manv");
 number_textbox("#cmnd");
 number_textbox("#sotaikhoan");
 number_textbox("#masothue");
 number_textbox("#mobile");
 number_textbox("#dienthoainha");       
 create_grid1();
 load_all();	
 shortcut_key();		
 create_grid_new();
 create_qhgiadinh();
 create_bangcap();
 create_hopdong();
 $( "#dialog-form" ).dialog({            
    autoOpen: false,
    zIndex: 1,
    height: ($(window).height()/100 * parseFloat(99)).toFixed(0),
    width: ($(window).width()/100 * parseFloat(99)).toFixed(0),
    modal: true,
    stack: false,
    open: function(event,ui){
        $( "#dialog-form" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
        $( "#dialog-form" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(100)).toFixed(0) );           
        $("#rowed_bangcap").setGridWidth($("#bangcap").width());
        $("#rowed_hopdong").setGridWidth($("#hopdong").width());
        $("#ghichu").width($("#qh_giadinh").width())
    },close: function(event,ui){
     func_reload();
 },
 buttons: {
   Save: function() {                 

    if(window.oper=='add'){                
       save_button();                	
   }
   else{
       edit_button();
   }            
},
Cancel: function() {
  $( this ).dialog( "close" );
  $("#chuky_nv").attr("src","")
}
}
});
 $("#checkp").click(function() {   
    var x = $("#checkp").is(":checked");
    if (x == true) {
        $("#gview_rowed3 .ui-icon-circlesmall-minus").trigger("click");
    } else {
        $("#gview_rowed3 .ui-icon-circlesmall-plus").trigger("click");
    }
})   

 add_icon_button_dialog("Save","disk");
 func_reload();
 $( "#chamcong-ic" )
 .button()
 .click(function() {
    $( "#dialog-form2" ).dialog( "open" );   
});

 $( "#qh-ic" )
 .button()
 .click(function() {
    $( "#dialog-qhgd" ).dialog( "open" );   
});
 $( "#dialog-qhgd" ).dialog({
    autoOpen: false,
    height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
    width: ($(window).width()/100 * parseFloat(65)).toFixed(0),
    modal: true,
    open: function(event,ui){
        $( "#dialog-qhgd" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(70)).toFixed(0) );
        $( "#dialog-qhgd" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(53)).toFixed(0) );                
    },
    buttons: {           
        Cancel: function() {
            $("#rowed4_ilcancel").click();
            $( this ).dialog( "close" );
        }
    }
});
 $( "#dialog-form2" ).dialog({
    autoOpen: false,
    height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
    width: ($(window).width()/100 * parseFloat(65)).toFixed(0),
    modal: true,
    open: function(event,ui){
        $( "#dialog-form2" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(70)).toFixed(0) );
        $( "#dialog-form2" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(53)).toFixed(0) );                
    },
    buttons: {           
        Cancel: function() {
            $("#rowed4_ilcancel").click();
            $( this ).dialog( "close" );
        }
    }
});
 add_icon_button_dialog("Cancel","trash");
 $( "#dialog-form3" ).dialog({
    autoOpen: false,
    height: ($(window).height()/100 * parseFloat(70)).toFixed(0),
    width: ($(window).width()/100 * parseFloat(65)).toFixed(0),
    modal: true,
    open: function(event,ui){
        $( "#dialog-form3" ).dialog( "option", "height", ($(window).height()/100 * parseFloat(100)).toFixed(0) );
        $( "#dialog-form3" ).dialog( "option", "width", ($(window).width()/100 * parseFloat(100)).toFixed(0) );
    },
    buttons: {           
        Cancel: function() {
          $( this ).dialog( "close" );
      }
  }
});
 $("#ngaysinh,#ngayvaolam,#Kinhnghiem,#NgayCapCMND,#NgayNghiViec").datepicker({ dateFormat:  'dd/mm/yy'}); 		
 $("#ngaysinh,#ngayvaolam,#Kinhnghiem,#NgayCapCMND,#NgayNghiViec").dateEntry({dateFormat:'dmy/'});
 $(window).resize(function() {		 
     $("#rowed3").setGridWidth($(window).width()-20);
     $("#rowed3").setGridHeight($(window).height()-$("#form_danh_muc_phong_ban").height()-150);
 });	
 image_message();
})
function save_button(){  
    phancach="";			
    dataToSend ='{';
    key1='';
    i=0;        
    $('#dialog-form').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,input[type=radio]:checked').each(function(){ 
        if(i>0){phancach=",";}
        dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value) ;
        i++;
    });

    dataToSend +='}'; 	

    dataToSend=$.parseJSON(dataToSend);
    $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=add&hienmaloi=3',dataToSend)
    .done(function( response) {
        temp = response.split(";");
        if(temp[0]==1){
         var success=false;
         var new_id="<?php get_text1("luu_khongthanhcong") ?>";												   
     }else{                                                                 
         tooltip_message("<?php get_text1("luu_thanhcong") ?>");		
         $("#dialog-form").dialog("close");    
         $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhanvien').done(function(data){
            data=$.parseJSON(data)
            window.dataView.setItems(data);			

        })                                        
     };
 });                   
}
function edit_button(){
 phancach="";			
 dataToSend ='{';
 key1='';
 i=0;        
 $('#dialog-form').find(':input[type=text],select,textarea,input[type=hidden],input[type=checkbox]:checked,input[type=radio]:checked').each(function(){ 		if(i>0){phancach=",";}
    dataToSend += phancach + '"'+ this.name + '":' + JSON.stringify(this.value) ;
    i++;
});  
 dataToSend +='}'; 			
 dataToSend=$.parseJSON(dataToSend);
 $.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller&oper=edit&id='+window.id_edit,dataToSend)
 .done(function( response) {
  temp = response.split(";");	
  if(temp[0]==1){
      var success=false;
      var new_id="<?php get_text1("sua_khongthanhcong") ?>";                                               
  }else{	

    tooltip_message("<?php get_text1("sua_thanhcong") ?>");
    $("#dialog-form").dialog("close");
    $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhanvien').done(function(data){
        data=$.parseJSON(data)
        window.dataView.setItems(data);									
    })                                        
};                                     
});             
}

function load_all(){
    window.phongban = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0 AND [Active]=1&status=2&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.dantoc = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_DanToc&id=ID_DanToc&name=TenDanToc', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.trinhdo = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrinhDo&id=ID_TrinhDo&name=TenTrinhDo', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.quoctich = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_QuocTich&id=ID_QuocTich&name=TenQuocTich', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.chucvu = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_active&action=index&term=&status=2&tables=DM_ChucVu&id=ID_ChucVu&name=TenChucVu', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.chucdanh = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_ChucDanh&id=ID_ChucDanh&name=TenChucDanh', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.trinhdo = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrinhDo&id=ID_TrinhDo&name=TenTrinhDo', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.loaitinhluong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiTinhLuong&id=ID_LoaiTinhLuong&name=TenLoaiTinhLuong', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.nganhang = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NganHang&id=ID_NganHang&name=TenNganHang', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.ID_LoaiBangCap = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_LoaiBangCap&id=ID_LoaiBangCap&name=TenBangCap', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.ID_LoaiHopDong = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_LoaiHopDong&id=ID_LoaiHopDong&name=TenLoaiHopDong', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.ID_LoaiQuanHe = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=GD2_DM_LoaiQuanHeGiaDinh&id=ID_LoaiQuanHe&name=TenLoaiQuanHe', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.Id_TinhTrangHonNhan = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_TinhTrangHonNhan&id=Id_TinhTrangHonNhan&name=TenTinhTrangHonNhan', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.ID_ChuyenKhoa = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=GD2_ChuyenKhoa&id=ID_ChuyenKhoa&name=TenChuyenKhoa', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    window.ID_ThanhPho = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=0&tables=DM_TinhThanhPho&id=ID_ThanhPho&name=TenTinhThanhPho', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục phòng ban');}}).responseText;
    create_select("#NoiCapCMND",ID_ThanhPho);
    create_select("#phongban",phongban);
    create_select("#dantoc",dantoc);
    create_select("#quoctich",quoctich);
    create_select("#chucvu",chucvu);
    create_select("#chucdanh",chucdanh);
    create_select("#trinhdo",trinhdo);
    create_select("#loaitinhluong",loaitinhluong);
    create_select("#tennganhang",nganhang); 
    create_select("#Id_TinhTrangHonNhan",Id_TinhTrangHonNhan); 
    create_select("#Id_chuyenkhoa",ID_ChuyenKhoa); 
    var ngontay = { 'CP': 'CP', 'TP': 'TP', 'GP': 'GP', 'AP': 'AP', 'UP': 'UP','CT':'CT','TT':'TT','GT':'GT','AT':'AT','UT':'UT' };    
    $("#rowed4").setColProp('TenNgon', { editoptions: {value: ngontay }});    
}
$("#chuky_nv").click(function() {	
 $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_max_idnv", 
   function( data ) {
       $.each( data, function( key, val ) { 
           if(window.oper=="add"){
             window.search_string=val[0]["id"]+"_sign";
         }
         else{
             window.search_string=window.idnv+"_sign";
         }                    
         dialog_add_dm('Chỉnh sửa hình ảnh',95,95,6754353898787675,'pages.php?module=images_control&view=images_sign_edit&id_form=49&call_function='+$("#action2").val()+'&tenthumuc=Signs&search_string='+search_string,refresh_images2);
     })
   })
});
$("#hinhnhanvien_nv").click(function() {
   $.getJSON( "pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_max_idnv", 
       function( data ) {
        $.each( data, function( key, val ) { 
            if(window.oper=="add"){
                window.search_string2=val[0]["id"];
            }
            else{
                window.search_string2=window.idnv;
            }                 
            dialog_add_dm('Chỉnh sửa hình ảnh',95,95,6754353898787675,'pages.php?module=images_control&view=images_edit&id_form=49&tenthumuc=Staff&search_string='+search_string2,refresh_images);
        })   
    })   
});
function add_icon_button_dialog(_text,_icon){
    var btndialog = $('.ui-dialog-buttonpane').find('button:contains("'+_text+'")');
    btndialog.prepend('<span style="float:left; margin-top: 3px;" class="ui-icon ui-icon-'+_icon+'"></span>');
    btndialog.width(btndialog.width() + 75);
}
function imagesSelected(myFiles,callback) {
    var i,f;		 
    for ( i = 0, f; f = myFiles[i]; i++) {
     var imageReader = new FileReader();
     imageReader.onload = (function(aFile) {
       return function(e) {		 

          image_data=e.target.result;		
          $('#anh').attr("value",""); 
          $('#anh').attr("value",image_data);     
          $("#default_name").val(aFile.name); 
          $("#chuky_nv").attr("src",image_data);				
          check_file_type('application/octet-stream;image/jpg;image/jpeg',aFile.type);				   		   	    
      };
  })(f);
  imageReader.readAsDataURL(f);

}			 
callback();
}
function imagesSelected2(myFiles,callback) {		 
    var i,f;	 
    for ( i = 0, f; f = myFiles[i]; i++) {
     var imageReader = new FileReader();
     imageReader.onload = (function(aFile) {
       return function(e) {		 			
          image_data=e.target.result;			
          $('#anh2').attr("value",""); 
          $('#anh2').attr("value",image_data);     
          $("#default_name2").val(aFile.name); 
          $("#hinhnhanvien_nv").attr("src",image_data);	
          window.hinh_nhanvien=aFile.name;  				   	    
      };
  })(f);
  imageReader.readAsDataURL(f);		
}			 
callback();
}
function submit_file(){
 t=setTimeout(function(){     
     if(window.file_type==false){			 
         var formData = new FormData($('form')[0]);
         _status=$.ajax({
          url: 'file_manager/php/connector.php?answer=42&cmd=open&target=f1_XA&init=1&tree=1&_=1386694616800',  
          type: 'POST',					  
          data: formData,						
          contentType: false,
          processData: false,
          async: false, success: function(data, result) { 			           		 
          }}).responseText;	 			 
     }
 },2000);
}
function refresh_images(){

    $.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc=Staff&cmd=search&q='+search_string2+'&_=1387364774212', 
        function( data ) {  
            if(data["files"].length==0){         
                $("#total_images").val(data["files"].length); 

            }else{              
                total_image=data["files"][data["files"].length-1]["name"];
                $("#hinhnhanvien_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>/file_manager/php/connector.php?answer=42&tenthumuc=Staff&cmd=file&target=f1_" + encode64(total_image));
                window.hinh_nhanvien=total_image;
            }        
        });  
}
function refresh_images2(){
    $.getJSON( 'file_manager/php/connector.php?answer=42&tenthumuc=Signs&cmd=search&q='+search_string+'&_=1387364774212', 
        function( data ) {  
            if(data["files"].length==0){         
                $("#total_images2").val(data["files"].length); 			
            }else{                 
                total_image=data["files"][data["files"].length-1]["name"];
                $("#chuky_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>/file_manager/php/connector.php?answer=42&tenthumuc=Signs&cmd=file&target=f1_" + encode64(total_image));      
            }        
        });  
}



function create_grid_new(){			
    window.dataView;	
    var groupItemMetadataProvider = new Slick.Data.GroupItemMetadataProvider();	  		 
    window.grid;	 
    var options = {
     enableCellNavigation: true,
     showHeaderRow: true,
     headerRowHeight: 30,
     explicitInitialization: true,
     forceFitColumns: false,
     multiColumnSort: true,
     fullWidthRows:true,			
     frozenColumn: 2,
 };		
 window.columns = [	
 {name:'Họ lót',id:'HoLotNhanVien',field: "HoLotNhanVien", width:130, sortable: true},
 {name:'Tên nhân viên',id:'TenNhanVien',field: "TenNhanVien", width:50, sortable: true},
 {name:'Nick Name',id:'NickName',field: "NickName", width:60, sortable: true},
 {name:'Phòng ban',id:'TenPhongBan',field: "TenPhongBan", width:60, sortable: true}, 
 {name:'Trình độ',id:'TenTrinhDo',field: "TenTrinhDo", width:80, sortable: true},
 {name:'Giới tính',id:'gioi',field: "gioi", width:40, sortable: true},			
 {name:'Chức vụ',id:'TenChucVu',field: "TenChucVu", width:140, sortable: true},
 {name:'Chuyên môn',id:'TenChucDanh',field: "TenChucDanh", width:120, sortable: true},
 {name:'Chuyên khoa',id:'TenChuyenKhoa',field: "TenChuyenKhoa", width:100, sortable: true},
 {name:'Số CCHN',id:'SoChungChiHanhNghe',field: "SoChungChiHanhNghe", width:140, sortable: true},
 {name:'Kinh nghiệm',id:'Kinhnghiem',field: "Kinhnghiem", width:70, sortable: true,formatter: ngaythang},
 {name:'Ngày vào làm',id:'NgayVaoLam',field: "NgayVaoLam", width:70, sortable: true,formatter: ngaythang},
 {name:'Hợp đồng',id:'TenHopDong',field: "TenHopDong", width:140, sortable: true,formatter: bangcap},
 {name:'Ngày bắt đầu',id:'NgayBatDauHopDong',field: "NgayBatDauHopDong", width:70, sortable: true,formatter: ngaythang},
 {name:'Ngày kết thúc',id:'NgayKetThucHopDong',field: "NgayKetThucHopDong", width:70, sortable: true,formatter: ngaythang},
 {name:'Thời hạn hợp đồng',id:'hethan',field: "hethan", width:50, sortable: true},
 {name:'Bằng cấp',id:'TenBangCap',field: "TenBangCap", width:90, sortable: true,formatter: bangcap},
 {name:'Địa chỉ',id:'DiaChi',field: "DiaChi", width:200, sortable: true},
 {name:'Số điện thoại',id:'Mobile',field: "Mobile", width:80, sortable: true},
 {name:'Số điện thoại 2',id:'HomePhone',field: "HomePhone", width:90, sortable: true},
 {name:'CMND',id:'CMND',field: "CMND", width:60, sortable: true},				
 {name:'Email',id:'Email',field: "Email", width:180, sortable: true},
 {name:'Ngày sinh',id:'NgaySinh',field: "NgaySinh", width:70, sortable: true,formatter: ngaythang},											
 {name:'Mã số thuế cá nhân',id:'MaSoThueCaNhan',field: "MaSoThueCaNhan", width:90, sortable: true},
 {name:'Số bảo hiểm',id:'SoBaoHiem',field: "SoBaoHiem", width:80, sortable: true},
 {name:'Ghi chú',id:'GhiChu',field: "GhiChu", width:80, sortable: true},
 {name:'Đã nghỉ việc',id:'DaNghiViec',field: "DaNghiViec", width:40, sortable: true,formatter: CheckboxFormatter},				
 {name:'Là bác sĩ',id:'IsDoctor',field: "IsDoctor", width:40, sortable: true,formatter: CheckboxFormatter},	
 {name:'Là cộng tác viên',id:'IsCTVBenNgoai',field: "IsCTVBenNgoai", width:50, sortable: true,formatter: CheckboxFormatter},
 {name:'Gia đình',id:'Quanhe',field: "Quanhe", width:90, sortable: true,formatter: bangcap},						

 ];
 selectActiveRow =  false;
 var selectedRows = [];
 window.dataView = new Slick.Data.DataView({ groupItemMetadataProvider: groupItemMetadataProvider, displayTotalsRow: false });			 
 window.grid = new Slick.Grid("#grid", window.dataView,  window.columns, options);			
 var pager = new Slick.Controls.Pager(dataView, grid, $("#pager"));
 $('#grid').css({'height': $(window).height()-$("#top_main").height()-$(".ui-tabs-nav").height()-70+'px'});
 $('#grid').css({'width' : $(window).width()-50+'px'});
 window.grid.onSort.subscribe(function (e, args) {
   var cols = args.sortCols;
   window.dataView.sort(function (dataRow1, dataRow2) {
    for (var i = 0, l = cols.length; i < l; i++) {
      var field = cols[i].sortCol.field;
      var sign = cols[i].sortAsc ? 1 : -1;
      var value1 = dataRow1[field], value2 = dataRow2[field];
      var result = (value1 == value2 ? 0 : (value1 > value2 ? 1 : -1)) * sign;
      if (result != 0) {
       return result;
   }
}
return 0;
});
   window.grid.invalidate();
   window.grid.render();
});

 window.dataView.onRowCountChanged.subscribe(function (e, args) {
    window.grid.updateRowCount();
    window.grid.invalidateRows(args.rows);
    window.grid.render();					
});	 
 window.grid.registerPlugin(groupItemMetadataProvider);	
 window.grid.setSelectionModel(new Slick.CellSelectionModel());
 selectActiveRow = true;	
 window.grid.setSelectionModel(new Slick.RowSelectionModel({selectActiveRow: true}));
 window.dataView.onRowsChanged.subscribe(function (e, args) {
   window.grid.invalidateRows(args.rows);
   window.grid.render();			
});

 window.grid.registerPlugin(new Slick.AutoTooltips({ enableForHeaderCells: true }));	  
 window.grid.render();
 window.dataView.setGrouping([
 {
  getter: "TenPhongBan",
  formatter: function (g) {
    return "<strong>" + g.value +" Số lượng:"+ g.count+"</strong>"	
},	
aggregateCollapsed: false,     
collapsed: false,
displayTotalsRow: false,

},	   

]
);
 $(window.grid.getHeaderRow()).delegate(":input", "change keyup", function (e) {
   var columnId = $(this).data("columnId");
   if (columnId != null) {
    columnFilters[columnId] = $.trim($(this).val());
    if( $.trim($(this).val())!=''){					
      dataView.expandAllGroups();
  }else{						
      dataView.expandAllGroups();
  }
  dataView.refresh();
}
});
 window.grid.onHeaderRowCellRendered.subscribe(function(e, args) {

     if(args.column.id=='Kinhnghiem' ||args.column.id=='NgayVaoLam' ||args.column.id=='NgayBatDauHopDong' ||args.column.id=='NgayKetThucHopDong' ||args.column.id=='NgaySinh' ){
        $(args.node).empty();
        $("<input type='text'>")
        .data("columnId", args.column.id)
        .val(columnFilters[args.column.id])
        .appendTo(args.node)			  
        .dateEntry({dateFormat:'my /'});
    }else{
        $(args.node).empty();
        $("<input type='text'>")
        .data("columnId", args.column.id)
        .val(columnFilters[args.column.id])
        .appendTo(args.node);
    }
});		

 window.grid.onDblClick.subscribe(function (e, args){
     $('#rowed_qhgiadinh_iladd').show();
     $('#rowed_qhgiadinh_iledit').show();
     $('#rowed_qhgiadinh_ilsave').show();
     $('#rowed_qhgiadinh_ilcancel').show();
     $('#del_rowed_qhgiadinh').show();			
     $('#rowed_bangcap_iladd').show();
     $('#rowed_bangcap_iledit').show();
     $('#rowed_bangcap_ilsave').show();
     $('#rowed_bangcap_ilcancel').show();
     $('#del_rowed_bangcap').show();			
     $('#rowed_hopdong_iladd').show();
     $('#rowed_hopdong_iledit').show();
     $('#rowed_hopdong_ilsave').show();
     $('#rowed_hopdong_ilcancel').show();
     $('#del_rowed_hopdong').show();	
     $('#chamcong-ic').show();
     $('#dialog-form').dialog('open');
     rowdata=dataView.getItem(args.row);            
     window.oper='edit';
     reload_mabn=$("#manv").val();
     window.id_edit=rowdata.id;
     $('#rowed4').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_chamcong&id='+id_edit,datatype:'json'}) .trigger('reloadGrid');
     $('#rowed_qhgiadinh').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_qhgiadinh&id='+id_edit,datatype:'json'}) .trigger('reloadGrid');
     $('#rowed_bangcap').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bangcap&id='+id_edit,datatype:'json'}) .trigger('reloadGrid');
     $('#rowed_hopdong').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hopdong&id='+id_edit,datatype:'json'}) .trigger('reloadGrid');


     $("input:text").css("background-color","white");
     window.manv = rowdata.MaNV;
     var honv = rowdata.HoLotNhanVien;
     var tennv = rowdata.TenNhanVien;
     var hinhnv = rowdata.HinhNhanVien;
     window.hinh_nhanvien=rowdata.HinhNhanVien;
     window.search_string2=rowdata.HinhNhanVien;
     window.idnv=rowdata.id;
     var gioitinh =rowdata.GioiTinh;
     var dantoc =rowdata.ID_DanToc;
     var quoctich = rowdata.ID_QuocTich;
     var cmnd = rowdata.CMND;
     var hochieu = rowdata.HoChieu;
     var chucvu = rowdata.ID_ChucVu;
     var chucdanh = rowdata.ID_ChucDanh;
     var diachi = rowdata.DiaChi;
     var mobile = rowdata.Mobile;
     var homephone = rowdata.HomePhone;
     var email = rowdata.Email;
     var nickyahoo =rowdata.YahooID;
     var nickskype =rowdata.SkypeID;
     var ngaysinh = rowdata.NgaySinh;
     var ngayvaolam = rowdata.NgayVaoLam;
     var NgayNghiViec = rowdata.NgayNghiViec;
     var trinhdo =rowdata.ID_TrinhDo;
     var loaitinhluong = rowdata.ID_LoaiTinhLuong;
     var phongban = rowdata.ID_PhongBan;
     var chamcongbangmay = rowdata.ChamCongBangMay;
     var sotaikhoan = rowdata.TaiKhoanNH;
     var nganhang = rowdata.ID_NganHang;
     var masothue = rowdata.MaSoThueCaNhan;
     var sobaohiem =rowdata.SoBaoHiem;
     var ghichu = rowdata.GhiChu;
     var nghiviec = rowdata.DaNghiViec;
     var chuki = rowdata.HinhChuKy;
     window.chuky_nhanvien= rowdata.HinhChuKy;
     window.search_string= rowdata.HinhChuKy;
     var labs = rowdata.IsDoctor;
     var lactv = rowdata.IsCTVBenNgoai;
     var allowlogin = rowdata.AllowLogin;
     var nickname = rowdata.NickName;
     var username = rowdata.UserName;
     var password = rowdata.PassWord;
     var disable = rowdata.Disable;
     var Kinhnghiem=  rowdata.Kinhnghiem;
     var CoTinhLuongKeToan=  rowdata.CoTinhLuongKeToan;
     var ChungChiHanhNghe=  rowdata.ChungChiHanhNghe;
     var mabenhnhan=  rowdata.manhanvien;
     var NgayCapCMND=  rowdata.NgayCapCMND;
     var NoiCapCMND=  rowdata.NoiCapCMND;
     var Id_chuyenkhoa=  rowdata.Id_chuyenkhoa;
     var Id_TinhTrangHonNhan=  rowdata.Id_TinhTrangHonNhan;		
     var Id_GoiBenh=  rowdata.Id_GoiBenh;
	 
	  var SoChungChiHanhNghe=  rowdata.SoChungChiHanhNghe;


     $('#NgayNghiViec').val(NgayNghiViec);			
     $('#NoiCapCMND').val(NoiCapCMND);			
     $('#chuky_nv').attr("src","");
     load_sign(search_string,"chuky_nv");
     $("#hinhnhanvien_nv").attr("src","<?=$_SESSION["config_system"]["URL"]?>/file_manager/php/connector.php?answer=42&tenthumuc=<?=$_SESSION["config_system"]["Staff"]?>&cmd=file&target=f1_" + encode64(idnv+'_1.jpeg'));

     var _dimension;
     _dimension=$.ajax({url: 'pages.php?module=web_services&function=get_file_size&action=index&id_form=111&tenthumuc=<?=$_SESSION["config_system"]["Signs"]?>'+'&hash_name=f1_' + encode64(chuki), async: false, success: function(data, result) { 			           		 
     }}).responseText;		


     _dimension=_dimension.split(";");
     scale=_dimension[1]/_dimension[0];								 
     if(!isNaN(scale)){				  		
       $("#chuky_nv").css("width","230px");
       $("#chuky_nv").css("height",scale*230+"px");					 
   }else{  			  
       $("#chuky_nv").css("width","125px");
       $("#chuky_nv").css("height","145px");					  
   } 	

   var _dimension1;
   _dimension1=$.ajax({url: 'pages.php?module=web_services&function=get_file_size&action=index&id_form=111&tenthumuc=<?=$_SESSION["config_system"]["Staff"]?>'+'&hash_name=f1_' +  encode64(idnv+'_1.jpeg'), async: false, success: function(data, result) { 			           		 
   }}).responseText;
   _dimension1=_dimension1.split(";");
   scale1=_dimension1[0]/_dimension1[1];	
   if(!isNaN(scale1)){			 
       $("#hinhnhanvien_nv").css("height","155px");
       $("#hinhnhanvien_nv").css("width",scale1*155+"px");					 
   }else{  			  
       $("#hinhnhanvien_nv").css("width","125px");
       $("#hinhnhanvien_nv").css("height","145px");					  
   } 
   $("#Id_GoiBenh").val(Id_GoiBenh);
   $("#manv").val(manv);
   $("#ho").val(honv);
   $("#ten").val(tennv);
   $("#hinhnhanvien").val(hinhnv);
   $("#dantoc").val(dantoc);
   $("#quoctich").val(quoctich);
   $("#cmnd").val(cmnd);
   $("#hochieu").val(hochieu);
   $("#chucvu").val(chucvu);
   $("#chucdanh").val(chucdanh);
   $("#diachi").val(diachi);
   $("#mobile").val(mobile);
   $("#dienthoainha").val(homephone);
   $("#email").val(email);
   $("#yahoo").val(nickyahoo);
   $("#skype").val(nickskype);            
   $("#trinhdo").val(trinhdo);
   $("#loaitinhluong").val(loaitinhluong);
   $("#phongban").val(phongban);
   $("#sotaikhoan").val(sotaikhoan);
   $("#tennganhang").val(nganhang);
   $("#masothue").val(masothue);
   $("#sobaohiem").val(sobaohiem);
   $("#ghichu").val(ghichu);
   $("#chuki").val(chuki);
   $("#Nickname").val(nickname);
   $("#username").val(username);
   $("#password").val(password);
   $("#mabenhnhan").val(mabenhnhan);
   $("#NgayCapCMND").val(unixtimetostring('','',NgayCapCMND,'',''));
   $("#Kinhnghiem").val(unixtimetostring('','',Kinhnghiem,'',''));
   $("#ngaysinh").val(unixtimetostring('','',ngaysinh,'',''));
   $("#ngayvaolam").val(unixtimetostring('','',ngayvaolam,'',''));
   $("#NgayNghiViec").val(unixtimetostring('','',NgayNghiViec,'',''));
   $("#Id_chuyenkhoa").val(Id_chuyenkhoa);
   $("#Id_TinhTrangHonNhan").val(Id_TinhTrangHonNhan);
   $("#SoChungChiHanhNghe").val(SoChungChiHanhNghe);
   if(gioitinh=="1"){
    $("#nam").prop('checked',true);
    $("#nu").prop('checked',false);
}else{
   $("#nam").prop('checked',false);
   $("#nu").prop('checked',true);
}
if(nghiviec=="1"){
    $("#nghiviec").prop('checked',true);
}else{
   $("#nghiviec").prop('checked',false);
}
if(labs=="1"){
    $("#labacsi").prop('checked',true);
}else{
   $("#labacsi").prop('checked',false);
}
if(chamcongbangmay=="1"){
    $("#chamcongbangmay").prop('checked',true);
}else{
   $("#chamcongbangmay").prop('checked',false);
}
if(lactv=="1"){
    $("#congtacvien").prop('checked',true);
}else{
   $("#congtacvien").prop('checked',false);
}
if(allowlogin=="1"){
    $("#allowlogin").prop('checked',true);
}else{
   $("#allowlogin").prop('checked',false);
}
if(disable=="1"){
    $("#disable").prop('checked',true);
}else{
   $("#disable").prop('checked',false);
}
if(CoTinhLuongKeToan=="1"){
    $("#CoTinhLuongKeToan").prop('checked',true);
}else{
   $("#CoTinhLuongKeToan").prop('checked',false);
}		
if(ChungChiHanhNghe=="1"){
    $("#ChungChiHanhNghe").prop('checked',true);
}else{
   $("#ChungChiHanhNghe").prop('checked',false);
}		
})		

window.grid.onClick.subscribe(function (e,args) {
 if(selectActiveRow){
    if($.inArray(args.row, selectedRows) === -1){
       selectedRows = [];
       selectedRows.push(args.row)
   }else{
    selectedRows = []; 
}
}else{
  ($.inArray(args.row, selectedRows) === -1) ? selectedRows.push(args.row) : selectedRows.splice(selectedRows.indexOf(args.row), 1);
}			
window.grid.setSelectedRows(selectedRows);				  
});
window.grid.init();
window.dataView.beginUpdate();
window.dataView.setFilter(filter);		
window.dataView.endUpdate();	
}
window.columnFilters = {};
function filter(item) {	
	for (var columnId in columnFilters) {
      if (columnId !== undefined && columnFilters[columnId] !== "") {
        var c = window.grid.getColumns()[window.grid.getColumnIndex(columnId)];	
        if(c.field=='Kinhnghiem' ||c.field=='NgayVaoLam' ||c.field=='NgayBatDauHopDong' ||c.field=='NgayKetThucHopDong' ||c.field=='NgaySinh'){
         var parts = $.trim(columnFilters[columnId]).split("/");			
         var date_tam= new Date(parts[1], parts[0] - 1, 1);		
         var date_tam1= new Date(parts[1], parts[0], 0);		
         date_tam=Math.round(date_tam.getTime()/1000);
         date_tam1=Math.round(date_tam1.getTime()/1000);		
         if (item[c.field] < date_tam || item[c.field]>date_tam1) {				
             return false;				
         }
     }else{
         if(c.field=='TenPhongBan'){

            if ($.trim(item[c.field]).toLowerCase().indexOf(columnFilters[columnId].toLowerCase()) == -1 ) {
               return false;
           }
       }else{
        if ($.trim(item[c.field]).toLowerCase().substring(0, columnFilters[columnId].length) != columnFilters[columnId].toLowerCase()) {
           return false;
       }
   }			
}
}
}

return true;		
}

function number(row, cell, value, columnDef, dataContext) {
  tam=(parseInt(value)).formatMoney(0, ',', '.')
  return tam;
}

function sumTotalsFormatter(totals, columnDef) {
  var val = totals.sum && totals.sum[columnDef.field];
  if (val != null) {
    return val;
}
return "";
}



function TienThuVaoFormatter(value) {
	window.TienThuVao=value;
  return value.formatMoney(0, ',', '.');
}
function TienChiRaFormatter(value) {
	$("[id$='GhiChu_summary']").text('Còn lại : '+(TienThuVao-value).formatMoney(0, ',', '.'));
  return value.formatMoney(0, ',', '.');
}





function CheckboxFormatter (row, cell, value, columnDef, dataContext)
{
    if (value)
        return '<input type="checkbox" disabled name="" value="'+ value +'" checked />';
    else
        return '<input type="checkbox" disabled name="" value="' + value + '" />';
}


function bangcap (row, cell, value, columnDef, dataContext)
{
    if(value){
        return '<span title="'+value+'">'+value+'</span>';
    }else{
      return '';	
  }
}


function ngaythang (row, cell, value, columnDef, dataContext)
{
    if(value){		
      var date = new Date(value*1000);
      var year = date.getFullYear() < 10 ? '0' + date.getFullYear() : date.getFullYear(); 
      var month = date.getMonth()+1 < 10 ? '0' + (date.getMonth()+1) : date.getMonth()+1; 
      var date = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(); 
      return '<span title="'+value+'">'+date+'/'+month+'/'+year+'</span>';
  }else{
      return '';	
  }
}


function create_qhgiadinh(){
    $("#rowed_qhgiadinh").jqGrid({
        data:[],
        datatype: "local",
        colNames:[ 'Mã BN','Quan hệ','Họ lót','Tên','Tuổi','Active'],
        colModel:[
        {name:'MaBenhNhan',index:'MaBenhNhan', editrules: {required: true}, editable:true,width:80},
        {name:'ID_LoaiQuanHe',index:'ID_LoaiQuanHe',width:110, editable:true,formatter:"select",edittype:"select",editoptions:{value:ID_LoaiQuanHe}},				
        {name:'HoLotBenhNhan',index:'HoLotBenhNhan',editable:false,width:250},
        {name:'TenBenhNhan',index:'TenBenhNhan',editable:false,},
        {name:'tuoi',index:'tuoi', editable:false},  
        {name:'Active',index:'tuoi', editoptions: {defaultValue: 1}, editable:true,edittype:"checkbox",formatter:"checkbox",editoptions: {value:"1:0"},width:80,align:'center'},                 
        ],
        loadonce: false,     
        rowNum:1000,
        height:210,
        width:600,
        rowList:[],
        pager: '#prowed_qhgiadinh', 	  	
        viewrecords: true,        
        ignoreCase:true,
        pgbuttons: false, 
        pgtext: null,	
        emptyrecords: null,	
        recordtext: null,
        editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_qhgiadinh',	
        serializeRowData: function (postdata) { 	
         postdata.id_nhanvien=window.idnv;			
         return postdata;			
     },	
     ondblClickRow: function(rowId, rowIndex, columnIndex) {
        $("#prowed_qhgiadinh .ui-icon-pencil").click();
    }
});
    $("#rowed_qhgiadinh").jqGrid('navGrid','#prowed_qhgiadinh',{add: false,addtext: '',del:false,edit:false,search:false,refresh:false,deltext:'' }, {}, {});			
    $("#rowed_qhgiadinh").jqGrid('inlineNav', '#prowed_qhgiadinh',  {add: true, addtext: ' ', edittext: ' ', edit: true, closeOnEscape: true,savetext: ' ',canceltext:' ',
     addParams:{
        useDefValues: true,
        addRowParams: {
            keys: true,
            aftersavefunc: function(rowId, response,lastsel) {			
              $('#rowed_qhgiadinh').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_qhgiadinh&id='+idnv,datatype:'json'}) .trigger('reloadGrid');
          }}
      }
  });
}

function create_bangcap(){
    $("#rowed_bangcap").jqGrid({
        data:[],
        datatype: "local",
        colNames:[ 'Tên bằng cấp','Ghi chú'],
        colModel:[               
        {name:'ID_LoaiBangCap',index:'ID_LoaiBangCap', editable:true,formatter:"select",edittype:"select",editoptions:{value:ID_LoaiBangCap}},				
        {name:'GhiChu',index:'GhiChu',editable:false, editable:true},

        ],
        loadonce: false,     
        rowNum:1000,
        height:130,
        width:200,
        rowList:[],
        pager: '#prowed_bangcap', 	  	
        viewrecords: true,        
        ignoreCase:true,
        pgbuttons: false, 
        pgtext: null,		
        emptyrecords: null,	
        recordtext: null,
        editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bangcap',	
        serializeRowData: function (postdata) { 	
         postdata.id_nhanvien=window.idnv;			
         return postdata;			
     },	
     ondblClickRow: function(rowId, rowIndex, columnIndex) {
        $("#rowed_bangcap .ui-icon-pencil").click();
    }
});
    $("#rowed_bangcap").jqGrid('navGrid','#prowed_bangcap',{add: false,del:true,edit:false,search:false,refresh:false,deltext:'' }, {}, {});
    $("#rowed_bangcap").jqGrid('inlineNav', '#prowed_bangcap',  {add: true, addtext: ' ', edittext: ' ', edit: true, closeOnEscape: true,savetext: ' ',canceltext:' ',
     addParams:{
        useDefValues: true,
        addRowParams: {
            keys: true,
            aftersavefunc: function(rowId, response,lastsel) {			
              $('#rowed_bangcap').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bangcap&id='+idnv,datatype:'json'}) .trigger('reloadGrid');
          }}
      }
  });
}

function create_hopdong(){
    $("#rowed_hopdong").jqGrid({
        data:[],
        datatype: "json",
        colNames:[ 'Tên hợp đồng','Ngày BĐ','Ngày KT','Active'],
        colModel:[               
        {name:'ID_LoaiHopDong',index:'ID_LoaiHopDong', editable:true,formatter:"select",edittype:"select",editoptions:{value:ID_LoaiHopDong}},
        {name:'NgayBatDau',index:'NgayBatDau', editable:true,width:90, editrules: {required: true}, editoptions: {
           dataInit: function(element) {
               $(element).datepicker({ dateFormat:  'dd/mm/yy'}); 		
               $(element).dateEntry({dateFormat:'dmy/', spinnerImage: ''});                 
           }}
       },				
       {name:'NgayKetThuc',index:'NgayKetThuc',editable:true,width:90, editoptions: {
           dataInit: function(element) {					
               $(element).datepicker({ dateFormat:  'dd/mm/yy'}); 		
               $(element).dateEntry({dateFormat:'dmy/', spinnerImage: ''});

           }}
       },
       {name:'Active',index:'Active',editoptions: { defaultValue: 1},editable:true,edittype:"checkbox",formatter:"checkbox",editoptions: {value:"1:0"},width:65,align:'center'},

       ],
       loadonce: false,     
       rowNum:1000,
       height:130,
       width:200,
       rowList:[],
       pager: '#prowed_hopdong', 	  	
       viewrecords: true,        
       ignoreCase:true,
       pgbuttons: false, 
       pgtext: null,	
       emptyrecords: null,	
       recordtext: null,
       editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_hopdong',	
       serializeRowData: function (postdata) { 	
         postdata.id_nhanvien=window.idnv;			
         return postdata;			
     },	
     ondblClickRow: function(rowId, rowIndex, columnIndex) {
        $("#rowed_hopdong .ui-icon-pencil").click();
    }
});
    $("#rowed_hopdong").jqGrid('navGrid','#prowed_hopdong',{add: false,del:true,edit:false,search:false,refresh:false,deltext:''}, {}, {});
    $("#rowed_hopdong").jqGrid('inlineNav', '#prowed_hopdong',  {add: true, addtext: ' ', edittext: ' ', edit: true, closeOnEscape: true,savetext:' ',canceltext:' ',
     addParams:{
        useDefValues: true,
        addRowParams: {
            keys: true,
            aftersavefunc: function(rowId, response,lastsel) {			
              $('#rowed_hopdong').jqGrid('setGridParam', {url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hopdong&id='+idnv,datatype:'json'}) .trigger('reloadGrid');
          }}
      }

  });
}

function create_grid1(){
    var mydata=[];
    jQuery("#rowed4").jqGrid({
        data:mydata,
        datatype: "local",
        colNames:[ 'MaNv','Mã chấm công','Tên ngón','ID'],
        colModel:[
        {name:'MaNv',index:'MaNv',search:false, editable:false,align:'left',hidden:true},
        {name:'MaCc',index:'MaCc',editable:true,editrules: {required:true}, width:10, align:"center",edittype:"text",hidden:false},
        {name:'TenNgon',index:'TenNgon', width:10,align:'center',editable:true,formatter:"select",edittype:"select",hidden:false},
        {name:'ID_NhanVien',index:'ID_NhanVien',search:false, editable:false,align:'left',hidden:true},                 
        ],
        loadonce: false,       
        rowNum:1000,
        height:200,
        width:650,
        rowList:[],
        pager: '#prowed4',
        sortname: 'ID_NhanVien',
        viewrecords: true,
        sortorder: "asc",
        ignoreCase:true,
        pgbuttons: false, // disable page control like next, back button
        pgtext: null,
        caption:"Thêm chấm công",
        editurl:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_chamcong',	
        serializeRowData: function (postdata) { 	
         postdata.id_nhanvien=window.idnv;		
         postdata.manv=window.manv;				
         return postdata;			
     },	
 });
    $("#rowed4").jqGrid('navGrid','#prowed4',{add: false,del:true,edit:false,search:false}, {}, {});
    $("#rowed4").jqGrid('inlineNav', '#prowed4',  {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,


});

    $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {				
       $("#rowed4_iledit .ui-icon-pencil").click();				
   } } );
}

function unixtimetostring (row, cell, value, columnDef, dataContext)
{
    if(value){		
      var date = new Date(value*1000);
      var year = date.getFullYear() < 10 ? '0' + date.getFullYear() : date.getFullYear(); 
      var month = date.getMonth()+1 < 10 ? '0' + (date.getMonth()+1) : date.getMonth()+1; 
      var date = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(); 
      return date+'/'+month+'/'+year;
  }else{
      return '';	
  }
}


function isgroup(){
	if ($('#group').is(":checked")) {	
     if ($('#chuyenmon').is(":checked")) {				
        window.dataView.setGrouping([
        {
          getter: "TenPhongBan",
          formatter: function (g) {return "<strong>" + g.value +" Số lượng:"+ g.count+"</strong>"	},									
          aggregateCollapsed: false,     
          collapsed: false,				
          displayTotalsRow: false,				 
      },	  
      {
          getter: "TenChucDanh",
          formatter: function (g) {return "<strong>" + g.value +" Số lượng:"+ g.count+"</strong>"	},									
          aggregateCollapsed: false,     
          collapsed: false,				
          displayTotalsRow: false,				 
      },	 			  
      ]);
    }else{
        window.dataView.setGrouping([
        {
          getter: "TenPhongBan",
          formatter: function (g) {return "<strong>" + g.value +" Số lượng:"+ g.count+"</strong>"	},									
          aggregateCollapsed: false,     
          collapsed: false,				
          displayTotalsRow: false,				 
      },	   			  
      ]);
    }
}else{		
 if ($('#chuyenmon').is(":checked")) {
    window.dataView.setGrouping([ {
      getter: "TenChucDanh",
      formatter: function (g) {return "<strong>" + g.value +" Số lượng:"+ g.count+"</strong>"	},									
      aggregateCollapsed: false,     
      collapsed: false,				
      displayTotalsRow: false,				 
  },	 
  ]);
}else{
    dataView.setGrouping([])
}

}
}
function func_reload(){
    $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_nhanvien').done(function(data){
        data=$.parseJSON(data)
        window.dataView.setItems(data);         
        dataView.expandAllGroups(); 
        
        
        
        grid.setSelectedRows([dataView.getRowById (idnhanvien_open)]);
        grid.scrollRowIntoView(dataView.getRowById (idnhanvien_open));

    })
}
</script>