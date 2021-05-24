

var sql = require('mssql'); 
/*io.on('connection', function (socket) {
			socket.emit('news', recordsets)
		}); */
 
var config = {
    user: 'cc',
    password: '',
    server: '192.168.1.105', // You can use 'localhost\\instance' to connect to named instance 
    database: 'ehealth_real',
    
    options: {
        encrypt: false // Use this if you're on Windows Azure 
    }
}
var chuoi='';
var chuoitrave='';
var count=0;
var clients  = [];
var io=require('socket.io').listen(4000);
var mang='' ;
io.on('connection', function (socket) {
	socket.on('send', function (data) {
		
		console.log(data);
		var recordsets = JSON.parse(mang);
	var chuoitrave='';
	var chuoi1='';
	var chuoi2='';
	var chuoi3='';
	var chuoi4='';		
		if(recordsets.length==0){
			chuoitrave='{}||{}||{}||{}';
			socket.emit('news', chuoitrave);	
		}else{
			chuoi1='{"rows":[';
			chuoi2='||{"rows":[';
			chuoi3='||{"rows":[';
			chuoi4='||{"rows":[';		
			for(var i=0;i<recordsets.length;i++){
								
				mangtam=recordsets[i];
				if(data==''){
					if(mangtam['ID_TrangThai']=='DangCho'){
						chuoi1+='{"id":'+mangtam['ID_Kham']+',"cell":[';
						chuoi1+=JSON.stringify(mangtam["ID_Kham"])+',';
						chuoi1+=JSON.stringify(mangtam["ID_LuotKham"])+',';
						chuoi1+=JSON.stringify(mangtam["MaBenhNhan"])+',';
						chuoi1+=JSON.stringify(mangtam["TenBenhNhan"])+',';
						chuoi1+=JSON.stringify(mangtam["Tuoi"])+',';
						chuoi1+=JSON.stringify(mangtam["GioiTinh"])+',';
						chuoi1+=JSON.stringify(mangtam["TenLoaiKham"])+',';
						chuoi1+=JSON.stringify(mangtam["GioHenKham"])+',';
						chuoi1+=JSON.stringify(mangtam["NgayGioTao"])+',';
						chuoi1+=JSON.stringify(mangtam["TenBSChiDinh"])+',';
						chuoi1+=JSON.stringify(mangtam["GhiChu"])+',';
						chuoi1+=JSON.stringify(mangtam["GoiKham"])+',';
						chuoi1+=JSON.stringify(mangtam["NotesStatus"])+',';
						chuoi1+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
						chuoi1+=JSON.stringify(mangtam["ID_LoaiKham"])+',';
						chuoi1+=JSON.stringify(mangtam["ID_LoaiKham"])+']},';	
					}				
					if(mangtam['ID_TrangThai']=='DangKham' || mangtam['ID_TrangThai']=='DaThucHien' || mangtam['ID_TrangThai']=='DaLayBenhPham' ){
						chuoi2+='{"id":'+mangtam['ID_Kham']+',"cell":[';
						chuoi2+=JSON.stringify(mangtam["ID_Kham"])+',';
						chuoi2+=JSON.stringify(mangtam["ID_LuotKham"])+',';
						chuoi2+=JSON.stringify(mangtam["MaBenhNhan"])+',';
						chuoi2+=JSON.stringify(mangtam["TenBenhNhan"])+',';
						chuoi2+=JSON.stringify(mangtam["Tuoi"])+',';
						chuoi2+=JSON.stringify(mangtam["GioiTinh"])+',';
						chuoi2+=JSON.stringify(mangtam["TenLoaiKham"])+',';
						chuoi2+=JSON.stringify(mangtam["NgayGioTao"])+',';
						chuoi2+=JSON.stringify(mangtam["NgayGioHenTraKQ"])+',';
						chuoi2+=JSON.stringify(mangtam["TenBSChiDinh"])+',';		
						chuoi2+=JSON.stringify(mangtam["NickName"])+',';
						chuoi2+=JSON.stringify(mangtam["GhiChu"])+',';
						chuoi2+=JSON.stringify(mangtam["GoiKham"])+',';
						chuoi2+=JSON.stringify(mangtam["ID_TrangThai"])+',';
						chuoi2+=JSON.stringify(mangtam["NotesStatus"])+',';
						chuoi2+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
						chuoi2+=JSON.stringify(mangtam["ID_LoaiKham"])+']},';	
					}
					if(mangtam['ID_TrangThai']=='Xong'){
						chuoi3+='{"id":'+mangtam['ID_Kham']+',"cell":[';
						chuoi3+=JSON.stringify(mangtam["ID_Kham"])+',';
						chuoi3+=JSON.stringify(mangtam["MaBenhNhan"])+',';
						chuoi3+=JSON.stringify(mangtam["TenBenhNhan"])+',';
						chuoi3+=JSON.stringify(mangtam["Tuoi"])+',';
						chuoi3+=JSON.stringify(mangtam["GioiTinh"])+',';
						chuoi3+=JSON.stringify(mangtam["TenLoaiKham"])+',';
						chuoi3+=JSON.stringify(mangtam["NgayGioKetThuc"])+',';
						chuoi3+=JSON.stringify(mangtam["NgayGioTao"])+',';
						chuoi3+=JSON.stringify(mangtam["ID_LoaiKham"])+',';		
						chuoi3+=JSON.stringify(mangtam["ID_TrangThai"])+',';
						chuoi3+=JSON.stringify(mangtam["ID_BenhNhan"])+',';	
						chuoi3+=JSON.stringify(mangtam["ID_LuotKham"])+']},';
					}
					if(mangtam['ID_TrangThai']=='Xong'){
						chuoi4+='{"id":'+mangtam['ID_Kham']+',"cell":[';
						chuoi4+=JSON.stringify(mangtam["ID_Kham"])+',';
						chuoi4+=JSON.stringify(mangtam["MaBenhNhan"])+',';
						chuoi4+=JSON.stringify(mangtam["TenBenhNhan"]+' - '+mangtam["MaBenhNhan"])+',';
						chuoi4+=JSON.stringify(mangtam["Tuoi"])+',';
						chuoi4+=JSON.stringify(mangtam["GioiTinh"])+',';
						chuoi4+=JSON.stringify(mangtam["TenLoaiKham"])+',';
						chuoi4+=JSON.stringify(mangtam["NgayGioKetThuc"])+',';
						chuoi4+=JSON.stringify(mangtam["NgayGioTao"])+',';
						chuoi4+=JSON.stringify(mangtam["ID_LoaiKham"])+',';		
						chuoi4+=JSON.stringify(mangtam["ID_TrangThai"])+',';
						chuoi4+=JSON.stringify(mangtam["ID_BenhNhan"])+',';	
						chuoi4+=JSON.stringify(mangtam["ID_LuotKham"])+']},';	
					}
				}else{
					if(mangtam['nhomxephang']== null){
						mangtam['nhomxephang']='a';
					}
					if(mangtam['ID_TrangThai']=='DangCho' && mangtam['nhomxephang'].indexOf(data) > -1){
					chuoi1+='{"id":'+mangtam['ID_Kham']+',"cell":[';
					chuoi1+=JSON.stringify(mangtam["ID_Kham"])+',';
					chuoi1+=JSON.stringify(mangtam["ID_LuotKham"])+',';
					chuoi1+=JSON.stringify(mangtam["MaBenhNhan"])+',';
					chuoi1+=JSON.stringify(mangtam["TenBenhNhan"])+',';
					chuoi1+=JSON.stringify(mangtam["Tuoi"])+',';
					chuoi1+=JSON.stringify(mangtam["GioiTinh"])+',';
					chuoi1+=JSON.stringify(mangtam["TenLoaiKham"])+',';
					chuoi1+=JSON.stringify(mangtam["GioHenKham"])+',';
					chuoi1+=JSON.stringify(mangtam["NgayGioTao"])+',';
					chuoi1+=JSON.stringify(mangtam["TenBSChiDinh"])+',';
					chuoi1+=JSON.stringify(mangtam["GhiChu"])+',';
					chuoi1+=JSON.stringify(mangtam["GoiKham"])+',';
					chuoi1+=JSON.stringify(mangtam["NotesStatus"])+',';
					chuoi1+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
					chuoi1+=JSON.stringify(mangtam["ID_LoaiKham"])+',';
					chuoi1+=JSON.stringify(mangtam["ID_LoaiKham"])+']},';	
				}				
				if((mangtam['ID_TrangThai']=='DangKham' || mangtam['ID_TrangThai']=='DaThucHien' || mangtam['ID_TrangThai']=='DaLayBenhPham') && mangtam['nhomxephang'].indexOf(data) > -1){
					chuoi2+='{"id":'+mangtam['ID_Kham']+',"cell":[';
					chuoi2+=JSON.stringify(mangtam["ID_Kham"])+',';
					chuoi2+=JSON.stringify(mangtam["ID_LuotKham"])+',';
					chuoi2+=JSON.stringify(mangtam["MaBenhNhan"])+',';
					chuoi2+=JSON.stringify(mangtam["TenBenhNhan"])+',';
					chuoi2+=JSON.stringify(mangtam["Tuoi"])+',';
					chuoi2+=JSON.stringify(mangtam["GioiTinh"])+',';
					chuoi2+=JSON.stringify(mangtam["TenLoaiKham"])+',';
					chuoi2+=JSON.stringify(mangtam["NgayGioTao"])+',';
					chuoi2+=JSON.stringify(mangtam["NgayGioHenTraKQ"])+',';
					chuoi2+=JSON.stringify(mangtam["TenBSChiDinh"])+',';		
					chuoi2+=JSON.stringify(mangtam["NickName"])+',';
					chuoi2+=JSON.stringify(mangtam["GhiChu"])+',';
					chuoi2+=JSON.stringify(mangtam["GoiKham"])+',';
					chuoi2+=JSON.stringify(mangtam["ID_TrangThai"])+',';
					chuoi2+=JSON.stringify(mangtam["NotesStatus"])+',';
					chuoi2+=JSON.stringify(mangtam["ID_BenhNhan"])+',';
					chuoi2+=JSON.stringify(mangtam["ID_LoaiKham"])+']},';	
				}
				if(mangtam['ID_TrangThai']=='Xong' && mangtam['nhomxephang'].indexOf(data) > -1){
					chuoi3+='{"id":'+mangtam['ID_Kham']+',"cell":[';
					chuoi3+=JSON.stringify(mangtam["ID_Kham"])+',';
					chuoi3+=JSON.stringify(mangtam["MaBenhNhan"])+',';
					chuoi3+=JSON.stringify(mangtam["TenBenhNhan"])+',';
					chuoi3+=JSON.stringify(mangtam["Tuoi"])+',';
					chuoi3+=JSON.stringify(mangtam["GioiTinh"])+',';
					chuoi3+=JSON.stringify(mangtam["TenLoaiKham"])+',';
					chuoi3+=JSON.stringify(mangtam["NgayGioKetThuc"])+',';
					chuoi3+=JSON.stringify(mangtam["NgayGioTao"])+',';
					chuoi3+=JSON.stringify(mangtam["ID_LoaiKham"])+',';		
					chuoi3+=JSON.stringify(mangtam["ID_TrangThai"])+',';
					chuoi3+=JSON.stringify(mangtam["ID_BenhNhan"])+',';	
					chuoi3+=JSON.stringify(mangtam["ID_LuotKham"])+']},';
				}
				if(mangtam['ID_TrangThai']=='Xong' && mangtam['nhomxephang'].indexOf(data) > -1){
					chuoi4+='{"id":'+mangtam['ID_Kham']+',"cell":[';
					chuoi4+=JSON.stringify(mangtam["ID_Kham"])+',';
					chuoi4+=JSON.stringify(mangtam["MaBenhNhan"])+',';
					chuoi4+=JSON.stringify(mangtam["TenBenhNhan"]+' - '+mangtam["MaBenhNhan"])+',';
					chuoi4+=JSON.stringify(mangtam["Tuoi"])+',';
					chuoi4+=JSON.stringify(mangtam["GioiTinh"])+',';
					chuoi4+=JSON.stringify(mangtam["TenLoaiKham"])+',';
					chuoi4+=JSON.stringify(mangtam["NgayGioKetThuc"])+',';
					chuoi4+=JSON.stringify(mangtam["NgayGioTao"])+',';
					chuoi4+=JSON.stringify(mangtam["ID_LoaiKham"])+',';		
					chuoi4+=JSON.stringify(mangtam["ID_TrangThai"])+',';
					chuoi4+=JSON.stringify(mangtam["ID_BenhNhan"])+',';	
					chuoi4+=JSON.stringify(mangtam["ID_LuotKham"])+']},';	
				}
					
					
				}
			}	
			if(chuoi1=='{"rows":['){
				chuoi1='{}';
			}else{
				chuoi1=chuoi1.slice(0, - 1)+']}';
			}
			if(chuoi2=='||{"rows":['){
				chuoi2='||{}';
			}else{
				chuoi2=chuoi2.slice(0, - 1)+']}';
			}
			if(chuoi3=='||{"rows":['){
				chuoi3='||{}';
			}else{
				chuoi3=chuoi3.slice(0, - 1)+']}';
			}
			if(chuoi4=='||{"rows":['){
				chuoi4='||{}';
			}else{
				chuoi4=chuoi4.slice(0, - 1)+']}';
			}
					
			
			
			chuoitrave=chuoi1+''+chuoi2+''+chuoi3+''+chuoi4;
			socket.emit('news', chuoitrave);		
		}
		
  });
					
})

isloading()
		

function isloading(){

sql.connect(config, function(err) {
	var request = new sql.Request();
	var chuoitrave='';
	var chuoi1='';
	var chuoi2='';
	var chuoi3='';
	var chuoi4='';
	request.execute('GD2_LayDSXepHangCanLamSang_GroupXetNghiem_soc', function(err, recordsets, returnValue) {   
		count=1;
		console.log(count);
		//console.log(chuoitrave);
		mang = JSON.stringify(recordsets[0]);
		//console.dir(mang);
		
		
		 setTimeout(function(){
			sql.close();
			isloading()
		
		 },4000)
		
	//	for(var i=0;i<clients.length;i++){
			
		//	clients[i].emit('news', chuoitrave);
			
		//}
                   // send jobs
       // io.to('a').emit('news', chuoitrave);
	//	var destination = clients;
      //      destination.emit("news" , chuoitrave);
	/*  var tam=5;
   		for(var i=0;i<=tam;i++){
			setTimeout(function(){
				
				socket.emit('news', chuoitrave);
				
			
			},500)
			if(i==tam){
				count=0;
			}
		}*/
	/*	setTimeout(function(){
				
				count=0;
				
			
			},5000)*/
		
		
	});		
});



}


