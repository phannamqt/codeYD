
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
	#menu .disable{

	background-color:#666;
}
#ui-id-12.ui-state-highlight{
    color:#F60!important;
}
#ui-id-12.ui-menu-item a{
    display:inline-block!important;
}
#right_menu{
	position:absolute;
	z-index:999;
}

#prowed4_center .ui-pg-table{
	display:none;
}
.lich-yeu-cau{
	border-top: 1px solid #ccc;
    bottom: 0;
    color: #960;
    height: 17px;
    left: 2px;
    padding: 1px;
    position: absolute;
    width: 99%;
}
</style>


<div id="dialog" title="Basic dialog" style="display:none;">

</div>


<div  class="nhan_vien">
    <table id="nhan_vien">
    </table>
</div>



<table id="rowed3" style="width:100%" ></table>
<div id="prowed3"></div>
<!--Nam mới thêm-->
<ul id="right_menu" class="right_menu" style="display:none">
<li id="canbosualich" class="danhdauphanquyen"><a href="#"><span class="ui-icon ui-icon-pencil"></span> Duyệt lịch</a></li>
<li id="xemchitietdon" class="danhdauphanquyen"><a href="#"><span class="ui-icon ui-icon-pencil"></span> Xem chi tiết đơn</a></li>
</ul>
</body>
<script type="text/javascript">
    jQuery(document).ready(function() {
		window.open_edit_rowed4=0;
	
	
        window.mucphatthedo = '<?=  $_SESSION["GD2PhanTramMucPhatDonChamCong"] ?>';//$_SESSION['user']['id_phongban']
        window.iD_PhongBan_userlogin = '<?=  $_SESSION["user"]["id_phongban"] ?>';//$_SESSION['user']['id_phongban']
         window.Userlogin=  '<?=   $_SESSION["user"]["id_user"] ?>';  
        //alert( window.iD_PhongBan_userlogin);
	
	var d = new Date('<?= $_GET["fromdate"] ?>');
	var curr_date = d.getDate();
	var curr_month = d.getMonth() + 1; //Months are zero based
	var curr_year = d.getFullYear();
	window.dateFrom=curr_date + "/" + curr_month + "/" + curr_year;
	
	
	var d2 = new Date('<?= $_GET["todate"] ?>');
	var curr_date2 = d2.getDate();
    var curr_month2 = d2.getMonth() + 1; //Months are zero based
    var curr_year2 = d2.getFullYear();
    window.dateTo=curr_date2 + "/" + curr_month2 + "/" + curr_year2;

        //var t= fromdate.dateEntry({dateFormat: 'dmy-'});

        // alert(t);
        var lastsel;
        $.dateEntry.setDefaults({spinnerImage: ''});
       // shortcut_key();
        var lastsel3;
        jQuery(window).resize(function() {
            $("#rowed3").setGridWidth($(window).width() - 20);
            $("#rowed3").setGridHeight($(window).height()- 250);
        });
        load_select();//lấy dữ liệu combobox

        load_ajax();


        create_grid_sucobynhanvien();//tạo lưới

//   $("#Ngaysuco").datepicker({
//                        showWeek: true,
//                        defaultDate: "+1w",
//                        changeMonth: true,
//                        changeYear: true,
//                        numberOfMonths: 1,
//                        dateFormat: "dd/mm/yy",
//
//                        onClose: function(selectedDate) {
//
//                        },
//                        onSelect: function(dat, inst) {
//                        alert(dat);
//                        }
//
//                    });
        $("#Ngaysuco").keyup(function() {

            $(".ui-datepicker").hide();

        });
        $("#Ngaysuco").click(function() {
            $(".ui-datepicker").show();
        })
		
		$("#canbosualich").click(function() {
			if(window.open_edit_rowed4==0){ // kiem tra khong dang mo thi moi mo
				dialog_sub_grid("Chỉnh sửa lịch của "+window.n_Ten_nhanvien, 780, 320, window.n_id_phongban, window.n_Ngayxayrasuco, window.n_Id_nhanvien);
			}
        })


        $("#xemchitietdon").click(function() {
            //if(window.open_edit_rowed4==0){ // kiem tra khong dang mo thi moi mo
              //  dialog_sub_grid("Chỉnh sửa lịch", 780, 320, window.n_id_phongban, window.n_Ngayxayrasuco, window.n_Id_nhanvien);
           // }
           //alert('');
           dialog_main("Đơn của " +window.n_Ten_nhanvien + ' - ' + window.n_Id_nhanvien+" - Ngày xảy ra sự cố "+window.n_Ngayxayrasuco, 100, 100, 5674365743657, "pages.php?module=<?=$modules?>&view=<?=$view?>&action=DonChamCongChiTiet&type=test&id_form=111&Ngaysuco="+window.n_Ngayxayrasuco+"&nhanvien="+window.n_Id_nhanvien+"&idnhanvien="+window.n_Id_nhanvien);
        })




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
        $("#checkp").click(function() {
            var x = $("#checkp").is(":checked");
            if (x == true) {
                $("#gview_rowed3 .ui-icon-circlesmall-minus").trigger("click");
            } else {
                $("#gview_rowed3 .ui-icon-circlesmall-plus  ").trigger("click");
            }

        })

     
		$("#right_menu").menu();
		$(document).bind("mouseup", function(e) {
			$("#right_menu").hide();
		});
		 phanquyen();
    })
		

        function load_select() {
           // window.Mavuviec = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DMSuCoCC&id=idIndex&name=TenVuviec', async: false, success: function(data, result) {
            window.Mavuviec = $.ajax({url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_tensuco', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục vụ việc');
                }}).responseText;

            window.nickname = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục nhân viên');
                }}).responseText;

            window.iD_PhongBan = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon=0&status=2&tables=dm_phongban&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
                    if (!result)
                        alert('Không load được danh mục vụ việc');
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

        function create_grid_sucobynhanvien() {
            var lastSel;

            window.tensuco = ":Tất cả;" + window.Mavuviec;
            window.nicknamez = ":Tất cả;" + window.nickname;
            window.iD_PhongBanZ = ":Tất cả;" + window.iD_PhongBan;

            $("#rowed3").jqGrid({
                url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donsuco&fromdate=<?= $_GET["fromdate"] ?>&todate=<?= $_GET["todate"] ?>',
                datatype: "json",
                colNames: ['IndexID', 'Ngày sự cố', 'Gửi lúc', 'Khoa phòng', 'Khoa phòng(gõ tìm)', 'idnhanvien', 'Tên(gõ tìm)',
                 'Trạng thái đơn','Log Ko hợp lệ','Log trễ sớm', 'Sự cố', 
                 'Giải trình về sự cố','Log tại máy','Lich','Công', 'Đi trễ', 'Ra sớm','Công trực', 'Công', 'Đi trễ', 'Ra sớm','Công trực', 'TK', 'GSCM', 'GSHC', 'TPHC', 'Đã gửi', 'ID_chamcong','Màu','',''],
                colModel: [
                    {name: 'IndexID', index: 'IndexID', search: false, width: "0%", editable: false, align: 'left', hidden: true},
                    {name: 'Ngayxayrasuco', width: "5%", editrules: {required: true}, search: true, searchrules: {date: true}, sorttype: "date", searchoptions: {dataInit: function(el) {
                                $(el).dateEntry({dateFormat: 'dmy/'})
                            }}, options: {dataInit: function(element) {
                                $(element).datepicker({dateFormat: 'dd/mm/yy'})
                            }}, index: 'Ngayxayrasuco', formatter: "date", formatoptions: {srcformat: 'y/m/d', newformat: 'd/m/Y'}, editable: false, align: 'left', hidden: false, editoptions: {dataInit: function(element) {
                                $(element).datepicker({dateFormat: 'dd/mm/yy'})
                            }}},
                    {name: 'Ngaygui', index: 'Ngaygui', search: false, width: "5%", formatter: "date", formatoptions: {srcformat: 'y/m/d H:i', newformat: 'd/m/Y H:i'}, editable: false, align: 'left', hidden: false},
                    /*{name: 'ID_PhongBan', index: 'ID_PhongBan', summaryType: 'count',  width: "0%",  hidden: true, },*/
                    {name: 'ID_PhongBan', index: 'ID_PhongBan', summaryType: 'count', search: true, stype: 'select', searchoptions: {sopt: ['eq', 'ne'], value: iD_PhongBanZ}, width: "7%", formatter: "select", editable: false, edittype: "select", editoptions: {value: iD_PhongBanZ}, align: 'left', hidden: false, },
                    {name: 'TenPhongBan', index: 'TenPhongBan',summaryType: 'count',search: true,width: "7%",hidden: true},
                    {name: 'Id_nhanvien', summaryType: 'count', index: 'Id_nhanvien', width: "0%", hidden: true, },
                    {name: 'NickName', index: 'NickName',summaryType: 'count',width: "5%", search: true, align: 'left', hidden: false, },
                    {name: 'ChiTietCong', index: 'ChiTietCong', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                      {name: 'LogkhongHopLe', index: 'LogkhongHopLe', search: false, width: "5%", editable: false, align: 'center', hidden: false},
                    {name: 'TreSomChiTiet', index: 'TreSomChiTiet', search: false, width: "3%", editable: false, align: 'left', hidden: false},
                    {name: 'Id_Suco', editrules: {required: true}, index: 'Id_Suco', search: true, stype: 'select', width: "22%", editable: false, align: 'left', formatter: "select", edittype: "select", hidden: false, editoptions: {value: tensuco}},
                    {name: 'Noidung', index: 'Noidung', search: false, width: "12%", editable: false, align: 'left', hidden: false},
                    {name: 'LogTaiMay', index: 'LogTaiMay', search: false, width: "10%", editable: false, align: 'left', hidden: false},
                    {name: 'NgayGioTaoLich', index: 'NgayGioTaoLich', search: false, width: "12%", editable: false, align: 'left', hidden: false},
                    {name: 'DenghiCongthem', editrules: {required: true}, index: 'DenghiCongthem', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'TinhDitre', index: 'TinhDitre', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'TinhRasom', index: 'TinhRasom', search: false, width: "2%", editable: false, align: 'left', hidden: false},
                    {name: 'CongTruc', index: 'CongTruc', search: false, width: "2%", editable: false, align: 'left', hidden: false},

                    {name: 'TongCong', editrules: {required: true}, index: 'TongCong', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    {name: 'ccDiTre', index: 'ccDiTre', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    {name: 'ccRaSom', index: 'ccRaSom', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    {name: 'ccCongTruc', index: 'ccCongTruc', search: false, width: "2%", editable: true, align: 'left', hidden: false},
                    
                    {name: 'TBPOK', index: 'TBPOK', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":Tất cả;1:OK;0:NoOk"}, width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: false, },
                    {name: 'GSCMOK', index: 'GSCMOK', search: false, width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: true, },
                    {name: 'GSHCOK', index: 'GSHCOK', search: true, stype: 'select', searchoptions: {sopt: ['eq'], value: ":Tất cả;1:OK;0:NoOK"}, width: "2%", formatter: "checkbox", edittype: "checkbox", editoptions: {value: "1:0"}, editable: true, align: 'center', hidden: true, },
                   
                   {name:'Finished', stype: 'select',index:'Finished', width:"5%", search:true,searchoptions: { sopt: ['eq', 'ne'],value:':Tất cả;1:OK;0:NoOK'}, editable:true,align:'center',hidden:false,edittype:"checkbox",formatter:"checkbox",
                    editoptions: { value:"1:0",dataEvents:  [{ type: 'click', fn: function(e) { 
                                           var row = $(e.target).closest('tr.jqgrow');
                    var rowId = row.attr('id');
                    var denghiCongthem =parseInt($('#rowed3').jqGrid('getCell',rowId,'DenghiCongthem'));
                    var TongCongP =parseInt($('#rowed3').jqGrid('getCell',rowId,'TongCongP'));
                     

                  //bổ sung chỉ mình đơn đỏ bị phạt
                   if($('#'+rowId+'_MauDon').val()=='D')
                    {
                     window.mucphatthedo='<?=  $_SESSION["GD2PhanTramMucPhatDonChamCong"] ?>';
                     }
                   
                   else
                   {
                   
                        window.mucphatthedo=0;
                   
                   }
                   //bổ sung chỉ mình đơn đỏ bị phạt
                   
                     var mucduyet=denghiCongthem-parseInt((denghiCongthem-TongCongP)*parseInt(window.mucphatthedo)/100);
                     var CongTruc =parseInt($('#rowed3').jqGrid('getCell',rowId,'CongTruc'));
                    var TinhRasom =parseInt($('#rowed3').jqGrid('getCell',rowId,'TinhRasom'));
                    var TinhDitre =parseInt($('#rowed3').jqGrid('getCell',rowId,'TinhDitre'));
                     CongTruc =CongTruc>mucduyet?mucduyet:CongTruc;
                    if (permission['Finished']==1){//quyền cao nhất mới được
                    $('#'+rowId+'_TongCong').val(mucduyet);
                    $('#'+rowId+'_ccCongTruc').val(CongTruc);
                    $('#'+rowId+'_ccRaSom').val(TinhRasom);
                    $('#'+rowId+'_ccDiTre').val(TinhDitre);
                         }
                 } }]}}, 
                    {name: 'Sent', index: 'Sent', search: true, searchoptions: {sopt: ['eq'], value: ":Tất cả;1:Đã gửi;0:Chưa gửi"}, width: "3%", edittype: "checkbox", formatter:'select', editoptions: {value: "1:0", defaultValue: '1'}, editable: false, align: 'left', hidden: true},
                    {name: 'ID_ChamCong', index: 'ID_ChamCong', search: false, width: "0%", editable: true, align: 'left', hidden: true},

                    {name: 'MauDon',search: true, stype: 'select',searchoptions: {sopt: ['eq'], value: ":Tất cả;X:Xanh;V:Vàng;D:Đỏ;T:Tím"},  index: 'MauDon',  width: "3%", editable: true, align: 'center', hidden: false,edittype:"select",formatter:'select',editoptions:{value:"X:Xanh;V:Vàng;D:Đỏ;T:Tím",dataEvents: [{ type: 'change keyup', fn: function(e) {
                       

                    var row = $(e.target).closest('tr.jqgrow');
                    var rowId = row.attr('id');
                    var denghiCongthem =parseInt($('#rowed3').jqGrid('getCell',rowId,'DenghiCongthem'));
                    var TongCongP =parseInt($('#rowed3').jqGrid('getCell',rowId,'TongCongP'));

                      //bổ sung chỉ mình đơn đỏ bị phạt

                       if($('#'+rowId+'_MauDon').val()=='D')
                            {
                             window.mucphatthedo='<?=  $_SESSION["GD2PhanTramMucPhatDonChamCong"] ?>';
                             }
                           
                           else
                           {
                           
                                window.mucphatthedo=0;
                           
                           }
                       //bổ sung chỉ mình đơn đỏ bị phạt
                   
                    var mucduyet=denghiCongthem-parseInt((denghiCongthem-TongCongP)*parseInt(window.mucphatthedo)/100);
                      var CongTruc =parseInt($('#rowed3').jqGrid('getCell',rowId,'CongTruc'));
                     CongTruc =CongTruc>mucduyet?mucduyet:CongTruc;

                    var TinhRasom =parseInt($('#rowed3').jqGrid('getCell',rowId,'TinhRasom'));
                    var TinhDitre =parseInt($('#rowed3').jqGrid('getCell',rowId,'TinhDitre'));

                    if (permission['Finished']==1){//quyền cao nhất mới được
                   
                    $('#'+rowId+'_TongCong').val(mucduyet);

                    $('#'+rowId+'_ccCongTruc').val(CongTruc);
                    $('#'+rowId+'_ccRaSom').val(TinhRasom);
                    $('#'+rowId+'_ccDiTre').val(TinhDitre);
                    
                    }
                  
                     }}]}},
                     {name: 'TongCongP', editrules: {required: true}, index: 'TongCongP', search: false, width: "0%", editable: false, align: 'left', hidden: true},
					 {name: 'LichYeuCau', index: 'LichYeuCau', search: false, width: "0%", editable: false, align: 'left', hidden: true},
        
                ],



                loadonce: true,
                scroll: 1,
                modal: true,
                shrinkToFit: true,
                rowNum:200, //rowList:[30,60,90],
                pager: '#prowed3',
                sortname: 'IndexID',
                height: 200,
                width: 100,
                viewrecords: true,
                ignoreCase: true,
                sortorder: "desc",
                   grouping: true,
                    rownumbers: true,
                autowidth:true,
                groupingView: {groupField: ['ID_PhongBan', 'NickName'],
                    groupOrder: ['desc', 'asc'],
                    groupSummary: [false, false],
                    showSummaryOnHide: [false, false],
                    groupColumnShow: [true, true],
                    groupText: [' <b >{0}</b> có  <b style="color: orangered">{ID_PhongBan}</b> đơn', '<b style="color: blue">{0}</b> có <b style="color: orangered"> {NickName}</b> đơn'],
                    groupCollapse: false,
                    showSummaryOnHide: false,
                },
                ondblClickRow: function(rowId, rowIndex, columnIndex) {
                    if(parseInt($("#rowed3").getRowData(rowId)['Finished'])!=1){// neu chua duyet moi duoc quyen duyet
                        // $(".ui-icon-pencil").trigger('click');
                        $("#prowed3 .ui-icon-pencil").click();
                        window.rowed3_select=rowId; 
                    }else{
                         tooltip_message("Lịch này đã duyệt");
                    }
                    
                },
			  onRightClickRow: function(rowid, iRow, iCol, e) {
                    // chuot phai window.iD_PhongBan_userlogin
                   // alert($("#rowed3").getRowData(rowid)['ID_PhongBan']);

                   if ($("#right_menu").width() + e.pageX > $(document).width()) {
                        $("#right_menu").css('left', e.pageX - $("#right_menu").width() + "px");
                    } else {
                        $("#right_menu").css('left', e.pageX + "px");
                    }
                    if ($("#right_menu").height() + e.pageY > $(document).height()) {
                        $("#right_menu").css('top', e.pageY - $("#right_menu").height() + "px");
                    } else {
                        $("#right_menu").css('top', e.pageY + "px");
                    }
                    $(document).bind("contextmenu", function(e) {
                            return false;
                        });
                    setTimeout(function(){
                        if(parseInt($("#rowed3").getRowData(rowid)['Finished'])!=1){// neu chua duyet moi duoc quyen duyet
                            if($("#rowed3").getRowData(rowid)['ID_PhongBan']==window.iD_PhongBan_userlogin || window.Userlogin==178 || window.Userlogin==67|| window.Userlogin==785 || window.Userlogin==64){
            					 $("#right_menu").show(300);
                             }else{
                                tooltip_message("Không thể thao tác trên nhân viên khoa phòng khác!");
                             }
                        }else{
                            if(window.Userlogin==64 || window.Userlogin==178 || window.Userlogin==785){
                                tooltip_message("Lịch này đã duyệt");
                                $("#right_menu").show(300);
                            }else{
                                tooltip_message("Lịch này đã duyệt");
                            }
                        }
                    },200);
				},
                serializeRowData: function(postdata) {
					if (!postdata.hasOwnProperty('TongCong')) {
					  postdata.TongCong=$("#rowed3").getRowData(rowed3_select)['TongCong'];
					}
					if (!postdata.hasOwnProperty('ccDiTre')) {
					  postdata.ccDiTre=$("#rowed3").getRowData(rowed3_select)['ccDiTre'];
					}
					if (!postdata.hasOwnProperty('ccRaSom')) {
					  postdata.ccRaSom=$("#rowed3").getRowData(rowed3_select)['ccRaSom'];
					}
					if (!postdata.hasOwnProperty('TBPOK')) {
					  postdata.TBPOK=$("#rowed3").getRowData(rowed3_select)['TBPOK'];
					}
					if (!postdata.hasOwnProperty('GSHCOK')) {
					  postdata.GSHCOK=$("#rowed3").getRowData(rowed3_select)['GSHCOK'];
					}
					if (!postdata.hasOwnProperty('GSCMOK')) {
					  postdata.GSCMOK=$("#rowed3").getRowData(rowed3_select)['GSCMOK'];
					}
					if (!postdata.hasOwnProperty('Finished')) {
					  postdata.Finished=$("#rowed3").getRowData(rowed3_select)['Finished'];
					}
					if (!postdata.hasOwnProperty('ID_ChamCong')) {
					  postdata.ID_ChamCong=$("#rowed3").getRowData(rowed3_select)['ID_ChamCong'];
					}
					if (!postdata.hasOwnProperty('IndexID')) {
					  postdata.IndexID=$("#rowed3").getRowData(rowed3_select)['IndexID'];
					}

					//alertObject(postdata);
                    return postdata;
                },
                onSelectRow: function(id) {
					 //var grid = jQuery('#rowed3');
					//  var colModel = grid.getGridParam('colModel');
					 // var colName = colModel[columnIndex].name;
					//  var row = $("#phongban option:selected").val();
					var rowData = jQuery('#rowed3').getRowData(id);
					window.n_id_phongban=rowData['ID_PhongBan'];
					window.n_Ngayxayrasuco=rowData['Ngayxayrasuco'];
					window.n_Id_nhanvien=rowData['Id_nhanvien'];
					window.n_LichYeuCau=rowData['LichYeuCau'];
                    window.n_Ten_nhanvien=rowData['NickName'];
                },
                loadComplete: function(data) {
                    //console.log("namm");



                    var gridDOM = this; 
                    if ($(this).jqGrid('getGridParam', 'datatype') === 'json') {
                        
                        setTimeout(function () {                            
                            gridDOM.triggerToolbar();
                        }, 100);
                        //console.log(1);
                    }else
                    {

                    var id_pbNguoiTaoDon=0;
                    ids = $('#rowed3').jqGrid('getDataIDs');
                    for (i = 0; i < ids.length; i++) {
                        var rowData = jQuery('#rowed3').getRowData(ids[i]);

                         id_pbNguoiTaoDon=rowData["ID_PhongBan"];
                        // alert(id_pbNguoiTaoDon);

                        $("#rowed3").setCell(ids[i], 'TongCong', '', {background: '#d9f970'});
                        $("#rowed3").setCell(ids[i], 'TongCong', '', {color: 'red'});
                        if (rowData["MauDon"] == 'X') {

                            $("#rowed3").setCell(ids[i], 'MauDon', '', {background: 'white', color: 'Green'});

                        }
                        if (rowData["MauDon"] == 'V') {

                            $("#rowed3").setCell(ids[i], 'MauDon', '', {background: 'white', color: 'orange'});

                        }
                          if (rowData["MauDon"] == 'D') {

                            $("#rowed3").setCell(ids[i], 'MauDon', '', {background: 'white', color: 'red'});

                        }


                        if (rowData["Finished"] == 1) {

                            $("#rowed3").setCell(ids[i], 'NickName', '', {background: '#FFF', color: '#000'});

                        } 
                        else {

                            if (rowData["GSHCOK"] == 1) {

                                $("#rowed3").setCell(ids[i], 'NickName', '', {background: '#7be75a', color: '#000'});

                            }
                            else
                            {
                                if (rowData["TBPOK"] != 1)
                                {
                                    $("#rowed3").setCell(ids[i], 'NickName', '', {background: 'orangered', color: '#000'});
                                }
                                else
                                {
                                    $("#rowed3").setCell(ids[i], 'NickName', '', {background: 'yellow', color: '#000'});
                                }

                            }
                        }
             

                    }

                if (permission['TBPOK']==1 ){
               		$("#rowed3").setColProp('TBPOK', {editable: true});
                	$("#rowed3").setColProp('MauDon', {editable: true});
                }else{
                   // alert('Bạn không thể duyệt đơn cho bộ phận khác');
                	$("#rowed3").setColProp('TBPOK', {editable: false});
                	$("#rowed3").setColProp('MauDon', {editable: false});
                }
                if (permission['GSCMOK']==1 && id_pbNguoiTaoDon==window.iD_PhongBan_userlogin){
                	$("#rowed3").setColProp('GSCMOK', {editable: true});
                }else{
                    $("#rowed3").setColProp('GSCMOK', {editable: false});
                }
                if (permission['GSHCOK']==1 && id_pbNguoiTaoDon==window.iD_PhongBan_userlogin){
                 	$("#rowed3").setColProp('GSHCOK', {editable: true});
                }else{
                    $("#rowed3").setColProp('GSHCOK', {editable: false});
                }
                if (permission['Finished']==1){
					$("#rowed3").setColProp('Finished', {editable: true});//TongCong
					$("#rowed3").setColProp('TongCong', {editable: true});
					$("#rowed3").setColProp('ccDiTre', {editable: true});
					$("#rowed3").setColProp('ccRaSom', {editable: true});
					$("#rowed3").setColProp('MauDon', {editable: true});
                }else{
					$("#rowed3").setColProp('Finished', {editable: false});
					$("#rowed3").setColProp('TongCong', {editable: false});
					$("#rowed3").setColProp('ccDiTre', {editable: false});
					$("#rowed3").setColProp('ccRaSom', {editable: false});
					$("#rowed3").setColProp('MauDon', {editable: true});
                }

                }

                setTimeout(function(){
                    $("#gs_NickName").focus();
                },100)
                },
                caption: "Đơn sự cố từ "+dateFrom +" đến "+ dateTo+"------ <label for='checkbox'style='width:110px' >Thu gọn</label><input type='checkbox' id='checkp'>---------------------- <div class='hinhvuong camdo'></div><label class='diengiai'>Chờ Trưởng khoa/phòng hoặc CNTT</label> <div class='hinhvuong quathoigian_min'></div><label class='diengiai'>Chờ TP Hành chính</label> <div class='hinhvuong chuasansang'></div><label class='diengiai'>Đã giải quyết</label>",
                editurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_duyetdon&hienmaloi=3'
            });
            /*$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "eq"});*/
              //$("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn"});
              $("#rowed3").jqGrid('filterToolbar', {searchOperators: false, searchOnEnter: false, defaultSearch: "cn",  stringResult: true});

            $.dateEntry.setDefaults({spinnerImage: ''});

            $("#gs_Ngayxayrasuco").datepicker({
                showWeek: true,
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
                dateFormat: "dd/mm/yy",
                onClose: function(selectedDate) {

                },
                onSelect: function() {
                    if (this.id.substr(0, 3) === "gs_") {
                        // call triggerToolbar only in case of searching toolbar
                        setTimeout(function() {
                            $("#rowed3")[0].triggerToolbar();
                        }, 100);
                    }
                }
            });
         
            $("#gs_Ngayxayrasuco").keyup(function() {

                $(".ui-datepicker").hide();

            });
            $("#gs_Ngayxayrasuco").click(function() {
                $(".ui-datepicker").show();

            })


            $("#rowed3").jqGrid('navGrid', "#prowed3", {add: false, edit: false, del: false, search: false, refresh: true, closeAfterEdit: true, clearAfterAdd: true, 
                //navkeys: [true, 38, 40], 
                closeOnEscape: true}, {}, {},
                    {


                    }
            );

            $("#rowed3").jqGrid('navButtonAdd', "#prowed3", {
                onClickButton:
                        function(){


                    var pban=$('#gs_ID_PhongBan :selected').text();


                    $('<div></div>').appendTo('body')
                    .html('<div><h3>Bạn chắc chắn ?</h3></div><div><input type="checkbox" id="checkGhide">Ghi đè công của các đơn đã duyệt ( Không được chọn mục này nếu muốn giữ lại công những ngày đã duyệt đơn)</input></div>')
                    .dialog({
                        modal: true, title: 'Tính lại công của '+pban +' từ ngày <?= $_GET["fromdate"] ?> đến ngày <?= $_GET["todate"] ?>', zIndex: 10000, autoOpen: true,
                        width: '800px', resizable: false,
                        buttons: {
                            Yes: function () {
                                // $(obj).removeAttr('onclick');
                                // $(obj).parents('.Parent').remove();
                                  var x = $("#checkGhide").is(":checked");
                               // alert(x);

                                $(this).dialog("close");
                            },
                            No: function () {
                                $(this).dialog("close");
                            }
                        },
                        close: function (event, ui) {
                            $(this).remove();
                        }
                    });



                }, caption: "Tính lại công", id: "tinhlaicong_button", buttonicon : "ui-icon-calculator",
            });
            $("#rowed3").jqGrid('inlineNav', '#prowed3', {add: false, addtext: '', edittext: 'Duyệt đơn', edit: true, closeOnEscape: true,
                addParams: {
                   // keys: true,
                    position: "last",
                    // mtype: 'post',
                    addRowParams: {
                       // keys: true,
                        aftersavefunc: function(rowId, response, lastsel) {
                            if (response.responseText == 1) {
                                tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                            } else {
                                tooltip_message("Lưu dữ liệu thành công");
                               // $("#rowed3").trigger("reloadGrid");
                               /* $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                        $("#rowed3 .ui-icon-pencil").click();
                                    }});
                                $('#rowed3').focus();*/
                            }

                        },
                        oneditfunc: function(rowId) {

                        },
                        afterrestorefunc: function() {
                           /* $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                   // $("#prowed4 .ui-icon-pencil").click();
                                }});
                            $('#rowed3').focus();*/
                        },
                        beforeSaveRow: function(options, rowId) {

                        },
                    }
                },
                editParams: {

                    keys: true,
                    aftersavefunc: function(rowId, response, lastsel) {
                        if (response.responseText == 1) {
                            tooltip_message("Có lỗi trong quá trình lưu dữ liệu. Vui lòng thử lại");
                        } else {
                            tooltip_message("Lưu thành công");
                            $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                                    $("#prowed3 .ui-icon-pencil").click();
                                }});

                            //$('#rowed3').focus();
                            $("#rowed3").trigger("reloadGrid");
                        }
                        ;
                    },
                    oneditfunc: function(rowId) {

                    },
                    afterrestorefunc: function() {
                       /* $("#rowed3").jqGrid('bindKeys', {"onEnter": function(rowid) {
                               // $("#prowed4 .ui-icon-pencil").click();
                            }});
                        $('#rowed3').focus();*/
                    },
                    beforeSaveRow: function(options, rowId) {

                    },
                }
            });


            $("#rowed3").setGridWidth($(window).width() - 20);
            $("#rowed3").setGridHeight($(window).height() - 250);

            jQuery("#rowed3").jqGrid('setGroupHeaders',
                    {useColSpanStyle: true, groupHeaders:
                                [{startColumnName: 'DenghiCongthem', numberOfColumns: 4, titleText: '<b >Yêu cầu từ đơn</b>'},
                                    {startColumnName: 'TongCong', numberOfColumns: 4, titleText: '<b> Đã giải quyết</b>'}]});
            //

        }



 function dialog_sub_grid(title, width, height, row, colName, rowID) {
	 		window.open_edit_rowed4=1;
            $("body").prepend('<div class="sub_grid" style="display:none;"><table id="rowed4" style="width:100%" ></table><div id="prowed4"></div></div>');
			//alert(rowID);
			loadphongban();
			colName=colName.split('/');
			colName=colName[1]+'/'+colName[0]+'/'+colName[2];
			window.n_row=row;
			window.n_colName=colName;
			window.n_rowID=rowID;
            creat_sub_grid(row, colName, rowID);
           // shortcut_key();

            $(".sub_grid").dialog({
                height: height,
                width: width,
                modal: false,
                title: title,
                stack: true,
                open: function(event, ui) {
                    $('.ui-draggable').css({"box-shadow": "0px 0px 10px rgb(136, 136, 136)"});
					
                },
                close: function(event, ui) {
					$("body").remove(".ui-jqdialog");
					window.open_edit_rowed4=0;
					$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donsuco&fromdate=<?= $_GET["fromdate"] ?>&todate=<?= $_GET["todate"] ?>'}).trigger('reloadGrid');
					$(this).remove();
		
				}
			});
 }


  function creat_sub_grid(row, colName, rowID) {
        lastsel = 0;
       //alert(rowID);
        var focus_status =-1;
        window.y==1;
        var followupDate = new Date(colName);
        var followupDate1 = new Date(colName);
        $("#rowed4").jqGrid({
            url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich1&q=2&idphong=' + row + '&from=' + colName + '&loailich=&idnhanvien=' + rowID ,
            datatype: "json",
            colNames: ['Id', 'Tên Loại Lịch', 'ngay', 'Giờ Bắt Đầu', 'Giờ Kết Thúc', 'Tên', 'Chấm Công', 'Phòng Ban', 'Ghi chú'],
            colModel: [
            {name: 'ID_LichLamViec', index: 'ID_LichLamViec', search: false, width: "2%", editable: false, align: 'right', hidden: true},
            {name: 'TenLoaiLich', index: 'TenLoaiLich', width: "200%", align: 'center', formatter: "select", edittype: "select", hidden: false, editoptions: {value: tenloailich1, defaultValue: '1', }, formoptions: {}},
            {name: 'ngay', index: 'ngay', width: "2%", editable: true, align: 'right', hidden: true, editoptions: {}},
            {name: 'GioBatDau', index: 'GioBatDau', width: "100%", edittype: "text", align: 'center', editable: true, editrules: {required: true, time: true}, editoptions: {
                dataInit: function(element) {
                    $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                    $(element).addClass('timeRange');
                    $(element).addClass('canhgiua');
                }, defaultValue: "00:00"
            }},
            {name: 'GioKetThuc', index: 'GioKetThuc', width: "100%", align: 'center', editable: true,newgrid:true,func_grid:"save_func", editrules: {required: true, time: true}, editoptions: {
                dataInit: function(element) {
                    $(element).timeEntry({show24Hours: true, spinnerImage: ''});
                    $(element).addClass('timeRange');
                    $(element).addClass('canhgiua');
                }, defaultValue: "00:00"
            }, editrules:{required: true,custom: true, custom_func: function(value, colName) {
                var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                return TimeCheck(id_row);

            }}},
            {name: 'Id_NhanVien', index: 'Id_NhanVien', width: "100%", editable: true, align: 'left', hidden: false, edittype: "select", formatter: "select", editoptions: {value: nickname2, defaultValue: rowID}},
            {name: 'IsChamCong', index: 'IsChamCong', width: "100%", editable: true, align: 'center', edittype: "checkbox", editoptions: {value: "1:0", defaultValue: "1"}, formatter: "checkbox", formatoptions: {"disabled": true}, hidden: true },
            {name: 'ID_PhongBan', index: 'ID_PhongBan', width: "200%", editable: true, align: 'center', formatter: "select", edittype: "select", hidden: true, editoptions: {value: phongban2, defaultValue: window.n_id_phongban}},
            {name: 'GhiChu', index: 'GhiChu', width: "200%", editable: true, align: 'left', hidden: false, edittype: "textarea", formoptions: {}},
            ],
            data :["onclose"],
            grid_save_option: "",
            editurl: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&ac=tinhlaicong',
            rowNum: 100,
            pager: '#prowed4',
            gridview: true,
            page: followupDate.getDate(),
            sortname: 'Id',
            shrinkToFit: false,
            height: 180,
            width:"auto",
            sortorder: "asc",
            serializeRowData: function(postdata) {
			//	$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donsuco&fromdate=<?= $_GET["fromdate"] ?>&todate=<?= $_GET["todate"] ?>'}).trigger('reloadGrid');
                $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich1&q=2&idphong=' + window.n_row + '&from=' + window.n_colName + '&idnhanvien=' + window.n_rowID}).trigger('reloadGrid');
                return postdata;
            },
            onSelectRow: function(id) {

            },
            loadComplete: function() {
				var lich_yc=window.n_LichYeuCau.split('|||');
				var lich='';
				window.n_LichYeuCau_Send=new Array();
				for(var i=0;i<lich_yc.length;i++){
                    if(lich_yc[i]!='' && lich_yc[i]){
    					window.n_LichYeuCau_Send.push(lich_yc[i])
    					if(lich==''){
    						lich+=lich_yc[i];
    					}else{
    						lich+=', '+lich_yc[i];	
    					}
                    }
					
				}
				
				$("#gview_rowed4 .ui-jqgrid-bdiv").append('<div class="lich-yeu-cau">Lịch yêu cầu: '+lich+'</div>');
				if(lastsel==0){
					if ($('#rowed4').jqGrid('getGridParam','records')>0){
					  $('#rowed4').jqGrid('setSelection',$("#rowed4").getDataIDs()[0]);
					  $('#rowed4 #'+$("#rowed4").getDataIDs()[0]).focus()
					}
				}else{
					$('#rowed4 #'+lastsel).focus();
					$('#rowed4').jqGrid('setSelection',lastsel);
				}
				$("#rowed4_ilsave").addClass('ui-state-disabled');
				$("#rowed4_ilcancel").addClass('ui-state-disabled');
				$("#rowed4_iladd").removeClass('ui-state-disabled');
				$("#rowed4_iledit").removeClass('ui-state-disabled');
				var loailich = $("#loailich option:selected").val()
				if (loailich == "") {
					$("#rowed4").setColProp('TenLoaiLich', {editable: true});
					$("#rowed4").setColProp('TenLoaiLich', {editoptions: {defaultValue: '1'}});
				}else{
					$("#rowed4").setColProp('TenLoaiLich', {editoptions: {defaultValue: loailich}});
					$("#rowed4").setColProp('TenLoaiLich', {editable: true, editoptions: {readonly: true}});
				}
				var tinh = $("#rowed4").getGridParam('page') - followupDate.getDate();
				var newdate = (new Date(followupDate1)).addDays(tinh);
				var newdate1 = $.datepicker.formatDate("D dd-mm-yy", new Date(newdate));
				var newdate2 = $.datepicker.formatDate("dd-mm-yy", new Date(newdate));
				$("#rowed4").setColProp('ngay', {editoptions: {defaultValue: newdate2}});
				var tuan = $.datepicker.iso8601Week(newdate);
				$("#rowed4").jqGrid('destroyGroupHeader');
				$("#rowed4").jqGrid('setGroupHeaders', {
				useColSpanStyle: true,
								groupHeaders: [
								{startColumnName: 'GioBatDau',
								numberOfColumns: 2, 
								titleText: 'Tuần  ' + tuan + ' ' + newdate1
								}]});



        },
        ondblClickRow: function(rowId, rowIndex, columnIndex) {

            window.y=1
            $("#prowed4 .ui-icon-pencil").click();
            $('#rowed4').jqGrid('setSelection',rowId);

            $("textarea,select,input,a").focus(function() {
                $(this).css("box-shadow", "0px 0px 4px 2px #208ac8")
            });

            $("textarea,select,input,a").focusout(function() {
                $(this).css("box-shadow", "");
            });
            ischamconglich1 = window.ischamconglich.split(";");
            chamconglich1= window.chamconglich.split(";");
            TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
            for(i=0;i<=chamconglich1.length-1;i++){
                chamconglich2 = chamconglich1[i].split(":");
                ischamconglich2 = ischamconglich1[i].split(":");
                if (chamconglich2[0]===TenLich){
                   if(ischamconglich2[1]==1){
                      $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
                  }else{
                      $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
                  }
                  if(chamconglich2[1]==0){
                      $("#rowed4").setColProp('GioBatDau', {editrules: null});
                      $("#rowed4").setColProp('GioKetThuc', {editrules: null});
                      $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
                      $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);

                  }else{
                      $("#rowed4").setColProp('GioBatDau', {editrules:{custom: true, custom_func: function(value, colName) {
                         var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                         return TimeCheck(id_row);
                     }}
                 });
                      $("#rowed4").setColProp('GioKetThuc', {editrules:{custom: true, custom_func: function(value, colName) {
                         var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                         return TimeCheck(id_row);
                     }}
                 });
                      $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
                      $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
                  }
                  break;
              }
          }
      },
      caption: ""
  });
