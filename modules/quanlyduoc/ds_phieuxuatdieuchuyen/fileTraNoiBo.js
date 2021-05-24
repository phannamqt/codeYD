var saveCallBackPhieuNhapTraLai = a => {
  tooltip_message("Đã lưu");
  gridPhieuNhapTraLai.webservice({
    store_name: storeNameChiTietPhieuNhap,
    data: dataChiTietPhieuNhap()
  });
};
$("#btnChotTraNoiBo")
  // .button()
  .click(function(e) {
    if (!gridPhieuNhapTraLai.getSelectedData()) {
      alert("Chọn một dòng để thêm mới");
    }
    var DieuKien = ["IsChotPhieuTrungGian", "IsDuyetPhieuTrungGian"];
    QuanLyDieuKienUpdate(
      DieuKien,
      {
        ID_PhieuTrungGian: gridPhieuNhapTraLai.getSelectedData()
          .ID_PhieuTrungGian
      },
      {}
    ).then(function(data) {});
    Swal.fire({
      title: "Bạn có chắn chắn muốn chốt phiếu",
      icon: "warning",
      width: 600,
      showCancelButton: true,
      confirmButtonText: "Yes",
      cancelButtonText: "No,",
      heightAuto: false,
      preConfirm: () => {
        var rowData = gridPhieuNhapTraLai.getSelectedData();
        var local = {
          oper: "edit",
          tableName: tableNamePhieuNhapTraLai,
          idName: idNamePhieuNhapTraLai,
          ID_PhieuTrungGian: rowData.ID_PhieuTrungGian,
          ISChotPhieu: 1,
          ID_NguoiChot: window.id_user,
          NgayChot: "__getdate"
        };
        return fetchData(local, urlServiceController)
          .then(response => {
            Swal.fire({
              title: "Thành công!",
              icon: "success",
              showConfirmButton: false,
              heightAuto: false,
              timer: 1000
            }).then(result => {
              saveCallBackPhieuNhapTraLai();
            });
          })
          .catch(error => {
            Swal.showValidationMessage(`Request failed: ${error}`);
          });
      },
      allowOutsideClick: () => !Swal.isLoading()
    }).then(result => {});
  });
$("#btnXoaTraNoiBo").on("before-click", () => {
  var DieuKien = ["IsChotPhieuTrungGian", "IsDuyetPhieuTrungGian"];
  QuanLyDieuKienUpdate(
    DieuKien,
    {
      ID_PhieuTrungGian: gridPhieuNhapTraLai.getSelectedData().ID_PhieuTrungGian
    },
    {}
  ).then(function(data) {});
});
var dialogOptionPhieuNhapTraLai = {
  isWebService: true,
  column: 1,
  saveCallBack: saveCallBackPhieuNhapTraLai,
  Dialog: {
    position: ["top", 20]
  },
  tableName: tableNamePhieuNhapTraLai,
  idName: idNamePhieuNhapTraLai,
  Array: [
    {
      name: "ID_PhongBan",
      id: "ID_PhongBan",
      label: "Tên phòng ban",
      type: "combobox",
      isAdd: 1,
      isEdit: 0,
      validate: "require",
      comboboxoption: FnComBoBox.PhongBan(),
      defaultValue: "99"
    },
    {
      name: "GhiChu",
      id: "GhiChu",
      label: "Ghi chú",
      type: "text",
      isAdd: 1,
      isEdit: 1
    },
    {
      name: "ID_LoaiPhieu",
      id: "ID_LoaiPhieu",
      label: "Loại nhập xuất",
      defaultValue: "99",
      type: "hidden",
      isAdd: 1,
      isEdit: 1,
      validate: "require"
    },
    {
      name: "ID_NguoiTao",
      id: "ID_NguoiTao",
      label: "ID_NguoiTao",
      type: "hidden",
      defaultValue: id_user,
      isAdd: 1,
      isEdit: 0
    },
    {
      name: "oper",
      id: "oper",
      label: "oper",
      type: "hidden",
      defaultValue: "add",
      isAdd: 1,
      isEdit: 1
    },
    {
      name: "ID_PhieuTrungGian",
      id: "ID_PhieuTrungGian",
      label: "ID_PhieuTrungGian",
      type: "hidden",
      isAdd: 0,
      isEdit: 1
    },
    {
      name: "ID_KhoNhap",
      id: "ID_KhoNhap",
      label: "ID_KhoNhap",
      type: "hidden",
      defaultValue: 1,
      isAdd: 1,
      isEdit: 1
    }
  ]
};

