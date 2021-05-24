<?php
if(isset($_GET["ID_BenhNhan"])){
        echo "<script type='text/javascript'>";
        echo "window.ID_BenhNhan=".$_GET["ID_BenhNhan"];
        echo "</script>";

    }
?>








<style type="text/css">
.top_main {
	/*background-color: #F2FFD7 !important;*/
	border-color:#336;
}

#save,#hoantatBHCC{
  margin-left: 60px !important;

}
button{
  margin-left: 49px !important;

}

/*#save:focus:enabled,#hoantatBHCC:focus:enabled {
    background: url("js/grid/themes/south-street/images/ui-bg_highlight-soft_25_67b021_1x100.png") repeat-x scroll 50% 50% #67B021;
    border: 1px solid #327E04;
    color: #FFFFFF;
    font-weight: bold;
   
}*/

#dm_bhyt td,#dm_bhcc td  {	 
	word-wrap:normal!important;
	white-space:nowrap;
}
#TaoMoi{
   margin-left: 49px !important;
}
 th.ui-th-column div{
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        overflow: hidden;
        height: auto !important;
        vertical-align: middle;
    }
}
</style>

<body>
<div class="n-bhcc" style="display:inline-block;margin-left:10px!important">
    <div style="width:690px;height:150px;display:inline-block">
           <table id="dm_bhcc" ></table>
     </div>
            <div class="form_row" style="vertical-align:top"  id="container_bhcc" >
           	  <fieldset>
               <legend>Thẻ BHCC</legend>
                    <span id="container_bhcc1">
               <input  id="idbhcc" type="text" style="display:none" name="idbhcc"> 
                		 <div style="margin-top:2px;">
                          <label for="mabhcc" style="width:120px; " >Số thẻ bảo hiểm</label>                              
                          <input  id="mabhcc" type="text" style="width:340px;" name="mabhcc">
                        </div>
                        <div style="margin-top:2px;">
                        <label for="loaithe" style="width:120px; ">Loại thẻ BHCC</label>                      
                        <input id="loaithe" type="text" style="width:312px;" name="loaithe"> 
                        </div>  
                        <div style="margin-top:2px;">
                         <label for="diachibhcc" style="width:120px; ">Địa chỉ</label>
                        <input id="diachibhcc" kiemtra="trong" type="text" style="width:340px;" name="diachibhcc"> 
                        </div> 
                        <div style="margin-top:2px;">
                        <label for="bhcc_hsdtu" style="width:120px; ">HSD từ</label>
                        <input id="bhcc_hsdtu" kiemtra="trong" type="text" style="width:80px;" name="bhcc_hsdtu"> 
                         <label for="bhcc_hsdden" style="width:30px; ">đến</label>
                        <input id="bhcc_hsdden" kiemtra="trong" type="text" style="width:80px;" name="bhcc_hsdden"> 
                        </div> 
                
                        </span>
                        <div>
                     <a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="new_bhcc" href="#">Thêm mới<span  class="ui-icon ui-icon-plusthick"></span></a>
                     <a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="edit_bhcc" href="#">Sửa<span  class="ui-icon ui-icon-pencil"></span></a>
                     <a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="save_bhcc" href="#">Lưu<span  class="ui-icon ui-icon-disk"></span></a>
                     <a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="chon_bhcc" href="#">Chọn thẻ<span  class="ui-icon ui-icon-check"></span></a>
                     <a style="margin-left:0px;margin-bottom:1px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fm-button-icon-left" id="huychon_bhcc" href="#">Hủy chọn thẻ<span  class="ui-icon ui-icon-cancel"></span></a>
            </div>
              </fieldset>
       	   </div>
    </div>


    <div class="top_main" id="top_main">
    <label for="nguoilapphieu"  style="width:150px;text-align:left">Người bảo lãnh </label>
        <input id="nguoilapphieu" name="nguoilapphieu"   type="text" style="width:100px;" tabindex="6">
          <a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="save" href="#">Lưu<span class="ui-icon ui-icon-cancel"></span></a>
          <a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="tailai" href="#">Làm mới<span class="ui-icon ui-icon-cancel"></span></a>
          <a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="hoantatBHCC" href="#">Hoàn tất<span class="ui-icon ui-icon-cancel"></span></a>
          <a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="moKhoaBHCC" href="#">Mở khóa<span class="ui-icon ui-icon-cancel"></span></a>
          <a style="margin-left:0px;  margin-bottom:1px;" class="fm-button-icon-left" id="bangke" href="#">Bảng Kê<span class="ui-icon ui-icon-cancel"></span></a>
		 <label id="thongbao">*****</label>
      

      </div>





         <div class="ui-layout-center" id="center">
         <table id="rowed1"></table>

         </div>
     
</body>
</html>
<script type="text/javascript">


