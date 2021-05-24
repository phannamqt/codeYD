var sql = require('mssql');
var custom = require('./custom');
var config = custom.config1;
var isLoading;

module.exports = {
	loadingDanhSachBacSi: function () {
		sql.connect(config).then(function() {
			new sql.Request().execute('Gd2_dm_bsluotkham').then(function(recordsets) {	
				console.dir(recordsets[0]);
				mang = recordsets[0];					
				setTimeout(function(){
					sql.close();
					module.exports.loadingDanhSachBacSi();
				},15000)	
			}).catch(function(err) {
				module.exports.loadingDanhSachBacSi();
			});
		}).catch(function(err) {
			module.exports.loadingDanhSachBacSi();
		})
	}
};

