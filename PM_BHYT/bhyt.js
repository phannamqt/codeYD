var fs    = require('fs');
var path_auto = 'D:/VAS/4210/';
var path_manual = 'D:/VAS/XuatTay/';
var thongtinluotkham;
var custom = require('./custom');
var config = custom.config;
var sql = require('mssql');
var Big = require('big.js');
var io=require('socket.io').listen(3000);

io.on('connection', function(socket) {
	socket.on('exportxml',async function(data) {
		await xuat_xml(data,path_auto);	
	})
	socket.on('exportxmltay',async function(data) {
		await xuat_xml(data,path_manual);	
	})
	socket.on('list',async function(data) {
		thongtinluotkham= JSON.parse(data);	
		for (let i=0;i<thongtinluotkham.length;i++){					
			await xuat_xml(thongtinluotkham[i]['ID_ThuTraNo'],path_manual);				
		}
	})
})
caccachuathanhtoan();

function wait(ms) {
	return new Promise(r => setTimeout(r, ms))
}

async function xuat_xml(id_thutrano,duongdan){
	console.log(getNgayGio() + "XUAT FILE IDTNN:"+id_thutrano+", VAO THU MUC:"+duongdan);
	try {
		let poolPromise = await new sql.ConnectionPool(config)
		.connect()
		.then(pool => {
			return pool
		})
		.catch(err => console.log('Database Connection Failed! Bad Config: ', err))	
		let [thongtin,thongtinthuoc,thongtincls,ChisoCLS,ChisoNoiTru] = await Promise.all([
				Get_ThongTin(poolPromise,id_thutrano,'GD2_ThongTinLuotKhamBHYT'),
				Get_ThongTin(poolPromise,id_thutrano,'GD2_BHYT_ngoaithuoc_quyettoan'),
				Get_ThongTin(poolPromise,id_thutrano,'GD2_BHYT_ngoaicls_quyettoan'),
				Get_ThongTin(poolPromise,id_thutrano,'GD2_BHYT_ChisoCLS_quyettoan'),
				Get_ThongTin(poolPromise,id_thutrano,'GD2_BHYT_ChisoNoiTru_quyettoan'),
			]);
		thongtin=thongtin[0];	
		let	ThanhTienBaoHiem= new Big(0);
		let T_BNTT= new Big(0);
		let T_BNCCT= new Big(0);
		let T_TONGCHI= new Big(0);		
		let chitietthuoc = await XML2_Thuoc(thongtinthuoc,thongtin);
		let chitietcls = await XML3_CanLamSang(thongtincls,thongtin);
		let ThanhTienBaoHiem_CLS=new Big(chitietcls.ThanhTienBaoHiem);
		let ThanhTienBaoHiem_Thuoc= new Big(chitietthuoc.ThanhTienBaoHiem);
		let T_BNTT_CLS= new Big(chitietcls.T_BNTT);
		let T_BNCCT_CLS= new Big(chitietcls.T_BNCCT);
		let T_BNTT_Thuoc= new Big(chitietthuoc.T_BNTT);
		let T_BNCCT_Thuoc= new Big(chitietthuoc.T_BNCCT);
		let tongthuoc= new Big(chitietthuoc.tongthuoc);		
		let tongcls = new Big(chitietcls.tongcls);
		let	tongvtyt= new Big(chitietcls.tongvtyt);
		T_TONGCHI=tongthuoc.plus(chitietcls.tongcls);
		ThanhTienBaoHiem=(ThanhTienBaoHiem_Thuoc.plus(ThanhTienBaoHiem_CLS));
		T_BNTT=(T_BNTT_Thuoc.plus(T_BNTT_CLS));
		T_BNCCT=(T_BNCCT_Thuoc.plus(T_BNCCT_CLS));		
		if(ThanhTienBaoHiem==(tongthuoc.plus(tongcls))){
			thongtin['phantramchitra']=100;
		}
		T_TONGCHI=tongthuoc.plus(tongcls);		
		let tonghop = await XML1_TongHop(thongtin,tongthuoc,tongvtyt,T_TONGCHI,T_BNTT,ThanhTienBaoHiem,T_BNCCT);
		XML6='</HOSO></DANHSACHHOSO></THONGTINHOSO><CHUKYDONVI /></GIAMDINHHS>';	
		let chitietchisocls = await XML4_ChiTietCLS(ChisoCLS,thongtin);
		let DienBienBenh = await XML5_DienBienBenh(ChisoNoiTru,thongtin);		
		tong=tonghop+chitietthuoc.chitietthuoc+chitietcls.chitietcls+chitietchisocls+DienBienBenh+XML6;
		filename= await '4210_'+thongtin['MA_BN']+"_"+id_thutrano+".xml";
		await fs.writeFile(duongdan+filename, tong, function(err) {})
		await console.log(getNgayGio() + duongdan+filename+" was saved!");		
		await poolPromise.request()
		.input('ID_LuotKham', sql.Int, thongtin['MA_LK'])
		.execute('GD2_BHYT_xml_DaChuyen_Update');
		await poolPromise.close();

	} catch (err) {
		console.log(getNgayGio() + err);
	}finally{
		
	}	
}


