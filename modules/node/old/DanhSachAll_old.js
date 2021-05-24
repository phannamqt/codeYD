var DanhSachNoiTru = require('./DanhSachNoiTru');
/*var DanhSachToaThuoc = require('./DanhSachToaThuoc');*/
var io=require('socket.io').listen(3400);
io.on('connection', function (socket) {		
	socket.on('listDanhSachNoiTru', function (data) {	
		 socket.emit('listDanhSachNoiTru', getConnectedList ());
	})	
	socket.on('DanhSachNoiTru', function (data) {	
		if(data.loai=='click'){
			a=new Date();
			console.log(socket.handshake.address+'|'+a);
			console.log(data);
			console.log('||');
		}
		DanhSachNoiTru.loadingDanhSachNoiTru(data,function(danhsach){						
		 	socket.emit('dataDanhSachNoiTru', danhsach);		
		});	
	})
	/*
	socket.on('DanhSachToaThuoc', function (data) {	
		socket.join(room);
		DanhSachToaThuoc.loadingDanhSachToaThuoc(data,function(danhsach){			
		 	socket.emit('dataDanhSachToaThuoc', danhsach);		
		});	
	})*/
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
