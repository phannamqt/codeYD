



<?php




    if(isset($_GET["ID_ThuTNo"])){
        echo "<script type='text/javascript'>";
        echo "window.ID_ThuTNo=".$_GET["ID_ThuTNo"];
        echo "</script>";


        echo "<script type='text/javascript'>";
        echo "window.phanloaiHD=".$_GET["phanloaiHD"];
        echo "</script>";

        echo "<script type='text/javascript'>";
        echo "window.ID_HoaDonThueDiary=".$_GET["ID_HoaDonThueDiary"];
        echo "</script>";


    }
   else
   {
      echo "<script type='text/javascript'>";
        echo "window.ID_ThuTNo=0";

        echo "</script>";

   }



if(isset($_GET["ID_ThuTraNoMulti"])){
        echo "<script type='text/javascript'>";
        echo "window.ID_ThuTraNoMulti='".$_GET["ID_ThuTraNoMulti"]."'";
        echo "</script>";

        echo "<script type='text/javascript'>";
        echo "window._sumTienKham=".$_GET["_sumTienKham"];
        echo "</script>";

        echo "<script type='text/javascript'>";
        echo "window._sumTienThuoc=".$_GET["_sumTienThuoc"];
        echo "</script>";

        echo "<script type='text/javascript'>";
        echo "window._sumTienGiam=".$_GET["_sumTienGiam"];
        echo "</script>";
         echo "<script type='text/javascript'>";
        echo "window.phanloaiHD=".$_GET["phanloaiHD"];
        echo "</script>";

}
    ?>







<style type="text/css">

    #DM_template td  {
        word-wrap:normal!important;
        white-space:nowrap;
    }
    #DM_template_container{
        position:absolute;
        z-index:1000000;
        display:none;

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






    .ui-layout-mask {
        background:#FFF !important;
        opacity:.20 !important;
        filter: alpha(opacity=20) !important;
    }


	.tt_phai
	{
        font-size:12px;
        margin-left:2px;

        width:455px !important;

      display:inline-block;

	}
    .tt_phai2
  {
        font-size:11px;
        margin-left:2px;

        width:450px !important;
      display:inline-block;

      /*background:#63d112  !important;*/
  }
 textarea
  {
width:100px !important;
  }


	label
	{
		display:inline-block;
		width:75px;
	}
.nut
{
  margin-top: 10px!important;
  text-align: center;
  border-color: red;
   width: 523px!important;

}
.nut #sua,#XemIn,#BangKe
{
  margin-right: 30px !important;
  margin-left: 30px !important;
}

.nut button
{
  width: 40px;
}

#hinhthuctt
{
 width: 146px!important;
}
#BangKe
{
  width: 70px!important;
}
</style>



<body>
<div id="panel_main">
     <div class="ui-layout-east n_tren" >

   	   <div class="tt_phai" >
        <label for="id_soHD">ID Auto</label>
       <input style="color:'red'" type="text" name="id_soHD" id="id_soHD" disabled>
    	  <label for="soHD">Số HD</label>
    	  <input type="text" name="soHD" id="soHD" />

          <label for="kihieuHD">Kí hiệu</label>
          <input type="text" name="kihieuHD" id="kihieuHD" />

          <br> <label for="ngayKham">
         Ngày khám</label>
          <input type="text" name="ngayKham" id="ngayKham" />

          <label for="ngayHD">Ngày HĐ</label>
          <input type="text" name="ngayHD" id="ngayHD" />
          <label for="tenKH">Tên KH</label>
          <input type="text" name="tenKH" id="tenKH"  style="width:363px!important" />
           <label for="tendonvi">Tên đơn vị</label>
          <input type="text" name="tendonvi" id="tendonvi"  style="width:363px!important" />

           <label for="diachiKH">Địa chỉ</label>
             <input type="text" name="diachiKH" id="diachiKH"  style="width:363px!important" />
 <label for="maST">Mã số thuế</label>
          <input type="text" name="maST" id="maST" />

          <label for="soTk">Số TK</label>
          <input type="text" name="soTk" id="soTk" />




         <label for="hinhthuctt">Hình thức TT</label>
          <select name="hinhthuctt" id="hinhthuctt">
            <option value="1">Tiền mặt</option>
            <option value="2">Chuyển khoản</option>
            <option value="3">Tiền mặt/ chuyển khoản</option>
          </select>




   	   </div>


        <div class="tt_phai2">
        <label for="noidung">Nội dung</label>
        <textarea id ="noidung" name="noidung"  style="width:136px!important" ></textarea>
         <label for="ghichu">Ghi chú</label>
        <textarea id ="ghichu" name="ghichu"  style="width:137px!important"  disabled></textarea>
          <label for="phaitra">Tổng cộng</label>
          <input type="text" name="phaitra" id="phaitra" />
            <label for="miengiam">Miễn giảm</label>
          <input type="text" name="miengiam" id="miengiam" />
           <label for="nguoiLap">Người lập</label>
          <input type="text" name="nguoiLap" style="width:110px!important" id="nguoiLap"/>

            <div class="nut" >
 <button href="#" id="luu" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Lưu</button>
         <button href="#" id="sua" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Sửa</button>
         <button href="#" id="XemIn" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Xem in</button>
         <button href="#" id="BangKe" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Bảng kê </button>
         <button href="#" id="Huy" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="margin-left:0px;  margin-bottom:1px; ">Hủy</button>
