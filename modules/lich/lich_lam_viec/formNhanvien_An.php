
<style>
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
    #ui-id-4
    {
        width: 350px!important;
    }
    #Mavuviec1,#nhanvien,#Ngaygui{
        width: 150px!important;
    }
    /*    #bacsy  {
                           display:inline-block;

                          width: 30px;
                           margin:0;
                           padding:0;
                   }*/
    .form_row{
        width:300px!important;
        height:95px;
    }
</style>



<div id="dialog" title="Basic dialog">
<!--<p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>-->
</div>


<div  class="nhan_vien">
    <table id="nhan_vien">
    </table>
</div>




<table id="rowed3" style="width:100%" ></table>
<div id="prowed3"></div>
</body>

<?php
 if(isset($_GET["id_pban"])){
        echo "<script type='text/javascript'>";

          echo "window.id_pban=".$_GET["id_pban"];

        echo "</script>";
    }
?>
<script type="text/javascript">
    jQuery(document).ready(function() {
 var id_pb=19;




        var lastsel3;
        jQuery(window).resize(function() {
            $("#rowed3").setGridWidth($(window).width() - 20);
            $("#rowed3").setGridHeight($(window).height() - $("#form_danh_muc_dan_toc").height() - 350);
        });

        create_grid_sucobynhanvien();
        function create_grid_sucobynhanvien() {
            //var lastSel;module=<?=$modules?>


            $("#rowed3").jqGrid({
                url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_xem_nhanvien_An&id_pban='+ id_pban,
                datatype: "json",
                colNames: ['id_nhanvien','Họ lót', 'Tên', 'NickName','Hiển thị'],
                colModel: [
                    {name: 'ID_NhanVien', index: 'ID_NhanVien', search: false, width: "2%", editable: false, align: 'left', hidden: true},
                    {name: 'HoLotNhanVien', index: 'HoLotNhanVien', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'TenNhanVien', index: 'TenNhanVien', search: true, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'NickName', index: 'NickName', search: true, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'HideLich',formatter: "checkbox",search: true,edittype: "checkbox", editoptions:  {value: "1:0",
                         dataEvents:  [{ type: 'blur', fn: function ( e ) {
                         savedRow = $('#rowed3').jqGrid("getGridParam", "savedRow");
                         if (savedRow && savedRow.length > 0) {
                          $('#rowed3').jqGrid("saveCell", savedRow[0].id, savedRow[0].ic);
                         }
                                     } }]
                    },index: 'HideLich',  editrules: {required: true},  search: false, width: "2%", editable: true, align: 'left', hidden: false},

                ],

              loadonce: true,
                scroll: 1,
                modal: true,
                shrinkToFit: true,
                rowNum:1000, //rowList:[30,60,90],
                pager: '#prowed3',
                sortname: 'id_nhanvien',
                height: 200,
                width: 100,
                viewrecords: true,
                ignoreCase: true,
                sortorder: "desc",
                grouping: true,
                rownumbers: true,
                autowidth:true,
                ondblClickRow: function(rowId, rowIndex, columnIndex) {
                    // $(".ui-icon-pencil").trigger('click');
                    $("#prowed3 .ui-icon-pencil").click();
					window.rowed3_select=rowId;
                },
                onRightClickRow: function(rowid, iRow, iCol, e) {
                },
                serializeRowData: function(postdata) {

                },
                onSelectRow: function(id) {

                },
                loadComplete: function(data) {


                },
                caption: "Danh sách ẩn",

                cellEdit: true,
                cellsubmit: 'remote',
                cellurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_An&hienmaloi=3&oper=hienthilich',

        serializeCellData: function (postdata) {
  /*  postdata.ID_LuotKham=$("#rowed3").getRowData( rowed3_select)['ID_NhanVien'];
    postdata.id_donthuoc=$("#rowed3").getRowData( rowed3_select)['HideLich'];
    postdata.id_benhnhan=window.id_benhnhan;*/
                return postdata;
  }

            });
            $("#rowed3").jqGrid('filterToolbar', {searchOperators: true, searchOnEnter: false, defaultSearch: "eq"});

           $("#rowed3").setGridWidth($(window).width() - 20);
           $("#rowed3").setGridHeight($(window).height() - 150);






        }




        $("#rowed3").jqGrid({
        });


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


     // phanquyen();

    })
</script>