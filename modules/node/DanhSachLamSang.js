var sql = require('mssql');
var custom = require('./custom');
var config = custom.config1;
var chuoi = '';
var thoigianReload = 10000;


isloading();
module.exports.dataDanhSachLamSang = function () {
	return chuoi;
}

function wait(ms) {
	return new Promise(r => setTimeout(r, ms))
}

async function GetDangCho(poolPromise) {
	let result = await poolPromise.request()
		.input('excludeID_TrangThai1', sql.VarChar(50), 'DangKham')
		.input('excludeID_TrangThai2', sql.VarChar(50), 'Xong')
		.execute('GD2_LayDSXepHangLamSang_soc_test')
	result = result.recordsets[0];
	let dangcho = [];
	let n1 = 0;
	if (result.length == 0) {
		dangcho = [];
	} else {
		for (let i = 0; i < result.length; i++) {
			let mangtam = result[i];
			if (mangtam["SanSangGoiVaoKham"]) {
				mangtam["SanSangGoiVaoKham"] = 1
			} else {
				mangtam["SanSangGoiVaoKham"] = 0
			}
			dangcho[n1] = {
				id: n1,
				ID_LuotKham: mangtam["ID_LuotKham"],
				MaBenhNhan: mangtam["MaBenhNhan"],
				TenBenhNhan: mangtam["TenBenhNhan"],
				Tuoi: mangtam["Tuoi"],
				GioiTinh: mangtam["GioiTinh"],
				TenPhanLoaiKham: mangtam["TenPhanLoaiKham"],
				TenLoaiKham: mangtam["TenLoaiKham"],
				LoaiDoiTuongKham: mangtam["LoaiDoiTuongKham"],
				GioHenKham: mangtam["GioHenKham"],
				ThoiGianKham: mangtam["ThoiGianKham"],
				TenBSYeuCau: mangtam["TenBSYeuCau"],
				bstruoc: mangtam["bstruoc"],
				GhiChu: mangtam["GhiChu"],
				NoiDungTaiKham: mangtam["NoiDungTaiKham"],
				TrangThai: mangtam["ID_TrangThai"],
				SanSangGoiVaoKham: mangtam["SanSangGoiVaoKham"],
				NotesStatus: mangtam["NotesStatus"],
				ID_BenhNhan: mangtam["ID_BenhNhan"],
				ID_PhongKhamVatLy: mangtam["ID_PhongKhamVatLy"],
				IsDichVuCC: mangtam["IsDichVuCC"],
				ID_Tang: mangtam["ID_Tang"],
				SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"],
				TenChuyenKhoa: mangtam["TenChuyenKhoa"],
				ID_ChuyenKhoa: mangtam["ID_ChuyenKhoa"],
				ID_ChuyenKhoa_Online: mangtam["ID_ChuyenKhoa_Online"],
				Is_BacSiYeuCau_ChamSocKhachHang: mangtam["Is_BacSiYeuCau_ChamSocKhachHang"],
				TenTrieuChung: mangtam["TenTrieuChung"],
			};
			n1++;
		}
	}
	return dangcho;
}

async function GetDangKham(poolPromise) {
	let result = await poolPromise.request()
		.execute('GD2_LayDSBenhNhanLamSang_Node')
	result = result.recordsets[0];
	let dangkham = [];
	let daxong = [];
	let n2 = 0;
	let n3 = 0;
	if (result.length == 0) {
		daxong = [];
		dangkham = [];
	} else {
		for (let i = 0; i < result.length; i++) {
			let mangtam = result[i];
			if (mangtam["ID_TrangThai"] == 'DangKham' || mangtam["ID_TrangThai"] == 'DangTraKetQua') {
				if (mangtam["SanSangGoiVaoKham"]) {
					mangtam["SanSangGoiVaoKham"] = 1
				} else {
					mangtam["SanSangGoiVaoKham"] = 0
				}
				if (mangtam["HoanTatHoSo"]) {
					mangtam["HoanTatHoSo"] = 1
				} else {
					mangtam["HoanTatHoSo"] = 0
				}
				dangkham[n2] = {
					id: n2,
					ID_LuotKham: mangtam["ID_LuotKham"],
					MaBenhNhan: mangtam["MaBenhNhan"],
					TenBenhNhan: mangtam["TenBenhNhan"],
					Tuoi: mangtam["Tuoi"],
					GioiTinh: mangtam["GioiTinh"],
					TenPhanLoaiKham: mangtam["TenPhanLoaiKham"],
					ThoiGianKham: mangtam["ThoiGianKham"],
					NgayGioHenTraKQ: mangtam["NgayGioHenTraKQ"],
					NgayGioHenTraKQ_New: mangtam["NgayGioHenTraKQ_New"],
					BSLamSang: mangtam["BSLamSang"],
					GhiChu: mangtam["GhiChu"],
					HoanTatHoSo: mangtam["HoanTatHoSo"],
					TrangThaiHoSo: mangtam["TrangThaiHoSo"],
					SanSangGoiVaoKham: mangtam["SanSangGoiVaoKham"],
					NotesStatus: mangtam["NotesStatus"],
					ID_BenhNhan: mangtam["ID_BenhNhan"],
					LoaiDoiTuongKham: mangtam["LoaiDoiTuongKham"],
					IsDichVuCC: mangtam["IsDichVuCC"],
					ID_Tang: mangtam["ID_Tang"],
					SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"]
				};
				n2++;
			}
			if (mangtam["ID_TrangThai"] == 'KetThucKham' || mangtam["ID_TrangThai"] == 'Xong') {
				daxong[n3] = {
					id: n3,
					ID_LuotKham: mangtam["ID_LuotKham"],
					MaBenhNhan: mangtam["MaBenhNhan"],
					TenBenhNhan: mangtam["TenBenhNhan"],
					Tuoi: mangtam["Tuoi"],
					TenPhanLoaiKham: mangtam["TenPhanLoaiKham"],
					BSLamSang: mangtam["BSLamSang"],
					GhiChu: mangtam["GhiChu"],
					NotesStatus: mangtam["NotesStatus"],
					ID_BenhNhan: mangtam["ID_BenhNhan"],
					DaTraKQ: mangtam["DaTraKQ"],
					LoaiDoiTuongKham: mangtam["LoaiDoiTuongKham"],
					IsDichVuCC: mangtam["IsDichVuCC"],
					ID_Tang: mangtam["ID_Tang"],
					SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"]
				};
				n3++;
			}
		}
	}
	return  {
        dangkham: dangkham,
        daxong: daxong
    };
}

sql.on('error', err => {
	setTimeout(function () {
		isloading();
	}, thoigianReload);
})
async function isloading() {
	try {		
		let poolPromise = await new sql.ConnectionPool(config)
		.connect()
		.then(pool => {
			return pool
		})
		.catch(err => console.log('DanhSachLamSang Database Connection Failed! Bad Config: ', err))
		let [DangCho, DangKham] = await Promise.all([GetDangCho(poolPromise), GetDangKham(poolPromise)]);	
		chuoi = await JSON.stringify(DangCho) + "||" + JSON.stringify(DangKham.dangkham) + "||" + JSON.stringify(DangKham.daxong);
		await poolPromise.close();					
	} catch (err) {
		await wait(thoigianReload);
		await isloading();
	}finally{		
		await wait(thoigianReload);	
		await isloading();
	}
}