<?php
 
	$data= new SQLServer;//tao lop ket noi SQL
	//$params = array($_GET["idkho"]);//tao param cho store 
	$params = array($_GET["idkho"],0,convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59',$_GET["dieukienloc"]);//tao param cho store
	$store_name="{call KHODUOC_TONHIENTAI_THAMSO(?,?,?,?,?)}";//tao bien khai bao store dieukienloc
	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$responce = new stdClass;

	$i=0;
	/*ID_Kho	id_thuoc	tengoc	SL_TonT12_2014	SL_N	SL_X	SL_X_NOITRU	SL_X_NGOAITRU
		SL_X_TIEUHAONOIBO	SL_X_DIEUCHUYEN	TonHienTai SL_N_BH
	0	2349	A	659	0	0	0	0	0	0	659*/
	foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["id_thuoc"];
    $responce->rows[$i]['cell']=array($row["id_thuoc"],$row["tengoc"],$row["TenDonViTinh"],$row["QuyCach"],$row["TenNhomThuoc"],$row["NCC"],$row["LaThuoc"],$row["GiaCuoi"], 
    $row["SL_TonT12_2014"],
    $row["SL_N"],$row["TT_N"],
    $row["SL_X"], $row["TT_X"],
    $row["SL_X_NOITRU"],$row["SL_X_NGOAITRU"],$row["SL_X_TIEUHAONOIBO"],$row["SL_X_DIEUCHUYEN"]
    ,$row["TonHienTai"],$row["TT_Ton"],$row["CoSoTuTruc"],$row["TonThucTe"],$row["SL_N_BH"],$row["TT_N_BH"],
    $row["SLX_NgoaiTru_BH"],$row["TT_NgoaiTru_BH"],$row["SLX_NoiTru_BH"],$row["TT_NoiTru_BH"],$row["MauBaoDong"]
    );
    $i++; 
}   
	echo json_encode($responce);
?>