$("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
 window.y=0;
 $("#prowed4 .ui-icon-pencil").click();
} } );
        $("#rowed4").jqGrid('navGrid', "#prowed4", {add: false, edit: false, del: true, search: false, closeAfterEdit: true, clearAfterAdd: true, refreshstate: 'current', reloadAfterSubmit: true}, //options
        {}, // edit options
        {}, // add options
        {reloadAfterSubmit: true, url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&oper=del&ac=tinhlaicong'}, // del options
        {height: 'auto', width: 'auto'} // search options
        );
        $("#rowed4").jqGrid('inlineNav', '#prowed4', {add: true, addtext: '', edittext: '', edit: true, closeOnEscape: true,
            addParams: {
                keys: true,
                position: "last",
                mtype: 'post',
                addRowParams: {
                    keys: true,
                    oneditfunc: function(rowId) {
                      ischamconglich1 = window.ischamconglich.split(";");
                      chamconglich1= window.chamconglich.split(";");
                      $("#"+rowId +"_TenLoaiLich" ).bind('change keyup', function(e) {
                         TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
                         for(i=0;i<=chamconglich1.length-1;i++){
                            chamconglich2 = chamconglich1[i].split(":");
                            ischamconglich2 = ischamconglich1[i].split(":");
                            if (chamconglich2[0]===TenLich){
                               if(ischamconglich2[1]==1){
                                  $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
                              }else{
                                  $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
                              }
                              if(chamconglich2[1]==0){
                                  $("#rowed4").setColProp('GioBatDau', {editrules: null});
                                  $("#rowed4").setColProp('GioKetThuc', {editrules: null});
                                  $("#rowed4 #"+rowId+"_GioBatDau").val("");
                                  $("#rowed4 #"+rowId+"_GioKetThuc").val("");
                                  $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
                                  $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);
                                  if((e.keyCode==13 || e.keyCode ==9 )){
                                     if(e.shiftKey) {
                                     }else{
                                         $("#rowed4 #"+rowId+"_Id_NhanVien").focus();
                                     }
                                 }
                             }else{
                              $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
                              $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
                                 var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                                 return TimeCheck(id_row);
                             }}
                         });
                              $("#rowed4 #"+rowId+"_GioBatDau").val("00:00");
                              $("#rowed4 #"+rowId+"_GioKetThuc").val("00:00");
                              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
                              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
                              if((e.keyCode==13 || e.keyCode ==9 )){
                                 if(e.shiftKey) {
                                 }else{
                                     $("#rowed4 #"+rowId+"_GioBatDau").focus();
                                 }
                             }
                         }
                         break;
                     }
                 }
							//$('#'+current_rowed6).removeClass("ui-state-highlight");


						});
$("#rowed4").jqGrid('unbindKeys');
$('#' + rowId + '_GioBatDau').focus();
$('#rowed4 #'+rowId+"_GioBatDau").css("box-shadow", "0px 0px 4px 2px #208ac8")
$("textarea,select,input,a").focus(function() {
  $(this).css("box-shadow", "0px 0px 4px 2px #208ac8")
});
$("textarea,select,input,a").focusout(function() {
  $(this).css("box-shadow", "");
});
jwerty.key('tab', false);
},
aftersavefunc: function(rowId, response, lastsel) {
 if (response.responseText == 1) {
 } else {
     $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
      $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
      $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
         var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
         return TimeCheck(id_row);
     }}
 });
      window.y=0;
      $("#prowed4 .ui-icon-pencil").click();
  } } );
     setTimeout(function(){
       $("#prowed4 .ui-icon-plus").click();
   },200);
     $("#rowed4").focus();
     tooltip_message("Lưu dữ liệu thành công");
	//$("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donsuco&fromdate=<?= $_GET["fromdate"] ?>&todate=<?= $_GET["todate"] ?>'}).trigger('reloadGrid');
	$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich1&q=2&idphong=' + window.n_row + '&from=' + window.n_colName + '&idnhanvien=' + window.n_rowID}).trigger('reloadGrid');
	 $("#rowed4").trigger("reloadGrid");
     temp = String(response.responseText).split(";");
     window.lastsel = $.trim(temp[1]);
 }
},
afterrestorefunc: function(id) {
  if (isNaN(id)){
     $('#rowed4 #'+id).focus()
     $('#rowed4').jqGrid('setSelection',id);
 }
 $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
  window.y=0;
  $("#prowed4 .ui-icon-pencil").click();
} } );
 setTimeout(function(){
   $("#prowed4 .ui-icon-plus").click();
},200);

 $("#rowed4").focus();
 $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
 $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
     var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
     return TimeCheck(id_row);
 }}
});
 window.lastsel = -1;

 var id_rowed4=$('#rowed4').jqGrid('getDataIDs');
 setTimeout(function(){$("#rowed4").jqGrid('setSelection', id_rowed4[id_rowed4.length-2],true);$("#prowed4 .ui-icon-pencil").click();},300);


},
}
},
editParams: {
    keys: true,
    oneditfunc: function(rowId) {
      ischamconglich1 = window.ischamconglich.split(";");
      chamconglich1= window.chamconglich.split(";");
      TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
      for(i=0;i<=chamconglich1.length-1;i++){
        chamconglich2 = chamconglich1[i].split(":");
        ischamconglich2 = ischamconglich1[i].split(":");
        if (chamconglich2[0]===TenLich){
           if(ischamconglich2[1]==1){
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
          }else{
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
          }
          if(chamconglich2[1]==0){
              $("#rowed4").setColProp('GioBatDau', {editrules: null});
              $("#rowed4").setColProp('GioKetThuc', {editrules: null});
              $("#rowed4 #"+rowId+"_GioBatDau").val("");
              $("#rowed4 #"+rowId+"_GioKetThuc").val("");
              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);
              $('#' + rowId + '_TenLoaiLich').focus();
              $('#rowed4 #'+rowId+"_TenLoaiLich").css("box-shadow", "0px 0px 4px 2px #208ac8");
          }else{
              $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
              $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
                 var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
                 return TimeCheck(id_row);
             }}
         });
              if($("#rowed4 #"+rowId+"_GioBatDau").val()==""){
                  $("#rowed4 #"+rowId+"_GioBatDau").val("00:00");
                  $("#rowed4 #"+rowId+"_GioKetThuc").val("00:00");
              }
              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
              $('#' + rowId + '_GioBatDau').focus();
              $('#rowed4 #'+rowId+"_GioBatDau").css("box-shadow", "0px 0px 4px 2px #208ac8");
          }
          break;
      }
  }
  $("#"+rowId +"_TenLoaiLich" ).bind('change keyup', function(e) {
     TenLich =$("#rowed4 #"+rowId+"_TenLoaiLich").val();
     for(i=0;i<=chamconglich1.length-1;i++){
        chamconglich2 = chamconglich1[i].split(":");
        ischamconglich2 = ischamconglich1[i].split(":");
        if (chamconglich2[0]===TenLich){
           if(ischamconglich2[1]==1){
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",true);
          }else{
              $("#rowed4 #"+rowId+"_IsChamCong").prop("checked",false);
          }
          if(chamconglich2[1]==0){
              $("#rowed4").setColProp('GioBatDau', {editrules: null});
              $("#rowed4").setColProp('GioKetThuc', {editrules: null});
              $("#rowed4 #"+rowId+"_GioBatDau").val("");
              $("#rowed4 #"+rowId+"_GioKetThuc").val("");
              $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', true);
              $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', true);
              if((e.keyCode==13 || e.keyCode ==9 )&&window.y>0){
                 if(e.shiftKey) {
                 }else{
                     $("#rowed4 #"+rowId+"_Id_NhanVien").focus();
                 }
             }else{
                 y++;
             }
         }else{
          $("#rowed4").setColProp('GioBatDau', {editrules:{custom: true, custom_func: function(value, colName) {
             var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
             return TimeCheck(id_row);
         }}
     });
          $("#rowed4").setColProp('GioKetThuc', {editrules:{custom: true, custom_func: function(value, colName) {
             var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
             return TimeCheck(id_row);
         }}
     });
          if($("#rowed4 #"+rowId+"_GioBatDau").val()==""){
              $("#rowed4 #"+rowId+"_GioBatDau").val("00:00");
              $("#rowed4 #"+rowId+"_GioKetThuc").val("00:00");
          }
          $("#rowed4 #"+rowId+"_GioBatDau").prop('disabled', false);
          $("#rowed4 #"+rowId+"_GioKetThuc").prop('disabled', false);
          if((e.keyCode==13 || e.keyCode ==9 )&&window.y>0){
             if(e.shiftKey) {
             }else{
                 $("#rowed4 #"+rowId+"_GioBatDau").focus();
             }
         }else{
             y++;
         }
     }
     break;
 }
}
});
$("#rowed4").jqGrid('unbindKeys');
$("textarea,select,input,a").focus(function() {
    $(this).css("box-shadow", "0px 0px 4px 2px #208ac8")
});
$("textarea,select,input,a").focusout(function() {
  $(this).css("box-shadow", "");
});
jwerty.key('tab', false);
},
aftersavefunc: function(rowId, response) {

 $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
     window.y=0;
     $("#prowed4 .ui-icon-pencil").click();
 } } );
 setTimeout(function(){
   $("#prowed4 .ui-icon-plus").click();
},200);
 $("#rowed4").focus();
 $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
 $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
     var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
     return TimeCheck(id_row);
 }}
});
 tooltip_message("Sửa dữ liệu thành công");
