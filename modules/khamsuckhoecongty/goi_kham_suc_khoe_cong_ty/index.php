<!--author: Phan Nam-->
<style type="text/css">
.ui-button-text{
	padding:0 !important;
}

.ui-dialog-buttonset .ui-button-text{
	  padding: 0.4em 1em!important;
}
.frame_u78787878975f2{
	width:300px!important;
	text-align:center!important;
	height:auto;
	}
.frame_u78787878975f3{
	width:300px!important;
	text-align:center!important;
	height:auto;
	}
.viethoachucai{
	text-transform: capitalize;
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
#gbox_rowed3, #gbox_rowed4, #gbox_rowed5, #gbox_rowed6, #gbox_rowed7{
    margin-left:4px;
    margin-top:5px;
    box-shadow:0px 0px 10px #a0a0a0;
    border:1px solid #919191; 
}
.no-close .ui-dialog-titlebar-close {
display: none;
}#n_top{
   border-radius: 6px 6px 6px 6px;
   border: 1px solid #d4ccb0;
   height:100px;
   margin: 5px;
   background:#FBFBF5;
}.n_top_left{
    /*	background:#FF0;*/
    float: left;
    width: 100%;
    height: 100%;

}
.n_top_right{
   /*background:#9F0;*/
   float: left;
   width: 12%;
   height: 100%;

   }.n_top_left_t{
       margin-top:5px;
       margin-left:5px;

       float: left;
       width: 1000px;
       height: 33%;
   }
   .n_top_left_b{
       margin-left:5px;
       width: 1000px;
       float: left;
       height: 33%;
}.chuataoluotkham{
    background:#F5F5F5;
    color: #000000;
    border-bottom: none;
 }
.datao{
        background:#FFFF00;
 }
#menu,#menu2{
width:160px;
}#soluot{
  margin-left: 47px!important;  
  
  }
#soluot,#tongcong,#tongcong2{
  box-shadow:none!important;  
  margin-top: 4px!important;  
  text-align: right!important;  
  padding: 0 5px 0 0!important;  
  }
#tongcong{
  margin-left: 160px!important;  
}
input.custom_button_n[type="button"] {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    font-size: 11px;
    height: 17px !important;
    outline: medium none;
    text-decoration: underline;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.6);
    width: 50px !important;
  color:#00F;
  margin-left:3px!important;
  width: 35px !important
}input.custom_button_n[type="button"]:hover{
  color:red;
  margin-left:3px!important;
  width: 35px !important
  }#bottom{
   border-radius: 6px 6px 6px 6px;
   border: 1px solid #d4ccb0;
   height:40px;
   margin: 5px;
   background:#FBFBF5;
}
#prowed3_left{
	display:none !important;
}
#prowed3_center{
	width:255px !important;
}
td.ui-pg-button {
    padding-right: 2px !important;
}
.ui-paging-info{
	text-align:left !important;
}
</style>


<body> 
<input type="hidden" value="0" id="inlan" name="inlan"> 
<input type="hidden" value="0" id="bncuoi" name="bncuoi"> 

<input type="hidden" value="0" id="dachidinh" name="dachidinh"> 
<div id="dialog-chuataoluotkhamtudong" title="Thông báo?" style="display:none">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bệnh nhân chưa tạo lượt khám tự động.</p>
</div>
<div id="dialog-chuachonbenhnhan" title="Thông báo" style="display:none;">
  Bạn chưa chọn bệnh nhân, vui lòng chọn các bệnh nhân trước khi thực hiện chức năng này
</div>
<div id="dialog-xuatexcel" title="Thông báo" style="display:none;">
  Bạn có muốn xuất excel theo xét nghiệm không?
</div>
<div id="dialog-xuatexcelxh" title="Thông báo" style="display:none;">
  Bạn có muốn xuất excel theo xếp hàng không?
</div>
<div id="dialog-indiachi" title="Thông báo" style="display:none;">
  Bạn có muốn In địa chỉ hàng loạt không?
</div>

<div id="dialog-inchidinh" title="Thông báo" style="display:none;">
  Bạn có muốn In phiếu chỉ định của bệnh nhân <span id="_hotenbn3" class="viethoachucai" style="font-weight:bold"> </span> hay không?
</div>
<div id="dialog-inphieuksk1bn" title="Thông báo" style="display:none;">
  Bạn có muốn In phiếu khám sức khỏe của bệnh nhân <span id="_hotenbn" class="viethoachucai" style="font-weight:bold"> </span> hay không?
</div>
<div id="dialog-inphieukskhangloat" title="Thông báo" style="display:none;">
  Bạn có muốn In phiếu khám sức khỏe hàng loạt không
</div>

<div id="dialog-inphieukham" title="Thông báo" style="display:none;">
  Bạn có muốn In phiếu khám của bệnh nhân <span id="_hotenbn2" class="viethoachucai" style="font-weight:bold"> </span> hay không?
</div>

<div id="dialog-confirm" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bạn có muốn chỉ định trước khi kích hoạt không? <br>
Chọn <strong>YES</strong> - Hoãn lại việc kích hoạt. Chọn <strong>NO</strong> - Kích hoạt không cần chỉ định
  </p>
</div>
<div id="dialog-confirm-dakham" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bệnh nhân này đã được gọi vào khám. Bạn không thể hủy kích hoạt
  </p>
</div>

<div id="dialog-confirm-dachidinh" title="Thông báo" style="display:none;">
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Bệnh nhân này đã được chỉ định, bạn có muốn chỉ định thêm hạng mục khám cho bệnh nhân này không?
  </p>
</div>

<div id="dialog" title="Thông báo" style="display:none;">
Bạn chắc chắn muốn hủy chỉ định này?
  <textarea id="lydohuybo" style="width:375px; height:100px; display:none;" ></textarea>
  <input type="hidden" id="idk" value="" />
</div>


    <div  class="data_congty">
        <table id="data_congty">
        </table>   
    </div>
    <div  class="data_dotkham">
        <table id="data_dotkham">
        </table>   
    </div>

    <div  class="goikham" style="display:none;">
        <table id="goikham">
        </table>   
    </div>

    <ul id="menu" > 
        <li id='kichhoat'> <a id="active" href="#"><span class="ui-icon ui-icon-check"></span>Kích hoạt vào hàng chờ</a></li>
         <li id='kichhoat_new' style="display:none" class="ui-state-disabled"> <a id="active_new" href="#"><span class="ui-icon ui-icon-check"></span>Kích hoạt vào hàng chờ</a></li>
        <li id='huykichhoat'> <a id="deactive" href="#"><span class="ui-icon ui-icon-closethick"></span>Hủy kích hoạt</a></li>
        <li id='huykichhoat_new' style="display:none" class="ui-state-disabled"> <a id="deactive_new" href="#"><span class="ui-icon ui-icon-closethick"></span>Hủy kích hoạt</a></li>
        <li id='rekichhoat'> <a id="reactive" href="#"><span class="ui-icon ui-icon-check"></span>Kích hoạt lại</a></li>
    </ul>
    <ul id="menu2" > 
        <li id='kichhoat2'> <a id="active2" href="#"><span class="ui-icon ui-icon-check"></span>Kích hoạt vào hàng chờ</a></li>
        <li id='huykichhoat2'> <a id="deactive2" href="#"><span class="ui-icon ui-icon-closethick"></span>Hủy kích hoạt</a></li>
    </ul>

				<div id="n_top">
                    <div class="n_top_left">
                       <div class="n_top_left_t">
                        <span class="custom-combobox">
                            <label>Công ty: </label>
                            <input id='com_congty' class='com_congty'  style=" margin-left: 10px; " placeholder="--Chọn công ty--"></span>
                            <input id='com_congty1' class='com_congty1'  style="width:200px;display:none">
                            <a id='taoluotkhamtudong' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:32px!important;vertical-align:top;width:108px;height:14px;"  >Tạo L.Khám tự động</a>
                            <a id='inphieukskhangloat' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:130px;height:14px;"  >In phiếu KSK hàng loạt</a>
                            <a id='inphieukham' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:76px;height:14px;"  >In phiếu khám</a>
                             <a id='xuatexcelxh' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:125px;height:14px;"  >Xuất Excel chưa khám</a>
                             <a id='indiachi' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >In nhãn</a>
                             <a id='xuatexcel_phiTH' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >Excel phí</a>
                           
                             

                        </div>
                        <div class="n_top_left_b">
                           <span class="custom-combobox">
                            <label>Đợt khám: </label>
                            <input id='com_dotkham' class='com_dotkham'  placeholder="--Chọn gói KSK công ty--" ></span>
                            <input id='com_dotkham1' class='com_dotkham1'  style="width:200px;display:none">
                            <a id='chidinhtheogoikham' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:32px!important;vertical-align:top;width:108px;height:14px;"  >CĐ theo gói khám</a>
                            <a id='inphieukskmotbn' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:130px;height:14px;"  >In phiếu KSK một BN</a>
                            <a id='inchidinh' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:76px;height:14px;"  >In chỉ định</a>
                             <a id='xuatexcel' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:125px;height:14px;"  >Xuất Excel xét nghiệm</a>
                             <a id='baocao' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >Báo cáo</a>
                             
                             <a id='xuatexcel_phiTH_nhom' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:90px;height:14px;"  >Excel gộp nhóm</a>

                        </div>
                        <div class="n_top_left_b">
                        	 <span class="custom-combobox">
                           
                           <input id="nhomthongke" placeholder="--Tìm theo--" style="margin-left:56px"/ ></span>
                          <a id='chidinhtheogoikhamhangloat' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:32px!important;vertical-align:top;width:108px;height:14px;"  >CĐ hàng loạt</a>
                          <a id='xuatexcel_trangthaikham' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >Ex.t.thái</a>
                          <a id='baocao_excel' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:75px;height:14px;"  >Excel Med</a>


 <a id='xuatexcel_xq' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >KQ_CLS</a>
  <a id='xuatexcel_sa' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >KQ_TongQuat</a>


                          <a id='excel_doanhthu_ksk' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:135px;height:14px;"  >Excel Doanh Thu KSK</a>

                            <a id='xuatexcel_xn' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:2px!important;vertical-align:top;width:55px;height:14px;"  >Excel XN</a>
                            
                        </div>
                        <div style="float:left; height:100%; width:9%;position: relative;top: -40px;" >
                         <a id='baocao1' class="fm-button ui-state-default ui-corner-all " style="margin-top:4px; padding-top:20px; margin-left:5px!important;vertical-align:top;width:45px;height:35px; display:none"  >Báo cáo</a>
                         </div>
                          

                    </div>

                </div><!-- end div#n_top-->
        <div id="panel_main" style="margin-top:10px;" >  
           <div class="ui-layout-west ui-widget-content left_col "> 

               <div>
                <div id="panel_sub">
                   <div class="ui-layout-west ui-widget-content left_col trai"> 
                       <table id="rowed3" ></table>
                       <div id="prowed3">
                       </div>  
                       
                   </div>
                   <div class="center_col ui-widget-content ui-layout-center giua"> 
                       <table id="rowed4" ></table> 
                   </div>
               </div>  
           </div>
       </div>
       <div class="center_col ui-widget-content ui-layout-center n-center"> 
          <table id="rowed5" ></table> 
          <div id="prowed5">
             <!-- <input id="tongcong" class="disable" type="text" value="Tổng cộng" readonly disabled style="width:70px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> 
              <input id="tongcong2" class="disable" type="text" value="0" readonly disabled style="width:82px;background:#4CA109;border:1px solid #327E04; color: #FFFFFF;font-weight: bold;"   /> --> 
           </div>
           <div id="bottom">
              <a id='luu' class="fm-button ui-state-default ui-corner-all " style="margin-top:-1px; margin-left:20px!important;vertical-align:top;width:70px;height:17px;margin-top: 6px;"  >Lưu [F10]</a>
           </div>
      </div>
  </div>
