<?php
if($_GET["by"]=="nhom"){
		$data= new SQLServer;//tao lop ket noi SQL 
		 $param1=$_GET["id"];
		 $param2='DangCho';

		 //print_r($_GET["id"]);
		$store_name="{call GD2_LayDSXepHangCanLamSang_TheoNhomXepHang_New(?,?)}";//tao bien khai bao store
		//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
		$params = array($param1,$param2);//tao param cho store 
		//print_r($params) ;
		$get_lich=$data->query( $store_name, $params);//Goi store
		$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		$responce = new stdClass;
		$flag=0;
		$mabn=0;
		$mabn2=0;
		$i=0;
		foreach ($tam as $row) {//duyet toan bo mang tra ve
			if($row["XetNghiem"]==true){
				$mabn=$row["MaBenhNhan"];
				}
			if(($row["XetNghiem"]==true and $flag==0 or $mabn!=$mabn2) ||$row["XetNghiem"]==false ){
				if($row["XetNghiem"]==true){
					$row["TenLoaiKham"]='Xét nghiệm';
					$flag=1;
					$mabn2=$row["MaBenhNhan"];
			}else{
				$row["TenLoaiKham"]=$row["TenLoaiKham"];
			}
			//echo $mabn."!=".$mabn2;	
			if($mabn!=$mabn2){
				$flag=0;
			}
			if($row["GioHenKham"]!='') 
				$row["GioHenKham"]=$row["GioHenKham"]->format('H:i');
			if($row["NgayGioTao"]!='') 
				$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
		  $responce->rows[$i]['id']=$row["ID_Kham"];
		   $responce->rows[$i]['cell']=array($row["ID_Kham"],
				$row["ID_LuotKham"],
				$row["MaBenhNhan"],
				$row["TenBenhNhan"],
				$row["Tuoi"],
				$row["GioiTinh"],
				$row["TenLoaiKham"],
				$row["GioHenKham"],
				$row["NgayGioTao"],
				$row["TenBSChiDinh"],
				$row["GhiChu"],
				$row["GoiKham"],
				$row["NotesStatus"],
				$row["ID_BenhNhan"],
				$row["ID_LoaiKham"],
       			$row["ID_LoaiKham"]
					);
			$i++; 
		}
		} 
		//print_r($tam); 
		echo json_encode($responce);

}elseif($_GET["by"]=="phongban"){
		$data= new SQLServer;//tao lop ket noi SQL 
		 $param1=$_GET["id"];
		 $param2='DangCho';
		 $param3=NULL;
		 $param4=NULL;
		 //print_r($_GET["id"]);
		$store_name="{call GD2_LayDSXepHangCanLamSang_By_ID_PhongChuyenMon(?,?,?,?)}";//tao bien khai bao store
		//$params = array("ID_NhapKho",$start,$end,$sidx,$sord,"Gd2_PhieuNhap_2013","","*");//tao param cho store 
		$params = array($param1,$param2,$param3,$param4);//tao param cho store 
		//print_r($params) ;
		$get_lich=$data->query( $store_name, $params);//Goi store
		$excute= new SQLServerResult($get_lich);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
		$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
		$responce = new stdClass;
		$flag=0;
		$mabn=0;
		$mabn2=0;
		$i=0;
		foreach ($tam as $row) {//duyet toan bo mang tra ve
			if($row["XetNghiem"]==true){
				$mabn=$row["MaBenhNhan"];
				}
			if(($row["XetNghiem"]==true and $flag==0 or $mabn!=$mabn2) ||$row["XetNghiem"]==false ){
				if($row["XetNghiem"]==true){
					$row["TenLoaiKham"]='Xét nghiệm';
					$flag=1;
					$mabn2=$row["MaBenhNhan"];
			}else{
				$row["TenLoaiKham"]=$row["TenLoaiKham"];
			}
			//echo $mabn."!=".$mabn2;	
			if($mabn!=$mabn2){
				$flag=0;
			}
			if($row["GioHenKham"]!='') 
				$row["GioHenKham"]=$row["GioHenKham"]->format('H:i');
			if($row["NgayGioTao"]!='') 
				$row["NgayGioTao"]=$row["NgayGioTao"]->format('H:i');
		  $responce->rows[$i]['id']=$row["ID_Kham"];
		   $responce->rows[$i]['cell']=array($row["ID_Kham"],
				$row["ID_LuotKham"],
				$row["MaBenhNhan"],
				$row["TenBenhNhan"],
				$row["Tuoi"],
				$row["GioiTinh"],
				$row["TenLoaiKham"],
				$row["GioHenKham"],
				$row["NgayGioTao"],
				$row["TenBSChiDinh"],
				$row["GhiChu"],
				$row["GoiKham"],
				$row["NotesStatus"],
				$row["ID_BenhNhan"],
				$row["ID_LoaiKham"]
					);
			$i++; 
			}
		} 
		//print_r($tam); 
		echo json_encode($responce);
	}
?>