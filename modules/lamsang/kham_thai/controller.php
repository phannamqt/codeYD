<?php
switch ($_GET["oper"]) {
    case "dathuchien":
        dathuchien();
        break;
    case "luudangkham":
        luudangkham();
        break;
	case "luuthuchien":
        luuthuchien();
        break;
    case "hoantat":
        hoantat();
        break;
	case "luuhoantat":
        luuhoantat();
        break;
}	 		 
function dathuchien(){	
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_Kham_dathuchien_khamthai (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0 || $_POST["idkhamthai"]==""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));

	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);

	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================

	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);

		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	

		//=====================
	}//and else
}


function luudangkham(){
	$data= new SQLServer;//tao lop ket noi SQL
	//=====================
	if($_POST["idkhamthai"]==0  || $_POST["idkhamthai"]==""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));

	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
 
}

function luuthuchien(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_SESSION["user"]["id_user"]);
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_KT_Luu_Update (?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0  || $_POST["idkhamthai"]==""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
				
				
		//$data= new SQLServer;//tao lop ket noi SQL
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
 
}
function hoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KSKCTY_HoanTat_Update (?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);
	
	//=====================
	if($_POST["idkhamthai"]==0  || $_POST["idkhamthai"]==""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
		//$data= new SQLServer;//tao lop ket noi SQL
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		//echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
}
function luuhoantat(){
	$data= new SQLServer;//tao lop ket noi SQL
	$params=  array($_POST["id_kham"],$_POST["nguoithuchien"],$_POST["chuandoan1"],$_SESSION["user"]["id_user"]);
	$store_name="{call GD2_KSKCTY_HoanTat_Update_New (?,?,?,?)}";//tao bien khai bao store
	$data->query( $store_name, $params);

	
	//=====================
	if($_POST["idkhamthai"]==0  || $_POST["idkhamthai"]==""){
	$check='';
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?,?  )';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
     $params=  array(($_POST["id_kham"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"],array(&$check,  SQLSRV_PARAM_OUT,SQLSRV_PHPTYPE_INT));
			
			
            
	//$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_Khamthai_Insert $chuoi}";//tao bien khai bao store
	$get=$data->query( $store_name, $params);
	echo $_POST["idkhamthai"];
	//print_r($params);
	//=====================
	}else if($_POST["idkhamthai"]!=""){
		//=====================
	//$chuoi='(? ,?,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,?,?,?,?,? ,?,?,?,?,?,?,?,?,?,?,?,? ,?,?,?,? ,?,?,?,? ,?,?,? ,?)';
	$chuoi='(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$ngaykinhcuoi= convert_date($_POST['NgayKinhCuoi']);
	$ngaysinhdukien= convert_date($_POST['NgaySinhDuKien']);
	$params=  array(($_POST["idkhamthai"]),($_POST["timmach"]),($_POST["daiduong"]),($_POST["bassdown"]),($_POST["than"]),($_POST["roiloandongmau"]),($_POST['viemganb']),($_POST['rubella']),($_POST['tamthan']),($_POST['viemganc']),($_POST['cacbenhdamac_khac']),($_POST['tiemphong_rubella']),($_POST['tiemphong_thuydau']),($_POST['tiemphong_quaibi']),($_POST['tiemphong_uonvansosinh']),($_POST['tiemphong_cum']),($_POST['tiemphong_viemganb']),($_POST['tiemphong_somui']),($_POST['lalandautienkhamthai']),($_POST['KT_SoTuanThai']),($_POST['KT_SoNgayThai']),($ngaysinhdukien),($ngaykinhcuoi),($_POST['non']),($_POST['buonnon']),($_POST['metmoi']),($_POST['daubungduoi']),($_POST['ramauamdao']),($_POST['dauthuongvi']),($_POST['daudau']),($_POST['daumat']),($_POST['dauhieubatthuong']),($_POST['para1']."-".$_POST['para2']."-".$_POST['para3']."-".$_POST['para4']),($_POST['thaichetluu']),($_POST['sangiat']),($_POST['chaymautruocsanh']),($_POST['dekho']),($_POST['binhthuong']),($_POST['banghuyet']),($_POST['molaythai']),($_POST['deconduoi2500gr']),($_POST['conchetsaude']),($_POST['tiensusanphukhoa_ketluan']),($_POST['tiensubenhvaskchong_ketluan']),($_POST['ketluan_khamnoikhoa']),($_POST['ketluan_khamphukhoa']),($_POST['ketluan_khamvu']),($_POST['ketluan_khamkhac']),($_POST['ktt_binhthuong']),($_POST['ktt_phutoanthan']),($_POST['ktt_phu2chiduoi']),($_POST['ktt_daxanhdiemmacnhot']),($_POST['ketluan_khamsankhoa']),($_POST['ketluan_ketluan']),($_POST['ketluan_denghi']),$_SESSION["user"]["id_user"]);
				
		//$data= new SQLServer;//tao lop ket noi SQL
		$store_name="{call GD2_Khamthai_Update $chuoi}";//tao bien khai bao store
		$get=$data->query( $store_name, $params);//Goi store	
		echo $_POST["idkhamthai"]."----update----<br>";
	//print_r($params);
		//=====================
	}//and else
}

?>