</body>
</html> 

<script type="text/javascript">
var report_code=["KhamSucKhoe_Mat1","KhamSucKhoe_Mat1","KhamSucKhoe_Mat1","InPhieuKhamBenh","PhieuChiDinh"];
var report_name=["Phiếu khám sức khỏe hàng loạt","Phiếu khám sức khỏe 1 BN","In phiếu khám","Phiếu chỉ định"];
jQuery(document).ready(function() {
	window.dangluukham=0;
	window.vitridangdung='';
	checkbox_grid('gs_ChonIn','#rowed3')
	openform_shortcutkey();
  create_combobox_new('#com_congty',create_congty,'cn','','data_congty',0);
  create_combobox_new('#com_dotkham',create_dotkham_congty,'cn','[]','data_ds_goikhambyidcongty','');
  create_combobox_new('#nhomthongke',create_nhomthongke,'cn','','data_nhomthongke',12);
  temp = jQuery(window).height() - 40;
  $("#panel_main").css("height", temp + "px");
  $("#panel_main").fadeIn(1000);

  temp2 = jQuery(window).height() - 40;
  $("#panel_sub").css("height", temp2 + "px");
  $("#panel_sub").fadeIn(1000);

  load_select_nguoichidinh();
  load_select_trangthai();
  load_select_tennhomcha();
  create_layout();
  create_layout1();
  create_grid();
  create_grid2();
  create_grid3();
  resize_control();
  goikham();
  
  //func_reload();
  //func_reload2();
  
  $( "#dialog-chuataoluotkhamtudong" ).dialog({
      resizable: false,
	  autoOpen:false,
      height:170,
	  width:300,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });
  
  $("#baocao_excel,#xuatexcel_xq,#excel_doanhthu_ksk,#taoluotkhamtudong,#inphieukskhangloat,#inphieukham,#chidinhtheogoikham,#inphieukskmotbn,#inchidinh,#baocao,#luu,#indiachi,#xuatexcel,#xuatexcelxh,#xuatexcel_phiTH,#xuatexcel_phiTH_nhom,#xuatexcel_xn,#xuatexcel_trangthaikham").button();



  $(window).resize(function() {
    temp = jQuery(window).height() - 40;
    $("#panel_main").css("height", temp + "px");
	$("#panel_sub").css("height", temp + "px");
    resize_control();
})

// huy thêm nút excel báo cáo doanh thu ksk
$('#excel_doanhthu_ksk').click(function(e){
    $('#doanhthu_ksk_dialog').remove();
    $('.ui-dialog[aria-describedby*="doanhthu_ksk_dialog"]').remove();
    // alert('haha')
    $("body").append('<div id="doanhthu_ksk_dialog" style="display: none;"><fieldset id="loaikhoaphong"><legend>Chọn tháng, năm</legend><label style="margin-left:0px;font-weight:bold"> Chọn tháng, năm:</label><select id="thang" style="width:80px"><?php $m=date('m'); for($i=1;$i<=12;$i++){ ?><option value="<?=$i?>"<?php if($m==$i){ echo "selected"; }?> ><?=$i?></option><?php }?></select> /<select id="nam" style="width:80px;"><?php $m=date('m'); $y=date('Y'); $m=$m; $y=$y; $nam=2013; for($i=0;$i<$y-2013;$i++){ $nam+=1; ?><option value="<?=$nam?>"<?php if($y==$nam){ echo "selected"; }?> ><?=$nam?></option><?php }?></select></fieldset></div>');
    $('#doanhthu_ksk_dialog').dialog({
      title: 'Xuất Excel Doanh Thu KSK',
      open: true,
      width: 350,
      height: 150,
      modal: false,
      buttons: [
        {
          id: 'luu',
          text: 'Xuất',
          click: function(e){
            var thang = $('#thang').val();
            var nam = $('#nam').val();
            window.open('resource.php?module=report&view=khamsuckhoecongty&action=excel_doanhthu_ksk&id_form=2457&thang='+thang+'&nam='+nam+'&type=excel');
            $(this).dialog('close');
          }
        },
        {
          id: 'luu',
          text: 'Đóng',
          click: function(e){
            $(this).dialog('close');
          }
        }
      ]
    });
});
$("#xemchitiet").change(function(event) {
      if($("#xemchitiet").is(':checked')==true){
      //  $("#gs_TenLoaiKham").focus();
      //  $("#gs_TenLoaiKham").val("");
        $("#rowed4").jqGrid('setGridParam',{groupingView: { groupCollapse : false} }).trigger('reloadGrid');

      }else{
        
      
        $("#rowed4").jqGrid('setGridParam',{groupingView: { groupCollapse : true} }).trigger('reloadGrid');
      }
    });
	
$("#baocao").click(function(){
	if( $("#com_congty").val()==''){
    tooltip_message("Hãy chọn tên một công ty");
    }
	else{
	//alert();
		$.cookie("in_status", "print_preview"); 
		dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ketquakhamsuckhoe_New&type=report&id_form=123&tencongty="+ $("#com_congty").val()+"&iddotkham="+$("#com_dotkham_hidden").val()+"&idnhomthongke="+$("#nhomthongke_hidden").val(),'KetQuaKhamSucKhoe');
	}
});
$("#xuatexcel_xq").click(function(){
       window.open("resource.php?module=report&view=<?=$modules?>&action=Med_KQ_CLS&type=excel&id_form=123&iddotkham="+$("#com_dotkham_hidden").val()+"&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
});
$("#xuatexcel_sa").click(function(){


  window.open("resource.php?module=report&view=<?=$modules?>&action=Med_KQ_KhamTongQuat&type=excel&id_form=123&iddotkham="+$("#com_dotkham_hidden").val()+"&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
});
//

$("#inphieukskmotbn").click(function(){
	 
	 var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
     var rowData = $("#rowed3").getRowData(selr);
	 $("#_hotenbn").html(rowData['TenBenhNhan']);
	$( "#dialog-inphieuksk1bn" ).dialog("open");
});

$("#inphieukskhangloat").click(function(){ 
	$( "#dialog-inphieukskhangloat" ).dialog("open");
	$("#bncuoi").val(0);
});

$("#indiachi").click(function(){ 
	$( "#dialog-indiachi" ).dialog("open");
});
$( "#dialog-chuachonbenhnhan" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        },
      }
    });

$( "#dialog-inphieuksk1bn" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
			$.cookie("in_status", "print_preview");
          $( this ).dialog( "close" );
		  var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
          var rowData = $("#rowed3").getRowData(selr);
		  if(selr.length){
		  dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_cty_1benhanhan&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&tencongty="+$("#com_congty").val()+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
			 $(".frame_u78787878975f").css("width","793px");
		  }
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	
$( "#dialog-inphieukskhangloat" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  var _tam2=0;
		  
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs');

		  var id_benhnhan="",ID_LuotKham="";
		  
		 $('#rowed3 tr td[aria-describedby="rowed3_ChonIn"] input[type="checkbox"]').each(function() {
				var row = $(this).closest('tr.jqgrow');
				var tam = row.attr('id');
				 var rowData = $("#rowed3").getRowData(tam);
				//$(this).prop('checked', true);
				 if($(this).is( ":checked" )) {
				  id_benhnhan+=rowData["ID_benhNhan"]+";;";
				  ID_LuotKham+=rowData["ID_LuotKham"]+";;";					 
				 }
			//$(this).prop('checked')
		});			
			  /* var rowData = $("#rowed3").getRowData(tmp1[i]);
			   if($('#'+tmp1[i]+'_ChonIn').is( ":checked" )) {
				  id_benhnhan+=rowData["ID_benhNhan"]+";;";
				  ID_LuotKham+=rowData["ID_LuotKham"]+";;";
			   }
		  }*/
		  if(id_benhnhan!=""){
		   $.cookie("in_status", "print_preview"); 
		   //get_printer("#inphieukskhangloat",set_printer,$.cookie('remote_ip'),$.cookie('username_window'),'KhamSucKhoe_Mat1');		    	
		   dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_hangloat&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+ID_LuotKham+"&tencongty="+$("#com_congty").val()+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
		  }else{
			 $( "#dialog-chuachonbenhnhan" ).dialog('open'); 
			 }

        },
        "NO": function() {
           $( this ).dialog( "close" );
		  /*var _tam2=0;
		  
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs');
		  for(var ii=0;ii<tmp1.length;ii++){
			  if($('#'+tmp1[ii]+'_ChonIn').is( ":checked" )) {
			  _tam2=_tam2+1;
			  }
		  }
		  var id_benhnhan="",ID_LuotKham="";
		  
		  for(var i=0;i<tmp1.length;i++){
			   var rowData = $("#rowed3").getRowData(tmp1[i]);
			   if($('#'+tmp1[i]+'_ChonIn').is( ":checked" )) {
				  id_benhnhan+=rowData["ID_benhNhan"]+";;";
				  ID_LuotKham+=rowData["ID_LuotKham"]+";;";
			   }
		  }
		   $.cookie("in_status", "print_direct"); 
		   //get_printer("#inphieukskhangloat",set_printer,$.cookie('remote_ip'),$.cookie('username_window'),'KhamSucKhoe_Mat1');		    	
		   dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_hangloat&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+ID_LuotKham+"&type=report&id_form=10",'KhamSucKhoe_Mat1');*/
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
$( "#dialog-indiachi" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
		  var _tam2=0;
		  
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs');
		  for(var ii=0;ii<tmp1.length;ii++){
			  if($('#'+tmp1[ii]+'_ChonIn').is( ":checked" )) {
			  _tam2=_tam2+1;
			  }
		  }
		  var id_benhnhan="",ID_LuotKham="";
		  
		 $('#rowed3 tr td[aria-describedby="rowed3_ChonIn"] input[type="checkbox"]').each(function() {
				var row = $(this).closest('tr.jqgrow');
				var tam = row.attr('id');
				 var rowData = $("#rowed3").getRowData(tam);
				//$(this).prop('checked', true);
				 if($(this).is( ":checked" )) {
				  id_benhnhan+=rowData["ID_benhNhan"]+";;";
				  ID_LuotKham+=rowData["ID_LuotKham"]+";;";					 
				 }
			//$(this).prop('checked')
		});
		if(id_benhnhan!=""){
		   $.cookie("in_status", "print_preview"); 
		   dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=indiachi_hangloat&header=top&id_benhnhan="+id_benhnhan+"&id_luotkham="+ID_LuotKham+"&tencongty="+$("#com_congty").val()+"&type=report&id_form=10",'InNhan_KSKCongTy');
		}else{
			 $( "#dialog-chuachonbenhnhan" ).dialog('open'); 
		}

        },
        "NO": function() {
           $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
$("#xuatexcel").click(function(e) {
    $( "#dialog-xuatexcel" ).dialog('open');
});

$("#baocao_excel").click(function(e) {


  if( $("#com_congty").val()==''){
    tooltip_message("Hãy chọn tên một công ty");
    }
  else{
  //alert();
   /// $.cookie("in_status", "print_preview"); 
    //dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=ketquakhamsuckhoe&type=report&id_form=123&tencongty="+ $("#com_congty").val()+"&iddotkham="+$("#com_dotkham_hidden").val()+"&idnhomthongke="+$("#nhomthongke_hidden").val(),'KetQuaKhamSucKhoe');
    window.open("resource.php?module=report&view=<?=$modules?>&action=ketquakhamsuckhoeExcel&type=excel&id_form=123&tencongty="+ $("#com_congty").val()+"&iddotkham="+$("#com_dotkham_hidden").val()+"&idnhomthongke="+$("#nhomthongke_hidden").val());
  }

  
    
});


$("#xuatexcelxh").click(function(e) {
    $( "#dialog-xuatexcelxh" ).dialog('open');
});
$( "#dialog-xuatexcel" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" ); 
		  if($("#gs_DaXepHang").val()=='' || ($("#gs_DaXepHang").val()=='' && $("#gs_DemXetNghiem").val()=='')){//xuat_excel_ds_benhnhan_goikham__xetnghiem_xephang
			  window.open("resource.php?module=report&view=<?=$modules?>&action=xuat_excel_ds_benhnhan_goikham&type=excel&ac=xn&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
		  }else{
			   window.open("resource.php?module=report&view=<?=$modules?>&action=xuat_excel_ds_benhnhan_goikham__xetnghiem_xephang&type=excel&xephang="+$("#gs_DaXepHang").val()+"&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
		  }
        },
        "NO": function() {
           $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	$("#inchidinh").click(function(){
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
    	 var rowData = $("#rowed3").getRowData(selr);
	 	$("#_hotenbn3").html(rowData['TenBenhNhan']);
		$( "#dialog-inchidinh" ).dialog('open');
		
		
	});
$( "#dialog-xuatexcelxh" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" ); 
		  window.open("resource.php?module=report&view=<?=$modules?>&action=xuat_excel_ds_benhnhan_goikham&type=excel&ac=xh&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xephang="+$("#gs_DaXepHang").val());
        },
        "NO": function() {
           $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	$("#inchidinh").click(function(){
		var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
    	 var rowData = $("#rowed3").getRowData(selr);
	 	$("#_hotenbn3").html(rowData['TenBenhNhan']);
		$( "#dialog-inchidinh" ).dialog('open');
		
		
	});

$( "#dialog-inchidinh" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
			$.cookie("in_status", "print_preview");
          $( this ).dialog( "close" );
		  var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
          var rowData = $("#rowed3").getRowData(selr);
		  var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
		  var xn=0;
		 for(var i=0;i<tmp2.length;i++){
			 var rowData2 = $("#rowed5").getRowData(tmp2[i]);
			 if(rowData2['XetNghiem']==1){
				xn=1;
			 }
			 if(i==tmp2.length-1){
				 dialog_report("Xem trước khi in",90,90,"u78787878975f2","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhkham_all&header=top&xetnghiem="+xn+"&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'PhieuChiDinh');
				 }
			 
		 }
		 
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });
	
//
$("#xuatexcel_phiTH").click(function(){
  window.open("resource.php?module=report&view=<?=$modules?>&action=xuat_excel_phichitiet&type=excel&xephang="+$("#gs_DaXepHang").val()+"&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
});


$("#xuatexcel_trangthaikham").click(function(){
  window.open("resource.php?module=report&view=<?=$modules?>&action=xuat_excel_trangthaikham&type=excel&xephang="+$("#gs_DaXepHang").val()+"&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
});



$("#xuatexcel_xn").click(function(){
  window.open("resource.php?module=report&view=<?=$modules?>&action=xuat_excel_xetnghiemAll&type=excel&xephang="+$("#gs_DaXepHang").val()+"&id_congty="+$("#com_congty_hidden").val()+"&id_goikham="+$("#com_dotkham_hidden").val()+"&tencongty="+$("#com_congty").val()+"&xetnghiem="+$("#gs_DemXetNghiem").val());
});
$("#inphieukham").click(function(){
	
	var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
     var rowData = $("#rowed3").getRowData(selr);
	 $("#_hotenbn2").html(rowData['TenBenhNhan']);
	$( "#dialog-inphieukham" ).dialog("open");
	$("#bncuoi").val(0);
});
$( "#dialog-inphieukham" ).dialog({
	  autoOpen: false,
      resizable: false,
      height:140,
      modal: true,
      buttons: {
        "YES": function() {
		$.cookie("in_status", "print_preview");
          $( this ).dialog( "close" );
		  var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
          var rowData = $("#rowed3").getRowData(selr);
		  if(selr.length){
		  dialog_report("Xem trước khi in",90,90,"u78787878975f3","resource.php?module=report&view=<?=$modules?>&action=phieukhambenh&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'InPhieuKhamBenh');
			 //$(".frame_u78787878975f3").css("width","793px");
		  }
        },
        "NO": function() {
          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });

$("#taoluotkhamtudong").click(function(){
	if($("#com_dotkham").val()!=''){
		$("#taoluotkhamtudong").button('disable');
		 var gridData = jQuery("#rowed3").getRowData();
		 var postData = JSON.stringify(gridData);
		 postData='{"id":'+postData+'}';
		 postData=$.parseJSON(postData);
		 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&ac=taoluotkhamtudong',postData).done(function(data){
			var selr = jQuery("#data_congty").jqGrid('getGridParam','selrow');
			var selr2 = jQuery("#data_dotkham").jqGrid('getGridParam','selrow');
			$("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachbenhnhan&id_kh_congty='+window._idcongty+'&id_goikham_congty='+window._idgoikhamcongty}).trigger('reloadGrid');
			tooltip_message("Tạo lượt khám thành công");
			$("#taoluotkhamtudong").button('enable');
		 })//$.post
	}else{
		tooltip_message("Vui lòng chọn gói khám");
	}
})//$("#taoluotkhamtudong")

$( "#dialog-confirm" ).dialog({
      autoOpen: false,
      resizable: false,
      height:180,
      width:470,
      modal: true,
      buttons: {
        "YES": function() {
          $( this ).dialog( "close" );
          //in phiếu khám
               /*  $.cookie("in_status", "print_preview");
                  var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
                  var rowData = $("#rowed3").getRowData(selr);
                  if(selr.length){
                    dialog_report("Xem trước khi in",90,90,"u78787878975f3","resource.php?module=report&view=<?=$modules?>&action=phieukhambenh_direct&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'InPhieuKhamBenh');
                    $(".frame_u78787878975f").css("width","793px");
                  }
                  //in chỉ định
                $.cookie("in_status", "print_preview");
                var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
                    var rowData = $("#rowed3").getRowData(selr);
                var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
                var xn=0;
                for(var i=0;i<tmp2.length;i++){
                 var rowData2 = $("#rowed5").getRowData(tmp2[i]);
                 if(rowData2['XetNghiem']==1){
                  xn=1;
                 }
                 if(i==tmp2.length-1){
                    $.cookie("in_status", "print_preview");
                   dialog_report("Xem trước khi in",90,90,"u78787878975f2","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhkham_all_direct&header=top&xetnghiem="+xn+"&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'PhieuChiDinh');
                   $(".frame_u78787878975f").css("width","793px");
                   }
                } */
                //
        },
        "NO": function() {
          var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
          var rowData = $("#rowed3").getRowData(selr);
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs');
            $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=ttlk&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=kichoat').done(function(data)
            {
              //alert(data); 
              if ($.trim(data) == '') {
				  if(tmp1.length>0){
					  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=kham&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=kichoat').done(function(data)
						{
							if ($.trim(data) == '') {
								//alert($("input.ui-pg-input").val())
							 tooltip_message("Kích hoạt thành công");
							//$("#rowed3").trigger("reloadGrid");
							$('#rowed3').setGridParam({datatype: "json"}).trigger('reloadGrid', [{ page: 2}]);
							//$("#rowed4").trigger("reloadGrid")


              //in phiếu khám
                /* $.cookie("in_status", "print_preview");
                  // var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
                  // var rowData = $("#rowed3").getRowData(selr);
                  if(selr.length){
                    dialog_report("Xem trước khi in",90,90,"u78787878975f3","resource.php?module=report&view=<?=$modules?>&action=phieukhambenh_direct&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'InPhieuKhamBenh');
                    $(".frame_u78787878975f").css("width","793px");
                  }
                  //in chỉ định
                $.cookie("in_status", "print_preview");
                // var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
                //     var rowData = $("#rowed3").getRowData(selr);
                var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
                var xn=0;
                for(var i=0;i<tmp2.length;i++){
                 var rowData2 = $("#rowed5").getRowData(tmp2[i]);
                 if(rowData2['XetNghiem']==1){
                  xn=1;
                 }
                 if(i==tmp2.length-1){
                    $.cookie("in_status", "print_preview");
                   dialog_report("Xem trước khi in",90,90,"u78787878975f2","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhkham_all_direct&header=top&xetnghiem="+xn+"&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'PhieuChiDinh');
                   $(".frame_u78787878975f").css("width","793px");
                   }
                } */
                //


							}
						})
					  }
              }
              else {
                tooltip_message("Lỗi");
              }
            });//end post


          $( this ).dialog( "close" );
        }
      },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });

$( "#dialog-confirm-dakham" ).dialog({
      autoOpen: false,
      resizable: false,
      height:160,
      width:450,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        }
      }
    });

$('#dialog').dialog({
    autoOpen: false,
    width: 300,
    modal: true,
    resizable: false,
    buttons: {
      "YES": function() {
      $("#rowed5").jqGrid('setRowData',$("#idk").val(),{PhiThucHien:0});
      $("#rowed5").jqGrid('setRowData',$("#idk").val(),{TrangThai:"HuyBo"});
      $("#rowed5").jqGrid('setRowData',$("#idk").val(),{LyDoHuyBo:$("#lydohuybo").val()});
      $("#rowed5").jqGrid('setRowData',$("#idk").val(),{Huy:1});
      $("#rowed5").jqGrid('setRowData',$("#idk").val() , '', { background: '#A9A9AA',border:'1px solid #BBBBBB' });
      jQuery("#rowed5").jqGrid('saveRow',$("#idk").val());
      var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 

        var phithuchien =0;
        for(var i=0;i < tmp5.length;i++){ 
            var rowData = $("#rowed5").getRowData(tmp5[i]);
            xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
            $("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});  
            phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
          
          }
        $("#tongcong2").val(formatMoney(phithuchien));
        $(this).dialog("close");
      },
      "NO": function() {
        $(this).dialog("close");
      }
    },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
		 	$('.ui-dialog').keyup(function(e) {
			  if (e.keyCode === 37){
				  $('.n_btn1').focus(); 
				  $('.n_btn2').focusout();
			  }
			  if (e.keyCode === 39){
				  $('.n_btn2').focus(); 
				  $('.n_btn1').focusout();
			  }
			})
		}
    });
$('#dialog-confirm-dachidinh').dialog({
    autoOpen: false,
    width: 400,
    modal: true,
    resizable: false,
    buttons: {
      "YES": function() {
         $(this).dialog("close");
       	 var  tmp = jQuery("#goikham").jqGrid('getDataIDs');
		 for(i=0;i<tmp.length;i++){
			chuyen_goi(parseInt(tmp[i]));
		  }
		  var tmp3 = $("#rowed5").jqGrid('getDataIDs'); 
		  var phithuchien =0;
		  for(var i=0;i < tmp3.length;i++){ 
			  var rowData = $("#rowed5").getRowData(tmp3[i]); 
			  xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
			  $("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
			   phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
			}
      $("#phithuchien").val(formatMoney(phithuchien));
      },
      "NO": function() {
        $(this).dialog("close");
      }
    },open: function () {
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').focus(); 
		  $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(0)').addClass('n_btn1');
		   $(this).closest('.ui-dialog').find('.ui-dialog-buttonpane button:eq(1)').addClass('n_btn2');
		 //var hasFocus = $('.n_btn1').is(':focus');
			  $('.ui-dialog').keyup(function(e) {
				  if (e.keyCode === 37){
					  $('.n_btn1').focus(); 
					  $('.n_btn2').focusout();
				  }
				  if (e.keyCode === 39){
					  $('.n_btn2').focus(); 
					  $('.n_btn1').focusout();
				  }
				})
		}
    });


//f10 luu
  document.onkeydown = function(e) {
      if (e.keyCode === 121) {
        $("#luu").click();
        return false;
      }
    };

$("#luu").click(function(){
 	if(window.dangluukham==0){
		window.dangluukham=1;
		$("#luu .ui-button-text").text("Đang lưu...");
		 var gridData = jQuery("#rowed5").getRowData();
		 var postData = JSON.stringify(gridData);
		 
		 postData='{"id":'+postData+'}';
		 postData=$.parseJSON(postData);
		 var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
		 var rowData = $("#rowed3").getRowData(selr);
		 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_dathanhtoan&id_luotkham='+rowData["ID_LuotKham"]).done(function(data){
			if(data=="true"){
				 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&ac=luu&hienmaloi=a',postData).done(function(data){
					var selr = jQuery("#rowed3").jqGrid('getGridParam','selrow');
					var rowData = $("#rowed3").getRowData(selr);
					 $("#rowed5").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id='+rowData["ID_LuotKham"]}).trigger('reloadGrid');
					 window.dangluukham=0;
					 $("#luu .ui-button-text").text("Lưu [F10]");
					  tooltip_message("Lưu thành công");			
				  })//$.post
			}else{
				$("#rowed5").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id='+rowData["ID_LuotKham"]}).trigger('reloadGrid');
				tooltip_message("Lượt khám này đã thanh toán");
			}
		 });
	}
})//$("#luu")
$("#chidinhtheogoikhamhangloat").click(function(){
  var id_luotkhamP="";
  $('#rowed3 tr td[aria-describedby="rowed3_ChonIn"] input[type="checkbox"]').each(function() {
        /*var row = $(this).closest('tr.jqgrow');
        var tam = row.attr('id');
         var rowData = $("#rowed3").getRowData(tam);
       
         if($(this).is( ":checked" )) {
          
          id_luotkhamP+=rowData["ID_LuotKham"]+";;";   
              
         }*/
         var row = $(this).closest('tr.jqgrow');
        var tam = row.attr('id');
        var tam2=$("#rowed3").jqGrid ('getCell', tam, 'ID_LuotKham');
         if($(this).is( ":checked" )) {
        
          id_luotkhamP+=tam2+";";          
         }
     
    });     
  //alert(id_luotkhamP);  

      var selr = jQuery("#data_congty").jqGrid('getGridParam','selrow');
      var selr2 = jQuery("#data_dotkham").jqGrid('getGridParam','selrow');
       $.ajax({
      type: 'POST',
      async : false,
      url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&ac=chidinhgoikhamhangloat&id_kh_congty='+window._idcongty+'&id_goikham_congty='+window._idgoikhamcongty+'&id_luotkhamP='+id_luotkhamP,
      success: function(data, status, xhr) {
        if(data=="")
            {
              tooltip_message("Đã tạo chi định hàng loạt");
            }
            else
            {
              tooltip_message("Có lỗi xảy ra");
            }
        }
        });

});

$("#chidinhtheogoikham").click(function(){
	var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
	var rowData = $("#rowed3").getRowData(selRowId); 
	if(rowData["TaoLuotKham"]=="1"){
	  var  tmp1 = jQuery("#rowed5").jqGrid('getDataIDs');
	  if(tmp1.length>0){
		$( "#dialog-confirm-dachidinh" ).dialog('open');
	  }else{
		  var  tmp = jQuery("#goikham").jqGrid('getDataIDs');
		   for(i=0;i<tmp.length;i++){
			  chuyen_goi(parseInt(tmp[i]));
			}
		  var tmp3 = $("#rowed5").jqGrid('getDataIDs'); 
		  var phithuchien =0;
		  for(var i=0;i < tmp3.length;i++){ 
			  var rowData = $("#rowed5").getRowData(tmp3[i]); 
			  xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
			  $("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
			   phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
			}
		  $("#phithuchien").val(formatMoney(phithuchien));
	  }
	}else{
		$( "#dialog-chuataoluotkhamtudong" ).dialog('open');
	}
});

	//$('#panel_sub').css('overflow','');
    phanquyen();
})
var lastsel;

function create_grid() {
 mydata=[];
 $("#rowed3").jqGrid({
    data: mydata,
    datatype: "local",
    colNames: ['ID lượt khám','ID Gói khám Cty','ID trạng thái','Đếm số lượt khám','ID bệnh nhân','Mã BN', 'Họ tên BN','Tuổi', 'Giới', 'Đã XH', 'Đã XN','Nợ cuối kỳ','Tổng cộng', 'Tạo lượt khám', 'Chọn in'],
    colModel: [
    {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "15%", editable: false, align: 'center', hidden: true},
    {name: 'ID_GoiKhamCongTy', index: 'ID_GoiKhamCongTy', width: "15%", editable: false, align: 'center', hidden: true},
    {name: 'ID_TrangThai', index: 'ID_TrangThai', width: "15%", editable: false, align: 'center', hidden: true},
    {name: 'SoLuotKham', index: 'SoLuotKham', width: "15%", editable: false, align: 'center', hidden: true},
    {name: 'ID_benhNhan', index: 'ID_benhNhan', width: "15%", editable: false, align: 'center', hidden: true},
    {name: 'MaBenhNhan', index: 'MaBenhNhan',search: true, width: "15%",sorttype: 'integer', editable: false, align: 'left', hidden: false},
    {name: 'TenBenhNhan', index: 'TenBenhNhan',search: true, width: "40%", editable: false, align: 'left', hidden: false,classes:'viethoachucai'},
    {name: 'Tuoi', index: 'Tuoi', search: true, width: "10%", editable: false, align: 'center', hidden: false},
    {name: 'GioiTinh', index: 'GioiTinh', width: "10%", editable: false, align: 'center', hidden: false},
    {name:'DaXepHang',index:'DaXepHang', width:"20%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:false,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:0"}},	
	{name:'DemXetNghiem',index:'DemXetNghiem', width:"20%",stype: 'select',searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:false,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formoptions:{ rowpos:13, colpos:1},editoptions: {value:"1:0"}},
	{name: 'NoCuoiKy', index: 'NoCuoiKy', search: true, width: "20%", editable: false, align: 'center', hidden: false},
	{name: 'TongCong', index: 'TongCong', search: true, width: "20%", editable: false, align: 'center', hidden: false},	
    {name: 'TaoLuotKham', index: 'TaoLuotKham', width: "15%", editable: false, align: 'center', hidden: true},
	{name:'ChonIn',index:'ChonIn', width:"15%", editable:true,stype: 'text',search:true,searchoptions: { sopt: ['eq', 'ne'],value:':;1:Có;0:Không'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",formatoptions:{disabled: false},formoptions:{ rowpos:13, colpos:1}
			,editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
				//alert($("#"+$(e.target).attr('id')).is(':checked'));

				if($("#"+$(e.target).attr('id')).is(':checked')){
   					var tthai=1;
   				}
				else{
  					var tthai=0;
  				}
				var row = $(e.target).closest('tr.jqgrow');
                var tam = row.attr('id');
               rowId= $('#rowed3').getCell(tam, 'id');
/*                window.selectedVal = "";
				window.selected = $("input[type='radio'][name='action']:checked");
				if (selected.length > 0) {
					window.selectedVal = selected.val();
				}*/

                 } }]}}, 	
    
    ],
    loadonce: true,
	//multiselect: true,
    scroll: false,
    modal: true,
    rowNum: 50,

    pager: '#prowed3',
    //sortname: 'NgayGioKetThuc',
    height: 100,
    width: 100,
    viewrecords: true,
    ignoreCase: true,
    shrinkToFit: true,
        footerrow:true,
	onSelectRow: function(id) {
		window.vitridangdung=id;
		 $('#rowed5').jqGrid('clearGridData');
		 var rowData2 = $("#rowed3").getRowData(id); 
		 $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+rowData2["ID_LuotKham"]}).trigger('reloadGrid');
	  },
    onRightClickRow: function(rowid, iRow, iCol, e) {              
            if ($("#menu").width() + e.pageX + 100 > $(document).width()) {
                $("#menu").css('left', e.pageX - $("#menu").width() + "px");
            } else {
                $("#menu").css('left', e.pageX + "px");
            }
            if ($("#menu").height() + e.pageY + 30 > $(document).height()) {
                $("#menu").css('top', e.pageY  - $("#menu").height() + "px");
            } else {
                $("#menu").css('top', e.pageY + "px");
            }
            $("#menu").show(300);

            $(document).bind("contextmenu", function(e) {
                return false;
            });
        //$("#stopxephang").addClass("disable");
        
    },

    loadComplete: function(data) {

     grid_filter_enter("#rowed3");
     var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 
	 if(window.vitridangdung==''){
     	$("#rowed3").jqGrid("setSelection",tmp1[0], true);
	 }else{
		$("#rowed3").jqGrid("setSelection",window.vitridangdung, true); 
	}
     var rowData2 = $("#rowed3").getRowData(tmp1[0]); 
      $("#rowed5").jqGrid('setGridParam',{datatype: 'json',url:"resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_khamby_idluotkham&id="+rowData2["ID_LuotKham"]}).trigger('reloadGrid');

     for(var i=0;i < tmp1.length;i++){ 
		 //$('#rowed3').editRow(tmp1[i], true);
		 $("#"+tmp1[i]+"_ChonIn").prop("checked",true);
       var rowData = $("#rowed3").getRowData(tmp1[i]); 
       if(rowData["TaoLuotKham"]==1){
              $("#rowed3").setCell(tmp1[i], "MaBenhNhan", '', "chuataoluotkham"); 
           }
           else{
               //$("#rowed3").setCell(tmp1[i], "MaBenhNhan", '', "datao"); 
			    $("#rowed3").jqGrid('setCell',tmp1[i],"MaBenhNhan","",{'background-color':'yellow'});
           }
       }
      $("#soluot").val("Số lượt = "+tmp1.length);

            var ids = $('#rowed3').jqGrid('getDataIDs');
    
                for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed3').getRowData(ids[i]);
                      sumNoCuoiKy = $("#rowed3").jqGrid("getCol", "NoCuoiKy", false, "sum");
                       $("#rowed3").jqGrid("footerData", "set", {
                      NoCuoiKy: sumNoCuoiKy
                    });
                  }









   },
 caption: "Danh sách bệnh nhân"
       });
