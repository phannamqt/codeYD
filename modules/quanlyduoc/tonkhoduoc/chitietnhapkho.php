
<?php

/*dialog_main("Xem tổng hợp " + ' ', 98, 98, 56743265743657, "pages.php?module=quanlyduoc&view=tonkhoduoc&action=chitietnhapkho&type=test&id_form=1
    &id_thuoc="+id_thuoc+"&id_kho="+$("#kho_hidden").val()+'&fromdate='+ $( '#tungay' ).val()+'&todate='+$( '#denngay' ).val());*/

    if(isset($_GET["id_thuoc"])){
        echo "<script type='text/javascript'>";
        echo "window.id_thuoc=".$_GET["id_thuoc"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.id_thuoc=0";
        echo "</script>";
        }

    if(isset($_GET["id_thuoc"])){
        echo "<script type='text/javascript'>";
        echo "window.id_kho=".$_GET["id_kho"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.id_kho=0";
        echo "</script>";
        }
         if(isset($_GET["fromdate"])){
        echo "<script type='text/javascript'>";
        echo "window.fromdate=".$_GET["fromdate"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.fromdate='2015-1-1'";
        echo "</script>";
        }
         if(isset($_GET["todate"])){
        echo "<script type='text/javascript'>";
        echo "window.todate=".$_GET["todate"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.todate='2015-1-1'";
        echo "</script>";
        }

?>
 

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
    

    .form_row{
        width:300px!important;
        height:95px;
    }
    .CotSL
    {
        color: red !important;
    }
</style>






<table id="rowed3" style="width:100%" ></table>
<table id="rowed4" style="width:100%" ></table>
<!-- <div id="prowed3"></div> -->
</body>
<script type="text/javascript">
    jQuery(document).ready(function() {

         create_grid();
         create_grid2();
         resize_control();
        });



function resize_control(){
  
  $("#rowed3").setGridWidth($(window).width() - 20);
  $("#rowed3").setGridHeight($(window).height()/2 - 150);
  $("#rowed4").setGridWidth($(window).width() - 20);
  $("#rowed4").setGridHeight($(window).height()/2 - 80);
}

function create_grid() {
        $("#rowed3").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietnhap&id_kho='+window.id_kho+'&id_thuoc='+window.id_thuoc+'&tungay=<?= $_GET["fromdate"] ?>&denngay=<?= $_GET["todate"] ?>',
            datatype: "json",
            colNames: ['id_thuoc','Nhà cung cấp','Tại kho','Tên thuốc','Loại nhập',
            'Ngày','Duyệt', 'Mã phiếu','SL Nhập', 'Giá','T.Tiền','Kê đơn','BS kê','Tên BN','Mã BN'],
            colModel: [
            {name: 'id_thuoc', index: 'id_thuoc',sortable: true, search: true, width: "5%", editable: false, align: 'left', hidden: true,classes:'abc'},
                
                {name: 'TenNCC', index: 'TenNCC',sortable: true, search: true, width: "14%", editable: false, align: 'left', hidden: false},
                {name: 'TenKho',classes:'colored2', index: 'TenKho', sortable: true,search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'tengoc', index: 'tengoc',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'Ten_LoaiNhapXuat', index: 'Ten_LoaiNhapXuat',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'NgayDuyet',formatter: "date", formatoptions: {srcformat: 'H:i d/m/Y', newformat: 'H:i d/m/Y'},sorttype: "date", index: 'NgayDuyet', sortable: true, search: true, width: "11%",  align: 'left', hidden: false,classes:'abc'},
                {name: 'NguoiDuyet', index: 'NguoiDuyet',sortable: true, search: true, width: "7%", align: 'left', hidden: false},
                {name: 'MaPhieu', index: 'MaPhieu',sortable: true, search: true, width: "4%", align: 'left', hidden: false},
                {name: 'SoLuong',classes:'CotSL', index: 'SoLuong', sortable: true,search: true, width: "5%", editable: false, align: 'right', hidden: false},
                {name:'Dongia',classes:'colored3',index:'Dongia', width:"6%",sortable: true, editable:false,align:'right',hidden:false},
                {name: 'ThanhTien',classes:'colored', index: 'ThanhTien', search: true,sortable: true, width: "5%", editable: false, align: 'right', hidden: false},
                {name:'NgayKeDon',classes:'colored3',index:'NgayKeDon', width:"5%",sortable: true, editable:false,align:'left',hidden:false},
                {name:'BSKeDon',classes:'colored3',index:'BSKeDon', width:"4%",sortable: true, editable:false,align:'left',hidden:false},
                {name: 'TenBenhNhan',classes:'colored2', index: 'TenBenhNhan', sortable: true,search: true, width: "11%", editable: false, align: 'left', hidden: false},
                {name: 'MaBenhNhan',classes:'colored2', index: 'MaBenhNhan', sortable: true,search: true, width: "4%", editable: false, align: 'left', hidden: false},
                
              
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            pager: '#prowed3',
            sortname: 'tengoc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow:true,
            
            afterShowForm : function (formid) {
                xuongdong(formid);
                lendong(formid);
            },
            onSelectRow: function(id) {
                
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {


                  var rowData = jQuery('#rowed3').getRowData(rowId);
            
                 var id_thuoc=rowData[ "id_thuoc"];
                //alert(columnIndex+'----'+id_thuoc+'--id_kho--'+$("#kho_hidden").val());



            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
                 
              
            },
        
            loadComplete: function(data) {

                 $("#rowed3").jqGrid('footerData', 'set', 
                     { 'tengoc': $("#rowed3").jqGrid('getCol', 'tengoc', false, 'count')+' lần nhập kho',
                       'SoLuong': $("#rowed3").jqGrid('getCol', 'SoLuong', false, 'sum'),
                       'ThanhTien': $("#rowed3").jqGrid('getCol', 'ThanhTien', false, 'sum'),
         
                                                                    
                     });            
                                                                
            },

            caption: "Nhập"
        });
        
        $("#rowed3").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        $("#rowed3").jqGrid('bindKeys', {});

      }  

    

function create_grid2() {
        $("#rowed4").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_chitietxuat&id_kho='+window.id_kho+'&id_thuoc='+window.id_thuoc+'&tungay=<?= $_GET["fromdate"] ?>&denngay=<?= $_GET["todate"] ?>',
            datatype: "json",
            colNames: ['id_thuoc','Nhà cung cấp','Tại kho','Tên thuốc','Loại xuất',
            'Ngày','Duyệt', 'Mã phiếu','SL Xuất', 'Giá','T.Tiền','Kê đơn','BS kê','Tên BN','Mã BN'],
            colModel: [
            {name: 'id_thuoc', index: 'id_thuoc',sortable: true, search: true, width: "5%", editable: false, align: 'left', hidden: true,classes:'abc'},
                
                {name: 'TenNCC', index: 'TenNCC',sortable: true, search: true, width: "14%", editable: false, align: 'left', hidden: false},
                {name: 'TenKho',classes:'colored2', index: 'TenKho', sortable: true,search: true, width: "10%", editable: false, align: 'left', hidden: false},
                {name: 'tengoc', index: 'tengoc',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: false},
                {name: 'Ten_LoaiNhapXuat', index: 'Ten_LoaiNhapXuat',sortable: true, search: true, width: "20%", editable: false, align: 'left', hidden: false,classes:'abc'},
                {name: 'NgayDuyet',formatter: "date", formatoptions: {srcformat: 'H:i d/m/Y', newformat: 'H:i d/m/Y'},sorttype: "date", index: 'NgayDuyet', sortable: true, search: true, width: "11%",  align: 'left', hidden: false,classes:'abc'},
                {name: 'NguoiDuyet', index: 'NguoiDuyet',sortable: true, search: true, width: "7%", align: 'left', hidden: false},
                {name: 'MaPhieu', index: 'MaPhieu',sortable: true, search: true, width: "4%", align: 'left', hidden: false},
                {name: 'SoLuong',classes:'CotSL', index: 'SoLuong', sortable: true,search: true, width: "5%", editable: false, align: 'right', hidden: false},
                {name:'Dongia',classes:'colored3',index:'Dongia', width:"6%",sortable: true, editable:false,align:'right',hidden:false},
                {name: 'ThanhTien',classes:'colored', index: 'ThanhTien', search: true,sortable: true, width: "5%", editable: false, align: 'right', hidden: false},
                {name:'NgayKeDon',classes:'colored3',index:'NgayKeDon', width:"6%",sortable: true, editable:false,align:'left',hidden:false},
                {name:'BSKeDon',classes:'colored3',index:'BSKeDon', width:"5%",sortable: true, editable:false,align:'left',hidden:false},
                {name: 'TenBenhNhan',classes:'colored2', index: 'TenBenhNhan', sortable: true,search: true, width: "11%", editable: false, align: 'left', hidden: false},
                {name: 'MaBenhNhan',classes:'colored2', index: 'MaBenhNhan', sortable: true,search: true, width: "4%", editable: false, align: 'left', hidden: false},
                
              
            ],
            loadonce: true,
            scroll: false,
            modal: true,
            shrinkToFit: true,
            cmTemplate: {sortable: false},
            rowNum: 10000000,
            rowList: [],
            //pager: '#prowed3',
            sortname: 'tengoc',
            height: 100,
            width: 100,
            viewrecords: true,
            ignoreCase: true,
            sortorder: "desc",
            footerrow:true,
            
            afterShowForm : function (formid) {
                xuongdong(formid);
                lendong(formid);
            },
            onSelectRow: function(id) {
                
            },
            ondblClickRow: function(rowId, rowIndex, columnIndex) {


                  var rowData = jQuery('#rowed3').getRowData(rowId);
            
                 var id_thuoc=rowData[ "id_thuoc"];
                //alert(columnIndex+'----'+id_thuoc+'--id_kho--'+$("#kho_hidden").val());



            
            },
            onselect: function(rowId, rowIndex, columnIndex) {
                 
              
            },
        
            loadComplete: function(data) {

                 $("#rowed4").jqGrid('footerData', 'set', 
                     { 'tengoc': $("#rowed4").jqGrid('getCol', 'tengoc', false, 'count')+' lần xuất kho',
                       'SoLuong': $("#rowed4").jqGrid('getCol', 'SoLuong', false, 'sum'),
                       'ThanhTien': $("#rowed4").jqGrid('getCol', 'ThanhTien', false, 'sum'),
         
                                                                    
                     });            
                                                                
            },

            caption: "Xuất"
        });
        
        $("#rowed4").jqGrid('filterToolbar',{searchOperators : false,searchOnEnter:false,defaultSearch:"cn"});
        $("#rowed4").jqGrid('bindKeys', {});

      }  






</script>