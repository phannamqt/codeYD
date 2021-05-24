
<style>
    #ui-id-4
    {
        width: 350px!important;
    }
    #Mavuviec1,#nhanvien,#Ngaygui{
        width: 150px!important;
    }
    #TreSomChiTiet,#LogkhongHopLe,#ChiTietCong{
        height: 35px !important;

    }
    #DenghiCongthem,#TinhDitre,#TinhRasom,#TongCongTruc
    {
         width: 70px!important;
    }
        /*    #bacsy  {
                               display:inline-block;

                              width: 30px;
                               margin:0;
                               padding:0;
                           }*/
                           .form_row{
                            width:100px!important;
                            height:95px;
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

                    <div  class="nhan_vien">
                        <table id="nhan_vien">
                        </table>
                    </div>
                   <!--  <div id="dialog" title="Basic dialog">
                        <p>The dialog window can be moved, resized and closed with the 'x' icon.</p>
                    </div>
    }
 -->
                    <table id="rowed3" style="width:100%" ></table>
                    <div id="prowed3"></div>
                </body>
                <script type="text/javascript">
                    jQuery(document).ready(function() {

                        var lastsel;
                        shortcut_key();
                        var lastsel3;
                        jQuery(window).resize(function() {
                            $("#rowed3").setGridWidth($(window).width() - 20);
                            $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_dan_toc").height() - 350);
                        });
            load_select();//lấy dữ liệu combobox

            load_ajax();



            create_grid_sucobynhanvien();//tạo lưới
            //combobox nhân viên
           // create_combobox('#nhanvien', '#nhanvien1', ".nhan_vien", "#nhan_vien", create_nhanvien, 500, 300, 'danhmuc', 'data_nhanvien');

           $("#Ngaysuco").datepicker({
            showWeek: true,
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: "dd/mm/yy",

            onClose: function(selectedDate) {

            },
            onSelect: function () {

                if (this.id.substr(0, 3) === "gs_") {
                                // call triggerToolbar only in case of searching toolbar
                                setTimeout(function () {
                                    $("#grid_id")[0].triggerToolbar();
                                }, 100);
                            }}

                        });
           $("#Ngaysuco").keyup(function(){

            //$(".ui-datepicker").hide();

        })  ;
           $("#Ngaysuco").click(function(){
            $(".ui-datepicker").show();

        })
//pages.php?module=<?= $modules ?>&view=<?= $view ?>&id_nhanvien=' + window.para_id_nhanvien + '&action=data_tensuco'
           function load_select() {
            //window.Mavuviec = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
                window.Mavuviec = $.ajax({url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tensuco', async: false, success: function(data, result) {
                if (!result)
                    alert('Không load được danh mục vụ việc');
            }}).responseText;

            window.nickname = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
                if (!result)
                    alert('Không load được danh mục nhân viên');
            }}).responseText;


            Mavuviec1 = Mavuviec.split(";");
            for (i = 0; i <= Mavuviec1.length - 1; i++) {
                temp = Mavuviec1[i].split(":");
                $('#Mavuviec').append($('<option>', {
                    value: temp[0],
                    text: temp[1]
                }));
            }
            $('#Mavuviec').append($('<option>', {
                value: null,
                text: ''
            }));
            autocompleted_combobox('#Mavuviec');

                // $("#rowed3").setColProp('MaVuViec', { editoptions: { value: Mavuviec} });
            }
            function load_ajax(status) {
                window.tenvuviec = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục sự cô');
                }}).responseText;


                if (status == true) {
                    $("#rowed3").setColProp('Id_Suco', {editoptions: {value: tenvuviec}});
                   //  $("#rowed3").setColProp('Id_nhanvien', {editoptions: {value: nickname}});


               }
           }
           function create_nhanvien(elem, datalocal) {
            datalocal = jQuery.parseJSON(datalocal);
            $(elem).jqGrid({
                datastr: datalocal,
                datatype: "jsonstring",
                colNames: ['<?php lang('ten')?>', 'Họ và tên', 'Bộ phận'],
                colModel: [
                {name: 'nickname', index: 'nickname', hidden: false},
                {name: 'hovaten', index: 'hovaten', hidden: false},
                {name: 'Bophan', index: 'Bophan', hidden: false},
                ],
                hidegrid: false,
                gridview: true,
                loadonce: true,
                scroll: false,
                modal: true,
                rowNum: 200000,
                rowList: [],
                height: 300,
                width: 470,
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
                    grid_filter_enter(elem);
                    count = jQuery(elem).jqGrid('getGridParam', 'records');
                    if (count > 0) {

                        $(elem).jqGrid("setSelection",<?= $_GET["idnhanvien"] ?>, true);
                    }
                },
            });