jQuery(document).ready(function() {
 var MPhieu='';
 	create_combobox_new('#loaithe',create_loaithebhcc,'bw','','data_loaithebhcc',0);
	$('#new_bhcc,#edit_bhcc,#chon_bhcc,#huychon_bhcc').button();
	$("#save,#hoantatBHCC,#moKhoaBHCC").button();
window.userlogin=<?php echo  $_SESSION['user']['id_user'];?>;
window.ID_LuotKham =<?php echo  $_GET["ID_LuotKham"];?>;
window.DaKhoaForm=0;
window.IsSaveTienBHCC=0;
 window.url_rowed1='';
 window.ID_NguoiBaoLanhBHCC=null;
//create_combobox('#com_thuochmk','#com_thuochmk1',".data_thuochmk","#data_thuochmk",create_ds_theBHCC,500,240,'Danh mục ','data_theBHCC&id_luotkham=<?php echo  $_GET["ID_LuotKham"];?>',window.default_id_pb_ChuyenMon);
create_combobox_new('#nguoilapphieu',create_nguoilapphieu,'bw','','data_nhanvien','');  
    onload_form();
    create_grid();
	create_dm_bhcc();
   // create_layout();
    resize_control();

$('#TaoMoi,#Luu,#Xoa,#In,#HoanTien,#tailai').button();


 phanquyen();
//getDataByLoaiChiDinh();
//setTimeout(function(){getDataByLoaiChiDinh()}, 1000);
//hết dom ready
$('#tailai').click(function(){	
	$("#rowed1").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_vienphichitiet_theoluotkham&ID_LuotKham='+window.ID_LuotKham}).trigger('reloadGrid');
})
$( "#save" ).click(function() {
	luu();

});

$( "#bangke" ).click(function() {
		$.cookie("in_status", "print_preview");
		dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=bhyt_cc_luotkham&header=top&lien=2&type=report&id_form=10&id_luotkham="+ID_LuotKham,'ChitietBHYT');
			

});



$( "#hoantatBHCC" ).click(function() {
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_hoantat_BHCC&ID_LuotKhamP='+window.ID_LuotKham+'&hoantatBHCC=1&hienmaloi=3').done(function(data) {
               //alert(data);
               khoaForm(1,window.userlogin);
              });

});
$( "#moKhoaBHCC" ).click(function() {
        $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_hoantat_BHCC&ID_LuotKhamP='+window.ID_LuotKham+'&hoantatBHCC=0&hienmaloi=3').done(function(data) {
              // alert(data);
                 khoaForm(0,window.userlogin);
              });

});


})
function getDataByLoaiChiDinh()
{
   var LoaiChiDinh = $("input:radio[name ='LoaiChiDinh']:checked").val();


   //var postTo='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hoantrachidinh&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&LoaiChiDinh='+LoaiChiDinh+'&ID_BenhNhan='+window.ID_BenhNhan;
   var postTo2='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_cacphieuhuy&ID_BenhNhan='+window.ID_BenhNhan;

   $("#rowed1").jqGrid('setGridParam',{datatype:'json',url:url_rowed1,datatype:'json',loadonce: true}).trigger('reloadGrid');
 

}



