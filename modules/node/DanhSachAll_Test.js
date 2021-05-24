const DanhSachCanLamSang = require('./DanhSachCanLamSang');
const DanhSachNoiTru = require('./DanhSachNoiTru');
const DanhSachLamSang = require('./DanhSachLamSang_Test');
const dmThuoc = require('./dmThuoc');
const dmICD10 = require('./dmICD10');
dmThuoc.initData();
dmICD10.initData();


const io=require('socket.io').listen(4000);
io.on('connection', function (socket) {		
	// socket.on('listDanhSachNoiTru', function (data) {	
	// 	 socket.emit('listDanhSachNoiTru', getConnectedList ());
	// })	
	// socket.on('DanhSachNoiTru', function (data) {		
	// 	DanhSachNoiTru.loadingDanhSachNoiTru(data,function(danhsach){						
	// 	 	socket.emit('dataDanhSachNoiTru', danhsach);		
	// 	});	
	// })

	// socket.on('DanhSachCanLamSang', function (data) {	
	// 	socket.emit('dataDanhSachCanLamSang', DanhSachCanLamSang.dataDanhSachCanLamSang(data));			
	// })

	socket.on('DanhSachLamSang', function (data) {		
		socket.emit('dataDanhSachLamSang', DanhSachLamSang.dataDanhSachLamSang());			
	})

	// socket.on('sendVanTayCanLamSang', function (data) {	
	// 	socket.emit('receiveVanTayCanLamSang', DanhSachCanLamSang.vantayCanLamSang(data));
			
	// })

	socket.on('xonghosoDanhSachLamSang', function (data) {		
		setTimeout(function(){													
			socket.emit('dataDanhSachLamSang', DanhSachLamSang.dataDanhSachLamSang());
		},7000);	
	})

	// socket.on('dmThuocReload', function (data) {	
	// 	dmThuoc.initData();
	// })	
	// socket.on('dmThuocBenhAnNgoaiTru', function (data) {
	// 	socket.emit('dmThuocBenhAnNgoaiTru',dmThuoc.dataDmThuocBenhAnNgoaiTru());
	// })		
	// socket.on('dmICD10', function () {	
	// 	socket.emit('dmICD10',dmICD10.dataICD10());
	// })	
})	



function getConnectedList ()
{
    var list = [];
    for ( var id in io.sockets.connected )
    {
        list.push([io.sockets.connected[id].conn.remoteAddress,id]);
    }
    return list
}
