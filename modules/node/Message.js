var sql = require('mssql');
var custom = require('./custom');
var config = custom.config1;
var mang='';
const members = new Map();
var dathucthi=0;
var thoigianReload=10000; // 1000 là 1 giây
 var io=require('socket.io').listen(5000);
io.on('connection', function (socket) {
 //io.sockets.emit('join',"ok");
  //io.sockets.emit('join',"ok");
  io.to(socket.id).emit('join', "ok");
 socket.on('join', function (data) {
	console.log('connection : '+data.username+' from ip: '+socket.handshake.address.replace("::ffff:", ""));
	socket.nhanvien_id=data.nhanvien_id;
	socket.username=data.username;
	addUser(socket);
});
socket.on('disconnect', function() {
	 if(socket.username!='undefined'){
		console.log("disconnect : "+socket.username+' from ip: '+socket.handshake.address.replace("::ffff:", ""));
	} 
	removeUser(socket);
	members.forEach(function(element, index, array) {
		//console.log(element.id+'|'+element.nhanvien_id+'|'+element.username);
		io.to(element.id).emit('mess', "out");
	});
 });
 // Da gui den tay nguoi dung
socket.on('sentcomplete', function (data) {
	console.log('Sent to client : mess id: '+data.id+" user: "+socket.username+" from ip:"+data.ip);
	sentcomplete(data.id,socket.nhanvien_id,data.ip);
});
// set gui lai sau
socket.on('resendlaster', function (data) {
	console.log('Resend laster : mess id: '+data.id+" user: "+socket.username+" from ip:"+data.ip);
	resendlaster(data.id,socket.nhanvien_id,data.ip);
});
// set da xem
socket.on('read', function (data) {
	console.log('Read : mess id: '+data.id+" user: "+socket.username+" from ip:"+data.ip);
	read(data.id,socket.nhanvien_id,data.ip);
});

 if(dathucthi==0){
	console.log('Started');
   dathucthi=1;
   sending ();
 }
 
})

function wait(ms) {
	return new Promise(r => setTimeout(r, ms))
}

async function sending () {	
	try {
		let poolPromise = await new sql.ConnectionPool(config)
		.connect()
		.then(pool => {
			return pool
		})
		.catch(err => console.log('Database Connection Failed! Bad Config: ', err));
		let pool = await poolPromise
		let result = await pool.request()		
			.execute('GD2_GetMessage')	
		mang = await result.recordsets[0];
		for(var i=0;i<mang.length;i++){// duyệt qua cac thông báo
			members.forEach(function(element, index, array) {// duyệt qua cac connection
				//console.log(mang[i]["ID_NhanVien"]+"=="+element.nhanvien_id);
				if(mang[i]["ID_NhanVien"]==element.nhanvien_id){ 
					io.to(element.id).emit('messagealert',{id:mang[i]["ID_Auto"],message:mang[i]["Message"],SoPhutGuiLaiSau:mang[i]["SoPhutGuiLaiSau"]});
				}
			});
		}
		await poolPromise.close();
		await wait(thoigianReload);
		await sending();
	} catch (err) {		
		await wait(thoigianReload);
		await sending();
	}
}

// Da gui
async function sentcomplete (id,nhanvien_id,ip) {
	try {
		let poolPromise = await new sql.ConnectionPool(config)
		.connect()
		.then(pool => {
			return pool
		})
		.catch(err => console.log('Database Connection Failed! Bad Config: ', err));
		let pool = await poolPromise
		let result = await pool.request()		
			.input('id', sql.Int,id)
			.input('idnv', sql.Int,nhanvien_id)
			.input('ip', sql.VarChar(15),ip)
			.execute('GD2_Message_NhanVien_Up_DaGui')	
		await poolPromise.close();
	} catch (err) {		
		 console.log('Failed! Bad : ', err)
	}
}

// set Gui lai sau
async function resendlaster (id,nhanvien_id,ip) {
	try {
		let poolPromise = await new sql.ConnectionPool(config)
		.connect()
		.then(pool => {
			return pool
		})
		.catch(err => console.log('Database Connection Failed! Bad Config: ', err));
		let pool = await poolPromise
		let result = await pool.request()		
			.input('id', sql.Int,id)
			.input('idnv', sql.Int,nhanvien_id)
			.input('ip', sql.VarChar(15),ip)
			.execute('GD2_Message_NhanVien_Up_GuiLaiSau')	
		await poolPromise.close();
	} catch (err) {		
		 console.log('Failed! Bad : ', err)
	}
}

// set read
async function read (id,nhanvien_id,ip) {
	try {
		let poolPromise = await new sql.ConnectionPool(config)
		.connect()
		.then(pool => {
			return pool
		})
		.catch(err => console.log('Database Connection Failed! Bad Config: ', err));
		let pool = await poolPromise
		let result = await pool.request()		
			.input('id', sql.Int,id)
			.input('idnv', sql.Int,nhanvien_id)
			.input('ip', sql.VarChar(15),ip)
			.execute('GD2_Message_NhanVien_Up_DaXem')	
		await poolPromise.close();
	} catch (err) {		
		 console.log('Failed! Bad : ', err)
	}
}


function addUser(client) {
  members.set(client.id,client)
}

function removeUser(client) {
  members.delete(client.id)
}