$( "#In" ).click(function() {
    /*  $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u787387878975f","pages.php?module=report&view=vienphi&action=phieuhuychitiet&header=top&lien=3&type=report&kieuin=1&id_ttno=1",'phieuhuychitiet');
          $('#dialog_print').dialog('close');
*/

var selr = jQuery('#rowed2').jqGrid('getGridParam','selrow');
var ID_HuyChiDinhP = jQuery('#rowed2').jqGrid('getCell', selr, 'ID_HuyChiDinh');
var MaPhieuP = jQuery('#rowed2').jqGrid('getCell', selr, 'MaPhieu');
$.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=phieuhuychitiet&header=top&lien=3&type=report&id_form=11&kieuin=1&ID_BenhNhan="+window.ID_BenhNhan+'&ID_HuyChiDinh='+ID_HuyChiDinhP+'&MaPhieu='+MaPhieuP,'phieuhuychitiet');
          $('#dialog_print').dialog('close');

});
$( "#Luu" ).click(function() {


ids = $('#rowed3').jqGrid('getDataIDs');
          for(var i=0;i<=ids.length-1;i++){
            jQuery("#rowed3").jqGrid('saveRow',ids[i]);
          }
          if(ids.length>0)
          {thaotac('luu');}
        else
          {tooltip_message('Chưa có chỉ định hủy chi tiết,click đup vào lưới Các hạng mục chỉ định để add hạng mục')};


});
$( "#Xoa" ).click(function() {
thaotac('xoa');
});
$("#TaoMoi").click(function() {
  $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');
   $("#rowed2").addRowData(0,{id:"0"}, "last"); // Insert blank record
   ids = $('#rowed2').jqGrid('getDataIDs');
   $('#rowed2').jqGrid('setSelection', ids[ids.length-1], true);
});
function thaotac(option)
{
 var LoaiChiDinh = $("input:radio[name ='LoaiChiDinh']:checked").val();

 var dataToSend = '{';
 var phancach = ",";
 var gridData3 = jQuery("#rowed3").getRowData();
 var postData3 = JSON.stringify(gridData3);
 postData3 += phancach + '"lydoHuy":' + JSON.stringify($.trim($("#lydoHuy").val()));
 postData3 += phancach + '"ID_BenhNhan":' + JSON.stringify($.trim(window.ID_BenhNhan));
 postData3 += phancach + '"LoaiChiDinh":' + JSON.stringify($.trim(LoaiChiDinh));
 postData3='{"id":'+postData3+'}';
 postData3=$.parseJSON(postData3);
 alertObject(postData3);

 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCD&hienmaloi=3&thaotac='+option,postData3).done(function(data){


if (isNaN(data) ==false&& $.trim(data)>0) {

                                  tooltip_message("Thêm thành công");
                                    getDataByLoaiChiDinh();//lay lai du lieu
                                  }
                                  else if($.trim(data)=="")
                                    {
                                      tooltip_message("Lưu thành công");
                                        getDataByLoaiChiDinh();//lay lai du lieu
                                    }

   if(option=='xoa')     {
    $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');}                           Ơ




      });
}
function onload_form()
{
window.url_rowed1 = 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_vienphichitiet_theoluotkham&ID_LuotKham='+window.ID_LuotKham;
trangthaiForm();
}
function khoaForm(tthai,tve)
{
 if (tthai==1)
  {
    
       $("#save").button('disable');
        $("#hoantatBHCC").button('disable');
         $("#moKhoaBHCC").button('enable');
         $("#thongbao").html("Thông báo: Lượt khám này đã bị khóa bởi "+tve);
         window.DaKhoaForm=1;

           $("#nguoilapphieu").prop('disabled', true);
  }
  else//mở
  {
     $("#thongbao").html("Lượt khám còn cho phép sửa giá BHCC");
     $("#save").button('enable');
     $("#hoantatBHCC").button('enable');
      $("#moKhoaBHCC").button('disable');
        window.DaKhoaForm=0;
         create_combobox_enable('#nguoilapphieu'); 
  }
  if (tthai==4)
  {
    $("#nguoilapphieu").prop('disabled', true);
    $("#thongbao").html("Lươt khám đã khóa do thanh toán bởi " +tve);
     $("#save").button('disable');
     $("#hoantatBHCC").button('disable');
      $("#moKhoaBHCC").button('disable');
        window.DaKhoaForm=1;
  }
}
function trangthaiForm()
{
  //kiểm tra lượt khám có đang bị khóa không, nếu bị khóa thì không cho edit và khóa nút lưu
var trave='';
  $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=check_hoantatBHCC&idluotkham='+window.ID_LuotKham).
          done(function(data){
              var n_rs=data.split(';;');
              var khoaso=parseInt(n_rs[2]);
              trave=n_rs[3];
              if (khoaso>=3)
              {
                      khoaForm(1,trave);
                        if (khoaso==4)
                        {
                           khoaForm(4,trave);
                        }
              }
              else
              {
                  khoaForm(0,trave);
                 
              }
              
          });
          return trave;

}
function create_grid() {

        $("#rowed1").jqGrid({
            url: url_rowed1,

            datatype: "json",
            colNames: ['ID_LoaiKham','ID_Kham','Ngày chỉ định','Tên loại khám',
            'Số lần/giờ','Số ngày','Đơn giá','Giá BHCC','Phí thực hiện','BHYT trả','Người bệnh','','Tên nhóm','','ID',
            '','BHCC trả','BHCC','BHCC','BHCC','BHCC','BHCC',''],
            colModel: [
                {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
                {name: 'ID_Kham', index: 'ID_Kham', search: true, width: "1%", editable: false, align: 'left', hidden: true},
                {name: 'NgayGioTao', index: 'NgayGioTao', search: false, width: "10%", editable: false, align: 'center', hidden: false},
                {name: 'TenLoaiKham', index: 'TenLoaiKham', search: false, width: "30%", editable: false, align: 'left', hidden: false},
                {name: 'sogio', index:  'sogio', search: false, width: "5%", editable: false, align: 'right', hidden: false},
                {name: 'songay', index: 'songay', search: false, width: "5%", editable: false, align: 'right', hidden: false},
				{name: 'Dongia',formatter:"integer",sorttype:"number",index: 'Dongia', search: false, width: "10%", editable: false, align: 'right', hidden: false},
				{name: 'Giabhcc',formatter:"integer",sorttype:"number",index: 'Giabhcc', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'PhiThucHien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'PhiThucHien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'Bhyt',formatter:"integer",sorttype:"number",index: 'Bhyt', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'Cungchitra',formatter:"integer",sorttype:"number",index: 'Cungchitra', search: false, width: "10%", editable: false, align: 'right', hidden: false},
				{name: 'GiaCungchitra',formatter:"integer",sorttype:"number",index: 'GiaCungchitra', search: false, width: "10%", editable: false, align: 'right', hidden: true},
				{name: 'TenNhom', index: 'TenNhom', search: false, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'ExtField1',index: 'ExtField1',hidden: true},
                {name: 'id',index: 'id',hidden: true,width: "0%",},
                {name: 'nhomcha',index: 'nhomcha',hidden: true},
                {name: 'BHYTCC',index: 'BHYTCC', search: false,hidden: false,width: "5%",editable: true,summaryType: 'sum',formatter:"integer",sorttype:"number",align: 'right'},
				{name: 'IsBHCC', index: 'IsBHCC',  width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) {



					  var row = $(e.target).closest('tr.jqgrow');
              		  var tam = row.attr('id');
					  Giabhcc=$('#rowed1').jqGrid('getCell', tam, 'Giabhcc');
					  Dongia=$('#rowed1').jqGrid('getCell', tam, 'Dongia');
					  sogio=$('#rowed1').jqGrid('getCell', tam, 'sogio');
					  songay=$('#rowed1').jqGrid('getCell', tam, 'songay');
					  Cungchitra=$('#rowed1').jqGrid('getCell', tam, 'Cungchitra');
					  bhyt=$('#rowed1').jqGrid('getCell', tam, 'Bhyt');
					  ExtField1=$('#rowed1').jqGrid('getCell', tam, 'ExtField1');
					  if(sogio==0 && ExtField1!="Giuongbenh"){sogio=1};
					  if(songay==0 && ExtField1!="Giuongbenh"){songay=1};
					  if(window.IsSaveTienBHCC==1){
					 if($("#"+$(e.target).attr('id')).is(':checked')){						 				
						
						if(ExtField1=="Thuoc"){
							$("#"+tam+"_BHYTCC").val(Cungchitra);	
							$("#rowed1").jqGrid('setCell',tam,'PhiThucHien', Giabhcc*sogio*songay);
						}else if(ExtField1=="Giuongbenh"){							
							$("#rowed1").jqGrid('setCell',tam,'PhiThucHien', Giabhcc);
							$("#rowed1").jqGrid('setCell',tam,'Cungchitra', parseInt(Giabhcc)-parseFloat(bhyt));
							$("#"+tam+"_BHYTCC").val(parseInt(parseInt(Giabhcc)-parseFloat(bhyt)));	
						}
						else{								
        					$("#"+tam+"_BHYTCC").val((Giabhcc)-bhyt);
							$("#rowed1").jqGrid('setCell',tam,'Cungchitra', (Giabhcc)-bhyt);
							$("#rowed1").jqGrid('setCell',tam,'PhiThucHien', Giabhcc);
						}
					  }
					else{
								
        					$("#"+tam+"_BHYTCC").val(0);
						if(ExtField1=="Thuoc"){	
																
						}else if(ExtField1=="Giuongbenh"){						
							$("#rowed1").jqGrid('setCell',tam,'PhiThucHien',parseInt(Dongia));
							$("#rowed1").jqGrid('setCell',tam,'Cungchitra', parseInt(Dongia)-parseFloat(bhyt));
						}else{								
        					$("#rowed1").jqGrid('setCell',tam,'Cungchitra', (Dongia)-bhyt);
							$("#rowed1").jqGrid('setCell',tam,'PhiThucHien', Dongia);
						}
					  }
					  if(e.hasOwnProperty('originalEvent')){
						  sum_phithuchien()
					  }
					  }
					
                 } }]},
                  editable: true, align: 'center', hidden: false, },
				  {name: 'GiaBlog_thuong',index: 'GiaBlog_thuong',hidden: true,width: "0%",},
				  {name: 'GiaBlog_heso',index: 'GiaBlog_heso',hidden: true,width: "0%",},
				  {name: 'DonGia_thuong',index: 'DonGia_thuong',hidden: true,width: "0%",},
				  {name: 'DonGia_heso',index: 'DonGia_heso',hidden: true,width: "0%",},
           {name: 'ID_NguoiBaoLanhBHCC',index: 'ID_NguoiBaoLanhBHCC',hidden: true,width: "0%",},
				  

            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed1',
            sortname: 'id',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow: true,
            userDataOnFooter: true,
            grouping:true,
            groupingView : {
            groupField : ['TenNhom'],
            groupDataSorted : true ,
            groupCollapse : false,
            groupColumnShow :true,
            groupSummary:false,
            groupText : ['<b>{0} : {PhiThucHien}</b>']
             },


            onSelectRow: function(id) {
             

              /*if(window.DaKhoaForm==1)
              {
                 jQuery("#rowed1").jqGrid('saveRow',id);
              }else
              {
                jQuery('#rowed1').editRow(id, true);
              }
                    */

            },
        
            loadComplete: function(data) {


			var grid = $("#rowed1");
				var tmp1 = $("#rowed1").jqGrid('getDataIDs'); 
			
				for(var i=0;i < tmp1.length;i++){ 
					jQuery("#rowed1").jqGrid('editRow',tmp1[i]);

      var rowData = jQuery('#rowed1').getRowData(tmp1[i]);
      if(rowData["ID_NguoiBaoLanhBHCC"] =='')
      {
        //alert(rowData["ID_NguoiBaoLanhBHCC"] );
       // $("#nguoilapphieu").val(7);
         setval_new('#nguoilapphieu',<?php echo  $_SESSION['user']['id_user'];?>); 

      }else
      {
         setval_new('#nguoilapphieu',rowData["ID_NguoiBaoLanhBHCC"] );  
        
        
      }
      

				}
			sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
			sumBHYTCC=grid.jqGrid('getCol', 'BHYTCC', false, 'sum');
			grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
			grid.jqGrid('footerData','set', {ID: 'BHYTCC:', BHYTCC: sumBHYTCC});
			select_all('gs_IsBHCC');

            },
            caption: "Chi tiết hạng mục sử dụng"
        });
 $("#rowed1").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    }
    function sumAgain()
    {
        var grid = $("#rowed1");
        sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');
        sumBHYTCC=grid.jqGrid('getCol', 'BHYTCC', false, 'sum');
        grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
        grid.jqGrid('footerData','set', {ID: 'BHYTCC:', BHYTCC: sumBHYTCC});
    }