async function caccachuathanhtoan(){
		console.log(getNgayGio() + "KIEM TRA LUOT CHUA CHUYEN");
	var connection = new sql.ConnectionPool(config, function(err) {
		var request5  = new sql.Request(connection);
		request5.execute('GD2_BHYT_xml_chuachuyen',async function(err, recordsets) {
			sql.close();
			thongtinluotkham= recordsets.recordsets[0];
		
			for (let i=0;i<thongtinluotkham.length;i++){	
				let _userOffset = thongtinluotkham[i]['NgayGio'].getTimezoneOffset()*60000;
				let d=new Date(thongtinluotkham[i]['NgayGio'].getTime()+_userOffset);
				let today = new Date();
				hour = Math.abs(d - today) / 36e5;
				if (today.getHours()==23){
				 	hour=1;
				}			
				if(hour<=1){				
					await xuat_xml(thongtinluotkham[i]['ID_ThuTraNo'],path_auto);	
				}
			}
			await wait(600000);//600000
			await caccachuathanhtoan();
		})
	})
}



async function Get_ThongTin(poolPromise,id_thutrano,store_name) {
	let result = await poolPromise.request()
	.input('id_thutrano', sql.Int, id_thutrano)
	.execute(store_name)
	result = await result.recordsets[0];
	return result;
}

