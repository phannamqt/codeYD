<?php
/*$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; // get the direction
$table = "DM_NhanVien";
$Id_key = 'ID_NhanVien';
$data= new SQLServer;//tao lop ket noi SQL
$Seach = '';
$start = $limit*$page - $limit;
$end= $start + $limit;
$OrderBy = $sidx;
$OrderByType = $sord;
$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
$params = array($Id_key,$start,$end,$OrderBy,$OrderByType,$table,$Seach,'*');//tao param cho store 	

$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 
if($tam== null)
{
	$count=0;
}
else{
$count = $tam[0][1];
}
if( $count >0 ){
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}

//$responce->userdata["ids"] = $ids;
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;
$i=0;
foreach ($tam as $row) {//duyet toan bo mang tra ve
    $responce->rows[$i]['id']=$row["ID_NhanVien"];
    $responce->rows[$i]['cell']=array($row["TenNhanVien"],$row["HoLotNhanVien"],$row["GioiTinh"],$row["ID_DanToc"],$row["ID_ChucDanh"]);
    $i++; 
}   
echo json_encode($responce);*/
$mangbacsy=explode(";",$_GET["mangbacsy"]);

$manglich=get_calendar();


/*foreach ($manglich as $row) {//duyet toan bo mang tra ve
    echo $row["ID_HenKham"]."  ".$row["ID_BSYeuCau"]."  ".$row["NgayHenKham"]->format('Y-m-d')."  ".$row["GioHenKham"]->format('H-i-s')."</br>";
}  */
/*for($bs=0;$bs<count($mangbacsy);$bs++){	
	foreach ($manglich as $row) {//duyet toan bo mang tra ve
   	 	$dulieugoc[$mangbacsy[$bs]][]= $row["ID_HenKham"].";".$row["ID_BSYeuCau"].";".$row["NgayHenKham"]->format('Y-m-d').";".$row["GioHenKham"]->format('H-i-s');
	}  
}*/
//print_r ($dulieugoc);
$dulieugoc=array();
$system_config=get_system_config();
$responce = new stdClass;
$responce->page = "";
$responce->total = "";
$responce->records = "";
$i=0;
$kiemtra=0;
$ii=0;
if($system_config["GD2_ThoiGianLamViec"]>24){
	$system_config["GD2_ThoiGianLamViec"]=24;
}
$gio0="<div class='hours'>".$system_config["GD2_ThoiGianBatDau"]."</div>"."<div class='minutes'>".$ii."0"."</div>";
$gio1="<div class='hours'>"."</div>"."<div class='minutes'>".($ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"])."</div>";
$gio2="<div class='minutes1'>".($ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"])."</div>";
$end_point = $system_config["GD2_ThoiGianLamViec"]*(60/$system_config["GD2_KhoangThoiGianHenKham_LHK"])-1;
$step=60/$system_config["GD2_KhoangThoiGianHenKham_LHK"]-1;
$GD2_ThoiGianBatDau=$system_config["GD2_ThoiGianBatDau"];
for ($i=0;$i<=$end_point;$i++){
	$row_grid_count=1;
	//$responce->rows[$i]['id']=$i;
	if($kiemtra==0){
			$kiemtra++;
			$thoigian=$GD2_ThoiGianBatDau.":".$ii."0";
			$ii++;			 
	}elseif( ($kiemtra>0) && ($kiemtra<$step) ){
		$kiemtra++;
		$thoigian=$GD2_ThoiGianBatDau.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];
		$ii++;			 
	}elseif($kiemtra==$step){
		$kiemtra=0;		
		$thoigian=$GD2_ThoiGianBatDau.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];	
		$GD2_ThoiGianBatDau++;
		$ii=0;
	}	
	 	for($bs=0;$bs<count($mangbacsy);$bs++){		 
			$dulieugoc[$thoigian][$mangbacsy[$bs]]="";		 
		} 
		
	
}

