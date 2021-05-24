var sql = require('mssql');
var custom = require('./custom');
var config = custom.config;
var mang;
module.exports = {
	initData: function () {
		let connection = new sql.ConnectionPool(config, function(err) {
			if (err === null) {				
				let request = new sql.Request(connection); 		
				request.execute('GD2_Get_ICD10New', function(err, recordsets, returnValue) {
					if(err === null){
						mang = recordsets.recordsets[0];					
					}else{
						connection.close();
						module.exports.initData();
					}
				});				
			}else{
				connection.close();
				module.exports.initData();
			}
		});		
	},
	dataICD10: function () {
		try {
			let TraVe = {};
			TraVe.rows=[];		
			for (let index = 0; index < mang.length; ++index) {
				let row=mang[index];
				let tam={
					"id":row['CICD10'],
					"cell":[
						row["CICD10"],
						row["VVIET"],
					],
				}
				TraVe.rows.push(tam);			
			}
			return JSON.stringify(TraVe);
		} catch (err) {
			setTimeout(function(){													
				module.exports.dataICD10();
			},1000);
		}
	}
};