async function XML1_TongHop(thongtin,tongthuoc,tongvtyt,T_TONGCHI,T_BNTT,ThanhTienBaoHiem,T_BNCCT) {
	let	NGAYLAP=custom.formatDateBHYT(thongtin.NGAYLAP);
	let tonghop='';
	if(thongtin['CAN_NANG'] === null){
		thongtin['CAN_NANG'] ='';
	}
	let NAM_QT  =custom.formatTimezoneOffset(thongtin.NGAYLAP).getFullYear();
	let THANG_QT=custom.formatTimezoneOffset(thongtin.NGAYLAP).getMonth()+1;
	let MA_KHOA =thongtin.MA_KHOA;
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
	}
	tonghop+='<TONG_HOP>';
	tonghop+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';
	tonghop+='<STT>1</STT>';
	tonghop+='<MA_BN>'+thongtin['MA_BN']+'</MA_BN>';
	tonghop+='<HO_TEN>'+thongtin['HO_TEN']+'</HO_TEN>';
	tonghop+='<NGAY_SINH>'+custom.formatDateBHYT(thongtin['NGAY_SINH'])+'</NGAY_SINH>';
	tonghop+='<GIOI_TINH>'+thongtin['GIOI_TINH']+'</GIOI_TINH>';
	tonghop+='<DIA_CHI>'+thongtin['DIA_CHI'].replace("&","")+'</DIA_CHI>';
	tonghop+='<MA_THE>'+thongtin['MA_THE']+'</MA_THE>';
	tonghop+='<MA_DKBD>'+thongtin['MA_DKBD'].replace("-","")+'</MA_DKBD>';
	tonghop+='<GT_THE_TU>'+custom.formatDateBHYT(thongtin['GT_THE_TU'])+'</GT_THE_TU>';
	tonghop+='<GT_THE_DEN>'+custom.formatDateBHYT(thongtin['GT_THE_DEN'])+'</GT_THE_DEN>';
	tonghop+='<MIEN_CUNG_CT></MIEN_CUNG_CT>';
	tonghop+='<TEN_BENH><![CDATA['+thongtin['TEN_BENH']+']]></TEN_BENH>';
	tonghop+='<MA_BENH>'+thongtin['MA_BENH']+'</MA_BENH>';
	tonghop+='<MA_BENHKHAC>'+thongtin['MA_BENHKHAC']+'</MA_BENHKHAC>';
	tonghop+='<MA_LYDO_VVIEN>'+thongtin['MA_LYDO_VVIEN']+'</MA_LYDO_VVIEN>';
	tonghop+='<MA_NOI_CHUYEN />';
	tonghop+='<MA_TAI_NAN />';
	tonghop+='<NGAY_VAO>'+custom.formatDatehour(thongtin['NGAY_VAO'])+'</NGAY_VAO>';
	tonghop+='<NGAY_RA>'+custom.formatDatehour(thongtin['NGAY_RA'])+'</NGAY_RA>';
	tonghop+='<SO_NGAY_DTRI>'+Math.ceil(thongtin['SO_NGAY_DTRI'])+'</SO_NGAY_DTRI>';
	tonghop+='<KET_QUA_DTRI>'+thongtin['KET_QUA_DTRI']+'</KET_QUA_DTRI>';
	tonghop+='<TINH_TRANG_RV>'+thongtin['TINH_TRANG_RV']+'</TINH_TRANG_RV>';
	tonghop+='<NGAY_TTOAN>'+custom.formatDatehour(thongtin['NGAY_TTOAN'])+'</NGAY_TTOAN>';
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
	tonghop+='<MA_CSKCB>48202</MA_CSKCB>';
	tonghop+='<MA_KHUVUC />';
	tonghop+='<MA_PTTT_QT />';
	tonghop+='<CAN_NANG>'+thongtin['CAN_NANG']+'</CAN_NANG>';
	tonghop+='</TONG_HOP>';	
	tonghop=(new Buffer(tonghop).toString('base64'));
	tonghop='<?xml version="1.0" encoding="utf-8"?><GIAMDINHHS xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><THONGTINDONVI><MACSKCB>48202</MACSKCB></THONGTINDONVI><THONGTINHOSO><NGAYLAP>'+NGAYLAP+'</NGAYLAP><SOLUONGHOSO>1</SOLUONGHOSO><DANHSACHHOSO><HOSO><FILEHOSO><LOAIHOSO>XML1</LOAIHOSO><NOIDUNGFILE>'+tonghop;
	tonghop+="</NOIDUNGFILE></FILEHOSO>";
	return tonghop;
}