$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});

jQuery("#rowed3").jqGrid('navGrid','#prowed3',{edit:false,add:false,del:false});
$("#rowed3").jqGrid('bindKeys', {});
$('#gbox_rowed3 .ui-search-toolbar').find('th').each(function() {
//	alert()
})

}
function create_grid2()
{
    $("#rowed4").jqGrid({
        url: 'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_loaikham',
        datatype: "json",
        colNames: ['id hạng mục khám','id ID_NhomCLS', 'Tên hạng mục khám', 'Phí thực hiện', 'GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien'],
        colModel: [
        {name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
        {name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: false, width: "10%", editable: false, align: 'left', hidden: false,edittype:"select",formatter:'select',editoptions:{value: tennhomcha}},
        {name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "60%", editable: false, align: 'left', hidden: false},
        {name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"40%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
        {name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "10%", editable: false, align: 'left', hidden: true},
        {name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "10%", editable: false, align: 'left', hidden: true},	         
        ],
        loadonce: true,
        scroll: false,
        modal: true,
        shrinkToFit: true,
        grid_save_option: "",
        cmTemplate: {sortable: false},
        rowNum: 10000000,
        rowList: [],
        pager: '#prowed4',
            //sortname: 'ID_LoaiKham',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            grouping:true, 
            groupingView : { 
             groupField : ['ID_NhomCLS'],
             groupDataSorted : true ,
             groupCollapse : false,
             groupColumnShow :false,
			//groupOrder: ['DESC'],
			groupText : ['<b>{0}</b>']
       }, 
       afterShowForm : function (formid) {

       },ondblClickRow: function(rowId, rowIndex, columnIndex) {
	  	var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
		var rowData = $("#rowed3").getRowData(selRowId); 
       if(rowData["TaoLuotKham"]=="1"){
			chuyen(rowId);
	   }else{
		   $( "#dialog-chuataoluotkhamtudong" ).dialog('open');
		    //tooltip_message("Bệnh nhân này chưa tạo lượt khám tự động");
		   }

       },
       onRightClickRow: function(rowid, iRow, iCol, e) {

       },
       loadComplete: function(data) {
         grid_filter_enter("#rowed4");


     },
    // caption: "Chọn hạng mục khám <a style='float: right; margin-right: -103%; margin-top: 0px;' id='thugon' class='fm-button ui-state-default ui-corner-all'>Thu gọn</a> <a style='float: right; margin-right: -80%; margin-top: 0px;' id='chitiet' class='fm-button ui-state-default ui-corner-all'>Xem chi tiết</a>"
     caption: "Chọn hạng mục khám <div id='xct' style='float:left; margin-top: -20px; margin-left: 60%;'><input type='checkbox' id='xemchitiet' checked  /> Chi tiết</div>"


 });
$("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
$("#rowed4").jqGrid('bindKeys', {});
}
function create_grid3()
{
  mydata=[];
  $("#rowed5").jqGrid({
    data: mydata,
    datatype: "local",
    colNames: ['ID_LoaiKham','Xóa','STT','Loại khám', 'Phí thực hiện', 'Trạng thái', 'Người CĐ','ID khám','ID lượt khám', 'Mã bệnh nhân', 'Lưu', 'Hủy', 'Lý do hủy', 'GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien','XetNghiem'],
    colModel: [
    {name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "10%", editable: false, align: 'left', hidden: true},
    {name: 'Xoa', index: 'Xoa', search: false, width: "10%", editable: false, align: 'center', hidden: false},
    {name: 'STT', index: 'STT', search: false, width: "7%", editable: false, align: 'center', hidden: true},
    {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "40%", editable: false, align: 'left', hidden: false},
    {name: 'PhiThucHien', index: 'PhiThucHien', search: false, width: "20%", editable: false, align: 'right', hidden: false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
    {name: 'TrangThai', index: 'TrangThai', search: false, width: "20%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: trangthai}},
    {name: 'NguoiChiDinh', index: 'NgayGioTao', search: false, width: "15%", editable: false, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value: nguoichidinh} },
     {name: 'ID_Kham', index: 'ID_Kham', search: false, width: "7%", editable: false, align: 'center', hidden: true},
     {name: 'ID_LuotKham', index: 'ID_LuotKham', search: false, width: "7%", editable: false, align: 'center', hidden: true},
     {name: 'MaBenhNhan', index: 'MaBenhNhan', search: false, width: "7%", editable: false, align: 'center', hidden: true},
     {name: 'Luu', index: 'Luu', search: false, width: "7%", editable: false, align: 'center', hidden: true},
     {name: 'Huy', index: 'Huy', search: false, width: "7%", editable: false, align: 'center', hidden: true},
     {name: 'LyDoHuyBo', index: 'LyDoHuyBo', search: false, width: "7%", editable: false, align: 'center', hidden: true},
     {name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "10%", editable: false, align: 'left', hidden: true},
     {name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "10%", editable: false, align: 'left', hidden: true},
	 {name: 'XetNghiem', index: 'XetNghiem', search: false, width: "10%", editable: false, align: 'left', hidden: true},
	   
     ],
    loadonce: false,
    scroll: false,
    modal: true,
    rownumbers: true,
    shrinkToFit: true,
    grid_save_option: "",
    cmTemplate: {sortable: false},
    rowNum: 10000000,
    pginput:false,
    pgbuttons:false,
    rowList: [],
   // pager: '#prowed5',
    sortname: 'ThoiGianVaoKham',
    height: 100,
    width: 100,
    viewrecords: true,
    ignoreCase: true,
	footerrow:true,
    sortorder: "desc",
    afterShowForm : function (formid) {
        xuongdong(formid);
        lendong(formid);
    },
    onRightClickRow: function(rowid, iRow, iCol, e) {              
        if ($("#menu2").width() + e.pageX + 100 > $(document).width()) {
            $("#menu2").css('left', e.pageX - $("#menu2").width() + "px");
        } else {
            $("#menu2").css('left', e.pageX + "px");
        }
        if ($("#menu2").height() + e.pageY + 30 > $(document).height()) {
            $("#menu2").css('top', e.pageY  - $("#menu2").height() + "px");
        } else {
            $("#menu2").css('top', e.pageY + "px");
        }
        $("#menu2").show(300);

        $(document).bind("contextmenu", function(e) {
            return false;
        });
        //$("#stopxephang").addClass("disable");
        
    },
    loadComplete: function(data) {
     var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
        var phithuchien =0;
         var x=0;
        for(var i=0;i < tmp1.length;i++){ 
          var rowData = $("#rowed5").getRowData(tmp1[i]); 
    
          xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp1[i]+"');\" />"; 
          //alert(xoa);
          $("#rowed5").jqGrid('setRowData',tmp1[i],{Xoa:xoa});
          $("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#D3D3D3',border:'1px solid #A9A9AA' });
            phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
            
          if(rowData["TrangThai"]=="HuyBo"){
            jQuery("#rowed5").jqGrid('saveRow',tmp1[i]);
            $("#rowed5").jqGrid('setRowData', tmp1[i], false, { background: '#A9A9AA',border:'1px solid #BBBBBB' });
          }
          
        }
        $("#tongcong2").val(formatMoney(phithuchien));
		var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
		$("#rowed5").jqGrid('footerData','set', {
			TenLoaiKham: 'Tổng tiền:', 
			PhiThucHien: Sum_PhiThucHien,
		});


    },
    caption: " Hạng mục khám của bệnh nhân"
});

$("#rowed5").jqGrid('navGrid', "#prowed5", {add: false, edit: false, del: false, search: false, refresh: false,prmView: false, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});
$("#rowed5").jqGrid('bindKeys', {});
}


function goikham(){ 
 mydata=[];
  $("#goikham").jqGrid({
    data: mydata,
    datatype: "local", 
      colNames: ['id hạng mục khám','id ID_NhomCLS', 'Tên hạng mục khám', 'Phí thực hiện', 'GiaThueNgoaiThucHien', 'ThoiGianTrungBinhThucHien'],
        colModel: [
        {name: 'ID_LoaiKham', index: 'ID_LoaiKham', search: false, width: "0%", editable: false, align: 'left', hidden: true},
        {name: 'ID_NhomCLS', index: 'ID_NhomCLS', search: false, width: "10%", editable: false, align: 'left', hidden: false,edittype:"select",formatter:'select',editoptions:{value: tennhomcha}},
        {name: 'TenLoaiKham', index: 'TenLoaiKham', search: true, width: "60%", editable: false, align: 'left', hidden: false},
        {name:'GiaBaoChoBN',index:'GiaBaoChoBN', width:"40%", editable:true,align:'right',edittype:"text",hidden:false,formatter:'currency',formatoptions:{decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "", defaultValue: '0'}},
        {name: 'GiaThueNgoaiThucHien', index: 'GiaThueNgoaiThucHien', search: false, width: "10%", editable: false, align: 'left', hidden: true},
        {name: 'ThoiGianTrungBinhThucHien', index: 'ThoiGianTrungBinhThucHien', search: false, width: "10%", editable: false, align: 'left', hidden: true}, 


     ],
     hidegrid: false,
     gridview: true,
     loadonce: true,
     scroll: false,    
     modal:true,   
     rowNum: 200000,
     rowList:[],    
     sortname: 'ten_nhom',
     height:200,
     width: 470,
     viewrecords: true, 
     ignoreCase:true,
     shrinkToFit:true,
     cmTemplate: {sortable:false},
     sortorder: "desc",  

}); 

}



function create_layout() {
    $('#panel_main').layout({
        resizerClass: 'ui-state-default'
        , west: {
            resizable: true
            , size: "70%"
            , spacing_closed: 27
            , togglerLength_closed: 85
            , togglerAlign_closed: "center"
            , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
            , togglerTip_closed: "Open & Pin Menu"
            , sliderTip: "Slide Open Menu"
            , slideTrigger_open: "mouseover"
            , fxSettings_close: {easing: "easeOutQuint"}
            , onresize_end: function() {
                    //resize_control();

                }
                , onopen_end: function() {


                }
                , onclose_end: function() {


                }

            }
            , center: {
                resizable: true
                , size: "30%"

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

function create_nhomthongke(elem, datalocal) {
        datalocal = jQuery.parseJSON(datalocal);
        $(elem).jqGrid({
           datastr: datalocal,
            datatype: "jsonstring",
            colNames: ['Tìm theo', 'Thuộc nhóm'],
            colModel: [
				//{name: 'idnv', index: 'idnv', hidden: true,width:1},
                {name: 'TenNhom', index: 'TenNhom', hidden: false,width:"65%"},
                {name: 'ExField2', index: 'ExField2', hidden: false,width:"35%"}
            ],
            hidegrid: false,
            gridview: true,
            loadonce: true,
            scroll: 1,
            modal: true,
            rowNum: 100,
            rowList: [],
            height: 200,
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

function create_layout1() {
    $('#panel_sub').layout({
        resizerClass: 'ui-state-default'
        , west: {
            resizable: true
            , size: "70%"
            , spacing_closed: 27
            , togglerLength_closed: 85
            , togglerAlign_closed: "center"
            , togglerContent_closed: "<div id='menu_toggle'>X<BR>O<BR>N<BR>G</div>"
            , togglerTip_closed: "Open & Pin Menu"
            , sliderTip: "Slide Open Menu"
            , slideTrigger_open: "mouseover"
            , fxSettings_close: {easing: "easeOutQuint"}
            , onresize_end: function() {
                  //  resize_control();

              }
              , onopen_end: function() {


              }
              , onclose_end: function() {


              }

          }
          , center: {
            resizable: true
            , size: "30%"

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

function load_select_tennhomcha(){
	window.tennhomcha = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=NhomCLS&id=ID_NhomCLS&name=TenNhom", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục NhomCLS');}}).responseText;	
	
}
$("#menu,#menu2").menu();
$(document).bind("contextmenu", function(e) {
    var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
    var rowData = $("#rowed3").getRowData(selr);    
    var DaXepHang = rowData['DaXepHang'];
    if(DaXepHang==true){
      //  $("#huykichhoat").removeClass("ui-state-disabled");
       // $("#kichhoat").addClass("ui-state-disabled");
	    $("#kichhoat").hide();
		$("#kichhoat_new").show();
		$("#huykichhoat").show();
		$("#huykichhoat_new").hide();
		
		//$("#active").unbind();
		$("#deactive").bind();
    }else if(DaXepHang==false){
        //alert(DaXepHang)
      //  $("#kichhoat").removeClass("ui-state-disabled");
      //  $("#huykichhoat").addClass("ui-state-disabled");
		$("#active").bind();
		$("#huykichhoat").unbind();
		
		$("#kichhoat").show();
		$("#kichhoat_new").hide();
		$("#huykichhoat").hide();
		$("#huykichhoat_new").show();
    }


    var selr = jQuery('#rowed5').jqGrid('getGridParam','selrow'); 
    var rowData = $("#rowed5").getRowData(selr);    
    var id_trangthai = rowData['TrangThai'];
    //alert(id_trangthai);
    if(rowData["Huy"]==1){
        $("#huykichhoat2").addClass("ui-state-disabled");
        $("#kichhoat2").addClass("ui-state-disabled");
    }else{
        if(id_trangthai==""){
             $("#kichhoat2").removeClass("ui-state-disabled");
            $("#huykichhoat2").addClass("ui-state-disabled");
        }else{
           //alert(id_trangthai);
            
            $("#huykichhoat2").removeClass("ui-state-disabled");
            $("#kichhoat2").addClass("ui-state-disabled");
        }
      }

return false;
});
$(document).bind("mouseup", function(e) {
    $("#menu,#menu2").hide();
});

$("#active").bind( "click", function(e) {
	console.log("dang test");
	var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
	var rowData = $("#rowed3").getRowData(selr);
	var tmp1 = $("#rowed5").jqGrid('getDataIDs');
	if(rowData['ID_TrangThai']=='KetThucKham'){
		tooltip_message("Lượt khám này đã kết thúc, nên không thể kích hoạt");
	}else{
		if(tmp1.length==0){
			console.log("test confirm");
			$( "#dialog-confirm" ).dialog('open');
		}else{
			console.log("test update");
			var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
			var rowData = $("#rowed3").getRowData(selr);
			var tmp1 = $("#rowed3").jqGrid('getDataIDs');
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=ttlk&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=kichoat').done(function(data)
			{
			  //alert(data); 
			  if ($.trim(data) == '') {
				  if(tmp1.length>0){
					  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=kham&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=kichoat').done(function(data)
						{
							if ($.trim(data) == '') {
							//alert($("input.ui-pg-input").val())
							 tooltip_message("Kích hoạt thành công");
							//$("#rowed3").trigger("reloadGrid");
							$('#rowed3').setGridParam({datatype: "json"}).trigger('reloadGrid');
							//$("#rowed3").trigger('reloadGrid', [{ page: parseInt($("input.ui-pg-input").val())}]);
							//$("#rowed4").trigger("reloadGrid");
              //in phiếu khám
                // $.cookie("in_status", "print_preview");
                  // if(selr.length){
                    // dialog_report("Xem trước khi in",90,90,"u78787878975f3","resource.php?module=report&view=<?=$modules?>&action=phieukhambenh_direct&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'InPhieuKhamBenh');
                    // $(".frame_u78787878975f").css("width","793px");
                  // }
                 // in chỉ định
                // $.cookie("in_status", "print_preview");
                // var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
                // var xn=0;
                // for(var i=0;i<tmp2.length;i++){
                 // var rowData2 = $("#rowed5").getRowData(tmp2[i]);
                 // if(rowData2['XetNghiem']==1){
                  // xn=1;
                 // }
                 // if(i==tmp2.length-1){
                    // $.cookie("in_status", "print_preview");
                   // dialog_report("Xem trước khi in",90,90,"u78787878975f2","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhkham_all_direct&header=top&xetnghiem="+xn+"&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'PhieuChiDinh');
                   // $(".frame_u78787878975f").css("width","793px");
                   // }
                // }
                //


              
							}
							
						})
					  
					  }
				
			  }
			  else {
				tooltip_message("Lỗi");
	  }
	});//end post
	
	}
}// end if

})

$("#reactive").click( function(e) {
  var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
  var rowData = $("#rowed3").getRowData(selr);
  var tmp1 = $("#rowed5").jqGrid('getDataIDs');

    if(tmp1.length==0){
      console.log("test confirm");
      $( "#dialog-confirm" ).dialog('open');
    }else{
        var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
        var rowData = $("#rowed3").getRowData(selr);
        var tmp1 = $("#rowed3").jqGrid('getDataIDs');
        $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=reactive&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=kichoat').done(function(data)
        {
          //alert(data); 
          if ($.trim(data) == '') {
              tooltip_message("Kích hoạt thành công");
          }else{
            tooltip_message("Lỗi");
          }
    });//end post
  }
});

$("#deactive").bind( "click", function(e) {
var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
var rowData = $("#rowed3").getRowData(selr);
 if(rowData['ID_TrangThai']=='KetThucKham'){
	 $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_dathanhtoan&id_luotkham='+rowData["ID_LuotKham"]).done(function(data){
			if(data=="true"){
				var tmp1 = $("#rowed3").jqGrid('getDataIDs');
				$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=ttlk&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=huybo').done(function(data){
					if ($.trim(data) == '') {
						if(tmp1.length>0){
						  $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=kham&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=huybo').done(function(data){
								if ($.trim(data) == '') {
									 tooltip_message("Hủy kích hoạt thành công");
									$('#rowed3').setGridParam({datatype: "json"}).trigger('reloadGrid');
								}
							})
						}                
					}else {
						tooltip_message("Lỗi");
					}
				});//end post
				$('#rowed3 #'+selr).focus();         
				$("#rowed3").jqGrid("setSelection",selr, true);
			}else{
				tooltip_message("Lượt khám này đã thanh toán, nên không thể hủy kích hoạt");	
			}
	 });
}else{
	if(rowData["ID_TrangThai"]=="ChuaSanSang" || rowData["ID_TrangThai"]=="HuyXepHang" || rowData["ID_TrangThai"]=="DangCho"){
			$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_dathanhtoan&id_luotkham='+rowData["ID_LuotKham"]).done(function(data){
				if(data=="true"){
					var tmp1 = $("#rowed3").jqGrid('getDataIDs');
					$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=ttlk&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=huybo').done(function(data){
						if ($.trim(data) == '') {
							if(tmp1.length>0){
								$.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=true&ac=kham&id_luotkham='+ rowData["ID_LuotKham"]+'&trangthai=huybo').done(function(data){
									if ($.trim(data) == '') {
										 tooltip_message("Hủy kích hoạt thành công");
										$('#rowed3').setGridParam({datatype: "json"}).trigger('reloadGrid');
									}
								})
							}                
						}else {
							tooltip_message("Lỗi");
						}
					});//end post
					$('#rowed3 #'+selr).focus();         
					$("#rowed3").jqGrid("setSelection",selr, true);
				
				}else{
					tooltip_message("Lượt khám này đã thanh toán, nên không thể hủy kích hoạt");	
				}
			 });
	}else{
	  $( "#dialog-confirm-dakham" ).dialog('open');
	}
}
});

$("#active2").bind( "click", function(e) {
 var selr = jQuery('#rowed5').jqGrid('getGridParam','selrow'); 
 var rowData = $("#rowed5").getRowData(selr);
if(rowData['TrangThai']=='Xong'){
	tooltip_message("Loại khám này đã kết thúc, nên không thể kích hoạt");
}else{
  var selr = jQuery('#rowed5').jqGrid('getGridParam','selrow'); 
  var rowData = $("#rowed5").getRowData(selr);
    $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=false&id_kham='+ rowData["ID_Kham"]+'&status=active').done(function(data)
    {
      //alert(data); 
      if ($.trim(data) == '') {
        
        tooltip_message("Kích hoạt thành công");
        //$("#rowed3").trigger("reloadGrid");
        $('#rowed5').setGridParam({datatype: "json"}).trigger('reloadGrid');
        //$("#rowed4").trigger("reloadGrid");
        
      }
      else {
        tooltip_message("Lỗi");
      }
    });//end post

}
})

