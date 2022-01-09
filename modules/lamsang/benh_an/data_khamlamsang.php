<?php
$data= new SQLServer;
$params = array( $_GET["idbenhnhan"],0,'HuyBo',$_SESSION["user"]["id_user"]); 
$store_name="{call MED_Kham_GetKhamLamSangBenhNhan(?,?,?,?)}";
$get_danh_muc_phong_ban=$data->query( $store_name,$params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce = new stdClass;
$responce1 = new stdClass;
$responce2 = new stdClass;
$responce3 = new stdClass;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
	if($row["NgayTaoBenhAn"]!=""){		 
		$NgayTaoBenhAn=$row["NgayTaoBenhAn"]->format($_SESSION["config_system"]["ngaythang"]);
	}else{		
		$NgayTaoBenhAn ="";		
	}	


	if($row["NgayGioTao"]!=""){
		$giotao=$row["NgayGioTao"]->format("H:i");
		$ngaytao=$row["NgayGioTao"]->format($_SESSION["config_system"]["ngaythang"]);
	}else{
		$giotao="";
		$ngaytao="";
	}
	if($row["NgayHetThuoc"]!=""){		 
		$ngayhetthuoc=$row["NgayHetThuoc"]->format($_SESSION["config_system"]["ngaythang"]);
	}else{		
		$ngayhetthuoc = new DateTime($row["NgayGioTao"]->format('Y-m-d'));
		$ngayhetthuoc=date_add($ngayhetthuoc,date_interval_create_from_date_string($row["SoNgayThuoc"]." days"))->format($_SESSION["config_system"]["ngaythang"]);	
	}		
	if($row["NgayHenTaiKham"]!=""){		 
		$NgayHenTaiKham=$row["NgayHenTaiKham"]->format($_SESSION["config_system"]["ngaythang"]);
	}else{		
		$NgayHenTaiKham ="";		
	}	
	$ngayhomnay = date("Y-m-d"); // Năm/Tháng/Ngày
	$ngaysosanh =$row["NgayGioTao"]->format('Y-m-d'); 
	$homnay=0;
	if (strtotime($ngayhomnay) == strtotime($ngaysosanh)) {
		$homnay=1;
	}
	
    $responce->rows[$i]['id']=$row["ID_Kham"];
			
			$responce->rows[$i]['cell']=
			array(		
				$row["ID_LoaiKham"],
				$row["BSChanDoan"],
				$giotao,
				$ngaytao,
				$row["SoNgayThuoc"],
				$ngayhetthuoc,
				$row["ID_DonThuoc"], 
				$row["ID_LuotKham"],
				$row["ID_TrangThai"],
				$row["GhiChu"],
				$row["NoiDungTaiKham"],
				$NgayHenTaiKham,
				$row["IsBacSyChinh"],
				$homnay,
				$row["dem_luotkham"],
				$row["bsbschinh"],
				$row["donthuocchinh"],
				$row["LayDauHieuSinhTon"],
				$row["SanSangGoiVaoKham"],
				$row["dhsinhton"],
				$row["phantram"]
				,$row["LoaiDoiTuongKham"]
				,$row["TrangThaiKham"]
				,$row["NguoiThucHien"]
				,$row["NickName_nguoithuchien"]
				
				,$row["ID_BenhAnNoiTru"]
				,$row["ID_LoaiBenhAnNoiTru"]
				,$row["FolderOpen"]
				,$NgayTaoBenhAn
				,$row["ID_PhongBan"]
			
			);
		$responce1->rows[$i]['id']=$row["ID_Kham"];
		$responce1->rows[$i]['cell']=
			array(		
				$row["MoTa"]			 
			);
		$responce2->rows[$i]['id']=$row["ID_Kham"];
			$responce2->rows[$i]['cell']=
			array(		
				$row["ChanDoan"]
				,''			 
			);
		$responce3->rows[$i]['id']=$row["ID_Kham"];
		$responce3->rows[$i]['cell']=
			array(		
				$row["MaICD10"]
				,$row["VVIET"]		 
			);
		
    $i++; 
}













echo json_encode($responce);
echo'|||';
echo json_encode($responce1);
echo'|||';
echo json_encode($responce2);
echo'|||';
echo json_encode($responce3);
?>