async function XML2_Thuoc(thongtinthuoc,thongtin) {
	let T_BNTT= new Big(0);
	let	ThanhTienBaoHiem= new Big(0);
	let T_BNCCT= new Big(0);
	let MA_KHOA=thongtin.MA_KHOA;
	let chitietthuoc='';
	let tongthuoc= new Big(0);
	if(thongtinthuoc.length>0){
	
		chitietthuoc+="<DSACH_CHI_TIET_THUOC>";
		for(let i=0;i<thongtinthuoc.length;i++){
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
				MA_BAC_SI="";
			}else{
				MA_BAC_SI=thongtinthuoc[i]['MA_BAC_SI'];
			}			
			tongthuoc=tongthuoc.plus(thongtinthuoc[i]['thanhtien']);
			ThanhTienBaoHiem=ThanhTienBaoHiem.plus(thongtinthuoc[i]['ThanhTienBaoHiem']);
			T_BNTT=T_BNTT.plus(thongtinthuoc[i]['T_BNTT']);
			T_BNCCT=T_BNCCT.plus(thongtinthuoc[i]['T_BNCCT']);			
			chitietthuoc+='<CHI_TIET_THUOC>';
			chitietthuoc+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';
			chitietthuoc+='<STT>'+(i+1)+'</STT>';
			chitietthuoc+='<MA_THUOC>'+thongtinthuoc[i]['MaSoTheoDMBHYT']+'</MA_THUOC>';
			chitietthuoc+='<MA_NHOM>'+thongtinthuoc[i]['id_nhombhyt']+'</MA_NHOM>';
			chitietthuoc+='<TEN_THUOC><![CDATA['+thongtinthuoc[i]['ten']+']]></TEN_THUOC>';
			chitietthuoc+='<DON_VI_TINH><![CDATA['+thongtinthuoc[i]['TenDonViTinh']+']]></DON_VI_TINH>';
			chitietthuoc+='<HAM_LUONG><![CDATA['+thongtinthuoc[i]['HamLuong']+']]></HAM_LUONG>';
			chitietthuoc+='<DUONG_DUNG>'+thongtinthuoc[i]['MaDD_BHYT']+'</DUONG_DUNG>';
			chitietthuoc+='<LIEU_DUNG><![CDATA['+thongtinthuoc[i]['CachDung']+']]></LIEU_DUNG>';
			chitietthuoc+='<SO_DANG_KY>'+thongtinthuoc[i]['SignNumber']+'</SO_DANG_KY>';
			chitietthuoc+='<TT_THAU><![CDATA['+thongtinthuoc[i]['TT_THAU']+']]></TT_THAU>';
			chitietthuoc+='<PHAM_VI>1</PHAM_VI>';
			chitietthuoc+='<TYLE_TT>'+Math.round(thongtinthuoc[i]['TYLE_TT'])+'</TYLE_TT>';
			chitietthuoc+='<SO_LUONG>'+thongtinthuoc[i]['soluong']+'</SO_LUONG>';
			chitietthuoc+='<DON_GIA>'+thongtinthuoc[i]['dongia']+'</DON_GIA>';
			chitietthuoc+='<THANH_TIEN>'+thongtinthuoc[i]['thanhtien']+'</THANH_TIEN>';
			chitietthuoc+='<MUC_HUONG>'+Math.round(thongtinthuoc[i]['MUC_HUONG'])+'</MUC_HUONG>';
			chitietthuoc+='<T_NGUONKHAC>0</T_NGUONKHAC>';
			chitietthuoc+='<T_BNTT>'+thongtinthuoc[i]['T_BNTT']+'</T_BNTT>';
			chitietthuoc+='<T_BNCCT>'+thongtinthuoc[i]['T_BNCCT']+'</T_BNCCT>';
			chitietthuoc+='<T_BHTT>'+thongtinthuoc[i]['T_BHTT']+'</T_BHTT>';
			chitietthuoc+='<T_NGOAIDS>0</T_NGOAIDS>';
			chitietthuoc+='<MA_KHOA>'+thongtinthuoc[i]['MA_KHOA']+'</MA_KHOA>';
			chitietthuoc+='<MA_BAC_SI>'+MA_BAC_SI+'</MA_BAC_SI>';
			chitietthuoc+='<MA_BENH>'+thongtin['MA_BENH']+'</MA_BENH>';
			chitietthuoc+='<NGAY_YL>'+custom.formatDatehour(thongtinthuoc[i]['NgayKeDon'])+'</NGAY_YL>';
			chitietthuoc+='<MA_PTTT>0</MA_PTTT>';
			chitietthuoc+='</CHI_TIET_THUOC>';
		}
		chitietthuoc+='</DSACH_CHI_TIET_THUOC>';
		chitietthuoc=(new Buffer(chitietthuoc).toString('base64'));
		chitietthuoc="<FILEHOSO><LOAIHOSO>XML2</LOAIHOSO><NOIDUNGFILE>"+chitietthuoc+"</NOIDUNGFILE></FILEHOSO>";		
	};
	return {
		chitietthuoc:chitietthuoc,
		tongthuoc:tongthuoc,
		ThanhTienBaoHiem:ThanhTienBaoHiem,
		T_BNTT:T_BNTT,
		T_BNCCT:T_BNCCT
	};
};