// $("#rowed3").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_donsuco&fromdate=<?= $_GET["fromdate"] ?>&todate=<?= $_GET["todate"] ?>'}).trigger('reloadGrid');
 $("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich1&q=2&idphong=' + window.n_row + '&from=' + window.n_colName + '&idnhanvien=' + window.n_rowID}).trigger('reloadGrid');
 $("#rowed4").trigger("reloadGrid");
	//alert(getCurrPos());
	var id_rowed4=$('#rowed4').jqGrid('getDataIDs');
	for(var i=0;i<=id_rowed4.length-1;i++){
		if(id_rowed4[i]==rowId){
			if(i==id_rowed4.length-1){

				setTimeout(function(){$("#prowed4 .ui-icon-plus").click();},300);
				break;
			}else{
			   var ida=(id_rowed4[i+1]);
			   setTimeout(function(){$("#rowed4").jqGrid('setSelection', ida,true);$("#prowed4 .ui-icon-pencil").click();},300);

			   break; }
		   }
	   }
	   window.lastsel = rowId;

   },
   afterrestorefunc: function(rowId) {
	   $("#rowed4").jqGrid('bindKeys', {"onEnter":function( rowid ) {
		   window.y=0;
		   $("#prowed4 .ui-icon-pencil").click();
	   } } );
	   setTimeout(function(){
		   $("#prowed4 .ui-icon-plus").click();
	   },200);
	   $("#rowed4").focus();
	   $("#rowed4").setColProp('GioBatDau', {editrules:{required: true}});
	   $("#rowed4").setColProp('GioKetThuc', {editrules:{required: true,custom: true, custom_func: function(value, colName) {
		 var id_row = $('#rowed4').jqGrid('getGridParam', 'selrow')
		 return TimeCheck(id_row);
	 }}
 });

	   window.lastsel = -1;
   }
}
});