function resize_control() {

  $("#rowed1").setGridWidth($(window).width()-5);
  $("#rowed1").setGridHeight($(window).height()-300);  
}


function create_layout(){
  $("#panel_main2").css("height",$(window).height()-30+"px");
  $("#panel_main2").css("width",$(window).width()+"px");
  $("#panel_main2").fadeIn(1000);
  $('#panel_main2').layout({
    resizerClass: 'ui-state-default'
    , east: {
      resizable: true
      , size: "0%"
      , resizerDblClickToggle: false
      , onresize_end: function() {
       resize_control();
     }
     , onopen_end: function() {
      resize_control();
    }
    , onclose_end: function() {
      resize_control();
    }

  }
  , center: {
    resizable: true
    , size: "95%"
    , resizerDblClickToggle: false
    , onresize_end: function() {
      resize_control();
    }
    , onopen_end: function() {
      resize_control();
    }
    , onclose_end: function() {
      resize_control();
    }
  }

});
}





function create_ds_theBHCC(elem,datalocal){
 datalocal=jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr:datalocal,
  datatype: "jsonstring" ,
  colNames:['Số thẻ','Tên thẻ','Công ty','Hạn sử dụng'],
  colModel:[
    {name:'SoThe',index:'SoThe',hidden :false,width: "30%",},
      {name:'TenLoaiThe',index:'TenLoaiThe',hidden :false,width: "30%",},

  {name:'TenCongTy',index:'TenCongTy',hidden :false,width: "30%",},
   {name:'HSD',index:'HSD',hidden :false,width: "30%",},
 
 

  ],
  hidegrid: false,
  gridview: true,
  loadonce: true,
  scroll: false,
  modal:true,
  rowNum: 200000,
  rowList:[],
  sortname: 'tenhangmuc',
  height:265,
  width: 700,
  viewrecords: true,
  ignoreCase:true,
  shrinkToFit:true,
  cmTemplate: {sortable:false},
  sortorder: "desc",
  serializeRowData: function (postdata) {
  },
  onSelectRow: function(id){


    if($(elem).data('clicked')){

     var selr = jQuery(elem).jqGrid('getGridParam','selrow');
    // alert($.trim(selr));
    $('#ui-id-136').val('sđasđâsdfád');


      /* var tmp = $("#rowed15").jqGrid('getDataIDs');
       if(tmp.length>0)
       {

          $('<div></div>').appendTo('body')
            .html('<div><h2>Bạn chọn loại hóa đơn khác sẽ  bỏ hết các ca đã chọn</h2></div>')
            .dialog({
              modal: true,
              title: 'Bỏ chọn',
              zIndex: 10000,
              autoOpen: true,
              width: 'auto',
              resizable: false,
              buttons: {
                Yes: function () {
                 // subItem();
$('#rowed15').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');

                var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.loaiHD=$.trim(selr);

                 tooltip_message("Thao tác tiếp tục");
                  $(this).dialog("close");

                },
                No: function () {
                 tooltip_message("Chưa thao tác gì");
                 $(this).dialog("close");
               }
             },
             close: function (event, ui) {
              $(this).remove();
            }
          });

       }
      else{

                var selr = jQuery(elem).jqGrid('getGridParam','selrow');
                window.loaiHD=$.trim(selr);
                loadDatatheoComboLoaiHoadon( window.loaiHD);

      }
*/


    }

  },
  ondblClickRow: function (id, rowIndex, columnIndex) {

  },
  loadComplete: function(data) {
    grid_filter_enter(elem) ;
    count = jQuery(elem).jqGrid('getGridParam', 'records');
    if(count>0){
      ids = ($(elem).getDataIDs()[0]);
      $(elem).jqGrid("setSelection",ids, true);
    }
  },

});

