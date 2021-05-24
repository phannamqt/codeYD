
var fs    = require('fs');
var path = 'F:/pic_data/';
var thongtinluotkham;
var soca;
var lanchay;

var sql = require('mssql');  
var config = {
	user: 'cc',
	password: 'Ehe@lth',
    server: '192.168.1.105', // You can use 'localhost\\instance' to connect to named instance 
    database: 'ehealth_real',    
    options: {
        encrypt: false // Use this if you're on Windows Azure 
    }
}
var io=require('socket.io').listen(5001);

io.on('connection', function(socket) {
	socket.on('all', function(data) {		
		data=data.split('|');
		xuat_xml(data[0],data[1],1,"F:/pic_data/BHYT/");
		console.log("all");
	})
	socket.on('list', function(data) {	
		thongtinluotkham= JSON.parse(data);
		soca=thongtinluotkham.length;
		lanchay=0;
		xuat_xml(thongtinluotkham[0]['ID_ThuTraNo'],thongtinluotkham[0]['noitru'],2,"F:/pic_data/BHYT/");	
		console.log("list");
	})
})

//caccachuathanhtoan();
function xuat_xml(id_thutrano,noitru,tinhtrang,duongdan){	
	
	if(tinhtrang==0){
		var _userOffset = thongtinluotkham[lanchay]['NgayGio'].getTimezoneOffset()*60000;
		var d=new Date(thongtinluotkham[lanchay]['NgayGio'].getTime()+_userOffset);
		var today = new Date();
		hour = Math.abs(d - today) / 36e5;
		if (today.getHours()==23){	
			hour=1;
		}
	}else{
		hour=1;
	}
	if(hour>=1){
		console.log(tinhtrang);
		sql.connect(config, function(err) {
			var request  = new sql.Request();
			var request1 = new sql.Request();
			var request2 = new sql.Request();		
			var request3 = new sql.Request();		
			var thongtin;
			var thongtinthuoc;
			var thongtincls;
			var MA_KHOA;	
			var NAM_QT
			var THANG_QT;
			var NGAYLAP;
			var tongthuoc=0;
			var	tongcls=0;
			var	ThanhTienBaoHiem=0;
			var store_name='';
			var MA_LOAI_KCB='';
			var TongNgay='';
			request.input('id_thutrano', sql.Int, id_thutrano);		
			request1.input('id_thutrano', sql.Int, id_thutrano);
			request2.input('id_thutrano', sql.Int, id_thutrano);	

			if(noitru==0){
				store_name='GD2_Thongtin_benhnhan_bhyt';
				MA_LOAI_KCB=2;				
			}else{
				store_name='GD2_Thongtin_benhnhan_bhytnt';
				MA_LOAI_KCB=3;				
			}

			request.execute(store_name, function(err, recordsets, returnValue) {   	
				if(err === undefined){
					thongtin = recordsets[0][0];
					TongNgay=thongtin.tongngay;
					if(noitru==0){
						if(thongtin.ID_PhanLoaiKham==24){
							MA_KHOA='K02';		
						}else{
							MA_KHOA='K01';
						}								
						NAM_QT= formatTimezoneOffset(thongtin.ThoiGianKetThucKham).getFullYear();
						THANG_QT=formatTimezoneOffset(thongtin.ThoiGianKetThucKham).getMonth()+1;
						NGAYLAP=formatDate(thongtin.ThoiGianKetThucKham);		
					}else{
						MA_KHOA=thongtin.Makhoa_BHYT;	

						if(thongtin.ThoiGianKetThucKham=== null){
							NAM_QT='';
						}else{
							NAM_QT=formatTimezoneOffset(thongtin.ThoiGianKetThucKham).getFullYear();
						}	

						if(thongtin.ThoiGianKetThucKham=== null){
							THANG_QT='';
						}else{
							THANG_QT=formatTimezoneOffset(thongtin.ThoiGianKetThucKham).getMonth()+1;
						}	

						if(thongtin.ThoiGianKetThucKham=== null){
							NGAYLAP='';
						}else{
							NGAYLAP=formatDate(thongtin.ThoiGianKetThucKham);
						}				
					}	
					request1.execute('GD2_BHYT_ngoaithuoc_quyettoan', function(err, recordsets, returnValue) {   		
						thongtinthuoc = recordsets[0];	
						request2.execute('GD2_BHYT_ngoaicls_quyettoan', function(err, recordsets, returnValue) {  					
							thongtincls = recordsets[0];											
							if(thongtin.NgayThangNamSinh === null){
								NamSinh =thongtin.NamSinh;
							}else{		
								NamSinh =formatDate(thongtin.NgayThangNamSinh);
							}						
							if(thongtin.ThoiGianVaoKham === null){
								thongtin.ThoiGianVaoKham='';
							}else{		
								thongtin.ThoiGianVaoKham =formatDatehour(thongtin.ThoiGianVaoKham);
							}					
							if(thongtin.ThoiGianKetThucKham === null){
								thongtin.ThoiGianKetThucKham='';
							}else{		
								thongtin.ThoiGianKetThucKham =formatDatehour(thongtin.ThoiGianKetThucKham);
							}		
							if(thongtin.GioiTinh==1){
								GioiTinh =2;
							}else{
								GioiTinh =1;
							}					
							if(thongtin.TrangThaiKham==4){
								TrangThaiKham =2;
							}else if(thongtin.TrangThaiKham==1){
								TrangThaiKham =1;
							}else if(thongtin.TrangThaiKham==3){
								TrangThaiKham =3;
							}					
							MA_LK=thongtin.ID_LuotKham;
							MA_BENH=thongtin.MaICD10;
					//
					chitietcls='<DSACH_CHI_TIET_DVKT>';
					for(var i=0;i<thongtincls.length;i++){	  
						tongcls=tongcls+thongtincls[i]['thanhtien'];						
						thongtincls[i]['cungchitra']=100;
						ThanhTienBaoHiem=ThanhTienBaoHiem+thongtincls[i]['ThanhTienBaoHiem'];

						if(thongtincls[i]['ID_BHYT']==10){
							chitietcls=chitietcls+'<CHI_TIET_DVKT><MA_LK>'+MA_LK+'</MA_LK><STT>'+(i+1)+'</STT><MA_DICH_VU></MA_DICH_VU><MA_VAT_TU>'+thongtincls[i]['MaSoTheoDVBHYT']+'</MA_VAT_TU><MA_NHOM>'+thongtincls[i]['ID_BHYT']+'</MA_NHOM><TEN_DICH_VU><![CDATA['+thongtincls[i]['ten']+']]></TEN_DICH_VU><DON_VI_TINH>Lần</DON_VI_TINH><SO_LUONG>'+thongtincls[i]['soluong']+'</SO_LUONG><DON_GIA>'+thongtincls[i]['dongia']+'</DON_GIA><TYLE_TT>'+Math.ceil(thongtincls[i]['cungchitra'])+'</TYLE_TT><THANH_TIEN>'+thongtincls[i]['thanhtien']+'</THANH_TIEN><MA_KHOA>'+MA_KHOA+'</MA_KHOA><MA_BAC_SI></MA_BAC_SI><MA_BENH>'+MA_BENH+'</MA_BENH><NGAY_YL>'+formatDatehour(thongtincls[i]['NgayGio'])+'</NGAY_YL><NGAY_KQ></NGAY_KQ><MA_PTTT></MA_PTTT><MA_GIA></MA_GIA></CHI_TIET_DVKT>';						
						}else{
							chitietcls=chitietcls+'<CHI_TIET_DVKT><MA_LK>'+MA_LK+'</MA_LK><STT>'+(i+1)+'</STT><MA_DICH_VU>'+thongtincls[i]['MaSoTheoDVBHYT']+'</MA_DICH_VU><MA_VAT_TU></MA_VAT_TU><MA_NHOM>'+thongtincls[i]['ID_BHYT']+'</MA_NHOM><TEN_DICH_VU><![CDATA['+thongtincls[i]['ten']+']]></TEN_DICH_VU><DON_VI_TINH>Lần</DON_VI_TINH><SO_LUONG>'+thongtincls[i]['soluong']+'</SO_LUONG><DON_GIA>'+thongtincls[i]['dongia']+'</DON_GIA><TYLE_TT>'+Math.ceil(thongtincls[i]['cungchitra'])+'</TYLE_TT><THANH_TIEN>'+thongtincls[i]['thanhtien']+'</THANH_TIEN><MA_KHOA>'+MA_KHOA+'</MA_KHOA><MA_BAC_SI></MA_BAC_SI><MA_BENH>'+MA_BENH+'</MA_BENH><NGAY_YL>'+formatDatehour(thongtincls[i]['NgayGio'])+'</NGAY_YL><NGAY_KQ></NGAY_KQ><MA_PTTT></MA_PTTT><MA_GIA></MA_GIA></CHI_TIET_DVKT>';						
						}      
						
					}
					chitietcls=chitietcls+'</DSACH_CHI_TIET_DVKT>';
					
					//thuoc
					if(thongtinthuoc.length>0){							
						chitietthuoc='<DSACH_CHI_TIET_THUOC>';
						for(var i=0;i<thongtinthuoc.length;i++){
							if(thongtinthuoc[i]['HamLuong'] === null){
								thongtinthuoc[i]['HamLuong'] ='';
							}
							if(thongtinthuoc[i]['SignNumber'] === null){
								thongtinthuoc[i]['SignNumber'] ='';
							}			
							tongthuoc=tongthuoc+thongtinthuoc[i]['thanhtien'];
							ThanhTienBaoHiem=ThanhTienBaoHiem+thongtinthuoc[i]['ThanhTienBaoHiem'];   
							chitietthuoc=chitietthuoc+'<CHI_TIET_THUOC><MA_LK>'+MA_LK+'</MA_LK><STT>'+(i+1)+'</STT><MA_THUOC>'+thongtinthuoc[i]['MaSoTheoDMBHYT']+'</MA_THUOC><MA_NHOM>'+thongtinthuoc[i]['id_nhombhyt']+'</MA_NHOM><TEN_THUOC><![CDATA['+thongtinthuoc[i]['ten']+']]></TEN_THUOC><DON_VI_TINH>'+thongtinthuoc[i]['TenDonViTinh']+'</DON_VI_TINH><HAM_LUONG><![CDATA['+thongtinthuoc[i]['HamLuong']+']]></HAM_LUONG><DUONG_DUNG>'+thongtinthuoc[i]['MaDD_BHYT']+'</DUONG_DUNG><LIEU_DUNG>'+thongtinthuoc[i]['CachDung']+'</LIEU_DUNG><SO_DANG_KY>'+thongtinthuoc[i]['SignNumber']+'</SO_DANG_KY><SO_LUONG>'+thongtinthuoc[i]['soluong']+'</SO_LUONG><DON_GIA>'+thongtinthuoc[i]['dongia']+'</DON_GIA><TYLE_TT>'+Math.ceil(thongtinthuoc[i]['phantramchitra'])+'</TYLE_TT><THANH_TIEN>'+thongtinthuoc[i]['thanhtien']+'</THANH_TIEN><MA_KHOA>'+MA_KHOA+'</MA_KHOA><MA_BAC_SI></MA_BAC_SI><MA_BENH>'+MA_BENH+'</MA_BENH><NGAY_YL>'+formatDatehour(thongtinthuoc[i]['NgayKeDon'])+'</NGAY_YL><MA_PTTT></MA_PTTT></CHI_TIET_THUOC>';
						}			

						chitietthuoc=chitietthuoc+'</DSACH_CHI_TIET_THUOC>';	
								
						chitietthuoc=(new Buffer(chitietthuoc).toString('base64'));		
						//var utf8encoded = (new Buffer(chitietthuoc, 'base64')).toString('utf8');
						//console.log(utf8encoded);
					}
					//thuoc
					
					//
					if(ThanhTienBaoHiem==(tongthuoc+tongcls)){
						thongtin['phantramchitra']=100;
					}
					
					XML1 ='<?xml version="1.0" encoding="utf-8"?><GIAMDINHHS xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><THONGTINDONVI><MACSKCB>48195</MACSKCB></THONGTINDONVI><THONGTINHOSO><NGAYLAP>'+NGAYLAP+'</NGAYLAP><SOLUONGHOSO>1</SOLUONGHOSO><DANHSACHHOSO><HOSO><FILEHOSO><LOAIHOSO>XML1</LOAIHOSO><NOIDUNGFILE>';
					tonghop='<TONG_HOP><MA_LK>'+thongtin['ID_LuotKham']+'</MA_LK><STT>1</STT><MA_BN>'+thongtin['MaBenhNhan']+'</MA_BN><HO_TEN>'+thongtin['HoLotBenhNhan']+' '+thongtin['TenBenhNhan']+'</HO_TEN><NGAY_SINH>'+NamSinh+'</NGAY_SINH><GIOI_TINH>'+GioiTinh+'</GIOI_TINH><DIA_CHI>'+thongtin['DiaChiTheBHYT'].replace("&","")+'</DIA_CHI><MA_THE>'+thongtin['SoThe']+'</MA_THE><MA_DKBD>'+thongtin['Ma_KCB_BanDau'].replace("-","")+'</MA_DKBD><GT_THE_TU>'+formatDate(thongtin['HanSD_TuNgay'])+'</GT_THE_TU><GT_THE_DEN>'+formatDate(thongtin['HanSD_DenNgay'])+'</GT_THE_DEN><TEN_BENH><![CDATA['+thongtin['ChanDoan']+']]></TEN_BENH><MA_BENH>'+thongtin['MaICD10']+'</MA_BENH><MA_BENHKHAC /><MA_LYDO_VVIEN>'+TrangThaiKham+'</MA_LYDO_VVIEN><MA_NOI_CHUYEN /><MA_TAI_NAN /><NGAY_VAO>'+thongtin['ThoiGianVaoKham']+'</NGAY_VAO><NGAY_RA>'+thongtin['ThoiGianKetThucKham']+'</NGAY_RA><SO_NGAY_DTRI>'+Math.ceil(TongNgay)+'</SO_NGAY_DTRI><KET_QUA_DTRI></KET_QUA_DTRI><TINH_TRANG_RV></TINH_TRANG_RV><NGAY_TTOAN>'+thongtin['ThoiGianKetThucKham']+'</NGAY_TTOAN><MUC_HUONG>'+thongtin['phantramchitra']+'</MUC_HUONG><T_THUOC>'+tongthuoc+'</T_THUOC><T_VTYT>0</T_VTYT><T_TONGCHI>'+(tongthuoc+tongcls)+'</T_TONGCHI><T_BNTT>'+((tongthuoc+tongcls)-ThanhTienBaoHiem)+'</T_BNTT><T_BHTT>'+ThanhTienBaoHiem+'</T_BHTT><T_NGUONKHAC /><T_NGOAIDS /><MA_LOAI_KCB>'+MA_LOAI_KCB+'</MA_LOAI_KCB><NAM_QT>'+NAM_QT+'</NAM_QT><THANG_QT>'+THANG_QT+'</THANG_QT><MA_KHOA>'+MA_KHOA+'</MA_KHOA><MA_CSKCB>48195</MA_CSKCB><MA_KHUVUC /><MA_PTTT_QT /><CAN_NANG /></TONG_HOP>';
					XML2="</NOIDUNGFILE></FILEHOSO><FILEHOSO><LOAIHOSO>XML2</LOAIHOSO><NOIDUNGFILE>";
					XML3="</NOIDUNGFILE></FILEHOSO><FILEHOSO><LOAIHOSO>XML3</LOAIHOSO><NOIDUNGFILE>";
					XML4="</NOIDUNGFILE></FILEHOSO></HOSO></DANHSACHHOSO></THONGTINHOSO><CHUKYDONVI /></GIAMDINHHS>";				
					//
					tonghop=(new Buffer(tonghop).toString('base64'));
					chitietcls=(new Buffer(chitietcls).toString('base64'));					
					if(thongtinthuoc.length>0){		
						tong=XML1+tonghop+XML2+chitietthuoc+XML3+chitietcls+XML4;		
					}else{
						tong=XML1+tonghop+XML3+chitietcls+XML4;
					}					
					filename=thongtin['MaBenhNhan']+"_"+id_thutrano+".xml";
					fs.writeFile(duongdan+''+filename, tong, function(err) {
						if(err) {
							return console.log(err);
							sql.close();
						}					
						console.log(filename+" was saved!");
						if(tinhtrang==0){
							request3.input('ID_LuotKham', sql.Int, thongtin['ID_LuotKham']);
							request3.execute('GD2_BHYT_xml_DaChuyen_Update', function(err, recordsets, returnValue) {   
								sql.close();
								lanchay=lanchay+1;								
								if(lanchay<soca){
									console.log(lanchay+'|'+thongtinluotkham[lanchay]['ID_ThuTraNo']);
									xuat_xml(thongtinluotkham[lanchay]['ID_ThuTraNo'],thongtinluotkham[lanchay]['noitru'],0,"F:/bhyt_xml/");
								}
							})
						}else if(tinhtrang==1){
							sql.close();
						}else if(tinhtrang==2){	
							sql.close();
							lanchay=lanchay+1;		
							if(lanchay<soca){
								xuat_xml(thongtinluotkham[lanchay]['ID_ThuTraNo'],thongtinluotkham[lanchay]['noitru'],2,duongdan);				
							}					

						}
					}); 
				});
});
}else{
	sql.close();
	xuat_xml(id_thutrano,noitru,tinhtrang,duongdan);					
}

});	



});
}else{
	lanchay=lanchay+1;
	if(lanchay<soca){
		xuat_xml(thongtinluotkham[lanchay]['ID_ThuTraNo'],thongtinluotkham[lanchay]['noitru'],0,"F:/bhyt_xml/");
	}
}
}