</div>






        </div>



    </div>


     <div id="dsBill" class="ui-layout-center n_duoi">
          <div id="tabs">
               <ul style="margin-left:5px;">
                <li><a href="#tabs-1" id="NhomDV">Chi tiết dịch vụ</a></li>
                <li><a href="#tabs-2" id="dsBill1">DS các hóa đơn khác</a></li>

              </ul>
                  <div id="tabs-1">
                  	<table id="rowed30"></table>

                  </div>
                  <div id="tabs-2">   </div>
          </div>

    </div>

</div>
</body>
</html>

<script type="text/javascript">

    jQuery(document).ready(function() {


     var _ID_HoaDonThueDiary;
     if (typeof window.ID_ThuTraNoMulti!='undefined')
     {
           window.url_rowed30 = 'pages.php?module=vienphi>&view=hoadon&action=data_HoaDonChiTiet&ID_ThuTraNo='+ window.ID_ThuTNo+'&phanloaiHD='+window.phanloaiHD+'&ID_ThuTraNoMulti='+window.ID_ThuTraNoMulti

         }else
         {
               window.url_rowed30 = 'pages.php?module=vienphi>&view=hoadon&action=data_HoaDonChiTiet&ID_ThuTraNo='+ window.ID_ThuTNo+'&phanloaiHD='+window.phanloaiHD;;

         }


      $("#panel_main").css("height",$(window).height()+"px");
      $("#panel_main").fadeIn(1000);

      $( "#tabs" ).tabs({
      });
      $( "#tabs" ).tabs({ active: 0 });
      create_grid();
      create_layout();
      resize_control();


      LayDuLieuLoadForm(1);
});
    $('#luu').click(function(){

      var e = document.getElementById("hinhthuctt");
var hinhthuctt = e.options[e.selectedIndex].text;

      var dataToSend = '{';
         phancach = ",";
if(typeof window.ID_ThuTraNoMulti !='undefined'){
  alert();
    dataToSend +=  '"soHD":' + JSON.stringify($.trim($("#soHD").val()));
    dataToSend += phancach + '"kihieuHD":' + JSON.stringify($.trim($("#kihieuHD").val()));
    dataToSend += phancach + '"ngayKham":' + JSON.stringify($.trim($("#ngayKham").val()));
    dataToSend += phancach + '"tenKH":' +JSON.stringify($.trim($("#tenKH").val()));
    dataToSend += phancach + '"tendonvi":' +JSON.stringify($.trim($("#tendonvi").val()));
    dataToSend += phancach + '"diachiKH":' + JSON.stringify($.trim($("#diachiKH").val()));
    dataToSend += phancach + '"soTk":' + JSON.stringify($.trim($("#soTk").val()));
    dataToSend += phancach + '"maST":' + JSON.stringify($.trim($("#maST").val()));
    dataToSend += phancach + '"noidung":' + JSON.stringify($.trim($("#noidung").val()));
    dataToSend += phancach + '"ghichu":' + JSON.stringify($.trim($("#ghichu").val()));
    dataToSend += phancach + '"hinhthuctt":' + JSON.stringify($.trim($("#hinhthuctt").val()));
    dataToSend += phancach + '"nguoiLap":' + JSON.stringify($.trim($("#nguoiLap_hidden").val()));
    dataToSend += phancach + '"id_soHD":' + JSON.stringify(_ID_HoaDonThueDiary);
    dataToSend += phancach + '"phanloaiHD":' + JSON.stringify(window.phanloaiHD);
    dataToSend += phancach + '"ngayHD":' + JSON.stringify($.trim($("#ngayHD").val()));
    dataToSend += phancach + '"phaitra":' + JSON.stringify($.trim($("#phaitra").val()));
    dataToSend += phancach + '"miengiam":' + JSON.stringify($.trim($("#miengiam").val()));
    dataToSend += phancach + '"ID_ThuTraNoMulti":' + JSON.stringify(ID_ThuTraNoMulti);

}
  else
  {
    dataToSend +=  '"soHD":' + JSON.stringify($.trim($("#soHD").val()));
    dataToSend += phancach + '"kihieuHD":' + JSON.stringify($.trim($("#kihieuHD").val()));
    dataToSend += phancach + '"ngayKham":' + JSON.stringify($.trim($("#ngayKham").val()));
    dataToSend += phancach + '"tenKH":' +JSON.stringify($.trim($("#tenKH").val()));
    dataToSend += phancach + '"tendonvi":' +JSON.stringify($.trim($("#tendonvi").val()));
    dataToSend += phancach + '"diachiKH":' + JSON.stringify($.trim($("#diachiKH").val()));
    dataToSend += phancach + '"soTk":' + JSON.stringify($.trim($("#soTk").val()));
    dataToSend += phancach + '"maST":' + JSON.stringify($.trim($("#maST").val()));
    dataToSend += phancach + '"noidung":' + JSON.stringify($.trim($("#noidung").val()));
    dataToSend += phancach + '"ghichu":' + JSON.stringify($.trim($("#ghichu").val()));
    dataToSend += phancach + '"hinhthuctt":' + JSON.stringify($.trim($("#hinhthuctt").val()));
    dataToSend += phancach + '"nguoiLap":' + JSON.stringify($.trim($("#nguoiLap_hidden").val()));
    dataToSend += phancach + '"id_soHD":' + JSON.stringify(_ID_HoaDonThueDiary);
    dataToSend += phancach + '"phanloaiHD":' + JSON.stringify(window.phanloaiHD);
    dataToSend += phancach + '"ngayHD":' + JSON.stringify($.trim($("#ngayHD").val()));
    dataToSend += phancach + '"phaitra":' + JSON.stringify($.trim($("#phaitra").val()));
    dataToSend += phancach + '"miengiam":' + JSON.stringify($.trim($("#miengiam").val()));
  }


      dataToSend += '}';

      dataToSend=jQuery.parseJSON(dataToSend);
      alertObject(dataToSend);
 $.post('pages.php?module=vienphi&view=hoadon&action=controller_luuHoaDon&hienmaloi=3&ID_TTNo='+ID_ThuTNo,dataToSend)
                                 .done(function( data ) {

                                  if (isNaN(data) ==false&& $.trim(data)>0) {
                                        _ID_HoaDonThueDiary=$.trim(data);
                                    $("#id_soHD").val($.trim(data));
                                  tooltip_message("Thêm hóa đơn thành công");
    }

                                   else if($.trim(data)=="")
                                    {
                                      tooltip_message("Lưu thành công");
                                    }
                                    else
                                    {
                                        tooltip_message("Lưu không thành công");
                                    }
                                                                  })
                                                        .fail(function() {
                                                        alert( "error" );
                                                        });

                                                       // location.reload();
        })

