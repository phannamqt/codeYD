var sql = require('mssql');
var custom = require('./custom');
var config = custom.config;
var mang='';
var thoigianReload=5000;// cu 15000
var chuoitrave = '';
var chuoi1 = '';
var count = 0;
var id_send=0;
var loai='';
var loctheogoinho=0;
loadingDanhSachCanLamSang ();

function loadingDanhSachCanLamSang () {	
	var connection = new sql.Connection(config, function(err) {
		if (err === null) {				
			var request = new sql.Request(connection);
			request.execute('GD2_LayDSXepHangCanLamSang_GroupXetNghiem_ByPhongVatLy', function(err, recordsets, returnValue) {
				if(err === undefined){
					mang = recordsets[0];					
					connection.close();
					setTimeout(function() {
						loadingDanhSachCanLamSang();
					}, thoigianReload);
				}else{
					connection.close();
					loadingDanhSachCanLamSang();
				}
			});
		}else{
			connection.close();
			loadingDanhSachCanLamSang();
		}
	});	
}


module.exports.dataDanhSachCanLamSang = function(data) {
	data=data.split("||");
	loai=data[0];
	id_send=data[1];
	if(data.length>=3){
		loctheogoinho=data[2];
	}else{
		loctheogoinho=0;
	}
	
	var recordsets = mang;
	chuoitrave = '';
	if (recordsets.length == 0) {
		chuoitrave = '{}||{}||{}||{}';		
	} else {
		dangcho = [];
		dangkham = [];
		daxong = [];
		var n1 = 0;
		var n2 = 0;
		var n3 = 0;
		var NgayGioLuuCache ='';
		var NgayGioHienTai ='';
		var giaychenhlech ='';
		var SoGiayConLai =0;
		for (var i = 0; i < recordsets.length; i++) {
			mangtam = recordsets[i];
			if (mangtam['nhomxephang'] == null) {
				mangtam['nhomxephang'] = 'a';
			}				
			var NgayGioHienTai = new Date();
			NgayGioHienTai.setHours(NgayGioHienTai.getHours() + 7);		

			if (mangtam['ID_TrangThai'] == 'DangCho' && ((loai=='all') || (loai=='phong' && mangtam['ID_PhongChuyenMon']==id_send) || (loai=='nhom' && mangtam['nhomxephang'].indexOf(id_send) > -1))
				&& (loctheogoinho==0 || (loctheogoinho==1 && mangtam["TrangThaiXepHang"]==3)) ) {
				dangcho[n1] = {
					id: mangtam['ID_Kham'],
					ID_Kham: mangtam["ID_Kham"],
					ID_LuotKham: mangtam["ID_LuotKham"],
					MaBenhNhan: mangtam["MaBenhNhan"],
					TenBenhNhan: mangtam["TenBenhNhan"],
					Tuoi: mangtam["Tuoi"],
					GioiTinh: mangtam["GioiTinh"],
					TenLoaiKham: mangtam["TenLoaiKham"],
					GioHenKham: mangtam["GioHenKham"],
					NgayGioTao: custom.formatHour(mangtam["NgayGioTao"]),
					TenBSChiDinh: mangtam["TenBSChiDinh"],
					GhiChu: mangtam["GhiChu"],
					GoiKham: mangtam["GoiKham"],
					NotesStatus: mangtam["NotesStatus"],
					ID_BenhNhan: mangtam["ID_BenhNhan"],
					ID_LoaiKham: mangtam["ID_LoaiKham"],
					LoaiDoiTuongKham: mangtam["LoaiDoiTuongKham"],
					IsDichVuCC: mangtam["IsDichVuCC"],
					SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"],
					ID_PhongChuyenMon: mangtam["ID_PhongChuyenMon"],
					ID_TrangThai: mangtam["ID_TrangThai"],
					TenTrangThai: mangtam["TenTrangThai"]
					,SoGiayConLai: mangtam["SoGiayConLai"]
					,NgayGioDuKienDen: mangtam["NgayGioDuKienDen"]
					,NgayGioLuuCache: mangtam["NgayGioLuuCache"]
					,TrangThaiXepHang: mangtam["TrangThaiXepHang"]
					,NgayGioHienTai: NgayGioHienTai
				};
				n1++;
			}
			if ((mangtam['ID_TrangThai'] == 'DangKham' || mangtam['ID_TrangThai'] == 'DaThucHien' || mangtam['ID_TrangThai'] == 'DaLayBenhPham') && ((loai=='all') || (loai=='phong' && mangtam['ID_PhongChuyenMon']==id_send) || (loai=='nhom' && mangtam['nhomxephang'].indexOf(id_send) > -1))) {
				dangkham[n2] = {
					id: mangtam["ID_Kham"],
					ID_Kham: mangtam["ID_Kham"],
					ID_LuotKham: mangtam["ID_LuotKham"],
					MaBenhNhan: mangtam["MaBenhNhan"],
					TenBenhNhan: mangtam["TenBenhNhan"],
					Tuoi: mangtam["Tuoi"],
					GioiTinh: mangtam["GioiTinh"],
					TenLoaiKham: mangtam["TenLoaiKham"],
					GioHenKham: mangtam["GioHenKham"],
					NgayGioTao: custom.formatHour(mangtam["NgayGioTao"]),
					TenBSChiDinh: mangtam["TenBSChiDinh"],
					GhiChu: mangtam["GhiChu"],
					GoiKham: mangtam["GoiKham"],
					NotesStatus: mangtam["NotesStatus"],
					ID_BenhNhan: mangtam["ID_BenhNhan"],
					ID_LoaiKham: mangtam["ID_LoaiKham"],
					LoaiDoiTuongKham: mangtam["LoaiDoiTuongKham"],
					IsDichVuCC: mangtam["IsDichVuCC"],
					SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"],
					ID_PhongChuyenMon: mangtam["ID_PhongChuyenMon"],
					ID_TrangThai: mangtam["ID_TrangThai"],
					TenTrangThai: mangtam["TenTrangThai"],
					NgayGioHenTraKQ: custom.formatDatetime(mangtam["NgayGioHenTraKQ"]),
					TenNguoiThucHien: mangtam["NguoiThucHien"],
					SoGiayConLai: mangtam["SoGiayConLai"],
					NgayGioDuKienDen: mangtam["NgayGioDuKienDen"],
					NgayGioLuuCache: mangtam["NgayGioLuuCache"]
					,TrangThaiXepHang: mangtam["TrangThaiXepHang"]
					,NgayGioHienTai: NgayGioHienTai
				};
				n2++;
			}
			if(mangtam["NgayGioKetThuc"] == null){
				mangtam["NgayGioKetThuc"]='';
			}
			if ((mangtam['ID_TrangThai'] == 'Xong')  && ((loai=='all') || (loai=='phong' && mangtam['ID_PhongChuyenMon']==id_send) || (loai=='nhom' && mangtam['nhomxephang'].indexOf(id_send) > -1))) {
				daxong[n3] = {
					id: mangtam["ID_Kham"],
					ID_Kham: mangtam["ID_Kham"],
					MaBenhNhan: mangtam["MaBenhNhan"],
					TenBenhNhan: mangtam["TenBenhNhan"],
					Tuoi: mangtam["Tuoi"],
					GioiTinh: mangtam["GioiTinh"],
					TenLoaiKham: mangtam["TenLoaiKham"],
					NgayGioKetThuc: mangtam["NgayGioKetThuc"],
					NgayGioTao: custom.formatHour(mangtam["NgayGioTao"]),
					ID_LoaiKham: mangtam["ID_LoaiKham"],
					ID_TrangThai: mangtam["ID_TrangThai"],
					ID_BenhNhan: mangtam["ID_BenhNhan"],
					ID_LuotKham: mangtam["ID_LuotKham"],
					IsDichVuCC: mangtam["IsDichVuCC"],
					SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"]
					,ID_PhongChuyenMon: mangtam["ID_PhongChuyenMon"]
					,ID_TrangThai: mangtam["ID_TrangThai"]
					,TenTrangThai: mangtam["TenTrangThai"]
					,SoGiayConLai: mangtam["SoGiayConLai"],
					NgayGioDuKienDen: mangtam["NgayGioDuKienDen"],
					NgayGioLuuCache: mangtam["NgayGioLuuCache"]
					,TrangThaiXepHang: mangtam["TrangThaiXepHang"]
					,NgayGioHienTai: NgayGioHienTai
				};
				n3++;
			}         
		}
		chuoitrave = JSON.stringify(dangcho) + "||" + JSON.stringify(dangkham) + "||" + JSON.stringify(daxong);
	}
	return chuoitrave;
}

