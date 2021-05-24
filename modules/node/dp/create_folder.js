
var fs    = require('fs');
var path = 'F:/pic_data/';



 var io=require('socket.io').listen(5000);
		io.on('connection', function (socket) {			
			socket.on('all', function (data) {
				data=data.split('||');
				path1=path+''+data[0]+'/'+data[1];
				
				if (!fs.existsSync(path1)){
					fs.mkdirSync(path1);
				}
				socket.emit('news', '');		
			})
				
			
	
		})




		