$("#deactive2").bind( "click", function(e) {
var selr = jQuery('#rowed5').jqGrid('getGridParam','selrow'); 
var rowData = $("#rowed5").getRowData(selr);
if(rowData['TrangThai']=='Xong'){
	tooltip_message("Loại khám này đã kết thúc, nên không thể kích hoạt");
}else{
      $.post('resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=update_trangthai&all=false&id_kham='+ rowData["ID_Kham"]+'&status=deactive').done(function(data)
      {
        //alert(data); 
        if ($.trim(data) == '') {
          
          tooltip_message("Hủy kích hoạt thành công");
          //$("#rowed3").trigger("reloadGrid");
          $('#rowed5').setGridParam({datatype: "json"}).trigger('reloadGrid');
          //$("#rowed4").trigger("reloadGrid");
          
          
        }
        else {
          tooltip_message("Lỗi");
        }
      });//end post
      $('#rowed5 #'+selr).focus();         
      $("#rowed5").jqGrid("setSelection",selr, true);

}
})



function load_select_trangthai(){
  window.trangthai = $.ajax({url: "resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_TrangThaiCLSCuaBenhNhan&id=ID4Dev&name=TenTrangThaiCLSCuaBenhNhan", async: false, success: function(data, result) {if (!result) alert('Không load được danh mục trạng thái');}}).responseText;  
  
}
function load_select_nguoichidinh(){
  window.nguoichidinh = $.ajax({url: 'resource.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {if (!result) alert('Không load được danh mục nhân viên');}}).responseText;
  
  $("#rowed5").setColProp('#NguoiChiDinh', { editoptions: { value: nguoichidinh} });
  $('#NguoiChiDinh').empty();
  create_select("#NguoiChiDinh",nguoichidinh);
}
function formatMoney(num) {
    var p = num.toFixed(2).split(".");
    return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "");
}

function chuyen(aa){
        var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
        var tam,ln=0;
        var dem=tmp1+1;
        var rowData = jQuery("#rowed4").getRowData(aa);
        var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
        var celValue = $("#rowed3").getRowData(selRowId); //
            parameters =
                {
                  initdata : {ID_LoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",TenLoaiKham:rowData["TenLoaiKham"],PhiThucHien:rowData["GiaBaoChoBN"],TrangThai:"",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],MaBenhNhan:celValue["MaBenhNhan"],ID_LuotKham:celValue["ID_LuotKham"]},
                  position :"last",
                  useDefValues : false,
                  useFormatter : false,
                  addRowParams : {extraparam:{}}
                }
          var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
          var dem=0;
          var tontai=0;
        
          if(tmp2.length==0)
            dem=1;
          for(var i=0;i < tmp2.length;i++){
            var rowData2 = $("#rowed5").getRowData(tmp2[i]);  
            if(parseInt(rowData["ID_LoaiKham"])===parseInt(rowData2["ID_LoaiKham"])){
              tontai=1;
            }
            else{
              if(tontai==0){
                dem=1;
              }
            }
          } //end for
              if(tontai==1){
              var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?");
              if (strconfirm == true)
              {
                dem=1;              
              }else{
                dem=0;
              }
            }
          if(dem==1){
            jQuery("#rowed5").jqGrid('addRow',parameters);
          }
          var phithuchien =0;
          var tmp3= $("#rowed5").jqGrid('getDataIDs'); 
          for(var i=0;i < tmp3.length;i++){ 
              //console.log(tmp3[i]);
              var rowData3 = $("#rowed5").getRowData(tmp3[i]);  
              xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
              $("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
               phithuchien =parseFloat(phithuchien) + parseFloat(rowData3["PhiThucHien"]);            
            }
          $("#tongcong2").val(formatMoney(phithuchien));
		   var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
			$("#rowed5").jqGrid('footerData','set', {
				TenLoaiKham: 'Tổng tiền:', 
				PhiThucHien: Sum_PhiThucHien,
			});
  }
 function chuyen_goi(aa){
        var tmp1 = $("#rowed5").jqGrid('getDataIDs'); 
        var tam,ln=0;
        var dem=tmp1+1;
        var rowData = jQuery("#goikham").getRowData(aa);
        var selRowId = $("#rowed3").jqGrid ('getGridParam', 'selrow');
        var celValue = $("#rowed3").getRowData(selRowId); //
            parameters =
                {
                  initdata : {ID_LoaiKham:rowData["ID_LoaiKham"],Xoa:"Xóa",TenLoaiKham:rowData["TenLoaiKham"],PhiThucHien:rowData["GiaBaoChoBN"],TrangThai:"",NguoiChiDinh:"<?=$_SESSION["user"]["id_user"] ?>",GiaThueNgoaiThucHien:rowData["GiaThueNgoaiThucHien"],ThoiGianTrungBinhThucHien:rowData["ThoiGianTrungBinhThucHien"],MaBenhNhan:celValue["MaBenhNhan"],ID_LuotKham:celValue["ID_LuotKham"]},
                  position :"last",
                  useDefValues : false,
                  useFormatter : false,
                  addRowParams : {extraparam:{}}
                }
          var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
          var dem=0;
          var tontai=0;
        
          if(tmp2.length==0)
            dem=1;
          for(var i=0;i < tmp2.length;i++){
            var rowData2 = $("#rowed5").getRowData(tmp2[i]);  
            if(parseInt(rowData["ID_LoaiKham"])===parseInt(rowData2["ID_LoaiKham"])){
              tontai=1;
            }
            else{
              if(tontai==0){
                dem=1;
              }
            }
          } //end for
              if(tontai==1){
              var strconfirm = confirm("Loại khám: "+rowData["TenLoaiKham"]+" đã tồn tại, bạn có muốn chỉ định thêm không?");
              if (strconfirm == true)
              {
                dem=1;              
              }else{
                dem=0;
              }
            }
          if(dem==1){
            jQuery("#rowed5").jqGrid('addRow',parameters);
          }
          var phithuchien =0;
          var tmp3= $("#rowed5").jqGrid('getDataIDs'); 
          for(var i=0;i < tmp3.length;i++){ 
              //console.log(tmp3[i]);
              var rowData3 = $("#rowed5").getRowData(tmp3[i]);  
              xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp3[i]+"');\" />"; 
              $("#rowed5").jqGrid('setRowData',tmp3[i],{Xoa:xoa});
               phithuchien =parseFloat(phithuchien) + parseFloat(rowData3["PhiThucHien"]);            
            }
          $("#tongcong2").val(formatMoney(phithuchien));
		   var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
			$("#rowed5").jqGrid('footerData','set', {
				TenLoaiKham: 'Tổng tiền:', 
				PhiThucHien: Sum_PhiThucHien,
			});
  }
function n_xoa(tam){
    var rowData_luu = $("#rowed5").getRowData(tam);
    if(rowData_luu["Luu"]!=1){
		$('#rowed5').jqGrid('delRowData',tam);
		var tmp5 = $("#rowed5").jqGrid('getDataIDs'); 
		var phithuchien =0;
      for(var i=0;i < tmp5.length;i++){ 
          var rowData = $("#rowed5").getRowData(tmp5[i]);
          xoa = "<input class=' custom_button_n' style='height:22px;width:50px; box-shadow:none!important; cursor:pointer;' type='button' value='Xóa' onclick=\"n_xoa('"+tmp5[i]+"');\" />"; 
          $("#rowed5").jqGrid('setRowData',tmp5[i],{Xoa:xoa});  
           phithuchien =parseFloat(phithuchien) + parseFloat(rowData["PhiThucHien"]);
        
        }
      $("#tongcong2").val(formatMoney(phithuchien));
	    var  Sum_PhiThucHien = $("#rowed5").jqGrid('getCol', 'PhiThucHien', false, 'sum');
		$("#rowed5").jqGrid('footerData','set', {
			TenLoaiKham: 'Tổng tiền:', 
			PhiThucHien: Sum_PhiThucHien,
		});
      
    }else{
    var rowData2 = $("#rowed5").getRowData(tam);
    if((rowData2["TrangThai"]!="HuyBo") && (rowData2["TrangThai"]!="Xong") ){
      $("#idk").val(tam);
      $('#dialog').dialog('open');
    }
    }
  }
 function load_report(){
	if(!$('#print_report').length || !$('.ui-icon-closethick').length){
		setTimeout(load_report,50);
		return;
	}
	$('#print_report').click(function(){
		setTimeout(function(){
		  var tmp1 = $("#rowed3").jqGrid('getDataIDs');
		  var _dem=0;
		  var _tam2=0;
	 	 for(var ii=0;ii<tmp1.length;ii++){
			  if($('#'+tmp1[ii]+'_ChonIn').is( ":checked" )) {
			  _tam2=ii;
			  }
		  }
		  for(var i=0;i<tmp1.length;i++){
			  _dem=_dem+1;
			  //console.log(_dem+'___'+tmp1.length)
			  if($('#'+tmp1[i]+'_ChonIn').is( ":checked" )) {
				  var rowData = $("#rowed3").getRowData(tmp1[i]); 
				  if(_tam2!=i){
					   for(var j=i+1;j<tmp1.length;j++){
						  if($('#'+tmp1[j]+'_ChonIn').is( ":checked" )) {
							 var rowData2 = $("#rowed3").getRowData(tmp1[j]); 
							 break;
						  }
					   }
				  }
				  var inlan=$("#inlan").val();
				  if(inlan==rowData["ID_LuotKham"]){
						$("#inlan").val(rowData2["ID_LuotKham"]);
						$('.modalu78787878975f').dialog('destroy').remove();
						dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_cty&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
						 $(".frame_u78787878975f").css("width","793px");
						 if(_tam2!=i){
						 	load_report();
						 }else{
							 load_report2();
							 $("#bncuoi").val(1);
							 }
						 break;
				  }
			}
		  }
	},500);		
	});

}
function load_report2(){
	if(!$('#print_report').length){
		setTimeout(load_report2,50);
		return;
	}
	$('#print_report').click(function(){
		setTimeout(function(){
			$('.modalu78787878975f').dialog('destroy').remove();
			$("#inlan").val(0);
		},500);	
				
	});
}

function func_reload(){
	var _in_an=$("#inlan").val();
	if(_in_an>0){
		if ($(".modalu78787878975f").dialog( "isOpen" )===false) {
			var bncuoi= $("#bncuoi").val();
			if(bncuoi==0){
			 var tmp1 = $("#rowed3").jqGrid('getDataIDs');
			  var _dem=0;
			  var _tam2=0;
			 for(var ii=0;ii<tmp1.length;ii++){
				  if($('#'+tmp1[ii]+'_ChonIn').is( ":checked" )) {
				  _tam2=ii;
				  }
			  }
			  for(var i=0;i<tmp1.length;i++){
				  _dem=_dem+1;
				 // console.log(_dem+'___'+tmp1.length)
				  if($('#'+tmp1[i]+'_ChonIn').is( ":checked" )) {
					  var rowData = $("#rowed3").getRowData(tmp1[i]); 
					  if(_tam2!=i){
						   for(var j=i+1;j<tmp1.length;j++){
							  if($('#'+tmp1[j]+'_ChonIn').is( ":checked" )) {
								 var rowData2 = $("#rowed3").getRowData(tmp1[j]); 
								 break;
							  }
						   }
					  }
					  var inlan=$("#inlan").val();
					  if(inlan==rowData["ID_LuotKham"]){
							$("#inlan").val(rowData2["ID_LuotKham"]);
							$('.modalu78787878975f').dialog('destroy').remove();
							dialog_report("Xem trước khi in",90,90,"u78787878975f","resource.php?module=report&view=<?=$modules?>&action=khamsuckhoe_cty&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'KhamSucKhoe_Mat1');
							 $(".frame_u78787878975f").css("width","793px");
							 if(_tam2!=i){
								load_report();
								$("#bncuoi").val(0);
							 }else{
								 $("#bncuoi").val(1);
								 }
							 break;
					  }
				}
			  }
			}else{
				$('.modalu78787878975f').dialog('destroy').remove();
				$("#bncuoi").val(0);
				$("#inlan").val(0);
				}
		}
	}
	setTimeout(func_reload,100);
}

function func_reload2(){
	var _in_cd=$("#dachidinh").val();
		if ($(".modalu78787878975f2").dialog( "isOpen" )===false) {
			if(_in_cd==1){
				 var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
				 var rowData = $("#rowed3").getRowData(selr);
				 $("#dachidinh").val(0);
				 $('.modalu78787878975f2').dialog('destroy').remove();
				 var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
				 for(var i=0;i<tmp2.length;i++){
					 var rowData2 = $("#rowed5").getRowData(tmp2[i]);
					 if(rowData2['XetNghiem']==1){
						 
						 dialog_report("Xem trước khi in",90,90,"u78787878975f2","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhxetnghiem&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'PhieuChiDinh_XetNghiem');
						 load_report_chidinh2();
						break;
					 }
				 }
			}
	
	}
	setTimeout(func_reload2,100);
}
function load_report_chidinh(){
	if(!$('#print_report').length){
		setTimeout(load_report_chidinh,50);
		return;
	}
	$('#print_report').click(function(){
		setTimeout(function(){
			$('.modalu78787878975f2').dialog('destroy').remove();
			var tmp2 = $("#rowed5").jqGrid('getDataIDs'); 
				 for(var i=0;i<tmp2.length;i++){
					 var rowData2 = $("#rowed5").getRowData(tmp2[i]);
					 if(rowData2['XetNghiem']==1){
						 $("#dachidinh").val(0);
						  var selr = jQuery('#rowed3').jqGrid('getGridParam','selrow'); 
						 var rowData = $("#rowed3").getRowData(selr);
						 dialog_report("Xem trước khi in",90,90,"u78787878975f2","resource.php?module=report&view=<?=$modules?>&action=phieuchidinhxetnghiem&header=top&id_benhnhan="+rowData["ID_benhNhan"]+"&id_luotkham="+rowData["ID_LuotKham"]+"&type=report&id_form=10",'PhieuChiDinh_XetNghiem');
						 load_report_chidinh2();
						 console.log(222);
						 break;
					 }
				 }
		},500);	
				
	});
}
function load_report_chidinh2(){
	if(!$('#print_report').length){
		setTimeout(load_report_chidinh2,50);
		return;
	}
	$('#print_report').click(function(){
		setTimeout(function(){
			$("#dachidinh").val(0);
			$('.modalu78787878975f2').dialog('destroy').remove();
		},500);	
				
	});
}
function checkbox(a){
var tmp1 = $("#rowed3").jqGrid('getDataIDs'); 

if($(a).is(':checked') ){
$('#rowed3 tr td[aria-describedby="rowed3_ChonIn"] input[type="checkbox"]').each(function() {
		var row = $(this).closest('tr.jqgrow');
        var tam = row.attr('id');
		$(this).prop('checked', true);
  	//$(this).prop('checked')
});	
}
else{

$('#rowed3 tr td[aria-describedby="rowed3_ChonIn"] input[type="checkbox"]').each(function() {
		var row = $(this).closest('tr.jqgrow');
        var tam = row.attr('id');
		$(this).prop('checked', false);
  	//$(this).prop('checked')
});	
}
}

function create_congty(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames:['Tên công ty', 'Địa chỉ', 'Điện thoại'],
		colModel:[			
		{name:'TenCongTy',index:'TenCongTy',width:'50%',hidden :false},
		{name:'DiaChi',index:'DiaChi',width:'35%',hidden :false},
		{name:'DienThoai',index:'DienThoai',width:'20%',hidden :false},
		
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 200000,
		rowList: [],
		height: 190,
		width: 600,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {
			window._idcongty=id;
			$("#com_dotkham").val('');
			$('#rowed3').jqGrid('clearGridData');	
	  		$('#rowed5').jqGrid('clearGridData');	
			create_combobox_new('#com_dotkham',create_dotkham_congty,'cn','','data_ds_goikhambyidcongty&id='+id,'');
		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
			grid_filter_enter(elem);
			window.nhanvien2_complete=1;
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}
function create_dotkham_congty(elem, datalocal) {
	datalocal = jQuery.parseJSON(datalocal);
	$(elem).jqGrid({
		datastr: datalocal,
		datatype: "jsonstring",
		colNames:['Tên đợt khám', 'Tên công ty', 'ID công ty'],
		colModel:[	
		{name:'TenDotKham',index:'TenDotKham',hidden :false},	
		{name:'TenCongTy',index:'TenCongTy',hidden :false},
		{name:'ID_CongTy',index:'ID_CongTy',hidden :true},
    
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,
		modal: true,
		rowNum: 200000,
		rowList: [],
		height: 190,
		width: 700,
		viewrecords: true,
		ignoreCase: true,
		shrinkToFit: true,
		cmTemplate: {sortable: false},
		sortorder: "desc",
		serializeRowData: function(postdata) {
		},
		onSelectRow: function(id) {
			window._idgoikhamcongty=id;
			var dataRow = jQuery(this).jqGrid ('getRowData', id);
			$("#com_dotkham").val(dataRow['TenDotKham']);
			$("#rowed3").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_danhsachbenhnhan&id_kh_congty='+dataRow['ID_CongTy']+'&id_goikham_congty='+id}).trigger('reloadGrid');
			$("#goikham").jqGrid('setGridParam',{datatype:'json',url:'resource.php?module=<?=$modules?>&view=<?=$view?>&action=data_goikham&id='+id}).trigger('reloadGrid');
		},
		ondblClickRow: function(id, rowIndex, columnIndex) {
		},
		loadComplete: function(data) {
			grid_filter_enter(elem);
			window.nhanvien2_complete=1;
			//var tmp1 = $(this).jqGrid('getDataIDs'); 
			//$(this).jqGrid('setSelection', tmp1[0], true);
			 
		},
	});
	$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
	$(elem).jqGrid('bindKeys', {});
}



function resize_control() {
    $("#rowed3 ").setGridWidth($(".trai").width() - 10);
    $("#rowed3").setGridHeight($(".trai").height() - 200);
    $("#rowed4").setGridWidth($(".giua").width() - 10);
    $("#rowed4").setGridHeight($(".giua").height() - 163);
    $("#rowed5").setGridWidth($(".n-center").width() - 13);
    $("#rowed5").setGridHeight($(".n-center").height() - 217);
}



</script>