$(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
$(elem).jqGrid('bindKeys', {} );
 
}



function select_all(input){
	if(!$("#"+input).length){
	 setTimeout(function(){select_all(input)},10);
	  return;
	}
	if(!$("#"+input+'_1').length){
	$("td.ui-search-clear").hide();
	$('#'+input).hide();
	var grid = $("#rowed1");
	var tmp1 = $("#rowed1").jqGrid('getDataIDs'); 
			
				
	$('#'+input).before( '<input type="checkbox"  value="0"  id="'+input+'_1">' ); 				
	$('#'+input+'_1').click(function(e){						
					if($("#"+$(e.target).attr('id')).is(':checked')){						
						for(var i=0;i < tmp1.length;i++){ 			
							$("#"+tmp1[i]+"_IsBHCC").prop('checked', false);							
							$("#"+tmp1[i]+"_IsBHCC").click();													
						}
						sum_phithuchien()
						sum_bhcc()
					  }
					else{
						for(var i=0;i < tmp1.length;i++){ 							
							$("#"+tmp1[i]+"_IsBHCC").prop('checked', true);							
							$("#"+tmp1[i]+"_IsBHCC").click();								
						}
						sum_phithuchien()
						sum_bhcc()
					  }	
		 						
	})
	}
}






function luu(){
	
					var ids = $('#rowed1').jqGrid('getDataIDs');
					var phancach = "";
					var dataToSend='[';
					for(var i=0;i<=ids.length-1;i++){						
						dataToSend += phancach+'{';
						var rowData = $('#rowed1').jqGrid ('getRowData', ids[i]);			
						dataToSend += '"id_chidinh":' + JSON.stringify(rowData['id'])+',';
						dataToSend += '"Dongia":' + JSON.stringify(rowData['Dongia'])+',';
						dataToSend += '"Giabhcc":' + JSON.stringify(rowData['Giabhcc'])+',';
						dataToSend += '"ExtField1":' + JSON.stringify(rowData['ExtField1'])+',';
						dataToSend += '"BHYTCC":' + JSON.stringify($("#"+(i+1)+"_BHYTCC").val())+',';
						dataToSend += '"IsBHCC":' + JSON.stringify(+$("#"+(i+1)+"_IsBHCC").is( ':checked' ))+',';			
						dataToSend += '"sogio":' + JSON.stringify(rowData['sogio'])+',';	
						dataToSend += '"songay":' + JSON.stringify(rowData['songay'])+',';		
						dataToSend += '"ID_LuotKham":' + JSON.stringify(<?php echo  $_GET["ID_LuotKham"];?>)+',';
						dataToSend += '"GiaBlog_thuong":' + JSON.stringify(rowData['GiaBlog_thuong'])+',';	
						dataToSend += '"GiaBlog_heso":' + JSON.stringify(rowData['GiaBlog_heso'])+',';	
						dataToSend += '"DonGia_thuong":' + JSON.stringify(rowData['DonGia_thuong'])+',';	
						dataToSend += '"DonGia_heso":' + JSON.stringify(rowData['DonGia_heso']);			
            dataToSend+=',"nguoilapphieu":'+JSON.stringify($('#nguoilapphieu_hidden').val())+'';						





						dataToSend += '}';
						phancach=',';				
					}
					dataToSend+=']';
				
					postData='{"id":'+dataToSend+'}';
					//alert(postData);
					
					postData=$.parseJSON(postData);
			$.post('pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_saveBHCC&hienmaloi=1',postData).done(function(data1){
											
			})
	}