$(elem).jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
$(elem).jqGrid('bindKeys', {});
}
function create_grid_sucobynhanvien() {
    window.para_id_nhanvien = <?= $_GET["idnhanvien"] ?>;
    window.tensuco = ":;" + window.Mavuviec;
    window.nicknamez=":;"+window.nickname;
    $("#rowed3").jqGrid({
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&id_nhanvien=' + window.para_id_nhanvien + '&action=data_donsuco',
        datatype: "json",
        colNames: ['IndexID', '<?php lang('ngaysuco')?>', '<?php lang('goiluc')?>','<?php lang('suco')?>', '<?php lang('ndgiaitrinh')?>','<?php lang('ctgiocong')?>', '<?php lang('logkhople')?>','Log trễ sớm',
        '<?php lang('yeucau')?>', '<?php lang('goi')?>', '<?php lang('ditre')?>', '<?php lang('rasom')?>', '<?php lang('tbp')?>','<?php lang('gscm')?>','GSHC','<?php lang('xong')?>','<?php lang('ten')?>','<?php lang('congpm')?>','','<?php lang('conggtruc')?>'],
        colModel: [
        {name: 'IndexID',key:true, index: 'IndexID', search: false, width: "0%", editable: true, align: 'left', hidden: true},
        {name: 'Ngayxayrasuco',editrules:{required:true},search: true,searchrules:{date:true},sorttype:"date",searchoptions:{ dataInit: function (el) {
            $(el).dateEntry({dateFormat: 'dmy/'})      }},options: {dataInit: function(element) {$(element).datepicker({dateFormat: 'dd/mm/yy'})}},
            index: 'Ngayxayrasuco',  formatter: "date", formatoptions: {srcformat: 'y/m/d', newformat: 'd/m/Y'}, width: "10%", editable: true, align: 'left', hidden: false,
            editoptions: {dataInit: function(element) {

                $(element).datepicker({
                    showWeek: true,
                    defaultDate: "+1w",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1,
                    dateFormat: "dd/mm/yy",

                    onClose: function(selectedDate) {

                    },
                    onSelect: function (selectedDate) {
                      var Ngay=$("#Ngayxayrasuco").val();

                      getChiTietCong();
                  }
              });





            },defaultValue:'<?= $_GET["Ngaysuco"] ?>'}
        },
        {name: 'Ngaygui', index: 'Ngaygui', search: false, width: "10%", formatter: "date", formatoptions: {srcformat: 'y/m/d H:i', newformat: 'd/m/Y H:i'}, editable: false, align: 'left', hidden: false},
        {name: 'Id_Suco',editrules:{required:true}, index: 'Id_Suco', search: false, width: "20%", editable: true, align: 'left', formatter: "select", edittype: "select", hidden: false, editoptions: {value: tensuco}},
        {name: 'Noidung',edittype: "textarea", index: 'Noidung', search: false, width: "25%", editable: true, align: 'left', hidden: false},
        {name: 'ChiTietCong',edittype: "textarea", index: 'ChiTietCong', search: false, width: "25%", editable: true, align: 'left', hidden: false},
        {name: 'LogkhongHopLe',edittype: "textarea", index: 'LogkhongHopLe', search: false, width: "8%", editable: true, align: 'left', hidden: false},
        {name: 'TreSomChiTiet',edittype: "textarea", index: 'TreSomChiTiet', search: false, width: "5%", editable: true, align: 'left', hidden: false},
        {name: 'DenghiCongthem',editoptions: {defaultValue:'480'},  editrules:{required:true},index: 'DenghiCongthem', search: false, width: "4%", editable: true, align: 'left', hidden: false},
        {name: 'Sent', index: 'Sent', search: true, width: "3%",stype: 'select', edittype: "checkbox",searchoptions: { sopt: ['eq'], value:":;1:Đã gửi;0:Chưa gửi"}, formatter: "checkbox", editoptions: {value: "1:0",defaultValue:'1'}, editable: true, align: 'left', hidden: false},
        {name: 'TinhDitre',editoptions: {defaultValue:'0'},  index: 'TinhDitre', search: false, width: "2%", editable: true, align: 'left', hidden: false},
        {name: 'TinhRasom',editoptions: {defaultValue:'0'}, index: 'TinhRasom', search: false, width: "2%", editable: true, align: 'left', hidden: false},
        {name: 'TBPOK', index: 'TBPOK', search: false, width: "2%",formatter: "checkbox",edittype: "checkbox", editoptions:  {value: "1:0"},editable: false, align: 'left', hidden: false,},
        {name: 'GSCMO', index: 'GSCMOK', search: false, width: "2%",formatter: "checkbox",edittype: "checkbox", editoptions:  {value: "1:0"},editable: false, align: 'left', hidden: false,},
        {name: 'GSHCOK', index: 'GSHCOK', search: false, width: "2%",formatter: "checkbox",edittype: "checkbox", editoptions:  {value: "1:0"},editable: false, align: 'left', hidden: false,},
        {name: 'Finished', index: 'Finished', search: true,stype: 'select',searchoptions: { sopt: ['eq'], value:":;1:Xong;0:Chưa xong"}, width: "3%",formatter: "checkbox",edittype: "checkbox", editoptions:  {value: "1:0"},editable: false, align: 'left', hidden: false,},
        {name: 'Id_nhanvien', index: 'Id_nhanvien', search: false, width: "5%",formatter: "select",editable: true,edittype: "select", editoptions: {value: nicknamez,defaultValue:'<?= $_GET["idnhanvien"] ?>'} , align: 'left', hidden: false,},
        {name: 'TongCong', index: 'TongCong', search: false, width: "4%",align: 'left', hidden: false,},
        {name: 'MauDon', index: 'MauDon', search: false, width: "0%",align: 'left', hidden: true,},
       {name: 'TongCongTruc',editoptions: {defaultValue:'0'},  editrules:{required:true},index: 'TongCongTruc', search: false, width: "4%", editable: true, align: 'left', hidden: false},
        ],
        loadonce: true,
        scroll: false,
        modal: true,
        shrinkToFit: true,
                    rowNum:10000, //rowList:[30,60,90],
                    pager: '#prowed3',
                    sortname: 'IndexID',
                    height: 200,
                    width: 150 ,
                    viewrecords: true,
                    ignoreCase: true,
                    sortorder: "desc",
                    autowidth:true,
                    ondblClickRow: function(rowId, rowIndex, columnIndex) {
                        $(".ui-icon-pencil").trigger('click');
                    },
                    onRightClickRow: function(rowid, iRow, iCol, e) {
                    },
                    onSelectRow: function(id) {
                         var grid = jQuery('#rowed3');
                        var sel_id = grid.jqGrid('getGridParam', 'selrow');
                        var myCellData = grid.jqGrid('getCell', sel_id, 'Finished');
                       // alert(myCellData);

                        if (myCellData==1)
                        {
                         $("#del_rowed3").addClass('ui-state-disabled');
                        }
                     else
                     {
                         $("#del_rowed3").removeClass('ui-state-disabled');
                     }



                    },
                    loadComplete: function(data) {
                        $("#rowed3").jqGrid('setGridParam', { loadonce: true});


                                    var     ids = $('#rowed3').jqGrid('getDataIDs');

                                    var dto=   '<?= $_GET["Ngaysuco"] ?>';

                                    ids = $('#rowed3').jqGrid('getDataIDs');
                                    cell1 = $('#rowed3').jqGrid('getCell');



                                    for (i = 0; i < ids.length; i++) {

                                  $("#rowed3").setCell(ids[i], 'TongCong','', {background: '#d9f970'});

                                        var rowData = jQuery('#rowed3').getRowData(ids[i]);

                                        //kiểm tra để trỏ focus
                                     

                                                if (rowData["MauDon"] == 'D')
                                                {
                                                   $("#rowed3").setCell(ids[i], 'Id_Suco', '', {background: 'red', color: 'black'}); 
                                                }
                                                          if (rowData["MauDon"] == 'X')
                                                {
                                                   $("#rowed3").setCell(ids[i], 'Id_Suco', '', {background: 'green', color: 'black'}); 
                                                }
                                                 if (rowData["MauDon"] == 'V')
                                                {
                                                   $("#rowed3").setCell(ids[i], 'Id_Suco', '', {background: 'yellow', color: 'black'}); 
                                                }









                                        if (rowData["Finished"] == 1) {

                                            $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: '#FFF', color: '#000'});

                                        }
                                        else {

                                            if (rowData["GSHCOK"] == 1) {

                                                $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: '#7be75a', color: '#000'});

                                            }
                                            else
                                            {
                                                if (rowData["TBPOK"] != 1)
                                                {
                                                    $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: 'orangered', color: '#000'});
                                                }
                                                else
                                                {
                                                    $("#rowed3").setCell(ids[i], 'Id_nhanvien', '', {background: 'yellow', color: '#000'});
                                                }

                                            }
                                        }


                                        var rowDataNgaySuCo = rowData['Ngayxayrasuco'];

                                        if(rowDataNgaySuCo==dto)
                                        {
                                            grid_scroll("#rowed3",ids[i]);
                                            break;
                                        }

                       }
                   },
                   caption: " <?php lang('dsdonsuco')?>                                    <div class='hinhvuong camdo'></div><label class='diengiai'><?php lang('chotbp')?></label> <div class='hinhvuong quathoigian_min'></div><label class='diengiai'><?php lang('chogs')?></label> <div class='hinhvuong sansanggoi'></div><label class='diengiai'><?php lang('chotbphanhchinh')?></label> <div class='hinhvuong chuasansang'></div><label class='diengiai'><?php lang('dagiaiquyet')?></label>"
               });
