var DanhSachCanLamSang = require('./DanhSachCanLamSang');
var DanhSachLamSang = require('./DanhSachLamSang');
var DanhSachNoiTru = require('./DanhSachNoiTru');

var io=require('socket.io').listen(4100);
io.on('connection', function (socket) {		
	socket.on('listDanhSachNoiTru', function (data) {	
		 socket.emit('listDanhSachNoiTru', getConnectedList ());
	})	
	socket.on('DanhSachNoiTru', function (data) {		
		DanhSachNoiTru.loadingDanhSachNoiTru(data,function(danhsach){						
		 	socket.emit('dataDanhSachNoiTru', danhsach);		
		});	
	})

	socket.on('DanhSachCanLamSang', function (data) {	
		socket.emit('dataDanhSachCanLamSang', DanhSachCanLamSang.dataDanhSachCanLamSang(data));			
	})

	socket.on('DanhSachLamSang', function (data) {	
		socket.emit('dataDanhSachLamSang', DanhSachLamSang.dataDanhSachLamSang());			
	})

	socket.on('sendVanTayCanLamSang', function (data) {	
		socket.emit('receiveVanTayCanLamSang', DanhSachCanLamSang.vantayCanLamSang(data));
			
	})

	socket.on('xonghosoDanhSachLamSang', function (data) {		
		setTimeout(function(){													
			socket.emit('dataDanhSachLamSang', DanhSachLamSang.dataDanhSachLamSang());
		},7000);	
	})
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