exports.vantayCanLamSang = function(data) {
	
	var recordsets = mang;
	var mangVanTay = [];
	for (index = 0; index < recordsets.length; ++index) {
	    if(recordsets[index]['ID_BenhNhan']==data.ID_BenhNhan){
	    	for (y = 0; y < data.FormCanLamSang.length; ++y) {
			    if(data.FormCanLamSang[y]['TenCanLamSang']==recordsets[index]['TenForm']){	

			    	if(mangVanTay.length==0){
			    		mangVanTay.push({
				    			 'TenCanLamSang':recordsets[index]['TenForm']
				    			,'ID_Kham':recordsets[index]['ID_Kham']
				    			,'NgayGioTao':custom.formatHour(recordsets[index]['NgayGioTao'])
				    			,'ID_LoaiKham':recordsets[index]['ID_LoaiKham']
				    			,'ID_TrangThai':recordsets[index]['ID_TrangThai']
				    			,'ID_BenhNhan':recordsets[index]['ID_BenhNhan']			    			
				    			,'TenBenhNhan':recordsets[index]['TenBenhNhan']
				    			,'TenNhom':recordsets[index]['TenNhom']
				    		});
			    	}else{
				    	for (var i = mangVanTay.length - 1; i >= 0; i--) {
				    		if(data.FormCanLamSang[y]['TenCanLamSang']!=mangVanTay[i]['TenForm']){
				    			mangVanTay.push({
					    			 'TenCanLamSang':recordsets[index]['TenForm']
					    			,'ID_Kham':recordsets[index]['ID_Kham']
					    			,'NgayGioTao':custom.formatHour(recordsets[index]['NgayGioTao'])
					    			,'ID_LoaiKham':recordsets[index]['ID_LoaiKham']
					    			,'ID_TrangThai':recordsets[index]['ID_TrangThai']
					    			,'ID_BenhNhan':recordsets[index]['ID_BenhNhan']			    			
					    			,'TenBenhNhan':recordsets[index]['TenBenhNhan']
					    			,'TenNhom':recordsets[index]['TenNhom']
					    		});
				    		}
				    	}		
			    	}
			    }
			}

	    }
	}

return mangVanTay;

}