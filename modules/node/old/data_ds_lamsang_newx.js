var sql = require('mssql'); 
var chuoitrave='';
var trangthai=0;
var dangcho = [];
var dangkham = [];
var daxong = [];
var n1 = 0;
var n2 = 0;
var n3 = 0;
var chuoi='';
var config = {
	user: 'cc',
	password: 'Ehe@lth',
	server: '192.168.1.105',
	database: 'ehealth_real',    
	options: {
        encrypt: false // Use this if you're on Windows Azure 
    }
}
var io=require('socket.io').listen(3200);
io.on('connection', function (socket) {
	socket.on('send', function (data) {
		socket.emit('news', chuoi);	
	})
	socket.on('all', function (data) {
		socket.emit('news', chuoi);		
	})
})
isloading()

function isloading(){
	isReload=1;
	sql.connect(config, function(err) {
		var request = new sql.Request();
		var request1 = new sql.Request();		
		chuoitrave='';
		request.input('excludeID_TrangThai1', sql.VarChar(50), 'DangKham');
		request.input('excludeID_TrangThai2', sql.VarChar(50),'Xong');		
		request.execute('GD2_LayDSXepHangLamSang_soc_test', function(err, recordsets, returnValue) {
			if(err === undefined){
				if(recordsets[0].length==0){
					chuoitrave+='{}';
				}else{
					chuoitrave='{"rows":[';
					phancach=',';
					for(var i=0;i<recordsets[0].length;i++){
						if(i==recordsets[0].length-1){
							phancach=']}';
						}
						mangtam=recordsets[0][i];
						if(mangtam["SanSangGoiVaoKham"]){
							mangtam["SanSangGoiVaoKham"]=1
						}else{
							mangtam["SanSangGoiVaoKham"]=0
						}			
						chuoitrave+='{"id":'+i+',"cell":[';
						chuoitrave+=JSON.stringify(mangtam["ID_LuotKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["MaBenhNhan"])+',';
						chuoitrave+=JSON.stringify(mangtam["TenBenhNhan"])+',';
						chuoitrave+=JSON.stringify(mangtam["Tuoi"])+',';
						chuoitrave+=JSON.stringify(mangtam["GioiTinh"])+',';
						chuoitrave+=JSON.stringify(mangtam["TenPhanLoaiKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["TenLoaiKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["LoaiDoiTuongKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["GioHenKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["ThoiGianKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["TenBSYeuCau"])+',';
						chuoitrave+=JSON.stringify(mangtam["bstruoc"])+',';
						chuoitrave+=JSON.stringify(mangtam["GhiChu"])+',';
						chuoitrave+=JSON.stringify(mangtam["NoiDungTaiKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["ID_TrangThai"])+',';
						chuoitrave+=JSON.stringify(mangtam["SanSangGoiVaoKham"])+',';
						chuoitrave+=JSON.stringify(mangtam["NotesStatus"])+',';
						chuoitrave+=JSON.stringify(mangtam["ID_BenhNhan"])+',';			
						chuoitrave+=JSON.stringify(mangtam["ID_PhongKhamVatLy"])+',';	
						chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
						chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
						chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
					}				
				}
			}			
			request1.execute('GD2_LayDSBenhNhanLamSang_Node', function(err, recordsets, returnValue) {  

				if(err === undefined){
					if(recordsets[0].length==0){
						chuoitrave+='||{}||{}';					
					}else{
						chuoitrave+='||{"rows":[';
						phancach=',';
						for(var i=0;i<recordsets[0].length;i++){
							mangtam=recordsets[0][i];
							if(mangtam["ID_TrangThai"]=='DangKham' || mangtam["ID_TrangThai"]=='DangTraKetQua'){
								if(i==recordsets[0].length-1){
									phancach=']}';
								}								
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
								chuoitrave+='{"id":'+i+',"cell":[';
								chuoitrave+=JSON.stringify(recordsets[0][i]["ID_LuotKham"][0])+',';
								chuoitrave+=JSON.stringify(mangtam["MaBenhNhan"])+',';
								chuoitrave+=JSON.stringify(mangtam["TenBenhNhan"])+',';
								chuoitrave+=JSON.stringify(mangtam["Tuoi"])+',';
								chuoitrave+=JSON.stringify(mangtam["GioiTinh"])+',';
								chuoitrave+=JSON.stringify(mangtam["TenPhanLoaiKham"])+',';
								chuoitrave+=JSON.stringify(mangtam["ThoiGianKham"])+',';
								chuoitrave+=JSON.stringify(mangtam["NgayGioHenTraKQ"])+',';
								chuoitrave+=JSON.stringify(mangtam["BSLamSang"])+',';		
								chuoitrave+=JSON.stringify(mangtam["GhiChu"])+',';
								chuoitrave+=JSON.stringify(mangtam["HoanTatHoSo"])+',';
								chuoitrave+=JSON.stringify(mangtam["TrangThaiHoSo"])+',';
								chuoitrave+=JSON.stringify(mangtam["SanSangGoiVaoKham"])+',';
								chuoitrave+=JSON.stringify(mangtam["NotesStatus"])+',';
								chuoitrave+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
								chuoitrave+=JSON.stringify(mangtam["LoaiDoiTuongKham"])+',';		
								chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';				
								chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
								chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
							}
						}
						chuoitrave+='||{"rows":[';
						phancach=',';
						for(var i=0;i<recordsets[0].length;i++){			
							if(mangtam["ID_TrangThai"]=='KetThucKham' || mangtam["ID_TrangThai"]=='Xong'){
								mangtam=recordsets[0][i];
								if(i==recordsets[0].length-1){
									phancach=']}';
								}								
								chuoitrave+='{"id":'+i+',"cell":[';
								chuoitrave+=JSON.stringify(recordsets[0][i]["ID_LuotKham"][0])+',';
								chuoitrave+=JSON.stringify(mangtam["MaBenhNhan"])+',';
								chuoitrave+=JSON.stringify(mangtam["TenBenhNhan"])+',';
								chuoitrave+=JSON.stringify(mangtam["Tuoi"])+',';
								chuoitrave+=JSON.stringify(mangtam["TenPhanLoaiKham"])+',';
								chuoitrave+=JSON.stringify(mangtam["BSLamSang"])+',';
								chuoitrave+=JSON.stringify(mangtam["GhiChu"])+',';				
								chuoitrave+=JSON.stringify(mangtam["NotesStatus"])+',';
								chuoitrave+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
								chuoitrave+=JSON.stringify(mangtam["DaTraKQ"])+',';	
								chuoitrave+=JSON.stringify(mangtam["LoaiDoiTuongKham"])+',';		
								chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';					
								chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
								chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
							}
						}					
					}										
				}
				chuoi=chuoitrave;
				sql.close();
				isReload=0;					
				TimeOut=setTimeout(function(){						
					isloading();
				},second);				
			});
		});
});
}


