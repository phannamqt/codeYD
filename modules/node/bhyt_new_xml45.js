
var fs    = require('fs');

var thongtinluotkham;
var soca;
var lanchay;
var custom = require('./custom');
var config = custom.config;
var sql = require('mssql');  
var Big = require('big.js');
var folder_default='xml_bhyt/bhyt_xml_45';

var io=require('socket.io').listen(3010);

io.on('connection', function(socket) {
	socket.on('all', function(data) {		
		data=data.split('|');
		xuat_xml(data[0],data[1],1,"F:/xml_bhyt/bhyt_4210/");
		console.log("all");
	})
	socket.on('list', function(data) {	
		thongtinluotkham= JSON.parse(data);
		soca=thongtinluotkham.length;
		lanchay=0;
		console.log("list");
		xuat_xml(thongtinluotkham[0]['ID_ThuTraNo'],thongtinluotkham[0]['noitru'],2,"F:/xml_bhyt/bhyt_4210/");	
		
	})
})

caccachuathanhtoan();
function xuat_xml(id_thutrano,noitru,tinhtrang,duongdan){	
	console.log(id_thutrano);
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
	
	if(hour<=1){
		sql.connect(config, function(err) {
			var request  = new sql.Request();
			var request1 = new sql.Request();
			var request2 = new sql.Request();		
			var request3 = new sql.Request();		
			var request4 = new sql.Request();	
			var request6 = new sql.Request();
			var thongtin;
			var thongtinthuoc;
			var thongtincls;
			var MA_KHOA;	
			var NAM_QT
			var THANG_QT;
			var NGAYLAP;
			var MA_BAC_SI;
			var T_BNTT= new Big(0);
			
			var tongthuoc = new Big(0);
			var tongvtyt = new Big(0);
			var	tongcls= new Big(0);
			var	ThanhTienBaoHiem= new Big(0);
			var store_name='';
			var MA_LOAI_KCB='';
			var TongNgay='';
			var T_BNCCT= new Big(0);
			request.input('id_thutrano', sql.Int, id_thutrano);		
			request1.input('id_thutrano', sql.Int, id_thutrano);
			request2.input('id_thutrano', sql.Int, id_thutrano);
			request6.input('id_thutrano', sql.Int, id_thutrano);
			request4.input('id_thutrano', sql.Int, id_thutrano);
			store_name='GD2_ThongTinLuotKhamBHYT';
			request.execute(store_name, function(err, recordsets, returnValue) {   	
				if(err === undefined){
					thongtin = recordsets[0][0];							
					//console.log(thongtin);			
					NAM_QT= formatTimezoneOffset(thongtin.NGAY_RA).getFullYear();
					THANG_QT=formatTimezoneOffset(thongtin.NGAYLAP).getMonth()+1;
					NGAYLAP=formatDate(thongtin.NGAYLAP);
					MA_KHOA=thongtin.MA_KHOA
					request1.execute('GD2_BHYT_ngoaithuoc_quyettoan', function(err, recordsets, returnValue) {   		
						thongtinthuoc = recordsets[0];	
						request2.execute('GD2_BHYT_ngoaicls_quyettoan', function(err, recordsets, returnValue) {  					
							thongtincls = recordsets[0];	

													
							
					//
					chitietcls='<DSACH_CHI_TIET_DVKT>';
					for(var i=0;i<thongtincls.length;i++){	 

						tongcls=tongcls.plus(thongtincls[i]['thanhtien']);	
						//T_BNCCT=T_BNCCT.plus(thongtincls[i]['T_BNCCT']);						
						ThanhTienBaoHiem=ThanhTienBaoHiem.plus(thongtincls[i]['ThanhTienBaoHiem']);

						if(thongtin['MA_LYDO_VVIEN']==3){							
							T_BNTT=T_BNTT.plus(thongtincls[i]['T_BNCCT']);	
						}else{
							T_BNCCT=T_BNCCT.plus(thongtincls[i]['T_BNCCT']);												
						}

						if(thongtincls[i]['MA_BAC_SI'] === null){
								thongtincls[i]['MA_BAC_SI'] ='';
						}

						if(thongtincls[i]['TT_THAU'] === null){
								thongtincls[i]['TT_THAU'] ='';
						}

						thongtincls[i]['cungchitra']=100;
							chitietcls+='<CHI_TIET_DVKT>';
							chitietcls+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';	
							chitietcls+='<STT>'+(i+1)+'</STT>';	
						if(thongtincls[i]['ID_BHYT']==10){
							tongvtyt=tongvtyt.plus(thongtincls[i]['thanhtien']);

							chitietcls+='<MA_DICH_VU></MA_DICH_VU>';	
							chitietcls+='<MA_VAT_TU>'+thongtincls[i]['MaSoTheoDVBHYT']+'</MA_VAT_TU>';	
							chitietcls+='<TEN_VAT_TU><![CDATA['+thongtincls[i]['ten']+']]></TEN_VAT_TU>';
						}else{
							
							chitietcls+='<MA_DICH_VU>'+thongtincls[i]['MaSoTheoDVBHYT']+'</MA_DICH_VU>';
							chitietcls+='<MA_VAT_TU></MA_VAT_TU>';
							chitietcls+='<TEN_VAT_TU></TEN_VAT_TU>';
						}
							chitietcls+='<MA_NHOM>'+thongtincls[i]['ID_BHYT']+'</MA_NHOM>';	
							chitietcls+='<GOI_VTYT></GOI_VTYT>';	
						
							chitietcls+='<TEN_DICH_VU><![CDATA['+thongtincls[i]['ten']+']]></TEN_DICH_VU>';	
							chitietcls+='<DON_VI_TINH>Lần</DON_VI_TINH>';
							chitietcls+='<PHAM_VI>1</PHAM_VI>';		
							chitietcls+='<SO_LUONG>'+thongtincls[i]['soluong']+'</SO_LUONG>';	
							chitietcls+='<DON_GIA>'+thongtincls[i]['dongia']+'</DON_GIA>';	
							chitietcls+='<TT_THAU>'+thongtincls[i]['TT_THAU']+'</TT_THAU>';//
							chitietcls+='<MUC_HUONG>'+thongtincls[i]['MUC_HUONG']+'</MUC_HUONG>';//
							chitietcls+='<T_NGUONKHAC>0</T_NGUONKHAC>';//

							if(thongtin['MA_LYDO_VVIEN']==3){
								chitietcls+='<T_BNTT>'+thongtincls[i]['T_BNCCT']+'</T_BNTT>';//
								chitietcls+='<T_BNCCT>0</T_BNCCT>';//
							}else{
								chitietcls+='<T_BNTT>0</T_BNTT>';//
								chitietcls+='<T_BNCCT>'+thongtincls[i]['T_BNCCT']+'</T_BNCCT>';//
							}
							
							chitietcls+='<T_BHTT>'+thongtincls[i]['T_BHTT']+'</T_BHTT>';//
							
							chitietcls+='<T_NGOAIDS>0</T_NGOAIDS>';//
							if(thongtincls[i]['ID_BHYT']==15){
								chitietcls+='<MA_GIUONG>H1</MA_GIUONG>';//
							}else{
								chitietcls+='<MA_GIUONG></MA_GIUONG>';//
							}							
							chitietcls+='<TYLE_TT>'+Math.round(thongtincls[i]['cungchitra'])+'</TYLE_TT>';	
							chitietcls+='<THANH_TIEN>'+thongtincls[i]['thanhtien']+'</THANH_TIEN>';	
							chitietcls+='<T_TRANTT>'+thongtincls[i]['thanhtien']+'</T_TRANTT>';	//
							chitietcls+='<MA_KHOA>'+MA_KHOA+'</MA_KHOA>';	
							chitietcls+='<MA_BAC_SI>'+thongtincls['MA_BAC_SI']+'</MA_BAC_SI>';	
							chitietcls+='<MA_BENH>'+thongtin['MA_BENH']+'</MA_BENH>';	
							chitietcls+='<NGAY_YL>'+formatDatehour(thongtincls[i]['NgayGio'])+'</NGAY_YL>';	
							chitietcls+='<NGAY_KQ></NGAY_KQ>';	
							chitietcls+='<MA_PTTT>0</MA_PTTT>';							
							chitietcls+='</CHI_TIET_DVKT>';	
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
							if(thongtinthuoc[i]['MA_KHOA'] =='' || thongtinthuoc[i]['MA_KHOA'] === null){
								thongtinthuoc[i]['MA_KHOA'] =MA_KHOA;
							}			

							if(thongtinthuoc[i]['MA_BAC_SI'] === null){								
							}else{
								MA_BAC_SI=thongtinthuoc[i]['MA_BAC_SI'];
							}



							
							//tongcls=tongcls.plus(thongtincls[i]['thanhtien']);	
							//T_BNCCT=T_BNCCT.plus(thongtincls[i]['T_BNCCT']);						
							//ThanhTienBaoHiem=ThanhTienBaoHiem.plus(thongtincls[i]['ThanhTienBaoHiem']);

							tongthuoc=tongthuoc.plus(thongtinthuoc[i]['thanhtien']);
							ThanhTienBaoHiem=ThanhTienBaoHiem.plus(thongtinthuoc[i]['ThanhTienBaoHiem']);
						

							if(thongtin['MA_LYDO_VVIEN']==3){							
								T_BNTT=T_BNTT.plus(thongtinthuoc[i]['T_BNCCT']);	
							}else{
								T_BNCCT=T_BNCCT.plus(thongtinthuoc[i]['T_BNCCT']);												
							}
							

							
							chitietthuoc+='<CHI_TIET_THUOC>';
							chitietthuoc+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';
							chitietthuoc+='<STT>'+(i+1)+'</STT>';			
							chitietthuoc+='<MA_THUOC>'+thongtinthuoc[i]['MaSoTheoDMBHYT']+'</MA_THUOC>';
							chitietthuoc+='<MA_NHOM>'+thongtinthuoc[i]['id_nhombhyt']+'</MA_NHOM>';
							chitietthuoc+='<TEN_THUOC><![CDATA['+thongtinthuoc[i]['ten']+']]></TEN_THUOC>';
							chitietthuoc+='<DON_VI_TINH>'+thongtinthuoc[i]['TenDonViTinh']+'</DON_VI_TINH>';
							chitietthuoc+='<HAM_LUONG><![CDATA['+thongtinthuoc[i]['HamLuong']+']]></HAM_LUONG>';
							chitietthuoc+='<DUONG_DUNG>'+thongtinthuoc[i]['MaDD_BHYT']+'</DUONG_DUNG>';
							chitietthuoc+='<LIEU_DUNG>'+thongtinthuoc[i]['CachDung']+'</LIEU_DUNG>';						
							chitietthuoc+='<SO_DANG_KY>'+thongtinthuoc[i]['SignNumber']+'</SO_DANG_KY>';
							chitietthuoc+='<TT_THAU>'+thongtinthuoc[i]['TT_THAU']+'</TT_THAU>';
							chitietthuoc+='<PHAM_VI>1</PHAM_VI>';
							chitietthuoc+='<TYLE_TT>'+Math.round(thongtinthuoc[i]['phantramchitra'])+'</TYLE_TT>';
							chitietthuoc+='<SO_LUONG>'+thongtinthuoc[i]['soluong']+'</SO_LUONG>';
							chitietthuoc+='<DON_GIA>'+thongtinthuoc[i]['dongia']+'</DON_GIA>';
							chitietthuoc+='<THANH_TIEN>'+thongtinthuoc[i]['thanhtien']+'</THANH_TIEN>';
							chitietthuoc+='<MUC_HUONG>'+Math.round(thongtinthuoc[i]['MUC_HUONG'])+'</MUC_HUONG>';
							chitietthuoc+='<T_NGUONKHAC>0</T_NGUONKHAC>';

							if(thongtin['MA_LYDO_VVIEN']==3){
								chitietthuoc+='<T_BNTT>'+thongtinthuoc[i]['T_BNCCT']+'</T_BNTT>';
								chitietthuoc+='<T_BNCCT>0</T_BNCCT>';
							}else{
								chitietthuoc+='<T_BNTT>0</T_BNTT>';
								chitietthuoc+='<T_BNCCT>'+thongtinthuoc[i]['T_BNCCT']+'</T_BNCCT>';
							}
							
							chitietthuoc+='<T_BHTT>'+thongtinthuoc[i]['T_BHTT']+'</T_BHTT>';
							
							chitietthuoc+='<T_NGOAIDS>0</T_NGOAIDS>';
							chitietthuoc+='<MA_KHOA>'+thongtinthuoc[i]['MA_KHOA']+'</MA_KHOA>';
							chitietthuoc+='<MA_BAC_SI>'+MA_BAC_SI+'</MA_BAC_SI>';
							chitietthuoc+='<MA_BENH>'+thongtin['MA_BENH']+'</MA_BENH>';
							chitietthuoc+='<NGAY_YL>'+formatDatehour(thongtinthuoc[i]['NgayKeDon'])+'</NGAY_YL>';
							chitietthuoc+='<MA_PTTT>0</MA_PTTT>';

							chitietthuoc+='</CHI_TIET_THUOC>';
						}
						chitietthuoc=chitietthuoc+'</DSACH_CHI_TIET_THUOC>';	
						chitietthuoc=(new Buffer(chitietthuoc).toString('base64'));					
					}
					//thuoc
					
					//
					if(ThanhTienBaoHiem==(tongthuoc.plus(tongcls))){
						thongtin['phantramchitra']=100;
					}

					if(thongtin['CAN_NANG'] === null){
						thongtin['CAN_NANG'] ='';
					}
					T_TONGCHI=tongthuoc.plus(tongcls);

					if(thongtin['CAN_NANG'] === ''){

						var date1 = thongtin['NGAY_SINH'];
						var date2 = thongtin['NGAY_VAO'];
						var diffYears = date2.getFullYear()-date1.getFullYear();
						var diffMonths = date2.getMonth()-date1.getMonth();
						var diffDays = date2.getDate()-date1.getDate();

						var months = (diffYears*12 + diffMonths);
						if(diffDays>0) {
						    months += '.'+diffDays;
						} else if(diffDays<0) {
						    months--;
						    months += '.'+(new Date(date2.getFullYear(),date2.getMonth(),0).getDate()+diffDays);
						}
						if(months<=2){
							thongtin['CAN_NANG']=3.5;
						}
						if(months>2 && months<=5){
							thongtin['CAN_NANG']=5;
						}
						if(months>5 && months<=9){
							thongtin['CAN_NANG']=7.5;
						}
						if(months>9 && months<=12){
							thongtin['CAN_NANG']=8.5;
						}
							console.log(thongtin['CAN_NANG']);
					}

					XML1 ='<?xml version="1.0" encoding="utf-8"?><GIAMDINHHS xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><THONGTINDONVI><MACSKCB>XXXXXXXXX</MACSKCB></THONGTINDONVI><THONGTINHOSO><NGAYLAP>'+NGAYLAP+'</NGAYLAP><SOLUONGHOSO>1</SOLUONGHOSO><DANHSACHHOSO><HOSO><FILEHOSO><LOAIHOSO>XML1</LOAIHOSO><NOIDUNGFILE>';
					tonghop='<TONG_HOP>';
					tonghop+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';
					tonghop+='<STT>1</STT>';
					tonghop+='<MA_BN>'+thongtin['MA_BN']+'</MA_BN>';
					tonghop+='<HO_TEN>'+thongtin['HO_TEN']+'</HO_TEN>';
					tonghop+='<NGAY_SINH>'+formatDate(thongtin['NGAY_SINH'])+'</NGAY_SINH>';
					tonghop+='<GIOI_TINH>'+thongtin['GIOI_TINH']+'</GIOI_TINH>';
					tonghop+='<DIA_CHI>'+thongtin['DIA_CHI'].replace("&","")+'</DIA_CHI>';
					tonghop+='<MA_THE>'+thongtin['MA_THE']+'</MA_THE>';
					tonghop+='<MA_DKBD>'+thongtin['MA_DKBD'].replace("-","")+'</MA_DKBD>';
					tonghop+='<GT_THE_TU>'+formatDate(thongtin['GT_THE_TU'])+'</GT_THE_TU>';
					tonghop+='<GT_THE_DEN>'+formatDate(thongtin['GT_THE_DEN'])+'</GT_THE_DEN>';
					tonghop+='<MIEN_CUNG_CT></MIEN_CUNG_CT>';
					tonghop+='<TEN_BENH><![CDATA['+thongtin['TEN_BENH']+']]></TEN_BENH>';
					tonghop+='<MA_BENH>'+thongtin['MA_BENH']+'</MA_BENH>';
					tonghop+='<MA_BENHKHAC />';
					tonghop+='<MA_LYDO_VVIEN>'+thongtin['MA_LYDO_VVIEN']+'</MA_LYDO_VVIEN>';
					tonghop+='<MA_NOI_CHUYEN />';
					tonghop+='<MA_TAI_NAN />';
					tonghop+='<NGAY_VAO>'+formatDatehour(thongtin['NGAY_VAO'])+'</NGAY_VAO>';
					tonghop+='<NGAY_RA>'+formatDatehour(thongtin['NGAY_RA'])+'</NGAY_RA>';
					tonghop+='<SO_NGAY_DTRI>'+Math.ceil(thongtin['SO_NGAY_DTRI'])+'</SO_NGAY_DTRI>';
					tonghop+='<KET_QUA_DTRI>'+thongtin['KET_QUA_DTRI']+'</KET_QUA_DTRI>';
					tonghop+='<TINH_TRANG_RV>'+thongtin['TINH_TRANG_RV']+'</TINH_TRANG_RV>';
					tonghop+='<NGAY_TTOAN>'+formatDatehour(thongtin['NGAY_TTOAN'])+'</NGAY_TTOAN>';
					//tonghop+='<MUC_HUONG>'+thongtin['MUC_HUONG']+'</MUC_HUONG>';
					tonghop+='<T_THUOC>'+tongthuoc+'</T_THUOC>';
					tonghop+='<T_VTYT>'+tongvtyt+'</T_VTYT>';
					tonghop+='<T_TONGCHI>'+T_TONGCHI+'</T_TONGCHI>';
					tonghop+='<T_BNTT>'+T_BNTT+'</T_BNTT>';
					tonghop+='<T_BHTT>'+ThanhTienBaoHiem+'</T_BHTT>';
					tonghop+='<T_BNCCT>'+T_BNCCT+'</T_BNCCT>';
					tonghop+='<T_NGUONKHAC>0</T_NGUONKHAC>';
					tonghop+='<T_NGOAIDS>0</T_NGOAIDS>';
					tonghop+='<MA_LOAI_KCB>'+thongtin['MA_LOAI_KCB']+'</MA_LOAI_KCB>';
					tonghop+='<NAM_QT>'+NAM_QT+'</NAM_QT>';
					tonghop+='<THANG_QT>'+THANG_QT+'</THANG_QT>';
					tonghop+='<MA_KHOA>'+MA_KHOA+'</MA_KHOA>';
					tonghop+='<MA_CSKCB>XXXXXXXXX</MA_CSKCB>';
					tonghop+='<MA_KHUVUC />';
					tonghop+='<MA_PTTT_QT />';
					tonghop+='<CAN_NANG>'+thongtin['CAN_NANG']+'</CAN_NANG>';
					tonghop+='</TONG_HOP>';

					XML2="</NOIDUNGFILE></FILEHOSO><FILEHOSO><LOAIHOSO>XML2</LOAIHOSO><NOIDUNGFILE>";
					XML3="</NOIDUNGFILE></FILEHOSO><FILEHOSO><LOAIHOSO>XML3</LOAIHOSO><NOIDUNGFILE>";
				
				
					XML6="</NOIDUNGFILE></FILEHOSO></HOSO></DANHSACHHOSO></THONGTINHOSO><CHUKYDONVI /></GIAMDINHHS>";				
					//

					request4.execute('GD2_BHYT_ngoaicls_quyettoan', function(err, recordsets, returnValue) {  					
						chisocls = recordsets[0];	
						request6.execute('GD2_BHYT_ngoaicls_quyettoan', function(err, recordsets, returnValue) {  					
							chisonoitru = recordsets[0];	
							XML4="</NOIDUNGFILE></FILEHOSO><FILEHOSO><LOAIHOSO>XML4</LOAIHOSO><NOIDUNGFILE>";	
							XML5="</NOIDUNGFILE></FILEHOSO><FILEHOSO><LOAIHOSO>XML5</LOAIHOSO><NOIDUNGFILE>";

						})
					})
					tonghop=(new Buffer(tonghop).toString('base64'));
					chitietcls=(new Buffer(chitietcls).toString('base64'));					
					if(thongtinthuoc.length>0){		
						tong=XML1+tonghop+XML2+chitietthuoc+XML3+chitietcls+XML6;		
					}else{
						tong=XML1+tonghop+XML3+chitietcls+XML4;
					}					
					filename='4210_'+thongtin['MA_BN']+"_"+id_thutrano+".xml";	

					fs.writeFile(duongdan+filename, tong, function(err) {
						if(err) {
							return console.log(err);
							sql.close();
						}					
						console.log(duongdan+filename+" was saved!");
						
						if(tinhtrang==0){							
							request3.input('ID_LuotKham', sql.Int, thongtin['MA_LK']);
							request3.execute('GD2_BHYT_xml_DaChuyen_Update', function(err, recordsets, returnValue) {   
								sql.close();
								lanchay=lanchay+1;								
								if(lanchay<soca){
									console.log(lanchay+'|'+thongtinluotkham[lanchay]['ID_ThuTraNo']);
									xuat_xml(thongtinluotkham[lanchay]['ID_ThuTraNo'],thongtinluotkham[lanchay]['noitru'],0,duongdan);
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
	console.log(id_thutrano);
	xuat_xml(id_thutrano,noitru,tinhtrang,duongdan);					
}

});	



});
}else{
	lanchay=lanchay+1;
	if(lanchay<soca){
		xuat_xml(thongtinluotkham[lanchay]['ID_ThuTraNo'],thongtinluotkham[lanchay]['noitru'],0,"F:/"+folder_default);
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
			if(typeof(recordsets[0])!="undefined"){
				thongtinluotkham= recordsets[0];
				soca=thongtinluotkham.length;
				lanchay=0;
				if(	thongtinluotkham.length>0){				
					xuat_xml(thongtinluotkham[0]['ID_ThuTraNo'],thongtinluotkham[0]['noitru'],0,"F:/"+folder_default);				
				}	 
			}
								
			setTimeout(function(){				
				caccachuathanhtoan();			
			},600000)
		})
	})
}