function create_dm_bhcc(){	
	$('#dm_bhcc').jqGrid({
	url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhcc&id_luotkham=<?php 
		 
		 echo $_GET["ID_LuotKham"];

	?>',
	    datatype: "json",
		colNames:['Số thẻ','Địa chỉ', '', 'Loại thẻ', 'HSD từ','HSD đến','NgayCap','','MaNhom',''],
		colModel:[			
			{name:'SoThe',index:'SoThe',search:true,hidden :false,width:'20%'},
			{name:'DiaChiTheBHCC',index:'DiaChiTheBHYTCC',search:true,hidden :false,width:'10%'},
			{name:'ID_LoaiTheBHCC',index:'ID_LoaiTheBHCC',hidden :true,width:'20%'},
			{name:'TenLoaiThe',index:'TenLoaiThe',search:true,hidden :false,width:'20%'},
			{name:'HanSD_TuNgay',index:'HanSD_TuNgay',search:true,hidden :false,width:'10%'},
			{name:'HanSD_DenNgay',index:'HanSD_DenNgay',search:true,hidden :false,width:'10%'},
			{name:'NgayCap',index:'NgayCap',hidden :true},
			{name:'ID_LuotKham',index:'ID_LuotKham',hidden :true},
			{name:'MaNhom',index:'MaNhom',hidden :false,width:'10%'},
			{name:'IsSaveTienBHCC',index:'IsSaveTienBHCC',hidden :true},
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],			
		height:100,
		width: 690,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){	
			 var rowData = $('#dm_bhcc').getRowData(id);
			 if(window.id_bhcc_tam>0){
				 if(window._noper==1){
					$('#edit_bhcc').button('enable');
					if(window.id_bhcc==$('#dm_bhcc').jqGrid('getGridParam', 'selrow')){
						$('#huychon_bhcc').button('enable');
						$('#chon_bhcc').button('disable');
					}else{
						$('#huychon_bhcc').button('disable');
						$('#chon_bhcc').button('enable');
					}
				 }
			 }else{
				  if(window._noper==1){
					$('#edit_bhcc').button('enable');					
					window.id_bhcc=window.id_bhcc_tam;
					if(window.id_bhcc_tam==$('#dm_bhcc').jqGrid('getGridParam', 'selrow')){
						$('#huychon_bhcc').button('enable');
						$('#chon_bhcc').button('disable');
					}else{
						$('#huychon_bhcc').button('disable');
						$('#chon_bhcc').button('enable');
					}
				 }
			 }
		},
		ondblClickRow: function (id, rowIndex, columnIndex) {
					
 		},
		loadComplete: function(data) {		
	
		var ids = $('#dm_bhcc').jqGrid('getDataIDs');
			for(var i=0;i<ids.length;i++){
					rowData=$('#dm_bhcc').jqGrid ('getRowData', ids[i]);						
				if(rowData['ID_LuotKham']=='<?php echo $_GET["ID_LuotKham"];?>'){
						window.IsSaveTienBHCC=rowData['IsSaveTienBHCC'];
						$('#dm_bhcc').jqGrid('setRowData', ids[i], false, { color: 'red',border:'1px solid #BBBBBB' });
				}				
			}
		
		
			
			
			
		},	  
	});	
	 $('#dm_bhcc').jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $('#dm_bhcc').jqGrid('bindKeys', {} );
}  

