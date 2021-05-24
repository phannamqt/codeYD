var dmThuoc = require('./dmThuoc');
var dmICD10 = require('./dmICD10');
dmThuoc.initData();
dmICD10.initData();
var io=require('socket.io').listen(3300);
io.on('connection', function (socket) {
	socket.on('dmThuocReload', function (data) {
		dmThuoc.initData();
	})	
	socket.on('dmThuocBenhAnNgoaiTru', function (data) {
		socket.emit('dmThuocBenhAnNgoaiTru',dmThuoc.dataDmThuocBenhAnNgoaiTru());
	})		
	socket.on('dmICD10', function () {	
		socket.emit('dmICD10',dmICD10.dataICD10());
	})	
})
