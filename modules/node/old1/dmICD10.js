var sql = require('mssql');
var custom = require('./custom');
var config = custom.config;
var mang;
module.exports = {
	initData: function () {
		var connection = new sql.Connection(config, function(err) {
			if (err === null) {				
				var request = new sql.Request(connection); 		
				request.execute('GD2_Get_ICD10New', function(err, recordsets, returnValue) {
					if(err === undefined){
						mang = recordsets[0];
						//console.dir(recordsets);
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
		var TraVe = {};
		TraVe.rows=[];		
		for (index = 0; index < mang.length; ++index) {
			row=mang[index];
			tam={
				"id":row['CICD10'],
				"cell":[
					row["CICD10"],
					row["VVIET"],
				],
			}
			TraVe.rows.push(tam);			
		}
		return JSON.stringify(TraVe);
	}
};
