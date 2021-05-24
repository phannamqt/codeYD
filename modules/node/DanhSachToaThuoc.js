var sql = require('mssql');
var custom = require('./custom');
var config = custom.config;
var isConnected=false;
var connection;
con();

module.exports.loadingDanhSachToaThuoc = function(id_phongban,callback) {	
	if(isConnected){		
		let request = new sql.Request(connection);
		request.input('datefrom', sql.Varchar(50),parseInt(id_phongban));
		request.input('dateto', sql.Varchar(50),parseInt(id_phongban));
		request.input('isLook', sql.Bit,parseInt(id_phongban));
		request.execute('GD2_DSToaThuoc_new_1', function(err, recordsets, returnValue) {
			if (err) { 
				console.log('DanhSachToaThuoc ' +err);
				return; 
			}					
			callback (loadingDanhSachToaThuoc(recordsets[0]));
			return;	
		});
	}else{
		setTimeout(function(){		
			con();											
			module.exports.loadingDanhSachToaThuoc() ;
		},2000);			
	}	
}


function con() {		
	connection = new sql.Connection(config, function(err) {		
		if (err) {console.log('Connect err: ' + err); return;}
		isConnected = true;	
	})
	connection.on("error", function(err) { 
		isConnected = false;	
	});
}



function loadingDanhSachToaThuoc(recordsets) {
	let TraVe = {};
	TraVe.rows=[];	
	let doituong='';
	for (let index = 0; index < recordsets.length; ++index) {
		row=recordsets[index];	

		
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
			"",
			"",
			row["IsDichVuCC"],
			"",
			"",
			"",
			"In phiếu",
			row["SoPhieuKhamGoiLoa"],
			row["ID_LuotKham"]
			],

		}
		TraVe.rows.push(tam);			
	}
	return JSON.stringify(TraVe);
}