function create_layout(){
    $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , east: {
                resizable: true
                        , size: "45%"
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
                        , size: "55%"
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

function resize_control() {

 $("#NhomDV").setGridHeight($('.n_tren').height());

  $("#rowed30").setGridHeight($("#tabs-1").height()-120);
  $("#rowed30").setGridWidth($("#tabs-1").width());
}
 $('#XemIn').click(function(){


      $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=hoadonchinhthuc&header=top&lien=3&type=report&id_form=11&kieuin=1&id_ttno="+window.ID_ThuTNo+'&phanloaiHD='+window.phanloaiHD+"&ID_HoaDonThueDiary="+_ID_HoaDonThueDiary+"&ID_ThuTraNoMulti="+window.ID_ThuTraNoMulti,'HoaDonChinhThuc');
          $('#dialog_print').dialog('close');

        })
  $('#BangKe').click(function(){


      $.cookie("in_status", "print_preview");
           dialog_report("Xem trước khi in",90,90,"u78787878975f","pages.php?module=report&view=vienphi&action=bangkehoadon&header=top&lien=3&type=report&id_form=11&kieuin=1&id_ttno="+window.ID_ThuTNo+'&phanloaiHD='+window.phanloaiHD+"&ID_HoaDonThueDiary="+_ID_HoaDonThueDiary,'HoaDonChinhThuc');
          $('#dialog_print').dialog('close');

        })


 $('#Huy').click(function(){

  var soHdHuy=$("#soHD").val();
  $('<div></div>').appendTo('body')
  .html('<div><h2>Bạn có chắc là hủy hóa đơn '+soHdHuy+'?</h2></div>')
  .dialog({
    modal: true,
    title: 'Hủy hóa đơn  - cần cân nhắc ?!!',
    zIndex: 10000,
    autoOpen: true,
    width: 'auto',
    resizable: false,
    buttons: {
      Yes: function () {
        postTo='pages.php?module=vienphi&view=hoadon&action=controller_luuHoaDon&opper=HuyHoaDon'+'&soHdHuy='+soHdHuy+'&_ID_HoaDonThueDiary='+_ID_HoaDonThueDiary;
        $.post(postTo).done(function(data){

        })


        tooltip_message("Đã hủy hóa đơn");
        $(this).dialog("close");
      },
      No: function () {
       tooltip_message("Chưa hủy hóa đơn");
       $(this).dialog("close");
     }
   },
   close: function (event, ui) {
    $(this).remove();
  }
});


})



 function LayDuLieuLoadForm(ID_ThuTraNoP)
 {
  var postTo;
if(typeof window.ID_ThuTraNoMulti !='undefined'){
    postTo='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ThongTinHoaDon&ID_ThuTraNo='+window.ID_ThuTNo+'&phanloaiHD='+window.phanloaiHD+'&IDHoaDonThueDiary='+window.ID_HoaDonThueDiary+'&ID_ThuTraNoMulti='+window.ID_ThuTraNoMulti;

}
else
{
  postTo='pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_ThongTinHoaDon&ID_ThuTraNo='+window.ID_ThuTNo+'&phanloaiHD='+window.phanloaiHD+'&IDHoaDonThueDiary='+window.ID_HoaDonThueDiary;
}
  $.post(postTo).done(function(data){

   data=jQuery.parseJSON(data);
  // alertObject(data);
   if(typeof data.rows != 'undefined'){
     var tenKH=data.rows[0]['cell'][2];
      var diachiKH=data.rows[0]['cell'][3];
      var soHD=data.rows[0]['cell'][4];
      var kihieuHD=data.rows[0]['cell'][5];
      var ngayKham1=data.rows[0]['cell'][6]['date'];
      $("#soHD").val(soHD );
      $("#kihieuHD").val(kihieuHD );
      $("#ngayKham").val(ngayKham1 );
      $("#tenKH").val(tenKH );
      $("#diachiKH").val(diachiKH );
      _ID_HoaDonThueDiary=data.rows[0]['cell'][7];
      $("#id_soHD").val(_ID_HoaDonThueDiary );
      $("#ngayHD").val(data.rows[0]['cell'][8]['date']);
      $("#noidung").val(data.rows[0]['cell'][9]);
      $("#ghichu").val(data.rows[0]['cell'][10]);
      $("#maST").val(data.rows[0]['cell'][11]);
      $("#soTk").val(data.rows[0]['cell'][12]);
      $("#hinhthuctt").val(data.rows[0]['cell'][13]);
      $("#tendonvi").val(data.rows[0]['cell'][15]);
       if(data.rows[0]['cell'][14]==0)
         {
          create_combobox_new('#nguoiLap',create_bs_chidinh,'bw','','data_bacsi_todieutri',<?=$_SESSION["user"]["id_user"]?>);

        }
        else
        {
          create_combobox_new('#nguoiLap',create_bs_chidinh,'bw','','data_bacsi_todieutri',data.rows[0]['cell'][14]);
        }
   }




      })

 }


function create_bs_chidinh(elem, datalocal) {
 datalocal = jQuery.parseJSON(datalocal);
 $(elem).jqGrid({
  datastr: datalocal,
  datatype: "jsonstring",
  colNames: ['NickName','Họ tên','Phòng ban'],
  colModel: [
   {name: 'NickName', index: 'NickName', hidden: false,width:40},
   {name: 'HoTen', index: 'HoTen', hidden: false,width:100},
   {name: 'PhongBan', index: 'PhongBan', hidden: false,width:100},
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

    var rowData_dvcs = $(this).getRowData(id);
    setval_new('#combo_chamsoc',rowData_dvcs['ID_DM_LoaiChamSoc']);

  },
  ondblClickRow: function(id, rowIndex, columnIndex) {
  },
  loadComplete: function(data) {
  },
 });
 $(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
 $(elem).jqGrid('bindKeys', {});
}


  function create_grid() {
   // a
        $("#rowed30").jqGrid({
            url: window.url_rowed30,
            datatype: "json",
            colNames: ['Tên nhóm','SL','Giá','T tiền','Giá trước V','TT trước V'],
            colModel: [

                {name: 'Ten_Nhom_BHYT', index: 'Ten_Nhom_BHYT', search: true, width: "30%", editable: false, align: 'left', hidden: false},
                {name: 'SL',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'SL', search: false, width: "10%", editable: false, align: 'right', hidden: false},

                {name: 'DonGia',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'DonGia', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'ThanhTien',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'ThanhTien', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'GiaTruocVAT',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'GiaTruocVAT', search: false, width: "10%", editable: false, align: 'right', hidden: false},
                {name: 'ThanhTienTruocVAT',formatter:"integer",sorttype:"number", summaryType: 'sum',index: 'ThanhTienTruocVAT', search: false, width: "10%", editable: false, align: 'right', hidden: false},


            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed30',
            sortname: 'Ten_Nhom_BHYT',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",


      onCellSelect: function (rowid,iCol,cellcontent,e) {
     /* if((iCol==0)&&(window.oper=='add')){
              $('#rowed30').jqGrid('delRowData',rowid);
        $('#rowed30').trigger("reloadGrid");
        //tinhlai();
            }*/
        },
            onSelectRow: function(id) {
            },
           ondblClickRow: function(rowId) {
            },
            onselect: function(rowId, rowIndex, columnIndex) {
            },
            onRightClickRow: function(rowid, iRow, iCol, e) {


            },
            loadComplete: function(data) {
               

         var ids = $('#rowed30').jqGrid('getDataIDs');
           for (i = 0; i < ids.length; i++) {
                    var rowData = jQuery('#rowed30').getRowData(ids[i]);

                    window.rowcount_luoichuathanhtoan = $("#rowed30").getGridParam("reccount");

                    if (rowData["Ten_Nhom_BHYT"] == "Tổng thu") {
                        $("#rowed30").setCell(ids[i], 'Ten_Nhom_BHYT', '', {background: '#FFF', color: 'red'});
                         $("#rowed30").setCell(ids[i], 'ThanhTien', '', {background: '#FFF',color: 'red'});
                      }


if(i==ids.length-1 )
{

       $("#phaitra").val(rowData["ThanhTien"]);
}
if(rowData["Ten_Nhom_BHYT"] == "Giảm giá")
{

       $("#miengiam").val(rowData["ThanhTien"]);
}
//else{ $("#miengiam").val(0);}

                 }

            },
            caption: "Chi tiết hóa đơn"
        });
    }

</script>