dialogPhieuNhapTraLai = new creatFormDialog(
  urlServiceController,
  dialogOptionPhieuNhapTraLai
);
$("#tranoibo").click(function(e) {
  window.n_action = 3;
  //alert();
  $("#panel_main").hide();
  $("#panel_main1").show();
  if (!gridPhieuNhapTraLai) {
    var gridOptions = {
      enableCellNavigation: true,
      showHeaderRow: true,
      headerRowHeight: 30,
      explicitInitialization: true,
      forceFitColumns: false,
      multiColumnSort: true,
      footer: false,
      frozenColumn: 2
    };
    var gridColumns = [
      {
        name: "ID Phiếu",
        id: "ID_PhieuTrungGian",
        field: "ID_PhieuTrungGian",
        width: 50,
        sortable: true
      },
      {
        name: "Ngày tạo",
        id: "NgayGioTao",
        field: "NgayGioTao",
        width: 150,
        sortable: true,
        formatter: Slick.Formatters.FullDateTime
      },
      {
        name: "Tên phòng ban",
        id: "TenPhongBan",
        field: "TenPhongBan",
        width: 150,
        sortable: true
      },
      {
        name: "Ghi chú",
        id: "GhiChu",
        field: "GhiChu",
        width: 200,
        sortable: true
      },
      {
        name: "Kho nhập",
        id: "TenKhoNhap",
        field: "TenKhoNhap",
        width: 100,
        sortable: true
      },
      {
        name: "Loại",
        id: "Ten_LoaiNhapXuat",
        field: "Ten_LoaiNhapXuat",
        width: 200,
        sortable: true
      },
      {
        name: "Người tạo",
        id: "TenNguoiTao",
        field: "TenNguoiTao",
        width: 100,
        sortable: true
      },
      {
        name: "Người chốt",
        id: "NguoiChot",
        field: "NguoiChot",
        width: 100,
        sortable: true
      },
      {
        name: "Người duyệt",
        id: "NguoiDuyet",
        field: "NguoiDuyet",
        width: 100,
        sortable: true
      }
    ];
    gridPhieuNhapTraLai = new createSlickGrid(
      "#gridPhieuNhapTraNoiBo",
      "#pagerPhieuNhapTraNoiBo",
      gridOptions,
      gridColumns
    );
    gridPhieuNhapTraLai.grid.onClick.subscribe((e, args) => {
      gridPhieuNhapTraLaiChiTiet.webservice({
        store_name: storeNameChiTietPhieuNhapChiTiet,
        data: dataChiTietPhieuNhapChiTiet()
      });
      window.bnchot = gridPhieuNhapTraLai.getSelectedData().NguoiChot;
      window.bnduyet = gridPhieuNhapTraLai.getSelectedData().NguoiDuyet;
      window.bidxuatra = gridPhieuNhapTraLai.getSelectedData().ID_PhieuTrungGian;
    });
    var option = {
      grid: gridPhieuNhapTraLai,
      dialog: dialogPhieuNhapTraLai,
      storeName: storeNameChiTietPhieuNhap,
      data: dataChiTietPhieuNhap
    };

    var tam = new initSlickGrid(option);
    tam.addButton("btnThemMoiTraNoiBo");
    tam.delButton("btnXoaTraNoiBo");
  }
});
$("#xemin_xtnoibo").click(function(e) {
  //thảo bổ sung
  console.log(window.n_action);
  if (window.bnchot != null) {
    $.cookie("in_status", "print_preview");
    if (window.n_action == 3) {
      if (window.bnduyet == null) {
        dialog_report(
          "Xem trước khi in",
          90,
          90,
          "u78787878975f",
          `resource.php?module=report&view=quanlyduoc&action=phieuxuattranoibo&idphieu=${window.bidxuatra}&type=report&id_form=10`,
          "PhieuLinhThuoc"
        );
      } else {
        dialog_report(
          "Xem trước khi in",
          90,
          90,
          "u78787878975f",
          `resource.php?module=report&view=quanlyduoc&action=phieuxuattranoibo_daxuat&idphieu=${window.bidxuatra}&type=report&id_form=10`,
          "PhieuLinhThuoc"
        );
      }
    } else {
      alert("Đây không phải phiếu xuất trả nội bộ.");
    }
  } else {
    $("#noidungchotphieu").html("Phiếu này chưa chốt nên không thể in");
    $("#dialog-loichotphieu").dialog("open");
  }
});
// // var dialog;
// // var storeName = '';
// // var tableName = '';
// // var idName = '';