function create_loaithebhcc(elem,datalocal){	
		datalocal=jQuery.parseJSON(datalocal);	 
		 $(elem).jqGrid({
		datastr:datalocal,
		datatype: "jsonstring",
		colNames:['Loại thẻ','Tên công ty','Mã nhóm'],
		colModel:[			
			{name:'loaithe',index:'loaithe',width:"40%",hidden :false},	
			{name:'tencongty',index:'tencongty',width:"40%",hidden :false},	
			{name:'manhom',index:'manhom',width:"20%",hidden :false},			
		],
		hidegrid: false,
		gridview: true,
		loadonce: true,
		scroll: false,		 
		modal:true,	 
		rowNum: 200000,
		rowList:[],		
		height:100,
		width: 500,
		viewrecords: true,	
		ignoreCase:true,
		shrinkToFit:true,
		cmTemplate: {sortable:false},
		sortorder: "desc",
		serializeRowData: function (postdata) { 	
		},
		onSelectRow: function(id){		
		 							
		},
		loadComplete: function(data) {	
		grid_filter_enter(elem) ;
	
		},	  
		
	});	
			 
	 $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
	 $(elem).jqGrid('bindKeys', {} );
		
}  


function them_bhcc(){
	$('#save_bhcc,#edit_bhcc,#chon_bhcc,#huychon_bhcc').button('disable');	
	$('#new_bhcc').click(function(){		
		window.bhcc_ac='add';
		window.id_bhcc=0;		
		create_combobox_enable('#loaithe');
		$('#save_bhcc').button('enable');
		$('#new_bhcc,#edit_bhcc').button('disable');	
		$("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', false);
		$('#container_bhcc1 input').val('');
		$("#dm_bhcc").jqGrid("resetSelection");
		$('#mabhcc').focus();
	})
	$('#edit_bhcc').click(function(){
		$('#edit_bhcc').button('disable');
		$('#save_bhcc,#new_bhcc').button('enable');
		var rowData = $('#dm_bhcc').getRowData($('#dm_bhcc').jqGrid('getGridParam', 'selrow') );
		 create_combobox_enable('#loaithe');
		 $("#mabhcc,#diachibhcc,#bhcc_hsdtu,#bhcc_hsdden").prop('disabled', false);
		 $('#diachibhcc').val(rowData['DiaChiTheBHCC']);
		 $('#bhcc_hsdtu').val(rowData['HanSD_TuNgay']);
		 $('#bhcc_hsdden').val(rowData['HanSD_DenNgay']);
		 $('#mabhcc').val(rowData['SoThe']);
		 setval_new('#loaithe',rowData['ID_LoaiTheBHCC']);	
		 window.bhcc_ac='edit';
		 window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
		 $('#mabhcc').focus().select();
	})
	$('#chon_bhcc').click(function(){
		//alert(oper);
		if(oper=='add'){
			 window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			 window.id_bhcc_tam=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			 window.id_bhcc_new=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
			 var ids = $('#dm_bhcc').jqGrid('getDataIDs');
			 for(var i=0;i<=ids.length-1;i++){
				//var rowData = $('#rowed5').jqGrid ('getRowData', ids[i]);
				if(ids[i]==window.id_bhcc_new){
					$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'red'});
				}else{
					$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});	
				}
			 }
			 $('#chon_bhcc').button('disable');
		}else{
			if(window.id_ttluotkham>0){
					window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					window.id_bhcc_tam=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					window.id_bhcc_new=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
					$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_apthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&idthe="+window.id_bhcc+"&ac=bhcc").done(function(data) {
						if($.trim(data)==''){
							tooltip_message("Áp thẻ thành công");	
							 var ids = $('#dm_bhcc').jqGrid('getDataIDs');
							 for(var i=0;i<=ids.length-1;i++){
								if(ids[i]==window.id_bhcc_new){
									$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'red'});
								}else{
									$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});	
								}
							 }
							 $('#chon_bhcc').button('disable');
						}else{
							tooltip_message("Áp thẻ thất bại");	
						}
					});
			}// if window.id_ttluotkham
		}
	})// end click
	
	$('#huychon_bhcc').click(function(){
		if(oper=='add'){
			 var ids = $('#dm_bhcc').jqGrid('getDataIDs');
			 for(var i=0;i<=ids.length-1;i++){
				$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});	
			 }
			 window.id_bhcc=0;
			 window.id_bhcc_tam=0;
			 window.id_bhcc_new=0;
			 $('#huychon_bhcc').button('disable');
		}else{
			if(window.id_ttluotkham>0){
				window.id_bhcc=$('#dm_bhcc').jqGrid('getGridParam', 'selrow');
				$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_huyapthe&hienmaloi=a&id_ttluotkham="+window.id_ttluotkham+"&ac=bhcc").done(function(data){
					if($.trim(data)==''){
						tooltip_message("Hủy áp thẻ thành công");	
						 var ids = $('#dm_bhcc').jqGrid('getDataIDs');
						 for(var i=0;i<=ids.length-1;i++){
							$("#dm_bhcc").jqGrid('setRowData',ids[i],false, {  color:'black'});	
						 }
						 $('#huychon_bhcc').button('disable');
						 window.id_bhcc=0;
						 window.id_bhcc_tam=0;
						 window.id_bhcc_new=0;
					}else{
						tooltip_message("Áp thẻ thất bại");	
					}
				});	
			}// if window.id_ttluotkham
		}
	});// end click
	$('#mabhcc').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#loaithe').focus();
		}
	})
	
	$('#loaithe').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#diachibhcc').focus()
		}
	})
	$('#diachibhcc').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#bhcc_hsdtu').focus()
		}
	})
	$('#bhcc_hsdtu').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#bhcc_hsdden').focus()
		}
	})
	$('#bhcc_hsdden').keyup(function(e){
		if (jwerty.is('enter',e)||jwerty.is('tab',e)){
			$('#save_bhcc').focus()
		}
	})
	
	$('#save_bhcc').click(function(e){

		$('#save_bhcc').button('disable');

		window.databhcc = '{';
		window.databhcc+='"mabh":'+JSON.stringify($('#mabhcc').val());		
		window.databhcc+=',"diachi":'+JSON.stringify($('#diachibhcc').val());
		window.databhcc+=',"loaithe":'+JSON.stringify($('#loaithe_hidden').val())+'';
		window.databhcc+=',"hsdtu":'+JSON.stringify($('#bhcc_hsdtu').val())+'';
		window.databhcc+=',"hsdden":'+JSON.stringify($('#bhcc_hsdden').val())+'';
		window.databhcc+=',"idbh":'+JSON.stringify(window.id_bhcc)+'';		
   
		
		
		window.databhcc+='}';			
		databhcc= jQuery.parseJSON(databhcc);			
		$.post("pages.php?module=<?=$modules?>&view=<?=$view?>&action=controller_bhcc&hienmaloi=2&id_benhnhan="+window.id_benhnhan+"&oper="+bhcc_ac,databhcc).done(function(data) {
		$("#dm_bhcc").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_bhcc&id_luotkham=<?php echo $_GET["ID_LuotKham"];?>'}).trigger('reloadGrid');
		});
	});
}




