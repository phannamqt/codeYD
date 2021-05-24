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

button{
  margin-right: 20px !important;

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

</style>

<body>



    <div class="top_main" id="top_main">

      <span>
        <label for="from_day" style="width:17px"> Từ</label>
        <input type="text"  style="width:109px" name="from_day" id='from_day'>
        <label for="to_day" style="width:23px"> Đến </label>
        <input type="text"   style="width:109px" name="to_day" id='to_day'>
        <button type="button" id="xem">Xem</button>
<input type="radio" name="LoaiChiDinh" value="0" checked="checked" onClick="getDataByLoaiChiDinh()"><strong>CLS và LS</strong></input>
<input type="radio" name="LoaiChiDinh" value="1"onclick="getDataByLoaiChiDinh()"><strong>Điều dưỡng</strong></input>
<input type="radio" name="LoaiChiDinh" value="2"onclick="getDataByLoaiChiDinh()"><strong>PHCN và Đông y phối hợp (Vật lý trị liệu cũ)</strong></input>
       </span>

      </div>




<div id="panel_main2" style="margin-top:2px;" >
         <div class="ui-layout-east" id="east">
          <table id="rowed2"></table>
              <div class="actionPhieuHuy">
              <fieldset id="PhieuHuy" style=" width: 100%">
                  <legend style="text-align: left ;color: red">Thao tác</legend>
                     <button type="button" id="TaoMoi">Tạo mới</button>
                     <button type="button" id="Luu">Lưu</button>                    
                     <button type="button" id="Xoa">Xóa</button>
                     <button type="button" id="In">Xem In</button>
                     <button type="button" id="HoanTien">Hoàn tiền</button>
                     </fieldset>
              </div>
              <div class="phieuhuyChitiet">
                <label for="ngayHuy" style="width:17px"> Ngày hủy</label>
                <input type="text"  style="width:44px" name="ngayHuy" id='ngayHuy'>
               <!--  <label for="soPhieuHuy" style="width:17px"> Mã phiếu hủy</label>
                <input type="text"  style="width:85px" name="soPhieuHuy" id='soPhieuHuy'> -->
                <label for="lydoHuy" style="width:17px"> Lý do hủy</label>
                <input type="text"  style="width:271px" name="lydoHuy" id='lydoHuy'>
              </div>
               <table id="rowed3"></table>
         </div>
         <div class="ui-layout-center" id="center">
         <table id="rowed1"></table>

         </div>
       </div>
</body>
</html>
<script type="text/javascript">
  var id_xoa='0';

jQuery(document).ready(function() {
    var MPhieu='';
  
    onload_form();
    create_grid1();
    create_grid2();
    create_grid3();

    create_layout();
    resize_control();

$('#TaoMoi,#Luu,#Xoa,#In,#HoanTien').button();
//getDataByLoaiChiDinh();
setTimeout(function(){getDataByLoaiChiDinh()}, 1000);
//hết dom ready
})
$('#HoanTien').click(function(){
	     $.post('pages.php?module=web_services&function=get_link&action=index&folder=hoantradichvu:').done(function(data) {					 
			    var folder= data.split(';');
				var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+"&id_huychidinh="+$('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_HuyChiDinh');	
				dialog_add_dm('',100,100,2321432453,duong_dan);		
			})
	});














function getDataByLoaiChiDinh()
{
   var LoaiChiDinh = $("input:radio[name ='LoaiChiDinh']:checked").val();
   var postTo='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hoantrachidinh&tu_ngay='+ $( '#from_day' ).val()+'&den_ngay='+$( '#to_day' ).val()+'&LoaiChiDinh='+LoaiChiDinh+'&ID_BenhNhan='+window.ID_BenhNhan;
   var postTo2='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_cacphieuhuy&ID_BenhNhan='+window.ID_BenhNhan;

   $("#rowed1").jqGrid('setGridParam',{datatype:'json',url:postTo,datatype:'json',loadonce: true}).trigger('reloadGrid');
   $("#rowed2").jqGrid('setGridParam',{datatype:'json',url:postTo2,datatype:'json',loadonce: true}).trigger('reloadGrid');

}


$( "#xem" ).click(function() {
getDataByLoaiChiDinh();

});
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
			dataToSend  ='{"id_xoa":'+JSON.stringify(id_xoa);		
			dataToSend += ',"id":[';		
			var ids = $('#rowed3').jqGrid('getDataIDs');		
			phancach = ",";
			phancach1 = "";
			for(i=0;i<=ids.length-1;i++){			
					dataToSend += phancach1 + '{"ID_HuyChiDinh":' +JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_HuyChiDinh'));
					dataToSend += phancach + '"ID_Kham":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_Kham'));			
					dataToSend += phancach + '"ID_PhysioTherapy":' +JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_Physiotherapy'));
			        dataToSend += phancach + '"ID_DieuTriPhoiHop":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_DieuTriPhoiHop'));
					dataToSend += phancach + '"trangthai":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'trangthai'));
					dataToSend += phancach + '"SoTienThucTra":' + JSON.stringify($("#"+ids[i]+"_SoTienThucTra").val());				
					dataToSend += phancach + '"SoLanTraLai":' + JSON.stringify($("#"+ids[i]+"_SoLanTraLai").val());			
					dataToSend += phancach + '"ID_HuyChiDinhCT":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_HuyChiDinhCT'));	
					dataToSend += '}';					
					phancach1 = ",";			
						
			}
			dataToSend += ']}';
			
			dataToSend = jQuery.parseJSON(dataToSend);
		
		 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCD&hienmaloi=3&thaotac=luu',dataToSend).done(function(data){
			 $("#rowed1").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
				$("#rowed3").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
		 });
	
   


});
$( "#Xoa" ).click(function() {
	 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCD&hienmaloi=3&thaotac=xoa&id_huychidinh='+$('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_HuyChiDinh')).done(function(data){
		 $("#rowed2").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
		 
		})
});
$("#TaoMoi").click(function() {
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
	 if($.trim($('#lydoHuy').val())==''){
		 tooltip_message('Nhập lý do hủy')
	 }else{
		 $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCD&hienmaloi=3&thaotac=themmoi',postData3).done(function(data){
				$("#rowed2").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
			 }); 
	 }
   
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
    $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');}                         




      });
}
function onload_form()
{

 $("#from_day").datepicker({
   dateFormat:  $.cookie("ngayJqueryUi")
 });
 $("#to_day").datepicker({

  dateFormat:  $.cookie("ngayJqueryUi")
});
 $("#ngayHuy").datepicker({
   dateFormat:  $.cookie("ngayJqueryUi")
 });
 $("#from_day, #to_day","ngayHuy").dateEntry({dateFormat:$.cookie("ngayDateEntry")});
 $("#from_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
 $("#to_day").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');
 $("#ngayHuy").val('<?php echo date($_SESSION["config_system"]["ngaythang"]) ?>');

}

function create_grid1(){

  $("#rowed1").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['ID_LuotKham','ID_Kham', 'Tên DV'
    , 'Ngày CĐ','Người CĐ','Số ngày','Số lần','Giá','Tổng','BHYT','Hỗ trợ','Giảm giá','BHCC','KHDV','KHVTYT','BN','Trạng thái','Đã Hủy','','',''],
    colModel: [
    {name: 'ID_LuotKham', index: 'ID_LuotKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'ID_Kham', index: 'ID_Kham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'TenLoaiKham',index: 'TenLoaiKham',width: "15%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'NgayGioTao',width: "8%",  sortable: true, index: 'NgayGioTao', search: true, editable: false, align: 'left', hidden: false},
    {name: 'TenBSChiDinh', width: "7%",sortable: true, index: 'TenBSChiDinh', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'SoNgayThucHien',index: 'SoNgayThucHien', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true,  search: true,  editable: false, align: 'right', hidden: false},
    {name: 'SoLanThucHienTrongNgay', index: 'SoLanThucHienTrongNgay', width: "3%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
    {name: 'DonGia',index: 'DonGia',  width: "5%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
    {name: 'PhiThucHien',index: 'PhiThucHien',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
    {name: 'ThanhTienBaoHiem',index: 'ThanhTienBaoHiem',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
    {name: 'HoTroTuBenhVien',index: 'HoTroTuBenhVien',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
	{name: 'GiamGia',index: 'GiamGia',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
	{name: 'BHCC',index: 'BHCC',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
	{name: 'KHDV',index: 'KHDV',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
	{name: 'KHVTYT',index: 'KHVTYT',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
	{name: 'BN',index: 'BN',  width: "7%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
	{name: 'TenTrangThaiCLSCuaBenhNhan',width: "7%",sortable: true,search: true, index: 'TenTrangThaiCLSCuaBenhNhan', align: 'left', hidden: true, },
    {name: 'isDalap',index: 'isDalap',formatter: "checkbox", edittype: "checkbox",editoptions: {value: "1:0"}, width: "3%",sortable: true,  search: true,  editable: false, align: 'left', hidden: false},
    {name: 'ID_LoaiKham', index: 'ID_LoaiKham', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'ID_DieuTriPhoiHop', index: 'ID_DieuTriPhoiHop', width: "0%", editable: false, align: 'left', hidden: true},
    {name: 'ID_Physiotherapy', index: 'ID_Physiotherapy', width: "0%", editable: false, align: 'left', hidden: true},


    ],
    loadonce: true,
    scroll: false,
    modal:true,
    rowNum: 10000000,
    rowList:[],
    pginput:false,
    pgbuttons:false,
    pager: '#prowed1',
    sortname: 'ID_NhanVien',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,
    footerrow:true,
    shrinkToFit:true,

    loadComplete: function(data) {
  },
    ondblClickRow: function(rowId) {

       var rowData = jQuery(this).getRowData(rowId);
       var ids = $("#rowed3").getDataIDs();
	   var LoaiChiDinh = $('input[name="LoaiChiDinh"]:checked').val();
         for (var i=0;i<ids.length;i++)
         {

            var rowDataCheck = jQuery("#rowed3").getRowData(ids[i]);
			if(LoaiChiDinh==0){
				if(rowData['ID_Kham']==rowDataCheck["ID_Kham"])
				{
				  tooltip_message("Chỉ định này đã thêm rồi bạn ơi, cẩn thận xíu đi!!!");
					return false;
				}										
			}
			if(LoaiChiDinh==1){				
				if(rowData['ID_DieuTriPhoiHop']==rowDataCheck["ID_DieuTriPhoiHop"])
				{
				  tooltip_message("Chỉ định này đã thêm rồi bạn ơi, cẩn thận xíu đi!!!");
					return false;
				}											
			}
			if(LoaiChiDinh==2){				
				if(rowData['ID_Physiotherapy']==rowDataCheck["ID_Physiotherapy"])
				{
				  tooltip_message("Chỉ định này đã thêm rồi bạn ơi, cẩn thận xíu đi!!!");
					return false;
				}											
			}
          

         }
         //Kiểm tra đã hủy rồi thì ko cho add thêm
        if (rowData["isDalap"]==1)
            {
              tooltip_message("Chỉ định này đã được lập phiếu hủy, cẩn thận xíu đi!!!");
              return false;//thoát
            }
            //kiểm tra đã hoàn tiền thì ko cho  add
       var selr = jQuery('#rowed2').jqGrid('getGridParam','selrow');
        var DaHoanTien = jQuery('#rowed2').jqGrid('getCell', selr, 'DaHoanTien');
        if(DaHoanTien==1){
          tooltip_message("Bạn đang chọn phiếu đã hoàn tiền, hãy chọn dòng chưa hoàn tiền!!!");
              return false;//thoát


        }

        /*     var LoaiHoanTra = jQuery('#rowed2').jqGrid('getCell', selr, 'LoaiHoanTra');
             //alert(LoaiHoanTra);
             var LoaiChiDinh = $("input:radio[name ='LoaiChiDinh']:checked").val();
             if(LoaiHoanTra!=LoaiChiDinh && LoaiHoanTra!='') //kiem tra khac loại hoàn trả thì ko cho add
             {
              tooltip_message("Bạn đã thêm hạng mục không cùng loại phiếu hoàn trả, hãy tạo mới !!!");
               return false;//thoát
             }*/
	if(rowData["SoLanThucHienTrongNgay"]==0){
		rowData["SoLanThucHienTrongNgay"]=1;		
	}
	if(rowData["SoNgayThucHien"]==0){		
		rowData["SoNgayThucHien"]=1;
	}
	
     parameters =
  {
   initdata : {ID_LoaiKham:rowData["ID_LoaiKham"],Xoa:'<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:2px;"></span></span>',
   TenLoaiKham:rowData["TenLoaiKham"],
   ID_Kham:rowData["ID_Kham"],
   ID_HuyChiDinh: $('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_HuyChiDinh')  ,
   SoLanTraLai:(rowData["SoLanThucHienTrongNgay"]*rowData["SoNgayThucHien"]),SoNgayTraLai:rowData["SoNgayThucHien"],
   ID_DieuTriPhoiHop:rowData["ID_DieuTriPhoiHop"],ID_Physiotherapy:rowData["ID_Physiotherapy"],
   PhiThucHien:rowData["BN"],DonGia:rowData["DonGia"],SoTienThucTra:rowData["BN"],SoLanTraLai_hidden:(rowData["SoLanThucHienTrongNgay"]*rowData["SoNgayThucHien"])
   ,trangthai:0,
 },
   position :"last",
   useDefValues : false,
   useFormatter : false,
   addRowParams : {extraparam:{}}
  }

  $("#rowed3").jqGrid('addRow',parameters);


   
   var ids = $("#rowed3").getDataIDs();
         for (var i=0;i<ids.length;i++)
         {
            var rowDataCheck = jQuery("#rowed3").getRowData(ids[i]);
			
            if(rowDataCheck["ID_Physiotherapy"]==0 && rowDataCheck["ID_DieuTriPhoiHop"]==0)
				{
					
				 	$('#'+ids[i]+'_SoNgayTraLai').prop('disabled', true);
					$('#'+ids[i]+'_SoLanTraLai').prop('disabled', true);
				}
         }

//$('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');


   },

  caption: "Các dịch vụ đã chỉ định. <span style='color:red'>Click đúp vào hạng mục muốn hủy để chọn vào lưới hủy chi tiết </span>",
});
$("#rowed1").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$("#rowed1").jqGrid('navGrid', "#prowed1", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

};


function create_grid3(){
  $("#rowed3").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['ID_HuyChiDinhCT','Xóa', 'Tên DV', 'Đã thu','Hoàn trả','S.lần trả','Giá','ID_DieuTriPhoiHop','ID_PhysioTherapy','ID_LoaiKham','ID_HuyChiDinh','ID_Kham','',''],
    colModel: [
			{name: 'ID_HuyChiDinhCT', index: 'ID_HuyChiDinhCT', width: "0%", editable: false, align: 'left', hidden: true},
			{name: 'Xoa', index: 'Xoa', width: "3%", editable: false, align: 'left', hidden: false},
			{name: 'TenLoaiKham',index: 'TenLoaiKham',width: "20%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
			{name: 'PhiThucHien',index: 'PhiThucHien',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'left', hidden: false},
			{name: 'SoTienThucTra',index: 'SoTienThucTra',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: true, align: 'left', hidden: false},			
			{name: 'SoLanTraLai', index: 'SoLanTraLai', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: true, align: 'left', hidden: false
			,editoptions: { dataEvents: [{ type: 'keyup change', fn: function(e) {
					var row = $(e.target).closest('tr.jqgrow');
					var rowId = row.attr('id');
					var thanh_tien=$('#rowed3').jqGrid('getCell',rowId,'PhiThucHien');
					var solan=$('#rowed3').jqGrid('getCell',rowId,'SoLanTraLai_hidden');				
					var thanh_tienmoi=thanh_tien/(solan)*$(this).val();
					$('#'+rowId+'_SoTienThucTra').val(thanh_tienmoi)
				}}]}
			
			
			},
			{name: 'DonGia',index: 'DonGia',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'left', hidden: false
			
			},
			{name: 'ID_DieuTriPhoiHop',index: 'ID_DieuTriPhoiHop',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
			{name: 'ID_Physiotherapy',index: 'ID_Physiotherapy',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
			{name: 'ID_LoaiKham',index: 'ID_LoaiKham',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
			{name: 'ID_HuyChiDinh',index: 'ID_HuyChiDinh',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
			{name: 'ID_Kham',index: 'ID_Kham',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
			
			{name: 'SoLanTraLai_hidden',index: 'SoLanTraLai_hidden',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
			{name: 'trangthai',index: 'trangthai',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
    ],
    loadonce: true,
    scroll: false,
    modal:true,
    shrinkToFit:true,
    rowNum: 10000000,
    rowList:[],
    pginput:false,
    pgbuttons:false,
    pager: '#prowed3',
    sortname: 'ID_Kham',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,
    footerrow:true,

    loadComplete: function(data) {

    sumSoTienThucTra = $("#rowed3").jqGrid("getCol", "SoTienThucTra", false, "sum");
    sumPhiThucHien = $("#rowed3").jqGrid("getCol", "PhiThucHien", false, "sum");


    $("#rowed3").jqGrid("footerData", "set", {
                SoTienThucTra: sumSoTienThucTra,
                PhiThucHien: sumPhiThucHien,
                });

      // kiem  tra đã hoàn tiền thì không cho sửa
        var selr = jQuery('#rowed2').jqGrid('getGridParam','selrow');
        var DaHoanTien = jQuery('#rowed2').jqGrid('getCell', selr, 'DaHoanTien');
        var MaPhieu = jQuery('#rowed2').jqGrid('getCell', selr, 'MaPhieu');

        MPhieu=MaPhieu;


        if (DaHoanTien==0){
         var ids = $("#rowed3").getDataIDs();
         for (var i=0;i<=ids.length-1;i++){
           $("#rowed3").jqGrid('editRow', ids[i]);
         }
        }
        else
        {
          var ids = $("#rowed3").getDataIDs();
          for (var i=0;i<=ids.length-1;i++){
           $("#rowed3").jqGrid('saveRow', ids[i]);
         }
        }

  },
  onCellSelect: function (rowid,iCol,cellcontent,e) {

    if(iCol==1)
    {
		if(!isNaN(rowid)){
			id_xoa+=','+rowid;
		}
        jQuery("#rowed3").jqGrid('delRowData', rowid);
       $('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');
    }

 },

  caption: " <div ><span >( Chi tiết của phiếu " + MPhieu + " )</span></div>",
});


};
function create_grid2(){
MPhieu='';
  $("#rowed2").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['ID_HuyChiDinh','Mã phiếu', 'Ngày hủy','N.Hủy','Duyệt','Lý do','Hoàn tiền','Loại HCĐ',''],
    colModel: [
		{name: 'ID_HuyChiDinh', index: 'ID_HuyChiDinh', width: "0%", editable: false, align: 'left', hidden: true},
		{name: 'MaPhieu',index: 'MaPhieu',width: "4%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
		{name: 'NgayGioHuy',width: "5%",index: 'NgayGioHuy',formatter: "date",sorttype:"date" ,formatoptions: {srcformat: 'y/m/d', newformat: 'd/m/Y'}, sortable: true,  search: true, editable: false, align: 'left', hidden: false},
		{name: 'TenNguoiLapPhieu', width: "5%",sortable: true, index: 'TenNguoiLapPhieu', search: true,  editable: false, align: 'left', hidden: false},
		{name: 'Ten_NguoiQuyetDinh', width: "5%",sortable: true, index: 'Ten_NguoiQuyetDinh', search: true,  editable: false, align: 'left', hidden: false},
		{name: 'LyDoHuy',index: 'LyDoHuy',width: "10%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
		{name: 'DaHoanTien',index: 'DaHoanTien',formatter: "checkbox", edittype: "checkbox",editoptions: {value: "1:0"}, width: "2%",sortable: true,  search: true,  editable: false, align: 'left', hidden: false},
		{name: 'TenLoaiHoanTra', width: "5%",sortable: true, index: 'TenLoaiHoanTra', search: true,  editable: false, align: 'left', hidden: false},
		{name: 'LoaiHoanTra', width: "0%",sortable: true, index: 'LoaiHoanTra', search: true,  editable: false, align: 'left', hidden: true},
	],
    loadonce: true,
    scroll: false,
    shrinkToFit:true,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pginput:false,
    pgbuttons:false,   
    sortname: 'NgayGioTao',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,

    loadComplete: function(data) {
  ids = $('#rowed2').jqGrid('getDataIDs');
  $('#rowed2').jqGrid('setSelection', ids[0], true);
  },
  onSelectRow: function(id){
    var rowData = $("#rowed2").getRowData(id);
    MPhieu=rowData["MaPhieu"];
    var ID_HuyChiDinhP=rowData["ID_HuyChiDinh"];
    var postTo3='pages.php?module=hanhchinh&view=them_moi_benhnhan&action=data_phieuhuyChitiet&ID_HuyChiDinh='+ID_HuyChiDinhP;

    $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:postTo3,datatype:'json'}).trigger('reloadGrid');
    $("#rowed3").jqGrid('setCaption', 'Chi tiết mã phiếu '+MPhieu);


//Kiểm tra khóa các nút
var isHoanTien=rowData["DaHoanTien"];
if(isHoanTien==1)
{
// $("#HoanTien,#Sua,#Xoa,#Luu").prop("disabled",true);
 $("#HoanTien,#Xoa,#Luu").button('disable');



}else
{
 // $("#HoanTien,#Sua,#Xoa,#Luu").prop("disabled",false);
  $("#HoanTien,#Xoa,#Luu").button('enable');

}

        },

  caption: "Các phiếu hủy đã tạo",
});
};


function resize_control() {

  $("#rowed1").setGridWidth($("#center").width()-5);
  $("#rowed1").setGridHeight($("#center").height()-110);
  $("#rowed2").setGridWidth($("#panel_main2").width()-$("#center").width()-10);
  $("#rowed2").setGridHeight($("#east").height()-380);
  $("#rowed3").setGridWidth($("#panel_main2").width()-$("#center").width()-10);
  $("#rowed3").setGridHeight($("#east").height()-350);
}


function create_layout(){
  $("#panel_main2").css("height",$(window).height()-30+"px");
  $("#panel_main2").css("width",$(window).width()+"px");
  $("#panel_main2").fadeIn(1000);
  $('#panel_main2').layout({
    resizerClass: 'ui-state-default'
    , east: {
      resizable: true
      , size: "40%"
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
    , size: "60%"
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
</script>