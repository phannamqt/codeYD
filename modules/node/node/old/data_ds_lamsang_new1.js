var sql = require('mssql'); 
var chuoitrave='';
var trangthai=0;
var chuoi='';
var dangcho = [];
var dangkham = [];
var daxong = [];
var n1 = 0;
var n2 = 0;
var n3 = 0;
var chuoi='';
var second=15000;

var config = {
	user: 'cc',
	password: 'Ehe@lth',
	server: '192.168.1.105', 
	database: 'ehealth_real',    
	options: {
		encrypt: false
	}
}
isloading();

module.exports.dataDanhSachLamSang = function() {
	return chuoi;
}

function isloading(){
	var connection = new sql.Connection(config, function(err) {	
		if (err === null) {		
			var request = new sql.Request(connection);
			var request1 = new sql.Request(connection);		
			chuoitrave='';		
			request.input('excludeID_TrangThai1', sql.VarChar(50),'DangKham');
			request.input('excludeID_TrangThai2', sql.VarChar(50),'Xong');		
			request.execute('GD2_LayDSXepHangLamSang_soc_test', function(err, recordsets, returnValue) {	
				var dangcho = [];
				var dangkham = [];
				var daxong = [];		
				var n1 = 0;
				var n2 = 0;
				var n3 = 0;				
				if(err === undefined){					
					if(recordsets[0].length==0){						
						dangcho = [];	
					}else{						
						for(var i=0;i<recordsets[0].length;i++){							
							mangtam=recordsets[0][i];
							if(mangtam["SanSangGoiVaoKham"]){
								mangtam["SanSangGoiVaoKham"]=1
							}else{
								mangtam["SanSangGoiVaoKham"]=0
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
								SoPhieuKhamGoiLoa: mangtam["SoPhieuKhamGoiLoa"]
							};
							n1++;	
						}				
					}
				}else{
					
				}
				request1.execute('GD2_LayDSBenhNhanLamSang_Node', function(err, recordsets, returnValue) {  
					if(err === undefined){							
						if(recordsets[0].length==0){
							daxong = [];	
							dangkham= [];		
						}else{							
							for(var i=0;i<recordsets[0].length;i++){
								mangtam=recordsets[0][i];
								if(mangtam["ID_TrangThai"]=='DangKham' || mangtam["ID_TrangThai"]=='DangTraKetQua'){														
									if(mangtam["SanSangGoiVaoKham"]){
										mangtam["SanSangGoiVaoKham"]=1
									}else{
										mangtam["SanSangGoiVaoKham"]=0
									}
									if(mangtam["HoanTatHoSo"]){
										mangtam["HoanTatHoSo"]=1
									}else{
										mangtam["HoanTatHoSo"]=0
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
								if(mangtam["ID_TrangThai"]=='KetThucKham' || mangtam["ID_TrangThai"]=='Xong'){
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
						chuoi = JSON.stringify(dangcho) + "||" + JSON.stringify(dangkham) + "||" + JSON.stringify(daxong);
					}else{
						
					}			
					connection.close();								
					setTimeout(function(){						
						isloading();
					},second);				
				});
			});
		}
		else{	
			isloading();
		}
	});
}