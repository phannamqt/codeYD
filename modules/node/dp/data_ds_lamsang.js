

var sql = require('mssql'); 
/*io.on('connection', function (socket) {
			socket.emit('news', recordsets)
		}); */
var chuoitrave='';
var trangthai=0;
var chuoi='';
var config = {
    user: 'cc',
    password: '',
    server: '192.168.1.105', // You can use 'localhost\\instance' to connect to named instance 
    database: 'ehealth_real',
    
    options: {
        encrypt: false // Use this if you're on Windows Azure 
    }
}
 var io=require('socket.io').listen(3000);
		io.on('connection', function (socket) {
			socket.on('send', function (data) {
				xonghoso(socket)	
			})
			socket.on('all', function (data) {
				socket.emit('news', chuoi);		
			})
				
			
	
		})




		isloading()
	




function isloading(){
	sql.connect(config, function(err) {
	var request = new sql.Request();
	var request1 = new sql.Request();
	var request2 = new sql.Request();
	
	chuoitrave='';
	
	
	request.input('excludeID_TrangThai1', sql.VarChar(50), 'DangKham');
	request.input('excludeID_TrangThai2', sql.VarChar(50),'Xong');	
	
	request1.input('ID_TrangThai1', sql.VarChar(50), 'DangKham');
	request1.input('ID_TrangThai2', sql.VarChar(50), 'DangTraKetQua');	

	request2.input('ID_TrangThai1', sql.VarChar(50), 'KetThucKham');
	request2.input('ID_TrangThai2', sql.VarChar(50), 'Xong');


	
		request.execute('GD2_LayDSXepHangLamSang_soc_test', function(err, recordsets, returnValue) {   
		console.dir(err)
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
				//chuoitrave+='{"id":'+mangtam['ID_LuotKham']+',"cell":[';
				//chuoitrave+='{"id":'+mangtam['ID_LuotKham']+',"cell":[';
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

			/*	chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
				chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+']}'+phancach;	*/
				
			}				
		}
				
				
				
				
		request1.execute('GD2_LayDSBenhNhanLamSangTheoTrangThai_soc_Test', function(err, recordsets, returnValue) {   
	console.dir(err)
		if(recordsets[0].length==0){
			chuoitrave+='||{}';
		}else{
			chuoitrave+='||{"rows":[';
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
				if(mangtam["HoanTatHoSo"]){
					mangtam["HoanTatHoSo"]=1
				}else{
					mangtam["HoanTatHoSo"]=0
				}
				//chuoitrave+='{"id":'+mangtam['STT']+',"cell":[';
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
				//chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+']}'+phancach;	
				chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
				chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;


							
	

			}
			
		}
		
		
		request2.execute('GD2_LayDSBenhNhanLamSangTheoTrangThai_soc_Test', function(err, recordsets, returnValue) {   
		console.dir(err)
		if(recordsets[0].length==0){
			chuoitrave+='||{}';
		}else{
			chuoitrave+='||{"rows":[';
			phancach=',';
			for(var i=0;i<recordsets[0].length;i++){			
				if(i==recordsets[0].length-1){
					phancach=']}';
				}
				mangtam=recordsets[0][i];
				//chuoitrave+='{"id":'+mangtam['STT']+',"cell":[';
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
				//chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+']}'+phancach;
					chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
				chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
	
				
	
			}
		}
		chuoi=chuoitrave;
		 setTimeout(function(){
			sql.close();
			isloading()
		
		 },8000)
		});
	});
	});
	});
}





function xonghoso(socket){
	sql.connect(config, function(err) {
	var request = new sql.Request();
	var request1 = new sql.Request();
	var request2 = new sql.Request();
	
	chuoitrave='';
	
	
	request.input('excludeID_TrangThai1', sql.VarChar(50), 'DangKham');
	request.input('excludeID_TrangThai2', sql.VarChar(50),'Xong');	
	
	request1.input('ID_TrangThai1', sql.VarChar(50), 'DangKham');
	request1.input('ID_TrangThai2', sql.VarChar(50), 'DangTraKetQua');	

	request2.input('ID_TrangThai1', sql.VarChar(50), 'KetThucKham');
	request2.input('ID_TrangThai2', sql.VarChar(50), 'Xong');


	
		request.execute('GD2_LayDSXepHangLamSang_soc_test', function(err, recordsets, returnValue) {   
		console.dir(err)
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
				chuoitrave+='{"id":'+mangtam['ID_LuotKham']+',"cell":[';
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
		
				//chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
				//chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+']}'+phancach;

				chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
				chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
				chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
				
			}				
		}
				
				
				
				
		request1.execute('GD2_LayDSBenhNhanLamSangTheoTrangThai_soc_Test', function(err, recordsets, returnValue) {   
	console.dir(err)
		if(recordsets[0].length==0){
			chuoitrave+='||{}';
		}else{
			chuoitrave+='||{"rows":[';
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
				if(mangtam["HoanTatHoSo"]){
					mangtam["HoanTatHoSo"]=1
				}else{
					mangtam["HoanTatHoSo"]=0
				}
				//chuoitrave+='{"id":'+mangtam['STT']+',"cell":[';
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
				//chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+']}'+phancach;	
				
				chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
				//chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+']}'+phancach;
					chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
				chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;

			}

			
		}
		
		
		request2.execute('GD2_LayDSBenhNhanLamSangTheoTrangThai_soc_Test', function(err, recordsets, returnValue) {   
		console.dir(err)
		if(recordsets[0].length==0){
			chuoitrave+='||{}';
		}else{
			chuoitrave+='||{"rows":[';
			phancach=',';
			for(var i=0;i<recordsets[0].length;i++){			
				if(i==recordsets[0].length-1){
					phancach=']}';
				}
				mangtam=recordsets[0][i];
				//chuoitrave+='{"id":'+mangtam['STT']+',"cell":[';
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
				//chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+']}'+phancach;	
				
				chuoitrave+=JSON.stringify(mangtam["IsDichVuCC"])+',';	
				//chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+']}'+phancach;
					chuoitrave+=JSON.stringify(mangtam["ID_Tang"])+',';	
				chuoitrave+=JSON.stringify(mangtam["SoPhieuKhamGoiLoa"])+']}'+phancach;
	
			}
		}
		chuoi=chuoitrave;
		sql.close();		
		socket.emit('xonghoso', chuoi);	
		});
	});
	});
	});
}