// // var saveCallBackChiTiet = a => {
// //   tooltip_message('Đã lưu');
// //   gridChiTiet.webservice({
// //     store_name: storeNameChiTiet,
// //     data: dataChiTiet()
// //   });
// // };
// // var dialogOptionChiTiet = {
// //   isWebService: true,
// //   column: 1,
// //   saveCallBack: saveCallBackChiTiet,
// //   Dialog: {
// //     position: ['top', 20]
// //   },
// //   tableName: tableNameChiTiet,
// //   idName: idNameChiTiet,
// //   Array: [
// //     {
// //       name: 'TenThuoc',
// //       id: 'TenThuoc',
// //       label: 'Tên thuốc',
// //       type: 'disabled',
// //       isAdd: 0,
// //       isEdit: 0,
// //       validate: 'require'
// //     },
// //     {
// //       name: 'SoLuong',
// //       type: 'number',
// //       id: 'SoLuong',
// //       label: 'Số lượng',
// //       isAdd: 1,
// //       isEdit: 1,
// //       validate: 'require'
// //     },
// //     {
// //       name: 'ID_XuatKhoChiTiet',
// //       id: 'ID_XuatKhoChiTiet',
// //       label: 'ID_XuatKhoChiTiet',
// //       type: 'hidden',
// //       isAdd: 1,
// //       isEdit: 0
// //     },
// //     {
// //       name: 'ID_Thuoc',
// //       id: 'ID_Thuoc',
// //       label: 'Tên thuốc',
// //       type: 'hidden',
// //       isAdd: 1,
// //       isEdit: 0
// //     },
// //     {
// //       name: 'oper',
// //       id: 'oper',
// //       label: 'oper',
// //       type: 'hidden',
// //       defaultValue: 'add',
// //       isAdd: 1,
// //       isEdit: 1
// //     },
// //     {
// //       name: 'ID_PhieuChiTiet',
// //       id: 'ID_PhieuChiTiet',
// //       label: 'ID_PhieuChiTiet',
// //       type: 'hidden',
// //       isAdd: 0,
// //       isEdit: 1
// //     },
// //     {
// //       name: 'ID_PhieuTrungGian',
// //       id: 'ID_PhieuTrungGian',
// //       label: 'ID_PhieuTrungGian',
// //       type: 'hidden',
// //       isAdd: 1,
// //       isEdit: 0
// //     }
// //   ]
// // };
// // dialogChiTiet = new creatFormDialog(urlServiceController, dialogOptionChiTiet);
// // var gridOptionsChiTiet = {
// //   enableCellNavigation: true,
// //   showHeaderRow: true,
// //   // frozenColumn: 3,
// //   headerRowHeight: 30,
// //   explicitInitialization: true,
// //   forceFitColumns: true,
// //   multiColumnSort: true,
// //   footer: false,
// //   showTopPanel: false
// // };
// function create_grid3_1() {
//   $('#rowed55').jqGrid({
//     url: '',
//     datatype: 'json',
//     // colNames: [, 'Kho xuất', 'Kho nhập', 'Người tạo', 'Ngày tạo', 'Người duyệt xuất', 'Ngày duyệt xuất'],
//     colModel: [
//       {
//         name: 'ID_PhieuTrungGian',
//         index: 'ID_PhieuTrungGian',
//         search: true,
//         width: '5%',
//         editable: false,
//         align: 'left',
//         hidden: false,
//         label: 'Số phiếu'
//       },
//       {
//         name: 'KhoXuat',
//         index: 'KhoXuat',
//         search: true,
//         width: '8%',
//         editable: false,
//         align: 'left',
//         hidden: false,
//         label: 'Kho xuất'
//       }
//     ],
//     loadonce: true,
//     scroll: true,
//     modal: true,
//     rowNum: 3000,
//     pager: '#prowed55',
//     height: 100,
//     width: 100,
//     viewrecords: true,
//     ignoreCase: true,
//     shrinkToFit: true,
//     afterShowForm(formid) {},
//     onSelectRow(id) {
//       // $('#gbox_rowed6').hide();
//       // $('#gbox_rowed5').show();
//       // var dataRow = jQuery('#rowed44').jqGrid('getRowData', id);
//       // window.inphieuid = id;
//       // window.dangchonluoi = 2;
//       // window.maphieugop = dataRow.MaPhieuGop;
//       // if (window.n_action == 1) {
//       //   $('#tieude1').html('Chi tiết thuốc xuất nội bộ');
//       // } else {
//       //   $('#tieude1').html('Chi tiết thuốc xuất điều chuyển');
//       // }
//       // $('#rowed5')
//       //   .jqGrid('setGridParam', {
//       //     datatype: 'json',
//       //     url: `resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach_phieuxuatnoibochitiet&id_phieuxuatnoibo=${id}&maphieugop=${dataRow.MaPhieuGop}`
//       //   })
//       //   .trigger('reloadGrid');
//     },
//     ondblClickRow(rowId, rowIndex, columnIndex) {},
//     onselect(rowId, rowIndex, columnIndex) {},
//     caption: 'Ds phiếu xuất điều chuyển (Đã duyệt)'
//   });
//   $('#rowed55').jqGrid('filterToolbar', {
//     searchOperators: false,
//     searchOnEnter: false,
//     defaultSearch: 'bw'
//   });
//   $('#rowed55').jqGrid('navGrid', '#prowed55', {
//     add: false,
//     edit: false,
//     del: false,
//     search: false,
//     closeAfterEdit: true,
//     clearAfterAdd: true,
//     closeOnEscape: true
//   });
//   $('#rowed55').jqGrid('navButtonAdd', '#prowed55', {
//     caption: 'Thêm mới',
//     buttonicon: 'ui-icon-plus',
//     id: 'btnthemmoitranoibo',
//     onClickButton() {
//       dialogPhieuNhapTraLai.open();
//       console.log(dialogPhieuNhapTraLai);
//       if (iscreate == 0) {
//         setTimeout(() => {
//           dialogPhieuNhapTraLai.dialog.dialog('option', 'width', dialogPhieuNhapTraLai.dialog.outerWidth() + 50);
//         }, 100);
//         iscreate = 1;
//       }
//       // if (!dialogPhieuNhapTraNoiBo) {
//       //   dialogPhieuNhapTraNoiBo = $('<div>')
//       //     .append(
//       //       $('<div>')
//       //         .attr('id', 'gridTraNoiBo')
//       //         .attr('style', 'height:90%;width:90%')
//       //     )
//       //     .append(
//       //       $('<div>')
//       //         .append(
//       //           $('<button>')
//       //             .attr('id', 'btnThemMoiTraNoiBo')
//       //             .text('Thêm mới')
//       //         )
//       //         .append(
//       //           $('<button>')
//       //             .attr('id', 'btnXoaTraNoiBo')
//       //             .text('Xóa')
//       //         )
//       //     );
//       //   dialogPhieuNhapTraNoiBo.dialog({
//       //     modal: true,
//       //     show: false,
//       //     width: 1200,
//       //     height: 500,
//       //     autoOpen: false,
//       //     closeOnEscape: true,
//       //     close(ev, ui) {},
//       //     open(ev, ui) {}
//       //   });
//       //   var gridOptions = {
//       //     enableCellNavigation: true,
//       //     showHeaderRow: true,
//       //     headerRowHeight: 30,
//       //     explicitInitialization: true,
//       //     forceFitColumns: true,
//       //     multiColumnSort: true,
//       //     footer: false
//       //   };
//       //   var gridColumns = [
//       //     { name: 'TenNhomLuat', id: 'TenNhomLuat', field: 'TenNhomLuat', width: 20, sortable: true },
//       //     { name: 'Tên cảnh báo', id: 'TenCanhBao', field: 'TenCanhBao', width: 20, sortable: true },
//       //     { name: 'Mức độ', id: 'MucDo', field: 'MucDo', width: 20, sortable: true }
//       //   ];
//       //   var grid = new createSlickGrid('#gridTraNoiBo', '#pager', gridOptions, gridColumns);
//       // }
//       // dialogPhieuNhapTraNoiBo.dialog('open');
//       // // var option = {
//       // //   grid,
//       // //   dialog,
//       // //   storeName,
//       // //   data
//       // // };
//       // // var tam = new initSlickGrid(option);
//       // // tam.addButton('btnThemMoiTraNoiBo');
//       // // tam.delButton('btnXoaTraNoiBo');
//       // $('#btnThemMoiTraNoiBo').click(() => {
//       //   Swal.fire({
//       //     html: `Nhập ID phiếu nội bộ(Xem ở P.xuất N.bộ): <input type='text' style="width: 300px;" id='maphieunhap'/></td>`,
//       //     heightAuto: false,
//       //     preConfirm: () => {
//       //       return [document.getElementById('maphieunhap').value];
//       //     }
//       //   }).then(result => {
//       //     fetchData({ store_name: 'GD2_GetDSThuocByID_PhieuXuatNoiBo', data: [result.value[0]] }, urlSlickGrid).then(function(data) {
//       //       data = jQuery.parseJSON(data);
//       //       if (!dialogChiTietPhieuNhap) {
//       //         var options = {
//       //           enableCellNavigation: true,
//       //           showHeaderRow: true,
//       //           explicitInitialization: true,
//       //           forceFitColumns: true,
//       //           multiColumnSort: true,
//       //           fullWidthRows: true,
//       //           footer: false
//       //         };
//       //         columns = [
//       //           { name: 'ID Thuoc', id: 'ID_Thuoc', field: 'ID_Thuoc', width: 50, sortable: true },
//       //           { name: 'Tên thuốc', id: 'TenGoc', field: 'TenGoc', width: 200, sortable: true },
//       //           { name: 'Ngày hết hạn', id: 'NgayHetHan', field: 'NgayHetHan', width: 80, sortable: true, formatter: Slick.Formatters.FullDate },
//       //           { name: 'Số lô', id: 'SoLoNhaSanXuat', field: 'SoLoNhaSanXuat', width: 100, sortable: true },
//       //           { name: 'Số lượng', id: 'SoLuong', field: 'SoLuong', width: 80, sortable: true, formatter: Slick.Formatters.Number },
//       //           { name: 'Đơn giá', id: 'DonGia', field: 'DonGia', width: 80, sortable: true, formatter: Slick.Formatters.Number },
//       //           { name: '', id: 'ID_NhapKhoChiTiet', field: 'ID_NhapKhoChiTiet', width: 80, sortable: true, formatter: XML5 }
//       //         ];
//       //         dialogChiTietPhieuNhap = new createDialogSlickGrid({ width: 800, height: 400 }, options, columns);
//       //       }
//       //       dialogChiTietPhieuNhap.dialog.dialog('open');
//       //       dialogChiTietPhieuNhap.grid.webservice({
//       //         store_name: 'GD2_PhieuXuatNoiBoGetByIDPhieu',
//       //         data: [result.value[0]]
//       //       });
//       //     });
//       //   });
//       // });
//     },
//     title: 'Thêm mới',
//     position: 'first'
//   });
//   $('#rowed55').jqGrid('navButtonAdd', '#prowed55', {
//     caption: 'Duyệt phiếu',
//     buttonicon: 'ui-icon-check',
//     id: 'btnduyettranoibo',
//     onClickButton() {},
//     title: 'Duyệt phiếu',
//     position: 'last'
//   });
//   // thê mới phiếu

//   $('#rowed55').jqGrid('bindKeys', {});
// }