function formatDate(date) {
	if(date === null){
		return '';
	}else{
		var d = date;
		var _userOffset = d.getTimezoneOffset()*60000;
		d=new Date(d.getTime()+_userOffset);
		month = '' + (d.getMonth() + 1);
		day = '' + d.getDate();
		year = d.getFullYear();
		if (month.length < 2) month = '0' + month;
		if (day.length < 2) day = '0' + day;
		return [year, month, day].join('');
	}
}

function formatTimezoneOffset(date) {
	if(date === null){
		return '';
	}else{
		var d = date;
		var _userOffset = d.getTimezoneOffset()*60000;
		d=new Date(d.getTime()+_userOffset);		
		return d;
	}
}

function formatDatehour(date) {
	if(date === null){
		return '';
	}else{
		var d = date;
		var _userOffset = d.getTimezoneOffset()*60000;
		d=new Date(d.getTime()+_userOffset);
		month = '' + (d.getMonth() + 1);
		day = '' + d.getDate();
		year = d.getFullYear();
		Hour = '' + d.getHours();
		Minute = '' + d.getMinutes();
		if (month.length < 2) month = '0' + month;
		if (day.length < 2) day = '0' + day;
		if (Hour.length < 2) Hour = '0' + Hour;
		if (Minute.length < 2) Minute = '0' + Minute;		
		return [year, month, day , Hour ,Minute].join('');
	}
}

function caccachuathanhtoan(){
	sql.connect(config, function(err) {
		var request5  = new sql.Request();
		request5.execute('GD2_BHYT_xml_chuachuyen', function(err, recordsets, returnValue) {   
			sql.close();
			thongtinluotkham= recordsets[0];
			soca=thongtinluotkham.length;
			lanchay=0;
			if(	thongtinluotkham.length>0){				
				xuat_xml(thongtinluotkham[0]['ID_ThuTraNo'],thongtinluotkham[0]['noitru'],0,"F:/bhyt_xml/");				
			}						
			setTimeout(function(){				
				caccachuathanhtoan();			
			},600000)
		})
	})
}

