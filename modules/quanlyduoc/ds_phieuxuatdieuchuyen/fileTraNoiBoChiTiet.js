var saveCallBackPhieuNhapTraLaiChiTiet = a => {
  tooltip_message('Đã lưu');
  gridPhieuNhapTraLaiChiTiet.webservice({
    data: dataChiTietPhieuNhapChiTiet(),
    store_name: storeNameChiTietPhieuNhapChiTiet
  });
};
var dialogOptionChiTiet = {
  isWebService: true,
  column: 1,
  saveCallBack: saveCallBackPhieuNhapTraLaiChiTiet,
  tableName: tableNamePhieuNhapTraLaiChiTiet,
  idName: idNamePhieuNhapTraLaiChiTiet,
  Array: [
    {
      name: 'TenThuoc',
      id: 'TenThuoc',
      label: 'Tên thuốc',
      type: 'disabled',
      isAdd: 0,
      isEdit: 0,
      validate: 'require'
    },
    {
      name: 'SoLuong',
      type: 'number',
      id: 'SoLuong',
      label: 'Số lượng',
      isAdd: 1,
      isEdit: 1,
      validate: 'require'
    },
    {
      name: 'ID_PhieuTrungGian',
      id: 'ID_PhieuTrungGian',
      label: 'ID_PhieuTrungGian',
      type: 'hidden',
      isAdd: 1,
      isEdit: 0
    },
    {
      name: 'ID_XuatKhoChiTiet',
      id: 'ID_XuatKhoChiTiet',
      label: 'ID_XuatKhoChiTiet',
      type: 'hidden',
      isAdd: 1,
      isEdit: 0
    },
    {
      name: 'ID_Thuoc',
      id: 'ID_Thuoc',
      label: 'Tên thuốc',
      type: 'hidden',
      isAdd: 1,
      isEdit: 0
    },
    {
      name: 'oper',
      id: 'oper',
      label: 'oper',
      type: 'hidden',
      defaultValue: 'add',
      isAdd: 1,
      isEdit: 1
    },
    {
      name: 'ID_PhieuChiTiet',
      id: 'ID_PhieuChiTiet',
      label: 'ID_PhieuChiTiet',
      type: 'hidden',
      isAdd: 0,
      isEdit: 1
    }
  ]
};
dialogPhieuNhapTraLaiChiTiet = new creatFormDialog(urlServiceController, dialogOptionChiTiet);
dialogPhieuNhapTraLaiChiTiet.saveButton.on('before-click', function() {
  var DieuKien = ['IsSoLuongLonHonSoLuongXuat'];
  var DauVao;
  if ($(`#${dialogPhieuNhapTraLaiChiTiet.getUid()}_oper`).val() == 'add') {
    DauVao = {
      SoLuongThuoc: $(`#${dialogPhieuNhapTraLaiChiTiet.getUid()}_SoLuong`).val(),
      ID_XuatKhoChiTiet: $(`#${dialogPhieuNhapTraLaiChiTiet.getUid()}_ID_XuatKhoChiTiet`).val(),
      ID_PhieuChiTiet: 0
    };
  } else {
    DauVao = {
      SoLuongThuoc: $(`#${dialogPhieuNhapTraLaiChiTiet.getUid()}_SoLuong`).val(),
      ID_XuatKhoChiTiet: $(`#${dialogPhieuNhapTraLaiChiTiet.getUid()}_ID_XuatKhoChiTiet`).val(),
      ID_PhieuChiTiet: $(`#${dialogPhieuNhapTraLaiChiTiet.getUid()}_ID_PhieuChiTiet`).val()
    };
  }
  QuanLyDieuKienUpdate(DieuKien, DauVao, {}).then(function(data) {});
});
$('#tranoibo').click(function(e) {
  if (!gridPhieuNhapTraLaiChiTiet) {
    var gridOptions = {
      enableCellNavigation: true,
      showHeaderRow: true,
      headerRowHeight: 30,
      explicitInitialization: true,
      forceFitColumns: true,
      multiColumnSort: true,
      footer: false
      // frozenColumn: 1
    };
    var gridColumns = [
      { name: 'ID Thuoc', id: 'ID_Thuoc', field: 'ID_Thuoc', width: 60, sortable: true },
      { name: 'Tên thuốc', id: 'TenGoc', field: 'TenGoc', width: 200, sortable: true },
      { name: 'Số lượng', id: 'SoLuong', field: 'SoLuong', width: 50, sortable: true, formatter: Slick.Formatters.Number },
      { name: 'ĐVT', id: 'TenDonViTinh', field: 'TenDonViTinh', width: 50, sortable: true },
      { name: 'ID Phiếu N.Bộ', id: 'ID_PhieuXuatNoiBo', field: 'ID_PhieuXuatNoiBo', width: 70, sortable: true },
      { name: 'Số lượng nhận', id: 'SoLuongXuat', field: 'SoLuongXuat', width: 70, sortable: true }
    ];
    gridPhieuNhapTraLaiChiTiet = new createSlickGrid('#gridPhieuNhapTraNoiBoChiTiet', '#pagerPhieuNhapTraNoiBoChiTiet', gridOptions, gridColumns);
    var option = {
      grid: gridPhieuNhapTraLaiChiTiet,
      dialog: dialogPhieuNhapTraLaiChiTiet,
      storeName: storeNameChiTietPhieuNhapChiTiet,
      data: dataChiTietPhieuNhapChiTiet
    };
    var tam = new initSlickGrid(option);
    // tam.addButton('btnThemMoiTraNoiBoChiTiet');
    tam.delButton('btnXoaTraNoiBoChiTiet');

    $('#btnXoaTraNoiBoChiTiet').on('before-click', function() {
      var DieuKien = ['IsChotPhieuTrungGian', 'IsDuyetPhieuTrungGian'];
      QuanLyDieuKienUpdate(DieuKien, { ID_PhieuTrungGian: gridPhieuNhapTraLai.getSelectedData().ID_PhieuTrungGian }, {}).then(function(data) {});
    });
    $('#btnThemMoiTraNoiBoChiTiet').click(() => {
      if (!gridPhieuNhapTraLai.getSelectedData()) {
        alert('Chọn một dòng để thêm mới');
        return;
      }
      var DieuKien = ['IsChotPhieuTrungGian', 'IsDuyetPhieuTrungGian'];
      QuanLyDieuKienUpdate(DieuKien, { ID_PhieuTrungGian: gridPhieuNhapTraLai.getSelectedData().ID_PhieuTrungGian }, {}).then(function(data) {});
      Swal.fire({
        html: `Nhập ID phiếu nội bộ(Xem ở P.xuất N.bộ): <input type='text' style="width: 300px;" id='maphieunhap'/></td>`,
        heightAuto: false,
        preConfirm: () => {
          return [document.getElementById('maphieunhap').value];
        }
      }).then(result => {
        fetchData({ store_name: 'GD2_PhieuXuatNoiBo_ByIDPhieu', data: [result.value[0]] }, urlSlickGrid).then(function(data) {
          data = jQuery.parseJSON(data);
          console.log(data);
          if (data[0].Id_PhongBan != gridPhieuNhapTraLai.getSelectedData().ID_PhongBan) {
            alert('Khoa phòng của phiếu không trùng !');
            return;
          }
          if (!dialogChiTietPhieuNhap) {
            var options = {
              enableCellNavigation: true,
              showHeaderRow: true,
              explicitInitialization: true,
              forceFitColumns: true,
              multiColumnSort: true,
              fullWidthRows: true,
              footer: false
            };
            columns = [
              { name: 'ID Thuoc', id: 'ID_Thuoc', field: 'ID_Thuoc', width: 50, sortable: true },
              { name: 'Tên thuốc', id: 'TenGoc', field: 'TenGoc', width: 200, sortable: true },
              { name: 'Ngày hết hạn', id: 'NgayHetHan', field: 'NgayHetHan', width: 80, sortable: true, formatter: Slick.Formatters.FullDate },
              { name: 'Số lô', id: 'SoLoNhaSanXuat', field: 'SoLoNhaSanXuat', width: 100, sortable: true },
              { name: 'Số lượng', id: 'SoLuong', field: 'SoLuong', width: 80, sortable: true, formatter: Slick.Formatters.Number },
              { name: 'Đơn giá', id: 'DonGia', field: 'DonGia', width: 80, sortable: true, formatter: Slick.Formatters.Number },
              { name: '', id: 'ID_XuatKhoChiTiet', field: 'ID_XuatKhoChiTiet', width: 80, sortable: true, formatter: XML5 }
            ];
            dialogChiTietPhieuNhap = new createDialogSlickGrid({ width: 800, height: 400 }, options, columns);
          }
          dialogChiTietPhieuNhap.dialog.dialog('open');
          dialogChiTietPhieuNhap.grid.webservice({
            store_name: 'GD2_PhieuXuatNoiBoGetByIDPhieu',
            data: [result.value[0]]
          });
        });
      });
    });
  }
});
