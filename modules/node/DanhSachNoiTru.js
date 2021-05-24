var sql = require('mssql');
var custom = require('./custom');
var config = custom.config;
var isConnected=false;
var connection;
con();

module.exports.loadingDanhSachNoiTru = function(data,callback) {	
	if(isConnected){			
		var request = new sql.Request(connection);		
		if(data.TrangThai=='TamUng'){
			var storeName='GD2_GetDSBenhNhanTaoBenhAnNoiTru_New_TongTien';
		}else if(data.TrangThai=='KoTamUng'){
			var storeName='GD2_GetDSBenhNhanTaoBenhAnNoiTru_New';
		}else{
			var storeName='GD2_GetDSBenhNhanTaoBenhAnNoiTru_New';
		}
		request.input('id_phongban', sql.Int,parseInt(returnIdphongban(data)));
		request.execute(storeName, function(err, recordsets, returnValue) {
			if (err) { 
				console.log('DanhSachNoiTru ' +err);
				return; 
			}
			if(data.TrangThai=='TamUng'){
				callback (dataDanhSachNoiTruTamUng(recordsets.recordsets[0]));
			}else if(data.TrangThai=='KoTamUng'){
				callback (dataDanhSachNoiTru(recordsets.recordsets[0]));
			}else{
				callback (dataDanhSachNoiTru(recordsets.recordsets[0]));
			}
			return;	
		});
	}else{
		setTimeout(function(){		
			con();											
			module.exports.loadingDanhSachNoiTru() ;
		},2000);			
	}	
}


function con() {		
	connection = new sql.ConnectionPool(config, function(err) {		
		if (err) {console.log('Connect err: ' + err); return;}
		isConnected = true;	
	})
	connection.on("error", function(err) { 
		isConnected = false;	
	});
}

function returnIdphongban(str) {  
	if(str.length<10){
		return str
	}else{		
		return str.idPhongBan
	}
}

function dataDanhSachNoiTru(recordsets) {
	var TraVe = {};
	TraVe.rows=[];	
	var doituong='';
	for (index = 0; index < recordsets.length; ++index) {
		row=recordsets[index];	

		if(row["LoaiDoiTuongKham"]=='Viện phí'){
			doituong='Viện phí';
		}else{
			if(row["TrangThaiKham"]==1){
				doituong='BHYT/Đúng tuyến';
			}else if(row["TrangThaiKham"]==3){
				doituong='BHYT/Trái tuyến';
			}else if(row["TrangThaiKham"]==4){
				doituong='BHYT/Cấp cứu';
			}
		}
		if(row["IsDichVuCC"]==1){
			row["LoaiDoiTuongKham"]+='/BHCC';
		}
		tam={
			"id":row['ID_BenhAnNoiTru'],
			"cell":[
			row["MaBenhNhan"],
			row["HoLotBenhNhan"],
			row["TenBenhNhan"],
			row["Tuoi"],
			row["Gioi"],
			row["LoaiDoiTuongKham"],
			row["DiaChi"],
			row["NguoiTaoBenhAn"],
			custom.formatHour(row["NgayTaoBenhAn"]),
			custom.formatDate(row["NgayTaoBenhAn"]),
			doituong,
			row["Ten_LoaiBenhAnNoiTru"],
			row["Buong"],	
			row["CD_KhoaDieuTri"],
			row["BSDieuTri"],
			row["ID_LuotKham"],
			row["ID_LoaiBenhAnNoiTru"],
			row["ID_BenhNhan"],
			row["ID_PhongBan"],
			custom.formatDate(row["NgayTaoBenhAn"]),
			row["TenLoaiBA"],
			row["TrangThaiSinh"],
			row["ThoiGianHauSinh"],
			"",
			"",
			row["IsDichVuCC"],
			"",
			"",
			"",
			"In phiếu",
			row["SoPhieuKhamGoiLoa"],
			row["ID_LuotKham"],
			"",
			"",
			"",
			"",
			"",
			"",
			row["SoHSCon"],
			row["SoThuocKeTrongNgay"],
			row["IsCapVoucher"]
			
			],

		}
		TraVe.rows.push(tam);			
	}
	return JSON.stringify(TraVe);
}


function dataDanhSachNoiTruTamUng(recordsets) {
	var TraVe = {};
	TraVe.rows=[];	
	var doituong='';
	for (index = 0; index < recordsets.length; ++index) {
		row=recordsets[index];	

		if(row["LoaiDoiTuongKham"]=='Viện phí'){
			doituong='Viện phí';
		}else{
			if(row["TrangThaiKham"]==1){
				doituong='BHYT/Đúng tuyến';
			}else if(row["TrangThaiKham"]==3){
				doituong='BHYT/Trái tuyến';
			}else if(row["TrangThaiKham"]==4){
				doituong='BHYT/Cấp cứu';
			}
		}
		if(row["IsDichVuCC"]==1){
			row["LoaiDoiTuongKham"]+='/BHCC';
		}
		tamung=	-row["nocuoi"]/row["TongBenhNhan"];
		tam={
			"id":row['ID_BenhAnNoiTru'],
			"cell":[
			row["MaBenhNhan"],
			row["HoLotBenhNhan"],
			row["TenBenhNhan"],
			row["Tuoi"],
			row["Gioi"],
			row["LoaiDoiTuongKham"],
			row["DiaChi"],
			row["NguoiTaoBenhAn"],
			custom.formatHour(row["NgayTaoBenhAn"]),
			custom.formatDate(row["NgayTaoBenhAn"]),
			doituong,
			row["Ten_LoaiBenhAnNoiTru"],
			row["Buong"],	
			row["CD_KhoaDieuTri"],
			row["BSDieuTri"],
			row["ID_LuotKham"],
			row["ID_LoaiBenhAnNoiTru"],
			row["ID_BenhNhan"],
			row["ID_PhongBan"],
			custom.formatDate(row["NgayTaoBenhAn"]),
			row["TenLoaiBA"],
			row["TrangThaiSinh"],
			row["ThoiGianHauSinh"],
			"",
			"",
			row["IsDichVuCC"],
			"",
			"",
			"",
			"In phiếu",
			row["SoPhieuKhamGoiLoa"],
			row["ID_LuotKham"],
			"",
			"",
			"",
			"",
			Math.round(tamung*100),
			row["LyDoKhongTamUng"],
			row["SoHSCon"],
			row["SoThuocKeTrongNgay"],
			row["IsCapVoucher"] 
			],

		}
		TraVe.rows.push(tam);			
	}
	return JSON.stringify(TraVe);
}