function sum_phithuchien(){
	var grid = $("#rowed1");
	sum = grid.jqGrid('getCol', 'PhiThucHien', false, 'sum');		
	grid.jqGrid('footerData','set', {ID: 'PhiThucHien:', PhiThucHien: sum});
	
}
function create_nguoilapphieu(elem,datalocal){  
   $(elem).
    datalocal=jQuery.parseJSON(datalocal);   
     $(elem).jqGrid({
    datastr:datalocal,
    datatype: "jsonstring" ,  
    colNames:['Nickname', 'Họ và tên'],
    colModel:[      
      {name:'nickname',index:'nickname',hidden :false},
      {name:'hovaten',index:'hovaten',hidden :false},
      
    ],
    hidegrid: false,
    gridview: true,
    loadonce: true,
    scroll: false,     
    modal:true,  
    rowNum: 200000,
    rowList:[],   
    sortname: 'ID_Thuoc',
    height:160,
    width: 470,
    viewrecords: true,  
    ignoreCase:true,
    shrinkToFit:true,
    cmTemplate: {sortable:false},
    sortorder: "desc",
    serializeRowData: function (postdata) {   
    },
    onSelectRow: function(id){    
    //$(dialog).dialog( "close" );                
    },
    ondblClickRow: function (id, rowIndex, columnIndex) {
          
    },
    loadComplete: function(data) {  
    grid_filter_enter(elem) ;
  
    },    
    
  }); 
       
   $(elem).jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
   $(elem).jqGrid('bindKeys', {} );
}

function sum_bhcc(){
	var grid = $("#rowed1");
	
	ids = $('#rowed1').jqGrid('getDataIDs');
	var sum=0;
	for(var i=0;i<ids.length;i++){
		sum=sum+parseInt($('#'+ids[i]+'_BHYTCC').val());
		
	}
	grid.jqGrid('footerData','set', {ID: 'BHYTCC:', BHYTCC: sum});
	
}
</script>