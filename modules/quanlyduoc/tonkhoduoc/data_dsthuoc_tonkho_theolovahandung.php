<?php
 
	$data= new SQLServer;//tao lop ket noi SQL

	//$params = array($_GET["idkho"],convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59');//tao param cho store
	//$store_name="{call [MED_KHODUOC_TONHIENTAI](?,?,?)}";


	
	$params = array($_GET["idkho"],convert_date($_GET['fromdate']),convert_date($_GET['todate']).' 23:59:59',2,null);//tao param cho store
	$store_name="{call [Med_TonKhoDuocChuan](?,?,?,?,?)}";



	$get_danh_muc_phong_ban=$data->query( $store_name,$params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
	$responce = new stdClass;

	$i=0;
 
foreach ($tam as $row) {//duyet toan bo mang tra ve

	if($row["NgayHetHan"]!='')
		$row["NgayHetHan"]=$row["NgayHetHan"]->format($_SESSION["config_system"]["ngaythang"]);
	else $row["NgayHetHan"]='';
	
    $responce->rows[$i]['id']=$row["id_thuoc"];
    $responce->rows[$i]['cell']=array($row["id_thuoc"],$row["MaThuoc"],
    $row["tengoc"],$row["TenDonViTinh"],
    $row["QuyCach"],$row["TenNhomThuoc"],1,

    

    $row["LaThuoc"]
	,$row["SoLoNhaSanXuat"]
	,$row["NgayHetHan"],
	0, 
   0,// $row["SL_TonT12_2014"],
    $row["SL_N"]
	,0,
    $row["SL_X"]
	,0,
    0, //$row["SL_X_NOITRU"]
	0,//,$row["SL_X_NGOAITRU"],
	0 //$row["SL_X_TIEUHAONOIBO"]
	,0 //$row["SL_X_DIEUCHUYEN"]
        ,$row["TonHienTai"],$row["CountLoHD_N"],
	$row["CountLoHD_X"],
	0,
	0,//$row["CoSoTuTruc"]
	0//,$row["TonThucTe"] 
    );
    $i++; 
}   
	echo json_encode($responce);
?>