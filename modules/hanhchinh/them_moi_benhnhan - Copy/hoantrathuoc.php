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
.align-right input{
  text-align: right;
}

</style>

<body>
  <div id="panel_main2" style="margin-top:2px;" >
   <div class="ui-layout-east" id="east">
    <table id="rowed2"></table>
    
      <table id="rowed3"></table>
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
  </div>
     <div class="ui-layout-center" id="center">
       <table id="rowed1"></table>
     </div>
     <div class="ui-layout-west" id="west">
       <table id="rowed_dt"></table>
     </div>
   </div>
   <div id="dialog-add" title="Phiếu trả" style="display:none;">
     <textarea name="ghichu" id="ghichu" style="width: 360px; height: 100px" placeholder="Nhập lý do hoàn trả"></textarea>
   </div>
 </body>
 </html>
 <script type="text/javascript">
        var id_xoa='0';
        window.ID_DonThuoc=0;
        jQuery(document).ready(function() {
          var MPhieu='';

          onload_form();
          create_grid1();
          create_grid2();
          create_grid3();
          create_grid_dt();

          create_layout();
          resize_control();

          $('#TaoMoi,#Luu,#Xoa,#In,#HoanTien').button();

          $( "#dialog-add" ).dialog({
          resizable: false,
          autoOpen:false,
          height: "auto",
          width: 400,
          modal: true,
          buttons: {
            "Lưu": function() {
                if($.trim($('#ghichu').val())==''){
                   tooltip_message('Nhập lý do hoàn trả')
                }else{
                  $.ajax({
                    type: 'POST',
                    async : false,
                    url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&thaotac=themmoi',
                    data:{
                      ID_BenhNhan: window.ID_BenhNhan,
                      ID_DonThuoc: window.ID_DonThuoc,
                      lydoHuy:$.trim($('#ghichu').val())
                    },
                    success: function(data, status, xhr) {
                      data=$.parseJSON(data);
                      if(data.IsLock==1){
                        alert(data.Notes);
                      }else{
                         $( "#dialog-add" ).dialog( "close" );
                         getDataByLoaiChiDinh();
                      }
                    }
                  });
                }
            },
            "Thoát": function() {
              $( this ).dialog( "close" );
            }
          }
        });



          //getDataByLoaiChiDinh();
          setTimeout(function(){getDataByLoaiChiDinh()}, 1000);

})//hết dom ready


  $('#HoanTien').click(function(){
   // $.post('pages.php?module=web_services&function=get_link&action=index&folder=hoantradvthuoc:').done(function(data) {	
    var t = confirm("Vui lòng kiểm tra kỹ trước khi hoàn tiền!!!\n Các phiếu đã hoàn tiền IT sẽ không thể can thiệp để hủy hay sửa.");
    if(t===true){
       $.ajax({
        type: 'POST',
        async : false,
        url: 'pages.php?module=web_services&function=get_link&action=index&folder=hoantradvthuoc:',
        success: function(data, status, xhr) {
          var folder= data.split(';');
          var duong_dan='pages.php?module='+folder[0]+'&view='+folder[1]+'&id_form='+folder[2]+"&id_huychidinh="+$('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_HuyChiDinh'); 
          dialog_add_dm('',100,100,2321432453,duong_dan); 
        }
      })
    }
    
  });

  function getDataByLoaiChiDinh(){
    var postTo='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_ds_donthuoc&ID_BenhNhan='+window.ID_BenhNhan;
   //var postTo='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_hoantrathuoc&ID_BenhNhan='+window.ID_BenhNhan;
    var postTo2='pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_cacphieuhuythuoc&ID_BenhNhan='+window.ID_BenhNhan;

    $("#rowed_dt").jqGrid('setGridParam',{datatype:'json',url:postTo,datatype:'json',loadonce: true}).trigger('reloadGrid');
    $("#rowed2").jqGrid('setGridParam',{datatype:'json',url:postTo2,datatype:'json',loadonce: true}).trigger('reloadGrid');
  }

   $( "#In" ).click(function() {
      var selr = jQuery('#rowed2').jqGrid('getGridParam','selrow');
      var ID_HuyChiDinhP = jQuery('#rowed2').jqGrid('getCell', selr, 'ID_HuyChiDinh');
      var MaPhieuP = jQuery('#rowed2').jqGrid('getCell', selr, 'MaPhieu');
      $.cookie("in_status", "print_preview");
      dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=phieuhuythuocchitiet&header=top&lien=3&type=report&id_form=11&kieuin=1&ID_BenhNhan="+window.ID_BenhNhan+'&ID_HuyChiDinh='+ID_HuyChiDinhP+'&MaPhieu='+MaPhieuP,'phieuhuychitiet');
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
       dataToSend += phancach + '"ID_Thuoc":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_Thuoc'));
       dataToSend += phancach + '"SoTienThucTra":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'SoTienThucTra'));
       dataToSend += phancach + '"SoLuongTraLai":' + JSON.stringify($("#"+ids[i]+"_SoLuongTraLai").val());
       dataToSend += phancach + '"ID_HuyChiDinhCT_Thuoc":' + JSON.stringify($("#rowed3").jqGrid("getCell", ids[i], 'ID_HuyChiDinhCT_Thuoc'));
       dataToSend += '}';	
       phancach1 = ",";
     }
     dataToSend += ']}';
     console.log(dataToSend);

     dataToSend = jQuery.parseJSON(dataToSend);


     $.ajax({
      type: 'POST',
      async : false,
      url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&hienmaloi=3&thaotac=luu',
      data:dataToSend,
      success: function(data, status, xhr) {
          $("#rowed1").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
        $("#rowed3").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
        }
      });

   });
   $( "#Xoa" ).click(function() {
    var t=confirm("Bạn chắc chắn muốn xóa phiếu này không?");
    if(t===true){
       $.ajax({
        type: 'POST',
        async : false,
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&hienmaloi=3&thaotac=xoa&id_huychidinh='+$('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_HuyChiDinh'),
        success: function(data, status, xhr) {
               $("#rowed2").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
               $("#rowed3").jqGrid('setGridParam',{datatype:'json'}).trigger('reloadGrid');
          }
        });
    }
   
  });
  $("#TaoMoi").click(function() {
    $.ajax({
      type: 'POST',
      async : false,
      url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&hienmaloi=3&thaotac=checkdonthuoc&ID_DonThuoc='+window.ID_DonThuoc,
      success: function(data, status, xhr) {
       // alert(parseInt(data));
        if(parseInt(data)==0){

          $( "#dialog-add" ).dialog('open');
          $( "#ghichu" ).val('');
        }else{
          alert("Đơn thuốc này đã tạo phiếu hoàn trả!");
        }
      }
    });
    
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
   // alertObject(postData3);

     $.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&hienmaloi=3&thaotac='+option,postData3).done(function(data){
        if (isNaN(data) ==false&& $.trim(data)>0) {
          tooltip_message("Thêm thành công");
          getDataByLoaiChiDinh();//lay lai du lieu
        }else if($.trim(data)==""){
          tooltip_message("Lưu thành công");
          getDataByLoaiChiDinh();//lay lai du lieu
        }

        if(option=='xoa'){
          $('#rowed3').jqGrid('setGridParam', { datatype: 'jsonstring', datastr:{}  }).trigger('reloadGrid');}
        });
   }
  function onload_form(){

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
      colNames: ['ID_DonThuoc','ID_DonThuocChiTiet', 'Tên thuốc','Đơn giá','Số lượng','Thành tiền','ID_Thuoc'],
      colModel: [
      {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "0%", editable: false, align: 'left', hidden: true},
      {name: 'ID_DonThuocChiTiet', index: 'ID_DonThuocChiTiet', width: "0%", editable: false, align: 'left', hidden: true},
      {name: 'TenThuoc', index: 'TenThuoc', width: "60%", editable: false, align: 'left', hidden: false},
      {name: 'DonGia',index: 'DonGia',  width: "20%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
      {name: 'SoLuong', index: 'SoLuong', width: "20%", editable: false, align: 'right', hidden: false},
       {name: 'ThanhTien',index: 'ThanhTien',  width: "20%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
       {name: 'ID_Thuoc', index: 'ID_Thuoc', width: "20%", editable: false, align: 'right', hidden: true},


      ],
      loadonce: true,
      scroll: false,
      modal:true,
      rowNum: 10000000,
      rowList:[],
      pginput:false,
      pgbuttons:false,
      pager: '#prowed1',
      sortname: 'ID_DonThuocChiTiet',
      height:100,
      width:100,
      viewrecords: false,
      ignoreCase:true,
      footerrow:true,
      shrinkToFit:true,

      loadComplete: function(data) {
         sumThanhTien = $("#rowed1").jqGrid("getCol", "ThanhTien", false, "sum");

        $("#rowed1").jqGrid("footerData", "set", {
         ThanhTien: sumThanhTien,
        });
      },
      ondblClickRow: function(rowId) {

        var rowData = jQuery('#rowed1').getRowData(rowId);
        //var ids = $("#rowed3").getDataIDs();

        parameters ={
            initdata : {
                    TenThuoc:rowData["TenThuoc"],
                    Xoa:'<span class="ui-state-error ui-state-hover  " style="border:0"><span class="ui-icon  ui-icon-closethick" style="float: left; margin-left:2px;"></span></span>',
                    ID_Thuoc:rowData["ID_Thuoc"],
                    ID_HuyChiDinh: $('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_HuyChiDinh')  ,
                    SoLuongTraLai:rowData["SoLuong"],
                    GiaBanRa:rowData["ThanhTien"],
                    SoTienThucTra:rowData["ThanhTien"],
                    DonGia:rowData["DonGia"],
                    SoLuongTraLai_hidden:rowData["SoLuong"],
                    ID_Thuoc:rowData["ID_Thuoc"],
            },
            position :"last",
            useDefValues : false,
            useFormatter : false,
            addRowParams : {extraparam:{}}
        }

        var ids = $("#rowed3").getDataIDs();
        var flag=0;
        for (var i=0;i<=ids.length-1;i++){
          if($('#rowed3').jqGrid('getCell', ids[i] , 'ID_Thuoc')==rowData["ID_Thuoc"]){
            flag=1;
          }
        }
        if(rowData["ID_DonThuoc"]==$('#rowed2').jqGrid('getCell', $('#rowed2').jqGrid('getGridParam','selrow') , 'ID_DonThuoc')){
          if(flag==1){
            alert("Thuốc này đã trả");
          }else{
            $.ajax({
              type: 'POST',
              async : false,
              url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&hienmaloi=3&thaotac=checkdahoantra&ID_HuyChiDinh='+window.ID_HuyChiDinhP,
              success: function(data, status, xhr) {
                if(parseInt(data)==0){
                  $("#rowed3").jqGrid('addRow',parameters);
                }else{
                  alert("Phiếu này đã hoàn tiền!");
                }
              }
            });
          }
        }else{
          alert("Không thể trả thuốc của đơn khác");
        }
        

        

        sumGiaBanRa = $("#rowed3").jqGrid("getCol", "GiaBanRa", false, "sum");
        sumSoTienThucTra = $("#rowed3").jqGrid("getCol", "SoTienThucTra", false, "sum");
        sumDonGia = $("#rowed3").jqGrid("getCol", "DonGia", false, "sum");

        $("#rowed3").jqGrid("footerData", "set", {
        GiaBanRa: sumGiaBanRa,
        SoTienThucTra: sumSoTienThucTra,
        DonGia: sumDonGia,
        });
     },

    caption: "Đơn thuốc chi tiết",
    });
    $("#rowed1").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
    $("#rowed1").jqGrid('navGrid', "#prowed1", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, navkeys: [true, 38, 40], closeOnEscape: true});

  };


      function create_grid3(){
        $("#rowed3").jqGrid({
          url: '',
          datatype: "json",
          colNames: ['ID_HuyChiDinhCT_Thuoc','Xóa', 'Tên thuốc', 'Đã thu','S.lượng trả','Hoàn trả','Giá','ID_Thuoc','ID_HuyChiDinh_Thuoc','SoLuongTraLai_hidden'],
          colModel: [
          {name: 'ID_HuyChiDinhCT_Thuoc', index: 'ID_HuyChiDinhCT_Thuoc', width: "0%", editable: false, align: 'left', hidden: true},
          {name: 'Xoa', index: 'Xoa', width: "3%", editable: false, align: 'left', hidden: false},
          {name: 'TenThuoc',index: 'TenThuoc',width: "20%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
          {name: 'GiaBanRa',index: 'GiaBanRa',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false},
          {name: 'SoLuongTraLai', index: 'SoLuongTraLai', width: "4%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: true, align: 'right', hidden: false
          ,editoptions: { dataEvents: [{ type: 'keyup change', fn: function(e) {
           var row = $(e.target).closest('tr.jqgrow');
           var rowId = row.attr('id');
           var thanh_tien=$('#rowed3').jqGrid('getCell',rowId,'GiaBanRa');
           var solan=$('#rowed3').jqGrid('getCell',rowId,'SoLuongTraLai_hidden');
            if(parseInt($(this).val())>parseInt(solan)){
              alert("Số lượng trả không được lớn hơn số lượng bán ra");
              $(this).val(solan);
            }
           var thanh_tienmoi=thanh_tien/(solan)*parseInt($(this).val());
          // $('#'+rowId+'_SoTienThucTra').val(thanh_tienmoi);
           $('#rowed3').jqGrid('setCell',rowId,'SoTienThucTra',thanh_tienmoi);

          sumGiaBanRa = $("#rowed3").jqGrid("getCol", "GiaBanRa", false, "sum");
          sumSoTienThucTra = $("#rowed3").jqGrid("getCol", "SoTienThucTra", false, "sum");
          sumDonGia = $("#rowed3").jqGrid("getCol", "DonGia", false, "sum");

          $("#rowed3").jqGrid("footerData", "set", {
            GiaBanRa: sumGiaBanRa,
            SoTienThucTra: sumSoTienThucTra,
            DonGia: sumDonGia,
          });
           
         }}]},classes:'align-right'
         },
         {name: 'SoTienThucTra',index: 'SoTienThucTra',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false,classes:'align-right'},
       {name: 'DonGia',index: 'DonGia',  width: "6%",formatter:'number',formatoptions:{decimalSeparator:",", thousandsSeparator: ".", decimalPlaces: 0, prefix: "", defaultValue: '0'},sortable: true, search: true,  editable: false, align: 'right', hidden: false
       },
   
       {name: 'ID_Thuoc',index: 'ID_Thuoc',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
       {name: 'ID_HuyChiDinh',index: 'ID_HuyChiDinh',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
       {name: 'SoLuongTraLai_hidden',index: 'SoLuongTraLai_hidden',width: "0%",sortable: true,search: true,  align: 'left', hidden: true, },
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

      sumGiaBanRa = $("#rowed3").jqGrid("getCol", "GiaBanRa", false, "sum");
      sumSoTienThucTra = $("#rowed3").jqGrid("getCol", "SoTienThucTra", false, "sum");
      sumDonGia = $("#rowed3").jqGrid("getCol", "DonGia", false, "sum");

      $("#rowed3").jqGrid("footerData", "set", {
        GiaBanRa: sumGiaBanRa,
        SoTienThucTra: sumSoTienThucTra,
        DonGia: sumDonGia,
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

  if(iCol==1) {
    $.ajax({
        type: 'POST',
        async : false,
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controllerHoanTraCDThuoc&hienmaloi=3&thaotac=checkdahoantra&ID_HuyChiDinh='+window.ID_HuyChiDinhP,
        success: function(data, status, xhr) {
          if(parseInt(data)==0){
              if(!isNaN(rowid)){
               id_xoa+=','+rowid;
              }
             jQuery("#rowed3").jqGrid('delRowData', rowid);
             $('#rowed3').setGridParam({loadonce: true}).trigger('reloadGrid');
          }else{
            alert("Phiếu này đã hoàn tiền!");
          }
        }
      });
    
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
    colNames: ['ID_HuyChiDinh','Mã phiếu','ID đơn thuốc', 'Ngày trả','N.Trả','N.Duyệt','Lý do','Hoàn tiền'],
    colModel: [
    {name: 'ID_HuyChiDinh', index: 'ID_HuyChiDinh', width: "0%", editable: false, align: 'left', hidden: true},
     {name: 'MaPhieu',index: 'MaPhieu',width: "12%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'ID_DonThuoc',index: 'ID_DonThuoc',width: "12%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'NgayGioHuy',width: "12%",index: 'NgayGioHuy',sorttype:"date" , sortable: true,  search: true, editable: false, align: 'left', hidden: false},
    {name: 'TenNguoiLapPhieu', width: "10%",sortable: true, index: 'TenNguoiLapPhieu', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'Ten_NguoiQuyetDinh', width: "10%",sortable: true, index: 'Ten_NguoiQuyetDinh', search: true,  editable: false, align: 'left', hidden: false},
    {name: 'LyDoHuy',index: 'LyDoHuy',width: "40%",  classes: "CotSoTien", sortable: true,sorttype: 'number',  search: true, editable: false, align: 'left', hidden: false},
    {name: 'DaHoanTien',index: 'DaHoanTien',formatter: "checkbox", edittype: "checkbox",editoptions: {value: "1:0"}, width: "10%",sortable: true,  search: true,  editable: false, align: 'center', hidden: false},

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
      window.ID_HuyChiDinhP=rowData["ID_HuyChiDinh"];
      var postTo3='pages.php?module=hanhchinh&view=them_moi_benhnhan&action=data_phieuhuythuocchitiet&ID_HuyChiDinh='+ID_HuyChiDinhP;

      $("#rowed3").jqGrid('setGridParam',{datatype:'json',url:postTo3,datatype:'json'}).trigger('reloadGrid');
      $("#rowed3").jqGrid('setCaption', 'Chi tiết mã phiếu '+MPhieu);


  //Kiểm tra khóa các nút
  var isHoanTien=rowData["DaHoanTien"];
  if(isHoanTien==1){
    // $("#HoanTien,#Sua,#Xoa,#Luu").prop("disabled",true);
    $("#HoanTien,#Xoa,#Luu").button('disable');
  }else{
     // $("#HoanTien,#Sua,#Xoa,#Luu").prop("disabled",false);
     $("#HoanTien,#Xoa,#Luu").button('enable');
  }
},

caption: "Các phiếu trả đã tạo",
});

}



function create_grid_dt(){

  $("#rowed_dt").jqGrid({
    url: '',
    datatype: "json",
    colNames: ['ID đơn thuốc','BS kê đơn', 'Ngày kê'],
    colModel: [
    {name: 'ID_DonThuoc', index: 'ID_DonThuoc', width: "30%", editable: false, align: 'left', hidden: false},
    {name: 'BacSy',index: 'BacSy',width: "30%",  classes: "", sortable: true, search: true, editable: false, align: 'center', hidden: false},
    {name: 'NgayKe',width: "40%",index: 'NgayKe',sorttype:"date", sortable: true,  search: true, editable: false, align: 'center', hidden: false},

    ],
    loadonce: true,
    scroll: false,
    shrinkToFit:true,
    modal:true,
    rowNum: 1000,
    rowList:[],
    pginput:false,
    pgbuttons:false,   
    sortname: 'NgayKe',
    height:100,
    width:100,
    viewrecords: false,
    ignoreCase:true,

    loadComplete: function(data) {
      ids = $('#rowed_dt').jqGrid('getDataIDs');
      $('#rowed_dt').jqGrid('setSelection', ids[0], true);

    },
    onSelectRow: function(id){
      // var rowData = $("#rowed2").getRowData(id);
      // MPhieu=rowData["MaPhieu"];
      //  var ID_HuyChiDinhP=rowData["ID_HuyChiDinh"];
      window.ID_DonThuoc=id;
       $("#dialog-add").dialog('option', 'title', 'Phiếu trả - Đơn thuốc '+window.ID_DonThuoc);
      var postTo3='pages.php?module=hanhchinh&view=them_moi_benhnhan&action=data_ds_donthuocchitiet&id_donthuoc='+id;

      $("#rowed1").jqGrid('setGridParam',{datatype:'json',url:postTo3,datatype:'json'}).trigger('reloadGrid');
      $("#rowed1").jqGrid('setCaption', 'Đơn thuốc chi tiết (Đơn thuốc '+id+')');
},

caption: "Danh sách đơn thuốc",
});
}


function resize_control() {

  $("#rowed1").setGridWidth($("#center").width()-5);
  $("#rowed1").setGridHeight($("#center").height()-110);
  $("#rowed2").setGridWidth($("#east").width()-10);
  $("#rowed2").setGridHeight($(window).height()/2-110);
  $("#rowed3").setGridWidth($("#east").width()-10);
  $("#rowed3").setGridHeight($("#east").height()/2-110);
  $("#rowed_dt").setGridHeight($(window).height()-90);
  $("#rowed_dt").setGridWidth($("#west").width()-10);
}


function create_layout(){
  $("#panel_main2").css("height",$(window).height()-30+"px");
  $("#panel_main2").css("width",$(window).width()+"px");
  $("#panel_main2").fadeIn(1000);
  $('#panel_main2').layout({
    resizerClass: 'ui-state-default'
    , east: {
      resizable: true
      , size: "50%"
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
    , size: "30%"
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
  } , west: {
    resizable: true
    , size: "20%"
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


function callback(){
  console.log("Đóng");
}
</script>