var sql = require('mssql'); 
var chuoitrave='';
var trangthai=0;
var chuoi='';
var TimeOut;
var second=10000;
var isReload=0;
var dem=0;
var config = {
	user: 'cc',
	password: 'Ehe@lth',
    server: '192.168.1.105', // You can use 'localhost\\instance' to connect to named instance 
    database: 'ehealth_real',    
    options: {
        encrypt: false // Use this if you're on Windows Azure 
    }
}
var io=require('socket.io').listen(45000);
io.on('connection', function (socket) {
	socket.on('send', function (data) {		
		setTimeout(function(){													
			socket.emit('xonghoso', chuoi);
		},7000);	
	})
	socket.on('all', function (data) {
		socket.emit('news', chuoi);		
	})
})
isloading();
function isloading(){
	isReload=1;
	dem++;
	console.dir(dem);
	sql.connect(config, function(err) {		
		if (err === null) {
			console.dir(new Date());
			var request = new sql.Request();
			var request1 = new sql.Request();		
			chuoitrave='';
			var chuoi1='';
			var chuoi2='';
			var chuoi3='';
			request.input('excludeID_TrangThai1', sql.VarChar(50),'DangKham');
			request.input('excludeID_TrangThai2', sql.VarChar(50),'Xong');		
			request.execute('GD2_LayDSXepHangLamSang_soc_test', function(err, recordsets, returnValue) {				
				if(err === undefined){
					console.dir('GD2_LayDSXepHangLamSang_soc_test');
					console.dir(new Date());
					if(recordsets[0].length==0){
						chuoi1+='{}';
					}else{
						chuoi1='{"rows":[';
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
							chuoi1+='{"id":'+i+',"cell":[';
							chuoi1+=JSON.stringify(mangtam["ID_LuotKham"])+',';
							chuoi1+=JSON.stringify(mangtam["MaBenhNhan"])+',';
							chuoi1+=JSON.stringify(mangtam["TenBenhNhan"])+',';
							chuoi1+=JSON.stringify(mangtam["Tuoi"])+',';
							chuoi1+=JSON.stringify(mangtam["GioiTinh"])+',';
							chuoi1+=JSON.stringify(mangtam["TenPhanLoaiKham"])+',';
							chuoi1+=JSON.stringify(mangtam["TenLoaiKham"])+',';
							chuoi1+=JSON.stringify(mangtam["LoaiDoiTuongKham"])+',';
							chuoi1+=JSON.stringify(mangtam["GioHenKham"])+',';
							chuoi1+=JSON.stringify(mangtam["ThoiGianKham"])+',';
							chuoi1+=JSON.stringify(mangtam["TenBSYeuCau"])+',';
							chuoi1+=JSON.stringify(mangtam["bstruoc"])+',';
							chuoi1+=JSON.stringify(mangtam["GhiChu"])+',';
							chuoi1+=JSON.stringify(mangtam["NoiDungTaiKham"])+',';
							chuoi1+=JSON.stringify(mangtam["ID_TrangThai"])+',';
							chuoi1+=JSON.stringify(mangtam["SanSangGoiVaoKham"])+',';
							chuoi1+=JSON.stringify(mangtam["NotesStatus"])+',';
							chuoi1+=JSON.stringify(mangtam["ID_BenhNhan"])+',';			
							chuoi1+=JSON.stringify(mangtam["ID_PhongKhamVatLy"])+',';	
							chuoi1+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
							chuoi1+=JSON.stringify(mangtam["ID_Tang"])+',';	
							chuoi1+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
						}				
					}
				}else{
					console.dir(err);
					console.dir(new Date());
				}
				request1.execute('GD2_LayDSBenhNhanLamSang_Node', function(err, recordsets, returnValue) {  
					if(err === undefined){
						console.dir('GD2_LayDSBenhNhanLamSang_Node');
						console.dir(new Date());		
						if(recordsets[0].length==0){
							chuoi2+='||{}';		
							chuoi3+='||{}';				
						}else{
							chuoi2+='||{"rows":[';
							phancach2=',';
							chuoi3+='||{"rows":[';
							phancach3=',';
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
									chuoi2+='{"id":'+i+',"cell":[';
									chuoi2+=JSON.stringify(recordsets[0][i]["ID_LuotKham"][0])+',';
									chuoi2+=JSON.stringify(mangtam["MaBenhNhan"])+',';
									chuoi2+=JSON.stringify(mangtam["TenBenhNhan"])+',';
									chuoi2+=JSON.stringify(mangtam["Tuoi"])+',';
									chuoi2+=JSON.stringify(mangtam["GioiTinh"])+',';
									chuoi2+=JSON.stringify(mangtam["TenPhanLoaiKham"])+',';
									chuoi2+=JSON.stringify(mangtam["ThoiGianKham"])+',';
									chuoi2+=JSON.stringify(mangtam["NgayGioHenTraKQ"])+',';
									chuoi2+=JSON.stringify(mangtam["BSLamSang"])+',';		
									chuoi2+=JSON.stringify(mangtam["GhiChu"])+',';
									chuoi2+=JSON.stringify(mangtam["HoanTatHoSo"])+',';
									chuoi2+=JSON.stringify(mangtam["TrangThaiHoSo"])+',';
									chuoi2+=JSON.stringify(mangtam["SanSangGoiVaoKham"])+',';
									chuoi2+=JSON.stringify(mangtam["NotesStatus"])+',';
									chuoi2+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
									chuoi2+=JSON.stringify(mangtam["LoaiDoiTuongKham"])+',';		
									chuoi2+=JSON.stringify(mangtam["IsDichVuCC"])+',';				
									chuoi2+=JSON.stringify(mangtam["ID_Tang"])+',';	
									chuoi2+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach2;
								}					
								if(mangtam["ID_TrangThai"]=='KetThucKham' || mangtam["ID_TrangThai"]=='Xong'){
									mangtam=recordsets[0][i];													
									chuoi3+='{"id":'+i+',"cell":[';
									chuoi3+=JSON.stringify(recordsets[0][i]["ID_LuotKham"][0])+',';
									chuoi3+=JSON.stringify(mangtam["MaBenhNhan"])+',';
									chuoi3+=JSON.stringify(mangtam["TenBenhNhan"])+',';
									chuoi3+=JSON.stringify(mangtam["Tuoi"])+',';
									chuoi3+=JSON.stringify(mangtam["TenPhanLoaiKham"])+',';
									chuoi3+=JSON.stringify(mangtam["BSLamSang"])+',';
									chuoi3+=JSON.stringify(mangtam["GhiChu"])+',';				
									chuoi3+=JSON.stringify(mangtam["NotesStatus"])+',';
									chuoi3+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
									chuoi3+=JSON.stringify(mangtam["DaTraKQ"])+',';	
									chuoi3+=JSON.stringify(mangtam["LoaiDoiTuongKham"])+',';		
									chuoi3+=JSON.stringify(mangtam["IsDichVuCC"])+',';					
									chuoi3+=JSON.stringify(mangtam["ID_Tang"])+',';	
									chuoi3+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach3;
								}
							}
							chuoi2=chuoi2.slice(0, - 1)+']}';	
							chuoi3=chuoi3.slice(0, - 1)+']}';				
						}
						chuoitrave=chuoi1+''+chuoi2+''+chuoi3;
						chuoi=chuoitrave;	
					}else{
					console.dir(err);
					console.dir(new Date());
				}			
					sql.close();
					isReload=0;					
					TimeOut=setTimeout(function(){						
						isloading();
					},second);				
				});
			});
		}else{
			console.dir(err);
			console.dir(new Date());
		}
	});
}