$("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"eq"});
$("#gs_Ngayxayrasuco").datepicker({
    showWeek: true,
    defaultDate: "+1w",
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
    dateFormat: "dd/mm/yy",

    onClose: function(selectedDate) {

    },
    onSelect: function () {
        if (this.id.substr(0, 3) === "gs_") {
                            // call triggerToolbar only in case of searching toolbar
                            setTimeout(function () {
                                $("#rowed3")[0].triggerToolbar();
                            }, 100);
                        }}
                    });
$("#gs_Ngayxayrasuco").keyup(function(){

 //$(".ui-datepicker").hide();

})  ;


$("#gs_Ngayxayrasuco").click(function(){
   $(".ui-datepicker").show();

});



$("#rowed3").jqGrid('navGrid', "#prowed3", {add: permission["add"], edit: permission["edit"], del: permission["delete"], search: false, closeAfterEdit: true, clearAfterAdd: true,navkeys : [ true, 38, 40 ], closeOnEscape: true, bSubmit: "Submit",addtext:"<?php lang('themmoi')?>
",
                    bCancel: "Cancel"}, //options

                    {recreateForm: true, height: '500', width: '670', closeAfterAdd: true,
                    closeAfterEdit: true, reloadAfterSubmit: false, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donsuco&oper=edit', closeOnEscape: true, modal: true, recreateForm: true,caption:"NewButton",bSubmit: "<?php lang('luucc')?>
",
                    afterSubmit: function(response, postdata) {
                        if (response.responseText == 1)

                        {
                            var success = false;
                            var new_id = "<?php get_text1("sua_khongthanhcong") ?>";
                        } else {
                            tooltip_message("<?php get_text1("sua_thanhcong") ?>");
                            var success = true;
                            var new_id = "<?php get_text1("sua_thanhcong") ?>";
                        }
                        ;
                        return [success, new_id];
                        // load_ajax(true);
                    },
                    beforeShowForm: function(formid) {


                 autocompleted_combobox("#Id_Suco");
                 canhgiua(formid);

             },
             afterShowForm: function(formid) {
              appendColumnGioPhut();
                getChiTietCong();
                //alert('chỉnh sủa');

                $(".ui-datepicker").hide();

                xuongdong(formid);
                lendong(formid);

            },
            onClose: function(formid) {
                $("#editmodrowed3").css("box-shadow", "");
            }


                }, // end edit options




                {
                    height: '500', width: '670', reloadAfterSubmit: false, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donsuco&hienmaloi=3&oper=add&id_nhanvien='+para_id_nhanvien, closeOnEscape: true, closeAfterAdd: true, modal: true, addedrow: "first", recreateForm: true, savekey: [true, 121],title:"NewButton",bSubmit: "<?php lang('luucc')?>
",bCancel: "Cancel",





                afterSubmit: function(response, postdata) {

                             if (response.responseText == 1) //loi

                             {
                                var success = false;
                                var new_id = "Tạo đơn không thành công";
                                tooltip_message("Lỗi khi tạo đơn");
                            } else {
                                tooltip_message("Tạo đơn thành công");
                                var success = true;
                                var new_id = "Tạo đơn thành công";
                            }
                            ;
                            return [success, new_id];

                        },
                        afterComplete: function(response, postdata, formid) {

                            $("#rowed3").jqGrid('setGridParam', { datatype: 'json'}).trigger("reloadGrid");
                        },
                        beforeSubmit: function(postdata, formid) {
                            if (typeof(window.id_rowed3) == 'undefined') {
                                window.id_rowed3 = 1;
                            }
                            var success = true;
                            var new_id = "";
                            return [success, new_id];
                        },
                        beforeShowForm: function(formid) {

                            canhgiua(formid);
                        },
                        afterShowForm: function(formid) {
                        appendColumnGioPhut();



                            getChiTietCong();

                            xuongdong(formid);
                            lendong(formid);
                            $(".ui-datepicker").hide();
                        },
                        onClose: function(formid) {
                            $("#editmodrowed3").css("box-shadow", "");
                        }
                },// end  of  add option



                 // xóa options
                 {

                    reloadAfterSubmit: false, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donsuco&oper=del', navkeys: [true, 38, 40], closeOnEscape: true,
                    afterSubmit: function(response, postdata) {



                     $(function() {
                       //$( "#dialog" ).dialog();
                               var msg = 'Confirmation Msg.';
                               var div = $("<div>" + msg + "</div>");
                               div.dialog({
                                 title: "Confirm",
                                 buttons: [
                                 {
                                     text: "Yes",
                                     click: function () {
                                         alert('yes');
                                     }
                                 },
                                 {
                                     text: "No",
                                     click: function () {
                                         div.dialog("close");
                                     }
                                 }
                                 ]
                             });


                   });






                       if (response.responseText == 1) {
                        var success = false;
                        var new_id = "<?php get_text1("xoa_khongthanhcong") ?>";
                    } else {
                        tooltip_message("<?php get_text1("xoa_thanhcong") ?>");
                        var success = true;
                        var new_id = "<?php get_text1("xoa_thanhcong") ?>";

                    }
                    ;
                    return [success, new_id];
                }
                }, // xóa options
                {reloadAfterSubmit: true, height: '500', width: '670', sopt: ["cn"], url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_donsuco&q=2', closeOnEscape: true,
                    /*beforeShowSearch:function(formid){
                     }*/ // search options
                } // search options

                );

$("#rowed3").setGridWidth($(window).width() - 20);
$("#rowed3").setGridHeight($(window).height() - 200);
               // $("#rowed3").searchGrid( {multipleSearch:true, );
               }
               $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
               }});
               $("#gbox_rowed3").attr("tabindex", "1");
               $("#gbox_rowed3").bind('keydown', function(e) {
                if ((jwerty.is("ctrl+m", e))) {
                    $("#rowed3").jqGrid('restoreRow', lastsel);
                    $("#rowed3").jqGrid('editRow', rowid, true);
                    lastsel = rowid;
                }
            })

               $('#btn_luu').click(function() {
                $('.rowdata_donchamcong').each(function() {
                    //alert( this.id.val() );
                   // alert(this.id + '-- ' + $(this).val())
               });

            });
               function pickdates(id){ jQuery("#"+id+"_sdate","#rowed3").datepicker({dateFormat:"yy-mm-dd"}); }

           })



