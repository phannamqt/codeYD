var sql = require('mssql');
var custom = require('./custom');
var config = custom.config;
var mang;
module.exports = {	
	initData: function () {	
		let connection = new sql.ConnectionPool(config, function(err) {
			if (err) {
				connection.close();
				module.exports.initData();
				return;
			}					
			let request = new sql.Request(connection); 		
			request.execute('GD2_dmThuoc_Node', function(err, recordsets, returnValue) {
				if (err) { 
					console.log(err);
					connection.close();
					module.exports.initData();
					return; 
				}			
				mang = recordsets.recordsets[0];
			});
		});
		connection.on('error', function(err) {
			module.exports.initData();
		});
	},
	dataDmThuocBenhAnNgoaiTru: function () {
		let chuoitrave='';		
		let chuoi2='';
		let TraVe = {};
		let phancach=',';
		try {
			if(mang.length==0){
				chuoitrave+='{}|||[]';
			}else{			
				TraVe.rows=[];		
				chuoi2='[';			
				for (let index = 0; index < mang.length; ++index) {
					let row=mang[index];
					if(row["Active"]==1){
						if(row["LaThuoc"]==0){
							row["LaThuoc"]=1;
						}else{
							row["LaThuoc"]=0;
						}
						if(row["DonGia_BHYT"]  !== null){
							row["DonGia_BHYT"]=row["DonGia_BHYT"];	
						}else{
							row["DonGia_BHYT"]=0;	
						}	
						let tam={	
							"id":row['ID_Thuoc'],
							"cell":[
							row["TenGoc"],
							row["HoatChatChinh"],
							row["MaThuoc"],
							row["ID_DuongDung"],
							row["DonGia"],
							row["ID_DonViTinh"],
							+row["LaThuoc"],
							+row["ThuocBHYT"],
							+row["BHYTNoiTruOrNgTru"],
							row["DonGia_BHYT"],
							row["TenNhaSanXuat"],
							row["TenDayDu"],
							+row["HideVienPhi"],
							+row["HideBHYT"],
							+row["HideBHYT_traituyen"],
							+row["HideBHYT_dungtuyen"],
							row["TenDonViTinh"],
							],	
						}
						chuoi2+=row["ID_Thuoc"]+phancach;
						TraVe.rows.push(tam);
					}				
	
				}		
				chuoi2=chuoi2.slice(0, - 1)+']';	
			}
			chuoitrave=JSON.stringify(TraVe)+'|||'+chuoi2;	
			return 	chuoitrave;	
		} catch (err) {
			setTimeout(function(){													
				module.exports.dataDmThuocBenhAnNgoaiTru();
			},1000);
		}		
	}
};