async function XML3_CanLamSang(thongtincls,thongtin) {
	let chitietcls='';
	let T_BNTT= new Big(0);
	let tongvtyt = new Big(0);
	let	tongcls= new Big(0);
	let	ThanhTienBaoHiem= new Big(0);
	let T_BNCCT= new Big(0);
	let MA_KHOA=thongtin.MA_KHOA;
	for(let i=0;i<thongtincls.length;i++){
		if(i==0){
			chitietcls='<DSACH_CHI_TIET_DVKT>';
		}
		tongcls=tongcls.plus(thongtincls[i]['thanhtien']);
		ThanhTienBaoHiem=ThanhTienBaoHiem.plus(thongtincls[i]['ThanhTienBaoHiem']);
		T_BNTT=T_BNTT.plus(thongtincls[i]['T_BNTT']);
		T_BNCCT=T_BNCCT.plus(thongtincls[i]['T_BNCCT']);
		
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
		chitietcls+='<TT_THAU>'+thongtincls[i]['TT_THAU']+'</TT_THAU>';
		chitietcls+='<MUC_HUONG>'+thongtincls[i]['MUC_HUONG']+'</MUC_HUONG>';
		chitietcls+='<T_NGUONKHAC>0</T_NGUONKHAC>';
		chitietcls+='<T_BNTT>'+thongtincls[i]['T_BNTT']+'</T_BNTT>';
		chitietcls+='<T_BNCCT>'+thongtincls[i]['T_BNCCT']+'</T_BNCCT>';
		chitietcls+='<T_BHTT>'+thongtincls[i]['T_BHTT']+'</T_BHTT>';
		chitietcls+='<T_NGOAIDS>0</T_NGOAIDS>';
		if(thongtincls[i]['ID_BHYT']==15){
			chitietcls+='<MA_GIUONG>H1</MA_GIUONG>';
		}else{
			chitietcls+='<MA_GIUONG></MA_GIUONG>';
		}
		chitietcls+='<TYLE_TT>'+Math.round(thongtincls[i]['TYLE_TT'])+'</TYLE_TT>';
		chitietcls+='<THANH_TIEN>'+thongtincls[i]['thanhtien']+'</THANH_TIEN>';
		chitietcls+='<T_TRANTT>'+thongtincls[i]['thanhtien']+'</T_TRANTT>';
		chitietcls+='<MA_KHOA>'+MA_KHOA+'</MA_KHOA>';
		chitietcls+='<MA_BAC_SI>'+thongtincls[i]['MA_BAC_SI']+'</MA_BAC_SI>';
		chitietcls+='<MA_BENH>'+thongtin['MA_BENH']+'</MA_BENH>';
		chitietcls+='<NGAY_YL>'+custom.formatDatehour(thongtincls[i]['NgayGio'])+'</NGAY_YL>';
		chitietcls+='<NGAY_KQ></NGAY_KQ>';
		chitietcls+='<MA_PTTT>0</MA_PTTT>';
		chitietcls+='</CHI_TIET_DVKT>';
		
		if(i==thongtincls.length-1){
			chitietcls=chitietcls+'</DSACH_CHI_TIET_DVKT>';
		}
	}
	
	chitietcls=(new Buffer(chitietcls).toString('base64'));
	chitietcls='<FILEHOSO><LOAIHOSO>XML3</LOAIHOSO><NOIDUNGFILE>'+chitietcls+"</NOIDUNGFILE></FILEHOSO>";	
	return {
		chitietcls:chitietcls,
		tongcls:tongcls,
		ThanhTienBaoHiem:ThanhTienBaoHiem,
		T_BNTT:T_BNTT,
		T_BNCCT:T_BNCCT,
		tongvtyt:tongvtyt
	}
}