function setColor(element, color)
{
    element.style.backgroundColor = color;
}
function getChiTietCong()
{

   // alert();
    var Ngay=$("#Ngayxayrasuco").val();
    var id_nvien=$("#Id_nhanvien").val();

  /*  $.ajax({
        type: 'POST',
        async : true,
        url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_chamcong_new&from='+Ngay+'&to='+Ngay+'&ID_NhanVien='+id_nvien,

        success: function(output, status, xhr) {
            output=jQuery.parseJSON(output);
            var ChiTietCong=output.rows[0]['cell'][9];
            var LogkhongHopLe=output.rows[0]['cell'][11];
            var TreSomChiTiet=output.rows[0]['cell'][13];

            $("#ChiTietCong").val(ChiTietCong);
            $("#LogkhongHopLe").val(LogkhongHopLe);
            $("#TreSomChiTiet").val(TreSomChiTiet);

            $("#TreSomChiTiet").css("background","pink");
            $("#LogkhongHopLe").css("background","pink");
            $("#ChiTietCong").css("background","pink");

            /*$('#LogkhongHopLe').attr("disabled",true);
            $('#ChiTietCong').attr("disabled",true);
            $('#TreSomChiTiet').attr("disabled",true);

        },


    });*/

$.post('pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_chamcong_new&from='+Ngay+'&to='+Ngay+'&ID_NhanVien='+id_nvien).done(function(data){

 data=jQuery.parseJSON(data);
            var ChiTietCong=data.rows[0]['cell'][10];
            var LogkhongHopLe=data.rows[0]['cell'][12];
            var TreSomChiTiet=data.rows[0]['cell'][14];
           // alert(data.rows[0]['cell'][9]);
          //   alert(data.rows[0]['cell'][11]);
            //    alert(data.rows[0]['cell'][10]);
             // alert(data.rows[0]['cell'][13]);
         alertObject(data);
            $("#ChiTietCong").val(ChiTietCong);
            $("#LogkhongHopLe").val(LogkhongHopLe);
            $("#TreSomChiTiet").val(TreSomChiTiet);

            $("#TreSomChiTiet").css("background","pink");
            $("#LogkhongHopLe").css("background","pink");
            $("#ChiTietCong").css("background","pink");

            $('#LogkhongHopLe').attr("disabled",true);
            $('#ChiTietCong').attr("disabled",true);
            $('#TreSomChiTiet').attr("disabled",true);

})


}
function appendColumnGioPhut()
{


    $("#DenghiCongthem").before('<input type="text" name="DenghiCongthemGio" id="DenghiCongthemGio" style="border: none ; width: 20px!important" ><label id="label_gio"><?php lang('gio')?></label><input type="text" name="DenghiCongthemPhut" id="DenghiCongthemPhut" style="border: none; width: 20px!important " ><label id="label_phut"><?php lang('phut')?></label> <label id="yeucau" name="yeucau"></label>');

     $("#DenghiCongthem").css('background', '#d9f970');
    $("#DenghiCongthemGio,#DenghiCongthemPhut").keyup(function(){
     var phut1=$("#DenghiCongthemGio").val()*60;
     var phut2=0;
     if ($("#DenghiCongthemPhut").val()!='')
     {
         phut2= $("#DenghiCongthemPhut").val();
     }

     var phut=parseInt(phut1)+parseInt(phut2);
     $("#DenghiCongthem").val(phut);

       $("#DenghiCongthem").css("width", "20px !important");


       $("#DenghiCongthem").attr('style', 'height:20px !important')
 });



     $("#TongCongTruc").before('<input type="text" name="TongCongTrucGio" id="DenghiCongthemGio" style="border: none ; width: 20px!important" ><label id="label_giotruc"><?php lang('gio')?></label><input type="text" name="DenghiCongthemPhut" id="TongCongTrucPhut" style="border: none; width: 20px!important " ><label id="label_phut"><?php lang('phut')?></label> <label id="yeucautruc" name="yeucau"></label>');
}

</script>