$i=0;
$kiemtra=0;
$ii=0;
$GD2_ThoiGianBatDau=$system_config["GD2_ThoiGianBatDau"];
for ($i=0;$i<=$end_point;$i++){
	$row_grid_count=1;
	$GD2_ThoiGianBatDau_tam=$GD2_ThoiGianBatDau;
	if(strlen($GD2_ThoiGianBatDau)==1){
		$GD2_ThoiGianBatDau_tam="0".$GD2_ThoiGianBatDau;		 
	} 
	if($kiemtra==0){
		$kiemtra++;
		$thoigian1=$GD2_ThoiGianBatDau_tam.":".$ii."0";
		$thoigian=$GD2_ThoiGianBatDau.":".$ii."0";
		$responce->rows[$i]['id']=$GD2_ThoiGianBatDau.":".$ii."0";	
		//$responce->rows[$i]['id']=$ii;
		$ii++;		 
	}elseif( ($kiemtra>0) && ($kiemtra<$step) ){
		$kiemtra++;
		$thoigian1=$GD2_ThoiGianBatDau_tam.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];
		$thoigian=$GD2_ThoiGianBatDau.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];
		$responce->rows[$i]['id']=$GD2_ThoiGianBatDau.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];
		//$responce->rows[$i]['id']=$ii;		
		$ii++;			 
	}elseif($kiemtra==$step){
		$kiemtra=0;	
		$thoigian1=$GD2_ThoiGianBatDau_tam.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];	
		$thoigian=$GD2_ThoiGianBatDau.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];	
		$responce->rows[$i]['id']=$GD2_ThoiGianBatDau.":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];	
		//$responce->rows[$i]['id']=$ii;
		$GD2_ThoiGianBatDau++;
		$ii=0;
	}	
	foreach ($manglich as $row) {//duyet toan bo mang tra ve
	    //echo $row["ID_BSYeuCau"]." -- ".$thoigian." = ".$row["GioHenKham"]->format('H:i')."<br>";
		if($thoigian1==$row["GioHenKham"]->format('H:i')){
			//echo $row["ID_BSYeuCau"]." -- ".$thoigian." = ".$row["GioHenKham"]->format('H:i')."<br>";
			$dulieugoc[$thoigian][$row["ID_BSYeuCau"]]= $row["ID_HenKham"].";".$row["TieuDe"].";".$row["DienThoaiLienHe"].";".$row["NguoiDatHen"].";".$row["NgayHenKham"]->format($_SESSION["config_system"]["ngaythang"]).";".$row["GioHenKham"]->format('H:i').";".$row["ID_BenhNhan"].";".$row["GhiChu"];		 
		}		 
	}
}
 $i=0;
 //print_r($dulieugoc);
 foreach ($dulieugoc as $key => $value) {//duyet toan bo mang tra ve
 		$tam=explode(":",$key);
		if($tam[1]=="00"){
			$tam="<div class='hours'>".$tam[0]."</div>"."<div class='minutes'>".$tam[1]."</div>";
		}else{
			$tam="<div class='hours'></div>"."<div class='minutes'>".$tam[1]."</div>";
		}
  
 		$row_grid[0]=$tam;
		for($bs=0;$bs<count($mangbacsy);$bs++){		 
			$row_grid[$bs+1]=$value[$mangbacsy[$bs]];	 
		} 
		$responce->rows[$i]['cell']=$row_grid;
		$i++;	 
 }

//print_r ($dulieugoc);

/*for ($i=0;$i<=$end_point;$i++){
	$row_grid_count=1;
	$responce->rows[$i]['id']=$i;
	if($kiemtra==0){
			$kiemtra++;
			$thoigian=$system_config["GD2_ThoiGianBatDau"].":".$ii."0";
			$ii++;			 
	}elseif( ($kiemtra>0) && ($kiemtra<$step) ){
		$kiemtra++;
		$thoigian=$system_config["GD2_ThoiGianBatDau"].":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];
		$ii++;			 
	}elseif($kiemtra==$step){
		$kiemtra=0;		
		$thoigian=$system_config["GD2_ThoiGianBatDau"].":".$ii*$system_config["GD2_KhoangThoiGianHenKham_LHK"];	
		$system_config["GD2_ThoiGianBatDau"]++;
		$ii=0;
	}	
	$row_grid[0]=$thoigian; 	
	 
	   foreach ($manglich as $row) {//duyet toan bo mang tra ve		
			if($thoigian==$row["GioHenKham"]->format('H:i')){
				//echo $thoigian."=".$row["GioHenKham"]->format('H:i')."  &&   ".$row["ID_BSYeuCau"]."=".$mangbacsy[$iii]."<br>";
				$row_grid[$row_grid_count]=$row["GioHenKham"]->format('H:i:s');				
			}else{
				$row_grid[$row_grid_count]=" ";
			}	 
		}
		$row_grid_count++;	
	
	$responce->rows[$i]['cell']=$row_grid;
	
	
}*/
   
echo json_encode($responce);
/*if($kiemtra==0){
		$kiemtra++;
		$responce->rows[$i]['cell']=array($gio0);
		$ii++;			 
	}elseif( ($kiemtra>0) && ($kiemtra<$step) ){
		$kiemtra++;
		$responce->rows[$i]['cell']=array($gio1);
		$ii++;			 
	}elseif($kiemtra==$step){
		$kiemtra=0;		
		$responce->rows[$i]['cell']=array($gio2);	
		$system_config["GD2_ThoiGianBatDau"]++;
		$ii=0;
	}	*/
 
function get_system_config(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$params = array('VarName','0','1000000','VarName','ASC','SysVars'," Category='lich_hen_kham'",'*');//tao param cho store
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_danh_muc_phong_ban);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 	
	foreach ($tam as $row) {//duyet toan bo mang tra ve
    	$system_config[$row["VarName"]]=$row["DefaultValue"];
	}  
	return $system_config;
}

function get_calendar(){
	$data= new SQLServer;//tao lop ket noi SQL
	$store_name="{call GD2_TABLEWITHPAGE_GETBY(?,?,?,?,?,?,?,?)}";//tao bien khai bao store
	$tam=convert_date($_GET["date"]);
	$params = array('ID_HenKham','0','100000000',' ID_BSYeuCau ASC',',GioHenKham ASC ','Lichhenkham'," NgayHenKham='".$tam."' AND HuyHen=0 and ID_LuotKham is null",'*');//tao param cho store
	$get_lich_kham=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($get_lich_kham);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$tam= $excute->get_as_array();//Tra ve mang toan bo data lay duoc 		  
	return $tam;
}
?>