async function XML4_ChiTietCLS(ChisoCLS,thongtin) {
	let chitietchisocls='';
	if(ChisoCLS.length>0){
		for(let i=0;i<ChisoCLS.length;i++){
			if(i==0){
				chitietchisocls='<DSACH_CHI_TIET_CLS>';
			}
			chitietchisocls+='<CHI_TIET_CLS>';
			chitietchisocls+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';
			chitietchisocls+='<STT>'+(i+1)+'</STT>';
			chitietchisocls+='<MA_DICH_VU>'+(ChisoCLS[i]['MA_DICH_VU'] == null ? '' : ChisoCLS[i]['MA_DICH_VU'])+'</MA_DICH_VU>';
			chitietchisocls+='<MA_CHI_SO>'+(ChisoCLS[i]['MA_CHI_SO'] == null ? '' : ChisoCLS[i]['MA_CHI_SO'])+'</MA_CHI_SO>';
			chitietchisocls+='<TEN_CHI_SO>'+(ChisoCLS[i]['TEN_CHI_SO'] == null ? '' : ('<![CDATA['+ChisoCLS[i]['TEN_CHI_SO'])+']]>')+'</TEN_CHI_SO>';
			chitietchisocls+='<GIA_TRI>'+(ChisoCLS[i]['GIA_TRI'] == null ? '' : ('<![CDATA['+ChisoCLS[i]['GIA_TRI'])+']]>')+'</GIA_TRI>';
			chitietchisocls+='<MA_MAY>'+(ChisoCLS[i]['MA_MAY'] == null ? '' : ChisoCLS[i]['MA_MAY'])+'</MA_MAY>';
			chitietchisocls+='<MO_TA>'+(ChisoCLS[i]['MO_TA'] == null ? '' : ('<![CDATA['+ChisoCLS[i]['MO_TA'])+']]>')+'</MO_TA>';
			chitietchisocls+='<KET_LUAN>'+(ChisoCLS[i]['KET_LUAN'] == null ? '' : ('<![CDATA['+ChisoCLS[i]['KET_LUAN'])+']]>')+'</KET_LUAN>';
			chitietchisocls+='<NGAY_KQ>'+custom.formatDatehour(ChisoCLS[i]['NGAY_KQ'])+'</NGAY_KQ>';
			chitietchisocls+='</CHI_TIET_CLS>';		
			if(i==ChisoCLS.length-1){
				chitietchisocls+='</DSACH_CHI_TIET_CLS>';
			}
		}	
		chitietchisocls=(new Buffer(chitietchisocls).toString('base64'));
		chitietchisocls='<FILEHOSO><LOAIHOSO>XML4</LOAIHOSO><NOIDUNGFILE>'+chitietchisocls+'</NOIDUNGFILE></FILEHOSO>';
	}
	return 	chitietchisocls
}

async function XML5_DienBienBenh(ChisoNoiTru,thongtin) {
	let DienBienBenh='';
	for(let i=0;i<ChisoNoiTru.length;i++){
		if(i==0){
			DienBienBenh='<DSACH_CHI_TIET_DIEN_BIEN_BENH>';
		}
		DienBienBenh+='<CHI_TIET_DIEN_BIEN_BENH>';
		DienBienBenh+='<MA_LK>'+thongtin['MA_LK']+'</MA_LK>';
		DienBienBenh+='<STT>'+(i+1)+'</STT>';
		DienBienBenh+='<DIEN_BIEN><![CDATA['+ChisoNoiTru[i]['DIEN_BIEN']+']]></DIEN_BIEN>';
		DienBienBenh+='<HOI_CHAN>'+ChisoNoiTru[i]['HOI_CHAN']+'</HOI_CHAN>';
		DienBienBenh+='<PHAU_THUAT>'+ChisoNoiTru[i]['PHAU_THUAT']+'</PHAU_THUAT>';
		DienBienBenh+='<NGAY_YL>'+custom.formatDatehour(ChisoNoiTru[i]['NGAY_YL'])+'</NGAY_YL>';
		DienBienBenh+='</CHI_TIET_DIEN_BIEN_BENH>';		
		if(i==ChisoNoiTru.length-1){
			DienBienBenh=DienBienBenh+'</DSACH_CHI_TIET_DIEN_BIEN_BENH>';
		}
	}	
	DienBienBenh=(new Buffer(DienBienBenh).toString('base64'));
	DienBienBenh='<FILEHOSO><LOAIHOSO>XML5</LOAIHOSO><NOIDUNGFILE>'+DienBienBenh+'</NOIDUNGFILE></FILEHOSO>';
	return 	DienBienBenh
}

function getNgayGio(){
	let date_ob = new Date();
	let date = ("0" + date_ob.getDate()).slice(-2);
	// current month
	let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);
	// current year
	let year = date_ob.getFullYear();
	// current hours
	let hours = date_ob.getHours();
	// current minutes
	let minutes = date_ob.getMinutes();
	// current seconds
	let seconds = date_ob.getSeconds(); 
	// prints date & time in YYYY-MM-DD HH:MM:SS format
	//console.log(hours + ":" + minutes + ":" + seconds  + " " + date + "/" + month + "/" + year);
	return addzero(hours) + ":" + addzero(minutes) + ":" + addzero(seconds)  + " " + date + "/" + month + "/" + year + ": ";
}

function addzero(input){
	return input<10?'0'+input : input ;
}