$("#rowed4").jqGrid('navButtonAdd', '#prowed4', {caption: "Duyệt lịch", buttonicon: ' ui-icon-check',id : 'duyet_lich',
            onClickButton: function() {
				var cf=confirm("Bạn chắc chắn muốn duyệt?");
				if(cf==true){
					//window.n_id_phongban
					//window.n_Ngayxayrasuco
					//window.n_Id_nhanvien
					//window.n_LichYeuCau
					var id_rowed4=$('#rowed4').jqGrid('getDataIDs');
					var del_lich=new Array();
					for(var i=0;i<=id_rowed4.length-1;i++){
						del_lich.push(id_rowed4[i]);
					}
			
			
					$.ajax({
						type: 'POST',
						async : false,
						url: 'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller1&oper=duyetlich&ac=tinhlaicong&hienmaloi=a',
						data: {id_nhanvien:window.n_Id_nhanvien
								,id_phongban:window.n_id_phongban
								,ngay:window.n_Ngayxayrasuco
								,lichyeucau:window.n_LichYeuCau_Send
								,del_lich:del_lich
						},
						success: function(data, status, xhr){
							tooltip_message("Lưu dữ liệu thành công");
							reloadrowed4();
						}
					});
				}else{
					alert("Sao lại không");
				}
            },
            title: "Duyệt lịch",
            position: "first"
    });

}  


 function  loadphongban() {
      window.ischamconglich = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiLich&id=ID_LoaiLich&name=IsChamCong', async: false}).responseText;
      window.chamconglich = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_LoaiLich&id=ID_LoaiLich&name=KieuLich', async: false}).responseText;
      window.phongban2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=IsPhongChuyenMon= 1 &status=0&tables=DM_PhongBan&id=ID_PhongBan&name=TenPhongBan', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục phòng ban');
    }}).responseText;
      window.tenloailich1 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option&action=index&term=&status=2&tables=DM_loailich&id=ID_loailich&name=Tenloailich', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục tên loại lịch');
    }}).responseText;
      window.nickname2 = $.ajax({url: 'pages.php?module=web_services&function=get_auto_edit_option_byid&action=index&term=ID_PhongBan='+window.n_id_phongban + '&status=2&tables=DM_NhanVien&id=ID_NhanVien&name=NickName', async: false, success: function(data, result) {
        if (!result)
            alert('Không load được danh mục phòng ban');
    }}).responseText;

      $("#rowed4").setColProp('ID_PhongBan', {editoptions: {value: phongban2}});
      $("#rowed4").setColProp('TenLoaiLich', {editoptions: {value: tenloailich1}});
      $("#rowed4").setColProp('Id_NhanVien', {editoptions: {value: nickname2}});
  } 
  
  
  
  
  function TimeCheck(id) {
        //var ids=parseInt(id)
        if (isNaN(id)) {
            oper = "add";
        } else {
            oper = "edit";
        }

        var GioBatDau = $('#' + id + '_GioBatDau');
        var GioKetThuc = $('#' + id + '_GioKetThuc');
        // var b=GioKetThuc.timeEntry('getTime')
        var BatDau = GioBatDau.timeEntry('getTime');
        var KetThuc = GioKetThuc.timeEntry('getTime');
        //if(KetThuc=BatDau){
        //return [false,KetThuc];}
        //var data = grid.jqGrid('getGridParam', 'savedRow');
        var hieu = BatDau - KetThuc
        //danh dau focus sau khi tat dialog
        TenLoaiLich = $('#' + id + '_TenLoaiLich').val();
        ngay = $('#' + id + '_ngay').val();
        GioBatDau1 = GioBatDau.val();
        GioKetThuc1 = GioKetThuc.val();
        Id_NhanVien = $('#' + id + '_Id_NhanVien').val();
        window.id_rowed4 = $('#' + id + '_GioBatDau');
        ngay = ngay.split("-").reverse().join("-")
        postData = '{"id":"' + id + '","TenLoaiLich":' + TenLoaiLich + ',"ngay":"' + ngay + '","GioBatDau1":"' + GioBatDau1 +
        '","GioKetThuc1":"' + GioKetThuc1 + '","Id_NhanVien":' + Id_NhanVien + '}'
        //alert (data);
        dataToSend = jQuery.parseJSON(postData)
        if (hieu >= 0) {
            //chuoi="Giờ Bắt Đầu Không Được Lón Hơn Hoặc Bằng Giờ Kết Thúc"
            //erro =false;
			//window.id_focus =id+"_GioBatDau"
            return [false, "Giờ Bắt Đầu Không Được Lớn Hơn Hoặc Bằng Giờ Kết Thúc","GioBatDau"]

        }else{
			return [true, ""]
   		}
}

function save_func(){
  $("#prowed4 .ui-icon-disk").click();
}

function reloadrowed4(){
	$("#rowed4").jqGrid('setGridParam',{datatype: 'json',url:'pages.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_lich1&q=2&idphong=' + window.n_row + '&from=' + window.n_colName + '&idnhanvien=' + window.n_rowID}).trigger('reloadGrid');// chua dung
}
</script>